


<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
    <link rel="stylesheet" href="formStyling.css">
</head>
<body>

    <header>
            <img id="mainIcon" src="./images/chopIcon.png">

            <div id="trackOrderLink">
            <a  href="./index.php">Track your order</a>
        </div>

            <div id="quickNavBar">
                <a href="./index.php"><img class="navIcon" src="./icons/wishlist.png"></a>
                <a href="./index.php"><img class="navIcon" src="./icons/cart.png" href="./registration.html"></a>
                <a href="./index.php"><img class="navIcon" src="./icons/user.png" href="./registration.html"></a>
                <!--<div id="navIconLabels">
                    <span>Wishlist</span>
                    <span>Cart</span>
                    <span>User</span>
                </div>-->
            </div>

            <nav id="topNavLinks">
                <a href="./index.php">Home</a>
                <a href="./index.php">Men</a>
                <a href="./index.php">Women</a>
                <a href="./index.php">Kids</a>
                <a href="./index.php">Offers</a>
            </nav>
        </header>

    <div class="mainContainer">
        <div class ="mainForm">
            <h1>Hello There!</h1>
                <form action="./process_register.php" method = "POST">
 	              <input type="text" name="firstname" placeholder="First Name">
                    <input type="text" name="surname" placeholder="Surname">
                    <br>
                    <input type="text" name="username" placeholder="Username">
                    <br>
                    <input type="email" name="email" placeholder="E-Mail Address">
                    <input type="number" name="phone" placeholder="Phone Number">
                    <br>
 	                  <input type="password" name="password" placeholder="Password">
                    <input type="password" name="passwordConfirm" placeholder="Re-type Password">
                    <br>
                    <input type="submit" name="submit_Registration" value="Register">
                </form>    
        </div>
    </div>
</body>
</html>