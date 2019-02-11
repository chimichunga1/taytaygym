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


<h2><B>&nbsp;MEMBERSHIP SECTION</B></h2>
<br>
<div class="col-md-12">
<button class="btn btn-success col-md-12" data-toggle="collapse" data-target="#demo"> <center>ADD MEMBERS &nbsp;<i class="glyphicon glyphicon-plus"></i></center></button>


<div id="demo" class="collapse">
  <br>
              <div class="box-body">
<br><br>
            <form method="POST" action="save_data.php">


              <?php $random_num = mt_rand(00000001, 99999999); ?>
                <div class="form-group">
                  <label for="membershipCode">Membership Code: </label>
                  <input type="text" class="form-control" id="membershipCode" value="<?php echo $random_num; ?>" name="membership_code" readonly>
                </div>
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
                  <label for="birthday">Birthday</label>
                  <input type="date" class="form-control" id="birthday" placeholder="Enter Birthday" name="birthday" required>
                </div>
                 <div class="form-group">
                  <label for="address">Address</label>
                  <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address" required>
                </div>
                <div class="form-group">
                  <label>Gender</label>
                  <select name="gender" class="form-control">
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                    <option value="3">Shemale</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="occupation">Occupation</label>
                  <input type="text" class="form-control" id="occupation" placeholder="Enter Occupation" name="occupation" required>
                </div>
                <div class="form-group">
                  <label for="conact">Contact Number: </label>
                  <input type="text" class="form-control" id="conact" placeholder="Enter Last Name" name="contact" required>
                </div>
                <div class="form-group">
                  <label for="age">Age: </label>
                  <input type="number" class="form-control" id="age" placeholder="Enter Age" name="age" required>
                </div>
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

              </div>
        

              <div class="box-footer">
                <button type="submit" class="btn btn-primary col-md-12" name="add_members" >Save</button>
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
                  <th>Account ID</th>
                  <th>Full Name</th>
                  <th>Contact</th>
                  <th>Date Registered</th>
                  <th>Membership Expiry Date</th>

                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>




<?php 
$username_check = $_SESSION["username"];
$table2 = "SELECT * FROM member WHERE isDeleted = '0' and isExpired= '0' AND isCancelled = '0'";
        
        
        
        $run_query2b = mysqli_query($connect,$table2);

            while($row = mysqli_fetch_array($run_query2b))

        {


?>




                <tr>
                  <td><?php echo $row['member_code']; ?> </td>
                  <td><?php echo $row['member_firstname'].' '.$row['member_middlename'].' '.$row['member_lastname']; ?></td>
                  <td><?php echo $row['member_contact']; ?></td>
                  <td><?php echo $row['membership_registered']; ?></td>
                  <td><?php echo $row['membership_expired']; ?></td>  
    


               

<?php   
$user_viewmodal="user_viewmodal".$row['member_id'];
$user_editmodal="user_editmodal".$row['member_id'];
$user_delmodal="user_delmodal".$row['member_id'];
    echo '

<td><button class="btn btn-primary"  data-toggle="modal" data-target="#'.$user_viewmodal.'"><i class="fa fa-eye"></i></button>&nbsp;<button class="btn btn-success"  data-toggle="modal" data-target="#'.$user_editmodal.'"><i class="fa fa-edit"></i></button>&nbsp;<button class="btn btn-danger"   data-toggle="modal" data-target="#'.$user_delmodal.'"><i class="fa fa-remove"></i></button></td>
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
<b>Selected Membership : 

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
<b>Age : <?php echo $row['member_birthdate']; ?></b> <p></p>
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
                    <h4 class='modal-title'>EDIT FORM </h4>
                </div>
                <div class='modal-body'>
                 
 <form  role='form' action='save_data.php' method='post' >

    <div class='form-group'>
    
    </div>
                </div>
                <div class='modal-footer'>
                    <button type='submit' name='admin_edituser'  class='btn btn-success'>Yes</button>
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