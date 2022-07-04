<?php
require("connect.php");
$category_name = $_POST['categoryName'];
$sql = "INSERT INTO tbl_categories (category_name)
VALUES ('$category_name')";

if(mysqli_query($conn,$sql)){
	echo"Record Created Successfully";
}
else {
	echo mysqli_error($conn);
}
mysqli_close($conn);
?>