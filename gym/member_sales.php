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
                   <th>Member Code</th>               
                  <th>Member's Full Name</th>
                  <th>Membership Package</th>
                  <th>Date Registered</th>
                  <th>Action</th>
    
                </tr>
                </thead>
                <tbody>




<?php 
$username_check = $_SESSION["username"];




$table2 = "SELECT member.member_code,member.member_firstname,member.member_middlename,member.member_lastname,member_sales.member_sales_id,member_sales.date_log,member_sales.member_sales_id,member.member_sub_id,member.member_birthdate,member.member_address,member.member_gender,member.member_occupation,member.member_contact,member.member_sub_id,member.member_age,member.membership_registered,member.membership_expired
 FROM member RIGHT JOIN member_sales ON member.member_id = member_sales.member_sales_id WHERE member.isDeleted = '0' AND member.isExpired= '0' AND member.isCancelled = '0'";
        
        
        
        $run_query2b = mysqli_query($connect,$table2);

            while($row = mysqli_fetch_array($run_query2b))

        {


?>




                <tr>
                  <td><?php echo $row['member_code']; ?> </td>
                  <td><?php echo $row['member_firstname'].' '.$row['member_middlename'].' '.$row['member_lastname'].''; ?> </td>
                  <td>

          <?php


          if ($row['member_sub_id'] == '1') {
          echo "1 Month Package for P1,000";
          }elseif ($row['member_sub_id'] == '2') {
           echo " 3 Month Package for P2,500";
          }elseif ($row['member_sub_id'] == '3') {
           echo " 6 Month Package for P4,500";
          }else{
          echo " 1 Year Package for P8,500";
          }
           



           ?>
                    


                  </td>
                  <td><?php echo $row['date_registered'];?></td>

<?php   
$user_viewmodal="user_viewmodal".$row['member_sales_id'];
$user_printmodal="user_printmodal".$row['member_sales_id'];

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
<center><h3>Would you like to print an invoice ? </</center>
      
    </div>
                </div>
                <div class='modal-footer'>
                <input type='hidden' name='get_userid' value='".$row['member_code']."'>
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