<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" />
		<title>Echo</title>
	</head>
	
	<body>	
		<h1>Form Collection</h1>
		<p> Hello <?php echo $_POST["firstName"];?> <?php echo $_POST["lastName"];?> 
				  <?php echo $_GET["firstName"];?> <?php echo $_GET["lastName"];?> from a Web app written in PHP on 
		 <?php	
		 	date_default_timezone_set("America/Los_Angeles");
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

		 	echo ("color");
		?> 
		</p>
	</body>
</html>