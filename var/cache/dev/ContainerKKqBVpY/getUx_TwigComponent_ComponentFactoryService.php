<?php

namespace ContainerKKqBVpY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUx_TwigComponent_ComponentFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'ux.twig_component.component_factory' shared service.
     *
     * @return \Symfony\UX\TwigComponent\ComponentFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-twig-component/src/ComponentFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-twig-component/src/ComponentTemplateFinderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-twig-component/src/ComponentTemplateFinder.php';

        $a = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        if (isset($container->privates['ux.twig_component.component_factory'])) {
            return $container->privates['ux.twig_component.component_factory'];
        }

        return $container->privates['ux.twig_component.component_factory'] = new \Symfony\UX\TwigComponent\ComponentFactory(new \Symfony\UX\TwigComponent\ComponentTemplateFinder(($container->privates['twig.loader.native_filesystem'] ?? self::getTwig_Loader_NativeFilesystemService($container)), 'components/'), new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'ea:Icon' => [false, 'EasyCorp\\Bundle\\EasyAdminBundle\\Twig\\Component\\Icon', 'getIconService', true],
            'ea:Flag' => [false, 'EasyCorp\\Bundle\\EasyAdminBundle\\Twig\\Component\\Flag', 'getFlagService', true],
            'ea:Alert' => [false, 'EasyCorp\\Bundle\\EasyAdminBundle\\Twig\\Component\\Alert', 'getAlertService', true],
        ], [
            'ea:Icon' => '?',
            'ea:Flag' => '?',
            'ea:Alert' => '?',
        ]), ($container->privates['property_accessor'] ?? self::getPropertyAccessorService($container)), $a, ['ea:Icon' => ['key' => 'ea:Icon', 'service_id' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Twig\\Component\\Icon', 'class' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Twig\\Component\\Icon', 'template' => '@EasyAdmin/components/Icon.html.twig', 'pre_mount' => [], 'mount' => [], 'post_mount' => []], 'ea:Flag' => ['key' => 'ea:Flag', 'service_id' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Twig\\Component\\Flag', 'class' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Twig\\Component\\Flag', 'template' => '@EasyAdmin/components/Flag.html.twig', 'pre_mount' => [], 'mount' => [], 'post_mount' => []], 'ea:Alert' => ['key' => 'ea:Alert', 'service_id' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Twig\\Component\\Alert', 'class' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Twig\\Component\\Alert', 'template' => '@EasyAdmin/components/Alert.html.twig', 'pre_mount' => [], 'mount' => ['mount'], 'post_mount' => []]], ['EasyCorp\\Bundle\\EasyAdminBundle\\Twig\\Component\\Icon' => 'ea:Icon', 'EasyCorp\\Bundle\\EasyAdminBundle\\Twig\\Component\\Flag' => 'ea:Flag', 'EasyCorp\\Bundle\\EasyAdminBundle\\Twig\\Component\\Alert' => 'ea:Alert']);
    }
}
