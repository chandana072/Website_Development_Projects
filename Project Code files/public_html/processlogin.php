<?php
$username=$_POST['user_name'];
$password=$_POST['user_password'];
$usertype2=$_POST['usertype'];
$username=stripcslashes($username);
$password=stripcslashes($password);
$con=mysqli_connect("localhost","id15830824_root","Rajesh@9912110149","id15830824_vacc_db");
$result=mysqli_query($con,"select * from login_table where username='$username'and password='$password'")
		or die("Failed to connect database".mysql_error());
$row=mysqli_fetch_array($result);
    if($usertype2=='admin' && $row['usertype']=='admin' && $row['username']==$username && $row['password']==$password) {
	header("location:admin.php");
	}
	else if($usertype2=='user' && $row['usertype']=='user' && $row['username']==$username && $row['password']==$password) {
	session_start();
	$_SESSION['username']=$username;
	header("location:profile_page/profile.php");
	    }

else{
echo "Failed to Login!!Check your Credentials..and UserType";
}
?>