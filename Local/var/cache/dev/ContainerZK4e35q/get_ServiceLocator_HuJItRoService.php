<?php

namespace ContainerZK4e35q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HuJItRoService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.HuJItRo' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.HuJItRo'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'pai' => ['privates', '.errored..service_locator.HuJItRo.App\\Entity\\Pais', NULL, 'Cannot autowire service ".service_locator.HuJItRo": it references class "App\\Entity\\Pais" but no such service exists.'],
        ], [
            'pai' => 'App\\Entity\\Pais',
        ]);
    }
}
