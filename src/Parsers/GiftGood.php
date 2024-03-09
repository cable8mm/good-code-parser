<?php

namespace Cable8mm\GoodCodeParser\Parsers;

use Cable8mm\GoodCodeParser\Contracts\Parser;

final class GiftGood implements Parser
{
    const PREFIX = 'gif';

    /**
     * {@inheritDoc}
     */
    public static function parse(string $code, ?array $goods = null): array|string
    {
        $comCode = preg_replace('/^'.self::PREFIX.'/i', ComplexGood::PREFIX, $code);

        return ComplexGood::parse($comCode, $goods);
    }
}
