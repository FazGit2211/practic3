<?php

namespace ContainerZK4e35q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RUzdFWKService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.rUzdFWK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.rUzdFWK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'examenAlumno' => ['privates', '.errored..service_locator.rUzdFWK.App\\Entity\\ExamenAlumno', NULL, 'Cannot autowire service ".service_locator.rUzdFWK": it references class "App\\Entity\\ExamenAlumno" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'examenAlumno' => 'App\\Entity\\ExamenAlumno',
        ]);
    }
}
