<?php
require './src/Factorial.php';
use PHPUnit\Framework\TestCase;
class FactorialTest extends  TestCase{
    public function testFactorial()
    {
        # code...
        $factorial=new Factorial();
        $this->assertEquals(1, $factorial->factorialFunction(0));
        $this->assertEquals(1, $factorial->factorialFunction(1));
        $this->assertEquals(120, $factorial->factorialFunction(5));   
        $this->assertEquals(null,$factorial->factorialFunction(-3));
        $this->assertEquals(null,$factorial->factorialFunction(1.5));
        $this->assertEquals(null,$factorial->factorialFunction(false));
        $this->assertEquals(null,$factorial->factorialFunction('abc'));   
    }
}





?>