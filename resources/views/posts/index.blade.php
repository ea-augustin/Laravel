@extends('template')

@section ('content')
   <h1>Posts</h1>
   @if(count($posts)>1)
   @foreach($posts as $post)
   <div class="card card-body bg-light">
   <h3><a href="/newProjet/laravel2/public/posts/{{$post->id}}">{{$post->title}}</a></h3>
   
   </div>
   
   @endforeach
   @else
   <p>No posts<p>
   @endif
@endsection
