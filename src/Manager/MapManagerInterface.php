<?php

namespace Pontedilana\OpenGraphBundle\Manager;

use Pontedilana\OpenGraphBundle\Map\OpenGraphMapInterface;

/**
 * Interface MapManagerInterface.
 *
 * @author  Nikita Loges
 */
interface MapManagerInterface
{
    public function register(OpenGraphMapInterface $map): void;

    /**
     * @return OpenGraphMapInterface[]
     */
    public function getMaps(): array;
}
