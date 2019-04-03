<?php

include 'db_connect.php';
$Qid=$_GET['id'];

$num1=substr(strtoupper($Qid),0,1);
$num2=substr(strtoupper($Qid),1,2);
$id=substr(strtoupper($Qid),2,$num1);
$sid=substr(strtoupper($Qid),(2+$num1),$num2);
header('Content-Type:text/xml');
echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
echo '<response>';

                $sql_b = "SELECT q.item,q.unit,q.duration,q.price,bp.ftype,s.sMobNo, s.firstName, s.lastName,s.uniqueid,b.firstName, b.lastName,b.uniqueid, b.bMobNo,q.qid,q.SID,q.BID
                FROM quotationdb q ,sellerdb s, buyerdb b, buyerproduct bp where q.qid=".$id." and q.SID=".$sid."
				and q.BID=b.BID  and q.SID=s.SID and q.qid=bp.id";
                $result_b = mysqli_query($connection,$sql_b);
                $c=0;
                $c=@mysqli_num_rows($result_b);
                if($c>0)
                {
                  while($row = mysqli_fetch_array($result_b))
                  { 
			  
							echo "<krishiyog bid='".$row['BID']."' qid='".$row['qid']."' sid='".$row['SID']."'>";
							echo '<item>'.$row['item'].'</item>';
							echo '<unit>'.$row['unit'].'</unit>';
							echo '<duration>'.$row['duration'].'</duration>';
							echo '<price>'.$row['price'].'</price>';
							echo '<ftype>'.$row['ftype'].'</ftype>';
							
							echo "<seller>".$row[6]." ".$row[7]."</seller>";
							echo '<suid>'.$row[8].'</suid>';
							echo '<smob>'.$row['sMobNo'].'</smob>';
							
							echo "<buyer>".$row[9]." ".$row[10]."</buyer>";
							echo '<buid>'.$row[11].'</buid>';
							echo '<bmob>'.$row['bMobNo'].'</bmob>';
							
						
							
							echo '</krishiyog>';
				  }
				}





echo '</response>';
?>




