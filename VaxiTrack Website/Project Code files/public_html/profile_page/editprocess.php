<?php

$conn = mysqli_connect('localhost', 'id15830824_root', 'Rajesh@9912110149', 'id15830824_vacc_db');
session_start();
$username=$_SESSION['username'];
if(isset($_POST['update']))
{	
	$emailaddress=$_POST['emailaddress'];
    $vaccine_name = $_POST['vaccine_name'];
	$given_date = $_POST['given_date'];
	$result = mysqli_query($conn, "UPDATE login_table SET $vaccine_name='$given_date' WHERE username='$username'");
	$to=$emailaddress;
	$sub="Vaccine Appointment Reminder";
	$msg="Vaccine $vaccine_name is scheduled on $given_date visit vaccination centre to get your vaccination done.";
	mail($to, $sub, $msg);
	
	header("Location:aprofile.php");
}
?>