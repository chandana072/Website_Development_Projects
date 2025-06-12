<?php
$username=$_POST['user_edit_name'];
session_start();
$_SESSION['username']=$username;
	header("location:profile_page/aprofile.php");


?>