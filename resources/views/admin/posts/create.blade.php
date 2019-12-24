@extends('template')

@section('title')
    Post
@endsection

@section('content')
<h1>Show Record | <a href="{{route('posts.create')}}">Create New Post</a></h1>

<div>
<form action="{{route('posts.store')}}" method="POST">
	@csrf
	<p>Title</p>
	<input type="text" name="title">
	<p>Description</p>
	<textarea name="description" id="" cols="30" rows="10"></textarea>
	<br><br>
	<input type="submit" value="Create Post">
</form>
</div>
@endsection