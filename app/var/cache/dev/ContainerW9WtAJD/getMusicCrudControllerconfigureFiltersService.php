<?php

namespace ContainerW9WtAJD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMusicCrudControllerconfigureFiltersService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.CFbfVRp.App\Controller\Admin\MusicCrudController::configureFilters()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.CFbfVRp.App\\Controller\\Admin\\MusicCrudController::configureFilters()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'filters' => ['privates', '.errored..service_locator.CFbfVRp.EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Filters', NULL, 'Cannot autowire service ".service_locator.CFbfVRp": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Filters" but no such service exists.'],
        ], [
            'filters' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Filters',
        ]))->withContext('App\\Controller\\Admin\\MusicCrudController::configureFilters()', $container);
    }
}
