@extends('layouts.app')
@section('content')
      <h1>Thanks you, {{ Auth::user()->name }}!!!</h1>
      <h3>Your order: {{$data['id']}}</h3>
      <p>Your width: {{$data['width']}}</p>
      <p>Your length: {{$data['length']}}</p>
      <p>Your perimeter: {{$data['perimeter']}}</p>
      <a href="{{url('/home')}}">Сделать ещё заказ</a>

@endsection