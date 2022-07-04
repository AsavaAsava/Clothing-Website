<?php
require("connect.php");

$first_name=$_POST["firstname"];
$surname=$_POST["surname"];
$username=$_POST["username"];
$mail=$_POST["email"];
$pass=password_hash($_POST["password"], PASSWORD_DEFAULT);

$sql = "INSERT INTO  users (firstname,surname,username,email,pass)
 VALUES ('$first_name','$surname','$username','$mail','$pass')";

if (mysqli_query($conn,$sql)){
    echo "Record Created Successfully";
    }
    else{
        echo "Error: " .$sql ."<br>" .mysqli_error($conn);
    }
    mysqli_close($conn);
?>