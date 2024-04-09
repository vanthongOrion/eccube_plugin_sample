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

/* pager.twig */
class __TwigTemplate_e5f70c6f35e76f40a6d40dade3677bf3 extends \Eccube\Twig\Template
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
        // line 11
        if ((twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "pageCount", [], "any", false, false, true, 11) > 1)) {
            // line 12
            echo "    <ul class=\"ec-pager\">
        ";
            // line 14
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "firstPageInRange", [], "any", false, false, true, 14) != 1)) {
                // line 15
                echo "            <li class=\"ec-pager__item\">
                <a href=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 17
($context["app"] ?? null), "request", [], "any", false, false, true, 17), "attributes", [], "any", false, false, true, 17), "get", [0 => "_route"], "method", false, false, true, 17), 17, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 18
($context["app"] ?? null), "request", [], "any", false, false, true, 18), "query", [], "any", false, false, true, 18), "all", [], "any", false, false, true, 18), 18, $this->source), ["pageno" => twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "first", [], "any", false, false, true, 18)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("最初へ"), "html", null, true);
                echo "</a></li>

        ";
            }
            // line 21
            echo "
        ";
            // line 23
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "previous", [], "any", true, true, true, 23)) {
                // line 24
                echo "            <li class=\"ec-pager__item\">
                <a href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 26
($context["app"] ?? null), "request", [], "any", false, false, true, 26), "attributes", [], "any", false, false, true, 26), "get", [0 => "_route"], "method", false, false, true, 26), 26, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 27
($context["app"] ?? null), "request", [], "any", false, false, true, 27), "query", [], "any", false, false, true, 27), "all", [], "any", false, false, true, 27), 27, $this->source), ["pageno" => twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "previous", [], "any", false, false, true, 27)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("前へ"), "html", null, true);
                echo "</a></li>
        ";
            }
            // line 29
            echo "
        ";
            // line 31
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "firstPageInRange", [], "any", false, false, true, 31) != 1)) {
                // line 32
                echo "            <li class=\"ec-pager__item\">...</li>
        ";
            }
            // line 34
            echo "
        ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "pagesInRange", [], "any", false, false, true, 35));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 36
                echo "            ";
                if (($context["page"] == twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "current", [], "any", false, false, true, 36))) {
                    // line 37
                    echo "                <li class=\"ec-pager__item--active\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 38
($context["app"] ?? null), "request", [], "any", false, false, true, 38), "attributes", [], "any", false, false, true, 38), "get", [0 => "_route"], "method", false, false, true, 38), 38, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 39
($context["app"] ?? null), "request", [], "any", false, false, true, 39), "query", [], "any", false, false, true, 39), "all", [], "any", false, false, true, 39), 39, $this->source), ["pageno" => $context["page"]])), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 39, $this->source), "html", null, true);
                    echo " </a></li>
            ";
                } else {
                    // line 41
                    echo "                <li class=\"ec-pager__item\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 42
($context["app"] ?? null), "request", [], "any", false, false, true, 42), "attributes", [], "any", false, false, true, 42), "get", [0 => "_route"], "method", false, false, true, 42), 42, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 43
($context["app"] ?? null), "request", [], "any", false, false, true, 43), "query", [], "any", false, false, true, 43), "all", [], "any", false, false, true, 43), 43, $this->source), ["pageno" => $context["page"]])), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 43, $this->source), "html", null, true);
                    echo " </a></li>
            ";
                }
                // line 45
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "
        ";
            // line 48
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "last", [], "any", false, false, true, 48) != twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "lastPageInRange", [], "any", false, false, true, 48))) {
                // line 49
                echo "            <li class=\"ec-pager__item\">...</li>
        ";
            }
            // line 51
            echo "
        ";
            // line 53
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "next", [], "any", true, true, true, 53)) {
                // line 54
                echo "            <li class=\"ec-pager__item\">
                <a href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 56
($context["app"] ?? null), "request", [], "any", false, false, true, 56), "attributes", [], "any", false, false, true, 56), "get", [0 => "_route"], "method", false, false, true, 56), 56, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 57
($context["app"] ?? null), "request", [], "any", false, false, true, 57), "query", [], "any", false, false, true, 57), "all", [], "any", false, false, true, 57), 57, $this->source), ["pageno" => twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "next", [], "any", false, false, true, 57)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("次へ"), "html", null, true);
                echo "</a></li>
        ";
            }
            // line 59
            echo "
        ";
            // line 61
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "last", [], "any", false, false, true, 61) != twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "lastPageInRange", [], "any", false, false, true, 61))) {
                // line 62
                echo "            <li class=\"ec-pager__item\">
                <a href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 64
($context["app"] ?? null), "request", [], "any", false, false, true, 64), "attributes", [], "any", false, false, true, 64), "get", [0 => "_route"], "method", false, false, true, 64), 64, $this->source), twig_array_merge($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 65
($context["app"] ?? null), "request", [], "any", false, false, true, 65), "query", [], "any", false, false, true, 65), "all", [], "any", false, false, true, 65), 65, $this->source), ["pageno" => twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "last", [], "any", false, false, true, 65)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("最後へ"), "html", null, true);
                echo "</a></li>
        ";
            }
            // line 67
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "pager.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 67,  163 => 65,  162 => 64,  161 => 63,  158 => 62,  155 => 61,  152 => 59,  145 => 57,  144 => 56,  143 => 55,  140 => 54,  137 => 53,  134 => 51,  130 => 49,  127 => 48,  124 => 46,  118 => 45,  111 => 43,  110 => 42,  108 => 41,  101 => 39,  100 => 38,  98 => 37,  95 => 36,  91 => 35,  88 => 34,  84 => 32,  81 => 31,  78 => 29,  71 => 27,  70 => 26,  69 => 25,  66 => 24,  63 => 23,  60 => 21,  52 => 18,  51 => 17,  50 => 16,  47 => 15,  44 => 14,  41 => 12,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "pager.twig", "/var/www/html/src/Eccube/Resource/template/default/pager.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 11, "for" => 35);
        static $filters = array("escape" => 16, "merge" => 18, "trans" => 18);
        static $functions = array("path" => 16);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'merge', 'trans'],
                ['path']
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
