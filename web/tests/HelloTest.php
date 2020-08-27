<?php
use PHPUnit\Framework\TestCase;
use SD\Hello;

class HelloTest extends TestCase
{
    public function testPrintsHello () : void
    {
        $hello = new Hello();
        $this->assertEquals('Hello!', $hello->getHello());
    }
}