<?php

namespace EscCompany\GoodCodeParser\Parsers;

use EscCompany\GoodCodeParser\Contracts\Parser;

final class GiftGood implements Parser
{
    const PREFIX = 'gif';

    /**
     * {@inheritDoc}
     */
    public static function parse(string $code, $goods = null)
    {
        $comCode = preg_replace('/^' . self::PREFIX . '/', ComplexGood::PREFIX, $code);

        return ComplexGood::parse($comCode, $goods);
    }
}
