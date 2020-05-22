<?php

namespace EscCompany\GoodCodeParser\Parsers;

use EscCompany\GoodCodeParser\Contracts\Parser;
use EscCompany\GoodCodeParser\Exception\MethodNotImplementedException;

final class OptionGood implements Parser
{
    /**
     * {@inheritDoc}
     */
    public static function parse(string $code, $goods = null)
    {
        throw new MethodNotImplementedException(__METHOD__);
    }
}
