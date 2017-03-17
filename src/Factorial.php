<?php

namespace Vehsamrak\Factorial;

/**
 * @author Vehsamrak
 */
class Factorial
{

    public function factorialize(int $integer): int
    {
        if ($integer < 0) {
            throw new \InvalidArgumentException('Negative number can not be processed!');
        }

        $factorial = 1;

        for ($i = 1; $i <= $integer; $i++) {
            $factorial *= $i;
        };

        return $factorial;
    }
}
