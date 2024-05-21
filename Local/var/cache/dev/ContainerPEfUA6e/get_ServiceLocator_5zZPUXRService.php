<?php

namespace ContainerPEfUA6e;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_5zZPUXRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5zZPUXR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5zZPUXR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'comision' => ['privates', '.errored..service_locator.5zZPUXR.App\\Entity\\Comision', NULL, 'Cannot autowire service ".service_locator.5zZPUXR": it references class "App\\Entity\\Comision" but no such service exists.'],
            'comisionRepository' => ['privates', 'App\\Repository\\ComisionRepository', 'getComisionRepositoryService', true],
        ], [
            'comision' => 'App\\Entity\\Comision',
            'comisionRepository' => 'App\\Repository\\ComisionRepository',
        ]);
    }
}
