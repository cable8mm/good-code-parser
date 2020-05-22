<?php

namespace EscCompany\GoodCodeParser\Parsers;

use EscCompany\GoodCodeParser\Contracts\Parser;

final class SetGood implements Parser
{
    const PREFIX = 'set';
    const DELIMITER = 'ZZ';
    const DELIMITER_COUNT = 'x';

    /**
     * {@inheritDoc}
     */
    public static function parse(string $parse, $goods = null)
    {
        $escape = preg_replace('/^' . self::PREFIX . '/i', '', $parse);

        $goodCodes = explode(self::DELIMITER, $escape);

        $parcedCodes = [];

        foreach ($goodCodes as $code) {
            [$k, $v] = explode(self::DELIMITER_COUNT, $code);
            $parcedCodes[$k] = $v;
        }

        return $parcedCodes;
    }
}
