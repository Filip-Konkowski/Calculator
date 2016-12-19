<?php
/**
 * Created by PhpStorm.
 * User: filip
 * Date: 19.12.16
 * Time: 15:58
 */

namespace src;

class Operation
{
    
    private $firstNumber;
    private $secondNumber;
    private $operator;
    
    public function __construct($firstNumber, $secondNumber, $operator)
    {
        $this->firstNumber = $firstNumber;
        $this->secondNumber = $secondNumber;
        $this->operator = $operator;
    }
    
    public function resultOfOperation() {}
}