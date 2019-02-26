@extends('template')

@section ('content')
   <h1>Users</h1>
   @if(count($users)>0)
   @foreach($users as $user)
   <div class="card card-body bg-light">
   <h3><a href="/newProjet/laravel2/public/users/{{$user->id}}">{{$user->name}}</a></h3></div>
 
   @endforeach
   @else
   <p>No users<p>
   @endif
@endsection
