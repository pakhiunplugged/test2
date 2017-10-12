<?php
	session_start();
	$admin_name=$_SESSION['admin_name'];
	$admin_id=$_SESSION['admin_id'];
	include("connection.php");
	
	if(isset($_POST['submit']))
	{
		$category=$_POST['category'];
		$name=$_POST['name'];
		$phone=$_POST['phone'];
		$company=$_POST['company'];
		mysqli_query($conn,"insert into ".$admin_name."_services(name,phone,company,category) values('$name','$phone','$company','$category')");
		echo "<script>alert('Service Added successfully');window.location.href='other_services.php';</script>";
	}
	
?>
<html>
<head>
<link href="stylesheet.css" rel="stylesheet"></link>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="custom.js"></script>
  <style>
  	.form-control
	{
		padding:5px;
	}
  </style>
</head>
<body>
<header>
	<div class="left name">Hi, <?php echo $admin_name;?></div>
    <div class="right log"><a href="logout.php">Logout</a></div>
    <div class="clear"></div>
</header>
<div class="container" id="banner6">
	<h2>Add Services</h2>
    <div class="row3" >
    <form method="post" enctype="multipart/form-data">
    	<div class="form-group">
            <select name="category" class="form-control" style="width:170px" >
            	<option >Select A Category</option>
            	<option value='plumber'>Plumber</option>
                <option value='electrician'>Electrician</option>
                <option value='carpenter'>Carpenter</option>
                <option value='maid'>Maid Servant</option>
                <option value='taxi'>Taxi Service</option>
                <option value='handyman'>Handyman</option>
                <option value='tutor'>Tutor</option>
                <option value='doctor'>Doctor</option>
            </select>
        </div>
        
        <div class="form-group"><input type="text" name="name" class="form-control" placeholder='Name'></div>
        <div class="form-group"><input type="text" name="phone" class="form-control" placeholder='Contact Number'></div>
        <div class="form-group"><input type="text" name="company" class="form-control" placeholder='Company'></div>
        <div class="form-group"><input type="submit" name="submit" class="form-submit"></div>
    </form>
    </div>
</div>
<footer class="less">
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
