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

/* @admin/Product/product_class.twig */
class __TwigTemplate_bdf906a39b1037097d91755d3a5d97a5 extends \Eccube\Twig\Template
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
            'javascript' => [$this, 'block_javascript'],
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
        $context["menus"] = [0 => "product", 1 => "product_edit"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 19
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["clearForm"] ?? null), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Product/product_class.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_class_registration"), "html", null, true);
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_management"), "html", null, true);
    }

    // line 21
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "    <script>
        \$(function() {

            // 無制限チェックボックス初期表示
            \$('input[id\$=_stock_unlimited]').each(function() {
                var check = \$(this).prop('checked');
                var index = \$(this).attr('id').match(/\\d+/);

                if (check) {
                    \$('#product_class_matrix_product_classes_' + index + '_stock').prop('disabled', true);
                } else {
                    \$('#product_class_matrix_product_classes_' + index + '_stock').prop('disabled', false);
                }
            });


            // 無制限チェックボックス
            \$('input[id\$=_stock_unlimited]').on('click', function() {
                var check = \$(this).prop('checked');
                var index = \$(this).attr('id').match(/\\d+/);

                if (check) {
                    \$('#product_class_matrix_product_classes_' + index + '_stock').prop('disabled', true);
                } else {
                    \$('#product_class_matrix_product_classes_' + index + '_stock').prop('disabled', false);
                }
            });

            // 登録チェックボックス
            \$('#check-all').click(function() {
                var checked = \$('#check-all').prop('checked');
                if (checked) {
                    \$('input[id\$=_checked]').prop('checked', true);
                } else {
                    \$('input[id\$=_checked]').prop('checked', false);
                }
            });

            // 1行目をコピーボタン
            \$('#copy').on('click', function(event) {
                event.preventDefault();

                var check = \$('#product_class_matrix_product_classes_0_add').prop('checked');
                \$('input[id\$=_add]').prop('checked', check);

                var product_code = \$('#product_class_matrix_product_classes_0_code').val();
                \$('input[id\$=_code]').val(product_code);

                var stock = \$('#product_class_matrix_product_classes_0_stock').val();
                \$('input[id\$=_stock]').val(stock);

                var stock_unlimited = \$('#product_class_matrix_product_classes_0_stock_unlimited').prop('checked');
                // 無制限チェックボックス
                \$('input[id\$=_stock_unlimited]').each(function() {
                    var index = \$(this).attr('id').match(/\\d+/);

                    if (stock_unlimited) {
                        \$(this).prop('checked', true);
                        \$('#product_class_matrix_product_classes_' + index + '_stock').prop('disabled', true);
                    } else {
                        \$(this).prop('checked', false);
                        \$('#product_class_matrix_product_classes_' + index + '_stock').prop('disabled', false);
                    }
                });

                var sale_limit = \$('#product_class_matrix_product_classes_0_sale_limit').val();
                \$('input[id\$=_sale_limit]').val(sale_limit);

                var price01 = \$('#product_class_matrix_product_classes_0_price01').val();
                \$('input[id\$=_price01]').val(price01);

                var price02 = \$('#product_class_matrix_product_classes_0_price02').val();
                \$('input[id\$=_price02]').val(price02);

                var delivery_fee = \$('#product_class_matrix_product_classes_0_delivery_fee').val();
                \$('input[id\$=_delivery_fee]').val(delivery_fee);

                var delivery_duration = \$('#product_class_matrix_product_classes_0_delivery_duration').val();
                \$('select[id\$=_delivery_duration]').val(delivery_duration);

                var tax_rate = \$('#product_class_matrix_product_classes_0_tax_rate').val();
                \$('input[id\$=_tax_rate]').val(tax_rate);

                var sale_type = \$('#product_class_matrix_product_classes_0_sale_type').val();
                \$('select[id\$=_sale_type]').val(sale_type);
            });
        });
    </script>
";
    }

    // line 113
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 114
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    ";
        // line 118
        if (twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "hasProductClass", [], "any", false, false, true, 118)) {
            // line 119
            echo "
                        ";
            // line 121
            echo "                        <div id=\"ex-product_class-header\" class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <span class=\"card-title align-middle\">";
            // line 124
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "name", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
            echo "</span>
                                </div>
                                <div class=\"col-4 text-end\">
                                    ";
            // line 128
            echo "                                    <button class=\"btn btn-ec-delete\" type=\"button\"
                                            data-bs-toggle=\"modal\"
                                            data-bs-target=\"#initializationConfirm\">";
            // line 130
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_class__reset"), "html", null, true);
            echo "
                                    </button>
                                    ";
            // line 133
            echo "                                    <div class=\"modal fade\" id=\"initializationConfirm\" tabindex=\"-1\"
                                         role=\"dialog\"
                                         aria-labelledby=\"deleteConfirm\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog\" role=\"document\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <h5 class=\"modal-title fw-bold\">";
            // line 139
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_class__reset_confirm_title"), "html", null, true);
            echo "</h5>
                                                    <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"modal\"
                                                            aria-label=\"Close\">
                                                    </button>
                                                </div>
                                                <div class=\"modal-body\">
                                                    <p class=\"text-start\">
                                                        ";
            // line 146
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_class__reset_confirm_message"), "html", null, true);
            echo "</p>
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button class=\"btn btn-ec-sub\" type=\"button\"
                                                            data-bs-dismiss=\"modal\">
                                                        ";
            // line 151
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
            echo "
                                                    </button>
                                                    <form method=\"post\"
                                                          action=\"";
            // line 154
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_product_class_clear", ["id" => twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, true, 154), "return_product_list" => ($context["return_product_list"] ?? null)]), "html", null, true);
            echo "\">
                                                        ";
            // line 155
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["clearForm"] ?? null), "_token", [], "any", false, false, true, 155), 155, $this->source), 'widget');
            echo "
                                                        <button class=\"btn btn-ec-delete\" type=\"submit\">
                                                            ";
            // line 157
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_class__reset_confirm_excecute"), "html", null, true);
            echo "
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"ex-product_class-body\" class=\"card-body\">
                            <div class=\"row mb-2\">
                                <div class=\"col\">
                                    <div class=\"d-inline-block me-2\">
                                        <span>";
            // line 171
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_category1__short"), "html", null, true);
            echo "</span>
                                    </div>
                                    <div class=\"d-inline-block\">
                                        <span>";
            // line 174
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["ClassName1"] ?? null), "name", [], "any", false, false, true, 174), 174, $this->source), "html", null, true);
            echo " [";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_name__backend_name"), "html", null, true);
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__colon"), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["ClassName1"] ?? null), "backend_name", [], "any", false, false, true, 174), 174, $this->source), "html", null, true);
            echo "]</span>
                                    </div>
                                </div>
                            </div>
                            ";
            // line 178
            if (($context["ClassName2"] ?? null)) {
                // line 179
                echo "                                <div class=\"row\">
                                    <div class=\"col\">
                                        <div class=\"d-inline-block me-2\">
                                            <span>";
                // line 182
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_category2__short"), "html", null, true);
                echo "</span>
                                        </div>
                                        <div class=\"d-inline-block\">
                                            <span>";
                // line 185
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["ClassName2"] ?? null), "name", [], "any", false, false, true, 185), 185, $this->source), "html", null, true);
                echo " [";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_name__backend_name"), "html", null, true);
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__colon"), "html", null, true);
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["ClassName2"] ?? null), "backend_name", [], "any", false, false, true, 185), 185, $this->source), "html", null, true);
                echo "]</span>
                                        </div>
                                    </div>
                                </div>
                            ";
            }
            // line 190
            echo "                        </div>
                    ";
        } else {
            // line 192
            echo "                        ";
            // line 193
            echo "                        <form method=\"post\" action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_product_class", ["id" => twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, true, 193), "return_product_list" => ($context["return_product_list"] ?? null)]), "html", null, true);
            echo "\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 194
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("_token"), "html", null, true);
            echo "\">
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <span class=\"card-title align-middle\">";
            // line 198
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "name", [], "any", false, false, true, 198), 198, $this->source), "html", null, true);
            echo "</span>
                                    </div>
                                    <div class=\"col-4 text-end\">
                                        ";
            // line 202
            echo "                                        <button class=\"btn btn-ec-conversion\" type=\"submit\">
                                            ";
            // line 203
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_class__create"), "html", null, true);
            echo "
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"row mb-2\">
                                    ";
            // line 210
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class_name1", [], "any", false, false, true, 210), 210, $this->source), 'widget');
            echo "
                                    ";
            // line 211
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class_name1", [], "any", false, false, true, 211), 211, $this->source), 'errors');
            echo "
                                </div>
                                <div class=\"row\">
                                    ";
            // line 214
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class_name2", [], "any", false, false, true, 214), 214, $this->source), 'widget');
            echo "
                                    ";
            // line 215
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class_name2", [], "any", false, false, true, 215), 215, $this->source), 'errors');
            echo "
                                </div>
                            </div>
                        </form>
                    ";
        }
        // line 220
        echo "                </div>

                ";
        // line 222
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "product_classes", [], "any", false, false, true, 222)) > 0)) {
            // line 223
            echo "                    <form method=\"post\" action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_product_class", ["id" => twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, true, 223), "return_product_list" => ($context["return_product_list"] ?? null)]), "html", null, true);
            echo "\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 224
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("_token"), "html", null, true);
            echo "\">
                        <input type=\"hidden\" name=\"";
            // line 225
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class_name1", [], "any", false, false, true, 225), "vars", [], "any", false, false, true, 225), "full_name", [], "any", false, false, true, 225), 225, $this->source), "html", null, true);
            echo "\"
                               value=\"";
            // line 226
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class_name1", [], "any", false, false, true, 226), "vars", [], "any", false, false, true, 226), "value", [], "any", false, false, true, 226), 226, $this->source), "html", null, true);
            echo "\">
                        <input type=\"hidden\" name=\"";
            // line 227
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class_name2", [], "any", false, false, true, 227), "vars", [], "any", false, false, true, 227), "full_name", [], "any", false, false, true, 227), 227, $this->source), "html", null, true);
            echo "\"
                               value=\"";
            // line 228
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class_name2", [], "any", false, false, true, 228), "vars", [], "any", false, false, true, 228), "value", [], "any", false, false, true, 228), 228, $this->source), "html", null, true);
            echo "\">
                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"card-header\">
                                <div class=\"row justify-content-between\">
                                    <div class=\"col-6\">
                                        <span class=\"align-middle\">
                                            ";
            // line 234
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.procuct_class_count", ["%count%" => twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,             // line 235
($context["form"] ?? null), "product_classes", [], "any", false, false, true, 235), 235, $this->source))]), "html", null, true);
            // line 236
            echo "</span>
                                        ";
            // line 237
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "product_classes", [], "any", false, false, true, 237), 237, $this->source), 'errors');
            echo "
                                    </div>
                                    <div class=\"col-4 text-end\">
                                        <button type=\"button\" id=\"copy\" class=\"btn btn-ec-regular\">
                                            <i class=\"fa fa-files-o me-1\"></i>
                                            <span>";
            // line 242
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.copy_first_line"), "html", null, true);
            echo "</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div id=\"ex-product_class\" class=\"card-body p-0\">
                                <table class=\"table table-sm\">
                                    <thead>
                                    <th class=\"pt-2 pb-2 ps-3\">
                                        <input type=\"checkbox\" id=\"check-all\">
                                    </th>
                                    <th class=\"pt-2 pb-2\">";
            // line 253
            ((($context["ClassName1"] ?? null)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ClassName1"] ?? null), "name", [], "any", false, false, true, 253), "html", null, true))) : (print ("")));
            echo "</th>
                                    <th class=\"pt-2 pb-2\">";
            // line 254
            ((($context["ClassName2"] ?? null)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ClassName2"] ?? null), "name", [], "any", false, false, true, 254), "html", null, true))) : (print ("")));
            echo "</th>
                                    <th class=\"pt-2 pb-2\">";
            // line 255
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_code__short"), "html", null, true);
            echo "</th>
                                    <th class=\"pt-2 pb-2\">";
            // line 256
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.stock__short"), "html", null, true);
            echo "</th>
                                    <th class=\"pt-2 pb-2\">";
            // line 257
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.sale_limit"), "html", null, true);
            echo "</th>
                                    <th class=\"pt-2 pb-2\">";
            // line 258
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.normal_price"), "html", null, true);
            echo "</th>
                                    <th class=\"pt-2 pb-2\">";
            // line 259
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.sale_price"), "html", null, true);
            echo "</th>
                                    ";
            // line 260
            if (twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "option_product_delivery_fee", [], "any", false, false, true, 260)) {
                // line 261
                echo "                                        <th class=\"pt-2 pb-2\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.delivery_fee"), "html", null, true);
                echo "</th>
                                    ";
            }
            // line 263
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "option_product_tax_rule", [], "any", false, false, true, 263)) {
                // line 264
                echo "                                        <th class=\"pt-2 pb-2\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.tax_rate"), "html", null, true);
                echo "</th>
                                    ";
            }
            // line 266
            echo "                                    <th class=\"pt-2 pb-2\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.delivery_duration"), "html", null, true);
            echo "</th>
                                    <th class=\"pt-2 pb-2 pe-3\">";
            // line 267
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.sale_type"), "html", null, true);
            echo "</th>

                                    ";
            // line 270
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "product_classes", [], "any", false, false, true, 270));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["product_class_form"]) {
                // line 271
                echo "                                        ";
                // line 272
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 272)) {
                    // line 273
                    echo "                                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, $context["product_class_form"], function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 273), "eccube_form_options", [], "any", false, false, true, 273), "auto_render", [], "any", false, false, true, 273); }));
                    foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                        // line 274
                        echo "                                                <th class=\"pt-2 pb-2\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 274), "label", [], "any", false, false, true, 274), 274, $this->source)), "html", null, true);
                        echo "</th>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 276
                    echo "                                        ";
                }
                // line 277
                echo "                                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_class_form'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 278
            echo "
                                    </thead>
                                    ";
            // line 280
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "product_classes", [], "any", false, false, true, 280));
            foreach ($context['_seq'] as $context["_key"] => $context["product_class_form"]) {
                // line 281
                echo "                                        <tr id=\"ex-product_class-";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product_class_form"], "vars", [], "any", false, false, true, 281), "name", [], "any", false, false, true, 281), 281, $this->source), "html", null, true);
                echo "\">
                                            <td class=\"align-middle ps-3\">
                                                ";
                // line 283
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "checked", [], "any", false, false, true, 283), 283, $this->source), 'widget');
                echo "
                                            </td>
                                            <td class=\"align-middle\">
                                                ";
                // line 286
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product_class_form"], "vars", [], "any", false, false, true, 286), "value", [], "any", false, false, true, 286), "ClassCategory1", [], "any", false, false, true, 286), 286, $this->source), "html", null, true);
                echo "
                                                ";
                // line 287
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "ClassCategory1", [], "any", false, false, true, 287), 287, $this->source), 'widget');
                echo "
                                            </td>
                                            <td class=\"align-middle\">
                                                ";
                // line 290
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product_class_form"], "vars", [], "any", false, false, true, 290), "value", [], "any", false, false, true, 290), "ClassCategory2", [], "any", false, false, true, 290), 290, $this->source), "html", null, true);
                echo "
                                                ";
                // line 291
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "ClassCategory2", [], "any", false, false, true, 291), 291, $this->source), 'widget');
                echo "
                                            </td>
                                            <td class=\"align-middle\">
                                                ";
                // line 294
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "code", [], "any", false, false, true, 294), 294, $this->source), 'widget');
                echo "
                                                ";
                // line 295
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "code", [], "any", false, false, true, 295), 295, $this->source), 'errors');
                echo "
                                            </td>
                                            <td class=\"align-middle\">
                                                <div class=\"row\">
                                                    <div class=\"col-5\">
                                                        ";
                // line 300
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "stock", [], "any", false, false, true, 300), 300, $this->source), 'widget');
                echo "
                                                        ";
                // line 301
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "stock", [], "any", false, false, true, 301), 301, $this->source), 'errors');
                echo "
                                                    </div>
                                                    <div class=\"col-auto\">
                                                        <div class=\"form-check form-check-inline\">
                                                            ";
                // line 305
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "stock_unlimited", [], "any", false, false, true, 305), 305, $this->source), 'widget');
                echo "
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class=\"align-middle\">
                                                <div class=\"row\">
                                                    <div class=\"col-6\">
                                                        ";
                // line 313
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "sale_limit", [], "any", false, false, true, 313), 313, $this->source), 'widget');
                echo "
                                                        ";
                // line 314
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "sale_limit", [], "any", false, false, true, 314), 314, $this->source), 'errors');
                echo "
                                                    </div>
                                                </div>
                                            </td>
                                            <td class=\"align-middle\">
                                                ";
                // line 319
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "price01", [], "any", false, false, true, 319), 319, $this->source), 'widget');
                echo "
                                                ";
                // line 320
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "price01", [], "any", false, false, true, 320), 320, $this->source), 'errors');
                echo "
                                            </td>
                                            <td class=\"align-middle\">
                                                ";
                // line 323
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "price02", [], "any", false, false, true, 323), 323, $this->source), 'widget');
                echo "
                                                ";
                // line 324
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "price02", [], "any", false, false, true, 324), 324, $this->source), 'errors');
                echo "
                                            </td>
                                            ";
                // line 326
                if (twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "option_product_delivery_fee", [], "any", false, false, true, 326)) {
                    // line 327
                    echo "                                                <td class=\"align-middle\">
                                                    ";
                    // line 328
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "delivery_fee", [], "any", false, false, true, 328), 328, $this->source), 'widget');
                    echo "
                                                    ";
                    // line 329
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "delivery_fee", [], "any", false, false, true, 329), 329, $this->source), 'errors');
                    echo "
                                                </td>
                                            ";
                }
                // line 332
                echo "                                            ";
                if (twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "option_product_tax_rule", [], "any", false, false, true, 332)) {
                    // line 333
                    echo "                                                <td class=\"align-middle\">
                                                    ";
                    // line 334
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "tax_rate", [], "any", false, false, true, 334), 334, $this->source), 'widget');
                    echo "
                                                    ";
                    // line 335
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "tax_rate", [], "any", false, false, true, 335), 335, $this->source), 'errors');
                    echo "
                                                </td>
                                            ";
                }
                // line 338
                echo "                                            <td class=\"align-middle\">
                                                ";
                // line 339
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "delivery_duration", [], "any", false, false, true, 339), 339, $this->source), 'widget');
                echo "
                                                ";
                // line 340
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "delivery_duration", [], "any", false, false, true, 340), 340, $this->source), 'errors');
                echo "
                                            </td>
                                            <td class=\"align-middle pe-3\">
                                                ";
                // line 343
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "sale_type", [], "any", false, false, true, 343), 343, $this->source), 'widget');
                echo "
                                                ";
                // line 344
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "sale_type", [], "any", false, false, true, 344), 344, $this->source), 'errors');
                echo "
                                            </td>
                                            ";
                // line 347
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, $context["product_class_form"], function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 347), "eccube_form_options", [], "any", false, false, true, 347), "auto_render", [], "any", false, false, true, 347); }));
                foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                    // line 348
                    echo "                                                ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 348), "eccube_form_options", [], "any", false, false, true, 348), "form_theme", [], "any", false, false, true, 348)) {
                        // line 349
                        echo "                                                    ";
                        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, true, 349), "eccube_form_options", [], "any", false, false, true, 349), "form_theme", [], "any", false, false, true, 349)], true);
                        // line 350
                        echo "                                                    ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 350, $this->source), 'row');
                        echo "
                                                ";
                    } else {
                        // line 352
                        echo "                                                    <td class=\"align-middle pe-3\">
                                                        ";
                        // line 353
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 353, $this->source), 'widget');
                        echo "
                                                        ";
                        // line 354
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed($context["f"], 354, $this->source), 'errors');
                        echo "
                                                    </td>
                                                ";
                    }
                    // line 357
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 358
                echo "                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_class_form'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 360
            echo "                                </table>
                            </div>
                        </div>
                        <div class=\"c-conversionArea\">
                            <div class=\"c-conversionArea__container\">
                                <div class=\"row justify-content-between align-items-center\">
                                    <div class=\"col-6\">
                                        <div class=\"c-conversionArea__leftBlockItem\">
                                            ";
            // line 368
            if (($context["return_product_list"] ?? null)) {
                // line 369
                echo "                                                <a class=\"c-baseLink\" href=\"";
                echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product", ["resume" => 1]);
                echo "\">
                                                    <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                                    <span>";
                // line 371
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_list"), "html", null, true);
                echo "</span>
                                                </a>
                                            ";
            } else {
                // line 374
                echo "                                                <a class=\"c-baseLink\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_product_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, true, 374)]), "html", null, true);
                echo "\">
                                                    <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                                    <span>";
                // line 376
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_registration"), "html", null, true);
                echo "</span>
                                                </a>
                                            ";
            }
            // line 379
            echo "                                        </div>
                                    </div>
                                    <div class=\"col-6\">
                                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                                            <div class=\"col-auto\">
                                                <button class=\"btn btn-ec-conversion px-5\" name=\"";
            // line 384
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "save", [], "any", false, false, true, 384), "vars", [], "any", false, false, true, 384), "full_name", [], "any", false, false, true, 384), 384, $this->source), "html", null, true);
            echo "\" type=\"submit\">
                                                    ";
            // line 385
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
        } else {
            // line 396
            echo "                    <div class=\"c-conversionArea\">
                        <div class=\"c-conversionArea__container\">
                            <div class=\"row justify-content-between align-items-center\">
                                <div class=\"col-6\">
                                    <div class=\"c-conversionArea__leftBlockItem\">
                                        ";
            // line 401
            if (($context["return_product_list"] ?? null)) {
                // line 402
                echo "                                            <a class=\"c-baseLink\" href=\"";
                echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product", ["resume" => 1]);
                echo "\">
                                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                                <span>";
                // line 404
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_list"), "html", null, true);
                echo "</span>
                                            </a>
                                        ";
            } else {
                // line 407
                echo "                                            <a class=\"c-baseLink\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_product_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, true, 407)]), "html", null, true);
                echo "\">
                                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                                <span>";
                // line 409
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_registration"), "html", null, true);
                echo "</span>
                                            </a>
                                        ";
            }
            // line 412
            echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        // line 418
        echo "
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@admin/Product/product_class.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  838 => 418,  830 => 412,  824 => 409,  818 => 407,  812 => 404,  806 => 402,  804 => 401,  797 => 396,  783 => 385,  779 => 384,  772 => 379,  766 => 376,  760 => 374,  754 => 371,  748 => 369,  746 => 368,  736 => 360,  729 => 358,  723 => 357,  717 => 354,  713 => 353,  710 => 352,  704 => 350,  701 => 349,  698 => 348,  693 => 347,  688 => 344,  684 => 343,  678 => 340,  674 => 339,  671 => 338,  665 => 335,  661 => 334,  658 => 333,  655 => 332,  649 => 329,  645 => 328,  642 => 327,  640 => 326,  635 => 324,  631 => 323,  625 => 320,  621 => 319,  613 => 314,  609 => 313,  598 => 305,  591 => 301,  587 => 300,  579 => 295,  575 => 294,  569 => 291,  565 => 290,  559 => 287,  555 => 286,  549 => 283,  543 => 281,  539 => 280,  535 => 278,  521 => 277,  518 => 276,  509 => 274,  504 => 273,  501 => 272,  499 => 271,  481 => 270,  476 => 267,  471 => 266,  465 => 264,  462 => 263,  456 => 261,  454 => 260,  450 => 259,  446 => 258,  442 => 257,  438 => 256,  434 => 255,  430 => 254,  426 => 253,  412 => 242,  404 => 237,  401 => 236,  399 => 235,  398 => 234,  389 => 228,  385 => 227,  381 => 226,  377 => 225,  373 => 224,  368 => 223,  366 => 222,  362 => 220,  354 => 215,  350 => 214,  344 => 211,  340 => 210,  330 => 203,  327 => 202,  321 => 198,  314 => 194,  309 => 193,  307 => 192,  303 => 190,  291 => 185,  285 => 182,  280 => 179,  278 => 178,  267 => 174,  261 => 171,  244 => 157,  239 => 155,  235 => 154,  229 => 151,  221 => 146,  211 => 139,  203 => 133,  198 => 130,  194 => 128,  188 => 124,  183 => 121,  180 => 119,  178 => 118,  172 => 114,  168 => 113,  76 => 22,  72 => 21,  65 => 16,  58 => 15,  53 => 11,  51 => 19,  49 => 18,  47 => 13,  40 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Product/product_class.twig", "/var/www/html/src/Eccube/Resource/template/admin/Product/product_class.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 13, "form_theme" => 18, "if" => 118, "for" => 270);
        static $filters = array("escape" => 15, "trans" => 15, "length" => 222, "filter" => 273);
        static $functions = array("url" => 154, "form_widget" => 155, "csrf_token" => 194, "form_errors" => 211, "form_row" => 350);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'form_theme', 'if', 'for'],
                ['escape', 'trans', 'length', 'filter'],
                ['url', 'form_widget', 'csrf_token', 'form_errors', 'form_row']
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
