<?php

declare(strict_types=1);

use EscCompany\GoodCodeParser\GoodCodeParser;
use EscCompany\GoodCodeParser\Parsers\SetGood;
use PHPUnit\Framework\TestCase;

class SetGoodTest extends TestCase
{
    public function test_파싱이_되는지()
    {
        // Arrange
        $input = 'set11319x1ZZ11626x1ZZ11624x1ZZ11628x1';

        $output = [
            '11319' => 1,
            '11626' => 1,
            '11624' => 1,
            '11628' => 1,
        ];

        // Act
        $parsed = (new GoodCodeParser($input))->with(SetGood::class)->get();

        // Assert
        $this->assertEquals($parsed, $output);
    }
}
