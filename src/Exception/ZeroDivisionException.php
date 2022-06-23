<?php

namespace Solid\Exception;

use Exception;

class ZeroDivisionException extends Exception
{
    public const DIVISION_BY_ZERO_IS_NOT_ALLOWED_MESSAGE = "Division by zero is not allowed.";

    public function __construct()
    {
        parent::__construct(self::DIVISION_BY_ZERO_IS_NOT_ALLOWED_MESSAGE);
    }
}
