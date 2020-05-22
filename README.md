# Good Code Parser

![PHP Composer](https://github.com/esc-company/good-code-parser/workflows/PHP%20Composer/badge.svg)
[![Latest Stable Version](https://poser.pugx.org/esc-company/good-code-parser/v)](//packagist.org/packages/esc-company/good-code-parser)

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

```

## Support codes

| Type         | Notation | Description | Implement |
| ------------ | -------- | ----------- | --------- |
| Set Code     | SET      |             | Yes       |
| Complex Code | COM      |             | No        |
| Gift Code    | GIF      |             | No        |
| Option Code  | OPT      |             | No        |
