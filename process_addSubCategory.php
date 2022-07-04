<?php
require("connect.php");

$category = $_POST['category'];
$subCategory =$_POST['subCategory'];

$sql = "INSERT INTO tbl_subcategories(subcategory_name,category)
VALUES ('$subCategory','$category')";

if(mysqli_query($conn,$sql)){
	echo"Record Created Successfully";
}
else {
	echo mysqli_error($conn);
}
mysqli_close($conn);
?>