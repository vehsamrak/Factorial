# Factorial
Tested factorialization library.


[![Build Status](https://scrutinizer-ci.com/g/Vehsamrak/Factorial/badges/build.png?b=master)](https://scrutinizer-ci.com/g/Vehsamrak/Factorial/build-status/master)
[![Code Coverage](https://scrutinizer-ci.com/g/Vehsamrak/Factorial/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/Vehsamrak/Factorial/code-structure/master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Vehsamrak/Factorial/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/Vehsamrak/Factorial/code-structure/master)

### Requirements
* PHP >= 7.0
* Composer (if you dont have composer, visit https://getcomposer.org/download)

### Installation
Install with composer: `composer require vehsamrak/factorial`

### Usage
```
use Vehsamrak\Factorial\Factorial as FactorialCalculator;

$factorialCalculator = new FactorialCalculator();
$result = $factorialCalculator->factorialize(0); // $result == 1
$result = $factorialCalculator->factorialize(3); // $result == 6
$result = $factorialCalculator->factorialize(10); // $result == 3628800 
```

### Tests
To run tests with built-in PHPUnit type: `vendor/bin/phpunit`
