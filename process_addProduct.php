<?php
require("connect.php");


$product_name = $_POST['productName'];
$product_description =$_POST['productDescription'];

$temp_location=$_FILES['productImage']['tmp_name'];
$product_image = "./assets/".$_FILES['productImage']['name'];
move_uploaded_file($temp_location, $product_image);


$unit_price=$_POST['price'];
$product_quantity=$_POST['productQuantity'];
$product_subcategory=$_POST['category'];
$product_subcategory=$_POST['subcategory'];

date_default_timezone_set('Africa/Nairobi');
$date_created= date('Y-m-d H:i:s');
$date_updated= date('Y-m-d H:i:s');

$sql ="INSERT INTO tbl_product (product_name,product_description,product_image,unit_price,available_quantity,subcategory_id,created_at,updated_at) 
VALUES ('$product_name','$product_description','$product_image','$unit_price','$product_quantity','$product_subcategory','$date_created','$date_updated')";

if(mysqli_query($conn,$sql)){
	echo"Record Created Successfully";
}
else {
	echo mysqli_error($conn);
}

mysqli_close($conn);
?>