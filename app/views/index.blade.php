<!-- Use blade to include the master template -->
@extends('_master')


<!-- Name of the childe view we will call -->
@section('hero')
	<h1>Welcome</h1>
	<h2>The Developer's Best Friend</h2>
	<p>This application is a handy little tool to aid in the generation of lorem ipsum and random users. Take a deep dive and scroll-onward!</p>
@stop	

@section('ipsum')	
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
@stop

@section('ipsum-example')
	<div class="block-inner ipsum-example">
    	
	</div>
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
	
@stop

@section('user')	
	<p class="type">User Generator</p>
	<h1>User Generator</h1>
	<h2>Creating fake users is time consuming - the User Generator will help.</h2>
	<p class="date">How to use.</p>
	<h3>Basic</h3>	
	<p>Get your fake users the good old fashion way and use our form. All you need to do is let us know the number of user and we do the rest.</p>
	<h3>API</h3>
	<p>Feel free to call our API. We recommend AJAX to get the job done.</p>
@stop

@section('user-example')
	
	<div class="cards">
	  
	
	 
	</div>
	
	
	
	<script>
		$.ajax({
			url: '<?php echo URL::asset('/user/3'); ?>',
			dataType: 'json',
			error: function(textStatus, errorThrown, jqXHR ){ 
				alert('error pulling');						
			},
			type: "GET",
			success: function(json){
				for(i=0; i < json.length; i++){
					$('.cards').append(
					'<div class="card">'
				    +'<div class="card-image">'
				    +'<img src="'+json[i].image+'" alt="">'
				    +'</div>'
				    +'<div class="card-header">'
				      +json[i].name
				    +'</div>'
				    +'<div class="card-copy">'
				      +'<p>'+json[i].address+'</p>'
				    +'</div>'
				    +'<div class="card-stats">'
				      +'<ul>'
				        +'<li>98<span>Items</span></li>'
				        +'<li>298<span>Things</span></li>'
				        +'<li>923<span>Objects</span></li>'
				      +'</ul>'
				    +'</div>'
				  +'</div>'
				  );
			   }
			}
		});	
	</script>
@stop