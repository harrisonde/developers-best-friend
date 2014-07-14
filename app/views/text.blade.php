<!-- Use blade to include the master template -->
@extends('_master')

<!-- Name of the child view we will call -->
@section('hero')
	<!-- ipsum article -->
	<article class="type-system-serif">
		<p class="type">Lorem Ipsum Generator</p>
		<h1>So, you need a little Lorem Ipsum?</h1>
		<h2>My friend, you have come to the right place!</h2>
		<p>This application is a handy little tool to aid in the generation of Lorem Ipsum. Please let me know the number of lines of text you need and I'll do the rest.</p>

		<!-- a form in Blade / Laravel Markup -->
		{{ Form::open() }}
			{{ Form::label('lines', 'Number of lines to generate:') }}
			{{ Form::text('lines') }}
			{{ Form::submit('Click Me!') }}
		{{ Form::close() }}
		<!-- print text -->
		@if (isset($text))
			{{ $text }}
		@endif
	</article>
@stop