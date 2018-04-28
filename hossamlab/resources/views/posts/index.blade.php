@extends('layouts.master')


@section('content')

<center><h1>Posts Index</h1></center>

<center><a href="/posts/create" class="btn btn-success">Create Post</a></center>

<table class="table table-bordered">
	<thead>
      <tr>
        <th>Pagination Bouns</th>
        <th>Title</th>
        <th>Posted By</th>
        <th>Created At</th>
        <th>Actions</th>
      </tr>
    </thead>

@foreach ($posts as $post)
<tbody>
    <tr>
    <td>{{ $post->id }}</td>	
    <td>{{ $post->title }}</td>
    <td>{{ $post->user->name }}</td>
    <td>{{ $post->created_at }}</td>
    <td> 
    	<a href="/post/{{ $post->id }}" class="btn btn-success">View</a>
    	<a href="posts/{{ $post->id }}/edit" class="btn btn-info">Edit</a>
    	<!-- <a href="/post/{{ $post->id }}" class="btn btn-danger">Delete</a> -->

        <form  action="/posts/{{ $post->id }}" method="Post">
        {{ method_field('DELETE') }}
        {{csrf_field()}}
        <button type="submit" class="btn btn-danger">Delete</button>
        </form>

    </td>
	</tr>
@endforeach
</tbody>
  </table>
@endsection