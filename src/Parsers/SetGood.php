<?php

namespace EscCompany\GoodCodeParser\Parsers;

use EscCompany\GoodCodeParser\Contracts\Parser;

final class SetGood implements Parser
{
    const PREFIX = 'set';
    const DELIMITER = 'ZZ';
    const DELIMITER_COUNT = 'x';

    /**
     * {@inheritdoc}
     */
    public static function parse(string $parse, $goods = null)
    {
        $escape = preg_replace('/^'.self::PREFIX.'/i', '', $parse);

        $goodCodes = explode(self::DELIMITER, $escape);

        $parcedCodes = [];

        foreach ($goodCodes as $code) {
            if (preg_match('/'.self::DELIMITER_COUNT.'/i', $code)) {
                [$k, $v] = explode(self::DELIMITER_COUNT, $code);
            } else {
                [$k, $v] = [$code, 1];
            }
            $parcedCodes[$k] = $v;
        }

        return $parcedCodes;
    }
}
