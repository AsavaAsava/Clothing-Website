<?php 
require("connect.php");

$sql = "SELECT * FROM users";

$result = mysqli_query($conn,$sql);

?>