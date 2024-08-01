<?php

namespace ContainerXGxb4Gi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTexter_TransportFactoryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'texter.transport_factory' shared service.
     *
     * @return \Symfony\Component\Notifier\Transport
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'notifier'.\DIRECTORY_SEPARATOR.'Transport.php';

        return $container->privates['texter.transport_factory'] = new \Symfony\Component\Notifier\Transport(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['notifier.transport_factory.null'] ?? $container->load('getNotifier_TransportFactory_NullService'));
        }, 1));
    }
}