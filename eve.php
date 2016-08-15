<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" />
		<title>Environment Variable Echo PHP</title>
	</head>

	<body>
		<p>This program will print out all the environment variables from the request and related values. </p>
		<?php 
			print_r($_ENV);
			print_r($_POST);
			print_r($_GET); 

			var_dump($_ENV);
			var_dump($_POST);
			var_dump($_GET); 
		?>
	</body>
</html>