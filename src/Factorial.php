<?php

namespace OptionBundle\Service;

/**
 * @author Vehsamrak
 */
class Factorial
{

    public function factorialize(int $integer): int
    {
        $factorial = 1;

        for ($i = 1; $i <= $integer; $i++) {
            $factorial *= $i;
        };

        return $factorial;
    }
}
