<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

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


<h2><B>&nbsp;DAILY CUSTOMER TRANSACTION</B></h2>
<br>
<div class="col-md-12">
<button class="btn btn-success col-md-12" data-toggle="collapse" data-target="#demo"> <center>ADD CUSTOMER &nbsp;<i class="glyphicon glyphicon-plus"></i></center></button>


<div id="demo" class="collapse">
  <br>
              <div class="box-body">
<br><br>
            <form action="save_data.php" method="POST">


    
                <div class="form-group">
                  <label for="exampleInputFirstName">First Name</label>
                  <input type="text" class="form-control" id="exampleInputFirstName" placeholder="Enter First Name" name="firstname" required>
                </div>
                 <div class="form-group">
                  <label for="middleName">Middle Name</label>
                  <input type="text" class="form-control" id="middleName" placeholder="Enter Middle Name" name="middlename" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputLastName">Last Name</label>
                  <input type="text" class="form-control" id="exampleInputLastName" placeholder="Enter Last Name" name="lastname" required>
                </div>

                <div class="form-group">
                  <label for="conact">Contact Number: </label>
                  <input type="number" class="form-control" id="conact" placeholder="Enter Last Name" name="contact" required>
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
$table2 = "SELECT * FROM customer_daily WHERE isDeleted = '0'";
        
        
        
        $run_query2b = mysqli_query($connect,$table2);

            while($row = mysqli_fetch_array($run_query2b))

        {


?>




                <tr>
                  <td><?php echo $row['cust_firstname'].' '.$row['cust_middlename'].' '.$row['cust_lastname']; ?> </td>
                  <td><?php echo $row['cust_contact_no'];?></td>
                  <td><?php echo $row['cust_time_in']; ?></td>
  
    


               
<!-- <button class="btn btn-danger"   data-toggle="modal" data-target="#'.$user_delmodal.'"><i class="fa fa-remove"></i></button> -->
<?php   

$payout_modal="payout".$row['cust_daily_id'];
$user_delmodal="user_delmodal".$row['cust_daily_id'];

    echo '

<td>&nbsp;<button class="btn btn-success"  data-toggle="modal" data-target="#'.$payout_modal.'"><i class="fa fa-check"></i></button>&nbsp;</td>
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
      <h3>Would you like to payout?</h3>
    </div>
                </div>
                <div class='modal-footer'>
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
    <div id='".$user_delmodal."' class='modal fade'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                    <h4 class='modal-title'> </h4>
                </div>
                <div class='modal-body'>
                 
 <form  role='form' action='save_data.php' method='post' >
    <div class='form-group'>
Would you like to deactivate this user ? 
      
    </div>
                </div>
                <div class='modal-footer'>
                <input type='hidden' name='get_userid' value='".$row['cust_daily_id']."'>
                    <button type='submit' name='member_cancel'  class='btn btn-success'>Yes</button>
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
    <div id='".$payout_modal."' class='modal fade'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                    <h4 class='modal-title'> </h4>
                </div>
                <div class='modal-body'>
                 
 <form  role='form' action='save_data.php' method='post' >
    <div class='form-group'>
Would you like to deactivate this user ? 
      
    </div>
                </div>
                <div class='modal-footer'>
                <input type='hidden' name='get_userid' value='".$row['cust_daily_id']."'>
                    <button type='submit' name='member_cancel'  class='btn btn-success'>Yes</button>
                    <button type='button' class='btn btn-danger' data-dismiss='modal'>No</button>
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