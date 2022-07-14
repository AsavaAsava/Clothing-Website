<?php
require("connect.php");
 print_r($_POST);
 $orderID = $_POST['order-id'];

$sql = "select product_name,product_image,quantity from order_item join orders on order_item.order_id = orders.order_id join tbl_product on 
order_item.product_id = tbl_product.product_id where order_item.order_id = ".$orderID;

$result = mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Order Details</title>
	<link rel="stylesheet" href="formstyling.css">
</head>
<body>
<header>
			<img id="mainIcon" src="./images/chopIcon.png">

			<div id="trackOrderLink">
			<a  href="./index.html">Track your order</a>
		</div>

			<div id="quickNavBar">
				<a href="./index.html"><img class="navIcon" src="./icons/wishlist.png"></a>
				<a href="./cart.php"><img class="navIcon" src="./icons/cart.png" ></a>
				<a href="./login.php"><img class="navIcon" src="./icons/user.png" ></a> 
				<!--<div id="navIconLabels">
					<span>Wishlist</span>
					<span>Cart</span>
					<span>User</span>
				</div>-->
			</div>

			<nav id="topNavLinks">
				<a href="./index.html">Home</a>
				<a href="./index.html">Men</a>
				<a href="./index.html">Women</a>
				<a href="./index.html">Kids</a>
				<a href="./index.html">Offers</a>
			</nav>
		</header>

    <div class="mainCatContainer">
        <div class ="mainCatForm">
            <h1>Order Details</h1>
            <table class="cartTable" style="width: 600px;">
            	<thead>
                    <th>Product Image</th>
            		<th>Product Name</th>
            		<th>Quantity</th>
            	</thead>
            	<tbody>
            <?php
            while($value = mysqli_fetch_assoc($result)){
            	echo "<tr>";
            	echo "<td> <img src= \"". $value["product_image"]."\"width=\"100\" height=\"90\"></td>";
            	echo "<td>". $value["product_name"]."</td>";
            	echo "<td>". $value["quantity"]."</td>";
            	echo "</tr>";
            	}
            ?>
            </tbody>
			
            </table>
		
        </div>
    </div>
</body>
</html>