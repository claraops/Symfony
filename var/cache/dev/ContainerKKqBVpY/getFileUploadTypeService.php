<?php

namespace ContainerKKqBVpY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFileUploadTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Form\Type\FileUploadType' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Form\Type\FileUploadType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/DataMapperInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Form/Type/FileUploadType.php';

        return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FileUploadType'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\FileUploadType(\dirname(__DIR__, 4));
    }
}
