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
	<a href="./adminLanding.php">Return to Dashboard</a>
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
            	echo "<td>". $row["first_name"]."</td>";
            	echo "<td>". $row["last_name"]."</td>";
            	echo "<td>". $row["email"]."</td>";
            	echo "<td> <form action=\"editUser.php\" method=\"post\">
				<input type=\"number\" name=\"user\" value=\"".$row["user_id"]."\" hidden>
				<input type=\"submit\" value=\"Edit\">
				</form> </td>";
            	echo "</tr>";
            	}
            ?>
            </tbody>
            </table>
        </div>
    </div>
</body>
</html>