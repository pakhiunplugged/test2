<?php
	session_start();
	$admin_name=$_SESSION['admin_name'];
	$admin_id=$_SESSION['admin_id'];
	include("connection.php");
	if(isset($_POST['submit1']))
	{
		$info = pathinfo($_FILES['banner1']['name']);
		$ext = $info['extension']; 
		$newname = $admin_name."_vertical.".$ext; 
		$target = '../temp/'.$newname;
		$target_file_name='temp/'.$newname;
		move_uploaded_file( $_FILES['banner1']['tmp_name'], $target);
		$query="update ".$admin_name."_advertisement set path='$target_file_name' where category='vertical'";
		mysqli_query($conn,$query);
		echo "<script>alert('Advertisement updated successfully');window.location.href='manage_advertisement.php';</script>";	
	}
	if(isset($_POST['submit2']))
	{
		$info2 = pathinfo($_FILES['banner2']['name']);
		$ext2 = $info2['extension']; 
		$newname2 = $admin_name."_horizontal.".$ext2; 
		$target2 = '../temp/'.$newname2;
		$target_file_name2='temp/'.$newname2;
		move_uploaded_file( $_FILES['banner2']['tmp_name'], $target2);
		mysqli_query($conn,"update ".$admin_name."_advertisement set path='$target_file_name2' where category='horizontal'");
		echo "<script>alert('Advertisement updated successfully');window.location.href='manage_advertisement.php';</script>";
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
	<div id="banner6">
	<h2>Vertical Advertisement</h2>
    <div class="row3" >
    <form method="post" enctype="multipart/form-data">
    	<div class="form-group"><input type="file" name="banner1" class="form-file" id="banner"></div>
        <div class="form-group"><input type="submit" name="submit1" class="form-submit" id="submit1"></div>
    </form>
    </div>
</div>

</div>
<div class="container">
	<div  id="banner7">
	<h2>Horizontal Advertisement</h2>
    <div class="row3" >
    <form method="post" enctype="multipart/form-data">
    	<div class="form-group"><input type="file" name="banner2" class="form-file" id="banner2"></div>
        <div class="form-group"><input type="submit" name="submit2" class="form-submit" id="submit2"></div>
    </form>
    </div>
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
