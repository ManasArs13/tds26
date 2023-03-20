<?php

/* __string_template__23039867b46c9e2a2d27cce4497c48da8d81f7b13973ea9ff8c49c704d9db7ae */
class __TwigTemplate_eb3ed64978cfcfcd125a73e4752edd9765333995234cf54102fba5f92a31924e extends Twig_Template
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
        echo "<h1 style=\"font-size:6rem;padding-left:10px;color:#FF6900;margin-top:50px;\">";
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
<div class=\"row\">
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 4
            echo "     <div style=\"padding-right: 5px; padding-left: 5px\" class=\"product-layout col-lg-3 col-md-3 col-sm-6 col-xs-6\">
    <div class=\"product-thumb transition\">
      <div class=\"image\"><a href=\"";
            // line 6
            echo $this->getAttribute($context["product"], "href", array());
            echo "\"><img src=\"";
            echo $this->getAttribute($context["product"], "thumb", array());
            echo "\" alt=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" title=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" class=\"img-responsive\" /></a></div>
      <div class=\"caption\">
        <h4><a href=\"";
            // line 8
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></h4>
 
        ";
            // line 10
            if ($this->getAttribute($context["product"], "rating", array())) {
                // line 11
                echo "        <div class=\"rating\">";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 12
                    echo "          ";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                    } else {
                        echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                    }
                    // line 13
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</div>
        ";
            }
            // line 15
            echo "        ";
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 16
                echo "        <p class=\"price\"> ";
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    // line 17
                    echo "          ";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "
          ";
                } else {
                    // line 18
                    echo " <span class=\"price-new\">";
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</span> <span class=\"price-old\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span> ";
                }
                // line 19
                echo "          ";
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
            // line 21
            echo "      <p> Наличие:  ";
            echo ((($this->getAttribute($context["product"], "quantity", array()) == 0)) ? ("Ожидаеться поставка") : ("Есть"));
            echo "</p>
      </div>
        
         <div class=\"input-group btn-block\" style=\"margin-bottom:1px;\">
                                <span class=\"input-group-btn\">
                                    <button class=\"btn btn-primary\" id=\"ProductQuantityminus";
            // line 26
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "\" onclick=\"MINUS";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "()\">
                                        <i class=\"fa fa-minus\"></i>
                                    </button>
                                </span>
                                <input class=\"form-control\" id=\"ProductQuantity";
            // line 30
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "\"  value=\"";
            echo ((($this->getAttribute($context["product"], "quantity", array()) == 0)) ? (0) : ($this->getAttribute($context["product"], "minimum", array())));
            echo "\" size=\"1\" style=\"text-align: center;  font-size: 20px;\">
                                <span class=\"input-group-btn\">
                                    <button class=\"btn btn-primary\" id=\"ProductQuantityplus";
            // line 32
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "\" onclick=\"PlUS";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "()\">
                                        <i class=\"fa fa-plus\"></i>
                                    </button>
                                    </span>
                            </div>
        
        
    \t\t<div class=\"button-group\">
                <button type=\"button\" onclick=\"cart.add('";
            // line 40
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "', '";
            echo $this->getAttribute($context["product"], "minimum", array());
            echo "');\"> <small  style=\"font-size: 70%\">";
            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
            echo "</small></button>
                ";
            // line 42
            echo "               ";
            // line 43
            echo "              </div>
      
      
      <script>
\t\tvar pQ";
            // line 47
            echo $this->getAttribute($context["product"], "product_id", array());
            echo " = ";
            echo $this->getAttribute($context["product"], "minimum", array());
            echo "  
        const PlUS";
            // line 48
            echo $this->getAttribute($context["product"], "product_id", array());
            echo " = () => {
          \t\tif (pQ";
            // line 49
            echo $this->getAttribute($context["product"], "product_id", array());
            echo " < ";
            echo $this->getAttribute($context["product"], "quantity", array());
            echo " && ";
            echo $this->getAttribute($context["product"], "quantity", array());
            echo " !== 0) {
          \t\t\tpQ";
            // line 50
            echo $this->getAttribute($context["product"], "product_id", array());
            echo " = pQ";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo " + 1
           \t\t\t\$('#ProductQuantity";
            // line 51
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "').val(pQ";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo ")
        \t\t}       
          }
          
         const MINUS";
            // line 55
            echo $this->getAttribute($context["product"], "product_id", array());
            echo " = () => {
           \t\tif (pQ";
            // line 56
            echo $this->getAttribute($context["product"], "product_id", array());
            echo " > ";
            echo $this->getAttribute($context["product"], "minimum", array());
            echo " && ";
            echo $this->getAttribute($context["product"], "quantity", array());
            echo " !== 0) {
          \t\t\tpQ";
            // line 57
            echo $this->getAttribute($context["product"], "product_id", array());
            echo " = pQ";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo " - 1
          \t\t\t\$('#ProductQuantity";
            // line 58
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "').val(pQ";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo ")
          \t\t}
          }
         
          const CHANGE";
            // line 62
            echo $this->getAttribute($context["product"], "product_id", array());
            echo " = () => {
          \t\treturn document.getElementById(\"ProductQuantity";
            // line 63
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "\").value
          }
          
\t\t</script>
      
    </div>
  </div>

  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo " 
   </div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__23039867b46c9e2a2d27cce4497c48da8d81f7b13973ea9ff8c49c704d9db7ae";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 71,  223 => 63,  219 => 62,  210 => 58,  204 => 57,  196 => 56,  192 => 55,  183 => 51,  177 => 50,  169 => 49,  165 => 48,  159 => 47,  153 => 43,  151 => 42,  143 => 40,  130 => 32,  123 => 30,  114 => 26,  105 => 21,  93 => 19,  86 => 18,  80 => 17,  77 => 16,  74 => 15,  65 => 13,  58 => 12,  53 => 11,  51 => 10,  44 => 8,  33 => 6,  29 => 4,  25 => 3,  19 => 1,);
    }
}
/* <h1 style="font-size:6rem;padding-left:10px;color:#FF6900;margin-top:50px;">{{ heading_title }}</h1>*/
/* <div class="row">*/
/* {% for product in products %}*/
/*      <div style="padding-right: 5px; padding-left: 5px" class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-6">*/
/*     <div class="product-thumb transition">*/
/*       <div class="image"><a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" /></a></div>*/
/*       <div class="caption">*/
/*         <h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*  */
/*         {% if product.rating %}*/
/*         <div class="rating">{% for i in 1..5 %}*/
/*           {% if product.rating < i %} <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> {% else %} <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> {% endif %}*/
/*           {% endfor %}</div>*/
/*         {% endif %}*/
/*         {% if product.price %}*/
/*         <p class="price"> {% if not product.special %}*/
/*           {{ product.price }}*/
/*           {% else %} <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span> {% endif %}*/
/*           {% if product.tax %} <span class="price-tax">{{ text_tax }} {{ product.tax }}</span> {% endif %} </p>*/
/*         {% endif %}*/
/*       <p> Наличие:  {{ product.quantity == 0 ? 'Ожидаеться поставка' : 'Есть' }}</p>*/
/*       </div>*/
/*         */
/*          <div class="input-group btn-block" style="margin-bottom:1px;">*/
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
/*         */
/*         */
/*     		<div class="button-group">*/
/*                 <button type="button" onclick="cart.add('{{ product.product_id }}', '{{ product.minimum }}');"> <small  style="font-size: 70%">{{ button_cart }}</small></button>*/
/*                 {#<button type="button" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><small style="font-size: 70%">закладка</small></button>#}*/
/*                {# <button type="button" data-toggle="tooltip" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-exchange"></i></button>#}*/
/*               </div>*/
/*       */
/*       */
/*       <script>*/
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
/*       */
/*     </div>*/
/*   </div>*/
/* */
/*   {% endfor %} */
/*    </div>*/
/* */
