<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" />
		<title>Hello World PHP Style</title>
	</head>

	<body>
		<?php 
		  $D = exec('date /T');
  		  $T = exec('time /T');
  		  $DT = strtotime(str_replace("/","-",$D." ".$T));
		  print "Hello Web World from Language PHP on "; 
		  echo(date("Y-m-d H:i:s",$DT));
		?>
	</body>
</html>