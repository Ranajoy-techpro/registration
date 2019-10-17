<?php
session_start();
session_destroy();
//header('location:login.html');
	if(isset($_COOKIE['email']) and isset($_COOKIE['password']))
{
	$email = $_COOKIE['email'];
	$password = $_COOKIE['password'];
	setcookie('email', $email, time()-1);
	setcookie('password', $password, time()-1);
}
	echo "<script type='text/javascript'>alert('You have Successfully Log Out')</script>";
?>
	<form action = "" align = "center" method = "POST">
	<input type="submit" formaction = "logindes.php" value="Click to Log In">
<?php
?>
