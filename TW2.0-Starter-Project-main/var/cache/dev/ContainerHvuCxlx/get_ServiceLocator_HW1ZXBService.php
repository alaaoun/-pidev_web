<?php

namespace ContainerHvuCxlx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HW1ZXBService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.HW1Z_xB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.HW1Z_xB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repo' => ['privates', 'App\\Repository\\TrotinetteRepository', 'getTrotinetteRepositoryService', true],
        ], [
            'repo' => 'App\\Repository\\TrotinetteRepository',
        ]);
    }
}
