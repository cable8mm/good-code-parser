<?php

namespace Cable8mm\GoodCodeParser\Exception;

use Exception;

class MethodNotImplementedException extends Exception
{
    /**
     * @param string $methodName The name of the method
     */
    public function __construct(string $methodName)
    {
        parent::__construct(sprintf('The %s() is not implemented.', $methodName));
    }
}
