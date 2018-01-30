<?php

/* form_div_layout.html.twig */
class __TwigTemplate_3be39d81b583738c0debb430f9d951dc932633a8e6dd1e14d33903a4f4fb279c extends Twig_Template
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
        $__internal_4513d89e15a56f79ce004ff3cdc0cdcc29a9535c1f96a3b0b6126cd605f8d189 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4513d89e15a56f79ce004ff3cdc0cdcc29a9535c1f96a3b0b6126cd605f8d189->enter($__internal_4513d89e15a56f79ce004ff3cdc0cdcc29a9535c1f96a3b0b6126cd605f8d189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        $__internal_d9f3a2b1dbe5ea67973cc6c868e18b36c35ed726d704c08ae7a095b01691f715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9f3a2b1dbe5ea67973cc6c868e18b36c35ed726d704c08ae7a095b01691f715->enter($__internal_d9f3a2b1dbe5ea67973cc6c868e18b36c35ed726d704c08ae7a095b01691f715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

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
        
        $__internal_4513d89e15a56f79ce004ff3cdc0cdcc29a9535c1f96a3b0b6126cd605f8d189->leave($__internal_4513d89e15a56f79ce004ff3cdc0cdcc29a9535c1f96a3b0b6126cd605f8d189_prof);

        
        $__internal_d9f3a2b1dbe5ea67973cc6c868e18b36c35ed726d704c08ae7a095b01691f715->leave($__internal_d9f3a2b1dbe5ea67973cc6c868e18b36c35ed726d704c08ae7a095b01691f715_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_1ca4a98d38b5a90c1e0fa5c59b7462c362735b39486db951b2afeaa4565df6e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ca4a98d38b5a90c1e0fa5c59b7462c362735b39486db951b2afeaa4565df6e8->enter($__internal_1ca4a98d38b5a90c1e0fa5c59b7462c362735b39486db951b2afeaa4565df6e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_8ac26524dd4366b40ecc51396756f3a03cca77e0023343194aece6f5a3ea1240 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ac26524dd4366b40ecc51396756f3a03cca77e0023343194aece6f5a3ea1240->enter($__internal_8ac26524dd4366b40ecc51396756f3a03cca77e0023343194aece6f5a3ea1240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if ((isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 4, $this->getSourceContext()); })())) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_8ac26524dd4366b40ecc51396756f3a03cca77e0023343194aece6f5a3ea1240->leave($__internal_8ac26524dd4366b40ecc51396756f3a03cca77e0023343194aece6f5a3ea1240_prof);

        
        $__internal_1ca4a98d38b5a90c1e0fa5c59b7462c362735b39486db951b2afeaa4565df6e8->leave($__internal_1ca4a98d38b5a90c1e0fa5c59b7462c362735b39486db951b2afeaa4565df6e8_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_5d2b12d2c15d658efd0845a0bdbf250e2238fef5f0888c9818daa545280ca79a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d2b12d2c15d658efd0845a0bdbf250e2238fef5f0888c9818daa545280ca79a->enter($__internal_5d2b12d2c15d658efd0845a0bdbf250e2238fef5f0888c9818daa545280ca79a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_f0dbca248b15f9b09ef832230024d051a721a94fe62c4a46f1953bfc4bf7d41b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0dbca248b15f9b09ef832230024d051a721a94fe62c4a46f1953bfc4bf7d41b->enter($__internal_f0dbca248b15f9b09ef832230024d051a721a94fe62c4a46f1953bfc4bf7d41b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

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
        
        $__internal_f0dbca248b15f9b09ef832230024d051a721a94fe62c4a46f1953bfc4bf7d41b->leave($__internal_f0dbca248b15f9b09ef832230024d051a721a94fe62c4a46f1953bfc4bf7d41b_prof);

        
        $__internal_5d2b12d2c15d658efd0845a0bdbf250e2238fef5f0888c9818daa545280ca79a->leave($__internal_5d2b12d2c15d658efd0845a0bdbf250e2238fef5f0888c9818daa545280ca79a_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_a11cf0ae1b913b8e23e8fc43b2617a0290ccc2a0b79828c09f632d3138f54fe1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a11cf0ae1b913b8e23e8fc43b2617a0290ccc2a0b79828c09f632d3138f54fe1->enter($__internal_a11cf0ae1b913b8e23e8fc43b2617a0290ccc2a0b79828c09f632d3138f54fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_7a3e98711f804b10a4bad9167fd01f8026d515e5d7de9d4c95d6cf794410b4c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a3e98711f804b10a4bad9167fd01f8026d515e5d7de9d4c95d6cf794410b4c5->enter($__internal_7a3e98711f804b10a4bad9167fd01f8026d515e5d7de9d4c95d6cf794410b4c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_7a3e98711f804b10a4bad9167fd01f8026d515e5d7de9d4c95d6cf794410b4c5->leave($__internal_7a3e98711f804b10a4bad9167fd01f8026d515e5d7de9d4c95d6cf794410b4c5_prof);

        
        $__internal_a11cf0ae1b913b8e23e8fc43b2617a0290ccc2a0b79828c09f632d3138f54fe1->leave($__internal_a11cf0ae1b913b8e23e8fc43b2617a0290ccc2a0b79828c09f632d3138f54fe1_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_f7dfa61b0e279bba5d49325af76330a91f5e533fcb42c92006f17a74fa4c0322 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7dfa61b0e279bba5d49325af76330a91f5e533fcb42c92006f17a74fa4c0322->enter($__internal_f7dfa61b0e279bba5d49325af76330a91f5e533fcb42c92006f17a74fa4c0322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_41c567686e0ad8f169fe7e5e116bc687dbc4126bc2a6c2be07d6470ed23e94b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41c567686e0ad8f169fe7e5e116bc687dbc4126bc2a6c2be07d6470ed23e94b9->enter($__internal_41c567686e0ad8f169fe7e5e116bc687dbc4126bc2a6c2be07d6470ed23e94b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 28, $this->getSourceContext()); })()), array("data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new Twig_Error_Runtime('Variable "prototype" does not exist.', 28, $this->getSourceContext()); })()), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_41c567686e0ad8f169fe7e5e116bc687dbc4126bc2a6c2be07d6470ed23e94b9->leave($__internal_41c567686e0ad8f169fe7e5e116bc687dbc4126bc2a6c2be07d6470ed23e94b9_prof);

        
        $__internal_f7dfa61b0e279bba5d49325af76330a91f5e533fcb42c92006f17a74fa4c0322->leave($__internal_f7dfa61b0e279bba5d49325af76330a91f5e533fcb42c92006f17a74fa4c0322_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_c1e29e001697b9a32844a1a27aace88e53422ad6737d2f42e3a855546e032c69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1e29e001697b9a32844a1a27aace88e53422ad6737d2f42e3a855546e032c69->enter($__internal_c1e29e001697b9a32844a1a27aace88e53422ad6737d2f42e3a855546e032c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_60ff5aacbee93fe1e040ca0bb0ec260345490ac1c5cdb796592c6ee5359066d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60ff5aacbee93fe1e040ca0bb0ec260345490ac1c5cdb796592c6ee5359066d1->enter($__internal_60ff5aacbee93fe1e040ca0bb0ec260345490ac1c5cdb796592c6ee5359066d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 34, $this->getSourceContext()); })()), "html", null, true);
        echo "</textarea>";
        
        $__internal_60ff5aacbee93fe1e040ca0bb0ec260345490ac1c5cdb796592c6ee5359066d1->leave($__internal_60ff5aacbee93fe1e040ca0bb0ec260345490ac1c5cdb796592c6ee5359066d1_prof);

        
        $__internal_c1e29e001697b9a32844a1a27aace88e53422ad6737d2f42e3a855546e032c69->leave($__internal_c1e29e001697b9a32844a1a27aace88e53422ad6737d2f42e3a855546e032c69_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_07cdec77df3c0a90d9f5672eb283ddd1b04c4d901af14ebd617fec918dc6820b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07cdec77df3c0a90d9f5672eb283ddd1b04c4d901af14ebd617fec918dc6820b->enter($__internal_07cdec77df3c0a90d9f5672eb283ddd1b04c4d901af14ebd617fec918dc6820b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        $__internal_1ba00f302b4203eec05d7b05ae39b16bb2dae0b30b4f9d823b11dc1f3fae8ce7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ba00f302b4203eec05d7b05ae39b16bb2dae0b30b4f9d823b11dc1f3fae8ce7->enter($__internal_1ba00f302b4203eec05d7b05ae39b16bb2dae0b30b4f9d823b11dc1f3fae8ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if ((isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 38, $this->getSourceContext()); })())) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_1ba00f302b4203eec05d7b05ae39b16bb2dae0b30b4f9d823b11dc1f3fae8ce7->leave($__internal_1ba00f302b4203eec05d7b05ae39b16bb2dae0b30b4f9d823b11dc1f3fae8ce7_prof);

        
        $__internal_07cdec77df3c0a90d9f5672eb283ddd1b04c4d901af14ebd617fec918dc6820b->leave($__internal_07cdec77df3c0a90d9f5672eb283ddd1b04c4d901af14ebd617fec918dc6820b_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_548d4e17904c703b14fabf95004fddc8dc9d8519b482d0d8748afeca267a3a97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_548d4e17904c703b14fabf95004fddc8dc9d8519b482d0d8748afeca267a3a97->enter($__internal_548d4e17904c703b14fabf95004fddc8dc9d8519b482d0d8748afeca267a3a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_fe33462099d6655eb6b6342a3e27be6eb1f5d9f89dd659a317e8b0587bc6042c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe33462099d6655eb6b6342a3e27be6eb1f5d9f89dd659a317e8b0587bc6042c->enter($__internal_fe33462099d6655eb6b6342a3e27be6eb1f5d9f89dd659a317e8b0587bc6042c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_fe33462099d6655eb6b6342a3e27be6eb1f5d9f89dd659a317e8b0587bc6042c->leave($__internal_fe33462099d6655eb6b6342a3e27be6eb1f5d9f89dd659a317e8b0587bc6042c_prof);

        
        $__internal_548d4e17904c703b14fabf95004fddc8dc9d8519b482d0d8748afeca267a3a97->leave($__internal_548d4e17904c703b14fabf95004fddc8dc9d8519b482d0d8748afeca267a3a97_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_acf19425b1f193fcae850cb4a7fa98e5cf7ebd42c4493daa42b8377b55cc225a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acf19425b1f193fcae850cb4a7fa98e5cf7ebd42c4493daa42b8377b55cc225a->enter($__internal_acf19425b1f193fcae850cb4a7fa98e5cf7ebd42c4493daa42b8377b55cc225a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_91d42a77bf40dca4d55c029fa1f450b3c328fd2e6428053356a98d84822a1b33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91d42a77bf40dca4d55c029fa1f450b3c328fd2e6428053356a98d84822a1b33->enter($__internal_91d42a77bf40dca4d55c029fa1f450b3c328fd2e6428053356a98d84822a1b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_91d42a77bf40dca4d55c029fa1f450b3c328fd2e6428053356a98d84822a1b33->leave($__internal_91d42a77bf40dca4d55c029fa1f450b3c328fd2e6428053356a98d84822a1b33_prof);

        
        $__internal_acf19425b1f193fcae850cb4a7fa98e5cf7ebd42c4493daa42b8377b55cc225a->leave($__internal_acf19425b1f193fcae850cb4a7fa98e5cf7ebd42c4493daa42b8377b55cc225a_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_c90e990ae241e76d273d2a01a9c1ba4983d03a024564447fb246d4c519010409 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c90e990ae241e76d273d2a01a9c1ba4983d03a024564447fb246d4c519010409->enter($__internal_c90e990ae241e76d273d2a01a9c1ba4983d03a024564447fb246d4c519010409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        $__internal_fd2413137b71c57dce9f2fc49b3d84020d6860948cce70db9a011b244b6d931c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd2413137b71c57dce9f2fc49b3d84020d6860948cce70db9a011b244b6d931c->enter($__internal_fd2413137b71c57dce9f2fc49b3d84020d6860948cce70db9a011b244b6d931c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

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
                    $__internal_cf5e872d614f6ff65de2ab372574de3384237d8e842a87d138dab87440bfd215 = array("attr" => twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "attr", array()));
                    if (!is_array($__internal_cf5e872d614f6ff65de2ab372574de3384237d8e842a87d138dab87440bfd215)) {
                        throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                    }
                    $context['_parent'] = $context;
                    $context = array_merge($context, $__internal_cf5e872d614f6ff65de2ab372574de3384237d8e842a87d138dab87440bfd215);
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
        
        $__internal_fd2413137b71c57dce9f2fc49b3d84020d6860948cce70db9a011b244b6d931c->leave($__internal_fd2413137b71c57dce9f2fc49b3d84020d6860948cce70db9a011b244b6d931c_prof);

        
        $__internal_c90e990ae241e76d273d2a01a9c1ba4983d03a024564447fb246d4c519010409->leave($__internal_c90e990ae241e76d273d2a01a9c1ba4983d03a024564447fb246d4c519010409_prof);

    }

    // line 87
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_d0c1b844bac4e4a90447e30fe98b969a2c0d0a85b0b1e9f0eecbb69366da0e23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0c1b844bac4e4a90447e30fe98b969a2c0d0a85b0b1e9f0eecbb69366da0e23->enter($__internal_d0c1b844bac4e4a90447e30fe98b969a2c0d0a85b0b1e9f0eecbb69366da0e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_6e510aa1ab431cd0bda3085587fa8e303382eccea3ba77a48002d4e5a06abf70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e510aa1ab431cd0bda3085587fa8e303382eccea3ba77a48002d4e5a06abf70->enter($__internal_6e510aa1ab431cd0bda3085587fa8e303382eccea3ba77a48002d4e5a06abf70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_6e510aa1ab431cd0bda3085587fa8e303382eccea3ba77a48002d4e5a06abf70->leave($__internal_6e510aa1ab431cd0bda3085587fa8e303382eccea3ba77a48002d4e5a06abf70_prof);

        
        $__internal_d0c1b844bac4e4a90447e30fe98b969a2c0d0a85b0b1e9f0eecbb69366da0e23->leave($__internal_d0c1b844bac4e4a90447e30fe98b969a2c0d0a85b0b1e9f0eecbb69366da0e23_prof);

    }

    // line 91
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_55f3e2cf4df213431daeccbadd590c2509a64da24142a4cd0932ae6e6eba94a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55f3e2cf4df213431daeccbadd590c2509a64da24142a4cd0932ae6e6eba94a5->enter($__internal_55f3e2cf4df213431daeccbadd590c2509a64da24142a4cd0932ae6e6eba94a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_3877650ae777687f9603b1113b1479b585824e7fd721ef1fd48ee9d4af717431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3877650ae777687f9603b1113b1479b585824e7fd721ef1fd48ee9d4af717431->enter($__internal_3877650ae777687f9603b1113b1479b585824e7fd721ef1fd48ee9d4af717431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_3877650ae777687f9603b1113b1479b585824e7fd721ef1fd48ee9d4af717431->leave($__internal_3877650ae777687f9603b1113b1479b585824e7fd721ef1fd48ee9d4af717431_prof);

        
        $__internal_55f3e2cf4df213431daeccbadd590c2509a64da24142a4cd0932ae6e6eba94a5->leave($__internal_55f3e2cf4df213431daeccbadd590c2509a64da24142a4cd0932ae6e6eba94a5_prof);

    }

    // line 95
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_aa8401f046e11d722f1b5bfe41a372264a8d64dddc1ccd622948d99ee27fe38e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa8401f046e11d722f1b5bfe41a372264a8d64dddc1ccd622948d99ee27fe38e->enter($__internal_aa8401f046e11d722f1b5bfe41a372264a8d64dddc1ccd622948d99ee27fe38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_07e756dacfb13acc1b5e7f28c1869b074a8adbb704b712799d321554188874ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07e756dacfb13acc1b5e7f28c1869b074a8adbb704b712799d321554188874ab->enter($__internal_07e756dacfb13acc1b5e7f28c1869b074a8adbb704b712799d321554188874ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_07e756dacfb13acc1b5e7f28c1869b074a8adbb704b712799d321554188874ab->leave($__internal_07e756dacfb13acc1b5e7f28c1869b074a8adbb704b712799d321554188874ab_prof);

        
        $__internal_aa8401f046e11d722f1b5bfe41a372264a8d64dddc1ccd622948d99ee27fe38e->leave($__internal_aa8401f046e11d722f1b5bfe41a372264a8d64dddc1ccd622948d99ee27fe38e_prof);

    }

    // line 108
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_83916ee73ef09140d35eb08cf15d195f1becf337d0ded13bc1fec995bb0645ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83916ee73ef09140d35eb08cf15d195f1becf337d0ded13bc1fec995bb0645ea->enter($__internal_83916ee73ef09140d35eb08cf15d195f1becf337d0ded13bc1fec995bb0645ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_5078ec178c88258e30f3a40cdd26bd43c931f80c0d3f77e29d3c6c2e5e075b08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5078ec178c88258e30f3a40cdd26bd43c931f80c0d3f77e29d3c6c2e5e075b08->enter($__internal_5078ec178c88258e30f3a40cdd26bd43c931f80c0d3f77e29d3c6c2e5e075b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_5078ec178c88258e30f3a40cdd26bd43c931f80c0d3f77e29d3c6c2e5e075b08->leave($__internal_5078ec178c88258e30f3a40cdd26bd43c931f80c0d3f77e29d3c6c2e5e075b08_prof);

        
        $__internal_83916ee73ef09140d35eb08cf15d195f1becf337d0ded13bc1fec995bb0645ea->leave($__internal_83916ee73ef09140d35eb08cf15d195f1becf337d0ded13bc1fec995bb0645ea_prof);

    }

    // line 122
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_80a0ec8d288d921373d1b8ac60e38af673b04f521365c4f9f6c42e5a1d2107b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80a0ec8d288d921373d1b8ac60e38af673b04f521365c4f9f6c42e5a1d2107b0->enter($__internal_80a0ec8d288d921373d1b8ac60e38af673b04f521365c4f9f6c42e5a1d2107b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_bd46adb5c46475930466c187717794259cb271272f323f0a557959b1a6801637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd46adb5c46475930466c187717794259cb271272f323f0a557959b1a6801637->enter($__internal_bd46adb5c46475930466c187717794259cb271272f323f0a557959b1a6801637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_bd46adb5c46475930466c187717794259cb271272f323f0a557959b1a6801637->leave($__internal_bd46adb5c46475930466c187717794259cb271272f323f0a557959b1a6801637_prof);

        
        $__internal_80a0ec8d288d921373d1b8ac60e38af673b04f521365c4f9f6c42e5a1d2107b0->leave($__internal_80a0ec8d288d921373d1b8ac60e38af673b04f521365c4f9f6c42e5a1d2107b0_prof);

    }

    // line 133
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_d8d7a9f1b25e2cb2c15636ac59711e56c54ff1d5bd4e6e026ebe6eaabdad50ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8d7a9f1b25e2cb2c15636ac59711e56c54ff1d5bd4e6e026ebe6eaabdad50ea->enter($__internal_d8d7a9f1b25e2cb2c15636ac59711e56c54ff1d5bd4e6e026ebe6eaabdad50ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_17a4745fa26a11a4ab909003b2bdbc9068a44592f82449a16b8dfda0e07c403b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17a4745fa26a11a4ab909003b2bdbc9068a44592f82449a16b8dfda0e07c403b->enter($__internal_17a4745fa26a11a4ab909003b2bdbc9068a44592f82449a16b8dfda0e07c403b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_17a4745fa26a11a4ab909003b2bdbc9068a44592f82449a16b8dfda0e07c403b->leave($__internal_17a4745fa26a11a4ab909003b2bdbc9068a44592f82449a16b8dfda0e07c403b_prof);

        
        $__internal_d8d7a9f1b25e2cb2c15636ac59711e56c54ff1d5bd4e6e026ebe6eaabdad50ea->leave($__internal_d8d7a9f1b25e2cb2c15636ac59711e56c54ff1d5bd4e6e026ebe6eaabdad50ea_prof);

    }

    // line 168
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_89583903dfce93f870402d2da181270c4373702bbf2d9254d6bde859964bb78a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89583903dfce93f870402d2da181270c4373702bbf2d9254d6bde859964bb78a->enter($__internal_89583903dfce93f870402d2da181270c4373702bbf2d9254d6bde859964bb78a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        $__internal_0fd866107e6b9199668c58b06e4c156e6e21334b97f83d006e0cf2e27c4ded8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fd866107e6b9199668c58b06e4c156e6e21334b97f83d006e0cf2e27c4ded8c->enter($__internal_0fd866107e6b9199668c58b06e4c156e6e21334b97f83d006e0cf2e27c4ded8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 170
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 170, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 171
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_0fd866107e6b9199668c58b06e4c156e6e21334b97f83d006e0cf2e27c4ded8c->leave($__internal_0fd866107e6b9199668c58b06e4c156e6e21334b97f83d006e0cf2e27c4ded8c_prof);

        
        $__internal_89583903dfce93f870402d2da181270c4373702bbf2d9254d6bde859964bb78a->leave($__internal_89583903dfce93f870402d2da181270c4373702bbf2d9254d6bde859964bb78a_prof);

    }

    // line 174
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_c6d40cc0e9344ac4f7511c3244f622ba079f27bcd47aec410c9b8226e5825571 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6d40cc0e9344ac4f7511c3244f622ba079f27bcd47aec410c9b8226e5825571->enter($__internal_c6d40cc0e9344ac4f7511c3244f622ba079f27bcd47aec410c9b8226e5825571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        $__internal_8b23d39a6dce2b05d7cfd9985cf4044ac5acf653f726a9e37830c10e67ce51e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b23d39a6dce2b05d7cfd9985cf4044ac5acf653f726a9e37830c10e67ce51e1->enter($__internal_8b23d39a6dce2b05d7cfd9985cf4044ac5acf653f726a9e37830c10e67ce51e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 175
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 175, $this->getSourceContext()); })()), "number")) : ("number"));
        // line 176
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_8b23d39a6dce2b05d7cfd9985cf4044ac5acf653f726a9e37830c10e67ce51e1->leave($__internal_8b23d39a6dce2b05d7cfd9985cf4044ac5acf653f726a9e37830c10e67ce51e1_prof);

        
        $__internal_c6d40cc0e9344ac4f7511c3244f622ba079f27bcd47aec410c9b8226e5825571->leave($__internal_c6d40cc0e9344ac4f7511c3244f622ba079f27bcd47aec410c9b8226e5825571_prof);

    }

    // line 179
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_2a7590ffed5b5ea70b02c3345b6d518277260771fd1ecdf967c06def73e54ea4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a7590ffed5b5ea70b02c3345b6d518277260771fd1ecdf967c06def73e54ea4->enter($__internal_2a7590ffed5b5ea70b02c3345b6d518277260771fd1ecdf967c06def73e54ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_bd640c86c01166ab9b671bbfffc070975440c60ab4ae9fc26252771f0efdc4e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd640c86c01166ab9b671bbfffc070975440c60ab4ae9fc26252771f0efdc4e8->enter($__internal_bd640c86c01166ab9b671bbfffc070975440c60ab4ae9fc26252771f0efdc4e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 180
        echo twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 180, $this->getSourceContext()); })()), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_bd640c86c01166ab9b671bbfffc070975440c60ab4ae9fc26252771f0efdc4e8->leave($__internal_bd640c86c01166ab9b671bbfffc070975440c60ab4ae9fc26252771f0efdc4e8_prof);

        
        $__internal_2a7590ffed5b5ea70b02c3345b6d518277260771fd1ecdf967c06def73e54ea4->leave($__internal_2a7590ffed5b5ea70b02c3345b6d518277260771fd1ecdf967c06def73e54ea4_prof);

    }

    // line 183
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_cf8e61295ee5ed296bcee82bfabbd3224e51f787702540e03514d331b0085d44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf8e61295ee5ed296bcee82bfabbd3224e51f787702540e03514d331b0085d44->enter($__internal_cf8e61295ee5ed296bcee82bfabbd3224e51f787702540e03514d331b0085d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        $__internal_1637bd4e443dfcef7a6d81cdf95492b22bd1a351ae9f7cddd73805a57d58a4a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1637bd4e443dfcef7a6d81cdf95492b22bd1a351ae9f7cddd73805a57d58a4a2->enter($__internal_1637bd4e443dfcef7a6d81cdf95492b22bd1a351ae9f7cddd73805a57d58a4a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 184
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 184, $this->getSourceContext()); })()), "url")) : ("url"));
        // line 185
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_1637bd4e443dfcef7a6d81cdf95492b22bd1a351ae9f7cddd73805a57d58a4a2->leave($__internal_1637bd4e443dfcef7a6d81cdf95492b22bd1a351ae9f7cddd73805a57d58a4a2_prof);

        
        $__internal_cf8e61295ee5ed296bcee82bfabbd3224e51f787702540e03514d331b0085d44->leave($__internal_cf8e61295ee5ed296bcee82bfabbd3224e51f787702540e03514d331b0085d44_prof);

    }

    // line 188
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_8f290dd42aad8a4a4981f1e87dd2aff91e12a91e9d3120a9b9632d0c5567e025 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f290dd42aad8a4a4981f1e87dd2aff91e12a91e9d3120a9b9632d0c5567e025->enter($__internal_8f290dd42aad8a4a4981f1e87dd2aff91e12a91e9d3120a9b9632d0c5567e025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        $__internal_b5fb0d8df5a78bae9b66ed1941f20ad3e7113e089871338ca84cbda548949aa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5fb0d8df5a78bae9b66ed1941f20ad3e7113e089871338ca84cbda548949aa5->enter($__internal_b5fb0d8df5a78bae9b66ed1941f20ad3e7113e089871338ca84cbda548949aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 189
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 189, $this->getSourceContext()); })()), "search")) : ("search"));
        // line 190
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_b5fb0d8df5a78bae9b66ed1941f20ad3e7113e089871338ca84cbda548949aa5->leave($__internal_b5fb0d8df5a78bae9b66ed1941f20ad3e7113e089871338ca84cbda548949aa5_prof);

        
        $__internal_8f290dd42aad8a4a4981f1e87dd2aff91e12a91e9d3120a9b9632d0c5567e025->leave($__internal_8f290dd42aad8a4a4981f1e87dd2aff91e12a91e9d3120a9b9632d0c5567e025_prof);

    }

    // line 193
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_64808e071a9b0abe15e35d0d8bf4ff937a9d45641ccee6885b2ad4fd2623d4cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64808e071a9b0abe15e35d0d8bf4ff937a9d45641ccee6885b2ad4fd2623d4cf->enter($__internal_64808e071a9b0abe15e35d0d8bf4ff937a9d45641ccee6885b2ad4fd2623d4cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_ef2ebb020733cd251ec23f1578b15dd88d1f9508c879236e114099c6d47f8d42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef2ebb020733cd251ec23f1578b15dd88d1f9508c879236e114099c6d47f8d42->enter($__internal_ef2ebb020733cd251ec23f1578b15dd88d1f9508c879236e114099c6d47f8d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 194
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 194, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 195
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_ef2ebb020733cd251ec23f1578b15dd88d1f9508c879236e114099c6d47f8d42->leave($__internal_ef2ebb020733cd251ec23f1578b15dd88d1f9508c879236e114099c6d47f8d42_prof);

        
        $__internal_64808e071a9b0abe15e35d0d8bf4ff937a9d45641ccee6885b2ad4fd2623d4cf->leave($__internal_64808e071a9b0abe15e35d0d8bf4ff937a9d45641ccee6885b2ad4fd2623d4cf_prof);

    }

    // line 198
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_33ef7cbb09ca18758c2beb17a5cddbfdfc23aaa07f27feee6d9e26bb232f863c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33ef7cbb09ca18758c2beb17a5cddbfdfc23aaa07f27feee6d9e26bb232f863c->enter($__internal_33ef7cbb09ca18758c2beb17a5cddbfdfc23aaa07f27feee6d9e26bb232f863c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        $__internal_8d8d0d2c79c236b5b1f85da9596592c5fbdfcddc2f34be667ce111d301789a1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d8d0d2c79c236b5b1f85da9596592c5fbdfcddc2f34be667ce111d301789a1a->enter($__internal_8d8d0d2c79c236b5b1f85da9596592c5fbdfcddc2f34be667ce111d301789a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 199
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 199, $this->getSourceContext()); })()), "password")) : ("password"));
        // line 200
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_8d8d0d2c79c236b5b1f85da9596592c5fbdfcddc2f34be667ce111d301789a1a->leave($__internal_8d8d0d2c79c236b5b1f85da9596592c5fbdfcddc2f34be667ce111d301789a1a_prof);

        
        $__internal_33ef7cbb09ca18758c2beb17a5cddbfdfc23aaa07f27feee6d9e26bb232f863c->leave($__internal_33ef7cbb09ca18758c2beb17a5cddbfdfc23aaa07f27feee6d9e26bb232f863c_prof);

    }

    // line 203
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_66ada54da3d9dd051fd456c6e183d240c0b702828169308696af9e361667bb08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66ada54da3d9dd051fd456c6e183d240c0b702828169308696af9e361667bb08->enter($__internal_66ada54da3d9dd051fd456c6e183d240c0b702828169308696af9e361667bb08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        $__internal_6fb65e59e7924ece20e0da87d61b37382a6137bed97b432292c9a43a1e5bdaba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fb65e59e7924ece20e0da87d61b37382a6137bed97b432292c9a43a1e5bdaba->enter($__internal_6fb65e59e7924ece20e0da87d61b37382a6137bed97b432292c9a43a1e5bdaba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 204
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 204, $this->getSourceContext()); })()), "hidden")) : ("hidden"));
        // line 205
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_6fb65e59e7924ece20e0da87d61b37382a6137bed97b432292c9a43a1e5bdaba->leave($__internal_6fb65e59e7924ece20e0da87d61b37382a6137bed97b432292c9a43a1e5bdaba_prof);

        
        $__internal_66ada54da3d9dd051fd456c6e183d240c0b702828169308696af9e361667bb08->leave($__internal_66ada54da3d9dd051fd456c6e183d240c0b702828169308696af9e361667bb08_prof);

    }

    // line 208
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_bb4b224d07fb85344b8bb11add11e7ed6f253cfb140a4c9dbeff0f0fe7f610dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb4b224d07fb85344b8bb11add11e7ed6f253cfb140a4c9dbeff0f0fe7f610dc->enter($__internal_bb4b224d07fb85344b8bb11add11e7ed6f253cfb140a4c9dbeff0f0fe7f610dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        $__internal_349e0b9190d86f9a691884a1fc8cffd542e05dd2ba6e8d9baae3cf72875a955f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_349e0b9190d86f9a691884a1fc8cffd542e05dd2ba6e8d9baae3cf72875a955f->enter($__internal_349e0b9190d86f9a691884a1fc8cffd542e05dd2ba6e8d9baae3cf72875a955f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 209
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 209, $this->getSourceContext()); })()), "email")) : ("email"));
        // line 210
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_349e0b9190d86f9a691884a1fc8cffd542e05dd2ba6e8d9baae3cf72875a955f->leave($__internal_349e0b9190d86f9a691884a1fc8cffd542e05dd2ba6e8d9baae3cf72875a955f_prof);

        
        $__internal_bb4b224d07fb85344b8bb11add11e7ed6f253cfb140a4c9dbeff0f0fe7f610dc->leave($__internal_bb4b224d07fb85344b8bb11add11e7ed6f253cfb140a4c9dbeff0f0fe7f610dc_prof);

    }

    // line 213
    public function block_range_widget($context, array $blocks = array())
    {
        $__internal_482ccca55114edd2fd2cdbdffcd642f2b8a3506aa8cd39862e3b5908a37c0268 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_482ccca55114edd2fd2cdbdffcd642f2b8a3506aa8cd39862e3b5908a37c0268->enter($__internal_482ccca55114edd2fd2cdbdffcd642f2b8a3506aa8cd39862e3b5908a37c0268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        $__internal_c273aa7903db2056c0c6d2a33a0fe699f4ad630edcfae7955561b52c5fc494f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c273aa7903db2056c0c6d2a33a0fe699f4ad630edcfae7955561b52c5fc494f5->enter($__internal_c273aa7903db2056c0c6d2a33a0fe699f4ad630edcfae7955561b52c5fc494f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        // line 214
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 214, $this->getSourceContext()); })()), "range")) : ("range"));
        // line 215
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_c273aa7903db2056c0c6d2a33a0fe699f4ad630edcfae7955561b52c5fc494f5->leave($__internal_c273aa7903db2056c0c6d2a33a0fe699f4ad630edcfae7955561b52c5fc494f5_prof);

        
        $__internal_482ccca55114edd2fd2cdbdffcd642f2b8a3506aa8cd39862e3b5908a37c0268->leave($__internal_482ccca55114edd2fd2cdbdffcd642f2b8a3506aa8cd39862e3b5908a37c0268_prof);

    }

    // line 218
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_7760a0cb95011b28e5c89584a6110596c73370c06265c6aa0808b0106c02b9aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7760a0cb95011b28e5c89584a6110596c73370c06265c6aa0808b0106c02b9aa->enter($__internal_7760a0cb95011b28e5c89584a6110596c73370c06265c6aa0808b0106c02b9aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_5aa04feed377c039d44dc84748a549941e99694ba0a299ae9946ffdff3c763e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aa04feed377c039d44dc84748a549941e99694ba0a299ae9946ffdff3c763e7->enter($__internal_5aa04feed377c039d44dc84748a549941e99694ba0a299ae9946ffdff3c763e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

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
        
        $__internal_5aa04feed377c039d44dc84748a549941e99694ba0a299ae9946ffdff3c763e7->leave($__internal_5aa04feed377c039d44dc84748a549941e99694ba0a299ae9946ffdff3c763e7_prof);

        
        $__internal_7760a0cb95011b28e5c89584a6110596c73370c06265c6aa0808b0106c02b9aa->leave($__internal_7760a0cb95011b28e5c89584a6110596c73370c06265c6aa0808b0106c02b9aa_prof);

    }

    // line 232
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_d87b8e78bfbf6c20afe3fefebd6b5e734ed726b97dcb016dce062f5a6a90caa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d87b8e78bfbf6c20afe3fefebd6b5e734ed726b97dcb016dce062f5a6a90caa6->enter($__internal_d87b8e78bfbf6c20afe3fefebd6b5e734ed726b97dcb016dce062f5a6a90caa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        $__internal_2bbca4a1d2e84c54d5321bc88ab68de4a061b09ee13345c366a13b5292661d69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bbca4a1d2e84c54d5321bc88ab68de4a061b09ee13345c366a13b5292661d69->enter($__internal_2bbca4a1d2e84c54d5321bc88ab68de4a061b09ee13345c366a13b5292661d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 233
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 233, $this->getSourceContext()); })()), "submit")) : ("submit"));
        // line 234
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_2bbca4a1d2e84c54d5321bc88ab68de4a061b09ee13345c366a13b5292661d69->leave($__internal_2bbca4a1d2e84c54d5321bc88ab68de4a061b09ee13345c366a13b5292661d69_prof);

        
        $__internal_d87b8e78bfbf6c20afe3fefebd6b5e734ed726b97dcb016dce062f5a6a90caa6->leave($__internal_d87b8e78bfbf6c20afe3fefebd6b5e734ed726b97dcb016dce062f5a6a90caa6_prof);

    }

    // line 237
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_fdbcdd652475a568ea982ba592f75a1fc343e4350c2177d5a0a4790ce5b06518 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdbcdd652475a568ea982ba592f75a1fc343e4350c2177d5a0a4790ce5b06518->enter($__internal_fdbcdd652475a568ea982ba592f75a1fc343e4350c2177d5a0a4790ce5b06518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        $__internal_8cf87623babb1c778df867c5dc08eb79fbc07ae03e3c7ce7a0e418a59b725d43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cf87623babb1c778df867c5dc08eb79fbc07ae03e3c7ce7a0e418a59b725d43->enter($__internal_8cf87623babb1c778df867c5dc08eb79fbc07ae03e3c7ce7a0e418a59b725d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 238
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 238, $this->getSourceContext()); })()), "reset")) : ("reset"));
        // line 239
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_8cf87623babb1c778df867c5dc08eb79fbc07ae03e3c7ce7a0e418a59b725d43->leave($__internal_8cf87623babb1c778df867c5dc08eb79fbc07ae03e3c7ce7a0e418a59b725d43_prof);

        
        $__internal_fdbcdd652475a568ea982ba592f75a1fc343e4350c2177d5a0a4790ce5b06518->leave($__internal_fdbcdd652475a568ea982ba592f75a1fc343e4350c2177d5a0a4790ce5b06518_prof);

    }

    // line 242
    public function block_tel_widget($context, array $blocks = array())
    {
        $__internal_2eef9c939bf8b3d975fa8eeb41ddad11bc583cdbcef1c15310b2f55bcdf7eed2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2eef9c939bf8b3d975fa8eeb41ddad11bc583cdbcef1c15310b2f55bcdf7eed2->enter($__internal_2eef9c939bf8b3d975fa8eeb41ddad11bc583cdbcef1c15310b2f55bcdf7eed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        $__internal_7c7f4b6e10f31835e385175ff21c9aca563c66880873f7871ab68e10b642d65c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c7f4b6e10f31835e385175ff21c9aca563c66880873f7871ab68e10b642d65c->enter($__internal_7c7f4b6e10f31835e385175ff21c9aca563c66880873f7871ab68e10b642d65c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        // line 243
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 243, $this->getSourceContext()); })()), "tel")) : ("tel"));
        // line 244
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_7c7f4b6e10f31835e385175ff21c9aca563c66880873f7871ab68e10b642d65c->leave($__internal_7c7f4b6e10f31835e385175ff21c9aca563c66880873f7871ab68e10b642d65c_prof);

        
        $__internal_2eef9c939bf8b3d975fa8eeb41ddad11bc583cdbcef1c15310b2f55bcdf7eed2->leave($__internal_2eef9c939bf8b3d975fa8eeb41ddad11bc583cdbcef1c15310b2f55bcdf7eed2_prof);

    }

    // line 247
    public function block_color_widget($context, array $blocks = array())
    {
        $__internal_05af9fd79737ba62412869ec253e9ec8c21c29e1835603879c027de32f7f2cdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05af9fd79737ba62412869ec253e9ec8c21c29e1835603879c027de32f7f2cdd->enter($__internal_05af9fd79737ba62412869ec253e9ec8c21c29e1835603879c027de32f7f2cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        $__internal_ac01800e2c920bc3cdc9b8b420d72b1344d3541e7b7f2f1b1a8ec8c00d6de826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac01800e2c920bc3cdc9b8b420d72b1344d3541e7b7f2f1b1a8ec8c00d6de826->enter($__internal_ac01800e2c920bc3cdc9b8b420d72b1344d3541e7b7f2f1b1a8ec8c00d6de826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        // line 248
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 248, $this->getSourceContext()); })()), "color")) : ("color"));
        // line 249
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_ac01800e2c920bc3cdc9b8b420d72b1344d3541e7b7f2f1b1a8ec8c00d6de826->leave($__internal_ac01800e2c920bc3cdc9b8b420d72b1344d3541e7b7f2f1b1a8ec8c00d6de826_prof);

        
        $__internal_05af9fd79737ba62412869ec253e9ec8c21c29e1835603879c027de32f7f2cdd->leave($__internal_05af9fd79737ba62412869ec253e9ec8c21c29e1835603879c027de32f7f2cdd_prof);

    }

    // line 254
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_77c337bf0b8d4645258c70a4163936fdfc9fe5cb7a8c2fd4410085831286ade5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77c337bf0b8d4645258c70a4163936fdfc9fe5cb7a8c2fd4410085831286ade5->enter($__internal_77c337bf0b8d4645258c70a4163936fdfc9fe5cb7a8c2fd4410085831286ade5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_b3165359acf63fbe05f2f45d8142b47797a1d06ffee4673756115f4fe76d5540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3165359acf63fbe05f2f45d8142b47797a1d06ffee4673756115f4fe76d5540->enter($__internal_b3165359acf63fbe05f2f45d8142b47797a1d06ffee4673756115f4fe76d5540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
                $__internal_1aa847e1a41af5c8e15bfc3249b4126ca0c9b2c5c5675bfaf65d1f6951430f84 = array("attr" => (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 272, $this->getSourceContext()); })()));
                if (!is_array($__internal_1aa847e1a41af5c8e15bfc3249b4126ca0c9b2c5c5675bfaf65d1f6951430f84)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_1aa847e1a41af5c8e15bfc3249b4126ca0c9b2c5c5675bfaf65d1f6951430f84);
                $this->displayBlock("attributes", $context, $blocks);
                $context = $context['_parent'];
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 272, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 272, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 272, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 272, $this->getSourceContext()); })())))), "html", null, true);
            echo "</";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 272, $this->getSourceContext()); })()), "label")) : ("label")), "html", null, true);
            echo ">";
        }
        
        $__internal_b3165359acf63fbe05f2f45d8142b47797a1d06ffee4673756115f4fe76d5540->leave($__internal_b3165359acf63fbe05f2f45d8142b47797a1d06ffee4673756115f4fe76d5540_prof);

        
        $__internal_77c337bf0b8d4645258c70a4163936fdfc9fe5cb7a8c2fd4410085831286ade5->leave($__internal_77c337bf0b8d4645258c70a4163936fdfc9fe5cb7a8c2fd4410085831286ade5_prof);

    }

    // line 276
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_dcb032aef7bc7a193be5c2829cbd85a2dbbfbc4125e787b80b3a3022f9ce2fdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcb032aef7bc7a193be5c2829cbd85a2dbbfbc4125e787b80b3a3022f9ce2fdf->enter($__internal_dcb032aef7bc7a193be5c2829cbd85a2dbbfbc4125e787b80b3a3022f9ce2fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        $__internal_91e9d3ef4a152069d15c87d320d2453aa8d49f872eefe2ff4031f5dfb19b988a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91e9d3ef4a152069d15c87d320d2453aa8d49f872eefe2ff4031f5dfb19b988a->enter($__internal_91e9d3ef4a152069d15c87d320d2453aa8d49f872eefe2ff4031f5dfb19b988a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_91e9d3ef4a152069d15c87d320d2453aa8d49f872eefe2ff4031f5dfb19b988a->leave($__internal_91e9d3ef4a152069d15c87d320d2453aa8d49f872eefe2ff4031f5dfb19b988a_prof);

        
        $__internal_dcb032aef7bc7a193be5c2829cbd85a2dbbfbc4125e787b80b3a3022f9ce2fdf->leave($__internal_dcb032aef7bc7a193be5c2829cbd85a2dbbfbc4125e787b80b3a3022f9ce2fdf_prof);

    }

    // line 280
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_c6fc00359c03c79ef2140fa4addda2dcafd6ca56999c40a56c0f1ff849bf97c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6fc00359c03c79ef2140fa4addda2dcafd6ca56999c40a56c0f1ff849bf97c4->enter($__internal_c6fc00359c03c79ef2140fa4addda2dcafd6ca56999c40a56c0f1ff849bf97c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        $__internal_9808e4b861eb8442f55a4c6af6d7824e1c8b053e1ca783d408e518f2bc310baa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9808e4b861eb8442f55a4c6af6d7824e1c8b053e1ca783d408e518f2bc310baa->enter($__internal_9808e4b861eb8442f55a4c6af6d7824e1c8b053e1ca783d408e518f2bc310baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 285
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_9808e4b861eb8442f55a4c6af6d7824e1c8b053e1ca783d408e518f2bc310baa->leave($__internal_9808e4b861eb8442f55a4c6af6d7824e1c8b053e1ca783d408e518f2bc310baa_prof);

        
        $__internal_c6fc00359c03c79ef2140fa4addda2dcafd6ca56999c40a56c0f1ff849bf97c4->leave($__internal_c6fc00359c03c79ef2140fa4addda2dcafd6ca56999c40a56c0f1ff849bf97c4_prof);

    }

    // line 288
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_0e3ea7707e4b439a045b04073ee37e8fbafed2c5048375585466917e13f9da06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e3ea7707e4b439a045b04073ee37e8fbafed2c5048375585466917e13f9da06->enter($__internal_0e3ea7707e4b439a045b04073ee37e8fbafed2c5048375585466917e13f9da06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_1b3dbfcc166a1998999d7611bd41fe56dee74960f5892a2316abee03d59a0091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b3dbfcc166a1998999d7611bd41fe56dee74960f5892a2316abee03d59a0091->enter($__internal_1b3dbfcc166a1998999d7611bd41fe56dee74960f5892a2316abee03d59a0091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_1b3dbfcc166a1998999d7611bd41fe56dee74960f5892a2316abee03d59a0091->leave($__internal_1b3dbfcc166a1998999d7611bd41fe56dee74960f5892a2316abee03d59a0091_prof);

        
        $__internal_0e3ea7707e4b439a045b04073ee37e8fbafed2c5048375585466917e13f9da06->leave($__internal_0e3ea7707e4b439a045b04073ee37e8fbafed2c5048375585466917e13f9da06_prof);

    }

    // line 296
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_736e5e345fe2ca77a25cf6c0acfb5537bd14784d19ae3a90bb12e755dbb21b06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_736e5e345fe2ca77a25cf6c0acfb5537bd14784d19ae3a90bb12e755dbb21b06->enter($__internal_736e5e345fe2ca77a25cf6c0acfb5537bd14784d19ae3a90bb12e755dbb21b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_d39209988fcf6e65e4b2e54a9520570594f8db4805765bb510cdcdf69b16388e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d39209988fcf6e65e4b2e54a9520570594f8db4805765bb510cdcdf69b16388e->enter($__internal_d39209988fcf6e65e4b2e54a9520570594f8db4805765bb510cdcdf69b16388e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 297
        echo "<div>";
        // line 298
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 298, $this->getSourceContext()); })()), 'widget');
        // line 299
        echo "</div>";
        
        $__internal_d39209988fcf6e65e4b2e54a9520570594f8db4805765bb510cdcdf69b16388e->leave($__internal_d39209988fcf6e65e4b2e54a9520570594f8db4805765bb510cdcdf69b16388e_prof);

        
        $__internal_736e5e345fe2ca77a25cf6c0acfb5537bd14784d19ae3a90bb12e755dbb21b06->leave($__internal_736e5e345fe2ca77a25cf6c0acfb5537bd14784d19ae3a90bb12e755dbb21b06_prof);

    }

    // line 302
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_301c73baa2f5c2a7a746987601aa2fc7b5c8d172edf0aff1fff2a0a491d18d72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_301c73baa2f5c2a7a746987601aa2fc7b5c8d172edf0aff1fff2a0a491d18d72->enter($__internal_301c73baa2f5c2a7a746987601aa2fc7b5c8d172edf0aff1fff2a0a491d18d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_29973dc6f1638c5269cf9fac03ce0710a7dab0e3ad93ca6230b5d0c72fb2f700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29973dc6f1638c5269cf9fac03ce0710a7dab0e3ad93ca6230b5d0c72fb2f700->enter($__internal_29973dc6f1638c5269cf9fac03ce0710a7dab0e3ad93ca6230b5d0c72fb2f700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 303
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 303, $this->getSourceContext()); })()), 'widget');
        
        $__internal_29973dc6f1638c5269cf9fac03ce0710a7dab0e3ad93ca6230b5d0c72fb2f700->leave($__internal_29973dc6f1638c5269cf9fac03ce0710a7dab0e3ad93ca6230b5d0c72fb2f700_prof);

        
        $__internal_301c73baa2f5c2a7a746987601aa2fc7b5c8d172edf0aff1fff2a0a491d18d72->leave($__internal_301c73baa2f5c2a7a746987601aa2fc7b5c8d172edf0aff1fff2a0a491d18d72_prof);

    }

    // line 308
    public function block_form($context, array $blocks = array())
    {
        $__internal_68fa25634eab457b554715e6e03af5f638fa6d947296f359959cf18dbc55efa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68fa25634eab457b554715e6e03af5f638fa6d947296f359959cf18dbc55efa9->enter($__internal_68fa25634eab457b554715e6e03af5f638fa6d947296f359959cf18dbc55efa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_96248fe32a2c7ac396d2fd44637e37f9cce3397b99d0476c627f854bd0ab4ee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96248fe32a2c7ac396d2fd44637e37f9cce3397b99d0476c627f854bd0ab4ee1->enter($__internal_96248fe32a2c7ac396d2fd44637e37f9cce3397b99d0476c627f854bd0ab4ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 309
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 309, $this->getSourceContext()); })()), 'form_start');
        // line 310
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 310, $this->getSourceContext()); })()), 'widget');
        // line 311
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 311, $this->getSourceContext()); })()), 'form_end');
        
        $__internal_96248fe32a2c7ac396d2fd44637e37f9cce3397b99d0476c627f854bd0ab4ee1->leave($__internal_96248fe32a2c7ac396d2fd44637e37f9cce3397b99d0476c627f854bd0ab4ee1_prof);

        
        $__internal_68fa25634eab457b554715e6e03af5f638fa6d947296f359959cf18dbc55efa9->leave($__internal_68fa25634eab457b554715e6e03af5f638fa6d947296f359959cf18dbc55efa9_prof);

    }

    // line 314
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_c7e9665abd9e11078cc3faf804c443e173be1285fdee8a2934ecb19de9c5d0b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7e9665abd9e11078cc3faf804c443e173be1285fdee8a2934ecb19de9c5d0b8->enter($__internal_c7e9665abd9e11078cc3faf804c443e173be1285fdee8a2934ecb19de9c5d0b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_e2eb0a0f01a12682a229e641032a0a03e60a6d79fffcab40afd193cbb89cf2e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2eb0a0f01a12682a229e641032a0a03e60a6d79fffcab40afd193cbb89cf2e2->enter($__internal_e2eb0a0f01a12682a229e641032a0a03e60a6d79fffcab40afd193cbb89cf2e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

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
        
        $__internal_e2eb0a0f01a12682a229e641032a0a03e60a6d79fffcab40afd193cbb89cf2e2->leave($__internal_e2eb0a0f01a12682a229e641032a0a03e60a6d79fffcab40afd193cbb89cf2e2_prof);

        
        $__internal_c7e9665abd9e11078cc3faf804c443e173be1285fdee8a2934ecb19de9c5d0b8->leave($__internal_c7e9665abd9e11078cc3faf804c443e173be1285fdee8a2934ecb19de9c5d0b8_prof);

    }

    // line 328
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_8a05bf6caf0f965749a6c17c5d299fba1c992a8b71a62050112cbd18336d789f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a05bf6caf0f965749a6c17c5d299fba1c992a8b71a62050112cbd18336d789f->enter($__internal_8a05bf6caf0f965749a6c17c5d299fba1c992a8b71a62050112cbd18336d789f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        $__internal_ad19b5082719c2b278cbefaa634163bc5c83c698d6eb66a740b47409a6efd982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad19b5082719c2b278cbefaa634163bc5c83c698d6eb66a740b47409a6efd982->enter($__internal_ad19b5082719c2b278cbefaa634163bc5c83c698d6eb66a740b47409a6efd982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 329
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) || array_key_exists("render_rest", $context) ? $context["render_rest"] : (function () { throw new Twig_Error_Runtime('Variable "render_rest" does not exist.', 329, $this->getSourceContext()); })()))) {
            // line 330
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 330, $this->getSourceContext()); })()), 'rest');
        }
        // line 332
        echo "</form>";
        
        $__internal_ad19b5082719c2b278cbefaa634163bc5c83c698d6eb66a740b47409a6efd982->leave($__internal_ad19b5082719c2b278cbefaa634163bc5c83c698d6eb66a740b47409a6efd982_prof);

        
        $__internal_8a05bf6caf0f965749a6c17c5d299fba1c992a8b71a62050112cbd18336d789f->leave($__internal_8a05bf6caf0f965749a6c17c5d299fba1c992a8b71a62050112cbd18336d789f_prof);

    }

    // line 335
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_dd297408925096163ae9d07e90f4bbf1475a1e1cec5b5452745d30bbe1679b99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd297408925096163ae9d07e90f4bbf1475a1e1cec5b5452745d30bbe1679b99->enter($__internal_dd297408925096163ae9d07e90f4bbf1475a1e1cec5b5452745d30bbe1679b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_3d9c89017f31468e9b5a2099636b305373fe004b49a08cda08cfddd3615ef46d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d9c89017f31468e9b5a2099636b305373fe004b49a08cda08cfddd3615ef46d->enter($__internal_3d9c89017f31468e9b5a2099636b305373fe004b49a08cda08cfddd3615ef46d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_3d9c89017f31468e9b5a2099636b305373fe004b49a08cda08cfddd3615ef46d->leave($__internal_3d9c89017f31468e9b5a2099636b305373fe004b49a08cda08cfddd3615ef46d_prof);

        
        $__internal_dd297408925096163ae9d07e90f4bbf1475a1e1cec5b5452745d30bbe1679b99->leave($__internal_dd297408925096163ae9d07e90f4bbf1475a1e1cec5b5452745d30bbe1679b99_prof);

    }

    // line 345
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_c7750f70fcb78ca83432987d501e96f62104d2a5295151378f851a3f166b4b05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7750f70fcb78ca83432987d501e96f62104d2a5295151378f851a3f166b4b05->enter($__internal_c7750f70fcb78ca83432987d501e96f62104d2a5295151378f851a3f166b4b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        $__internal_264dd496422056078882ccb08595b7642c6e9aabc094e7464858bc99a73b984c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_264dd496422056078882ccb08595b7642c6e9aabc094e7464858bc99a73b984c->enter($__internal_264dd496422056078882ccb08595b7642c6e9aabc094e7464858bc99a73b984c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

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
        
        $__internal_264dd496422056078882ccb08595b7642c6e9aabc094e7464858bc99a73b984c->leave($__internal_264dd496422056078882ccb08595b7642c6e9aabc094e7464858bc99a73b984c_prof);

        
        $__internal_c7750f70fcb78ca83432987d501e96f62104d2a5295151378f851a3f166b4b05->leave($__internal_c7750f70fcb78ca83432987d501e96f62104d2a5295151378f851a3f166b4b05_prof);

    }

    // line 369
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_b27418f35932578da7a8b5ec809b0bc09ca92bb93499cc7458d02221aec74fc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b27418f35932578da7a8b5ec809b0bc09ca92bb93499cc7458d02221aec74fc1->enter($__internal_b27418f35932578da7a8b5ec809b0bc09ca92bb93499cc7458d02221aec74fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        $__internal_b07438a044da276590950a8939f129b6c083383c38baf65b46befcb4c57d08b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b07438a044da276590950a8939f129b6c083383c38baf65b46befcb4c57d08b9->enter($__internal_b07438a044da276590950a8939f129b6c083383c38baf65b46befcb4c57d08b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

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
        
        $__internal_b07438a044da276590950a8939f129b6c083383c38baf65b46befcb4c57d08b9->leave($__internal_b07438a044da276590950a8939f129b6c083383c38baf65b46befcb4c57d08b9_prof);

        
        $__internal_b27418f35932578da7a8b5ec809b0bc09ca92bb93499cc7458d02221aec74fc1->leave($__internal_b27418f35932578da7a8b5ec809b0bc09ca92bb93499cc7458d02221aec74fc1_prof);

    }

    // line 375
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_0bdac70388a522bcd54fa9c8545194ada8510216cb6acc8f18b226b7ea8a74b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bdac70388a522bcd54fa9c8545194ada8510216cb6acc8f18b226b7ea8a74b7->enter($__internal_0bdac70388a522bcd54fa9c8545194ada8510216cb6acc8f18b226b7ea8a74b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_04138fd1b9cb1ed230284c465d7d3f647e3941fd668bc4aa9b3c83860bb7bf96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04138fd1b9cb1ed230284c465d7d3f647e3941fd668bc4aa9b3c83860bb7bf96->enter($__internal_04138fd1b9cb1ed230284c465d7d3f647e3941fd668bc4aa9b3c83860bb7bf96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

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
        
        $__internal_04138fd1b9cb1ed230284c465d7d3f647e3941fd668bc4aa9b3c83860bb7bf96->leave($__internal_04138fd1b9cb1ed230284c465d7d3f647e3941fd668bc4aa9b3c83860bb7bf96_prof);

        
        $__internal_0bdac70388a522bcd54fa9c8545194ada8510216cb6acc8f18b226b7ea8a74b7->leave($__internal_0bdac70388a522bcd54fa9c8545194ada8510216cb6acc8f18b226b7ea8a74b7_prof);

    }

    // line 382
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_cc2a5612acb166353aba4a03f97f4de63184eaded36b6d568f4bab5363af4549 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc2a5612acb166353aba4a03f97f4de63184eaded36b6d568f4bab5363af4549->enter($__internal_cc2a5612acb166353aba4a03f97f4de63184eaded36b6d568f4bab5363af4549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        $__internal_05a7e5b9f2bb4f2af18617283eb12f686af4917d6d1e71aed13b9be5a4eb575f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05a7e5b9f2bb4f2af18617283eb12f686af4917d6d1e71aed13b9be5a4eb575f->enter($__internal_05a7e5b9f2bb4f2af18617283eb12f686af4917d6d1e71aed13b9be5a4eb575f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 383
        if ( !twig_test_empty((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 383, $this->getSourceContext()); })()))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 383, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        // line 384
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_05a7e5b9f2bb4f2af18617283eb12f686af4917d6d1e71aed13b9be5a4eb575f->leave($__internal_05a7e5b9f2bb4f2af18617283eb12f686af4917d6d1e71aed13b9be5a4eb575f_prof);

        
        $__internal_cc2a5612acb166353aba4a03f97f4de63184eaded36b6d568f4bab5363af4549->leave($__internal_cc2a5612acb166353aba4a03f97f4de63184eaded36b6d568f4bab5363af4549_prof);

    }

    // line 387
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_3484df8cf8c62f7f03c7b16cf7fa3f3cc94f6b061f46b16f0fd2011c1a3ac5d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3484df8cf8c62f7f03c7b16cf7fa3f3cc94f6b061f46b16f0fd2011c1a3ac5d0->enter($__internal_3484df8cf8c62f7f03c7b16cf7fa3f3cc94f6b061f46b16f0fd2011c1a3ac5d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        $__internal_8d8ca9e545c95774e1c0c559b586951435326b684ab7f939185547c394156d8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d8ca9e545c95774e1c0c559b586951435326b684ab7f939185547c394156d8b->enter($__internal_8d8ca9e545c95774e1c0c559b586951435326b684ab7f939185547c394156d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

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
        
        $__internal_8d8ca9e545c95774e1c0c559b586951435326b684ab7f939185547c394156d8b->leave($__internal_8d8ca9e545c95774e1c0c559b586951435326b684ab7f939185547c394156d8b_prof);

        
        $__internal_3484df8cf8c62f7f03c7b16cf7fa3f3cc94f6b061f46b16f0fd2011c1a3ac5d0->leave($__internal_3484df8cf8c62f7f03c7b16cf7fa3f3cc94f6b061f46b16f0fd2011c1a3ac5d0_prof);

    }

    // line 392
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_d5ac15fbcde7bdea8a20d8d3d30fb141bebfba9ef3cdca7dc41ffc71b78f64cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5ac15fbcde7bdea8a20d8d3d30fb141bebfba9ef3cdca7dc41ffc71b78f64cd->enter($__internal_d5ac15fbcde7bdea8a20d8d3d30fb141bebfba9ef3cdca7dc41ffc71b78f64cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        $__internal_2d138776b5060b4e9ab896867be8975c383b41fd896e88eba7e49bb2444b0021 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d138776b5060b4e9ab896867be8975c383b41fd896e88eba7e49bb2444b0021->enter($__internal_2d138776b5060b4e9ab896867be8975c383b41fd896e88eba7e49bb2444b0021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

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
        
        $__internal_2d138776b5060b4e9ab896867be8975c383b41fd896e88eba7e49bb2444b0021->leave($__internal_2d138776b5060b4e9ab896867be8975c383b41fd896e88eba7e49bb2444b0021_prof);

        
        $__internal_d5ac15fbcde7bdea8a20d8d3d30fb141bebfba9ef3cdca7dc41ffc71b78f64cd->leave($__internal_d5ac15fbcde7bdea8a20d8d3d30fb141bebfba9ef3cdca7dc41ffc71b78f64cd_prof);

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
