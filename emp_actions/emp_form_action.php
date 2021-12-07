
<?php

session_start();
include 'connection.php';  

$emp_name = $_POST['emp_name'];
$emp_mobile = $_POST['emp_mobile'];
$emp_gender = $_POST['emp_gender'];
$fileToUpload=$_FILES['fileToUpload']['name'];

// $target_dir = "../uploads/";
// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["fileToUpload"]["name"]);
$extension = end($temp);
if ((($_FILES["fileToUpload"]["type"] == "image/gif")
    || ($_FILES["fileToUpload"]["type"] == "image/jpeg")
    || ($_FILES["fileToUpload"]["type"] == "image/jpg")
    || ($_FILES["fileToUpload"]["type"] == "image/pjpeg")
    || ($_FILES["fileToUpload"]["type"] == "image/x-png")
    || ($_FILES["fileToUpload"]["type"] == "image/png"))
    && ($_FILES["fileToUpload"]["size"] < 20000000000000000000000)
    && in_array($extension, $allowedExts))
{
  if ($_FILES["fileToUpload"]["error"] > 0)
  {
    echo "Return Code: " . $_FILES["fileToUpload"]["error"] . "<br>";
}
else
{
    echo "Upload: " . $_FILES["fileToUpload"]["name"] . "<br>";
    echo "Type: " . $_FILES["fileToUpload"]["type"] . "<br>";
    echo "Size: " . ($_FILES["fileToUpload"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["fileToUpload"]["tmp_name"] . "<br>";

    if (file_exists("../uploads/" . $_FILES["fileToUpload"]["name"]))
    {
      echo $_FILES["fileToUpload"]["name"] . " already exists. ";
  }
  else
  {
      move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],
          "../uploads/" . $_FILES["fileToUpload"]["name"]);
      echo "Stored in: " . "../uploads/" . $_FILES["fileToUpload"]["name"]."<br>";
  }
}
}

if($emp_name ==''||$emp_gender == '' ||$emp_mobile==''){
    echo "Please fill the value in required field";
}
elseif($emp_name != ''&&$emp_gender != '' &&$emp_mobile!=''){
    $sql = "INSERT INTO tbl_employee (emp_name,emp_gender,emp_mobile,imageName) 
    VALUES ('$emp_name','$emp_gender','$emp_mobile','$fileToUpload')";
    mysqli_query($conn, $sql);
    echo "<script>alert('Record added');</script>";
}

?>



