<?php
session_start();
if(isset($_SESSION['member_name']))
{
	include("connection.php");
	$client_name=$_SESSION['client_name'];
	$member_name=$_SESSION['member_name'];
	$member_id=$_SESSION['member_id'];
	$category=$_GET['category'];
	$query2="select * from ".$client_name."_bookings where category='$category' and status='confirmed'";
	$array=array();
	$exe2=mysqli_query($conn,$query2);
	while($res2=mysqli_fetch_assoc($exe2))
	{
		$date=$res2['for_date'];
		$array[]=$date;
	}
	
	if(isset($_POST['submit']))
	{
		$category=$_POST['category'];
		$date=$_POST['date'];
		$date=date("Y-m-d", strtotime($date) );
		$name=$_POST['name'];
		$phone=$_POST['phone'];
		mysqli_query($conn,"insert into ".$client_name."_bookings(category,for_date,name,phone,status) values('$category','$date','$name','$phone','pending')");
		echo "<script>alert('Your request has been saved successfully. We will come back to you shortly');location.href='features.php';</script>";
		
	}
?>
<hmtl>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="http://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="http://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
.form-control
{
	width:300px;
}
</style>
</head>
<body>
<div class="header">
<div style="display:block;margin-top:20px;margin-left:20px">
	<p>Welcome, <?php echo $member_name; ?></p>
</div>
<div style="display:block;float:right;margin-right:50px;margin-top:50px">
	<ul style="list-style:none">
    	<li style="display:inline-block;margin-left:10px"><a href="index.php">HOME</a></li>
        <li style="display:inline-block;margin-left:10px"><a href="about_us.php">ABOUT US</a></li>
    	<li style="display:inline-block;margin-left:10px"><a href="features.php">FEATURES</a></li>
        <li style="display:inline-block;margin-left:10px"><a href="support.php">SUPPORT</a></li>
        <li style="display:inline-block;margin-left:10px"><a href="contact_us.php">CONTACT US</a></li>
    </ul>
</div>
<div style="clear:both"></div>
</div>
  <div class="container">
  	<div class="jumbotron">
    	<form method="post">
        <div class="form-group">
                                <select style="padding:5px" class="form-control" name="category" id="category">
                                	<option><?php echo $category;?></option>
                                </select>
                            </div>
        		<div class="form-group">
                                <input type="text" name="date" id="date" class="form-control" placeholder="Select a date" >
                            </div>
                            <div class="form-group">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                            </div>
                            
                            <div class="form-group">
                                <input type="text" name="phone" id="phone" class="form-control" placeholder="Contact Number" onKeyPress="return isNumber()">
                            </div>
                            
                            <div class="form-group">
                                <input type="submit" name="submit" id="submit" class="" value="Submit">
                            </div>
                        </form>
    </div>
  </div>
</body>
<script>
	var disableddates =$.parseJSON('<?php echo json_encode($array); ?>');
	function DisableSpecificDates(date) {
		var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
		return [disableddates.indexOf(string) == -1];
	  }
	   
	 $(function() {
  $("#date").datepicker({
    beforeShowDay: DisableSpecificDates,
	
  });
});
</script>

</html>
<?php
}
else
header("location:login.php");
?>
<?php
$query="select * from details where name='priyanka' and username='priyanka@unpluggedindia'";
$exe=mysqli_query($conn,$query);
while($res=mysqli_fetch_assoc($exe))
{
	$id=$res['id'];
	$name=$res['name'];
	$email=$res['email'];
	$details=$res['details'];
	$date_added=$res['date_added'];
	$main_details=$res['main_details'];
	$main_submitted_details=$res['main_submitted_details'];
	$descending_order=$res['descending_order'];
	$ascending_order=$res['ascending_order'];
}
?>