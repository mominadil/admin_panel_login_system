<?php
session_start();
include ("connection.php");
$email=$_POST['email'];
$sql="SELECT * FROM  tbl_register WHERE email='$email' ";
$result = mysqli_query($conn, $sql);
$rowcount=mysqli_fetch_array($result);
// echo "$rowcount";
if($rowcount>0){
	header("location:../recovery_password.php");
	$_SESSION['email'] = $_POST['email'];
}

else{
	echo "please enter your valid email";
}

?>