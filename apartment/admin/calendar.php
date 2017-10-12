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
	<div class="row1">
    	<div class="col2"><a href="delete_advertisement.php">Delete Advertisement</a></div>
    </div>
    <div class="row3 row4">
    <form method="post" enctype="multipart/form-data">
    	<div class="form-group"><input type="file" name="banner" class="form-file" id="banner"></div>
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