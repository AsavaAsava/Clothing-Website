<?php
require("connect.php");
print_r($_POST);
$sql= "DELETE FROM tbl_product WHERE product_id = ".$_POST['product'];
if (mysqli_query($conn,$sql)){
    header('Location: http://localhost/webDev_project/viewAllProducts.php');
    }
    else{
        echo "Error: " .$sql ."<br>" .mysqli_error($conn);
    }
    mysqli_close($conn);

?>