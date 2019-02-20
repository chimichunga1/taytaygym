<nav class="navbar " style="background-color: #ffffb3;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="dashboard.php" style="color: black;"><b>P4P</b></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

        <?php 

if($_SESSION["accessright"] == '1')
{
  ?>
              
        <li><a href="account.php" style="color: black; font-size: 20px;"><b>Manage Accounts</b></a></li>
  <?php
}




 ?>

        <li><a href="member_logs.php" style="color: black; font-size: 20px;"><b>Logs</b></a></li>
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: black; font-size: 20px;"><b>Sales </b><span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li><a href="member_sales.php" >Membership Sales</a></li>
          <li><a href="daily_sales.php" >Daily Sales</a></li>
<!--             <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li> -->

          </ul>
        </li> 
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: black; font-size: 20px;"><b>Transactions</b><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="transactions_add_member.php">Add Member</a></li>
            <li><a href="transactions_daily_customer.php">Daily Customer</a></li>     
            <li><a href="promo.php">Add Promo</a></li>   

<!--             <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li> -->
          </ul>
        </li> 
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: black; font-size: 20px;"><b>Members </b><span class="caret"></span></a>
          <ul class="dropdown-menu">
      <!--     <li><a href="member.php">Enrolled</a></li> -->
        <!--  <li><a href="member_cancelled.php">Cancelled</a></li> -->

          <li><a href="members_time_in.php">Time In</a></li>
          <li><a href="members_time_out.php">Time Out</a></li>
          <li><a href="time_logs.php">Member Logs</a></li>
          <li><a href="member_expired.php">Expired</a></li>



<!--             <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li> -->
          </ul>
        </li> 
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: black; font-size: 20px;"><b>Daily </b><span class="caret"></span></a>
          <ul class="dropdown-menu">
      <!--     <li><a href="member.php">Enrolled</a></li> -->
        <!--  <li><a href="member_cancelled.php">Cancelled</a></li> -->

          <li><a href="daily_customers.php">Daily Customers</a></li>        
          <li><a href="daily_time_in.php">Time In</a></li>
          <li><a href="daily_time_out.php">Time Out</a></li>


<!--             <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li> -->
          </ul>
        </li> 
<!--         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li> -->
      </ul>
<!--       <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form> -->
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: black; font-size: 20px;"><b>Welcome, <?php echo $_SESSION["username"]; ?> <span class="caret"></span></b></a>
          <ul class="dropdown-menu">
    <!--         <li><a href="#">My Profile</a></li> -->
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>