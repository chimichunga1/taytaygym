<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>MEMBER SALES | P4P</title>
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
<button class="btn btn-success col-md-12" data-toggle="collapse" data-target="#demo"> <center>Filter Data &nbsp;<i class="glyphicon glyphicon-plus"></i></center></button>

<div id="demo" class="collapse">
  <br>
              <div class="box-body">
<br><br>
            <form method="POST" action="member_sales.php">

                  <div class="form-group">
                    <label>Select Week :</label>
                    <input type="number" class="form-control" min="1" max="42" id="year" placeholder="Enter Week ( 1-42)" name="week" required>
<!--                     <select name="week" class="form-control">
                      <option value="01">Week 1</option>
                      <option value="02">Week 2</option>
                      <option value="03">Week 3</option>
                      <option value="04">Week 4</option>
                      <option value="05">Week 5</option>
                    </select> -->
                  </div>

                  <br>

<!--                   <div class="form-group">
                    <label>Select Month :</label>
                    <select name="month" class="form-control">
                      <option value="January">January</option>
                      <option value="February">February</option>
                      <option value="March">March</option>
                      <option value="April">April</option>
                      <option value="May">May</option>
                      <option value="June">June</option>
                      <option value="July">July</option>
                      <option value="August">August</option>
                      <option value="September">September</option>
                      <option value="October">October</option>
                      <option value="November">November</option>
                      <option value="December">December</option>
                    </select>
                  </div> -->

                  <br>

                <div class="form-group">
                  <label for="year">Enter Year : </label>
                  <input type="number" class="form-control" min="2012" max="2019" id="year" placeholder="Enter Year" name="year" required>
                </div>


<button type="submit" name="weekly" class="btn btn-primary col-md-12">Filter By Week</button>
<br>

</form>
            <form method="POST" action="member_sales.php">
                  <div class="form-group">
                    <label>Select Month :</label>
                    <select name="month" class="form-control">
                      <option value="January">January</option>
                      <option value="February">February</option>
                      <option value="March">March</option>
                      <option value="April">April</option>
                      <option value="May">May</option>
                      <option value="June">June</option>
                      <option value="July">July</option>
                      <option value="August">August</option>
                      <option value="September">September</option>
                      <option value="October">October</option>
                      <option value="November">November</option>
                      <option value="December">December</option>
                    </select>
                  </div>

                  <br>

                <div class="form-group">
                  <label for="year">Enter Year : </label>
                  <input type="number" class="form-control" min="2012" max="2019" id="year" placeholder="Enter Year" name="year" required>
                </div>


<br>
<button type="submit" name="monthly" class="btn btn-primary col-md-12">Filter By Month</button>
<br>

</form>

            <form method="POST" action="member_sales.php">

                <div class="form-group">
                  <label for="year">Enter Year : </label>
                  <input type="number" class="form-control" min="2012" max="2019" id="year" placeholder="Enter Year" name="year" required>
                </div>


<button type="submit" name="yearly" class="btn btn-primary col-md-12">Filter By Year</button>

</form>
</div>
</div>
<br>

<br>

<br>
<br>




<div class="col-md-12">



<?php 

if(isset($_POST['weekly'])){



if((int)$_POST['week'] < 10){
  $week = "0".$_POST['week'];
}else{
  $week = $_POST['week'];
}
$year = $_POST['year'];

?>





<h3>Week <?php echo $_POST['week']." year ".$year; ?>  </h3> 





  <br> <br>
<table class="table table-striped table-bordered" id = "example">

                <thead>
                <tr>

                  <th>Member's Full Name</th>
                  <th>Membership Package</th>
                  <th>Amount</th>

                <th>Date Registered</th>
                <th>Annual Expire</th>              
                <th>Action</th>              
    
                </tr>
                </thead>
                <tbody>




<?php 
$username_check = $_SESSION["username"];
$final_total = 0;



$table2 = "SELECT * FROM member_sales_new  WHERE week = '$week' AND year = '$year'";
        
        
        
        $run_query2b = mysqli_query($connect,$table2);

            while($row = mysqli_fetch_array($run_query2b))

        {
$final_total = $final_total + (int)$row['amount'];
$final_amount = $final_total;
?>




                <tr>
               
                  <td><?php echo $row['member_lastname'].', '.$row['member_firstname'].' '.$row['member_middlename'];?> </td>
                  <td>

          <?php


    echo $row['member_package'];



           ?>
                    


                  </td>
                  <td><?php echo (int)$row['amount']+(int)$row['annual_amount'];?></td>
                  <td><?php echo $row['date_registered'];?></td>
                  <td><?php echo $row['annual_expired'];?></td>
<?php   
$user_viewmodal="user_viewmodal".$row['member_sales_new_id'];
$user_printmodal="user_printmodal".$row['member_sales_new_id'];

    echo '


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












                <input type='hidden' name='get_day' value='".$row['day']."'>
                  <input type='hidden' name='get_month' value='".$row['month']."'>                   
                 <input type='hidden' name='get_year' value='".$row['year']."'>     















                <input type='hidden' name='get_userid' value='".$row['member_sales_new_id']."'>
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
<div class="col-md-12">
  <form action="print_member_weekly.php" method="POST">

<?php 
echo "<input type='hidden' name='week' value='".$week."'>";
echo "<input type='hidden' name='year' value='".$year."'>";

?>



<button type="submit" name="print_invoice" class="btn btn-success col-md-3"><i class="fa fa-print"></i> Print Data</button>

</form><br>
  </div>
<div class="col-md-12">

<h4>TOTAL SALES : <?php
if(isset($final_amount)){
  echo $final_amount;  
}else{
  echo "P 0.00";
}
 
 ?></h4>

 <?php 

$year = date("Y");

 ?>
<h4>ANNUAL SALES OF THIS YEAR <?php echo $year; ?> : 
<?php 
$total_annual_initial = 0;
$table2 = "SELECT * FROM member_sales_new WHERE year = '$year'";
        
        
        
        $run_query2b = mysqli_query($connect,$table2);

            while($row = mysqli_fetch_array($run_query2b))
        {
          $total_annual_initial = $total_annual_initial + (int)$row['amount'];
          $total_annual = $total_annual_initial;
        }
        echo $total_annual;
?>

</h4>
</div>


<?php

}elseif (isset($_POST['monthly'])) {


$month = $_POST['month'];
$year = $_POST['year'];
 ?>


<h3><?php echo $_POST['month']." year ".$year; ?>  </h3>
<table class="table table-striped table-bordered" id = "example">
                <thead>
                <tr>            
                  <th>Member's Full Name</th>
                  <th>Membership Package</th>
                  <th>Amount</th>               
                  <th>Date Registered</th>
                  <th>Annual Expired</th>
                                 <th>Action</th>     
    
                </tr>
                </thead>
                <tbody>




<?php 
$username_check = $_SESSION["username"];
$final_total = 0;



$table2 = "SELECT * FROM member_sales_new WHERE month = '$month' AND year = '$year'";
        
        
        
        $run_query2b = mysqli_query($connect,$table2);

            while($row = mysqli_fetch_array($run_query2b))

        {

$final_total = $final_total + (int)$row['amount'];
$final_amount = $final_total;
?>




                <tr>
                  <td><?php echo $row['member_lastname'].', '.$row['member_firstname'].' '.$row['member_middlename'];?> </td>
                  <td>

          <?php

echo $row['member_package'];



           ?>
                    


                  </td>
                  <td><?php echo (int)$row['amount']+(int)$row['annual_amount'];?></td>

                  <td><?php echo $row['date_registered'];?></td>
                  <td><?php echo $row['annual_expired'];?></td>

<?php   
$user_viewmodal="user_viewmodal".$row['member_sales_new_id'];
$user_printmodal="user_printmodal".$row['member_sales_new_id'];

    echo '


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












                <input type='hidden' name='get_day' value='".$row['day']."'>
                  <input type='hidden' name='get_month' value='".$row['month']."'>                   
                 <input type='hidden' name='get_year' value='".$row['year']."'>     















                <input type='hidden' name='get_userid' value='".$row['member_sales_new_id']."'>
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
<div class="col-md-12">
  <form action="print_member_monthly.php" method="POST">

<?php 
echo "<input type='hidden' name='month' value='".$month."'>";
echo "<input type='hidden' name='year' value='".$year."'>";

?>



<button type="submit" name="print_invoice" class="btn btn-success col-md-3"><i class="fa fa-print"></i> Print Data</button>

</form><br>
  </div>
<div class="col-md-12">
<h4>TOTAL SALES : <?php
if(isset($final_amount)){
  echo $final_amount;  
}else{
  echo "P 0.00";
}
 
 ?></h4>

 <?php 

$year = date("Y");

 ?>
<h4>ANNUAL SALES OF THIS YEAR <?php echo $year; ?> : 
<?php 
$total_annual_initial = 0;
$table2 = "SELECT * FROM member_sales_new WHERE year = '$year'";
        
        
        
        $run_query2b = mysqli_query($connect,$table2);

            while($row = mysqli_fetch_array($run_query2b))
        {
          $total_annual_initial = $total_annual_initial + (int)$row['amount'];
          $total_annual = $total_annual_initial;
        }
        echo $total_annual;
?>

</h4>
</div>
 <?php
}elseif (isset($_POST['yearly'])) {



$year = $_POST['year'];

?>
<h3><?php echo "Year ".$year; ?>  </h3>
<table class="table table-striped table-bordered" id = "example">
                <thead>
                <tr>
                     
                  <th>Member's Full Name</th>
                  <th>Membership Package</th>
                   <th>Amount</th>                 
                  <th>Date Registered</th>
                  <th>Annual Expire</th>
                 
                    <th>Action</th>     
                </tr>
                </thead>
                <tbody>




<?php 
$username_check = $_SESSION["username"];

$final_total = 0;

$table2 = "SELECT * FROM member_sales_new WHERE year = '$year'";
        
        
        
        $run_query2b = mysqli_query($connect,$table2);

            while($row = mysqli_fetch_array($run_query2b))

        {
$final_total = $final_total + (int)$row['amount'];
$final_amount = $final_total;

?>




                <tr>
 
                  <td><?php echo $row['member_lastname'].', '.$row['member_firstname'].' '.$row['member_middlename'];?> </td>
                  <td>

          <?php

echo $row['member_package'];    



           ?>
                    


                  </td>
                  <td><?php echo (int)$row['amount']+(int)$row['annual_amount'];?></td>

                  <td><?php echo $row['date_registered'];?></td>
                  <td><?php echo $row['annual_expired'];?></td>
<?php   
$user_viewmodal="user_viewmodal".$row['member_sales_new_id'];
$user_printmodal="user_printmodal".$row['member_sales_new_id'];

    echo '


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












                <input type='hidden' name='get_day' value='".$row['day']."'>
                  <input type='hidden' name='get_month' value='".$row['month']."'>                   
                 <input type='hidden' name='get_year' value='".$row['year']."'>     















                <input type='hidden' name='get_userid' value='".$row['member_sales_new_id']."'>
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
<div class="col-md-12">
  <form action="print_member_yearly.php" method="POST">

<?php 

echo "<input type='hidden' name='year' value='".$year."'>";

?>



<button type="submit" name="print_invoice" class="btn btn-success col-md-3"><i class="fa fa-print"></i> Print Data</button>

</form><br>
  </div>
<div class="col-md-12">
<h4>TOTAL SALES : <?php
if(isset($final_amount)){
  echo $final_amount;  
}else{
  echo "P 0.00";
}
 
 ?></h4>

 <?php 

$year = date("Y");

 ?>
<h4>ANNUAL SALES OF THIS YEAR <?php echo $year; ?> : 
<?php 
$total_annual_initial = 0;
$table2 = "SELECT * FROM member_sales_new WHERE year = '$year'";
        
        
        
        $run_query2b = mysqli_query($connect,$table2);

            while($row = mysqli_fetch_array($run_query2b))
        {
          $total_annual_initial = $total_annual_initial + (int)$row['amount'];
          $total_annual = $total_annual_initial;
        }
        echo $total_annual;
?>

</h4>
</div> 
<?php
}
else{





?>









<table class="table table-striped table-bordered" id = "example">
                <thead>
                <tr>             
                  <th>Member's Full Name</th>
                  <th>Membership Package</th>
                  <th>Amount</th>
                  <th>Date Registered</th>
                  <th>Annual Expired</th>
                       <th>Action</th>     
    
                </tr>
                </thead>
                <tbody>




<?php 
$username_check = $_SESSION["username"];
$final_total = 0;



$table2 = "SELECT * FROM member_sales_new";
        
        
        
        $run_query2b = mysqli_query($connect,$table2);

            while($row = mysqli_fetch_array($run_query2b))

        {

$final_total = $final_total + (int)$row['amount'];
$final_amount = $final_total;



?>




                <tr>
                  <td><?php echo $row['member_lastname'].', '.$row['member_firstname'].' '.$row['member_middlename'];?> </td>
                  <td>
                    <?php 
                      echo $row['member_package'];
                      ?>
                  </td>
                  <td><?php echo (int)$row['amount']+(int)$row['annual_amount'];?></td>
                  <td><?php echo $row['date_registered'];?></td>
                  <td><?php echo $row['annual_expired'];?></td>

<?php   
$user_viewmodal="user_viewmodal".$row['member_sales_new_id'];
$user_printmodal="user_printmodal".$row['member_sales_new_id'];

    echo '

<td><button class="btn btn-primary"  data-toggle="modal" data-target="#'.$user_printmodal.'"><i class="fa fa-print"></i></button>&nbsp;</td>

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
                 
 <form  role='form' action='member_print.php' method='post' >
    <div class='form-group'>
<center><h3>Would you like to print an invoice ? </</center>
      
    </div>
                </div>
                <div class='modal-footer'>

          












                <input type='hidden' name='get_day' value='".$row['day']."'>
                  <input type='hidden' name='get_month' value='".$row['month']."'>                   
                 <input type='hidden' name='get_year' value='".$row['year']."'>     















                <input type='hidden' name='get_userid' value='".$row['member_sales_new_id']."'>
                    <button type='submit' name='member_print_invoice'  class='btn btn-success'>Yes</button>
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
<div class="col-md-12">
  <form action="print_member_today.php" method="POST">




<button type="submit" name="print_invoice" class="btn btn-success col-md-3"><i class="fa fa-print"></i> Print Today's Member Sales</button>

</form><br>
  </div>


<div class="col-md-12">
<h4>TOTAL SALES : <?php
if(isset($final_amount)){
  echo $final_amount;  
}else{
  echo "P 0.00";
}
 
 ?></h4>

 <?php 

$year = date("Y");

 ?>
<h4>ANNUAL SALES OF THIS YEAR <?php echo $year; ?> : 
<?php 
$total_annual_initial = 0;
$table2 = "SELECT * FROM member_sales_new";
        
        
        
        $run_query2b = mysqli_query($connect,$table2);

            while($row = mysqli_fetch_array($run_query2b))
        {
          $total_annual_initial = $total_annual_initial + (int)$row['amount'];
          $total_annual = $total_annual_initial;
        }

        if(isset($total_annual)){
        echo $total_annual;          
      }else{
          echo"P 00.00";
      }

?>

</h4>
</div>

<?php

}

?>




<script>

$(document).ready(function() {
    $('#example').DataTable();
} );

</script>










    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   
    <!-- Include all compiled plugins (below), or include individual files as needed -->

  </body>
</html>