<?php

/* __string_template__e7a3bfa0e03409bbf364689453d608eae467e60f172c4df38476facdf53a2304 */
class __TwigTemplate_fe69c264d843762ce8b85add5b67fb67eb67ec0318a62aab68de7b37a94373e1 extends Twig_Template
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
        echo "<div id=\"search\" class=\"input-group\">
  <input type=\"text\" name=\"search\" value=\"";
        // line 2
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "\" class=\"form-control input-lg searchadmin\" />
  ";
        // line 6
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__e7a3bfa0e03409bbf364689453d608eae467e60f172c4df38476facdf53a2304";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 6,  22 => 2,  19 => 1,);
    }
}
/* <div id="search" class="input-group">*/
/*   <input type="text" name="search" value="{{ search }}" placeholder="{{ text_search }}" class="form-control input-lg searchadmin" />*/
/*   {#<span class="input-group-btn">*/
/*     <button type="button" class="btn btn-default btn-lg"><i class="fa fa-search"></i></button>*/
/*   </span>#}*/
/* </div>*/
