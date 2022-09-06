<?php

namespace Tenolo\Bundle\OpenGraphBundle\Map;

use Tenolo\Bundle\OpenGraphBundle\OpenGraph\DocumentWriter;
use Tenolo\Bundle\OpenGraphBundle\OpenGraph\DocumentWriterInterface;

/**
 * Interface OpenGraphMapInterface
 *
 * @package Tenolo\Bundle\OpenGraphBundle\Map
 * @author  Nikita Loges
 * @company tenolo GmbH & Co. KG
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
