<?php
require("connect.php");

$user=$_POST["user_id"];
$product=$_POST["product"];



$sql = "INSERT INTO  tbl_cart (u_id,prod_id)
 VALUES ('$user','$product')";

if (mysqli_query($conn,$sql)){
    echo "Record Created Successfully";
    }
    else{
        echo "Error: " .$sql ."<br>" .mysqli_error($conn);
    }
    mysqli_close($conn);

    header('Location: http://localhost/webDev_project/cart.php');
exit();
?>