@extends('template')

@section('title')
    Post
@endsection

@section('content')
<h1>Update Record | <a href="{{route('posts.create')}}">Create New Post</a></h1>

<div>
<form action="{{route('posts.update', $data->id)}}" method="POST">
	@csrf
	@method('PUT')
	<p>Title</p>
	<input type="text" name="title" value="{{$data->title}}">
	<p>Description</p>
	<textarea name="description" id="" cols="30" rows="10">{{$data->description}}</textarea>
	<br><br>
	<input type="submit" value="Update Post">
</form>
<a href="{{route('posts.index')}}">Back</a>
</div>
@endsection