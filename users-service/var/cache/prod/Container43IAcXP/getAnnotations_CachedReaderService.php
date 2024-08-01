<?php

namespace Container43IAcXP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAnnotations_CachedReaderService extends App_KernelProdContainer
{
    /*
     * Gets the private 'annotations.cached_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\PsrCachedReader
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['annotations.cached_reader'] = new \Doctrine\Common\Annotations\PsrCachedReader(($container->privates['annotations.reader'] ?? $container->load('getAnnotations_ReaderService')), $container->getAnnotations_CacheAdapterService(), false);
    }
}
