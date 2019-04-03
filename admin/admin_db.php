<?php
session_start();
include 'db_connect.php';

$sid= $_POST['Sid'];
$bid=$_POST['Bid'];
$Price= $_POST['Price'];
$item= $_POST['item'];
$unit= $_POST['unit'];
$duration= $_POST['duration'];
$measure=$_POST['measure'];

$q="SELECT * FROM quotationdb WHERE SID=$sid AND BID=$bid";
$result = mysqli_query($connection,$q);

$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

$Qid = $row['qid'];


$query="INSERT INTO `deletedb`(`qid`, `SID`, `BID`, `price`, `item`, `unit`, `duration`, `measure`) VALUES ('".$Qid."','".$sid."','".$bid."','".$Price."','".$item."','".$unit."','".$duration."','".$measure."')";
$result1=mysqli_query($connection,$query);


$q="DELETE FROM quotationdb where SID=$sid and BID=$bid AND qid=$Qid";
$result2=mysqli_query($connection,$q);

header('location:admin.php#datat');

?>
