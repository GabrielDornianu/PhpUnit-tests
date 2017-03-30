<?php

class CalculatorTest extends PHPUnit_Framework_TestCase
{
  public function testCalculations()
  {
    $calculator = new Calculator();

    $this->assertEquals(4, $calculator->add(2,2));
    $this->assertEquals(42, $calculator->equation(10, 22));
  }
}
