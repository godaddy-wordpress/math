<?php

namespace SkyVerge\Math\Tests;

use SkyVerge\Math\Internal\Calculator;

/**
 * Tests for Calculator implementation detection.
 */
class CalculatorDetectTest extends \PHPUnit_Framework_TestCase
{
    public function testGetWithNoCalculatorSetDetectsCalculator()
    {
        $currentCalculator = Calculator::get();

        Calculator::set(null);
        $this->assertInstanceOf(Calculator::class, Calculator::get());

        Calculator::set($currentCalculator);
    }
}
