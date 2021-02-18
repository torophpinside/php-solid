<?php

declare(strict_types=1);

namespace Solid\Operation;

class SumOperation extends AbstractOperation implements OperationInterface
{
    /**
     * @return int
     */
    public function execute()
    {
        return $this->a + $this->b;
    }
}