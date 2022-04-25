<?php

namespace ContainerSP5i1uM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAuthorControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\AuthorController' shared autowired service.
     *
     * @return \App\Controller\AuthorController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/AuthorController.php';

        $container->services['App\\Controller\\AuthorController'] = $instance = new \App\Controller\AuthorController(($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()), ($container->privates['App\\Repository\\BookRepository'] ?? $container->load('getBookRepositoryService')), ($container->privates['App\\Repository\\OpinionRepository'] ?? $container->load('getOpinionRepositoryService')), ($container->services['doctrine'] ?? $container->load('getDoctrineService')), ($container->services['.container.private.validator'] ?? $container->load('get_Container_Private_ValidatorService')));

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\AuthorController', $container));

        return $instance;
    }
}
