<?php

namespace Pontedilana\OpenGraphBundle\OpenGraph;

/**
 * Interface DocumentWriterInterface.
 *
 * @author Nikita Loges
 * @author Manuel Dalla Lana
 */
interface DocumentWriterInterface
{
    public function append($property, $content);

    public function prepend($property, $content);

    public function render($indent = "\t");
}
