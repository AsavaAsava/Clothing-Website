<?php
$conn = mysqli_connect("localhost","root","","webDevShop");

if (!$conn) {
	die("Could not connect".mysqli_connect_error());
}else{
	echo "Connected Successfully". "<br>";
}
?>
