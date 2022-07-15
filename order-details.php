<?php
require("connect.php");
session_start();
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
			<a  href="./trackOrders.php">Track your order</a>
		</div>

			<div id="quickNavBar">
				<a href="./cart.php"><img class="navIcon" src="./icons/cart.png" ></a>
				<a href="./viewPreviousOrders.php"><img class="navIcon" src="./icons/shopping-bag.png"></a>
				<a href="./login.php"><img class="navIcon" src="./icons/user.png" ></a> 
				<span class="username">
					<?php
						error_reporting(E_ALL ^ E_WARNING);
						if($_SESSION['username']){
						echo($_SESSION['username']);
						echo "<span class=\"username\"><a  href=\"./processLogout.php\">LogOut</a></span>";
						}
				?>
				</span>
				
				
			</div>

			<nav id="topNavLinks">
				<a href="./index.php">Home</a>
				<a href="./male-products-page.php">Men</a>
				<a href="./female-products-page.php">Women</a>
				<a href="./kids-products-page.php">Kids</a>
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