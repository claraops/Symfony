<?php

namespace ContainerW9WtAJD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMusicCrudControllerdetailService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.IaSFwjD.App\Controller\Admin\MusicCrudController::detail()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.IaSFwjD.App\\Controller\\Admin\\MusicCrudController::detail()'] = ($container->privates['.service_locator.IaSFwjD'] ?? $container->load('get_ServiceLocator_IaSFwjDService'))->withContext('App\\Controller\\Admin\\MusicCrudController::detail()', $container);
    }
}
