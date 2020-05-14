<?php


namespace App\Tests\Util;


use App\Util\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calculator = new Calculator();
        $result = $calculator->add(30, 45);
        $this->assertEquals(75, $result);
    }
}