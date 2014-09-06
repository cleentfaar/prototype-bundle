<?php

namespace CL\PackageNameHere\Tests;

use CL\PackageNameHere\Example\ExampleClass;

class ExampleTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ExampleClass
     */
    protected $example;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->example = new ExampleClass();
    }

    /**
     * Tests whether getFoo returns 'bar'
     */
    public function testGetFoo()
    {
        $this->assertEquals('bar', $this->example->getFoo());
    }
}
