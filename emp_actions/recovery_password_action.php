<?php
session_start();
include 'connection.php';
$email=$_SESSION['email'];
$password=$_POST["password"];
$password=md5($password);
if($password!=''){
	$sql = "UPDATE tbl_register set password='$password' WHERE email='$email'";
	$result = mysqli_query($conn, $sql);
	echo '<script>alert("your password is updated")</script>';
	header("location:../login.php");
}else{
	echo "please enter your password";
	header("location:../recovery_password.php");	

}
?>