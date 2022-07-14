<?php 
require("connect.php");

$sql = "SELECT * FROM `tbl_product` join tbl_subcategories on tbl_product.subcategory_id =tbl_subcategories.subcategory_id join tbl_categories on tbl_subcategories.subcategory_id = tbl_categories.category_id where category = 2";

$result = mysqli_query($conn,$sql);

?>