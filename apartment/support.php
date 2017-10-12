<?php
session_start();
if(isset($_SESSION['member_name']))
{
include("connection.php");
$client_name=$_SESSION['client_name'];
$member_name=$_SESSION['member_name'];
$member_id=$_SESSION['member_id'];

$exe=mysqli_query($conn,"select * from ".$client_name."_services where category='plumber'");
$exe2=mysqli_query($conn,"select * from ".$client_name."_services where category='electrician'");
$exe33=mysqli_query($conn,"select * from ".$client_name."_services where category='carpenter'");
$exe44=mysqli_query($conn,"select * from ".$client_name."_services where category='maid'");
$exe5=mysqli_query($conn,"select * from ".$client_name."_services where category='taxi'");
$exe6=mysqli_query($conn,"select * from ".$client_name."_services where category='handyman'");
$exe7=mysqli_query($conn,"select * from ".$client_name."_services where category='tutor'");
$exe8=mysqli_query($conn,"select * from ".$client_name."_services where category='doctor'");

$query3="select path from ".$client_name."_advertisement where category='vertical'";
$exe3=mysqli_query($conn,$query3);
$res3=mysqli_fetch_assoc($exe3);
$advertisement_path3=$res3['path'];

$query4="select path from ".$client_name."_advertisement where category='horizontal'";
$exe4=mysqli_query($conn,$query4);
$res4=mysqli_fetch_assoc($exe4);
$advertisement_path4=$res4['path'];

?>
<hmtl>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
	.link
	{
		margin-left:20px;
	}
	.cat
	{
		padding:15px;
		border-bottom:2px solid #ddd;
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
<div class="container">
    <div style="width:100%;height:100px">
    </div>
</div>
<div class="container" style="margin-top:20px">
<div class="row">
   <div class="col-md-9">
   <h3>SUPPORT</h3>
        <div class="cat">
        <p data-toggle="collapse" data-target="#plumbers">PLUMBERS</p>
            <div  id="plumbers" class="collapse">
                <div class="table-responsive">
                    <table class="table">
                      <?php
                        while($res=mysqli_fetch_assoc($exe))
                        {
                            ?>
                            <tr>
                                <th><?php echo $res['name'];?></th>
                                <td><?php echo $res['phone'];?></td>
                                <td><?php echo $res['company'];?></td> 
                            </tr>
                            <?php
                        }
                      ?>  
                    </table>
                </div>
            </div>
        </div>
        <div class="cat">
        <p data-toggle="collapse" data-target="#carpenters">CARPENTERS</p>
            <div id="carpenters" class="collapse">
                <div class="table-responsive">
                    <table class="table">
                        <?php
                        while($res33=mysqli_fetch_assoc($exe33))
                        {
                            ?>
                            <tr>
                                <th><?php echo $res33['name'];?></th>
                                <td><?php echo $res33['phone'];?></td>
                                <td><?php echo $res33['company'];?></td> 
                            </tr>
                            <?php
                        }
                      ?>  
                    </table>
                </div>
            </div>
        </div>
        <div class="cat">
        <p data-toggle="collapse" data-target="#electricians">ELECTRICIANS</p>
            <div id="electricians" class="collapse">
                <div class="table-responsive">
                    <table class="table">
                       <?php
                        while($res2=mysqli_fetch_assoc($exe2))
                        {
                            ?>
                            <tr>
                                <th><?php echo $res2['name'];?></th>
                                <td><?php echo $res2['phone'];?></td>
                                <td><?php echo $res2['company'];?></td> 
                            </tr>
                            <?php
                        }
                      ?>   
                    </table>
                </div>
            </div>
        </div>
        <div class="cat">
            <p data-toggle="collapse" data-target="#maids">MAID SERVANTS</p>
                <div id="maids" class="collapse">
                    <div class="table-responsive">
                        <table class="table">
                            <?php
                        while($res44=mysqli_fetch_assoc($exe44))
                        {
                            ?>
                            <tr>
                                <th><?php echo $res44['name'];?></th>
                                <td><?php echo $res44['phone'];?></td>
                                <td><?php echo $res44['company'];?></td> 
                            </tr>
                            <?php
                        }
                      ?>  
                        </table>
                    </div>
                </div>   
        </div>
        <div class="cat">
            <p data-toggle="collapse" data-target="#handyman">HANDYMAN</p>
                <div id="handyman" class="collapse">
                    <div class="table-responsive">
                        <table class="table">
                            <?php
                        while($res6=mysqli_fetch_assoc($exe6))
                        {
                            ?>
                            <tr>
                                <th><?php echo $res6['name'];?></th>
                                <td><?php echo $res6['phone'];?></td>
                                <td><?php echo $res6['company'];?></td> 
                            </tr>
                            <?php
                        }
                      ?>  
                        </table>
                    </div>
                </div>
        </div>
        <div class="cat">
        <p data-toggle="collapse" data-target="#taxi_service">TAXI SERVICE</p>
            <div id="taxi_service" class="collapse">
                <div class="table-responsive">
                    <table class="table">
                        <?php
                        while($res5=mysqli_fetch_assoc($exe5))
                        {
                            ?>
                            <tr>
                                <th><?php echo $res5['name'];?></th>
                                <td><?php echo $res5['phone'];?></td>
                                <td><?php echo $res5['company'];?></td> 
                            </tr>
                            <?php
                        }
                      ?>  
                    </table>
                </div>
            </div>
        </div>
        <div class="cat">
        <p data-toggle="collapse" data-target="#doctors">DOCTORS</p>
            <div id="doctors" class="collapse">
                <div class="table-responsive">
                    <table class="table">
                        <?php
                        while($res8=mysqli_fetch_assoc($exe8))
                        {
                            ?>
                            <tr>
                                <th><?php echo $res8['name'];?></th>
                                <td><?php echo $res8['phone'];?></td>
                                <td><?php echo $res8['company'];?></td> 
                            </tr>
                            <?php
                        }
                      ?>  
                    </table>
                </div>
            </div>
        </div>
        <div class="cat">
            <p data-toggle="collapse" data-target="#tutors"> TUTORS</p>
                <div id="tutors" class="collapse">
                    <div class="table-responsive">
                        <table class="table">
                            <?php
                        while($res7=mysqli_fetch_assoc($exe7))
                        {
                            ?>
                            <tr>
                                <th><?php echo $res7['name'];?></th>
                                <td><?php echo $res7['phone'];?></td>
                                <td><?php echo $res7['company'];?></td> 
                            </tr>
                            <?php
                        }
                      ?>  
                        </table>
                    </div>
                </div>
        </div>
   </div>
   <div class="col-md-3">
   		<div style="width:100%;height:600px;text-align:center;"><img src='<?php echo $advertisement_path3;?>' alt="no image found" width="100%" height="600px"></div>
   </div>
</div>
</div>


<div class="container">
<div style="width:100%;height:100px">
</div>
</div>

<div class="container">
        	<div class="row">
                <div class="col-sm-12" style="width:100%;height:200px;text-align:center">
                		<img src='<?php echo $advertisement_path4; ?>' alt="no image found" width="100%" height="200px">
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
