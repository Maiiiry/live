<?php

namespace Io\Live\Tests\Fixtures;

use Io\Attributes\Inject;
use Io\Live\{Broadcast, Component};

#[Component(
    selector: 'test-chat',
    template: 'Chat.Template.php'
)]
final class Chat
{
    #[Inject]
    public Room $room;

    #[Inject]
    public Broadcast $broadcast;

    public function say(string $message): void
    {
        $this->room->messages[] = $message;
        $this->broadcast->changed();
    }
}
