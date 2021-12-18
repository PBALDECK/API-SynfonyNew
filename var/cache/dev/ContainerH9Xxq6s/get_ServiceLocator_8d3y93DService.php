<?php

namespace ContainerH9Xxq6s;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8d3y93DService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.8d3y93D' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8d3y93D'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\PostController::all' => ['privates', '.service_locator.Xf_chUG', 'get_ServiceLocator_XfChUGService', true],
            'App\\Controller\\PostController::index' => ['privates', '.service_locator.Xf_chUG', 'get_ServiceLocator_XfChUGService', true],
            'App\\Controller\\PostController::read' => ['privates', '.service_locator.L649L.c', 'get_ServiceLocator_L649L_CService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\UserController::index' => ['privates', '.service_locator.Q1F27w5', 'get_ServiceLocator_Q1F27w5Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'App\\Controller\\PostController:all' => ['privates', '.service_locator.Xf_chUG', 'get_ServiceLocator_XfChUGService', true],
            'App\\Controller\\PostController:index' => ['privates', '.service_locator.Xf_chUG', 'get_ServiceLocator_XfChUGService', true],
            'App\\Controller\\PostController:read' => ['privates', '.service_locator.L649L.c', 'get_ServiceLocator_L649L_CService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\UserController:index' => ['privates', '.service_locator.Q1F27w5', 'get_ServiceLocator_Q1F27w5Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
        ], [
            'App\\Controller\\PostController::all' => '?',
            'App\\Controller\\PostController::index' => '?',
            'App\\Controller\\PostController::read' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\UserController::index' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\PostController:all' => '?',
            'App\\Controller\\PostController:index' => '?',
            'App\\Controller\\PostController:read' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\UserController:index' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
