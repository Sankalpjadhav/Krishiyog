<?php
 include 'db_connect.php';
 
 $s="SELECT * from quotationdb";
 $result_b = mysqli_query($connection,$s);



 /*$row = mysqli_fetch_array($result_b,MYSQLI_ASSOC);
 $c=@mysqli_num_rows($result_b);
 echo $c;*/
 $i=0;
 while($row = $result_b->fetch_assoc()){
 
   $sa="SELECT * from buyerenq where BID=".$row['BID'];
 $result_ba = mysqli_query($connection,$sa);
  $row2 = @mysqli_fetch_array($result_ba,MYSQLI_ASSOC);
  $city=$row2['city'];
  $pincode=$row2['zipcode'];
  $city=substr(strtoupper($city),0,3);
  $d = date('YmdHi');  
  $final_id = $city.$pincode.$d.$i;
  echo $final_id."<br>";
  
  $sql="UPDATE `quotationdb` SET transactionId='".$final_id."' where id='".$row['qid']."'";
  mysqli_query($connection,$sql);
	$i=$i+1;

 }

 ?>
