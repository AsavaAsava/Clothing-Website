<?php
require("connect.php");

$pid= $_POST['prodID'];
$product_name = $_POST['productName'];
$product_description =$_POST['productDescription'];

$temp_location=$_FILES['productImage']['tmp_name'];
$product_image = "./assets/".$_FILES['productImage']['name'];
move_uploaded_file($temp_location, $product_image);


$unit_price=$_POST['price'];
$product_quantity=$_POST['productQuantity'];
$product_subcategory=$_POST['subcategory'];

date_default_timezone_set('Africa/Nairobi');
$date_updated= date('Y-m-d H:i:s');

$sql ="UPDATE [IGNORE] tbl_product 
            SET product_name = '$product_name',
                product_description = '$product_description',
                product_image = '$product_image',
                unit_price = '$unit_price',
                available_quantity = '$product_quantity',
                updated_at = '$date_updated'
            WHERE product_id  = '$pid'";


if(mysqli_query($conn,$sql)){
	echo"Record Deleted Successfully";
    header('Location: http://localhost/webDev_project/viewAllProducts.php');
}
else {
	echo mysqli_error($conn);
}

mysqli_close($conn);

?>