<?php

declare(strict_types=1);

use Pontedilana\OpenGraphBundle\Manager\MapManager;
use Pontedilana\OpenGraphBundle\Renderer\OpenGraphRenderer;
use Pontedilana\OpenGraphBundle\Twig\Extension\OpenGraphExtension;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

use function Symfony\Component\DependencyInjection\Loader\Configurator\service;

return static function (ContainerConfigurator $container): void {
    $services = $container->services();

    $services->set('pontedilana_open_graph.manager', MapManager::class);

    $services->set('pontedilana_open_graph.renderer', OpenGraphRenderer::class)
        ->args([service('pontedilana_open_graph.manager')]);

    $services->set(OpenGraphExtension::class)
        ->private()
        ->tag('twig.extension')
        ->args([service('pontedilana_open_graph.renderer')]);
};
