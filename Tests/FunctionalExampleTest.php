<?php

namespace CL\Bundle\PackageNameHereBundle\Tests;

use CL\Bundle\PackageNameHereBundle\Example\ExampleClass;
use Symfony\Bundle\FrameworkBundle\Tests\Functional\WebTestCase;

class FunctionalExampleTest extends WebTestCase
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
        //start the symfony kernel
        $kernel = static::createKernel();
        $kernel->boot();

        $this->example = $kernel->getContainer()->get('cl_package_name_here.example');
    }

    /**
     * Tests whether getFoo returns 'bar'
     */
    public function testGetFoo()
    {
        $this->assertEquals('bar', $this->example->getFoo());
    }
}
