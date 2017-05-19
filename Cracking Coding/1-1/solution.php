<?php

function testUniqueness($string) {

    $values = array_fill(0, 128, 0);

	$array = str_split($string);

    $N = count($array);

    for ($i=0; $i < $N; $i++) { 
        $char = ord($array[$i]);

        if($values[$char] == 1) {
            return false;
        }

        $values[$char] = 1;
    }

    return true;
}

