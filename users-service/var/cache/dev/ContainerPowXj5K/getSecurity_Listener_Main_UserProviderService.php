<?php

namespace ContainerPowXj5K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Listener_Main_UserProviderService extends App_KernelDevContainer
{
    /*
     * Gets the private 'security.listener.main.user_provider' shared service.
     *
     * @return \Symfony\Component\Security\Http\EventListener\UserProviderListener
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['security.listener.main.user_provider'] = new \Symfony\Component\Security\Http\EventListener\UserProviderListener(($container->privates['security.user.provider.concrete.users_in_memory'] ?? ($container->privates['security.user.provider.concrete.users_in_memory'] = new \Symfony\Component\Security\Core\User\InMemoryUserProvider([]))));
    }
}
