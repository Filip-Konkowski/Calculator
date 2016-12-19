<?php

/**
 * @package calculator
 */

namespace src;

class CalculationTesting
{
    public function calculationTest($inputString, Calculator $calculator, $expectedResult)
    {
        $result = $calculator->calculation($inputString);
        if (!($result == $expectedResult)) {
            throw new \Exception("Expected result: " . $expectedResult . " your result: " . $result);

        } else {
            echo "Fine result, expected result: " . $expectedResult . " your result: " . $result;
        }
    }
}