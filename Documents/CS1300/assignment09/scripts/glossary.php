<?php
	//Load cvs 
	function get_csv() {
		$original_array = [];
		// open the file
		$file = fopen("data/archery_terms.csv", "r");
		// read the file until it ends
		while ( !feof($file) ) {
			$temp = fgetcsv($file);
			array_push($original_array, $temp);
		}
		// close the file
		fclose($file);
		return $original_array;
	}
	// Convert the normal array to associate array and sort
	function array_to_map($original_array) {
		$assoc_array = array();
		// put the normal array to associate array
		for ( $i = 0; $i < sizeof($original_array); $i++ ) {
			$assoc_array[$original_array[$i][0]] = $original_array[$i][1];
		}
		// sort by key
		ksort($assoc_array);
		return $assoc_array;
	}

	//Create dl list
	function create_list($assoc_array) {
		echo "<dl>";
		foreach ( $assoc_array as $key => $value ) {
			echo "<dt>" . $key . "</dt>";
			echo "<dd>" . $value . "\n" . "</dd>";
		}
		echo "</dl>";
	}

	$original_array = get_csv();
	$assoc_array = array_to_map($original_array);
	create_list($assoc_array);
?>