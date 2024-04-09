<?php

namespace ContainerJeLjmue;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAuthorityRepositoryService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Repository\Master\AuthorityRepository' shared autowired service.
     *
     * @return \Eccube\Repository\Master\AuthorityRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Eccube/Repository/Master/AuthorityRepository.php';

        return $container->privates['Eccube\\Repository\\Master\\AuthorityRepository'] = new \Eccube\Repository\Master\AuthorityRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
