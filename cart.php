<?php 
require("connect.php");

$sql = "SELECT * FROM tbl_cart WHERE u_id = ".$_SESSION["user_id"];

$result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>All Products</title>
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
				<a href="./index.html"><img class="navIcon" src="./icons/cart.png" ></a>
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
            <h1>Cart</h1>
            <table class="cartTable">
            	<thead colspa>
                    <th>Product Image</th>
            		<th>Product Name</th>
            		<th>Unit Price</th>
            		<th>Quantity</th>
            		<th>Action</th>
            	</thead>
            	<tbody>
            <?php
            while($row = mysqli_fetch_assoc($result)){

            	echo "<tr>";
            	echo "<td> <img src= \"". $row["product_image"]."\"width=\"50\" height=\"60\"></td>";
            	echo "<td>". $row["product_name"]."</td>";
            	echo "<td>". $row["unit_price"]."</td>";
                echo "<td>". "<input type=\"number\" name=\"quantity\" value=\"1\">"."</td>";
            	echo "<td> <a href=\"#\"> remove </a> </td>";
            	echo "</tr>";
            	}
            ?>
            </tbody>
            </table>
            <button>Place Order</button>
        </div>
    </div>
</body>
</html>