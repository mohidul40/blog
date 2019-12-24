@extends('template')

@section('title')
    Post
@endsection

@section('content')
<h1>Post page | <a href="{{route('posts.create')}}">Create New Post</a></h1>

<table>
	<tr>
		<td>ID</td>
		<td>Title</td>
		<td>Slug</td>
		<td>Action</td>
	</tr>
@foreach($data as $row)
	<tr>
		<td>{{$row->id}}</td>
		<td>{{$row->title}}</td>
		<td>{{$row->slug}}</td>
		<td>
			<a href="{{route('posts.show', $row->id)}}">View</a>
			<a href="{{route('posts.edit', $row->id)}}">Edit</a>
			<a href="">Delete</a>
			<form action="{{route('posts.destroy', $row->id)}}" method="POST" onsubmit="return confirm('Ary You Sure You want to Delete')">
				@csrf
				@method('delete')
				<input type="submit" value="Delete">
			</form>
		</td>
	</tr>
@endforeach
</table>
@endsection