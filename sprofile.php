<!DOCTYPE HTML>
<?php
include "db_connect.php";
session_start();
if(!isset($_SESSION['login_user']));
  //header("Location: login.php");//redirect to login page to secure the welcome page without login access.

?>
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

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123909367-1"></script>
<script type="text/javascript">
function mailIt() {
var elms=document.forms[0].elements;

var template="From: "+elms.fname.value+" "+elms.lname.value+ " %0A%0A" +elms.message.value;
document.forms[0].action="mailto:enquiry@krishiyog.com?cc="+elms.email.value+"&subject="+elms.subject.value+"&body="+template ;
document.forms[0].submit();
}
</script>

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-123909367-1');
</script>

	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<!--<style>
	 h2, h3, h4{
		color: black;
		display: inline-block;
	}
</style>-->

	</head>
	<body>

	<div class="gtco-loader"></div>

	<div id="page">
		<nav class="gtco-nav" role="navigation">
			<div class="gtco-container">
				<div class="row">
					<div class="col-xs-2">
						<div id="gtco-logo"><a href="index.php"><img src="images/logo0.jpg" style="max-width:300px;max-height: 100px;margin-top:-15px;margin-left:-30px"/></a></div>
					</div>
					<div class="col-xs-10 text-center menu-1">
						<ul>

					<!--	<li ><a class="about-mob"  ><b>About</a></b></li> -->

						<span class="icon">
							<li><a class="active" href="index.php"><i class="icon-home"></i></a></li>
						</span>
							<li><a href="about.php"><b>About</a></b></li>
							<li><a href="index.php#natural farming?"><b>Natural Farming</a></b></li>
							<li><a href="resource.php"><b>Resources</a></b></li>
	            <li><a href="contact.php"><b>Contact us</a></b></li>

							<!--<li class="has-dropdown">
								<a href="#">Services</a>
								<ul class="dropdown">
									<li><a href="#">Shop</a></li>
									<li><a href="#">Discussion forum</a></li>
									<li><a href="#">Sell/Support</a></li>
								</ul>
							</li>-->
							<!--<li class="has-dropdown">
								<a href="#">Tools</a>
								<ul class="dropdown">
									<li><a href="#">HTML5</a></li>
									<li><a href="#">CSS3</a></li>
									<li><a href="#">Sass</a></li>
									<li><a href="#">jQuery</a></li>
								</ul>
							</li>-->
							<!--<li><a href="contact.php">Contact</a></li>-->
				<!--<li class="has-dropdown">
								<a href="services.html">Services</a>
								<ul class="dropdown">
									<li><a href="#">Web Design</a></li>
									<li><a href="#">eCommerce</a></li>
									<li><a href="#">Branding</a></li>
									<li><a href="#">API</a></li>
								</ul>
							</li>-->
							<li class="has-dropdown">
	              <a ><b>Account</b></a>
	              <ul class="dropdown">
									<li><?php if(!isset($_SESSION['login_user']) && !isset($_SESSION['category']))
												{
													echo "<li><a href='login.php'><b>LOGIN</b></a></li>";
													echo "<li><a href='signup2.php'><b>REGISTER</b></a></li>";
												}
											  if(isset($_SESSION['login_user']) && isset($_SESSION['category']))
												{
												    echo "<li><b>Welcome ".$_SESSION['fname']."!!</b></li>";
													if($_SESSION['category']=='aggregator' || $_SESSION['category']=='buyerdb'||$_SESSION['category']=='communorg'||$_SESSION['category']=='medexpertdb')
														echo "<li><a href='enquiry.php'><b>Enquiry<b></a></li>";
													if($_SESSION['category']=='sellerdb')
														echo "<li><a href='#'><b>Enquiry</b></a></li>";
													echo "<li><a href='logout.php'><b>Logout</b></a></li>";

												}
									?></li>
	              </ul>
	            </li>
						</ul>




				</div>



			</div>
		</nav>

<div style="padding-top:100px;"></div>


	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="animate-box">
				<?php
echo"<h1>Profile Information</h1>";
         $fname= $_POST['fname'];
				 $lname= $_POST['lname'];


				 $sql = "SELECT SID
 				FROM sellerdb where firstName = '$fname' and lastName ='$lname'";
 				//echo "$sql";
 				$result = mysqli_query($connection,$sql);
 				$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

				$sid = $row['SID'];

        $newQuery = "SELECT * FROM sellerdb where SID ='$sid'";
				$result1 = mysqli_query($connection,$newQuery);
 				$row2 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
				$q="select * from quotationdb q, buyerdb b where SID=$sid AND q.BID=b.BID";
			//	$newQuery = "SELECT * FROM sellerdb where SID ='$sid'";
				$result2 = mysqli_query($connection,$q);



					echo "
								<div class='container-fluid'>
							<div class='row'>

							<div class='col-md-4'>
								<h3><b>Name : </b>".$row2['firstName']." ".$row2['lastName']."</h3>
							</div>

							<div class='col-md-4'>
								<h3><b>Contact Number : </b>".$row2['sMobNo']."</h3>
							</div>

							<div class='col-md-4'>
								<h3><b>WhatsApp Number : </b>".$row2['WhatsApp']."</h3>
							</div>

							<div class='col-md-4'>
								<h3><b>Organisation Number : </b>".$row2['orgMobNo']."</h3>
							</div>

							<div class='col-md-4'>
								<h3><b>Address : </b>".$row2['addressSeller']."</h3>
							</div>


							<div class='col-md-4'>
								<h3><b>Email ID : </b>".$row2['email']."</h3>
							</div>

							<div class='col-md-4'>
								<h3><b>City : </b>".$row2['city']."</h3>
							</div>

							<div class='col-md-4'>
								<h3><b>State : </b>".$row2['state']."</h3>
							</div>


							<div class='col-md-4'>
								<h3><b>Zipcode : </b>".$row2['zipcode']."</h3>
							</div>


							<div class='col-md-4'>
								<h3><b>TAN : </b>".$row2['TANo']."</h3>
							</div>

							<div class='col-md-4'>
								<h3><b>PAN : </b>".$row2['PAN']."</h3>
							</div>


							<div class='col-md-4'>
								<h3><b>GST : </b>".$row2['GST']."</h3>
							</div>

							<div class='col-md-4'>
								<h3><b>Seller Type : </b>".$row2['sellerType']."</h3>
							</div>

							<div class='col-md-4'>
								<h3><b>Description : </b>".$row2['descr']."</h3>
							</div>

						</div>
						</div>
						";
						?>

						<div class='row form-group'>
							<div class='col-md-12'>
						<h3><b>Quotation : </b></h3>
						<div class="box-body table-responsive no-padding">
							<table class="table table-hover">
						<tr>
							<th>BUYER NAME</th>
							<th>ITEM</th>
							<th>UNIT</th>
							<th>DURATION</th>
							<th>PRICE QUOTED</th>
						</tr>

						<tr>
						<?php
							if(mysqli_num_rows($result2)>0)
							{
									while($row3=mysqli_fetch_array($result2))
									{
										?>
										<td><?php echo $row3['firstName']." ".$row3['lastName'];?></td>
										<td><?php echo $row3['item'];?></td>
										<td><?php echo $row3['unit'];?></td>
										<td><?php echo $row3['duration'];?></td>
										<td><?php echo $row3['price'];?></td>
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
				<div class="col-md-5 col-md-push-1 animate-box">



				</div>
			</div>

		</div>
	</div>




	<footer id="gtco-footer" class="gtco-brown" role="contentinfo" >
		<div class="gtco-container">
			<!--<div class="row row-pb-md">



				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<ul class="gtco-footer-links">
						<li><a href="#">Shop</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Testimonials</a></li>
						<li><a href="#">Handbook</a></li>
						<li><a href="#">Held Desk</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<ul class="gtco-footer-links">
						<li><a href="#">Find Designers</a></li>
						<li><a href="#">Find Deelopers</a></li>
						<li><a href="#">Teams</a></li>
						<li><a href="#">Advertise</a></li>
						<li><a href="#">API</a></li>
					</ul>
				</div>
			</div>-->

			<div class="row copyright">
				<div class="col-md-12">
					<!--<p class="pull-left">



					</p> -->

					<p>
						<ul class="gtco-social-icons">
							<center>
							<li><a href="https://www.facebook.com/krishiyognatural/?hc_ref=ARSUcxlZqdJSeiRcJYY2UUZRD7gjadyyI2B-G5iwxXDBe8YJLtgksUXtKBdzvV5ON8w"><i class="icon-facebook"></i></a></li>
							<li><a href="https://www.instagram.com/krishiyog/"><i class="icon-instagram"></i></a></li>
								<small class="block">  Email : enquiry@krishiyog.com </small>
								<small class="block"> <a href="contact.php">Contact Us</a> </small>
								<a href="https://play.google.com/store/apps/details?id=com.krishiyog.krishi_udyog"><img src="images1\google-play-badge.png" width="140px"></img></a>
							</center>
						</ul>
					</p>
					<small><p><center>Copyright &copy; 2018. &nbsp; Nisarga Krishiyog Ventures OPC Pvt Limited.&nbsp;&nbsp;All Rights Reserved  <br> &nbsp;&nbsp;   <a href="privacy.php">Privacy Policy</a> &nbsp;&nbsp; |&nbsp;&nbsp; <a href="terms.php">Terms of services</a>&nbsp;&nbsp;   |&nbsp;&nbsp;   <a href="refund.php">Refunds &amp; Returns&nbsp;&nbsp; </a></center></p></small>

				</div>
			</div>

		</div>

	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>
