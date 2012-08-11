<?php

namespace App;

use App\Calculator;

class CalculatorTest extends \PHPUnit_Framework_TestCase
{
    public function testTrue()
    {
        $calculator = new Calculator();

        $actual = $calculator->add(3, 4);

        $this->assertEquals(7, $actual);
    }

    public function testSubstraction()
    {
        $calculator = new Calculator();

        $actual = $calculator->substract(7,4);

        $this->assertEquals(3, $actual);
    }

    public function testFibonnaci()
    {
        $calculator = new Calculator();

        foreach(range(1,100) as $i) {
            $this->assertEquals($i, $calculator->fibonnaci($i));
        }

    }
}
