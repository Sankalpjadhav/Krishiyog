<form action="itemsearch.php" method="post">
 <table width='100%' border='0' style='border:none;'>
   <h1>Search For Item</h1>
   <tr>

     <td><label>item:&nbsp;</label><input type='text' name='by_item' /></td>
 <!--    <td><label>Phone_Number:&nbsp;</label><input type='text' name='by_Phone_Number' /></td>
     <td><label>Type:&nbsp;</label><input type='text' name='by_type' /></td>-->
     <td><input type='submit' name='submit' value='Search' /></td>
   </tr>
 </table>
 </form>


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
</html>
<?php

    function itemsearch(){
      include 'db_connect.php';
      $ITEM = $_POST['by_item'];
    $query = "SELECT buyerdb.firstName,buyerdb.lastName FROM buyerproduct ,buyerdb  WHERE buyerproduct.BID=buyerdb.BID and item='$ITEM' ";
    //  $query2 = "SELECT sellerdb.firstName,sellerdb.lastName FROM quotationdb q,sellerdb s  WHERE q.SID=s.SID and item='$ITEM' ";
     $result = mysqli_query($connection, $query);

     $e=@mysqli_num_rows($result);

     return $result;

 }

if(isset($_POST['submit'])) {

   $count = @mysqli_num_rows(itemsearch($_POST));
 //  echo $count;
     if($count>0)
     {

         $res1=@mysqli_fetch_all(itemsearch($_POST),MYSQLI_ASSOC);
         //var_dump($res1);
         $fName=array_column($res1,'firstName');
         $lName=array_column($res1,'lastName');

         for($i=0;$i<count($fName);$i++)
         {?>
           <form action= "item_display.php" method="post">

             <input type="hidden" name="fname" value="<?php echo $fName[$i]; ?>">
             <input type="hidden" name="lname" value="<?php echo $lName[$i]; ?>">

          <button type="submit" value="submit"> <?php echo "".$fName[$i]." ".$lName[$i];
         echo "\n";?></button>

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

 }
 ?>
