# Factorial
Tested factorialization library.

### Requirements
* PHP >= 7.0
* Composer (if you dont have composer, visit https://getcomposer.org/download)

### Installation
Clone this repository: `git clone https://github.com/Vehsamrak/factorial.git factorial && cd $_`

Install with composer: `composer install`

### Usage
Import Factorial class: `use Vehsamrak\Factorial\Factorial;`

To calculate factorial use:
```
$factorial = new Factorial();
$result = $factorial->factorialize(0); // $result == 1
$result = $factorial->factorialize(3); // $result == 6
$result = $factorial->factorialize(10); // $result == 3628800 
```

### Tests
To run tests with built-in PHPUnit type: `vendor/bin/phpunit tests`
