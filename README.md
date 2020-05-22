# Good Code Parser

![PHP Composer](https://github.com/esc-company/good-code-parser/workflows/PHP%20Composer/badge.svg)
[![Latest Stable Version](https://poser.pugx.org/esc-company/good-code-parser/v)](//packagist.org/packages/esc-company/good-code-parser)

ESC-Company suggests general code-spec, parser and implement spec.

## Usage

```bash
composer require esc-company/good-code-parser
```

```php
<?php

use EscCompany\GoodCodeParser;
use EscCompany\GoodCodeParser\Parsers\SetGood;

$goodCode = 'set7369x4ZZ4235x6';

$goodCodes = (new GoodCodeParser($goodCode))
            ->parsing(SetGood::class)
            ->get();

// ['7369'=>4,'4235'=>6]
```

## Support codes

| Type         | Notation | Description | Implement |
| ------------ | -------- | ----------- | --------- |
| Set Code     | SET      |             | Yes       |
| Complex Code | COM      |             | No        |
| Gift Code    | GIF      |             | No        |
| Option Code  | OPT      |             | No        |
