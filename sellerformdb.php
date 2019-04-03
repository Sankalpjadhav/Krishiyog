<?php
session_start();
include 'db_connect.php';
$unit= $_POST['unit'];
$item= $_POST['item'];
$variety= $_POST['variety'];
$price= $_POST['price'];
$duration= $_POST['duration'];
//echo $_POST['duration'];
$unit= $_POST['unit'];
$measure= $_POST['type'];
$num=$_SESSION['mobile'];
$id= $_POST['id'];
$bid= $_POST['bid'];
$transid= $_POST['trans_id'];
$q="select * FROM sellerdb where sMobNo=$num";
$result = mysqli_query($connection,$q);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//echo $row['SID'];
$sid = $row['SID'];
$capture=date('Y-m-d');
$capture1=date('h:i:s');
echo $variety;



//$query="INSERT INTO quotationdb(qid, SID, BID, price,item, unit, duration,measure) VALUES('".$id."','".$sid."','".$bid."','".$price."','".$item."','".$unit."','".$duration."','".$measure."')";
$query="INSERT INTO quotationdb(qid, SID, BID, price, item,variety, unit, duration, measure,quote_date,quote_time, flag, transactionId) VALUES ('".$id."','".$sid."','".$bid."','".$price."','".$item."','".$variety."','".$unit."','".$duration."','".$measure."','".$capture."','".$capture1."', 0,'".$transid."')";
$result=mysqli_query($connection,$query);

if($result)
{
  //$last_id=mysqli_insert_id($connection);
  //echo $last_id;
  $_SESSION['new']=1;
    header('location:quotesuccess.php');
		echo"<br>";
	}
	else
	{

    $_SESSION['new']=2;
		header('location:quotesuccess.php');
		echo"<br>";
	}


?>
