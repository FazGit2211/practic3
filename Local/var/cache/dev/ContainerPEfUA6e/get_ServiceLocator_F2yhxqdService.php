<?php

namespace ContainerPEfUA6e;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_F2yhxqdService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.f2yhxqd' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.f2yhxqd'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'modalidad' => ['privates', '.errored..service_locator.f2yhxqd.App\\Entity\\Modalidad', NULL, 'Cannot autowire service ".service_locator.f2yhxqd": it references class "App\\Entity\\Modalidad" but no such service exists.'],
        ], [
            'modalidad' => 'App\\Entity\\Modalidad',
        ]);
    }
}
