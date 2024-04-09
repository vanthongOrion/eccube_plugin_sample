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

/* Api42/GraphQL/Query/SingleResultQuery.php */
class __TwigTemplate_88bbb955163804234bb73b3c29baa72b extends \Eccube\Twig\Template
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

namespace Plugin\\Api42\\GraphQL\\Query;

use Doctrine\\ORM\\EntityManager;
use Doctrine\\ORM\\EntityManagerInterface;
use GraphQL\\Type\\Definition\\Type;
use Plugin\\Api42\\GraphQL\\Query;
use Plugin\\Api42\\GraphQL\\Types;

abstract class SingleResultQuery implements Query
{
    /**
     * @var string
     */
    private \$entityClass;

    /**
     * @var Types
     */
    private \$types;

    /**
     * @var EntityManager
     */
    private \$entityManager;

    /**
     * SingleResultQuery constructor.
     */
    public function __construct(\$entityClass)
    {
        \$this->entityClass = \$entityClass;
    }

    /**
     * @param EntityManagerInterface \$entityManager
     * @required
     */
    public function setEntityManager(EntityManagerInterface \$entityManager)
    {
        \$this->entityManager = \$entityManager;
    }

    /**
     * @param Types \$types
     * @required
     */
    public function setTypes(Types \$types): void
    {
        \$this->types = \$types;
    }

    public function getQuery()
    {
        return [
            'type' => \$this->types->get(\$this->entityClass),
            'args' => [
                'id' => Type::nonNull(Type::id()),
            ],
            'resolve' => function (\$root, \$args) {
                return \$this->entityManager->getRepository(\$this->entityClass)->find(\$args['id']);
            },
        ];

    }
}
";
    }

    public function getTemplateName()
    {
        return "Api42/GraphQL/Query/SingleResultQuery.php";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Api42/GraphQL/Query/SingleResultQuery.php", "/var/www/html/app/Plugin/Api42/GraphQL/Query/SingleResultQuery.php");
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
