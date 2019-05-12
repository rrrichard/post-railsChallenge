<?php

require_once  '../length_to_fence.php';

use PHPUnit\Framework\Testcase;

class FunctionTest extends Testcase
{
    public function testOutputSuccess()
    {
        $expected = '4 posts<br>3 railings';
        $input1 = 4;
        $input2 = 3;
        $case = output($input1, $input2);
        $this->assertEquals($expected, $case);
    }

    public function testOutputFailure()
    {
        $input1 = ['number' => 3];
        $input2 = 3;
        $this->expectException(TypeError::class);
        output($input1, $input2);
    }

    public function testOutputMalformed()
    {
        $input1 = 'hi';
        $input2 = 3;
        $this->expectException(TypeError::class);
        output($input1, $input2);
    }
}