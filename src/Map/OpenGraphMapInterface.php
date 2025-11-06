<?php

declare(strict_types=1);

namespace Pontedilana\OpenGraphBundle\Map;

use Pontedilana\OpenGraphBundle\OpenGraph\DocumentWriterInterface;

/**
 * Interface OpenGraphMapInterface.
 *
 * Maps data objects to OpenGraph properties.
 * Implementations should check if they support a given data type and map it to OpenGraph meta tags.
 *
 * @author  Nikita Loges
 * @author  Manuel Dalla Lana
 */
interface OpenGraphMapInterface
{
    /**
     * Map data to OpenGraph properties.
     *
     * @param DocumentWriterInterface $document   The document writer to append properties to
     * @param mixed                   $data       The data object to map
     * @param array<string, mixed>    $additional Additional context data for mapping
     */
    public function map(DocumentWriterInterface $document, $data, array $additional = []): void;

    /**
     * Check if this mapper supports the given data type.
     *
     * @param mixed $data The data object to check
     *
     * @return bool True if this mapper can handle the data, false otherwise
     */
    public function supports($data): bool;
}
