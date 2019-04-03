
<?php

include "db_connect.php";
session_start();

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $bid = $_POST['bid'];

    $edit = $_POST['editunits'];
    $sql2="select * from buyerproduct where id=$id";
    $r= mysqli_query($connection, $sql2);
    $r1=mysqli_fetch_assoc($r);
    $flag=$r1['flag1'];

    if($flag==0)
    {

    $sql = "UPDATE buyerproduct SET unit = $edit , flag1 = 1  WHERE id=$id  ";
    $sql4="UPDATE quotationdb set unit =$edit where qid=$id";

    if(mysqli_query($connection,$sql) and mysqli_query($connection,$sql4))
    {
        //$last_id=mysqli_insert_id($connection);
        //echo $last_id;
		echo"Edited Successfully!";
        //echo"<br>";

	}
	else
	{
		echo"EDIT Failed ".$sql."<br>".mysqli_error($connection);
		echo"<br>";
    }

    $query= "select s.sMobNo from quotationdb q, sellerdb s where  q.qid=$id and q.SID=s.SID ";
    $result2 = mysqli_query($connection,$query);

    $query1="select * from buyerdb where BID=$bid";
    $result3 = mysqli_query($connection,$query1);
    $row = mysqli_fetch_assoc($result3);
    $uid=$row['uniqueid'];

    $query2="select * from buyerproduct where id=$id";
    $result4 = mysqli_query($connection,$query2);
    $row5 = mysqli_fetch_array($result4,MYSQLI_ASSOC);
    $item=$row5['item'];
    $unit=$row5['unit'];



    if(@mysqli_num_rows($result2)>0)
    {
            while($row3=@mysqli_fetch_array($result2))
            {


                $user="KrishiyogNaturals"; //your username
                $password="76971301"; //your password

                $mobilenumbers= $row3['sMobNo'] ; //enter Mobile numbers comma seperated

                //$message = "hi";
                //echo $uid;
                //$message = " NOTIFICATION " . $uid . " has changed his units of the item " . $item . " to " . $unit . ". Please go to your dashboard and change it.  You are getting this message because you have quoted for this particular buyer. Thank you for using our service - Team Krishiyog"   ; //enter Your Message
                $message = "KRISHIYOG : Buyer id - " . $uid . " has changed the units to " .$unit . " for the product " .$item . ". Check dashboard and make alteration if needed."  ;
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

            }



    }
}

?>
    <!DOCTYPE html>
    <html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>KrishiYog | Welcome</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <style media="screen">


    .shadow {
    box-shadow: 0px 11px 15px -7px rgba(0, 0, 0, 0.2), 0px 24px 38px 3px rgba(0, 0, 0, 0.14), 0px 9px 46px 8px rgba(0, 0, 0, 0.12);    transition: box-shadow 0.28s cubic-bezier(0.4, 0, 0.2, 1);
    }
    body {
    background: url(grass.JPG) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    }
    </style>
    <body>

    <div style="max-width:80%;margin-top:100px;" class="shadow p-3 mb-5 bg-white rounded container" style="margin-bottom:50px;">

    <img height="160" width="160" src="flag.jpg" alt="Indian Flag" style="float:left">
    <?php
    if($flag == 0 ){?>
    <center><h1>Updated successfully</h1></center>
    <center >
        <img  src="checked.png" alt="" height="100">
        <h3 style="margin-left:-20px"></h3>
    </center>
    <?php } ?>
    <?php
    if($flag==1){?>
    <center><h1>You have already edited for this item,<br>Cannot edit again!!!!<br>If you want to make changes please delete this requirement and enquire again</h1></center>
    <center >
    <img  src="images/cancel.png" alt="hi" height="100" >
    <h3 style="margin-left:-20px"></h3>

    </center>
    <?php } ?>
    <br/>
    <center>
        <h6 style="margin-right:-140px">Download our app</h6>
    <a style="margin-right:-140px" href="https://play.google.com/store/apps/details?id=com.krishiyog.krishi_udyog" target="_blank"><img src="http://www.niftybuttons.com/googleplay/googleplay-button1.png" alt="Get on Google Play (Button via NiftyButtons.com)"></a><br>

    </center>
    <!-- <center> -->
    <a href="bdash.php"><button type="button"  class="btn btn-success" name="button">Continue</button></a>

    <!-- </center> -->

    </div>
    </body>
    </html>

<?php

}


?>
