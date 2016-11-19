<?php
/*
* INFO/CS 1300
* Fall 2016
*
* Assignment 8, question 2
* Rui Min rm877
*/

// variables
$i; // counter variable
$j; // counter variable
$k; // counter variable
$temp_num; // holder for random value
$number_array = []; // array of random integers 1-5
$high_array = []; // integers from $number_array greater than 3

function make_randoms($number_array) {
	for ( $i = 0; $i < 10; $i++ ) {
		$temp_num = rand(1, 5);
		array_push($number_array, $temp_num);
	}

	for ( $j = 0; $j < 10; $j++ ) {
		echo $j . ": " . $number_array[$j];
		echo "<br>";
	}

	return $number_array;
} 

function get_and_sort($number_array) {
	$number_array = make_randoms($number_array);
	echo "<br>";
	for ( $k = 0; $k < sizeof($number_array); $k++ ) {
		if ( $number_array[$k] > 3 ) {
			echo $k . ": " . $number_array[$k];
			echo "<br>";
		}
	}

	return $number_array;
}

$number_array = get_and_sort($number_array);

?>