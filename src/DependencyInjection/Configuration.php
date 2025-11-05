<?php

declare(strict_types=1);

namespace Pontedilana\OpenGraphBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration.
 *
 * Defines the configuration structure for the OpenGraph bundle.
 *
 * @author  Nikita Loges
 */
class Configuration implements ConfigurationInterface
{
    /**
     * The root node name for this bundle's configuration.
     */
    public const ROOT_NODE = 'pontedilana_open_graph';

    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder(): TreeBuilder
    {
        return new TreeBuilder(static::ROOT_NODE);
    }
}
