<?php
	session_start();
	include("connection.php");
	$admin_name=$_SESSION['admin_name'];
	$admin_id=$_SESSION['admin_id'];
	$exe=mysqli_query($conn,"select * from ".$admin_name."_bookings where status='pending'");
	
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
	if(mysqli_num_rows($exe)>0)
	{
	?>
    	<table class="table2">
        <tr>
            <th>Name</th>
            <th>Phone Number</th>
            <th>Category</th>
            <th colspan='2'>Date</th>
           
        </tr>
        <?php 
        
            while($res=mysqli_fetch_assoc($exe))
            {
                $id=$res['id'];
				$name=$res['name'];
				$phone= $res['phone'];
				$category=$res['category'];
				$date=$res['for_date'];
				
                ?>
                    <tr>
                        <td><?php echo $name;?></td>
                        <td><?php echo $phone?></td>
                        <td><?php echo $category;?></td>
                        <td colspan='2'><?php echo $date;?></td>
                        <th><button id="<?php echo $id;?>" class="confirm">Confirm</button></th>
                        <th><button id="cancel_<?php echo $id;?>" class="cancel">Cancel</button></th>
                    </tr>
                <?php
            }
        ?>
    	</table>
        <?php
		}
		else
		{
			echo "<p>No new request for booking</p>";
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

	$('.confirm').click(function()
	{
		var id=$(this).attr('id');
		$.post("confirm_booking.php",{id:id},function(res)
		{
			alert(res);
			location.reload();	
		});
		
		
	});
	
	$('.cancel').click(function()
	{
		var id=$(this).attr('id');
		new_id=id.split('_');
		id=new_id[1];
		var confirmation =confirm("Are you sure that you want to cancel this booking");
		if(confirmation)
		{
			$.post("cancel_booking.php",{id:id},function(res)
			{
				alert(res);
				location.reload();
				
			});
		}
	});
	
});
</script>
</body>
</html>