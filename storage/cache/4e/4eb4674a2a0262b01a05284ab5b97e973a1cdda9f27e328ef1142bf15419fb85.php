<?php

/* __string_template__acb064fea9ad4b638f6da10a8ebf310d7730fdaaf1eba62a3d7da9468f60114f */
class __TwigTemplate_a14c2e991b26c581b4a2aaf5b07faf843a359b1807b8e54772c43872394341a8 extends Twig_Template
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
<div id=\"information-contact\" class=\"container\">
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
      <h1>";
        // line 17
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <h3>";
        // line 18
        echo (isset($context["text_location"]) ? $context["text_location"] : null);
        echo "</h3>
      <div class=\"panel panel-default\">
        <div class=\"panel-body\">
          <div class=\"row\">
            ";
        // line 22
        if ((isset($context["image"]) ? $context["image"] : null)) {
            // line 23
            echo "            <div class=\"col-sm-3\"><img src=\"";
            echo (isset($context["image"]) ? $context["image"] : null);
            echo "\" alt=\"";
            echo (isset($context["store"]) ? $context["store"] : null);
            echo "\" title=\"";
            echo (isset($context["store"]) ? $context["store"] : null);
            echo "\" class=\"img-thumbnail\" /></div>
            ";
        }
        // line 25
        echo "            <div class=\"col-sm-3\"><strong>";
        echo (isset($context["store"]) ? $context["store"] : null);
        echo "</strong><br />
              <address>
              ";
        // line 27
        echo (isset($context["address"]) ? $context["address"] : null);
        echo "
              </address>
              ";
        // line 29
        if ((isset($context["geocode"]) ? $context["geocode"] : null)) {
            // line 30
            echo "              <a href=\"https://maps.google.com/maps?q=";
            echo twig_urlencode_filter((isset($context["geocode"]) ? $context["geocode"] : null));
            echo "&hl=";
            echo (isset($context["geocode_hl"]) ? $context["geocode_hl"] : null);
            echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
            echo (isset($context["button_map"]) ? $context["button_map"] : null);
            echo "</a>
              ";
        }
        // line 32
        echo "            </div>
            <div class=\"col-sm-3\"><strong>";
        // line 33
        echo (isset($context["text_telephone"]) ? $context["text_telephone"] : null);
        echo "</strong><br>
              ";
        // line 34
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "<br />
              +7 (8652) 500-333<br />
              +7 (8652) 28-10-27<br />
                  <br />
              <br />
              ";
        // line 39
        if ((isset($context["fax"]) ? $context["fax"] : null)) {
            // line 40
            echo "              <strong>";
            echo (isset($context["text_fax"]) ? $context["text_fax"] : null);
            echo "</strong><br>
              ";
            // line 41
            echo (isset($context["fax"]) ? $context["fax"] : null);
            echo "
              ";
        }
        // line 43
        echo "            </div>
            <div class=\"col-sm-3\">
              ";
        // line 45
        if ((isset($context["open"]) ? $context["open"] : null)) {
            // line 46
            echo "              <strong>";
            echo (isset($context["text_open"]) ? $context["text_open"] : null);
            echo "</strong><br />
              ";
            // line 47
            echo (isset($context["open"]) ? $context["open"] : null);
            echo "<br />
              <br />
              ";
        }
        // line 50
        echo "              ";
        if ((isset($context["comment"]) ? $context["comment"] : null)) {
            // line 51
            echo "              <strong>";
            echo (isset($context["text_comment"]) ? $context["text_comment"] : null);
            echo "</strong><br />
              ";
            // line 52
            echo (isset($context["comment"]) ? $context["comment"] : null);
            echo "
              ";
        }
        // line 54
        echo "            </div>
          </div>
        </div>
      </div>
      <script type=\"text/javascript\" charset=\"utf-8\" async src=\"https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A17398aef8e773f1b738abc423dbd84bad7024f6e249c8742e3fb0d27bc0147dc&amp;width=500&amp;height=350&amp;lang=ru_RU&amp;scroll=true\"></script>
     <br><br>
      ";
        // line 60
        if ((isset($context["locations"]) ? $context["locations"] : null)) {
            // line 61
            echo "      <h3>";
            echo (isset($context["text_store"]) ? $context["text_store"] : null);
            echo "</h3>
      <div class=\"panel-group\" id=\"accordion\">
        ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["locations"]) ? $context["locations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 64
                echo "        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\"><a href=\"#collapse-location";
                // line 66
                echo $this->getAttribute($context["location"], "location_id", array());
                echo "\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\">";
                echo $this->getAttribute($context["location"], "name", array());
                echo " <i class=\"fa fa-caret-down\"></i></a></h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-location";
                // line 68
                echo $this->getAttribute($context["location"], "location_id", array());
                echo "\">
            <div class=\"panel-body\">
              <div class=\"row\">
                ";
                // line 71
                if ($this->getAttribute($context["location"], "image", array())) {
                    // line 72
                    echo "                <div class=\"col-sm-3\"><img src=\"";
                    echo $this->getAttribute($context["location"], "image", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["location"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["location"], "name", array());
                    echo "\" class=\"img-thumbnail\" /></div>
                ";
                }
                // line 74
                echo "                <div class=\"col-sm-3\"><strong>";
                echo $this->getAttribute($context["location"], "name", array());
                echo "</strong><br />
                  <address>
                  ";
                // line 76
                echo $this->getAttribute($context["location"], "address", array());
                echo "
                  </address>
                  ";
                // line 78
                if ($this->getAttribute($context["location"], "geocode", array())) {
                    // line 79
                    echo "                  <a href=\"https://maps.google.com/maps?q=";
                    echo twig_urlencode_filter($this->getAttribute($context["location"], "geocode", array()));
                    echo "&hl=";
                    echo (isset($context["geocode_hl"]) ? $context["geocode_hl"] : null);
                    echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
                    echo (isset($context["button_map"]) ? $context["button_map"] : null);
                    echo "</a>
                  ";
                }
                // line 81
                echo "                </div>
                <div class=\"col-sm-3\"> <strong>";
                // line 82
                echo (isset($context["text_telephone"]) ? $context["text_telephone"] : null);
                echo "</strong><br>
                  ";
                // line 83
                echo $this->getAttribute($context["location"], "telephone", array());
                echo "<br />
                  <br />
                  
                  ";
                // line 86
                if ($this->getAttribute($context["location"], "fax", array())) {
                    // line 87
                    echo "                  <strong>";
                    echo (isset($context["text_fax"]) ? $context["text_fax"] : null);
                    echo "</strong><br>
                  ";
                    // line 88
                    echo $this->getAttribute($context["location"], "fax", array());
                    echo "
                  ";
                }
                // line 90
                echo "                </div>
                <div class=\"col-sm-3\">
                  ";
                // line 92
                if ($this->getAttribute($context["location"], "open", array())) {
                    // line 93
                    echo "                  <strong>";
                    echo (isset($context["text_open"]) ? $context["text_open"] : null);
                    echo "</strong><br />
                  ";
                    // line 94
                    echo $this->getAttribute($context["location"], "open", array());
                    echo "<br />
                  <br />
                  ";
                }
                // line 97
                echo "                  ";
                if ($this->getAttribute($context["location"], "comment", array())) {
                    // line 98
                    echo "                  <strong>";
                    echo (isset($context["text_comment"]) ? $context["text_comment"] : null);
                    echo "</strong><br />
                  ";
                    // line 99
                    echo $this->getAttribute($context["location"], "comment", array());
                    echo "
                  ";
                }
                // line 101
                echo "                </div>
              </div>
            </div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "      </div>
      ";
        }
        // line 109
        echo "      <form action=\"";
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset>
          <legend>";
        // line 111
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</legend>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 113
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 115
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 116
        if ((isset($context["error_name"]) ? $context["error_name"] : null)) {
            // line 117
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_name"]) ? $context["error_name"] : null);
            echo "</div>
              ";
        }
        // line 119
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 122
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 124
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              ";
        // line 125
        if ((isset($context["error_email"]) ? $context["error_email"] : null)) {
            // line 126
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_email"]) ? $context["error_email"] : null);
            echo "</div>
              ";
        }
        // line 128
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-enquiry\">";
        // line 131
        echo (isset($context["entry_enquiry"]) ? $context["entry_enquiry"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\">";
        // line 133
        echo (isset($context["enquiry"]) ? $context["enquiry"] : null);
        echo "</textarea>
              ";
        // line 134
        if ((isset($context["error_enquiry"]) ? $context["error_enquiry"] : null)) {
            // line 135
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_enquiry"]) ? $context["error_enquiry"] : null);
            echo "</div>
              ";
        }
        // line 137
        echo "            </div>
          </div>
          ";
        // line 139
        echo (isset($context["captcha"]) ? $context["captcha"] : null);
        echo "
        </fieldset>
        <div class=\"buttons\">
          <div class=\"pull-right\">
            <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 143
        echo (isset($context["button_submit"]) ? $context["button_submit"] : null);
        echo "\" />
          </div>
        </div>
      </form>
      ";
        // line 147
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 148
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 150
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__acb064fea9ad4b638f6da10a8ebf310d7730fdaaf1eba62a3d7da9468f60114f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  418 => 150,  413 => 148,  409 => 147,  402 => 143,  395 => 139,  391 => 137,  385 => 135,  383 => 134,  379 => 133,  374 => 131,  369 => 128,  363 => 126,  361 => 125,  357 => 124,  352 => 122,  347 => 119,  341 => 117,  339 => 116,  335 => 115,  330 => 113,  325 => 111,  319 => 109,  315 => 107,  304 => 101,  299 => 99,  294 => 98,  291 => 97,  285 => 94,  280 => 93,  278 => 92,  274 => 90,  269 => 88,  264 => 87,  262 => 86,  256 => 83,  252 => 82,  249 => 81,  239 => 79,  237 => 78,  232 => 76,  226 => 74,  216 => 72,  214 => 71,  208 => 68,  201 => 66,  197 => 64,  193 => 63,  187 => 61,  185 => 60,  177 => 54,  172 => 52,  167 => 51,  164 => 50,  158 => 47,  153 => 46,  151 => 45,  147 => 43,  142 => 41,  137 => 40,  135 => 39,  127 => 34,  123 => 33,  120 => 32,  110 => 30,  108 => 29,  103 => 27,  97 => 25,  87 => 23,  85 => 22,  78 => 18,  74 => 17,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  47 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="information-contact" class="container">*/
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
/*       <h1>{{ heading_title }}</h1>*/
/*       <h3>{{ text_location }}</h3>*/
/*       <div class="panel panel-default">*/
/*         <div class="panel-body">*/
/*           <div class="row">*/
/*             {% if image %}*/
/*             <div class="col-sm-3"><img src="{{ image }}" alt="{{ store }}" title="{{ store }}" class="img-thumbnail" /></div>*/
/*             {% endif %}*/
/*             <div class="col-sm-3"><strong>{{ store }}</strong><br />*/
/*               <address>*/
/*               {{ address }}*/
/*               </address>*/
/*               {% if geocode %}*/
/*               <a href="https://maps.google.com/maps?q={{ geocode|url_encode }}&hl={{ geocode_hl }}&t=m&z=15" target="_blank" class="btn btn-info"><i class="fa fa-map-marker"></i> {{ button_map }}</a>*/
/*               {% endif %}*/
/*             </div>*/
/*             <div class="col-sm-3"><strong>{{ text_telephone }}</strong><br>*/
/*               {{ telephone }}<br />*/
/*               +7 (8652) 500-333<br />*/
/*               +7 (8652) 28-10-27<br />*/
/*                   <br />*/
/*               <br />*/
/*               {% if fax %}*/
/*               <strong>{{ text_fax }}</strong><br>*/
/*               {{ fax }}*/
/*               {% endif %}*/
/*             </div>*/
/*             <div class="col-sm-3">*/
/*               {% if open %}*/
/*               <strong>{{ text_open }}</strong><br />*/
/*               {{ open }}<br />*/
/*               <br />*/
/*               {% endif %}*/
/*               {% if comment %}*/
/*               <strong>{{ text_comment }}</strong><br />*/
/*               {{ comment }}*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A17398aef8e773f1b738abc423dbd84bad7024f6e249c8742e3fb0d27bc0147dc&amp;width=500&amp;height=350&amp;lang=ru_RU&amp;scroll=true"></script>*/
/*      <br><br>*/
/*       {% if locations %}*/
/*       <h3>{{ text_store }}</h3>*/
/*       <div class="panel-group" id="accordion">*/
/*         {% for location in locations %}*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h4 class="panel-title"><a href="#collapse-location{{ location.location_id }}" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion">{{ location.name }} <i class="fa fa-caret-down"></i></a></h4>*/
/*           </div>*/
/*           <div class="panel-collapse collapse" id="collapse-location{{ location.location_id }}">*/
/*             <div class="panel-body">*/
/*               <div class="row">*/
/*                 {% if location.image %}*/
/*                 <div class="col-sm-3"><img src="{{ location.image }}" alt="{{ location.name }}" title="{{ location.name }}" class="img-thumbnail" /></div>*/
/*                 {% endif %}*/
/*                 <div class="col-sm-3"><strong>{{ location.name }}</strong><br />*/
/*                   <address>*/
/*                   {{ location.address }}*/
/*                   </address>*/
/*                   {% if location.geocode %}*/
/*                   <a href="https://maps.google.com/maps?q={{ location.geocode|url_encode }}&hl={{ geocode_hl }}&t=m&z=15" target="_blank" class="btn btn-info"><i class="fa fa-map-marker"></i> {{ button_map }}</a>*/
/*                   {% endif %}*/
/*                 </div>*/
/*                 <div class="col-sm-3"> <strong>{{ text_telephone }}</strong><br>*/
/*                   {{ location.telephone }}<br />*/
/*                   <br />*/
/*                   */
/*                   {% if location.fax %}*/
/*                   <strong>{{ text_fax }}</strong><br>*/
/*                   {{ location.fax }}*/
/*                   {% endif %}*/
/*                 </div>*/
/*                 <div class="col-sm-3">*/
/*                   {% if location.open %}*/
/*                   <strong>{{ text_open }}</strong><br />*/
/*                   {{ location.open }}<br />*/
/*                   <br />*/
/*                   {% endif %}*/
/*                   {% if location.comment %}*/
/*                   <strong>{{ text_comment }}</strong><br />*/
/*                   {{ location.comment }}*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         {% endfor %}*/
/*       </div>*/
/*       {% endif %}*/
/*       <form action="{{ action }}" method="post" enctype="multipart/form-data" class="form-horizontal">*/
/*         <fieldset>*/
/*           <legend>{{ text_contact }}</legend>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-name">{{ entry_name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="name" value="{{ name }}" id="input-name" class="form-control" />*/
/*               {% if error_name %}*/
/*               <div class="text-danger">{{ error_name }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-email">{{ entry_email }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="email" value="{{ email }}" id="input-email" class="form-control" />*/
/*               {% if error_email %}*/
/*               <div class="text-danger">{{ error_email }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-enquiry">{{ entry_enquiry }}</label>*/
/*             <div class="col-sm-10">*/
/*               <textarea name="enquiry" rows="10" id="input-enquiry" class="form-control">{{ enquiry }}</textarea>*/
/*               {% if error_enquiry %}*/
/*               <div class="text-danger">{{ error_enquiry }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           {{ captcha }}*/
/*         </fieldset>*/
/*         <div class="buttons">*/
/*           <div class="pull-right">*/
/*             <input class="btn btn-primary" type="submit" value="{{ button_submit }}" />*/
/*           </div>*/
/*         </div>*/
/*       </form>*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }}*/
/* */
