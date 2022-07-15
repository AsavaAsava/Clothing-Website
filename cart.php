<?php 
require("connect.php");
session_start();
if($_SESSION['user_id']== "default"){
	echo "<script type='text/javascript'>alert('Please Log In to Access Cart')</script>";
	header('Location: http://localhost/webDev_project/login.php');
	exit();
 }
$sql = "SELECT entryNo,u_id,tbl_product.product_id,product_name,product_image,unit_price FROM tbl_cart JOIN tbl_product WHERE tbl_cart.product_id = tbl_product.product_id;";
$userCart = [];
$result = mysqli_query($conn,$sql);
$subtotal = 0;
while($row = mysqli_fetch_assoc($result)){
	if ($row['u_id'] == $_SESSION['user_id']){
		array_push($userCart, $row);
	}

		
	}
	$_SESSION['orderItems'] = $userCart;
?>
<!DOCTYPE html>
<html>
	<head>
		<title>ChopCloth Shop</title>
		<link rel="stylesheet" href="formStyling.css">
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
            <h1>Cart</h1>
            <table class="cartTable">
            	<thead>
                    <th>Product Image</th>
            		<th>Product Name</th>
            		<th>Unit Price</th>
            		<th>Quantity</th>
            		<th>Action</th>
            	</thead>
            	<tbody>
            <?php
            foreach($userCart as $value){
            	echo "<tr>";
            	echo "<td> <img src= \"". $value["product_image"]."\"width=\"100\" height=\"90\"></td>";
            	echo "<td>". $value["product_name"]."</td>";
            	echo "<td>". $value["unit_price"]."</td>";
                echo "<td>". "<input class=\"cart-num\" id = \"quantity\" type=\"number\" name=\"quantity\" value=\"1\">"."</td>";
            	echo "<td> <form action=\"removeFromCart.php\" method=\"post\">
				<input type=\"number\" name=\"entry\" value=\"".$value["entryNo"]."\" hidden>
				<input type=\"submit\" value=\"Remove\">
				</form> </td>";
            	echo "</tr>";
				$subtotal += $value["unit_price"];
            	}
            ?>
            </tbody>
			
            </table>
			<span id="cart-subtotal"><h3><?php echo "Subtotal: Ksh.". $subtotal;?></h3><span><br>
			<form action="submitOrder.php" method="post">
				<input type="number" name="uid" value="<?php echo $_SESSION['user_id']?>" hidden>
				<input id = "item-quantity" type= "number" name="quantity" value="1" hidden>
				<input type="submit" value="Place Order">
			</form>
        </div>
    </div>
</body>
<script>
	document.querySelector("#quantity").addEventListener("change", () => {
	document.querySelector("#item-quantity").value = document.querySelector("#quantity").value
	//document.querySelector("#cart-subtotal").innerHTML= parseInt(document.querySelector("#quantity").value)*parseInt(document.querySelector("#cart-subtotal").innerHTML)
	
	})
</script>
</html>