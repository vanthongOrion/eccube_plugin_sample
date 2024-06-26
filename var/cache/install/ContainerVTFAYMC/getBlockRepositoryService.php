<?php

namespace ContainerVTFAYMC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBlockRepositoryService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Eccube\Repository\BlockRepository' shared autowired service.
     *
     * @return \Eccube\Repository\BlockRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Eccube/Repository/BlockRepository.php';

        return $container->privates['Eccube\\Repository\\BlockRepository'] = new \Eccube\Repository\BlockRepository(($container->services['doctrine'] ?? $container->getDoctrineService()), ($container->services['Eccube\\Common\\EccubeConfig'] ?? ($container->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($container))));
    }
}
