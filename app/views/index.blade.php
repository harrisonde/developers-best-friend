<!-- Use blade to include the master template -->
@extends('_master')


<!-- Name of the childe view we will call -->
@section('hero')
	<!-- hero -->
	<div class="hero">
		<div class="hero-inner">
	    	<a href="" class="hero-logo"><img src="images/icon/logo@2x.png" alt="logo" width="74" height="79"></a>
			<div class="hero-copy">
				<h1>Welcome</h1>
				<h2>The Developer's Best Friend</h2>
				<p>This application is a handy little tool to aid in the generation of lorem ipsum and random users. Take a deep dive and scroll-onward!</p>
			</div>
		</div>	
	</div>
@stop	



@section('ipsum')	
	<!-- ipsum article -->
	<article class="type-system-serif">
		<p class="type">Lorem Ipsum Generator</p>
		<h1>Lorem Ipsum Generator</h1>
		<h2>Creating placeholder text is super annoying. The Lorem Ipsum Generator will help get the job done, fast.</h2>
		<p class="date">How to use.</p>
		<h3>Basic</h3>
		<p>Get your lorem ipsum the good old fashion way and use our form. All you need to do is let us know the number of paragraphs of placeholder text you need - we do the rest.</p>
		<h3>API</h3>
		<p>Feel free to call our API on the fly and pull a few lines of lorem ipsum. Using AJAX is one way you can ask the generator for lorem ipsum.</p>
		
		<pre class="prettyprint">
		$.ajax({
				url: '<?php echo URL::asset('/text/2'); ?>',
				dataType: 'json',
				error: function(textStatus, errorThrown, jqXHR ){ 
				alert('error pulling');				
			},
		type: "GET",
				success: function(json){
					alert(json);
			}
			}); 
		</pre>	
	</article>
@stop



@section('ipsum-example')
<!-- ipsum example -->
<div class="block">
	<div class="block-inner ipsum-example"></div>
	<script>
		$.ajax({
			url: '<?php echo URL::asset('/text/1'); ?>',
			dataType: 'json',
			error: function(textStatus, errorThrown, jqXHR ){ 
				alert('error pulling');						
			},
			type: "GET",
			success: function(json){
				$('.ipsum-example').append('<blockquote>'+json+'</blockquote>');
			}
		});	
	</script>
</div>
@stop



@section('user')
	<!-- article -->
	<article class="type-system-serif">	
		<p class="type">User Generator</p>
		<h1>User Generator</h1>
		<h2>Creating fake users is time consuming - the User Generator will help.</h2>
		<p class="date">How to use.</p>
		<h3>Basic</h3>	
		<p>Get your fake users the good old fashion way and use our form. All you need to do is let us know the number of user and we do the rest.</p>
		<h3>API</h3>
		<p>Feel free to call our API. We recommend AJAX to get the job done.</p>
		<pre class="prettyprint">	
		$.ajax({
				url: '<?php echo URL::asset('/user/1'); ?>',
				dataType: 'json',
				error: function(textStatus, errorThrown, jqXHR ){ 
					alert('error pulling');						
				},
				type: "GET",
				success: function(json){
					alert(json);
				}
			});	
		</pre>
	</article>
@stop



@section('user-example')
	<style>
		.cards img{
			border-radius: 50%;
			padding-top: 11px;
			width: 155px;
		}
		.cards .card{
			text-align: center;
		}
		@media (max-width: 859px) {
			.cards .card{
				margin-left: 1.5em;
				margin-right: 1.5em;
			}
		}
	</style>
	<div class="cards"></div>
	
	<script>
		$.ajax({
			url: '<?php echo URL::asset('/user/3'); ?>',
			dataType: 'json',
			error: function(textStatus, errorThrown, jqXHR ){ 
				$('.cards').append('error loading fake users');						
			},
			type: "GET",
			success: function(json){	
				for(i=0; i < json.length; i++){
					$('.cards').append(
					'<div class="card">'
				    
				    +'<img src="'+json[i].image+'" alt="">'
				   
				    +'<div class="card-header">'
				      +json[i].name
				    +'</div>'
				    +'<div class="card-copy">'
				      +'<p>'+json[i].address+'</p>'
				    +'</div>'
				    +'<div class="card-stats">'
				    +'</div>'
				  +'</div>'
				  );
			   }
			}
		});	
	</script>
@stop