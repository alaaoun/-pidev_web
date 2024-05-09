<?php

namespace ContainerHvuCxlx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RG2dxicService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.RG2dxic' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.RG2dxic'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\StationController::add' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\StationController::delete' => ['privates', '.service_locator.LUZGmvf', 'get_ServiceLocator_LUZGmvfService', true],
            'App\\Controller\\StationController::getAll' => ['privates', '.service_locator.4AVwkil', 'get_ServiceLocator_4AVwkilService', true],
            'App\\Controller\\StationController::update' => ['privates', '.service_locator.5K265bC', 'get_ServiceLocator_5K265bCService', true],
            'App\\Controller\\TrotinetteController::add' => ['privates', '.service_locator.cGXO4ey', 'get_ServiceLocator_CGXO4eyService', true],
            'App\\Controller\\TrotinetteController::delete' => ['privates', '.service_locator.C9lxIDZ', 'get_ServiceLocator_C9lxIDZService', true],
            'App\\Controller\\TrotinetteController::generateExcel' => ['privates', '.service_locator.uK498Eg', 'get_ServiceLocator_UK498EgService', true],
            'App\\Controller\\TrotinetteController::getAll' => ['privates', '.service_locator.HW1Z_xB', 'get_ServiceLocator_HW1ZXBService', true],
            'App\\Controller\\TrotinetteController::my_commandes' => ['privates', '.service_locator.pmsjtgG', 'get_ServiceLocator_PmsjtgGService', true],
            'App\\Controller\\TrotinetteController::statistiques' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\TrotinetteController::update' => ['privates', '.service_locator.5cuDn.k', 'get_ServiceLocator_5cuDn_KService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\StationController:add' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\StationController:delete' => ['privates', '.service_locator.LUZGmvf', 'get_ServiceLocator_LUZGmvfService', true],
            'App\\Controller\\StationController:getAll' => ['privates', '.service_locator.4AVwkil', 'get_ServiceLocator_4AVwkilService', true],
            'App\\Controller\\StationController:update' => ['privates', '.service_locator.5K265bC', 'get_ServiceLocator_5K265bCService', true],
            'App\\Controller\\TrotinetteController:add' => ['privates', '.service_locator.cGXO4ey', 'get_ServiceLocator_CGXO4eyService', true],
            'App\\Controller\\TrotinetteController:delete' => ['privates', '.service_locator.C9lxIDZ', 'get_ServiceLocator_C9lxIDZService', true],
            'App\\Controller\\TrotinetteController:generateExcel' => ['privates', '.service_locator.uK498Eg', 'get_ServiceLocator_UK498EgService', true],
            'App\\Controller\\TrotinetteController:getAll' => ['privates', '.service_locator.HW1Z_xB', 'get_ServiceLocator_HW1ZXBService', true],
            'App\\Controller\\TrotinetteController:my_commandes' => ['privates', '.service_locator.pmsjtgG', 'get_ServiceLocator_PmsjtgGService', true],
            'App\\Controller\\TrotinetteController:statistiques' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\TrotinetteController:update' => ['privates', '.service_locator.5cuDn.k', 'get_ServiceLocator_5cuDn_KService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\StationController::add' => '?',
            'App\\Controller\\StationController::delete' => '?',
            'App\\Controller\\StationController::getAll' => '?',
            'App\\Controller\\StationController::update' => '?',
            'App\\Controller\\TrotinetteController::add' => '?',
            'App\\Controller\\TrotinetteController::delete' => '?',
            'App\\Controller\\TrotinetteController::generateExcel' => '?',
            'App\\Controller\\TrotinetteController::getAll' => '?',
            'App\\Controller\\TrotinetteController::my_commandes' => '?',
            'App\\Controller\\TrotinetteController::statistiques' => '?',
            'App\\Controller\\TrotinetteController::update' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\StationController:add' => '?',
            'App\\Controller\\StationController:delete' => '?',
            'App\\Controller\\StationController:getAll' => '?',
            'App\\Controller\\StationController:update' => '?',
            'App\\Controller\\TrotinetteController:add' => '?',
            'App\\Controller\\TrotinetteController:delete' => '?',
            'App\\Controller\\TrotinetteController:generateExcel' => '?',
            'App\\Controller\\TrotinetteController:getAll' => '?',
            'App\\Controller\\TrotinetteController:my_commandes' => '?',
            'App\\Controller\\TrotinetteController:statistiques' => '?',
            'App\\Controller\\TrotinetteController:update' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
