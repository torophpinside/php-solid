<?php

declare(strict_types=1);

namespace Solid\Operation;

class SumOperation extends AbstractOperation implements OperationInterface
{
    /**
     * @return integer
     */
    public function execute(): int
    {
        return $this->a + $this->b;
    }
}
