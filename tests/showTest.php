<?php

Namespace Travis\Show;

use PHPUnit\Framework\TestCase;

class showTest extends TestCase{

    public function testPrints()
    {
        $stack = [];
        $this->assertEquals(0, count($stack));

        array_push($stack, 'This is It');
        $this->assertEquals('This is It', $stack[count($stack)-1]);
       
    }
}