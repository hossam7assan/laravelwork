@extends('layouts.master')

@section('content')

<center><h1>Post Index Details</h1></center>


<div class="container">
  <h2>Post Info</h2>
  <div class="panel panel-default">
    <div class="panel-body">
    	Post title is:-  {{ $post->title }} <br>
    	Post Description:-<br>
    	 {{ $post->description }} <br>
    </div>
  </div>
</div>


<div class="container">
  <h2>Post Creator Info</h2>
  <div class="panel panel-default">
    <div class="panel-body">
    	Name       :  {{ $post->user->name }} <br> 
    	Email      : {{ $post->user->email }} <br>
    	Created At : 
    	 
    </div>
  </div>
</div>
<center><a href="/posts" class="btn btn-success">Home</a></center>

@endsection