<?php

namespace Tests;

use Vehsamrak\Factorial\Factorial;

class FactorialTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     * @dataProvider provideFactorialsWithResults
     */
    public function factorialize_numberToFactorialize_factorizationResult(int $numberToFactorialize, int $result): void
    {
        $factorial = new Factorial();

        $factorialResult = $factorial->factorialize($numberToFactorialize);

        $this->assertEquals($result, $factorialResult);
    }

    public function provideFactorialsWithResults(): array
    {
        return [
            [0, 1],
            [1, 1],
            [2, 2],
            [3, 6],
            [4, 24],
            [5, 120],
            [6, 720],
        ];
    }
}
