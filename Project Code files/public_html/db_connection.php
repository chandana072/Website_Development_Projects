<?php
$servername = 'localhost';
$user = 'id15830824_root';
$pass = 'Rajesh@9912110149';
$db = 'id15830824_vacc_db';  

// Create connection

$conn = mysqli_connect($servername, $user, $pass, $db);
// Check connection
if (!$conn) {

   die("Connection failed: " . mysqli_connect_error());

}

?>