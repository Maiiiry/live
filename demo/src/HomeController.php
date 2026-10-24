<?php

namespace Demo;

use Io\Attributes\{Controller, Get, Inject};
use Io\Http\View;

#[Controller]
final class HomeController
{
    // Makes CityStore reachable for discovery, so CitySearch can inject it
    #[Inject]
    private CityStore $cities;

    #[Get('/')]
    public function home(): View
    {
        return new View('Home', ['cityCount' => count($this->cities->all())]);
    }
}
