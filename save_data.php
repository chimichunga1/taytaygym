<?php 

include("connection.php");

date_default_timezone_set('Asia/Manila');
if(isset($_POST['login']))
{


	if(!isset($_SESSION['login_attempts'])){

		$_SESSION['login_attempts'] = $_POST['username'];


	}

	$username = $_POST['username'];
	$password = $_POST['password'];
	 	

	$row=mysqli_query($connect,'SELECT * From `account` WHERE `acc_username`="'.$_POST["username"].'" AND `acc_password`="'.$_POST["password"].'" AND `isDeleted`="0"  AND `isBlocked`="0"  ');

	$search= mysqli_fetch_assoc($row);

	if(!empty($search['acc_accessright'] == '1'))

		{


		    $_SESSION['username']=$search['acc_username'];
		    $_SESSION["user_id"] = $search["acc_id"];
		    $_SESSION["accessright"] = $search['acc_accessright'];
		    $_SESSION['logs_username'] = $search['acc_username'];
		    $_SESSION['session_username'] = $search['acc_username'];
		    $_SESSION['check_login'] = $search['acc_username'];
?>
			<script type="text/javascript">
			<?php echo 'alert("Welcome ' . $_SESSION['check_login'] . '")'; ?>
			</script>
			<script>window.location.href='dashboard.php';</script>

<?php


unset($_SESSION['attempt_counter']);


			
    date_default_timezone_set('Asia/Manila');
    $date_ph = date('F j, Y g:i:a  ');
    $_SESSION['session_username'] = $search['username'];
	$logs_remarks = ' LOGGED IN ';
  
	$insert_supplier = "INSERT INTO member_logs (`member_username`,`member_status`,`date_log`) VALUES ('".$search['acc_username']."','".$logs_remarks."','".$date_ph."') ";
	$run_insert_supplier = mysqli_query($connect,$insert_supplier);




		
		}
	elseif(!empty($search['acc_accessright'] == '2'))

		{


		    $_SESSION['username']=$search['acc_username'];
		    $_SESSION["user_id"] = $search["acc_id"];
		    $_SESSION["accessright"] = $search['acc_accessright'];
		    $_SESSION['session_username'] = $search['acc_username'];
		    $_SESSION['check_login'] = $search['acc_username'];
unset($_SESSION['attempt_counter']);
			echo '<script language="javascript">';
			echo 'alert("Welcome User!")';
			echo '</script>';
			echo"<script>window.location.href='dashboard.php';</script>";



    date_default_timezone_set('Asia/Manila');
    $date_ph = date('F j, Y g:i:a  ');
    $_SESSION['session_username'] = $search['username'];
	$logs_remarks = ' LOGGED IN ';
  
	$insert_supplier = "INSERT INTO member_logs (`member_id`,`logs_remarks`,`logs_date`) VALUES ('".$search['acc_id']."','".$logs_remarks."','".$date_ph."') ";
	$run_insert_supplier = mysqli_query($connect,$insert_supplier);



		
		}

		else
		{


			if($username == $_SESSION['login_attempts']){

				if(!isset($_SESSION['attempt_counter'])){

					$_SESSION['attempt_counter'] = 3;
				}

				$_SESSION['final_count'] = $_SESSION['attempt_counter'] - 1;
				$_SESSION['attempt_counter'] = $_SESSION['final_count'];
				if($_SESSION['attempt_counter'] == 0){
						$block_account = "UPDATE account SET isBlocked = '1' WHERE acc_username ='$username'";
						$run_block_account = mysqli_query($connect,$block_account);
					echo '<script language="javascript">';
					echo 'alert("This Account has been blocked!")';
					echo '</script>';
					echo"<script>window.location.href='index.php';</script>";
					unset($_SESSION['attempt_counter']);
				}

			}else{ 

				$_SESSION['login_attempts'] = $username;
				$_SESSION['attempt_counter'] = 2;
			

			}

					echo '<script language="javascript">';
					echo 'alert("Invalid Username or Password!")';
					echo '</script>';
					echo"<script>window.location.href='index.php';</script>";

		}


}



$username = $_SESSION['username'];


if(isset($_POST['add_accounts']))
{


	$username = $_POST['username'];
	$firstname = $_POST['firstname'];
	
	if(empty($_POST['middlename'])){
		$middlename = "";
	}else{
		$middlename = $_POST['middlename'];
	}

	

	$lastname = $_POST['lastname'];

	$password = $_POST['password'];
	$access_right = $_POST['access_right'];
	$date=date("m/d/Y h:i A");



	$row=mysqli_query($connect,'SELECT * From `account` WHERE `acc_username`="'.$_POST["username"].'" AND `isDeleted`="0"   ');

	$search= mysqli_fetch_assoc($row);

if(empty($search))
{
			$insert_user = "INSERT INTO account (`acc_firstname`,`acc_middlename`,`acc_lastname`,`acc_username`,`acc_password`,`isDeleted`,`acc_accessright`,`acc_date`) VALUES ('".$firstname."','".$middlename."','".$lastname."','".$username."','".$password."','0','".$access_right."','".$date."') ";
			$run_insert_user = mysqli_query($connect,$insert_user);


    date_default_timezone_set('Asia/Manila');
    $date_ph = date('F j, Y g:i:a  ');
    $username = $_SESSION['session_username'];
	$logs_remarks = ' CREATED ACCOUNT '.$username.' ';
  
	$insert_supplier = "INSERT INTO member_logs (`member_username`,`member_status`,`date_log`) VALUES ('".$username."','".$logs_remarks."','".$date_ph."') ";
	$run_insert_supplier = mysqli_query($connect,$insert_supplier);



			echo '<script language="javascript">';
			echo 'alert("USER SUCCESSFULLY SAVED")';
			echo '</script>';
			echo"<script>window.location.href='account.php';</script>";		
}

else

{
			echo '<script language="javascript">';
			echo 'alert("USERNAME IS ALREADY TAKEN!")';
			echo '</script>';
			echo"<script>window.location.href='account.php';</script>";	
}

}



if(isset($_POST['add_members'])){

date_default_timezone_set('Asia/Manila');


$membership_code = $_POST['membership_code'];
$firstname = $_POST['firstname'];


if($_POST['middlename'] == ""){
	$middlename = "";

}else{
	$middlename = $_POST['middlename'];
}




$lastname = $_POST['lastname'];
$birthday = $_POST['birthday'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$contact = $_POST['contact'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$targetweight = $_POST['targetweight'];
$medicalhistory = $_POST['medicalhistory'];
$membership = $_POST['membership'];
/*$age = $_POST['age'];*/
$today = date("Y-m-d H:i:s");

$explodeBirthdate = explode("-", $birthday);
$birthDate = $explodeBirthdate[1]."/".$explodeBirthdate[2]."/".$explodeBirthdate[0];

  //date in mm/dd/yyyy format; or it can be in other formats as well

  //explode the date to get month, day and year
  $birthDate = explode("/", $birthDate);
  //get age from date or birthdate
  $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
    ? ((date("Y") - $birthDate[2]) - 1)
    : (date("Y") - $birthDate[2]));







$annual_expire = date ("Y-m-d", strtotime ($today ."+1 year"));

if($membership == 'promo1'){
		$membership ='1';
		$amount = '1000';
$memberDays = date ("Y-m-d", strtotime ($today ."+1 month"));

}elseif ($membership == 'promo2') {

$memberDays = date ("Y-m-d", strtotime ($today ."+3 months"));
		$membership ='2';
		$amount = '2500';

}elseif ($membership == 'promo3') {
$memberDays = date ("Y-m-d", strtotime ($today ."+6 months"));
		$membership ='3';
		$amount = '4500';
}
elseif ($membership == 'promo4') {
$memberDays = date ("Y-m-d", strtotime ($today ."+1 year"));
		$membership ='4';
		$amount = '8500';
}else{

	$get_promo = "SELECT * FROM member_promo WHERE isDeleted = '0' AND promo_id='$membership'";
    $get_promo_id = mysqli_query($connect,$get_promo);

        while($row = mysqli_fetch_array($get_promo_id))

    {
    	$memberDays = $row['promo_duration'];
    	$amount = $row['promo_amount'];
    }


}



 
$day = date('d');
$week = date('W');
$month = date('F');
$year = date('Y');

$timestamp = date("Y-m-d H:i:s");

			$insert_user = "INSERT INTO member (`member_code`,`member_firstname`,`member_middlename`,`member_lastname`,`member_birthdate`,`member_address`,`member_gender`,`member_contact`,`member_height`,`member_weight`,`member_targetweight`,`member_medicalhistory`,`member_sub_id`,`member_age`,`membership_registered`,`membership_expired`,`annual_expire`,`day`,`week`,`month`,`year`,`isPaid`,`isDeleted`,`isExpired`,`amount`,`timestamp_date`) VALUES ('".$membership_code."','".$firstname."','".$middlename."','".$lastname."','".$birthday."','".$address."','".$gender."','".$contact."','".$height."','".$weight."','".$targetweight."','".$medicalhistory."','".$membership."','".$age."','".$today."','".$memberDays."','".$annual_expire."','".$day."','".$week."','".$month."','".$year."','1','0','0','$amount','".$timestamp."') ";
			$run_insert_user = mysqli_query($connect,$insert_user);




    date_default_timezone_set('Asia/Manila');
    $date_ph = date('F j, Y g:i a  ');
    $username = $_SESSION['logs_username'];

	$logs_remarks = ' CREATED MEMBER '.$firstname.' '.$middlename.' '.$lastname.' ';
  
	$insert_supplier = "INSERT INTO member_logs (`member_username`,`member_status`,`date_log`) VALUES ('".$username."','".$logs_remarks."','".$date_ph."') ";
	$run_insert_supplier = mysqli_query($connect,$insert_supplier);



        
        
        $select_id = "SELECT * FROM member WHERE member_code ='$membership_code'";
        $run_select_id = mysqli_query($connect,$select_id);

            while($row = mysqli_fetch_array($run_select_id))

        {
        	$member_id = $row['member_id'];

        }

	$insert_membersales = "INSERT INTO member_sales (`member_sales_id`,`date_log`) VALUES ('".$member_id."','".$date_ph."') ";
	$run_insert_membersales = mysqli_query($connect,$insert_membersales);


			echo '<script language="javascript">';
			echo 'alert("USER SUCCESSFULLY SAVED")';
			echo '</script>';
			echo"<script>window.location.href='transactions_add_member.php';</script>";	









}

if(isset($_POST['admin_deluser'])){


	$acc_id = $_POST['get_userid'];

	$update_user = "UPDATE account SET isDeleted = '1' WHERE acc_id ='$acc_id'";
	$run_update_user = mysqli_query($connect,$update_user);



$username_check = $_SESSION["username"];

        
        
        $table2 = "SELECT * FROM account WHERE acc_id ='$acc_id'";
        $run_query2b = mysqli_query($connect,$table2);

            while($row = mysqli_fetch_array($run_query2b))

        {
        	$get_username = $row['acc_username'];

        }




    date_default_timezone_set('Asia/Manila');
    $date_ph = date('F j, Y g:i:a  ');
    $username = $_SESSION['logs_username'];
	$logs_remarks = ' DELETED ACCOUNT '.$get_username.' ';
  
	$insert_supplier = "INSERT INTO member_logs (`member_username`,`member_status`,`date_log`) VALUES ('".$username."','".$logs_remarks."','".$date_ph."') ";
	$run_insert_supplier = mysqli_query($connect,$insert_supplier);




echo '<script language="javascript">';
echo 'alert("User Removed!")';
echo '</script>';
echo"<script>window.location.href='account.php';</script>";	




}




if(isset($_POST['admin_edituser'])){

	$username = $_POST['username'];
		if(empty($_POST['middlename'])){
		$middlename = "";
	}else{
		$middlename = $_POST['middlename'];
	}

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$password = $_POST['password'];
	$access_right = $_POST['access_right'];
	$acc_id = $_POST['acc_id'];






	$update_user = "UPDATE account  SET acc_firstname = '$firstname',acc_middlename = '$middlename',acc_lastname = '$lastname',acc_username = '$username',acc_password = '$password',acc_accessright = '$access_right' WHERE acc_id ='$acc_id'";
	$run_update_user = mysqli_query($connect,$update_user);



    date_default_timezone_set('Asia/Manila');
    $date_ph = date('F j, Y g:i:a  ');
    $username = $_SESSION['logs_username'];
	$logs_remarks = ' UPDATED ACCOUNT '.$username.' ';
  
	$insert_supplier = "INSERT INTO member_logs (`member_username`,`member_status`,`date_log`) VALUES ('".$username."','".$logs_remarks."','".$date_ph."') ";
	$run_insert_supplier = mysqli_query($connect,$insert_supplier);




			echo '<script language="javascript">';
			echo 'alert("USER SUCCESSFULLY UPDATED")';
			echo '</script>';
			echo"<script>window.location.href='account.php';</script>";		



}



if(isset($_POST['member_cancel'])){

	$get_userid = $_POST['get_userid'];

	$update_user = "UPDATE member SET isCancelled = '1' WHERE member_id ='$get_userid'";
	$run_update_user = mysqli_query($connect,$update_user);

	$today = date("Y-m-d");
	$insert_user = "INSERT INTO member_cancelled (`member_id`,`date_cancelled`) VALUES ('".$get_userid."','".$today."') ";
	$run_insert_user = mysqli_query($connect,$insert_user);



    date_default_timezone_set('Asia/Manila');
    $date_ph = date('F j, Y g:i:a  ');

        
        $table2 = "SELECT * FROM member WHERE member_id ='$get_userid'";
        $run_query2b = mysqli_query($connect,$table2);

            while($row = mysqli_fetch_array($run_query2b))

        {
        	$get_username = $row['member_code'];

        }


    $username = $_SESSION['logs_username'];
	$logs_remarks = ' CANCELLED MEMBER WITH CODE '.$get_username;
  
	$insert_supplier = "INSERT INTO member_logs (`member_username`,`member_status`,`date_log`) VALUES ('".$username."','".$logs_remarks."','".$date_ph."') ";
	$run_insert_supplier = mysqli_query($connect,$insert_supplier);


echo '<script language="javascript">';
echo 'alert("Membership Cancelled!!")';
echo '</script>';
echo"<script>window.location.href='transactions_add_member.php';</script>";	



}


if(isset($_POST['member_renew'])){



	$get_userid = $_POST['get_userid'];
	$membership = $_POST['membership'];
$today = date("Y-m-d");

if($membership == 'promo1'){
		$membership ='1';
$memberDays = date ("Y-m-d", strtotime ($today ."+1 month"));

}elseif ($membership == 'promo2') {

$memberDays = date ("Y-m-d", strtotime ($today ."+3 months"));
		$membership ='2';


}elseif ($membership == 'promo3') {
$memberDays = date ("Y-m-d", strtotime ($today ."+6 months"));
		$membership ='3';

}
elseif ($membership == 'promo4') {
$memberDays = date ("Y-m-d", strtotime ($today ."+1 year"));
		$membership ='4';

}else{

	$get_promo = "SELECT * FROM member_promo WHERE isDeleted = '0' AND promo_id='$membership'";
    $get_promo_id = mysqli_query($connect,$get_promo);

        while($row = mysqli_fetch_array($get_promo_id))

    {
    	$memberDays = $row['promo_duration'];
    }


}



$annual_expire = date ("Y-m-d", strtotime ($today ."+1 year"));

	$update_member = "UPDATE member SET isCancelled = '0',member_sub_id = '$membership',annual_expire='$annual_expire',membership_registered = '$today',membership_expired = '$memberDays' WHERE member_id ='$get_userid'";
	$run_update_member = mysqli_query($connect,$update_member);

	$del_member = "DELETE FROM member_cancelled WHERE member_id = '$get_userid'";
	$run_del_member = mysqli_query($connect,$del_member);


        
        $table2 = "SELECT * FROM member WHERE member_id ='$get_userid'";
        $run_query2b = mysqli_query($connect,$table2);

            while($row = mysqli_fetch_array($run_query2b))

        {
        	$member_code = $row['member_code'];

        }


    $username = $_SESSION['logs_username'];
	$logs_remarks = ' RENEWED MEMBER WITH CODE '.$member_code;
    date_default_timezone_set('Asia/Manila');
    $date_ph = date('F j, Y g:i:a  ');
	$insert_supplier = "INSERT INTO member_logs (`member_username`,`member_status`,`date_log`) VALUES ('".$username."','".$logs_remarks."','".$date_ph."') ";
	$run_insert_supplier = mysqli_query($connect,$insert_supplier);









echo '<script language="javascript">';
echo 'alert("Membership Renewed!")';
echo '</script>';
echo"<script>window.location.href='transactions_add_member.php';</script>";	







}




if(isset($_POST['member_renew_expired'])){



$get_userid = $_POST['get_userid'];
$membership = $_POST['membership'];
$today = date("Y-m-d");

if($membership == 'promo1'){
		$membership ='1';
		$price=1000;
$memberDays = date ("Y-m-d", strtotime ($today ."+1 month"));

}elseif ($membership == 'promo2') {

$memberDays = date ("Y-m-d", strtotime ($today ."+3 months"));
		$membership ='2';
$price=2500;

}elseif ($membership == 'promo3') {
$memberDays = date ("Y-m-d", strtotime ($today ."+6 months"));
		$membership ='3';
		$price=4500;

}
elseif ($membership == 'promo4') {
$memberDays = date ("Y-m-d", strtotime ($today ."+1 year"));
		$membership ='4';
		$price=8500;

}else{

	$get_promo = "SELECT * FROM member_promo WHERE isDeleted = '0' AND promo_id='$membership'";
    $get_promo_id = mysqli_query($connect,$get_promo);

        while($row = mysqli_fetch_array($get_promo_id))

    {
    	$memberDays = $row['promo_duration'];
    }


}


$annual_expire = date ("Y-m-d", strtotime ($today ."+1 year"));
$timestamp = date("Y-m-d H:i:s");


	$update_member = "UPDATE member SET isExpired = '0',annual_expire='$annual_expire',member_sub_id = '$membership',membership_registered = '$today',membership_expired = '$memberDays',amount='$price',timestamp_date ='$timestamp'  WHERE member_id ='$get_userid'";
	$run_update_member = mysqli_query($connect,$update_member);

	$del_member = "DELETE FROM member_expired WHERE member_id = '$get_userid'";
	$run_del_member = mysqli_query($connect,$del_member);



        
        $table2 = "SELECT * FROM member WHERE member_id ='$get_userid'";
        $run_query2b = mysqli_query($connect,$table2);

            while($row = mysqli_fetch_array($run_query2b))

        {
        	$member_code = $row['member_code'];

        }


    $username = $_SESSION['logs_username'];
	$logs_remarks = ' RENEWED MEMBER WITH CODE '.$member_code;
    date_default_timezone_set('Asia/Manila');
    $date_ph = date('F j, Y g:i:a  ');
	$insert_supplier = "INSERT INTO member_logs (`member_username`,`member_status`,`date_log`) VALUES ('".$username."','".$logs_remarks."','".$date_ph."') ";
	$run_insert_supplier = mysqli_query($connect,$insert_supplier);

echo '<script language="javascript">';
echo 'alert("Membership Renewed!")';
echo '</script>';
echo"<script>window.location.href='member_expired.php';</script>";	



}










if(isset($_POST['add_customer'])){

$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$contact = $_POST['contact'];

if($middlename=""){
	$middlename = "";

}else{
	$middlename = $_POST['middlename'];
}


    date_default_timezone_set('Asia/Manila');
    $date_ph = date('F j, Y g:i A  ');
	$today = date("Y-m-d");




$timestamp = date("Y-m-d H:i:s");


	$insert_customer = "INSERT INTO customer_daily (`cust_firstname`,`cust_middlename`,`cust_lastname`,`cust_time_in`,`cust_contact_no`,`timestamp_date`) VALUES ('".$firstname."','".$middlename."','".$lastname."','".$date_ph."','".$contact."','".$timestamp."')";
	$run_insert_customer = mysqli_query($connect,$insert_customer);


	$username = $_SESSION['logs_username'];
	$logs_remarks = ' CREATED CUSTOMER '.$firstname.' '.$middlename.' '.$lastname;

	$insert_supplier = "INSERT INTO member_logs (`member_username`,`member_status`,`date_log`) VALUES ('".$username."','".$logs_remarks."','".$date_ph."') ";
	$run_insert_supplier = mysqli_query($connect,$insert_supplier);



echo '<script language="javascript">';
echo 'alert("Customer Saved!")';
echo '</script>';
echo"<script>window.location.href='transactions_daily_customer.php';</script>";	



}







if(isset($_POST['customer_payout']))

{

    date_default_timezone_set('Asia/Manila');
    $date_ph = date('F j, Y g:i A  ');
	$cust_daily_id =$_POST['cust_daily_id'];
	$update_customer = "UPDATE customer_daily SET isTimeOut = '1' WHERE cust_daily_id = '$cust_daily_id' ";
	$run_update_customer = mysqli_query($connect,$update_customer);

$day = date('d');
$week = date('W');
$month = date('F');
$year = date('Y');

	$insert_customer = "INSERT INTO customer_sales (`cust_id`,`time_out`,`day`,`week`,`month`,`year`) VALUES ('".$cust_daily_id."','".$date_ph."','".$day."','".$week."','".$month."','".$year."') ";
	$run_insert_customer = mysqli_query($connect,$insert_customer);


	echo '<script language="javascript">';
	echo 'alert("Process Saved!")';
	echo '</script>';
	echo"<script>window.location.href='daily_sales.php';</script>";	


}



if(isset($_POST['add_promo'])){

$description = $_POST['description'];
$duration = $_POST['duration'];
$amount = $_POST['amount'];


	$insert_promo = "INSERT INTO member_promo (`promo_description`,`promo_duration`,`promo_amount`) VALUES ('".$description."','".$duration."','".$amount."') ";
	$run_insert_promo = mysqli_query($connect,$insert_promo);


	echo '<script language="javascript">';
	echo 'alert("Promo Saved!")';
	echo '</script>';
	echo"<script>window.location.href='promo.php';</script>";	



}






?>
