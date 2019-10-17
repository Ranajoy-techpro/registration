<?php
include('connect.php');
if(isset($_POST['update']))
{ 
    $name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$address = $_POST['address'];
    if ($name == '' || $email == '' || $password == '' || $address == '')
	{
		echo "<script type='text/javascript'>alert('Plz input the ALL field then UPDATE')</script>";
		?>
		<input type="button" value="<< Go back >>" onclick="history.back()">
		<?php
	}
	else
	{
		$passwordupmd5 = md5($_POST['password']);
		$up = "update log set eml = '$email', pswd = '$passwordupmd5', adds = '$address' where unm = '$name' ";
		if ($con->query($up) === true)
	{
		echo "<script type='text/javascript'>alert('$name, You have Successfully Upadated your data')</script>";
		echo "<h1>Updated Result</h1>";
		echo "Your Name is : $name"."<p>";
		echo "<br>";
		echo "Your Email ID is : $email"."<p>";
		echo "<br>";
		echo "Your Password is : $password"."<p>";
		echo "<br>";
		echo "Your Address is : $address"."<p>"."<br>";
	?>
			<input type="button" value="<< Go back >>" onclick="history.go(-2)">
	<?php
	}else
	{
		echo "<script type='text/javascript'>alert('Error Found')</script>".$up.$con->error;
		?>
		<input type="button" value="<< Go back >>" onclick="history.back()">
		<?php
	}
	}
}
$con->close();
?>