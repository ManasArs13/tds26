<?php

/* default/template/common/simple_footer.twig */
class __TwigTemplate_aec52b669934b8fffa6c327e1a0643b8ec5918a28090f892fbd155d6af9f060b extends Twig_Template
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
        echo "
      ";
        // line 2
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 3
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 5
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "default/template/common/simple_footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }}*/
