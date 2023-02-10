<?php
use PHPUnit\Framework\TestCase;

require "./src/factorial.php";


class FactorialTest extends TestCase
{
    public function testFactorial()
    {
        $factorial = new Factorial;
        $this->assertEquals(1, $factorial->factorial(0));
        $this->assertEquals(1, $factorial->factorial(1));
        $this->assertEquals(120, $factorial->factorial(5));
        $this->assertEquals($factorial->factorial(9 - 1) * 9, $factorial->factorial(9));
        $this->assertEquals(null, $factorial->factorial(-3));
        $this->assertEquals(null, $factorial->factorial(1.5));
        $this->assertEquals(null, $factorial->factorial(false));
        $this->assertEquals(null, $factorial->factorial('abc'));
    }
}
?>