

        @extends('layouts.app')

@section('content')
<button class="btn btn-success"><a href="{{route('show')}}" class="back">back</a></button>
<h2 class="card-title" style="" >Order list</h2>
  
<ul class="list-group">
    <li class="list-group-item">name :{{$item->name}}</li>
    <li class="list-group-item">Phone number :{{$item->phone_number}}</li>
    <li class="list-group-item">Address: {{$item->address}}</li>
    <li class="list-group-item">Hair type:{{$item->type}}</li>
    <li class="list-group-item">Hair range:{{$item->range}}</li>
    <li class="list-group-item">color:{{$item->color}}</li>
 
</ul>
   <form action="{{route('destroy',['order'=>$item->id])}}" method="POST">
       @csrf
       @method('DELETE')
       <button type="submit">complete orders</button>
     
   </form>
@endsection
