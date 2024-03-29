<?php

namespace Pontedilana\OpenGraphBundle;

use Pontedilana\OpenGraphBundle\DependencyInjection\CompilerPass\OpenGraphMapCompilerPass;
use Pontedilana\OpenGraphBundle\Map\OpenGraphMapInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class PontedilanaOpenGraphBundle.
 *
 * @author  Nikita Loges
 */
class PontedilanaOpenGraphBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container): void
    {
        $container->addCompilerPass(new OpenGraphMapCompilerPass());

        $container->registerForAutoconfiguration(OpenGraphMapInterface::class)->addTag('pontedilana_open_graph.map');
    }
}
