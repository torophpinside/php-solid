<?php

declare(strict_types=1);

namespace Solid\Operation;

use RuntimeException;

abstract class OperationFactory
{
    private const SUM_OPERATION = '+';
    private const SUB_OPERATION = '-';
    private const MULTI_OPERATION = '*';

    /**
     * @param integer $a
     * @param integer $b
     * @param string $operation
     * @return OperationInterface
     */
    public static function getOperation(int $a, int $b, string $operation): OperationInterface
    {
        if ($operation === self::SUM_OPERATION) {
            return self::getSumOperation($a, $b);
        }
        if ($operation === self::SUB_OPERATION) {
            return self::getSubOperation($a, $b);
        }
        if ($operation === self::MULTI_OPERATION) {
            return self::getMultiOperation($a, $b);
        }

        throw new RuntimeException('operation not implemented');
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

    /**
     * @param int $a
     * @param int $b
     * @return OperationInterface
     */
    private static function getMultiOperation(int $a, int $b): OperationInterface
    {
        return new MultiplicationOperation($a, $b);
    }
}
