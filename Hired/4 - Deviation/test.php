<?php

require 'solution.php';

class testSolution extends PHPUnit_Framework_TestCase {

    protected $data;

    public function __construct() {
        $this->data = [
            [[6], 3 , 0],
            [[ 6, 9, 4, 7, 4, 1], 3, 6],
        ];
    }

    public function test() {
        foreach ($this->data as $value) {
            $this->assertTrue(deviation($value[0], $value[1]) == $value[2] );
        }        
    }
}