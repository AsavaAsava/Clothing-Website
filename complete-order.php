<?php
require("connect.php");
$id =$_POST["order-id"];



$sql = "UPDATE orders
            SET order_status = 'Complete'
            WHERE order_id = '$id'";
if (mysqli_query($conn,$sql)){
    echo "Record Created Successfully";
    header('Location: http://localhost/webDev_project/viewAllOrders.php');
    exit();
    }
    else{
        echo "Error: " .$sql ."<br>" .mysqli_error($conn);
    }
    mysqli_close($conn);

?>