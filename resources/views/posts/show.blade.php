@extends('template')

@section ('content')

<a href ="/newProjet/laravel2/public/posts" class="btn btn-danger">Return</a>
   <h1>{{$post->title}}</h1>
 
   
   <div>{{$post->body}}
   <hr>
     <small>Written on {{$post->created_at}}</small>
   </div>
 
@endsection
