<?php

namespace ContainerPEfUA6e;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Is9d6bIService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.is9d6bI' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.is9d6bI'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'region' => ['privates', '.errored..service_locator.is9d6bI.App\\Entity\\Region', NULL, 'Cannot autowire service ".service_locator.is9d6bI": it references class "App\\Entity\\Region" but no such service exists.'],
        ], [
            'region' => 'App\\Entity\\Region',
        ]);
    }
}
