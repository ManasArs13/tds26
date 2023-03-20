<?php

/* default/template/checkout/simplecheckout_shipping_address.twig */
class __TwigTemplate_674c15fb5babf04eaef196eaef103d5f0c7189bce3cfd35872f41e0fbacf0b87 extends Twig_Template
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
        echo "<div class=\"simplecheckout-block\" id=\"simplecheckout_shipping_address\" ";
        echo (((isset($context["hide"]) ? $context["hide"] : null)) ? ("data-hide=\"true\"") : (""));
        echo " ";
        echo ((((isset($context["display_error"]) ? $context["display_error"] : null) && (isset($context["has_error"]) ? $context["has_error"] : null))) ? ("data-error=\"true\"") : (""));
        echo ">
  ";
        // line 2
        if ((isset($context["display_header"]) ? $context["display_header"] : null)) {
            // line 3
            echo "    <div class=\"checkout-heading panel-heading\">";
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo "</div>
  ";
        }
        // line 5
        echo "  <div class=\"simplecheckout-block-content\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 7
            echo "      ";
            echo $context["row"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hidden_rows"]) ? $context["hidden_rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 10
            echo "      ";
            echo $context["row"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/simplecheckout_shipping_address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 12,  55 => 10,  50 => 9,  41 => 7,  37 => 6,  34 => 5,  28 => 3,  26 => 2,  19 => 1,);
    }
}
/* <div class="simplecheckout-block" id="simplecheckout_shipping_address" {{ hide ? 'data-hide="true"' : '' }} {{ display_error and has_error ? 'data-error="true"' : '' }}>*/
/*   {% if display_header %}*/
/*     <div class="checkout-heading panel-heading">{{ text_checkout_shipping_address }}</div>*/
/*   {% endif %}*/
/*   <div class="simplecheckout-block-content">*/
/*     {% for row in rows %}*/
/*       {{ row }}*/
/*     {% endfor %}*/
/*     {% for row in hidden_rows %}*/
/*       {{ row }}*/
/*     {% endfor %}*/
/*   </div>*/
/* </div>*/
