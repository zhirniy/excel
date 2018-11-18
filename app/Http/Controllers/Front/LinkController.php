<?php
namespace App\Http\Controllers\Front;
use Illuminate\Http\Request;
use DB;
use App\order;
use Input;
use Excel;
use Session;
use Redirect;
use App\Http\Controllers\Controller;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;
use Auth;

 
class LinkController extends Controller
{
	//private static $request_;
    public function link(Request $request)
    {
    	$order =  Order::create($request->all());
    	Session::flash('download.in.the.next.request', "link2/$order->id");
      
      $objDemo = new \stdClass();
        $objDemo->demo_one = 'Demo One Value';
        $objDemo->demo_two = 'Demo Two Value';
        $objDemo->sender = 'SenderUserName';
        $objDemo->receiver = Auth::user()->name;
 
       Mail::to(Auth::user()->email)->send(new DemoEmail($objDemo));
      

    	return view('thanks_page')->with('data', [
    		'id'=>$order->id,
    		'width'=>$order->width,
    		'length'=> $order->length,
    		'perimeter'=> $order->perimeter
    		]);
    }
   	

	public function link2($id)
    {
    	$data = order::where('id', $id)->get();
		 Excel::create('itsolutionstuff_example', function($excel) use ($data) {
			$excel->sheet('mySheet', function($sheet) use ($data)
	        {
				$sheet->fromArray($data);
	        });
		})->download('xls');

	}
	
 }