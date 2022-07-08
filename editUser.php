<?php
$uid = $_POST['user'];
$sql =  "SELECT * FROM tbl_users WHERE user_id = '$uid'";
$result = mysqli_query($conn,$sql);

?>


<!DOCTYPE html>
<html>
<head>
	<title>Edit User</title>
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
            <h1>Edit User</h1>
                <form action="./process_editUser.php" method = "POST">
                <?php while($row2 = mysqli_fetch_assoc($result)){
 	                echo "<input type=\"text\" name=\"firstname\" placeholder=\"First Name\"value= \"".$row['first_name']."\">";
                    echo "<input type=\"text\" name=\"surname\" placeholder=\"Surname\"value= \"".$row['last_name']."\">";
                    echo "<br>";
                    echo "<select name=\"gender\">
                        <option value =\"\" disabled selected>Choose Your Gender</option>
                        <option value =\"Male\">Male</option>
                        <option value =\"Female\">Female</option>
                    </select>";
                    echo "<br>";
                    echo "<input type=\"text\" name=\"username\" placeholder=\"Username\" value= \"".$row['username']."\">";
                    echo "<br>";
                    echo "<input type=\"email\" name=\"email\" placeholder=\"E-Mail Address\" value= \"".$row['email']."\">";
                    echo "<br>";
                }
                    ?>
                    <input type="submit" name="submit_Registration" value="Register">
                </form>    
        </div>
    </div>
</body>
</html>