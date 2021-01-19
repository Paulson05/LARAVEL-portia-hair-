
@extends('layout')

@section('content')

<div class="container justify-content-center" style="margin-top:10px !important">
   
   <h2 class="card-title">Contact US</h2>
<form action="/pages/contact" method= "POST">
@csrf
<div class="form-group">
  <label for="email">Name:</label>
  <input type="text" class="form-control" placeholder="Enter email" name ="name" id="name" style="width: 450px" required>
 </div>
<div class="form-group">
 <label for="email">Email address:</label>
 <input type="email" class="form-control" placeholder="Enter email" name ="email" id="email" style="width: 450px" required>
</div>
<div class="form-group">
 <label for="pwd">Password:</label>
 <input type="password" class="form-control" placeholder="Enter password"  name ="password"  id="pwd"  style="width: 450px" required>
</div>
<div class="form-group">
<label for="comment">Comment:</label>
<textarea class="form-control" rows="5"  name ="comment"  id="comment"  style="width: 450px" required></textarea>
</div>
<div class="form-group form-check">
 <label class="form-check-label">
   <input class="form-check-input" type="checkbox"> Remember me
 </label>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>  
</div>
@endsection