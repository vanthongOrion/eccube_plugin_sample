<?php

namespace ContainerVTFAYMC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_K0cdgnLService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private '.service_locator.K0cdgnL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.K0cdgnL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ClassName' => ['privates', '.errored..service_locator.K0cdgnL.Eccube\\Entity\\ClassName', NULL, 'Cannot autowire service ".service_locator.K0cdgnL": it references class "Eccube\\Entity\\ClassName" but no such service exists.'],
        ], [
            'ClassName' => 'Eccube\\Entity\\ClassName',
        ]);
    }
}
