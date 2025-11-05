<?php

declare(strict_types=1);

namespace Pontedilana\OpenGraphBundle\Tests\Mock;

use Opengraph\Opengraph;
use Pontedilana\OpenGraphBundle\Map\OpenGraphMapInterface;
use Pontedilana\OpenGraphBundle\OpenGraph\DocumentWriterInterface;

class Map implements OpenGraphMapInterface
{
    /**
     * {@inheritDoc}
     */
    public function map(DocumentWriterInterface $document, $data, array $additional = []): void
    {
        assert($data instanceof \stdClass);
        $document->append(Opengraph::OG_TITLE, $data->name);
    }

    /**
     * {@inheritDoc}
     */
    public function supports($data): bool
    {
        return $data instanceof \stdClass && !empty($data->name);
    }
}
