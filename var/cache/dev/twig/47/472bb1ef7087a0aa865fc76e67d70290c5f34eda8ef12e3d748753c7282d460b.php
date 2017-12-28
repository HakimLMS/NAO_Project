<?php

/* form_div_layout.html.twig */
class __TwigTemplate_a31ac242bed643502afd2cb0a44bd9b0f6301c540ec5f736f7a11249ebd527b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'range_widget' => array($this, 'block_range_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'tel_widget' => array($this, 'block_tel_widget'),
            'color_widget' => array($this, 'block_color_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dcabc2c868db1c613e367122dea6f0f895194cda80d8414feaf0aa3eb17c0d32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcabc2c868db1c613e367122dea6f0f895194cda80d8414feaf0aa3eb17c0d32->enter($__internal_dcabc2c868db1c613e367122dea6f0f895194cda80d8414feaf0aa3eb17c0d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        $__internal_59c5ccb13490f223f23593dfce1afee2abd9190bf5ada6e45d44aea5b98324da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59c5ccb13490f223f23593dfce1afee2abd9190bf5ada6e45d44aea5b98324da->enter($__internal_59c5ccb13490f223f23593dfce1afee2abd9190bf5ada6e45d44aea5b98324da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 16
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 26
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 33
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 37
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 45
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 54
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 74
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 87
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 91
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 95
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 108
        $this->displayBlock('date_widget', $context, $blocks);
        // line 122
        $this->displayBlock('time_widget', $context, $blocks);
        // line 133
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 168
        $this->displayBlock('number_widget', $context, $blocks);
        // line 174
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 179
        $this->displayBlock('money_widget', $context, $blocks);
        // line 183
        $this->displayBlock('url_widget', $context, $blocks);
        // line 188
        $this->displayBlock('search_widget', $context, $blocks);
        // line 193
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 198
        $this->displayBlock('password_widget', $context, $blocks);
        // line 203
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 208
        $this->displayBlock('email_widget', $context, $blocks);
        // line 213
        $this->displayBlock('range_widget', $context, $blocks);
        // line 218
        $this->displayBlock('button_widget', $context, $blocks);
        // line 232
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 237
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 242
        $this->displayBlock('tel_widget', $context, $blocks);
        // line 247
        $this->displayBlock('color_widget', $context, $blocks);
        // line 254
        $this->displayBlock('form_label', $context, $blocks);
        // line 276
        $this->displayBlock('button_label', $context, $blocks);
        // line 280
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 288
        $this->displayBlock('form_row', $context, $blocks);
        // line 296
        $this->displayBlock('button_row', $context, $blocks);
        // line 302
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 308
        $this->displayBlock('form', $context, $blocks);
        // line 314
        $this->displayBlock('form_start', $context, $blocks);
        // line 328
        $this->displayBlock('form_end', $context, $blocks);
        // line 335
        $this->displayBlock('form_errors', $context, $blocks);
        // line 345
        $this->displayBlock('form_rest', $context, $blocks);
        // line 366
        echo "
";
        // line 369
        $this->displayBlock('form_rows', $context, $blocks);
        // line 375
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 382
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 387
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 392
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_dcabc2c868db1c613e367122dea6f0f895194cda80d8414feaf0aa3eb17c0d32->leave($__internal_dcabc2c868db1c613e367122dea6f0f895194cda80d8414feaf0aa3eb17c0d32_prof);

        
        $__internal_59c5ccb13490f223f23593dfce1afee2abd9190bf5ada6e45d44aea5b98324da->leave($__internal_59c5ccb13490f223f23593dfce1afee2abd9190bf5ada6e45d44aea5b98324da_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_3414ccca18714247530241fe2b97a2287e5909d32dfa976ac43d0af37354973b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3414ccca18714247530241fe2b97a2287e5909d32dfa976ac43d0af37354973b->enter($__internal_3414ccca18714247530241fe2b97a2287e5909d32dfa976ac43d0af37354973b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_ef0c4767fd9f5e12be003b88037eb09b046aed74b3f64b8259478fce0078d436 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef0c4767fd9f5e12be003b88037eb09b046aed74b3f64b8259478fce0078d436->enter($__internal_ef0c4767fd9f5e12be003b88037eb09b046aed74b3f64b8259478fce0078d436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if ((isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 4, $this->getSourceContext()); })())) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_ef0c4767fd9f5e12be003b88037eb09b046aed74b3f64b8259478fce0078d436->leave($__internal_ef0c4767fd9f5e12be003b88037eb09b046aed74b3f64b8259478fce0078d436_prof);

        
        $__internal_3414ccca18714247530241fe2b97a2287e5909d32dfa976ac43d0af37354973b->leave($__internal_3414ccca18714247530241fe2b97a2287e5909d32dfa976ac43d0af37354973b_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_4e148165410fd9d02fd11abdfa3e3cdb24dbf7ff202a2550e207d5899b5a4d13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e148165410fd9d02fd11abdfa3e3cdb24dbf7ff202a2550e207d5899b5a4d13->enter($__internal_4e148165410fd9d02fd11abdfa3e3cdb24dbf7ff202a2550e207d5899b5a4d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_e00e8f7ec80ba831c984f74872e990e5fdd04cc458e4b4e6eccba9b9567fd898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e00e8f7ec80ba831c984f74872e990e5fdd04cc458e4b4e6eccba9b9567fd898->enter($__internal_e00e8f7ec80ba831c984f74872e990e5fdd04cc458e4b4e6eccba9b9567fd898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 12, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 13
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_e00e8f7ec80ba831c984f74872e990e5fdd04cc458e4b4e6eccba9b9567fd898->leave($__internal_e00e8f7ec80ba831c984f74872e990e5fdd04cc458e4b4e6eccba9b9567fd898_prof);

        
        $__internal_4e148165410fd9d02fd11abdfa3e3cdb24dbf7ff202a2550e207d5899b5a4d13->leave($__internal_4e148165410fd9d02fd11abdfa3e3cdb24dbf7ff202a2550e207d5899b5a4d13_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_23f78779f6a9c91653da05f03b5e5d826042ce25d92e8297ec6bbfc51faf457b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23f78779f6a9c91653da05f03b5e5d826042ce25d92e8297ec6bbfc51faf457b->enter($__internal_23f78779f6a9c91653da05f03b5e5d826042ce25d92e8297ec6bbfc51faf457b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_d1d1acfe75e2f994184fea1e434d5f6b7cb2575bf08da112b45209265ff4d836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1d1acfe75e2f994184fea1e434d5f6b7cb2575bf08da112b45209265ff4d836->enter($__internal_d1d1acfe75e2f994184fea1e434d5f6b7cb2575bf08da112b45209265ff4d836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 17
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 18
        if (Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()))) {
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'errors');
        }
        // line 21
        $this->displayBlock("form_rows", $context, $blocks);
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), 'rest');
        // line 23
        echo "</div>";
        
        $__internal_d1d1acfe75e2f994184fea1e434d5f6b7cb2575bf08da112b45209265ff4d836->leave($__internal_d1d1acfe75e2f994184fea1e434d5f6b7cb2575bf08da112b45209265ff4d836_prof);

        
        $__internal_23f78779f6a9c91653da05f03b5e5d826042ce25d92e8297ec6bbfc51faf457b->leave($__internal_23f78779f6a9c91653da05f03b5e5d826042ce25d92e8297ec6bbfc51faf457b_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_7febd37a79f9944ec1aac31b0c981b14d8e65a88683a9619c30d09146ddcda27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7febd37a79f9944ec1aac31b0c981b14d8e65a88683a9619c30d09146ddcda27->enter($__internal_7febd37a79f9944ec1aac31b0c981b14d8e65a88683a9619c30d09146ddcda27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_03506af2ab0465e18dfc4432d6e23a9b49f6851afb562dc1d11dce4965e90c13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03506af2ab0465e18dfc4432d6e23a9b49f6851afb562dc1d11dce4965e90c13->enter($__internal_03506af2ab0465e18dfc4432d6e23a9b49f6851afb562dc1d11dce4965e90c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 28, $this->getSourceContext()); })()), array("data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new Twig_Error_Runtime('Variable "prototype" does not exist.', 28, $this->getSourceContext()); })()), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_03506af2ab0465e18dfc4432d6e23a9b49f6851afb562dc1d11dce4965e90c13->leave($__internal_03506af2ab0465e18dfc4432d6e23a9b49f6851afb562dc1d11dce4965e90c13_prof);

        
        $__internal_7febd37a79f9944ec1aac31b0c981b14d8e65a88683a9619c30d09146ddcda27->leave($__internal_7febd37a79f9944ec1aac31b0c981b14d8e65a88683a9619c30d09146ddcda27_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_8adf505a0cfb3ee674736bfd2dd0cd9cb9a568db22b2b3aad36c545dabeb1404 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8adf505a0cfb3ee674736bfd2dd0cd9cb9a568db22b2b3aad36c545dabeb1404->enter($__internal_8adf505a0cfb3ee674736bfd2dd0cd9cb9a568db22b2b3aad36c545dabeb1404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_489eb984dab21ebd285d59acbe3ae0597a7ba7cd220588a78eee41af161bbdcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_489eb984dab21ebd285d59acbe3ae0597a7ba7cd220588a78eee41af161bbdcf->enter($__internal_489eb984dab21ebd285d59acbe3ae0597a7ba7cd220588a78eee41af161bbdcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 34, $this->getSourceContext()); })()), "html", null, true);
        echo "</textarea>";
        
        $__internal_489eb984dab21ebd285d59acbe3ae0597a7ba7cd220588a78eee41af161bbdcf->leave($__internal_489eb984dab21ebd285d59acbe3ae0597a7ba7cd220588a78eee41af161bbdcf_prof);

        
        $__internal_8adf505a0cfb3ee674736bfd2dd0cd9cb9a568db22b2b3aad36c545dabeb1404->leave($__internal_8adf505a0cfb3ee674736bfd2dd0cd9cb9a568db22b2b3aad36c545dabeb1404_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_b31c12f0cd28aebae8bbf758a38fa20a5bd1d949128069d2ee261f50ee0d012f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b31c12f0cd28aebae8bbf758a38fa20a5bd1d949128069d2ee261f50ee0d012f->enter($__internal_b31c12f0cd28aebae8bbf758a38fa20a5bd1d949128069d2ee261f50ee0d012f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        $__internal_43c01a7447605ccd90c609c66fa3c45b81adf68b7378d957b03c0799da17bc3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43c01a7447605ccd90c609c66fa3c45b81adf68b7378d957b03c0799da17bc3f->enter($__internal_43c01a7447605ccd90c609c66fa3c45b81adf68b7378d957b03c0799da17bc3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if ((isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 38, $this->getSourceContext()); })())) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_43c01a7447605ccd90c609c66fa3c45b81adf68b7378d957b03c0799da17bc3f->leave($__internal_43c01a7447605ccd90c609c66fa3c45b81adf68b7378d957b03c0799da17bc3f_prof);

        
        $__internal_b31c12f0cd28aebae8bbf758a38fa20a5bd1d949128069d2ee261f50ee0d012f->leave($__internal_b31c12f0cd28aebae8bbf758a38fa20a5bd1d949128069d2ee261f50ee0d012f_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_86fa47a463d3e3e0aef41f701dc5018827758844ba8891148e6f73c28bde0d8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86fa47a463d3e3e0aef41f701dc5018827758844ba8891148e6f73c28bde0d8f->enter($__internal_86fa47a463d3e3e0aef41f701dc5018827758844ba8891148e6f73c28bde0d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_0f8dd6f09b40d847cd92bd2f94ffaed214d3078d93cd2001da5b6a1ecc4ebf48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f8dd6f09b40d847cd92bd2f94ffaed214d3078d93cd2001da5b6a1ecc4ebf48->enter($__internal_0f8dd6f09b40d847cd92bd2f94ffaed214d3078d93cd2001da5b6a1ecc4ebf48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 46
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 49, $this->getSourceContext()); })())));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>";
        
        $__internal_0f8dd6f09b40d847cd92bd2f94ffaed214d3078d93cd2001da5b6a1ecc4ebf48->leave($__internal_0f8dd6f09b40d847cd92bd2f94ffaed214d3078d93cd2001da5b6a1ecc4ebf48_prof);

        
        $__internal_86fa47a463d3e3e0aef41f701dc5018827758844ba8891148e6f73c28bde0d8f->leave($__internal_86fa47a463d3e3e0aef41f701dc5018827758844ba8891148e6f73c28bde0d8f_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_a9f1c1fe26bad48e2ead80e66953973adbce18acff490526fd7bdb566d4e475f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9f1c1fe26bad48e2ead80e66953973adbce18acff490526fd7bdb566d4e475f->enter($__internal_a9f1c1fe26bad48e2ead80e66953973adbce18acff490526fd7bdb566d4e475f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_dd48718af65ab1d94c3ee4dd88cf57ae6e27d7a53ecda2db689bfbb320d25037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd48718af65ab1d94c3ee4dd88cf57ae6e27d7a53ecda2db689bfbb320d25037->enter($__internal_dd48718af65ab1d94c3ee4dd88cf57ae6e27d7a53ecda2db689bfbb320d25037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 55
        if ((((((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 55, $this->getSourceContext()); })()) && (null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 55, $this->getSourceContext()); })()))) &&  !(isset($context["placeholder_in_choices"]) || array_key_exists("placeholder_in_choices", $context) ? $context["placeholder_in_choices"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder_in_choices" does not exist.', 55, $this->getSourceContext()); })())) &&  !(isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 55, $this->getSourceContext()); })())) && ( !twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "size", array(), "any", true, true) || (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 55, $this->getSourceContext()); })()), "size", array()) <= 1)))) {
            // line 56
            $context["required"] = false;
        }
        // line 58
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 58, $this->getSourceContext()); })())) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 59
        if ( !(null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 59, $this->getSourceContext()); })()))) {
            // line 60
            echo "<option value=\"\"";
            if (((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 60, $this->getSourceContext()); })()) && twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 60, $this->getSourceContext()); })())))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })()) != "")) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 60, $this->getSourceContext()); })()) === false)) ? ((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 60, $this->getSourceContext()); })()))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 62
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 62, $this->getSourceContext()); })())) > 0)) {
            // line 63
            $context["options"] = (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 63, $this->getSourceContext()); })());
            // line 64
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 65
            if (((twig_length_filter($this->env, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 65, $this->getSourceContext()); })())) > 0) &&  !(null === (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 65, $this->getSourceContext()); })())))) {
                // line 66
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 66, $this->getSourceContext()); })()), "html", null, true);
                echo "</option>";
            }
        }
        // line 69
        $context["options"] = (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 69, $this->getSourceContext()); })());
        // line 70
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 71
        echo "</select>";
        
        $__internal_dd48718af65ab1d94c3ee4dd88cf57ae6e27d7a53ecda2db689bfbb320d25037->leave($__internal_dd48718af65ab1d94c3ee4dd88cf57ae6e27d7a53ecda2db689bfbb320d25037_prof);

        
        $__internal_a9f1c1fe26bad48e2ead80e66953973adbce18acff490526fd7bdb566d4e475f->leave($__internal_a9f1c1fe26bad48e2ead80e66953973adbce18acff490526fd7bdb566d4e475f_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_2aa63a0cf02cb64b11f8545b566b998bf4c5d09cf4b9c16b6f596c6a499d5b59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aa63a0cf02cb64b11f8545b566b998bf4c5d09cf4b9c16b6f596c6a499d5b59->enter($__internal_2aa63a0cf02cb64b11f8545b566b998bf4c5d09cf4b9c16b6f596c6a499d5b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        $__internal_bf185f154ac29a64538a2e200f9586a675e6889777af6cc2ae134b5ab8da6e38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf185f154ac29a64538a2e200f9586a675e6889777af6cc2ae134b5ab8da6e38->enter($__internal_bf185f154ac29a64538a2e200f9586a675e6889777af6cc2ae134b5ab8da6e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 75, $this->getSourceContext()); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 76
            if (twig_test_iterable($context["choice"])) {
                // line 77
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 77, $this->getSourceContext()); })()) === false)) ? ($context["group_label"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["group_label"], array(), (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 77, $this->getSourceContext()); })())))), "html", null, true);
                echo "\">
                ";
                // line 78
                $context["options"] = $context["choice"];
                // line 79
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 80
                echo "</optgroup>";
            } else {
                // line 82
                echo "<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "attr", array())) {
                    $__internal_b739ca5cbbf21d3d8ddb27a51af13ed6455f79e9c7049e3e9296900268648406 = array("attr" => twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "attr", array()));
                    if (!is_array($__internal_b739ca5cbbf21d3d8ddb27a51af13ed6455f79e9c7049e3e9296900268648406)) {
                        throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                    }
                    $context['_parent'] = $context;
                    $context = array_merge($context, $__internal_b739ca5cbbf21d3d8ddb27a51af13ed6455f79e9c7049e3e9296900268648406);
                    $this->displayBlock("attributes", $context, $blocks);
                    $context = $context['_parent'];
                }
                if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 82, $this->getSourceContext()); })()))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 82, $this->getSourceContext()); })()) === false)) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "label", array()), array(), (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 82, $this->getSourceContext()); })())))), "html", null, true);
                echo "</option>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_bf185f154ac29a64538a2e200f9586a675e6889777af6cc2ae134b5ab8da6e38->leave($__internal_bf185f154ac29a64538a2e200f9586a675e6889777af6cc2ae134b5ab8da6e38_prof);

        
        $__internal_2aa63a0cf02cb64b11f8545b566b998bf4c5d09cf4b9c16b6f596c6a499d5b59->leave($__internal_2aa63a0cf02cb64b11f8545b566b998bf4c5d09cf4b9c16b6f596c6a499d5b59_prof);

    }

    // line 87
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_50ca222c68b25a50305953ed4ef570166d116c45be273f195a9ba48b5794a513 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50ca222c68b25a50305953ed4ef570166d116c45be273f195a9ba48b5794a513->enter($__internal_50ca222c68b25a50305953ed4ef570166d116c45be273f195a9ba48b5794a513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_ce6c81caec2d272d5e39f2ae8eaa8f623518f52f9e3477eaf0c87cac2a553793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce6c81caec2d272d5e39f2ae8eaa8f623518f52f9e3477eaf0c87cac2a553793->enter($__internal_ce6c81caec2d272d5e39f2ae8eaa8f623518f52f9e3477eaf0c87cac2a553793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 88
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 88, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 88, $this->getSourceContext()); })())) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_ce6c81caec2d272d5e39f2ae8eaa8f623518f52f9e3477eaf0c87cac2a553793->leave($__internal_ce6c81caec2d272d5e39f2ae8eaa8f623518f52f9e3477eaf0c87cac2a553793_prof);

        
        $__internal_50ca222c68b25a50305953ed4ef570166d116c45be273f195a9ba48b5794a513->leave($__internal_50ca222c68b25a50305953ed4ef570166d116c45be273f195a9ba48b5794a513_prof);

    }

    // line 91
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_2d1a2b08039e39d036708cd00c66d13503e561e4ca6b214d33a3241a1993c72f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d1a2b08039e39d036708cd00c66d13503e561e4ca6b214d33a3241a1993c72f->enter($__internal_2d1a2b08039e39d036708cd00c66d13503e561e4ca6b214d33a3241a1993c72f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_f04d1fd5787de1650b383f86731fffec5e0cedd72d1f3da6b10bdd487165569e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f04d1fd5787de1650b383f86731fffec5e0cedd72d1f3da6b10bdd487165569e->enter($__internal_f04d1fd5787de1650b383f86731fffec5e0cedd72d1f3da6b10bdd487165569e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 92
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 92, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 92, $this->getSourceContext()); })())) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_f04d1fd5787de1650b383f86731fffec5e0cedd72d1f3da6b10bdd487165569e->leave($__internal_f04d1fd5787de1650b383f86731fffec5e0cedd72d1f3da6b10bdd487165569e_prof);

        
        $__internal_2d1a2b08039e39d036708cd00c66d13503e561e4ca6b214d33a3241a1993c72f->leave($__internal_2d1a2b08039e39d036708cd00c66d13503e561e4ca6b214d33a3241a1993c72f_prof);

    }

    // line 95
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_a64ca582f65d4aa4967b78246f3c29dabdffa62869ce53e77564f9f665928a7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a64ca582f65d4aa4967b78246f3c29dabdffa62869ce53e77564f9f665928a7d->enter($__internal_a64ca582f65d4aa4967b78246f3c29dabdffa62869ce53e77564f9f665928a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_5d574edae12518a4588a0c8fef1f35e8a5a32c403a65b70b2d2075b0ce1dceab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d574edae12518a4588a0c8fef1f35e8a5a32c403a65b70b2d2075b0ce1dceab->enter($__internal_5d574edae12518a4588a0c8fef1f35e8a5a32c403a65b70b2d2075b0ce1dceab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 96
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 96, $this->getSourceContext()); })()) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 100
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 100, $this->getSourceContext()); })()), "date", array()), 'errors');
            // line 101
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), "time", array()), 'errors');
            // line 102
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 102, $this->getSourceContext()); })()), "date", array()), 'widget');
            // line 103
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 103, $this->getSourceContext()); })()), "time", array()), 'widget');
            // line 104
            echo "</div>";
        }
        
        $__internal_5d574edae12518a4588a0c8fef1f35e8a5a32c403a65b70b2d2075b0ce1dceab->leave($__internal_5d574edae12518a4588a0c8fef1f35e8a5a32c403a65b70b2d2075b0ce1dceab_prof);

        
        $__internal_a64ca582f65d4aa4967b78246f3c29dabdffa62869ce53e77564f9f665928a7d->leave($__internal_a64ca582f65d4aa4967b78246f3c29dabdffa62869ce53e77564f9f665928a7d_prof);

    }

    // line 108
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_64bd5e03d33c89403b41ca8825ab3e62da3a7f3f9a7b4afd1eda3247573fc690 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64bd5e03d33c89403b41ca8825ab3e62da3a7f3f9a7b4afd1eda3247573fc690->enter($__internal_64bd5e03d33c89403b41ca8825ab3e62da3a7f3f9a7b4afd1eda3247573fc690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_0525dcbae9bebbb91cd8ec227bae1933eda23737a753db80c7d50f8ad9f07478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0525dcbae9bebbb91cd8ec227bae1933eda23737a753db80c7d50f8ad9f07478->enter($__internal_0525dcbae9bebbb91cd8ec227bae1933eda23737a753db80c7d50f8ad9f07478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 109
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 109, $this->getSourceContext()); })()) == "single_text")) {
            // line 110
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 112
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 113
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "date_pattern" does not exist.', 113, $this->getSourceContext()); })()), array("{{ year }}" =>             // line 114
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 114, $this->getSourceContext()); })()), "year", array()), 'widget'), "{{ month }}" =>             // line 115
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 115, $this->getSourceContext()); })()), "month", array()), 'widget'), "{{ day }}" =>             // line 116
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 116, $this->getSourceContext()); })()), "day", array()), 'widget')));
            // line 118
            echo "</div>";
        }
        
        $__internal_0525dcbae9bebbb91cd8ec227bae1933eda23737a753db80c7d50f8ad9f07478->leave($__internal_0525dcbae9bebbb91cd8ec227bae1933eda23737a753db80c7d50f8ad9f07478_prof);

        
        $__internal_64bd5e03d33c89403b41ca8825ab3e62da3a7f3f9a7b4afd1eda3247573fc690->leave($__internal_64bd5e03d33c89403b41ca8825ab3e62da3a7f3f9a7b4afd1eda3247573fc690_prof);

    }

    // line 122
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_10296cf0045f96875471827237f97e851f6ab6d4788d2ca9897cad8d2e94c8c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10296cf0045f96875471827237f97e851f6ab6d4788d2ca9897cad8d2e94c8c1->enter($__internal_10296cf0045f96875471827237f97e851f6ab6d4788d2ca9897cad8d2e94c8c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_005f11a1292000e03381b8115e44062fff41277c9b17b53c1ac0cfed08304a20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_005f11a1292000e03381b8115e44062fff41277c9b17b53c1ac0cfed08304a20->enter($__internal_005f11a1292000e03381b8115e44062fff41277c9b17b53c1ac0cfed08304a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 123
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 123, $this->getSourceContext()); })()) == "single_text")) {
            // line 124
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 126
            $context["vars"] = ((((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 126, $this->getSourceContext()); })()) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 127
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 128
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "hour", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 128, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "minute", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            }
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 128, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "second", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            }
            // line 129
            echo "        </div>";
        }
        
        $__internal_005f11a1292000e03381b8115e44062fff41277c9b17b53c1ac0cfed08304a20->leave($__internal_005f11a1292000e03381b8115e44062fff41277c9b17b53c1ac0cfed08304a20_prof);

        
        $__internal_10296cf0045f96875471827237f97e851f6ab6d4788d2ca9897cad8d2e94c8c1->leave($__internal_10296cf0045f96875471827237f97e851f6ab6d4788d2ca9897cad8d2e94c8c1_prof);

    }

    // line 133
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_4d48f674d7ad5b361ac6fb8dca0264cd2b782b29d9dc2eba1b32a25ea37d9e4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d48f674d7ad5b361ac6fb8dca0264cd2b782b29d9dc2eba1b32a25ea37d9e4c->enter($__internal_4d48f674d7ad5b361ac6fb8dca0264cd2b782b29d9dc2eba1b32a25ea37d9e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_6e9baffeaf0eed27b38a850cdcc14ee914753b6c9b2446595f89adeeb434344d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e9baffeaf0eed27b38a850cdcc14ee914753b6c9b2446595f89adeeb434344d->enter($__internal_6e9baffeaf0eed27b38a850cdcc14ee914753b6c9b2446595f89adeeb434344d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 134
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 134, $this->getSourceContext()); })()) == "single_text")) {
            // line 135
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 137
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 138
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 138, $this->getSourceContext()); })()), 'errors');
            // line 139
            echo "<table class=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter((isset($context["table_class"]) || array_key_exists("table_class", $context) ? $context["table_class"] : (function () { throw new Twig_Error_Runtime('Variable "table_class" does not exist.', 139, $this->getSourceContext()); })()), "")) : ("")), "html", null, true);
            echo "\">
                <thead>
                    <tr>";
            // line 142
            if ((isset($context["with_years"]) || array_key_exists("with_years", $context) ? $context["with_years"] : (function () { throw new Twig_Error_Runtime('Variable "with_years" does not exist.', 142, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 142, $this->getSourceContext()); })()), "years", array()), 'label');
                echo "</th>";
            }
            // line 143
            if ((isset($context["with_months"]) || array_key_exists("with_months", $context) ? $context["with_months"] : (function () { throw new Twig_Error_Runtime('Variable "with_months" does not exist.', 143, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 143, $this->getSourceContext()); })()), "months", array()), 'label');
                echo "</th>";
            }
            // line 144
            if ((isset($context["with_weeks"]) || array_key_exists("with_weeks", $context) ? $context["with_weeks"] : (function () { throw new Twig_Error_Runtime('Variable "with_weeks" does not exist.', 144, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 144, $this->getSourceContext()); })()), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 145
            if ((isset($context["with_days"]) || array_key_exists("with_days", $context) ? $context["with_days"] : (function () { throw new Twig_Error_Runtime('Variable "with_days" does not exist.', 145, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 145, $this->getSourceContext()); })()), "days", array()), 'label');
                echo "</th>";
            }
            // line 146
            if ((isset($context["with_hours"]) || array_key_exists("with_hours", $context) ? $context["with_hours"] : (function () { throw new Twig_Error_Runtime('Variable "with_hours" does not exist.', 146, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 146, $this->getSourceContext()); })()), "hours", array()), 'label');
                echo "</th>";
            }
            // line 147
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 147, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 147, $this->getSourceContext()); })()), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 148
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 148, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 148, $this->getSourceContext()); })()), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 149
            echo "</tr>
                </thead>
                <tbody>
                    <tr>";
            // line 153
            if ((isset($context["with_years"]) || array_key_exists("with_years", $context) ? $context["with_years"] : (function () { throw new Twig_Error_Runtime('Variable "with_years" does not exist.', 153, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 153, $this->getSourceContext()); })()), "years", array()), 'widget');
                echo "</td>";
            }
            // line 154
            if ((isset($context["with_months"]) || array_key_exists("with_months", $context) ? $context["with_months"] : (function () { throw new Twig_Error_Runtime('Variable "with_months" does not exist.', 154, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 154, $this->getSourceContext()); })()), "months", array()), 'widget');
                echo "</td>";
            }
            // line 155
            if ((isset($context["with_weeks"]) || array_key_exists("with_weeks", $context) ? $context["with_weeks"] : (function () { throw new Twig_Error_Runtime('Variable "with_weeks" does not exist.', 155, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 155, $this->getSourceContext()); })()), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 156
            if ((isset($context["with_days"]) || array_key_exists("with_days", $context) ? $context["with_days"] : (function () { throw new Twig_Error_Runtime('Variable "with_days" does not exist.', 156, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 156, $this->getSourceContext()); })()), "days", array()), 'widget');
                echo "</td>";
            }
            // line 157
            if ((isset($context["with_hours"]) || array_key_exists("with_hours", $context) ? $context["with_hours"] : (function () { throw new Twig_Error_Runtime('Variable "with_hours" does not exist.', 157, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 157, $this->getSourceContext()); })()), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 158
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 158, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 158, $this->getSourceContext()); })()), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 159
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 159, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 159, $this->getSourceContext()); })()), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 160
            echo "</tr>
                </tbody>
            </table>";
            // line 163
            if ((isset($context["with_invert"]) || array_key_exists("with_invert", $context) ? $context["with_invert"] : (function () { throw new Twig_Error_Runtime('Variable "with_invert" does not exist.', 163, $this->getSourceContext()); })())) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 163, $this->getSourceContext()); })()), "invert", array()), 'widget');
            }
            // line 164
            echo "</div>";
        }
        
        $__internal_6e9baffeaf0eed27b38a850cdcc14ee914753b6c9b2446595f89adeeb434344d->leave($__internal_6e9baffeaf0eed27b38a850cdcc14ee914753b6c9b2446595f89adeeb434344d_prof);

        
        $__internal_4d48f674d7ad5b361ac6fb8dca0264cd2b782b29d9dc2eba1b32a25ea37d9e4c->leave($__internal_4d48f674d7ad5b361ac6fb8dca0264cd2b782b29d9dc2eba1b32a25ea37d9e4c_prof);

    }

    // line 168
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_3c140e459b93c8c2a3c46aae92d005353c88263ca6aff1d13db47ff1c629c93e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c140e459b93c8c2a3c46aae92d005353c88263ca6aff1d13db47ff1c629c93e->enter($__internal_3c140e459b93c8c2a3c46aae92d005353c88263ca6aff1d13db47ff1c629c93e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        $__internal_3aa4216337a9dfeb4869f423c01c645c9264b8dc8cf4c872c2e22bf7db993f0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aa4216337a9dfeb4869f423c01c645c9264b8dc8cf4c872c2e22bf7db993f0a->enter($__internal_3aa4216337a9dfeb4869f423c01c645c9264b8dc8cf4c872c2e22bf7db993f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 170
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 170, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 171
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_3aa4216337a9dfeb4869f423c01c645c9264b8dc8cf4c872c2e22bf7db993f0a->leave($__internal_3aa4216337a9dfeb4869f423c01c645c9264b8dc8cf4c872c2e22bf7db993f0a_prof);

        
        $__internal_3c140e459b93c8c2a3c46aae92d005353c88263ca6aff1d13db47ff1c629c93e->leave($__internal_3c140e459b93c8c2a3c46aae92d005353c88263ca6aff1d13db47ff1c629c93e_prof);

    }

    // line 174
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_cf46195976762a30c8dad29ae88a372b73905d48b38011fe25eb15e9681bf6a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf46195976762a30c8dad29ae88a372b73905d48b38011fe25eb15e9681bf6a4->enter($__internal_cf46195976762a30c8dad29ae88a372b73905d48b38011fe25eb15e9681bf6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        $__internal_96323fb122c98d05041a28b434159b8c82d31d899dbc0ab5ee173e6f6a693c5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96323fb122c98d05041a28b434159b8c82d31d899dbc0ab5ee173e6f6a693c5b->enter($__internal_96323fb122c98d05041a28b434159b8c82d31d899dbc0ab5ee173e6f6a693c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 175
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 175, $this->getSourceContext()); })()), "number")) : ("number"));
        // line 176
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_96323fb122c98d05041a28b434159b8c82d31d899dbc0ab5ee173e6f6a693c5b->leave($__internal_96323fb122c98d05041a28b434159b8c82d31d899dbc0ab5ee173e6f6a693c5b_prof);

        
        $__internal_cf46195976762a30c8dad29ae88a372b73905d48b38011fe25eb15e9681bf6a4->leave($__internal_cf46195976762a30c8dad29ae88a372b73905d48b38011fe25eb15e9681bf6a4_prof);

    }

    // line 179
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_a7e83c5a0bacb233dc5d6fc9d9cdb42ea011ce3b70cd721d853ded143737501f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7e83c5a0bacb233dc5d6fc9d9cdb42ea011ce3b70cd721d853ded143737501f->enter($__internal_a7e83c5a0bacb233dc5d6fc9d9cdb42ea011ce3b70cd721d853ded143737501f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_e5beb47c3138dce56a81220d1ecc90a01c20eef30d3f5b7c97c3147e846b224c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5beb47c3138dce56a81220d1ecc90a01c20eef30d3f5b7c97c3147e846b224c->enter($__internal_e5beb47c3138dce56a81220d1ecc90a01c20eef30d3f5b7c97c3147e846b224c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 180
        echo twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 180, $this->getSourceContext()); })()), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_e5beb47c3138dce56a81220d1ecc90a01c20eef30d3f5b7c97c3147e846b224c->leave($__internal_e5beb47c3138dce56a81220d1ecc90a01c20eef30d3f5b7c97c3147e846b224c_prof);

        
        $__internal_a7e83c5a0bacb233dc5d6fc9d9cdb42ea011ce3b70cd721d853ded143737501f->leave($__internal_a7e83c5a0bacb233dc5d6fc9d9cdb42ea011ce3b70cd721d853ded143737501f_prof);

    }

    // line 183
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_df6e809412231e7b771e88b1f7a1e1e63734c7df4ca8cb78609802a000398326 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df6e809412231e7b771e88b1f7a1e1e63734c7df4ca8cb78609802a000398326->enter($__internal_df6e809412231e7b771e88b1f7a1e1e63734c7df4ca8cb78609802a000398326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        $__internal_449b034c77af42b84e1bcfd3f440c97e39d43f36d801a0271eda5d70cb64f51b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_449b034c77af42b84e1bcfd3f440c97e39d43f36d801a0271eda5d70cb64f51b->enter($__internal_449b034c77af42b84e1bcfd3f440c97e39d43f36d801a0271eda5d70cb64f51b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 184
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 184, $this->getSourceContext()); })()), "url")) : ("url"));
        // line 185
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_449b034c77af42b84e1bcfd3f440c97e39d43f36d801a0271eda5d70cb64f51b->leave($__internal_449b034c77af42b84e1bcfd3f440c97e39d43f36d801a0271eda5d70cb64f51b_prof);

        
        $__internal_df6e809412231e7b771e88b1f7a1e1e63734c7df4ca8cb78609802a000398326->leave($__internal_df6e809412231e7b771e88b1f7a1e1e63734c7df4ca8cb78609802a000398326_prof);

    }

    // line 188
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_e6d06b2d9615d0fcef05045b318873fe89f3bc2dac5597aadabb80e6f800cac9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6d06b2d9615d0fcef05045b318873fe89f3bc2dac5597aadabb80e6f800cac9->enter($__internal_e6d06b2d9615d0fcef05045b318873fe89f3bc2dac5597aadabb80e6f800cac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        $__internal_5a7b4c91db6eddd844da07a9b9bcfee88b8bf71b5c165593bafad14bf11586a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a7b4c91db6eddd844da07a9b9bcfee88b8bf71b5c165593bafad14bf11586a6->enter($__internal_5a7b4c91db6eddd844da07a9b9bcfee88b8bf71b5c165593bafad14bf11586a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 189
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 189, $this->getSourceContext()); })()), "search")) : ("search"));
        // line 190
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_5a7b4c91db6eddd844da07a9b9bcfee88b8bf71b5c165593bafad14bf11586a6->leave($__internal_5a7b4c91db6eddd844da07a9b9bcfee88b8bf71b5c165593bafad14bf11586a6_prof);

        
        $__internal_e6d06b2d9615d0fcef05045b318873fe89f3bc2dac5597aadabb80e6f800cac9->leave($__internal_e6d06b2d9615d0fcef05045b318873fe89f3bc2dac5597aadabb80e6f800cac9_prof);

    }

    // line 193
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_d80dd74f9a70fc4de970cdb7036d6ee8696256c500090572bd26faad53102599 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d80dd74f9a70fc4de970cdb7036d6ee8696256c500090572bd26faad53102599->enter($__internal_d80dd74f9a70fc4de970cdb7036d6ee8696256c500090572bd26faad53102599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_f9f75830a1bc7e6ba5a857a5e95a3bb9205bfa12c1bb56d07a6efa25d61321ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9f75830a1bc7e6ba5a857a5e95a3bb9205bfa12c1bb56d07a6efa25d61321ac->enter($__internal_f9f75830a1bc7e6ba5a857a5e95a3bb9205bfa12c1bb56d07a6efa25d61321ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 194
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 194, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 195
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_f9f75830a1bc7e6ba5a857a5e95a3bb9205bfa12c1bb56d07a6efa25d61321ac->leave($__internal_f9f75830a1bc7e6ba5a857a5e95a3bb9205bfa12c1bb56d07a6efa25d61321ac_prof);

        
        $__internal_d80dd74f9a70fc4de970cdb7036d6ee8696256c500090572bd26faad53102599->leave($__internal_d80dd74f9a70fc4de970cdb7036d6ee8696256c500090572bd26faad53102599_prof);

    }

    // line 198
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_69ce5a6a2f3b93404abe3f1b54726f5f4315076dc851c9b61f1dea8f0fdeb575 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69ce5a6a2f3b93404abe3f1b54726f5f4315076dc851c9b61f1dea8f0fdeb575->enter($__internal_69ce5a6a2f3b93404abe3f1b54726f5f4315076dc851c9b61f1dea8f0fdeb575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        $__internal_967fd82cc16ff9ff5ea74efce6ac17594d3a97a5db27e951b0d18a5dedefc5ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_967fd82cc16ff9ff5ea74efce6ac17594d3a97a5db27e951b0d18a5dedefc5ae->enter($__internal_967fd82cc16ff9ff5ea74efce6ac17594d3a97a5db27e951b0d18a5dedefc5ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 199
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 199, $this->getSourceContext()); })()), "password")) : ("password"));
        // line 200
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_967fd82cc16ff9ff5ea74efce6ac17594d3a97a5db27e951b0d18a5dedefc5ae->leave($__internal_967fd82cc16ff9ff5ea74efce6ac17594d3a97a5db27e951b0d18a5dedefc5ae_prof);

        
        $__internal_69ce5a6a2f3b93404abe3f1b54726f5f4315076dc851c9b61f1dea8f0fdeb575->leave($__internal_69ce5a6a2f3b93404abe3f1b54726f5f4315076dc851c9b61f1dea8f0fdeb575_prof);

    }

    // line 203
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_aa1377648ad1814e81ccad2e02fed44454738133ea898a2ae4d72d805bd32a54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa1377648ad1814e81ccad2e02fed44454738133ea898a2ae4d72d805bd32a54->enter($__internal_aa1377648ad1814e81ccad2e02fed44454738133ea898a2ae4d72d805bd32a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        $__internal_cbb563f0a8f437a2d97bd5e0675ac4b4edef99b41bfc0ed4f7bba13685aed91a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbb563f0a8f437a2d97bd5e0675ac4b4edef99b41bfc0ed4f7bba13685aed91a->enter($__internal_cbb563f0a8f437a2d97bd5e0675ac4b4edef99b41bfc0ed4f7bba13685aed91a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 204
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 204, $this->getSourceContext()); })()), "hidden")) : ("hidden"));
        // line 205
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_cbb563f0a8f437a2d97bd5e0675ac4b4edef99b41bfc0ed4f7bba13685aed91a->leave($__internal_cbb563f0a8f437a2d97bd5e0675ac4b4edef99b41bfc0ed4f7bba13685aed91a_prof);

        
        $__internal_aa1377648ad1814e81ccad2e02fed44454738133ea898a2ae4d72d805bd32a54->leave($__internal_aa1377648ad1814e81ccad2e02fed44454738133ea898a2ae4d72d805bd32a54_prof);

    }

    // line 208
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_fd287872199667812ce9baf4aaee637c8f71caa4cd5481d762d56b21066e6318 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd287872199667812ce9baf4aaee637c8f71caa4cd5481d762d56b21066e6318->enter($__internal_fd287872199667812ce9baf4aaee637c8f71caa4cd5481d762d56b21066e6318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        $__internal_3a262622a3ef92c31bf3c41b0a3fa64aee590f9e310f71b8e278873ec3e1cf66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a262622a3ef92c31bf3c41b0a3fa64aee590f9e310f71b8e278873ec3e1cf66->enter($__internal_3a262622a3ef92c31bf3c41b0a3fa64aee590f9e310f71b8e278873ec3e1cf66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 209
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 209, $this->getSourceContext()); })()), "email")) : ("email"));
        // line 210
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_3a262622a3ef92c31bf3c41b0a3fa64aee590f9e310f71b8e278873ec3e1cf66->leave($__internal_3a262622a3ef92c31bf3c41b0a3fa64aee590f9e310f71b8e278873ec3e1cf66_prof);

        
        $__internal_fd287872199667812ce9baf4aaee637c8f71caa4cd5481d762d56b21066e6318->leave($__internal_fd287872199667812ce9baf4aaee637c8f71caa4cd5481d762d56b21066e6318_prof);

    }

    // line 213
    public function block_range_widget($context, array $blocks = array())
    {
        $__internal_10774acf133894247daedd8f62e35c231aafe788d8e05ab32a92ca4a31149902 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10774acf133894247daedd8f62e35c231aafe788d8e05ab32a92ca4a31149902->enter($__internal_10774acf133894247daedd8f62e35c231aafe788d8e05ab32a92ca4a31149902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        $__internal_a56d5299591137bc423e894c561c6f67331e9f9b89cda396ae6ef86a4adad04c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a56d5299591137bc423e894c561c6f67331e9f9b89cda396ae6ef86a4adad04c->enter($__internal_a56d5299591137bc423e894c561c6f67331e9f9b89cda396ae6ef86a4adad04c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        // line 214
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 214, $this->getSourceContext()); })()), "range")) : ("range"));
        // line 215
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_a56d5299591137bc423e894c561c6f67331e9f9b89cda396ae6ef86a4adad04c->leave($__internal_a56d5299591137bc423e894c561c6f67331e9f9b89cda396ae6ef86a4adad04c_prof);

        
        $__internal_10774acf133894247daedd8f62e35c231aafe788d8e05ab32a92ca4a31149902->leave($__internal_10774acf133894247daedd8f62e35c231aafe788d8e05ab32a92ca4a31149902_prof);

    }

    // line 218
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_42dc6f6d6cd2967ab68ba6b512d72bbfa6fefea8e31f03d67220ea966a5fd06c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42dc6f6d6cd2967ab68ba6b512d72bbfa6fefea8e31f03d67220ea966a5fd06c->enter($__internal_42dc6f6d6cd2967ab68ba6b512d72bbfa6fefea8e31f03d67220ea966a5fd06c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_46dbde8ee566c393320e5c1429ac0bf5c9c7a09b900d7a8e54f873c2b5af296e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46dbde8ee566c393320e5c1429ac0bf5c9c7a09b900d7a8e54f873c2b5af296e->enter($__internal_46dbde8ee566c393320e5c1429ac0bf5c9c7a09b900d7a8e54f873c2b5af296e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 219
        if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 219, $this->getSourceContext()); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 219, $this->getSourceContext()); })())))) {
            // line 220
            if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 220, $this->getSourceContext()); })()))) {
                // line 221
                $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 221, $this->getSourceContext()); })()), array("%name%" =>                 // line 222
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 222, $this->getSourceContext()); })()), "%id%" =>                 // line 223
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 223, $this->getSourceContext()); })())));
            } else {
                // line 226
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 226, $this->getSourceContext()); })()));
            }
        }
        // line 229
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 229, $this->getSourceContext()); })()), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 229, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 229, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 229, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 229, $this->getSourceContext()); })())))), "html", null, true);
        echo "</button>";
        
        $__internal_46dbde8ee566c393320e5c1429ac0bf5c9c7a09b900d7a8e54f873c2b5af296e->leave($__internal_46dbde8ee566c393320e5c1429ac0bf5c9c7a09b900d7a8e54f873c2b5af296e_prof);

        
        $__internal_42dc6f6d6cd2967ab68ba6b512d72bbfa6fefea8e31f03d67220ea966a5fd06c->leave($__internal_42dc6f6d6cd2967ab68ba6b512d72bbfa6fefea8e31f03d67220ea966a5fd06c_prof);

    }

    // line 232
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_b4bc4d7b2e5ac15edc7dbce60c7cf2ecb060c431e17fe97e41cfc7178703b95e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4bc4d7b2e5ac15edc7dbce60c7cf2ecb060c431e17fe97e41cfc7178703b95e->enter($__internal_b4bc4d7b2e5ac15edc7dbce60c7cf2ecb060c431e17fe97e41cfc7178703b95e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        $__internal_3c9b9378c47795f5186dd6dd2ff76ee1cd5f20bf9b09dcb25220374ab726aefb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c9b9378c47795f5186dd6dd2ff76ee1cd5f20bf9b09dcb25220374ab726aefb->enter($__internal_3c9b9378c47795f5186dd6dd2ff76ee1cd5f20bf9b09dcb25220374ab726aefb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 233
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 233, $this->getSourceContext()); })()), "submit")) : ("submit"));
        // line 234
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_3c9b9378c47795f5186dd6dd2ff76ee1cd5f20bf9b09dcb25220374ab726aefb->leave($__internal_3c9b9378c47795f5186dd6dd2ff76ee1cd5f20bf9b09dcb25220374ab726aefb_prof);

        
        $__internal_b4bc4d7b2e5ac15edc7dbce60c7cf2ecb060c431e17fe97e41cfc7178703b95e->leave($__internal_b4bc4d7b2e5ac15edc7dbce60c7cf2ecb060c431e17fe97e41cfc7178703b95e_prof);

    }

    // line 237
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_30e7c95681da420c1728a595d112652b2931ac1a927a9176169934a82516407f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30e7c95681da420c1728a595d112652b2931ac1a927a9176169934a82516407f->enter($__internal_30e7c95681da420c1728a595d112652b2931ac1a927a9176169934a82516407f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        $__internal_6568ab87224ac2a825f26d3dcf693fe787e1aaafc3b7a0e19584ea833dee101d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6568ab87224ac2a825f26d3dcf693fe787e1aaafc3b7a0e19584ea833dee101d->enter($__internal_6568ab87224ac2a825f26d3dcf693fe787e1aaafc3b7a0e19584ea833dee101d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 238
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 238, $this->getSourceContext()); })()), "reset")) : ("reset"));
        // line 239
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_6568ab87224ac2a825f26d3dcf693fe787e1aaafc3b7a0e19584ea833dee101d->leave($__internal_6568ab87224ac2a825f26d3dcf693fe787e1aaafc3b7a0e19584ea833dee101d_prof);

        
        $__internal_30e7c95681da420c1728a595d112652b2931ac1a927a9176169934a82516407f->leave($__internal_30e7c95681da420c1728a595d112652b2931ac1a927a9176169934a82516407f_prof);

    }

    // line 242
    public function block_tel_widget($context, array $blocks = array())
    {
        $__internal_10307fd85d8ffb0354e918c4e90b29a059a042e3f6a3e536306d8fbbcc8f7b54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10307fd85d8ffb0354e918c4e90b29a059a042e3f6a3e536306d8fbbcc8f7b54->enter($__internal_10307fd85d8ffb0354e918c4e90b29a059a042e3f6a3e536306d8fbbcc8f7b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        $__internal_9fa63bcadda5b668312ea368b54de34c6b0c3ebdf7289a8c4f92c746721f86b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fa63bcadda5b668312ea368b54de34c6b0c3ebdf7289a8c4f92c746721f86b9->enter($__internal_9fa63bcadda5b668312ea368b54de34c6b0c3ebdf7289a8c4f92c746721f86b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        // line 243
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 243, $this->getSourceContext()); })()), "tel")) : ("tel"));
        // line 244
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_9fa63bcadda5b668312ea368b54de34c6b0c3ebdf7289a8c4f92c746721f86b9->leave($__internal_9fa63bcadda5b668312ea368b54de34c6b0c3ebdf7289a8c4f92c746721f86b9_prof);

        
        $__internal_10307fd85d8ffb0354e918c4e90b29a059a042e3f6a3e536306d8fbbcc8f7b54->leave($__internal_10307fd85d8ffb0354e918c4e90b29a059a042e3f6a3e536306d8fbbcc8f7b54_prof);

    }

    // line 247
    public function block_color_widget($context, array $blocks = array())
    {
        $__internal_a1c90045c3895310513d2775dbe239725150e8c5e4cad8bd25b35f161182e874 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1c90045c3895310513d2775dbe239725150e8c5e4cad8bd25b35f161182e874->enter($__internal_a1c90045c3895310513d2775dbe239725150e8c5e4cad8bd25b35f161182e874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        $__internal_432ef6d6c230f6e4613b89eeb99d812c60b42e6dcc31303d463c24eaf9426219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_432ef6d6c230f6e4613b89eeb99d812c60b42e6dcc31303d463c24eaf9426219->enter($__internal_432ef6d6c230f6e4613b89eeb99d812c60b42e6dcc31303d463c24eaf9426219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        // line 248
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 248, $this->getSourceContext()); })()), "color")) : ("color"));
        // line 249
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_432ef6d6c230f6e4613b89eeb99d812c60b42e6dcc31303d463c24eaf9426219->leave($__internal_432ef6d6c230f6e4613b89eeb99d812c60b42e6dcc31303d463c24eaf9426219_prof);

        
        $__internal_a1c90045c3895310513d2775dbe239725150e8c5e4cad8bd25b35f161182e874->leave($__internal_a1c90045c3895310513d2775dbe239725150e8c5e4cad8bd25b35f161182e874_prof);

    }

    // line 254
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_1cc8f7ba2339b7df9e398e1d6941296e7d4d85f31e2effabe0ca953567d0ee71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cc8f7ba2339b7df9e398e1d6941296e7d4d85f31e2effabe0ca953567d0ee71->enter($__internal_1cc8f7ba2339b7df9e398e1d6941296e7d4d85f31e2effabe0ca953567d0ee71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_1e54fe0ce30ee876743113ee6fba752eb963cc9bfe71de397ceaf87804798c42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e54fe0ce30ee876743113ee6fba752eb963cc9bfe71de397ceaf87804798c42->enter($__internal_1e54fe0ce30ee876743113ee6fba752eb963cc9bfe71de397ceaf87804798c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 255
        if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 255, $this->getSourceContext()); })()) === false)) {
            // line 256
            if ( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 256, $this->getSourceContext()); })())) {
                // line 257
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 257, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 257, $this->getSourceContext()); })())));
            }
            // line 259
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 259, $this->getSourceContext()); })())) {
                // line 260
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 260, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 262
            if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 262, $this->getSourceContext()); })()))) {
                // line 263
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 263, $this->getSourceContext()); })()))) {
                    // line 264
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 264, $this->getSourceContext()); })()), array("%name%" =>                     // line 265
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 265, $this->getSourceContext()); })()), "%id%" =>                     // line 266
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 266, $this->getSourceContext()); })())));
                } else {
                    // line 269
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 269, $this->getSourceContext()); })()));
                }
            }
            // line 272
            echo "<";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 272, $this->getSourceContext()); })()), "label")) : ("label")), "html", null, true);
            if ((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 272, $this->getSourceContext()); })())) {
                $__internal_4511dac7c5fe614ada07e65278612391542a78f9a5d23c414ab4184626273e05 = array("attr" => (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 272, $this->getSourceContext()); })()));
                if (!is_array($__internal_4511dac7c5fe614ada07e65278612391542a78f9a5d23c414ab4184626273e05)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_4511dac7c5fe614ada07e65278612391542a78f9a5d23c414ab4184626273e05);
                $this->displayBlock("attributes", $context, $blocks);
                $context = $context['_parent'];
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 272, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 272, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 272, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 272, $this->getSourceContext()); })())))), "html", null, true);
            echo "</";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 272, $this->getSourceContext()); })()), "label")) : ("label")), "html", null, true);
            echo ">";
        }
        
        $__internal_1e54fe0ce30ee876743113ee6fba752eb963cc9bfe71de397ceaf87804798c42->leave($__internal_1e54fe0ce30ee876743113ee6fba752eb963cc9bfe71de397ceaf87804798c42_prof);

        
        $__internal_1cc8f7ba2339b7df9e398e1d6941296e7d4d85f31e2effabe0ca953567d0ee71->leave($__internal_1cc8f7ba2339b7df9e398e1d6941296e7d4d85f31e2effabe0ca953567d0ee71_prof);

    }

    // line 276
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_3bf9c7c1d083e6fa7145fdd1aaed2a234937b266fe195577c4f629c34ce9d5e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bf9c7c1d083e6fa7145fdd1aaed2a234937b266fe195577c4f629c34ce9d5e6->enter($__internal_3bf9c7c1d083e6fa7145fdd1aaed2a234937b266fe195577c4f629c34ce9d5e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        $__internal_4454e3be6c498adee1ac6759a55cb1f31f345c6cd03dc9dfbbe5bbb902fad254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4454e3be6c498adee1ac6759a55cb1f31f345c6cd03dc9dfbbe5bbb902fad254->enter($__internal_4454e3be6c498adee1ac6759a55cb1f31f345c6cd03dc9dfbbe5bbb902fad254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_4454e3be6c498adee1ac6759a55cb1f31f345c6cd03dc9dfbbe5bbb902fad254->leave($__internal_4454e3be6c498adee1ac6759a55cb1f31f345c6cd03dc9dfbbe5bbb902fad254_prof);

        
        $__internal_3bf9c7c1d083e6fa7145fdd1aaed2a234937b266fe195577c4f629c34ce9d5e6->leave($__internal_3bf9c7c1d083e6fa7145fdd1aaed2a234937b266fe195577c4f629c34ce9d5e6_prof);

    }

    // line 280
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_1b69ed4908c4cc02a4e9e66e52d915aec620b841ba8f1d2b8f4e5daa7ee882a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b69ed4908c4cc02a4e9e66e52d915aec620b841ba8f1d2b8f4e5daa7ee882a1->enter($__internal_1b69ed4908c4cc02a4e9e66e52d915aec620b841ba8f1d2b8f4e5daa7ee882a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        $__internal_93fe91feedd4dbabb2bf80a4a97531fbeb9d0c983acea01d2a13bbb4ff9c7120 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93fe91feedd4dbabb2bf80a4a97531fbeb9d0c983acea01d2a13bbb4ff9c7120->enter($__internal_93fe91feedd4dbabb2bf80a4a97531fbeb9d0c983acea01d2a13bbb4ff9c7120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 285
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_93fe91feedd4dbabb2bf80a4a97531fbeb9d0c983acea01d2a13bbb4ff9c7120->leave($__internal_93fe91feedd4dbabb2bf80a4a97531fbeb9d0c983acea01d2a13bbb4ff9c7120_prof);

        
        $__internal_1b69ed4908c4cc02a4e9e66e52d915aec620b841ba8f1d2b8f4e5daa7ee882a1->leave($__internal_1b69ed4908c4cc02a4e9e66e52d915aec620b841ba8f1d2b8f4e5daa7ee882a1_prof);

    }

    // line 288
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_5e58751ea40fc306231faac55abd5bef8e8b922da9d292644c2c70a2b8d8636c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e58751ea40fc306231faac55abd5bef8e8b922da9d292644c2c70a2b8d8636c->enter($__internal_5e58751ea40fc306231faac55abd5bef8e8b922da9d292644c2c70a2b8d8636c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_ee65cbf1785f14cdbcbdda51eefcce3340907f9f1c75b16bec4fcfb3d4f79f7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee65cbf1785f14cdbcbdda51eefcce3340907f9f1c75b16bec4fcfb3d4f79f7c->enter($__internal_ee65cbf1785f14cdbcbdda51eefcce3340907f9f1c75b16bec4fcfb3d4f79f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 289
        echo "<div>";
        // line 290
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 290, $this->getSourceContext()); })()), 'label');
        // line 291
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 291, $this->getSourceContext()); })()), 'errors');
        // line 292
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 292, $this->getSourceContext()); })()), 'widget');
        // line 293
        echo "</div>";
        
        $__internal_ee65cbf1785f14cdbcbdda51eefcce3340907f9f1c75b16bec4fcfb3d4f79f7c->leave($__internal_ee65cbf1785f14cdbcbdda51eefcce3340907f9f1c75b16bec4fcfb3d4f79f7c_prof);

        
        $__internal_5e58751ea40fc306231faac55abd5bef8e8b922da9d292644c2c70a2b8d8636c->leave($__internal_5e58751ea40fc306231faac55abd5bef8e8b922da9d292644c2c70a2b8d8636c_prof);

    }

    // line 296
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_94e61f27ca7f0e9474dd2eddc234d15a1cbc1831000d07e8cb455eb45af23144 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94e61f27ca7f0e9474dd2eddc234d15a1cbc1831000d07e8cb455eb45af23144->enter($__internal_94e61f27ca7f0e9474dd2eddc234d15a1cbc1831000d07e8cb455eb45af23144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_c2fb29f48ccf6a911cb887801b8aec266bdb670fabd93a6f646da8a37c874efa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2fb29f48ccf6a911cb887801b8aec266bdb670fabd93a6f646da8a37c874efa->enter($__internal_c2fb29f48ccf6a911cb887801b8aec266bdb670fabd93a6f646da8a37c874efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 297
        echo "<div>";
        // line 298
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 298, $this->getSourceContext()); })()), 'widget');
        // line 299
        echo "</div>";
        
        $__internal_c2fb29f48ccf6a911cb887801b8aec266bdb670fabd93a6f646da8a37c874efa->leave($__internal_c2fb29f48ccf6a911cb887801b8aec266bdb670fabd93a6f646da8a37c874efa_prof);

        
        $__internal_94e61f27ca7f0e9474dd2eddc234d15a1cbc1831000d07e8cb455eb45af23144->leave($__internal_94e61f27ca7f0e9474dd2eddc234d15a1cbc1831000d07e8cb455eb45af23144_prof);

    }

    // line 302
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_4ff8725bf12f7d8ca3d54fdd94291b76c85dac6c325d6e7d04bae4445511ece7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ff8725bf12f7d8ca3d54fdd94291b76c85dac6c325d6e7d04bae4445511ece7->enter($__internal_4ff8725bf12f7d8ca3d54fdd94291b76c85dac6c325d6e7d04bae4445511ece7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_6d1000dba0a451d1e56e4882d008e9595196f8a5c7edf8382f14a2ddec004f6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d1000dba0a451d1e56e4882d008e9595196f8a5c7edf8382f14a2ddec004f6e->enter($__internal_6d1000dba0a451d1e56e4882d008e9595196f8a5c7edf8382f14a2ddec004f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 303
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 303, $this->getSourceContext()); })()), 'widget');
        
        $__internal_6d1000dba0a451d1e56e4882d008e9595196f8a5c7edf8382f14a2ddec004f6e->leave($__internal_6d1000dba0a451d1e56e4882d008e9595196f8a5c7edf8382f14a2ddec004f6e_prof);

        
        $__internal_4ff8725bf12f7d8ca3d54fdd94291b76c85dac6c325d6e7d04bae4445511ece7->leave($__internal_4ff8725bf12f7d8ca3d54fdd94291b76c85dac6c325d6e7d04bae4445511ece7_prof);

    }

    // line 308
    public function block_form($context, array $blocks = array())
    {
        $__internal_e2ce01629cfb329a98f0b4464cbce45d131962f459dd015660ef54764fcfe141 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2ce01629cfb329a98f0b4464cbce45d131962f459dd015660ef54764fcfe141->enter($__internal_e2ce01629cfb329a98f0b4464cbce45d131962f459dd015660ef54764fcfe141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_6390ee39e9f0f21cb8cf2227d92bb388b3a968a33602cb75e0a1397c4d078168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6390ee39e9f0f21cb8cf2227d92bb388b3a968a33602cb75e0a1397c4d078168->enter($__internal_6390ee39e9f0f21cb8cf2227d92bb388b3a968a33602cb75e0a1397c4d078168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 309
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 309, $this->getSourceContext()); })()), 'form_start');
        // line 310
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 310, $this->getSourceContext()); })()), 'widget');
        // line 311
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 311, $this->getSourceContext()); })()), 'form_end');
        
        $__internal_6390ee39e9f0f21cb8cf2227d92bb388b3a968a33602cb75e0a1397c4d078168->leave($__internal_6390ee39e9f0f21cb8cf2227d92bb388b3a968a33602cb75e0a1397c4d078168_prof);

        
        $__internal_e2ce01629cfb329a98f0b4464cbce45d131962f459dd015660ef54764fcfe141->leave($__internal_e2ce01629cfb329a98f0b4464cbce45d131962f459dd015660ef54764fcfe141_prof);

    }

    // line 314
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_537d2e9f6776767ba9344a39109367cd633a78de1afab18bb9736bb97518a681 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_537d2e9f6776767ba9344a39109367cd633a78de1afab18bb9736bb97518a681->enter($__internal_537d2e9f6776767ba9344a39109367cd633a78de1afab18bb9736bb97518a681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_e8f2ee7467d823959d92a4842f3fc901031e69fac376c5df5a2d4d71ddecc808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8f2ee7467d823959d92a4842f3fc901031e69fac376c5df5a2d4d71ddecc808->enter($__internal_e8f2ee7467d823959d92a4842f3fc901031e69fac376c5df5a2d4d71ddecc808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 315
        twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 315, $this->getSourceContext()); })()), "setMethodRendered", array(), "method");
        // line 316
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 316, $this->getSourceContext()); })()));
        // line 317
        if (twig_in_filter((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 317, $this->getSourceContext()); })()), array(0 => "GET", 1 => "POST"))) {
            // line 318
            $context["form_method"] = (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 318, $this->getSourceContext()); })());
        } else {
            // line 320
            $context["form_method"] = "POST";
        }
        // line 322
        echo "<form name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 322, $this->getSourceContext()); })()), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 322, $this->getSourceContext()); })())), "html", null, true);
        echo "\"";
        if (((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 322, $this->getSourceContext()); })()) != "")) {
            echo " action=\"";
            echo twig_escape_filter($this->env, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 322, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 322, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if ((isset($context["multipart"]) || array_key_exists("multipart", $context) ? $context["multipart"] : (function () { throw new Twig_Error_Runtime('Variable "multipart" does not exist.', 322, $this->getSourceContext()); })())) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 323
        if (((isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 323, $this->getSourceContext()); })()) != (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 323, $this->getSourceContext()); })()))) {
            // line 324
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 324, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />";
        }
        
        $__internal_e8f2ee7467d823959d92a4842f3fc901031e69fac376c5df5a2d4d71ddecc808->leave($__internal_e8f2ee7467d823959d92a4842f3fc901031e69fac376c5df5a2d4d71ddecc808_prof);

        
        $__internal_537d2e9f6776767ba9344a39109367cd633a78de1afab18bb9736bb97518a681->leave($__internal_537d2e9f6776767ba9344a39109367cd633a78de1afab18bb9736bb97518a681_prof);

    }

    // line 328
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_e7488e4afc67df00ffae5882af791b26d9e777927051894f6c8e876113d2293b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7488e4afc67df00ffae5882af791b26d9e777927051894f6c8e876113d2293b->enter($__internal_e7488e4afc67df00ffae5882af791b26d9e777927051894f6c8e876113d2293b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        $__internal_a86901b79309cd067fa0376db2da0020b051e73bf1e642067c5754b20eaebf5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a86901b79309cd067fa0376db2da0020b051e73bf1e642067c5754b20eaebf5a->enter($__internal_a86901b79309cd067fa0376db2da0020b051e73bf1e642067c5754b20eaebf5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 329
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) || array_key_exists("render_rest", $context) ? $context["render_rest"] : (function () { throw new Twig_Error_Runtime('Variable "render_rest" does not exist.', 329, $this->getSourceContext()); })()))) {
            // line 330
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 330, $this->getSourceContext()); })()), 'rest');
        }
        // line 332
        echo "</form>";
        
        $__internal_a86901b79309cd067fa0376db2da0020b051e73bf1e642067c5754b20eaebf5a->leave($__internal_a86901b79309cd067fa0376db2da0020b051e73bf1e642067c5754b20eaebf5a_prof);

        
        $__internal_e7488e4afc67df00ffae5882af791b26d9e777927051894f6c8e876113d2293b->leave($__internal_e7488e4afc67df00ffae5882af791b26d9e777927051894f6c8e876113d2293b_prof);

    }

    // line 335
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_342b3c3d4b4762d70ba394dda6e6c16000450ecf6b359a1f86a0ecba457016b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_342b3c3d4b4762d70ba394dda6e6c16000450ecf6b359a1f86a0ecba457016b7->enter($__internal_342b3c3d4b4762d70ba394dda6e6c16000450ecf6b359a1f86a0ecba457016b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_a19111b329a480aec5f711eb749b24ab8ea1ab7b21de4befb191f7f8408c7b2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a19111b329a480aec5f711eb749b24ab8ea1ab7b21de4befb191f7f8408c7b2b->enter($__internal_a19111b329a480aec5f711eb749b24ab8ea1ab7b21de4befb191f7f8408c7b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 336
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 336, $this->getSourceContext()); })())) > 0)) {
            // line 337
            echo "<ul>";
            // line 338
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 338, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 339
                echo "<li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 341
            echo "</ul>";
        }
        
        $__internal_a19111b329a480aec5f711eb749b24ab8ea1ab7b21de4befb191f7f8408c7b2b->leave($__internal_a19111b329a480aec5f711eb749b24ab8ea1ab7b21de4befb191f7f8408c7b2b_prof);

        
        $__internal_342b3c3d4b4762d70ba394dda6e6c16000450ecf6b359a1f86a0ecba457016b7->leave($__internal_342b3c3d4b4762d70ba394dda6e6c16000450ecf6b359a1f86a0ecba457016b7_prof);

    }

    // line 345
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_9f85dc5d9bce491ee20d1463d587c8edab2bf419fa64bcf1b576bdd4923e11b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f85dc5d9bce491ee20d1463d587c8edab2bf419fa64bcf1b576bdd4923e11b8->enter($__internal_9f85dc5d9bce491ee20d1463d587c8edab2bf419fa64bcf1b576bdd4923e11b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        $__internal_fc89e3b383d64b65db4725e8750f878a08da6c3ac79653316e0b4782a79e377f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc89e3b383d64b65db4725e8750f878a08da6c3ac79653316e0b4782a79e377f->enter($__internal_fc89e3b383d64b65db4725e8750f878a08da6c3ac79653316e0b4782a79e377f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 346
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 346, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 347
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "rendered", array())) {
                // line 348
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 352
        if (( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 352, $this->getSourceContext()); })()), "methodRendered", array()) && Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 352, $this->getSourceContext()); })())))) {
            // line 353
            twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 353, $this->getSourceContext()); })()), "setMethodRendered", array(), "method");
            // line 354
            $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 354, $this->getSourceContext()); })()));
            // line 355
            if (twig_in_filter((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 355, $this->getSourceContext()); })()), array(0 => "GET", 1 => "POST"))) {
                // line 356
                $context["form_method"] = (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 356, $this->getSourceContext()); })());
            } else {
                // line 358
                $context["form_method"] = "POST";
            }
            // line 361
            if (((isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 361, $this->getSourceContext()); })()) != (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 361, $this->getSourceContext()); })()))) {
                // line 362
                echo "<input type=\"hidden\" name=\"_method\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 362, $this->getSourceContext()); })()), "html", null, true);
                echo "\" />";
            }
        }
        
        $__internal_fc89e3b383d64b65db4725e8750f878a08da6c3ac79653316e0b4782a79e377f->leave($__internal_fc89e3b383d64b65db4725e8750f878a08da6c3ac79653316e0b4782a79e377f_prof);

        
        $__internal_9f85dc5d9bce491ee20d1463d587c8edab2bf419fa64bcf1b576bdd4923e11b8->leave($__internal_9f85dc5d9bce491ee20d1463d587c8edab2bf419fa64bcf1b576bdd4923e11b8_prof);

    }

    // line 369
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_0d2456f0d9d7b94bd3e1dab08767369e2ef7c08a55e0009a8d142422a1574d96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d2456f0d9d7b94bd3e1dab08767369e2ef7c08a55e0009a8d142422a1574d96->enter($__internal_0d2456f0d9d7b94bd3e1dab08767369e2ef7c08a55e0009a8d142422a1574d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        $__internal_c96cf1561c10b02c55ac8b2e0a8960eb643e77cad4950961ce45502da9740e87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c96cf1561c10b02c55ac8b2e0a8960eb643e77cad4950961ce45502da9740e87->enter($__internal_c96cf1561c10b02c55ac8b2e0a8960eb643e77cad4950961ce45502da9740e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 370
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 370, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 371
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_c96cf1561c10b02c55ac8b2e0a8960eb643e77cad4950961ce45502da9740e87->leave($__internal_c96cf1561c10b02c55ac8b2e0a8960eb643e77cad4950961ce45502da9740e87_prof);

        
        $__internal_0d2456f0d9d7b94bd3e1dab08767369e2ef7c08a55e0009a8d142422a1574d96->leave($__internal_0d2456f0d9d7b94bd3e1dab08767369e2ef7c08a55e0009a8d142422a1574d96_prof);

    }

    // line 375
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_4e06203c6b3c33f60cae5770aa87853b27e1b1b708568cbaec7d75f795d506fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e06203c6b3c33f60cae5770aa87853b27e1b1b708568cbaec7d75f795d506fe->enter($__internal_4e06203c6b3c33f60cae5770aa87853b27e1b1b708568cbaec7d75f795d506fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_8eb407676ff4fa2591679714672e92b55cb5cb1b00f96b323c128105f10ddb0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eb407676ff4fa2591679714672e92b55cb5cb1b00f96b323c128105f10ddb0b->enter($__internal_8eb407676ff4fa2591679714672e92b55cb5cb1b00f96b323c128105f10ddb0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 376
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 376, $this->getSourceContext()); })()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 376, $this->getSourceContext()); })()), "html", null, true);
        echo "\"";
        // line 377
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 377, $this->getSourceContext()); })())) {
            echo " disabled=\"disabled\"";
        }
        // line 378
        if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 378, $this->getSourceContext()); })())) {
            echo " required=\"required\"";
        }
        // line 379
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_8eb407676ff4fa2591679714672e92b55cb5cb1b00f96b323c128105f10ddb0b->leave($__internal_8eb407676ff4fa2591679714672e92b55cb5cb1b00f96b323c128105f10ddb0b_prof);

        
        $__internal_4e06203c6b3c33f60cae5770aa87853b27e1b1b708568cbaec7d75f795d506fe->leave($__internal_4e06203c6b3c33f60cae5770aa87853b27e1b1b708568cbaec7d75f795d506fe_prof);

    }

    // line 382
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_ac0adda3156b48d55d1bc7c9bed778b91ba701e3561fb367319dfa34188ea015 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac0adda3156b48d55d1bc7c9bed778b91ba701e3561fb367319dfa34188ea015->enter($__internal_ac0adda3156b48d55d1bc7c9bed778b91ba701e3561fb367319dfa34188ea015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        $__internal_7d21bec0b8d6bd617e8edb701e7ff00ac8eb9807895af4625eb66df78d9d84fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d21bec0b8d6bd617e8edb701e7ff00ac8eb9807895af4625eb66df78d9d84fd->enter($__internal_7d21bec0b8d6bd617e8edb701e7ff00ac8eb9807895af4625eb66df78d9d84fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 383
        if ( !twig_test_empty((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 383, $this->getSourceContext()); })()))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 383, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        // line 384
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_7d21bec0b8d6bd617e8edb701e7ff00ac8eb9807895af4625eb66df78d9d84fd->leave($__internal_7d21bec0b8d6bd617e8edb701e7ff00ac8eb9807895af4625eb66df78d9d84fd_prof);

        
        $__internal_ac0adda3156b48d55d1bc7c9bed778b91ba701e3561fb367319dfa34188ea015->leave($__internal_ac0adda3156b48d55d1bc7c9bed778b91ba701e3561fb367319dfa34188ea015_prof);

    }

    // line 387
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_2f1972cc48895cc05be163b75a8aa1a08941c1894764e206dfb03450c4f63b25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f1972cc48895cc05be163b75a8aa1a08941c1894764e206dfb03450c4f63b25->enter($__internal_2f1972cc48895cc05be163b75a8aa1a08941c1894764e206dfb03450c4f63b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        $__internal_42efb9079770654e91e38e24be6998aa8fda0bf5bfd2924fa748b02151ebb4f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42efb9079770654e91e38e24be6998aa8fda0bf5bfd2924fa748b02151ebb4f9->enter($__internal_42efb9079770654e91e38e24be6998aa8fda0bf5bfd2924fa748b02151ebb4f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 388
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 388, $this->getSourceContext()); })()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 388, $this->getSourceContext()); })()), "html", null, true);
        echo "\"";
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 388, $this->getSourceContext()); })())) {
            echo " disabled=\"disabled\"";
        }
        // line 389
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_42efb9079770654e91e38e24be6998aa8fda0bf5bfd2924fa748b02151ebb4f9->leave($__internal_42efb9079770654e91e38e24be6998aa8fda0bf5bfd2924fa748b02151ebb4f9_prof);

        
        $__internal_2f1972cc48895cc05be163b75a8aa1a08941c1894764e206dfb03450c4f63b25->leave($__internal_2f1972cc48895cc05be163b75a8aa1a08941c1894764e206dfb03450c4f63b25_prof);

    }

    // line 392
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_67154082322371350894639253340d76b1c81f54f5ad70dd8a1d411b3f6183a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67154082322371350894639253340d76b1c81f54f5ad70dd8a1d411b3f6183a1->enter($__internal_67154082322371350894639253340d76b1c81f54f5ad70dd8a1d411b3f6183a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        $__internal_b006e7d79ccf2d818b04ba601d1fbd33dd701e7f820bd7503ef151de9f5f90e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b006e7d79ccf2d818b04ba601d1fbd33dd701e7f820bd7503ef151de9f5f90e2->enter($__internal_b006e7d79ccf2d818b04ba601d1fbd33dd701e7f820bd7503ef151de9f5f90e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 393
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 393, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 394
            echo " ";
            // line 395
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 396
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 396, $this->getSourceContext()); })()) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 396, $this->getSourceContext()); })())))), "html", null, true);
                echo "\"";
            } elseif ((            // line 397
$context["attrvalue"] === true)) {
                // line 398
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 399
$context["attrvalue"] === false)) {
                // line 400
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_b006e7d79ccf2d818b04ba601d1fbd33dd701e7f820bd7503ef151de9f5f90e2->leave($__internal_b006e7d79ccf2d818b04ba601d1fbd33dd701e7f820bd7503ef151de9f5f90e2_prof);

        
        $__internal_67154082322371350894639253340d76b1c81f54f5ad70dd8a1d411b3f6183a1->leave($__internal_67154082322371350894639253340d76b1c81f54f5ad70dd8a1d411b3f6183a1_prof);

    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1654 => 400,  1652 => 399,  1647 => 398,  1645 => 397,  1640 => 396,  1638 => 395,  1636 => 394,  1632 => 393,  1623 => 392,  1613 => 389,  1604 => 388,  1595 => 387,  1585 => 384,  1579 => 383,  1570 => 382,  1560 => 379,  1556 => 378,  1552 => 377,  1546 => 376,  1537 => 375,  1523 => 371,  1519 => 370,  1510 => 369,  1496 => 362,  1494 => 361,  1491 => 358,  1488 => 356,  1486 => 355,  1484 => 354,  1482 => 353,  1480 => 352,  1473 => 348,  1471 => 347,  1467 => 346,  1458 => 345,  1447 => 341,  1439 => 339,  1435 => 338,  1433 => 337,  1431 => 336,  1422 => 335,  1412 => 332,  1409 => 330,  1407 => 329,  1398 => 328,  1385 => 324,  1383 => 323,  1356 => 322,  1353 => 320,  1350 => 318,  1348 => 317,  1346 => 316,  1344 => 315,  1335 => 314,  1325 => 311,  1323 => 310,  1321 => 309,  1312 => 308,  1302 => 303,  1293 => 302,  1283 => 299,  1281 => 298,  1279 => 297,  1270 => 296,  1260 => 293,  1258 => 292,  1256 => 291,  1254 => 290,  1252 => 289,  1243 => 288,  1233 => 285,  1224 => 280,  1207 => 276,  1180 => 272,  1176 => 269,  1173 => 266,  1172 => 265,  1171 => 264,  1169 => 263,  1167 => 262,  1164 => 260,  1162 => 259,  1159 => 257,  1157 => 256,  1155 => 255,  1146 => 254,  1136 => 249,  1134 => 248,  1125 => 247,  1115 => 244,  1113 => 243,  1104 => 242,  1094 => 239,  1092 => 238,  1083 => 237,  1073 => 234,  1071 => 233,  1062 => 232,  1046 => 229,  1042 => 226,  1039 => 223,  1038 => 222,  1037 => 221,  1035 => 220,  1033 => 219,  1024 => 218,  1014 => 215,  1012 => 214,  1003 => 213,  993 => 210,  991 => 209,  982 => 208,  972 => 205,  970 => 204,  961 => 203,  951 => 200,  949 => 199,  940 => 198,  929 => 195,  927 => 194,  918 => 193,  908 => 190,  906 => 189,  897 => 188,  887 => 185,  885 => 184,  876 => 183,  866 => 180,  857 => 179,  847 => 176,  845 => 175,  836 => 174,  826 => 171,  824 => 170,  815 => 168,  804 => 164,  800 => 163,  796 => 160,  790 => 159,  784 => 158,  778 => 157,  772 => 156,  766 => 155,  760 => 154,  754 => 153,  749 => 149,  743 => 148,  737 => 147,  731 => 146,  725 => 145,  719 => 144,  713 => 143,  707 => 142,  701 => 139,  699 => 138,  695 => 137,  692 => 135,  690 => 134,  681 => 133,  670 => 129,  660 => 128,  655 => 127,  653 => 126,  650 => 124,  648 => 123,  639 => 122,  628 => 118,  626 => 116,  625 => 115,  624 => 114,  623 => 113,  619 => 112,  616 => 110,  614 => 109,  605 => 108,  594 => 104,  592 => 103,  590 => 102,  588 => 101,  586 => 100,  582 => 99,  579 => 97,  577 => 96,  568 => 95,  548 => 92,  539 => 91,  519 => 88,  510 => 87,  469 => 82,  466 => 80,  464 => 79,  462 => 78,  457 => 77,  455 => 76,  438 => 75,  429 => 74,  419 => 71,  417 => 70,  415 => 69,  409 => 66,  407 => 65,  405 => 64,  403 => 63,  401 => 62,  392 => 60,  390 => 59,  383 => 58,  380 => 56,  378 => 55,  369 => 54,  359 => 51,  353 => 49,  351 => 48,  347 => 47,  343 => 46,  334 => 45,  323 => 41,  320 => 39,  318 => 38,  309 => 37,  295 => 34,  286 => 33,  276 => 30,  273 => 28,  271 => 27,  262 => 26,  252 => 23,  250 => 22,  248 => 21,  245 => 19,  243 => 18,  239 => 17,  230 => 16,  210 => 13,  208 => 12,  199 => 11,  188 => 7,  185 => 5,  183 => 4,  174 => 3,  164 => 392,  162 => 387,  160 => 382,  158 => 375,  156 => 369,  153 => 366,  151 => 345,  149 => 335,  147 => 328,  145 => 314,  143 => 308,  141 => 302,  139 => 296,  137 => 288,  135 => 280,  133 => 276,  131 => 254,  129 => 247,  127 => 242,  125 => 237,  123 => 232,  121 => 218,  119 => 213,  117 => 208,  115 => 203,  113 => 198,  111 => 193,  109 => 188,  107 => 183,  105 => 179,  103 => 174,  101 => 168,  99 => 133,  97 => 122,  95 => 108,  93 => 95,  91 => 91,  89 => 87,  87 => 74,  85 => 54,  83 => 45,  81 => 37,  79 => 33,  77 => 26,  75 => 16,  73 => 11,  71 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Widgets #}

{%- block form_widget -%}
    {% if compound %}
        {{- block('form_widget_compound') -}}
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock form_widget -%}

{%- block form_widget_simple -%}
    {%- set type = type|default('text') -%}
    <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
{%- endblock form_widget_simple -%}

{%- block form_widget_compound -%}
    <div {{ block('widget_container_attributes') }}>
        {%- if form is rootform -%}
            {{ form_errors(form) }}
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </div>
{%- endblock form_widget_compound -%}

{%- block collection_widget -%}
    {% if prototype is defined %}
        {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}
    {% endif %}
    {{- block('form_widget') -}}
{%- endblock collection_widget -%}

{%- block textarea_widget -%}
    <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>
{%- endblock textarea_widget -%}

{%- block choice_widget -%}
    {% if expanded %}
        {{- block('choice_widget_expanded') -}}
    {% else %}
        {{- block('choice_widget_collapsed') -}}
    {% endif %}
{%- endblock choice_widget -%}

{%- block choice_widget_expanded -%}
    <div {{ block('widget_container_attributes') }}>
    {%- for child in form %}
        {{- form_widget(child) -}}
        {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}
    {% endfor -%}
    </div>
{%- endblock choice_widget_expanded -%}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
        {%- if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>
        {%- endif -%}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {%- if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif -%}
        {%- endif -%}
        {%- set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed -%}

{%- block choice_widget_options -%}
    {% for group_label, choice in options %}
        {%- if choice is iterable -%}
            <optgroup label=\"{{ choice_translation_domain is same as(false) ? group_label : group_label|trans({}, choice_translation_domain) }}\">
                {% set options = choice %}
                {{- block('choice_widget_options') -}}
            </optgroup>
        {%- else -%}
            <option value=\"{{ choice.value }}\"{% if choice.attr %}{% with { attr: choice.attr } %}{{ block('attributes') }}{% endwith %}{% endif %}{% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, choice_translation_domain) }}</option>
        {%- endif -%}
    {% endfor %}
{%- endblock choice_widget_options -%}

{%- block checkbox_widget -%}
    <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock checkbox_widget -%}

{%- block radio_widget -%}
    <input type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock radio_widget -%}

{%- block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date) -}}
            {{- form_widget(form.time) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget -%}

{%- block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- date_pattern|replace({
                '{{ year }}':  form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}':   form_widget(form.day),
            })|raw -}}
        </div>
    {%- endif -%}
{%- endblock date_widget -%}

{%- block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}
        <div {{ block('widget_container_attributes') }}>
            {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}
        </div>
    {%- endif -%}
{%- endblock time_widget -%}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <table class=\"{{ table_class|default('') }}\">
                <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                </tbody>
            </table>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{%- block number_widget -%}
    {# type=\"number\" doesn't work with floats #}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }}
{%- endblock number_widget -%}

{%- block integer_widget -%}
    {%- set type = type|default('number') -%}
    {{ block('form_widget_simple') }}
{%- endblock integer_widget -%}

{%- block money_widget -%}
    {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}
{%- endblock money_widget -%}

{%- block url_widget -%}
    {%- set type = type|default('url') -%}
    {{ block('form_widget_simple') }}
{%- endblock url_widget -%}

{%- block search_widget -%}
    {%- set type = type|default('search') -%}
    {{ block('form_widget_simple') }}
{%- endblock search_widget -%}

{%- block percent_widget -%}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }} %
{%- endblock percent_widget -%}

{%- block password_widget -%}
    {%- set type = type|default('password') -%}
    {{ block('form_widget_simple') }}
{%- endblock password_widget -%}

{%- block hidden_widget -%}
    {%- set type = type|default('hidden') -%}
    {{ block('form_widget_simple') }}
{%- endblock hidden_widget -%}

{%- block email_widget -%}
    {%- set type = type|default('email') -%}
    {{ block('form_widget_simple') }}
{%- endblock email_widget -%}

{%- block range_widget -%}
    {% set type = type|default('range') %}
    {{- block('form_widget_simple') -}}
{%- endblock range_widget %}

{%- block button_widget -%}
    {%- if label is not same as(false) and label is empty -%}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {%- endif -%}
    <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</button>
{%- endblock button_widget -%}

{%- block submit_widget -%}
    {%- set type = type|default('submit') -%}
    {{ block('button_widget') }}
{%- endblock submit_widget -%}

{%- block reset_widget -%}
    {%- set type = type|default('reset') -%}
    {{ block('button_widget') }}
{%- endblock reset_widget -%}

{%- block tel_widget -%}
    {%- set type = type|default('tel') -%}
    {{ block('form_widget_simple') }}
{%- endblock tel_widget -%}

{%- block color_widget -%}
    {%- set type = type|default('color') -%}
    {{ block('form_widget_simple') }}
{%- endblock color_widget -%}

{# Labels #}

{%- block form_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <{{ element|default('label') }}{% if label_attr %}{% with { attr: label_attr } %}{{ block('attributes') }}{% endwith %}{% endif %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</{{ element|default('label') }}>
    {%- endif -%}
{%- endblock form_label -%}

{%- block button_label -%}{%- endblock -%}

{# Rows #}

{%- block repeated_row -%}
    {#
    No need to render the errors here, as all errors are mapped
    to the first child (see RepeatedTypeValidatorExtension).
    #}
    {{- block('form_rows') -}}
{%- endblock repeated_row -%}

{%- block form_row -%}
    <div>
        {{- form_label(form) -}}
        {{- form_errors(form) -}}
        {{- form_widget(form) -}}
    </div>
{%- endblock form_row -%}

{%- block button_row -%}
    <div>
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row -%}

{%- block hidden_row -%}
    {{ form_widget(form) }}
{%- endblock hidden_row -%}

{# Misc #}

{%- block form -%}
    {{ form_start(form) }}
        {{- form_widget(form) -}}
    {{ form_end(form) }}
{%- endblock form -%}

{%- block form_start -%}
    {%- do form.setMethodRendered() -%}
    {% set method = method|upper %}
    {%- if method in [\"GET\", \"POST\"] -%}
        {% set form_method = method %}
    {%- else -%}
        {% set form_method = \"POST\" %}
    {%- endif -%}
    <form name=\"{{ name }}\" method=\"{{ form_method|lower }}\"{% if action != '' %} action=\"{{ action }}\"{% endif %}{% for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}{% if multipart %} enctype=\"multipart/form-data\"{% endif %}>
    {%- if form_method != method -%}
        <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
    {%- endif -%}
{%- endblock form_start -%}

{%- block form_end -%}
    {%- if not render_rest is defined or render_rest -%}
        {{ form_rest(form) }}
    {%- endif -%}
    </form>
{%- endblock form_end -%}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
    <ul>
        {%- for error in errors -%}
            <li>{{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {%- endif -%}
{%- endblock form_errors -%}

{%- block form_rest -%}
    {% for child in form -%}
        {% if not child.rendered %}
            {{- form_row(child) -}}
        {% endif %}
    {%- endfor -%}

    {% if not form.methodRendered and form is rootform %}
        {%- do form.setMethodRendered() -%}
        {% set method = method|upper %}
        {%- if method in [\"GET\", \"POST\"] -%}
            {% set form_method = method %}
        {%- else -%}
            {% set form_method = \"POST\" %}
        {%- endif -%}

        {%- if form_method != method -%}
            <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
        {%- endif -%}
    {% endif -%}
{% endblock form_rest %}

{# Support #}

{%- block form_rows -%}
    {% for child in form %}
        {{- form_row(child) -}}
    {% endfor %}
{%- endblock form_rows -%}

{%- block widget_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"
    {%- if disabled %} disabled=\"disabled\"{% endif -%}
    {%- if required %} required=\"required\"{% endif -%}
    {{ block('attributes') }}
{%- endblock widget_attributes -%}

{%- block widget_container_attributes -%}
    {%- if id is not empty %}id=\"{{ id }}\"{% endif -%}
    {{ block('attributes') }}
{%- endblock widget_container_attributes -%}

{%- block button_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"{% if disabled %} disabled=\"disabled\"{% endif -%}
    {{ block('attributes') }}
{%- endblock button_attributes -%}

{% block attributes -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock attributes -%}
", "form_div_layout.html.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\form_div_layout.html.twig");
    }
}
