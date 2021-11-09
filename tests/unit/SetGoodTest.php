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

        $expect = [
            '11319' => 1,
            '11626' => 1,
            '11624' => 1,
            '11628' => 1,
        ];

        // Act
        $parsed = (new GoodCodeParser($input))->with(SetGood::class)->get();

        // Assert
        $this->assertEquals($parsed, $expect);
    }

    public function test_세트코드_축약버전_파싱이_되는지()
    {
        // Arrange
        $input = 'set107253x1ZZ102257ZZ104128x2';
        $expect = [
            '107253' => 1,
            '102257' => 1,
            '104128' => 2,
        ];

        // Act
        $parsed = (new GoodCodeParser($input))->with(SetGood::class)->get();

        // Assert
        $this->assertEquals($parsed, $expect);
    }
}
