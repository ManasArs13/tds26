<?php

/* default/template/account/simpleedit.twig */
class __TwigTemplate_508f0fb10539eabd0de28259173f6edcce10d11be8d011fc46ae08ad1d2ec9e4 extends Twig_Template
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
        if ((( !(isset($context["ajax"]) ? $context["ajax"] : null) &&  !(isset($context["popup"]) ? $context["popup"] : null)) &&  !(isset($context["as_module"]) ? $context["as_module"] : null))) {
            // line 2
            $context["simple_page"] = "simpleedit";
            // line 3
            $this->loadTemplate((isset($context["simple_header"]) ? $context["simple_header"] : null), "default/template/account/simpleedit.twig", 3)->display($context);
            // line 4
            echo "<div class=\"simple-content\">
";
        }
        // line 6
        echo "    ";
        if (( !(isset($context["ajax"]) ? $context["ajax"] : null) || ((isset($context["ajax"]) ? $context["ajax"] : null) && (isset($context["popup"]) ? $context["popup"] : null)))) {
            // line 7
            echo "    <script type=\"text/javascript\">
        var startSimpleInterval = window.setInterval(function(){
            if (typeof jQuery !== 'undefined' && typeof Simplepage === \"function\" && jQuery.isReady) {
                window.clearInterval(startSimpleInterval);

                var simplepage = new Simplepage({
                    additionalParams: \"";
            // line 13
            echo (isset($context["additional_params"]) ? $context["additional_params"] : null);
            echo "\",
                    additionalPath: \"";
            // line 14
            echo (isset($context["additional_path"]) ? $context["additional_path"] : null);
            echo "\",
                    mainUrl: \"";
            // line 15
            echo (isset($context["action"]) ? $context["action"] : null);
            echo "\",
                    mainContainer: \"#simplepage_form\",
                    scrollToError: ";
            // line 17
            echo (((isset($context["scroll_to_error"]) ? $context["scroll_to_error"] : null)) ? (1) : (0));
            echo ",
                    notificationDefault: ";
            // line 18
            echo (((isset($context["notification_default"]) ? $context["notification_default"] : null)) ? (1) : (0));
            echo ",
                    notificationToasts: ";
            // line 19
            echo (((isset($context["notification_toasts"]) ? $context["notification_toasts"] : null)) ? (1) : (0));
            echo ",
                    notificationCheckForm: ";
            // line 20
            echo (((isset($context["notification_check_form"]) ? $context["notification_check_form"] : null)) ? (1) : (0));
            echo ",
                    notificationCheckFormText: \"";
            // line 21
            echo (isset($context["notification_check_form_text"]) ? $context["notification_check_form_text"] : null);
            echo "\",
                    languageCode: \"";
            // line 22
            echo (isset($context["language_code"]) ? $context["language_code"] : null);
            echo "\",
                    javascriptCallback: function() { ";
            // line 23
            echo (isset($context["javascript_callback"]) ? $context["javascript_callback"] : null);
            echo " }
                });

                if (typeof toastr !== 'undefined') {
                    toastr.options.positionClass = \"";
            // line 27
            echo (((isset($context["notification_position"]) ? $context["notification_position"] : null)) ? ((isset($context["notification_position"]) ? $context["notification_position"] : null)) : ("toast-top-right"));
            echo "\";
                    toastr.options.timeOut = \"";
            // line 28
            echo (((isset($context["notification_timeout"]) ? $context["notification_timeout"] : null)) ? ((isset($context["notification_timeout"]) ? $context["notification_timeout"] : null)) : ("5000"));
            echo "\";
                    toastr.options.progressBar = true;
                }
                
                simplepage.init();
            }
        },0);;
    </script>
    ";
        }
        // line 37
        echo "    <form action=\"";
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"simplepage_form\">
        <div class=\"simpleregister\" id=\"simpleedit\">
            ";
        // line 39
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 40
            echo "            <div class=\"warning alert alert-danger\">";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "</div>
            ";
        }
        // line 42
        echo "            <div class=\"simpleregister-block-content\">
                ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 44
            echo "                  ";
            echo $context["row"];
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "            </div>
            <div class=\"simpleregister-button-block buttons\">
                <div class=\"simpleregister-button-right\">
                    <a class=\"button btn-primary button_oc btn\" data-onclick=\"submit\" id=\"simpleregister_button_confirm\"><span>";
        // line 49
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</span></a>
                </div>
            </div>
        </div>
        ";
        // line 53
        if ((isset($context["redirect"]) ? $context["redirect"] : null)) {
            // line 54
            echo "            <input type=\"hidden\" id=\"simple_redirect_url\" value=\"";
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "\">
        ";
        }
        // line 56
        echo "    </form>
";
        // line 57
        if ((( !(isset($context["ajax"]) ? $context["ajax"] : null) &&  !(isset($context["popup"]) ? $context["popup"] : null)) &&  !(isset($context["as_module"]) ? $context["as_module"] : null))) {
            // line 58
            echo "</div>
";
            // line 59
            $this->loadTemplate((isset($context["simple_footer"]) ? $context["simple_footer"] : null), "default/template/account/simpleedit.twig", 59)->display($context);
        }
    }

    public function getTemplateName()
    {
        return "default/template/account/simpleedit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 59,  155 => 58,  153 => 57,  150 => 56,  144 => 54,  142 => 53,  135 => 49,  130 => 46,  121 => 44,  117 => 43,  114 => 42,  108 => 40,  106 => 39,  100 => 37,  88 => 28,  84 => 27,  77 => 23,  73 => 22,  69 => 21,  65 => 20,  61 => 19,  57 => 18,  53 => 17,  48 => 15,  44 => 14,  40 => 13,  32 => 7,  29 => 6,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if not ajax and not popup and not as_module %}*/
/* {% set simple_page = 'simpleedit' %}*/
/* {% include simple_header %}*/
/* <div class="simple-content">*/
/* {% endif %}*/
/*     {% if not ajax or (ajax and popup) %}*/
/*     <script type="text/javascript">*/
/*         var startSimpleInterval = window.setInterval(function(){*/
/*             if (typeof jQuery !== 'undefined' && typeof Simplepage === "function" && jQuery.isReady) {*/
/*                 window.clearInterval(startSimpleInterval);*/
/* */
/*                 var simplepage = new Simplepage({*/
/*                     additionalParams: "{{ additional_params }}",*/
/*                     additionalPath: "{{ additional_path }}",*/
/*                     mainUrl: "{{ action }}",*/
/*                     mainContainer: "#simplepage_form",*/
/*                     scrollToError: {{ scroll_to_error ? 1 : 0 }},*/
/*                     notificationDefault: {{ notification_default ? 1 : 0 }},*/
/*                     notificationToasts: {{ notification_toasts ? 1 : 0 }},*/
/*                     notificationCheckForm: {{ notification_check_form ? 1 : 0 }},*/
/*                     notificationCheckFormText: "{{ notification_check_form_text }}",*/
/*                     languageCode: "{{ language_code }}",*/
/*                     javascriptCallback: function() { {{ javascript_callback}} }*/
/*                 });*/
/* */
/*                 if (typeof toastr !== 'undefined') {*/
/*                     toastr.options.positionClass = "{{ notification_position ? notification_position : 'toast-top-right' }}";*/
/*                     toastr.options.timeOut = "{{ notification_timeout ? notification_timeout : '5000' }}";*/
/*                     toastr.options.progressBar = true;*/
/*                 }*/
/*                 */
/*                 simplepage.init();*/
/*             }*/
/*         },0);;*/
/*     </script>*/
/*     {% endif %}*/
/*     <form action="{{ action }}" method="post" enctype="multipart/form-data" id="simplepage_form">*/
/*         <div class="simpleregister" id="simpleedit">*/
/*             {% if error_warning %}*/
/*             <div class="warning alert alert-danger">{{ error_warning }}</div>*/
/*             {% endif %}*/
/*             <div class="simpleregister-block-content">*/
/*                 {% for row in rows %}*/
/*                   {{ row }}*/
/*                 {% endfor %}*/
/*             </div>*/
/*             <div class="simpleregister-button-block buttons">*/
/*                 <div class="simpleregister-button-right">*/
/*                     <a class="button btn-primary button_oc btn" data-onclick="submit" id="simpleregister_button_confirm"><span>{{ button_continue }}</span></a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         {% if redirect %}*/
/*             <input type="hidden" id="simple_redirect_url" value="{{ redirect }}">*/
/*         {% endif %}*/
/*     </form>*/
/* {% if not ajax and not popup and not as_module %}*/
/* </div>*/
/* {% include simple_footer %}*/
/* {% endif %}*/
