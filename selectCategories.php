<?php 
require("connect.php");

$sql = "SELECT * FROM tbl_categories";

$result = mysqli_query($conn,$sql);

?>