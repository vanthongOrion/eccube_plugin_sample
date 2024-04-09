<?php

namespace ContainerVTFAYMC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTaxRuleEventSubscriberService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Eccube\Doctrine\EventSubscriber\TaxRuleEventSubscriber' shared autowired service.
     *
     * @return \Eccube\Doctrine\EventSubscriber\TaxRuleEventSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/event-manager/src/EventSubscriber.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Doctrine/EventSubscriber/TaxRuleEventSubscriber.php';

        return $container->privates['Eccube\\Doctrine\\EventSubscriber\\TaxRuleEventSubscriber'] = new \Eccube\Doctrine\EventSubscriber\TaxRuleEventSubscriber($container);
    }
}
