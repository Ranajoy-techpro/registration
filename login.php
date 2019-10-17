<?php
session_start();
include('connect.php');
if(isset($_POST['login']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];
	if($email == "" || $password == "")
	{
		echo "<script type='text/javascript'>alert('Plz input all field and then click Login')</script>";
		?>
		<input type="button" value="<< Go back >>" onclick="history.back()">
		<?php
	}
	else
	{
		$passwordlogmd5 = md5($_POST['password']);
		$lg = "select * from log where eml = '$email' and pswd = '$passwordlogmd5'";
		$res = $con->query($lg);
	if(mysqli_num_rows($res) > 0)
	{
		if(isset($_POST['remember']))
		{
			setcookie('email', $email, time()+60*60*10);
			setcookie('password', $password, time()+60*60*10);
		}
	$_SESSION['email'] = $email;
	header('location:loghome.php');
	/*echo "<script type='text/javascript'>alert('You have Successfully Login')</script>";
	echo "Welcome $username"."<br>"."<p>";
	
	?>
	<input type="button" value="<< Go back >>" onclick="history.back()"><br><p>
	<input type="button" value="Log Out" onclick="history.back()">
	<?php*/
	} 
	else
	{
		echo "<script type='text/javascript'>alert('Plz try again.. Your Username and Password are does not match')</script>";
		?>
		<input type="button" value="<< Go back >>" onclick="history.back()">
		<?php
	}
}
}
$con->close();
?>