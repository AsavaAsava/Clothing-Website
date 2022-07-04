<!DOCTYPE html>
<html>
<head>
	<title>Sum Calculator</title>
	<link rel="stylesheet"href="sumCalcStyling.css">
</head>
<body>
 <form action="calculate_sum.php" method="POST">
 	<label for="num1">Enter the first number:</label>
 	<input type="number" id="num1" name="num_1">
 	<br>
 	<label for="num2">Enter the Second number:</label>
 	<input type="number" id="num2" name="num_2">
 	<br>
 	<input type="submit" name="calulate" id="calculate" value="Calculate">
 </form>

</body>
</html>