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
 
<div data-role="page" id="home">
 
	<div data-role="header">
		<h1>Welcome</h1>
	</div>
 
	<div data-role="content">	
		<h2> Hello, <?php echo $_GET['username']; ?> </h2>
		<a href="#" id="ideas">Ideas</a>
		<a href="#" id="logout">Logout</a>
	</div>


 
</div>




<script>
	$('#ideas').click(function(){
		$.mobile.changePage("ideas.php");
	});

	$('#logout').click(function(){
		window.localStorage.removeItem("respuestaServer");
		$.mobile.changePage("#inicio");
	});
</script>