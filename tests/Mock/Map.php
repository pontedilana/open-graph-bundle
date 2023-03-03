<?php

namespace Pontedilana\OpenGraphBundle\Tests\Mock;

use Opengraph\Opengraph;
use Pontedilana\OpenGraphBundle\Map\OpenGraphMapInterface;
use Pontedilana\OpenGraphBundle\OpenGraph\DocumentWriterInterface;

class Map implements OpenGraphMapInterface
{

    public function map(DocumentWriterInterface $document, $data, array $additional = []): void
    {
        $document->append(OpenGraph::OG_TITLE, $data->name);
    }

    public function supports($data): bool
    {
        return $data instanceof \stdClass && ! empty($data->name);
    }
}
