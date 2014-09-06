<?php

namespace CL\Bundle\PackageNameHereBundle\Tests;

use CL\Bundle\PackageNameHereBundle\Example\ExampleClass;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class FunctionalExampleTest extends KernelTestCase
{
    /**
     * @var ExampleClass
     */
    protected $example;

    /**
     * {@inheritdoc}
     */
    public function setUp()
    {
        $this->example = static::$kernel->getContainer()->get('cl_package_name_here.example');
    }

    /**
     * Tests whether getFoo returns 'bar'
     */
    public function testGetFoo()
    {
        $this->assertEquals('bar', $this->example->getFoo());
    }
}
