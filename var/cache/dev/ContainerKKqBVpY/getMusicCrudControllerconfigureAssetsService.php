<?php

namespace ContainerKKqBVpY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMusicCrudControllerconfigureAssetsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.PE.ZUUL.App\Controller\Admin\MusicCrudController::configureAssets()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PE.ZUUL.App\\Controller\\Admin\\MusicCrudController::configureAssets()'] = ($container->privates['.service_locator.PE.ZUUL'] ?? $container->load('get_ServiceLocator_PE_ZUULService'))->withContext('App\\Controller\\Admin\\MusicCrudController::configureAssets()', $container);
    }
}
