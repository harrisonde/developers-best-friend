<!-- Use blade to include the master template -->
@extends('_master')


<!-- Name of the childe view we will call -->
@section('contents')
	<h1>Welcome</h1>
	<h2>The Developer's Best Friend</h2>
	<p>This application is a handy little tool to aid in the generation of Lorem Ipsum and random users. Take a deep dive and click-onward!</p>
	<ul>
		<li>
			<a href="/text">Lorem Ipsum Generator</a>
		</li>
		<li>
			<a href="/user">Random User Generator</a>
		</li>
	</ul>
	<p>I also give JSON too. You can git a little JSON like so:</p>
	<ul>
		<li>Text Generator</li>
		<ul>
			<li><a href="/text/3">/text/{ipsums} - Return two (2) paragraphs of Lorem Ipsum.</a></li>
		</ul>
		<li>User Generator</li>
		<ul>
			<li><a href="/user/3">/user/{users} - Return three (3) users.</a></li>
		</ul>
	</ul>
@stop		