<?php

declare(strict_types=1);

namespace Pontedilana\OpenGraphBundle;

use Pontedilana\OpenGraphBundle\DependencyInjection\CompilerPass\OpenGraphMapCompilerPass;
use Pontedilana\OpenGraphBundle\Map\OpenGraphMapInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class PontedilanaOpenGraphBundle.
 *
 * Main bundle class that registers services and compiler passes.
 *
 * @author  Nikita Loges
 */
class PontedilanaOpenGraphBundle extends Bundle
{
    /**
     * {@inheritDoc}
     *
     * Registers the compiler pass and autoconfigures OpenGraph map implementations.
     */
    public function build(ContainerBuilder $container): void
    {
        $container->addCompilerPass(new OpenGraphMapCompilerPass());

        $container->registerForAutoconfiguration(OpenGraphMapInterface::class)
            ->addTag('pontedilana_open_graph.map');
    }
}
