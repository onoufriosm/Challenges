<?php 

function equilibrium($array) {

	$N = count($array);
	$right = array_sum($array);
	$left = 0;

	for ($i=0; $i < $N; $i++) { 

		$left += $array[$i];
		$right -= $array[$i];

		if ($left != $right) {
			break;
		}

	}

	return $i;


}

echo(equilibrium([12, 2, 4, 5, 1]));