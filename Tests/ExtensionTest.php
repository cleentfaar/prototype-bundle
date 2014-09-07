<?php

namespace CL\Bundle\PackageNameHereBundle\Tests;

use CL\Bundle\PackageNameHereBundle\DependencyInjection\CLPackageNameExtension;
use Matthias\SymfonyDependencyInjectionTest\PhpUnit\AbstractExtensionTestCase;

class MyExtensionTest extends AbstractExtensionTestCase
{
    protected function getContainerExtensions()
    {
        return array(
            new CLPackageNameExtension()
        );
    }
}
