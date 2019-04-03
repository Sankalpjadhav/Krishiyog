<?php

include 'db_connect.php';
header('Content-Type:text/xml');
$id=$_GET['id'];
echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
echo '<response>';

                $sql_b = "SELECT s.firstName,s.lastName,s.uniqueid
                FROM buyerproduct bp,quotationdb q,sellerdb s where bp.id=q.qid and bp.id=$id and s.SID=q.SID";
                $result_b = mysqli_query($connection,$sql_b);
                $c=0;
                $c=@mysqli_num_rows($result_b);
                if($c>0)
                {
                  while($row = $result_b->fetch_assoc())
                  {

							echo "<krishiyog >";
							echo "<seller>".$row['firstName']." ".$row['lastName']."</seller>";
              echo '<uniqueid>'.$row['uniqueid'].'</uniqueid>';
							echo '</krishiyog>';
				  }
				}





echo '</response>';
?>
