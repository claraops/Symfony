<?php

namespace ContainerKKqBVpY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCategoryCrudControllerconfigureActionsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.T.Ra9lS.App\Controller\Admin\CategoryCrudController::configureActions()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.T.Ra9lS.App\\Controller\\Admin\\CategoryCrudController::configureActions()'] = ($container->privates['.service_locator.T.Ra9lS'] ?? $container->load('get_ServiceLocator_T_Ra9lSService'))->withContext('App\\Controller\\Admin\\CategoryCrudController::configureActions()', $container);
    }
}
