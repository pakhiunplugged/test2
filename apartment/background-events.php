<?php
session_start();
include("connection.php");
$client_name="Century";//$_SESSION['client_name'];
//$member_name=$_SESSION['member_name'];
//$member_id=$_SESSION['member_id'];
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
?>
<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link href='fullcalendar.css' rel='stylesheet' />
<link href='fullcalendar.print.css' rel='stylesheet' media='print' />
<script src='lib/moment.min.js'></script>
<script src='lib/jquery.min.js'></script>
<script src='fullcalendar.min.js'></script>
<script>
	$(document).ready(function() {

		var data = <?php echo json_encode($array, JSON_PRETTY_PRINT) ?>;
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay,listMonth'
			},
			defaultDate: '2016-09-12',
			navLinks: true, 
			businessHours: true, 
			editable: true,
			/*events: [
				{
					title: 'Business Lunch',
					start: '2016-09-03T13:00:00',
					constraint: 'businessHours'
				},
				{
					title: 'Meeting',
					start: '2016-09-13T11:00:00',
					constraint: 'availableForMeeting', // defined below
					color: '#257e4a'
				},
				{
					title: 'Conference',
					start: '2016-09-18',
					end: '2016-09-20'
				},
				{
					title: 'Party',
					start: '2016-09-29T20:00:00',
				},

				// areas where "Meeting" must be dropped
				{
					id: 'availableForMeeting',
					start: '2016-09-11T10:00:00',
					
					end: '2016-09-11T16:00:00',
					rendering: 'background'
				},
				{
					id: 'availableForMeeting',
					start: '2016-09-13T10:00:00',
					end: '2016-09-13T16:00:00',
					rendering: 'background'
				},

				// red areas where no events can be dropped
				{
					start: '2016-09-24',
					end: '2016-09-28',
					overlap: false,
					rendering: 'background',
					color: '#ff9f89'
				},
				{
					start: '2016-09-06',
					end: '2016-09-08',
					overlap: false,
					rendering: 'background',
					color: '#ff9f89'
				},
				{
					title: 'Conference',
					start: '2016-10-08',
					end: '2016-10-10',
					overlap: false,
					rendering: 'background',
					color: '#ff9f89'
				}
			]*/
			events:  data,
		});
		
	});

</script>
<style>
	body {
		margin: 40px 10px;
		padding: 0;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		font-size: 14px;
	}
	
	#calendar {
		max-width: 900px;
		margin: 0 auto;
	}

</style>
</head>
<body>

	<div id='calendar'>
    </div>

</body>
</html>
<script>
	$(document).ready(function()
	{
		var first_id=$("#first_id").val();
		$(".main_id").click(function()
		{
			var main_id=$(this).html();
			var main_id=$("#main_id").val();
		});
	});
</script>