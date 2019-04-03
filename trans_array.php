<?php

include 'db_connect.php';
header('Content-Type:text/xml');
$id=$_GET['id'];
echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
echo '<response>';

                $sql_b = "SELECT q.item,q.unit,q.duration,q.price,q.qid,q.SID,q.BID
                FROM buyerproduct bp,quotationdb q where q.qid=bp.id and bp.id=".$id;
                $result_b = mysqli_query($connection,$sql_b);
                $c=0;
                $c=@mysqli_num_rows($result_b);
                if($c>0)
                {
                  while($row = $result_b->fetch_assoc())
                  {

							echo "<krishiyog bid='".$row['BID']."' qid='".$row['qid']."' sid='".$row['SID']."'>";
							echo '<item>'.$row['item'].'</item>';
							echo '<unit>'.$row['unit'].'</unit>';
							echo '<duration>'.$row['duration'].'</duration>';
							echo '<ftype>'.$row['price'].'</ftype>';

							echo '</krishiyog>';
				  }
				}





echo '</response>';
?>
