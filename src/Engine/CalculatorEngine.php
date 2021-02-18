<?php

declare(strict_types=1);

namespace Solid\Engine;

use Solid\Operation\OperationInterface;

class CalculatorEngine implements EngineInterface
{
    /**
     * @var OperationInterface
     */
    private OperationInterface $operation;

    private int $result;

    /**
     * CalculatorEngine constructor.
     * @param OperationInterface $operation
     */
    public function __construct(OperationInterface $operation)
    {
        $this->operation = $operation;
    }

    /**
     * @return mixed
     */
    public function startup()
    {
        $this->result = $this->operation->execute();
    }

    /**
     * @return int
     */
    public function shutdown(): int
    {
        return $this->result;
    }
}