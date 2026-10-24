<?php

namespace Io\Live\Tests\Fixtures;

use Io\Attributes\Inject;
use Io\Live\Component;

#[Component(
    selector: 'test-basket-badge',
    template: 'BasketBadge.Template.php'
)]
final class BasketBadge
{
    #[Inject]
    public Basket $basket;
}
