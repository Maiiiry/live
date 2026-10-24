<?php

namespace Io\Live\Tests\Fixtures;

use Io\Live\Component;

/** A float no JSON can hold */
#[Component]
final class Gauge
{
    public float $value = NAN;
}
