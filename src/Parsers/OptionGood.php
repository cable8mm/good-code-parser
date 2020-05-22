<?php

namespace EscCompany\GoodCodeParser\Parsers;

use EscCompany\GoodCodeParser\Contracts\OptionParser;
use InvalidArgumentException;

final class OptionGood implements OptionParser
{
    const PREFIX = 'opt';

    /**
     * {@inheritDoc}
     */
    public static function parse(string $code, string $name, array $goods, array $options)
    {
        $optionGood = null;

        foreach ($goods as $good) {
            if ($code == $good['code']) {
                $optionGood = $good;
            }
        }

        if (empty($optionGood)) {
            throw new InvalidArgumentException(__METHOD__ . ' There is no good code');
        }

        foreach ($options as $option) {
            if ($option['code'] == $optionGood['id'] && $option['name'] == $name) {
                return $option['mastercode'];
            }
        }

        if (is_null($optionGood)) {
            throw new InvalidArgumentException(__METHOD__ . ' There is no option good code');
        }
    }
}
