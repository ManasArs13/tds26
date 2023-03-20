<?php

/* default/template/checkout/simplecheckout.twig */
class __TwigTemplate_820a125061baa64eea52854c20f705bbafc1c655dc99a3677128121f2aa3509a extends Twig_Template
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
            $context["simple_page"] = "simplecheckout";
            // line 3
            $context["heading_title"] = ((isset($context["heading_title"]) ? $context["heading_title"] : null) . (((isset($context["display_weight"]) ? $context["display_weight"] : null)) ? ((("&nbsp;(<span id=\"weight\">" . (isset($context["weight"]) ? $context["weight"] : null)) . "</span>)")) : ("")));
            // line 4
            $this->loadTemplate((isset($context["simple_header"]) ? $context["simple_header"] : null), "default/template/checkout/simplecheckout.twig", 4)->display($context);
            // line 5
            echo "<style>
    ";
            // line 6
            if ((isset($context["left_column_width"]) ? $context["left_column_width"] : null)) {
                // line 7
                echo "        @media only screen and (min-width:1024px) {
            .simplecheckout-left-column {
                width: ";
                // line 9
                echo (isset($context["left_column_width"]) ? $context["left_column_width"] : null);
                echo "%;
            }
        }
    ";
            }
            // line 13
            echo "    ";
            if ((isset($context["right_column_width"]) ? $context["right_column_width"] : null)) {
                // line 14
                echo "        @media only screen and (min-width:1024px) {
            .simplecheckout-right-column {
                width: ";
                // line 16
                echo (isset($context["right_column_width"]) ? $context["right_column_width"] : null);
                echo "%;
            }
        }
    ";
            }
            // line 20
            echo "    ";
            if ((isset($context["customer_with_payment_address"]) ? $context["customer_with_payment_address"] : null)) {
                // line 21
                echo "        #simplecheckout_customer {
            margin-bottom: 0;
        }
        #simplecheckout_customer .simplecheckout-block-content {
            border-bottom-width: 0;
            padding-bottom: 0;
        }
        #simplecheckout_payment_address div.checkout-heading {
            display: none;
        }
        #simplecheckout_payment_address .simplecheckout-block-content {
            border-top-width: 0;
            padding-top: 0;
        }
    ";
            }
            // line 36
            echo "    ";
            if ((isset($context["customer_with_shipping_address"]) ? $context["customer_with_shipping_address"] : null)) {
                // line 37
                echo "        #simplecheckout_customer {
            margin-bottom: 0;
        }
        #simplecheckout_customer .simplecheckout-block-content {
            border-bottom-width: 0;
            padding-bottom: 0;
        }
        #simplecheckout_shipping_address div.checkout-heading {
            display: none;
        }
        #simplecheckout_shipping_address .simplecheckout-block-content {
            border-top-width: 0;
            padding-top: 0;
        }
    ";
            }
            // line 52
            echo "</style>
<div class=\"simple-content\">
";
        }
        // line 55
        echo "    ";
        if (( !(isset($context["ajax"]) ? $context["ajax"] : null) || ((isset($context["ajax"]) ? $context["ajax"] : null) && (isset($context["popup"]) ? $context["popup"] : null)))) {
            // line 56
            echo "    <script type=\"text/javascript\">
        ";
            // line 57
            if ((isset($context["popup"]) ? $context["popup"] : null)) {
                echo " 
            var simpleScriptsInterval = window.setInterval(function(){
                if (typeof jQuery !== 'undefined' && jQuery.isReady) {
                    window.clearInterval(simpleScriptsInterval);

                    if (typeof Simplecheckout !== \"function\") {
                        ";
                // line 63
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["simple_scripts"]) ? $context["simple_scripts"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
                    // line 64
                    echo "                            \$(\"head\").append('<script src=\"' + '";
                    echo $context["script"];
                    echo "' + '\"></' + 'script>');
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "
                        ";
                // line 67
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["simple_styles"]) ? $context["simple_styles"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
                    // line 68
                    echo "                            \$(\"head\").append('<link href=\"' + '";
                    echo $context["style"];
                    echo "' + '\" rel=\"stylesheet\"/>');
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "                         
                    }
                }
            },0);
        ";
            }
            // line 74
            echo "
        var startSimpleInterval_";
            // line 75
            echo (isset($context["group"]) ? $context["group"] : null);
            echo " = window.setInterval(function(){
            if (typeof jQuery !== 'undefined' && typeof Simplecheckout === \"function\" && jQuery.isReady) {
                window.clearInterval(startSimpleInterval_";
            // line 77
            echo (isset($context["group"]) ? $context["group"] : null);
            echo ");

                var simplecheckout_";
            // line 79
            echo (isset($context["group"]) ? $context["group"] : null);
            echo " = new Simplecheckout({
                    mainRoute: \"checkout/simplecheckout\",
                    additionalParams: \"";
            // line 81
            echo (isset($context["additional_params"]) ? $context["additional_params"] : null);
            echo "\",
                    additionalPath: \"";
            // line 82
            echo (isset($context["additional_path"]) ? $context["additional_path"] : null);
            echo "\",
                    mainUrl: \"";
            // line 83
            echo (isset($context["action"]) ? $context["action"] : null);
            echo "\",
                    mainContainer: \"#simplecheckout_form_";
            // line 84
            echo (isset($context["group"]) ? $context["group"] : null);
            echo "\",
                    currentTheme: \"";
            // line 85
            echo (isset($context["current_theme"]) ? $context["current_theme"] : null);
            echo "\",
                    loginBoxBefore: \"";
            // line 86
            echo ((((isset($context["login_type"]) ? $context["login_type"] : null) == "flat")) ? ("#simplecheckout_customer .simplecheckout-block-content:first") : (""));
            echo "\",
                    displayProceedText: ";
            // line 87
            echo (((isset($context["display_proceed_text"]) ? $context["display_proceed_text"] : null)) ? (1) : (0));
            echo ",
                    scrollToError: ";
            // line 88
            echo (((isset($context["scroll_to_error"]) ? $context["scroll_to_error"] : null)) ? (1) : (0));
            echo ",
                    scrollToPaymentForm: ";
            // line 89
            echo (((isset($context["scroll_to_payment_form"]) ? $context["scroll_to_payment_form"] : null)) ? (1) : (0));
            echo ",
                    notificationDefault: ";
            // line 90
            echo (((isset($context["notification_default"]) ? $context["notification_default"] : null)) ? (1) : (0));
            echo ",
                    notificationToasts: ";
            // line 91
            echo (((isset($context["notification_toasts"]) ? $context["notification_toasts"] : null)) ? (1) : (0));
            echo ",
                    notificationCheckForm: ";
            // line 92
            echo (((isset($context["notification_check_form"]) ? $context["notification_check_form"] : null)) ? (1) : (0));
            echo ",
                    notificationCheckFormText: \"";
            // line 93
            echo (isset($context["notification_check_form_text"]) ? $context["notification_check_form_text"] : null);
            echo "\",
                    useAutocomplete: ";
            // line 94
            echo (((isset($context["use_autocomplete"]) ? $context["use_autocomplete"] : null)) ? (1) : (0));
            echo ",
                    useStorage: ";
            // line 95
            echo (((isset($context["use_storage"]) ? $context["use_storage"] : null)) ? (1) : (0));
            echo ",
                    popup: ";
            // line 96
            echo ((((isset($context["popup"]) ? $context["popup"] : null) || (isset($context["as_module"]) ? $context["as_module"] : null))) ? (1) : (0));
            echo ",
                    agreementCheckboxStep: ";
            // line 97
            echo (((isset($context["agreement_checkbox_step"]) ? $context["agreement_checkbox_step"] : null)) ? ((isset($context["agreement_checkbox_step"]) ? $context["agreement_checkbox_step"] : null)) : ("'0'"));
            echo ",
                    enableAutoReloaingOfPaymentFrom: ";
            // line 98
            echo (((isset($context["enable_reloading_of_payment_form"]) ? $context["enable_reloading_of_payment_form"] : null)) ? (1) : (0));
            echo ",
                    javascriptCallback: function() {try{ ";
            // line 99
            echo (isset($context["javascript_callback"]) ? $context["javascript_callback"] : null);
            echo " } catch (e) {console.log(e)}},
                    stepButtons: ";
            // line 100
            echo (isset($context["step_buttons"]) ? $context["step_buttons"] : null);
            echo ",
                    menuType: ";
            // line 101
            echo (((isset($context["menu_type"]) ? $context["menu_type"] : null)) ? ((isset($context["menu_type"]) ? $context["menu_type"] : null)) : ("1"));
            echo ",
                    languageCode: \"";
            // line 102
            echo (isset($context["language_code"]) ? $context["language_code"] : null);
            echo "\"
                });

                if (typeof toastr !== 'undefined') {
                    toastr.options.positionClass = \"";
            // line 106
            echo (((isset($context["notification_position"]) ? $context["notification_position"] : null)) ? ((isset($context["notification_position"]) ? $context["notification_position"] : null)) : ("toast-top-right"));
            echo "\";
                    toastr.options.timeOut = \"";
            // line 107
            echo (((isset($context["notification_timeout"]) ? $context["notification_timeout"] : null)) ? ((isset($context["notification_timeout"]) ? $context["notification_timeout"] : null)) : ("5000"));
            echo "\";
                    toastr.options.progressBar = true;
                }

                \$(document).ajaxComplete(function(e, xhr, settings) {
                    if (settings.url.indexOf(\"route=module/cart&remove\") > 0 || (settings.url.indexOf(\"route=module/cart\") > 0 && settings.type == \"POST\") || settings.url.indexOf(\"route=checkout/cart/add\") > 0 || settings.url.indexOf(\"route=checkout/cart/remove\") > 0) {
                        window.resetSimpleQuantity = true;
                        simplecheckout_";
            // line 114
            echo (isset($context["group"]) ? $context["group"] : null);
            echo ".reloadAll();
                    }
                });

                \$(document).ajaxSend(function(e, xhr, settings) {
                    if (settings.url.indexOf(\"checkout/simplecheckout&group\") > 0 && typeof window.resetSimpleQuantity !== \"undefined\" && window.resetSimpleQuantity) {
                        settings.data = settings.data.replace(/quantity.+?&/g,\"\");
                        window.resetSimpleQuantity = false;
                    }
                });

                simplecheckout_";
            // line 125
            echo (isset($context["group"]) ? $context["group"] : null);
            echo ".init();
                
            }
        },0);
    </script>
    ";
        }
        // line 131
        echo "    <div id=\"simplecheckout_form_";
        echo (isset($context["group"]) ? $context["group"] : null);
        echo "\" ";
        echo ((((isset($context["display_error"]) ? $context["display_error"] : null) && (isset($context["has_error"]) ? $context["has_error"] : null))) ? ("data-error=\"true\"") : (""));
        echo " ";
        echo (((isset($context["logged"]) ? $context["logged"] : null)) ? ("data-logged=\"true\"") : (""));
        echo ">
        <div class=\"simplecheckout\">
            ";
        // line 133
        if ( !(isset($context["cart_empty"]) ? $context["cart_empty"] : null)) {
            // line 134
            echo "                ";
            if (((isset($context["steps_count"]) ? $context["steps_count"] : null) > 1)) {
                // line 135
                echo "                    ";
                if (((isset($context["menu_type"]) ? $context["menu_type"] : null) == "2")) {
                    // line 136
                    echo "                        <div id=\"simplecheckout_step_menu\" class=\"simplecheckout-vertical-menu simplecheckout-top-menu\">
                            ";
                    // line 137
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["steps_count"]) ? $context["steps_count"] : null)));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 138
                        echo "                                <div class=\"checkout-heading simple-step-vertical\" style=\"display:none\" data-onclick=\"gotoStep\" data-step=\"";
                        echo $context["i"];
                        echo "\"><h4 class=\"panel-title\">";
                        echo $this->getAttribute((isset($context["step_names"]) ? $context["step_names"] : null), ($context["i"] - 1), array(), "array");
                        echo "</h4></div>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 140
                    echo "                        </div>
                    ";
                } else {
                    // line 142
                    echo "                        <div id=\"simplecheckout_step_menu\">
                            ";
                    // line 143
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["steps_count"]) ? $context["steps_count"] : null)));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 144
                        echo "                                <span class=\"simple-step\" data-onclick=\"gotoStep\" data-step=\"";
                        echo $context["i"];
                        echo "\">";
                        echo $this->getAttribute((isset($context["step_names"]) ? $context["step_names"] : null), ($context["i"] - 1), array(), "array");
                        echo "</span>";
                        if (($context["i"] < (isset($context["steps_count"]) ? $context["steps_count"] : null))) {
                            echo "<span class=\"simple-step-delimiter\" data-step=\"";
                            echo ($context["i"] + 1);
                            echo "\"><img src=\"";
                            echo (isset($context["additional_path"]) ? $context["additional_path"] : null);
                            echo "catalog/view/image/next_gray.png\"></span>";
                        }
                        // line 145
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 146
                    echo "                        </div>
                    ";
                }
                // line 148
                echo "                ";
            }
            // line 149
            echo "
                ";
            // line 150
            if ((((isset($context["steps_count"]) ? $context["steps_count"] : null) > 1) && ((isset($context["menu_type"]) ? $context["menu_type"] : null) == "2"))) {
                // line 151
                echo "                    <div class=\"simplecheckout-steps-wrapper\">
                ";
            }
            // line 153
            echo "
                ";
            // line 154
            if (( !twig_test_empty((isset($context["errors"]) ? $context["errors"] : null)) && (isset($context["display_error"]) ? $context["display_error"] : null))) {
                // line 155
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 156
                    echo "                        <div class=\"alert alert-danger simplecheckout-warning-block\" data-error=\"true\">
                            ";
                    // line 157
                    echo $context["error"];
                    echo "
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 159
                echo "                 
                ";
            }
            // line 161
            echo "
                ";
            // line 163
            $context["replace"] = array("{three_column}" => "<div class=\"simplecheckout-three-column\">", "{/three_column}" => "</div>", "{left_column}" => "<div class=\"simplecheckout-left-column\">", "{/left_column}" => "</div>", "{right_column}" => "<div class=\"simplecheckout-right-column\">", "{/right_column}" => "</div>", "{step}" => "<div class=\"simplecheckout-step\">", "{/step}" => "</div>", "{clear_both}" => "<div style=\"width:100%;clear:both;height:1px\"></div>", "{customer}" => $this->getAttribute(            // line 173
(isset($context["simple_blocks"]) ? $context["simple_blocks"] : null), "customer", array(), "array"), "{payment_address}" => $this->getAttribute(            // line 174
(isset($context["simple_blocks"]) ? $context["simple_blocks"] : null), "payment_address", array(), "array"), "{shipping_address}" => $this->getAttribute(            // line 175
(isset($context["simple_blocks"]) ? $context["simple_blocks"] : null), "shipping_address", array(), "array"), "{cart}" => $this->getAttribute(            // line 176
(isset($context["simple_blocks"]) ? $context["simple_blocks"] : null), "cart", array(), "array"), "{shipping}" => $this->getAttribute(            // line 177
(isset($context["simple_blocks"]) ? $context["simple_blocks"] : null), "shipping", array(), "array"), "{payment}" => $this->getAttribute(            // line 178
(isset($context["simple_blocks"]) ? $context["simple_blocks"] : null), "payment", array(), "array"), "{agreement}" => $this->getAttribute(            // line 179
(isset($context["simple_blocks"]) ? $context["simple_blocks"] : null), "agreement", array(), "array"), "{help}" => $this->getAttribute(            // line 180
(isset($context["simple_blocks"]) ? $context["simple_blocks"] : null), "help", array(), "array"), "{summary}" => $this->getAttribute(            // line 181
(isset($context["simple_blocks"]) ? $context["simple_blocks"] : null), "summary", array(), "array"), "{comment}" => $this->getAttribute(            // line 182
(isset($context["simple_blocks"]) ? $context["simple_blocks"] : null), "comment", array(), "array"), "{payment_form}" => (("<div class=\"simplecheckout-block\" id=\"simplecheckout_payment_form\">" . $this->getAttribute(            // line 183
(isset($context["simple_blocks"]) ? $context["simple_blocks"] : null), "payment_form", array(), "array")) . "</div>"));
            // line 186
            echo "
                ";
            // line 187
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["simple_blocks"]) ? $context["simple_blocks"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 188
                echo "                    ";
                $context["key_clear"] = $context["key"];
                // line 189
                echo "                    ";
                $context["key"] = (("{" . $context["key"]) . "}");
                // line 190
                echo "                    ";
                if ( !$this->getAttribute((isset($context["replace"]) ? $context["replace"] : null), $context["key"], array(), "array", true, true)) {
                    // line 191
                    echo "                        ";
                    $context["replace"] = twig_array_merge((isset($context["replace"]) ? $context["replace"] : null), array($context["key"] => (((("<div class=\"simplecheckout-block\" id=\"" . (isset($context["key_clear"]) ? $context["key_clear"] : null)) . "\">") . $context["value"]) . "</div>")));
                    // line 192
                    echo "                    ";
                }
                // line 193
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 194
            echo "
                ";
            // line 195
            echo twig_replace_filter((isset($context["simple_template"]) ? $context["simple_template"] : null), (isset($context["replace"]) ? $context["replace"] : null));
            echo "
                
                <div id=\"simplecheckout_bottom\" style=\"width:100%;height:1px;clear:both;\"></div>
                <div class=\"simplecheckout-proceed-payment\" id=\"simplecheckout_proceed_payment\" style=\"display:none;\">";
            // line 198
            echo (isset($context["text_proceed_payment"]) ? $context["text_proceed_payment"] : null);
            echo "</div>
                
                ";
            // line 200
            if ((isset($context["display_agreement_checkbox"]) ? $context["display_agreement_checkbox"] : null)) {
                // line 201
                echo "                    <div class=\"alert alert-danger simplecheckout-warning-block\" id=\"agreement_warning\" ";
                if (((isset($context["display_error"]) ? $context["display_error"] : null) && (isset($context["has_error"]) ? $context["has_error"] : null))) {
                    echo "data-error=\"true\"";
                } else {
                    echo "style=\"display:none;\"";
                }
                echo ">
                        <div class=\"agreement_all\">
                            ";
                // line 203
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["error_warning_agreement"]) ? $context["error_warning_agreement"] : null));
                foreach ($context['_seq'] as $context["agreement_id"] => $context["warning_agreement"]) {
                    // line 204
                    echo "                                <div class=\"agreement_";
                    echo $context["agreement_id"];
                    echo "\">";
                    echo $context["warning_agreement"];
                    echo "</div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['agreement_id'], $context['warning_agreement'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 206
                echo "                        </div>                    
                    </div>
                ";
            }
            // line 208
            echo "  

                <div class=\"simplecheckout-button-block buttons\" id=\"buttons\">
                    <div class=\"simplecheckout-button-right\">
                        ";
            // line 212
            if ((isset($context["display_agreement_checkbox"]) ? $context["display_agreement_checkbox"] : null)) {
                // line 213
                echo "                            <span id=\"agreement_checkbox\">
                                ";
                // line 214
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["text_agreements"]) ? $context["text_agreements"] : null));
                foreach ($context['_seq'] as $context["agreement_id"] => $context["text_agreement"]) {
                    // line 215
                    echo "                                    <div class=\"checkbox\"><label><input type=\"checkbox\" name=\"agreements[]\" value=\"";
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
                // line 217
                echo "                            </span>
                        ";
            }
            // line 218
            echo "                
                        ";
            // line 219
            if (((isset($context["steps_count"]) ? $context["steps_count"] : null) > 1)) {
                // line 220
                echo "                        <a class=\"button btn-primary button_oc btn\" data-onclick=\"nextStep\" id=\"simplecheckout_button_next\"><span>";
                echo (isset($context["button_next"]) ? $context["button_next"] : null);
                echo "</span></a>
                        ";
            }
            // line 222
            echo "                        <a class=\"button btn-primary button_oc btn\" ";
            echo (((isset($context["block_order"]) ? $context["block_order"] : null)) ? ("disabled") : (""));
            echo " data-onclick=\"createOrder\" id=\"simplecheckout_button_confirm\"><span>";
            echo (isset($context["button_order"]) ? $context["button_order"] : null);
            echo "</span></a>
                    </div>
                    <div class=\"simplecheckout-button-left\">
                        ";
            // line 225
            if ((isset($context["display_back_button"]) ? $context["display_back_button"] : null)) {
                // line 226
                echo "                        <a class=\"button btn-primary button_oc btn\" data-onclick=\"backHistory\" id=\"simplecheckout_button_back\"><span>";
                echo (isset($context["button_back"]) ? $context["button_back"] : null);
                echo "</span></a>
                        ";
            }
            // line 228
            echo "                        ";
            if (((isset($context["steps_count"]) ? $context["steps_count"] : null) > 1)) {
                // line 229
                echo "                        <a class=\"button btn-primary button_oc btn\" data-onclick=\"previousStep\" id=\"simplecheckout_button_prev\"><span>";
                echo (isset($context["button_prev"]) ? $context["button_prev"] : null);
                echo "</span></a>
                        ";
            }
            // line 231
            echo "                    </div>
                </div>    

                ";
            // line 234
            if ((((isset($context["steps_count"]) ? $context["steps_count"] : null) > 1) && ((isset($context["menu_type"]) ? $context["menu_type"] : null) == "2"))) {
                // line 235
                echo "                    </div>
                ";
            }
            // line 237
            echo "                
                ";
            // line 238
            if ((((isset($context["steps_count"]) ? $context["steps_count"] : null) > 1) && ((isset($context["menu_type"]) ? $context["menu_type"] : null) == "2"))) {
                // line 239
                echo "                    <div id=\"simplecheckout_step_menu\" class=\"simplecheckout-vertical-menu simplecheckout-bottom-menu\">
                        ";
                // line 240
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["steps_count"]) ? $context["steps_count"] : null)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 241
                    echo "                            <div class=\"checkout-heading simple-step-vertical\" style=\"display:none\" data-onclick=\"gotoStep\" data-step=\"";
                    echo $context["i"];
                    echo "\"><h4 class=\"panel-title\">";
                    echo $this->getAttribute((isset($context["step_names"]) ? $context["step_names"] : null), ($context["i"] - 1), array(), "array");
                    echo "</h4></div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 243
                echo "                    </div>
                ";
            }
            // line 244
            echo "           
            
            ";
        } else {
            // line 247
            echo "                <div class=\"content\">";
            echo (isset($context["text_error"]) ? $context["text_error"] : null);
            echo "</div>
                <div style=\"display:none;\" id=\"simplecheckout_cart_total\">";
            // line 248
            echo (isset($context["cart_total"]) ? $context["cart_total"] : null);
            echo "</div>
                ";
            // line 249
            if ((isset($context["display_weight"]) ? $context["display_weight"] : null)) {
                // line 250
                echo "                    <div style=\"display:none;\" id=\"simplecheckout_cart_weight\">";
                echo (isset($context["weight"]) ? $context["weight"] : null);
                echo "</div>
                ";
            }
            // line 252
            echo "                ";
            if (( !(isset($context["popup"]) ? $context["popup"] : null) &&  !(isset($context["as_module"]) ? $context["as_module"] : null))) {
                // line 253
                echo "                    <div class=\"simplecheckout-button-block buttons\">
                        <div class=\"simplecheckout-button-right right\"><a href=\"";
                // line 254
                echo (isset($context["continue"]) ? $context["continue"] : null);
                echo "\" class=\"button btn-primary button_oc btn\"><span>";
                echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
                echo "</span></a></div>
                    </div>
                ";
            }
            // line 257
            echo "            ";
        }
        // line 258
        echo "        </div>
    </div>
";
        // line 260
        if ((( !(isset($context["ajax"]) ? $context["ajax"] : null) &&  !(isset($context["popup"]) ? $context["popup"] : null)) &&  !(isset($context["as_module"]) ? $context["as_module"] : null))) {
            // line 261
            echo "</div>
";
            // line 262
            $this->loadTemplate((isset($context["simple_footer"]) ? $context["simple_footer"] : null), "default/template/checkout/simplecheckout.twig", 262)->display($context);
        }
    }

    public function getTemplateName()
    {
        return "default/template/checkout/simplecheckout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  652 => 262,  649 => 261,  647 => 260,  643 => 258,  640 => 257,  632 => 254,  629 => 253,  626 => 252,  620 => 250,  618 => 249,  614 => 248,  609 => 247,  604 => 244,  600 => 243,  589 => 241,  585 => 240,  582 => 239,  580 => 238,  577 => 237,  573 => 235,  571 => 234,  566 => 231,  560 => 229,  557 => 228,  551 => 226,  549 => 225,  540 => 222,  534 => 220,  532 => 219,  529 => 218,  525 => 217,  512 => 215,  508 => 214,  505 => 213,  503 => 212,  497 => 208,  492 => 206,  481 => 204,  477 => 203,  467 => 201,  465 => 200,  460 => 198,  454 => 195,  451 => 194,  445 => 193,  442 => 192,  439 => 191,  436 => 190,  433 => 189,  430 => 188,  426 => 187,  423 => 186,  421 => 183,  420 => 182,  419 => 181,  418 => 180,  417 => 179,  416 => 178,  415 => 177,  414 => 176,  413 => 175,  412 => 174,  411 => 173,  410 => 163,  407 => 161,  403 => 159,  394 => 157,  391 => 156,  386 => 155,  384 => 154,  381 => 153,  377 => 151,  375 => 150,  372 => 149,  369 => 148,  365 => 146,  359 => 145,  346 => 144,  342 => 143,  339 => 142,  335 => 140,  324 => 138,  320 => 137,  317 => 136,  314 => 135,  311 => 134,  309 => 133,  299 => 131,  290 => 125,  276 => 114,  266 => 107,  262 => 106,  255 => 102,  251 => 101,  247 => 100,  243 => 99,  239 => 98,  235 => 97,  231 => 96,  227 => 95,  223 => 94,  219 => 93,  215 => 92,  211 => 91,  207 => 90,  203 => 89,  199 => 88,  195 => 87,  191 => 86,  187 => 85,  183 => 84,  179 => 83,  175 => 82,  171 => 81,  166 => 79,  161 => 77,  156 => 75,  153 => 74,  146 => 69,  137 => 68,  133 => 67,  130 => 66,  121 => 64,  117 => 63,  108 => 57,  105 => 56,  102 => 55,  97 => 52,  80 => 37,  77 => 36,  60 => 21,  57 => 20,  50 => 16,  46 => 14,  43 => 13,  36 => 9,  32 => 7,  30 => 6,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if not ajax and not popup and not as_module %}*/
/* {% set simple_page = 'simplecheckout' %}*/
/* {% set heading_title = heading_title  ~ (display_weight ? '&nbsp;(<span id="weight">' ~ weight  ~ '</span>)' : '') %}*/
/* {% include simple_header %}*/
/* <style>*/
/*     {% if left_column_width %}*/
/*         @media only screen and (min-width:1024px) {*/
/*             .simplecheckout-left-column {*/
/*                 width: {{ left_column_width }}%;*/
/*             }*/
/*         }*/
/*     {% endif %}*/
/*     {% if right_column_width %}*/
/*         @media only screen and (min-width:1024px) {*/
/*             .simplecheckout-right-column {*/
/*                 width: {{ right_column_width }}%;*/
/*             }*/
/*         }*/
/*     {% endif %}*/
/*     {% if customer_with_payment_address %}*/
/*         #simplecheckout_customer {*/
/*             margin-bottom: 0;*/
/*         }*/
/*         #simplecheckout_customer .simplecheckout-block-content {*/
/*             border-bottom-width: 0;*/
/*             padding-bottom: 0;*/
/*         }*/
/*         #simplecheckout_payment_address div.checkout-heading {*/
/*             display: none;*/
/*         }*/
/*         #simplecheckout_payment_address .simplecheckout-block-content {*/
/*             border-top-width: 0;*/
/*             padding-top: 0;*/
/*         }*/
/*     {% endif %}*/
/*     {% if customer_with_shipping_address %}*/
/*         #simplecheckout_customer {*/
/*             margin-bottom: 0;*/
/*         }*/
/*         #simplecheckout_customer .simplecheckout-block-content {*/
/*             border-bottom-width: 0;*/
/*             padding-bottom: 0;*/
/*         }*/
/*         #simplecheckout_shipping_address div.checkout-heading {*/
/*             display: none;*/
/*         }*/
/*         #simplecheckout_shipping_address .simplecheckout-block-content {*/
/*             border-top-width: 0;*/
/*             padding-top: 0;*/
/*         }*/
/*     {% endif %}*/
/* </style>*/
/* <div class="simple-content">*/
/* {% endif %}*/
/*     {% if not ajax or (ajax and popup) %}*/
/*     <script type="text/javascript">*/
/*         {% if popup %} */
/*             var simpleScriptsInterval = window.setInterval(function(){*/
/*                 if (typeof jQuery !== 'undefined' && jQuery.isReady) {*/
/*                     window.clearInterval(simpleScriptsInterval);*/
/* */
/*                     if (typeof Simplecheckout !== "function") {*/
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
/*         var startSimpleInterval_{{ group }} = window.setInterval(function(){*/
/*             if (typeof jQuery !== 'undefined' && typeof Simplecheckout === "function" && jQuery.isReady) {*/
/*                 window.clearInterval(startSimpleInterval_{{ group }});*/
/* */
/*                 var simplecheckout_{{ group }} = new Simplecheckout({*/
/*                     mainRoute: "checkout/simplecheckout",*/
/*                     additionalParams: "{{ additional_params }}",*/
/*                     additionalPath: "{{ additional_path }}",*/
/*                     mainUrl: "{{ action }}",*/
/*                     mainContainer: "#simplecheckout_form_{{ group }}",*/
/*                     currentTheme: "{{ current_theme }}",*/
/*                     loginBoxBefore: "{{ login_type == 'flat' ? '#simplecheckout_customer .simplecheckout-block-content:first' : '' }}",*/
/*                     displayProceedText: {{ display_proceed_text ? 1 : 0 }},*/
/*                     scrollToError: {{ scroll_to_error ? 1 : 0 }},*/
/*                     scrollToPaymentForm: {{ scroll_to_payment_form ? 1 : 0 }},*/
/*                     notificationDefault: {{ notification_default ? 1 : 0 }},*/
/*                     notificationToasts: {{ notification_toasts ? 1 : 0 }},*/
/*                     notificationCheckForm: {{ notification_check_form ? 1 : 0 }},*/
/*                     notificationCheckFormText: "{{ notification_check_form_text }}",*/
/*                     useAutocomplete: {{ use_autocomplete ? 1 : 0 }},*/
/*                     useStorage: {{ use_storage ? 1 : 0 }},*/
/*                     popup: {{ popup or as_module ? 1 : 0 }},*/
/*                     agreementCheckboxStep: {{ agreement_checkbox_step ? agreement_checkbox_step : '\'0\'' }},*/
/*                     enableAutoReloaingOfPaymentFrom: {{ enable_reloading_of_payment_form ? 1 : 0 }},*/
/*                     javascriptCallback: function() {try{ {{ javascript_callback }} } catch (e) {console.log(e)}},*/
/*                     stepButtons: {{ step_buttons }},*/
/*                     menuType: {{ menu_type ? menu_type : '1' }},*/
/*                     languageCode: "{{ language_code }}"*/
/*                 });*/
/* */
/*                 if (typeof toastr !== 'undefined') {*/
/*                     toastr.options.positionClass = "{{ notification_position ? notification_position : 'toast-top-right' }}";*/
/*                     toastr.options.timeOut = "{{ notification_timeout ? notification_timeout : '5000' }}";*/
/*                     toastr.options.progressBar = true;*/
/*                 }*/
/* */
/*                 $(document).ajaxComplete(function(e, xhr, settings) {*/
/*                     if (settings.url.indexOf("route=module/cart&remove") > 0 || (settings.url.indexOf("route=module/cart") > 0 && settings.type == "POST") || settings.url.indexOf("route=checkout/cart/add") > 0 || settings.url.indexOf("route=checkout/cart/remove") > 0) {*/
/*                         window.resetSimpleQuantity = true;*/
/*                         simplecheckout_{{ group }}.reloadAll();*/
/*                     }*/
/*                 });*/
/* */
/*                 $(document).ajaxSend(function(e, xhr, settings) {*/
/*                     if (settings.url.indexOf("checkout/simplecheckout&group") > 0 && typeof window.resetSimpleQuantity !== "undefined" && window.resetSimpleQuantity) {*/
/*                         settings.data = settings.data.replace(/quantity.+?&/g,"");*/
/*                         window.resetSimpleQuantity = false;*/
/*                     }*/
/*                 });*/
/* */
/*                 simplecheckout_{{ group }}.init();*/
/*                 */
/*             }*/
/*         },0);*/
/*     </script>*/
/*     {% endif %}*/
/*     <div id="simplecheckout_form_{{ group }}" {{ display_error and has_error ? 'data-error="true"' : '' }} {{ logged ? 'data-logged="true"' : '' }}>*/
/*         <div class="simplecheckout">*/
/*             {% if not cart_empty %}*/
/*                 {% if steps_count > 1 %}*/
/*                     {% if menu_type == '2' %}*/
/*                         <div id="simplecheckout_step_menu" class="simplecheckout-vertical-menu simplecheckout-top-menu">*/
/*                             {% for i in 1..steps_count %}*/
/*                                 <div class="checkout-heading simple-step-vertical" style="display:none" data-onclick="gotoStep" data-step="{{ i }}"><h4 class="panel-title">{{ step_names[i-1] }}</h4></div>*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                     {% else %}*/
/*                         <div id="simplecheckout_step_menu">*/
/*                             {% for i in 1..steps_count %}*/
/*                                 <span class="simple-step" data-onclick="gotoStep" data-step="{{ i }}">{{ step_names[i-1] }}</span>{% if i < steps_count %}<span class="simple-step-delimiter" data-step="{{ i+1 }}"><img src="{{ additional_path }}catalog/view/image/next_gray.png"></span>{% endif %}*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                     {% endif %}*/
/*                 {% endif %}*/
/* */
/*                 {% if steps_count > 1 and menu_type == '2' %}*/
/*                     <div class="simplecheckout-steps-wrapper">*/
/*                 {% endif %}*/
/* */
/*                 {% if errors is not empty and display_error %}*/
/*                     {% for error in errors %}*/
/*                         <div class="alert alert-danger simplecheckout-warning-block" data-error="true">*/
/*                             {{ error }}*/
/*                         </div>*/
/*                     {% endfor %}                 */
/*                 {% endif %}*/
/* */
/*                 {%*/
/*                     set replace = {*/
/*                         '{three_column}'     : '<div class="simplecheckout-three-column">',*/
/*                         '{/three_column}'    : '</div>',*/
/*                         '{left_column}'      : '<div class="simplecheckout-left-column">',*/
/*                         '{/left_column}'     : '</div>',*/
/*                         '{right_column}'     : '<div class="simplecheckout-right-column">',*/
/*                         '{/right_column}'    : '</div>',*/
/*                         '{step}'             : '<div class="simplecheckout-step">',*/
/*                         '{/step}'            : '</div>',*/
/*                         '{clear_both}'       : '<div style="width:100%;clear:both;height:1px"></div>',*/
/*                         '{customer}'         : simple_blocks['customer'],*/
/*                         '{payment_address}'  : simple_blocks['payment_address'],*/
/*                         '{shipping_address}' : simple_blocks['shipping_address'],*/
/*                         '{cart}'             : simple_blocks['cart'],*/
/*                         '{shipping}'         : simple_blocks['shipping'],*/
/*                         '{payment}'          : simple_blocks['payment'],*/
/*                         '{agreement}'        : simple_blocks['agreement'],*/
/*                         '{help}'             : simple_blocks['help'],*/
/*                         '{summary}'          : simple_blocks['summary'],*/
/*                         '{comment}'          : simple_blocks['comment'],*/
/*                         '{payment_form}'     : '<div class="simplecheckout-block" id="simplecheckout_payment_form">' ~ simple_blocks['payment_form'] ~ '</div>'*/
/*                     }*/
/*                 %}*/
/* */
/*                 {% for key, value in simple_blocks %}*/
/*                     {% set key_clear = key %}*/
/*                     {% set key = '{' ~ key ~ '}' %}*/
/*                     {% if replace[key] is not defined %}*/
/*                         {% set replace = replace|merge({(key): '<div class="simplecheckout-block" id="' ~ key_clear ~ '">' ~ value ~ '</div>'}) %}*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/* */
/*                 {{ simple_template|replace(replace) }}*/
/*                 */
/*                 <div id="simplecheckout_bottom" style="width:100%;height:1px;clear:both;"></div>*/
/*                 <div class="simplecheckout-proceed-payment" id="simplecheckout_proceed_payment" style="display:none;">{{ text_proceed_payment }}</div>*/
/*                 */
/*                 {% if display_agreement_checkbox %}*/
/*                     <div class="alert alert-danger simplecheckout-warning-block" id="agreement_warning" {% if display_error and has_error %}data-error="true"{% else %}style="display:none;"{% endif %}>*/
/*                         <div class="agreement_all">*/
/*                             {% for agreement_id, warning_agreement in error_warning_agreement %}*/
/*                                 <div class="agreement_{{ agreement_id }}">{{ warning_agreement }}</div>*/
/*                             {% endfor %}*/
/*                         </div>                    */
/*                     </div>*/
/*                 {% endif %}  */
/* */
/*                 <div class="simplecheckout-button-block buttons" id="buttons">*/
/*                     <div class="simplecheckout-button-right">*/
/*                         {% if display_agreement_checkbox %}*/
/*                             <span id="agreement_checkbox">*/
/*                                 {% for agreement_id, text_agreement in text_agreements %}*/
/*                                     <div class="checkbox"><label><input type="checkbox" name="agreements[]" value="{{ agreement_id }}" {{ agreement_id in agreements ? 'checked="checked"' : '' }} />{{ text_agreement }}</label></div>*/
/*                                 {% endfor %}*/
/*                             </span>*/
/*                         {% endif %}                */
/*                         {% if steps_count > 1 %}*/
/*                         <a class="button btn-primary button_oc btn" data-onclick="nextStep" id="simplecheckout_button_next"><span>{{ button_next }}</span></a>*/
/*                         {% endif %}*/
/*                         <a class="button btn-primary button_oc btn" {{ block_order ? 'disabled' : ''}} data-onclick="createOrder" id="simplecheckout_button_confirm"><span>{{ button_order }}</span></a>*/
/*                     </div>*/
/*                     <div class="simplecheckout-button-left">*/
/*                         {% if display_back_button %}*/
/*                         <a class="button btn-primary button_oc btn" data-onclick="backHistory" id="simplecheckout_button_back"><span>{{ button_back }}</span></a>*/
/*                         {% endif %}*/
/*                         {% if steps_count > 1 %}*/
/*                         <a class="button btn-primary button_oc btn" data-onclick="previousStep" id="simplecheckout_button_prev"><span>{{ button_prev }}</span></a>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 </div>    */
/* */
/*                 {% if steps_count > 1 and menu_type == '2' %}*/
/*                     </div>*/
/*                 {% endif %}*/
/*                 */
/*                 {% if steps_count > 1 and menu_type == '2' %}*/
/*                     <div id="simplecheckout_step_menu" class="simplecheckout-vertical-menu simplecheckout-bottom-menu">*/
/*                         {% for i in 1..steps_count %}*/
/*                             <div class="checkout-heading simple-step-vertical" style="display:none" data-onclick="gotoStep" data-step="{{ i }}"><h4 class="panel-title">{{ step_names[i-1] }}</h4></div>*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                 {% endif %}           */
/*             */
/*             {% else %}*/
/*                 <div class="content">{{ text_error }}</div>*/
/*                 <div style="display:none;" id="simplecheckout_cart_total">{{ cart_total }}</div>*/
/*                 {% if display_weight %}*/
/*                     <div style="display:none;" id="simplecheckout_cart_weight">{{ weight }}</div>*/
/*                 {% endif %}*/
/*                 {% if not popup and not as_module %}*/
/*                     <div class="simplecheckout-button-block buttons">*/
/*                         <div class="simplecheckout-button-right right"><a href="{{ continue }}" class="button btn-primary button_oc btn"><span>{{ button_continue }}</span></a></div>*/
/*                     </div>*/
/*                 {% endif %}*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* {% if not ajax and not popup and not as_module %}*/
/* </div>*/
/* {% include simple_footer %}*/
/* {% endif %}*/
