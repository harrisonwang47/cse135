<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Form Collection PHP</title>
</head>
<body>
	
<h1>Form Collection</h1>

<form action="echo" method="get">

<label>First Name:
 <input type="text" name="firstName" id="firstName">
</label>

<label>Last Name:
 <input type="text" name="lasttName" id="lastName">
</label>

<label for="formAction">Form Action:</label>
 <select id="formAction" onchange="this.form.method = this.options[selectedIndex].value;">
	<option>GET</option>
	<option>POST</option>
 </select>


<input type="submit" value="Submit">

</form>

</body>
</html>