<?php

namespace Pontedilana\OpenGraphBundle\Renderer;

/**
 * Interface OpenGraphRendererInterface.
 *
 * @author  Nikita Loges
 */
interface OpenGraphRendererInterface
{
    public function render($data): string;
}
