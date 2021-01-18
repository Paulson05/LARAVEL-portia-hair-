
@extends('layout')

@section('content')

<div class="container justify-content-center">
   
   <h2 class="card-title">Order list</h2>
<form action="/pages/post" method= "POST">
@csrf
<div class="form-group">
 <label for="text">Your Name :</label>
 <input type="text" class="form-control" placeholder="Enter name" name ="name" id="name" style="width: 200px">
</div>
<div class="form-group">
  <label for="text">Phone number:</label>
  <input type="text" class="form-control" placeholder="Enter name" name ="name" id="name" style="width: 200px">
 </div>
 <div class="form-group">
  <label for="text">Address:</label>
  <input type="text" class="form-control" placeholder="Enter name" name ="name" id="name" style="width: 200px">
 </div>
<div class="form-group">
 <label for="pwd">choose hair type:</label><br>
 <select name="type" id="type" style="width: 200px">
  <option value="bone straight">bone straight</option>
  <option value="bone straight">curl</option>
  <option value="bone straight">amigo</option>
  <option value="bone straight">ebony</option>
 </select>
</div>
<div class="form-group">
  <label for="pwd">Choose Range:</label><br>
  <select name="type" id="type" style="width: 200px">
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
  <select name="type" id="type" style="width: 200px">
   <option value="bone straight">black</option>
   <option value="bone straight">gold</option>
   <option value="bone straight">pink</option>
  </select>
 </div>

  
<button type="submit" class="btn btn-primary" style="margin-top: 10px !important">order hair</button>
</form>  
</div>
@endsection