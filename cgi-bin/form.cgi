<!DOCTYPE html>
<html lang="en">
<head>
<title>Simple Form</title>
<meta charset="UTF-8">
<body><h1>Form Test</h1><hr>
<form action="echo.cgi" method="get">
First Name: <input type="text" name="firstname"><br>
Last Name: <input type="text" name="lastname"><br>
Favorite Color:
<select name ="color">
  <option value="red">Red</option>
  <option value="white">White</option>
  <option value="blue">Blue</option>
</select><br>
Form Action:
<select name="formaction" onchange="this.form.method = this.options[selectedIndex].value;">
	<option>GET</option>
	<option>POST</option>
 </select><br>
<input type="submit" value="Send">
</form>
</body>
</html>