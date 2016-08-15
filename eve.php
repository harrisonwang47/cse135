<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" />
		<title>Environment Variable Echo PHP</title>
	</head>

	<body>
		<p>This program will print out all the environment variables from the request and related values. </p>
		<?php var_dump( get_defined_vars() );?>
	</body>
</html>