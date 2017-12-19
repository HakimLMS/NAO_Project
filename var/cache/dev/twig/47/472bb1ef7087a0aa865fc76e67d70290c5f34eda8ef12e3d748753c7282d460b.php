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
        $__internal_ad99a23d62647f8b66a77f9b4283f6a99e892f8e131c4da92a74d73a1af7960a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad99a23d62647f8b66a77f9b4283f6a99e892f8e131c4da92a74d73a1af7960a->enter($__internal_ad99a23d62647f8b66a77f9b4283f6a99e892f8e131c4da92a74d73a1af7960a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        $__internal_1debb33299fafe5f51473f0a48edb9b620e4f20e7f849bdb57a5895dd2c4ba64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1debb33299fafe5f51473f0a48edb9b620e4f20e7f849bdb57a5895dd2c4ba64->enter($__internal_1debb33299fafe5f51473f0a48edb9b620e4f20e7f849bdb57a5895dd2c4ba64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

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
        
        $__internal_ad99a23d62647f8b66a77f9b4283f6a99e892f8e131c4da92a74d73a1af7960a->leave($__internal_ad99a23d62647f8b66a77f9b4283f6a99e892f8e131c4da92a74d73a1af7960a_prof);

        
        $__internal_1debb33299fafe5f51473f0a48edb9b620e4f20e7f849bdb57a5895dd2c4ba64->leave($__internal_1debb33299fafe5f51473f0a48edb9b620e4f20e7f849bdb57a5895dd2c4ba64_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_e8de1cb23ff2c0c959f81e4e5b1164e3e2cb40b11f255716a23f3c0eb2c65d39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8de1cb23ff2c0c959f81e4e5b1164e3e2cb40b11f255716a23f3c0eb2c65d39->enter($__internal_e8de1cb23ff2c0c959f81e4e5b1164e3e2cb40b11f255716a23f3c0eb2c65d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_27c874fc414b7e14079f6142d50bf34c00fdfb19b27f760c4a797c84d6731ff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27c874fc414b7e14079f6142d50bf34c00fdfb19b27f760c4a797c84d6731ff4->enter($__internal_27c874fc414b7e14079f6142d50bf34c00fdfb19b27f760c4a797c84d6731ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if ((isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 4, $this->getSourceContext()); })())) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_27c874fc414b7e14079f6142d50bf34c00fdfb19b27f760c4a797c84d6731ff4->leave($__internal_27c874fc414b7e14079f6142d50bf34c00fdfb19b27f760c4a797c84d6731ff4_prof);

        
        $__internal_e8de1cb23ff2c0c959f81e4e5b1164e3e2cb40b11f255716a23f3c0eb2c65d39->leave($__internal_e8de1cb23ff2c0c959f81e4e5b1164e3e2cb40b11f255716a23f3c0eb2c65d39_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_c2118e34d93039995bc842a811f72aa055e111a6db3efd1b686d659b32179bd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2118e34d93039995bc842a811f72aa055e111a6db3efd1b686d659b32179bd4->enter($__internal_c2118e34d93039995bc842a811f72aa055e111a6db3efd1b686d659b32179bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_9d1b984b5c74cae0355cf0cd2de9e8fa33d3ce8d848597955c7e5bd435db8970 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d1b984b5c74cae0355cf0cd2de9e8fa33d3ce8d848597955c7e5bd435db8970->enter($__internal_9d1b984b5c74cae0355cf0cd2de9e8fa33d3ce8d848597955c7e5bd435db8970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

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
        
        $__internal_9d1b984b5c74cae0355cf0cd2de9e8fa33d3ce8d848597955c7e5bd435db8970->leave($__internal_9d1b984b5c74cae0355cf0cd2de9e8fa33d3ce8d848597955c7e5bd435db8970_prof);

        
        $__internal_c2118e34d93039995bc842a811f72aa055e111a6db3efd1b686d659b32179bd4->leave($__internal_c2118e34d93039995bc842a811f72aa055e111a6db3efd1b686d659b32179bd4_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_f8eb3fc252bb4ac260e11831188c4dfcad66513138d2db8c2e80713ead6ef77c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8eb3fc252bb4ac260e11831188c4dfcad66513138d2db8c2e80713ead6ef77c->enter($__internal_f8eb3fc252bb4ac260e11831188c4dfcad66513138d2db8c2e80713ead6ef77c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_79c9fc7abea545265ddf51f231ec32097487241add59b4657e70c9425081c10b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79c9fc7abea545265ddf51f231ec32097487241add59b4657e70c9425081c10b->enter($__internal_79c9fc7abea545265ddf51f231ec32097487241add59b4657e70c9425081c10b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_79c9fc7abea545265ddf51f231ec32097487241add59b4657e70c9425081c10b->leave($__internal_79c9fc7abea545265ddf51f231ec32097487241add59b4657e70c9425081c10b_prof);

        
        $__internal_f8eb3fc252bb4ac260e11831188c4dfcad66513138d2db8c2e80713ead6ef77c->leave($__internal_f8eb3fc252bb4ac260e11831188c4dfcad66513138d2db8c2e80713ead6ef77c_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_acecdb44866c3d7e079feb3784267d3978fa5f17dca3d41b751d34e04ca71ca8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acecdb44866c3d7e079feb3784267d3978fa5f17dca3d41b751d34e04ca71ca8->enter($__internal_acecdb44866c3d7e079feb3784267d3978fa5f17dca3d41b751d34e04ca71ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_a661498871b086e9785c7833dcb2143a9af039d54182b0b27575694137e16654 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a661498871b086e9785c7833dcb2143a9af039d54182b0b27575694137e16654->enter($__internal_a661498871b086e9785c7833dcb2143a9af039d54182b0b27575694137e16654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 28, $this->getSourceContext()); })()), array("data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new Twig_Error_Runtime('Variable "prototype" does not exist.', 28, $this->getSourceContext()); })()), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_a661498871b086e9785c7833dcb2143a9af039d54182b0b27575694137e16654->leave($__internal_a661498871b086e9785c7833dcb2143a9af039d54182b0b27575694137e16654_prof);

        
        $__internal_acecdb44866c3d7e079feb3784267d3978fa5f17dca3d41b751d34e04ca71ca8->leave($__internal_acecdb44866c3d7e079feb3784267d3978fa5f17dca3d41b751d34e04ca71ca8_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_e42df470190d605b734859524c8cbc3ee5dfac6172c168c0681a1659da24b02b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e42df470190d605b734859524c8cbc3ee5dfac6172c168c0681a1659da24b02b->enter($__internal_e42df470190d605b734859524c8cbc3ee5dfac6172c168c0681a1659da24b02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_eb374f75064e0966fc0bc811bd116274e9b085edc2ff66cce854923f33a42acc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb374f75064e0966fc0bc811bd116274e9b085edc2ff66cce854923f33a42acc->enter($__internal_eb374f75064e0966fc0bc811bd116274e9b085edc2ff66cce854923f33a42acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 34, $this->getSourceContext()); })()), "html", null, true);
        echo "</textarea>";
        
        $__internal_eb374f75064e0966fc0bc811bd116274e9b085edc2ff66cce854923f33a42acc->leave($__internal_eb374f75064e0966fc0bc811bd116274e9b085edc2ff66cce854923f33a42acc_prof);

        
        $__internal_e42df470190d605b734859524c8cbc3ee5dfac6172c168c0681a1659da24b02b->leave($__internal_e42df470190d605b734859524c8cbc3ee5dfac6172c168c0681a1659da24b02b_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_3c29a27ffcfd3852177374ee3b7e740028592b9efd600f747e2ccccc9cf00c60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c29a27ffcfd3852177374ee3b7e740028592b9efd600f747e2ccccc9cf00c60->enter($__internal_3c29a27ffcfd3852177374ee3b7e740028592b9efd600f747e2ccccc9cf00c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        $__internal_9bd3f1e71996b669e0d3eb0535b9c8c41443d21981b8f8349ea6738630a52fb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bd3f1e71996b669e0d3eb0535b9c8c41443d21981b8f8349ea6738630a52fb7->enter($__internal_9bd3f1e71996b669e0d3eb0535b9c8c41443d21981b8f8349ea6738630a52fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if ((isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 38, $this->getSourceContext()); })())) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_9bd3f1e71996b669e0d3eb0535b9c8c41443d21981b8f8349ea6738630a52fb7->leave($__internal_9bd3f1e71996b669e0d3eb0535b9c8c41443d21981b8f8349ea6738630a52fb7_prof);

        
        $__internal_3c29a27ffcfd3852177374ee3b7e740028592b9efd600f747e2ccccc9cf00c60->leave($__internal_3c29a27ffcfd3852177374ee3b7e740028592b9efd600f747e2ccccc9cf00c60_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_c3377fcc1858e0b268c90860d5fa8fb2f16e82d1291daa2e283a54c03a764993 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3377fcc1858e0b268c90860d5fa8fb2f16e82d1291daa2e283a54c03a764993->enter($__internal_c3377fcc1858e0b268c90860d5fa8fb2f16e82d1291daa2e283a54c03a764993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_832fde9dba943aeb305d7df6b5edb193257ea65bb74591cd1de310843df82deb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_832fde9dba943aeb305d7df6b5edb193257ea65bb74591cd1de310843df82deb->enter($__internal_832fde9dba943aeb305d7df6b5edb193257ea65bb74591cd1de310843df82deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_832fde9dba943aeb305d7df6b5edb193257ea65bb74591cd1de310843df82deb->leave($__internal_832fde9dba943aeb305d7df6b5edb193257ea65bb74591cd1de310843df82deb_prof);

        
        $__internal_c3377fcc1858e0b268c90860d5fa8fb2f16e82d1291daa2e283a54c03a764993->leave($__internal_c3377fcc1858e0b268c90860d5fa8fb2f16e82d1291daa2e283a54c03a764993_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_cada2b1f893dad8b29feee29cd1aa11a002844ababa5f672dbeaa62788896c53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cada2b1f893dad8b29feee29cd1aa11a002844ababa5f672dbeaa62788896c53->enter($__internal_cada2b1f893dad8b29feee29cd1aa11a002844ababa5f672dbeaa62788896c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_eff766cb059c892acc058735e43426b2e5cafe7aac4bf2a1cf207bd308018873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eff766cb059c892acc058735e43426b2e5cafe7aac4bf2a1cf207bd308018873->enter($__internal_eff766cb059c892acc058735e43426b2e5cafe7aac4bf2a1cf207bd308018873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_eff766cb059c892acc058735e43426b2e5cafe7aac4bf2a1cf207bd308018873->leave($__internal_eff766cb059c892acc058735e43426b2e5cafe7aac4bf2a1cf207bd308018873_prof);

        
        $__internal_cada2b1f893dad8b29feee29cd1aa11a002844ababa5f672dbeaa62788896c53->leave($__internal_cada2b1f893dad8b29feee29cd1aa11a002844ababa5f672dbeaa62788896c53_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_0d23d5013525e1c0a123e74842e125ec519ac781b63b34e2c928394443068e41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d23d5013525e1c0a123e74842e125ec519ac781b63b34e2c928394443068e41->enter($__internal_0d23d5013525e1c0a123e74842e125ec519ac781b63b34e2c928394443068e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        $__internal_a3f12dbd5504ddca2b18f9cfb9c95e5e6d19d3d85a8ef9b0261efd9fbb44ca01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3f12dbd5504ddca2b18f9cfb9c95e5e6d19d3d85a8ef9b0261efd9fbb44ca01->enter($__internal_a3f12dbd5504ddca2b18f9cfb9c95e5e6d19d3d85a8ef9b0261efd9fbb44ca01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

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
                    $__internal_0b21b7b41fcdf4de1440063cba7ff1a8296d7f978323411461df5ae60f45648a = array("attr" => twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "attr", array()));
                    if (!is_array($__internal_0b21b7b41fcdf4de1440063cba7ff1a8296d7f978323411461df5ae60f45648a)) {
                        throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                    }
                    $context['_parent'] = $context;
                    $context = array_merge($context, $__internal_0b21b7b41fcdf4de1440063cba7ff1a8296d7f978323411461df5ae60f45648a);
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
        
        $__internal_a3f12dbd5504ddca2b18f9cfb9c95e5e6d19d3d85a8ef9b0261efd9fbb44ca01->leave($__internal_a3f12dbd5504ddca2b18f9cfb9c95e5e6d19d3d85a8ef9b0261efd9fbb44ca01_prof);

        
        $__internal_0d23d5013525e1c0a123e74842e125ec519ac781b63b34e2c928394443068e41->leave($__internal_0d23d5013525e1c0a123e74842e125ec519ac781b63b34e2c928394443068e41_prof);

    }

    // line 87
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_c06b3d37ce5ecc43329547f25cc2eb23fc982e04c15b30c0fa21cb473d5c8935 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c06b3d37ce5ecc43329547f25cc2eb23fc982e04c15b30c0fa21cb473d5c8935->enter($__internal_c06b3d37ce5ecc43329547f25cc2eb23fc982e04c15b30c0fa21cb473d5c8935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_453e1865cc0402b146fb54e798a94d32571af99dd92f54484d193cab761a9dba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_453e1865cc0402b146fb54e798a94d32571af99dd92f54484d193cab761a9dba->enter($__internal_453e1865cc0402b146fb54e798a94d32571af99dd92f54484d193cab761a9dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_453e1865cc0402b146fb54e798a94d32571af99dd92f54484d193cab761a9dba->leave($__internal_453e1865cc0402b146fb54e798a94d32571af99dd92f54484d193cab761a9dba_prof);

        
        $__internal_c06b3d37ce5ecc43329547f25cc2eb23fc982e04c15b30c0fa21cb473d5c8935->leave($__internal_c06b3d37ce5ecc43329547f25cc2eb23fc982e04c15b30c0fa21cb473d5c8935_prof);

    }

    // line 91
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_f519cd9a3c368f5e6ad74401925c539e5179941edbf554e7bf5c00f65814fff4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f519cd9a3c368f5e6ad74401925c539e5179941edbf554e7bf5c00f65814fff4->enter($__internal_f519cd9a3c368f5e6ad74401925c539e5179941edbf554e7bf5c00f65814fff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_e9f9847defddaf5973079c399dea4329263c4c200789f8168276507b0d9bf806 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9f9847defddaf5973079c399dea4329263c4c200789f8168276507b0d9bf806->enter($__internal_e9f9847defddaf5973079c399dea4329263c4c200789f8168276507b0d9bf806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_e9f9847defddaf5973079c399dea4329263c4c200789f8168276507b0d9bf806->leave($__internal_e9f9847defddaf5973079c399dea4329263c4c200789f8168276507b0d9bf806_prof);

        
        $__internal_f519cd9a3c368f5e6ad74401925c539e5179941edbf554e7bf5c00f65814fff4->leave($__internal_f519cd9a3c368f5e6ad74401925c539e5179941edbf554e7bf5c00f65814fff4_prof);

    }

    // line 95
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_4b4b8b75c623d324fb0e938b3fc33ace66162b1e3d6bbb95ce0ef7a26be1895b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b4b8b75c623d324fb0e938b3fc33ace66162b1e3d6bbb95ce0ef7a26be1895b->enter($__internal_4b4b8b75c623d324fb0e938b3fc33ace66162b1e3d6bbb95ce0ef7a26be1895b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_8f032c22d59f3b151077c439e4576ea959ed0678c6c529e8226517f67d2c54cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f032c22d59f3b151077c439e4576ea959ed0678c6c529e8226517f67d2c54cc->enter($__internal_8f032c22d59f3b151077c439e4576ea959ed0678c6c529e8226517f67d2c54cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_8f032c22d59f3b151077c439e4576ea959ed0678c6c529e8226517f67d2c54cc->leave($__internal_8f032c22d59f3b151077c439e4576ea959ed0678c6c529e8226517f67d2c54cc_prof);

        
        $__internal_4b4b8b75c623d324fb0e938b3fc33ace66162b1e3d6bbb95ce0ef7a26be1895b->leave($__internal_4b4b8b75c623d324fb0e938b3fc33ace66162b1e3d6bbb95ce0ef7a26be1895b_prof);

    }

    // line 108
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_30ce081656c017822cecb9beade3445ba98c02cc9c70ce311b210eb718d6ec41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30ce081656c017822cecb9beade3445ba98c02cc9c70ce311b210eb718d6ec41->enter($__internal_30ce081656c017822cecb9beade3445ba98c02cc9c70ce311b210eb718d6ec41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_fa5a7063d33a41aa5819cf184a336308eab62f119c7ecb33e6ad67ee59daea11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa5a7063d33a41aa5819cf184a336308eab62f119c7ecb33e6ad67ee59daea11->enter($__internal_fa5a7063d33a41aa5819cf184a336308eab62f119c7ecb33e6ad67ee59daea11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_fa5a7063d33a41aa5819cf184a336308eab62f119c7ecb33e6ad67ee59daea11->leave($__internal_fa5a7063d33a41aa5819cf184a336308eab62f119c7ecb33e6ad67ee59daea11_prof);

        
        $__internal_30ce081656c017822cecb9beade3445ba98c02cc9c70ce311b210eb718d6ec41->leave($__internal_30ce081656c017822cecb9beade3445ba98c02cc9c70ce311b210eb718d6ec41_prof);

    }

    // line 122
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_3f9bafbb045fd05cfe170aa5736c278980c649645290a21abaf3123f614bc1f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f9bafbb045fd05cfe170aa5736c278980c649645290a21abaf3123f614bc1f4->enter($__internal_3f9bafbb045fd05cfe170aa5736c278980c649645290a21abaf3123f614bc1f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_f32834f5be36684f8b12bfe0c4af0f8da578cfe0fc093865e3404f57445b3996 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f32834f5be36684f8b12bfe0c4af0f8da578cfe0fc093865e3404f57445b3996->enter($__internal_f32834f5be36684f8b12bfe0c4af0f8da578cfe0fc093865e3404f57445b3996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_f32834f5be36684f8b12bfe0c4af0f8da578cfe0fc093865e3404f57445b3996->leave($__internal_f32834f5be36684f8b12bfe0c4af0f8da578cfe0fc093865e3404f57445b3996_prof);

        
        $__internal_3f9bafbb045fd05cfe170aa5736c278980c649645290a21abaf3123f614bc1f4->leave($__internal_3f9bafbb045fd05cfe170aa5736c278980c649645290a21abaf3123f614bc1f4_prof);

    }

    // line 133
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_eaa313fbf70602cd761ef66b3f141d6c05ba5dc61e00813c3b7027cbbfe9cf2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaa313fbf70602cd761ef66b3f141d6c05ba5dc61e00813c3b7027cbbfe9cf2b->enter($__internal_eaa313fbf70602cd761ef66b3f141d6c05ba5dc61e00813c3b7027cbbfe9cf2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_6079b3097bdc04443a79dec44bad9803e64eebf443ee7c8a4f8d3fe238df34d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6079b3097bdc04443a79dec44bad9803e64eebf443ee7c8a4f8d3fe238df34d4->enter($__internal_6079b3097bdc04443a79dec44bad9803e64eebf443ee7c8a4f8d3fe238df34d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_6079b3097bdc04443a79dec44bad9803e64eebf443ee7c8a4f8d3fe238df34d4->leave($__internal_6079b3097bdc04443a79dec44bad9803e64eebf443ee7c8a4f8d3fe238df34d4_prof);

        
        $__internal_eaa313fbf70602cd761ef66b3f141d6c05ba5dc61e00813c3b7027cbbfe9cf2b->leave($__internal_eaa313fbf70602cd761ef66b3f141d6c05ba5dc61e00813c3b7027cbbfe9cf2b_prof);

    }

    // line 168
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_0d00c8478f106ce1ce2b5a9d02a8633915f856e3a11f5ac85f89d099916371ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d00c8478f106ce1ce2b5a9d02a8633915f856e3a11f5ac85f89d099916371ef->enter($__internal_0d00c8478f106ce1ce2b5a9d02a8633915f856e3a11f5ac85f89d099916371ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        $__internal_4cb6aeffc779f5595beefe15d5291a1c3318abc824c320a07d6c883fda4787fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cb6aeffc779f5595beefe15d5291a1c3318abc824c320a07d6c883fda4787fd->enter($__internal_4cb6aeffc779f5595beefe15d5291a1c3318abc824c320a07d6c883fda4787fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 170
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 170, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 171
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_4cb6aeffc779f5595beefe15d5291a1c3318abc824c320a07d6c883fda4787fd->leave($__internal_4cb6aeffc779f5595beefe15d5291a1c3318abc824c320a07d6c883fda4787fd_prof);

        
        $__internal_0d00c8478f106ce1ce2b5a9d02a8633915f856e3a11f5ac85f89d099916371ef->leave($__internal_0d00c8478f106ce1ce2b5a9d02a8633915f856e3a11f5ac85f89d099916371ef_prof);

    }

    // line 174
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_b45e4833204f524ad8644f2ad79e3437ae13e66cf1eec98b546bf1288784d318 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b45e4833204f524ad8644f2ad79e3437ae13e66cf1eec98b546bf1288784d318->enter($__internal_b45e4833204f524ad8644f2ad79e3437ae13e66cf1eec98b546bf1288784d318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        $__internal_e1c697727d51ebd6a2b2e21e2bcd99dbe2c356a7a68db2a30d18f253997c1ffd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1c697727d51ebd6a2b2e21e2bcd99dbe2c356a7a68db2a30d18f253997c1ffd->enter($__internal_e1c697727d51ebd6a2b2e21e2bcd99dbe2c356a7a68db2a30d18f253997c1ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 175
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 175, $this->getSourceContext()); })()), "number")) : ("number"));
        // line 176
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_e1c697727d51ebd6a2b2e21e2bcd99dbe2c356a7a68db2a30d18f253997c1ffd->leave($__internal_e1c697727d51ebd6a2b2e21e2bcd99dbe2c356a7a68db2a30d18f253997c1ffd_prof);

        
        $__internal_b45e4833204f524ad8644f2ad79e3437ae13e66cf1eec98b546bf1288784d318->leave($__internal_b45e4833204f524ad8644f2ad79e3437ae13e66cf1eec98b546bf1288784d318_prof);

    }

    // line 179
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_3803dba1a706744c5ec8e3e64476e684c871c24a3f9d9c33f866628984cef4e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3803dba1a706744c5ec8e3e64476e684c871c24a3f9d9c33f866628984cef4e5->enter($__internal_3803dba1a706744c5ec8e3e64476e684c871c24a3f9d9c33f866628984cef4e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_3baca7c114be35c220606fa4ccb5ca6d791d6d537b371cbe1a538c58d67ce819 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3baca7c114be35c220606fa4ccb5ca6d791d6d537b371cbe1a538c58d67ce819->enter($__internal_3baca7c114be35c220606fa4ccb5ca6d791d6d537b371cbe1a538c58d67ce819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 180
        echo twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 180, $this->getSourceContext()); })()), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_3baca7c114be35c220606fa4ccb5ca6d791d6d537b371cbe1a538c58d67ce819->leave($__internal_3baca7c114be35c220606fa4ccb5ca6d791d6d537b371cbe1a538c58d67ce819_prof);

        
        $__internal_3803dba1a706744c5ec8e3e64476e684c871c24a3f9d9c33f866628984cef4e5->leave($__internal_3803dba1a706744c5ec8e3e64476e684c871c24a3f9d9c33f866628984cef4e5_prof);

    }

    // line 183
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_e4312b6e8247953444a9124dbbdc0963b8cf5ea87a408e41ac73bd2fc0a674f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4312b6e8247953444a9124dbbdc0963b8cf5ea87a408e41ac73bd2fc0a674f3->enter($__internal_e4312b6e8247953444a9124dbbdc0963b8cf5ea87a408e41ac73bd2fc0a674f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        $__internal_3ff6de9788a281a1002788d60f07c8e0f1c4e8c6a62c264929cfb07d9cc00e43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ff6de9788a281a1002788d60f07c8e0f1c4e8c6a62c264929cfb07d9cc00e43->enter($__internal_3ff6de9788a281a1002788d60f07c8e0f1c4e8c6a62c264929cfb07d9cc00e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 184
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 184, $this->getSourceContext()); })()), "url")) : ("url"));
        // line 185
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_3ff6de9788a281a1002788d60f07c8e0f1c4e8c6a62c264929cfb07d9cc00e43->leave($__internal_3ff6de9788a281a1002788d60f07c8e0f1c4e8c6a62c264929cfb07d9cc00e43_prof);

        
        $__internal_e4312b6e8247953444a9124dbbdc0963b8cf5ea87a408e41ac73bd2fc0a674f3->leave($__internal_e4312b6e8247953444a9124dbbdc0963b8cf5ea87a408e41ac73bd2fc0a674f3_prof);

    }

    // line 188
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_a9db6199a83c68cd74cc019d903c226df11a30e543d655c592911be31c565e5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9db6199a83c68cd74cc019d903c226df11a30e543d655c592911be31c565e5e->enter($__internal_a9db6199a83c68cd74cc019d903c226df11a30e543d655c592911be31c565e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        $__internal_dbc37dce01fad96521f1ea7eddf4aff701e1479685afaa37252e5423c2521fc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbc37dce01fad96521f1ea7eddf4aff701e1479685afaa37252e5423c2521fc5->enter($__internal_dbc37dce01fad96521f1ea7eddf4aff701e1479685afaa37252e5423c2521fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 189
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 189, $this->getSourceContext()); })()), "search")) : ("search"));
        // line 190
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_dbc37dce01fad96521f1ea7eddf4aff701e1479685afaa37252e5423c2521fc5->leave($__internal_dbc37dce01fad96521f1ea7eddf4aff701e1479685afaa37252e5423c2521fc5_prof);

        
        $__internal_a9db6199a83c68cd74cc019d903c226df11a30e543d655c592911be31c565e5e->leave($__internal_a9db6199a83c68cd74cc019d903c226df11a30e543d655c592911be31c565e5e_prof);

    }

    // line 193
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_5aa62e2906b0d99e67cd30fcbe8c87de5ce7172a17871244d40bcbcf75ba71c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aa62e2906b0d99e67cd30fcbe8c87de5ce7172a17871244d40bcbcf75ba71c5->enter($__internal_5aa62e2906b0d99e67cd30fcbe8c87de5ce7172a17871244d40bcbcf75ba71c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_74767cc3d095f338d3a2efbadb115b52c59f85ce3e436da386018f2be94fa3b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74767cc3d095f338d3a2efbadb115b52c59f85ce3e436da386018f2be94fa3b1->enter($__internal_74767cc3d095f338d3a2efbadb115b52c59f85ce3e436da386018f2be94fa3b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 194
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 194, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 195
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_74767cc3d095f338d3a2efbadb115b52c59f85ce3e436da386018f2be94fa3b1->leave($__internal_74767cc3d095f338d3a2efbadb115b52c59f85ce3e436da386018f2be94fa3b1_prof);

        
        $__internal_5aa62e2906b0d99e67cd30fcbe8c87de5ce7172a17871244d40bcbcf75ba71c5->leave($__internal_5aa62e2906b0d99e67cd30fcbe8c87de5ce7172a17871244d40bcbcf75ba71c5_prof);

    }

    // line 198
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_5618a2e2b28145f7337526d6904d1ee49dd3307a5345e34d4053df8958b08d69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5618a2e2b28145f7337526d6904d1ee49dd3307a5345e34d4053df8958b08d69->enter($__internal_5618a2e2b28145f7337526d6904d1ee49dd3307a5345e34d4053df8958b08d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        $__internal_e664c653896665f2aec2c7509d05bd03b3b49d2173c5654bd028bc78e8a0b59f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e664c653896665f2aec2c7509d05bd03b3b49d2173c5654bd028bc78e8a0b59f->enter($__internal_e664c653896665f2aec2c7509d05bd03b3b49d2173c5654bd028bc78e8a0b59f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 199
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 199, $this->getSourceContext()); })()), "password")) : ("password"));
        // line 200
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_e664c653896665f2aec2c7509d05bd03b3b49d2173c5654bd028bc78e8a0b59f->leave($__internal_e664c653896665f2aec2c7509d05bd03b3b49d2173c5654bd028bc78e8a0b59f_prof);

        
        $__internal_5618a2e2b28145f7337526d6904d1ee49dd3307a5345e34d4053df8958b08d69->leave($__internal_5618a2e2b28145f7337526d6904d1ee49dd3307a5345e34d4053df8958b08d69_prof);

    }

    // line 203
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_60adf725794654bab54969f923465a9ad4e2ff077c49b9a5db36d70e2f0ab054 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60adf725794654bab54969f923465a9ad4e2ff077c49b9a5db36d70e2f0ab054->enter($__internal_60adf725794654bab54969f923465a9ad4e2ff077c49b9a5db36d70e2f0ab054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        $__internal_2186299499d21326692fa563faa0cb79dc889d047b18bf4f1aeabcf3cfa7bd7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2186299499d21326692fa563faa0cb79dc889d047b18bf4f1aeabcf3cfa7bd7b->enter($__internal_2186299499d21326692fa563faa0cb79dc889d047b18bf4f1aeabcf3cfa7bd7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 204
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 204, $this->getSourceContext()); })()), "hidden")) : ("hidden"));
        // line 205
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_2186299499d21326692fa563faa0cb79dc889d047b18bf4f1aeabcf3cfa7bd7b->leave($__internal_2186299499d21326692fa563faa0cb79dc889d047b18bf4f1aeabcf3cfa7bd7b_prof);

        
        $__internal_60adf725794654bab54969f923465a9ad4e2ff077c49b9a5db36d70e2f0ab054->leave($__internal_60adf725794654bab54969f923465a9ad4e2ff077c49b9a5db36d70e2f0ab054_prof);

    }

    // line 208
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_0e3c443b9ea721c337344224b9dc2f910191d23f74772bc1f7dcaa4bfbe47e93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e3c443b9ea721c337344224b9dc2f910191d23f74772bc1f7dcaa4bfbe47e93->enter($__internal_0e3c443b9ea721c337344224b9dc2f910191d23f74772bc1f7dcaa4bfbe47e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        $__internal_246a107b98814f57b8f06dffbf599e6b9c81dde73d777766d1223d500382e156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_246a107b98814f57b8f06dffbf599e6b9c81dde73d777766d1223d500382e156->enter($__internal_246a107b98814f57b8f06dffbf599e6b9c81dde73d777766d1223d500382e156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 209
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 209, $this->getSourceContext()); })()), "email")) : ("email"));
        // line 210
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_246a107b98814f57b8f06dffbf599e6b9c81dde73d777766d1223d500382e156->leave($__internal_246a107b98814f57b8f06dffbf599e6b9c81dde73d777766d1223d500382e156_prof);

        
        $__internal_0e3c443b9ea721c337344224b9dc2f910191d23f74772bc1f7dcaa4bfbe47e93->leave($__internal_0e3c443b9ea721c337344224b9dc2f910191d23f74772bc1f7dcaa4bfbe47e93_prof);

    }

    // line 213
    public function block_range_widget($context, array $blocks = array())
    {
        $__internal_ad2c15b7bad4b2c80f4691d43d6bedc7d7b37061888a3a72ecde92e958cf83b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad2c15b7bad4b2c80f4691d43d6bedc7d7b37061888a3a72ecde92e958cf83b5->enter($__internal_ad2c15b7bad4b2c80f4691d43d6bedc7d7b37061888a3a72ecde92e958cf83b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        $__internal_2780677635c4c48005d14b2db04afcf977afe54844d24657e6dd8385a720155e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2780677635c4c48005d14b2db04afcf977afe54844d24657e6dd8385a720155e->enter($__internal_2780677635c4c48005d14b2db04afcf977afe54844d24657e6dd8385a720155e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        // line 214
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 214, $this->getSourceContext()); })()), "range")) : ("range"));
        // line 215
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_2780677635c4c48005d14b2db04afcf977afe54844d24657e6dd8385a720155e->leave($__internal_2780677635c4c48005d14b2db04afcf977afe54844d24657e6dd8385a720155e_prof);

        
        $__internal_ad2c15b7bad4b2c80f4691d43d6bedc7d7b37061888a3a72ecde92e958cf83b5->leave($__internal_ad2c15b7bad4b2c80f4691d43d6bedc7d7b37061888a3a72ecde92e958cf83b5_prof);

    }

    // line 218
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_8f77759afabb29ef81f19f863a8681895b94ffb1516f67374d145807d7378ebf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f77759afabb29ef81f19f863a8681895b94ffb1516f67374d145807d7378ebf->enter($__internal_8f77759afabb29ef81f19f863a8681895b94ffb1516f67374d145807d7378ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_ba6c0dc57b929a818df1b6c8907a3d42d9b18320a018fce86337a295e94edeb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba6c0dc57b929a818df1b6c8907a3d42d9b18320a018fce86337a295e94edeb7->enter($__internal_ba6c0dc57b929a818df1b6c8907a3d42d9b18320a018fce86337a295e94edeb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

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
        
        $__internal_ba6c0dc57b929a818df1b6c8907a3d42d9b18320a018fce86337a295e94edeb7->leave($__internal_ba6c0dc57b929a818df1b6c8907a3d42d9b18320a018fce86337a295e94edeb7_prof);

        
        $__internal_8f77759afabb29ef81f19f863a8681895b94ffb1516f67374d145807d7378ebf->leave($__internal_8f77759afabb29ef81f19f863a8681895b94ffb1516f67374d145807d7378ebf_prof);

    }

    // line 232
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_9716765e3fec5daa1b05c144bf4b3bc61ebc19659c22cb4ffd7cd748f4fe29e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9716765e3fec5daa1b05c144bf4b3bc61ebc19659c22cb4ffd7cd748f4fe29e4->enter($__internal_9716765e3fec5daa1b05c144bf4b3bc61ebc19659c22cb4ffd7cd748f4fe29e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        $__internal_78ca1430ca1bbe33d540e5ae0684077bfb15f0915a49750f450b1a82d92d959b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78ca1430ca1bbe33d540e5ae0684077bfb15f0915a49750f450b1a82d92d959b->enter($__internal_78ca1430ca1bbe33d540e5ae0684077bfb15f0915a49750f450b1a82d92d959b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 233
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 233, $this->getSourceContext()); })()), "submit")) : ("submit"));
        // line 234
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_78ca1430ca1bbe33d540e5ae0684077bfb15f0915a49750f450b1a82d92d959b->leave($__internal_78ca1430ca1bbe33d540e5ae0684077bfb15f0915a49750f450b1a82d92d959b_prof);

        
        $__internal_9716765e3fec5daa1b05c144bf4b3bc61ebc19659c22cb4ffd7cd748f4fe29e4->leave($__internal_9716765e3fec5daa1b05c144bf4b3bc61ebc19659c22cb4ffd7cd748f4fe29e4_prof);

    }

    // line 237
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_2cc7905e312ce6495caff8712b8a731d44b43cbbfa6473f1da3a5c91704bfde0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cc7905e312ce6495caff8712b8a731d44b43cbbfa6473f1da3a5c91704bfde0->enter($__internal_2cc7905e312ce6495caff8712b8a731d44b43cbbfa6473f1da3a5c91704bfde0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        $__internal_a1ae9a901915ea6c086789337f82b4cb9e1fa97d6a6520902078e8cb5acac002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1ae9a901915ea6c086789337f82b4cb9e1fa97d6a6520902078e8cb5acac002->enter($__internal_a1ae9a901915ea6c086789337f82b4cb9e1fa97d6a6520902078e8cb5acac002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 238
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 238, $this->getSourceContext()); })()), "reset")) : ("reset"));
        // line 239
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_a1ae9a901915ea6c086789337f82b4cb9e1fa97d6a6520902078e8cb5acac002->leave($__internal_a1ae9a901915ea6c086789337f82b4cb9e1fa97d6a6520902078e8cb5acac002_prof);

        
        $__internal_2cc7905e312ce6495caff8712b8a731d44b43cbbfa6473f1da3a5c91704bfde0->leave($__internal_2cc7905e312ce6495caff8712b8a731d44b43cbbfa6473f1da3a5c91704bfde0_prof);

    }

    // line 242
    public function block_tel_widget($context, array $blocks = array())
    {
        $__internal_c9ac545b34aea44eb6e224129d5ab069890ac517d93a0b0eca033c0a636cf61f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9ac545b34aea44eb6e224129d5ab069890ac517d93a0b0eca033c0a636cf61f->enter($__internal_c9ac545b34aea44eb6e224129d5ab069890ac517d93a0b0eca033c0a636cf61f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        $__internal_b84c7b1efcc2f727f4b45bd3897a19ce495b036022d224e24ef8754130de3b66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b84c7b1efcc2f727f4b45bd3897a19ce495b036022d224e24ef8754130de3b66->enter($__internal_b84c7b1efcc2f727f4b45bd3897a19ce495b036022d224e24ef8754130de3b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        // line 243
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 243, $this->getSourceContext()); })()), "tel")) : ("tel"));
        // line 244
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_b84c7b1efcc2f727f4b45bd3897a19ce495b036022d224e24ef8754130de3b66->leave($__internal_b84c7b1efcc2f727f4b45bd3897a19ce495b036022d224e24ef8754130de3b66_prof);

        
        $__internal_c9ac545b34aea44eb6e224129d5ab069890ac517d93a0b0eca033c0a636cf61f->leave($__internal_c9ac545b34aea44eb6e224129d5ab069890ac517d93a0b0eca033c0a636cf61f_prof);

    }

    // line 247
    public function block_color_widget($context, array $blocks = array())
    {
        $__internal_891d6917364a40c7b672432c1ea3e78490a384fe141caae0274b62edb7fbe4c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_891d6917364a40c7b672432c1ea3e78490a384fe141caae0274b62edb7fbe4c6->enter($__internal_891d6917364a40c7b672432c1ea3e78490a384fe141caae0274b62edb7fbe4c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        $__internal_849d3d7b4a540d516e211b8df3d18e0c46ca00220340dab6c085c256e2f55f40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_849d3d7b4a540d516e211b8df3d18e0c46ca00220340dab6c085c256e2f55f40->enter($__internal_849d3d7b4a540d516e211b8df3d18e0c46ca00220340dab6c085c256e2f55f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        // line 248
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 248, $this->getSourceContext()); })()), "color")) : ("color"));
        // line 249
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_849d3d7b4a540d516e211b8df3d18e0c46ca00220340dab6c085c256e2f55f40->leave($__internal_849d3d7b4a540d516e211b8df3d18e0c46ca00220340dab6c085c256e2f55f40_prof);

        
        $__internal_891d6917364a40c7b672432c1ea3e78490a384fe141caae0274b62edb7fbe4c6->leave($__internal_891d6917364a40c7b672432c1ea3e78490a384fe141caae0274b62edb7fbe4c6_prof);

    }

    // line 254
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_523ebbbdf0276cc067aef3531a4e67c7fba0b1928a5403e867bdfb49782dcd49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_523ebbbdf0276cc067aef3531a4e67c7fba0b1928a5403e867bdfb49782dcd49->enter($__internal_523ebbbdf0276cc067aef3531a4e67c7fba0b1928a5403e867bdfb49782dcd49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_0b21ed263d5c886ebb3db73efec577df4714f72bcb0ce029c15a76396dcd59af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b21ed263d5c886ebb3db73efec577df4714f72bcb0ce029c15a76396dcd59af->enter($__internal_0b21ed263d5c886ebb3db73efec577df4714f72bcb0ce029c15a76396dcd59af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
                $__internal_788cde4afd65963089bf8aa62c88bb557d9d067ee315d7ba54d2f0065892f93f = array("attr" => (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 272, $this->getSourceContext()); })()));
                if (!is_array($__internal_788cde4afd65963089bf8aa62c88bb557d9d067ee315d7ba54d2f0065892f93f)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_788cde4afd65963089bf8aa62c88bb557d9d067ee315d7ba54d2f0065892f93f);
                $this->displayBlock("attributes", $context, $blocks);
                $context = $context['_parent'];
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 272, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 272, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 272, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 272, $this->getSourceContext()); })())))), "html", null, true);
            echo "</";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 272, $this->getSourceContext()); })()), "label")) : ("label")), "html", null, true);
            echo ">";
        }
        
        $__internal_0b21ed263d5c886ebb3db73efec577df4714f72bcb0ce029c15a76396dcd59af->leave($__internal_0b21ed263d5c886ebb3db73efec577df4714f72bcb0ce029c15a76396dcd59af_prof);

        
        $__internal_523ebbbdf0276cc067aef3531a4e67c7fba0b1928a5403e867bdfb49782dcd49->leave($__internal_523ebbbdf0276cc067aef3531a4e67c7fba0b1928a5403e867bdfb49782dcd49_prof);

    }

    // line 276
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_82f771e3dfb9ac95161156f8cca0369c7fc2adc776daab01ab523ffbed058dfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82f771e3dfb9ac95161156f8cca0369c7fc2adc776daab01ab523ffbed058dfa->enter($__internal_82f771e3dfb9ac95161156f8cca0369c7fc2adc776daab01ab523ffbed058dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        $__internal_b79d938424a470c0c25118948136da6aab257f163bb85b316309fbfb77605d3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b79d938424a470c0c25118948136da6aab257f163bb85b316309fbfb77605d3f->enter($__internal_b79d938424a470c0c25118948136da6aab257f163bb85b316309fbfb77605d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_b79d938424a470c0c25118948136da6aab257f163bb85b316309fbfb77605d3f->leave($__internal_b79d938424a470c0c25118948136da6aab257f163bb85b316309fbfb77605d3f_prof);

        
        $__internal_82f771e3dfb9ac95161156f8cca0369c7fc2adc776daab01ab523ffbed058dfa->leave($__internal_82f771e3dfb9ac95161156f8cca0369c7fc2adc776daab01ab523ffbed058dfa_prof);

    }

    // line 280
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_484d6f85d3def2d3b69248ed022b66bac93a66ddf6565bd3132db0303743c1c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_484d6f85d3def2d3b69248ed022b66bac93a66ddf6565bd3132db0303743c1c9->enter($__internal_484d6f85d3def2d3b69248ed022b66bac93a66ddf6565bd3132db0303743c1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        $__internal_6bac1335eea078f66fe1cafc44a4207a56f66ce85f3bef3ca6e250c457d86fe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bac1335eea078f66fe1cafc44a4207a56f66ce85f3bef3ca6e250c457d86fe6->enter($__internal_6bac1335eea078f66fe1cafc44a4207a56f66ce85f3bef3ca6e250c457d86fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 285
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_6bac1335eea078f66fe1cafc44a4207a56f66ce85f3bef3ca6e250c457d86fe6->leave($__internal_6bac1335eea078f66fe1cafc44a4207a56f66ce85f3bef3ca6e250c457d86fe6_prof);

        
        $__internal_484d6f85d3def2d3b69248ed022b66bac93a66ddf6565bd3132db0303743c1c9->leave($__internal_484d6f85d3def2d3b69248ed022b66bac93a66ddf6565bd3132db0303743c1c9_prof);

    }

    // line 288
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_40cfa2af9a9d179483990af49bf6690aa725f8c6a8daec2774042509cb59f11b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40cfa2af9a9d179483990af49bf6690aa725f8c6a8daec2774042509cb59f11b->enter($__internal_40cfa2af9a9d179483990af49bf6690aa725f8c6a8daec2774042509cb59f11b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_d97b02eff75150328b4705da1ea77f84728a6bb467b276404a9e961dc59b8328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d97b02eff75150328b4705da1ea77f84728a6bb467b276404a9e961dc59b8328->enter($__internal_d97b02eff75150328b4705da1ea77f84728a6bb467b276404a9e961dc59b8328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_d97b02eff75150328b4705da1ea77f84728a6bb467b276404a9e961dc59b8328->leave($__internal_d97b02eff75150328b4705da1ea77f84728a6bb467b276404a9e961dc59b8328_prof);

        
        $__internal_40cfa2af9a9d179483990af49bf6690aa725f8c6a8daec2774042509cb59f11b->leave($__internal_40cfa2af9a9d179483990af49bf6690aa725f8c6a8daec2774042509cb59f11b_prof);

    }

    // line 296
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_668e2afc05e138a5190ee19a9f5c25492804740dc9f56f21558134f76c242d80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_668e2afc05e138a5190ee19a9f5c25492804740dc9f56f21558134f76c242d80->enter($__internal_668e2afc05e138a5190ee19a9f5c25492804740dc9f56f21558134f76c242d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_a8c78321888125bc36147827e2a6fb3a19c875e3c10ac0f6f714924e639a5ea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8c78321888125bc36147827e2a6fb3a19c875e3c10ac0f6f714924e639a5ea5->enter($__internal_a8c78321888125bc36147827e2a6fb3a19c875e3c10ac0f6f714924e639a5ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 297
        echo "<div>";
        // line 298
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 298, $this->getSourceContext()); })()), 'widget');
        // line 299
        echo "</div>";
        
        $__internal_a8c78321888125bc36147827e2a6fb3a19c875e3c10ac0f6f714924e639a5ea5->leave($__internal_a8c78321888125bc36147827e2a6fb3a19c875e3c10ac0f6f714924e639a5ea5_prof);

        
        $__internal_668e2afc05e138a5190ee19a9f5c25492804740dc9f56f21558134f76c242d80->leave($__internal_668e2afc05e138a5190ee19a9f5c25492804740dc9f56f21558134f76c242d80_prof);

    }

    // line 302
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_5b394779a1c83de57c351946c7beb4a07b6c1d82c11ed985b631d3dec820a7a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b394779a1c83de57c351946c7beb4a07b6c1d82c11ed985b631d3dec820a7a7->enter($__internal_5b394779a1c83de57c351946c7beb4a07b6c1d82c11ed985b631d3dec820a7a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_806e50e7b2e1e2fefc755cae5866424ed4efc6732234bc9cb93d1825978b7a3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_806e50e7b2e1e2fefc755cae5866424ed4efc6732234bc9cb93d1825978b7a3e->enter($__internal_806e50e7b2e1e2fefc755cae5866424ed4efc6732234bc9cb93d1825978b7a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 303
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 303, $this->getSourceContext()); })()), 'widget');
        
        $__internal_806e50e7b2e1e2fefc755cae5866424ed4efc6732234bc9cb93d1825978b7a3e->leave($__internal_806e50e7b2e1e2fefc755cae5866424ed4efc6732234bc9cb93d1825978b7a3e_prof);

        
        $__internal_5b394779a1c83de57c351946c7beb4a07b6c1d82c11ed985b631d3dec820a7a7->leave($__internal_5b394779a1c83de57c351946c7beb4a07b6c1d82c11ed985b631d3dec820a7a7_prof);

    }

    // line 308
    public function block_form($context, array $blocks = array())
    {
        $__internal_c28dee1474cd4cfd24b3c576958befac968e57d12656429d65ff8f2a1446af0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c28dee1474cd4cfd24b3c576958befac968e57d12656429d65ff8f2a1446af0e->enter($__internal_c28dee1474cd4cfd24b3c576958befac968e57d12656429d65ff8f2a1446af0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_ffec65cfcd8a622f4dcde2c669a5bbad02b944a2f2f7dcc9079a96e76964cf87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffec65cfcd8a622f4dcde2c669a5bbad02b944a2f2f7dcc9079a96e76964cf87->enter($__internal_ffec65cfcd8a622f4dcde2c669a5bbad02b944a2f2f7dcc9079a96e76964cf87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 309
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 309, $this->getSourceContext()); })()), 'form_start');
        // line 310
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 310, $this->getSourceContext()); })()), 'widget');
        // line 311
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 311, $this->getSourceContext()); })()), 'form_end');
        
        $__internal_ffec65cfcd8a622f4dcde2c669a5bbad02b944a2f2f7dcc9079a96e76964cf87->leave($__internal_ffec65cfcd8a622f4dcde2c669a5bbad02b944a2f2f7dcc9079a96e76964cf87_prof);

        
        $__internal_c28dee1474cd4cfd24b3c576958befac968e57d12656429d65ff8f2a1446af0e->leave($__internal_c28dee1474cd4cfd24b3c576958befac968e57d12656429d65ff8f2a1446af0e_prof);

    }

    // line 314
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_2755ae3a9a98a671bbe9a56d5d3cf13a355fe59299c05e65d0d50e74a1567a3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2755ae3a9a98a671bbe9a56d5d3cf13a355fe59299c05e65d0d50e74a1567a3d->enter($__internal_2755ae3a9a98a671bbe9a56d5d3cf13a355fe59299c05e65d0d50e74a1567a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_b85977b1612912201b91b2e2946445aaf27e3f73a7d5a32467b1c7c0a1cf4608 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b85977b1612912201b91b2e2946445aaf27e3f73a7d5a32467b1c7c0a1cf4608->enter($__internal_b85977b1612912201b91b2e2946445aaf27e3f73a7d5a32467b1c7c0a1cf4608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

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
        
        $__internal_b85977b1612912201b91b2e2946445aaf27e3f73a7d5a32467b1c7c0a1cf4608->leave($__internal_b85977b1612912201b91b2e2946445aaf27e3f73a7d5a32467b1c7c0a1cf4608_prof);

        
        $__internal_2755ae3a9a98a671bbe9a56d5d3cf13a355fe59299c05e65d0d50e74a1567a3d->leave($__internal_2755ae3a9a98a671bbe9a56d5d3cf13a355fe59299c05e65d0d50e74a1567a3d_prof);

    }

    // line 328
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_919f8e3f01534ed707f55517c3047a6972fe0d50ceb3684f7fdabaebda37d0c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_919f8e3f01534ed707f55517c3047a6972fe0d50ceb3684f7fdabaebda37d0c6->enter($__internal_919f8e3f01534ed707f55517c3047a6972fe0d50ceb3684f7fdabaebda37d0c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        $__internal_b27c4735dc34cde17bdeff425e20b0060f39350c261384a67fd1fe66ab09a59a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b27c4735dc34cde17bdeff425e20b0060f39350c261384a67fd1fe66ab09a59a->enter($__internal_b27c4735dc34cde17bdeff425e20b0060f39350c261384a67fd1fe66ab09a59a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 329
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) || array_key_exists("render_rest", $context) ? $context["render_rest"] : (function () { throw new Twig_Error_Runtime('Variable "render_rest" does not exist.', 329, $this->getSourceContext()); })()))) {
            // line 330
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 330, $this->getSourceContext()); })()), 'rest');
        }
        // line 332
        echo "</form>";
        
        $__internal_b27c4735dc34cde17bdeff425e20b0060f39350c261384a67fd1fe66ab09a59a->leave($__internal_b27c4735dc34cde17bdeff425e20b0060f39350c261384a67fd1fe66ab09a59a_prof);

        
        $__internal_919f8e3f01534ed707f55517c3047a6972fe0d50ceb3684f7fdabaebda37d0c6->leave($__internal_919f8e3f01534ed707f55517c3047a6972fe0d50ceb3684f7fdabaebda37d0c6_prof);

    }

    // line 335
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_275fa36f991025aa3420200a8f8f09b4667c1eaafed9f1d503b8160c1fd75ea2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_275fa36f991025aa3420200a8f8f09b4667c1eaafed9f1d503b8160c1fd75ea2->enter($__internal_275fa36f991025aa3420200a8f8f09b4667c1eaafed9f1d503b8160c1fd75ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_8832289615f581de2c05b1cb4b74d7a488823753e2e204032a8f5fb3f226ddae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8832289615f581de2c05b1cb4b74d7a488823753e2e204032a8f5fb3f226ddae->enter($__internal_8832289615f581de2c05b1cb4b74d7a488823753e2e204032a8f5fb3f226ddae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_8832289615f581de2c05b1cb4b74d7a488823753e2e204032a8f5fb3f226ddae->leave($__internal_8832289615f581de2c05b1cb4b74d7a488823753e2e204032a8f5fb3f226ddae_prof);

        
        $__internal_275fa36f991025aa3420200a8f8f09b4667c1eaafed9f1d503b8160c1fd75ea2->leave($__internal_275fa36f991025aa3420200a8f8f09b4667c1eaafed9f1d503b8160c1fd75ea2_prof);

    }

    // line 345
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_23e4f9e7b5a2ab56eb926bce08a5313bbbcd9a5e8b2ab04cdd9e6903d38ca118 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23e4f9e7b5a2ab56eb926bce08a5313bbbcd9a5e8b2ab04cdd9e6903d38ca118->enter($__internal_23e4f9e7b5a2ab56eb926bce08a5313bbbcd9a5e8b2ab04cdd9e6903d38ca118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        $__internal_b1dafa442bf16f44568f6dfc750014ebc360571f3c530b70c41ab66a2f5747e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1dafa442bf16f44568f6dfc750014ebc360571f3c530b70c41ab66a2f5747e3->enter($__internal_b1dafa442bf16f44568f6dfc750014ebc360571f3c530b70c41ab66a2f5747e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

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
        
        $__internal_b1dafa442bf16f44568f6dfc750014ebc360571f3c530b70c41ab66a2f5747e3->leave($__internal_b1dafa442bf16f44568f6dfc750014ebc360571f3c530b70c41ab66a2f5747e3_prof);

        
        $__internal_23e4f9e7b5a2ab56eb926bce08a5313bbbcd9a5e8b2ab04cdd9e6903d38ca118->leave($__internal_23e4f9e7b5a2ab56eb926bce08a5313bbbcd9a5e8b2ab04cdd9e6903d38ca118_prof);

    }

    // line 369
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_0c376dc1167b7a7cdca73650e5bf5c56fb3f3deb9a0ce2fa9448ad0dfe5cccde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c376dc1167b7a7cdca73650e5bf5c56fb3f3deb9a0ce2fa9448ad0dfe5cccde->enter($__internal_0c376dc1167b7a7cdca73650e5bf5c56fb3f3deb9a0ce2fa9448ad0dfe5cccde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        $__internal_716f82f0888eae68f1b8d22e00b984de1fbdae587eb627ba61de3f4d2e69ed2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_716f82f0888eae68f1b8d22e00b984de1fbdae587eb627ba61de3f4d2e69ed2f->enter($__internal_716f82f0888eae68f1b8d22e00b984de1fbdae587eb627ba61de3f4d2e69ed2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

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
        
        $__internal_716f82f0888eae68f1b8d22e00b984de1fbdae587eb627ba61de3f4d2e69ed2f->leave($__internal_716f82f0888eae68f1b8d22e00b984de1fbdae587eb627ba61de3f4d2e69ed2f_prof);

        
        $__internal_0c376dc1167b7a7cdca73650e5bf5c56fb3f3deb9a0ce2fa9448ad0dfe5cccde->leave($__internal_0c376dc1167b7a7cdca73650e5bf5c56fb3f3deb9a0ce2fa9448ad0dfe5cccde_prof);

    }

    // line 375
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_5ccefd4523a1f66a02aefcb6d5b5e4330f6a2005a5e1362c03a9e5b708187e3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ccefd4523a1f66a02aefcb6d5b5e4330f6a2005a5e1362c03a9e5b708187e3f->enter($__internal_5ccefd4523a1f66a02aefcb6d5b5e4330f6a2005a5e1362c03a9e5b708187e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_4bb3493810e537efcc74af264be4c81b79792336c6b876046e9fe843effc12f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bb3493810e537efcc74af264be4c81b79792336c6b876046e9fe843effc12f1->enter($__internal_4bb3493810e537efcc74af264be4c81b79792336c6b876046e9fe843effc12f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

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
        
        $__internal_4bb3493810e537efcc74af264be4c81b79792336c6b876046e9fe843effc12f1->leave($__internal_4bb3493810e537efcc74af264be4c81b79792336c6b876046e9fe843effc12f1_prof);

        
        $__internal_5ccefd4523a1f66a02aefcb6d5b5e4330f6a2005a5e1362c03a9e5b708187e3f->leave($__internal_5ccefd4523a1f66a02aefcb6d5b5e4330f6a2005a5e1362c03a9e5b708187e3f_prof);

    }

    // line 382
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_9544ca6ff6012e1f7d775e040adec1a551772d542796dc7deec4416c23a0ae81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9544ca6ff6012e1f7d775e040adec1a551772d542796dc7deec4416c23a0ae81->enter($__internal_9544ca6ff6012e1f7d775e040adec1a551772d542796dc7deec4416c23a0ae81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        $__internal_4df5b73121a67029979106142add3844d830a33eff98147e2c05e672be34d76e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4df5b73121a67029979106142add3844d830a33eff98147e2c05e672be34d76e->enter($__internal_4df5b73121a67029979106142add3844d830a33eff98147e2c05e672be34d76e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 383
        if ( !twig_test_empty((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 383, $this->getSourceContext()); })()))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 383, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        // line 384
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_4df5b73121a67029979106142add3844d830a33eff98147e2c05e672be34d76e->leave($__internal_4df5b73121a67029979106142add3844d830a33eff98147e2c05e672be34d76e_prof);

        
        $__internal_9544ca6ff6012e1f7d775e040adec1a551772d542796dc7deec4416c23a0ae81->leave($__internal_9544ca6ff6012e1f7d775e040adec1a551772d542796dc7deec4416c23a0ae81_prof);

    }

    // line 387
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_9b2883e8234793812407ae3e25c0683c65516e0c1806b8342ede0120334c4c0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b2883e8234793812407ae3e25c0683c65516e0c1806b8342ede0120334c4c0a->enter($__internal_9b2883e8234793812407ae3e25c0683c65516e0c1806b8342ede0120334c4c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        $__internal_ab0246600b8c080fbd52e6ce72df734dc4bbe6bac184cee02fe5306e47553ff1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab0246600b8c080fbd52e6ce72df734dc4bbe6bac184cee02fe5306e47553ff1->enter($__internal_ab0246600b8c080fbd52e6ce72df734dc4bbe6bac184cee02fe5306e47553ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

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
        
        $__internal_ab0246600b8c080fbd52e6ce72df734dc4bbe6bac184cee02fe5306e47553ff1->leave($__internal_ab0246600b8c080fbd52e6ce72df734dc4bbe6bac184cee02fe5306e47553ff1_prof);

        
        $__internal_9b2883e8234793812407ae3e25c0683c65516e0c1806b8342ede0120334c4c0a->leave($__internal_9b2883e8234793812407ae3e25c0683c65516e0c1806b8342ede0120334c4c0a_prof);

    }

    // line 392
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_42763b1c93fb1627384defef1bce8cc5494445030366309eb6f65aace2e574a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42763b1c93fb1627384defef1bce8cc5494445030366309eb6f65aace2e574a3->enter($__internal_42763b1c93fb1627384defef1bce8cc5494445030366309eb6f65aace2e574a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        $__internal_edaeeb11d455ea9301d8324f1557e628622b299edb2e2f09710c3cfd28e53e7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edaeeb11d455ea9301d8324f1557e628622b299edb2e2f09710c3cfd28e53e7a->enter($__internal_edaeeb11d455ea9301d8324f1557e628622b299edb2e2f09710c3cfd28e53e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

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
        
        $__internal_edaeeb11d455ea9301d8324f1557e628622b299edb2e2f09710c3cfd28e53e7a->leave($__internal_edaeeb11d455ea9301d8324f1557e628622b299edb2e2f09710c3cfd28e53e7a_prof);

        
        $__internal_42763b1c93fb1627384defef1bce8cc5494445030366309eb6f65aace2e574a3->leave($__internal_42763b1c93fb1627384defef1bce8cc5494445030366309eb6f65aace2e574a3_prof);

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
", "form_div_layout.html.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\form_div_layout.html.twig");
    }
}
