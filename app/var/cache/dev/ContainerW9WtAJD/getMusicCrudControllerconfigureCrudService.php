<?php

namespace ContainerW9WtAJD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMusicCrudControllerconfigureCrudService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.OoSfY9L.App\Controller\Admin\MusicCrudController::configureCrud()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.OoSfY9L.App\\Controller\\Admin\\MusicCrudController::configureCrud()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'crud' => ['privates', '.errored..service_locator.OoSfY9L.EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud', NULL, 'Cannot autowire service ".service_locator.OoSfY9L": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud" but no such service exists.'],
        ], [
            'crud' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud',
        ]))->withContext('App\\Controller\\Admin\\MusicCrudController::configureCrud()', $container);
    }
}
