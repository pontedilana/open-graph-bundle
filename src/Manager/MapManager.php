<?php

declare(strict_types=1);

namespace Pontedilana\OpenGraphBundle\Manager;

use Pontedilana\OpenGraphBundle\Map\OpenGraphMapInterface;

/**
 * Class MapManager.
 *
 * Default implementation of MapManagerInterface for managing OpenGraph maps.
 *
 * @author  Nikita Loges
 */
class MapManager implements MapManagerInterface
{
    /**
     * @var OpenGraphMapInterface[] List of registered OpenGraph maps
     */
    protected array $maps = [];

    /**
     * {@inheritDoc}
     */
    public function register(OpenGraphMapInterface $map): void
    {
        $this->maps[] = $map;
    }

    /**
     * {@inheritDoc}
     */
    public function getMaps(): array
    {
        return $this->maps;
    }
}
