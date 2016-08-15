<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" />
		<title>Hello World PHP Style</title>
		<style>
			#topbar { border-bottom:4px solid #<?php echo $r.$g.$b; ?>; }
		</style>
	</head>

	<body>
		<?php 
		  	print "Hello Web World from Language PHP on "; 
		  	date_default_timezone_set("America/Los Angeles");
		  	echo date('m/d/Y, ');
		  	echo '<script type="text/javascript">
					var currentTime = new Date();
					var hours = currentTime.getHours();
					var minutes = currentTime.getMinutes();
	
					var suffix = "AM";
	
					if (hours >= 12) {
					    suffix = "PM";
					    hours = hours - 12;
					}
					
					if (hours == 0) {
					    hours = 12;
					}
					
					if (minutes < 10) {
					    minutes = "0" + minutes;
					}
					
					document.write("<b>" + hours + ":" + minutes + " " + suffix + "</b>");
				</script>';
		 	
		 	$randomString = md5(time().rand(0,999)); 
			$r = substr($randomString,0,2); //1. and 2.
			$g = substr($randomString,2,2); //3. and 4.
			$b = substr($randomString,4,2); //5. and 6.
		?>
	</body>
</html>