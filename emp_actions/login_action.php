<?php
session_start();
include ("connection.php");

if(isset($_POST['sub']))
{
$a = $_POST['email'];
$b = $_POST['password'];
$b=md5($b);

$sql = "SELECT * FROM tbl_register WHERE email= '$a' and password= '$b' ";
$result = mysqli_query($conn, $sql);
$rowcount=mysqli_num_rows($result);

if($rowcount > 0)
{
	
	$_SESSION["login"]="1";
	unset($_SESSION["login_error"]);
	header("location:../Index.php");
}
else	
{	
	$_SESSION["login_error"] = "Please check login";
	header("location:../login.php");
	
}
}






?>