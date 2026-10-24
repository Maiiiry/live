---
title: "TemplateChecks"
description: "The components' templates in `vendor/bin/io-check` (composer.json names it under extra.io.checks): what Problems finds, and each template as the PHP PHPStan reads, with `$this` as its component, private members included."
order: 100
generated: true
---

`Io\Live\TemplateChecks` · final class · namespace [`Io\Live`](index.md)

```php
final class TemplateChecks implements \Io\View\Checks
```

Implements `Io\View\Checks`

The components' templates in `vendor/bin/io-check` (composer.json names it under
extra.io.checks): what Problems finds, and each template as the PHP PHPStan reads, with `$this` as its
component, private members included.

## Methods

### __construct()

```php
public function __construct(private readonly string $root)
```

**Parameters**

- `$root` `string`

### problems()

```php
public function problems(): array
```

What the package finds in its templates without PHPStan: syntax, names, wiring.

**Returns** `list<array{file: string, line: int, message: string, severity: 'error'|'warning'}>`

### generate()

```php
public function generate(string $directory): array
```

Writes its templates into $directory as the PHP PHPStan reads, each line where the template has it, and
leaves out those with an error problems() reports.

**Parameters**

- `$directory` `string`

**Returns** `array<string, string>`: generated file => template file
