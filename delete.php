<?php
include('connect.php');
if(isset($_POST['delete']))
{
	if ($_POST['name'] == '' || $_POST['id'] == '' )
	{
		echo "<script type='text/javascript'>alert('Plz input the NAME & ID field then DELETE data')</script>";
		?>
		<input type="button" value="<< Go back >>" onclick="history.back()">
		<?php
	}
	else
	{
		$del = "delete from log where unm = '$_POST[name]' and id = '$_POST[id]'";
	
		if($con->query($del) === true)
	{
		echo "<script type='text/javascript'>alert('You have Successfully Deleted your Data')</script>";
		?>
		<input type="button" value="<< Go back >>" onclick="history.go(-2)">
		<?php
	}else
	{
		echo "<script type='text/javascript'>alert('Error Found')</script>".$del.$con->error;
		?>
		<input type="button" value="<< Go back >>" onclick="history.back()">
		<?php
	}
	}
}
$con->close();
?>