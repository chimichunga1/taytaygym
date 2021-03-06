<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>CUSTOMERS | P4P </title>
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

<script language="javascript" type="text/javascript">
function limitText(limitField, limitNum) {
    if (limitField.value.length > limitNum) {
        limitField.value = limitField.value.substring(0, limitNum);
    }
}
</script>
  <body>
<?php



include("connection.php");
include("check_login_expired.php");


?>

<?php



include("navbar.php");



?>




<div class="container">


<h2><B>&nbsp;DAILY CUSTOMER TRANSACTION</B></h2>
<br>
<div class="col-md-12">
<button class="btn btn-success col-md-12" data-toggle="collapse" data-target="#demo"> <center>ADD CUSTOMER &nbsp;<i class="glyphicon glyphicon-plus"></i></center></button>


<div id="demo" class="collapse">
  <br>
              <div class="box-body">
<br><br>
            <form action="save_data.php" method="POST">




<div class="row">

    <div class="col-md-3">
      <div class="form-group">
        <label for="exampleInputLastName">Last Name</label>
        <input type="text" class="form-control" id="exampleInputLastName" placeholder="Enter Last Name" name="lastname" required>
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-group">
        <label for="exampleInputFirstName">First Name</label>
        <input type="text" class="form-control" id="exampleInputFirstName" placeholder="Enter First Name" name="firstname" required>
      </div>
    </div>
    <div class="col-md-3">
     <div class="form-group">
      <label for="middleName">Middle Name</label>
      <input type="text" class="form-control" id="middleName" placeholder="Enter Middle Name" name="middlename">
    </div>
    </div>
    <div class="col-md-3">
      <div class="form-group">
        <label for="conact">Contact Number: </label>
        <input type="number" class="form-control" id="conact" placeholder="Enter Last Name" name="contact"  onKeyDown="limitText(this,11);" onKeyUp="limitText(this,11);" required>
      </div>
    </div>

</div>

<div class="row">

      <div class="col-md-3">
            <div class="form-group">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" placeholder="Enter your Address" name="address" required>
            </div>
      </div>
      <div class="col-md-3">
            <div class="form-group">
              <label for="birthday">Birthday</label>
              <input type="date" class="form-control" id="birthday" placeholder="Enter Birthday" name="birthday" max="2013-12-31" required>
            </div>
      </div>
      <div class="col-md-3">
            <div class="form-group">
              <label for="height">Height</label>
              <input type="number" class="form-control" id="height" placeholder="Enter Height (FT)" name="height" min="1" max="300" required>
            </div>
      </div>
      <div class="col-md-3">
            <div class="form-group">
            <label for="weight">Weight</label>
            <input type="number" class="form-control" id="weight" placeholder="Enter Weight (KG)" name="weight" min="1" max="500" required>
          </div>
      </div>

</div>


<div class="row">

  <div class="col-md-6">
    <div class="form-group">
      <label for="medicalhistory">Medical History</label>
      <input type="text" class="form-control" id="medicalhistory" placeholder="Medical History" name="medicalhistory" required>
    </div>
  </div>

</div>


              </div>
        

              <div class="box-footer">
                <button type="submit" class="btn btn-primary col-md-12" name="add_customer" >Save</button>
              </div>
</form>
</div>

<br>
<br>

  </div>









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
$table2 = "SELECT * FROM customer_daily WHERE isDeleted = '0' AND isTimeOut = '0'";
        
        
        
        $run_query2b = mysqli_query($connect,$table2);

            while($row = mysqli_fetch_array($run_query2b))

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
<button class="btn btn-success"  data-toggle="modal" data-target="#'.$payout_modal.'"><i class="fa fa-check"></i></button>&nbsp;



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
                    <h4 class='modal-title'></h4>
                </div>
                <div class='modal-body'>
                 
 <form  role='form' action='save_data.php' method='post' >

    <div class='form-group'>
      <h3>Would you like to pay out?</h3>
    </div>
                </div>
                <div class='modal-footer'>








                    <input type='hidden' name='get_firstname' value='".$row['cust_firstname']."'>
                    <input type='hidden' name='get_middlename' value='".$row['cust_middlename']."'>
                    <input type='hidden' name='get_lastname' value='".$row['cust_lastname']."'>
                    <input type='hidden' name='get_contact' value='".$row['cust_contact_no']."'>                    
                    <input type='hidden' name='cust_daily_id' value='".$row['cust_daily_id']."'>
                    <button type='submit' name='customer_payout'  class='btn btn-success'>Yes</button>
                    <button type='button' class='btn btn-danger' data-dismiss='modal'>No</button>
  </form>
                </div>
            </div>
        </div>
    </div>
";




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