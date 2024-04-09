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

/* Api42/Resource/template/admin/WebHook/edit.twig */
class __TwigTemplate_abd09d6d2c76a0cb4d3072c8869fc3e0 extends \Eccube\Twig\Template
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
        $context["menus"] = [0 => "setting", 1 => "api", 2 => "webhook"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "Api42/Resource/template/admin/WebHook/edit.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.webhook.registration"), "html", null, true);
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.management"), "html", null, true);
    }

    // line 20
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "<form name=\"webhook_form\" role=\"form\" id=\"webhook_form\" method=\"post\" action=\"\" novalidate>
    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, true, 22), 22, $this->source), 'widget');
        echo "
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\">
                        <div class=\"row\">
                            <div class=\"col-8\">
                                <span class=\"card-title\">";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.webhook.registration"), "html", null, true);
        echo "</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"collapse show ec-cardCollapse\" id=\"clientInfo\">
                        <div class=\"card-body\">
                            <div class=\"row mb-2\">
                                <div class=\"col-2\">
                                    <span>";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.webhook.payload_url"), "html", null, true);
        echo "</span>
                                    <span class=\"badge bg-primary ms-1\">";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col\">
                                    <div class=\"row\">
                                        <div class=\"col\">
                                            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "payload_url", [], "any", false, false, true, 44), 44, $this->source), 'widget');
        echo "
                                        </div>
                                        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "payload_url", [], "any", false, false, true, 46), 46, $this->source), 'errors');
        echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"row mb-2\">
                                <div class=\"col-2\">
                                    <span>";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.webhook.secret"), "html", null, true);
        echo "</span>
                                    <i class=\"fa fa-question-circle fa-lg ms-1\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.webhook.secret.tooltip"), "html", null, true);
        echo "\"></i>
                                </div>
                                <div class=\"col\">
                                    <div class=\"row\">
                                        <div class=\"col\">
                                            ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "secret", [], "any", false, false, true, 58), 58, $this->source), 'widget');
        echo "
                                        </div>
                                        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "secret", [], "any", false, false, true, 60), 60, $this->source), 'errors');
        echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"row mb-2\">
                                <div class=\"col-2\">
                                    <span>";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.webhook.enabled"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col\">
                                    <div class=\"row\">
                                        <div class=\"col\">
                                            ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "enabled", [], "any", false, false, true, 71), 71, $this->source), 'widget');
        echo "
                                        </div>
                                        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "enabled", [], "any", false, false, true, 73), 73, $this->source), 'errors');
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"c-conversionArea\">
        <div class=\"c-conversionArea__container\">
            <div class=\"row justify-content-between align-items-center\">
                <div class=\"col-6\">
                    <div class=\"c-conversionArea__leftBlockItem\">
                        <a class=\"c-baseLink\"
                           href=\"";
        // line 89
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_api_webhook");
        echo "\">
                            <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                            <span>";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("api.admin.webhook.management"), "html", null, true);
        echo "</span>
                        </a>
                    </div>
                </div>
                <div class=\"col-6\">
                    <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                        <div class=\"col-auto\">
                            <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">
                                ";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.registration"), "html", null, true);
        echo "
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "Api42/Resource/template/admin/WebHook/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 99,  187 => 91,  182 => 89,  163 => 73,  158 => 71,  150 => 66,  141 => 60,  136 => 58,  128 => 53,  124 => 52,  115 => 46,  110 => 44,  102 => 39,  98 => 38,  87 => 30,  76 => 22,  73 => 21,  69 => 20,  62 => 16,  55 => 15,  50 => 11,  48 => 18,  46 => 13,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Api42/Resource/template/admin/WebHook/edit.twig", "/var/www/html/app/Plugin/Api42/Resource/template/admin/WebHook/edit.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "form_theme" => 18);
        static $filters = array("escape" => 15, "trans" => 15);
        static $functions = array("form_widget" => 22, "form_errors" => 46, "url" => 89);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme'],
                ['escape', 'trans'],
                ['form_widget', 'form_errors', 'url']
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