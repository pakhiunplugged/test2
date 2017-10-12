<?php
session_start();
if(isset($_SESSION['member_name']))
{
include("connection.php");
$client_name=$_SESSION['client_name'];
$member_name=$_SESSION['member_name'];
$member_id=$_SESSION['member_id'];
$exe=mysqli_query($conn,"select * from ".$client_name."_notice");

$query2="select path from ".$client_name."_advertisement where category='vertical'";
$exe2=mysqli_query($conn,$query2);
$res2=mysqli_fetch_assoc($exe2);
$advertisement_path=$res2['path'];
?>
<hmtl>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
	.link
	{
		margin-left:20px;
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
<div class="container" style="margin-top:20px">
    <div class="jumbotron">
    	   <h3>Association Members</h3>
          <div class="row" style="margin-top:40px">
              <div class="col-sm-8">
               	<div class="row">
                        <div class="col-sm-3">
                        <img  src="images/banner1.jpg" height="100px" width="100px" style="display:inline-block">
                    </div>
                    <div class="col-sm-3">
                        <h4>Priyanka</h4>
                        <small>Send Email</small>
                    </div>
                    <div class="col-sm-3">
                        <img  src="images/banner1.jpg" height="100px" width="100px" style="display:inline-block">
                    </div>
                    <div class="col-sm-3">
                        <h4>Priyanka</h4>
                        <small>Send Email</small>
                    </div>
                    
                </div>
                <div class="row" style="margin-top:30px">
                        <div class="col-sm-3">
                        <img  src="images/banner1.jpg" height="100px" width="100px" style="display:inline-block">
                    </div>
                    <div class="col-sm-3">
                        <h4>Priyanka</h4>
                        <small>Send Email</small>
                    </div>
                    <div class="col-sm-3">
                        <img  src="images/banner1.jpg" height="100px" width="100px" style="display:inline-block">
                    </div>
                    <div class="col-sm-3">
                        <h4>Priyanka</h4>
                        <small>Send Email</small>
                    </div>
                    
                </div>
             </div>
              <div class="col-sm-4"><div style="background-color:lightblue;width:100%;height:600px;text-align:center;"><img src='<?php echo $advertisement_path;?>' alt="no image found" width="100%" height="600px"></div></div>
        	  </div> 
          </div>
          
         
    </div>
</div>
<div class="container">
	<div class="jumbotron">
    	<h3>Booking Facilities</h3>
    	<span><a href="booking.php?category=Amphitheatre">Amphitheatre</a><a href="booking.php?category=Multipurpose Hall" class="link">Multipurpose Hall</a><a href="booking.php?category=Multimedia Theatre" class="link">Multimedia Theatre</a><a href="booking.php?category=Guest Room" class="link">Guest Rooms</a><a href="booking.php?category=Badminton Court" class="link">Badminton Court</a></span>
    </div>
</div>
    <div class="container">
    	<div class="jumbotron">
        	<h3>Rules And Regulations</h3>
            <small>1. When planning to vacate the apartment you must notify the Apartment Assignment Office and complete necessary forms.</small><br><br>
            <small>2. When planning to vacate the apartment you must notify the Apartment Assignment Office and complete necessary forms.</small><br><br>
            <small>3. When planning to vacate the apartment you must notify the Apartment Assignment Office and complete necessary forms.</small><br><br>
            <small>4. When planning to vacate the apartment you must notify the Apartment Assignment Office and complete necessary forms.</small><br><br>
            <small>5. When planning to vacate the apartment you must notify the Apartment Assignment Office and complete necessary forms.</small><br><br>
            <small>5. When planning to vacate the apartment you must notify the Apartment Assignment Office and complete necessary forms.</small><br><br>
            <small>5. When planning to vacate the apartment you must notify the Apartment Assignment Office and complete necessary forms.</small><br><br>
            <small>5. When planning to vacate the apartment you must notify the Apartment Assignment Office and complete necessary forms.</small><br><br>
        </div>
    </div>
</body>
</html>
<?php
}
else
header("location:login.php");
?>