<?php 
require_once("get-kids-products.php");
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
			<a  href="./index.html">Track your order</a>
		</div>

			<div id="quickNavBar">
				<a href="./index.html"><img class="navIcon" src="./icons/wishlist.png"></a>
				<a href="./index.html"><img class="navIcon" src="./icons/cart.png" href="./registration.html"></a>
				<a href="./login.php"><img class="navIcon" src="./icons/user.png" href="./registration.html"></a>
			</div>

			<nav id="topNavLinks">
				<a href="./index.html">Home</a>
				<a href="./index.html">Men</a>
				<a href="./index.html">Women</a>
				<a href="./index.html">Kids</a>
				<a href="./index.html">Offers</a>
			</nav>
		</header>
		<?php
		while($row = mysqli_fetch_assoc($result)){

	echo("<div class=\"itemContainer\"><div class=\"card\">");
				
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

