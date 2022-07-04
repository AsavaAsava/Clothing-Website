<?php
$food = $_POST['food_item'];
$quantity = $_POST['quantity'];

if ($food == "" || $quantity == "") {
	http_response_code(400);
}
else{
	if($food == "Cookie"){
		$food_image= "./food_images/cookie.png";
		}

	if($food== "Cheese"){
		$food_image= "./food_images/cheese.png";
		}

	if($food == "Bread"){
		$food_image= "./food_images/bread.png";
	}

	echo("<strong>Order Successful! Here is what you ordered:</strong>"."<br>");

	for($i = 0; $i < $_POST['quantity']; $i ++){
		echo("<img src='$food_image' width=\"100\" height=\"100\">");
	}		
}

?>