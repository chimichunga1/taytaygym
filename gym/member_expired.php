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
<h2><B>&nbsp;EXPIRED MEMBERSHIP</B></h2>
<br>
<div class="col-md-12">
<table class="table table-striped table-bordered" id = "example">
                <thead>
                <tr>
                  <th>Account ID</th>
                  <th>Date Cancelled</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>




<?php 
$username_check = $_SESSION["username"];




$table2 = "SELECT member.member_id,member.member_code,member.member_firstname,member.member_middlename,member.member_lastname,member.member_birthdate,member.member_address,member.member_gender,member.member_occupation,member.member_contact,member.member_sub_id,member.member_age,member.membership_registered,member.membership_expired,member_expired.date_expired
FROM member
RIGHT JOIN member_expired ON member.member_id=member_expired.member_id WHERE member.isDeleted = '0' and member.isExpired= '1' AND member.isCancelled = '0'";
        
        
        
        $run_query2b = mysqli_query($connect,$table2);

            while($row = mysqli_fetch_array($run_query2b))

        {


?>




                <tr>
                  <td><?php echo $row['member_code']; ?> </td>
                  <td><?php echo $row['membership_registered']; ?></td>
  
    


               

<?php   
$user_viewmodal="user_viewmodal".$row['member_id'];
$user_editmodal="user_editmodal".$row['member_id'];
$user_delmodal="user_delmodal".$row['member_id'];
    echo '

<td><button class="btn btn-primary"  data-toggle="modal" data-target="#'.$user_viewmodal.'"><i class="fa fa-eye"></i></button>&nbsp;<button class="btn btn-success"  data-toggle="modal" data-target="#'.$user_editmodal.'"><i class="fa fa-check"></i></button>&nbsp;</td>
   ';
echo
"
    
    <!-- Modal HTML -->
    <div id='".$user_viewmodal."' class='modal fade'>
        <div class='modal-dialog modal-lg'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                    <h4 class='modal-title'>Membership Info </h4>
                </div>
                <div class='modal-body'>
                 
 <form  role='form' action='save_data.php' method='post' >

    <div class='form-group'>
    ";
?>


<div class="col-md-6">
<b>Last Selected Membership : 

  <?php
if($row['member_sub_id'] == '1'){

   echo "1 Month Package for P1,000";
}elseif ($row['member_sub_id'] == '2') {

   echo "3 Months Package for P2,500";


}elseif ($row['member_sub_id'] == '3') {

   echo "6 Months Package for P4,500";
}
else{
   echo "1 Year Package for P8,500";

}

  ?></b> 
  <p></p>
<b>Address : <?php echo $row['member_address']; ?></b> <p></p>
<b>Gender : <?php echo $row['member_gender']; ?></b> <p></p>


</div>
<div class="col-md-6">
<b>Occupation : <?php echo $row['member_address']; ?></b> <p></p>
<b>Age : <?php echo $row['member_age']; ?></b> <p></p>
<b>Birthday : <?php echo $row['member_birthdate']; ?></b> <p></p>


</div>


<br><br>
<br><br>
<?php echo"
    </div>
                </div>
                <div class='modal-footer'>
   
  </form>
                </div>
            </div>
        </div>
    </div>
";

echo
"
    
    <!-- Modal HTML -->
    <div id='".$user_editmodal."' class='modal fade'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                    <h4 class='modal-title'>RENEWAL FORM </h4>
                </div>
                <div class='modal-body'>
                 
 <form  role='form' action='save_data.php' method='post' >
";
?>


   
                <div class="form-group">
                  <label>Select Membership</label>
                  &nbsp;&nbsp; <a style="color: red; font-style: italic;">*500 Membership Fee charge will also be applied</a>
                  <select name="membership" class="form-control">
                    <option value="1">1 Month Package for P1,000</option>
                    <option value="2">3 Months Package for P2,500</option>
                    <option value="3">6 Months Package for P4,500</option>
                    <option value="4">1 Year Package for P8,500</option>
                  </select>
                </div>


<?php
echo"
    <div class='form-group'>
    
    </div>
                </div>
                <div class='modal-footer'>
                    <input type='hidden' name='get_userid' value='".$row['member_id']."'>
                    <button type='submit' name='member_renew_expired'  class='btn btn-success'>Yes</button>
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
                <input type='hidden' name='get_userid' value='".$row['member_id']."'>
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