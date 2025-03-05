<?php

namespace Container1QSotOx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_2ToJU_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.2ToJ_u.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2ToJ_u.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.zHyJIs5.kernel::registerContainerConfiguration()', 'get_ServiceLocator_ZHyJIs5_KernelregisterContainerConfigurationService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.zHyJIs5.kernel::registerContainerConfiguration()', 'get_ServiceLocator_ZHyJIs5_KernelregisterContainerConfigurationService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.zHyJIs5.kernel::loadRoutes()', 'get_ServiceLocator_ZHyJIs5_KernelloadRoutesService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.zHyJIs5.kernel::loadRoutes()', 'get_ServiceLocator_ZHyJIs5_KernelloadRoutesService', true],
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => ['privates', '.service_locator.5FanY8e.App\\Controller\\Admin\\DashboardController::configureUserMenu()', 'getDashboardControllerconfigureUserMenuService', true],
            'App\\Controller\\Admin\\MusicCrudController::configureCrud' => ['privates', '.service_locator.OoSfY9L.App\\Controller\\Admin\\MusicCrudController::configureCrud()', 'getMusicCrudControllerconfigureCrudService', true],
            'App\\Controller\\Admin\\MusicCrudController::configureAssets' => ['privates', '.service_locator.PE.ZUUL.App\\Controller\\Admin\\MusicCrudController::configureAssets()', 'getMusicCrudControllerconfigureAssetsService', true],
            'App\\Controller\\Admin\\MusicCrudController::configureActions' => ['privates', '.service_locator.T.Ra9lS.App\\Controller\\Admin\\MusicCrudController::configureActions()', 'getMusicCrudControllerconfigureActionsService', true],
            'App\\Controller\\Admin\\MusicCrudController::configureFilters' => ['privates', '.service_locator.CFbfVRp.App\\Controller\\Admin\\MusicCrudController::configureFilters()', 'getMusicCrudControllerconfigureFiltersService', true],
            'App\\Controller\\Admin\\MusicCrudController::index' => ['privates', '.service_locator.IaSFwjD.App\\Controller\\Admin\\MusicCrudController::index()', 'getMusicCrudControllerindexService', true],
            'App\\Controller\\Admin\\MusicCrudController::detail' => ['privates', '.service_locator.IaSFwjD.App\\Controller\\Admin\\MusicCrudController::detail()', 'getMusicCrudControllerdetailService', true],
            'App\\Controller\\Admin\\MusicCrudController::edit' => ['privates', '.service_locator.IaSFwjD.App\\Controller\\Admin\\MusicCrudController::edit()', 'getMusicCrudControllereditService', true],
            'App\\Controller\\Admin\\MusicCrudController::new' => ['privates', '.service_locator.IaSFwjD.App\\Controller\\Admin\\MusicCrudController::new()', 'getMusicCrudControllernewService', true],
            'App\\Controller\\Admin\\MusicCrudController::delete' => ['privates', '.service_locator.IaSFwjD.App\\Controller\\Admin\\MusicCrudController::delete()', 'getMusicCrudControllerdeleteService', true],
            'App\\Controller\\Admin\\MusicCrudController::batchDelete' => ['privates', '.service_locator.oDo8ofG.App\\Controller\\Admin\\MusicCrudController::batchDelete()', 'getMusicCrudControllerbatchDeleteService', true],
            'App\\Controller\\Admin\\MusicCrudController::autocomplete' => ['privates', '.service_locator.IaSFwjD.App\\Controller\\Admin\\MusicCrudController::autocomplete()', 'getMusicCrudControllerautocompleteService', true],
            'App\\Controller\\Admin\\MusicCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.kqcX6wc.App\\Controller\\Admin\\MusicCrudController::createIndexQueryBuilder()', 'getMusicCrudControllercreateIndexQueryBuilderService', true],
            'App\\Controller\\Admin\\MusicCrudController::renderFilters' => ['privates', '.service_locator.IaSFwjD.App\\Controller\\Admin\\MusicCrudController::renderFilters()', 'getMusicCrudControllerrenderFiltersService', true],
            'App\\Controller\\Admin\\MusicCrudController::updateEntity' => ['privates', '.service_locator.egipcEH.App\\Controller\\Admin\\MusicCrudController::updateEntity()', 'getMusicCrudControllerupdateEntityService', true],
            'App\\Controller\\Admin\\MusicCrudController::persistEntity' => ['privates', '.service_locator.egipcEH.App\\Controller\\Admin\\MusicCrudController::persistEntity()', 'getMusicCrudControllerpersistEntityService', true],
            'App\\Controller\\Admin\\MusicCrudController::deleteEntity' => ['privates', '.service_locator.egipcEH.App\\Controller\\Admin\\MusicCrudController::deleteEntity()', 'getMusicCrudControllerdeleteEntityService', true],
            'App\\Controller\\Admin\\MusicCrudController::createEditForm' => ['privates', '.service_locator.CaejQBj.App\\Controller\\Admin\\MusicCrudController::createEditForm()', 'getMusicCrudControllercreateEditFormService', true],
            'App\\Controller\\Admin\\MusicCrudController::createEditFormBuilder' => ['privates', '.service_locator.CaejQBj.App\\Controller\\Admin\\MusicCrudController::createEditFormBuilder()', 'getMusicCrudControllercreateEditFormBuilderService', true],
            'App\\Controller\\Admin\\MusicCrudController::createNewForm' => ['privates', '.service_locator.CaejQBj.App\\Controller\\Admin\\MusicCrudController::createNewForm()', 'getMusicCrudControllercreateNewFormService', true],
            'App\\Controller\\Admin\\MusicCrudController::createNewFormBuilder' => ['privates', '.service_locator.CaejQBj.App\\Controller\\Admin\\MusicCrudController::createNewFormBuilder()', 'getMusicCrudControllercreateNewFormBuilderService', true],
            'App\\Controller\\Admin\\MusicCrudController::configureResponseParameters' => ['privates', '.service_locator.ib1WIGE.App\\Controller\\Admin\\MusicCrudController::configureResponseParameters()', 'getMusicCrudControllerconfigureResponseParametersService', true],
            'App\\Controller\\MuscicController::index' => ['privates', '.service_locator.n_0ia6A.App\\Controller\\MuscicController::index()', 'getMuscicControllerindexService', true],
            'App\\Controller\\MuscicController::new' => ['privates', '.service_locator.egipcEH.App\\Controller\\MuscicController::new()', 'getMuscicControllernewService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.KAWHxDW.App\\Controller\\RegistrationController::register()', 'getRegistrationControllerregisterService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.zHyJIs5.kernel::registerContainerConfiguration()', 'get_ServiceLocator_ZHyJIs5_KernelregisterContainerConfigurationService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.zHyJIs5.kernel::loadRoutes()', 'get_ServiceLocator_ZHyJIs5_KernelloadRoutesService', true],
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => ['privates', '.service_locator.5FanY8e.App\\Controller\\Admin\\DashboardController::configureUserMenu()', 'getDashboardControllerconfigureUserMenuService', true],
            'App\\Controller\\Admin\\MusicCrudController:configureCrud' => ['privates', '.service_locator.OoSfY9L.App\\Controller\\Admin\\MusicCrudController::configureCrud()', 'getMusicCrudControllerconfigureCrudService', true],
            'App\\Controller\\Admin\\MusicCrudController:configureAssets' => ['privates', '.service_locator.PE.ZUUL.App\\Controller\\Admin\\MusicCrudController::configureAssets()', 'getMusicCrudControllerconfigureAssetsService', true],
            'App\\Controller\\Admin\\MusicCrudController:configureActions' => ['privates', '.service_locator.T.Ra9lS.App\\Controller\\Admin\\MusicCrudController::configureActions()', 'getMusicCrudControllerconfigureActionsService', true],
            'App\\Controller\\Admin\\MusicCrudController:configureFilters' => ['privates', '.service_locator.CFbfVRp.App\\Controller\\Admin\\MusicCrudController::configureFilters()', 'getMusicCrudControllerconfigureFiltersService', true],
            'App\\Controller\\Admin\\MusicCrudController:index' => ['privates', '.service_locator.IaSFwjD.App\\Controller\\Admin\\MusicCrudController::index()', 'getMusicCrudControllerindexService', true],
            'App\\Controller\\Admin\\MusicCrudController:detail' => ['privates', '.service_locator.IaSFwjD.App\\Controller\\Admin\\MusicCrudController::detail()', 'getMusicCrudControllerdetailService', true],
            'App\\Controller\\Admin\\MusicCrudController:edit' => ['privates', '.service_locator.IaSFwjD.App\\Controller\\Admin\\MusicCrudController::edit()', 'getMusicCrudControllereditService', true],
            'App\\Controller\\Admin\\MusicCrudController:new' => ['privates', '.service_locator.IaSFwjD.App\\Controller\\Admin\\MusicCrudController::new()', 'getMusicCrudControllernewService', true],
            'App\\Controller\\Admin\\MusicCrudController:delete' => ['privates', '.service_locator.IaSFwjD.App\\Controller\\Admin\\MusicCrudController::delete()', 'getMusicCrudControllerdeleteService', true],
            'App\\Controller\\Admin\\MusicCrudController:batchDelete' => ['privates', '.service_locator.oDo8ofG.App\\Controller\\Admin\\MusicCrudController::batchDelete()', 'getMusicCrudControllerbatchDeleteService', true],
            'App\\Controller\\Admin\\MusicCrudController:autocomplete' => ['privates', '.service_locator.IaSFwjD.App\\Controller\\Admin\\MusicCrudController::autocomplete()', 'getMusicCrudControllerautocompleteService', true],
            'App\\Controller\\Admin\\MusicCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.kqcX6wc.App\\Controller\\Admin\\MusicCrudController::createIndexQueryBuilder()', 'getMusicCrudControllercreateIndexQueryBuilderService', true],
            'App\\Controller\\Admin\\MusicCrudController:renderFilters' => ['privates', '.service_locator.IaSFwjD.App\\Controller\\Admin\\MusicCrudController::renderFilters()', 'getMusicCrudControllerrenderFiltersService', true],
            'App\\Controller\\Admin\\MusicCrudController:updateEntity' => ['privates', '.service_locator.egipcEH.App\\Controller\\Admin\\MusicCrudController::updateEntity()', 'getMusicCrudControllerupdateEntityService', true],
            'App\\Controller\\Admin\\MusicCrudController:persistEntity' => ['privates', '.service_locator.egipcEH.App\\Controller\\Admin\\MusicCrudController::persistEntity()', 'getMusicCrudControllerpersistEntityService', true],
            'App\\Controller\\Admin\\MusicCrudController:deleteEntity' => ['privates', '.service_locator.egipcEH.App\\Controller\\Admin\\MusicCrudController::deleteEntity()', 'getMusicCrudControllerdeleteEntityService', true],
            'App\\Controller\\Admin\\MusicCrudController:createEditForm' => ['privates', '.service_locator.CaejQBj.App\\Controller\\Admin\\MusicCrudController::createEditForm()', 'getMusicCrudControllercreateEditFormService', true],
            'App\\Controller\\Admin\\MusicCrudController:createEditFormBuilder' => ['privates', '.service_locator.CaejQBj.App\\Controller\\Admin\\MusicCrudController::createEditFormBuilder()', 'getMusicCrudControllercreateEditFormBuilderService', true],
            'App\\Controller\\Admin\\MusicCrudController:createNewForm' => ['privates', '.service_locator.CaejQBj.App\\Controller\\Admin\\MusicCrudController::createNewForm()', 'getMusicCrudControllercreateNewFormService', true],
            'App\\Controller\\Admin\\MusicCrudController:createNewFormBuilder' => ['privates', '.service_locator.CaejQBj.App\\Controller\\Admin\\MusicCrudController::createNewFormBuilder()', 'getMusicCrudControllercreateNewFormBuilderService', true],
            'App\\Controller\\Admin\\MusicCrudController:configureResponseParameters' => ['privates', '.service_locator.ib1WIGE.App\\Controller\\Admin\\MusicCrudController::configureResponseParameters()', 'getMusicCrudControllerconfigureResponseParametersService', true],
            'App\\Controller\\MuscicController:index' => ['privates', '.service_locator.n_0ia6A.App\\Controller\\MuscicController::index()', 'getMuscicControllerindexService', true],
            'App\\Controller\\MuscicController:new' => ['privates', '.service_locator.egipcEH.App\\Controller\\MuscicController::new()', 'getMuscicControllernewService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.KAWHxDW.App\\Controller\\RegistrationController::register()', 'getRegistrationControllerregisterService', true],
        ], [
            'kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => '?',
            'App\\Controller\\Admin\\MusicCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\MusicCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\MusicCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\MusicCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\MusicCrudController::index' => '?',
            'App\\Controller\\Admin\\MusicCrudController::detail' => '?',
            'App\\Controller\\Admin\\MusicCrudController::edit' => '?',
            'App\\Controller\\Admin\\MusicCrudController::new' => '?',
            'App\\Controller\\Admin\\MusicCrudController::delete' => '?',
            'App\\Controller\\Admin\\MusicCrudController::batchDelete' => '?',
            'App\\Controller\\Admin\\MusicCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\MusicCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\MusicCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\MusicCrudController::updateEntity' => '?',
            'App\\Controller\\Admin\\MusicCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\MusicCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\MusicCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\MusicCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\MusicCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\MusicCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\MusicCrudController::configureResponseParameters' => '?',
            'App\\Controller\\MuscicController::index' => '?',
            'App\\Controller\\MuscicController::new' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:loadRoutes' => '?',
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => '?',
            'App\\Controller\\Admin\\MusicCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\MusicCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\MusicCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\MusicCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\MusicCrudController:index' => '?',
            'App\\Controller\\Admin\\MusicCrudController:detail' => '?',
            'App\\Controller\\Admin\\MusicCrudController:edit' => '?',
            'App\\Controller\\Admin\\MusicCrudController:new' => '?',
            'App\\Controller\\Admin\\MusicCrudController:delete' => '?',
            'App\\Controller\\Admin\\MusicCrudController:batchDelete' => '?',
            'App\\Controller\\Admin\\MusicCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\MusicCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\MusicCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\MusicCrudController:updateEntity' => '?',
            'App\\Controller\\Admin\\MusicCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\MusicCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\MusicCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\MusicCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\MusicCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\MusicCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\MusicCrudController:configureResponseParameters' => '?',
            'App\\Controller\\MuscicController:index' => '?',
            'App\\Controller\\MuscicController:new' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
        ]);
    }
}
