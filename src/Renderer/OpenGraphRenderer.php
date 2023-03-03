<?php

namespace Pontedilana\OpenGraphBundle\Renderer;

use Pontedilana\OpenGraphBundle\Manager\MapManagerInterface;
use Pontedilana\OpenGraphBundle\OpenGraph\DocumentWriter;

/**
 * Class OpenGraphRenderer.
 *
 * @author  Nikita Loges
 */
class OpenGraphRenderer implements OpenGraphRendererInterface
{
    protected MapManagerInterface $mapManager;

    public function __construct(MapManagerInterface $registry)
    {
        $this->mapManager = $registry;
    }

    /**
     * {@inheritdoc}
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

    public function getMapManager(): MapManagerInterface
    {
        return $this->mapManager;
    }

    protected function createDocument(): DocumentWriter
    {
        return new DocumentWriter();
    }
}
