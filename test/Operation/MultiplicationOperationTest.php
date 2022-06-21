<?php

use PHPUnit\Framework\TestCase;

class MultiplicationOperationTest extends TestCase
{
    public function testExecuteSuccess()
    {
        $operation = \Solid\Operation\OperationFactory::getOperation(5, 3, '*');
        $result = $operation->execute();
        self::assertEquals(15, $result);
    }

    public function testExecuteParamError()
    {
        self::expectException(RuntimeException::class);

        $operation = \Solid\Operation\OperationFactory::getOperation(10, 3, '*');
        $operation->execute();
    }
}
