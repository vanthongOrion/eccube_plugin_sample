<?php

namespace ContainerJeLjmue;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailHistoryRepositoryService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Repository\MailHistoryRepository' shared autowired service.
     *
     * @return \Eccube\Repository\MailHistoryRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Eccube/Repository/MailHistoryRepository.php';

        return $container->privates['Eccube\\Repository\\MailHistoryRepository'] = new \Eccube\Repository\MailHistoryRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
