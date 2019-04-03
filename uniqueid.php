<?php


function getUniqueId($fname,$lname,$mobile)
{
  $fn=substr(strtoupper($fname),0,2);
  $ln=substr(strtoupper($lname),0,2);

  $m=date('m');
  $y=date('y');
  $d=date('d');
  $final_id = $ln.$fn.$d.$m.$y.$mobile;
  return $final_id;
}

 ?>
