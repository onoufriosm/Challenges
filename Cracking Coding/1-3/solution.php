<?php

function urlify($string) {
	$string = str_split($string);

	$array = [];

	$N = count($string);

	for ($i=0; $i < $N; $i++) { 

		$char = $string[$i];

		if ($char == ' ') {
			$array[] = '%20';
		} else {
			$array[] = $char;
		}		
	}

	return implode('', $array);
}

echo(urlify('Mr John Smith     '));