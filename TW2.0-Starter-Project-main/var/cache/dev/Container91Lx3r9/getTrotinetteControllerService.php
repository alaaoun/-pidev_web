<?php

namespace Container91Lx3r9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTrotinetteControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\TrotinetteController' shared autowired service.
     *
     * @return \App\Controller\TrotinetteController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'TrotinetteController.php';

        $container->services['App\\Controller\\TrotinetteController'] = $instance = new \App\Controller\TrotinetteController(($container->privates['App\\Repository\\StationRepository'] ?? $container->load('getStationRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\TrotinetteController', $container));

        return $instance;
    }
}
