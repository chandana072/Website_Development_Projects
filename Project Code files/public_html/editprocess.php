
 <?php
include "db_connection.php";
if(isset($_POST['update']))
{	
    $name = $_POST['name'];
	$age = $_POST['age'];
	$email = $_POST['email'];
	$result = mysqli_query($conn, "UPDATE users SET name='$name',age='$age',email='$email' WHERE id=1");
	echo "success";
}
?>