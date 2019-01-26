<?php

/* extension/payment/ecpaypayment.twig */
class __TwigTemplate_0b28ecd091c7a1f5a419073b8b026a91b4bc75e3270e8c4bf9cb73d291f99d14 extends Twig_Template
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
";
        // line 2
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"pull-right\">
                <button type=\"submit\" form=\"form-popular\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\">
                    <i class=\"fa fa-save\"></i>
                </button>
                </button>
                <a href=\"";
        // line 11
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\">
                    <i class=\"fa fa-reply\"></i>
                </a>
            </div>

            <h1>";
        // line 16
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>

            <ul class=\"breadcrumb\">
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 20
            echo "                <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
    ";
        // line 26
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 27
            echo "        <div class=\"alert alert-danger\">
            <i class=\"fa fa-exclamation-circle\"></i> ";
            // line 28
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
    ";
        }
        // line 32
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">
                    <i class=\"fa fa-pencil\"></i> ";
        // line 35
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "
                </h3>
            </div>

            <div class=\"panel-body\">
                <form action=\"";
        // line 40
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-";
        echo (isset($context["id_prefix"]) ? $context["id_prefix"] : null);
        echo "\" class=\"form-horizontal\">
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-";
        // line 42
        echo (isset($context["id_prefix"]) ? $context["id_prefix"] : null);
        echo "-status\">
                            ";
        // line 43
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "
                        </label>
                        <div class=\"col-sm-8\">
                            <select name=\"";
        // line 46
        echo (isset($context["name_prefix"]) ? $context["name_prefix"] : null);
        echo "_status\" id=\"input-";
        echo (isset($context["id_prefix"]) ? $context["id_prefix"] : null);
        echo "-status\" class=\"form-control\">
                        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["module_statuses"]) ? $context["module_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["temp_status"]) {
            // line 48
            echo "                            ";
            if (($this->getAttribute($context["temp_status"], "value", array()) == (isset($context["status"]) ? $context["status"] : null))) {
                // line 49
                echo "                                <option value=\"";
                echo $this->getAttribute($context["temp_status"], "value", array());
                echo "\" selected=\"selected\">
                                    ";
                // line 50
                echo $this->getAttribute($context["temp_status"], "text", array());
                echo "
                                </option>
                            ";
            } else {
                // line 53
                echo "                                <option value=\"";
                echo $this->getAttribute($context["temp_status"], "value", array());
                echo "\">
                                    ";
                // line 54
                echo $this->getAttribute($context["temp_status"], "text", array());
                echo "
                                </option>
                            ";
            }
            // line 57
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['temp_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                            </select>
                        </div>
                    </div>

                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-";
        // line 63
        echo (isset($context["id_prefix"]) ? $context["id_prefix"] : null);
        echo "-merchant-id\">
                            <span data-toggle=\"tooltip\" title=\"Merchant ID\">
                                ";
        // line 65
        echo (isset($context["entry_merchant_id"]) ? $context["entry_merchant_id"] : null);
        echo "
                            </span>
                        </label>
                        <div class=\"col-sm-8\">
                            <input type=\"text\" name=\"";
        // line 69
        echo (isset($context["name_prefix"]) ? $context["name_prefix"] : null);
        echo "_merchant_id\" value=\"";
        echo (isset($context["merchant_id"]) ? $context["merchant_id"] : null);
        echo "\" placeholder=\"Merchant ID\" id=\"input-";
        echo (isset($context["id_prefix"]) ? $context["id_prefix"] : null);
        echo "-merchant-id\" class=\"form-control\" />
                        </div>
                        <div class=\"text-danger\">
                            ";
        // line 72
        echo (isset($context["merchant_id_error"]) ? $context["merchant_id_error"] : null);
        echo "
                        </div>
                    </div>
                    
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-";
        // line 77
        echo (isset($context["id_prefix"]) ? $context["id_prefix"] : null);
        echo "-hash-key\">
                            <span data-toggle=\"tooltip\" title=\"Hash Key\">
                                ";
        // line 79
        echo (isset($context["entry_hash_key"]) ? $context["entry_hash_key"] : null);
        echo "
                            </span>
                        </label>
                        <div class=\"col-sm-8\">
                            <input type=\"text\" name=\"";
        // line 83
        echo (isset($context["name_prefix"]) ? $context["name_prefix"] : null);
        echo "_hash_key\" value=\"";
        echo (isset($context["hash_key"]) ? $context["hash_key"] : null);
        echo "\" placeholder=\"Hash Key\" id=\"input-";
        echo (isset($context["id_prefix"]) ? $context["id_prefix"] : null);
        echo "-hash-key\" class=\"form-control\" />
                        </div>
                        <div class=\"text-danger\">
                            ";
        // line 86
        echo (isset($context["hash_key_error"]) ? $context["hash_key_error"] : null);
        echo "
                        </div>
                    </div>

                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-";
        // line 91
        echo (isset($context["id_prefix"]) ? $context["id_prefix"] : null);
        echo "-hash-iv\">
                            <span data-toggle=\"tooltip\" title=\"Hash IV\">
                                ";
        // line 93
        echo (isset($context["entry_hash_iv"]) ? $context["entry_hash_iv"] : null);
        echo "
                            </span>
                        </label>
                        <div class=\"col-sm-8\">
                            <input type=\"text\" name=\"";
        // line 97
        echo (isset($context["name_prefix"]) ? $context["name_prefix"] : null);
        echo "_hash_iv\" value=\"";
        echo (isset($context["hash_iv"]) ? $context["hash_iv"] : null);
        echo "\" placeholder=\"Hash IV\" id=\"input-";
        echo (isset($context["id_prefix"]) ? $context["id_prefix"] : null);
        echo "-hash-iv\" class=\"form-control\" />
                        </div>
                        <div class=\"text-danger\">
                            ";
        // line 100
        echo (isset($context["hash_iv_error"]) ? $context["hash_iv_error"] : null);
        echo "
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-";
        // line 105
        echo (isset($context["id_prefix"]) ? $context["id_prefix"] : null);
        echo "-methods\">
                            ";
        // line 106
        echo (isset($context["entry_payment_methods"]) ? $context["entry_payment_methods"] : null);
        echo "
                        </label>
                        <div class=\"col-sm-8\">
                            ";
        // line 109
        if ($this->getAttribute((isset($context["payment_methods"]) ? $context["payment_methods"] : null), "Credit", array(), "any", true, true)) {
            // line 110
            echo "                                <input type=\"checkbox\" name=\"";
            echo (isset($context["name_prefix"]) ? $context["name_prefix"] : null);
            echo "_payment_methods[Credit]\" value=\"credit\" checked=\"checked\" />
                            ";
        } else {
            // line 112
            echo "                                <input type=\"checkbox\" name=\"";
            echo (isset($context["name_prefix"]) ? $context["name_prefix"] : null);
            echo "_payment_methods[Credit]\" value=\"credit\" />
                            ";
        }
        // line 114
        echo "                            <label class=\"control-label\" for=\"input-";
        echo (isset($context["id_prefix"]) ? $context["id_prefix"] : null);
        echo "-payment-methods\">
                                &nbsp;";
        // line 115
        echo (isset($context["text_credit"]) ? $context["text_credit"] : null);
        echo "
                            </label>

                            <br />

                            ";
        // line 120
        if ($this->getAttribute((isset($context["payment_methods"]) ? $context["payment_methods"] : null), "Credit_3", array(), "any", true, true)) {
            // line 121
            echo "                                <input type=\"checkbox\" name=\"";
            echo (isset($context["name_prefix"]) ? $context["name_prefix"] : null);
            echo "_payment_methods[Credit_3]\" value=\"credit_3\" checked=\"checked\" />
                            ";
        } else {
            // line 123
            echo "                                <input type=\"checkbox\" name=\"";
            echo (isset($context["name_prefix"]) ? $context["name_prefix"] : null);
            echo "_payment_methods[Credit_3]\" value=\"credit_3\" />
                            ";
        }
        // line 125
        echo "                            <label class=\"control-label\" for=\"input-";
        echo (isset($context["id_prefix"]) ? $context["id_prefix"] : null);
        echo "-payment-methods\">
                                &nbsp;";
        // line 126
        echo (isset($context["text_credit_3"]) ? $context["text_credit_3"] : null);
        echo "
                            </label>

                            <br />

                            ";
        // line 131
        if ($this->getAttribute((isset($context["payment_methods"]) ? $context["payment_methods"] : null), "Credit_6", array(), "any", true, true)) {
            // line 132
            echo "                                <input type=\"checkbox\" name=\"";
            echo (isset($context["name_prefix"]) ? $context["name_prefix"] : null);
            echo "_payment_methods[Credit_6]\" value=\"credit_6\" checked=\"checked\" />
                            ";
        } else {
            // line 134
            echo "                                <input type=\"checkbox\" name=\"";
            echo (isset($context["name_prefix"]) ? $context["name_prefix"] : null);
            echo "_payment_methods[Credit_6]\" value=\"credit_6\" />
                            ";
        }
        // line 136
        echo "                            <label class=\"control-label\" for=\"input-";
        echo (isset($context["id_prefix"]) ? $context["id_prefix"] : null);
        echo "-payment-methods\">
                                &nbsp;";
        // line 137
        echo (isset($context["text_credit_6"]) ? $context["text_credit_6"] : null);
        echo "
                            </label>

                            <br />

                            ";
        // line 142
        if ($this->getAttribute((isset($context["payment_methods"]) ? $context["payment_methods"] : null), "Credit_12", array(), "any", true, true)) {
            // line 143
            echo "                                <input type=\"checkbox\" name=\"";
            echo (isset($context["name_prefix"]) ? $context["name_prefix"] : null);
            echo "_payment_methods[Credit_12]\" value=\"credit_12\" checked=\"checked\" />
                            ";
        } else {
            // line 145
            echo "                                <input type=\"checkbox\" name=\"";
            echo (isset($context["name_prefix"]) ? $context["name_prefix"] : null);
            echo "_payment_methods[Credit_12]\" value=\"credit_12\" />
                            ";
        }
        // line 147
        echo "                            <label class=\"control-label\" for=\"input-";
        echo (isset($context["id_prefix"]) ? $context["id_prefix"] : null);
        echo "-payment-methods\">
                                &nbsp;";
        // line 148
        echo (isset($context["text_credit_12"]) ? $context["text_credit_12"] : null);
        echo "
                            </label>

                            <br />

                            ";
        // line 153
        if ($this->getAttribute((isset($context["payment_methods"]) ? $context["payment_methods"] : null), "Credit_18", array(), "any", true, true)) {
            // line 154
            echo "                                <input type=\"checkbox\" name=\"";
            echo (isset($context["name_prefix"]) ? $context["name_prefix"] : null);
            echo "_payment_methods[Credit_18]\" value=\"credit_18\" checked=\"checked\" />
                            ";
        } else {
            // line 156
            echo "                                <input type=\"checkbox\" name=\"";
            echo (isset($context["name_prefix"]) ? $context["name_prefix"] : null);
            echo "_payment_methods[Credit_18]\" value=\"credit_18\" />
                            ";
        }
        // line 158
        echo "                            <label class=\"control-label\" for=\"input-";
        echo (isset($context["id_prefix"]) ? $context["id_prefix"] : null);
        echo "-payment-methods\">
                                &nbsp;";
        // line 159
        echo (isset($context["text_credit_18"]) ? $context["text_credit_18"] : null);
        echo "
                            </label>

                            <br />

                            ";
        // line 164
        if ($this->getAttribute((isset($context["payment_methods"]) ? $context["payment_methods"] : null), "Credit_24", array(), "any", true, true)) {
            // line 165
            echo "                                <input type=\"checkbox\" name=\"";
            echo (isset($context["name_prefix"]) ? $context["name_prefix"] : null);
            echo "_payment_methods[Credit_24]\" value=\"credit_24\" checked=\"checked\" />
                            ";
        } else {
            // line 167
            echo "                                <input type=\"checkbox\" name=\"";
            echo (isset($context["name_prefix"]) ? $context["name_prefix"] : null);
            echo "_payment_methods[Credit_24]\" value=\"credit_24\" />
                            ";
        }
        // line 169
        echo "                            <label class=\"control-label\" for=\"input-";
        echo (isset($context["id_prefix"]) ? $context["id_prefix"] : null);
        echo "-payment-methods\">
                                &nbsp;";
        // line 170
        echo (isset($context["text_credit_24"]) ? $context["text_credit_24"] : null);
        echo "
                            </label>

                            <br />

                            ";
        // line 175
        if ($this->getAttribute((isset($context["payment_methods"]) ? $context["payment_methods"] : null), "WebATM", array(), "any", true, true)) {
            // line 176
            echo "                                <input type=\"checkbox\" name=\"";
            echo (isset($context["name_prefix"]) ? $context["name_prefix"] : null);
            echo "_payment_methods[WebATM]\" value=\"webatm\" checked=\"checked\" />
                            ";
        } else {
            // line 178
            echo "                                <input type=\"checkbox\" name=\"";
            echo (isset($context["name_prefix"]) ? $context["name_prefix"] : null);
            echo "_payment_methods[WebATM]\" value=\"webatm\" />
                            ";
        }
        // line 180
        echo "                            <label class=\"control-label\" for=\"input-";
        echo (isset($context["id_prefix"]) ? $context["id_prefix"] : null);
        echo "-payment-methods\">
                                &nbsp;";
        // line 181
        echo (isset($context["text_webatm"]) ? $context["text_webatm"] : null);
        echo "
                            </label>

                            <br />

                            ";
        // line 186
        if ($this->getAttribute((isset($context["payment_methods"]) ? $context["payment_methods"] : null), "ATM", array(), "any", true, true)) {
            // line 187
            echo "                                <input type=\"checkbox\" name=\"";
            echo (isset($context["name_prefix"]) ? $context["name_prefix"] : null);
            echo "_payment_methods[ATM]\" value=\"atm\" checked=\"checked\" />
                            ";
        } else {
            // line 189
            echo "                                <input type=\"checkbox\" name=\"";
            echo (isset($context["name_prefix"]) ? $context["name_prefix"] : null);
            echo "_payment_methods[ATM]\" value=\"atm\" />
                            ";
        }
        // line 191
        echo "                            <label class=\"control-label\" for=\"input-";
        echo (isset($context["id_prefix"]) ? $context["id_prefix"] : null);
        echo "-payment-methods\">
                                &nbsp;";
        // line 192
        echo (isset($context["text_atm"]) ? $context["text_atm"] : null);
        echo "
                            </label>

                            <br />

                            ";
        // line 197
        if ($this->getAttribute((isset($context["payment_methods"]) ? $context["payment_methods"] : null), "BARCODE", array(), "any", true, true)) {
            // line 198
            echo "                                <input type=\"checkbox\" name=\"";
            echo (isset($context["name_prefix"]) ? $context["name_prefix"] : null);
            echo "_payment_methods[BARCODE]\" value=\"barcode\" checked=\"checked\" />
                            ";
        } else {
            // line 200
            echo "                                <input type=\"checkbox\" name=\"";
            echo (isset($context["name_prefix"]) ? $context["name_prefix"] : null);
            echo "_payment_methods[BARCODE]\" value=\"barcode\" />
                            ";
        }
        // line 202
        echo "                            <label class=\"control-label\" for=\"input-";
        echo (isset($context["id_prefix"]) ? $context["id_prefix"] : null);
        echo "-payment-methods\">
                                &nbsp;";
        // line 203
        echo (isset($context["text_barcode"]) ? $context["text_barcode"] : null);
        echo "
                            </label>

                            <br />

                            ";
        // line 208
        if ($this->getAttribute((isset($context["payment_methods"]) ? $context["payment_methods"] : null), "CVS", array(), "any", true, true)) {
            // line 209
            echo "                                <input type=\"checkbox\" name=\"";
            echo (isset($context["name_prefix"]) ? $context["name_prefix"] : null);
            echo "_payment_methods[CVS]\" value=\"cvs\" checked=\"checked\" />
                            ";
        } else {
            // line 211
            echo "                                <input type=\"checkbox\" name=\"";
            echo (isset($context["name_prefix"]) ? $context["name_prefix"] : null);
            echo "_payment_methods[CVS]\" value=\"cvs\" />
                            ";
        }
        // line 213
        echo "                            <label class=\"control-label\" for=\"input-";
        echo (isset($context["id_prefix"]) ? $context["id_prefix"] : null);
        echo "-payment-methods\">
                                &nbsp;";
        // line 214
        echo (isset($context["text_cvs"]) ? $context["text_cvs"] : null);
        echo "
                            </label>

                            <br />
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-";
        // line 222
        echo (isset($context["id_prefix"]) ? $context["id_prefix"] : null);
        echo "-create-status\">
                            ";
        // line 223
        echo (isset($context["entry_create_status"]) ? $context["entry_create_status"] : null);
        echo "
                        </label>
                        <div class=\"col-sm-8\">
                            <select name=\"";
        // line 226
        echo (isset($context["name_prefix"]) ? $context["name_prefix"] : null);
        echo "_create_status\" id=\"input-";
        echo (isset($context["id_prefix"]) ? $context["id_prefix"] : null);
        echo "-create-status\" class=\"form-control\">
                        ";
        // line 227
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["temp_status"]) {
            // line 228
            echo "                            ";
            if (($this->getAttribute($context["temp_status"], "order_status_id", array()) == (isset($context["create_status"]) ? $context["create_status"] : null))) {
                // line 229
                echo "                                <option value=\"";
                echo $this->getAttribute($context["temp_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["temp_status"], "name", array());
                echo "</option>
                            ";
            } else {
                // line 231
                echo "                                <option value=\"";
                echo $this->getAttribute($context["temp_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["temp_status"], "name", array());
                echo "</option>
                            ";
            }
            // line 233
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['temp_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 234
        echo "                            </select>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-";
        // line 239
        echo (isset($context["id_prefix"]) ? $context["id_prefix"] : null);
        echo "-success-status\">
                            ";
        // line 240
        echo (isset($context["entry_success_status"]) ? $context["entry_success_status"] : null);
        echo "
                        </label>
                        <div class=\"col-sm-8\">
                            <select name=\"";
        // line 243
        echo (isset($context["name_prefix"]) ? $context["name_prefix"] : null);
        echo "_success_status\" id=\"input-";
        echo (isset($context["id_prefix"]) ? $context["id_prefix"] : null);
        echo "-success-status\" class=\"form-control\">
                        ";
        // line 244
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["temp_status"]) {
            // line 245
            echo "                            ";
            if (($this->getAttribute($context["temp_status"], "order_status_id", array()) == (isset($context["success_status"]) ? $context["success_status"] : null))) {
                // line 246
                echo "                                <option value=\"";
                echo $this->getAttribute($context["temp_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["temp_status"], "name", array());
                echo "</option>
                            ";
            } else {
                // line 248
                echo "                                <option value=\"";
                echo $this->getAttribute($context["temp_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["temp_status"], "name", array());
                echo "</option>
                            ";
            }
            // line 250
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['temp_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 251
        echo "                            </select>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-";
        // line 256
        echo (isset($context["id_prefix"]) ? $context["id_prefix"] : null);
        echo "-failed-status\">
                            ";
        // line 257
        echo (isset($context["entry_failed_status"]) ? $context["entry_failed_status"] : null);
        echo "
                        </label>
                        <div class=\"col-sm-8\">
                            <select name=\"";
        // line 260
        echo (isset($context["name_prefix"]) ? $context["name_prefix"] : null);
        echo "_failed_status\" id=\"input-";
        echo (isset($context["id_prefix"]) ? $context["id_prefix"] : null);
        echo "-failed-status\" class=\"form-control\">
                        ";
        // line 261
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["temp_status"]) {
            // line 262
            echo "                            ";
            if (($this->getAttribute($context["temp_status"], "order_status_id", array()) == (isset($context["failed_status"]) ? $context["failed_status"] : null))) {
                // line 263
                echo "                                <option value=\"";
                echo $this->getAttribute($context["temp_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["temp_status"], "name", array());
                echo "</option>
                            ";
            } else {
                // line 265
                echo "                                <option value=\"";
                echo $this->getAttribute($context["temp_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["temp_status"], "name", array());
                echo "</option>
                            ";
            }
            // line 267
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['temp_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 268
        echo "                            </select>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-";
        // line 273
        echo (isset($context["id_prefix"]) ? $context["id_prefix"] : null);
        echo "-geo-zone\">
                            ";
        // line 274
        echo (isset($context["entry_geo_zone"]) ? $context["entry_geo_zone"] : null);
        echo "
                        </label>
                        <div class=\"col-sm-8\">
                          <select name=\"";
        // line 277
        echo (isset($context["name_prefix"]) ? $context["name_prefix"] : null);
        echo "_geo_zone_id\" id=\"input-";
        echo (isset($context["id_prefix"]) ? $context["id_prefix"] : null);
        echo "-geo-zone\" class=\"form-control\">
                            <option value=\"0\">";
        // line 278
        echo (isset($context["text_all_zones"]) ? $context["text_all_zones"] : null);
        echo "</option>
                        ";
        // line 279
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["geo_zones"]) ? $context["geo_zones"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["temp_zone"]) {
            // line 280
            echo "                            ";
            if (($this->getAttribute($context["temp_zone"], "geo_zone_id", array()) == (isset($context["geo_zone_id"]) ? $context["geo_zone_id"] : null))) {
                // line 281
                echo "                                <option value=\"";
                echo $this->getAttribute($context["temp_zone"], "geo_zone_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["temp_zone"], "name", array());
                echo "</option>
                            ";
            } else {
                // line 283
                echo "                                <option value=\"";
                echo $this->getAttribute($context["temp_zone"], "geo_zone_id", array());
                echo "\">";
                echo $this->getAttribute($context["temp_zone"], "name", array());
                echo "</option>
                            ";
            }
            // line 285
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['temp_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 286
        echo "                          </select>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-";
        // line 291
        echo (isset($context["id_prefix"]) ? $context["id_prefix"] : null);
        echo "-sort-order\">
                            ";
        // line 292
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "
                        </label>
                        <div class=\"col-sm-8\">
                            <input type=\"text\" name=\"";
        // line 295
        echo (isset($context["name_prefix"]) ? $context["name_prefix"] : null);
        echo "_sort_order\" value=\"";
        echo (isset($context["sort_order"]) ? $context["sort_order"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" id=\"input-";
        echo (isset($context["id_prefix"]) ? $context["id_prefix"] : null);
        echo "-sort-order\" class=\"form-control\" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
";
        // line 303
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/payment/ecpaypayment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  777 => 303,  760 => 295,  754 => 292,  750 => 291,  743 => 286,  737 => 285,  729 => 283,  721 => 281,  718 => 280,  714 => 279,  710 => 278,  704 => 277,  698 => 274,  694 => 273,  687 => 268,  681 => 267,  673 => 265,  665 => 263,  662 => 262,  658 => 261,  652 => 260,  646 => 257,  642 => 256,  635 => 251,  629 => 250,  621 => 248,  613 => 246,  610 => 245,  606 => 244,  600 => 243,  594 => 240,  590 => 239,  583 => 234,  577 => 233,  569 => 231,  561 => 229,  558 => 228,  554 => 227,  548 => 226,  542 => 223,  538 => 222,  527 => 214,  522 => 213,  516 => 211,  510 => 209,  508 => 208,  500 => 203,  495 => 202,  489 => 200,  483 => 198,  481 => 197,  473 => 192,  468 => 191,  462 => 189,  456 => 187,  454 => 186,  446 => 181,  441 => 180,  435 => 178,  429 => 176,  427 => 175,  419 => 170,  414 => 169,  408 => 167,  402 => 165,  400 => 164,  392 => 159,  387 => 158,  381 => 156,  375 => 154,  373 => 153,  365 => 148,  360 => 147,  354 => 145,  348 => 143,  346 => 142,  338 => 137,  333 => 136,  327 => 134,  321 => 132,  319 => 131,  311 => 126,  306 => 125,  300 => 123,  294 => 121,  292 => 120,  284 => 115,  279 => 114,  273 => 112,  267 => 110,  265 => 109,  259 => 106,  255 => 105,  247 => 100,  237 => 97,  230 => 93,  225 => 91,  217 => 86,  207 => 83,  200 => 79,  195 => 77,  187 => 72,  177 => 69,  170 => 65,  165 => 63,  158 => 58,  152 => 57,  146 => 54,  141 => 53,  135 => 50,  130 => 49,  127 => 48,  123 => 47,  117 => 46,  111 => 43,  107 => 42,  100 => 40,  92 => 35,  87 => 32,  80 => 28,  77 => 27,  75 => 26,  69 => 22,  58 => 20,  54 => 19,  48 => 16,  38 => 11,  31 => 7,  23 => 2,  19 => 1,);
    }
}
/* {{ header }}*/
/* {{ column_left }}*/
/* <div id="content">*/
/*     <div class="page-header">*/
/*         <div class="container-fluid">*/
/*             <div class="pull-right">*/
/*                 <button type="submit" form="form-popular" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary">*/
/*                     <i class="fa fa-save"></i>*/
/*                 </button>*/
/*                 </button>*/
/*                 <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default">*/
/*                     <i class="fa fa-reply"></i>*/
/*                 </a>*/
/*             </div>*/
/* */
/*             <h1>{{ heading_title }}</h1>*/
/* */
/*             <ul class="breadcrumb">*/
/*                 {% for breadcrumb in breadcrumbs %}*/
/*                 <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/*     <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*         <div class="alert alert-danger">*/
/*             <i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*             <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*         </div>*/
/*     {% endif %}*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*                 <h3 class="panel-title">*/
/*                     <i class="fa fa-pencil"></i> {{ text_edit }}*/
/*                 </h3>*/
/*             </div>*/
/* */
/*             <div class="panel-body">*/
/*                 <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-{{ id_prefix }}" class="form-horizontal">*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-{{ id_prefix }}-status">*/
/*                             {{ entry_status }}*/
/*                         </label>*/
/*                         <div class="col-sm-8">*/
/*                             <select name="{{ name_prefix }}_status" id="input-{{ id_prefix }}-status" class="form-control">*/
/*                         {% for temp_status in module_statuses %}*/
/*                             {% if temp_status.value == status %}*/
/*                                 <option value="{{ temp_status.value }}" selected="selected">*/
/*                                     {{ temp_status.text }}*/
/*                                 </option>*/
/*                             {% else %}*/
/*                                 <option value="{{ temp_status.value }}">*/
/*                                     {{ temp_status.text }}*/
/*                                 </option>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                             </select>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group required">*/
/*                         <label class="col-sm-2 control-label" for="input-{{ id_prefix }}-merchant-id">*/
/*                             <span data-toggle="tooltip" title="Merchant ID">*/
/*                                 {{ entry_merchant_id }}*/
/*                             </span>*/
/*                         </label>*/
/*                         <div class="col-sm-8">*/
/*                             <input type="text" name="{{ name_prefix }}_merchant_id" value="{{ merchant_id }}" placeholder="Merchant ID" id="input-{{ id_prefix }}-merchant-id" class="form-control" />*/
/*                         </div>*/
/*                         <div class="text-danger">*/
/*                             {{ merchant_id_error }}*/
/*                         </div>*/
/*                     </div>*/
/*                     */
/*                     <div class="form-group required">*/
/*                         <label class="col-sm-2 control-label" for="input-{{ id_prefix }}-hash-key">*/
/*                             <span data-toggle="tooltip" title="Hash Key">*/
/*                                 {{ entry_hash_key }}*/
/*                             </span>*/
/*                         </label>*/
/*                         <div class="col-sm-8">*/
/*                             <input type="text" name="{{ name_prefix }}_hash_key" value="{{ hash_key }}" placeholder="Hash Key" id="input-{{ id_prefix }}-hash-key" class="form-control" />*/
/*                         </div>*/
/*                         <div class="text-danger">*/
/*                             {{ hash_key_error }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group required">*/
/*                         <label class="col-sm-2 control-label" for="input-{{ id_prefix }}-hash-iv">*/
/*                             <span data-toggle="tooltip" title="Hash IV">*/
/*                                 {{ entry_hash_iv }}*/
/*                             </span>*/
/*                         </label>*/
/*                         <div class="col-sm-8">*/
/*                             <input type="text" name="{{ name_prefix }}_hash_iv" value="{{ hash_iv }}" placeholder="Hash IV" id="input-{{ id_prefix }}-hash-iv" class="form-control" />*/
/*                         </div>*/
/*                         <div class="text-danger">*/
/*                             {{ hash_iv_error }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-{{ id_prefix }}-methods">*/
/*                             {{ entry_payment_methods }}*/
/*                         </label>*/
/*                         <div class="col-sm-8">*/
/*                             {% if payment_methods.Credit is defined %}*/
/*                                 <input type="checkbox" name="{{ name_prefix }}_payment_methods[Credit]" value="credit" checked="checked" />*/
/*                             {% else %}*/
/*                                 <input type="checkbox" name="{{ name_prefix }}_payment_methods[Credit]" value="credit" />*/
/*                             {% endif %}*/
/*                             <label class="control-label" for="input-{{ id_prefix }}-payment-methods">*/
/*                                 &nbsp;{{ text_credit }}*/
/*                             </label>*/
/* */
/*                             <br />*/
/* */
/*                             {% if payment_methods.Credit_3 is defined %}*/
/*                                 <input type="checkbox" name="{{ name_prefix }}_payment_methods[Credit_3]" value="credit_3" checked="checked" />*/
/*                             {% else %}*/
/*                                 <input type="checkbox" name="{{ name_prefix }}_payment_methods[Credit_3]" value="credit_3" />*/
/*                             {% endif %}*/
/*                             <label class="control-label" for="input-{{ id_prefix }}-payment-methods">*/
/*                                 &nbsp;{{ text_credit_3 }}*/
/*                             </label>*/
/* */
/*                             <br />*/
/* */
/*                             {% if payment_methods.Credit_6 is defined %}*/
/*                                 <input type="checkbox" name="{{ name_prefix }}_payment_methods[Credit_6]" value="credit_6" checked="checked" />*/
/*                             {% else %}*/
/*                                 <input type="checkbox" name="{{ name_prefix }}_payment_methods[Credit_6]" value="credit_6" />*/
/*                             {% endif %}*/
/*                             <label class="control-label" for="input-{{ id_prefix }}-payment-methods">*/
/*                                 &nbsp;{{ text_credit_6 }}*/
/*                             </label>*/
/* */
/*                             <br />*/
/* */
/*                             {% if payment_methods.Credit_12 is defined %}*/
/*                                 <input type="checkbox" name="{{ name_prefix }}_payment_methods[Credit_12]" value="credit_12" checked="checked" />*/
/*                             {% else %}*/
/*                                 <input type="checkbox" name="{{ name_prefix }}_payment_methods[Credit_12]" value="credit_12" />*/
/*                             {% endif %}*/
/*                             <label class="control-label" for="input-{{ id_prefix }}-payment-methods">*/
/*                                 &nbsp;{{ text_credit_12 }}*/
/*                             </label>*/
/* */
/*                             <br />*/
/* */
/*                             {% if payment_methods.Credit_18 is defined %}*/
/*                                 <input type="checkbox" name="{{ name_prefix }}_payment_methods[Credit_18]" value="credit_18" checked="checked" />*/
/*                             {% else %}*/
/*                                 <input type="checkbox" name="{{ name_prefix }}_payment_methods[Credit_18]" value="credit_18" />*/
/*                             {% endif %}*/
/*                             <label class="control-label" for="input-{{ id_prefix }}-payment-methods">*/
/*                                 &nbsp;{{ text_credit_18 }}*/
/*                             </label>*/
/* */
/*                             <br />*/
/* */
/*                             {% if payment_methods.Credit_24 is defined %}*/
/*                                 <input type="checkbox" name="{{ name_prefix }}_payment_methods[Credit_24]" value="credit_24" checked="checked" />*/
/*                             {% else %}*/
/*                                 <input type="checkbox" name="{{ name_prefix }}_payment_methods[Credit_24]" value="credit_24" />*/
/*                             {% endif %}*/
/*                             <label class="control-label" for="input-{{ id_prefix }}-payment-methods">*/
/*                                 &nbsp;{{ text_credit_24 }}*/
/*                             </label>*/
/* */
/*                             <br />*/
/* */
/*                             {% if payment_methods.WebATM is defined %}*/
/*                                 <input type="checkbox" name="{{ name_prefix }}_payment_methods[WebATM]" value="webatm" checked="checked" />*/
/*                             {% else %}*/
/*                                 <input type="checkbox" name="{{ name_prefix }}_payment_methods[WebATM]" value="webatm" />*/
/*                             {% endif %}*/
/*                             <label class="control-label" for="input-{{ id_prefix }}-payment-methods">*/
/*                                 &nbsp;{{ text_webatm }}*/
/*                             </label>*/
/* */
/*                             <br />*/
/* */
/*                             {% if payment_methods.ATM is defined %}*/
/*                                 <input type="checkbox" name="{{ name_prefix }}_payment_methods[ATM]" value="atm" checked="checked" />*/
/*                             {% else %}*/
/*                                 <input type="checkbox" name="{{ name_prefix }}_payment_methods[ATM]" value="atm" />*/
/*                             {% endif %}*/
/*                             <label class="control-label" for="input-{{ id_prefix }}-payment-methods">*/
/*                                 &nbsp;{{ text_atm }}*/
/*                             </label>*/
/* */
/*                             <br />*/
/* */
/*                             {% if payment_methods.BARCODE is defined %}*/
/*                                 <input type="checkbox" name="{{ name_prefix }}_payment_methods[BARCODE]" value="barcode" checked="checked" />*/
/*                             {% else %}*/
/*                                 <input type="checkbox" name="{{ name_prefix }}_payment_methods[BARCODE]" value="barcode" />*/
/*                             {% endif %}*/
/*                             <label class="control-label" for="input-{{ id_prefix }}-payment-methods">*/
/*                                 &nbsp;{{ text_barcode }}*/
/*                             </label>*/
/* */
/*                             <br />*/
/* */
/*                             {% if payment_methods.CVS is defined %}*/
/*                                 <input type="checkbox" name="{{ name_prefix }}_payment_methods[CVS]" value="cvs" checked="checked" />*/
/*                             {% else %}*/
/*                                 <input type="checkbox" name="{{ name_prefix }}_payment_methods[CVS]" value="cvs" />*/
/*                             {% endif %}*/
/*                             <label class="control-label" for="input-{{ id_prefix }}-payment-methods">*/
/*                                 &nbsp;{{ text_cvs }}*/
/*                             </label>*/
/* */
/*                             <br />*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-{{ id_prefix }}-create-status">*/
/*                             {{ entry_create_status }}*/
/*                         </label>*/
/*                         <div class="col-sm-8">*/
/*                             <select name="{{ name_prefix }}_create_status" id="input-{{ id_prefix }}-create-status" class="form-control">*/
/*                         {% for temp_status in order_statuses %}*/
/*                             {% if temp_status.order_status_id == create_status %}*/
/*                                 <option value="{{ temp_status.order_status_id }}" selected="selected">{{ temp_status.name }}</option>*/
/*                             {% else %}*/
/*                                 <option value="{{ temp_status.order_status_id }}">{{ temp_status.name }}</option>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                             </select>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-{{ id_prefix }}-success-status">*/
/*                             {{ entry_success_status }}*/
/*                         </label>*/
/*                         <div class="col-sm-8">*/
/*                             <select name="{{ name_prefix }}_success_status" id="input-{{ id_prefix }}-success-status" class="form-control">*/
/*                         {% for temp_status in order_statuses %}*/
/*                             {% if temp_status.order_status_id == success_status %}*/
/*                                 <option value="{{ temp_status.order_status_id }}" selected="selected">{{ temp_status.name }}</option>*/
/*                             {% else %}*/
/*                                 <option value="{{ temp_status.order_status_id }}">{{ temp_status.name }}</option>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                             </select>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-{{ id_prefix }}-failed-status">*/
/*                             {{ entry_failed_status }}*/
/*                         </label>*/
/*                         <div class="col-sm-8">*/
/*                             <select name="{{ name_prefix }}_failed_status" id="input-{{ id_prefix }}-failed-status" class="form-control">*/
/*                         {% for temp_status in order_statuses %}*/
/*                             {% if temp_status.order_status_id == failed_status %}*/
/*                                 <option value="{{ temp_status.order_status_id }}" selected="selected">{{ temp_status.name }}</option>*/
/*                             {% else %}*/
/*                                 <option value="{{ temp_status.order_status_id }}">{{ temp_status.name }}</option>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                             </select>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-{{ id_prefix }}-geo-zone">*/
/*                             {{ entry_geo_zone }}*/
/*                         </label>*/
/*                         <div class="col-sm-8">*/
/*                           <select name="{{ name_prefix }}_geo_zone_id" id="input-{{ id_prefix }}-geo-zone" class="form-control">*/
/*                             <option value="0">{{ text_all_zones }}</option>*/
/*                         {% for temp_zone in geo_zones %}*/
/*                             {% if temp_zone.geo_zone_id == geo_zone_id %}*/
/*                                 <option value="{{ temp_zone.geo_zone_id }}" selected="selected">{{ temp_zone.name }}</option>*/
/*                             {% else %}*/
/*                                 <option value="{{ temp_zone.geo_zone_id }}">{{ temp_zone.name }}</option>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                           </select>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-{{ id_prefix }}-sort-order">*/
/*                             {{ entry_sort_order }}*/
/*                         </label>*/
/*                         <div class="col-sm-8">*/
/*                             <input type="text" name="{{ name_prefix }}_sort_order" value="{{ sort_order }}" placeholder="{{ entry_sort_order }}" id="input-{{ id_prefix }}-sort-order" class="form-control" />*/
/*                         </div>*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {{ footer }}*/
