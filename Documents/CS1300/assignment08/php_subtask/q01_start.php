<?php
/*
* INFO/CS 1300
* Fall 2016
*
* Assignment 8, question 1
* Rui Min rm877
*/

// variables
$i; // counter variable
$key; // holder variable for array
$value; // holder variable for array
$plain_array = array(1,2,3,"four");
$assoc_array = array("Brady"=>12, "Blount"=>29, "Garropolo"=>10);

echo "Loop 1:";
echo "<br>";
for ( $i = 0; $i < sizeOf($plain_array); $i++ ) {
	echo "i: " . $plain_array[$i];
	echo "<br>";
}
echo "<br>";
echo "<br>";
echo "<br>";

echo "Loop 2:";
echo "<br>";
foreach ( $plain_array as $value ) {
	echo "value:" . $value;
	echo "<br>";
}
echo "<br>";
echo "<br>";
echo "<br>";

echo "Loop 3:";
echo "<br>";
foreach ( $plain_array as $value ) {
	if ( is_int($value) ) {
		echo "value:" . $value;
		echo "<br>";
	}
}
echo "<br>";
echo "<br>";
echo "<br>";

echo "Loop 4:";
echo "<br>";
foreach ( $assoc_array as $key => $value ) {
	echo $key . ": " . $value;;
	echo "<br>";
}

?>