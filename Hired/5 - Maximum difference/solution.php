<?php

function maxDifference($array) {

	$N = count($array);

	$minsArray = getMins($array, $N);
	$maxsArray = getMaxs($array, $N);

	return computeMaxDifference($minsArray, $maxsArray, $N);
}

function getMins($array, $N) {

	$min = $array[0];
	$minsArray[] = $min;
	$sum = $min;

	for ($i=1; $i < $N; $i++) { 
		$value = $array[$i];

		if ($value < $min && $sum > 0) {
			$sum = $min = $value;
			$minsArray[] = $min;
		} else {
			$sum = $sum  +  $value;

			if ($sum >= 0) {
				$sum = 0;
				$minsArray[] = end($minsArray);
			} elseif ($sum < $min) {
				$min = $sum;
				$minsArray[] = $min;
			} else {
				$minsArray[] = $min;
			}
		}
	}

	return $minsArray;
}

function getMaxs($array, $N) {

	$max = $array[$N-1];
	$sum = $max;
	$maxsArray[] = $max;

	for ($i = $N-2; $i >= 0; $i--) { 
		$value = $array[$i];

		if ($value > $max && $sum < 0) {
			$sum = $max = $value;
			$maxsArray[] = $max;
		} else {
			$sum = $sum  +  $value;

			if ($sum <= 0) {
				$sum = 0;
				$maxsArray[] = end($maxsArray);
			} elseif ($sum > $max) {
				$max = $sum;
				$maxsArray[] = $max;
			} else {
				$maxsArray[] = $max;
			}
		}
	}

	return array_reverse($maxsArray);
}

function computeMaxDifference($mins, $maxs, $N) {

	$diff = 0;

	for ($i=0; $i < $N - 1; $i++) { 
		$currDiff = $maxs[$i + 1] - $mins[$i];

		if ($currDiff > $diff) {
			$diff = $currDiff;
		}
	}

	return $diff;
}

 

print_r(maxDifference([3,-5,1,-2,8,-2,3,-2,1]));


