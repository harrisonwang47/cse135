<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" />
		<title>Hello World PHP Style</title>
	</head>

	<body>
		<?php 
		  $dt = new DateTime("now", new DateTimeZone('America/California'));
		  print "Hello Web World from Language PHP on "; 
		  echo $dt->format('m/d/Y, H:i:s');
		?>
	</body>
</html>