<?php

namespace Pontedilana\OpenGraphBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration.
 *
 * @author  Nikita Loges
 */
class Configuration implements ConfigurationInterface
{
    /** @var string */
    public const ROOT_NODE = 'pontedilana_open_graph';

    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder(): TreeBuilder
    {
        return new TreeBuilder(static::ROOT_NODE);
    }
}
