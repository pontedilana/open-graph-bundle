<?php

namespace Pontedilana\OpenGraphBundle\Map;

use Pontedilana\OpenGraphBundle\OpenGraph\DocumentWriter;
use Pontedilana\OpenGraphBundle\OpenGraph\DocumentWriterInterface;

/**
 * Interface OpenGraphMapInterface.
 *
 * @author  Nikita Loges
 * @author  Manuel Dalla Lana
 */
interface OpenGraphMapInterface
{
    /**
     * @param DocumentWriterInterface|DocumentWriter $document
     */
    public function map(DocumentWriterInterface $document, $data, array $additional = []): void;

    public function supports($data): bool;
}
