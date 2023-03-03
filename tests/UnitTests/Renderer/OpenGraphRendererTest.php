<?php

namespace Pontedilana\OpenGraphBundle\Tests\UnitTests\Renderer;

use PHPUnit\Framework\TestCase;
use Pontedilana\OpenGraphBundle\Manager\MapManager;
use Pontedilana\OpenGraphBundle\Renderer\OpenGraphRenderer;
use Pontedilana\OpenGraphBundle\Tests\Mock\Map;

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
