<?php
require("connect.php");
session_start();
print_r($_POST);
$uid = $_SESSION['user_id'];
$cartItems = $_SESSION['orderItems'];
$date_created= date('Y-m-d H:i:s');
$quantity = $_POST['quantity'];

$createOrder = "INSERT INTO  orders (user_id,order_date) VALUES ('$uid','$date_created')";
mysqli_query($conn,$createOrder);

$getOrder = "SELECT * FROM  orders WHERE user_id = '$uid'";
$result = mysqli_query($conn,$getOrder);
while($row = mysqli_fetch_assoc($result)){$orderID = $row['order_id'];}

foreach($cartItems as $item){
    $pid = $item['product_id'];
    $createOrderItem = "INSERT INTO  order_item (order_id,product_id,quantity) VALUES ('$orderID','$pid',$quantity)";
    mysqli_query($conn,$createOrderItem);
    
}
$removeFromCart = "DELETE FROM tbl_cart WHERE u_id= ".$uid;
mysqli_query($conn,$removeFromCart);
echo("Order Successful");
header('Location: http://localhost/webDev_project/trackOrders.php');


?>