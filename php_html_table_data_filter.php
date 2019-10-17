<?php
include("connection.php");
if(isset($_POST['filter']))
{
    $search = $_POST['search'];
    $query = "select * from product where product_name = '$search'";
    $search_result = $con->query($query);
}
    else 
    {
        $query = "select * from product";
        $search_result = $con->query($query);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Show Data</title>
        <style>
            table, th, tr, td 
                {
                    border: 1px solid black;
                    border-collapse: collapse;
                }
                    th, td 
                    {
                        padding: 10px;
                    }
        </style>
    </head>
    <body>
        <form action="" method="POST" align = "center">
            <h1>Product Details</h1>
            Product Name : <input type="text" name="search"><br><br>
            <input type="submit" name="filter" value="Filter"><br><br>
            <table width="100%">
                <tr>
                    <th>NAME</th>
                    <th>CATEGORY</th>
                    <th>STATUS</th>
                    <th>IMAGE</th>
                    <th>CREATED DATE</th>
                    <th>UPDATED DATE</th>
                </tr>
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['product_name'];?></td>
                    <td><?php echo $row['product_category'];?></td>
                    <td><?php echo $row['product_status'];?></td>
                    <td><?php echo $row['product_image'];?></td>
                    <td><?php echo $row['created_date'];?></td>
                    <td><?php echo $row['updated_date'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
    </body>
</html>