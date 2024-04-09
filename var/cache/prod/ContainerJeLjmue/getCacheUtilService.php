<?php

namespace ContainerJeLjmue;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCacheUtilService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Util\CacheUtil' shared autowired service.
     *
     * @return \Eccube\Util\CacheUtil
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Eccube/Util/CacheUtil.php';

        return $container->privates['Eccube\\Util\\CacheUtil'] = new \Eccube\Util\CacheUtil(($container->services['kernel'] ?? $container->get('kernel', 1)), $container);
    }
}
