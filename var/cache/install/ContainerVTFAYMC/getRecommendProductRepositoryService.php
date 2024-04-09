<?php

namespace ContainerVTFAYMC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRecommendProductRepositoryService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Plugin\Recommend42\Repository\RecommendProductRepository' shared autowired service.
     *
     * @return \Plugin\Recommend42\Repository\RecommendProductRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/app/Plugin/Recommend42/Repository/RecommendProductRepository.php';

        return $container->privates['Plugin\\Recommend42\\Repository\\RecommendProductRepository'] = new \Plugin\Recommend42\Repository\RecommendProductRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
