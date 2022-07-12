<?php
 print_r($_POST);
 $orderID = $_POST['user'];

$sql = "SELECT entryNo,u_id,tbl_product.product_id,product_name,product_image,unit_price FROM tbl_cart JOIN tbl_product WHERE tbl_cart.product_id = tbl_product.product_id;";
$orderItems = [];
$result = mysqli_query($conn,$sql);
$subtotal = 0;
while($row = mysqli_fetch_assoc($result)){
	if ($row['u_id'] == $orderID){
		array_push($userCart, $row);
	}

		
	}
?>