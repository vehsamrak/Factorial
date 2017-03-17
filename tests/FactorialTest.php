<?php

namespace Tests;

use Vehsamrak\Factorial\Factorial;

class FactorialTest extends \PHPUnit_Framework_TestCase
{

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

    public function provideNegativeNumbers(): array
    {
        return [
            [-1],
            [-2],
            [-3],
            [-4],
            [-5],
            [-6],
            [-7],
            [-8],
            [-9],
            [-10],
        ];
    }

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

    /**
     * @test
     * @dataProvider provideNegativeNumbers
     */
    public function factorialize_negativeNumber_wrongArgumentException(int $numberToFactorialize): void
    {
        $factorial = new Factorial();

        $this->expectException(\InvalidArgumentException::class);
        $factorial->factorialize($numberToFactorialize);
    }
}
