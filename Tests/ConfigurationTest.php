<?php

namespace CL\Bundle\PackageNameHereBundle\Tests;

use CL\Bundle\PackageNameHereBundle\DependencyInjection\Configuration;
use Matthias\SymfonyConfigTest\PhpUnit\AbstractConfigurationTestCase;

class ConfigurationTest extends AbstractConfigurationTestCase
{
    public function testValuesAreInvalidIfRequiredValueIsNotProvided()
    {
        $this->assertConfigurationIsInvalid(
            [
                [] // no values at all
            ],
            'foo' // (part of) the expected exception message - optional
        );
    }

    /**
     * {@inheritdoc}
     */
    protected function getConfiguration()
    {
        return new Configuration();
    }
}

