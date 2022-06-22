<?php

namespace Solid\Operation;

class ModulusOperation extends AbstractOperation implements OperationInterface
{
    public function execute(): int
    {
        if ($this->b) {
            throw new \RuntimeException("division by zero is not allowed");
        }
        
        return $this->a % $this->b;
    }
}
