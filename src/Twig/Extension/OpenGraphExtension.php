<?php

namespace Tenolo\Bundle\OpenGraphBundle\Twig\Extension;

use Opengraph\Writer;
use Tenolo\Bundle\OpenGraphBundle\Renderer\OpenGraphRendererInterface;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

/**
 * Class OpenGraphExtension
 *
 * @package Tenolo\Bundle\OpenGraphBundle\Twig\Extension
 * @author  Nikita Loges
 * @company tenolo GmbH & Co. KG
 */
class OpenGraphExtension extends AbstractExtension
{
    protected OpenGraphRendererInterface $renderer;

    /**
     * @param OpenGraphRendererInterface $renderer
     */
    public function __construct(OpenGraphRendererInterface $renderer)
    {
        $this->renderer = $renderer;
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('opengraph_render', [$this->renderer, 'render'], ['is_safe' => ['html']]),
            new TwigFunction('opengraph', [$this, 'renderDocument'], ['is_safe' => ['html']]),
        ];
    }

    public function renderDocument(Writer $opengraph): string
    {
        return $opengraph->render();
    }
}
