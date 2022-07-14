<?php 
require_once("get_Products.php");
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
    </header>

    <div class="mainCatContainer">
        <div class ="mainCatForm">
            <h1>All Products </h1>
            <table class="userTable">
            	<thead>
                    <th>Product Image</th>
            		<th>Product ID</th>
            		<th>Product Name</th>
            		<th>Description</th>
            		<th>Unit Price</th>
            		<th>Available Quantity</th>
            		<th>Action</th>
            	</thead>
            	<tbody>
            <?php
            while($row = mysqli_fetch_assoc($result)){

            	echo "<tr>";
            	echo "<td> <img src= \"". $row["product_image"]."\"width=\"50\" height=\"60\"></td>";
            	echo "<td>". $row["product_id"]."</td>";
            	echo "<td>". $row["product_name"]."</td>";
            	echo "<td>". $row["product_description"]."</td>";
            	echo "<td>". $row["unit_price"]."</td>";
                echo "<td>". $row["available_quantity"]."</td>";
            	echo "<td> 
				
				<form action=\"editProduct.php\" method=\"post\">
				<input type=\"number\" name=\"product\" value=\"".$row["product_id"]."\" hidden>
				<input type=\"submit\" value=\"Edit\">
				</form> 
				
				</td>";
            	echo "</tr>";
            	echo "</tr>";
            	}
            ?>
            </tbody>
            </table>
        </div>
    </div>
</body>
</html>