# Good Code Parser

![PHP Composer](https://github.com/esc-company/good-code-parser/workflows/PHP%20Composer/badge.svg)
[![Latest Stable Version](https://poser.pugx.org/esc-company/good-code-parser/v)](//packagist.org/packages/esc-company/good-code-parser)
[![StyleCI](https://github.styleci.io/repos/266034397/shield?branch=master)](https://github.styleci.io/repos/266034397)

ESC-Company suggests general code-spec, parser and implement spec.

## Install

```bash
composer require esc-company/good-code-parser
```

## Usage

```php
<?php

$parsed = (new GoodCodeParser('set7369x4ZZ4235x6'))
            ->with(SetGood::class)
            ->get();

// ['7369'=>4,'4235'=>6]

$parsed = (new GoodCodeParser('com2'))->with(ComplexGood::class, [
    1 => 'set11319x1ZZ11626x1ZZ11624x1ZZ11628x1',
    2 => 'set11318x1ZZP3800x1ZZP7776x1ZZP9732x1',
    3 => 'set11318x1ZZP2526x1ZZP7776x1'
])->get();

// set11318x1ZZP3800x1ZZP7776x1ZZP9732x1

$parsed = (new GoodCodeParser('gif1'))->with(GiftGood::class, [
    1 => 'set11319x1ZZ11626x1ZZ11624x1ZZ11628x1',
    2 => 'set11318x1ZZP3800x1ZZP7776x1ZZP9732x1',
    3 => 'set11318x1ZZP2526x1ZZP7776x1'
])->get();

// set11319x1ZZ11626x1ZZ11624x1ZZ11628x1

$parsed = (new OptionCodeParser($inOptionCode, $inOptionName))
    ->with(OptionGood::class, [
            ['id' => 1, 'code' => 'OPT1', 'name' => '[네츄럴코어] 미트스틱/씨푸드스틱 6종 20개 소프트간식 모음'],
            ['id' => 2, 'code' => 'OPT2', 'name' => '[5월사료 20%쿠폰]위시본 연어/소고기/양고기/오리고기 강아지사료 5.4kg/10.89kg 모음'],
        ], [
            ['code' => 1, 'mastercode' => 'COM4', 'name' => '하루애 습식사료 4종 모음(1kg)'],
            ['code' => 1, 'mastercode' => '3124', 'name' => '에티펫 물티슈 및 애견 위생용품전'],
            ['code' => 1, 'mastercode' => '1234', 'name' => '(사은품7종)네츄럴코어 사료 6kg/7kg/10kg'],
            ['code' => 1, 'mastercode' => '4324', 'name' => '(사은품6종 증정)네츄럴코어 유기농 사료 2kg/1.6kg'],
            ['code' => 2, 'mastercode' => '2314', 'name' => '(인기상품 28종)강아지 배변패드/기저귀'],
            ['code' => 2, 'mastercode' => '43123', 'name' => '댕댕이가 환장하는 인기 덴탈껌 47종 모음'],
            ['code' => 2, 'mastercode' => '42342', 'name' => '(닭고기/오리고기 41종) 강아지 대용량 간식 300g'],
        ])
    ->get();

// COM4

```

## Support codes

| Type           | Notation | Description                                                                                                                      | Implement |
| -------------- | -------- | -------------------------------------------------------------------------------------------------------------------------------- | --------- |
| `Normal Code`  | -        | Match only one good                                                                                                              | Yes       |
| `Set Code`     | SET      | Match one more good, max 255 characters                                                                                          | Yes       |
| `Complex Code` | COM      | Shorten code for `Set Code`                                                                                                      | Yes       |
| `Gift Code`    | GIF      | Alias `Complex Code`                                                                                                             | Yes       |
| `Option Code`  | OPT      | Very complicated code. Not mastercode, but code + search name.(eq. wemakeprice, naver petWindow and all most OpenMarket options) | Yes       |
