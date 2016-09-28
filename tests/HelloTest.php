<?php

class HelloTest extends \PHPUnit_Framework_TestCase
{

    public function testAssertTrue()
    {
        $this->assertTrue(true, 'False is not true');
    }

    public function testAssertEquals()
    {
        $expected = 'foo';
        $actual = 'foo';
        $this->assertEquals($expected, $actual, 'Expected is not equal actual');
    }
}