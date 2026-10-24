<?php
// Run with: tenma index.php (live components need Tenma), then open http://localhost:8090

require __DIR__ . '/vendor/autoload.php';

use Demo\{CartSummary, CitySearch, CityRow, Clock, Counter, CounterList, HomeController, Products};
use Io\Live\LivePlugin;
use Io\Options\RendererOptions;
use Io\App;

date_default_timezone_set('Europe/Berlin');

$app = App::create();
$app->plugin(new LivePlugin([Counter::class, CounterList::class, CitySearch::class, CityRow::class, Clock::class, Products::class, CartSummary::class]));
$app->configure(function (RendererOptions $opts) {
    $opts->directory = __DIR__ . '/views';
    $opts->layout = '_Layout.php';
});
$app->attach([HomeController::class]);

new \Http\Server(8090, $app)->start();
echo "Live components: http://localhost:8090\n";
