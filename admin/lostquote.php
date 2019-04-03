<!DOCTYPE html>
<?php
include "db_connect.php";
session_start();
if(!isset($_SESSION['login_user'])){
header("Location: ../login.php");}//redirect to login page to secure the welcome page without login access.

?>
<html lang="en">

<head>

    <!-- Required meta tags-->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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

	<!--Modal-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

    <!-- <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'> -->

    <!-- Animate.css -->
    <link rel="stylesheet" href="../css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="../css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="../css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <!-- Theme style  -->
    <link rel="stylesheet" href="../css/style.css">

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->


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

        <!-- END HEADER DESKTOP-->

        <!-- HEADER MOBILE-->

        <!-- END HEADER MOBILE -->

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
            <!-- BREADCRUMB-->

            <!-- END BREADCRUMB-->

            <!-- WELCOME-->

            <!-- END STATISTIC-->

            <!-- STATISTIC CHART-->

            <!-- END STATISTIC CHART-->

            <!-- DATA TABLE-->
            <a href="admin.php" > <button type="submit" class="btn btn-primary" style="height:45px; width:120px;" name="button"><div class="Display-4" >Go back!</div></button> </a><br><br>
            <section class="p-t-20">
                <div class="container" >
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">Successful quotations till now</h3>


                           <!--after date table-->


                            <div class="gtco-section">
                          		<div class="gtco-container">
                          			<div class="row">
                          				<div class="col-md-6">

										<?php
                          				$q="select * from deletedb";
                          				$result2 = mysqli_query($connection,$q);
                          						?>

                          				<div class='row form-group' id="datat">
											<div class='col-md-12'>
												<div class="table-responsive table-responsive-data2">
												  <table class="table table-data2">
													  <thead>
														  <tr>
															  <th>
																  <label class="au-checkbox">
																	  <input type="checkbox">
																	  <span class="au-checkmark"></span>
																  </label>
															  </th>
															  <th>SELLER</th>
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

														<form action= 'perdel.php' method='post'>



															 <input type='hidden' name='item' value="<?php echo $row3['item'] ?>"/>
															 <input type='hidden' name='unit' value="<?php echo $row3['unit']?>"/>
															 <input type='hidden' name='measure' value="<?php echo $row3['measure']?>"/>
															 <input type='hidden' name='duration' value="<?php echo $row3['duration']?>"/>
															 <input type='hidden' name='Sid' value="<?php echo $row2['SID']?>"/>
															 <input type='hidden' name='Bid' value="<?php echo $row5['BID']?>"/>
															 <input type='hidden' name='Price' value="<?php echo $row3['price']?>"/>

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
                          	</div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- END DATA TABLE-->

            <!-- COPYRIGHT-->

            <!-- END COPYRIGHT-->
        </div>

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
