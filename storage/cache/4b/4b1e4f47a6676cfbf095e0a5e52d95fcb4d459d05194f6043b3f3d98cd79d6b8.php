<?php

/* default/template/checkout/simplecheckout_payment.twig */
class __TwigTemplate_99a142de7d8f076f2b7ce58ffc05059f64fa52d4179e0cea5fa29cc0e2263ece extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"simplecheckout-block\" id=\"simplecheckout_payment\" ";
        echo (((isset($context["hide"]) ? $context["hide"] : null)) ? ("data-hide=\"true\"") : (""));
        echo " ";
        echo ((((isset($context["display_error"]) ? $context["display_error"] : null) && (isset($context["has_error"]) ? $context["has_error"] : null))) ? ("data-error=\"true\"") : (""));
        echo ">
    ";
        // line 2
        if ((isset($context["display_header"]) ? $context["display_header"] : null)) {
            // line 3
            echo "        <div class=\"checkout-heading panel-heading\">";
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "</div>
    ";
        }
        // line 5
        echo "    <div class=\"alert alert-danger simplecheckout-warning-block\" ";
        echo ((((isset($context["display_error"]) ? $context["display_error"] : null) && (isset($context["has_error_payment"]) ? $context["has_error_payment"] : null))) ? ("") : ("style=\"display:none\""));
        echo ">";
        echo (isset($context["error_payment"]) ? $context["error_payment"] : null);
        echo "</div>
    <div class=\"simplecheckout-block-content\">
        ";
        // line 7
        if ( !twig_test_empty((isset($context["payment_methods"]) ? $context["payment_methods"] : null))) {
            // line 8
            echo "            ";
            if (((isset($context["display_type"]) ? $context["display_type"] : null) == 2)) {
                // line 9
                echo "                ";
                $context["current_method"] = false;
                // line 10
                echo "                <select data-onchange=\"reloadAll\" name=\"payment_method\" class=\"form-control\">
                    <option value=\"\" disabled=\"disabled\" ";
                // line 11
                if (twig_test_empty((isset($context["code"]) ? $context["code"] : null))) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                echo (isset($context["text_select"]) ? $context["text_select"] : null);
                echo "</option>
                    ";
                // line 12
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["payment_methods"]) ? $context["payment_methods"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["payment_method"]) {
                    // line 13
                    echo "                        <option value=\"";
                    echo $this->getAttribute($context["payment_method"], "code", array(), "array");
                    echo "\" ";
                    echo (( !twig_test_empty($this->getAttribute($context["payment_method"], "dummy", array(), "array"))) ? ("disabled=\"disabled\"") : (""));
                    echo " ";
                    echo (( !twig_test_empty($this->getAttribute($context["payment_method"], "dummy", array(), "array"))) ? ("data-dummy=\"true\"") : (""));
                    echo " ";
                    if (($this->getAttribute($context["payment_method"], "code", array(), "array") == (isset($context["code"]) ? $context["code"] : null))) {
                        echo "selected=\"selected\"";
                    }
                    echo ">";
                    echo $this->getAttribute($context["payment_method"], "title", array(), "array");
                    echo "</option>
                        ";
                    // line 14
                    if (($this->getAttribute($context["payment_method"], "code", array(), "array") == (isset($context["code"]) ? $context["code"] : null))) {
                        // line 15
                        echo "                            ";
                        $context["current_method"] = $context["payment_method"];
                        // line 16
                        echo "                        ";
                    }
                    // line 17
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_method'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "                </select>
                ";
                // line 19
                if ((isset($context["current_method"]) ? $context["current_method"] : null)) {
                    // line 20
                    echo "                    ";
                    if ( !twig_test_empty($this->getAttribute((isset($context["current_method"]) ? $context["current_method"] : null), "description", array(), "array"))) {
                        // line 21
                        echo "                        <div class=\"simplecheckout-methods-description\">";
                        echo $this->getAttribute((isset($context["current_method"]) ? $context["current_method"] : null), "description", array(), "array");
                        echo "</div>
                    ";
                    }
                    // line 23
                    echo "                    ";
                    if ( !twig_test_empty((isset($context["rows"]) ? $context["rows"] : null))) {
                        // line 24
                        echo "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                            // line 25
                            echo "                          ";
                            echo $context["row"];
                            echo "
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 27
                        echo "                    ";
                    }
                    // line 28
                    echo "                ";
                }
                // line 29
                echo "            ";
            } else {
                // line 30
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["payment_methods"]) ? $context["payment_methods"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["payment_method"]) {
                    // line 31
                    echo "                    <div class=\"radio\">
                        <label for=\"";
                    // line 32
                    echo $this->getAttribute($context["payment_method"], "code", array(), "array");
                    echo "\">
                            <input type=\"radio\" data-onchange=\"reloadAll\" name=\"payment_method\" value=\"";
                    // line 33
                    echo $this->getAttribute($context["payment_method"], "code", array(), "array");
                    echo "\" ";
                    echo (( !twig_test_empty($this->getAttribute($context["payment_method"], "dummy", array(), "array"))) ? ("disabled=\"disabled\"") : (""));
                    echo " ";
                    echo (( !twig_test_empty($this->getAttribute($context["payment_method"], "dummy", array(), "array"))) ? ("data-dummy=\"true\"") : (""));
                    echo " id=\"";
                    echo $this->getAttribute($context["payment_method"], "code", array(), "array");
                    echo "\" ";
                    if (($this->getAttribute($context["payment_method"], "code", array(), "array") == (isset($context["code"]) ? $context["code"] : null))) {
                        echo "checked=\"checked\"";
                    }
                    echo " />
                            ";
                    // line 34
                    echo $this->getAttribute($context["payment_method"], "title", array(), "array");
                    echo "
                            ";
                    // line 35
                    if ( !twig_test_empty($this->getAttribute($context["payment_method"], "terms", array(), "array"))) {
                        // line 36
                        echo "                                ";
                        echo $this->getAttribute($context["payment_method"], "terms", array(), "array");
                        echo "
                            ";
                    }
                    // line 38
                    echo "                        </label>
                    </div>
                    ";
                    // line 40
                    if (( !twig_test_empty($this->getAttribute($context["payment_method"], "description", array(), "array")) && (twig_test_empty((isset($context["display_for_selected"]) ? $context["display_for_selected"] : null)) || ( !twig_test_empty((isset($context["display_for_selected"]) ? $context["display_for_selected"] : null)) && ($this->getAttribute($context["payment_method"], "code", array(), "array") == (isset($context["code"]) ? $context["code"] : null)))))) {
                        // line 41
                        echo "                        <div class=\"form-group\">
                            <label for=\"";
                        // line 42
                        echo $this->getAttribute($context["payment_method"], "code", array(), "array");
                        echo "\">";
                        echo $this->getAttribute($context["payment_method"], "description", array(), "array");
                        echo "</label>
                        </div>
                    ";
                    }
                    // line 45
                    echo "                    ";
                    if ((($this->getAttribute($context["payment_method"], "code", array(), "array") == (isset($context["code"]) ? $context["code"] : null)) &&  !twig_test_empty((isset($context["rows"]) ? $context["rows"] : null)))) {
                        // line 46
                        echo "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                            // line 47
                            echo "                          ";
                            echo $context["row"];
                            echo "
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 49
                        echo "                    ";
                    }
                    // line 50
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_method'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "            ";
            }
            // line 52
            echo "            <input type=\"hidden\" name=\"payment_method_current\" value=\"";
            echo (isset($context["code"]) ? $context["code"] : null);
            echo "\" />
            <input type=\"hidden\" name=\"payment_method_checked\" value=\"";
            // line 53
            echo (isset($context["checked_code"]) ? $context["checked_code"] : null);
            echo "\" />
        ";
        }
        // line 55
        echo "        ";
        if (((twig_test_empty((isset($context["payment_methods"]) ? $context["payment_methods"] : null)) && (isset($context["address_empty"]) ? $context["address_empty"] : null)) && (isset($context["display_address_empty"]) ? $context["display_address_empty"] : null))) {
            // line 56
            echo "            <div class=\"simplecheckout-warning-text\">";
            echo (isset($context["text_payment_address"]) ? $context["text_payment_address"] : null);
            echo "</div>
        ";
        }
        // line 58
        echo "        ";
        if ((twig_test_empty((isset($context["payment_methods"]) ? $context["payment_methods"] : null)) &&  !(isset($context["address_empty"]) ? $context["address_empty"] : null))) {
            // line 59
            echo "            <div class=\"simplecheckout-warning-text\">";
            echo (isset($context["error_no_payment"]) ? $context["error_no_payment"] : null);
            echo "</div>
        ";
        }
        // line 61
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/simplecheckout_payment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 61,  240 => 59,  237 => 58,  231 => 56,  228 => 55,  223 => 53,  218 => 52,  215 => 51,  209 => 50,  206 => 49,  197 => 47,  192 => 46,  189 => 45,  181 => 42,  178 => 41,  176 => 40,  172 => 38,  166 => 36,  164 => 35,  160 => 34,  146 => 33,  142 => 32,  139 => 31,  134 => 30,  131 => 29,  128 => 28,  125 => 27,  116 => 25,  111 => 24,  108 => 23,  102 => 21,  99 => 20,  97 => 19,  94 => 18,  88 => 17,  85 => 16,  82 => 15,  80 => 14,  65 => 13,  61 => 12,  53 => 11,  50 => 10,  47 => 9,  44 => 8,  42 => 7,  34 => 5,  28 => 3,  26 => 2,  19 => 1,);
    }
}
/* <div class="simplecheckout-block" id="simplecheckout_payment" {{ hide ? 'data-hide="true"' : '' }} {{ display_error and has_error ? 'data-error="true"' : '' }}>*/
/*     {% if display_header %}*/
/*         <div class="checkout-heading panel-heading">{{ text_checkout_payment_method }}</div>*/
/*     {% endif %}*/
/*     <div class="alert alert-danger simplecheckout-warning-block" {{ display_error and has_error_payment ? '' : 'style="display:none"' }}>{{ error_payment }}</div>*/
/*     <div class="simplecheckout-block-content">*/
/*         {% if payment_methods is not empty %}*/
/*             {% if display_type == 2  %}*/
/*                 {% set current_method = false %}*/
/*                 <select data-onchange="reloadAll" name="payment_method" class="form-control">*/
/*                     <option value="" disabled="disabled" {% if code is empty %}selected="selected"{% endif %}>{{ text_select }}</option>*/
/*                     {% for payment_method in payment_methods %}*/
/*                         <option value="{{ payment_method['code'] }}" {{ payment_method['dummy'] is not empty ? 'disabled="disabled"' : '' }} {{ payment_method['dummy'] is not empty ? 'data-dummy="true"' : '' }} {% if payment_method['code'] == code %}selected="selected"{% endif %}>{{ payment_method['title'] }}</option>*/
/*                         {% if payment_method['code'] == code %}*/
/*                             {% set current_method = payment_method %}*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                 </select>*/
/*                 {% if current_method %}*/
/*                     {% if current_method['description'] is not empty %}*/
/*                         <div class="simplecheckout-methods-description">{{ current_method['description'] }}</div>*/
/*                     {% endif %}*/
/*                     {% if rows is not empty %}*/
/*                         {% for row in rows %}*/
/*                           {{ row }}*/
/*                         {% endfor %}*/
/*                     {% endif %}*/
/*                 {% endif %}*/
/*             {% else %}*/
/*                 {% for payment_method in payment_methods %}*/
/*                     <div class="radio">*/
/*                         <label for="{{ payment_method['code'] }}">*/
/*                             <input type="radio" data-onchange="reloadAll" name="payment_method" value="{{ payment_method['code'] }}" {{ payment_method['dummy'] is not empty ? 'disabled="disabled"' : '' }} {{ payment_method['dummy'] is not empty ? 'data-dummy="true"' : '' }} id="{{ payment_method['code'] }}" {% if payment_method['code'] == code %}checked="checked"{% endif %} />*/
/*                             {{ payment_method['title'] }}*/
/*                             {% if payment_method['terms'] is not empty %}*/
/*                                 {{ payment_method['terms'] }}*/
/*                             {% endif %}*/
/*                         </label>*/
/*                     </div>*/
/*                     {% if payment_method['description'] is not empty and (display_for_selected is empty or (display_for_selected is not empty and payment_method['code'] == code)) %}*/
/*                         <div class="form-group">*/
/*                             <label for="{{ payment_method['code'] }}">{{ payment_method['description'] }}</label>*/
/*                         </div>*/
/*                     {% endif %}*/
/*                     {% if payment_method['code'] == code and rows is not empty %}*/
/*                         {% for row in rows %}*/
/*                           {{ row }}*/
/*                         {% endfor %}*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*             {% endif %}*/
/*             <input type="hidden" name="payment_method_current" value="{{ code }}" />*/
/*             <input type="hidden" name="payment_method_checked" value="{{ checked_code }}" />*/
/*         {% endif %}*/
/*         {% if payment_methods is empty and address_empty and display_address_empty %}*/
/*             <div class="simplecheckout-warning-text">{{ text_payment_address }}</div>*/
/*         {% endif %}*/
/*         {% if payment_methods is empty and not address_empty %}*/
/*             <div class="simplecheckout-warning-text">{{ error_no_payment }}</div>*/
/*         {% endif %}*/
/*     </div>*/
/* </div>*/
