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
<!-- modal start -->
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
<table class="table" style="border:1px solid black" id="Seller">
</table>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>

</div>
</div>

</div>

<!-- modal end -->
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block bg-white">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a href="../index.php">
                            <img src="../images/logo0.jpg" alt="CoolAdmin" style="height:60px; width:60px;" />
                        </a>
                    </div>
                    <div class="header__tool">

                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                  <img src="images/chetan.jpg" alt="John Doe" />
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" style="color:black;" >Chetan Desai</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="#">
                                                <img src="images/chetan.jpg" alt="Chetan" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#">Chetan Desai</a>
                                            </h5>
                                            <span class="email">chetandesai72@gmail.com</span>
                                            <span class="pno">9845627949</span>
                                        </div>
                                    </div>

                                    <div class="account-dropdown__footer">
                                        <a href="lostquote.php">
                                            <i class="zmdi zmdi-archive"></i>History</a>

                                    </div>

                                    <div class="account-dropdown__footer">
                                        <a href="../logout.php">
                                            <i class="zmdi zmdi-power"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->

        <!-- HEADER MOBILE-->
        <header class="header-mobile header-mobile-2 d-block d-lg-none bg-white" >
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="../index.php">
                            <img src="../images/logo0.jpg" alt="Admin" style="height:60px; width:60px;" />
                        </a>

                        <div class="sub-header-mobile-2 d-block d-lg-none">
                            <div class="header__tool">
                                <div class="account-wrap">
                                    <div class="account-item account-item--style2 clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/chetan.jpg" alt="chetan Desai" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Chetan Desai</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/chetan.jpg" alt="Chetan" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">Chetan Desai</a>
                                                    </h5>
                                                    <span class="email">Chetandesai72@gmail.com</span>
                                                    <span class="pno" style="font-size:12px;" >9845627949</span>
                                                </div>
                                            </div>

                                            <div class="account-dropdown__footer">
                                                <a href="../logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </header>

        <!-- END HEADER MOBILE -->

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
            <!-- BREADCRUMB-->
            <!--
            <section class="au-breadcrumb2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content ">
                              <form class="au-form-icon--sm" action="" method="post">
                                Search for items :
                                <input class="au-input--w300 au-input--style2" type="text" placeholder="Search for datas &amp; reports...">
                                <button class="au-btn--submit2" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
           -->
            <!-- END BREADCRUMB-->

            <!-- WELCOME-->
            <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-4">Welcome back
                                <span>Chetan!</span>
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
            <!-- END WELCOME-->

            <!-- STATISTIC-->
            <section class="statistic statistic2">
                <div class="container">
                    <div class="row">

                          <div class="col-md-3 col-lg-3 " onclick="location.href='#tabledata'" >

                              <div class="statistic__item statistic__item--green">

                                  <h2 class="number">
                                    <?php
                                        include 'db_connect.php';
                                        $sql="select count(qid) from quotationdb";
                                        $count_result=mysqli_query($connection,$sql);
                                        $row=$count_result->fetch_row();
                                        echo $row[0];
                                    ?>
                                  </h2>

                                  <span class="desc">Number of Quotations</span>
                                  <div class="icon">
                                      <i class="zmdi zmdi-account-o"></i>
                                  </div>
                              </div>

                          </div>

                        <div class="col-md-3 col-lg-3" onclick=" location.href='../buyerslist.php'">
                            <div class="statistic__item statistic__item--orange">
                                <h2 class="number">
                                  <?php
                                      include 'db_connect.php';
                                      $sql="select count(BID) from buyerdb";
                                      $count_result=mysqli_query($connection,$sql);
                                      $row=$count_result->fetch_row();
                                      echo $row[0];
                                  ?></h2>
                                <span class="desc">Number of Buyers</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-shopping-cart"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3" onclick=" location.href='../sellerslist.php'">
                            <div class="statistic__item statistic__item--blue">
                                <h2 class="number">
                                  <?php
                                      include 'db_connect.php';
                                      $sql="select count(SID) from sellerdb";
                                      $count_result=mysqli_query($connection,$sql);
                                      $row=$count_result->fetch_row();
                                      echo $row[0];
                                  ?></h2>
                                <span class="desc">Number of sellers</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-calendar-note"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-lg-3" onclick=" location.href='MTDA/transactionid.php'">
                            <div class="statistic__item statistic__item--red">
                                <h2 class="number">
                                  <?php
                                      include 'db_connect.php';
                                      $sql="select count(qid) from quotationdb";
                                      $count_result=mysqli_query($connection,$sql);
                                      $row=$count_result->fetch_row();
                                      echo $row[0];
                                  ?></h2>
                                <span class="desc">Transaction</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-calendar-note"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- END STATISTIC-->

            <!-- STATISTIC CHART-->
            <section class="statistic-chart">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">statistics</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-lg-3">
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <!-- TOP CAMPAIGN-->
                            <div class="top-campaign">
                                <h3 class="title-3 m-b-30">Top 5 sellers</h3>
                                <div class="table-responsive">
                                    <table class="table table-top-campaign">
                                        <tbody>

										<tr>
											<th>Seller Name</th>
											<th >Mobile Number</th>
										</tr>
										<?php
											 $sql_b = "SELECT DISTINCT s.firstName, s.lastName, s.SID ,s.sMobNo,q.SID
												FROM sellerdb s,quotationdb q
												WHERE s.SID=q.SID GROUP BY q.SID
                        ORDER BY COUNT(*) DESC ";
												$result_b = mysqli_query($connection,$sql_b);
												$c=0;
                        $count=1;
												$c=@mysqli_num_rows($result_b);
												if($c>0)
												{
												  while( $count <=5 && $row = $result_b->fetch_assoc())
												  {

                            ?>

                                            <tr>
                                                <td><?php echo $row['firstName']." ".$row['lastName'];?></td>
                                                <td onclick='window.open("tel:<?php echo $row['sMobNo']; ?>");'><?php echo $row['sMobNo'];?></td>
                                                <td></td>
                                            </tr>

												<?php
                        $count++;
                        }

                        }


											?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END TOP CAMPAIGN-->
                        </div>
                    </div>
                </div>
            </section>
            <!-- END STATISTIC CHART-->

            <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">data table</h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">

                                    <div class="rs-select2--light rs-select2--sm" id="tabledata">
                                      <form action="admin.php#tabledata" method="POST">
                                        <select class="" name="time" >
                                            <option value="-1" >PLEASE SELECT</option>
                                            <option value="0" >All</option>
                                            <option value="1">Today</option>
                                            <option value="2">3 Days</option>
                                            <option value="3">1 Week</option>
                                        </select>
                                        <br><br>
                                        <input type="submit" class="btn btn-primary" value="SUBMIT" />
                                      </form>
                                        <div class="dropDownSelect2"></div>
                                    </div>

                                </div>

                            </div>
                            <!--after date table-->


                           <div class="gtco-section">
                             <div class="gtco-container">
                               <div class="row">
                                 <div class="col-md-12">

                   <?php
if(isset($_POST['time'])){
                   if($_POST['time']=='0'){
                    $q="select * from quotationdb ORDER BY quote_date DESC, quote_time ASC";
                    $result2 = mysqli_query($connection,$q);
                  }
                    if($_POST['time']=='1'){
                      echo "<center><h1>TODAY</h1> </center>";
                      $q="select * from quotationdb WHERE quote_date=CURRENT_DATE ORDER BY quote_date DESC, quote_time ASC";
                      $result2 = mysqli_query($connection,$q);
                    }
                    if($_POST['time']=='2'){
                      echo "<center><h1>LAST 3 DAYS</h1> </center>";
                      $q="select * from quotationdb WHERE quote_date>=(CURDATE()-3) ORDER BY quote_date DESC, quote_time ASC";
                      $result2 = mysqli_query($connection,$q);
                    }
                    if($_POST['time']=='3'){
                      echo "<center><h1>LAST 1 WEEK</h1> </center> ";
                      $q="select * from quotationdb WHERE quote_date>=(CURDATE()-7) ORDER BY quote_date DESC, quote_time ASC";
                      $result2 = mysqli_query($connection,$q);
                    }
                  }
                  else{
                    $q="select * from quotationdb q where flag=0 ORDER BY quote_date DESC, quote_time ASC";
                    $result2 = mysqli_query($connection,$q);
                  }

                                     ?>

                                 <div class='row form-group' >
                     <div class='col-md-12'>
                       <div class="table-responsive table-responsive-data2">
                         <table class="table table-data2">
                           <thead>
                             <tr>
                               <th>

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
            <footer id="gtco-footer" class="gtco-brown" role="contentinfo" >
        			<div class="gtco-container">

        						<p>
        							<ul class="gtco-social-icons">
        								<center>
        								<li><a href="https://www.facebook.com/krishiyognatural/?hc_ref=ARSUcxlZqdJSeiRcJYY2UUZRD7gjadyyI2B-G5iwxXDBe8YJLtgksUXtKBdzvV5ON8w"><i class="icon-facebook"></i></a></li>
        								<li><a href="https://www.instagram.com/krishiyog/"><i class="icon-instagram"></i></a></li><br>
        									<small class="block" style="color:green;">  Email : enquiry@krishiyog.com </small><br>
        									<small class="block"> <a href="contact.php" style=" color:green; ">Contact Us</a> </small><br>
        									<a href="https://play.google.com/store/apps/details?id=com.krishiyog.krishi_udyog"><img src="../images1\google-play-badge.png" width="140px"></img></a>
        								</center>
        							</ul>
        						</p>
        							<small><p style="color:green;"><center>Copyright &copy; 2018. &nbsp; Nisarga Krishiyog Ventures OPC Pvt Limited.&nbsp;&nbsp;All Rights Reserved  <br> &nbsp;&nbsp;   <a href="privacy.php" style="color:green;>Privacy Policy</a> &nbsp;&nbsp; |&nbsp;&nbsp; <a href="terms.php" style="color:green;" >Terms of services</a>&nbsp;&nbsp;   |&nbsp;&nbsp;   <a href="refund.php" style="color:green;">Refunds &amp; Returns&nbsp;&nbsp; </a></center></p></small>

        					</div>
        				</div>

        			</div>

        		</footer>
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
