<?php

namespace ContainerPEfUA6e;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KrxMLqXService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.KrxMLqX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.KrxMLqX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'examenFinal' => ['privates', '.errored..service_locator.KrxMLqX.App\\Entity\\ExamenFinal', NULL, 'Cannot autowire service ".service_locator.KrxMLqX": it references class "App\\Entity\\ExamenFinal" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'examenFinal' => 'App\\Entity\\ExamenFinal',
        ]);
    }
}
