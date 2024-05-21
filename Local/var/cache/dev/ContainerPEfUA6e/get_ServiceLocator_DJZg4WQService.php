<?php

namespace ContainerPEfUA6e;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DJZg4WQService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.dJZg4WQ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dJZg4WQ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cursadaDocente' => ['privates', '.errored..service_locator.dJZg4WQ.App\\Entity\\CursadaDocente', NULL, 'Cannot autowire service ".service_locator.dJZg4WQ": it references class "App\\Entity\\CursadaDocente" but no such service exists.'],
            'cursadaDocenteRepository' => ['privates', 'App\\Repository\\CursadaDocenteRepository', 'getCursadaDocenteRepositoryService', true],
        ], [
            'cursadaDocente' => 'App\\Entity\\CursadaDocente',
            'cursadaDocenteRepository' => 'App\\Repository\\CursadaDocenteRepository',
        ]);
    }
}
