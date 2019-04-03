<?php
/* This is OTP verification page */

include "db_connect.php";
session_start();

if(isset($_POST['submit']))
{

    //Please Enter Your Details
    $user="KrishiyogNaturals"; //your username
    $password="76971301"; //your password

    $mobilenumbers= $_POST['pno']; //enter Mobile numbers comma seperated

    $otp=mt_rand(100000,999999); //generates random number
    setcookie("otp", $otp);

    $message = "You have requested for password reset for your krishiyog account....Please note your OTP : ". $otp . ". Thank you for using our service. "  ; //enter Your Message
    $senderid="Krishiyog Naturals"; //Your senderid
    $messagetype="N"; //Type Of Your Message
    $DReports="Y"; //Delivery Reports
    $url="http://www.smscountry.com/SMSCwebservice_Bulk.aspx";
    $message = urlencode($message);
    $ch = curl_init();

    if (!$ch){
        die("Couldn't initialize a cURL handle");
    }

    $ret = curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt ($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
    curl_setopt ($ch, CURLOPT_POSTFIELDS,
    "User=$user&passwd=$password&mobilenumber=$mobilenumbers&message=$message&sid=$senderid&mtype=$messagetype&DR=$DReports");
    $ret = curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    //If you are behind proxy then please uncomment below line and provide your proxy ip with port.
    // $ret = curl_setopt($ch, CURLOPT_PROXY, "PROXY IP ADDRESS:PORT");
    $curlresponse = curl_exec($ch); // execute

    if(curl_errno($ch))
        echo 'curl error : '. curl_error($ch);

    if (empty($ret)) {
        // some kind of an error happened
        die(curl_error($ch));
        curl_close($ch); // close cURL handler
    }
    else {
        $info = curl_getinfo($ch);
        curl_close($ch); // close cURL handler
        //echo $curlresponse; //echo "Message Sent Succesfully" ;
    }


    //security
    $phonenumber = $_POST['pno'];
    $_SESSION['phone'] = $phonenumber;
    //echo $_SESSION['phone'];

}

//verification of otp

if(isset($_POST['verification'])){
    $otpverification = $_POST['otpverification'];

    if($otpverification==$_COOKIE["otp"]){
        //echo "verification successful!!!!";
        ?>
        <script>
            alert("OTP verification successful!");
            document.location.href = 'pwdreset.php';
        </script>
        <?php
    }
    else{
        //echo "verification failed";
        ?>
        <script>
            alert("Verification failed");
            document.location.href = 'pwreset.php';
        </script>
        <?php
    }

}

//end of php code
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="css/login.css">



    <title>OTP verification</title>
</head>
<body>

    <div class="login-form col-sm-12 col-md-6 col-md-offset-4">
        <form action="pwreset.php" method="post" >
            <h1>OTP Verification</h1>

            <div class="form-group">
                <input type="text" class="form-control" name="pno" placeholder="Enter your phone number" >
                <i class="fa fa-user"></i>
            </div>

            <div class="form-group">
                <input type="submit" class="log-btn" value="submit" name="submit" >
            </div>
        </form>

        <br>

        <form action="pwreset.php" method="post">

            <h1 style="font-size:30px;">Type your OTP here!</h1>
            <div class="form-group">

                <input type="text" class="form-control" name="otpverification" placeholder="Enter your OTP here!" >
                <i class="fa fa-lock"></i>
            </div>

            <div class="form-group">
                <input type="submit" class="log-btn" value="confirm" name="verification" >
            </div>
        </form>

    </div>






    <!--
        <center>
    <form action="pwreset.php" method="post">

        <div class="form-group">
            <label for="inputPhoneNumber" class="" >Phone Number :</label>
            <div class="">
            <input type="text" class="form-control" name="pno" placeholder="Enter your phone number" >
            </div>
        </div>

        <div class="form-group">
            <div class="">
                <input type="submit" name="submit" value="submit" class="btn btn-primary" >
            </div>
        </div>


            Phone number : <input type="text" name="pno" placeholder="Please enter your phone number " > <br>
            <input type="submit" value="submit" name="submit" ><br>


    </form>

    </center>
    <br>
    <br>
    <br>
    <br>

    <form action="pwreset.php" method="post" >
        Please enter your OTP :
        <input type="text" name="otpverification" placeholder="Please enter your otp">
        <input name="verification" id="" class="btn btn-primary" type="submit" value="submit">
    </form>


     -->

</body>
</html>
