<?php 
require_once("get-male-products.php");
session_start();
$_SESSION['current_page'] = "male-products-page";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>ChopCloth Shop</title>
		<link rel="stylesheet" href="style.css">
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
		<?php
		while($row = mysqli_fetch_assoc($result)){

					echo("<div class=\"itemContainer\"><div class=\"card\">");
					echo("<form action=\"./process_cart.php\" method = \"POST\">");
  					echo("<img src=\"".$row["product_image"]."\">");
					echo("<input type=\"text\" name=\"user_id\" value=\"".$_SESSION['user_id']."\" hidden>");
					echo("<input type=\"text\" name=\"product\" value=\"".$row["product_id"]."\" hidden>");
  					echo("<h1>".$row["product_name"]."</h1>");
  					echo("<p class=\"price\">Ksh.".$row["unit_price"]."</p>");
  					echo("<p>".$row["product_description"]."</p>");
  					echo("<p><input type=\"submit\" name=\"submit_Cart\" value=\"Add To Cart\"></p>");
					echo("</form></div></div>");
				
			
}

		?>
	</body>

</html>

