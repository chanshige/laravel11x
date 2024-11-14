<?php

declare(strict_types=1);

namespace App\Http\Action;

use Spatie\RouteAttributes\Attributes\Get;

class Index
{
    #[Get(uri: '/', name: 'index', middleware: 'cache.headers:public;max_age=3600;etag')]
    public function __invoke(): string
    {
        return '{greeting: "Hello!!!"}';
    }
}
