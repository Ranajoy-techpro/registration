<?php
session_start();
	$userloghome = $_SESSION['email'];
	if($userloghome == true)
{
	echo "<script type='text/javascript'>alert('You have Successfully Login')</script>";
	echo "<h1 align = center>Welcome ".$_SESSION['email']."<br>"."<p>";
	?>
	<form action = "" align = "center" method = "POST">
	<input type="submit" formaction = "logout.php" value="Log Out">
	<?php
}
	else
{
	header('location:logindes.php');
}	
?>