<?php

namespace Pontedilana\OpenGraphBundle\Twig\Extension;

use Opengraph\Writer;
use Pontedilana\OpenGraphBundle\Renderer\OpenGraphRendererInterface;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

/**
 * Class OpenGraphExtension.
 *
 * @author  Nikita Loges
 */
class OpenGraphExtension extends AbstractExtension
{
    protected OpenGraphRendererInterface $renderer;

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
