<html>
<head>
<link href="stylesheet.css" rel="stylesheet"></link>
</head>
<body>
<header>
	<div class="div1">
    	<div class="left">
        	
        </div>
        <div class="right">
        </div>
    </div>
    <nav>
    <ul>
    	<li><a href="home.php">HOME</a></li>
        <li><a href="aboutus.php">ABOUT US</a></li>
        <li><a href="features.php">FEATURES</a></li>
        <li><a href="support.php">SUPPORT</a></li>
        <li><a href="contactus.php">CONTACT</a></li>
    </ul>
    </nav>
</header>
<section class="sec1">
	<img src="../images/banner1.jpg">
</section>
<section class="sec2">
	<div class="left content">
        <div class="wrap">
            <div class="left griev">
            	<h3>GRIEVANCES</h3>
                    <p>Fill out the below form to send us any grievances you may have and we will revert to you in 48 working hours.</p>
                    <form method="post">
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-field" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" id="phone" class="form-field" placeholder="Contact Number" onKeyPress=" return isNumber()">
                        </div>
                        <div class="form-group">
                            <textarea name="grievance" id="grievance" placeholder="Grievance" class="form-field"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="" value="Submit">
                        </div>
                    </form>
            </div>
            <div class="right notice">
            	<table>
                <tr>
                    <th id="main">NOTICE BOARD</th>
                </tr>
                <tr>
                    <td>Session on Beauty and Fashion  by Tara Anand.Session on Beauty and Fashion  by Tara Anand</td>
                </tr>
                <tr>
                    <td>Salsa classes.Salsa classes.Salsa classes.Salsa classes.Salsa classes.Salsa classes.</td>
                </tr>
                </table>
            </div>
        </div>
        <div class="booking">
        </div>
    </div>
    <div class="left advertise">
    </div>
</section>
<script>
function isNumber()
{
	$(body).keypress(function()
	{
		alert("Hii, you detected the things correctly");
		return false;
	});
}
</script>
<script>
$(document).ready(function()
{
	$("#submit").click(function()
	{
		var data="15";
		var name=$("#name").val();
		var email=$("#email").val();
		var phone=$("#phone").val();
		if(name=="")
		{
			alert("Please Fill your name");
			$(this).focus();
			return false;
		}
		if(email=="")
		{
			alert("Please Fill your Email Id");
			$(this).focus();
			return false;
		}
		if(phone=="")
		{
			alert("Please fill your contact number");
			var confirmation=confirm("Please confrim whether you want to delete this member or not");
			if(confirmation==true)
			{
				$.ajax("delete_member.php",{data:data},function(response)
				{
					if(response=="true")
					{
						alert("Member deleted successfully");
						window.location.allower();
					}
					else
					{
						alert("Member not deleted");
						return false;
					}
				});
			}
			return false;
		}
	});
});
</script>
</body>
</html>
<?php

?>