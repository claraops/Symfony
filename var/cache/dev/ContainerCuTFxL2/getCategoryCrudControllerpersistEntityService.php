<?php

namespace ContainerCuTFxL2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCategoryCrudControllerpersistEntityService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.egipcEH.App\Controller\Admin\CategoryCrudController::persistEntity()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator.egipcEH'] ?? $container->load('get_ServiceLocator_EgipcEHService'));

        if (isset($container->privates['.service_locator.egipcEH.App\\Controller\\Admin\\CategoryCrudController::persistEntity()'])) {
            return $container->privates['.service_locator.egipcEH.App\\Controller\\Admin\\CategoryCrudController::persistEntity()'];
        }

        return $container->privates['.service_locator.egipcEH.App\\Controller\\Admin\\CategoryCrudController::persistEntity()'] = $a->withContext('App\\Controller\\Admin\\CategoryCrudController::persistEntity()', $container);
    }
}
