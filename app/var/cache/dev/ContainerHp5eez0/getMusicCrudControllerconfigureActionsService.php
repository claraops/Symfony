<?php

namespace ContainerHp5eez0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMusicCrudControllerconfigureActionsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.T.Ra9lS.App\Controller\Admin\MusicCrudController::configureActions()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.T.Ra9lS.App\\Controller\\Admin\\MusicCrudController::configureActions()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'actions' => ['privates', '.errored..service_locator.T.Ra9lS.EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Actions', NULL, 'Cannot autowire service ".service_locator.T.Ra9lS": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Actions" but no such service exists.'],
        ], [
            'actions' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Actions',
        ]))->withContext('App\\Controller\\Admin\\MusicCrudController::configureActions()', $container);
    }
}
