<?php

function deviation($array, $d) {

	// O(NlogN)

	$answer = 0;
	$N = count($array);

	for ($i=0; $i < $N; $i++) { 
		$sub = array_slice($array, $i, $d);

		$deviation = max($sub) - min($sub);

		if ($deviation > $answer) {
			$answer = $deviation;
		}
	}

	return $answer;
}
