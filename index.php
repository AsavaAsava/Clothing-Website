<?php
 session_start();
 require_once("get-male-products.php");
 $_SESSION['pageVisits'] = "";
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

		<main>
			
			<!--Call to Action-->
			<section id= "aboveFold">
				<div id="callToAction">
					<h2>Clothes for awesome people</h2>
					<h4>Get your new outfit today!</h4>
					<a href="./male-products-page.php">Shop Now</a>
				</div>
			</section>

			<section id="brandSection">
				<div id="iconDisplay">
					<img src="./icons/adidas.png">
					<img src="./icons/nike.png">
					<img src="./icons/puma.png">
					<img src="./icons/champion.png">
					<img src="./icons/chanel.png">
					<img src="./icons/converse.png">
				</div>
				<div id="brandCall">
					<h3>
						Quality. Always.

					</h3>
					<h5>All your favorite brands in one site.</h5>
				</div>
			</section>

			<section id="advantageIndicator">
				<div class = "advantageIndicator1">
					<h3>
						<p>Same Day Delivery,</p>
						<p>Everyday.</p>

					</h3>
					<h5>Order before midday and the product will be delivered to you before 6:00 p.m. the same day.</h5>
				</div>
				<div class = "advantageIndicator2">
					<h3>
						<p>Dont like it,</p>
						<p>Exchange it.</p>

					</h3>
					<h5>
						<p>Our versatile return policy is a first of it's kind.</p>
						<p>We exchange any purchase item within a week of its purchase</p>
					</h5>
				</div>
			</section>

			<section id = "newArrivalsSection">
				<h2>New Arrivals</h2>
				<div id="quickCatalog">


				<?php
				$count = 0;
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
					$count++;
					if($count == 3){break;}
					}		

		?>

			<div id="viewMoreButton">
				<a href="#"><img src="./icons/arrow-right.png"></a>
				<p>View More</p>
				</div>
			</div>
			</section>

			<section class = "reviewsSection">
				<h2>Customer Reviews</h2>
				<div class="reviewCard">
					<img src="./images/female.jpg" alt = "Profile Picture">
					<div class="TextArea">
					<h1>Mary Jane</h1>
					<p>Quick deliveries, and they keep their promise of quality. I highly recommend buying items from this store.</p>
					</div>
				</div>

				<div class="reviewCard2">
					<img src="./images/male.jpg" alt = "Profile Picture">
					<div class="TextArea">
					<h1>Peter Pakk</h1>
					<p>They got me exactly what I wanted. My shirt initially did not fit but they were quick to exchange it for my size. Thank you ChopCloth</p>
					</div>
				</div>
			</section>

			<section id="BottomLinks">
				<div class="productLinks">
					<h1>Products</h1>
					<ul>
						<li><a href="">Clothing</a></li>
						<li><a href="">Shoes</a></li>
						<li><a href="">Accessories</a></li>
					</ul>
				</div>

				<div>
					<h1>Category</h1>
					<ul>
						<li><a href="">Men</a></li>
						<li><a href="">Women</a></li>
						<li><a href="">Kids</a></li>
					</ul>
				</div>

				<div>
					<h1>Company Info</h1>
					<ul>
						<li><a href="">About Us</a></li>
						<li><a href="">Blog</a></li>
					</ul>
				</div>

				<div>
					<h1>Support</h1>
					<ul>
						<li><a href="">Help</a></li>
						<li><a href="">Shipping</a></li>
						<li><a href="">Contact Us</a></li>
					</ul>
				</div>

			</section>
		</main>

		<footer>
			<a href="#"> Terms of Service </a>
			<a href="#"> Privacy Policy </a>
		</footer>

	</body>

</html>
