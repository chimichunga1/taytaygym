<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>PROMO | P4P</title>
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


<h2><B>&nbsp; MEMBER PROMOS</B></h2>
<br>
<div class="col-md-12">
<button class="btn btn-success col-md-12" data-toggle="collapse" data-target="#demo"> <center>ADD PROMO &nbsp;<i class="glyphicon glyphicon-plus"></i></center></button>

<div id="demo" class="collapse">
  <br>
              <div class="box-body">
<br><br>
            <form method="POST" action="save_data.php">
                <div class="form-group">
                  <label for="exampleInputFirstName">Promo Description</label>
                  <input type="text" class="form-control" id="exampleInputFirstName" placeholder="Enter Promo Description" name="description" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputLastName">Promo Duration</label>
                  <input type="date" class="form-control" id="exampleInputLastName" name="duration" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputUsername">Promo Amount</label>
                  <input type="number" class="form-control" id="exampleInputUsername" placeholder="Enter Amount" name="amount" min="1" required>
                </div>


              </div>
        

              <div class="box-footer">
                <button type="submit" class="btn btn-primary col-md-12" name="add_promo" >Save</button>
              </div>
</form>
</div>

<br>
<br>

  </div>
  <br><br>
<div class="col-md-12">
<table class="table table-striped table-bordered" id = "example">
                <thead>
                <tr>
                
                  <th>Promo ID</th>
                  <th>Description</th>
                  <th>Duration</th>
                  <th>Amount</th>
    
                </tr>
                </thead>
                <tbody>




<?php 
$username_check = $_SESSION["username"];
$table2 = "SELECT * FROM member_promo WHERE isDeleted = '0'";
        
        
        
        $run_query2b = mysqli_query($connect,$table2);

            while($row = mysqli_fetch_array($run_query2b))

        {


?>




                <tr>
                  <td><?php echo $row['promo_id']; ?> </td>
                  <td><?php echo $row['promo_description'];?></td>
                  <td><?php echo $row['promo_duration'];?></td>
                  <td><?php echo $row['promo_amount'];?></td>

               

<?php   


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