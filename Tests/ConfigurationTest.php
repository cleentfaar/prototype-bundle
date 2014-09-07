<?php

namespace CL\Bundle\PackageNameHereBundle\Tests;

use CL\Bundle\PackageNameHereBundle\DependencyInjection\Configuration;
use Matthias\SymfonyConfigTest\PhpUnit\AbstractConfigurationTestCase;

class ConfigurationTest extends AbstractConfigurationTestCase
{
    protected function getConfiguration()
    {
        return new Configuration();
    }
}

