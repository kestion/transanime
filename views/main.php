<!DOCTYPE HTML>

<html>

	<head>
	
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">
	
		<title>Transanimand</title>
	
		<script src="animate/jquery-1.4.js" type="text/javascript"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
		<script src="animate/jquery.anchorScroll.js" type="text/javascript"></script>
		<script type="text/javascript" src="animate/main.js"></script>
		<script>$(document).ready(function() {
		 
		    //Custom FX
		    $("#link").$anchorScroll({fx: "easeOutBounce"});
		  });</script>
	
	</head>

	<body>
	
		<?php 
			if (isset($template))
			{
				include 'templates/'.$template.'.php'; //Inclusion des templates selon l'action
			}	
			else 
			{
				include 'templates/home.php'; //Inclusion par défaut du template de connexion.
			}	
		?>

	</body>

</html>