<?php 
require("connect.php");

$sql = "SELECT * FROM tbl_product";

$result = mysqli_query($conn,$sql);

?>