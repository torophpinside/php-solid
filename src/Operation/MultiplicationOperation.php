<?php

namespace Solid\Operation;

class MultiplicationOperation extends AbstractOperation implements OperationInterface
{
    /**
     * @return int
     */
    public function execute(): int
    {
        if ($this->a === 10) {
            throw new \RuntimeException('param a cannot be 10');
        }

        return $this->a * $this->b;
    }
}