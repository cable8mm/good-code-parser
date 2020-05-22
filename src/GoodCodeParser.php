<?php

namespace EscCompany\GoodCodeParser;

class GoodCodeParser
{
    /**
     * @var string Good code before parsing
     */
    private $parse;

    /**
     * @var string|array Good code after parsing
     */
    private $parsed;

    public function __construct(string $parse)
    {
        $this->parse = $parse;
    }

    /**
     * @param string
     * @return $this
     *
     * @var $parser EscCompany\GoodCodeParser\Contracts\Parser
     */
    public function parsing($parser)
    {
        $this->parsed = $parser::parse($this->parse);

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
