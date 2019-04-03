<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</script>

<style>

</style>
</head>

<body >
<script>
function krisho(val) {
  var xhttp;

  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
       sellerlist(this);
    }
  };
  xhttp.open("GET", "sellerajax.php?id="+val, true);
  xhttp.send();
}

function deal(sid,bid,qid,val) {
  var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        my(val);
      }
    };
    xmlhttp.open("GET", "donewithdeal.php?bid="+bid+"&sid="+sid+"&qid="+qid, true);
    xmlhttp.send();

}



function sellerlist(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var table="<tr><th>Item</th><th>Unit</th><th>Duration</th><th>Ftype</th><th></th></tr>";
  var x = xmlDoc.getElementsByTagName("krishiyog");
  for (i = 0; i <x.length; i++) {
	sid=x[i].getAttribute('sid');
	bid=x[i].getAttribute('bid');
	qid=x[i].getAttribute('qid');

    table += "<tr><td>" +
    x[i].getElementsByTagName("seller")[0].childNodes[0].nodeValue +
    "</td><td>   " +
    x[i].getElementsByTagName("uniqueid")[0].childNodes[0].nodeValue +
    "</td><td>   " +
    "</td><td><div class='btn btn-primary' id='newu' onclick='deal(sid,bid,qid,this)'>DEAL</div>  " +i+
    "</td></tr>";
  }
  document.getElementById("demo").innerHTML = table;

}


function myFunction(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var table="<tr><th>Item</th><th>Unit</th><th>Duration</th><th>Ftype</th><th></th></tr>";
  var x = xmlDoc.getElementsByTagName("krishiyog");
  for (i = 0; i <x.length; i++) {
	sid=x[i].getAttribute('sid');
	bid=x[i].getAttribute('bid');
	qid=x[i].getAttribute('qid');

    table += "<tr><td>" +
    x[i].getElementsByTagName("item")[0].childNodes[0].nodeValue +
    "</td><td>   " +
    x[i].getElementsByTagName("unit")[0].childNodes[0].nodeValue +
    "</td><td>   " +
    x[i].getElementsByTagName("duration")[0].childNodes[0].nodeValue +
    "</td><td>   " +
    x[i].getElementsByTagName("ftype")[0].childNodes[0].nodeValue +
    "</td><td><div class='btn btn-primary' id='newu' onclick='deal(sid,bid,qid,this)'>DEAL</div>  " +i+
    "</td></tr>";
  }
  document.getElementById("demo").innerHTML = table;

}

function my(xm)
{
	var x=$(xm);
	$(document).ready(function(){
  x.click(function(){
    x.html("<img  src='/images/checked.png'/>");
	x.slideDown("slow");




				});
	});
}


</script>

<div class="row">
  <div class="col-md-12">
  <table class='table table-stripped' style='position:fixed;border:1px solid black' id='demo'>

  </table><br><br><br><br><br><br>
  </div>
<div class="col-md-12">
<?php
  include 'db_connect.php';
  $limit=15;
  if(isset($_GET["page"])){
    $page=$_GET["page"];}
    else{
	     $page=1;
     }

     $start_from=($page-1) * $limit;

     $sql_b = "SELECT DISTINCT bp.id,bp.transactionid from buyerproduct bp,quotationdb q where q.qid=bp.id LIMIT ".$start_from.",".$limit;
                $result_b = mysqli_query($connection,$sql_b);
                $c=0;
                $c=@mysqli_num_rows($result_b);
                if($c>0)
                {
                  while($row = $result_b->fetch_assoc())
                  {
							         echo "<div   id='".$row['id']."' onclick='transactionid(this.id)'
													data-toggle='modal' data-target='#myModal'><span class='btn btn-primary' style='width:100%;'>".$row['transactionid']."</span></div><br><br>";
                  }

                }
          $sql="SELECT count(qid) FROM quotationdb";	 
			$count_result=mysqli_query($connection,$sql);
			$row = $count_result->fetch_row();
			$total_records=$row[0];

			
			$totalpages=ceil($total_records/$limit);
			
			$pagLink ="<br/><center>";
	         for($i=1;$i<=$totalpages;$i++)
	          {
			          $pagLink.= "<a href='TID.php?page=".$i."'>".$i."</a>&nbsp;&nbsp;";   /* GET does things like this! */

	          }
	          echo $pagLink . "</center>";

?>



</div>

</div>

<div class="display-4" id="clickit">
</div>



</body>
</html>
