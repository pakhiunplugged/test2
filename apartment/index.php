<?php
session_start();
if(isset($_SESSION['member_name']))
{
include("connection.php");
$client_name=$_SESSION['client_name'];
$member_name=$_SESSION['member_name'];
$member_id=$_SESSION['member_id'];
$exe=mysqli_query($conn,"select * from ".$client_name."_notice limit 3");

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
    	<li style="display:inline-block;margin-left:10px;margin-bottom:15px"><a href="index.php">HOME</a></li>
        <li style="display:inline-block;margin-left:10px;margin-bottom:15px"><a href="about_us.php">ABOUT US</a></li>
    	<li style="display:inline-block;margin-left:10px;margin-bottom:15px"><a href="features.php">FEATURES</a></li>
        <li style="display:inline-block;margin-left:10px;margin-bottom:15px"><a href="support.php">SUPPORT</a></li>
        <li style="display:inline-block;margin-left:10px;margin-bottom:15px"><a href="contact_us.php">CONTACT US</a></li>
    </ul>
</div>
<div style="clear:both"></div>
</div>
<div >
    	<img src="images/banner1.jpg" height="500px" width="100%">
</div>
<div class="container" style="margin-top:20px">
    <div class="jumbotron">
    	<div class="row">
          <div class="col-sm-4">
          	<h3>Grievances</h3>
            <h6>Fill out the below form to send us any grievances you may have and we will revert to you in 48 working hours.</h6>
                    <form method="post">
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" id="phone" class="form-control" placeholder="Contact Number" onKeyPress=" return isNumber()">
                        </div>
                        <div class="form-group">
                            <textarea name="grievance" id="grievance" placeholder="Grievance" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="" value="Submit">
                        </div>
                    </form>
          </div>
          <div class="col-sm-4">
          		<h3>Notice Board</h3>
                <div class="table-responsive">
                <table>
                <?php
				while($res=mysqli_fetch_assoc($exe))
				{
					?>
                    	<tr >
                    		<td style="padding:10px;"><?php echo $res['notice']; ?></td>
                    	</tr>
                    <?php
				}
				?>
                </table>	
                </div>
          </div>
          <div class="col-sm-4"><div style="width:100%;height:600px;text-align:center;"><img src='<?php echo $advertisement_path;?>' alt="no image found" width="100%" height="600px"></div></div>
        </div>
    </div>
</div>
<div class="container">
	<div class="jumbotron">
    	<h3>Booking Facilities</h3>
    	<span><a href="booking.php?category=Amphitheatre">Amphitheatre</a><a href="booking.php?category=Multipurpose Hall" class="link">Multipurpose Hall</a><a href="booking.php?category=Multimedia Theatre" class="link">Multimedia Theatre</a><a href="booking.php?category=Guest Room" class="link">Guest Rooms</a><a href="booking.php?category=Badminton Court" class="link">Badminton Court</a></span>
    </div>
</div>
</body>
</html>
<?php
}
else
header("location:login.php");
?>