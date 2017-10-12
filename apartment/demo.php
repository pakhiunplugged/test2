<?php
	include("connection.php");
	$exe=mysqli_query($conn,"select * from test ");
	
	$array=array();
	while($res=mysqli_fetch_assoc($exe))
	{
		$date=$res['date'];
		$date=date("d-m-y",strtotime($date));
		$value=$res['booking_for'];
		$array[] = array('date' => "$date" ,'value' => "$value");
	}	
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="renderer" content="webkit">
<title>Examples</title>
<link rel="stylesheet" href="calendar.css">
<style type="text/css">
    html {
        font: 500 14px "Helvetica Neue",Helvetica,Arial,sans-serif;
        color: #333;
    }
    a {
        text-decoration: none;
    }
    ul, ol, li {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    #demo {
        width: 300px;
        margin: 30px auto;
    }
    p {
        margin: 0;
    }
    input 
	{
        margin: 30px auto;
        height: 28px;
        width: 200px;
        padding: 0 6px;
        border: 1px solid #ccc;
        outline: none;
    }
</style>
</head>
<body>
    <div id="demo">

        <div id="ca"></div>
        <input type="text" id="dt" placeholder="trigger calendar">
        <div id="dd"></div>
		
    </div>
    <div id="ex">
    </div>
<script src="http://apps.bdimg.com/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="calendar.js"></script>
<script>
alert("hii");
   /* var now = new Date();
    var year = now.getFullYear();
    var month = now.getMonth() + 1;
    var date = now.getDate();*/
	
	var data="<?php echo $array;?>";
	//var data=JSON.parse(data);
	//$("#ex").html(data);
	
	var data = [
        {
            date: year + '-' + month + '-' + (date - 1),
            value: 'hello'
        },
        {
            date: year + '-' + month + '-' + date,
            value: 'Conference Meeting'
        },
        {
            date: new Date(year, month - 1, date + 1),
            value: 'Fitness day'
        }
    ];

    // inline
    $('#ca').calendar({
        // view: 'month',
        width: 320,
        height: 320,
        // startWeek: 0,
        // selectedRang: [new Date(), null],
        data: data,
        onSelected: function (view, date, data) {
            console.log('view:' + view)
            console.log('date:' + date)
            console.log('data:' + (data || '无'));
        },
        viewChange: function (view, y, m) {
            console.log(view, y, m)
        }
    });

    // picker
    $('#dd').calendar({
        trigger: '#dt',
        // offset: [0, 1],
        zIndex: 999,
        data: data,
        onSelected: function (view, date, data) 
		{
            console.log('event: onSelected')
        },
        onClose: function (view, date, data) 
		{
            console.log('event: onClose')
            console.log('view:' + view)
            console.log('date:' + date)
            console.log('data:' + (data || '无'));
        }
    });

</script>
</body>
</html>
