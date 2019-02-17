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

	if(!empty($search['acc_accessright'] == '1' && $search['isActivated'] == '1'))

		{


		    $_SESSION['username']=$search['acc_username'];
		    $logs_firstname=$search['acc_firstname'];	
		    $_SESSION['logs_firstname']=$search['acc_firstname'];		    
		    $_SESSION["user_id"] = $search["acc_id"];
		    $_SESSION["accessright"] = $search['acc_accessright'];
		    $_SESSION['logs_username'] = $search['acc_username'];
		    $_SESSION['session_username'] = $search['acc_username'];
		    $_SESSION['check_login'] = $search['acc_username'];

		    unset($_SESSION['attempt_counter']);


			
    date_default_timezone_set('Asia/Manila');
    $date_ph = date('F j, Y g:i:a  ');
    $_SESSION['session_username'] = $search['acc_username'];

    echo $logs_firstname;

	$logs_remarks = ' LOGGED IN ';
  
	$insert_supplier = "INSERT INTO member_logs (`member_username`,`member_status`,`date_log`) VALUES ('".$logs_firstname."','".$logs_remarks."','".$date_ph."') ";
	$run_insert_supplier = mysqli_query($connect,$insert_supplier);




?>
			<script type="text/javascript">
			<?php echo 'alert("Welcome ' . $_SESSION['check_login'] . '")'; ?>
			</script>
			<script>window.location.href='dashboard.php';</script>

<?php





		
		}
	elseif(!empty($search['acc_accessright'] == '2' && $search['isActivated'] == '1' ))

		{


		    $_SESSION['username']=$search['acc_username'];
		    $_SESSION["user_id"] = $search["acc_id"];
		    $_SESSION["accessright"] = $search['acc_accessright'];
		    $_SESSION['session_username'] = $search['acc_username'];
		    $_SESSION['check_login'] = $search['acc_username'];
unset($_SESSION['attempt_counter']);
			echo '<script language="javascript">';
			echo 'alert("Welcome ' . $_SESSION['check_login'] . '")';
			echo '</script>';
			echo"<script>window.location.href='dashboard.php';</script>";



    date_default_timezone_set('Asia/Manila');
    $date_ph = date('F j, Y g:i:a  ');
    $_SESSION['session_username'] = $search['username'];
	$logs_remarks = ' LOGGED IN ';
  
	$insert_supplier = "INSERT INTO member_logs (`member_id`,`logs_remarks`,`logs_date`) VALUES ('".$search['acc_firstname']."','".$logs_remarks."','".$date_ph."') ";
	$run_insert_supplier = mysqli_query($connect,$insert_supplier);



		
		}
			elseif(!empty($search['isActivated'] == '0'))

		{

			$_SESSION['user_update'] = $_POST['username'];
			$_SESSION['update_id'] = $search["acc_id"];

			echo '<script language="javascript">';
			echo 'alert("First time login you must change your password!")';
			echo '</script>';
			echo"<script>window.location.href='account_update.php';</script>";




		
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

$username = $_SESSION['username'];
}





if(isset($_POST['update_pass']))
{

	$get_acc_id = $_POST['get_acc_id'];
	$new_password = $_POST['password'];
	$update_account = "UPDATE account SET acc_password = '$new_password',isActivated='1' WHERE acc_id ='$get_acc_id'";
	$run_update_account = mysqli_query($connect,$update_account);


	$get_promo = "SELECT * FROM account WHERE acc_id = '$get_acc_id' AND isDeleted='0' AND isBlocked='0'";
    $get_promo_id = mysqli_query($connect,$get_promo);

        while($search = mysqli_fetch_array($get_promo_id))

    {

		    $_SESSION['username']=$search['acc_username'];
		    $_SESSION["user_id"] = $search["acc_id"];
		    $_SESSION["accessright"] = $search['acc_accessright'];
		    $_SESSION['session_username'] = $search['acc_username'];
		    $_SESSION['check_login'] = $search['acc_username'];
    }










unset($_SESSION['attempt_counter']);

    date_default_timezone_set('Asia/Manila');
    $date_ph = date('F j, Y g:i:a  ');
    $_SESSION['session_username'] = $search['username'];
	$logs_remarks = ' LOGGED IN ';

	$insert_supplier = "INSERT INTO member_logs (`member_id`,`logs_remarks`,`logs_date`) VALUES ('".$search['acc_firstname']."','".$logs_remarks."','".$date_ph."') ";
	$run_insert_supplier = mysqli_query($connect,$insert_supplier);



			echo '<script language="javascript">';
			echo 'alert("Your account has been updated!")';
			echo '</script>';
			echo"<script>window.location.href='dashboard.php';</script>";






}














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

	$date=date("m/d/Y h:i A");
$access_right = $_POST['access_right'];


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
  
	$insert_supplier = "INSERT INTO member_logs (`member_username`,`member_status`,`date_log`) VALUES ('".$_SESSION['logs_firstname']."','".$logs_remarks."','".$date_ph."') ";
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
$name=' '.$firstname.' '.$middlename.' '.$lastname.' ';


        $select_id = "SELECT * FROM member WHERE member_firstname='$firstname' AND member_middlename='$middlename' AND member_lastname='$lastname' AND isDeleted='0'";
        $run_select_id = mysqli_query($connect,$select_id);


if (mysqli_num_rows($run_select_id) > 0){
			echo '<script language="javascript">';
			echo 'alert("USERNAME IS ALREADY TAKEN!")';
			echo '</script>';
			echo"<script>window.location.href='transactions_add_member.php';</script>";	

}else{

		$insert_user = "INSERT INTO member (`member_code`,`member_firstname`,`member_middlename`,`member_lastname`,`member_birthdate`,`member_address`,`member_gender`,`member_contact`,`member_height`,`member_weight`,`member_targetweight`,`member_medicalhistory`,`member_sub_id`,`member_age`,`membership_registered`,`membership_expired`,`annual_expire`,`day`,`week`,`month`,`year`,`isPaid`,`isDeleted`,`isExpired`,`amount`) VALUES ('".$membership_code."','".$firstname."','".$middlename."','".$lastname."','".$birthday."','".$address."','".$gender."','".$contact."','".$height."','".$weight."','".$targetweight."','".$medicalhistory."','".$membership."','".$age."','".$today."','".$memberDays."','".$annual_expire."','".$day."','".$week."','".$month."','".$year."','1','0','0','$amount') ";
			$run_insert_user = mysqli_query($connect,$insert_user);


$mem=$membership;
if($mem == '1'){

   $mem="1 Month Package for P1,000";
}elseif ($mem == '2') {

   $mem="3 Months Package for P2,500";


}elseif ($mem == '3') {

   $mem= "6 Months Package for P4,500";
}
else{
   $mem="1 Year Package for P8,500";

}


$insert_sales = "INSERT INTO sales (`mem_full`,`mem_package`,`mem_amount`,`mem_date`,`mem_expired`) VALUES ('".$name."','".$mem."','".$amount."','".$today."','".$annual_expire."') ";
			$run_insert_sales = mysqli_query($connect,$insert_sales);



$insert_sales_new = "INSERT INTO member_sales_new (`member_firstname`,`member_middlename`,`member_lastname`,`amount`,`date_registered`,`annual_expired`,`day`,`week`,`month`,`year`,`member_package`) VALUES ('".$firstname."','".$middlename."','".$lastname."','".$amount."','".$today."','".$annual_expire."','".$day."','".$week."','".$month."','".$year."','".$mem."') ";
			$run_insert_sales_new = mysqli_query($connect,$insert_sales_new);






    date_default_timezone_set('Asia/Manila');
    $date_ph = date('F j, Y g:i a  ');
    $username = $_SESSION['logs_username'];

	$logs_remarks = ' CREATED MEMBER '.$firstname.' '.$middlename.' '.$lastname.' ';
  
	$insert_supplier = "INSERT INTO member_logs (`member_username`,`member_status`,`date_log`) VALUES ('".$_SESSION['logs_firstname']."','".$logs_remarks."','".$date_ph."') ";
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
        	$firstname = $row['acc_firstname'];

        }




    date_default_timezone_set('Asia/Manila');
    $date_ph = date('F j, Y g:i:a  ');
    $username = $_SESSION['logs_username'];
	$logs_remarks = ' DELETED ACCOUNT '.$get_username.' ';
  
	$insert_supplier = "INSERT INTO member_logs (`member_username`,`member_status`,`date_log`) VALUES ('".$_SESSION['logs_firstname']."','".$logs_remarks."','".$date_ph."') ";
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

	$access_right = $_POST['access_right'];
	$acc_id = $_POST['acc_id'];






	$update_user = "UPDATE account  SET acc_firstname = '$firstname',acc_middlename = '$middlename',acc_lastname = '$lastname',acc_username = '$username',acc_accessright = '$access_right' WHERE acc_id ='$acc_id'";
	$run_update_user = mysqli_query($connect,$update_user);



    date_default_timezone_set('Asia/Manila');
    $date_ph = date('F j, Y g:i:a  ');
    $username = $_SESSION['logs_username'];
	$logs_remarks = ' UPDATED ACCOUNT '.$username.' ';
  
	$insert_supplier = "INSERT INTO member_logs (`member_username`,`member_status`,`date_log`) VALUES ('".$_SESSION['logs_firstname']."','".$logs_remarks."','".$date_ph."') ";
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
  
	$insert_supplier = "INSERT INTO member_logs (`member_username`,`member_status`,`date_log`) VALUES ('".$_SESSION['logs_firstname']."','".$logs_remarks."','".$date_ph."') ";
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

    $logs_firstname = $_SESSION['logs_firstname'];
	$insert_supplier = "INSERT INTO member_logs (`member_username`,`member_status`,`date_log`) VALUES ('".$_SESSION['logs_firstname']."','".$logs_remarks."','".$date_ph."') ";
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
$mem=$membership;
if($mem == '1'){

   $mem_package="1 Month Package for P1,000";
}elseif ($mem == '2') {

   $mem_package="3 Months Package for P2,500";


}elseif ($mem == '3') {

   $mem_package= "6 Months Package for P4,500";
}
else{
   $mem_package="1 Year Package for P8,500";

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
        	$member_firstname = $row['member_firstname'];
        	$member_middlename = $row['member_middlename'];
        	$member_lastname = $row['member_lastname'];


        }





$day = date('d');
$week = date('W');
$month = date('F');
$year = date('Y');



$insert_sales_new = "INSERT INTO member_sales_new (`member_firstname`,`member_middlename`,`member_lastname`,`amount`,`date_registered`,`annual_expired`,`day`,`week`,`month`,`year`,`member_package`) VALUES ('".$member_firstname."','".$member_middlename."','".$member_lastname."','".$price."','".$today."','".$annual_expire."','".$day."','".$week."','".$month."','".$year."','".$mem_package."') ";
			$run_insert_sales_new = mysqli_query($connect,$insert_sales_new);










    $username = $_SESSION['logs_firstname'];
	$logs_remarks = ' RENEWED MEMBER WITH CODE '.$member_code;
    date_default_timezone_set('Asia/Manila');
    $date_ph = date('F j, Y g:i:a  ');
	$insert_supplier = "INSERT INTO member_logs (`member_username`,`member_status`,`date_log`) VALUES ('".$_SESSION['logs_firstname']."','".$logs_remarks."','".$date_ph."') ";
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



$address = $_POST['address'];
$birthday = $_POST['birthday'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$medicalhistory = $_POST['medicalhistory'];


$explodeBirthdate = explode("-", $birthday);
$birthDate = $explodeBirthdate[1]."/".$explodeBirthdate[2]."/".$explodeBirthdate[0];

  //date in mm/dd/yyyy format; or it can be in other formats as well

  //explode the date to get month, day and year
  $birthDate = explode("/", $birthDate);
  //get age from date or birthdate
  $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
    ? ((date("Y") - $birthDate[2]) - 1)
    : (date("Y") - $birthDate[2]));






	$insert_customer = "INSERT INTO customer_daily (`cust_firstname`,`cust_middlename`,`cust_lastname`,`cust_time_in`,`cust_contact_no`,`cust_address`,`cust_birthday`,`cust_age`,`cust_height`,`cust_weight`,`cust_medical_history`) VALUES ('".$firstname."','".$middlename."','".$lastname."','".$date_ph."','".$contact."','".$address."','".$birthday."','".$age."','".$height."','".$weight."','".$medicalhistory."')";
	$run_insert_customer = mysqli_query($connect,$insert_customer);


	$username = $_SESSION['logs_firstname'];
	$logs_remarks = ' CREATED CUSTOMER '.$firstname.' '.$middlename.' '.$lastname;

	$insert_supplier = "INSERT INTO member_logs (`member_username`,`member_status`,`date_log`) VALUES ('".$_SESSION['logs_firstname']."','".$logs_remarks."','".$date_ph."') ";
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

$get_firstname = $_POST['get_firstname'];
$get_middlename = $_POST['get_middlename'];
$get_lastname = $_POST['get_lastname'];
$get_contact = $_POST['get_contact'];





	$insert_customer = "INSERT INTO customer_sales (`cust_id`,`time_out`,`day`,`week`,`month`,`year`,`cust_firstname`,`cust_middlename`,`cust_lastname`,`cust_contact_no`) VALUES ('".$cust_daily_id."','".$date_ph."','".$day."','".$week."','".$month."','".$year."','".$get_firstname."','".$get_middlename."','".$get_lastname."','".$get_contact."') ";
	$run_insert_customer = mysqli_query($connect,$insert_customer);


	$time_in_out = "INSERT INTO daily_time_in_out (`cust_daily_id`,`time_update`) VALUES ('".$cust_daily_id."','".$date_ph."') ";
	$run_time_in_out = mysqli_query($connect,$time_in_out);






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


if(isset($_POST['admin_resetuser'])){


$get_userid = $_POST['get_userid'];




	$insert_promo = "UPDATE account SET acc_password='1234',isActivated = '0' WHERE acc_id='$get_userid'";
	$run_insert_promo = mysqli_query($connect,$insert_promo);


	echo '<script language="javascript">';
	echo 'alert("User has been updated!")';
	echo '</script>';
	echo"<script>window.location.href='account.php';</script>";	




}

if(isset($_POST['daily_timeout'])){

    date_default_timezone_set('Asia/Manila');
    $date_ph = date('F j, Y g:i A  ');
    $get_cust_daily_id = $_POST['get_userid'];
    echo $get_cust_daily_id;
	$time_in_out = "UPDATE daily_time_in_out SET isTimeOut = '1',time_update='$date_ph' WHERE time_in_id='$get_cust_daily_id'";
	$run_time_in_out = mysqli_query($connect,$time_in_out);









	echo '<script language="javascript">';
	echo 'alert("Process Saved!")';
	echo '</script>';
	echo"<script>window.location.href='daily_time_in.php';</script>";	







}
if(isset($_POST['daily_timein'])){

    date_default_timezone_set('Asia/Manila');
    $date_ph = date('F j, Y g:i A  ');
    $get_cust_daily_id = $_POST['get_userid'];
    echo $get_cust_daily_id;
	$time_in_out = "UPDATE daily_time_in_out SET isTimeOut = '0',time_update='$date_ph' WHERE time_in_id='$get_cust_daily_id'";
	$run_time_in_out = mysqli_query($connect,$time_in_out);
$get_cust_id = $_POST['get_cust_id'];

	$get_customer = "SELECT * FROM customer_daily WHERE cust_daily_id = '$get_cust_id' AND isDeleted='0'";
    $get_customer_id = mysqli_query($connect,$get_customer);

        while($search = mysqli_fetch_array($get_customer_id))

    {

		   $firstname=$search['cust_firstname'];
		  $middlename = $search['cust_middlename'];
		  $lastname = $search['cust_lastname'];
		  $get_contact = $search['cust_contact_no'];
    }










$day = date('d');
$week = date('W');
$month = date('F');
$year = date('Y');




	$insert_customer = "INSERT INTO customer_sales (`cust_id`,`time_out`,`day`,`week`,`month`,`year`,`cust_firstname`,`cust_middlename`,`cust_lastname`,`cust_contact_no`) VALUES ('".$get_cust_id."','".$date_ph."','".$day."','".$week."','".$month."','".$year."','".$firstname."','".$middlename."','".$lastname."','".$get_contact."') ";
	$run_insert_customer = mysqli_query($connect,$insert_customer);

/*
	echo '<script language="javascript">';
	echo 'alert("Process Saved!")';
	echo '</script>';
	echo"<script>window.location.href='daily_time_out.php';</script>";	
*/






}

?>
