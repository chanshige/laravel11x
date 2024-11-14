<?php

declare(strict_types=1);

namespace App\Service;

use Psr\Log\LoggerInterface;

use function sprintf;

readonly class TestService
{
    public function __construct(
        private LoggerInterface $logger,
    ) {
    }

    public function __invoke(string $abc, int $def): string
    {
        $this->logger->debug('TestService::__invoke', ['abc' => $abc, 'def' => $def]);

        return sprintf('Hello %s, %d', $abc, $def);
    }
}
