<!-- Use blade to include the master template -->
@extends('_master')

<!-- Name of the child view we will call -->
@section('contents')
	
	<!-- display a user -->
	@if (isset($users))
		
		<?php 
			$jsonPretty = new Camspiers\JsonPretty\JsonPretty;
			echo $jsonPretty->prettify($users);
		
		
		?>
	@endif	
@stop