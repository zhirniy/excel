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
	//method create MSQL record and sends email;
    public function link(Request $request)
    {
    	//Create MSQL record
      $order =  Order::create($request->all());
      //Create session variable
    	Session::flash('download.in.the.next.request', "link2/$order->id");
      
      //Create sends email
        $objDemo = new \stdClass();
        $objDemo->order_id = $order->id;
        $objDemo->sender = 'Website Excel';
        $objDemo->receiver = Auth::user()->name;
        Mail::to(Auth::user()->email)->send(new DemoEmail($objDemo));
      
      //return thanks page
    	return view('thanks_page')->with('data', [
    		'id'=>$order->id,
    		'width'=>$order->width,
    		'length'=> $order->length,
    		'perimeter'=> $order->perimeter
    		]);
    }
   	
//Method create excel file
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