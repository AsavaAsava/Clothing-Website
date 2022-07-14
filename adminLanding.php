<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<title>Admin Dashboard</title>
</head>
<body>
	 <header>
        <img id="mainIcon" src="./images/chopIcon.png">
    </header>
 <div id="mainArea">
 	
 	<div id= "statisticsBanner">
 		<h1><?php session_start(); error_reporting(E_ALL ^ E_WARNING); 
		echo "Welcome ".$_SESSION['username'];?></h1>
 	</div>
 	<div id="optionsArea">
 		<div class="option" id="opt1">
 			<span><a href="./viewAllUsers.php"><img class="navIcon" src="./icons/group.png" width="100" height="100" ></a></span><br>
			 <span>View All Users</span>
 		</div>
 		<div class="option" id="opt2">
		 <span><a href="./viewAllProducts.php"><img class="navIcon" src="./icons/clothing.png" width="100" height="100" ></a></span><br>
			 <span>All Products</span>
 		</div>
 		
 		<div class="option" id="opt3">
		 <span><a href="./addCategory.php"><img class="navIcon" src="./icons/playlist.png" width="100" height="100" ></a></span><br>
			 <span>Add Category</span>
 		</div>
 		
 		<div class="option" id="opt4">
		 <span><a href="./addSubCategory.php"><img class="navIcon" src="./icons/clipboard.png" width="100" height="100" ></a></span><br>
			 <span>Add Sub-Category</span>
 		</div>
		<div class="option" id="opt5">
		<span><a href="./addProduct.php"><img class="navIcon" src="./icons/plus.png" width="100" height="100" ></a></span><br>
			 <span>Add Product</span>
		</div>
		<div class="option" id="opt6">
		<span><a href="./viewAllOrders.php"><img class="navIcon" src="./icons/order-delivery.png" width="100" height="100" ></a></span><br>
			 <span>View Orders</span>
 		</div>
		 <div class="option" id="opt7">
		<span><a href="./index.php" target="_blank"><img class="navIcon" src="./icons/clothes.png" width="100" height="100" ></a></span><br>
			 <span>Go To Store</span>
 		</div>
		 <div class="option" id="opt8">
		 <span><a href="./processLogout.php"><img class="navIcon" src="./icons/logout.png" width="100" height="100" ></a></span><br>
			 <span>Log Out</span>
 		</div>
 		<div id="foot"></div>
 	</div>


 </div>


</body>
</html>