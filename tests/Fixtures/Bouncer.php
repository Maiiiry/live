<?php

namespace Io\Live\Tests\Fixtures;

use Io\Attributes\Inject;
use Io\Live\{Component, Connection};

/** Navigates while it renders: allowed only from actions. */
#[Component(
    selector: 'test-bouncer',
    template: 'Bouncer.Template.php'
)]
final class Bouncer
{
    #[Inject]
    public Connection $connection;
}
