<?php 
session_start();
$uid = $_SESSION['user_id'];
require("connect.php");
$sql = "SELECT * from orders JOIN tbl_users ON tbl_users.user_id = orders.user_id WHERE order_status = 'Complete' AND orders.user_id =". $uid;
$result = mysqli_query($conn,$sql);
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
            <h1>My Complete Orders </h1>
            <table class="userTable" style="width: 750px;">
            	<thead>
            		<th>Order ID</th>
            		<th>User ID</th>
            		<th>Username</th>
            		<th>Date Placed</th>
                    <th>Status</th>
            		<th>Action</th>
            	</thead>
            	<tbody>
            <?php
            while($row = mysqli_fetch_assoc($result)){

            	echo "<tr>";
            	echo "<td>". $row["order_id"]."</td>";
            	echo "<td>". $row["user_id"]."</td>";
            	echo "<td>". $row["username"]."</td>";
            	echo "<td>". $row["order_date"]."</td>";
                echo "<td>". $row["order_status"]."</td>";//Check Below
            	echo "<td> 
				<form action=\"order-details.php\" method=\"post\">
				<input type=\"number\" name=\"order-id\" value=\"".$row["order_id"]."\" hidden>
				<input type=\"submit\" value=\"Details\">
				</form>
				 </td>";
            	echo "</tr>";
            	}
            ?>
            </tbody>
            </table>
        </div>
    </div>
		</body>
</html>