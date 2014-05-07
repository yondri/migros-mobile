<div data-role="page" id="user">
 
	<div data-role="header" id="home_header">
		<h1>Welcome</h1>
	</div>
 
	<div data-role="content">	
		<h2> Hello, <?php echo $_GET['username']; ?> </h2>
		<a href="#" id="logout">Logout</a>
	</div>


 
</div>

<script>
	$('#logout').click(function(){
		window.localStorage.removeItem("respuestaServer");
		$.mobile.changePage("#inicio");
	});
</script>