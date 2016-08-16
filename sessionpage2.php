<!DOCTYPE html>
<html>
	<head>
		<title>SessionPage2</title>
	</head>
	
	<body>
		<?php
			session_start();
			
			#check to see if the session variable is set
			if($_SESSION['username'])
			{
				echo "Hi" . $_SESSION['username'] . "nice to meet you!";
			}
			else
			{
				echo "Howdy stranger...tell me your name on page1!<br>";
				echo " "
				echo "<a href = \"sessionpage1.php\"> Go back to SessionPage1</a>";
			}
			
			#delete the session variable
			if(isset($_POST['delete']))
			{
				unset($_SESSION[‘username’]);
			}
		?>
		<form>
			<button type="submit" name="delete">Clear Session</button>
		</form>
	</body>
</html>