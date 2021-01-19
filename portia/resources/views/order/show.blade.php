@extends('layouts.app')

@section('content')
<div class="wrapper pizza-details">

  
    @foreach ($orders as $order)
     
      <h2 class="card-title" style="" >Order list</h2>
        <p>oder from -> {{$order->name}} <a href=""></p>
     
        <p>Phone number {{$order->phone_number}}</p>
        <p>Address {{$order->address}}</p>
        <p>Hair tyPE	 {{$order->type}}</p>
        <p>Hair range {{$order->range}}</p>
        <p>color{{$order->color}}</p>
    @endforeach
</div>
 
<a href="/pizzas" class="back"><- Back to all order</a>
@endsection
