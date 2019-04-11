<?php

use PHPUnit\Framework\TestCase;

/**
* @coversDefaultClass CodeClimate\CodeClimateDemo\Hello
*/
class HelloTest extends TestCase
{
    protected $hello;

    protected function setUp(): void
    {
        $this->hello = new \CodeClimate\CodeClimateDemo\Hello();
    }

    /**
    * @covers :: world
    */
    public function testWorld()
    {
        $this->assertSame('world', $this->hello->world());
    }
}
