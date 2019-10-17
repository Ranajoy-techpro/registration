<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$databasename = "reg";

	$con = new mysqli($servername,$username,$password,$databasename);
		if($con->connect_error)
	{
			die("Connection failed" .$con->connect_error);
	}//echo "Connection Successfully" ."<br>";
//mysqli_select_db($con,"reg");
?>