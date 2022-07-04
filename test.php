<?php 
require("connect.php");

$sql = "SELECT * FROM users";

$result = mysqli_query($conn,$sql);

 while($row = mysqli_fetch_assoc($result)){
 print_r($row);
 echo "<br>";
 echo "<h1>". $row['username']."</h1>";
 echo "<br>";
            	}

?>