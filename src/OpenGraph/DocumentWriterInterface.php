<?php

declare(strict_types=1);

namespace Pontedilana\OpenGraphBundle\OpenGraph;

/**
 * Interface DocumentWriterInterface.
 *
 * Provides methods to build and render OpenGraph meta tags.
 *
 * @author Nikita Loges
 * @author Manuel Dalla Lana
 */
interface DocumentWriterInterface
{
    /**
     * Append a property to the document.
     *
     * @param string $property The OpenGraph property name
     * @param mixed  $content  The property value
     *
     * @return $this For method chaining
     */
    public function append($property, $content);

    /**
     * Prepend a property to the document.
     *
     * @param string $property The OpenGraph property name
     * @param mixed  $content  The property value
     *
     * @return $this For method chaining
     */
    public function prepend($property, $content);

    /**
     * Render the OpenGraph document as HTML meta tags.
     *
     * @param string $indent Indentation string for formatting
     *
     * @return string The rendered HTML meta tags
     */
    public function render($indent = "\t");
}
