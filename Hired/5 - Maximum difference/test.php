<?php 

require 'solution.php';

class testSolution extends PHPUnit_Framework_TestCase {

    protected $data;

    public function __construct() {
        $this->data = [
            [[3,-5,1,-2,8,-2,3,-2,1], 15],
            [[10, 20, 1, 1, -5, 2], 10]

        ];
    }

    public function test() {
        foreach ($this->data as $value) {
            $this->assertTrue(maxDifference($value[0]) == $value[1] );
        }        
    }
}