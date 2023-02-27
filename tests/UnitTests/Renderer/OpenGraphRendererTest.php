<?php

namespace Tenolo\Bundle\OpenGraphBundle\Tests\UnitTests\Renderer;

use PHPUnit\Framework\TestCase;
use Tenolo\Bundle\OpenGraphBundle\Manager\MapManager;
use Tenolo\Bundle\OpenGraphBundle\Renderer\OpenGraphRenderer;
use Tenolo\Bundle\OpenGraphBundle\Tests\Mock\Map;

class OpenGraphRendererTest extends TestCase
{
    public function testRenderValid(): void
    {
        $mapManager = new MapManager();
        $mapManager->register(new Map());
        $renderer = new OpenGraphRenderer($mapManager);

        $this->assertEquals($renderer->getMapManager(), $mapManager);

        $entity = new \stdClass();
        $entity->name = 'TestName';

        $this->assertNotFalse(strpos($renderer->render($entity), '<meta property="og:title" content="TestName" />'));
    }
}
