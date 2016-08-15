<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Form Collection PHP</title>
	</head>
	
	<body>
		<h1>Form Collection</h1>
		
		<form action="echo.php" method="get">
			<label>First Name:
			 <input type="text" name="firstName" id="firstName">
			</label>
			
			<label>Last Name:
			 <input type="text" name="lasttName" id="lastName">
			</label>
			
			<label for="formAction">Method:</label>
			 <select id="formAction" onchange="this.form.method = this.options[selectedIndex].value;">
				<option>GET</option>
				<option>POST</option>
			 </select>
			
			<label for="formAction">Color:</label>
			 <select id="formAction" onchange="this.form.method = this.options[selectedIndex].value;">
				<option>RED</option>
				<option>WHITE</option>
				<option>BLUE</option>
			 </select>
			
			<input type="submit" value="Submit">
		</form>
	</body>
</html>