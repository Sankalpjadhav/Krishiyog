<?php

function getTransId($NoItems, $city, $pincode)
{
  include 'db_connect.php';

  /*$sql="SELECT * FROM buyerdb WHERE BID='".$_SESSION['bid']."'";

  $RES= mysqli_query($connection,$sql);
  $row = mysqli_fetch_assoc($RES);*/
  /*$ci="SELECT * FROM buyerenq WHERE  buyerenq.BID='".$_SESSION['bid']."'";
  $r= mysqli_query($connection, $ci);
  $r1=mysqli_fetch_assoc($r);
  $city=$r1['city'];
  $zip=$r1['pincode'];
  echo $flag;
  echo $zip;

  $city=substr(strtoupper($city),0,3);
  $pin=$zip;

*/

  $city=substr(strtoupper($city),0,3);
  $it=$NoItems;
   $d = date('YmdH');
  $final_id = $city.$d.$pincode.$it;

  return $final_id;
}


 ?>
