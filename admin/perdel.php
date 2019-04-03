<?php
session_start();
include 'db_connect.php';
$sid= $_POST['Sid'];
$bid=$_POST['Bid'];
$price= $_POST['price'];
$item= $_POST['item'];
$unit= $_POST['unit'];
$duration= $_POST['duration'];
$measure=$_POST['measure'];

$q="SELECT * FROM deletedb WHERE SID=$sid AND BID=$bid";
$result = mysqli_query($connection,$q);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$Qid = $row['qid'];

$q1="DELETE FROM deletedb where SID=$sid AND BID=$bid AND qid=$Qid";
$result2=mysqli_query($connection,$q1);

header('location:lostquote.php');

?>
