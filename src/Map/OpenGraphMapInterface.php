<?php

namespace Pontedilana\OpenGraphBundle\Map;

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
     * @param mixed|object $data
     */
    public function map(DocumentWriterInterface $document, $data, array $additional = []): void;

    /**
     * @param mixed|object $data
     */
    public function supports($data): bool;
}
