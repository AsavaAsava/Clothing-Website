<?php 
require("connect.php");

$sql = "SELECT * FROM tbl_product WHERE subcategory_id<=4";

$result = mysqli_query($conn,$sql);

?>