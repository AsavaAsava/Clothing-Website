<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="formStyling.css">
</head>
<body>
 <header>
            <img id="mainIcon" src="./images/chopIcon.png">

            <div id="trackOrderLink">
            <a  href="./index.html">Track your order</a>
        </div>

            <div id="quickNavBar">
                <a href="./index.html"><img class="navIcon" src="./icons/wishlist.png"></a>
                <a href="./index.html"><img class="navIcon" src="./icons/cart.png"></a>
                <a href="./index.html"><img class="navIcon" src="./icons/user.png"></a>
                <!--<div id="navIconLabels">
                    <span>Wishlist</span>
                    <span>Cart</span>
                    <span>User</span>
                </div>-->
            </div>

            <nav id="topNavLinks">
                <a href="./index.html">Home</a>
                <a href="./index.html">Men</a>
                <a href="./index.html">Women</a>
                <a href="./index.html">Kids</a>
                <a href="./index.html">Offers</a>
            </nav>
        </header>

    <div class="regContainer">
        <div class ="loginForm">
            <h1>Welcome Back</h1>
                <form action="#" method = "POST">
 	              <input type="text" name="username" placeholder="Username">
        			<br>
 	                <input type="password" name="password" placeholder="Password">
					<br>
                    <input type="submit" name="submit_Login" value="Log In">
                </form> 
                <p>Don't have an account?<span><a href="registration.php">Register</a></span></p>   
        </div>
    </div>
</body>
</html>