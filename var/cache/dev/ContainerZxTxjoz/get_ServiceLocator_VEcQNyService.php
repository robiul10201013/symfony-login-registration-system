<?php

namespace ContainerZxTxjoz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VEcQNyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.vEcQ_Ny' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.vEcQ_Ny'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.V6D1oJY', 'get_ServiceLocator_V6D1oJYService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\TaskController::delete' => ['privates', '.service_locator.O6OaqSf', 'get_ServiceLocator_O6OaqSfService', true],
            'App\\Controller\\TaskController::edit' => ['privates', '.service_locator.O6OaqSf', 'get_ServiceLocator_O6OaqSfService', true],
            'App\\Controller\\TaskController::index' => ['privates', '.service_locator.MW5AobQ', 'get_ServiceLocator_MW5AobQService', true],
            'App\\Controller\\TaskController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\TaskController::show' => ['privates', '.service_locator.Cr7VRs3', 'get_ServiceLocator_Cr7VRs3Service', true],
            'App\\Controller\\TasktController::createTask' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.V6D1oJY', 'get_ServiceLocator_V6D1oJYService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\TaskController:delete' => ['privates', '.service_locator.O6OaqSf', 'get_ServiceLocator_O6OaqSfService', true],
            'App\\Controller\\TaskController:edit' => ['privates', '.service_locator.O6OaqSf', 'get_ServiceLocator_O6OaqSfService', true],
            'App\\Controller\\TaskController:index' => ['privates', '.service_locator.MW5AobQ', 'get_ServiceLocator_MW5AobQService', true],
            'App\\Controller\\TaskController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\TaskController:show' => ['privates', '.service_locator.Cr7VRs3', 'get_ServiceLocator_Cr7VRs3Service', true],
            'App\\Controller\\TasktController:createTask' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\TaskController::delete' => '?',
            'App\\Controller\\TaskController::edit' => '?',
            'App\\Controller\\TaskController::index' => '?',
            'App\\Controller\\TaskController::new' => '?',
            'App\\Controller\\TaskController::show' => '?',
            'App\\Controller\\TasktController::createTask' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\TaskController:delete' => '?',
            'App\\Controller\\TaskController:edit' => '?',
            'App\\Controller\\TaskController:index' => '?',
            'App\\Controller\\TaskController:new' => '?',
            'App\\Controller\\TaskController:show' => '?',
            'App\\Controller\\TasktController:createTask' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
