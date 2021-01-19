   @extends('layouts.app')

        @section('content')
        <button class="btn btn-success"><a href="{{route('show')}}" class="back">back</a></button>
        <h2 class="card-title" style="" >contact list</h2>
          
        <ul class="list-group">
            <li class="list-group-item">name :{{$contact->name}}</li>
            <li class="list-group-item">email :{{$contact->email}}</li>
            <li class="list-group-item">password: {{$contact->password}}</li>
            <li class="list-group-item">comment:{{$contact->comment}}</li>
         
        </ul>
        
        @endsection