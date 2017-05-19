<?php

require 'solution.php';

class testSolution extends PHPUnit_Framework_TestCase {

    protected $data;

    public function __construct() {
        $this->data = [
            ['abc' => true],
            ['adsasdas' => false],
            ['134kdsi*&' => true],
            ['&' => true],

        ];
    }

    public function test() {
        foreach ($this->data as $value) {
            $this->assertTrue(testUniqueness(key($value)) == $value[key($value)] );
        }        
    }
}