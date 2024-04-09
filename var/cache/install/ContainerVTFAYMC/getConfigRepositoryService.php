<?php

namespace ContainerVTFAYMC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConfigRepositoryService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Plugin\Securitychecker42\Repository\ConfigRepository' shared autowired service.
     *
     * @return \Plugin\Securitychecker42\Repository\ConfigRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/app/Plugin/Securitychecker42/Repository/ConfigRepository.php';

        return $container->privates['Plugin\\Securitychecker42\\Repository\\ConfigRepository'] = new \Plugin\Securitychecker42\Repository\ConfigRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
