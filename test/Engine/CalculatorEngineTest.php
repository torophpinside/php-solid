<?php


use Solid\Engine\CalculatorEngine;
use PHPUnit\Framework\TestCase;

class CalculatorEngineTest extends TestCase
{
    public function testShutdownSuccess()
    {
        $operation = \Solid\Operation\OperationFactory::getOperation(5, 3, '+');

        $calculatorEng = new \Solid\Engine\CalculatorEngine($operation);
        $calculatorEng->startup();

        $result = $calculatorEng->shutdown();
        $this->assertEquals(8, $result);
    }

    public function testShutdownWithSubSuccess()
    {
        $operation = \Solid\Operation\OperationFactory::getOperation(5, 3, '-');

        $calculatorEng = new \Solid\Engine\CalculatorEngine($operation);
        $calculatorEng->startup();

        $result = $calculatorEng->shutdown();
        $this->assertEquals(2, $result);
    }
}
