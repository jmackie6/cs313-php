<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login System</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>
<div id="login-form">
	<h1>Expenses Spent In Month
<form method="post" action="updatedExpenses.php">
<table align="center" width="30%" border="0">
<tr>
<td><input type="text" name="food" placeholder="Food " required /></td>
</tr>
<tr>
<td><input type="text" name="rent" placeholder="Rent" required /></td>
</tr>
<tr>
<td><input type="text" name="health_insurance" placeholder="Heath Insurance" required /></td>
</tr>
<tr>
<td><input type="text" name="car_insurance" placeholder="Car Insurance" required /></td>
</tr>
<tr>
<td><input type="text" name="utilities" placeholder="Utilities" required /></td>
</tr>
<tr>
<td><input type="text" name="other" placeholder="Other Expenses" required /></td>
</tr>
<tr>
	<td>
		<select name ="month" id="month">
  <option value="january">January</option>
  <option value="feburary">Feburary</option>
  <option value="march">March</option>
  <option value="april">April</option>
  <option value="may">May</option>
  <option value="june">June</option>
  <option value="july">July</option>
  <option value="august">August</option>
  <option value="september">September</option>
  <option value="october">October</option>
  <option value="november">November</option>
  <option value="december">December</option>
</select>
	</td>
</tr>
<tr>
<td><button type="submit" name="submit">Submit info</button></td>
</tr>
<tr>
<td><a href="home.php">Back To HomePage</a></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>