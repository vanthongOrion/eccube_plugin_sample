<?php

namespace ContainerVTFAYMC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTagRepositoryService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Eccube\Repository\TagRepository' shared autowired service.
     *
     * @return \Eccube\Repository\TagRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Eccube/Repository/TagRepository.php';

        return $container->privates['Eccube\\Repository\\TagRepository'] = new \Eccube\Repository\TagRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
