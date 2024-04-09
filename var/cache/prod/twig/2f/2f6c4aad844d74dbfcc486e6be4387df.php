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

/* @admin/Content/news.twig */
class __TwigTemplate_e8e4483822c7b66a5a2c7043ff42853a extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'sub_title' => [$this, 'block_sub_title'],
            'stylesheet' => [$this, 'block_stylesheet'],
            'main' => [$this, 'block_main'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        $context["menus"] = [0 => "content", 1 => "news"];
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Content/news.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.news_management"), "html", null, true);
    }

    // line 17
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.contents_management"), "html", null, true);
    }

    // line 19
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "    <style type=\"text/css\">
        li.list-group-item {
            z-index: inherit !important;
        }
    </style>
";
    }

    // line 27
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"d-block mb-3\">
                    <a id=\"addNew\" class=\"btn btn-ec-regular\"
                       href=\"";
        // line 33
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_content_news_new");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create__new"), "html", null, true);
        echo "</a>
                </div>
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-body p-0\">
                        <ul class=\"list-group list-group-flush mb-4 sortable-container\">
                            <li class=\"list-group-item\">
                                <div class=\"row justify-content-around\">
                                    <div class=\"col-2\"><strong>";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.news.publish_date"), "html", null, true);
        echo "</strong>
                                    </div>
                                    <div class=\"col-1\"><strong>";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.news.display_status"), "html", null, true);
        echo "</strong>
                                    </div>
                                    <div class=\"col\"><strong>";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.news.title"), "html", null, true);
        echo "</strong></div>
                                </div>
                            </li>
                            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["News"]) {
            // line 48
            echo "                                <li class=\"list-group-item sortable-item\" data-id=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["News"], "id", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
            echo "\">
                                    <div class=\"row justify-content-around\">
                                        <div class=\"col-2 d-flex align-items-center\">
                                            <span>";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["News"], "publishDate", [], "any", false, false, true, 51), 51, $this->source)), "html", null, true);
            echo "</span></div>
                                        <div class=\"col-1 d-flex align-items-center\">";
            // line 52
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["News"], "visible", [], "any", false, false, true, 52)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.news.display_status__show")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.news.display_status__hide"))), "html", null, true);
            echo "</div>
                                        <div class=\"col d-flex align-items-center\"><a
                                                    href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_content_news_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["News"], "id", [], "any", false, false, true, 54)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["News"], "title", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
            echo "</a>
                                        </div>
                                        <div class=\"col-2\">
                                            <div class=\"row\">
                                                <div class=\"col px-0 text-center\">
                                                    <a class=\"btn btn-ec-actionIcon\"
                                                       href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_content_news_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["News"], "id", [], "any", false, false, true, 60)]), "html", null, true);
            echo "\"
                                                       data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                                       title=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.edit"), "html", null, true);
            echo "\">
                                                        <i class=\"fa fa-pencil fa-lg text-secondary\"></i>
                                                    </a>
                                                </div>
                                                <div class=\"col ps-0 text-center\" data-bs-toggle=\"tooltip\"
                                                     data-bs-placement=\"top\" title=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
            echo "\">
                                                    <a class=\"btn btn-ec-actionIcon\" data-bs-toggle=\"modal\"
                                                       data-bs-target=\"#delete_";
            // line 69
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["News"], "id", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
            echo "\">
                                                        <i class=\"fa fa-close fa-lg text-secondary\"
                                                           aria-hidden=\"true\"></i>
                                                    </a>
                                                    <div class=\"modal fade\" id=\"delete_";
            // line 73
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["News"], "id", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
            echo "\" tabindex=\"-1\"
                                                         role=\"dialog\"
                                                         aria-labelledby=\"delete_";
            // line 75
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["News"], "id", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
            echo "\" aria-hidden=\"true\">
                                                        <div class=\"modal-dialog\" role=\"document\">
                                                            <div class=\"modal-content\">
                                                                <div class=\"modal-header\">
                                                                    <h5 class=\"modal-title fw-bold\">";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__title"), "html", null, true);
            echo "</h5>
                                                                    <button class=\"btn-close\" type=\"button\"
                                                                            data-bs-dismiss=\"modal\"
                                                                            aria-label=\"Close\">
                                                                    </button>
                                                                </div>
                                                                <div class=\"modal-body text-start\">
                                                                    <p class=\"text-start\">";
            // line 86
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__message", ["%name%" => twig_get_attribute($this->env, $this->source, $context["News"], "title", [], "any", false, false, true, 86)]), "html", null, true);
            echo "</p>
                                                                </div>
                                                                <div class=\"modal-footer\">
                                                                    <button class=\"btn btn-ec-sub\" type=\"button\"
                                                                            data-bs-dismiss=\"modal\">";
            // line 90
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
            echo "</button>
                                                                    <a class=\"btn btn-ec-delete\"
                                                                       href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_content_news_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["News"], "id", [], "any", false, false, true, 92)]), "html", null, true);
            echo "\" ";
            echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
            echo "
                                                                       data-method=\"delete\"
                                                                       data-confirm=\"false\">";
            // line 94
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
            echo "</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['News'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                        </ul>

                        ";
        // line 107
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, true, 107), "pageCount", [], "any", false, false, true, 107) > 1)) {
            // line 108
            echo "                            <div class=\"row justify-content-md-center mb-4\">
                                ";
            // line 109
            $this->loadTemplate("@admin/pager.twig", "@admin/Content/news.twig", 109)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, true, 109), "routes" => "admin_content_news_page"]));
            // line 110
            echo "                            </div>
                        ";
        }
        // line 112
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@admin/Content/news.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 112,  245 => 110,  243 => 109,  240 => 108,  238 => 107,  234 => 105,  217 => 94,  210 => 92,  205 => 90,  198 => 86,  188 => 79,  181 => 75,  176 => 73,  169 => 69,  164 => 67,  156 => 62,  151 => 60,  140 => 54,  135 => 52,  131 => 51,  124 => 48,  120 => 47,  114 => 44,  109 => 42,  104 => 40,  92 => 33,  85 => 28,  81 => 27,  72 => 20,  68 => 19,  61 => 17,  54 => 16,  49 => 11,  47 => 13,  40 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Content/news.twig", "/var/www/html/src/Eccube/Resource/template/admin/Content/news.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "for" => 47, "if" => 107, "include" => 109);
        static $filters = array("escape" => 16, "trans" => 16, "date_sec" => 51);
        static $functions = array("url" => 33, "csrf_token_for_anchor" => 92);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if', 'include'],
                ['escape', 'trans', 'date_sec'],
                ['url', 'csrf_token_for_anchor']
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
