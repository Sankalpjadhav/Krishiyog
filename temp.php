<?php
 include 'db_connect.php';
 
 $s="SELECT * from sellerdb ";
 $result_b = mysqli_query($connection,$s);

$row = mysqli_fetch_array($result_b,MYSQLI_ASSOC);
 $c=@mysqli_num_rows($result_b);
 echo $c;
 while($row = $result_b->fetch_assoc()){
  $fn=substr(strtoupper($row['firstName']),0,2);
  $ln=substr(strtoupper($row['lastName']),0,2);
$sid=$row['SID'];
echo $sid."<br>";
  $m=date('m');
  $y=date('y');
  $d=date('d');
  $final_id = $ln.$fn.$d.$m.$y.$row['sMobNo'];
  $sql="UPDATE `sellerdb` SET uniqueid='".$final_id."' where SID='".$sid."'";
  mysqli_query($connection,$sql);

 }

 ?>
