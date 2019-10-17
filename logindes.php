<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<form action ="login.php" align = "center" method = "POST">
	<h1>Login</h1>
	Email : <input type = "text" placeholder="          	Input Email" id = "email" name ="email"><br><p>
	Password : <input type="password" placeholder="          Input Password" id = "password" name = "password"><br><p>
    Plz click here to Remember Me <input type="checkbox" name = "remember"><br><p>
	<input type = "submit" name = "login" value = "Log In">
	</body>
</form>
</html>
<?php
	if(isset($_COOKIE['email']) and isset($_COOKIE['password']))
{
	$email = $_COOKIE['email'];
	$password = $_COOKIE['password'];
	echo "<script>
	document.getElementById('email').value = '$email';
	document.getElementById('password').value = '$password';
	</script>";
}
?>