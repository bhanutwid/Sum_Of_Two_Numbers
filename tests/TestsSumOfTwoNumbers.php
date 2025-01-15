<?php
use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/src/SumOfTwoNumbers.php';
class TestsSumOfTwoNumbers extends TestCase 
{
    public function testSumOfTwoIntegerNumbers() 
    {
        $this->assertEquals(5, SumOfTwoNumbers(2, 3)); 
    }
    public function testSumWithNegativeNumbers() 
    {
        $this->assertEquals(1, SumOfTwoNumbers(-2, 3));
    }
    public function testSumWithFloatNumbers() 
    {
        $this->assertEquals(6, SumOfTwoNumbers(2.5, 3.5));
    }
    function testExceptionOfNonNumericType() 
    {
        $this->expectException(InvalidArgumentException::class);
        SumOfTwoNumbers('b', "$");
    }
    public function testSumWithZero() 
    {
        $this->assertEquals(0, SumOfTwoNumbers(0, 0));
    }
    public function testSumWithLargeNumbers() 
    {
        $this->assertEquals(300000, SumOfTwoNumbers(100000, 200000));
    }
}
