<?php

declare(strict_types=1);

namespace Pontedilana\OpenGraphBundle\Renderer;

/**
 * Interface OpenGraphRendererInterface.
 *
 * Renders OpenGraph meta tags for given data objects.
 *
 * @author  Nikita Loges
 */
interface OpenGraphRendererInterface
{
    /**
     * Render OpenGraph meta tags for the given data.
     *
     * @param mixed $data The data object to render OpenGraph tags for
     *
     * @return string The rendered OpenGraph HTML meta tags, or empty string if no mapper supports the data
     */
    public function render($data): string;
}
