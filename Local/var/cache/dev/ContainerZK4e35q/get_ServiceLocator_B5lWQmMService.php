<?php

namespace ContainerZK4e35q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_B5lWQmMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.B5lWQmM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.B5lWQmM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'alumno' => ['privates', '.errored..service_locator.B5lWQmM.App\\Entity\\Alumno', NULL, 'Cannot autowire service ".service_locator.B5lWQmM": it references class "App\\Entity\\Alumno" but no such service exists.'],
            'alumnoRepository' => ['privates', 'App\\Repository\\AlumnoRepository', 'getAlumnoRepositoryService', true],
        ], [
            'alumno' => 'App\\Entity\\Alumno',
            'alumnoRepository' => 'App\\Repository\\AlumnoRepository',
        ]);
    }
}
