<?php

namespace Pontedilana\OpenGraphBundle\DependencyInjection\CompilerPass;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

/**
 * Class OpenGraphMapCompilerPass.
 *
 * @author  Nikita Loges
 */
class OpenGraphMapCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container): void
    {
        if (!$container->hasDefinition('pontedilana_open_graph.manager')) {
            return;
        }

        $definition = $container->findDefinition('pontedilana_open_graph.manager');
        $taggedServices = $container->findTaggedServiceIds('pontedilana_open_graph.map');

        foreach ($taggedServices as $id => $attributes) {
            $definition->addMethodCall('register', [new Reference($id)]);
        }
    }
}
