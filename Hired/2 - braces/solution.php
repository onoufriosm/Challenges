<?php

function checkBraces($string) {

	$array = str_split($string);

	$N = count($array);

	if ($N % 2 == 1) {
		return false;
	}

	$braces = [$array[0]];



	for ($i=1; $i < $N; $i++) { 
		$brace = $array[$i];

		if ( bracesMatch(end($braces), $brace) ) {
			array_pop($braces);
		} else {
			array_push($braces, $brace);
		}
	}

	if (count($braces) == 0) {
		return true;
	}

	return false;


}

function bracesMatch($left, $right) {

	if ( ($left == '{' && $right == '}') || ($left == '[' && $right == ']') || ($left == '(' && $right == ')') ) {
		return true;
	}

	return false;

}

echo(checkBraces('{}[]'));