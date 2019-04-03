<?php
session_start();
include 'db_connect.php';
include 'trans_id.php';
$farming_type = $_POST['farming_type'];
$companyName = $_POST['companyName'];
$compphno = $_POST['phoneno'];
$complandno = $_POST['landlineno'];
$compuin = $_POST['uin'];
$email = $_POST['email'];
$bankName = $_POST['bankName'];
$ifsc = $_POST['ifsc'];
$accountNumber = $_POST['accountNumber'];
$tan=$_POST['tan'];
$pan=$_POST['pan'];
$gst=$_POST['gst'];
$deliveryAddress = $_POST['deliveryAddress'];
$message= $_POST['message'];
$BX_Item = $_POST['BX_Item'];
$BX_variety =$_POST['BX_variety'];
$BX_type = $_POST['BX_type'];
$BX_units = $_POST['BX_units'];
$BX_duration = $_POST['BX_duration'];
$state=$_POST['state'];
$pincode=$_POST['pincode'];
$city=$_POST['city'];
$c=0;
foreach ($BX_Item as $key => $value)
{
  $c++;
}
$ci=substr(strtoupper($city),0,3);
date_default_timezone_set("Asia/Calcutta");
$dateTime=date('ymdHi');
$final_id=$ci.$pincode.$c.$dateTime;

$_SESSION['tid']=$final_id;
$query="INSERT INTO buyerenq(userid,category,companyName,email,bankName,IFSC,accountNumber,deliveryAddress,gst,tan,pan,message,companyPhno,compLandno,compUniqueid,state,pincode,city) VALUES('".$_SESSION['login_user']."','".$_SESSION['category']."','".$companyName."','".$email."','".$bankName."','".$ifsc."','".$accountNumber."','".$deliveryAddress."','".$gst."','".$tan."','".$pan."','".$message."','".$compphno."','".$complandno."','".$compuin."','".$state."','".$pincode."','".$city."')";
mysqli_query($connection,$query);


foreach ($BX_Item as $key => $value) {
  $item = $BX_Item[$key];
  $variety =$BX_variety[$key];
  $ftype=$farming_type[$key];
  $unit = $BX_units[$key];
  $type = $BX_type[$key];
  $duration = $BX_duration[$key];

    $sql = "INSERT INTO buyerproduct(userid,category,item,unit,type,duration,ftype,BID,variety,transactionId)  values('".$_SESSION['login_user']."','".$_SESSION['category']."','".$item."','".$unit."','".$type."','".$duration."','".$ftype."','".$_SESSION['bid']."','".$variety."','".$final_id."')";
     mysqli_query($connection,$sql);

}

header("location:enquiryFormSuccess.php");
 ?>
