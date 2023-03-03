<?php

namespace Pontedilana\OpenGraphBundle\Manager;

use Pontedilana\OpenGraphBundle\Map\OpenGraphMapInterface;

/**
 * Class MapManager
 *
 * @package Pontedilana\OpenGraphBundle\Manager
 * @author  Nikita Loges
 * 
 */
class MapManager implements MapManagerInterface
{
    /** @var OpenGraphMapInterface[] */
    protected array $maps = [];

    public function register(OpenGraphMapInterface $map): void
    {
        $this->maps[] = $map;
    }

    /**
     * @return OpenGraphMapInterface[]
     */
    public function getMaps(): array
    {
        return $this->maps;
    }
}
