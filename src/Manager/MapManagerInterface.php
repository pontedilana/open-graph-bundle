<?php

declare(strict_types=1);

namespace Pontedilana\OpenGraphBundle\Manager;

use Pontedilana\OpenGraphBundle\Map\OpenGraphMapInterface;

/**
 * Interface MapManagerInterface.
 *
 * Manages the registration and retrieval of OpenGraph map implementations.
 *
 * @author  Nikita Loges
 */
interface MapManagerInterface
{
    /**
     * Register an OpenGraph map implementation.
     *
     * @param OpenGraphMapInterface $map The map to register
     */
    public function register(OpenGraphMapInterface $map): void;

    /**
     * Get all registered OpenGraph maps.
     *
     * @return OpenGraphMapInterface[] List of registered maps
     */
    public function getMaps(): array;
}
