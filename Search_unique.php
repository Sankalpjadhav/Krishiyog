<?php
session_start();
if(!isset($_SESSION['login_user'])){
    header("Location: login.php");}//redirect to login page to secure the welcome page without login access.



include 'db_connect.php';

#if(!isset($_POST['submit'])){
$d=0;






?>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" href="http://www.krishiyog.com/images/logo0.jpg" type="image/x-icon" />

	<title>Krishiyog Naturals &mdash;Seed to wellness</title>
</head>
<body>


						<nav class="navbar navbar-expand-sm bg-light navbar-light sticky-top" style="font-size:25px; opacity:;">
						  <!-- Brand -->
						  <a href="../index.php">
                            <img src="images/logo0.jpg" alt="Krishiyog" style="height:60px; width:60px;" />
                         </a>

						  <!-- Links -->
						  <ul class="navbar-nav ml-auto">

							<li class="nav-item">
							  <div class="display-4"  >
									<?php echo"Welcome " . $_SESSION['fname'] . "!" ; ?>
								</div>
							</li>
						  </ul>
						</nav>
						<br>&nbsp;&nbsp;
<div class="btn btn-info" style="background-color:white;">
	<a href="index.php" style="text-decoration:none;">Go back!</a>
</div>
<div class="btn btn-info" style="background-color:white;">
	<a href="admin/SellerDashboard.php" style="text-decoration:none;">Dashboard</a>
</div>

<div class="container">

      <form action="Search_unique.php" method="post">

         <div class="display-4">Search For Item</div>

              <h1>Item:&nbsp;</h1><input type='text' name='by_item' />
              <h1>Buyer Unique ID:&nbsp;</h1><input type='text' name='by_uniqueid' />
         <!--  <td><label>City:&nbsp;</label><input type='text' name='by_city' /></td>
           <td><label>Phone_Number:&nbsp;</label><input type='text' name='by_Phone_Number' /></td>
           <td><label>Type:&nbsp;</label><input type='text' name='by_type' /></td>-->
           <a href="#" data-toggle="tooltip" title="Click on me!"><input class="btn btn-primary" type='submit' name='submit' value='Search' /></a>
       </div>

      </form>

    </body>
    <html>
    <head>

      <style>
      button {
        background-color: transparent;
        background-repeat:no-repeat;
        border: none;
        cursor:pointer;
        overflow: hidden;
        outline:none;
      }</style>
    </head>
    <body>

    <div class="container">



      <div class="toast" data-autohide="false">
        <div class="toast-header">
          <strong class="mr-auto text-primary">Hello <?php echo  $_SESSION['fname'] . "!" ; ?></strong>
          <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
        </div>
        <div class="toast-body">
          Search for the items that you have quotated only!
        </div><br>
        </div><br>
      </div>
    </div>



<?php

function search_buyer() {
    $by_uniqueid = $_POST['by_uniqueid'];
    $by_item = $_POST['by_item'];
  //  $by_city = $_POST['by_city'];
    //    $by_Phone_Number = $_POST['by_Phone_Number'];
  //  $by_type = $_POST['by_type'];

    //Do real escaping here

    $query = "SELECT buyerdb.uniqueid,buyerdb.BID,buyerproduct.item,buyerproduct.unit,buyerproduct.type,buyerproduct.id,buyerproduct.duration FROM buyerproduct ,buyerdb, quotationdb q";
    $conditions = array();

    if(! empty($by_uniqueid)) {
      $conditions[] = "buyerdb.uniqueid='$by_uniqueid'";
    }
    if(! empty($by_item)) {
      $conditions[] = "q.item='$by_item'";
    }
    //if(! empty($by_city)) {
    //  $conditions[] = "city='$by_city'";
  //  }
  //  if(! empty($by_PhoneNumber)) {
    //  $conditions[] = "sMobNo='$by_Phone_Number'";
  //  }
  /*  if(! empty($by_type)) {
      $conditions[] = "e_type='$by_type'";
    }*/

    $sql = $query;
    if (count($conditions) > 0) {
      $sql .= " WHERE q.BID=buyerdb.BID and q.qid=buyerproduct.id and q.SID='".$_SESSION['SID']."' and " . implode(' AND ', $conditions);
    }
    //echo $sql;

   include 'db_connect.php';
    $result = mysqli_query($connection, $sql);
    return $result;

}

if(isset($_POST['submit'])) {

  $count = mysqli_num_rows(search_buyer($_POST));
//  echo $count;
    $count1=1;
    if($count>0)
    {

        $res1=@mysqli_fetch_all(search_buyer($_POST),MYSQLI_ASSOC);
      /*  //var_dump($res1);
      //  $fn=array_column($res1,'firstName');
        //$fn2=array_column($res1,'lastName');
        $fn3=array_column($res1,'uniqueid');
        $fn4=array_column($res1,'item');
        $fn5=array_column($res1,'unit');
       // $fn6=array_column($res1,'type');
        $fn7=array_column($res1,'duration');
        //echo $fn[0];
        //echo $fn[1];*/
        $fn=array_column($res1,'firstName');
        $fn2=array_column($res1,'lastName');
        $fn3=array_column($res1,'uniqueid');
        $fn4=array_column($res1,'item');
        $fn5=array_column($res1,'unit');
        $fn6=array_column($res1,'type');
        $fn7=array_column($res1,'duration');
        $fn8=array_column($res1,'BID');
        $fn9=array_column($res1,'id');

        for($i=0;$i<count($fn3);$i++)
        {?>
          <form action= "Search_unique.php" method="post">

          <!--  <input type="hidden" name="fname" value="<?php echo $fname; ?>">
            <input type="hidden" name="lname" value="<?php echo $lname; ?>">

        <li>  <button type="submit" value="submit"> <?php echo "".$fn3[$i]." ".$fn4[$i]." ".$fn5[$i]." ".$fn7[$i];
        echo "\n";?></button></li>-->

        <?php # echo $fn[$i]." ".$fn2[$i]." ".$fn3[$i]." ".$fn4[$i]." ".$fn5[$i]." ".$fn6[$i]." ".$fn7[$i]." ". $fn8[$i]." ". $fn9[$i];

    echo "<div class='container'>
                <div class='row'>
                  <div class='col-md-12 btn btn-success' style='border-radius:1%;'>UNIQUE ID: ".$fn3[$i]."</div>
                </div>
                <div class='row form-group' >
                <div class='col-md-12' >
                  <div class='box-body table-responsive no-padding'>
                  <table class='table table-hover'>
                    <tr>

                      <th>ITEM</th>
                      <th>UNIT</th>
                      <th>MEASURE</th>
                      <th>DURATION</th>
                      <th></th>

                    </tr>

                    <tr>

                      <td>".$fn4[$i]."</td>
                      <td>". $fn5[$i]."</td>
                      <td>". $fn6[$i]."</td>
                      <td>". $fn7[$i]."</td>
                  </table>

                    <form  method='post'>

                       <i class='fa fa-inr'></i>

                       <input type='hidden' name='item' value=".$fn4[$i].">
                       <input type='hidden' name='unit' value=".$fn5[$i].">
                       <input type='hidden' name='type' value=".$fn6[$i].">
                       <input type='hidden' name='duration' value=".$fn7[$i].">
                       <input type='hidden' name='id' value=".$fn9[$i].">
                       <input type='hidden' name='bid' value=".$fn8[$i].">
                       <input type='hidden' name='price' >
                      <center><input type='text' style='' name='price' placeholder='Enter your price in &#x20b9;' value='' required/><br><br>

                      <td><button  type='submit' class='col-md-2 btn btn-primary' style='color:black;float:none;' formaction='editdb.php' >QUOTE AGAIN<i class='fa fa-inr'></i></button></td>
                      </center>
                    </form>

                    <form action='seller_delete.php' method='POST'>
                     <input type='hidden' name='item' value=".$fn4[$i].">
                       <input type='hidden' name='unit' value=".$fn5[$i].">
                       <input type='hidden' name='type' value=".$fn6[$i].">
                       <input type='hidden' name='duration' value=".$fn7[$i].">
                       <input type='hidden' name='id' value=".$fn9[$i].">
                       <input type='hidden' name='bid' value=".$fn8[$i].">
                       <input type='hidden' name='price' >

                      <div class='col-md-12 btn btn-danger' style='border-radius:1%;'>
                      <button  type='submit' class='col-md-2' style='color:black;float:none;'  >DELETE<i class='fa fa-inr'></i></button>
                      </div>

                    </form>

                    </tr>

                </div>
                </div>
                </div>
                </div>
          ";?>


        </form>

                 <?php
        }
                 //var_dump($fn);
                /* for($i=0;$i<count($fn);$i++)
                 {
                   echo "".$fn[$i]." ".$fn2[$i];
                   echo "\n";
                 }*/
                           //echo $retrived_result['firstName']." ";
                   //echo $retrived_result['lastName']." ";
                   //echo $retrived_result['sMobNo'];
                  //echo $res1;

             }
        	 else
        	 {
        		 echo "<div class='container'><marquee>
        				<div class='display-4'>No Quotation matched with your quotated items!</div>
        			  </div>";
        	 }

         }

         ?>

        </body>
        <script>
        $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();
        });
        $(document).ready(function(){
          $('.toast').toast('show');
        });
        </script>
        </html>
