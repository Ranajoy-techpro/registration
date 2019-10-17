<?php
include('connect.php');
if (isset($_POST['insert']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$address = $_POST['address'];
if ($name == '' || $email == '' || $password == '' || $address == '')
{
	echo "<script type='text/javascript'>alert('Please Input all Field then INSERT')</script>";
	?>
	<input type="button" value="<< Go back >>" onclick="history.back()">
<?php
}
else
{
	$passwordmd5 = md5($_POST['password']);
	$insert = "insert into log(unm, eml, pswd, adds)values('$name','$email','$passwordmd5','$address')";
		if($con->query($insert) === true)
	{
			echo "<script type='text/javascript'>alert('$name, You Have Succesfully Inserted your Data')</script>";
			echo "<h1>Your Result</h1>";
			echo "Your Name is : $name"."<p>";
			echo "<br>";
			echo "Your Email ID is : $email"."<p>";
			echo "<br>";
			echo "Your Password is : $password"."<p>";
			echo "<br>";
			echo "Your Address is : $address"."<p>"."<br>";
?>
			<input type="button" value="<< Go back >>" onclick="history.back()">
<?php
}		else
		{
			echo "<script type='text/javascript'>alert('Error found')</script>". $insert .$con->error;
	?>
			<input type="button" value="<< Go back >>" onclick="history.back()">
<?php
		}
	}
}
$con->close();
?>