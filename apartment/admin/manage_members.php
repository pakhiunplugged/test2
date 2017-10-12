<?php
	session_start();
	include("connection.php");
	$admin_name=$_SESSION['admin_name'];
	$admin_id=$_SESSION['admin_id'];
	$client_id='1';
	$exe=mysqli_query($conn,"select * from members where client_id='$client_id'");
	$id;
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
    	<div class="col1"><a href="add_member.php">Add Member</a></div>
    </div>
    <div class="clear">
    </div>
    <div class="row2">
    <table>
    <tr>
    	<th>Name</th>
        <th>Username</th>
       <!-- <th>Password</th>-->
        <th>Flat Number</th>
        <th>Occupation</th>
        <th></th>
        <th></th>
    </tr>
    <?php 
		while($res=mysqli_fetch_assoc($exe))
		{
			$id=$res['id'];
			?>
         <tr>
            <td><?php  echo $res['name'];?></td>
            <td><?php  echo $res['username'];?></td>
           <!-- <td><?php  //echo $res['password'];?></td>-->
            <td><?php  echo $res['flat_number'];?></td>
            <td><?php  echo $res['occupation'];?></td>
            <th><a href="edit_member.php?id=<?php echo $id;?>">Edit</a></th>
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
		var confirmation =confirm("Are you sure that you want to delete this member");
		if(confirmation)
		{
			window.location.href="delete_member.php?id=<?php echo $id; ?>";
		}
	});
});
</script>
</body>
</html>