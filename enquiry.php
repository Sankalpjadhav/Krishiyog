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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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
	if (!ifscChecker.test(ifsc)) {
		$("#errorifsc").html("Invalid IFSC code");
		document.getElementById('errorifsc').style.color="red";
	}else {
		$("#errorifsc").html("");
	}
	if (!accountNumberChecker.test(accountNumber)) {
		$("#erroraccountNumber").html("Invalid Account Number");
		document.getElementById('erroraccountNumber').style.color="red";
	}else {
		$("#erroraccountNumber").html("");
	}
    if ( document.buyerForm.gst.value.length!=15) {
           document.buyerForm.gst.focus() ;
					 document.getElementById('errorsgst').innerHTML="Enter gst with 15 digits";
					 document.getElementById('errorsgst').style.color="red";
        return false;
    }
		if (document.buyerForm.tan.value.length!=10) {
           document.buyerForm.tan.focus() ;
					 document.getElementById('errorstan').innerHTML="Enter tan with 10 digits";
					 document.getElementById('errorstan').style.color="red";
        return false;
    }
		if (document.buyerForm.pan.value.length!=16) {
           document.buyerForm.pan.focus() ;
					 document.getElementById('errorspan').innerHTML="Enter pan with 16 digits";
					 document.getElementById('errorspan').style.color="red";
        return false;
    }
    if (document.buyerForm.uin.value.length!=21) {
           document.buyerForm.uin.focus() ;
           document.getElementById('erroruin').innerHTML="Enter Company Identification number with 21 digits";
           document.getElementById('erroruin').style.color="red";
        return false;
    }
    if (document.buyerForm.pincode.value.length!=6) {
           document.buyerForm.pincode.focus() ;
           document.getElementById('errorpincode').innerHTML="Enter Pin Code with 6 digits";
           document.getElementById('errorpincode').style.color="red";
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

	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

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

  				<!--	<li ><a class="about-mob"  ><b>About</a></b></li> -->

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
            <!--  <li class="has-dropdown">  //For Drop down menu
                <a ><b>Account</b></a>
                <ul class="dropdown">

                </ul>
              </li>  -->
   					</ul>




  			</div>



  		</div>
  	</nav>

<div style="margin-top:150px;margin-left:30px;margin-right:30px;">
  <div><h3>Buyer Enquiry Form :</h3></div>
  <hr>

	<div class="display-4" style="font-size:25px; color:green;">Personal Details :</div>


						<?php

							if ($_SESSION['category'] == 'buyerdb') {
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
							if ($_SESSION['category'] == 'sellerdb') {
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
							if ($_SESSION['category'] == 'aggregator') {
								echo "<div class='row'>
												<div class='col-md-6'>
													Name: ".$_SESSION['fname']." ".$_SESSION['lname']."
												</div>
												<div class='col-md-6'>
													Contact Number: ".$_SESSION['mobile']."
												</div>
											</div>
								 ";
							}
							if ($_SESSION['category'] == 'medexperdivb') {
								echo "<div class='row'>
												<div class='col-md-6'>
													Name: ".$_SESSION['fname']." ".$_SESSION['lname']."
												</div>
												<div class='col-md-6'>
													Contact Number: ".$_SESSION['mobile']."
												</div>
											</div>
											<div class='col-md-6'>
												Specialization: ".$_SESSION['specialization']."
											</div>
										</div>
								 ";
							}
							if ($_SESSION['category'] == 'communorg') {
								echo "<div class='row'>
												<div class='col-md-6'>
													Name: ".$_SESSION['fname']." ".$_SESSION['lname']."
												</div>
												<div class='col-md-6'>
													Contact Number: ".$_SESSION['mobile']."
												</div>
											</div>
								 ";
							}
						 ?>
           </div>
						<hr>
						<div class="display-4" style="margin-left:30px; font-size:25px; color:green;">Company Details :</div>
					<form name="buyerForm" action="buyerEnqdb.php"  method="post" style="padding:10px;margin-left:30px;margin-right:30px;">
						<div class="row form-group">

					<!-- <div class="row form-group" style="text-align:center;">
							<div class="col-md-6 col-md-offset-3" >
							<select name="farming_type" class="form-control"  required>
								<option selected disabled="disabled">Farming type</option>
 								<option value="Natural Farming">Natural Farming</option>
 						  	<option value="Group Organic Certified">Group Organic Certified</option>
 						    <option value="Organic PGS">Organic PGS</option>
 						    <option value="Organic(Self Certified)">Organic(Self Certified)</option>
								<option value="Organic(Not Certified)">Organic(Not Certified)</option>
								<option value="conventional">Conventional</option>

					    </select>
							</div>

						</div>-->
						<div class="row form-group">
              <div class="col-md-6">
				Name of the company :
			  	<input type="text" class="form-control" name="companyName" placeholder="Company Name" value="" required>

              </div>
              <div class="col-md-6">
				Company's Email :
                <input type="text" class="form-control" name="email" placeholder="Email section" value="" required>
              </div>
						</div>
						<div class="row">
							<div class="col-md-4">
								Phone number :
								<input type="text" class="form-control" name="phoneno" placeholder="Phone number" value="" required>
							</div>

							<div class="col-md-4">
								Landline number :
								<input type="text" class="form-control" name="landlineno" placeholder="Land Line number" value="" required>
							</div>

							<div class="col-md-4">
								Company Identification Number (UIN) :
								<input type="text" class="form-control" name="uin" placeholder="What's your UIN?" value="" required>
                <div id="erroruin"></div>
              </div>


						</div>

						<hr>
						<div class="row form-group">
							<div class="display-4" style="margin-left:30px; font-size:25px; color:green; padding-bottom:10px;">Bank Details :</div>
							<div class="col-md-4">
								Bank Name :
								<input type="text" id="bankName"  class="form-control" name="bankName" placeholder="Bank Name" value="" required>
							</div>
							<div class="col-md-4">
								IFSC code :
								<input type="text" id="ifsc"  class="form-control" name="ifsc" placeholder="IFSC Code" value="" required>
								<div id="errorifsc">

								</div>
							</div>
							<div class="col-md-4">
								Account Number :
								<input type="text" id="accountNumber"  class="form-control" name="accountNumber" placeholder="Account Number" value="" required>
							</div>
							<div id="erroraccountNumber">

							</div>
						</div>
						<hr>
						<div class="row form-group">
							<div class="col-md-4">
								GST Number :
								<input type="text" id="gst" name="gst" class="form-control" required  placeholder="Gst Number">
								<div id ="errorsgst">
								</div>
							</div>
						<div class="col-md-4">
							TAN Number :
							<input type="text" id="tan" name="tan" class="form-control" required placeholder="TAN Number">
							<div id ="errorstan">
							</div>
						</div>

						<div class="col-md-4">
							PAN Number :
							<input type="text" id="pan" name="pan" class="form-control" required placeholder="PAN Number">
							<div id ="errorspan">
							</div>
						</div>

					</div>

					<hr>

					</div>
				</div>
				<script type="text/javascript" src="js/script.js"></script>

					<p style="text-align:center;">
						<input type="button" value="Add Item" class="btn btn-success" onClick="addRow('dataTable')" name="additem" />
						<input type="button" value="Remove Item(*)" class="btn btn-danger" onClick="deleteRow('dataTable')"  />

					</p>
								 <table id="dataTable" >
										<tbody >
											<tr>
												<p>
							<td><input type="checkbox" required="required" name="chk[]" checked="checked" style="height:20px;width:20px;" /></td>
							<td>
								<label></label>
								<input type="text" placeholder="Produce" class="form-control" required="required" name="BX_Item[]">
							 </td>

                 <td >
                  <label for="BX_variety"></label>
                  <input type="text" placeholder="Variety" class="form-control" required="required" name="BX_variety[]">
                   </td>
                <td>
								<label for="BX_units"></label>
								<input type="text" placeholder="Units" class="form-control" required="required" name="BX_units[]">
								</td>
							 <td >
								<label for="BX_type"></label>
								<select id="BX_type" name="BX_type[]" class="form-control"  required="required">
									<option selected disabled="disabled">Measure</option>
									<option value="Grams">Grams</option>
									<option value="KG">KG</option>
									<option value="Quintals">Quintals</option>
									<option value="Box">Box</option>
									<option value="Litre">Litre</option>
									<option value="ml">ml</option>
									<option value="dozen">Dozen</option>
									<option value="others">others</option>
								</select>
							 </td>
							 <td>
								 <label for=""></label>
								 <select name="BX_duration[]" class="form-control"  required>
									 <option selected disabled="disabled" value="">Duration</option>
									 <option value="Per_Day">Per_Day</option>
									 <option value="Per_Week">Per_Week</option>
									 <option value="Per_Month">Per_Month</option>
								 </select>
							 </td>
               <td>
                  <label for=""></label>
                 <select name="farming_type[]" class="form-control"  required>
   								<option selected disabled="disabled">Farming type</option>
    								<option value="Natural farming(ZBNF)">Natural Farming</option>
    						  	<option value="Group Organic Certified">Group Organic Certified</option>
    						    <option value="Organic PGS">Organic PGS</option>
    						    <option value="Organic(Self Certified)">Organic(Self Certified)</option>
   								<option value="Organic(Not Certified)">Organic(Not Certified)</option>
   								<option value="conventional">Conventional</option>

   					    </select>
               </td>
								</p>
											</tr>
											</tbody>

									</table>
                  <p style="text-align:center;">(*Only checked boxes will be removed or submitted.)</p>
					<div class="clear"></div>
							</fieldset>

              <div class="form-group">
                Delivery Address:
                <label for=""></label>
                <input type="text" placeholder="Delivery Address" class="form-control" name="deliveryAddress" value="">
              </div>

              <div class="row form-group">
                	<div class="col-md-4">
                    State:
                <td>
 								 <label for=""></label>
 								 <select name="state" class="form-control" required>
 									 <option selected disabled="disabled" >State</option>
 									 <option value="Andhra_Pradesh">Andhra Pradesh</option>
 									 <option value="Arunachal_Pradesh">Arunachal Pradesh</option>
 									 <option value="Assam">Assam</option>
                   <option value="Bihar">Bihar</option>
                   <option value="Chhattisgarh">Chhattisgarh</option>
                   <option value="Goa">Goa</option>
                   <option value="Gujarat">Gujarat</option>
                   <option value="Haryana">Haryana</option>
                   <option value="Himachal_Pradesh">Himachal Pradesh</option>
                   <option value="Jammu_and_Kashmir">Jammu & Kashmir</option>
                   <option value="Jharkhand">Jharkhand</option>
                   <option value="Karnataka">Karnataka</option>
                   <option value="Kerala">Kerala</option>
                   <option value="Madhya_Pradesh">Madhya Pradesh</option>
                   <option value="Maharashtra">Maharashtra</option>
                   <option value="Manipur">Manipur</option>
                   <option value="Meghalaya">Meghalaya</option>
                   <option value="Mizoram">Mizoram</option>
                   <option value="Nagaland">Nagaland</option>
                   <option value="Odisha">Odisha</option>
                   <option value="Punjab">Punjab</option>
                   <option value="Rajasthan">Rajasthan</option>
                   <option value="Sikkim">Sikkim</option>
                   <option value="Tamil_Nadu">Tamil Nadu</option>
                   <option value="Telangana">Telangana</option>
                   <option value="Tripura">Tripura</option>
                   <option value="Uttarakhand">Uttarakhand</option>
                   <option value="Uttar_Pradesh">Uttar Pradesh</option>
                   <option value="West_Bengal">West Bengal</option>
                 </select>
 							 </td>
             </div>
             <div class="col-md-4">
               Pin Code:
               <td>
 								<label></label>
 								<input type="text" placeholder="Pin Code" class="form-control" required="required" name="pincode">
 							 </td>
               <div id="errorpincode"></div>
            </div>

            <div class="col-md-4">
              City:
              <td>
               <label></label>
               <input type="text" placeholder="City" class="form-control" required="required" name="city">
              </td>
           </div>
          </div>


							<div class="row form-group">
								<div class="col-md-12">
									<label for="message"></label>
									<textarea name="message" id="message" cols="30" rows="10"
									class="form-control" placeholder="Tell us about your requirements. . . . .(Maximum of 2000 characters)"></textarea>
								</div>
							</div>
							</div>


						<div class="form-group" style="text-align:center;">
							<input type="submit" value="Send Enquiry" class="btn btn-primary" onclick="enquiryFormSuccess.php" >
						</div>

					</form>

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
					<small><p><center>Copyright &copy; 2018. &nbsp; Nisarga Krishiyog Ventures OPC Pvt Limited.&nbsp;&nbsp;All Rights Reserved  <br> &nbsp;&nbsp;   <a href="privacy.html">Privacy Policy</a> &nbsp;&nbsp; |&nbsp;&nbsp; <a href="terms.html">Terms of services</a>&nbsp;&nbsp;   |&nbsp;&nbsp;   <a href="refund.html">Refunds &amp; Returns&nbsp;&nbsp; </a></center></p></small>

				</div>
			</div>

		</div>

	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular.min.js'></script>



<script>
var app = angular.module('add-row', []);
  app.controller('MainCtrl', function($scope) {
  //$scope.dataType = ['type1', 'type2', 'type'];
 $scope.columns = [{colId: 'col1', name:'',quantity:'', dataType:[]}];
 $scope.dataType = [
{id: 1, dataTypeName: 'Grams'},
{id: 2,  dataTypeName: 'KG'},
{id: 3, dataTypeName: 'Quintals'},
{id: 4, dataTypeName: 'Box'},
{id: 5, dataTypeName: 'Litre'},
{id: 6, dataTypeName: 'ml'}
];
  $scope.addNewColumn = function() {
    var newItemNo = $scope.columns.length+1;
    $scope.columns.push({'colId':'col'+newItemNo});
  };
  $scope.removeColumn = function(index) {
    // remove the row specified in index
    $scope.columns.splice( index, 1);
    // if no rows left in the array create a blank array
    if ( $scope.columns.length() === 0 || $scope.columns.length() == null){
      alert('no rec');
      $scope.columns.push = [{"colId":"col1"}];
    }
  };
});
</script>
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
