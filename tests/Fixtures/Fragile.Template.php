<?php /** @var \Io\Live\Tests\Fixtures\Fragile $this */ ?>
<button data-on-click="toggle"><?= $this->broken ? throw new \RuntimeException('broken') : $this->label->text ?></button>
