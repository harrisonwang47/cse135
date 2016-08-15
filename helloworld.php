<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso- 8859-1" />
		<title>Hello World PHP Style</title>
	</head>

	<body>
		<?php $localtime = new DateTime("now", new DateTimeZone('America/California'));
		  print "Hello Web World from Language PHP on" echo $localtime -> format('m/d/Y, H:i:s');
		?>
	</body>

</html>