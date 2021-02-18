<?php

declare(strict_types=1);

namespace Solid\Engine;

interface EngineInterface
{
    /**
     * @return mixed
     */
    public function startup();

    /**
     * @return int
     */
    public function shutdown(): int;
}