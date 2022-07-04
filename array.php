<?php
echo "<pre>";
$data = [
'Game of Thrones' => ['Jamie Lannister','Catelyn Stark','Cersei Lannister'],
'Black Mirror' => ['Nanette Cole','Selma Telse','Karin Parke']
];

print_r($data);
echo "</pre>";
 echo '<h1>Famous TV Series and Actors</h1>';
 foreach ($data as $series => $actors) {
 	echo "<h2>$series</h2>";
 	foreach ($actors as $actor){
 		echo"<div>$actor</div>";
 	}
 }
?>

