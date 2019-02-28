<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>MEMBER EXPIRED | P4P</title>
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
<h2><B>&nbsp;EXPIRED MEMBERSHIP</B></h2>
<br>
<div class="col-md-12">
<table class="table table-striped table-bordered" id = "example">
                <thead>
                <tr>
                  <th>Full Name</th>
                  <th>Date Expired</th>
                  <th>Annual Expired</th>
                  <th>Remarks</th>

                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>




<?php 
$username_check = $_SESSION["username"];




$table2 = "SELECT member.isAnnualExpired,member.member_id,member.member_code,member.member_firstname,member.member_middlename,member.member_lastname,member.member_birthdate,member.member_address,member.member_gender,member.member_contact,member.member_height,member.member_weight,member.member_targetweight,member.member_medicalhistory,member.member_sub_id,member.member_age,member.membership_registered,member.membership_expired,member_expired.date_expired,member.annual_expire
FROM member RIGHT JOIN member_expired ON member.member_id=member_expired.member_id WHERE member.isDeleted = '0' and member.isExpired= '1' AND member.isCancelled = '0'";
        
        
        
        $run_query2b = mysqli_query($connect,$table2);

            while($row = mysqli_fetch_array($run_query2b))

        {


?>




                <tr>
                  <td><?php echo $row['member_lastname'].', '.$row['member_firstname'].' '.$row['member_middlename'];?> </td>
                  <td><?php echo $row['membership_registered']; ?></td>
                  <td><?php echo $row['annual_expire']; ?></td>
               <td>
                <?php 



                if($row['isAnnualExpired'] == '1'){
                  echo "Annual Membership Expired";
                }else{
                  echo"Membership Expired";
                }




                ?>
                  


                </td>
               

<?php   
$user_viewmodal="user_viewmodal".$row['member_id'];
$user_editmodal="user_editmodal".$row['member_id'];
$user_delmodal="user_delmodal".$row['member_id'];
$user_annualmodal="user_annualmodal".$row['member_id'];
    echo '

<td><button class="btn btn-primary"  data-toggle="modal" data-target="#'.$user_viewmodal.'"><i class="fa fa-eye"></i></button>&nbsp;
   ';


                if($row['isAnnualExpired'] == '1'){
                  echo '<button class="btn btn-success"  data-toggle="modal" data-target="#'.$user_annualmodal.'"><i class="fa fa-check"></i></button>&nbsp;';
                }else{
                  echo'<button class="btn btn-success"  data-toggle="modal" data-target="#'.$user_editmodal.'"><i class="fa fa-check"></i></button>&nbsp;';
                }

echo'</td>';


echo
"
    
    <!-- Modal HTML -->
    <div id='".$user_annualmodal."' class='modal fade'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                    <h4 class='modal-title'> </h4>
                </div>
                <div class='modal-body'>
                 
 <form  role='form' action='save_data.php' method='post' >
    <div class='form-group'>

    <center>Would you like to renew annual membership ?<p> ( Member will be charged with 500 for annual fee ) </p></center>
      
    </div>
                </div>
                <div class='modal-footer'>
                <input type='hidden' name='get_userid' value='".$row['member_id']."'>
                    <button type='submit' name='renew_annual'  class='btn btn-success'>Yes</button>
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
                    <option value="promo1">1 Month Package for P1,000</option>
                    <option value="promo2">3 Months Package for P2,500</option>
                    <option value="promo3">6 Months Package for P4,500</option>
                    <option value="promo4">1 Year Package for P8,500</option>
                  </select>
                </div>


<?php
echo"
    <div class='form-group'>
    
    </div>
                </div>
                <div class='modal-footer'>
                    <input type='hidden' name='get_userid' value='".$row['member_id']."'>
                    <button type='submit' name='member_renew_expired'  class='btn btn-success'>Proceed</button>
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