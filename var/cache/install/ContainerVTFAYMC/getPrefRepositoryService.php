<?php

namespace ContainerVTFAYMC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrefRepositoryService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Eccube\Repository\Master\PrefRepository' shared autowired service.
     *
     * @return \Eccube\Repository\Master\PrefRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Eccube/Repository/Master/PrefRepository.php';

        return $container->privates['Eccube\\Repository\\Master\\PrefRepository'] = new \Eccube\Repository\Master\PrefRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
