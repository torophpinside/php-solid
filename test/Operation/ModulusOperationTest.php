<?php

namespace Operation;

use PHPUnit\Framework\TestCase;
use Solid\Exception\ZeroDivisionException;
use Solid\Operation\OperationFactory;

class ModulusOperationTest extends TestCase
{
    /**
     * @test
     * @dataProvider operations
     */
    public function assertItRunsProperly($dividend, $divisor, $remainder)
    {
        $operation = OperationFactory::getOperation($dividend, $divisor, '%');
        $result = $operation->execute();
        self::assertEquals($remainder, $result);
    }

    /** @test */
    public function itThrowsAnExceptionIfADivisionByZeroIsPerformed()
    {
        self::expectException(ZeroDivisionException::class);

        $operation = OperationFactory::getOperation(9, 0, '%');
        $operation->execute();
    }


    public function operations(): array
    {
        return [
            [2, 2, 0],
            [10, 5, 0],
            [9, 4, 1],
            [6, 4, 2],
            [100, 10, 0],
            [100, 1000, 100]
        ];
    }
}