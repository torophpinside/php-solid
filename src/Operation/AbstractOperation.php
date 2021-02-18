<?php

declare(strict_types=1);

namespace Solid\Operation;

class AbstractOperation
{
    protected int $a;

    protected int $b;

    /**
     * AbstractOperation constructor.
     * @param int $a
     * @param int $b
     */
    public function __construct(int $a, int $b)
    {
        $this->a = $a;
        $this->b = $b;
    }
}
