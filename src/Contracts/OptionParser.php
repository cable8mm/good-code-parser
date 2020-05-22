<?php

namespace EscCompany\GoodCodeParser\Contracts;

interface OptionParser
{
    /**
     * Undocumented function
     *
     * @param string $code  before parsing
     * @param string $name good-name
     * @param array $goods option-goods
     * @param array $options option-good-options
     * @return string|void code after parsing
     */
    public static function parse(string $code, string $name, array $goods, array $options);
}
