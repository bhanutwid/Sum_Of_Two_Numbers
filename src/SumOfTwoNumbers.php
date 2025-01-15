<?php
function SumOfTwoNumbers($num1, $num2) 
{
    if (!is_numeric($num1) || !is_numeric($num2)) 
    {
        throw new InvalidArgumentException('Both arguments should be numbers');
    }
    return $num1 + $num2; 
}
