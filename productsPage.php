<?php 
require_once("get_userData.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Products Page</title>
</head>
<body>
		<div class="itemContainer">
				<div class="card">
  					<?php 
  					echo ("<img src=".$row["product_image"]." alt=\"Evening Dress\">");
  					echo ("<h1>". $row["product_image"]. "</h1>");
  					echo ("<p class="price"> Ksh. )





  					?>
  					<h1>Evening Dress</h1>
  					<p class="price">Ksh. 1000.00</p>
  					<p>Lime coloured dress</p>
  					<p><button>Add to Cart</button></p>
				</div>
			</div>
</body>
</html>