<!-- Use blade to include the master template -->
@extends('_master')

<!-- Name of the child view we will call -->
@section('contents')
<h1>Users? Heck yes, we got em!</h1>
	<h2>Step right up and get you some. Users that is...</h2>
	<p>This little bugger is a handy tool to create a fake user. Please let me know the number of users you need and I'll do the rest.</p>
	<!-- display a user -->
	@if (isset($users))
		<div class="users">
		@foreach($users as $user) 
			<img class="user" src=" {{ $user['image'] }} "/><br>
			{{ $user['name'] }}<br>
			{{ $user['address'] }}<br>
		@endforeach
		</div>
	@endif	
	
	<!-- a form in Blade / Laravel Markup -->
	{{ Form::open() }}
		{{ Form::label('user', 'Number of fake users') }}
		{{ Form::text('user') }}
		{{ Form::submit('Click Me!') }}
	{{ Form::close() }}
	

@stop