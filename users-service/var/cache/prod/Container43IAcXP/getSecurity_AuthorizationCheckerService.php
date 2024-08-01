<?php

namespace Container43IAcXP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_AuthorizationCheckerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['security.access.decision_manager'] ?? $container->load('getSecurity_Access_DecisionManagerService'));

        if (isset($container->privates['security.authorization_checker'])) {
            return $container->privates['security.authorization_checker'];
        }

        return $container->privates['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(($container->privates['security.token_storage'] ?? $container->getSecurity_TokenStorageService()), $a, false, false);
    }
}
