<?php

namespace ContainerPowXj5K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_VarDumper_Command_ServerDump_LazyService extends App_KernelDevContainer
{
    /*
     * Gets the private '.var_dumper.command.server_dump.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.var_dumper.command.server_dump.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('server:dump', [], 'Start a dump server that collects and displays dumps in a single place', false, #[\Closure(name: 'var_dumper.command.server_dump', class: 'Symfony\\Component\\VarDumper\\Command\\ServerDumpCommand')] function () use ($container): \Symfony\Component\VarDumper\Command\ServerDumpCommand {
            return ($container->privates['var_dumper.command.server_dump'] ?? $container->load('getVarDumper_Command_ServerDumpService'));
        });
    }
}
