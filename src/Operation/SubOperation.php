<?php

declare(strict_types=1);

namespace Solid\Operation;

class SubOperation extends AbstractOperation implements OperationInterface
{
    /**
     * @return int|mixed
     */
    public function execute()
    {
        return $this->a - $this->b;
    }
}