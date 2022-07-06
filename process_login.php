<?php
require("connect.php");
session_start();
$uname = $_POST['username'];
$pass = $_POST["password"];

$sql = "SELECT * FROM tbl_users where username = '$uname' ";

$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);

if($row){
    if(password_verify($pass,$row['pass'])){
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['username'] = $uname;
        $_SESSION['role'] = $row['role'];
        if($row['role'] == 1 ){
            header('Location: http://localhost/webDev_project/adminLanding.php');
            exit();
        }elseif($row['role'] == 2){
            header('Location: http://localhost/webDev_project/index.php');
            exit();
        }
        echo "Login Successful";
    }else{
        echo "Unsucessful";
    }
}else{
    echo "User not found";
}

?>