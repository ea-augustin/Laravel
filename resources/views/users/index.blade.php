@extends('template')

@section ('content')
   <h1>Users</h1>
   @if(count($users)>0)
   @foreach($users as $user)
   <div class="card card-body bg-light">
   <h3>{{$user->name}}</h3></div>
 
   @endforeach
   @else
   <p>No users<p>
   @endif
@endsection
