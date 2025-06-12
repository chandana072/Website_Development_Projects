<?php

    function fetch($temp){
	    $conn = mysqli_connect("localhost","id15830824_root","Rajesh@9912110149","id15830824_vacc_db");
	    // Check connection
	    if (!$conn) {
	        die("Connection failed: " . mysqli_connect_error());
	    }
	    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	    $user =$_SESSION['username'];
	    $sql= "select * from login_table where username = '$user'";
	    $result = mysqli_query($conn, $sql);
	    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	    $data=$row[$temp];
	    return $data;
    }

    function date_cal($t1)
    {
    	$temp = fetch('date_of_birth');
		$date = date_create($temp); 
		// Use date_add() function to add date object 
		date_add($date, date_interval_create_from_date_string($t1)); 
		  
		// Display the added date 
		echo date_format($date, "Y-m-d");
	}	