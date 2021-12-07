<?php


session_start();
include 'connection.php';



// $full_name = $_POST['full_name'];
// $email = $_POST['email'];
// $password = md5($_POST['password']);
// if($full_name!='' || $email!='' || $password!=''){
//     print_r($full_name);
//     // $sql = "INSERT INTO tbl_register(full_name,email,password)VALUES('$full_name','$email','$password')";
//     // mysqli_query($conn,$sql);
//     // header("location:../login.php");
// }
// elseif ($full_name='' || $email='' || $password='') {

//     echo "please fill all fields";
//     header("location:../register.php");
// } 





if (isset($_POST['full_name']) && isset($_POST['password'])){
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
    $slquery = "SELECT 1 FROM tbl_register WHERE email = '$email'";
    $selectresult = mysqli_query($conn,$slquery);
    if(mysqli_num_rows($selectresult)>0)
    {
       echo "<script>alert('email already exists');</script>";
   }
   elseif($password != $cpassword){
       echo "<script>alert('passwords doesn't match');</script>";
   }
   else{
      $sql = "INSERT INTO tbl_register(full_name,email,password,confirmpassword)VALUES('$full_name','$email','$password','cpassword')";
      $result=mysqli_query($conn,$sql);

      if($result){
             // $msg = "User Created Successfully.";
       echo "<script>alert('User Created Successfully');</script>";
       header("location:../login.php");

   }
}
}



// include 'connection.php';


?>