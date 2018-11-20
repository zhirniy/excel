@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-3"></div>
         <div class="col-md-6" style="text-align:center;">
              <h1>Thanks you, {{ Auth::user()->name }}!!!</h1>
              <h3>Your order: {{$data['id']}}</h3>
              <p>Your width: {{$data['width']}}</p>
              <p>Your length: {{$data['length']}}</p>
              <p>Your perimeter: {{$data['perimeter']}}</p>
              <a href="{{url('/')}}">Сделать ещё заказ</a>
           </div>
    </div>
</div>
@endsection