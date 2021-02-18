<?php

declare(strict_types=1);

namespace Solid\Executor;

use Solid\Engine\EngineInterface;

class Executor
{
    private EngineInterface $engine;

    /**
     * Executor constructor.
     * @param EngineInterface $engine
     */
    public function __construct(EngineInterface $engine)
    {
        $this->engine = $engine;
    }

    /**
     *
     */
    public function run()
    {
        $this->engine->startup();
        $result = $this->engine->shutdown();
        echo $result;
    }
}