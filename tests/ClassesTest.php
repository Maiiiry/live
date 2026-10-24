<?php

namespace Io\Live\Tests;

use PHPUnit\Framework\TestCase;
use Io\Live\Template;
use Io\Live\Tests\Fixtures\Board;

final class ClassesTest extends TestCase
{
    public function testEveryTemplateCallsItWithoutAnImport(): void
    {
        $this->assertStringContainsString('use function Io\classes;', Template::header(null));
        $this->assertStringContainsString('use function Io\classes;', Template::header(Board::class));
        eval(Template::compile('<p class="{{ classes(\'a\', [\'b\' => true]) }}">', [], class: Board::class, first: 'return; '));
    }
}
