<?php 
require("connect.php");

$sql = "SELECT * FROM tbl_product WHERE subcategory_id >7 AND <= 10";

$result = mysqli_query($conn,$sql);

?>