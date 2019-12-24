@extends('template')

@section('title')
    Post
@endsection

@section('content')
<h1>Show Record | <a href="{{route('posts.create')}}">Create New Post</a></h1>

<div>
	<p>
		ID: {{$data->id}} <br>
		Title: {{$data->title}}<br>
		Slug: {{$data->slug}} <br>
		Description: {{$data->description}} <br>
	</p>
</div>
<div>
<h3>Comments</h3>
@foreach($data->comments as $com)
	<p>{{$com->comment}}</p>
@endforeach
</div>
@endsection