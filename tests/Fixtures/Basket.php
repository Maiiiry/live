<?php

namespace Io\Live\Tests\Fixtures;

use Io\Live\Scoped;

#[Scoped]
class Basket
{
    public int $items = 0;
}
