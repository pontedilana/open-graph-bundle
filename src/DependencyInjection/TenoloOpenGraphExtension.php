<?php

namespace Tenolo\Bundle\OpenGraphBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\HttpKernel\DependencyInjection\ConfigurableExtension;

/**
 * Class TenoloOpenGraphExtension
 *
 * @package Tenolo\Bundle\OpenGraphBundle\DependencyInjection
 * @author  Nikita Loges
 * @company tenolo GmbH & Co. KG
 */
class TenoloOpenGraphExtension extends ConfigurableExtension
{
    public function loadInternal(array $mergedConfig, ContainerBuilder $container): void
    {
        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__ . '/../../config'));
        $loader->load('services.xml');
    }
}
