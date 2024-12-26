<?php 


include('includes/db_connect.php');

$id=$_GET['id'];
if($id)
{
    $sql=mysqli_query($conn,"delete from cars where id='$id'");
    if($sql)
    {
        header("Location:view_cars.php");
    }
}
?>
