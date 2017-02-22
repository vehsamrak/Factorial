<?php

namespace Tests;

use Vehsamrak\Factorial\Factorial;

class FactorialTest extends \PHPUnit_Framework_TestCase
{

    /** @test */
    public function factorialize_0_1()
    {
        $factorial = new Factorial();

        $factorialResult = $factorial->factorialize(0);

        $this->assertEquals(1, $factorialResult);
    }

    /** @test */
    public function factorialize_1_1()
    {
        $factorial = new Factorial();

        $factorialResult = $factorial->factorialize(1);

        $this->assertEquals(1, $factorialResult);
    }

    /** @test */
    public function factorialize_2_2()
    {
        $factorial = new Factorial();

        $factorialResult = $factorial->factorialize(2);

        $this->assertEquals(2, $factorialResult);
    }

    /** @test */
    public function factorialize_3_6()
    {
        $factorial = new Factorial();

        $factorialResult = $factorial->factorialize(3);

        $this->assertEquals(6, $factorialResult);
    }

    /** @test */
    public function factorialize_4_24()
    {
        $factorial = new Factorial();

        $factorialResult = $factorial->factorialize(4);

        $this->assertEquals(24, $factorialResult);
    }
}
