<?php

namespace Solid\Operation;

use Solid\Exception\ZeroDivisionException;

class ModulusOperation extends AbstractOperation implements OperationInterface
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
        
        return $this->a % $this->b;
    }
}
