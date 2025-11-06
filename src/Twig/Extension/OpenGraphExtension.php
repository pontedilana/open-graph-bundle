<?php

declare(strict_types=1);

namespace Pontedilana\OpenGraphBundle\Twig\Extension;

use Opengraph\Writer;
use Pontedilana\OpenGraphBundle\Renderer\OpenGraphRendererInterface;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

/**
 * Class OpenGraphExtension.
 *
 * Provides Twig functions for rendering OpenGraph meta tags.
 *
 * @author  Nikita Loges
 */
class OpenGraphExtension extends AbstractExtension
{
    /**
     * @var OpenGraphRendererInterface The OpenGraph renderer service
     */
    protected OpenGraphRendererInterface $renderer;

    /**
     * @param OpenGraphRendererInterface $renderer The OpenGraph renderer to use
     */
    public function __construct(OpenGraphRendererInterface $renderer)
    {
        $this->renderer = $renderer;
    }

    /**
     * Returns a list of Twig functions.
     *
     * @return TwigFunction[] List of Twig functions provided by this extension
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction('opengraph_render', [$this->renderer, 'render'], ['is_safe' => ['html']]),
            new TwigFunction('opengraph', [$this, 'renderDocument'], ['is_safe' => ['html']]),
        ];
    }

    /**
     * Render an OpenGraph Writer document directly.
     *
     * @param Writer $opengraph The OpenGraph writer instance
     *
     * @return string The rendered HTML meta tags
     */
    public function renderDocument(Writer $opengraph): string
    {
        return $opengraph->render();
    }
}
