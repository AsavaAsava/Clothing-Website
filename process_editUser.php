<?php
require("connect.php");
$uid =$_POST["user"];
$first_name=$_POST["firstname"];
$surname=$_POST["surname"];
$username=$_POST["username"];
$mail=$_POST["email"];
//$pass=password_hash($_POST["password"], PASSWORD_DEFAULT);
$gender=$_POST["gender"];
$role = $_POST["role"];


$sql = "UPDATE tbl_users 
            SET first_name = '$first_name',
                last_name = '$surname',
                username = '$username',
                email = '$mail',
                pass = '$pass',
                gender = '$pass',
                role = '$role'
            WHERE user_id = '$uid'";
if (mysqli_query($conn,$sql)){
    echo "Record Created Successfully";
    header('Location: http://localhost/webDev_project/viewAllUsers.php');
    }
    else{
        echo "Error: " .$sql ."<br>" .mysqli_error($conn);
    }
    mysqli_close($conn);

?>