<!-- Use blade to include the master template -->
@extends('_master')

<!-- Name of the child view we will call -->
@section('contents')
<h1>Users? Heck yes, we got em!</h1>
	<h2>Step right up and get you some. Users that is...</h2>
	<p>This little bugger is a handy little tool create fake user. Please let me know the number of users you need and I'll do the rest.</p>

	<!-- a form in Blade / Laravel Markup -->
	{{ Form::open() }}
		{{ Form::label('user', 'Number of lines to user') }}
		{{ Form::text('user') }}
		{{ Form::submit('Click Me!') }}
	{{ Form::close() }}
	
	<!-- display a user -->
	@if (isset($users))
		@foreach($users as $user) 
			<img src=" {{ $user['image'] }} ">
			{{ $user['name'] }}
			{{ $user['address'] }}
		@endforeach
	@endif	
@stop