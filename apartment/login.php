<?php
session_start();
if(isset($_POST['submit']))
{
	include("connection.php");
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="select * from members where username='$username' and password='$password'";
	$exe=mysqli_query($conn,$query);
	if(mysqli_num_rows($exe)>0)
	{
		$res=mysqli_fetch_assoc($exe);
		$name=$res['name'];
		$id=$res['id'];
		$client_id=$res['client_id'];
		$exe2=mysqli_query($conn,"select name from clients where id='$client_id'");
		$res2=mysqli_fetch_assoc($exe2);	
		$client_name=$res2['name'];
		$_SESSION['client_name']=$client_name;
		$_SESSION['member_name']=$name;
		$_SESSION['member_id']=$id;
		header("location:index.php");
	}
	else
	{
		echo "Invalid Credentials";
	}
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
	<div class="left"></div>
    <div class="right">Welcome to Login page</div>
    <div class="clear"></div>
</header>
<div class="container">
	<h2>Login Here</h2>
    <div class="row3">
    <form method="post">
    	<div class="form-group"><input type="text"  name="username" placeholder="Username" class="form-field"></div>
        <div class="form-group"><input type="text"  name="password" placeholder="Password" class="form-field"></div>
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