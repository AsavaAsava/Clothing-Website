<?php 
require("connect.php");

$sql = "SELECT * FROM tbl_users";

$result = mysqli_query($conn,$sql);

?>