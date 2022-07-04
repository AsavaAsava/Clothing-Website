<!DOCTYPE html>
<html>
<head>
	<title>Order</title>
</head>
<body>
 <form action="order_submit.php" method="POST">
 	<label for="item">Food Item</label>
 	<select id="item" name="food_item">
 		<option value="Cookie">Cookie</option>
 		<option value="Cheese">Cheese</option>
 		<option value="Bread">Bread</option>
 	</select>
 	<br>
 	<label for="qty">Quantity</label>
 	<input type="number" name="quantity" id="qty">
    <br>
    <input type="submit" name="order" value="Order">
 </form>
</body>
</html>