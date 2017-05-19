<?php

require 'solution.php';

class testSolution extends PHPUnit_Framework_TestCase {

    protected $data;

    public function __construct() {
        $this->data = [
            [[ 200, 200, 200, 200, 200, 200, 200, 200, 209, 30, 4, 40, 32, 4, 20], 105],
            [[ 5, 4, 3, 2, 8], 3],
            [[ 5], 0],
            [[ 5, 8, 10, 200, 202], 0],
            [[ 5, 5, 5, 5, 5], 2],
        ];
    }

    public function test() {
        foreach ($this->data as $value) {
            $this->assertTrue(hill($value[0]) == $value[1] );
        }        
    }
}