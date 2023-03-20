<?php

/* default/template/account/simpleregister.twig */
class __TwigTemplate_e62ca280dc4d867565730c87d743d9f6cbb4883dadd7865e84d2a5d28204dd9f extends Twig_Template
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
            $context["simple_page"] = "simpleregister";
            // line 3
            $this->loadTemplate((isset($context["simple_header"]) ? $context["simple_header"] : null), "default/template/account/simpleregister.twig", 3)->display($context);
            // line 4
            echo "<div class=\"simple-content\">
";
        }
        // line 6
        echo "    ";
        if (( !(isset($context["ajax"]) ? $context["ajax"] : null) || ((isset($context["ajax"]) ? $context["ajax"] : null) && (isset($context["popup"]) ? $context["popup"] : null)))) {
            // line 7
            echo "    <script type=\"text/javascript\">
        ";
            // line 8
            if ((isset($context["popup"]) ? $context["popup"] : null)) {
                echo " 
            var simpleScriptsInterval = window.setInterval(function(){
                if (typeof jQuery !== 'undefined' && jQuery.isReady) {
                    window.clearInterval(simpleScriptsInterval);

                    if (typeof Simplepage !== \"function\") {
                        ";
                // line 14
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["simple_scripts"]) ? $context["simple_scripts"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
                    // line 15
                    echo "                            \$(\"head\").append('<script src=\"' + '";
                    echo $context["script"];
                    echo "' + '\"></' + 'script>');
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                echo "
                        ";
                // line 18
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["simple_styles"]) ? $context["simple_styles"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
                    // line 19
                    echo "                            \$(\"head\").append('<link href=\"' + '";
                    echo $context["style"];
                    echo "' + '\" rel=\"stylesheet\"/>');
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "                         
                    }
                }
            },0);
        ";
            }
            // line 25
            echo "
        var startSimpleInterval = window.setInterval(function(){
            if (typeof jQuery !== 'undefined' && typeof Simplepage === \"function\" && jQuery.isReady) {
                window.clearInterval(startSimpleInterval);
                
                var simplepage = new Simplepage({
                    additionalParams: \"";
            // line 31
            echo (isset($context["additional_params"]) ? $context["additional_params"] : null);
            echo "\",
                    additionalPath: \"";
            // line 32
            echo (isset($context["additional_path"]) ? $context["additional_path"] : null);
            echo "\",
                    mainUrl: \"";
            // line 33
            echo (isset($context["action"]) ? $context["action"] : null);
            echo "\",
                    mainContainer: \"#simplepage_form\",
                    useAutocomplete: ";
            // line 35
            echo (((isset($context["use_autocomplete"]) ? $context["use_autocomplete"] : null)) ? (1) : (0));
            echo ",
                    scrollToError: ";
            // line 36
            echo (((isset($context["scroll_to_error"]) ? $context["scroll_to_error"] : null)) ? (1) : (0));
            echo ",
                    notificationDefault: ";
            // line 37
            echo (((isset($context["notification_default"]) ? $context["notification_default"] : null)) ? (1) : (0));
            echo ",
                    notificationToasts: ";
            // line 38
            echo (((isset($context["notification_toasts"]) ? $context["notification_toasts"] : null)) ? (1) : (0));
            echo ",
                    notificationCheckForm: ";
            // line 39
            echo (((isset($context["notification_check_form"]) ? $context["notification_check_form"] : null)) ? (1) : (0));
            echo ",
                    notificationCheckFormText: \"";
            // line 40
            echo (isset($context["notification_check_form_text"]) ? $context["notification_check_form_text"] : null);
            echo "\",
                    languageCode: \"";
            // line 41
            echo (isset($context["language_code"]) ? $context["language_code"] : null);
            echo "\",
                    javascriptCallback: function() { ";
            // line 42
            echo (isset($context["javascript_callback"]) ? $context["javascript_callback"] : null);
            echo " }
                });

                if (typeof toastr !== 'undefined') {
                    toastr.options.positionClass = \"";
            // line 46
            echo (((isset($context["notification_position"]) ? $context["notification_position"] : null)) ? ((isset($context["notification_position"]) ? $context["notification_position"] : null)) : ("toast-top-right"));
            echo "\";
                    toastr.options.timeOut = \"";
            // line 47
            echo (((isset($context["notification_timeout"]) ? $context["notification_timeout"] : null)) ? ((isset($context["notification_timeout"]) ? $context["notification_timeout"] : null)) : ("5000"));
            echo "\";
                    toastr.options.progressBar = true;
                }

                simplepage.init();
            }
        },0);
    </script>
    ";
        }
        // line 56
        echo "    <form action=\"";
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"simplepage_form\">
        <div class=\"simpleregister\" id=\"simpleregister\">
            <p class=\"simpleregister-have-account\">";
        // line 58
        echo (isset($context["text_account_already"]) ? $context["text_account_already"] : null);
        echo "</p>
            ";
        // line 59
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 60
            echo "            <div class=\"warning alert alert-danger\">";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "</div>
            ";
        }
        // line 62
        echo "            <div class=\"simpleregister-block-content\">
                ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 64
            echo "                  ";
            echo $context["row"];
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hidden_rows"]) ? $context["hidden_rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 67
            echo "                  ";
            echo $context["row"];
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "            </div>

            ";
        // line 71
        if ((isset($context["display_agreement_checkbox"]) ? $context["display_agreement_checkbox"] : null)) {
            // line 72
            echo "                <div class=\"alert alert-danger simpleregister-warning-block\" id=\"agreement_warning\" ";
            if ((isset($context["error_agreement"]) ? $context["error_agreement"] : null)) {
                echo "data-error=\"true\"";
            } else {
                echo "style=\"display:none;\"";
            }
            echo ">
                    <div class=\"agreement_all\">
                        ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["error_warning_agreement"]) ? $context["error_warning_agreement"] : null));
            foreach ($context['_seq'] as $context["agreement_id"] => $context["warning_agreement"]) {
                // line 75
                echo "                            <div class=\"agreement_";
                echo $context["agreement_id"];
                echo "\">";
                echo $context["warning_agreement"];
                echo "</div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['agreement_id'], $context['warning_agreement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "                    </div>                    
                </div>
            ";
        }
        // line 79
        echo "  

            <div class=\"simpleregister-button-block buttons\">
                <div class=\"simpleregister-button-right\">
                    ";
        // line 83
        if ((isset($context["display_agreement_checkbox"]) ? $context["display_agreement_checkbox"] : null)) {
            // line 84
            echo "                        <span id=\"agreement_checkbox\">
                            ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["text_agreements"]) ? $context["text_agreements"] : null));
            foreach ($context['_seq'] as $context["agreement_id"] => $context["text_agreement"]) {
                // line 86
                echo "                                <div class=\"checkbox\"><label><input type=\"checkbox\" name=\"agreements[]\" value=\"";
                echo $context["agreement_id"];
                echo "\" ";
                echo ((twig_in_filter($context["agreement_id"], (isset($context["agreements"]) ? $context["agreements"] : null))) ? ("checked=\"checked\"") : (""));
                echo " />";
                echo $context["text_agreement"];
                echo "</label></div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['agreement_id'], $context['text_agreement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "                        </span>
                    ";
        }
        // line 90
        echo "
                    <a class=\"button btn-primary button_oc btn\" data-onclick=\"submit\" id=\"simpleregister_button_confirm\"><span>";
        // line 91
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</span></a>
                </div>
            </div>
        </div>
        ";
        // line 95
        if ((isset($context["redirect"]) ? $context["redirect"] : null)) {
            // line 96
            echo "            <input type=\"hidden\" id=\"simple_redirect_url\" value=\"";
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "\">
        ";
        }
        // line 98
        echo "    </form>
";
        // line 99
        if ((( !(isset($context["ajax"]) ? $context["ajax"] : null) &&  !(isset($context["popup"]) ? $context["popup"] : null)) &&  !(isset($context["as_module"]) ? $context["as_module"] : null))) {
            // line 100
            echo "</div>
";
            // line 101
            $this->loadTemplate((isset($context["simple_footer"]) ? $context["simple_footer"] : null), "default/template/account/simpleregister.twig", 101)->display($context);
        }
    }

    public function getTemplateName()
    {
        return "default/template/account/simpleregister.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 101,  291 => 100,  289 => 99,  286 => 98,  280 => 96,  278 => 95,  271 => 91,  268 => 90,  264 => 88,  251 => 86,  247 => 85,  244 => 84,  242 => 83,  236 => 79,  231 => 77,  220 => 75,  216 => 74,  206 => 72,  204 => 71,  200 => 69,  191 => 67,  186 => 66,  177 => 64,  173 => 63,  170 => 62,  164 => 60,  162 => 59,  158 => 58,  152 => 56,  140 => 47,  136 => 46,  129 => 42,  125 => 41,  121 => 40,  117 => 39,  113 => 38,  109 => 37,  105 => 36,  101 => 35,  96 => 33,  92 => 32,  88 => 31,  80 => 25,  73 => 20,  64 => 19,  60 => 18,  57 => 17,  48 => 15,  44 => 14,  35 => 8,  32 => 7,  29 => 6,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if not ajax and not popup and not as_module %}*/
/* {% set simple_page = 'simpleregister' %}*/
/* {% include simple_header %}*/
/* <div class="simple-content">*/
/* {% endif %}*/
/*     {% if not ajax or (ajax and popup) %}*/
/*     <script type="text/javascript">*/
/*         {% if popup %} */
/*             var simpleScriptsInterval = window.setInterval(function(){*/
/*                 if (typeof jQuery !== 'undefined' && jQuery.isReady) {*/
/*                     window.clearInterval(simpleScriptsInterval);*/
/* */
/*                     if (typeof Simplepage !== "function") {*/
/*                         {% for script in simple_scripts %}*/
/*                             $("head").append('<script src="' + '{{ script }}' + '"></' + 'script>');*/
/*                         {% endfor %}*/
/* */
/*                         {% for style in simple_styles %}*/
/*                             $("head").append('<link href="' + '{{ style }}' + '" rel="stylesheet"/>');*/
/*                         {% endfor %}                         */
/*                     }*/
/*                 }*/
/*             },0);*/
/*         {% endif %}*/
/* */
/*         var startSimpleInterval = window.setInterval(function(){*/
/*             if (typeof jQuery !== 'undefined' && typeof Simplepage === "function" && jQuery.isReady) {*/
/*                 window.clearInterval(startSimpleInterval);*/
/*                 */
/*                 var simplepage = new Simplepage({*/
/*                     additionalParams: "{{ additional_params }}",*/
/*                     additionalPath: "{{ additional_path }}",*/
/*                     mainUrl: "{{ action }}",*/
/*                     mainContainer: "#simplepage_form",*/
/*                     useAutocomplete: {{ use_autocomplete ? 1 : 0 }},*/
/*                     scrollToError: {{ scroll_to_error ? 1 : 0 }},*/
/*                     notificationDefault: {{ notification_default ? 1 : 0 }},*/
/*                     notificationToasts: {{ notification_toasts ? 1 : 0 }},*/
/*                     notificationCheckForm: {{ notification_check_form ? 1 : 0 }},*/
/*                     notificationCheckFormText: "{{ notification_check_form_text }}",*/
/*                     languageCode: "{{ language_code }}",*/
/*                     javascriptCallback: function() { {{ javascript_callback }} }*/
/*                 });*/
/* */
/*                 if (typeof toastr !== 'undefined') {*/
/*                     toastr.options.positionClass = "{{ notification_position ? notification_position : 'toast-top-right' }}";*/
/*                     toastr.options.timeOut = "{{ notification_timeout ? notification_timeout : '5000' }}";*/
/*                     toastr.options.progressBar = true;*/
/*                 }*/
/* */
/*                 simplepage.init();*/
/*             }*/
/*         },0);*/
/*     </script>*/
/*     {% endif %}*/
/*     <form action="{{ action }}" method="post" enctype="multipart/form-data" id="simplepage_form">*/
/*         <div class="simpleregister" id="simpleregister">*/
/*             <p class="simpleregister-have-account">{{ text_account_already }}</p>*/
/*             {% if error_warning %}*/
/*             <div class="warning alert alert-danger">{{ error_warning }}</div>*/
/*             {% endif %}*/
/*             <div class="simpleregister-block-content">*/
/*                 {% for row in rows %}*/
/*                   {{ row }}*/
/*                 {% endfor %}*/
/*                 {% for row in hidden_rows %}*/
/*                   {{ row }}*/
/*                 {% endfor %}*/
/*             </div>*/
/* */
/*             {% if display_agreement_checkbox %}*/
/*                 <div class="alert alert-danger simpleregister-warning-block" id="agreement_warning" {% if error_agreement %}data-error="true"{% else %}style="display:none;"{% endif %}>*/
/*                     <div class="agreement_all">*/
/*                         {% for agreement_id, warning_agreement in error_warning_agreement %}*/
/*                             <div class="agreement_{{ agreement_id }}">{{ warning_agreement }}</div>*/
/*                         {% endfor %}*/
/*                     </div>                    */
/*                 </div>*/
/*             {% endif %}  */
/* */
/*             <div class="simpleregister-button-block buttons">*/
/*                 <div class="simpleregister-button-right">*/
/*                     {% if (display_agreement_checkbox) %}*/
/*                         <span id="agreement_checkbox">*/
/*                             {% for agreement_id, text_agreement in text_agreements %}*/
/*                                 <div class="checkbox"><label><input type="checkbox" name="agreements[]" value="{{ agreement_id }}" {{ agreement_id in agreements ? 'checked="checked"' : '' }} />{{ text_agreement }}</label></div>*/
/*                             {% endfor %}*/
/*                         </span>*/
/*                     {% endif %}*/
/* */
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
