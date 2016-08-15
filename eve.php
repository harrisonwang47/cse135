<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" />
		<title>Environment Variable Echo PHP</title>
	</head>

	<body>
		<p>This program will print out all the environment variables from the request and related values. </p>
		<?php 
			#print_r($_ENV);
			#print_r($_POST);
			#print_r($_GET); 
			foreach ($_POST as $key => $value)
        		echo $key.'='.$value.'<br />';
        	foreach ($_GET as $key => $value)
        		echo $key.'='.$value.'<br />';
        	foreach ($_ENV as $key => $value)
        		echo $key.'='.$value.'<br />';
		?>
	</body>
</html>