<?php
	session_start();
	include("connection.php");
	$admin_name=$_SESSION['admin_name'];
	$admin_id=$_SESSION['admin_id'];
	$client_id='1';
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$occupation=$_POST['occupation'];
		$flat_number=$_POST['flat_number'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$exe=mysqli_query($conn,"insert into members(name,occupation,flat_numberusername,password,client_id,date_added) values('$name','$occupation','$flat_number','$username','$password','$client_id',now())");
		 echo "<script>
		 alert('Member Added Successfully');
		 window.location.href='index.php';
		</script>";
	}
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
	
    <div class="row3">
    <form method="post">
    	<div class="form-group"><input type="text" name="name" placeholder="Name" class="form-field"></div>
        <div class="form-group"><input type="text" name="occupation" placeholder="Occupation" class="form-field"></div>
        <div class="form-group"><input type="text" name="falt_number" placeholder="Flat Number" class="form-field"></div>
        <div class="form-group"><input type="text" name="username" placeholder="Username" class="form-field"></div>
        <div class="form-group"><input type="password" name="password" placeholder="Password" class="form-field"></div>
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