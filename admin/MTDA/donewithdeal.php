<?php

include 'db_connect.php';

$Bid=$_GET['bid'];
$Sid=$_GET['sid'];
$Id=$_GET['qid'];
header('Content-Type:text/xml');
echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
echo '<response>';

        $sql_a="SELECT * FROM quotationdb where SID='".$Sid."' and BID='".$Bid."' and qid='".$Id."'";
        $result_a = mysqli_query($connection,$sql_a);

        $row = mysqli_fetch_array($result_a,MYSQLI_ASSOC);
        $sid= $row['SID'];
        $bid=$row['BID'];
        $Price= $row['price'];
        $item= $row['item'];
        $unit= $row['unit'];
        $duration= $row['duration'];
        $measure=$row['measure'];
        if ($bid!=0 || $sid!=0) {
        $query="INSERT INTO `deletedb`(`qid`, `SID`, `BID`, `price`, `item`, `unit`, `duration`, `measure`) VALUES ('".$Id."','".$sid."','".$bid."','".$Price."','".$item."','".$unit."','".$duration."','".$measure."')";
        $result1=mysqli_query($connection,$query);
        }
        $sql_b = "DELETE FROM quotationdb where SID='".$Sid."' and BID='".$Bid."' and qid='".$Id."'";
				$result_b = mysqli_query($connection,$sql_b);
				echo "BID".$Bid;
				echo "SID".$Sid;
				echo "ID".$Id;
echo '</response>';
?>
