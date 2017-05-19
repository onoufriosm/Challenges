<?php

require 'solution.php';

class testSolution extends PHPUnit_Framework_TestCase {

    protected $data;

    public function __construct() {
        $this->data = [
            ['Mr John Smith     ', 'Mr%20John%20Smith%20%20%20%20%20'],
            ['  ', '%20%20'],
        ];
    }

    public function test() {
        foreach ($this->data as $value) {
            $this->assertTrue( urlify($value[0]) == $value[1] );
        }        
    }
}