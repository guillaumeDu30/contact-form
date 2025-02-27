<?php

namespace ContainerG4sC7gf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DgmsLLGService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.dgmsLLG' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dgmsLLG'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AdminQuestionController::questions' => ['privates', '.service_locator._nU1_Up', 'get_ServiceLocator_NU1UpService', true],
            'App\\Controller\\PersonneController::new' => ['privates', '.service_locator._wA_b5l', 'get_ServiceLocator_WAB5lService', true],
            'App\\Controller\\PersonneController::voirQuestions' => ['privates', '.service_locator.ji7KCYF', 'get_ServiceLocator_Ji7KCYFService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\AdminQuestionController:questions' => ['privates', '.service_locator._nU1_Up', 'get_ServiceLocator_NU1UpService', true],
            'App\\Controller\\PersonneController:new' => ['privates', '.service_locator._wA_b5l', 'get_ServiceLocator_WAB5lService', true],
            'App\\Controller\\PersonneController:voirQuestions' => ['privates', '.service_locator.ji7KCYF', 'get_ServiceLocator_Ji7KCYFService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\AdminQuestionController::questions' => '?',
            'App\\Controller\\PersonneController::new' => '?',
            'App\\Controller\\PersonneController::voirQuestions' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AdminQuestionController:questions' => '?',
            'App\\Controller\\PersonneController:new' => '?',
            'App\\Controller\\PersonneController:voirQuestions' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
