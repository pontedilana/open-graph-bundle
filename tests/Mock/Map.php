<?php

namespace Tenolo\Bundle\OpenGraphBundle\Tests\Mock;

use Opengraph\Opengraph;
use Tenolo\Bundle\OpenGraphBundle\Map\OpenGraphMapInterface;
use Tenolo\Bundle\OpenGraphBundle\OpenGraph\DocumentWriterInterface;

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
