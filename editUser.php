<?php
require("connect.php");
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

        </header>

    <div class="mainContainer">
        <div class ="mainForm">
            <h1>Edit User</h1>
                <form action="./process_editUser.php" method = "POST">
                <?php while($row = mysqli_fetch_assoc($result)){
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
                    echo "<input type=\"number\" name=\"role\" placeholder=\"role\" value= \"".$row['role']."\">";
                    echo "<br>";
                }
                    ?>
                    <input type="submit" name="submit_Registration" value="Update">
                </form>    
        </div>
    </div>
</body>
</html>