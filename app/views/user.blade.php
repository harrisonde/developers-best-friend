<!-- Use blade to include the master template -->
@extends('_master')

<!-- Name of the child view we will call -->
@section('user')
<!-- ipsum article -->
	<style>
	.cards{
		padding-top: 2em;	
	}
	.card{
		text-align: center;
	}
	img.user{
		border-radius: 50%;
		padding-top: 5px;
		width: 160px;
	}
	.users{
		padding-bottom: 3em;
	}
	</style>
	<article class="type-system-serif">
		<p class="type">Lorem Ipsum Generator</p>
		<h1>Users? Heck yes, we got em!</h1>
		<h2>Step right up and get you some. Users that is...</h2>
		<p>This little bugger is a handy tool to create a fake user. Please let me know the number of users you need and I'll do the rest.</p>	
		<!-- a form in Blade / Laravel Markup -->
		{{ Form::open() }}
			{{ Form::label('user', 'Number of fake users') }}
			{{ Form::text('user') }}
			{{ Form::submit('Click Me!') }}
		{{ Form::close() }}
		<!-- display a user -->
		@if (isset($users))
			<div class="cards"></div>
				<div class="users">
				@foreach($users as $user) 
					<div class="card">
						<img class="user" src=" {{ $user['image'] }} "/><br>
						<div class="card-header">
							{{ $user['name'] }}<br>
						</div>
						<div class="card-copy">
							{{ $user['address'] }}<br>
						</div>
					</div>
				@endforeach
				</div>
			</div>	
		@endif	
	</article>
@stop