<?php

namespace Pontedilana\OpenGraphBundle\Tests\UnitTests\Manager;

use Pontedilana\OpenGraphBundle\Tests\Mock\Map;
use PHPUnit\Framework\TestCase;
use Pontedilana\OpenGraphBundle\Manager\MapManager;

class MapManagerTest extends TestCase
{

    public function testRegister(): void
    {
        $mapManager = new MapManager();
        $map = new Map();
        $this->assertCount(0, $mapManager->getMaps());
        $mapManager->register($map);
        $this->assertCount(1, $mapManager->getMaps());
    }
}
