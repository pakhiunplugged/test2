<?php
	session_start();
	$admin_name=$_SESSION['admin_name'];
	$admin_id=$_SESSION['admin_id'];
?>
<html>
<head>
<link href="stylesheet.css" rel="stylesheet"></link>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="custom.js"></script>
  
</head>
<body>
<header>
	<div class="left name">Hi, <?php echo $admin_name;?></div>
    <div class="right log"><a href="logout.php">Logout</a></div>
    <div class="clear"></div>
</header>
<div class="container">

    <div class="row row1">
        <div class="col members">
        	<a href="manage_members.php">Manage Members</a>
        </div>
        <div class="col bookings">
        	<a href="manage_noticeboard.php">Manage Noticeboard</a>
        </div>
    </div>
   
    <div class="row row2">
        <div class="col noticeboard">
        	<a href="manage_bookings.php">Manage Bookings</a>
        </div>
        <div class="col advertisement">
        	<a href="change_banner.php">Change Banner</a>	
        </div>
    </div>
    
    <div class="row row3">
        <div class="col banner">
        	<a href="other_services.php">Other Services</a>	
        </div>
        <div class="col others">
        	<a href="manage_advertisement.php">Manage Advertisement</a>	
        </div>
    </div>
  
 	  
</div>
<div class="clear"></div>
<footer>
	<div class="left">
    </div>
    <div class="right">
    <p>Powered by Unplugged India</p>
    </div>
    <div class="clear">
    </div>
</footer>
</body>
</html>
<?php

?>