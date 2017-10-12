<?php 
if(isset($_POST['id']))
{
	session_start();
	include("connection.php");
	$admin_name=$_SESSION['admin_name'];
	$admin_id=$_SESSION['admin_id'];
	$id=$_POST['id'];
	$exe=mysqli_query($conn,"update ".$admin_name."_bookings set status='confirmed' where id='$id'");
	echo "Booking Confirmed";
}
?>