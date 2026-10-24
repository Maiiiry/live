<?php

namespace Io\Live;

use Io\Http\{MiddlewareBase, Request, Response};
use Io\Support\FiberLocal;

/** @internal Remembers each request for `$this->live()` in its view, which gets no request of its own. */
final class PageRequest extends MiddlewareBase
{
    /** @var FiberLocal<Request> */
    private FiberLocal $current;

    public function __construct()
    {
        $this->current = new FiberLocal();
    }

    public function current(): ?Request
    {
        return $this->current->get();
    }

    protected function before(Request $req, Response $res): bool
    {
        $this->current->set($req);
        return true;
    }
}
