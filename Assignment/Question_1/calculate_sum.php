<?php
$num1 = $_POST['num_1'];
$num2 = $_POST['num_2'];


function add($a, $b) {
  return $a + $b;
}

echo("The sum of ". $num1 . " and ". $num2 . " is ". add($num1,$num2));

?>