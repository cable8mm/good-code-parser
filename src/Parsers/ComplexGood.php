<?php

namespace Cable8mm\GoodCodeParser\Parsers;

use Cable8mm\GoodCodeParser\Contracts\Parser;
use InvalidArgumentException;

final class ComplexGood implements Parser
{
    const PREFIX = 'com';

    /**
     * {@inheritDoc}
     *
     * @throws InvalidArgumentException
     */
    public static function parse(string $code, ?array $goods = null): array|string
    {
        if (is_null($goods)) {
            throw new InvalidArgumentException('$goods must be an array');
        }

        $key = preg_replace('/^'.self::PREFIX.'/i', '', $code);

        return $goods[$key];
    }
}
