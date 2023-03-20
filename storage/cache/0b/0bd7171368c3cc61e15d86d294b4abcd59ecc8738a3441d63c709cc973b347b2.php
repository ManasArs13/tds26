<?php

/* __string_template__b76555ab144fcff97c8caecf33ec8d3b90650d031044a86d1d80c90a092521ce */
class __TwigTemplate_cce4eb50c6a07571d6e46432ee1b63b78ac588731f8faea51745a64c34395cf3 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div id=\"product-category\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 9
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h2 class=\"category_h2\">";
        // line 17
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h2>
   ";
        // line 27
        echo "       <hr>
      ";
        // line 28
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 29
            echo " 
      ";
            // line 30
            if ((twig_length_filter($this->env, (isset($context["categories"]) ? $context["categories"] : null)) <= 5)) {
                // line 31
                echo "      <div class=\"row\">
        <div class=\"col-sm-3\">
          <ul class=\"category_ul\">
            ";
                // line 34
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 35
                    echo "            <li class=\"category_li\"><a class=\"category_a\" href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a></li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "          </ul>
        </div>
      </div>
      ";
            } else {
                // line 41
                echo "      <div class=\"row\">";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["categories"]) ? $context["categories"] : null), twig_round((twig_length_filter($this->env, (isset($context["categories"]) ? $context["categories"] : null)) / 4), 1, "ceil")));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 42
                    echo "        <div class=\"col-sm-3\">
          <ul class=\"category_ul\">
            ";
                    // line 44
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["category"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 45
                        echo "            <li class=\"category_li\"><a class=\"category_a\" href=\"";
                        echo $this->getAttribute($context["child"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["child"], "name", array());
                        echo "</a></li>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 47
                    echo "          </ul>
        </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "</div>
      <br />
      ";
            }
            // line 52
            echo "      ";
        }
        // line 53
        echo "      ";
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 54
            echo "      <div class=\"row\">
        <div class=\"col-md-2 col-sm-6 hidden-xs\">
          <div class=\"btn-group btn-group-sm\">
            <button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 57
            echo (isset($context["button_list"]) ? $context["button_list"] : null);
            echo "\"><i class=\"fa fa-th-list\"></i></button>
            <button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 58
            echo (isset($context["button_grid"]) ? $context["button_grid"] : null);
            echo "\"><i class=\"fa fa-th\"></i></button>
          </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
          <div class=\"form-group hidden\"><a href=\"";
            // line 62
            echo (isset($context["compare"]) ? $context["compare"] : null);
            echo "\" id=\"compare-total\" class=\"btn btn-link\">";
            echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
            echo "</a></div>
        </div>
        <div class=\"col-md-4 col-xs-6\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-sort\">";
            // line 66
            echo (isset($context["text_sort"]) ? $context["text_sort"] : null);
            echo "</label>
            <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
              
              
              
              ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 72
                echo "              ";
                if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                    // line 73
                    echo "              
              
              
              <option value=\"";
                    // line 76
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
              
              
              
              ";
                } else {
                    // line 81
                    echo "              
              
              
              <option value=\"";
                    // line 84
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
              
              
              
              ";
                }
                // line 89
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "            
            
            
            </select>
          </div>
        </div>
        <div class=\"col-md-3 col-xs-6\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-limit\">";
            // line 98
            echo (isset($context["text_limit"]) ? $context["text_limit"] : null);
            echo "</label>
            <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
              
              
              
              ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 104
                echo "              ";
                if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                    // line 105
                    echo "              
              
              
              <option value=\"";
                    // line 108
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
              
              
              
              ";
                } else {
                    // line 113
                    echo "              
              
              
              <option value=\"";
                    // line 116
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
              
              
              
              ";
                }
                // line 121
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "            
            
            
            </select>
          </div>
        </div>
      </div>
      <div class=\"row\"> ";
            // line 129
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 130
                echo "        <div style=\"padding-right: 5px; padding-left: 5px\"class=\"product-layout product-grid col-lg-4 col-md-4 .col-sm-4 col-xs-6\">
          <div class=\"product-thumb\">
            <div class=\"image\"><a href=\"";
                // line 132
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-responsive\" /></a></div>
            <div>
              <div class=\"caption\">
                <h4><a href=\"";
                // line 135
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h4>
              ";
                // line 138
                echo "       
                ";
                // line 139
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 140
                    echo "                <p class=\"price\"> ";
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 141
                        echo "                  ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
                  ";
                    } else {
                        // line 142
                        echo " <span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span> <span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span> ";
                    }
                    // line 143
                    echo "                  ";
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        echo " <span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span> ";
                    }
                    echo " </p>
                ";
                }
                // line 145
                echo "                <p> Наличие:  ";
                echo ((($this->getAttribute($context["product"], "quantity", array()) == 0)) ? ("Ожидаеться поставка") : ("Есть"));
                echo "</p>
              
              
               </div>
                <div class=\"input-group btn-block\" style=\"margin-bottom:1px;\">
                                <span class=\"input-group-btn\">
                                    <button class=\"btn btn-primary\" id=\"ProductQuantityminus";
                // line 151
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "\" onclick=\"MINUS";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "()\">
                                        <i class=\"fa fa-minus\"></i>
                                    </button>
                                </span>
                                <input class=\"form-control\" id=\"ProductQuantity";
                // line 155
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "\"  value=\"";
                echo ((($this->getAttribute($context["product"], "quantity", array()) == 0)) ? (0) : ($this->getAttribute($context["product"], "minimum", array())));
                echo "\" size=\"1\" style=\"text-align: center;  font-size: 20px;\">
                                <span class=\"input-group-btn\">
                                    <button class=\"btn btn-primary\" id=\"ProductQuantityplus";
                // line 157
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "\" onclick=\"PlUS";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "()\">
                                        <i class=\"fa fa-plus\"></i>
                                    </button>
                                    </span>
                            </div>
              <div class=\"button-group\">
                <button type=\"button\" onclick=\"cart.add('";
                // line 163
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "', '";
                echo $this->getAttribute($context["product"], "minimum", array());
                echo "');\"> <small  style=\"font-size: 70%\">";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "</small></button>
              ";
                // line 165
                echo "               ";
                // line 166
                echo "              </div>
            </div>
          </div>
        </div>
        <script>
\t\tvar pQ";
                // line 171
                echo $this->getAttribute($context["product"], "product_id", array());
                echo " = ";
                echo $this->getAttribute($context["product"], "minimum", array());
                echo "  
        const PlUS";
                // line 172
                echo $this->getAttribute($context["product"], "product_id", array());
                echo " = () => {
          \t\tif (pQ";
                // line 173
                echo $this->getAttribute($context["product"], "product_id", array());
                echo " < ";
                echo $this->getAttribute($context["product"], "quantity", array());
                echo " && ";
                echo $this->getAttribute($context["product"], "quantity", array());
                echo " !== 0) {
          \t\t\tpQ";
                // line 174
                echo $this->getAttribute($context["product"], "product_id", array());
                echo " = pQ";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo " + 1
           \t\t\t\$('#ProductQuantity";
                // line 175
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "').val(pQ";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo ")
        \t\t}       
          }
          
         const MINUS";
                // line 179
                echo $this->getAttribute($context["product"], "product_id", array());
                echo " = () => {
           \t\tif (pQ";
                // line 180
                echo $this->getAttribute($context["product"], "product_id", array());
                echo " > ";
                echo $this->getAttribute($context["product"], "minimum", array());
                echo " && ";
                echo $this->getAttribute($context["product"], "quantity", array());
                echo " !== 0) {
          \t\t\tpQ";
                // line 181
                echo $this->getAttribute($context["product"], "product_id", array());
                echo " = pQ";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo " - 1
          \t\t\t\$('#ProductQuantity";
                // line 182
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "').val(pQ";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo ")
          \t\t}
          }
         
          const CHANGE";
                // line 186
                echo $this->getAttribute($context["product"], "product_id", array());
                echo " = () => {
          \t\treturn document.getElementById(\"ProductQuantity";
                // line 187
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "\").value
          }
          
\t\t</script>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 191
            echo " </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 193
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 194
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</div>
      </div>
      ";
        }
        // line 197
        echo "      ";
        if (( !(isset($context["categories"]) ? $context["categories"] : null) &&  !(isset($context["products"]) ? $context["products"] : null))) {
            // line 198
            echo "      <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 200
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"btn btn-primary\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a></div>
      </div>
      ";
        }
        // line 203
        echo "      ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 204
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 206
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "__string_template__b76555ab144fcff97c8caecf33ec8d3b90650d031044a86d1d80c90a092521ce";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  532 => 206,  527 => 204,  522 => 203,  514 => 200,  508 => 198,  505 => 197,  499 => 194,  495 => 193,  491 => 191,  480 => 187,  476 => 186,  467 => 182,  461 => 181,  453 => 180,  449 => 179,  440 => 175,  434 => 174,  426 => 173,  422 => 172,  416 => 171,  409 => 166,  407 => 165,  399 => 163,  388 => 157,  381 => 155,  372 => 151,  362 => 145,  350 => 143,  343 => 142,  337 => 141,  334 => 140,  332 => 139,  329 => 138,  323 => 135,  311 => 132,  307 => 130,  303 => 129,  294 => 122,  288 => 121,  278 => 116,  273 => 113,  263 => 108,  258 => 105,  255 => 104,  251 => 103,  243 => 98,  233 => 90,  227 => 89,  217 => 84,  212 => 81,  202 => 76,  197 => 73,  194 => 72,  190 => 71,  182 => 66,  173 => 62,  166 => 58,  162 => 57,  157 => 54,  154 => 53,  151 => 52,  146 => 49,  138 => 47,  127 => 45,  123 => 44,  119 => 42,  114 => 41,  108 => 37,  97 => 35,  93 => 34,  88 => 31,  86 => 30,  83 => 29,  81 => 28,  78 => 27,  74 => 17,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  47 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="product-category" class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <h2 class="category_h2">{{ heading_title }}</h2>*/
/*    {#   {% if thumb or description %}*/
/*       <div class="row"> {% if thumb %}*/
/*         <div class="col-sm-2"><img src="{{ thumb }}" alt="{{ heading_title }}" title="{{ heading_title }}" class="img-thumbnail" /></div>*/
/*         {% endif %}*/
/*         {% if description %}*/
/*         <div class="col-sm-10">{{ description }}</div>*/
/*         {% endif %}</div>*/
/*      */
/*       {% endif %}#}*/
/*        <hr>*/
/*       {% if categories %}*/
/*  */
/*       {% if categories|length <= 5 %}*/
/*       <div class="row">*/
/*         <div class="col-sm-3">*/
/*           <ul class="category_ul">*/
/*             {% for category in categories %}*/
/*             <li class="category_li"><a class="category_a" href="{{ category.href }}">{{ category.name }}</a></li>*/
/*             {% endfor %}*/
/*           </ul>*/
/*         </div>*/
/*       </div>*/
/*       {% else %}*/
/*       <div class="row">{% for category in categories|batch((categories|length / 4)|round(1, 'ceil')) %}*/
/*         <div class="col-sm-3">*/
/*           <ul class="category_ul">*/
/*             {% for child in category %}*/
/*             <li class="category_li"><a class="category_a" href="{{ child.href }}">{{ child.name }}</a></li>*/
/*             {% endfor %}*/
/*           </ul>*/
/*         </div>*/
/*         {% endfor %}</div>*/
/*       <br />*/
/*       {% endif %}*/
/*       {% endif %}*/
/*       {% if products %}*/
/*       <div class="row">*/
/*         <div class="col-md-2 col-sm-6 hidden-xs">*/
/*           <div class="btn-group btn-group-sm">*/
/*             <button type="button" id="list-view" class="btn btn-default" data-toggle="tooltip" title="{{ button_list }}"><i class="fa fa-th-list"></i></button>*/
/*             <button type="button" id="grid-view" class="btn btn-default" data-toggle="tooltip" title="{{ button_grid }}"><i class="fa fa-th"></i></button>*/
/*           </div>*/
/*         </div>*/
/*         <div class="col-md-3 col-sm-6">*/
/*           <div class="form-group hidden"><a href="{{ compare }}" id="compare-total" class="btn btn-link">{{ text_compare }}</a></div>*/
/*         </div>*/
/*         <div class="col-md-4 col-xs-6">*/
/*           <div class="form-group input-group input-group-sm">*/
/*             <label class="input-group-addon" for="input-sort">{{ text_sort }}</label>*/
/*             <select id="input-sort" class="form-control" onchange="location = this.value;">*/
/*               */
/*               */
/*               */
/*               {% for sorts in sorts %}*/
/*               {% if sorts.value == '%s-%s'|format(sort, order) %}*/
/*               */
/*               */
/*               */
/*               <option value="{{ sorts.href }}" selected="selected">{{ sorts.text }}</option>*/
/*               */
/*               */
/*               */
/*               {% else %}*/
/*               */
/*               */
/*               */
/*               <option value="{{ sorts.href }}">{{ sorts.text }}</option>*/
/*               */
/*               */
/*               */
/*               {% endif %}*/
/*               {% endfor %}*/
/*             */
/*             */
/*             */
/*             </select>*/
/*           </div>*/
/*         </div>*/
/*         <div class="col-md-3 col-xs-6">*/
/*           <div class="form-group input-group input-group-sm">*/
/*             <label class="input-group-addon" for="input-limit">{{ text_limit }}</label>*/
/*             <select id="input-limit" class="form-control" onchange="location = this.value;">*/
/*               */
/*               */
/*               */
/*               {% for limits in limits %}*/
/*               {% if limits.value == limit %}*/
/*               */
/*               */
/*               */
/*               <option value="{{ limits.href }}" selected="selected">{{ limits.text }}</option>*/
/*               */
/*               */
/*               */
/*               {% else %}*/
/*               */
/*               */
/*               */
/*               <option value="{{ limits.href }}">{{ limits.text }}</option>*/
/*               */
/*               */
/*               */
/*               {% endif %}*/
/*               {% endfor %}*/
/*             */
/*             */
/*             */
/*             </select>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <div class="row"> {% for product in products %}*/
/*         <div style="padding-right: 5px; padding-left: 5px"class="product-layout product-grid col-lg-4 col-md-4 .col-sm-4 col-xs-6">*/
/*           <div class="product-thumb">*/
/*             <div class="image"><a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" /></a></div>*/
/*             <div>*/
/*               <div class="caption">*/
/*                 <h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*               {#   <div class="rating"> {% for i in 1..5 %}*/
/*                   {% if product.rating < i %} <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> {% else %} <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>{% endif %}*/
/*                   {% endfor %} </div>   #}       */
/*                 {% if product.price %}*/
/*                 <p class="price"> {% if not product.special %}*/
/*                   {{ product.price }}*/
/*                   {% else %} <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span> {% endif %}*/
/*                   {% if product.tax %} <span class="price-tax">{{ text_tax }} {{ product.tax }}</span> {% endif %} </p>*/
/*                 {% endif %}*/
/*                 <p> Наличие:  {{ product.quantity == 0 ? 'Ожидаеться поставка' : 'Есть' }}</p>*/
/*               */
/*               */
/*                </div>*/
/*                 <div class="input-group btn-block" style="margin-bottom:1px;">*/
/*                                 <span class="input-group-btn">*/
/*                                     <button class="btn btn-primary" id="ProductQuantityminus{{product.product_id}}" onclick="MINUS{{ product.product_id }}()">*/
/*                                         <i class="fa fa-minus"></i>*/
/*                                     </button>*/
/*                                 </span>*/
/*                                 <input class="form-control" id="ProductQuantity{{product.product_id}}"  value="{{ product.quantity == 0 ? 0 : product.minimum }}" size="1" style="text-align: center;  font-size: 20px;">*/
/*                                 <span class="input-group-btn">*/
/*                                     <button class="btn btn-primary" id="ProductQuantityplus{{product.product_id}}" onclick="PlUS{{ product.product_id }}()">*/
/*                                         <i class="fa fa-plus"></i>*/
/*                                     </button>*/
/*                                     </span>*/
/*                             </div>*/
/*               <div class="button-group">*/
/*                 <button type="button" onclick="cart.add('{{ product.product_id }}', '{{ product.minimum }}');"> <small  style="font-size: 70%">{{ button_cart }}</small></button>*/
/*               {#  <button type="button" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><small style="font-size: 70%">закладка</small></button>#}*/
/*                {# <button type="button" data-toggle="tooltip" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-exchange"></i></button>#}*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         <script>*/
/* 		var pQ{{ product.product_id }} = {{ product.minimum }}  */
/*         const PlUS{{ product.product_id }} = () => {*/
/*           		if (pQ{{ product.product_id }} < {{product.quantity}} && {{product.quantity}} !== 0) {*/
/*           			pQ{{ product.product_id }} = pQ{{ product.product_id }} + 1*/
/*            			$('#ProductQuantity{{product.product_id}}').val(pQ{{ product.product_id }})*/
/*         		}       */
/*           }*/
/*           */
/*          const MINUS{{ product.product_id }} = () => {*/
/*            		if (pQ{{ product.product_id }} > {{ product.minimum }} && {{product.quantity}} !== 0) {*/
/*           			pQ{{ product.product_id }} = pQ{{ product.product_id }} - 1*/
/*           			$('#ProductQuantity{{product.product_id}}').val(pQ{{ product.product_id }})*/
/*           		}*/
/*           }*/
/*          */
/*           const CHANGE{{ product.product_id }} = () => {*/
/*           		return document.getElementById("ProductQuantity{{product.product_id}}").value*/
/*           }*/
/*           */
/* 		</script>*/
/*         {% endfor %} </div>*/
/*       <div class="row">*/
/*         <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*         <div class="col-sm-6 text-right">{{ results }}</div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if not categories and not products %}*/
/*       <p>{{ text_empty }}</p>*/
/*       <div class="buttons">*/
/*         <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }} */
/* */
