<?php
session_start();
if(!isset($_SESSION['login_user'])){
    header("Location: login.php");}//redirect to login page to secure the welcome page without login access.


if(isset($_POST['edit'])){
    $value = $_POST['edit'];
    echo $value;
}
 include 'db_connect.php';






?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="shortcut icon" href="http://www.krishiyog.com/images/logo0.jpg" type="image/x-icon" />

	<title>Krishiyog Naturals &mdash;Seed to wellness</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="	We are India’s first and foremost platform for natural farming. We are community of natural farmers engaged in growing, producing and processing natural produce and products.  Our community objectives are to empower farmers and enrich lives by improving health and nutrition of every Indian. We are a community of responsible farmers guided by Padma Shri Subhash Palekarji who has pioneered the technique of “Zero Budget Natural Farming”. Today, on the occasion of India’s 72nd Independence Day Celebration 2018 with his guidance, direction and blessing we dedicate Krishiyog Digital Platform to one and all.
" />
	<meta name="keywords" content="farmers,e-commerce,shop,discussion forum,Natural farming, ZBNF, natural products,retail" />
	<!--<meta name="author" content="" />-->



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

	<!-- <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'> -->

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
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style.min.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop4">
            <div class="container">
                <div class="header4-wrap">
                    <div class="header__logo">
                        <a href="../index.php">
                            <img src="../images/logo0.jpg" alt="Krishiyog" style="height:60px; width:60px;" />
                        </a>

                    </div>

					<div class="display-4"  >
                        <?php echo"Welcome " . $_SESSION['fname'] . "!" ; ?>
                    </div>

                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP -->



        <!-- PAGE CONTENT-->

					<div class="container-fluid bg-light">

							  <ul class="nav nav-tabs ">
								<li class="col-md-6"><a class="text-light btn btn-primary btn-block btn-lg" data-toggle="tab" href="#home"><span style="height:150px;">Quoted Buyers</span></a></li>
								<li class="col-md-6"><a  class=" text-light btn btn-primary btn-block btn-lg" data-toggle="tab" href="#menu1">Profile</a></li>
							  </ul>

							  <!--<ul class="gtco-tab-nav">
								<li class="active"><a href="#home" data-toggle="tab"><span class="icon visible-xs"><i class="icon-bag"></i></span><span class="hidden-xs">Quoted Buyers</span></a></li>
								<li><a href="#menu1" data-toggle="tab"><span class="icon visible-xs"><i class="icon-bar-graph"></i></span><span class="hidden-xs">Your Profile</span></a></li>
							  </ul>-->

							  <div class="tab-content">
								<div id="home" class="tab-pane fade in active">
									<div class="row">
                          				<div class="col-md-12">
										<br>

										<?php
                          				$q="select * from quotationdb";
                          				$result2 = mysqli_query($connection,$q);
                          						?>

                          				<div class='row form-group' id="datat">
											<div class='col-md-12'>
												<div class="table-responsive table-responsive-data2">
												  <table class="table table-data2">
													  <thead  class="text-light">
														  <tr>


															  <th>BUYER</th>
															  <th>ITEM</th>
															  <th>UNIT</th>
															  <th>MEASURE</th>
															  <th>DURATION</th>
															  <th>PRICE</th>
															  <th></th>
														  </tr>
													  </thead>


												  <!--Content of the table-->
												  <tr>

                                                  <?php
                                                    if(@mysqli_num_rows($result2)>0)
                                                    {
                                                        while($row3=mysqli_fetch_array($result2))
                                                        {
                                                        $sellerid=$row3['SID'];
                                                        $buyerid=$row3['BID'];
                                                        $newQuery = "SELECT * FROM sellerdb where SID ='$sellerid'";
                                                        $result1 = mysqli_query($connection,$newQuery);
                                                 		$row2 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
                                                        $newQuery1 = "SELECT * FROM buyerdb where BID ='$buyerid'";
                                                        $res = mysqli_query($connection,$newQuery1);
                                                 		$row5 = mysqli_fetch_array($res,MYSQLI_ASSOC);

                                                          ?>
                                                          <td>
                                                            <label class="au-checkbox">
                                                                <input type="checkbox">
                                                                <span class="au-checkmark"></span>
                                                             </label>
                                                           </td>
                                                          <td><?php echo $row2['firstName']." ".$row2['lastName'];?></td>
                                                          <td><?php echo $row5['firstName']." ".$row5['lastName'];?></td>
                                                          <td><?php echo $row3['item'];?></td>
                                                          <td><?php echo $row3['unit'];?></td>
                                                          <td><?php echo $row3['measure'];?></td>
                                                          <td><?php echo $row3['duration'];?></td>
                                                          <td><?php echo "&#x20b9;.".$row3['price'];?></td>
                                                          <td>

														<form action= 'admin_db.php' method='post'>



															 <input type='hidden' name='item' value="<?php echo $row3['item'] ?>"/>
															 <input type='hidden' name='unit' value="<?php echo $row3['unit']?>"/>
															 <input type='hidden' name='measure' value="<?php echo $row3['measure']?>"/>
															 <input type='hidden' name='duration' value="<?php echo $row3['duration']?>"/>
															 <input type='hidden' name='Sid' value="<?php echo $row2['SID']?>"/>
															 <input type='hidden' name='Bid' value="<?php echo $row5['BID']?>"/>
															 <input type='hidden' name='Price' value="<?php echo $row3['price']?>"/>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Delete the quotation</button>


<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>

      </div>
      <div class="modal-body">
        <p>Do you want to continue?</p>
      </div>
      <div class="modal-footer">
	  <button type="submit" class="btn btn-primary" >
		Yes
		</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

      </div>
    </div>

  </div>
</div>
															<!--
																<button type="submit" class="btn btn-primary" >
																Delete the quotation
															 </button>
															-->

														</form>

														  </td>

                                                          </tr>
														  <!--End of content of table-->
                                                          <?php

                                                        }
                                                    }
                                                    ?>

														</table>
													</div>
                     							</div>
											</div>



                          					<!--End of php code-->
                          				</div>

                          			</div>


								 </div>
<div id="menu1" class="tab-pane fade">
	<div class="container">
	<br>

		<div class="col-md-12 animate-box" >
	<?php

		$sql = "SELECT * FROM sellerdb where firstName = '".$_SESSION['fname']."' and lastName ='". $_SESSION['lname']."'";

		$result = mysqli_query($connection,$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		?>
		 <div class="table-responsive ">
                                <table class="table table-bordered table-striped">
										  <col width="100">
											<col width="100">
                                        <tr>
										<th>Name :</th>
										<th><?php echo $row['firstName']." ".$row['lastName'];?></th>
                                        </tr>

										<tr>
										<th>Unique Id :</th>
										<th><?php echo $row['uniqueid'];?></th>
                                        </tr>

										 <tr>
										<th>Contact Number :</th>
										<th><?php echo $row['sMobNo'];?></th>
                                        </tr>

										 <tr>
										<th>WhatsApp Number :</th>
										<th><?php echo $row['WhatsApp'];?></th>
                                        </tr>

										 <tr>
										<th>Organisation Number:</th>
										<th><?php echo $row['orgMobNo'];?></th>
                                        </tr>

										 <tr>
										<th>Organisation Name :</th>
										<th><?php echo $row['sellOrgName'];?></th>
                                        </tr>

										 <tr>
										<th>Address :</th>
										<th><?php echo $row['addressSeller'];?></th>
                                        </tr>

										<tr>
										<th>Email :</th>
										<th><?php echo $row['email'];?></th>
                                        </tr>

										 <tr>
										<th>City:</th>
										<th><?php echo $row['city'];?></th>
                                        </tr>

										<tr>
										<th>State:</th>
										<th><?php echo $row['state'];?></th>
                                        </tr>

										<tr>
										<th>Zipcode :</th>
										<th><?php echo $row['zipcode'];?></th>
                                        </tr>

										<tr>
										<th>TAN:</th>
										<th><?php echo $row['TANo'];?></th>
                                        </tr>

										<tr>
										<th>PAN:</th>
										<th><?php echo $row['PAN'];?></th>
                                        </tr>

										<tr>
										<th>GST:</th>
										<th><?php echo $row['GST'];?></th>
                                        </tr>

										<tr>
										<th>Buyer Type:</th>
										<th><?php echo $row['sellerType'];?></th>
                                        </tr>

										<tr>
										<th>Description:</th>
										<th><?php echo $row['descr'];?></th>
                                        </tr>



								</table>
                            </div>
                         </div>
				</div>
								</div>

							  </div>
							</div>


        <!-- END PAGE CONTENT  -->

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
