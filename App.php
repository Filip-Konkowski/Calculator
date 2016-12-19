<?php

/**
 * @package calculator
 */

require(__DIR__.'\src\Calculator.php');
require(__DIR__.'\src\CalculationTesting.php');
require(__DIR__.'\src\Operation.php');

class App
{

    public function start()
    {
        $calculator = new src\Calculator();
        $calculatorTester = new \src\CalculationTesting();
        
        $tests = [

            ['result' => '1', 'equation' => '1'],
            ['result' => '', 'equation' => ''],
            ['result' => '2', 'equation' => '2'],
            ['result' => '12', 'equation' => '12'],
            ['result' => '2212', 'equation' => '2212'],
            ['result' => '12', 'equation' => '   12  '],
            ['result' => '4', 'equation' => '2+2'],
            ['result' => '20', 'equation' => '22 - 2'],
            ['result' => '44', 'equation' => '22+22'],
            ['result' => '1', 'equation' => '2:2'],
            ['result' => '0', 'equation' => '0*2'],
            ['result' => '55', 'equation' => '22+22+11'],
            ['result' => '33', 'equation' => '22+22-11'],
            ['result' => '24', 'equation' => '11+12-13+14'],
            ['result' => '30', 'equation' => '11+12-13+14+6'],
            ['result' => '33', 'equation' => '11+12-13+14+6+3'],
            ['result' => '33', 'equation' => '11+12-13+14+6+3'],
            ['result' => '5', 'equation' => '10:5+1*3'],
            ['result' => '20', 'equation' => '10+10:5+1*3+5'],
            ['result' => '10', 'equation' => '10-10:5-1*3+5'],

        ];


        foreach ($tests as $test) {
            $equ = $test['equation'];
            $result = $test['result'];
            try {
                $calculatorTester->calculationTest($equ, $calculator, $result);
                echo "<br>\n";
            } catch (Exception $e) {
                echo 'WRONG CALCULATION: ' . $e->getMessage() . "<br>\n";
            }
        }
    }
}

$app = new App();
$app->start();
