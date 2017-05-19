<?php

require 'solution.php';

class testSolution extends PHPUnit_Framework_TestCase {

    protected $data;

    public function __construct() {
        $this->data = [
            ['abc', 'bac', true],
            ['god', 'DOg', false],
            ['god', 'dog', true],
            ['dasd  ', 'dasd ', false],

        ];
    }

    public function test() {
        foreach ($this->data as $value) {
            $this->assertTrue( checkPermutation($value[0], $value[1]) == $value[2] );
        }        
    }
}