  @extends('layouts.app')

@section('content')
<div class="wrapper pizza-details">
<a href="{{route('home')}}" class="back"><- Back to dashboard</a>

    <h2 class="card-title" style="" >Order list</h2>
  
    @foreach ($contacts as $contact)
     
  
        <p></p>
        <ul class="list-group">
        <button type="button" class="btn btn-success"> Order from <a href="{{route('contactitems',['id'=>$contact->id])}}">{{$contact->name}}</button>
           
          
         
        </ul>
    @endforeach
</div>
 
@endsection
