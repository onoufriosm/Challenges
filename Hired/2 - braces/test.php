<?php

require 'solution.php';

class testSolution extends PHPUnit_Framework_TestCase {

    protected $data;

    public function __construct() {
        $this->data = [
            [')(){}', false],
            ['[]({})', true],
            ['([])', true],
            ['{()[]}', true],
            ['([)]', false],


        ];
    }

    public function test() {
        foreach ($this->data as $value) {
            $this->assertTrue( checkBraces($value[0]) == $value[1] );
        }        
    }
}