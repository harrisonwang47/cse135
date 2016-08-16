<!DOCTYPE html>
<html>
	<head>
		<title>SessionPage1</title>
	</head>
	
	<body>
		<?php
			session_start();

			#when the save button is clicked, go to sessionpage2
			if ($_SERVER['REQUEST_METHOD']=='POST') 
			{ 
			   $username = $_POST['username'];
			   $_SESSION['username']= $username;
			}  
		?>
		
		<form action="sessionpage2.php" method="post">
			Username: <input type="text" name="username"/>
			<button type="submit" name="save">Save</button><br>
			<a href="sessionpage2.php">Go to Session Page 2!</a>
		</form>
	</body>
</html>