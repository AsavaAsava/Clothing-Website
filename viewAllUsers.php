<?php 
require_once("get_userData.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>All Users</title>
	<link rel="stylesheet" href="formstyling.css">
</head>
<body>
	<header>
 		<img id="mainIcon" src="./images/chopIcon.png">
    </header>

    <div class="mainCatContainer">
        <div class ="mainCatForm">
            <h1>All Users </h1>
            <table class="userTable">
            	<thead>
            		<th>User ID</th>
            		<th>Username</th>
            		<th>Firstname</th>
            		<th>Lastname</th>
            		<th>E-mail Address</th>
            		<th>Action</th>
            	</thead>
            	<tbody>
            <?php
            while($row = mysqli_fetch_assoc($result)){

            	echo "<tr>";
            	echo "<td>". $row["user_id"]."</td>";
            	echo "<td>". $row["username"]."</td>";
            	echo "<td>". $row["firstname"]."</td>";
            	echo "<td>". $row["surname"]."</td>";
            	echo "<td>". $row["email"]."</td>";
            	echo "<td> <a href=\"#\"> edit </a> </td>";
            	echo "</tr>";
            	}
            ?>
            </tbody>
            </table>
        </div>
    </div>
</body>
</html>