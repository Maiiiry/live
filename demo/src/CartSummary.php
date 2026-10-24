<?php

namespace Demo;

use Io\Attributes\Inject;
use Io\Live\Component;

#[Component(
    selector: 'app-cart'
)]
final class CartSummary
{
    #[Inject]
    private Cart $cart;

    public function clear(): void
    {
        $this->cart->clear();
    }
}
