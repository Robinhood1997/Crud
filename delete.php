<?php
include("connection.php");
$id=$_GET['id'];
$q="DELETE from user1 WHERE id=$id";
mysqli_query($con,$q);
header("Location:viewemp.php");

 ?>
