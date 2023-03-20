<?php

/* default/template/checkout/simplecheckout_comment.twig */
class __TwigTemplate_b086a9a2e52464a2f5b85c17ab6b6e0693ef5d9103c3df35b8012f352d9629e3 extends Twig_Template
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
        echo "<div class=\"simplecheckout-block\" id=\"simplecheckout_comment\">
    ";
        // line 2
        if ((isset($context["display_header"]) ? $context["display_header"] : null)) {
            // line 3
            echo "      <div class=\"checkout-heading panel-heading\">";
            echo (isset($context["label"]) ? $context["label"] : null);
            echo "</div>
    ";
        }
        // line 5
        echo "    <div class=\"simplecheckout-block-content\">
      <textarea class=\"form-control\" name=\"comment\" id=\"comment\" placeholder=\"";
        // line 6
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" data-reload-payment-form=\"true\">";
        echo (isset($context["comment"]) ? $context["comment"] : null);
        echo "</textarea>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/simplecheckout_comment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  30 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="simplecheckout-block" id="simplecheckout_comment">*/
/*     {% if display_header %}*/
/*       <div class="checkout-heading panel-heading">{{ label }}</div>*/
/*     {% endif %}*/
/*     <div class="simplecheckout-block-content">*/
/*       <textarea class="form-control" name="comment" id="comment" placeholder="{{ placeholder }}" data-reload-payment-form="true">{{ comment }}</textarea>*/
/*     </div>*/
/* </div>*/
