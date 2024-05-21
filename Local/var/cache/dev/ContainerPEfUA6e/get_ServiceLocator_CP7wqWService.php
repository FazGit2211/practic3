<?php

namespace ContainerPEfUA6e;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CP7wqWService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.C_P7wqW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.C_P7wqW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'turnoRepository' => ['privates', 'App\\Repository\\TurnoRepository', 'getTurnoRepositoryService', true],
        ], [
            'turnoRepository' => 'App\\Repository\\TurnoRepository',
        ]);
    }
}
