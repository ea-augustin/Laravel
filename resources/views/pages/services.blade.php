@extends('template')

@section('title')
     Services
@endsection



@section('content')
<h1>{{$title}}</h1>
<p> I promise there will be more services soon!</p>
@if(count($services) > 0)
<ul>
  @foreach($services as $service)
  <li> {{$service}} </li>
  @endforeach
</ul>
@endif
@endsection


