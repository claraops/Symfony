<?php

namespace ContainerKKqBVpY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCategoryCrudControllerbatchDeleteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.oDo8ofG.App\Controller\Admin\CategoryCrudController::batchDelete()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.oDo8ofG.App\\Controller\\Admin\\CategoryCrudController::batchDelete()'] = ($container->privates['.service_locator.oDo8ofG'] ?? $container->load('get_ServiceLocator_ODo8ofGService'))->withContext('App\\Controller\\Admin\\CategoryCrudController::batchDelete()', $container);
    }
}
