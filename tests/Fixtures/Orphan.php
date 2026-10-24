<?php

namespace Io\Live\Tests\Fixtures;

use Io\Live\Component;

/** Its template doesn't exist. */
#[Component(
    selector: 'test-orphan',
    template: 'Missing.Template.php'
)]
final class Orphan
{
}
