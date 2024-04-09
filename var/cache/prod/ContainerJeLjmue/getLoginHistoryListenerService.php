<?php

namespace ContainerJeLjmue;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLoginHistoryListenerService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\EventListener\LoginHistoryListener' shared autowired service.
     *
     * @return \Eccube\EventListener\LoginHistoryListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Eccube/EventListener/LoginHistoryListener.php';

        return $container->privates['Eccube\\EventListener\\LoginHistoryListener'] = new \Eccube\EventListener\LoginHistoryListener(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->privates['Eccube\\Request\\Context'] ?? $container->getContextService()), ($container->privates['Eccube\\Repository\\MemberRepository'] ?? $container->load('getMemberRepositoryService')), ($container->privates['Eccube\\Repository\\Master\\LoginHistoryStatusRepository'] ?? $container->load('getLoginHistoryStatusRepositoryService')));
    }
}
