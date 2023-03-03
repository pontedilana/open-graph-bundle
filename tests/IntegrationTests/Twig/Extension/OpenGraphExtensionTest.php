<?php

namespace Pontedilana\OpenGraphBundle\Tests\IntegrationTests\Twig\Extension;

use Pontedilana\OpenGraphBundle\Manager\MapManager;
use Pontedilana\OpenGraphBundle\Renderer\OpenGraphRenderer;
use Pontedilana\OpenGraphBundle\Tests\Mock\Map;
use Pontedilana\OpenGraphBundle\Twig\Extension\OpenGraphExtension;
use Twig\Test\IntegrationTestCase;

class OpenGraphExtensionTest extends IntegrationTestCase
{
    protected function getFixturesDir(): string
    {
        return __DIR__ . '/Fixtures/';
    }

    protected function getExtensions(): iterable
    {
        $mapManager = new MapManager();
        $mapManager->register(new Map());
        $renderer = new OpenGraphRenderer($mapManager);

        yield new OpenGraphExtension($renderer);
    }
}
