<?php

namespace Io\Live\Tests\Fixtures;

use Io\Attributes\Inject;
use Io\Live\Component;

#[Component(
    selector: 'test-basket-button',
    template: 'BasketButton.Template.php'
)]
final class BasketButton
{
    #[Inject]
    public Basket $basket;

    public function add(): void
    {
        $this->basket->items++;
    }
}
