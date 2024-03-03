<?php

namespace Cable8mm\GoodCodeParser\Tests;

use Cable8mm\GoodCodeParser\OptionCodeParser;
use Cable8mm\GoodCodeParser\Parsers\OptionGood;
use PHPUnit\Framework\TestCase;

class OptionGoodTest extends TestCase
{
    public function test_파싱이_되는지()
    {
        // Arrange
        $optionGoods = [
            ['id' => 1, 'code' => 'OPT1', 'name' => '[네츄럴코어] 미트스틱/씨푸드스틱 6종 20개 소프트간식 모음'],
            ['id' => 2, 'code' => 'OPT2', 'name' => '[5월사료 20%쿠폰]위시본 연어/소고기/양고기/오리고기 강아지사료 5.4kg/10.89kg 모음'],
        ];

        $optionGoodOptions = [
            ['code' => 1, 'mastercode' => 'COM4', 'name' => '하루애 습식사료 4종 모음(1kg)'],
            ['code' => 1, 'mastercode' => '3124', 'name' => '에티펫 물티슈 및 애견 위생용품전'],
            ['code' => 1, 'mastercode' => '1234', 'name' => '(사은품7종)네츄럴코어 사료 6kg/7kg/10kg'],
            ['code' => 1, 'mastercode' => '4324', 'name' => '(사은품6종 증정)네츄럴코어 유기농 사료 2kg/1.6kg'],
            ['code' => 2, 'mastercode' => '2314', 'name' => '(인기상품 28종)강아지 배변패드/기저귀'],
            ['code' => 2, 'mastercode' => '43123', 'name' => '댕댕이가 환장하는 인기 덴탈껌 47종 모음'],
            ['code' => 2, 'mastercode' => '42342', 'name' => '(닭고기/오리고기 41종) 강아지 대용량 간식 300g'],
        ];

        $inOptionCode = 'OPT1';
        $inOptionName = '하루애 습식사료 4종 모음(1kg)';

        $output = 'COM4';

        // Act
        $parsed = (new OptionCodeParser($inOptionCode, $inOptionName))->with(OptionGood::class, $optionGoods, $optionGoodOptions)->get();

        // Assert
        $this->assertEquals($parsed, $output);
    }
}
