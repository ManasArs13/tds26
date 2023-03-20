<?php

/* default/template/extension/module/category.twig */
class __TwigTemplate_d9350b1385a98e4e6b413bc09d8ddd0215d91234aac95a111be2c0c54bc09256 extends Twig_Template
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
        echo "<div class=\"list-group\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 3
            echo "  ";
            if (($this->getAttribute($context["category"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                echo " 
  <a href=\"";
                // line 4
                echo $this->getAttribute($context["category"], "href", array());
                echo "\" class=\"list-group-item active\"><img src=\"";
                echo $this->getAttribute($context["category"], "thumb", array());
                echo "\" alt=\"\" class=\"img-thumbnail border-0\">
  ";
                // line 5
                echo $this->getAttribute($context["category"], "name", array());
                echo "
  </a> 
  ";
                // line 7
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 8
                    echo "  ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "children", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 9
                        echo "  ";
                        if (($this->getAttribute($context["child"], "category_id", array()) == (isset($context["child_id"]) ? $context["child_id"] : null))) {
                            // line 10
                            echo "  <a href=\"";
                            echo $this->getAttribute($context["child"], "href", array());
                            echo "\" class=\"list-group-item active\">&nbsp;&nbsp;&nbsp; ";
                            echo $this->getAttribute($context["child"], "name", array());
                            echo "</a> 
  ";
                        } else {
                            // line 11
                            echo " 
  <a href=\"";
                            // line 12
                            echo $this->getAttribute($context["child"], "href", array());
                            echo "\" class=\"list-group-item\">&nbsp;&nbsp;&nbsp; ";
                            echo $this->getAttribute($context["child"], "name", array());
                            echo "</a>
  ";
                        }
                        // line 14
                        echo "  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 15
                    echo "  ";
                }
                // line 16
                echo "  ";
            } else {
                echo " <a href=\"";
                echo $this->getAttribute($context["category"], "href", array());
                echo "\" class=\"list-group-item\">
  <img src=\"";
                // line 17
                echo $this->getAttribute($context["category"], "thumb", array());
                echo "\" alt=\"\" class=\"img-thumbnail border-0\">
  ";
                // line 18
                echo $this->getAttribute($context["category"], "name", array());
                echo "</a>
  ";
            }
            // line 20
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 21,  95 => 20,  90 => 18,  86 => 17,  79 => 16,  76 => 15,  70 => 14,  63 => 12,  60 => 11,  52 => 10,  49 => 9,  44 => 8,  42 => 7,  37 => 5,  31 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="list-group">*/
/*   {% for category in categories %}*/
/*   {% if category.category_id == category_id %} */
/*   <a href="{{ category.href }}" class="list-group-item active"><img src="{{ category.thumb }}" alt="" class="img-thumbnail border-0">*/
/*   {{ category.name }}*/
/*   </a> */
/*   {% if category.children %}*/
/*   {% for child in category.children %}*/
/*   {% if child.category_id == child_id %}*/
/*   <a href="{{ child.href }}" class="list-group-item active">&nbsp;&nbsp;&nbsp; {{ child.name }}</a> */
/*   {% else %} */
/*   <a href="{{ child.href }}" class="list-group-item">&nbsp;&nbsp;&nbsp; {{ child.name }}</a>*/
/*   {% endif %}*/
/*   {% endfor %}*/
/*   {% endif %}*/
/*   {% else %} <a href="{{ category.href }}" class="list-group-item">*/
/*   <img src="{{ category.thumb }}" alt="" class="img-thumbnail border-0">*/
/*   {{ category.name }}</a>*/
/*   {% endif %}*/
/*   {% endfor %}*/
/* </div>*/
/* */
