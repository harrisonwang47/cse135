<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" />
		<title>Hello World PHP Style</title>
		<body style="background: <?php echo $rand_background; ?>;">
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
		 	
		 	#randomly generate background colors
		 	$background_colors = array('#282E33', '#25373A', '#164852', '#495E67', '#FF3838');
			$rand_background = $background_colors[array_rand($background_colors)];
		?>
	</body>
</html>