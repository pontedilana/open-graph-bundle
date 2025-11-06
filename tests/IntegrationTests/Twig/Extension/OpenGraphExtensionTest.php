<?php

declare(strict_types=1);

namespace Pontedilana\OpenGraphBundle\Tests\IntegrationTests\Twig\Extension;

use Opengraph\Writer;
use PHPUnit\Framework\TestCase;
use Pontedilana\OpenGraphBundle\Manager\MapManager;
use Pontedilana\OpenGraphBundle\OpenGraph\DocumentWriter;
use Pontedilana\OpenGraphBundle\Renderer\OpenGraphRenderer;
use Pontedilana\OpenGraphBundle\Tests\Mock\Map;
use Pontedilana\OpenGraphBundle\Twig\Extension\OpenGraphExtension;
use Twig\Environment;
use Twig\Loader\ArrayLoader;

/**
 * Integration tests for OpenGraph Twig extension.
 *
 * Tests the Twig functions provided by the OpenGraphExtension:
 * - opengraph_render(): Renders OpenGraph meta tags from entities
 * - opengraph(): Renders OpenGraph meta tags from a Writer instance
 */
class OpenGraphExtensionTest extends TestCase
{
    private Environment $twig;

    protected function setUp(): void
    {
        $mapManager = new MapManager();
        $mapManager->register(new Map());
        $renderer = new OpenGraphRenderer($mapManager);
        $extension = new OpenGraphExtension($renderer);

        $loader = new ArrayLoader();
        $this->twig = new Environment($loader);
        $this->twig->addExtension($extension);
    }

    /**
     * Test the opengraph_render() Twig function with an entity.
     *
     * This function should:
     * 1. Accept an entity object
     * 2. Find the appropriate OpenGraph map
     * 3. Render the OpenGraph meta tags
     */
    public function testOpenGraphRenderFunction(): void
    {
        $template = $this->twig->createTemplate('{{ opengraph_render(entity) }}');

        $entity = new \stdClass();
        $entity->name = 'TestName';

        $result = $template->render(['entity' => $entity]);

        $this->assertStringContainsString('<meta property="og:title" content="TestName" />', $result);
        $this->assertStringContainsString('property="og:title"', $result);
        $this->assertStringContainsString('content="TestName"', $result);
    }

    /**
     * Test the opengraph() Twig function with a Writer instance.
     *
     * This function should:
     * 1. Accept a DocumentWriter instance
     * 2. Render it directly as HTML meta tags
     */
    public function testOpenGraphFunction(): void
    {
        $template = $this->twig->createTemplate('{{ opengraph(writer) }}');

        $writer = new DocumentWriter();
        $writer->append(Writer::OG_TITLE, 'test');

        $result = $template->render(['writer' => $writer]);

        $this->assertStringContainsString('<meta property="og:title" content="test" />', $result);
        $this->assertStringContainsString('property="og:title"', $result);
        $this->assertStringContainsString('content="test"', $result);
    }

    /**
     * Test opengraph_render() with an unsupported entity.
     *
     * When no map supports the entity, it should return an empty string.
     */
    public function testOpenGraphRenderWithUnsupportedEntity(): void
    {
        $template = $this->twig->createTemplate('{{ opengraph_render(entity) }}');

        // Entity without 'name' property won't be supported by our mock Map
        $entity = new \stdClass();

        $result = $template->render(['entity' => $entity]);

        $this->assertSame('', $result);
    }

    /**
     * Test opengraph_render() with multiple properties.
     *
     * Verifies that the Map can add multiple OpenGraph properties.
     */
    public function testOpenGraphRenderWithMultipleProperties(): void
    {
        $template = $this->twig->createTemplate('{{ opengraph_render(entity) }}');

        $entity = new \stdClass();
        $entity->name = 'Complex Title';

        $result = $template->render(['entity' => $entity]);

        $this->assertNotEmpty($result);
        $this->assertStringContainsString('og:title', $result);
    }

    /**
     * Test that the Twig functions are properly marked as safe for HTML.
     *
     * The functions should output raw HTML without escaping.
     */
    public function testFunctionsAreSafeForHtml(): void
    {
        $template = $this->twig->createTemplate('{{ opengraph_render(entity) }}');

        $entity = new \stdClass();
        $entity->name = 'Test & Special <chars>';

        $result = $template->render(['entity' => $entity]);

        // Should contain actual HTML tags, not escaped
        $this->assertStringContainsString('<meta', $result);
        $this->assertStringContainsString('/>', $result);
    }

    /**
     * Test opengraph() with a Writer containing multiple tags.
     */
    public function testOpenGraphFunctionWithMultipleTags(): void
    {
        $template = $this->twig->createTemplate('{{ opengraph(writer) }}');

        $writer = new DocumentWriter();
        $writer->append(Writer::OG_TITLE, 'Test Title');
        $writer->append(Writer::OG_TYPE, Writer::TYPE_WEBSITE);
        $writer->append(Writer::OG_URL, 'https://example.com');

        $result = $template->render(['writer' => $writer]);

        $this->assertStringContainsString('og:title', $result);
        $this->assertStringContainsString('og:type', $result);
        $this->assertStringContainsString('og:url', $result);
        $this->assertStringContainsString('Test Title', $result);
        $this->assertStringContainsString('website', $result);
        $this->assertStringContainsString('https://example.com', $result);
    }
}
