<!DOCTYPE html> 
<html>
<head>
  <meta charset="UTF-8">
  <title>Migros Kundenrat - Ideas</title>
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>
</head>
 
<body> 
 
<div data-role="page" id="ideas">
 
	<div data-role="header">
		<h1>Welcome</h1>
	</div>
 
	<div data-role="content">	
		<h2> Ideas </h2>
		<div id="ideas_container"></div>
		<a href="home.php" id="ideas">Back</a>
		<a href="#" id="logout">Logout</a>
	</div>


 
</div>


<script>
	$(document).on('pagebeforeshow', function(e, data){    
	    $.getJSON( "http://kundenrat.gmaare.migros.ch/migros/mobile/get_ideas.php?jsoncallback=?")
		.done(function(response) {
			console.log(Object.keys(response.ideas).length);
			//alert(respuestaServer.estado);
			if(response.estado == "ok"){

			  	//alert(respuestaServer.user.username);
			 	/// si la validacion es correcta, muestra la pantalla "home"
			 	var localData = JSON.stringify(response);
	        	window.localStorage.setItem('ideas', localData);

	        	var ideas = '';
	        	for (var key in response.ideas) {
	        	//for (var i = 0; i < Object.keys(response.ideas).length; i++) {
	        		ideas += '<article>' + response.ideas[key].title + '</article>';
	        	};
	        	//$('#ideas_container').html(ideas);
	        	$('#ideas_container').html(ideas);

			 	//window.localStorage.setItem("user_id", respuestaServer.user.id);
			 	
			}else{
			  /// ejecutar una conducta cuando la validacion falla
			}
		})
		return false;
	});
</script>