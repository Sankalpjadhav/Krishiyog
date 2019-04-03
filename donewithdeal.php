<?php

include 'db_connect.php';
$Bid=$_GET['bid'];
$Sid=$_GET['sid'];
$Id=$_GET['qid'];
header('Content-Type:text/xml');
echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
echo '<response>';

                $sql_b = "DELETE FROM quotationdb where SID='".$Sid."' and BID='".$Bid."' and qid='".$Id."'";
				$result_b = mysqli_query($connection,$sql_b);
				echo "BID".$Bid;
				echo "SID".$Sid;
				echo "ID".$Id;


echo '</response>';
?>
