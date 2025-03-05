<?php

namespace ContainerHp5eez0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFormFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Factory\FormFactory' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Factory\FormFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Factory/FormFactory.php';

        $a = ($container->privates['form.factory'] ?? $container->load('getForm_FactoryService'));

        if (isset($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\FormFactory'])) {
            return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\FormFactory'];
        }

        return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\FormFactory'] = new \EasyCorp\Bundle\EasyAdminBundle\Factory\FormFactory($a, (isset($container->factories['service_container']['EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator']) ? $container->factories['service_container']['EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator']($container) : self::getAdminUrlGeneratorService($container)));
    }
}
