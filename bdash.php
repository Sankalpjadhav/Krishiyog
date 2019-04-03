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
	<link rel="stylesheet" href="b/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="b/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="b/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="b/css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="b/css/owl.carousel.min.css">
	<link rel="stylesheet" href="b/css/owl.theme.default.min.css">
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
	<!-- Theme style  -->
	<link rel="stylesheet" href="b/css/style.css">

	<!-- Modernizr JS -->
	<script src="b/js/modernizr-2.6.2.min.js"></script>

    <!-- Fontfaces CSS-->
    <link href="b/css/font-face.css" rel="stylesheet" media="all">
    <link href="b/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="b/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="b/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="b/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="b/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="b/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="b/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="b/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="b/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="b/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="b/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="b/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop4">
            <div class="container">
                <div class="header4-wrap">
                    <div class="header__logo">
                        <a href="index.php">
                            <img src="images/logo0.jpg" alt="Krishiyog" style="height:60px; width:60px;" />
                        </a>

                    </div>

					<div class="display-4" style="font-size:50px;"  >
                        <?php echo"Welcome " . $_SESSION['fname'] . "!" ; ?>
                    </div>

                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP -->



        <!-- PAGE CONTENT-->

					<div class="container-fluid bg-light">

							  <ul class="nav nav-tabs ">
								<li class="col-md-4" onclick="hideImage();"><a class="text-light btn btn-primary btn-block btn-lg" data-toggle="tab" href="#home"><span style="height:150px;">Quoted Sellers</span></a></li>
                                <li class="col-md-4" onclick="hideImage();"><a  class=" text-light btn btn-primary btn-block btn-lg" data-toggle="tab" href="#menu1">Edit Your Requirements</a></li>
                                <li class="col-md-4" onclick="hideImage();"><a  class=" text-light btn btn-primary btn-block btn-lg" data-toggle="tab" href="#menu2">Your Profile</a></li>
							  </ul>


                <br><div class="btn btn-info" style="background-color:white;">
                    <a href="index.php" >GO BACK</a>
                  </div>
                  <br><br>
                <!--  <center><img src="img.jpg" id="Hide" alt="Sankalp is in Love" class="img img-fluid" style="height:400px; width:900px;" ></center>-->
                <div class="col-md-12  gtco-heading" id="Hide" style="">
                  <br>
                    <center><h2 style="color:green;">Activity on your Dashboard.</h2></center>
                    <br>
                    <p>There are three tabs on your Dashboard page namely <strong>Quoted Sellers</strong>, <strong>Edit Your Requirements</strong> and <strong>Your Profile</strong>.
                      <br><br>
                       The <strong>Quoted Sellers</strong> tab shows the information regarding the requirements that you have posted and the price quoted by the sellers to your requirements. Buyer requirements consists of The name of item , units , measure and duration.</p>
                       <br>
                       The <strong>Edit Your Requirements</strong> tab shows the information regarding the requirements that you have posted. Here you can edit units and delete requirements.</p>
                       <br>
                       The <strong>Your Profile</strong> tab shows your information that you have posted at the time of registering your <strong>Krishiyog account</strong>.
                       <br><br>
                      <center> <h2 style="color:green;">Basic Dashboard information:</h2></center>
                       <br>
                       <h3>How to use basic Dashboard fields?</h3>
                       Use these instructions to get familiar with all the basic information on your dashboard page. This page includes explanations for all the default fields that are built on your dashboard.
                       <br><br>
                       <h3> View Quoted Sellers </h3>
                       To see Quoted Sellers page, follow this step:<br>
                         1. From this page , click on the <strong>Quoted Sellers</strong> tab in the top left corner of this page to access information about the items you have posted.
                       <br><br>
                       <h3> View Edit Your requirements </h3>
                       To see Edit Your Requirements page, follow this step:<br>
                         1. From this page , click on the <strong>Edit Your requirements</strong> tab at the top of this page to edit and delete the requirements.
                       <br><br>
                      <h3> View your profile </h3>
                        To see your profile page, follow this step:<br>
                        1. From this page , click on the <strong>Your Profile</strong> tab in the top right corner of this page to access your profile information.
                  </div>
							<div  class="tab-content">
								<div id="home" class="tab-pane fade in active">
                  <script type="text/javascript">
                  function hideImage()
                  {
                    document.getElementById('Hide').style.display="none";
                  }
                  </script>
                                <div class="row">
												<div class="col-md-12 animate-box">
												<?php

								$fName= $_SESSION['fname'];
								$lName= $_SESSION['lname'];

								$sql = "SELECT * FROM buyerdb where firstName = '$fName' and lastName ='$lName'";
								$result = mysqli_query($connection,$sql);



								$sql6 = "SELECT s.SID, q.SID, s.uniqueid, q.transactionId FROM sellerdb s,quotationdb q where s.SID =q.SID";
								$result6 = mysqli_query($connection,$sql6);

								$row6 = mysqli_fetch_array($result6,MYSQLI_ASSOC);

								$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
								$bid=$row['BID'];
								$q="select * from quotationdb where BID=$bid ";
								$result2 = mysqli_query($connection,$q);

								?>
									<div class='row form-group'>
										<div class='col-md-12'>
                      <br><br>
									<h3>Quotated Sellers</h3>
									<div class="box-body table-responsive no-padding">
										<table class="table table-hover">
									<tr>
                  <th>TRANSACTION ID</th>
										<th>SELLER</th>
										<th>ITEM</th>
                    <th>VARIETY</th>
										<th>UNIT</th>
										<th>MEASURE</th>
										<th>DURATION</th>
										<!-- <th>PRICE QUOTED</th> -->
									</tr>

									<tr>
									<?php
										if(@mysqli_num_rows($result2)>0)
										{
												while($row3=@mysqli_fetch_array($result2))
												{
													?>
                          <td><?php echo $row6['transactionId'];?></td>
													<td><?php echo $row6['uniqueid'];?></td>

													<td><?php echo $row3['item'];?></td>
                        <td><?php echo $row3['variety'];?></td>
													<td><?php echo $row3['unit'];?></td>
													<td><?php echo $row3['measure'];?></td>
													<td><?php echo $row3['duration'];?></td>
													<!-- <td><?php echo $row3['price'];?></td> -->
													</tr>
													<?php

												}
										}
										?>

								</table>
								</div>
										</div>
									</div>

													</form>
												</div>

											</div>


                                </div>


                                <div id="menu1" class="tab-pane fade">

                                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-striped table-data2">
                                    <thead>
                                        <tr>

                                            <th>Transaction id</th>

                                            <th>Item</th>
                                            <th>Units</th>
                                            <th>Variety</th>
                                            <th>Measure</th>
                                            <th>Duration</th>
                                            <th>Farming Type</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>

                                        <tr class="tr">
                                            <!-- Contents should be taken from php -->
                                            <?php

                                            include "db_connect.php";

                                            $sql = "SELECT * FROM buyerproduct WHERE BID = '".$_SESSION['bid']."' ";
                                            $result = mysqli_query($connection, $sql);
                                            // $row = mysqli_fetch_array($result, MYSQLI_ASSOC ); ?>

                                            <?php
                                            if(@mysqli_num_rows($result)>0){
                                                while($row = mysqli_fetch_array($result))
                                                {


                                            ?>


                                            <td> <?php echo $row['transactionId']; ?> </td>
                                            <td> <?php echo $row['item']; ?> </td>
                                            <td> <?php echo $row['unit']; ?> </td>
                                            <td> <?php echo $row['variety']; ?> </td>
                                            <td> <?php echo $row['type']; ?> </td>
                                            <td> <?php echo $row['duration']; ?> </td>
                                            <td> <?php echo $row['ftype']; ?> </td>

                                            <td>
                                            <form action="deleteunits.php" method=post> <!--  bdash.php -->
                                            <input type="hidden" name="id"  value="<?php echo $row['id']; ?>" >



                                                <input type="submit" value="Delete" name="delete" class="btn btn-success" formaction="deleteunits.php" >
                                            </form>
                                            </td>

                                            <td>
                                            <form action="editunit.php" method=post> <!--  bdash.php -->
                                            <input type="hidden" name="id"  value="<?php echo $row['id']; ?>" >
                                            <input type="hidden" name="bid"  value="<?php echo $row['BID']; ?>" >
                                                <input type="text" name="editunits" placeholder="Enter new units" style="border:solid 1px;" >
                                                <input type="submit" value="Edit" name="submit" class="btn btn-info"  >
                                            </form>
                                            </td>

                                            </tr>
                                            <?php  #endregion

                                                }
                                            }

                                        ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                                </div>

                                <div id="menu2" class="tab-pane fade">
                                <div class="container">
			<div class="col-md-3" style="height:130px;"></div>
		<div class="col-md-10 animate-box" >
	<?php

		$sql = "SELECT * FROM buyerdb where firstName = '".$_SESSION['fname']."' and lastName ='". $_SESSION['lname']."'";

		$result = mysqli_query($connection,$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		?>
		 <div class="table-responsive table-responsive-data2">
                                <table class="table table-bordered table-striped table-data2">

                                        <tr>
										<th><h3>Name :</h3></th>
										<th><h3><?php echo $row['firstName']." ".$row['lastName'];?></h3></th>
                                        </tr>

										 <tr>
										<th><h3>Contact Number :</h3></th>
										<th><h3><?php echo $row['bMobNo'];?></h3></th>
                                        </tr>

										 <tr>
										<th><h3>WhatsApp Number :</h3></th>
										<th><h3><?php echo $row['WhatsApp'];?></h3></th>
                                        </tr>

										 <tr>
										<th><h3>Organisation Number :</h3></th>
										<th><h3><?php echo $row['orgMobNo'];?></h3></th>
                                        </tr>

										 <tr>
										<th><h3>Address :</h3></th>
										<th><h3><?php echo $row['addressBuyer'];?></h3></th>
                                        </tr>

										<tr>
										<th><h3>Email :</h3></th>
										<th><h3><?php echo $row['email'];?></h3></th>
                                        </tr>

										 <tr>
										<th><h3>City:</h3></th>
										<th><h3><?php echo $row['city'];?></h3></th>
                                        </tr>

										<tr>
										<th><h3>State:</h3></th>
										<th><h3><?php echo $row['state'];?></h3></th>
                                        </tr>

										<tr>
										<th><h3>Zipcode :</h3></th>
										<th><h3><?php echo $row['zipcode'];?></h3></th>
                                        </tr>

										<tr>
										<th><h3>TAN:</h3></th>
										<th><h3><?php echo $row['TANo'];?></h3></th>
                                        </tr>

										<tr>
										<th><h3>PAN:</h3></th>
										<th><h3><?php echo $row['PAN'];?></h3></th>
                                        </tr>

										<tr>
										<th><h3>GST:</h3></th>
										<th><h3><?php echo $row['GST'];?></h3></th>
                                        </tr>

										<tr>
										<th><h3>Buyer Type:</h3></th>
										<th><h3><?php echo $row['buyerType'];?></h3></th>
                                        </tr>

										<tr>
										<th><h3>Description:</h3></th>
										<th><h3><?php echo $row['descr'];?></h3></th>
                                        </tr>



								</table>
                            </div>
                         </div>
				</div>
		</div>

</div>
</div>

                            </div>
                                </div>

             </div>


        <!-- END PAGE CONTENT  -->

    </div>

    <!-- Jquery JS-->
    <script src="b/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="b/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="b/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="b/vendor/slick/slick.min.js">
    </script>
    <script src="b/vendor/wow/wow.min.js"></script>
    <script src="b/vendor/animsition/animsition.min.js"></script>
    <script src="b/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="b/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="b/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="b/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="b/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="b/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="b/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="b/js/main.js"></script>

</body>

</html>
<!-- end document-->
