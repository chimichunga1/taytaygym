<?php



if(!isset($_SESSION['session_username'])){





}


		$check_if_expired = "SELECT * FROM member WHERE isDeleted = '0' and isExpired= '0' AND isCancelled = '0'";
		$run_check_if_expired = mysqli_query($connect,$check_if_expired);

            while($row = mysqli_fetch_array($run_check_if_expired))

        {			$get_member_id = $row['member_id'];
    				$get_annual_expire = $row['annual_expire'];
					if($row['membership_expired'] == date('Y-m-d')){
							$update_mebmership = "UPDATE member SET isExpired = '1' WHERE member_id ='$get_member_id'";
							$run_update_mebmership = mysqli_query($connect,$update_mebmership);

							$today = date("Y-m-d");
							$insert_user = "INSERT INTO member_expired (`member_id`,`date_expired`) VALUES ('".$get_member_id."','".$today."') ";
							$run_insert_user = mysqli_query($connect,$insert_user);							

					}
					if($row['annual_expire'] == date('Y-m-d')){
							$update_mebmership = "UPDATE member SET isExpired = '1' WHERE member_id ='$get_member_id'";
							$run_update_mebmership = mysqli_query($connect,$update_mebmership);

							$today = date("Y-m-d");
							$insert_user = "INSERT INTO member_expired (`member_id`,`date_expired`) VALUES ('".$get_member_id."','".$today."') ";
							$run_insert_user = mysqli_query($connect,$insert_user);							

					}


        }











?>