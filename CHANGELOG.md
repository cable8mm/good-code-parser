# Release Notes

## v0.8 - 2023-07-19

### What's Changed

- Change namespace by @cable8mm in https://github.com/cable8mm/good-code-parser/pull/1

### New Contributors

- @cable8mm made their first contribution in https://github.com/cable8mm/good-code-parser/pull/1

**Full Changelog**: https://github.com/cable8mm/good-code-parser/compare/0.7.1...v0.8

## v0.7.1 - 2021-11-09

Feature : Setcode default value. The patch apply setcode default value.

```php
    public function test_세트코드_축약버전_파싱이_되는지()
    {
        // Arrange
        $input = 'set107253x1ZZ102257ZZ104128x2';
        $expect = [
            '107253' => 1,
            '102257' => 1, // 이 값은 코드에 없기 때문에 1(default value)로 처리됨.
            '104128' => 2,
        ];

        // Act
        $parsed = (new GoodCodeParser($input))->with(SetGood::class)->get();

        // Assert
        $this->assertEquals($parsed, $expect);
    }
```

## v0.7.0 - 2020-05-22

Launch code parser for Ecommerce
