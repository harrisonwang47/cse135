<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" />
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
			   session_write_close();
    		   header('location:sessionpage2.php');
			}  
		?>
		
		<form action="sessionpage2.php" method="post">
			Username: <input type="text" name="username" id="username"/>
			<button type="submit" name="save">Save</button><br>
			<a href="sessionpage2.php">Go to Session Page 2!</a>
		</form>
	</body>
</html>