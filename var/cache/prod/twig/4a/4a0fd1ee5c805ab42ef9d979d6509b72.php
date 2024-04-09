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

/* MailMagazine42/Repository/MailMagazineTemplateRepository.php */
class __TwigTemplate_f49ad154ee12ea83684ebbef83367c6c extends \Eccube\Twig\Template
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

namespace Plugin\\MailMagazine42\\Repository;

use Doctrine\\Persistence\\ManagerRegistry;
use Eccube\\Repository\\AbstractRepository;
use Doctrine\\ORM\\Query;
use Plugin\\MailMagazine42\\Entity\\MailMagazineTemplate;

/**
 * MailMagazine.
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class MailMagazineTemplateRepository extends AbstractRepository
{
    /**
     * MailMagazineTemplateRepository constructor.
     *
     * @param ManagerRegistry \$registry
     * @param string \$entityClass
     */
    public function __construct(ManagerRegistry \$registry, \$entityClass = MailMagazineTemplate::class)
    {
        parent::__construct(\$registry, \$entityClass);
    }

    /**
     * find all.
     *
     * @return array
     */
    public function findAll()
    {
        \$query = \$this
            ->getEntityManager()
            ->createQuery('SELECT m FROM Plugin\\MailMagazine42\\Entity\\MailMagazineTemplate m ORDER BY m.id DESC');
        \$result = \$query
            ->getResult(Query::HYDRATE_ARRAY);

        return \$result;
    }
}
";
    }

    public function getTemplateName()
    {
        return "MailMagazine42/Repository/MailMagazineTemplateRepository.php";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "MailMagazine42/Repository/MailMagazineTemplateRepository.php", "/var/www/html/app/Plugin/MailMagazine42/Repository/MailMagazineTemplateRepository.php");
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