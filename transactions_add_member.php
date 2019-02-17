<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ADD MEMBER | P4P</title>
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


<h2><B>&nbsp;MEMBERSHIP SECTION</B></h2>
<br>
<div class="col-md-12">
<button class="btn btn-success col-md-12" data-toggle="collapse" data-target="#demo"> <center>ADD MEMBERS &nbsp;<i class="glyphicon glyphicon-plus"></i></center></button>


<div id="demo" class="collapse">
  <br>
              <div class="box-body">
<br><br>
            <form method="POST" action="save_data.php">

<div class="row">
                  <label for="membershipCode"></label>
                  <input type="hidden" class="form-control" id="membershipCode" value="<?php echo $random_num; ?>" name="membership_code" readonly> 
      <div class="col-md-3">
                    <?php $random_num = mt_rand(00000001, 99999999); ?>

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
                        <label for="birthday">Birthday</label>
                        <input type="date" class="form-control" id="birthday" placeholder="Enter Birthday" name="birthday" max="2013-12-31" required>
                      </div>

      </div>
</div>

<div class="row">
    <div class="col-md-4">
                     <div class="form-group">
                      <label for="address">Address</label>
                      <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address" required>
                    </div>
    </div>


    <div class="col-md-2">
                    <div class="form-group">
                      <label>Gender</label>
                      <select name="gender" class="form-control">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                    </div>
    </div>

    <div class="col-md-2">
                    <div class="form-group">
                      <label for="conact">Contact Number: </label>
                      <input type="number" maxlength="11" max="99999999999" class="form-control" id="conact" placeholder="Enter Last Name" name="contact" required>
                    </div>
    </div>

    <div class="col-md-2">
                    <div class="form-group">
                      <label for="height">Height</label>
                      <input type="number" class="form-control" id="height" placeholder="Enter Height" name="height" min="1" max="300" required>
                    </div>
    </div>

    <div class="col-md-2">

                      <div class="form-group">
                      <label for="weight">Weight</label>
                      <input type="number" class="form-control" id="weight" placeholder="Enter Weight" name="weight" min="1" max="500" required>
                    </div>
    </div>
</div>




<div class="row">

<div class="col-md-6">
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

$table2 = "SELECT * FROM member_promo WHERE isDeleted = '0'";
        
        
        
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



<div class="col-md-6">
                  <div class="form-group">
                  <label for="medicalhistory">Medical History</label>
                  <input type="text" class="form-control" id="medicalhistory" placeholder="Medical History" name="medicalhistory" required>
                </div>
</div>


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
                  <th>Full Name</th>
                  <th>Contact</th>
                  <th>Date Registered</th>
                  <th>Membership Expiry Date</th>
                  <th>Annual Expiry Date</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>

<!-- <button class="btn btn-success"  data-toggle="modal" data-target="#'.$user_editmodal.'"><i class="fa fa-edit"></i></button>&nbsp; -->


<?php 
$username_check = $_SESSION["username"];
$table2 = "SELECT * FROM member WHERE isDeleted = '0' and isExpired= '0' AND isCancelled = '0'";
        
        
        
        $run_query2b = mysqli_query($connect,$table2);

            while($row = mysqli_fetch_array($run_query2b))

        {


?>




                <tr>
                 
                  <td><?php echo $row['member_lastname'].', '.$row['member_firstname'].' '.$row['member_middlename']; ?></td>
                  <td><?php echo $row['member_contact']; ?></td>
                  <td><?php echo $row['membership_registered']; ?></td>
                  <td><?php echo $row['membership_expired']; ?></td>
                  <td><?php echo $row['annual_expire']; ?></td>  
    


               

<?php   
$user_viewmodal="user_viewmodal".$row['member_id'];
$user_editmodal="user_editmodal".$row['member_id'];
$user_delmodal="user_delmodal".$row['member_id'];
    echo '

<td>
<button class="btn btn-primary"  data-toggle="modal" data-target="#'.$user_viewmodal.'"><i class="fa fa-eye"></i></button>&nbsp;</td>
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
<b>Height : <?php echo $row['member_height']; ?></b> <p></p>
<b>Weight : <?php echo $row['member_weight']; ?></b> <p></p>

</div>
<div class="col-md-6">
<b>Age : <?php echo $row['member_age']; ?></b> <p></p>
<b>Birthday : <?php echo $row['member_birthdate']; ?></b   <p></p>
<b>Target Weight : <?php echo $row['member_targetweight']; ?></b> <p></p>
<b>Medical History : <?php echo $row['member_medicalhistory']; ?></b> <p></p>


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