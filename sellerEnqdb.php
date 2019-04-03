<?php session_start();

include 'db_connect.php';


//echo $_POST["farming_type"];echo "<br>";

$ftype = $_POST['farming_type'];
$selemail = $_POST['email'];
$selltan=$_POST['tan'];
$sellpan=$_POST['pan'];
$sellgst=$_POST['gst'];
$sellmsg= $_POST['message'];

echo "<em> login_user = ". $_SESSION['login_user'] ." </em>";

echo "<em> SID = ".$_SESSION['SID'] . "</em>";

//$last_id=mysqli_insert_id($connection);
$query="INSERT INTO sellerenq(sellerid,farming_type,sellergst,sellertan,sellerpan,selleremail,sellermessage) VALUES(' ".$_SESSION['SID']." ','".$ftype."','".$sellgst."','".$selltan."','".$sellpan."','".$selemail."','".$sellmsg."')";

//echo "$query";
if(mysqli_query($connection,$query))
{
  //$last_id=mysqli_insert_id($connection);
  //echo $last_id;
		echo"Insertion Successful";
		echo"<br>";
	}
	else
	{
		echo"Insertion Failed ".$query."<br>".mysqli_error($connection);
		echo"<br>";
	}

	mysqli_close($connection);

// header("Location:enquiryFormSuccess.php");
 ?>
