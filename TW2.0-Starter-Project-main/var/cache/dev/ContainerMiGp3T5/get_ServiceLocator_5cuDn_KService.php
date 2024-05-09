<?php

namespace ContainerMiGp3T5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_5cuDn_KService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5cuDn.k' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5cuDn.k'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'repo' => ['privates', 'App\\Repository\\TrotinetteRepository', 'getTrotinetteRepositoryService', true],
        ], [
            'entityManager' => '?',
            'repo' => 'App\\Repository\\TrotinetteRepository',
        ]);
    }
}
