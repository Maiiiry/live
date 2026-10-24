<?php

namespace Io\Live\Tests\Fixtures;

use Io\Attributes\Email;
use Io\FromArray;

/** A form's fields, as a #[Body] DTO would take them */
final class Signup
{
    use FromArray;

    #[Email]
    public string $email;

    public int $seats = 1;

    public Size $size = Size::Small;
}
