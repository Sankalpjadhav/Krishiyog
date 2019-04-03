<?php 
include 'db_connect.php';
session_start();
$id=$_POST['id'];

$query="DELETE FROM buyerproduct where id=$id";
$query1="DELETE FROM quotationdb where qid=$id";
$query5= "select s.sMobNo from quotationdb q, sellerdb s where  q.qid=$id and q.SID=s.SID ";
$result5 = mysqli_query($connection,$query5);


//echo "$query";
	if(mysqli_query($connection,$query))
	{ $flag=0;
		

	}
	else
	{ $flag=1;
		//echo"Deletion Failed ".$query."<br>".mysqli_error($connection);
		//echo"<br>";
	}

	if(mysqli_query($connection,$query1))
	{ $flag1=0;
		

	}
	else
	{ $flag1=1;
		//echo"Deletion Failed ".$query."<br>".mysqli_error($connection);
		//echo"<br>";
	}
	?>
	<!DOCTYPE html>
    <html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>KrishiYog | Welcome</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <style media="screen">


    .shadow {
    box-shadow: 0px 11px 15px -7px rgba(0, 0, 0, 0.2), 0px 24px 38px 3px rgba(0, 0, 0, 0.14), 0px 9px 46px 8px rgba(0, 0, 0, 0.12);    transition: box-shadow 0.28s cubic-bezier(0.4, 0, 0.2, 1);
    }
    body {
    background: url(grass.JPG) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    }
    </style>
    <body>

    <div style="max-width:80%;margin-top:100px;" class="shadow p-3 mb-5 bg-white rounded container" style="margin-bottom:50px;">

    <img height="160" width="160" src="flag.jpg" alt="Indian Flag" style="float:left">
    <?php
    if($flag == 0 && $flag1==0){?>
    <center><h1>Delete successfully</h1></center>
    <center >
        <img  src="checked.png" alt="" height="100">
        <h3 style="margin-left:-20px"></h3>
    </center>
    <?php } ?>
    <?php
    if($flag==1 && $flag1==1){?>
    <center><h1>Deletion Failed</h1></center>
    <center >
    <img  src="images/cancel.png" alt="hi" height="100" >
    <h3 style="margin-left:-20px"></h3>

    </center>
    <?php } ?>
    <br/>
    <center>
        <h6 style="margin-right:-140px">Download our app</h6>
    <a style="margin-right:-140px" href="https://play.google.com/store/apps/details?id=com.krishiyog.krishi_udyog" target="_blank"><img src="http://www.niftybuttons.com/googleplay/googleplay-button1.png" alt="Get on Google Play (Button via NiftyButtons.com)"></a><br>

    </center>
    <!-- <center> -->
    <a href="bdash.php"><button type="button"  class="btn btn-success" name="button">Continue</button></a>

    <!-- </center> -->

    </div>
	</body>
	</html>
<?php

	mysqli_close($connection);

// header("Location:enquiryFormSuccess.php");
 
?>