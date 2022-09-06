<?php

namespace Tenolo\Bundle\OpenGraphBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 *
 * @package Tenolo\Bundle\OpenGraphBundle\DependencyInjection
 * @author  Nikita Loges
 * @company tenolo GmbH & Co. KG
 */
class Configuration implements ConfigurationInterface
{

    /** @var string  */
    public const ROOT_NODE = 'tenolo_open_graph';

    /**
     * @inheritDoc
     */
    public function getConfigTreeBuilder(): TreeBuilder
    {
        return new TreeBuilder(static::ROOT_NODE);
    }
}
