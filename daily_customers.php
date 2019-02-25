<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>DAILY CUSTOMERS | P4P </title>
<link rel="apple-touch-icon" sizes="57x57" href="favico/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="favico/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="favico/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="favico/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="favico/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="favico/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="favico/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="favico/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="favico/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="favico/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="favico/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="favico/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="favico/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    <!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.min.css">

   <script src="js/jquery.min.js"></script> 
    <script src="js/bootstrap.min.js"></script>
 <script src="js/jquery.dataTables.min.js"></script> 
   <link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>


  <body>
<?php



include("connection.php");
include("check_login_expired.php");


?>

<?php



include("navbar.php");



?>




<div class="container">


<h2><B>&nbsp;DAILY CUSTOMERS LIST</B></h2>











<div class="col-md-12">
<table class="table table-striped table-bordered" id = "example">
                <thead>
                <tr>
                  <th>Customer Name</th>
                  <th>Contact Number</th>
                  <th>Time In</th>
                  <th>Actions</th>

                </tr>
                </thead>
                <tbody>




<?php 
$username_check = $_SESSION["username"];
  $get_customer = "SELECT * FROM customer_daily WHERE isDeleted = '0' AND isMember = '0'";
    $get_customer_id = mysqli_query($connect,$get_customer);

        while($row = mysqli_fetch_array($get_customer_id))

        {


?>




                <tr>
                  <td><?php echo $row['cust_lastname'].', '.$row['cust_firstname'].' '.$row['cust_middlename'];?> </td>
                  <td><?php echo $row['cust_contact_no'];?></td>
                  <td><?php echo $row['cust_time_in']; ?></td>
  
    


<!-- <button class="btn btn-danger"   data-toggle="modal" data-target="#'.$user_delmodal.'"><i class="fa fa-remove"></i></button> -->
<?php   

$payout_modal="payout".$row['cust_daily_id'];
$view_modal="user_delmodal".$row['cust_daily_id'];

    echo '

<td>
<button class="btn btn-primary"  data-toggle="modal" data-target="#'.$view_modal.'"><i class="fa fa-eye"></i></button>&nbsp;
<button class="btn btn-success"  data-toggle="modal" data-target="#'.$payout_modal.'"><i class="fa fa-user"></i></button>&nbsp;



</td>
   ';


echo
"
    
    <!-- Modal HTML -->
    <div id='".$payout_modal."' class='modal fade'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                    <h4 class='modal-title'>UPGRADE TO MEMBER FORM </h4>
                </div>
                <div class='modal-body'>
                 
 <form  role='form' action='save_data.php' method='post' enctype='multipart/form-data' >
    <input type='hidden' name='cust_daily_id' value='".$row['cust_daily_id']."'>
    ";
 
?>
 



   <?php $random_num = mt_rand(00000001, 99999999); ?>
             <input type="hidden" class="form-control" id="membershipCode" value="<?php echo $random_num; ?>" name="membership_code" readonly>


 <div class="row">
  



    <div class="col-md-4">

        <div class="form-group">
                      <label for="weight">Target Weight</label>
                      <input type="number" class="form-control" id="weight" placeholder="Enter Weight" name="targetweight" min="1" max="500" required>
                    </div>
    </div>



    <div class="col-md-4">
                    <div class="form-group">
                      <label>Gender</label>
                      <select name="gender" class="form-control">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                    </div>
    </div>


    <div class="col-md-4">



      <div class="form-group">
        <label for="membersphoto">Member's Photo:</label>
        <input type="file" class="form-control" name="member_image" id="membersphoto" accept="image/x-png,image/gif,image/jpeg" placeholder="MEMBER IMAGE" >
   
      </div>



    </div>



</div>

<div class="row">
<div class="col-md-12">
                <div class="form-group">
                  <label>Select Membership</label>
                  &nbsp;&nbsp; <a style="color: red; font-style: italic;">*500 Membership Fee charge will also be applied</a>
                  <select name="membership" class="form-control">
                    <option value="promo1">1 Month Package for P1,000</option>
                    <option value="promo2">3 Months Package for P2,500</option>
                    <option value="promo3">6 Months Package for P4,500</option>
                    <option value="promo4">1 Year Package for P8,500</option>
                    <option readonly disabled>*PROMOS AVAILABLE LIMITED TIME OFFER!</option> 

<?php 

$table2 = "SELECT * FROM member_promo WHERE isDeleted = '0' AND isMember ='1' ";
        
        
        
        $run_query2b = mysqli_query($connect,$table2);

            while($row = mysqli_fetch_array($run_query2b))

        {


?>


<option value="<?php echo $row['promo_id'];?>"><?php echo $row['promo_description']; ?></option>
<?php

}

?>
                  </select>
                </div>


</div>

</div>


        


  <?php 


  echo"

                </div>
                <div class='modal-footer'>
                 
                    <button type='submit' name='customer_upgrade'  class='btn btn-success'>Proceed</button>
                    <button type='button' class='btn btn-danger' data-dismiss='modal'>Cancel</button>
  </form>
                </div>
            </div>
        </div>
    </div>
";




 ?>



 <?php 

 


echo
"
    
    <!-- Modal HTML -->
    <div id='".$view_modal."' class='modal fade'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                    <h4 class='modal-title'><b> CUSTOMER INFORMATION</b></h4>
                </div>
                <div class='modal-body'>
                 
 <form  role='form' action='save_data.php' method='post' >
    <div class='form-group'>
";
?>


<div class="row">

  <div class="col-md-4">
  <b>Address : <?php echo $row['cust_address']; ?></b> <p></p>

  </div>
  <div class="col-md-4">
  <b>Birthday : <?php echo $row['cust_birthday']; ?></b> <p></p>

  </div>

  <div class="col-md-4">
  <b>Age : <?php echo $row['cust_age']; ?></b> <p></p>

  </div>



</div>

<div class="row">


  <div class="col-md-4">
  <b>Weight : <?php echo $row['cust_weight']; ?></b> <p></p>

  </div>
  <div class="col-md-3">
  <b>Height : <?php echo $row['cust_height']; ?></b> <p></p>

  </div>





</div>

<?php
echo"
      
    </div>
                </div>
                <div class='modal-footer'>
   
  </form>
                </div>
            </div>
        </div>
    </div>
";


echo ' </tr>';








        }

?>


                </tbody>

              </table>

</div>



<script>
$(document).ready(function() {
    $('#example').DataTable();
} );

</script>



</div>






    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   
    <!-- Include all compiled plugins (below), or include individual files as needed -->

  </body>
</html>