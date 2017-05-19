<?php

function anagram($string1, $string2 ) {
	return strcmp(sort_alphabet($string1), sort_alphabet($string2)) == 0;
}

function sort_alphabet($str) {
	$str = str_replace(' ', '', $str);
	$str = str_split(strtolower($str));
  	sort($str);

   	return implode('', $str);
}

if(anagram('Iceman', 'cinema')) {
	echo('true');
} else {
	echo('false');
}
