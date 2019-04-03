<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


	<script src="admin.js"></script>

	<style>
	#show1{display:none;}
	#show2{display:none;}
	#show3{display:none;}
	</style>
</head>



<body >



	<!--Modal to be displayed on click on a transactionid-->
	<div class="container">
	  <!-- Trigger the modal with a button
	  <button type="button" class="btn btn-info btn-lg" >Open Modal</button>
	  -->

	  <!-- Modal -->
	  <div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">

		  <!-- Modal content-->
		  <div class="modal-content">
			<div class="modal-header">
			<h4 class="modal-title">Transaction details</h4>
			  <button type="button" class="close" data-dismiss="modal">&times;</button>

			</div>
			<div class="modal-body">
			  <table class="table table-hover"  id="Seller">
			  </table>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		  </div>

		</div>
	  </div>

	</div>



<div class="jumbotron" >
	<div class="container">
	<div class="row">
	<div class="col-md-6">
		<div class="btn-group btn-group-lg" id="tra">
			<button type="button" class="btn btn-primary" onclick="show(); ">Transaction ID</button>

		<div class="container bg-light" >
			<div class="row" style="padding-top:40px;">
				<div  class="col-md-12">
					<!--This division will contain the list of all the transaction ids-->
										<?php
  include 'db_connect.php';
  $limit=7;
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
			          $pagLink.= "<a href='transactionid.php?page=".$i."'>".$i."</a>&nbsp;&nbsp;";   /* GET does things like this! */

	          }
	          echo $pagLink . "</center>";

?>
				</div>
			</div>
		</div>

		</div>
		</div>
		<div id="whole" class="col-md-6">
		<h1 id="show1">TRANSACTION DETAILS</h1>
		<table class='table table-hover' id='demo1'>
			<!--Content will be fetched through Ajax-->
		</table>
		<h1 id="show2">SELLER DETAILS</h1>
		<table class='table table-hover' id='demo2'>
			<!--Content will be fetched through Ajax-->
		</table>
		<h1 id="show3">BUYER DETAILS</h1>
		<table class='table table-hover' id='demo3'>
			<!--Content will be fetched through Ajax-->
		</table>
		</div>
		</div>
		</div>
<br>
<br>
<br>
<br>
<br>
<br>
</div>




</body>
</html>
