<?php

namespace ContainerMiGp3T5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_C9lxIDZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.C9lxIDZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.C9lxIDZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'manager' => ['services', 'doctrine', 'getDoctrineService', false],
            'repo' => ['privates', 'App\\Repository\\TrotinetteRepository', 'getTrotinetteRepositoryService', true],
        ], [
            'manager' => '?',
            'repo' => 'App\\Repository\\TrotinetteRepository',
        ]);
    }
}
