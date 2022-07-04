<?php
require("connect.php");

$first_name=$_POST["firstname"];
$surname=$_POST["surname"];
$username=$_POST["username"];
$mail=$_POST["email"];
$pass=password_hash($_POST["password"], PASSWORD_DEFAULT);
$gender=$_POST["gender"];
$role = 2;


$sql = "INSERT INTO  tbl_users (first_name,last_name,username,email,pass,gender,role)
 VALUES ('$first_name','$surname','$username','$mail','$pass','$gender','$role')";

if (mysqli_query($conn,$sql)){
    echo "Record Created Successfully";
    }
    else{
        echo "Error: " .$sql ."<br>" .mysqli_error($conn);
    }
    mysqli_close($conn);

    header('Location: http://localhost/webDev_project/login.php');
exit();
?>