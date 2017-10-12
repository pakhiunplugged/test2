<?php 
session_start();
include("connection.php");
$admin_name=$_SESSION['admin_name'];
$admin_id=$_SESSION['admin_id'];
$id=$_GET['id'];
mysqli_query($conn,"delete from century_notice where id='$id'");
header("location:index.php");
?>