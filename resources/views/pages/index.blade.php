@extends('template')

@section('title')
      Welcome
@endsection


@section('content')
<div class="jumbotron text-center">
<h1>Welcome To My site</h1>
<p>This is the home page"</p>
<p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a><a class="btn btn-success btn-lg" href="/register">Register</a></p>
</div>
 @endsection