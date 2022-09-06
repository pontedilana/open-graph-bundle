<?php

namespace Tenolo\Bundle\OpenGraphBundle\Renderer;

use Tenolo\Bundle\OpenGraphBundle\Manager\MapManagerInterface;
use Tenolo\Bundle\OpenGraphBundle\OpenGraph\DocumentWriter;

/**
 * Class OpenGraphRenderer
 *
 * @package Tenolo\Bundle\OpenGraphBundle\Renderer
 * @author  Nikita Loges
 * @company tenolo GmbH & Co. KG
 */
class OpenGraphRenderer implements OpenGraphRendererInterface
{
    protected MapManagerInterface $mapManager;

    public function __construct(MapManagerInterface $registry)
    {
        $this->mapManager = $registry;
    }

    /**
     * @inheritdoc
     */
    public function render($data, array $additional = []): string
    {
        $document = null;

        foreach ($this->mapManager->getMaps() as $map) {
            if ($map->supports($data)) {
                if (is_null($document)) {
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

    protected function getMapManager(): MapManagerInterface
    {
        return $this->mapManager;
    }

    protected function createDocument(): DocumentWriter
    {
        return new DocumentWriter();
    }
}
