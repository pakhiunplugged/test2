<?php
session_start();
if(isset($_SESSION['member_name']))
{
include("connection.php");
$client_name=$_SESSION['client_name'];
$member_name=$_SESSION['member_name'];
$member_id=$_SESSION['member_id'];
//calendar
$exe=mysqli_query($conn,"select * from  ".$client_name."_notice");	
	$array=array();
	while($res=mysqli_fetch_assoc($exe))
	{
		$old_date=$res['date_added'];
		$date=date("Y-m-d", strtotime($old_date));
		$end_date=date('Y-m-d', strtotime('+1 day', strtotime($old_date)));
		//$value=$res['booking_for'];
		$array[] = array('title' => "Event" ,'start' => "$date",'end' =>"$end_date");	
	}	
$exe=mysqli_query($conn,"select * from ".$client_name."_notice limit 3");
$exe2=mysqli_query($conn,"select id from clients where name='$client_name'");
$res2=mysqli_fetch_assoc($exe2);
$id=$res2['id'];
$exe3=mysqli_query($conn,"select * from members where client_id='$id' limit 7" );
$exe4=mysqli_query($conn,"update table members where client_id='$client_name' limit 5");
$exe5=mysqli_query($conn,"truncate table client_notice where client_id='$member_id' order by client_name");

$query6="select path from ".$client_name."_advertisement where category='horizontal'";
$exe6=mysqli_query($conn,$query6);
$res6=mysqli_fetch_assoc($exe6);
$advertisement_path=$res6['path'];
?>
<hmtl>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href='fullcalendar.css' rel='stylesheet' />
<link href='fullcalendar.print.css' rel='stylesheet' media='print' />
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src='lib/moment.min.js'></script>
<script src='lib/jquery.min.js'></script>
<script src='fullcalendar.min.js'></script>
<script>
	$(document).ready(function() {
		
		var data = "<?php echo json_encode($array, JSON_PRETTY_PRINT ); ?>";
		//var new_data=JSON.parse(data);
		//alert(new_data);
		Date.prototype.yyyymmdd = function() 
		{
		  var mm = this.getMonth() + 1; // getMonth() is zero-based
		  var dd = this.getDate();
		
		  return [this.getFullYear(), !mm[1] && '-', mm, !dd[1] && '-', dd].join(''); // padding
		};

		var date = new Date();
		
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay,listMonth'
			},
			defaultDate: date.yyyymmdd(),
			navLinks: true, 
			businessHours: true, 
			editable: true,
			events:  data,
		});
		
	});

</script>
<style>
	.link
	{
		margin-left:20px;
	}
</style>
<style>

	#calendar {
		max-width: 900px;
		margin: 0 auto;
	}

	 .fc-toolbar .fc-right,.fc-toolbar .fc-today-button
	{
		display:none;
	}
	
</style>
</head>
<body>
<div class="header">
<div style="display:block;margin-top:20px;margin-left:20px">
	<p>Welcome, <?php echo $member_name; ?></p>
</div>
<div style="display:block;float:right;margin-right:50px;margin-top:50px">
	<ul style="list-style:none">
    	<li style="display:inline-block;margin-left:10px"><a href="index.php">HOME</a></li>
        <li style="display:inline-block;margin-left:10px"><a href="about_us.php">ABOUT US</a></li>
    	<li style="display:inline-block;margin-left:10px"><a href="features.php">FEATURES</a></li>
        <li style="display:inline-block;margin-left:10px"><a href="support.php">SUPPORT</a></li>
        <li style="display:inline-block;margin-left:10px"><a href="contact_us.php">CONTACT US</a></li>
    </ul>
</div>
<div style="clear:both"></div>
</div>
<div class="container" style="margin-top:20px">
    <div class="jumbotron">
    	 <div class="row">
         	<div class="col-sm-4">
                    <div class="table-responsive">
                    <table style="border:1px solid #D3D3D3">
                    <tr><th style="border:1 px solid #D3D3D3">Notice Board</th></tr>
                    <?php
                    while($res=mysqli_fetch_assoc($exe))
                    {
                        ?>
                            <tr>
                                <td style="padding:10px;"><?php echo $res['notice']; ?></td>
                            </tr>
                        <?php
                    }
                    ?>
                    </table>	
                    </div>
            </div>
            <div class="col-sm-4">
            	<p>Calendar</p>
                <div id="calendar">
                </div>
            </div>
            <div class="col-sm-4">
            	<div class="table-responsive">
                <h3>List Of Residents</h3>
                    <table style="border:1px solid #D3D3D3;border-collapse:collapse">
                        <tr><th>Name</th><th>occupation</th><th>Flat number</th></tr>
                        <?php
                        while($res=mysqli_fetch_assoc($exe3))
                        {
                            ?>
                                <tr style="border:1 px solid #D3D3D3;border-collapse:collapse">
                                    <td style="padding:5px;border-bottom:1 px solid #D3D3D3">
										<?php echo $res['name'];?>
                                    </td>
                                    <td style="padding:5px;border-bottom:1 px solid #D3D3D3">
										<?php echo $res['occupation'];?>
                                    </td>
                                    <td style="padding:5px;border-bottom:1 px solid #D3D3D3">
										<?php echo $res['flat_number'];?>
                                    </td>
                                </tr>
                            <?php
                        }
                        ?>
                   </table>
               </div>
            </div>
         </div>
    </div>
</div>
<div class="container">
	<div class="jumbotron">
    	<div class="row">
        	<div class="col-sm-6">
            	<h3>Grievances</h3>
                <h6>Fill out the below form to send us any grievances you may have and we will revert to you in 48 working hours.</h6>
                        <form method="post">
                            <div class="form-group">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" id="phone" class="form-control" placeholder="Contact Number" onKeyPress="return isNumber()">
                            </div>
                            <div class="form-group">
                                <textarea name="grievance" id="grievance" placeholder="Grievance" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" id="submit" class="" value="Submit">
                            </div>
                        </form>
            </div>
            <div class="col-sm-6">
            	<h3>Booking Facilities</h3>
    			<span><a href="booking.php?category=Amphitheatre">Amphitheatre</a><a href="booking.php?category=Multipurpose Hall" class="link">Multipurpose Hall</a><a href="booking.php?category=Multimedia Theatre" class="link">Multimedia Theatre</a><a href="booking.php?category=Guest Room" class="link">Guest Rooms</a><a href="booking.php?category=Badminton Court" class="link">Badminton Court</a></span>
            </div>
        </div>
    </div>
</div>
<div class="container">
        	<div class="row">
                <div class="col-sm-12" style="width:100%;height:200px;text-align:center">
                		<img src='<?php echo $advertisement_path; ?>' alt="no image found" width="100%" height="200px">
                </div>
            </div>
       
</div>
<div class="container" style="text-align:center">
<h3>Location Map</h3>
</div>
</body>
</html>
<?php
}
else
header("location:login.php");
?>
