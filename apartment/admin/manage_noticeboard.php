<?php
	session_start();
	include("connection.php");
	$admin_name=$_SESSION['admin_name'];
	$admin_id=$_SESSION['admin_id'];
	$exe=mysqli_query($conn,"select * from century_notice ");
	
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
    	<div class="col1"><a href="new_notice.php">New Notice</a></div>
    </div>
    <div class="clear">
    </div>
    <div class="row2">
    <table class="table2">
    <tr>
    	<th colspan="3">Notice</th>
        <th></th>
        <th></th>
        
    </tr>
    <?php 
	
		while($res=mysqli_fetch_assoc($exe))
		{
			$id=$res['id'];
			?>
            	<tr>
                    <td colspan="3"><?php echo $res['notice'];?></td>
                    <th><a href="edit_notice.php?id=<?php echo $id;?>">Edit</a></th>
                    <th class="del" id="<?php echo $id; ?>">Delete</th>
                </tr>
            <?php
		}
		
	?>
    
    </table>
    </div>
</div>
<footer>
	<div class="left">
    </div>
    <div class="right">
    <p>Powered by Unplugged India</p>
    </div>
    <div class="clear">
    </div>
</footer>
<script>
$(document).ready(function()
{

	$('.del').click(function()
	{
		var id=$(this).attr('id');
		var confirmation =confirm("Are you sure that you want to delete this notice");
		if(confirmation)
		{
			window.location.href="delete_notice.php?id=<?php echo $id; ?>";
		}
	});
});
</script>
</body>
</html>