<?php

namespace Solid\Operation;

class DivisionOperation extends AbstractOperation implements OperationInterface
{
    /**
     * @return mixed 
     * @throws RuntimeException 
     */
    public function execute()
    {
        if ($this->b === 0) {
            throw new \RuntimeException("division by zero is not allowed");
        }

        return (int)($this->a / $this->b);
    }
}
