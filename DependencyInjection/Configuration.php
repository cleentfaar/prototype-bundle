<?php

namespace CL\Bundle\PackageNameHereBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('cl_package_name_here');
        $rootNode
            ->isRequired()
            ->children()
                ->scalarNode('foo')
                    ->isRequired()
                ->end()
            ->end();

        return $treeBuilder;
    }
}
