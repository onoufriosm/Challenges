<?php

require 'solution.php';

class testSolution extends PHPUnit_Framework_TestCase {

    protected $data;

    public function __construct() {
        $this->data = [
            ['Iceman', 'cinema', true],
            ['host', 'shot', true],
            ['aba', 'bab', false],
            ['train  ', 'rain ', false],

        ];
    }

    public function test() {
        foreach ($this->data as $value) {
            $this->assertTrue( anagram($value[0], $value[1]) == $value[2] );
        }        
    }
}