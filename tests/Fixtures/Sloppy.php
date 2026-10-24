<?php

namespace Io\Live\Tests\Fixtures;

use Io\Live\Component;

/** A template with what only PHPStan finds: Io\View\Check::phpstan() */
#[Component]
final class Sloppy
{
    private int $count = 0;

    /** @var list<Item> */
    public array $items = [];
}
