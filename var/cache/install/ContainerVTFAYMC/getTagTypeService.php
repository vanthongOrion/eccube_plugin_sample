<?php

namespace ContainerVTFAYMC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTagTypeService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Eccube\Form\Type\Admin\TagType' shared autowired service.
     *
     * @return \Eccube\Form\Type\Admin\TagType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Form/Type/Admin/TagType.php';

        return $container->privates['Eccube\\Form\\Type\\Admin\\TagType'] = new \Eccube\Form\Type\Admin\TagType();
    }
}