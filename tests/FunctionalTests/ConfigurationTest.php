<?php

namespace Tenolo\Bundle\OpenGraphBundle\Tests\FunctionalTests;

use Matthias\SymfonyConfigTest\PhpUnit\ConfigurationTestCaseTrait;
use PHPUnit\Framework\TestCase;
use Tenolo\Bundle\OpenGraphBundle\DependencyInjection\Configuration;

class ConfigurationTest extends TestCase
{
    use ConfigurationTestCaseTrait;

    protected function getConfiguration(): Configuration
    {
        return new Configuration();
    }

    public function testEmptyConfig(): void
    {
        $this->assertConfigurationIsValid(
            [
                [] // no values at all
            ],
        );
    }
}
