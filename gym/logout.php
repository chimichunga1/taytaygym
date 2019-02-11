<?php 

session_start();
session_destroy();


			echo '<script language="javascript">';
			echo 'alert("You have been logged out!")';
			echo '</script>';
			echo"<script>window.location.href='index.php';</script>";

?>