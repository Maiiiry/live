<?php

namespace Io\Live\Tests\Fixtures;

use Io\Attributes\Inject;
use Io\Live\{Component, Connection};

/** Sends the browser elsewhere, or fails */
#[Component]
final class Door
{
    #[Inject]
    public Connection $connection;

    public function leave(): void
    {
        $this->connection->navigate('/elsewhere');
    }

    public function jam(): void
    {
        throw new \RuntimeException('the door is stuck');
    }
}
