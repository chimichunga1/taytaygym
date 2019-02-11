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

           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
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


<h2><B>&nbsp; MEMBERSHIP SALES</B></h2>
<br>
<div class="col-md-12">
<table class="table table-striped table-bordered" id = "example">
                <thead>
                <tr>
                   <th>Full Name</th>               
                  <th>Contact No.</th>
                  <th>Time In</th>
                  <th>Time Out</th>
                  <th>Action</th>
    
                </tr>
                </thead>
                <tbody>




<?php 
$username_check = $_SESSION["username"];




$table2 = "SELECT customer_daily.cust_daily_id,customer_daily.cust_firstname,customer_daily.cust_middlename,customer_daily.cust_lastname,customer_daily.cust_contact_no,customer_daily.cust_time_in,customer_sales.time_out FROM customer_daily LEFT JOIN customer_sales ON customer_daily.cust_daily_id=customer_sales.cust_sales_id WHERE customer_daily.isDeleted='0' AND customer_daily.isTimeOut = '1'";
        
        
        
        $run_query2b = mysqli_query($connect,$table2);

            while($row = mysqli_fetch_array($run_query2b))

        {


?>




                <tr>
                  <td><?php echo $row['cust_firstname'].' '.$row['cust_middlename'].' '.$row['cust_lastname']; ?> </td>
      
                  <td><?php echo $row['cust_contact_no'];?></td>
                  <td><?php echo $row['cust_time_in']; ?></td>
                  <td><?php echo $row['time_out'];?></td>

<?php   
$user_viewmodal="user_viewmodal".$row['cust_daily_id'];
$user_printmodal="user_printmodal".$row['cust_daily_id'];

    echo '

<td><button class="btn btn-primary"  data-toggle="modal" data-target="#'.$user_viewmodal.'"><i class="fa fa-eye"></i></button>&nbsp;<button class="btn btn-success"  data-toggle="modal" data-target="#'.$user_printmodal.'"><i class="fa fa-print"></i></button>&nbsp;</td>
   ';
  
echo
"
    
    <!-- Modal HTML -->
    <div id='".$user_viewmodal."' class='modal fade'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                    <h4 class='modal-title'>Membership Info </h4>
                </div>
";
?>
                <div class='modal-body'>
                 


    <div class='form-group'>
<div class="col-md-6">
<b>Birthdate : </b> <?php echo $row['member_birthdate']; ?><p></p>
<b>Address : </b><?php echo $row['member_address'];?><p></p>
<b>Gender : </b><?php echo $row['member_gender'];?><p></p>
<b>Occupation : </b><?php echo $row['member_occupation'];?><p></p>


</div>
<div class="col-md-6">
<b>Contact : </b><?php echo $row['member_contact'];?><p></p>
<b>Age : </b><?php echo $row['member_age'];?><p></p>
<b>Membership Registered Date : </b><?php echo $row['membership_registered'];?><p></p>
<b>Membership Expiration Date : </b><?php echo $row['membership_expired'];?><p></p>



</div>

    </div>
                </div>
                <div class='modal-footer'>
      

                </div>
            </div>
        </div>
    </div>


<?php
echo"    

";




echo ' </tr>';

echo
"
    
    <!-- Modal HTML -->
    <div id='".$user_printmodal."' class='modal fade'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                    <h4 class='modal-title'> </h4>
                </div>
                <div class='modal-body'>
                 
 <form  role='form' action='save_data.php' method='post' >
    <div class='form-group'>
<center><h3>Would you like to print an invoice ? </h3></center>
      
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

        }

?>


                </tbody>

              </table>

</div>

</div>

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );

</script>










    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   
    <!-- Include all compiled plugins (below), or include individual files as needed -->

  </body>
</html>