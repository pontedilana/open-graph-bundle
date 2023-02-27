<?php

namespace Tenolo\Bundle\OpenGraphBundle\Tests\IntegrationTests\Twig\Extension;

use Tenolo\Bundle\OpenGraphBundle\Manager\MapManager;
use Tenolo\Bundle\OpenGraphBundle\Renderer\OpenGraphRenderer;
use Tenolo\Bundle\OpenGraphBundle\Tests\Mock\Map;
use Tenolo\Bundle\OpenGraphBundle\Twig\Extension\OpenGraphExtension;
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
