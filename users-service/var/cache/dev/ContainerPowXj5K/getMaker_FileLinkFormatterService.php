<?php

namespace ContainerPowXj5K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaker_FileLinkFormatterService extends App_KernelDevContainer
{
    /*
     * Gets the private 'maker.file_link_formatter' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Util\MakerFileLinkFormatter
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['maker.file_link_formatter'] = new \Symfony\Bundle\MakerBundle\Util\MakerFileLinkFormatter(($container->privates['debug.file_link_formatter'] ?? $container->getDebug_FileLinkFormatterService()));
    }
}
