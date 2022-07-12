<?php 
require("connect.php");
$sql = "SELECT * from order_item  JOIN orders ON order_item.order_id = orders.order_id JOIN tbl_product ON order_item.product_id= tbl_product.product_id JOIN tbl_users ON tbl_users.user_id = orders.user_id";
$result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>All Orders</title>
	<link rel="stylesheet" href="formstyling.css">
</head>
<body>
	<header>
 		<img id="mainIcon" src="./images/chopIcon.png">
    </header>

    <div class="mainCatContainer">
        <div class ="mainCatForm">
            <h1>All Orders </h1>
            <table class="userTable">
            	<thead>
            		<th>Order ID</th>
            		<th>User ID</th>
            		<th>Username</th>
            		<th>Order Details</th>
            		<th>Action</th>
            	</thead>
            	<tbody>
            <?php
            while($row = mysqli_fetch_assoc($result)){

            	echo "<tr>";
            	echo "<td>". $row["order_id"]."</td>";
            	echo "<td>". $row["user_id"]."</td>";
            	echo "<td>". $row["username"]."</td>";
            	echo "<td>". $row["order_date"]."</td>";//Check Below
            	echo "<td> <form action=\"order-details.php\" method=\"post\">
				<input type=\"number\" name=\"order-id\" value=\"".$row["order_id"]."\" hidden>
				<input type=\"submit\" value=\"Details\">
				</form> </td>";
            	echo "</tr>";
            	}
            ?>
            </tbody>
            </table>
        </div>
    </div>
</body>
</html>