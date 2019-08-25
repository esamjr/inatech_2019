<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>

<form action="action.php" method="post">
<table border="1" cellspacing="0" align="center">
<tr>
		<td align="center"colspan="3">
			Halaman Login			
		</td>
	<tr>
		<td>Username</td>
		<td>:</td> 
		<td><input type="text" name="username"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td>:</td>
		<td><input type="password" name="password"></td>
	</tr>
	<tr>
		<td colspan="2">
			<input type="hidden" name="action" value="login">
			<input type="submit" name="submit" value="Login">
		</td>
		<td><a href="lupapassword.php">Lupa Password</a></td>
	</tr>
</tr>
</table>
</form>	

</body>
</html>