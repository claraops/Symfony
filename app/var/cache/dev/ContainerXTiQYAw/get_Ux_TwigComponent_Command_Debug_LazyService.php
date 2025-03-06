<?php

namespace ContainerXTiQYAw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Ux_TwigComponent_Command_Debug_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.ux.twig_component.command.debug.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.ux.twig_component.command.debug.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('debug:twig-component', [], 'Display components and them usages for an application', false, #[\Closure(name: 'ux.twig_component.command.debug', class: 'Symfony\\UX\\TwigComponent\\Command\\TwigComponentDebugCommand')] fn (): \Symfony\UX\TwigComponent\Command\TwigComponentDebugCommand => ($container->privates['ux.twig_component.command.debug'] ?? $container->load('getUx_TwigComponent_Command_DebugService')));
    }
}
