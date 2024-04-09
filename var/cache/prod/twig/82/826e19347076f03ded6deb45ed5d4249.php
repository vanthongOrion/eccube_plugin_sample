<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Api42/Form/Type/Admin/OAuth2AuthorizationType.php */
class __TwigTemplate_20304f9d4c7452f5cf50f7c1bb98231e extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 *
 * http://www.ec-cube.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\\Api42\\Form\\Type\\Admin;

use Eccube\\Common\\EccubeConfig;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Validator\\Constraints as Assert;

class OAuth2AuthorizationType extends AbstractType
{
    /**
     * @var EccubeConfig
     */
    protected \$eccubeConfig;

    public function __construct(EccubeConfig \$eccubeConfig)
    {
        \$this->eccubeConfig = \$eccubeConfig;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        // TODO
        \$builder
            ->add('client_id', HiddenType::class, [
                'constraints' => [
                    new Assert\\NotBlank(),
                ],
            ])
            ->add('client_secret', HiddenType::class, [
//                'constraints' => [
//                     new Assert\\NotBlank(),
//                ],
            ])
            ->add('redirect_uri', HiddenType::class, [
//                'constraints' => [
//                    new Assert\\NotBlank(),
//                ],
            ])
            ->add('response_type', HiddenType::class, [
                'constraints' => [
                    // new Assert\\NotBlank(),
                ],
            ])
            ->add('state', HiddenType::class, [
                'constraints' => [
                    new Assert\\NotBlank(),
                ],
            ])
            ->add('scope', HiddenType::class, [
                'constraints' => [
                    new Assert\\NotBlank(),
                ],
            ])
            ->add('approve', SubmitType::class)
            ->add('deny', SubmitType::class);
    }

    public function getBlockPrefix()
    {
        return 'oauth_authorization';
    }
}
";
    }

    public function getTemplateName()
    {
        return "Api42/Form/Type/Admin/OAuth2AuthorizationType.php";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Api42/Form/Type/Admin/OAuth2AuthorizationType.php", "/var/www/html/app/Plugin/Api42/Form/Type/Admin/OAuth2AuthorizationType.php");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}