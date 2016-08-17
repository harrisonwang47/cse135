<?php session_start();
	  #when the save button is clicked, go to sessionpage2
	  if (isset($_POST['save'])) 
	  { 
	     $username = $_POST['username'];
	     $_SESSION['username']= $username;
	     session_write_close();
   	     header('location:sessionpage2.php');
	  }  
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" />
		<title>SessionPage1</title>
	</head>
	
	<body>
		<form method="post">
			Username: <input type="text" name="username"/>
			<button type="submit" name="save">Save</button><br>
			<a href="sessionpage2.php">Go to Session Page 2!</a>
		</form>
	</body>
</html>