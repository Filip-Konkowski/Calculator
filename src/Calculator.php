<?php

/**
 * @package calculator
 */

namespace src;

include_once(__FILE__ . 'Operation.php');

class Calculator
{
    public function calculation($string)
    {
        $numbers = [];
        $operations = [];
        
        $exploded = preg_split('@(\+|\-|\*|\:)@', $string, -1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
        
        foreach ($exploded as $key => $element) {
            if ($element === '*' || $element === ':') {
                $operation = new Operation($exploded[$key - 1], $exploded[$key + 1], $element);
                $result = $operation->resultOfOperation();
                unset($exploded[$key - 1]);
                unset($exploded[$key]);
                unset($exploded[$key + 1]);
                $exploded[$key + 1] = $result;
            }
        }
        
        $afterFirstIteration = array_values($exploded);
        
        foreach ($afterFirstIteration as $key => $element) {
            if ($element === '-' || $element === '+') {
                $operation = new Operation($afterFirstIteration[$key - 1], $afterFirstIteration[$key + 1], $element);
                $result = $operation->resultOfOperation();
                unset($afterFirstIteration[$key - 1]);
                unset($afterFirstIteration[$key]);
                unset($afterFirstIteration[$key + 1]);
                $afterFirstIteration[$key + 1] = $result;
            }
        }
        $finalResult = array_values($afterFirstIteration);
        
        return $finalResult[0];
        
    }
    
}