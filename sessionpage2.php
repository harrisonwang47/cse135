<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" />
		<title>SessionPage2</title>
	</head>
	
	<body>
		<?php session_start();
	 		#check to see if the session variable is set
	 		if(isset($_SESSION['username']))
	 		{
	 			echo "Hi" . $_SESSION['username'] . "nice to meet you!";
	 		}
	 		#reroute back to session page 1
	 		else
	 		{
	 			echo "Howdy stranger...tell me your name on page1!<br>";
	 			echo "<a href = \"sessionpage1.php\"> Go back to SessionPage1</a>";
	 		}
	 		
	 		#delete the session variable when delete button is clicked
	 		if($_SERVER['REQUEST_METHOD']=='POST')
	 		{
	 			unset($_SESSION['username']);
	 			$_SESSION = array();
	 			session_destroy();
	 		}
		?>

		<form action="sessionpage2.php" method="post">
			<button type="submit" name="delete">Clear Session</button>
		</form>
	</body>
</html>