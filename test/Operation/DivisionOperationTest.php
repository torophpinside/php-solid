<?php

namespace Operation;

use PHPUnit\Framework\TestCase;
use RuntimeException;
use Solid\Exception\ZeroDivisionException;
use Solid\Operation\OperationFactory;

class DivisionOperationTest extends TestCase
{
    /** 
     * @test
     * @dataProvider operations
     */
    public function assertItRunsProperly($dividend, $divisor, $quotient)
    {
        $operation = OperationFactory::getOperation($dividend, $divisor, '/');
        $result = $operation->execute();
        self::assertEquals($quotient, $result);
    }

    /** @test */
    public function itThrowsAnExceptionIfADivisionByZeroIsPerformed()
    {
        self::expectException(ZeroDivisionException::class);

        $operation = OperationFactory::getOperation(9, 0, '/');
        $operation->execute();
    }
    
    public function operations(): array
    {
        return [
            [2, 2, 1],
            [10, 5, 2],
            [9, 3, 3],
            [6, 2, 3],
            [100, 10, 10]
        ];
    }
}
