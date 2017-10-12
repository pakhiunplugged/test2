<?php
	session_start();
	include("connection.php");
	$admin_name=$_SESSION['admin_name'];
	$admin_id=$_SESSION['admin_id'];
	$exe=mysqli_query($conn,"select * from ".$admin_name."_bookings where status='confirmed'");
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
	<div style="float:right">
    	<ul>
        	<li style="display:inline-block;list-style-type:none"><a href="manage_bookings.php" style="color:#1662d8">Open Bookings</a></li>
            <li style="display:inline-block;list-style-type:none"><a href="closed_bookings.php" style="color:#1662d8;margin-left:10px;">Closed Bookings</a></li>
            <li style="display:inline-block;list-style-type:none"><a href="cancelled_bookings.php" style="color:#1662d8;margin-left:10px;">Cancelled Bookings</a></li> 
        </ul>
    </div>
     <div class="clear"></div>
    <div>
    <?php
	if(mysqli_num_rows($exe))
	{
	?>
    	<table class="table2">
    <tr>
    	<th>Name</th>
        <th>Phone Number</th>
        <th>Category</th>
        <th>Date</th>
        
    </tr>
    <?php 
		while($res=mysqli_fetch_assoc($exe))
		{
			$id=$res['id'];
			?>
            	<tr>
                    <td ><?php echo $res['name'];?></td>
                    <td><?php echo $res['phone'];?></td>
                    <td><?php echo $res['category'];?></td>
                    <td><?php echo $res['for_date'];?></td>
                </tr>
            <?php
		}
	?>
    
    </table>
    <?php
		}
		else
		{
			echo "<p>No Closed Booking</p>";
		}
		?>
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
			window.location.href="edit_dedtails.php?id=<?php echo $main;?>";
		}
	});
	
});
</script>
</body>
</html>