<?php
session_start();
include 'db_connect.php';
$unit= $_POST['unit'];
$item= $_POST['item'];
$price= $_POST['price'];
$duration= $_POST['duration'];
//echo $_POST['duration'];
$unit= $_POST['unit'];
$measure= $_POST['type'];
$num=$_SESSION['mobile'];
$id= $_POST['id'];
$bid= $_POST['bid'];
$q="select * FROM sellerdb where sMobNo=$num";
$result = mysqli_query($connection,$q);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//echo $row['SID'];
$sid = $row['SID'];
$capture=date('Y-m-d');
$capture1=date('h:i:s');


$q="select * FROM quotationdb WHERE qid=$id AND SID=$sid AND BID=$bid";

$result = mysqli_query($connection,$q);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);


//$query="INSERT INTO quotationdb(qid, SID, BID, price,item, unit, duration,measure) VALUES('".$id."','".$sid."','".$bid."','".$price."','".$item."','".$unit."','".$duration."','".$measure."')";
         $query="UPDATE quotationdb SET price='".$price."', flag=0  WHERE SID='".$sid."' and BID='".$bid."' and qid='".$id."' ";

          $result=mysqli_query($connection,$query);
          if(! $result)
          {
            //$last_id=mysqli_insert_id($connection);
            //echo $last_id;

            ?>
          <script>
          alert("Cannot update! Try again!");
          </script>
            <?php

          		echo"<br>";
          	}

          	else
          	{
            ?>
              <script>
              alert("Updated Successfully!");
              </script>
                <?php
              }




  header('refresh:0;itemsearch.php');



?>
