<?php

function palindromePermuation($string) {

	$string = str_replace(' ', '', $string);
	$string = str_split(strtolower($string));
	$array = array_count_values($string);
	$N = count($string);

	$count = 0;

	foreach ($array as $key => $value) {
		if($array[$key] % 2 == 1) {
			$count++;
		}
	}

	if (($N % 2 == 0 && $count == 0) || ($N % 2 == 1 && $count == 1)) {
		return true;
	}

	return false;

}

echo(palindromePermuation('Tact Coa'));