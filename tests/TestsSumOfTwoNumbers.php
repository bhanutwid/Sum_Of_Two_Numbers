<?php
use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/src/SumOfTwoNumbers.php';
class TestsSumOfTwoNumbers extends TestCase {
    public function testSumOfTwoIntegerNumbers() {
        $this->assertEquals(5, SumOfTwoNumbers(2, 3)); 
    }
}
