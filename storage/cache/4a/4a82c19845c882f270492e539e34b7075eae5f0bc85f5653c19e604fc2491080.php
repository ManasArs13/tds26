<?php

/* default/template/mail/order_alert.twig */
class __TwigTemplate_e17cac995cc84575076cfefcc537ecf897eff5651223b1a1aea5d40029c294de extends Twig_Template
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
        echo (isset($context["text_received"]) ? $context["text_received"] : null);
        echo "

";
        // line 3
        echo (isset($context["text_order_id"]) ? $context["text_order_id"] : null);
        echo " ";
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        echo "
";
        // line 4
        echo (isset($context["text_date_added"]) ? $context["text_date_added"] : null);
        echo " ";
        echo (isset($context["date_added"]) ? $context["date_added"] : null);
        echo "
";
        // line 5
        echo (isset($context["text_order_status"]) ? $context["text_order_status"] : null);
        echo " ";
        echo (isset($context["order_status"]) ? $context["order_status"] : null);
        echo "

";
        // line 7
        echo (isset($context["text_email"]) ? $context["text_email"] : null);
        echo " - ";
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "
";
        // line 8
        echo (isset($context["text_telephone"]) ? $context["text_telephone"] : null);
        echo " -  ";
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "


";
        // line 11
        echo (isset($context["shipping_address"]) ? $context["shipping_address"] : null);
        echo "


";
        // line 14
        echo (isset($context["text_product"]) ? $context["text_product"] : null);
        echo "

";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 17
            echo $this->getAttribute($context["product"], "quantity", array());
            echo "x ";
            echo $this->getAttribute($context["product"], "name", array());
            echo " (";
            echo $this->getAttribute($context["product"], "model", array());
            echo ") ";
            echo $this->getAttribute($context["product"], "total", array());
            echo "
";
            // line 18
            if ((isset($context["option"]) ? $context["option"] : null)) {
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 20
                    echo "\t- ";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo " ";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo " 
";
        // line 24
        if ((isset($context["vouchers"]) ? $context["vouchers"] : null)) {
            // line 25
            echo "
";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 27
                echo "1x ";
                echo $this->getAttribute($context["voucher"], "description", array());
                echo " ";
                echo $this->getAttribute($context["voucher"], "amount", array());
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo " 
";
        }
        // line 30
        echo (isset($context["text_total"]) ? $context["text_total"] : null);
        echo "

";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 33
            echo $this->getAttribute($context["total"], "title", array());
            echo ": ";
            echo $this->getAttribute($context["total"], "value", array());
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo " 
  
";
        // line 36
        if ((isset($context["comment"]) ? $context["comment"] : null)) {
            // line 37
            echo (isset($context["text_comment"]) ? $context["text_comment"] : null);
            echo "

";
            // line 39
            echo (isset($context["comment"]) ? $context["comment"] : null);
            echo "
";
        }
        // line 41
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/mail/order_alert.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 41,  161 => 39,  156 => 37,  154 => 36,  150 => 34,  140 => 33,  136 => 32,  131 => 30,  127 => 28,  116 => 27,  112 => 26,  109 => 25,  107 => 24,  104 => 23,  88 => 20,  84 => 19,  82 => 18,  72 => 17,  68 => 16,  63 => 14,  57 => 11,  49 => 8,  43 => 7,  36 => 5,  30 => 4,  24 => 3,  19 => 1,);
    }
}
/* {{ text_received }}*/
/* */
/* {{ text_order_id }} {{ order_id }}*/
/* {{ text_date_added }} {{ date_added }}*/
/* {{ text_order_status }} {{ order_status }}*/
/* */
/* {{ text_email }} - {{ email }}*/
/* {{ text_telephone }} -  {{ telephone }}*/
/* */
/* */
/* {{ shipping_address }}*/
/* */
/* */
/* {{ text_product }}*/
/* */
/* {% for product in products %}*/
/* {{ product.quantity }}x {{ product.name }} ({{ product.model }}) {{ product.total }}*/
/* {% if option %}*/
/* {% for option in product.option %}*/
/* 	- {{ option.name }} {{ option.value }}*/
/* {% endfor %}*/
/* {% endif %}*/
/* {% endfor %} */
/* {% if vouchers %}*/
/* */
/* {% for voucher in vouchers %}*/
/* 1x {{ voucher.description }} {{ voucher.amount }}*/
/* {% endfor %} */
/* {% endif %}*/
/* {{ text_total }}*/
/* */
/* {% for total in totals %}*/
/* {{ total.title }}: {{ total.value }}*/
/* {% endfor %} */
/*   */
/* {% if comment %}*/
/* {{ text_comment }}*/
/* */
/* {{ comment }}*/
/* {% endif %}*/
/* */
/* */
