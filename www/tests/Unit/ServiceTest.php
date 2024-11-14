<?php

declare(strict_types=1);

namespace Tests\Unit;

use App\Service\TestService;
use Illuminate\Support\Carbon;
use Mockery;
use PHPUnit\Framework\TestCase;
use Psr\Log\LoggerInterface;

class ServiceTest extends TestCase
{
    public function testTestTest(): void
    {
        Carbon::$abc = 'abcdefg';
        $def = 123456;

        $logger = Mockery::mock(LoggerInterface::class);
        $logger->shouldReceive('debug')
            ->once()
            ->with('TestService::__invoke', ['abc' => $abc, 'def' => $def]);

        $service = new TestService($logger);

        $response = $service($abc, $def);

        $this->assertEquals('Hello abcdefg, 123456', $response);
    }
}
