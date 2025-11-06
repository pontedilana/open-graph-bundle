<?php

declare(strict_types=1);

namespace Pontedilana\OpenGraphBundle\Renderer;

use Pontedilana\OpenGraphBundle\Manager\MapManagerInterface;
use Pontedilana\OpenGraphBundle\OpenGraph\DocumentWriter;

/**
 * Class OpenGraphRenderer.
 *
 * Default implementation of OpenGraphRendererInterface.
 * Iterates through registered maps and renders OpenGraph meta tags.
 *
 * @author  Nikita Loges
 */
class OpenGraphRenderer implements OpenGraphRendererInterface
{
    /**
     * @var MapManagerInterface The map manager containing all registered OpenGraph maps
     */
    protected MapManagerInterface $mapManager;

    /**
     * @param MapManagerInterface $registry The map manager to use for rendering
     */
    public function __construct(MapManagerInterface $registry)
    {
        $this->mapManager = $registry;
    }

    /**
     * {@inheritDoc}
     *
     * @param array<string, mixed> $additional Additional data to pass to the mappers
     */
    public function render($data, array $additional = []): string
    {
        $document = null;

        foreach ($this->mapManager->getMaps() as $map) {
            if ($map->supports($data)) {
                if (null === $document) {
                    $document = $this->createDocument();
                }

                $map->map($document, $data, $additional);
            }
        }

        if ($document) {
            return $document->render();
        }

        return '';
    }

    /**
     * Get the map manager.
     *
     * @return MapManagerInterface The map manager instance
     */
    public function getMapManager(): MapManagerInterface
    {
        return $this->mapManager;
    }

    /**
     * Create a new document writer instance.
     *
     * @return DocumentWriter The document writer instance
     */
    protected function createDocument(): DocumentWriter
    {
        return new DocumentWriter();
    }
}
