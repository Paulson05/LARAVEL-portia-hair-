
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
    <a href="/contact" class="btn btn-primary">Contact Us</a>
    <a href="/create" class="btn btn-secondary">Make Order</a>
  </div>
</div>

  <div class="container">
    <div class="card-body text-center" style="margin-top:100px !important">
 
      <h5 class="card-title ">About Us</h5>
      <p class="card-text">WigsRoyal Hair Products Co.,Ltd is here to help you every step of the way. Please feel free to contact us at anytime for any questions or placing the orders. If you would like to speak with someone directly, please contact us at the email address or telephone number below. 　
  
        We have Experienced Lace Wigs Experts on Staff,</p>
     
    </div>
  </div>
  </div>
  <div class="container" style="background-color:rgb(103, 62, 170); ">
    <div class="card-body text-center" style=" margin-top:100px !important">
 
      <h5 class="card-title ">Contact Us</h5>
      <p class="card-text">WigsRoyal Hair Products Co.,Ltd is here to help you every step of the way. Please feel free to contact us at anytime for any questions or placing the orders. If you would like to speak with someone directly, please contact us at the email address or telephone number below. 　
  
        We have Experienced Lace Wigs Experts on Staff,</p>
     
    </div>
  </div>
  </div>

  
@endsection
