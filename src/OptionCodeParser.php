<?php

namespace EscCompany\GoodCodeParser;

class OptionCodeParser
{
    /**
     * @var string Good code before parsing
     */
    private $parse;

    /**
     * @var string Good name before parsing
     */
    private $name;

    /**
     * @var string|array Good code after parsing
     */
    private $parsed;

    public function __construct(string $parse, string $name)
    {
        $this->parse = $parse;
        $this->name = $name;
    }

    /**
     * @param string
     * @return $this
     *
     * @var $parser EscCompany\GoodCodeParser\Contracts\OptionParser
     */
    public function with($parser, array $goods, array $options)
    {
        $this->parsed = $parser::parse($this->parse, $this->name, $goods, $options);

        return $this;
    }

    /**
     * Return code.
     *
     * @return array|string
     */
    public function get()
    {
        return $this->parsed;
    }
}
