<?php

/* default/template/checkout/simplecheckout_shipping.twig */
class __TwigTemplate_a70f3befbc0e6c4b63e61f849e9a7597461240dd91ae42ab92d98c7834bcebd6 extends Twig_Template
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
        echo "<div class=\"simplecheckout-block\" id=\"simplecheckout_shipping\" ";
        echo (((isset($context["hide"]) ? $context["hide"] : null)) ? ("data-hide=\"true\"") : (""));
        echo " ";
        echo ((((isset($context["display_error"]) ? $context["display_error"] : null) && (isset($context["has_error"]) ? $context["has_error"] : null))) ? ("data-error=\"true\"") : (""));
        echo ">
    ";
        // line 2
        if ((isset($context["display_header"]) ? $context["display_header"] : null)) {
            // line 3
            echo "        <div class=\"checkout-heading panel-heading\">";
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo "</div>
    ";
        }
        // line 5
        echo "    <div class=\"alert alert-danger simplecheckout-warning-block\" ";
        echo ((((isset($context["display_error"]) ? $context["display_error"] : null) && (isset($context["has_error_shipping"]) ? $context["has_error_shipping"] : null))) ? ("") : ("style=\"display:none\""));
        echo ">";
        echo (isset($context["error_shipping"]) ? $context["error_shipping"] : null);
        echo "</div>
    <div class=\"simplecheckout-block-content\">
        ";
        // line 7
        if ( !twig_test_empty((isset($context["shipping_methods"]) ? $context["shipping_methods"] : null))) {
            // line 8
            echo "            ";
            if (((isset($context["display_type"]) ? $context["display_type"] : null) == 2)) {
                // line 9
                echo "                ";
                $context["current_method"] = false;
                // line 10
                echo "                <select data-onchange=\"reloadAll\" name=\"shipping_method\" class=\"form-control\">
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
                $context['_seq'] = twig_ensure_traversable((isset($context["shipping_methods"]) ? $context["shipping_methods"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["shipping_method"]) {
                    // line 13
                    echo "                        ";
                    if ( !twig_test_empty($this->getAttribute($context["shipping_method"], "title", array(), "array"))) {
                        // line 14
                        echo "                        <optgroup label=\"";
                        echo $this->getAttribute($context["shipping_method"], "title", array(), "array");
                        echo "\">
                        ";
                    }
                    // line 16
                    echo "                        ";
                    if (twig_test_empty($this->getAttribute($context["shipping_method"], "error", array(), "array"))) {
                        // line 17
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["shipping_method"], "quote", array(), "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
                            // line 18
                            echo "                                <option value=\"";
                            echo $this->getAttribute($context["quote"], "code", array(), "array");
                            echo "\" ";
                            echo (( !twig_test_empty($this->getAttribute($context["quote"], "dummy", array(), "array"))) ? ("disabled=\"disabled\"") : (""));
                            echo " ";
                            echo (( !twig_test_empty($this->getAttribute($context["quote"], "dummy", array(), "array"))) ? ("data-dummy=\"true\"") : (""));
                            echo " ";
                            if (($this->getAttribute($context["quote"], "code", array(), "array") == (isset($context["code"]) ? $context["code"] : null))) {
                                echo "selected=\"selected\"";
                            }
                            echo ">";
                            echo $this->getAttribute($context["quote"], "title", array(), "array");
                            echo (( !twig_test_empty($this->getAttribute($context["quote"], "text", array(), "array"))) ? ((" - " . $this->getAttribute($context["quote"], "text", array(), "array"))) : (""));
                            echo "</option>
                                ";
                            // line 19
                            if (($this->getAttribute($context["quote"], "code", array(), "array") == (isset($context["code"]) ? $context["code"] : null))) {
                                // line 20
                                echo "                                    ";
                                $context["current_method"] = $context["quote"];
                                // line 21
                                echo "                                ";
                            }
                            // line 22
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quote'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 23
                        echo "                        ";
                    } else {
                        // line 24
                        echo "                            <option value=\"";
                        echo $this->getAttribute($context["shipping_method"], "code", array(), "array");
                        echo "\" disabled=\"disabled\">";
                        echo $this->getAttribute($context["shipping_method"], "error", array(), "array");
                        echo "</option>
                        ";
                    }
                    // line 26
                    echo "                        ";
                    if ( !twig_test_empty($this->getAttribute($context["shipping_method"], "title", array(), "array"))) {
                        // line 27
                        echo "                        </optgroup>
                        ";
                    }
                    // line 29
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping_method'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "                </select>
                ";
                // line 31
                if ((isset($context["current_method"]) ? $context["current_method"] : null)) {
                    // line 32
                    echo "                    ";
                    if ( !twig_test_empty($this->getAttribute((isset($context["current_method"]) ? $context["current_method"] : null), "description", array(), "array"))) {
                        // line 33
                        echo "                        <div class=\"simplecheckout-methods-description\">";
                        echo $this->getAttribute((isset($context["current_method"]) ? $context["current_method"] : null), "description", array(), "array");
                        echo "</div>
                    ";
                    }
                    // line 35
                    echo "                    ";
                    if ( !twig_test_empty((isset($context["rows"]) ? $context["rows"] : null))) {
                        // line 36
                        echo "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                            // line 37
                            echo "                          ";
                            echo $context["row"];
                            echo "
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 39
                        echo "                    ";
                    }
                    // line 40
                    echo "                ";
                }
                // line 41
                echo "            ";
            } else {
                // line 42
                echo "
                ";
                // line 43
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["shipping_methods"]) ? $context["shipping_methods"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["shipping_method"]) {
                    // line 44
                    echo "                    ";
                    if ( !twig_test_empty($this->getAttribute($context["shipping_method"], "title", array(), "array"))) {
                        // line 45
                        echo "                    <p><b>";
                        echo $this->getAttribute($context["shipping_method"], "title", array(), "array");
                        echo "</b></p>
                    ";
                    }
                    // line 47
                    echo "                    ";
                    if ( !twig_test_empty($this->getAttribute($context["shipping_method"], "warning", array(), "array"))) {
                        // line 48
                        echo "                        <div class=\"simplecheckout-error-text\">";
                        echo $this->getAttribute($context["shipping_method"], "warning", array(), "array");
                        echo "</div>
                    ";
                    }
                    // line 50
                    echo "                    ";
                    if (twig_test_empty($this->getAttribute($context["shipping_method"], "error", array(), "array"))) {
                        // line 51
                        echo "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["shipping_method"], "quote", array(), "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
                            // line 52
                            echo "                            <div class=\"radio\">
                                <label for=\"";
                            // line 53
                            echo $this->getAttribute($context["quote"], "code", array(), "array");
                            echo "\">
                                    <input type=\"radio\" data-onchange=\"reloadAll\" name=\"shipping_method\" ";
                            // line 54
                            echo (( !twig_test_empty($this->getAttribute($context["quote"], "dummy", array(), "array"))) ? ("disabled=\"disabled\"") : (""));
                            echo " ";
                            echo (( !twig_test_empty($this->getAttribute($context["quote"], "dummy", array(), "array"))) ? ("data-dummy=\"true\"") : (""));
                            echo " value=\"";
                            echo $this->getAttribute($context["quote"], "code", array(), "array");
                            echo "\" id=\"";
                            echo $this->getAttribute($context["quote"], "code", array(), "array");
                            echo "\" ";
                            if (($this->getAttribute($context["quote"], "code", array(), "array") == (isset($context["code"]) ? $context["code"] : null))) {
                                echo "checked=\"checked\"";
                            }
                            echo " />
                                    ";
                            // line 55
                            if ( !twig_test_empty($this->getAttribute($context["quote"], "img", array(), "array"))) {
                                // line 56
                                echo "                                        <img src=\"";
                                echo $this->getAttribute($context["quote"], "img", array(), "array");
                                echo "\" width=\"60\" height=\"32\" border=\"0\" style=\"display:block;margin:3px;\">
                                    ";
                            }
                            // line 58
                            echo "                                    ";
                            echo (( !twig_test_empty($this->getAttribute($context["quote"], "title", array(), "array"))) ? ($this->getAttribute($context["quote"], "title", array(), "array")) : (""));
                            echo (( !twig_test_empty($this->getAttribute($context["quote"], "text", array(), "array"))) ? ((" - " . $this->getAttribute($context["quote"], "text", array(), "array"))) : (""));
                            echo "
                                </label>
                            </div>
                            ";
                            // line 61
                            if (( !twig_test_empty($this->getAttribute($context["quote"], "description", array(), "array")) && (twig_test_empty((isset($context["display_for_selected"]) ? $context["display_for_selected"] : null)) || ( !twig_test_empty((isset($context["display_for_selected"]) ? $context["display_for_selected"] : null)) && ($this->getAttribute($context["quote"], "code", array(), "array") == (isset($context["code"]) ? $context["code"] : null)))))) {
                                // line 62
                                echo "                                <div class=\"form-group\">
                                    <label for=\"";
                                // line 63
                                echo $this->getAttribute($context["quote"], "code", array(), "array");
                                echo "\">";
                                echo $this->getAttribute($context["quote"], "description", array(), "array");
                                echo "</label>
                                </div>
                            ";
                            }
                            // line 66
                            echo "                            ";
                            if ((($this->getAttribute($context["quote"], "code", array(), "array") == (isset($context["code"]) ? $context["code"] : null)) &&  !twig_test_empty((isset($context["rows"]) ? $context["rows"] : null)))) {
                                // line 67
                                echo "                                ";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
                                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                                    // line 68
                                    echo "                                  ";
                                    echo $context["row"];
                                    echo "
                                ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 70
                                echo "                            ";
                            }
                            // line 71
                            echo "                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quote'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 72
                        echo "                    ";
                    } else {
                        // line 73
                        echo "                        <div class=\"simplecheckout-error-text\">";
                        echo $this->getAttribute($context["shipping_method"], "error", array(), "array");
                        echo "</div>
                    ";
                    }
                    // line 75
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping_method'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                echo "
            ";
            }
            // line 78
            echo "            <input type=\"hidden\" name=\"shipping_method_current\" value=\"";
            echo (isset($context["code"]) ? $context["code"] : null);
            echo "\" />
            <input type=\"hidden\" name=\"shipping_method_checked\" value=\"";
            // line 79
            echo (isset($context["checked_code"]) ? $context["checked_code"] : null);
            echo "\" />
        ";
        }
        // line 81
        echo "        ";
        if (((twig_test_empty((isset($context["shipping_methods"]) ? $context["shipping_methods"] : null)) && (isset($context["address_empty"]) ? $context["address_empty"] : null)) && (isset($context["display_address_empty"]) ? $context["display_address_empty"] : null))) {
            // line 82
            echo "            <div class=\"simplecheckout-warning-text\">";
            echo (isset($context["text_shipping_address"]) ? $context["text_shipping_address"] : null);
            echo "</div>
        ";
        }
        // line 84
        echo "        ";
        if ((twig_test_empty((isset($context["shipping_methods"]) ? $context["shipping_methods"] : null)) &&  !(isset($context["address_empty"]) ? $context["address_empty"] : null))) {
            // line 85
            echo "            <div class=\"simplecheckout-warning-text\">";
            echo (isset($context["error_no_shipping"]) ? $context["error_no_shipping"] : null);
            echo "</div>
        ";
        }
        // line 87
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/simplecheckout_shipping.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 87,  326 => 85,  323 => 84,  317 => 82,  314 => 81,  309 => 79,  304 => 78,  300 => 76,  294 => 75,  288 => 73,  285 => 72,  279 => 71,  276 => 70,  267 => 68,  262 => 67,  259 => 66,  251 => 63,  248 => 62,  246 => 61,  238 => 58,  232 => 56,  230 => 55,  216 => 54,  212 => 53,  209 => 52,  204 => 51,  201 => 50,  195 => 48,  192 => 47,  186 => 45,  183 => 44,  179 => 43,  176 => 42,  173 => 41,  170 => 40,  167 => 39,  158 => 37,  153 => 36,  150 => 35,  144 => 33,  141 => 32,  139 => 31,  136 => 30,  130 => 29,  126 => 27,  123 => 26,  115 => 24,  112 => 23,  106 => 22,  103 => 21,  100 => 20,  98 => 19,  82 => 18,  77 => 17,  74 => 16,  68 => 14,  65 => 13,  61 => 12,  53 => 11,  50 => 10,  47 => 9,  44 => 8,  42 => 7,  34 => 5,  28 => 3,  26 => 2,  19 => 1,);
    }
}
/* <div class="simplecheckout-block" id="simplecheckout_shipping" {{ hide ? 'data-hide="true"' : '' }} {{ display_error and has_error ? 'data-error="true"' : '' }}>*/
/*     {% if display_header %}*/
/*         <div class="checkout-heading panel-heading">{{ text_checkout_shipping_method }}</div>*/
/*     {% endif %}*/
/*     <div class="alert alert-danger simplecheckout-warning-block" {{ display_error and has_error_shipping ? '' : 'style="display:none"' }}>{{ error_shipping }}</div>*/
/*     <div class="simplecheckout-block-content">*/
/*         {% if shipping_methods is not empty %}*/
/*             {% if display_type == 2  %}*/
/*                 {% set current_method = false %}*/
/*                 <select data-onchange="reloadAll" name="shipping_method" class="form-control">*/
/*                     <option value="" disabled="disabled" {% if code is empty %}selected="selected"{% endif %}>{{ text_select }}</option>*/
/*                     {% for shipping_method in shipping_methods %}*/
/*                         {% if shipping_method['title'] is not empty %}*/
/*                         <optgroup label="{{ shipping_method['title'] }}">*/
/*                         {% endif %}*/
/*                         {% if shipping_method['error'] is empty %}*/
/*                             {% for quote in shipping_method['quote'] %}*/
/*                                 <option value="{{ quote['code'] }}" {{ quote['dummy'] is not empty ? 'disabled="disabled"' : '' }} {{ quote['dummy'] is not empty ? 'data-dummy="true"' : '' }} {% if quote['code'] == code %}selected="selected"{% endif %}>{{ quote['title'] }}{{ quote['text'] is not empty ? ' - ' ~ quote['text'] : '' }}</option>*/
/*                                 {% if quote['code'] == code %}*/
/*                                     {% set current_method = quote %}*/
/*                                 {% endif %}*/
/*                             {% endfor %}*/
/*                         {% else %}*/
/*                             <option value="{{ shipping_method['code'] }}" disabled="disabled">{{ shipping_method['error'] }}</option>*/
/*                         {% endif %}*/
/*                         {% if shipping_method['title'] is not empty %}*/
/*                         </optgroup>*/
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
/* */
/*                 {% for shipping_method in shipping_methods %}*/
/*                     {% if shipping_method['title'] is not empty %}*/
/*                     <p><b>{{ shipping_method['title'] }}</b></p>*/
/*                     {% endif %}*/
/*                     {% if shipping_method['warning'] is not empty %}*/
/*                         <div class="simplecheckout-error-text">{{ shipping_method['warning'] }}</div>*/
/*                     {% endif %}*/
/*                     {% if shipping_method['error'] is empty %}*/
/*                         {% for quote in shipping_method['quote'] %}*/
/*                             <div class="radio">*/
/*                                 <label for="{{ quote['code'] }}">*/
/*                                     <input type="radio" data-onchange="reloadAll" name="shipping_method" {{ quote['dummy'] is not empty ? 'disabled="disabled"' : '' }} {{ quote['dummy'] is not empty ? 'data-dummy="true"' : '' }} value="{{ quote['code'] }}" id="{{ quote['code'] }}" {% if quote['code'] == code %}checked="checked"{% endif %} />*/
/*                                     {% if quote['img'] is not empty %}*/
/*                                         <img src="{{ quote['img'] }}" width="60" height="32" border="0" style="display:block;margin:3px;">*/
/*                                     {% endif %}*/
/*                                     {{ quote['title'] is not empty ? quote['title'] : '' }}{{ quote['text'] is not empty ? ' - ' ~ quote['text'] : '' }}*/
/*                                 </label>*/
/*                             </div>*/
/*                             {% if quote['description'] is not empty and (display_for_selected is empty or (display_for_selected is not empty and quote['code'] == code)) %}*/
/*                                 <div class="form-group">*/
/*                                     <label for="{{ quote['code'] }}">{{ quote['description'] }}</label>*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                             {% if quote['code'] == code and rows is not empty %}*/
/*                                 {% for row in rows %}*/
/*                                   {{ row }}*/
/*                                 {% endfor %}*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     {% else %}*/
/*                         <div class="simplecheckout-error-text">{{ shipping_method['error'] }}</div>*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/* */
/*             {% endif %}*/
/*             <input type="hidden" name="shipping_method_current" value="{{ code }}" />*/
/*             <input type="hidden" name="shipping_method_checked" value="{{ checked_code }}" />*/
/*         {% endif %}*/
/*         {% if shipping_methods is empty and address_empty and display_address_empty %}*/
/*             <div class="simplecheckout-warning-text">{{ text_shipping_address }}</div>*/
/*         {% endif %}*/
/*         {% if shipping_methods is empty and not address_empty %}*/
/*             <div class="simplecheckout-warning-text">{{ error_no_shipping }}</div>*/
/*         {% endif %}*/
/*     </div>*/
/* </div>*/
