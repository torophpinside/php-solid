<?php

declare(strict_types=1);

namespace Solid\Operation;

abstract class OperationFactory
{
    const SUM_OPERATION = '+';
    const SUB_OPERATION = '-';

    public static function getOperation(int $a, int $b, string $operation): OperationInterface
    {
        if ($operation === self::SUM_OPERATION) {
            return self::getSumOperation($a, $b);
        }
        if ($operation === self::SUB_OPERATION) {
            return self::getSubOperation($a, $b);
        }

        throw new \RuntimeException('operation not implemented');
    }

    /**
     * @param int $a
     * @param int $b
     * @return OperationInterface
     */
    private static function getSumOperation(int $a, int $b): OperationInterface
    {
        return new SumOperation($a, $b);
    }

    /**
     * @param int $a
     * @param int $b
     * @return OperationInterface
     */
    private static function getSubOperation(int $a, int $b): OperationInterface
    {
        return new SubOperation($a, $b);
    }
}