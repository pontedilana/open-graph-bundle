<?php

namespace Pontedilana\OpenGraphBundle\Map;

use Pontedilana\OpenGraphBundle\OpenGraph\DocumentWriter;
use Pontedilana\OpenGraphBundle\OpenGraph\DocumentWriterInterface;

/**
 * Interface OpenGraphMapInterface.
 *
 * @author  Nikita Loges
 */
interface OpenGraphMapInterface
{
    /**
     * @param DocumentWriterInterface|DocumentWriter $document
     */
    public function map(DocumentWriterInterface $document, $data, array $additional = []);

    public function supports($data): bool;
}
