<?php

namespace Pontedilana\OpenGraphBundle\Renderer;

/**
 * Interface OpenGraphRendererInterface
 *
 * @package Pontedilana\OpenGraphBundle\Renderer
 * @author  Nikita Loges
 * 
 */
interface OpenGraphRendererInterface
{
    /**
     * @param mixed $data
     */
    public function render($data): string;
}
