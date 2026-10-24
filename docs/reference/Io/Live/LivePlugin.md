---
title: "LivePlugin"
description: "Register with `$app->plugin(new LivePlugin([AddToCart::class, CartBadge::class]))`: classes with a #[Component] attribute, and only these can be created; the browser names them by selector."
order: 100
generated: true
---

`Io\Live\LivePlugin` · final class · namespace [`Io\Live`](index.md)

```php
final class LivePlugin extends \Io\Plugin\PluginBase implements \Io\Plugin\ClientAsset, \Io\Plugin\ResponseHook, \Io\Plugin\ViewHelper
```

Extends `Io\Plugin\PluginBase`  
Implements `Io\Plugin\ClientAsset`, `Io\Plugin\ResponseHook`, `Io\Plugin\ViewHelper`

Register with `$app->plugin(new LivePlugin([AddToCart::class, CartBadge::class]))`: classes with a #[Component]
attribute, and only these can be created; the browser names them by selector. A plugin brings its own through
the Components service. Adds
`$this->live('app-add-to-cart', $inputs)` and `<app-add-to-cart product="3"></app-add-to-cart>` for views, the WebSocket route `/_live` (LiveController) and the client
script. Runs under Tenma only.

## Methods

### __construct()

```php
public function __construct(array $components = [])
```

**Parameters**

- `$components` `list<class-string>`: Classes with a #[Component] attribute; other plugins add theirs to Components

### middlewares()

```php
public function middlewares(): array
```

**Returns** `list<callable>`: App-level middlewares, added at attach() in registration order.

### name()

```php
public function name(): string
```

Short unique name ('i18n'): the plan namespace for its route data, and the prefix in logs.

**Returns** `string`

### boot()

```php
public function boot(
    \Io\Container $container,
    \Io\Environment $environment,
    \Io\Logger $logger,
    \Io\Live\LiveOptions $options,
): void
```

Called by Io at attach(): registers the plugin, Components and Broadcast in the container. In development
(Environment::isDev()) under Tenma it also reloads saved templates and checks every component.

**Parameters**

- `$container` `\Io\Container`
- `$environment` `\Io\Environment`
- `$logger` `\Io\Logger`
- `$options` [`LiveOptions`](LiveOptions.md)

### classes()

```php
public function classes(): array
```

**Returns** `list<class-string>`: Controllers and #[Manager] classes attach() adds.

### hooks()

```php
public function hooks(): array
```

**Returns** `list<object>`: Instances of Endpoint, Fallback, RouteAttributeCompiler, Guard, ResponseHook, ArgumentBinder, Renderer, OpenApiExtension, ViewHelper, ClientAsset.

### helpers()

```php
public function helpers(): array
```

**Returns** `array<string, callable>`: name => callable

### assets()

```php
public function assets(): array
```

**Returns** `array<string, string>`: {logical filename ending in .css or .js => absolute source path}

### after()

```php
public function after(array $plan, \Io\Http\Request $req, \Io\Http\Response $res): void
```

Expands the components' tags in a rendered HTML page. Attributes are strings in double quotes: an #[Input]
becomes an input, any other (class, id, ...) stays on the tag. An attribute without a value, e.g. data-live
on a rendered component, leaves the tag alone.

**Parameters**

- `$plan` `array`
- `$req` `\Io\Http\Request`
- `$res` `\Io\Http\Response`
