<?php
require("connect.php");
print_r($_POST);
$sql= "DELETE FROM tbl_cart WHERE entryNo = ".$_POST['entry'];
if (mysqli_query($conn,$sql)){
    header('Location: http://localhost/webDev_project/cart.php');
    }
    else{
        echo "Error: " .$sql ."<br>" .mysqli_error($conn);
    }
    mysqli_close($conn);

?>