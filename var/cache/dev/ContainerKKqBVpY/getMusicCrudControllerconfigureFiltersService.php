<?php

namespace ContainerKKqBVpY;

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
        return $container->privates['.service_locator.CFbfVRp.App\\Controller\\Admin\\MusicCrudController::configureFilters()'] = ($container->privates['.service_locator.CFbfVRp'] ?? $container->load('get_ServiceLocator_CFbfVRpService'))->withContext('App\\Controller\\Admin\\MusicCrudController::configureFilters()', $container);
    }
}
