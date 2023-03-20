<?php

/* __string_template__483efe42fd0f5abf48980bc8cca430ae31e0b6d127562cea470a57082e780533 */
class __TwigTemplate_2923fe3acb36f21eebae19c13b836a20419be2b78d7a5f4b248340896f697202 extends Twig_Template
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
<div id=\"common-home\" class=\"container\">
  <div class=\"row\">";
        // line 3
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 4
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 5
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 6
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 7
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 8
            echo "    ";
        } else {
            // line 9
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 10
            echo "    ";
        }
        // line 11
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
       <div class=\"row\">
         <h1 class=\"text-uppercase\" style=\"font-size:6rem;padding-left:10px;color:#FF6900\">КАТАЛОГ</h1>    \t
        \t<div class=\"row\" style=\"padding:10px;\"> 
              \t<div class=\"col-sm-4 col-xs-6\" style=\"padding:10px;\">
                  <a href=\"https://tds26.ru/kraski\">
                  \t<div class=\"hover-image-scale\" style=\"border-radius: 15px; height: 300px;background: #000;position:relative;\">
                      \t<div class=\"tekst_sverhu_kartinki hidden-sm hidden-xs\">КРАСКИ</div>
                      <div class=\"tekst_sverhu_kartinki visible-sm visible-xs\" style=\"font-size: 15px;\">КРАСКИ</div>
                \t\t<img src=\"https://tds26.ru/image/catalog/kategorii/612.png\" alt=\"\" class=\"hover-image-scale\" style=\"opacity: 0.6;\">
              \t\t<div class=\"tekst_snizu_kartinki\">Больше товаров</div>
                    </div>
                  </a>
                  </div>                
              \t<div class=\"col-sm-4 col-xs-6\" style=\"padding: 10px;\">
                  <a href=\"https://tds26.ru/instrument\">\t
                  <div class=\"hover-image-scale\" style=\"border-radius: 15px; height: 300px;background: #000;\">
                \t  <div class=\"tekst_sverhu_kartinki hidden-sm hidden-xs\">ИНСТРУМЕНТЫ</div>
                      <div class=\"tekst_sverhu_kartinki visible-sm visible-xs\" style=\"font-size: 15px;\">ИНСТРУМЕНТЫ</div>
                      <img src=\"https://tds26.ru/image/catalog/kategorii/622.png\" alt=\"\" class=\"hover-image-scale\" style=\"opacity: 0.6;\">
              \t\t<div class=\"tekst_snizu_kartinki\">Больше товаров</div>
                    </div>
                    </a>
                  </div>                
              \t<div class=\"col-sm-4 col-xs-6\" style=\"padding: 10px;\">
                  <a href=\"https://tds26.ru/krepezh\">
                  \t<div class=\"hover-image-scale\" style=\"border-radius: 15px; height: 300px;background: #000;\">
                      <div class=\"tekst_sverhu_kartinki hidden-sm hidden-xs\">КРЕПЁЖ</div>
                      <div class=\"tekst_sverhu_kartinki visible-sm visible-xs\" style=\"font-size: 15px;\">КРЕПЁЖ</div>
                      <img src=\"https://tds26.ru/image/catalog/kategorii/632.png\" alt=\"\" class=\"hover-image-scale\" style=\"opacity: 0.6;\">
              \t\t<div class=\"tekst_snizu_kartinki\">Больше товаров</div>
                    </div>
                    </a>
                  </div>         
              \t<div class=\"col-sm-4 col-xs-6\" style=\"padding: 10px;\">
                  <a href=\"https://tds26.ru/elektrotovary\">
                  \t<div class=\"hover-image-scale\" style=\"border-radius: 15px;height: 300px;background: #000;\">
                \t\t  \t<div class=\"tekst_sverhu_kartinki hidden-sm hidden-xs\">ЭЛЕКТРОТОВАРЫ</div>
                      \t\t<div class=\"tekst_sverhu_kartinki visible-sm visible-xs\" style=\"font-size: 10px;\">ЭЛЕКТРОИНСТРУМЕНЫ</div>
                      <img src=\"https://tds26.ru/image/catalog/kategorii/642.png\" alt=\"\" class=\"hover-image-scale\" style=\"opacity: 0.6;\">
              \t\t\t<div class=\"tekst_snizu_kartinki\">Больше товаров</div>
                    </div>
                    </a>
                  </div>                
              \t<div class=\"col-sm-4 col-xs-6\" style=\"padding: 10px;\">
                   <a href=\"https://tds26.ru/dveri\">
                  \t<div class=\"hover-image-scale\" style=\"border-radius: 15px;height: 300px;background: #000;\">
                \t\t  \t<div class=\"tekst_sverhu_kartinki hidden-sm hidden-xs\">ДВЕРИ</div>
                      \t\t<div class=\"tekst_sverhu_kartinki visible-sm visible-xs\" style=\"font-size:15px;\">ДВЕРИ</div>
                      <img src=\"https://tds26.ru/image/catalog/kategorii/652.png\" alt=\"\" class=\"hover-image-scale\" style=\"opacity: 0.6;\">
              \t\t<div class=\"tekst_snizu_kartinki\">Больше товаров</div>
                     </div>
                      </a>
                  </div>                
              \t<div class=\"col-sm-4 col-xs-6\" style=\"padding: 10px;\">
                  <a href=\"https://tds26.ru/plitka\">
                  \t<div class=\"hover-image-scale\" style=\"border-radius: 15px;height: 300px;background: #000;\">
                \t\t  \t<div class=\"tekst_sverhu_kartinki hidden-sm hidden-xs\">ДЛЯ ПЛИТКИ</div>
                      \t\t<div class=\"tekst_sverhu_kartinki visible-sm visible-xs\" style=\"font-size: 15px;\">ДЛЯ ПЛИТКИ</div>
                      <img src=\"https://tds26.ru/image/catalog/kategorii/662.png\" alt=\"\" class=\"hover-image-scale\" style=\"opacity: 0.6;\">
              \t\t<div class=\"tekst_snizu_kartinki\">Больше товаров</div>
                    </div>
                     </a>
                  </div>
         \t</div>        
      \t</div>
      ";
        // line 77
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 78
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
<script>
let windowInnerWidth = window.innerWidth  
const img1 = document.getElementById('small-rotate1'); 
const img2 = document.getElementById('small-rotate2'); 
const img3 = document.getElementById('small-rotate3');
const img4 = document.getElementById('small-rotate4');
const htitle = document.getElementById('htitle'); 
const rowHome = document.getElementById('rowHome');
if ( windowInnerWidth < 768 && windowInnerWidth >= 550) {
            htitle.style.fontSize = '5rem';
            htitle.style.lineHeight = '5rem';
  \t\t\thtitle.style.top = '40%';
            img3.style.width = '189px';  
            img4.style.right = '-13px';
   \t\t\timg4.style.width = '125px';
            img4.style.top = '27px';  
            img1.style.width = '240px';
            img1.style.top = '150px';  
            img2.style.width = '152px';
            img2.style.top = '210px';
            img2.style.left = '15px';  
 } else if (  windowInnerWidth >= 992 &&  windowInnerWidth < 1200 ) {
  \t\t\thtitle.style.fontSize = '7rem';
  \t\t\thtitle.style.lineHeight = '7rem';
  \t\t\thtitle.style.width = '60%';
  \t\t\thtitle.style.top = '30%';
  \t\t\thtitle.style.left = '20%';
   \t\t\timg4.style.width = '180px';
 } else if (  windowInnerWidth >= 768 &&  windowInnerWidth < 992 ) {
  \t\t\trowHome.style.height = '400px';\t\t\t
  \t\t\thtitle.style.fontSize = '6rem';
  \t\t\thtitle.style.lineHeight = '6rem';
  \t\t\thtitle.style.width = '60%';
  \t\t\thtitle.style.top = '35%';
  \t\t\thtitle.style.left = '20%';
  \t\t\timg1.style.top = '128px'; 
 \t\t\timg2.style.width = '146px';
  \t\t\timg2.style.top = '176px';
  \t\t\timg2.style.left = '15px';
  \t\t\timg3.style.right = '-29px';  \t\t\t
  \t\t\timg4.style.width = '124px';
 \t\t\timg4.style.right = '3px';
             img4.style.top = '89px';
 } else if ( windowInnerWidth < 549) {
  \t\t\trowHome.style.height = '400px';\t
  \t\t\thtitle.style.fontSize = '4rem';
  \t\t\thtitle.style.lineHeight = '4rem';
  \t\t\thtitle.style.top = '30%'; \t\t
  \t\t\timg3.style.width = '128px';
  \t\t\timg3.style.top = '10px';  
  \t\t\timg4.style.width = '120px';
  \t\t\timg4.style.right = '-10px';
  \t\t\timg4.style.top = '20px';  
  \t\t\timg1.style.width = '141px';
  \t\t\timg1.style.top = '200px'; 
  \t\t\timg2.style.width = '137px';
  \t\t\timg2.style.top = '220px';
  \t\t\timg2.style.left = '-1px';
  } else if (  windowInnerWidth >= 1200 ) {
  \t\t\timg1.style.height = '537px';
  \t\t\timg1.style.top = '20px'; 
  \t\t\timg3.style.height = '565px';
  \t\t\timg3.style.top = '-10px'; 
  }
</script>  
";
        // line 145
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "__string_template__483efe42fd0f5abf48980bc8cca430ae31e0b6d127562cea470a57082e780533";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 145,  124 => 78,  120 => 77,  48 => 11,  45 => 10,  42 => 9,  39 => 8,  36 => 7,  33 => 6,  30 => 5,  28 => 4,  24 => 3,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="common-home" class="container">*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*        <div class="row">*/
/*          <h1 class="text-uppercase" style="font-size:6rem;padding-left:10px;color:#FF6900">КАТАЛОГ</h1>    	*/
/*         	<div class="row" style="padding:10px;"> */
/*               	<div class="col-sm-4 col-xs-6" style="padding:10px;">*/
/*                   <a href="https://tds26.ru/kraski">*/
/*                   	<div class="hover-image-scale" style="border-radius: 15px; height: 300px;background: #000;position:relative;">*/
/*                       	<div class="tekst_sverhu_kartinki hidden-sm hidden-xs">КРАСКИ</div>*/
/*                       <div class="tekst_sverhu_kartinki visible-sm visible-xs" style="font-size: 15px;">КРАСКИ</div>*/
/*                 		<img src="https://tds26.ru/image/catalog/kategorii/612.png" alt="" class="hover-image-scale" style="opacity: 0.6;">*/
/*               		<div class="tekst_snizu_kartinki">Больше товаров</div>*/
/*                     </div>*/
/*                   </a>*/
/*                   </div>                */
/*               	<div class="col-sm-4 col-xs-6" style="padding: 10px;">*/
/*                   <a href="https://tds26.ru/instrument">	*/
/*                   <div class="hover-image-scale" style="border-radius: 15px; height: 300px;background: #000;">*/
/*                 	  <div class="tekst_sverhu_kartinki hidden-sm hidden-xs">ИНСТРУМЕНТЫ</div>*/
/*                       <div class="tekst_sverhu_kartinki visible-sm visible-xs" style="font-size: 15px;">ИНСТРУМЕНТЫ</div>*/
/*                       <img src="https://tds26.ru/image/catalog/kategorii/622.png" alt="" class="hover-image-scale" style="opacity: 0.6;">*/
/*               		<div class="tekst_snizu_kartinki">Больше товаров</div>*/
/*                     </div>*/
/*                     </a>*/
/*                   </div>                */
/*               	<div class="col-sm-4 col-xs-6" style="padding: 10px;">*/
/*                   <a href="https://tds26.ru/krepezh">*/
/*                   	<div class="hover-image-scale" style="border-radius: 15px; height: 300px;background: #000;">*/
/*                       <div class="tekst_sverhu_kartinki hidden-sm hidden-xs">КРЕПЁЖ</div>*/
/*                       <div class="tekst_sverhu_kartinki visible-sm visible-xs" style="font-size: 15px;">КРЕПЁЖ</div>*/
/*                       <img src="https://tds26.ru/image/catalog/kategorii/632.png" alt="" class="hover-image-scale" style="opacity: 0.6;">*/
/*               		<div class="tekst_snizu_kartinki">Больше товаров</div>*/
/*                     </div>*/
/*                     </a>*/
/*                   </div>         */
/*               	<div class="col-sm-4 col-xs-6" style="padding: 10px;">*/
/*                   <a href="https://tds26.ru/elektrotovary">*/
/*                   	<div class="hover-image-scale" style="border-radius: 15px;height: 300px;background: #000;">*/
/*                 		  	<div class="tekst_sverhu_kartinki hidden-sm hidden-xs">ЭЛЕКТРОТОВАРЫ</div>*/
/*                       		<div class="tekst_sverhu_kartinki visible-sm visible-xs" style="font-size: 10px;">ЭЛЕКТРОИНСТРУМЕНЫ</div>*/
/*                       <img src="https://tds26.ru/image/catalog/kategorii/642.png" alt="" class="hover-image-scale" style="opacity: 0.6;">*/
/*               			<div class="tekst_snizu_kartinki">Больше товаров</div>*/
/*                     </div>*/
/*                     </a>*/
/*                   </div>                */
/*               	<div class="col-sm-4 col-xs-6" style="padding: 10px;">*/
/*                    <a href="https://tds26.ru/dveri">*/
/*                   	<div class="hover-image-scale" style="border-radius: 15px;height: 300px;background: #000;">*/
/*                 		  	<div class="tekst_sverhu_kartinki hidden-sm hidden-xs">ДВЕРИ</div>*/
/*                       		<div class="tekst_sverhu_kartinki visible-sm visible-xs" style="font-size:15px;">ДВЕРИ</div>*/
/*                       <img src="https://tds26.ru/image/catalog/kategorii/652.png" alt="" class="hover-image-scale" style="opacity: 0.6;">*/
/*               		<div class="tekst_snizu_kartinki">Больше товаров</div>*/
/*                      </div>*/
/*                       </a>*/
/*                   </div>                */
/*               	<div class="col-sm-4 col-xs-6" style="padding: 10px;">*/
/*                   <a href="https://tds26.ru/plitka">*/
/*                   	<div class="hover-image-scale" style="border-radius: 15px;height: 300px;background: #000;">*/
/*                 		  	<div class="tekst_sverhu_kartinki hidden-sm hidden-xs">ДЛЯ ПЛИТКИ</div>*/
/*                       		<div class="tekst_sverhu_kartinki visible-sm visible-xs" style="font-size: 15px;">ДЛЯ ПЛИТКИ</div>*/
/*                       <img src="https://tds26.ru/image/catalog/kategorii/662.png" alt="" class="hover-image-scale" style="opacity: 0.6;">*/
/*               		<div class="tekst_snizu_kartinki">Больше товаров</div>*/
/*                     </div>*/
/*                      </a>*/
/*                   </div>*/
/*          	</div>        */
/*       	</div>*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* <script>*/
/* let windowInnerWidth = window.innerWidth  */
/* const img1 = document.getElementById('small-rotate1'); */
/* const img2 = document.getElementById('small-rotate2'); */
/* const img3 = document.getElementById('small-rotate3');*/
/* const img4 = document.getElementById('small-rotate4');*/
/* const htitle = document.getElementById('htitle'); */
/* const rowHome = document.getElementById('rowHome');*/
/* if ( windowInnerWidth < 768 && windowInnerWidth >= 550) {*/
/*             htitle.style.fontSize = '5rem';*/
/*             htitle.style.lineHeight = '5rem';*/
/*   			htitle.style.top = '40%';*/
/*             img3.style.width = '189px';  */
/*             img4.style.right = '-13px';*/
/*    			img4.style.width = '125px';*/
/*             img4.style.top = '27px';  */
/*             img1.style.width = '240px';*/
/*             img1.style.top = '150px';  */
/*             img2.style.width = '152px';*/
/*             img2.style.top = '210px';*/
/*             img2.style.left = '15px';  */
/*  } else if (  windowInnerWidth >= 992 &&  windowInnerWidth < 1200 ) {*/
/*   			htitle.style.fontSize = '7rem';*/
/*   			htitle.style.lineHeight = '7rem';*/
/*   			htitle.style.width = '60%';*/
/*   			htitle.style.top = '30%';*/
/*   			htitle.style.left = '20%';*/
/*    			img4.style.width = '180px';*/
/*  } else if (  windowInnerWidth >= 768 &&  windowInnerWidth < 992 ) {*/
/*   			rowHome.style.height = '400px';			*/
/*   			htitle.style.fontSize = '6rem';*/
/*   			htitle.style.lineHeight = '6rem';*/
/*   			htitle.style.width = '60%';*/
/*   			htitle.style.top = '35%';*/
/*   			htitle.style.left = '20%';*/
/*   			img1.style.top = '128px'; */
/*  			img2.style.width = '146px';*/
/*   			img2.style.top = '176px';*/
/*   			img2.style.left = '15px';*/
/*   			img3.style.right = '-29px';  			*/
/*   			img4.style.width = '124px';*/
/*  			img4.style.right = '3px';*/
/*              img4.style.top = '89px';*/
/*  } else if ( windowInnerWidth < 549) {*/
/*   			rowHome.style.height = '400px';	*/
/*   			htitle.style.fontSize = '4rem';*/
/*   			htitle.style.lineHeight = '4rem';*/
/*   			htitle.style.top = '30%'; 		*/
/*   			img3.style.width = '128px';*/
/*   			img3.style.top = '10px';  */
/*   			img4.style.width = '120px';*/
/*   			img4.style.right = '-10px';*/
/*   			img4.style.top = '20px';  */
/*   			img1.style.width = '141px';*/
/*   			img1.style.top = '200px'; */
/*   			img2.style.width = '137px';*/
/*   			img2.style.top = '220px';*/
/*   			img2.style.left = '-1px';*/
/*   } else if (  windowInnerWidth >= 1200 ) {*/
/*   			img1.style.height = '537px';*/
/*   			img1.style.top = '20px'; */
/*   			img3.style.height = '565px';*/
/*   			img3.style.top = '-10px'; */
/*   }*/
/* </script>  */
/* {{ footer }}*/
