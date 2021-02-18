<?php

use Solid\Operation\SumOperation;
use PHPUnit\Framework\TestCase;

class SumOperationTest extends TestCase
{
    public function testSumOperationSuccess()
    {
        $operation = \Solid\Operation\OperationFactory::getOperation(5, 3, '+');
        $result = $operation->execute();
        self::assertEquals(8, $result);
    }
}
