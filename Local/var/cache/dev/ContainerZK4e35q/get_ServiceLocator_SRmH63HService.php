<?php

namespace ContainerZK4e35q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SRmH63HService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.sRmH63H' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.sRmH63H'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'docente' => ['privates', '.errored..service_locator.sRmH63H.App\\Entity\\Docente', NULL, 'Cannot autowire service ".service_locator.sRmH63H": it references class "App\\Entity\\Docente" but no such service exists.'],
        ], [
            'docente' => 'App\\Entity\\Docente',
        ]);
    }
}
