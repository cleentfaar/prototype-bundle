<?php

namespace CL\Bundle\PackageNameHereBundle\Tests;

use CL\Bundle\PackageNameHereBundle\DependencyInjection\CLPackageNameExtension;
use Matthias\SymfonyDependencyInjectionTest\PhpUnit\AbstractExtensionTestCase;

class ExtensionTest extends AbstractExtensionTestCase
{
    /**
     * @test
     */
    public function testParameters()
    {
        $this->load(['foo' => 'bar']);

        $this->assertContainerBuilderHasParameter('apple', 'pear');
    }

    /**
     * {@inheritdoc}
     */
    protected function getContainerExtensions()
    {
        return array(
            new CLPackageNameExtension()
        );
    }
}
