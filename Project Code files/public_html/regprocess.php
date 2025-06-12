<?php
$fathername=$_POST['father_name'];
$mothername=$_POST['mother_name'];
$dob=$_POST['date_birth'];
$tob=$_POST['time_birth'];
$baby_weight=$_POST['baby_weight'];
$email=$_POST['email'];
$contact=$_POST['contactno'];
$username=$_POST['user_name'];
$password=$_POST['userpassword'];
$confpassword=$_POST['confirmpassword'];
$con=mysqli_connect("localhost","id15830824_root","Rajesh@9912110149","id15830824_vacc_db");
if ($password==$confpassword) {
$result=mysqli_query($con,"insert into login_table(fathername, mothername, date_of_birth, time_of_birth, baby_weight, contact, username, password, email,usertype) values('$fathername','$mothername','$dob','$tob','$baby_weight','$contact','$username','$password','$email','user')")
		or die("Failed to connect database".mysql_error());
		session_start();
		$_SESSION['username']=$username;
		header("location:profile_page/profile.php");
}
else{
	echo "Registration Failed<br>Check Password and Confirm Password";
}
	

?>