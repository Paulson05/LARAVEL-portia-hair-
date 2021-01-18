
@extends('layout')

@section('content')

<div class="container" style="margin-left:20%">
  <div class="container justify-content-center">
   
    <h2 class="card-title" style="" >Make your Order</h2>
 <form action="/pages/order" method= "POST">
 @csrf
 <div class="form-group">
  <label for="text">Your Name :</label>
  <input type="text" class="form-control" placeholder="Enter name" name ="name" id="name" style="width: 60%">
 </div>
 <div class="form-group">
   <label for="text">Phone number:</label>
   <input type="text" class="form-control" placeholder="Enter name" name ="phone_number" id="phone_number" style="width:60% ">
  </div>
  <div class="form-group">
   <label for="text">Address:</label>
   <input type="text" class="form-control" placeholder="Enter name" name ="address" id="address" style="width: 60%">
  </div>
 <div class="form-group">
  <label for="pwd">choose hair type:</label><br>
  <select name="type" id="type" style="width: 60%">
   <option value="bone straight">Bone straight</option>
   <option value="bone straight">curl</option>
   <option value="bone straight">amigo</option>
   <option value="bone straight">ebony</option>
  </select>
 </div>
 <div class="form-group">
   <label for="pwd">Choose Range:</label><br>
   <select name="range" id="range" style="width: 60%">
    <option value="bone straight">16inch</option>
    <option value="bone straight">20inch</option>
    <option value="bone straight">22inch</option>
    <option value="bone straight">25inch</option>
    <option value="bone straight">30inch</option>
    <option value="bone straight">40inch</option>
   </select>
  </div>
  <div class="form-group">
   <label for="pwd">Color:</label><br>
   <select name="color" id="color" style="width: 60%">
    <option value="bone straight">Black</option>
    <option value="bone straight">Gold</option>
    <option value="bone straight">Pink</option>
   </select>
  </div>
 
   
 <button type="submit" class="btn btn-primary" style="margin-top: 10px !important">Order Hair</button>
 </form>  
 </div>
</div>
@endsection