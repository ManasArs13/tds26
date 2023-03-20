<?php

/* __string_template__f246da5984d905838f8e87140c4e53fad7e6413d333a69b37fc661213312e3b8 */
class __TwigTemplate_8fec381c14c003a141a6138ed30ecbb3570797fb56b7a3dc8522aee4731aa892 extends Twig_Template
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
<div class=\"container-fluid\" style=\"background-color: #9AD675; margin-bottom:50px;\"> 
  <div class=\"row\" style=\"width: 100%; height: 500px;\" id=\"rowHome\">
    <div class=\"col-sm-3\">
    \t<img src=\"https://tds26.ru/image/catalog/baneri/4.png\" class=\"img-responsive small-rotate1\" id=\"small-rotate1\" alt=\"image\" 
         \tstyle=\"position: absolute;z-index:300;width: 372px;left: 0; top:106px;\">
      \t<img src=\"https://tds26.ru/image/catalog/baneri/15.png\" class=\"img-responsive small-rotate2\" id=\"small-rotate2\" alt=\"image\" 
         \tstyle=\"position: absolute;z-index: 301;top: 194px;left: -1px;width: 281px;\">
    </div>
      <h1 id=\"htitle\"
          class=\"text-uppercase\" style=\"font-size: 10rem;line-height: 10rem;text-align: center;color: #378245;position: absolute;width: 70%; left: 15%;top: 35%;z-index: 350\">с нами ремонт может быть легче</h1>
    <div class=\"col-sm-3 col-sm-offset-6\" style=\"padding-left:30px\">
    \t<img src=\"https://tds26.ru/image/catalog/baneri/38.png\" class=\"img-responsive small-rotate3\" id=\"small-rotate3\" alt=\"image\" 
         \tstyle=\"position: absolute;z-index: 300;right:-29px;width:288px;top:51px;\">
      \t<img src=\"https://tds26.ru/image/catalog/baneri/14.png\" class=\"img-responsive small-rotate4\" id=\"small-rotate4\" alt=\"image\" 
         \tstyle=\"position: absolute;z-index: 301;width: 219px;right:16px;top: 115px;\">
    </div>   
  </div> 
</div>  
<div id=\"common-home\" class=\"container\">
  <div class=\"row\">";
        // line 21
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 22
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 23
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 24
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 25
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 26
            echo "    ";
        } else {
            // line 27
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 28
            echo "    ";
        }
        // line 29
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
        // line 95
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 96
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
        // line 163
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "__string_template__f246da5984d905838f8e87140c4e53fad7e6413d333a69b37fc661213312e3b8";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 163,  142 => 96,  138 => 95,  66 => 29,  63 => 28,  60 => 27,  57 => 26,  54 => 25,  51 => 24,  48 => 23,  46 => 22,  42 => 21,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="container-fluid" style="background-color: #9AD675; margin-bottom:50px;"> */
/*   <div class="row" style="width: 100%; height: 500px;" id="rowHome">*/
/*     <div class="col-sm-3">*/
/*     	<img src="https://tds26.ru/image/catalog/baneri/4.png" class="img-responsive small-rotate1" id="small-rotate1" alt="image" */
/*          	style="position: absolute;z-index:300;width: 372px;left: 0; top:106px;">*/
/*       	<img src="https://tds26.ru/image/catalog/baneri/15.png" class="img-responsive small-rotate2" id="small-rotate2" alt="image" */
/*          	style="position: absolute;z-index: 301;top: 194px;left: -1px;width: 281px;">*/
/*     </div>*/
/*       <h1 id="htitle"*/
/*           class="text-uppercase" style="font-size: 10rem;line-height: 10rem;text-align: center;color: #378245;position: absolute;width: 70%; left: 15%;top: 35%;z-index: 350">с нами ремонт может быть легче</h1>*/
/*     <div class="col-sm-3 col-sm-offset-6" style="padding-left:30px">*/
/*     	<img src="https://tds26.ru/image/catalog/baneri/38.png" class="img-responsive small-rotate3" id="small-rotate3" alt="image" */
/*          	style="position: absolute;z-index: 300;right:-29px;width:288px;top:51px;">*/
/*       	<img src="https://tds26.ru/image/catalog/baneri/14.png" class="img-responsive small-rotate4" id="small-rotate4" alt="image" */
/*          	style="position: absolute;z-index: 301;width: 219px;right:16px;top: 115px;">*/
/*     </div>   */
/*   </div> */
/* </div>  */
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
