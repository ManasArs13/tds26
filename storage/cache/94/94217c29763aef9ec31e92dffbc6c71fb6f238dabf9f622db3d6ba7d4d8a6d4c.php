<?php

/* __string_template__b2bf4cbb0b7dcd8139c9c71543a7f51af08747b6f989c70ef0285e51e5b259ad */
class __TwigTemplate_33376b814f466a466e8bc5d88dff04049b1bf46dce6ee0618973fd4dc9a160d5 extends Twig_Template
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
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 2
            echo "<div class=\"container-fluid\">
  <nav id=\"menu\" class=\"navbar\" style=\"display: none;\">
    <button type=\"button\" onclick=\"CloseMenu()\" class=\"close\" aria-label=\"Close\" style=\"margin: 15px;\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></button>
        <h2 style=\"margin: 25px;\">Каталог</h2>
    <div style=\"margin: 25px;\" class=\"row\">
     ";
            // line 7
            if ((isset($context["categories"]) ? $context["categories"] : null)) {
                echo "   
        ";
                // line 8
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 9
                    echo "            <div class=\"col-sm-3\">
                <a href=\"";
                    // line 10
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\"><img src=\"";
                    echo $this->getAttribute($context["category"], "thumb", array());
                    echo "\" alt=\"\" class=\"img-thumbnail border-0\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a>
            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 13
                echo "     ";
            }
            echo " 
    </div>
    
 ";
            // line 41
            echo "  </nav>
</div>
";
        }
        // line 43
        echo " ";
    }

    public function getTemplateName()
    {
        return "__string_template__b2bf4cbb0b7dcd8139c9c71543a7f51af08747b6f989c70ef0285e51e5b259ad";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 43,  59 => 41,  52 => 13,  39 => 10,  36 => 9,  32 => 8,  28 => 7,  21 => 2,  19 => 1,);
    }
}
/* {% if categories %}*/
/* <div class="container-fluid">*/
/*   <nav id="menu" class="navbar" style="display: none;">*/
/*     <button type="button" onclick="CloseMenu()" class="close" aria-label="Close" style="margin: 15px;"><i class="fa fa-times" aria-hidden="true"></i></button>*/
/*         <h2 style="margin: 25px;">Каталог</h2>*/
/*     <div style="margin: 25px;" class="row">*/
/*      {% if categories %}   */
/*         {% for category in categories %}*/
/*             <div class="col-sm-3">*/
/*                 <a href="{{ category.href }}"><img src="{{ category.thumb }}" alt="" class="img-thumbnail border-0">{{ category.name }}</a>*/
/*             </div>*/
/*         {% endfor %}*/
/*      {% endif %} */
/*     </div>*/
/*     */
/*  {#   <div class="collapse navbar-collapse navbar-ex1-collapse">*/
/*       <ul class="nav navbar-nav">*/
/*         {% for category in categories %}*/
/*         {% if category.children %}*/
/*         <li class="dropdown"><a href="{{ category.href }}"><img src="{{ category.thumb }}" alt="" class="img-thumbnail border-0">*/
/*         {{ category.name }}</a>*/
/*           <div class="dropdown-menu">*/
/*             <div class="dropdown-inner"> {% for children in category.children|batch(category.children|length / category.column|round(1, 'ceil')) %}*/
/*               <ul class="list-unstyled">*/
/*                 {% for child in children %}*/
/*                 <li><a href="{{ child.href }}">{{ child.name }}</a></li>*/
/*                 {% endfor %}*/
/*               </ul>*/
/*               {% endfor %}</div>*/
/*             </div>*/
/*         </li>*/
/*         {% else %}*/
/*         <li><a href="{{ category.href }}">*/
/*         <img src="{{ category.thumb }}" alt="" class="img-thumbnail border-0">*/
/*         {{ category.name }}</a></li>*/
/*         {% endif %}*/
/*         {% endfor %}*/
/*         <li><a href="https://tds26.ru/dlya-optovyh-pokupatelej"><img src="https://tds26.ru/image/catalog/kategorii/dlyaopt25.png" alt="" class="img-thumbnail border-0">Для оптовых покупателей</a></li>*/
/*       </ul>*/
/*     </div>#}*/
/*   </nav>*/
/* </div>*/
/* {% endif %} */
