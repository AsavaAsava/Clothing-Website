<?php
require("connect.php");
print_r($_POST);
$sql= "DELETE FROM orders WHERE order_id = ".$_POST['order-id'];
if (mysqli_query($conn,$sql)){
    header('Location: http://localhost/webDev_project/viewAllOrders.php');
    }
    else{
        echo "Error: " .$sql ."<br>" .mysqli_error($conn);
    }
    mysqli_close($conn);

?>