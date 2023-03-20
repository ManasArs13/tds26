<?php

/* default/template/common/simple_row_field.twig */
class __TwigTemplate_6c83ca58bb69644c0f018dba3af413c798b2c5fab394ba708084dd1153e8f36d extends Twig_Template
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
        echo "<div class=\"form-group ";
        if ((isset($context["required"]) ? $context["required"] : null)) {
            echo "required";
        }
        echo " row-";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "\">
    <label class=\"control-label ";
        // line 2
        echo ((((isset($context["page"]) ? $context["page"] : null) == "checkout")) ? ("col-sm-4") : ("col-sm-2"));
        echo "\" for=\"";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "\">";
        echo (isset($context["label"]) ? $context["label"] : null);
        echo "</label>
    <div class=\"";
        // line 3
        echo ((((isset($context["page"]) ? $context["page"] : null) == "checkout")) ? ("col-sm-8") : ("col-sm-10"));
        echo "\">
      ";
        // line 4
        if ((((isset($context["type"]) ? $context["type"] : null) == "select") || ((isset($context["type"]) ? $context["type"] : null) == "select2"))) {
            // line 5
            echo "        <select class=\"form-control\" name=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" id=\"";
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "\" ";
            echo (((isset($context["bootstrap"]) ? $context["bootstrap"] : null)) ? ("data-theme=\"bootstrap\"") : (""));
            echo " ";
            echo ((((isset($context["type"]) ? $context["type"] : null) == "select2")) ? ("data-type=\"select2\"") : (""));
            echo " ";
            echo (((isset($context["reload"]) ? $context["reload"] : null)) ? ("data-onchange=\"reloadAll\"") : (""));
            echo ">
          ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["values"]) ? $context["values"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
                // line 7
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["info"], "id", array(), "array"));
                echo "\" ";
                echo ((((isset($context["value"]) ? $context["value"] : null) == $this->getAttribute($context["info"], "id", array(), "array"))) ? ("selected=\"selected\"") : (""));
                echo ">";
                echo $this->getAttribute($context["info"], "text", array(), "array");
                echo "</option>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "        </select>
      ";
        } elseif ((        // line 10
(isset($context["type"]) ? $context["type"] : null) == "radio")) {
            // line 11
            echo "        <div>
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["values"]) ? $context["values"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
                // line 13
                echo "          <div class=\"radio\">
            <label><input type=\"radio\" name=\"";
                // line 14
                echo (isset($context["name"]) ? $context["name"] : null);
                echo "\" id=\"";
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "_";
                echo $this->getAttribute($context["info"], "id", array(), "array");
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["info"], "id", array(), "array"));
                echo "\" ";
                echo ((((isset($context["value"]) ? $context["value"] : null) == $this->getAttribute($context["info"], "id", array(), "array"))) ? ("checked=\"checked\"") : (""));
                echo " ";
                echo (((isset($context["reload"]) ? $context["reload"] : null)) ? ("data-onchange=\"reloadAll\"") : (""));
                echo ">";
                echo $this->getAttribute($context["info"], "text", array(), "array");
                echo "</label>
          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "        </div>
      ";
        } elseif ((        // line 18
(isset($context["type"]) ? $context["type"] : null) == "checkbox")) {
            // line 19
            echo "        <div>
        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["values"]) ? $context["values"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
                // line 21
                echo "          <div class=\"checkbox\">
            <label><input type=\"checkbox\" name=\"";
                // line 22
                echo (isset($context["name"]) ? $context["name"] : null);
                echo "[]\" id=\"";
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "_";
                echo $this->getAttribute($context["info"], "id", array(), "array");
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["info"], "id", array(), "array"));
                echo "\" ";
                echo ((twig_in_filter($this->getAttribute($context["info"], "id", array(), "array"), (isset($context["value"]) ? $context["value"] : null))) ? ("checked=\"checked\"") : (""));
                echo " ";
                echo (((isset($context["reload"]) ? $context["reload"] : null)) ? ("data-onchange=\"reloadAll\"") : (""));
                echo ">";
                echo $this->getAttribute($context["info"], "text", array(), "array");
                echo "</label>
          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "        </div>
      ";
        } elseif ((        // line 26
(isset($context["type"]) ? $context["type"] : null) == "switcher")) {
            // line 27
            echo "        <div>
          <div class=\"checkbox\">
            <label><input type=\"checkbox\" name=\"";
            // line 29
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" id=\"";
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "\" data-unchecked-value=\"0\" value=\"1\" ";
            echo ((((isset($context["value"]) ? $context["value"] : null) == "1")) ? ("checked=\"checked\"") : (""));
            echo " ";
            echo (((isset($context["reload"]) ? $context["reload"] : null)) ? ("data-onchange=\"reloadAll\"") : (""));
            echo ">";
            echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
            echo "</label>
          </div>
        </div>
      ";
        } elseif ((        // line 32
(isset($context["type"]) ? $context["type"] : null) == "textarea")) {
            // line 33
            echo "        <textarea class=\"form-control\" name=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" id=\"";
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "\" placeholder=\"";
            echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
            echo "\" ";
            echo (((isset($context["reload"]) ? $context["reload"] : null)) ? ("data-onchange=\"reloadAll\"") : (""));
            echo ">";
            echo (isset($context["value"]) ? $context["value"] : null);
            echo "</textarea>
      ";
        } elseif ((        // line 34
(isset($context["type"]) ? $context["type"] : null) == "captcha")) {
            // line 35
            echo "        ";
            if ((isset($context["site_key"]) ? $context["site_key"] : null)) {
                // line 36
                echo "          <script src=\"https://www.google.com/recaptcha/api.js?hl=";
                echo (isset($context["lang"]) ? $context["lang"] : null);
                echo "&onload=recaptchaInit&render=explicit\" type=\"text/javascript\" async defer></script>
          <input type=\"hidden\" name=\"";
                // line 37
                echo (isset($context["name"]) ? $context["name"] : null);
                echo "\" id=\"";
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "\" value=\"";
                echo (isset($context["value"]) ? $context["value"] : null);
                echo "\">
          <script type=\"text/javascript\">
            function recaptchaCallback(value) {
              \$('#";
                // line 40
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "').val(value).trigger('change');
            }
            function recaptchaInit(){
              grecaptcha.render('simple-recaptcha');
            }
          </script>
          <div id=\"simple-recaptcha\" data-sitekey=\"";
                // line 46
                echo (isset($context["site_key"]) ? $context["site_key"] : null);
                echo "\" data-callback=\"recaptchaCallback\"></div>
        ";
            } else {
                // line 48
                echo "          <input type=\"text\" class=\"form-control\" name=\"";
                echo (isset($context["name"]) ? $context["name"] : null);
                echo "\" id=\"";
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "\" value=\"\" placeholder=\"";
                echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
                echo "\" ";
                echo (((isset($context["reload"]) ? $context["reload"] : null)) ? ("data-onchange=\"reloadAll\"") : (""));
                echo ">
          <div class=\"simple-captcha-container\"><img src=\"index.php?";
                // line 49
                echo (isset($context["additional_path"]) ? $context["additional_path"] : null);
                echo "route=common/simple_connector/captcha&t=";
                echo (isset($context["time"]) ? $context["time"] : null);
                echo "\" alt=\"\" id=\"captcha\" /></div>
        ";
            }
            // line 51
            echo "      ";
        } elseif (((isset($context["type"]) ? $context["type"] : null) == "file")) {
            // line 52
            echo "        <input type=\"button\" value=\"";
            echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
            echo "\" data-file=\"";
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "\" class=\"button form-control\">
        <div id=\"text_";
            // line 53
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "\" style=\"margin-top:3px;max-width:200px;\">";
            echo (isset($context["filename"]) ? $context["filename"] : null);
            echo "</div>
        <input type=\"hidden\" name=\"";
            // line 54
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" id=\"";
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "\" value=\"";
            echo (isset($context["value"]) ? $context["value"] : null);
            echo "\">
      ";
        } elseif ((        // line 55
(isset($context["type"]) ? $context["type"] : null) == "date")) {
            // line 56
            echo "        <div class=\"input-group date\">
          <input class=\"form-control\" type=\"text\" data-type=\"date\" name=\"";
            // line 57
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" id=\"";
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "\" value=\"";
            echo (isset($context["value"]) ? $context["value"] : null);
            echo "\" placeholder=\"";
            echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
            echo "\" ";
            echo (isset($context["attrs"]) ? $context["attrs"] : null);
            echo " ";
            echo (((isset($context["reload"]) ? $context["reload"] : null)) ? ("data-onchange=\"reloadAll\"") : (""));
            echo ">
          <span class=\"input-group-btn\">
            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span>
        </div>
      ";
        } elseif ((        // line 62
(isset($context["type"]) ? $context["type"] : null) == "time")) {
            // line 63
            echo "      <div class=\"input-group time\">
        <input class=\"form-control\" type=\"text\" data-type=\"time\" name=\"";
            // line 64
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" id=\"";
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "\" value=\"";
            echo (isset($context["value"]) ? $context["value"] : null);
            echo "\" placeholder=\"";
            echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
            echo "\" ";
            echo (isset($context["attrs"]) ? $context["attrs"] : null);
            echo " ";
            echo (((isset($context["reload"]) ? $context["reload"] : null)) ? ("data-onchange=\"reloadAll\"") : (""));
            echo ">
        <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-clock-o\"></i></button>
        </span>
      </div>
      ";
        } elseif ((        // line 69
(isset($context["type"]) ? $context["type"] : null) == "datetime")) {
            // line 70
            echo "      <div class=\"input-group datetime\">
        <input class=\"form-control\" type=\"text\" data-type=\"datetime\" name=\"";
            // line 71
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" id=\"";
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "\" value=\"";
            echo (isset($context["value"]) ? $context["value"] : null);
            echo "\" placeholder=\"";
            echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
            echo "\" ";
            echo (isset($context["attrs"]) ? $context["attrs"] : null);
            echo " ";
            echo (((isset($context["reload"]) ? $context["reload"] : null)) ? ("data-onchange=\"reloadAll\"") : (""));
            echo ">
        <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
        </span>
      </div>
      ";
        } else {
            // line 77
            echo "        <input  class=\"form-control\" type=\"";
            echo (isset($context["type"]) ? $context["type"] : null);
            echo "\" name=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" id=\"";
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "\" ";
            echo ((((isset($context["type"]) ? $context["type"] : null) == "password")) ? ("data-validate-on=\"keyup\"") : (""));
            echo " value=\"";
            echo (isset($context["value"]) ? $context["value"] : null);
            echo "\" placeholder=\"";
            echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
            echo "\" ";
            echo (isset($context["attrs"]) ? $context["attrs"] : null);
            echo " ";
            echo (((isset($context["reload"]) ? $context["reload"] : null)) ? ("data-onchange=\"reloadAll\"") : (""));
            echo ">
      ";
        }
        // line 79
        echo "      ";
        if ( !twig_test_empty((isset($context["rules"]) ? $context["rules"] : null))) {
            // line 80
            echo "        <div class=\"simplecheckout-rule-group\" data-for=\"";
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "\">
          ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["rules"]) ? $context["rules"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["rule"]) {
                // line 82
                echo "            <div ";
                echo ((($this->getAttribute($context["rule"], "display", array(), "array") &&  !$this->getAttribute($context["rule"], "passed", array(), "array"))) ? ("") : ("style=\"display:none;\""));
                echo " data-for=\"";
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "\" data-rule=\"";
                echo $this->getAttribute($context["rule"], "id", array(), "array");
                echo "\" class=\"simplecheckout-error-text simplecheckout-rule\" ";
                echo $this->getAttribute($context["rule"], "attrs", array(), "array");
                echo ">";
                echo $this->getAttribute($context["rule"], "text", array(), "array");
                echo "</div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rule'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "        </div>
      ";
        }
        // line 86
        echo "      ";
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 87
            echo "        <div class=\"simplecheckout-tooltip\" data-for=\"";
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "\">";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "</div>
      ";
        }
        // line 89
        echo "    </div>
 </div>
";
    }

    public function getTemplateName()
    {
        return "default/template/common/simple_row_field.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 89,  384 => 87,  381 => 86,  377 => 84,  360 => 82,  356 => 81,  351 => 80,  348 => 79,  328 => 77,  309 => 71,  306 => 70,  304 => 69,  286 => 64,  283 => 63,  281 => 62,  263 => 57,  260 => 56,  258 => 55,  250 => 54,  244 => 53,  237 => 52,  234 => 51,  227 => 49,  216 => 48,  211 => 46,  202 => 40,  192 => 37,  187 => 36,  184 => 35,  182 => 34,  169 => 33,  167 => 32,  153 => 29,  149 => 27,  147 => 26,  144 => 25,  123 => 22,  120 => 21,  116 => 20,  113 => 19,  111 => 18,  108 => 17,  87 => 14,  84 => 13,  80 => 12,  77 => 11,  75 => 10,  72 => 9,  59 => 7,  55 => 6,  42 => 5,  40 => 4,  36 => 3,  28 => 2,  19 => 1,);
    }
}
/* <div class="form-group {% if required %}required{% endif %} row-{{id}}">*/
/*     <label class="control-label {{page == 'checkout' ? 'col-sm-4' : 'col-sm-2' }}" for="{{id}}">{{label}}</label>*/
/*     <div class="{{page == 'checkout' ? 'col-sm-8' : 'col-sm-10'}}">*/
/*       {% if type == 'select' or type == 'select2' %}*/
/*         <select class="form-control" name="{{ name }}" id="{{ id }}" {{ bootstrap ? 'data-theme="bootstrap"' : '' }} {{ type == 'select2' ? 'data-type="select2"' : '' }} {{ reload ? 'data-onchange="reloadAll"' : ''}}>*/
/*           {% for info in values %}*/
/*             <option value="{{ info['id'] | escape }}" {{ value == info['id'] ? 'selected="selected"' : '' }}>{{ info['text'] }}</option>*/
/*           {% endfor %}*/
/*         </select>*/
/*       {% elseif type == 'radio' %}*/
/*         <div>*/
/*         {% for info in values %}*/
/*           <div class="radio">*/
/*             <label><input type="radio" name="{{ name }}" id="{{ id }}_{{ info['id'] }}" value="{{ info['id'] | escape }}" {{ value == info['id'] ? 'checked="checked"' : '' }} {{ reload ? 'data-onchange="reloadAll"' : '' }}>{{ info['text'] }}</label>*/
/*           </div>*/
/*         {% endfor %}*/
/*         </div>*/
/*       {% elseif type == 'checkbox' %}*/
/*         <div>*/
/*         {% for info in values %}*/
/*           <div class="checkbox">*/
/*             <label><input type="checkbox" name="{{ name }}[]" id="{{ id }}_{{ info['id'] }}" value="{{ info['id'] | escape }}" {{ info['id'] in value ? 'checked="checked"' : '' }} {{ reload ? 'data-onchange="reloadAll"' : ''}}>{{ info['text'] }}</label>*/
/*           </div>*/
/*         {% endfor %}*/
/*         </div>*/
/*       {% elseif type == 'switcher' %}*/
/*         <div>*/
/*           <div class="checkbox">*/
/*             <label><input type="checkbox" name="{{ name }}" id="{{ id }}" data-unchecked-value="0" value="1" {{ value == '1' ? 'checked="checked"' : '' }} {{ reload ? 'data-onchange="reloadAll"' : ''}}>{{ placeholder }}</label>*/
/*           </div>*/
/*         </div>*/
/*       {% elseif type == 'textarea' %}*/
/*         <textarea class="form-control" name="{{ name }}" id="{{ id }}" placeholder="{{ placeholder }}" {{ reload ? 'data-onchange="reloadAll"' : ''}}>{{ value }}</textarea>*/
/*       {% elseif type == 'captcha' %}*/
/*         {% if site_key %}*/
/*           <script src="https://www.google.com/recaptcha/api.js?hl={{ lang }}&onload=recaptchaInit&render=explicit" type="text/javascript" async defer></script>*/
/*           <input type="hidden" name="{{ name }}" id="{{ id }}" value="{{ value }}">*/
/*           <script type="text/javascript">*/
/*             function recaptchaCallback(value) {*/
/*               $('#{{ id }}').val(value).trigger('change');*/
/*             }*/
/*             function recaptchaInit(){*/
/*               grecaptcha.render('simple-recaptcha');*/
/*             }*/
/*           </script>*/
/*           <div id="simple-recaptcha" data-sitekey="{{ site_key }}" data-callback="recaptchaCallback"></div>*/
/*         {% else %}*/
/*           <input type="text" class="form-control" name="{{ name }}" id="{{ id }}" value="" placeholder="{{ placeholder }}" {{ reload ? 'data-onchange="reloadAll"' : ''}}>*/
/*           <div class="simple-captcha-container"><img src="index.php?{{ additional_path }}route=common/simple_connector/captcha&t={{ time }}" alt="" id="captcha" /></div>*/
/*         {% endif %}*/
/*       {% elseif type == 'file' %}*/
/*         <input type="button" value="{{ button_upload }}" data-file="{{ id }}" class="button form-control">*/
/*         <div id="text_{{ id }}" style="margin-top:3px;max-width:200px;">{{ filename }}</div>*/
/*         <input type="hidden" name="{{ name }}" id="{{ id }}" value="{{ value }}">*/
/*       {% elseif type == 'date' %}*/
/*         <div class="input-group date">*/
/*           <input class="form-control" type="text" data-type="date" name="{{ name }}" id="{{ id }}" value="{{ value }}" placeholder="{{ placeholder }}" {{ attrs }} {{ reload ? 'data-onchange="reloadAll"' : ''}}>*/
/*           <span class="input-group-btn">*/
/*             <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*           </span>*/
/*         </div>*/
/*       {% elseif type == 'time' %}*/
/*       <div class="input-group time">*/
/*         <input class="form-control" type="text" data-type="time" name="{{ name }}" id="{{ id }}" value="{{ value }}" placeholder="{{ placeholder }}" {{ attrs }} {{ reload ? 'data-onchange="reloadAll"' : ''}}>*/
/*         <span class="input-group-btn">*/
/*           <button type="button" class="btn btn-default"><i class="fa fa-clock-o"></i></button>*/
/*         </span>*/
/*       </div>*/
/*       {% elseif type == 'datetime' %}*/
/*       <div class="input-group datetime">*/
/*         <input class="form-control" type="text" data-type="datetime" name="{{ name }}" id="{{ id }}" value="{{ value }}" placeholder="{{ placeholder }}" {{ attrs }} {{ reload ? 'data-onchange="reloadAll"' : ''}}>*/
/*         <span class="input-group-btn">*/
/*           <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*         </span>*/
/*       </div>*/
/*       {% else %}*/
/*         <input  class="form-control" type="{{ type }}" name="{{ name }}" id="{{ id }}" {{ type == 'password' ? 'data-validate-on="keyup"' : '' }} value="{{ value }}" placeholder="{{ placeholder }}" {{ attrs }} {{ reload ? 'data-onchange="reloadAll"' : ''}}>*/
/*       {% endif %}*/
/*       {% if rules is not empty %}*/
/*         <div class="simplecheckout-rule-group" data-for="{{ id }}">*/
/*           {% for rule in rules %}*/
/*             <div {{ rule['display'] and not rule['passed'] ? '' : 'style="display:none;"' }} data-for="{{ id }}" data-rule="{{ rule['id'] }}" class="simplecheckout-error-text simplecheckout-rule" {{ rule['attrs'] }}>{{ rule['text'] }}</div>*/
/*           {% endfor %}*/
/*         </div>*/
/*       {% endif %}*/
/*       {% if description %}*/
/*         <div class="simplecheckout-tooltip" data-for="{{ id }}">{{ description }}</div>*/
/*       {% endif %}*/
/*     </div>*/
/*  </div>*/
/* */
