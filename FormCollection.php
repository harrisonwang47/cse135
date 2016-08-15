<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Form Collection PHP</title>
	</head>
	
	<body>
		<h1>Form Collection</h1>
		
		<form action="echo.php" method="get">
			First Name:	<input type="text" name="firstName" id="firstName">
			<br>
			Last Name: <input type="text" name="lastName" id="lastName">
			<br>
			<label for="formAction">Method:</label>
			 <select id="formAction" onchange="this.form.method = this.options[selectedIndex].value;">
				<option>GET</option>
				<option>POST</option>
			 </select>
			
			<label>Color:</label>
			 <select name="color">
				<option value="red">red</option>
				<option value="white">white</option>
				<option value="blue">blue</option>
			 </select>
			
			<input type="submit" value="Submit">
		</form>
	</body>
</html>