<?php

namespace Tenolo\Bundle\OpenGraphBundle\Tests\UnitTests\Manager;

use Tenolo\Bundle\OpenGraphBundle\Tests\Mock\Map;
use PHPUnit\Framework\TestCase;
use Tenolo\Bundle\OpenGraphBundle\Manager\MapManager;

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
