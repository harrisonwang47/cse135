<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" />
		<title>Hello World PHP Style</title>
	</head>

	<body>
		<?php 
		  /*$D = exec('date /T');
  		  $T = exec('time /T');
  		  $DT = strtotime(str_replace("/","-",$D." ".$T));*/
  		  date_default_timezone_set("America/California");
		  print "Hello Web World from Language PHP on "; 
		  echo(date('m-d-Y h:i:s'));
		?>
	</body>
</html>