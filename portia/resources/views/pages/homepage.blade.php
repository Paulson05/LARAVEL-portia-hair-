
@extends('layout')

@section('content')
<div class="card-body text-center" style="margin-top:200px !important">
  @if($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
  @endif
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="/pages/contact" class="btn btn-primary">Contact Us</a>
    <a href="/pages/contact" class="btn btn-secondary">Make Order</a>
  </div>
</div>
<div class="container">
  
@endsection
