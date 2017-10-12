<?php
	session_start();
	$id=$_GET['id'];
	include("connection.php");
	$admin_name=$_SESSION['admin_name'];
	$admin_id=$_SESSION['admin_id'];
	$exe=mysqli_query($conn,"select * from century_members where id='$id'");
	$res=mysqli_fetch_assoc($exe);
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$exe=mysqli_query($conn,"update century_members set name='$name',username='$username',password='$password' where id='$id'");
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
	
    <div class="row3">
    <form method="post">
    	<div class="form-group"><input type="text" name="name"  class="form-field" value="<?php echo $res['name']; ?>"></div>
        <div class="form-group"><input type="text" name="username"  class="form-field" value="<?php echo $res['username']; ?>"></div>
        <div class="form-group"><input type="password" name="password"  class="form-field" value="<?php echo $res['password']; ?>"></div>
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