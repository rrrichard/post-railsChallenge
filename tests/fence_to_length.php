<?php

require_once  '../fence_to_length.php';

use PHPUnit\Framework\Testcase;

class FunctionTest extends Testcase
{
    public function testCalcLengthSuccess(){
        $expected = 3.3 . 'm';
        $input1 = 3;
        $input2 = 2;
        $case = Fence->calcLength($input1, $input2);
        $this->assertEquals($expected, $case);
    }
}

