<?php

function checkPermutation($string1, $string2 ) {

	return strcmp(sort_alphabet($string1), sort_alphabet($string2)) == 0;

}

function sort_alphabet($str) {

    $array = str_split($str);
    sort($array);
   	$string = implode('', $array);

    return $string;
}

if(checkPermutation('god', 'dog')) {
	echo('true');
} else {
	echo('false');
}
