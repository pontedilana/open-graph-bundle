<?php

namespace Pontedilana\OpenGraphBundle\Map;

use Pontedilana\OpenGraphBundle\OpenGraph\DocumentWriter;
use Pontedilana\OpenGraphBundle\OpenGraph\DocumentWriterInterface;

/**
 * Interface OpenGraphMapInterface
 *
 * @package Pontedilana\OpenGraphBundle\Map
 * @author  Nikita Loges
 * 
 */
interface OpenGraphMapInterface
{

    /**
     * @param DocumentWriterInterface|DocumentWriter $document
     * @param mixed                                  $data
     * @param array                                  $additional
     */
    public function map(DocumentWriterInterface $document, $data, array $additional = []);

    /**
     * @param mixed $data
     *
     * @return bool
     */
    public function supports($data): bool;
}
