<?php

require 'solution.php';

class testSolution extends PHPUnit_Framework_TestCase {

    protected $data;

    public function __construct() {
        $this->data = [
            ['Tact Coa', true],
            ['KoK Parrap', true],
            ['KoK Parap', false],
            ['asa', true],
            ['as d', false],

        ];
    }

    public function test() {
        foreach ($this->data as $value) {
            $this->assertTrue( palindromePermuation($value[0]) == $value[1] );
        }        
    }
}