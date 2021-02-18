<?php

declare(strict_types=1);

namespace Solid\Operation;

interface OperationInterface
{
    /**
     * @return mixed
     */
    public function execute();
}