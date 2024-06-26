<?php

namespace ContainerHvuCxlx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PmsjtgGService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.pmsjtgG' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.pmsjtgG'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'stationRepository' => ['privates', 'App\\Repository\\StationRepository', 'getStationRepositoryService', true],
            'trotinetteRepository' => ['privates', 'App\\Repository\\TrotinetteRepository', 'getTrotinetteRepositoryService', true],
        ], [
            'stationRepository' => 'App\\Repository\\StationRepository',
            'trotinetteRepository' => 'App\\Repository\\TrotinetteRepository',
        ]);
    }
}
