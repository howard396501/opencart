<?php

/* default/template/extension/payment/ecpaypayment_input.twig */
class __TwigTemplate_5fa62b70aa134d8815fdd3fb1cc4ee6eafb5c6ae2397af79cb56a46ec7e4e1bd extends Twig_Template
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
        if (($this->getAttribute((isset($context["payment_method"]) ? $context["payment_method"] : null), "code", array()) == (isset($context["module_name"]) ? $context["module_name"] : null))) {
            // line 2
            echo "<select name=\"";
            echo (isset($context["name_prefix"]) ? $context["name_prefix"] : null);
            echo "_choose_payment\" id=\"";
            echo (isset($context["id_prefix"]) ? $context["id_prefix"] : null);
            echo "-choose-payment\" class=\"form-control\">
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ecpaypayment_payment_methods"]) ? $context["ecpaypayment_payment_methods"] : null));
            foreach ($context['_seq'] as $context["payment_type"] => $context["payment_desc"]) {
                // line 4
                echo "        <option value=\"";
                echo $context["payment_type"];
                echo "\">";
                echo $context["payment_desc"];
                echo "</option>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['payment_type'], $context['payment_desc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "</select>

<script type=\"text/javascript\">
    \$(document).ready(function() {
        \$(\"#button-payment-method\").click(function() {
            var ecpayPaymentRadio = \$(\"input:radio[value=\\\"";
            // line 11
            echo (isset($context["module_name"]) ? $context["module_name"] : null);
            echo "\\\"]:checked\");
            var postUrlParent = 'index.php?route=extension/payment/";
            // line 12
            echo (isset($context["module_name"]) ? $context["module_name"] : null);
            echo "/';
            var postUrl = '';
            var postData = '';
            if (ecpayPaymentRadio.length > 0) {
                // save chosen payment
                var chosenPayment = \$(\"#";
            // line 17
            echo (isset($context["id_prefix"]) ? $context["id_prefix"] : null);
            echo "-choose-payment\").find(\":selected\").val();
                postUrl = postUrlParent + 'savePayment';
                postData = 'cp=' + chosenPayment;
            } else {
                // clean ECPay session
                postUrl = postUrlParent + 'cleanSession';
            }
            var response = simpleAjax(postData, postUrl);
        });
    });

    // Simple Ajax
    function simpleAjax(postData, postUrl) {
        var parsed = false;
        var async = false;
        jQuery.ajax({
            type: 'post',
            async : async,
            url: postUrl,
            data: postData,
            success: function (response) {
                parsed = JSON.parse(response);
            },
            error: function(errorObject, errorText, errorHTTP) {
                // console.log('error: ' . errorText);
            }
        });
        return parsed;
    }
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/payment/ecpaypayment_input.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 17,  54 => 12,  50 => 11,  43 => 6,  32 => 4,  28 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if payment_method.code == module_name %}*/
/* <select name="{{ name_prefix }}_choose_payment" id="{{ id_prefix }}-choose-payment" class="form-control">*/
/*     {% for payment_type, payment_desc in ecpaypayment_payment_methods %}*/
/*         <option value="{{ payment_type }}">{{ payment_desc }}</option>*/
/*     {% endfor %}*/
/* </select>*/
/* */
/* <script type="text/javascript">*/
/*     $(document).ready(function() {*/
/*         $("#button-payment-method").click(function() {*/
/*             var ecpayPaymentRadio = $("input:radio[value=\"{{ module_name }}\"]:checked");*/
/*             var postUrlParent = 'index.php?route=extension/payment/{{ module_name }}/';*/
/*             var postUrl = '';*/
/*             var postData = '';*/
/*             if (ecpayPaymentRadio.length > 0) {*/
/*                 // save chosen payment*/
/*                 var chosenPayment = $("#{{ id_prefix }}-choose-payment").find(":selected").val();*/
/*                 postUrl = postUrlParent + 'savePayment';*/
/*                 postData = 'cp=' + chosenPayment;*/
/*             } else {*/
/*                 // clean ECPay session*/
/*                 postUrl = postUrlParent + 'cleanSession';*/
/*             }*/
/*             var response = simpleAjax(postData, postUrl);*/
/*         });*/
/*     });*/
/* */
/*     // Simple Ajax*/
/*     function simpleAjax(postData, postUrl) {*/
/*         var parsed = false;*/
/*         var async = false;*/
/*         jQuery.ajax({*/
/*             type: 'post',*/
/*             async : async,*/
/*             url: postUrl,*/
/*             data: postData,*/
/*             success: function (response) {*/
/*                 parsed = JSON.parse(response);*/
/*             },*/
/*             error: function(errorObject, errorText, errorHTTP) {*/
/*                 // console.log('error: ' . errorText);*/
/*             }*/
/*         });*/
/*         return parsed;*/
/*     }*/
/* </script>*/
/* {% endif %}*/
