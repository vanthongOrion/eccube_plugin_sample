<?php

namespace ContainerJeLjmue;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEccube_Purchase_Flow_OrderService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'eccube.purchase.flow.order' shared service.
     *
     * @return \Eccube\Service\PurchaseFlow\PurchaseFlow
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/PurchaseFlow.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/ReadableCollection.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Collection.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/ArrayCollection.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/ValidatorTrait.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/ItemHolderValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/PurchaseProcessor.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/Processor/StockDiffProcessor.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/Processor/PointDiffProcessor.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/ItemHolderPostValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/Processor/PaymentTotalNegativeValidator.php';

        $container->privates['eccube.purchase.flow.order'] = $instance = new \Eccube\Service\PurchaseFlow\PurchaseFlow();

        $a = new \Eccube\Service\PurchaseFlow\Processor\StockDiffProcessor(($container->privates['Eccube\\Repository\\ProductClassRepository'] ?? $container->getProductClassRepositoryService()));
        $b = new \Eccube\Service\PurchaseFlow\Processor\PointDiffProcessor(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['Eccube\\Service\\PointHelper'] ?? $container->load('getPointHelperService')));

        $instance->setFlowType('order');
        $instance->setItemValidators(new \Doctrine\Common\Collections\ArrayCollection());
        $instance->setItemHolderValidators(new \Doctrine\Common\Collections\ArrayCollection([0 => $a, 1 => $b]));
        $instance->setItemHolderPreprocessors(new \Doctrine\Common\Collections\ArrayCollection([0 => ($container->privates['Eccube\\Service\\PurchaseFlow\\Processor\\TaxProcessor'] ?? $container->load('getTaxProcessorService'))]));
        $instance->setDiscountProcessors(new \Doctrine\Common\Collections\ArrayCollection([0 => ($container->privates['Eccube\\Service\\PurchaseFlow\\Processor\\PointProcessor'] ?? $container->load('getPointProcessorService'))]));
        $instance->setItemHolderPostValidators(new \Doctrine\Common\Collections\ArrayCollection([0 => ($container->privates['Eccube\\Service\\PurchaseFlow\\Processor\\AddPointProcessor'] ?? $container->load('getAddPointProcessorService')), 1 => ($container->privates['Eccube\\Service\\PurchaseFlow\\Processor\\PaymentTotalLimitValidator'] ?? $container->load('getPaymentTotalLimitValidatorService')), 2 => ($container->privates['Eccube\\Service\\PurchaseFlow\\Processor\\PaymentTotalNegativeValidator'] ?? ($container->privates['Eccube\\Service\\PurchaseFlow\\Processor\\PaymentTotalNegativeValidator'] = new \Eccube\Service\PurchaseFlow\Processor\PaymentTotalNegativeValidator()))]));
        $instance->setPurchaseProcessors(new \Doctrine\Common\Collections\ArrayCollection([0 => $a, 1 => $b]));

        return $instance;
    }
}
