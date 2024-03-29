<?php

namespace Cable8mm\GoodCodeParser\Tests;

use Cable8mm\GoodCodeParser\GoodCodeParser;
use Cable8mm\GoodCodeParser\Parsers\GiftGood;
use PHPUnit\Framework\TestCase;

class GiftGoodTest extends TestCase
{
    public function test_파싱이_되는지()
    {
        // Arrange
        $goods = [
            1 => 'set11319x1ZZ11626x1ZZ11624x1ZZ11628x1',
            2 => 'set11318x1ZZP3800x1ZZP7776x1ZZP9732x1',
            3 => 'set11318x1ZZP2526x1ZZP7776x1',
        ];

        $input = 'gif2';

        $output = 'set11318x1ZZP3800x1ZZP7776x1ZZP9732x1';

        // Act
        $parsed = (new GoodCodeParser($input))->with(GiftGood::class, $goods)->get();

        // Assert
        $this->assertEquals($parsed, $output);
    }
}
