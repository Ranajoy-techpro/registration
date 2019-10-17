<?php
include("connect.php");
if (isset($_POST['submit'])) 
{
	if ($_POST['search'] == '' )
	{
		echo "<script type='text/javascript'>alert('Plz input the NAME field and then Click to SEARCH')</script>";
		?>
		<input type="button" value="<< Go back >>" onclick="history.back()">
		<?php
	}
	else
	{
		$ser = "select * from log where unm = '$_POST[search]' ";
		$res = $con->query($ser);
	if (mysqli_num_rows($res) > 0)
	{	
		while($row = mysqli_fetch_array($res))
		{
			?>
					<form action ="" align = "center" method = "POST">
					<h1> Search Result </h1>
				ID : <input type = "text" name = "id" value = "<?php echo $row['id']?>"><br><p>
				Name : <input type = "text" name = "name" value = "<?php echo $row['unm']?>"><br><p>
				Email : <input type = "text" name = "email" value = "<?php echo $row['eml']?>"><br><p>
				Password : <input type = "password" name = "password" value = "<?php echo $row['pswd']?>"><br><p>
				Address : <input type = "text" name = "address" value = "<?php echo $row['adds']?>"><br><p>
				<input type = "submit" name = "update" formaction = "update.php" value = "Update">
				<input type = "submit" name = "delete" formaction = "delete.php" value = "Delete">
				<input type = "submit" name = "back" formaction = "search.html" value = "Back">
			<?php
		}
	}	else
		{
			echo "<script type='text/javascript'>alert('$_POST[search], is NOT FOUND')</script>";
			?>
			<input type="button" value="<< Go back >>" onclick="history.back()">
			<?php
		}
	}
}
$con->close();
?>