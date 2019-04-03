<?php
session_start();
include 'db_connect.php';

$sid= $_SESSION['SID'];
$bid=$_POST['bid'];
$id=$_POST['id'];
$Price= $_POST['Price'];
$item= $_POST['item'];
$unit= $_POST['unit'];
$duration= $_POST['duration'];
$measure=$_POST['measure'];

$q="SELECT * FROM quotationdb WHERE SID=$sid AND BID=$bid AND qid=$id";
$result = mysqli_query($connection,$q);

$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

$Qid = $row['qid'];




$q="DELETE FROM quotationdb where SID=$sid and BID=$bid";
$result2=mysqli_query($connection,$q);

header('location:itemsearch.php');

?>
