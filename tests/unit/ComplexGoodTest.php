<?php

declare(strict_types=1);

use EscCompany\GoodCodeParser\Parsers\ComplexGood;
use EscCompany\GoodCodeParser\GoodCodeParser;
use PHPUnit\Framework\TestCase;

class ComplexGoodTest extends TestCase
{
    public function test_파싱이_되는지()
    {
        // Arrange
        $goods = [
            1 => 'set11319x1ZZ11626x1ZZ11624x1ZZ11628x1',
            2 => 'set11318x1ZZP3800x1ZZP7776x1ZZP9732x1',
            3 => 'set11318x1ZZP2526x1ZZP7776x1'
        ];

        $input = 'com2';

        $output = 'set11318x1ZZP3800x1ZZP7776x1ZZP9732x1';

        // Act
        $parsed = (new GoodCodeParser($input))->with(ComplexGood::class, $goods)->get();

        // Assert
        $this->assertEquals($parsed, $output);
    }
}
