<?php

namespace Solid\Operation;

use Solid\Exception\ZeroDivisionException;

class DivisionOperation extends AbstractOperation implements OperationInterface
{
    /**
     * @return int
     * @throws ZeroDivisionException
     */
    public function execute(): int
    {
        if ($this->b === 0) {
            throw new ZeroDivisionException();
        }

        return (int)($this->a / $this->b);
    }
}
