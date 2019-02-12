<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ACCOUNT | P4P</title>
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
<link rel="stylesheet" href="css/font.css">
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

if($_SESSION["accessright"] == '2'){
echo '<script language="javascript">';
echo 'alert("User not allowed!")';
echo '</script>';
echo"<script>window.location.href='dashboard.php';</script>"; 



}
?>

<?php



include("navbar.php");



?>




<div class="container">

<h2><B>&nbsp;ACCOUNTS</B></h2>
<br>
<div class="col-md-12">
<button class="btn btn-success col-md-12" data-toggle="collapse" data-target="#demo"> <center>ADD ACCOUNTS &nbsp;<i class="glyphicon glyphicon-plus"></i></center></button>

<div id="demo" class="collapse">
  <br>
              <div class="box-body">
<br><br>
            <form method="POST" action="save_data.php">
              <div class="form-group">
                  <label for="exampleInputLastName">Last Name</label>
                  <input type="text" class="form-control" id="exampleInputLastName" placeholder="Enter Last Name" name="lastname" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputFirstName">First Name</label>
                  <input type="text" class="form-control" id="exampleInputFirstName" placeholder="Enter First Name" name="firstname" required>
                </div>
                <div class="form-group">
                  <label for="middlename">Middle Name</label>
                  <input type="text" class="form-control" id="middlename" placeholder="Enter Middle Name" name="middlename" >
                </div>                
                
                <div class="form-group">
                  <label for="exampleInputUsername">Username</label>
                  <input type="text" class="form-control" id="exampleInputUsername" placeholder="Enter Username" name="username" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
                </div>
                <div class="form-group">
                  <label>Access Right</label>
                  <select name="access_right" class="form-control">
                    <option value="1">ADMIN</option>
                    <option value="2">USER</option>
                  </select>
                </div>

              </div>
        

              <div class="box-footer">
                <button type="submit" class="btn btn-primary col-md-12" name="add_accounts" >Save</button>
              </div>
</form>
</div>

<br>
<br>

  </div>








<div class="col-md-12">
<table class="table table-striped table-bordered" id = "example ">
                <thead>
                <tr>
                  <th>Date Created</th>
                  <th>Full Name</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Actions</th>


                </tr>
                </thead>
                <tbody>




<?php 
$username_check = $_SESSION["username"];
$table2 = "SELECT * FROM account WHERE isDeleted = '0' and acc_username != '$username_check' ORDER BY acc_date DESC";
        
        
        
        $run_query2b = mysqli_query($connect,$table2);

            while($row = mysqli_fetch_array($run_query2b))

        {


?>




                <tr>
                  <td><?php echo $row['acc_date']; ?></td>
                  <td><?php echo $row['acc_lastname'].', '.$row['acc_firstname'].' '.$row['acc_middlename']; ?></td>
                  <td><?php echo $row['acc_username']; ?></td>
                  <td><?php echo $row['acc_password']; ?></td>
    


               

<?php   

$user_editmodal="user_editmodal".$row['acc_id'];
$user_delmodal="user_delmodal".$row['acc_id'];
    echo '

<td><button class="btn btn-success"  data-toggle="modal" data-target="#'.$user_editmodal.'"><i class="fa fa-edit"></i></button>&nbsp;<button class="btn btn-danger"   data-toggle="modal" data-target="#'.$user_delmodal.'"><i class="fa fa-remove"></i></button></td>
   ';
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
    ";
?>
                <div class="form-group">
                  <label for="exampleInputFirstName">First Name</label>
                  <input type="text" class="form-control" id="exampleInputFirstName" value="<?php echo $row['acc_firstname']; ?>" name="firstname" required>
                <div class="form-group">
                  <label for="middlename">Middle Name</label>
                  <input type="text" class="form-control" id="middlename" value="<?php echo $row['acc_middlename']; ?>" name="middlename">
                </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputLastName">Last Name</label>
                  <input type="text" class="form-control" id="exampleInputLastName" value="<?php echo $row['acc_lastname']; ?>" name="lastname" required>

                </div>
                <div class="form-group">
                  <label for="exampleInputUsername">Username</label>
                  <input type="text" class="form-control" id="exampleInputUsername" value="<?php echo $row['acc_username']; ?>" name="username" required>

                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $row['acc_password']; ?>" name="password" required>
                        
                  <input type="hidden" name="acc_id" value="<?php echo $row['acc_id']; ?>">
                </div>    
                <div class="form-group">
                  <label>Access Right</label>
                  <select name="access_right" class="form-control" required>
                    <option value="1">ADMIN</option>
                    <option value="2">USER</option>
                  </select>
                </div>

<?php
echo "
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
                <input type='hidden' name='get_userid' value='".$row['acc_id']."'>
                    <button type='submit' name='admin_deluser'  class='btn btn-success'>Yes</button>
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