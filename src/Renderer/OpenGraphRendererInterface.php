<?php

namespace Pontedilana\OpenGraphBundle\Renderer;

/**
 * Interface OpenGraphRendererInterface.
 *
 * @author  Nikita Loges
 */
interface OpenGraphRendererInterface
{
    /**
     * @param mixed|object $data
     */
    public function render($data): string;
}
