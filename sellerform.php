<?php
session_start();
include 'loggedInCheck.php';
 ?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Krishiyog Naturals &mdash;Seed to wellness</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">




  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
  <!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">



	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


			<style>
				.filterDiv {
				  color: #ffffff;
				  width: 100%;
				  margin-bottom: 30px;
				  display: none;
				  color: black;
				}
				.show {
				  display: block;
				}
				.container {
				  margin-top: 20px;
				  overflow: hidden;
				}

			</style>

		<!-- Theme style  -->
				<link rel="stylesheet" href="css/style.css">
		 <!-- Modernizr JS -->
				 <script src="js/modernizr-2.6.2.min.js"></script>
		 <!-- Global site tag (gtag.js) - Google Analytics -->
				<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123909367-1"></script>
				<script type="text/javascript">
						function validate() {
						  var	ifsc = $("#ifsc").val();
						  var ifscChecker = /^[A-Z|a-z]{4}[0][\d]{6}$/;
						  var accountNumber = $("#accountNumber").val();
						  var accountNumberChecker = /^\d{9,18}$/;
						  /*if (!ifscChecker.test(ifsc)) {
							$("#errorifsc").html("Invalid IFSC code");
							document.getElementById('errorifsc').style.color="red";
						  }else {
							$("#errorifsc").html("");
						  }*/
						  /*if (!accountNumberChecker.test(accountNumber)) {
							$("#erroraccountNumber").html("Invalid Account Number");
							document.getElementById('erroraccountNumber').style.color="red";
						  }else {
							$("#erroraccountNumber").html("");
						  }*/
						  if ( document.sellerForm.gst.value.length!=15) {
								 document.sellerForm.gst.focus() ;
								 document.getElementById('errorsgst').innerHTML="Enter gst with 15 digits";
								 document.getElementById('gst').style.color="red";
							  return false;
						  }
						  if (document.sellerForm.tan.value.length!=10) {
								 document.sellerForm.tan.focus() ;
								 document.getElementById('errorstan').innerHTML="Enter tan with 10 digits";
								 document.getElementById('tan').style.color="red";
							  return false;
						  }
						  if (document.sellerForm.pan.value.length!=16) {
								 document.sellerForm.pan.focus() ;
								 document.getElementById('errorspan').innerHTML="Enter pan with 16 digits";
								 document.getElementById('pan').style.color="red";
							  return false;
						  }
						  return true;
						}

				</script>


				<script>
						  window.dataLayer = window.dataLayer || [];
						  function gtag(){dataLayer.push(arguments);}
						  gtag('js', new Date());
						  gtag('config', 'UA-123909367-1');
				</script>

	</head>


<body>

  <nav class="gtco-nav" role="navigation">
    <div class="gtco-container">
      <div class="row">
        <div class="col-xs-2">
          <div id="gtco-logo"><a href="index.php"><img src="images/logo0.jpg" style="max-width:300px;max-height: 100px;margin-top:-15px;margin-left:-30px"/></a></div>
        </div>
        <div class="col-xs-10 text-center menu-1">
          <ul>
            <span class="icon">
              <li><a class="active" href="index.php"><i class="icon-home"></i></a></li>
            </span>
              <li><a href="about.php"><b>About</a></b></li>
              <li><a class="nat-farm"><b>Natural Farming</a></b></li>
              <li><a href="resource.php"><b>Resources</a></b></li>
              <li><a href="contact.php"><b>Contact us</a></b></li>
              <li><?php if(!isset($_SESSION['login_user']) && !isset($_SESSION['category']))
                    {
                      echo "<li><a href='login.php'><b>LOGIN</b></a></li>";
                      echo "<li><a href='signup2.php'><b>REGISTER</b></a></li>";
                    }
                    else if(isset($_SESSION['login_user']) && isset($_SESSION['category']))
                    {
                      echo "<li><a href='logout.php'><b>Logout</b></a></li>";
                      echo "<li><b>Welcome ".$_SESSION['fname']."!!</b></li>";
                    }
              ?></li>
            </ul>




        </div>



      </div>
    </nav>


    <div style="margin-top:150px;margin-left:30px;margin-right:30px;">
      <div><h3>Seller Enquiry Form</h3></div>

				<?php
                if ($_SESSION['category'] == 'sellerdb') {
                //  echo "<em> login_user = ". $_SESSION['login_user'] ." </em>";
                //  echo "<em> SID = ".$_SESSION['SID'] . "</em>";
                  echo "<div class='row'>
                          <div class='col-md-6'>
                            Name: ".$_SESSION['fname']." ".$_SESSION['lname']."
                          </div>
                          <div class='col-md-6'>
                            Contact Number: ".$_SESSION['mobile']."
                          </div>
                        </div>
                        <div class='row'>
                                <div class='col-md-6'>
                                  Address: ".$_SESSION['address']."
                                </div>
                                <div class='col-md-6'>
                                  Pincode: ".$_SESSION['pincode']."
                                </div>
                              </div>
                   ";
                }

                ?>
        </div>
         <hr>

			<form name="sellerForm"  onsubmit="return(validate())" method="post" >

                   <div class="col-md-6 col-md-offset-3" >
                   <select name="farming_type" id="myBtnContainer" class="form-control" onchange="filterSelections()" required >
					   <option disabled="disabled">Farming type</option>
                       <option value="all"  selected>All</option>
                       <option value="natural" >Natural Farming(ZBNF)</option>
                       <option value="group" >Group Organic Certified</option>
                       <option value="pgs" >Organic PGS</option>
                       <option value="self" >Organic(Self Certified)</option>
                       <option value="organic" >Organic(Not Certified)</option>
                       <option value="conventional" >Conventional</option>

                   </select>

               </div>
			 </form>

	      <br>
        <br>

			<div class="container">

			<?php
                include 'db_connect.php';
                $q="select * FROM sellerdb where sMobNo=".$_SESSION['mobile'];
                $result = mysqli_query($connection,$q);
                $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                //echo $row['SID'];
                $sid = $row['SID'];
                $sql_b = "SELECT bp.item,bp.variety, bp.unit, bp.duration, b.uniqueid,b.BID,bp.id,bp.type,bp.transactionId
                FROM buyerdb b, buyerproduct bp
                WHERE bp.BID=b.BID";
                $result_b = mysqli_query($connection,$sql_b);
                $c=0;
                $c=@mysqli_num_rows($result_b);
                if($c>0)
                {
                  while($row = $result_b->fetch_assoc())
                  {
                    echo "<div class='filterDiv' >
                    <div class='row'>
     									<div class='col-md-12 btn btn-success' style='border-radius:1%;'>UNIQUE ID: ".$row['uniqueid']."</div>
     								</div>
     								<div class='row form-group' >
     								<div class='col-md-12' >
     									<div class='box-body table-responsive'>
     									<table class='table table-hover'>
     										<tr>

     											<th>ITEM</th>
                           <th>VARIETY</th>
     											<th>UNIT</th>
     											<th>MEASURE</th>
     											<th>DURATION</th>
     											<th></th>

     										</tr>

     										<tr>

     											<td>". $row['item']."</td>
                           <td>". $row['variety']."</td>
     											<td>". $row['unit']."</td>
     											<td>". $row['type']."</td>
     											<td>". $row['duration']."</td>
     									</table>

     										<form action= 'sellerformdb.php' method='post'>

     											 <i class='fa fa-inr'></i>

     											 <input type='hidden' name='item' value=".$row['item'].">

                            <input type='hidden' name='variety' value=".$row['variety'].">
                            <input type='hidden' name='trans_id' value=".$row['transactionId'].">
     											 <input type='hidden' name='unit' value=".$row['unit'].">
     											 <input type='hidden' name='type' value=".$row['type'].">
     											 <input type='hidden' name='duration' value=".$row['duration'].">
     											 <input type='hidden' name='id' value=".$row['id'].">
     											 <input type='hidden' name='bid' value=".$row['BID'].">
     											 <input type='hidden' name='price'>
     										<center>
                           <input type='text' style='' name='price' placeholder='Enter your price in &#x20b9;' value='' required/>
                         </center>
                           <br>
                         <td>
                         <center>
                           <button  type='submit' class=' btn btn-primary' style='color:black;float:none;' formaction='sellerformdb.php' >QUOTE</button>
                         </center>
                         </td>
     										</form>

     										</tr>

     								</div>
     								</div>
     								</div>
						</div>";
					}
				}
  			?>

			<?php

                include 'db_connect.php';
                $sql_b = "SELECT bp.item,bp.variety, bp.unit, bp.duration, b.uniqueid,b.BID,bp.id,bp.type,bp.transactionId
                FROM buyerdb b, buyerproduct bp
                WHERE bp.BID=b.BID AND ftype='Natural farming(ZBNF)'";

                $result_b = mysqli_query($connection,$sql_b);
                $c=0;
                $c=@mysqli_num_rows($result_b);
                if($c>0)
                {
                  while($row = $result_b->fetch_assoc())
                  {
					  /*This particular class below in div(natural) differentiates between farming type*/
					echo "  <div class='filterDiv natural'>
							 <div class='row'>
									<div class='col-md-12 btn btn-success' style='border-radius:1%;'>UNIQUE ID: ".$row['uniqueid']."</div>
								</div>
								<div class='row form-group' >
								<div class='col-md-12' >
									<div class='box-body table-responsive'>
									<table class='table table-hover'>
										<tr>

											<th>ITEM</th>
                      <th>VARIETY</th>
											<th>UNIT</th>
											<th>MEASURE</th>
											<th>DURATION</th>
											<th></th>

										</tr>

										<tr>

											<td>". $row['item']."</td>
                      <td>". $row['variety']."</td>
											<td>". $row['unit']."</td>
											<td>". $row['type']."</td>
											<td>". $row['duration']."</td>
									</table>

										<form action= 'sellerformdb.php' method='post'>

											 <i class='fa fa-inr'></i>

											 <input type='hidden' name='item' value=".$row['item'].">
                       <input type='hidden' name='variety' value=".$row['variety'].">
                        <input type='hidden' name='trans_id' value=".$row['transactionId'].">
											 <input type='hidden' name='unit' value=".$row['unit'].">
											 <input type='hidden' name='type' value=".$row['type'].">
											 <input type='hidden' name='duration' value=".$row['duration'].">
											 <input type='hidden' name='id' value=".$row['id'].">
											 <input type='hidden' name='bid' value=".$row['BID'].">
											 <input type='hidden' name='price'>
										<center>
                      <input type='text' style='' name='price' placeholder='Enter your price in &#x20b9;' value='' required/>
                    </center>
                      <br>
                    <td>
                    <center>
                      <button  type='submit' class=' btn btn-primary' style='color:black;float:none;' formaction='sellerformdb.php' >QUOTE</button>
                    </center>
                    </td>
										</form>

										</tr>

								</div>
								</div>
								</div>
						  </div>
						  ";
                   }
                 }


  						 ?>
               <?php
                             include 'db_connect.php';
                             $sql_b = "SELECT bp.item,bp.variety, bp.unit, bp.duration, b.uniqueid,b.BID,bp.id,bp.type,bp.transactionId
                             FROM buyerdb b, buyerproduct bp
                             WHERE bp.BID=b.BID AND ftype='Group Organic Certified'";
                             $result_b = mysqli_query($connection,$sql_b);
                             $c=0;
                             $c=@mysqli_num_rows($result_b);
                             if($c>0)
                             {
                               while($row = $result_b->fetch_assoc())
                               {
             					  /*This particular class below in div(natural) differentiates between farming type*/
                         echo "  <div class='filterDiv group'>
                  <div class='row'>
									<div class='col-md-12 btn btn-success' style='border-radius:1%;'>UNIQUE ID: ".$row['uniqueid']."</div>
								</div>
								<div class='row form-group' >
								<div class='col-md-12' >
									<div class='box-body table-responsive no-padding'>
									<table class='table table-hover'>
										<tr>

											<th>ITEM</th>
                      <th>VARIETY</th>
											<th>UNIT</th>
											<th>MEASURE</th>
											<th>DURATION</th>
											<th></th>

										</tr>

										<tr>

											<td>". $row['item']."</td>
                      <td>". $row['variety']."</td>
											<td>". $row['unit']."</td>
											<td>". $row['type']."</td>
											<td>". $row['duration']."</td>
									</table>

										<form action= 'sellerformdb.php' method='post'>

											 <i class='fa fa-inr'></i>

											 <input type='hidden' name='item' value=".$row['item'].">
                        <input type='hidden' name='trans_id' value=".$row['transactionId'].">
                       <input type='hidden' name='variety' value=".$row['variety'].">
											 <input type='hidden' name='unit' value=".$row['unit'].">
											 <input type='hidden' name='type' value=".$row['type'].">
											 <input type='hidden' name='duration' value=".$row['duration'].">
											 <input type='hidden' name='id' value=".$row['id'].">
											 <input type='hidden' name='bid' value=".$row['BID'].">
											 <input type='hidden' name='price'>
                       <center>
                         <input type='text' style='' name='price' placeholder='Enter your price in &#x20b9;' value='' required/>
                       </center>
                         <br>
                       <td>
                       <center>
                         <button  type='submit' class=' btn btn-primary' style='color:black;float:none;' formaction='sellerformdb.php' >QUOTE</button>
                       </center>
                       </td>
										</form>

										</tr>

								</div>
								</div>
								</div>
                   </div>
                               ";
                                }
                              }

               						 ?>

                           <?php
                                         include 'db_connect.php';
                                         $sql_b = "SELECT bp.item,bp.variety, bp.unit, bp.duration, b.uniqueid,b.BID,bp.id,bp.type,bp.transactionId
                                         FROM buyerdb b, buyerproduct bp
                                         WHERE bp.BID=b.BID AND ftype='Organic PGS'";
                                         $result_b = mysqli_query($connection,$sql_b);
                                         $c=0;
                                         $c=@mysqli_num_rows($result_b);
                                         if($c>0)
                                         {
                                           while($row = $result_b->fetch_assoc())
                                           {
                         					  /*This particular class below in div(natural) differentiates between farming type*/
                                     echo "  <div class='filterDiv pgs'>
                             <div class='row'>
									<div class='col-md-12 btn btn-success' style='border-radius:1%;'>UNIQUE ID: ".$row['uniqueid']."</div>
								</div>
								<div class='row form-group' >
								<div class='col-md-12' >
									<div class='box-body table-responsive no-padding'>
									<table class='table table-hover'>
										<tr>

											<th>ITEM</th>
                      <th>VARIETY</th>
											<th>UNIT</th>
											<th>MEASURE</th>
											<th>DURATION</th>
											<th></th>

										</tr>

										<tr>

											<td>". $row['item']."</td>
                      <td>". $row['variety']."</td>
											<td>". $row['unit']."</td>
											<td>". $row['type']."</td>
											<td>". $row['duration']."</td>
									</table>

										<form action= 'sellerformdb.php' method='post'>

											 <i class='fa fa-inr'></i>

											 <input type='hidden' name='item' value=".$row['item'].">
                        <input type='hidden' name='trans_id' value=".$row['transactionId'].">
                       <input type='hidden' name='variety' value=".$row['variety'].">
											 <input type='hidden' name='unit' value=".$row['unit'].">
											 <input type='hidden' name='type' value=".$row['type'].">
											 <input type='hidden' name='duration' value=".$row['duration'].">
											 <input type='hidden' name='id' value=".$row['id'].">
											 <input type='hidden' name='bid' value=".$row['BID'].">
											 <input type='hidden' name='price'>
                       <center>
                         <input type='text' style='' name='price' placeholder='Enter your price in &#x20b9;' value='' required/>
                       </center>
                         <br>
                       <td>
                       <center>
                         <button  type='submit' class=' btn btn-primary' style='color:black;float:none;' formaction='sellerformdb.php' >QUOTE</button>
                       </center>
                       </td>
										</form>

										</tr>

								</div>
								</div>
								</div>
                               </div>
                                           ";
                                            }
                                          }

                           						 ?>

                                       <?php
                                       $sql_b = "SELECT bp.item,bp.variety, bp.unit, bp.duration, b.uniqueid,b.BID,bp.id,bp.type,bp.transactionId
                                       FROM buyerdb b, buyerproduct bp
                                       WHERE bp.BID=b.BID AND ftype='Organic(Self Certified)'";
                                                     $result_b = mysqli_query($connection,$sql_b);
                                                     $c=0;
                                                     $c=@mysqli_num_rows($result_b);
                                                     if($c>0)
                                                     {
                                                       while($row = $result_b->fetch_assoc())
                                                       {
                                     					  /*This particular class below in div(natural) differentiates between farming type*/
                                                 echo "  <div class='filterDiv self'>
                                          <div class='row'>
									<div class='col-md-12 btn btn-success' style='border-radius:1%;'>UNIQUE ID: ".$row['uniqueid']."</div>
								</div>
								<div class='row form-group' >
								<div class='col-md-12' >
									<div class='box-body table-responsive no-padding'>
									<table class='table table-hover'>
										<tr>

											<th>ITEM</th>
                      <th>VARIETY</th>
											<th>UNIT</th>
											<th>MEASURE</th>
											<th>DURATION</th>
											<th></th>

										</tr>

										<tr>

											<td>". $row['item']."</td>
                      <td>". $row['variety']."</td>
											<td>". $row['unit']."</td>
											<td>". $row['type']."</td>
											<td>". $row['duration']."</td>
									</table>

										<form action= 'sellerformdb.php' method='post'>

											 <i class='fa fa-inr'></i>

											 <input type='hidden' name='item' value=".$row['item'].">
                       <input type='hidden' name='trans_id' value=".$row['transactionId'].">
                       <input type='hidden' name='variety' value=".$row['variety'].">
											 <input type='hidden' name='unit' value=".$row['unit'].">
											 <input type='hidden' name='type' value=".$row['type'].">
											 <input type='hidden' name='duration' value=".$row['duration'].">
											 <input type='hidden' name='id' value=".$row['id'].">
											 <input type='hidden' name='bid' value=".$row['BID'].">
											 <input type='hidden' name='price'>
                       <center>
                         <input type='text' style='' name='price' placeholder='Enter your price in &#x20b9;' value='' required/>
                       </center>
                         <br>
                       <td>
                       <center>
                         <button  type='submit' class=' btn btn-primary' style='color:black;float:none;' formaction='sellerformdb.php' >QUOTE</button>
                       </center>
                       </td>
										</form>

										</tr>

								</div>
								</div>
								</div>
                                           </div>
                                                       ";
                                                        }
                                                      }

                                       						 ?>

                                                   <?php
                                                                 include 'db_connect.php';
                                                                 $sql_b = "SELECT bp.item,bp.variety, bp.unit, bp.duration, b.uniqueid,b.BID,bp.id,bp.type,bp.transactionId
                                                                 FROM buyerdb b, buyerproduct bp
                                                                 WHERE bp.BID=b.BID AND ftype='Organic(Not Certified)'";
                                                                 $result_b = mysqli_query($connection,$sql_b);
                                                                 $c=0;
                                                                 $c=@mysqli_num_rows($result_b);
                                                                 if($c>0)
                                                                 {
                                                                   while($row = $result_b->fetch_assoc())
                                                                   {
                                                 					  /*This particular class below in div(natural) differentiates between farming type*/
                                                             echo "  <div class='filterDiv organic'>
                                                      <div class='row'>
									<div class='col-md-12 btn btn-success' style='border-radius:1%;'>UNIQUE ID: ".$row['uniqueid']."</div>
								</div>
								<div class='row form-group' >
								<div class='col-md-12' >
									<div class='box-body table-responsive no-padding'>
									<table class='table table-hover'>
										<tr>

											<th>ITEM</th>
                      <th>VARIETY</th>
											<th>UNIT</th>
											<th>MEASURE</th>
											<th>DURATION</th>
											<th></th>

										</tr>

										<tr>

											<td>". $row['item']."</td>
                      <td>". $row['variety']."</td>
											<td>". $row['unit']."</td>
											<td>". $row['type']."</td>
											<td>". $row['duration']."</td>
									</table>

										<form action= 'sellerformdb.php' method='post'>

											 <i class='fa fa-inr'></i>

											 <input type='hidden' name='item' value=".$row['item'].">
                        <input type='hidden' name='trans_id' value=".$row['transactionId'].">
                       <input type='hidden' name='variety' value=".$row['variety'].">
											 <input type='hidden' name='unit' value=".$row['unit'].">
											 <input type='hidden' name='type' value=".$row['type'].">
											 <input type='hidden' name='duration' value=".$row['duration'].">
											 <input type='hidden' name='id' value=".$row['id'].">
											 <input type='hidden' name='bid' value=".$row['BID'].">
											 <input type='hidden' name='price'>
                       <center>
                         <input type='text' style='' name='price' placeholder='Enter your price in &#x20b9;' value='' required/>
                       </center>
                         <br>
                       <td>
                       <center>
                         <button  type='submit' class=' btn btn-primary' style='color:black;float:none;' formaction='sellerformdb.php' >QUOTE</button>
                       </center>
                       </td>
										</form>

										</tr>

								</div>
								</div>
								</div>
                                                       </div>
                                                                   ";
                                                                    }
                                                                  }

                                                   						 ?>

                                                               <?php
                                                                             include 'db_connect.php';
                                                                             $sql_b = "SELECT bp.item,bp.variety, bp.unit, bp.duration, b.uniqueid,b.BID,bp.id,bp.type,bp.transactionId
                                                                             FROM buyerdb b, buyerproduct bp
                                                                             WHERE bp.BID=b.BID AND ftype='conventional'";
                                                                             $result_b = mysqli_query($connection,$sql_b);
                                                                             $c=0;
                                                                             $c=@mysqli_num_rows($result_b);
                                                                             if($c>0)
                                                                             {
                                                                               while($row = $result_b->fetch_assoc())
                                                                               {
                                                             					  /*This particular class below in div(natural) differentiates between farming type*/
                                                                         echo "  <div class='filterDiv conventional'>
                                                                  <div class='row'>
									<div class='col-md-12 btn btn-success' style='border-radius:1%;'>UNIQUE ID: ".$row['uniqueid']."</div>
								</div>
								<div class='row form-group' >
								<div class='col-md-12' >
									<div class='box-body table-responsive no-padding'>
									<table class='table table-hover'>
										<tr>

											<th>ITEM</th>
                      <th>VARIETY</th>
											<th>UNIT</th>
											<th>MEASURE</th>
											<th>DURATION</th>
											<th></th>

										</tr>

										<tr>

											<td>". $row['item']."</td>
                      <td>". $row['variety']."</td>
											<td>". $row['unit']."</td>
											<td>". $row['type']."</td>
											<td>". $row['duration']."</td>
									</table>

										<form action= 'sellerformdb.php' method='post'>

											 <i class='fa fa-inr'></i>

											 <input type='hidden' name='item' value=".$row['item'].">
                        <input type='hidden' name='trans_id' value=".$row['transactionId'].">
                       <input type='hidden' name='variety' value=".$row['variety'].">
											 <input type='hidden' name='unit' value=".$row['unit'].">
											 <input type='hidden' name='type' value=".$row['type'].">
											 <input type='hidden' name='duration' value=".$row['duration'].">
											 <input type='hidden' name='id' value=".$row['id'].">
											 <input type='hidden' name='bid' value=".$row['BID'].">
											 <input type='hidden' name='price'>
                       <center>
                         <input type='text' style='' name='price' placeholder='Enter your price in &#x20b9;' value='' required/>
                       </center>
                         <br>
                       <td>
                       <center>
                         <button  type='submit' class=' btn btn-primary' style='color:black;float:none;' formaction='sellerformdb.php' >QUOTE</button>
                       </center>
                       </td>
										</form>

										</tr>

								</div>
								</div>
								</div>
                                                                   </div>
                                                                               ";
                                                                                }
                                                                              }

                                                               						 ?>

</div>

		<script>
			filterSelections()
			function filterSelections() {
			var c=document.getElementById("myBtnContainer").value;
			  var x, i;
			  x = document.getElementsByClassName("filterDiv");
			  if (c == "all") c = "";
			  for (i = 0; i < x.length; i++) {
				w3RemoveClass(x[i], "show");
				if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
			  }
			}
			function w3AddClass(element, name) {
			  var i, arr1, arr2;
			  arr1 = element.className.split(" ");
			  arr2 = name.split(" ");
			  for (i = 0; i < arr2.length; i++) {
				if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
			  }
			}
			function w3RemoveClass(element, name) {
			  var i, arr1, arr2;
			  arr1 = element.className.split(" ");
			  arr2 = name.split(" ");
			  for (i = 0; i < arr2.length; i++) {
				while (arr1.indexOf(arr2[i]) > -1) {
				  arr1.splice(arr1.indexOf(arr2[i]), 1);
				}
			  }
			  element.className = arr1.join(" ");
			}
			// Add active class to the current button (highlight it)
			var btnContainer = document.getElementById("myBtnContainer");
			var btns = btnContainer.getElementsByClassName("btn");
			for (var i = 0; i < btns.length; i++) {
			  btns[i].addEventListener("click", function(){
				var current = document.getElementsByClassName("active");
				current[0].className = current[0].className.replace(" active", "");
				this.className += " active";
			  });
			}
		</script>

	</body>
 </html>
