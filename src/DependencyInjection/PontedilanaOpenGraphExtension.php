<?php

declare(strict_types=1);

namespace Pontedilana\OpenGraphBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\HttpKernel\DependencyInjection\ConfigurableExtension;

/**
 * Class PontedilanaOpenGraphExtension.
 *
 * Loads and manages the bundle's service configuration.
 *
 * @author  Nikita Loges
 */
class PontedilanaOpenGraphExtension extends ConfigurableExtension
{
    /**
     * {@inheritDoc}
     *
     * @param array<string, mixed> $mergedConfig The merged bundle configuration
     */
    public function loadInternal(array $mergedConfig, ContainerBuilder $container): void
    {
        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__ . '/../../config'));
        $loader->load('services.xml');
    }
}
