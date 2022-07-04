<?php 

require("connect.php");
$subCatsql = "SELECT * from tbl_subcategories  JOIN tbl_categories WHERE tbl_subcategories.category = tbl_categories.category_id";
$result = mysqli_query($conn,$subCatsql);
$male = array();
$female = array();
$kids = array();
$num = 0;

while($row = mysqli_fetch_assoc($result)){
if ($row['category'] == 1){
	array_push($male, $row);
}
if ($row['category'] == 2){
	array_push($female, $row);
}
if ($row['category'] == 3){
	array_push($kids, $row);
}
	
}

?>