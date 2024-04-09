<?php

namespace ContainerVTFAYMC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSexRepositoryService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Eccube\Repository\Master\SexRepository' shared autowired service.
     *
     * @return \Eccube\Repository\Master\SexRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Eccube/Repository/Master/SexRepository.php';

        return $container->privates['Eccube\\Repository\\Master\\SexRepository'] = new \Eccube\Repository\Master\SexRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}