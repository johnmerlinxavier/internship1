<?php




include "con1.php";

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$password = password_hash($password,PASSWORD_BCRYPT);
$query = "INSERT INTO `users` (`name`,`email`,`password`)VALUES('$name','$email','$password')";
$result = mysqli_query($con1,$query);

if($result) {
echo "successfully inserted";
}
else{
	echo "failed to insert";
} 
?>