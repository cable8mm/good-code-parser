<?php

namespace Cable8mm\GoodCodeParser\Contracts;

interface Parser
{
    /**
     * Parsing
     *
     * @param  string  $goodCode  before parsing
     * @return array|string after parsing
     *
     * @throws Cable8mm\GoodCodeParser\Exception\MethodNotImplementedException
     */
    public static function parse(string $parse, $goods = null);
}
