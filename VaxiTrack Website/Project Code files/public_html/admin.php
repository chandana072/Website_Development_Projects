<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <!-- CSS only -->
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
     <!-- Add this css File in head tag-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">
    <title>Vaccination Management System</title>
</head>
<body>
     <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="#"><b>VACCINATION MANAGEMENT SYSTEM</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="..\profile_page\profile.php">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Vaccine Schedule</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="..\logout.php">LogOut</a>
                    </li>
                </ul>
            </div>
        </nav>

<?php 
include "db_connection.php";
$sql= "select * from login_table;";
$result = mysqli_query($conn, $sql);
?>
        
                <table class="table table-hover table-striped">
                  <thead>
                    <tr class="bg-secondary text-white">
                      <th scope="col">Username</th>
                      <th scope="col">Fathername</th>
                      <th scope="col">Mothername</th>
                      <th scope="col">Child's Birth Date</th>
                      <th scope="col">Child's Birth Time</th>
                      <th scope="col">Child's weight</th>
                      <th scope="col">Contact</th>
                      <th scope="col">Email ID</th>
                      <th scope="col">EDIT</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <?php 
                        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) 
                            { ?>
                        <tr><th><?php echo $row['username'];?></th>
                        <td><?php echo $row['fathername'];?></td>
                        <td><?php echo $row['mothername'];?></td>
                        <td><?php echo $row['date_of_birth'];?></td>
                        <td><?php echo $row['time_of_birth'];?></td>
                        <td><?php echo $row['baby_weight'];?></td>
                        <td><?php echo $row['contact'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td>
                        	<form action="edituser_adminprocess.php" method="post">
                        		<input type="hidden" name="user_edit_name" value="<?php echo $row['username'];?>">
							<button type="submit">EDIT</button></td>
						</form>
                        </tr></tr>
                          <?php
                           }
                           ?>
                    
                  </tbody>
                </table>

</body>