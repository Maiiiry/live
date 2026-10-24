<?php

namespace Io\Live\Tests\Fixtures;

use Io\Attributes\Inject;

/** An app-wide service that injects a #[Scoped] one: refused. */
final class Tally
{
    #[Inject]
    public Basket $basket;
}
