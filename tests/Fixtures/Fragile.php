<?php

namespace Io\Live\Tests\Fixtures;

use Io\Attributes\Inject;
use Io\Live\{Component, Input};

#[Component(
    selector: 'test-fragile',
    template: 'Fragile.Template.php'
)]
final class Fragile
{
    #[Input]
    public bool $broken = false;

    #[Inject]
    public Label $label;

    public function toggle(): void
    {
        $this->broken = !$this->broken;
    }
}
