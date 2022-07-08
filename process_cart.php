<?php
session_start();

require("connect.php");

$user=$_POST["user_id"];
$product=$_POST["product"];

if($user == "default"){
   echo "<script type='text/javascript'>alert('Please Log In to Add Item to Cart');</script>";
   header('Location: http://localhost/webDev_project/login.php');
   exit();
}

$sql = "INSERT INTO  tbl_cart (u_id,product_id)
 VALUES ('$user','$product')";

if (mysqli_query($conn,$sql)){
    echo "Record Created Successfully";
    header("Location: http://localhost/webDev_project/".$_SESSION['current_page'].".php");
    }
    else{
        echo "Error: " .$sql ."<br>" .mysqli_error($conn);
    }
    mysqli_close($conn);

exit();
?>