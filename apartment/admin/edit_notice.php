<?php
	session_start();
	include("connection.php");
	$admin_name=$_SESSION['admin_name'];
	$admin_id=$_SESSION['admin_id'];
	$id=$_GET['id'];
	$exe=mysqli_query($conn,"select * from century_notice where id='$id'");
	$res=mysqli_fetch_assoc($exe);
	if(isset($_POST['submit']))
	{
		$notice=$_POST['notice'];
		mysqli_query($conn,"update century_notice set notice='$notice' where id='$id'");
		echo "<script>
		 alert('Details Edited Successfully');
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
	<h2>Edit Notice</h2>
    <div class="row3">
    <form method="post">
    	<div class="form-group"><textarea  name="notice" ><?php echo $res['notice']; ?></textarea></div>
        
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