<?php

namespace EscCompany\GoodCodeParser\Contracts;

interface Parser
{
    /**
     * Parsing
     *
     * @param string $goodCode before parsing
     * @return array|string after parsing
     *
     * @throws EscCompany\GoodCodeParser\Exception\MethodNotImplementedException
     */
    public static function parse(string $parse, $goods = null);
}
