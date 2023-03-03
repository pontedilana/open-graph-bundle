<?php

namespace Pontedilana\OpenGraphBundle\OpenGraph;

/**
 * Interface DocumentWriterInterface.
 *
 * @author  Nikita Loges
 * @author  Manuel Dalla Lana
 */
interface DocumentWriterInterface
{
    public function append(string $property, string $content): \Opengraph\Opengraph;

    public function prepend(string $property, string $content): \Opengraph\Opengraph;

    public function render(string $indent): string;
}
