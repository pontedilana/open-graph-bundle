<?php

namespace Pontedilana\OpenGraphBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\HttpKernel\DependencyInjection\ConfigurableExtension;

/**
 * Class PontedilanaOpenGraphExtension
 *
 * @package Pontedilana\OpenGraphBundle\DependencyInjection
 * @author  Nikita Loges
 * 
 */
class PontedilanaOpenGraphExtension extends ConfigurableExtension
{
    public function loadInternal(array $mergedConfig, ContainerBuilder $container): void
    {
        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__ . '/../../config'));
        $loader->load('services.xml');
    }
}
