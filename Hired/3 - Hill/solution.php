<?php

// ceil(Max - Min) + count of numbers between them

function hill($array) {

	$X = 0;
	$N = count($array);

	// Tracking position and value of max
	$max = [ 0, $array[0]];
	

	for ($i=1; $i < $N; $i++) { 
		$current = $array[$i];

		if ($current - $max[1] > $X * 2) {
			// Set new max
			$max = [$i, $current];
		} else {

			// floor (( $difference + $numberOfElementsBetween  ) / 2) + 1;

			$changeNeeded = floor((($max[1] - $current) + abs($i - $max[0] - 1)) / 2) + 1;

			// Update max $X
			if ($changeNeeded > $X) {
				$X = $changeNeeded;
			}
		}
	}

	return $X;
}

echo(hill([ 200, 200, 200, 200, 200, 200, 200, 200, 209, 30, 4, 40, 32, 4, 20]));


