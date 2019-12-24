<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title') | Laravel 6</title>
	<link rel="stylesheet" href="{{asset('public/css/style.css')}}">
</head>
<body>
	<header>
		<h1>Welcom to AIT Soft</h1>
		<nav>
			<a href="{{ url('/') }}">Home</a>
			<a href="{{ url('/about') }}">About Us</a>
			<a href="{{ url('/contact') }}">Contact Us</a>
			<a href="#">FAQ</a>
			<a href="#">Blog</a>
		</nav>
	</header>
	<section class="main_content">

		@if(count($errors)> 0)
			<ul>
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
			</ul>
		@endif

		@if(Session::has('success'))
			<p>{{Session::get('success')}}</p>
		@endif

		@if(Session::has('danger'))
			<p>{{Session::get('danger')}}</p>
		@endif

		@yield('content')

	</section>
	<footer>
		<p>copy@2019 allright reserver.</p>
	</footer>
</body>
</html>