<?php

/* bootstrap_4_layout.html.twig */
class __TwigTemplate_1f1fa6f18a7451f87af0ff7b4fd8ec4958032329ff19822643a8c2da0d1ff24d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_4_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'money_widget' => array($this, 'block_money_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'widget_attributes' => array($this, 'block_widget_attributes'),
                'button_widget' => array($this, 'block_button_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'form_label' => array($this, 'block_form_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_faf0c956db851d2bc6c6611bdc3c909d8645ce296d5543d7494905b81268516d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faf0c956db851d2bc6c6611bdc3c909d8645ce296d5543d7494905b81268516d->enter($__internal_faf0c956db851d2bc6c6611bdc3c909d8645ce296d5543d7494905b81268516d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

        $__internal_90bcc48a3a19125686200a50a8cbbb7cf452f8791e802bd93405a6fb3a182d82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90bcc48a3a19125686200a50a8cbbb7cf452f8791e802bd93405a6fb3a182d82->enter($__internal_90bcc48a3a19125686200a50a8cbbb7cf452f8791e802bd93405a6fb3a182d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('money_widget', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('date_widget', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('time_widget', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 60
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 67
        $this->displayBlock('button_widget', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 83
        echo "
";
        // line 84
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 95
        echo "
";
        // line 96
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 120
        echo "
";
        // line 122
        echo "
";
        // line 123
        $this->displayBlock('form_label', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 158
        echo "
";
        // line 160
        echo "
";
        // line 161
        $this->displayBlock('form_row', $context, $blocks);
        // line 171
        echo "
";
        // line 173
        echo "
";
        // line 174
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_faf0c956db851d2bc6c6611bdc3c909d8645ce296d5543d7494905b81268516d->leave($__internal_faf0c956db851d2bc6c6611bdc3c909d8645ce296d5543d7494905b81268516d_prof);

        
        $__internal_90bcc48a3a19125686200a50a8cbbb7cf452f8791e802bd93405a6fb3a182d82->leave($__internal_90bcc48a3a19125686200a50a8cbbb7cf452f8791e802bd93405a6fb3a182d82_prof);

    }

    // line 5
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_68ca5fd2ba38f2a5668fd4f468a6802e042eddc155dd620b8efdba23421c08ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68ca5fd2ba38f2a5668fd4f468a6802e042eddc155dd620b8efdba23421c08ce->enter($__internal_68ca5fd2ba38f2a5668fd4f468a6802e042eddc155dd620b8efdba23421c08ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_92dba10838922f30ac362aee3f936c57342863aaabe12e12729b0bd931422a99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92dba10838922f30ac362aee3f936c57342863aaabe12e12729b0bd931422a99->enter($__internal_92dba10838922f30ac362aee3f936c57342863aaabe12e12729b0bd931422a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 6
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 6, $this->getSourceContext()); })())) {
            // line 7
            echo "        ";
            $context["group_class"] = " form-control is-invalid";
            // line 8
            echo "        ";
            $context["valid"] = true;
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("money_widget", $context, $blocks);
        
        $__internal_92dba10838922f30ac362aee3f936c57342863aaabe12e12729b0bd931422a99->leave($__internal_92dba10838922f30ac362aee3f936c57342863aaabe12e12729b0bd931422a99_prof);

        
        $__internal_68ca5fd2ba38f2a5668fd4f468a6802e042eddc155dd620b8efdba23421c08ce->leave($__internal_68ca5fd2ba38f2a5668fd4f468a6802e042eddc155dd620b8efdba23421c08ce_prof);

    }

    // line 13
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_28493676cc99123bafa4da120ee1fdf363a4e016dfe74f80a233dbe60eaf3c8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28493676cc99123bafa4da120ee1fdf363a4e016dfe74f80a233dbe60eaf3c8c->enter($__internal_28493676cc99123bafa4da120ee1fdf363a4e016dfe74f80a233dbe60eaf3c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_a81abff8df865367ea5285ff7f0711fe471778ed3898f9ffad26e0bbf23aee3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a81abff8df865367ea5285ff7f0711fe471778ed3898f9ffad26e0bbf23aee3d->enter($__internal_a81abff8df865367ea5285ff7f0711fe471778ed3898f9ffad26e0bbf23aee3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 14
        if ((((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 14, $this->getSourceContext()); })()) != "single_text") &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 14, $this->getSourceContext()); })()))) {
            // line 15
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 15, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 16
            $context["valid"] = true;
        }
        // line 18
        $this->displayParentBlock("datetime_widget", $context, $blocks);
        
        $__internal_a81abff8df865367ea5285ff7f0711fe471778ed3898f9ffad26e0bbf23aee3d->leave($__internal_a81abff8df865367ea5285ff7f0711fe471778ed3898f9ffad26e0bbf23aee3d_prof);

        
        $__internal_28493676cc99123bafa4da120ee1fdf363a4e016dfe74f80a233dbe60eaf3c8c->leave($__internal_28493676cc99123bafa4da120ee1fdf363a4e016dfe74f80a233dbe60eaf3c8c_prof);

    }

    // line 21
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_c61119580fa7d454000a36c9ace17e2f0d43bd80afd1ed9354377ad549eff9a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c61119580fa7d454000a36c9ace17e2f0d43bd80afd1ed9354377ad549eff9a6->enter($__internal_c61119580fa7d454000a36c9ace17e2f0d43bd80afd1ed9354377ad549eff9a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_9478ae0693c729d1d4ec9d1f1b4e60699fbaf8eeebae7802f12c54249a83d6fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9478ae0693c729d1d4ec9d1f1b4e60699fbaf8eeebae7802f12c54249a83d6fd->enter($__internal_9478ae0693c729d1d4ec9d1f1b4e60699fbaf8eeebae7802f12c54249a83d6fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 22
        if ((((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 22, $this->getSourceContext()); })()) != "single_text") &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 22, $this->getSourceContext()); })()))) {
            // line 23
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 23, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 24
            $context["valid"] = true;
        }
        // line 26
        $this->displayParentBlock("date_widget", $context, $blocks);
        
        $__internal_9478ae0693c729d1d4ec9d1f1b4e60699fbaf8eeebae7802f12c54249a83d6fd->leave($__internal_9478ae0693c729d1d4ec9d1f1b4e60699fbaf8eeebae7802f12c54249a83d6fd_prof);

        
        $__internal_c61119580fa7d454000a36c9ace17e2f0d43bd80afd1ed9354377ad549eff9a6->leave($__internal_c61119580fa7d454000a36c9ace17e2f0d43bd80afd1ed9354377ad549eff9a6_prof);

    }

    // line 29
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_cdd2e5688b7f6b106e58dcc1a21a86b81b763f0dd9f135260f629ecc765fe820 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdd2e5688b7f6b106e58dcc1a21a86b81b763f0dd9f135260f629ecc765fe820->enter($__internal_cdd2e5688b7f6b106e58dcc1a21a86b81b763f0dd9f135260f629ecc765fe820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_30e1f73c542f657b1c74cb617e23e33acf47a2a9d5d07b72703fcc05f1e3b9a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30e1f73c542f657b1c74cb617e23e33acf47a2a9d5d07b72703fcc05f1e3b9a5->enter($__internal_30e1f73c542f657b1c74cb617e23e33acf47a2a9d5d07b72703fcc05f1e3b9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 30
        if ((((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 30, $this->getSourceContext()); })()) != "single_text") &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 30, $this->getSourceContext()); })()))) {
            // line 31
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 31, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 32
            $context["valid"] = true;
        }
        // line 34
        $this->displayParentBlock("time_widget", $context, $blocks);
        
        $__internal_30e1f73c542f657b1c74cb617e23e33acf47a2a9d5d07b72703fcc05f1e3b9a5->leave($__internal_30e1f73c542f657b1c74cb617e23e33acf47a2a9d5d07b72703fcc05f1e3b9a5_prof);

        
        $__internal_cdd2e5688b7f6b106e58dcc1a21a86b81b763f0dd9f135260f629ecc765fe820->leave($__internal_cdd2e5688b7f6b106e58dcc1a21a86b81b763f0dd9f135260f629ecc765fe820_prof);

    }

    // line 37
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_9c43eea0abeb5348fb6941005b13ab86cfeeacd1c8c3737e22c8edbfb3017163 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c43eea0abeb5348fb6941005b13ab86cfeeacd1c8c3737e22c8edbfb3017163->enter($__internal_9c43eea0abeb5348fb6941005b13ab86cfeeacd1c8c3737e22c8edbfb3017163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_62be8f8dbd976e0b83d4d264c1f6ae0b0ea37b90a05575ca5e34da34d72af2cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62be8f8dbd976e0b83d4d264c1f6ae0b0ea37b90a05575ca5e34da34d72af2cb->enter($__internal_62be8f8dbd976e0b83d4d264c1f6ae0b0ea37b90a05575ca5e34da34d72af2cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 38
        if ((((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 38, $this->getSourceContext()); })()) != "single_text") &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 38, $this->getSourceContext()); })()))) {
            // line 39
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 39, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 40
            $context["valid"] = true;
        }
        // line 42
        $this->displayParentBlock("dateinterval_widget", $context, $blocks);
        
        $__internal_62be8f8dbd976e0b83d4d264c1f6ae0b0ea37b90a05575ca5e34da34d72af2cb->leave($__internal_62be8f8dbd976e0b83d4d264c1f6ae0b0ea37b90a05575ca5e34da34d72af2cb_prof);

        
        $__internal_9c43eea0abeb5348fb6941005b13ab86cfeeacd1c8c3737e22c8edbfb3017163->leave($__internal_9c43eea0abeb5348fb6941005b13ab86cfeeacd1c8c3737e22c8edbfb3017163_prof);

    }

    // line 45
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_ca9a5afe39080bf17badb91be99fa8187cb7cd54b3b4e8725916fa8b6f6cc973 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca9a5afe39080bf17badb91be99fa8187cb7cd54b3b4e8725916fa8b6f6cc973->enter($__internal_ca9a5afe39080bf17badb91be99fa8187cb7cd54b3b4e8725916fa8b6f6cc973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_bf0c8be1198923d4ee13fc9c0b2b22755dd05215ea0fc902a3865e86d4cc78ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf0c8be1198923d4ee13fc9c0b2b22755dd05215ea0fc902a3865e86d4cc78ce->enter($__internal_bf0c8be1198923d4ee13fc9c0b2b22755dd05215ea0fc902a3865e86d4cc78ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 46
        echo "<div class=\"input-group";
        echo (( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 46, $this->getSourceContext()); })())) ? (" form-control is-invalid") : (""));
        echo "\">
        ";
        // line 47
        $context["valid"] = true;
        // line 48
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 49
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_bf0c8be1198923d4ee13fc9c0b2b22755dd05215ea0fc902a3865e86d4cc78ce->leave($__internal_bf0c8be1198923d4ee13fc9c0b2b22755dd05215ea0fc902a3865e86d4cc78ce_prof);

        
        $__internal_ca9a5afe39080bf17badb91be99fa8187cb7cd54b3b4e8725916fa8b6f6cc973->leave($__internal_ca9a5afe39080bf17badb91be99fa8187cb7cd54b3b4e8725916fa8b6f6cc973_prof);

    }

    // line 53
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_77b7e3fece6b284062448c70ecb3008f3c80be5deef2edbf431ee7850802cdc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77b7e3fece6b284062448c70ecb3008f3c80be5deef2edbf431ee7850802cdc4->enter($__internal_77b7e3fece6b284062448c70ecb3008f3c80be5deef2edbf431ee7850802cdc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_015d88f138b406b1e94428ee221cfc6f7dfd51c465f5fa36147aa30515664d27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_015d88f138b406b1e94428ee221cfc6f7dfd51c465f5fa36147aa30515664d27->enter($__internal_015d88f138b406b1e94428ee221cfc6f7dfd51c465f5fa36147aa30515664d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 54
        if (( !array_key_exists("type", $context) || ((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 54, $this->getSourceContext()); })()) != "hidden"))) {
            // line 55
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 55, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control") . (((((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 55, $this->getSourceContext()); })()), "")) : ("")) == "file")) ? ("-file") : (""))))));
        }
        // line 57
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_015d88f138b406b1e94428ee221cfc6f7dfd51c465f5fa36147aa30515664d27->leave($__internal_015d88f138b406b1e94428ee221cfc6f7dfd51c465f5fa36147aa30515664d27_prof);

        
        $__internal_77b7e3fece6b284062448c70ecb3008f3c80be5deef2edbf431ee7850802cdc4->leave($__internal_77b7e3fece6b284062448c70ecb3008f3c80be5deef2edbf431ee7850802cdc4_prof);

    }

    // line 60
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_12429277abf7a73f890c04cd756e16ece915f233dc0654f70aa9f853c4caf651 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12429277abf7a73f890c04cd756e16ece915f233dc0654f70aa9f853c4caf651->enter($__internal_12429277abf7a73f890c04cd756e16ece915f233dc0654f70aa9f853c4caf651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_83cfb49900732c3aa312cd944df83ae19218384880a1d94c1a97a86399e62d71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83cfb49900732c3aa312cd944df83ae19218384880a1d94c1a97a86399e62d71->enter($__internal_83cfb49900732c3aa312cd944df83ae19218384880a1d94c1a97a86399e62d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 61
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 61, $this->getSourceContext()); })())) {
            // line 62
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 62, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 63
            echo "    ";
        }
        // line 64
        $this->displayParentBlock("widget_attributes", $context, $blocks);
        
        $__internal_83cfb49900732c3aa312cd944df83ae19218384880a1d94c1a97a86399e62d71->leave($__internal_83cfb49900732c3aa312cd944df83ae19218384880a1d94c1a97a86399e62d71_prof);

        
        $__internal_12429277abf7a73f890c04cd756e16ece915f233dc0654f70aa9f853c4caf651->leave($__internal_12429277abf7a73f890c04cd756e16ece915f233dc0654f70aa9f853c4caf651_prof);

    }

    // line 67
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_9880864e98bb42522fcdc54c68a894165cdffecb416faf0e9799ece71850584a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9880864e98bb42522fcdc54c68a894165cdffecb416faf0e9799ece71850584a->enter($__internal_9880864e98bb42522fcdc54c68a894165cdffecb416faf0e9799ece71850584a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_e474dde4a0e3e98720c8e61b707001d4329cc119fe1489492aef00e4ce425c34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e474dde4a0e3e98720c8e61b707001d4329cc119fe1489492aef00e4ce425c34->enter($__internal_e474dde4a0e3e98720c8e61b707001d4329cc119fe1489492aef00e4ce425c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 68
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 68, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-secondary")) : ("btn-secondary")) . " btn"))));
        // line 69
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_e474dde4a0e3e98720c8e61b707001d4329cc119fe1489492aef00e4ce425c34->leave($__internal_e474dde4a0e3e98720c8e61b707001d4329cc119fe1489492aef00e4ce425c34_prof);

        
        $__internal_9880864e98bb42522fcdc54c68a894165cdffecb416faf0e9799ece71850584a->leave($__internal_9880864e98bb42522fcdc54c68a894165cdffecb416faf0e9799ece71850584a_prof);

    }

    // line 72
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_4535938e94cf8db861a2d6c4499207d5545825cad8fd5c58b6abf0742b133737 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4535938e94cf8db861a2d6c4499207d5545825cad8fd5c58b6abf0742b133737->enter($__internal_4535938e94cf8db861a2d6c4499207d5545825cad8fd5c58b6abf0742b133737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_a8d599a5b4bb9547b29c8c8485795d255079a25c8de2582da53a79462cc99003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8d599a5b4bb9547b29c8c8485795d255079a25c8de2582da53a79462cc99003->enter($__internal_a8d599a5b4bb9547b29c8c8485795d255079a25c8de2582da53a79462cc99003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 73
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 73, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 74
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 74, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-check-input"))));
        // line 75
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 75, $this->getSourceContext()); })()))) {
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 78
            echo "<div class=\"form-check";
            echo (( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 78, $this->getSourceContext()); })())) ? (" form-control is-invalid") : (""));
            echo "\">";
            // line 79
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 79, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 80
            echo "</div>";
        }
        
        $__internal_a8d599a5b4bb9547b29c8c8485795d255079a25c8de2582da53a79462cc99003->leave($__internal_a8d599a5b4bb9547b29c8c8485795d255079a25c8de2582da53a79462cc99003_prof);

        
        $__internal_4535938e94cf8db861a2d6c4499207d5545825cad8fd5c58b6abf0742b133737->leave($__internal_4535938e94cf8db861a2d6c4499207d5545825cad8fd5c58b6abf0742b133737_prof);

    }

    // line 84
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_9b84cfd8dfc9b666706e2c5d6e2b59e09769ea997f420cafe38585172c64804c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b84cfd8dfc9b666706e2c5d6e2b59e09769ea997f420cafe38585172c64804c->enter($__internal_9b84cfd8dfc9b666706e2c5d6e2b59e09769ea997f420cafe38585172c64804c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_996b9e23c9ac655762bf7592394bd0f999c7c699b6630d333903dd22ab7ea497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_996b9e23c9ac655762bf7592394bd0f999c7c699b6630d333903dd22ab7ea497->enter($__internal_996b9e23c9ac655762bf7592394bd0f999c7c699b6630d333903dd22ab7ea497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 85
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 85, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 86
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 86, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-check-input"))));
        // line 87
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 87, $this->getSourceContext()); })()))) {
            // line 88
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 88, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 90
            echo "<div class=\"form-check";
            echo (( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 90, $this->getSourceContext()); })())) ? (" form-control is-invalid") : (""));
            echo "\">";
            // line 91
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 91, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 92
            echo "</div>";
        }
        
        $__internal_996b9e23c9ac655762bf7592394bd0f999c7c699b6630d333903dd22ab7ea497->leave($__internal_996b9e23c9ac655762bf7592394bd0f999c7c699b6630d333903dd22ab7ea497_prof);

        
        $__internal_9b84cfd8dfc9b666706e2c5d6e2b59e09769ea997f420cafe38585172c64804c->leave($__internal_9b84cfd8dfc9b666706e2c5d6e2b59e09769ea997f420cafe38585172c64804c_prof);

    }

    // line 96
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_d7032ad8fd29a498a9a0135f96f4ddd9f2ffea20d61c4e62e20093fccdb644a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7032ad8fd29a498a9a0135f96f4ddd9f2ffea20d61c4e62e20093fccdb644a0->enter($__internal_d7032ad8fd29a498a9a0135f96f4ddd9f2ffea20d61c4e62e20093fccdb644a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_6604819a68068c22c1a02d630996518f1022990d3e8f29cc587db17ddadf004a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6604819a68068c22c1a02d630996518f1022990d3e8f29cc587db17ddadf004a->enter($__internal_6604819a68068c22c1a02d630996518f1022990d3e8f29cc587db17ddadf004a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 97
        if (twig_in_filter("-inline", ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 98, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 99
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 100
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 101
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 101, $this->getSourceContext()); })()), "valid" =>                 // line 102
(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 102, $this->getSourceContext()); })())));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 106
            if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 106, $this->getSourceContext()); })())) {
                // line 107
                $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 107, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            }
            // line 109
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 110, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 111
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 112
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 113
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 113, $this->getSourceContext()); })()), "valid" => true));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "</div>";
        }
        
        $__internal_6604819a68068c22c1a02d630996518f1022990d3e8f29cc587db17ddadf004a->leave($__internal_6604819a68068c22c1a02d630996518f1022990d3e8f29cc587db17ddadf004a_prof);

        
        $__internal_d7032ad8fd29a498a9a0135f96f4ddd9f2ffea20d61c4e62e20093fccdb644a0->leave($__internal_d7032ad8fd29a498a9a0135f96f4ddd9f2ffea20d61c4e62e20093fccdb644a0_prof);

    }

    // line 123
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_0fd52f18a3bccad73c9c689857043481cfb88222a32045077932cfc06ed64a55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fd52f18a3bccad73c9c689857043481cfb88222a32045077932cfc06ed64a55->enter($__internal_0fd52f18a3bccad73c9c689857043481cfb88222a32045077932cfc06ed64a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_6ec6f5428cf007b91b349d26e0467181aa6c378b9f326138ef734ad06b603158 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ec6f5428cf007b91b349d26e0467181aa6c378b9f326138ef734ad06b603158->enter($__internal_6ec6f5428cf007b91b349d26e0467181aa6c378b9f326138ef734ad06b603158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 124
        if ((array_key_exists("compound", $context) && (isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 124, $this->getSourceContext()); })()))) {
            // line 125
            $context["element"] = "legend";
            // line 126
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 126, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-legend"))));
        } else {
            // line 128
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 128, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " form-control-label"))));
        }
        // line 130
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_6ec6f5428cf007b91b349d26e0467181aa6c378b9f326138ef734ad06b603158->leave($__internal_6ec6f5428cf007b91b349d26e0467181aa6c378b9f326138ef734ad06b603158_prof);

        
        $__internal_0fd52f18a3bccad73c9c689857043481cfb88222a32045077932cfc06ed64a55->leave($__internal_0fd52f18a3bccad73c9c689857043481cfb88222a32045077932cfc06ed64a55_prof);

    }

    // line 133
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_a0b1ec351129abcf6676ac9a03ee57187cfbaf3257c00288364080bd7d2f69fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0b1ec351129abcf6676ac9a03ee57187cfbaf3257c00288364080bd7d2f69fd->enter($__internal_a0b1ec351129abcf6676ac9a03ee57187cfbaf3257c00288364080bd7d2f69fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_150be561d01215a6384cd2d934d4695383397a9ad7b07e4e11c441d6a912e7b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_150be561d01215a6384cd2d934d4695383397a9ad7b07e4e11c441d6a912e7b7->enter($__internal_150be561d01215a6384cd2d934d4695383397a9ad7b07e4e11c441d6a912e7b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 135
        if (array_key_exists("widget", $context)) {
            // line 136
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 136, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " form-check-label"))));
            // line 137
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 137, $this->getSourceContext()); })())) {
                // line 138
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 138, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 140
            if (array_key_exists("parent_label_class", $context)) {
                // line 141
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 141, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 141, $this->getSourceContext()); })())))));
            }
            // line 143
            if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 143, $this->getSourceContext()); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 143, $this->getSourceContext()); })())))) {
                // line 144
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 144, $this->getSourceContext()); })()))) {
                    // line 145
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 145, $this->getSourceContext()); })()), array("%name%" =>                     // line 146
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 146, $this->getSourceContext()); })()), "%id%" =>                     // line 147
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 147, $this->getSourceContext()); })())));
                } else {
                    // line 150
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 150, $this->getSourceContext()); })()));
                }
            }
            // line 153
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 153, $this->getSourceContext()); })()));
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
            echo ">";
            // line 154
            echo (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 154, $this->getSourceContext()); })());
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 154, $this->getSourceContext()); })()) === false)) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 154, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 154, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 154, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 154, $this->getSourceContext()); })()))))) : ("")), "html", null, true);
            // line 155
            echo "</label>";
        }
        
        $__internal_150be561d01215a6384cd2d934d4695383397a9ad7b07e4e11c441d6a912e7b7->leave($__internal_150be561d01215a6384cd2d934d4695383397a9ad7b07e4e11c441d6a912e7b7_prof);

        
        $__internal_a0b1ec351129abcf6676ac9a03ee57187cfbaf3257c00288364080bd7d2f69fd->leave($__internal_a0b1ec351129abcf6676ac9a03ee57187cfbaf3257c00288364080bd7d2f69fd_prof);

    }

    // line 161
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_55bd692b63f214bcfb22c61318a8ec4468564b2223ec93dfed60f6f0887d78b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55bd692b63f214bcfb22c61318a8ec4468564b2223ec93dfed60f6f0887d78b6->enter($__internal_55bd692b63f214bcfb22c61318a8ec4468564b2223ec93dfed60f6f0887d78b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_1e5143aca0714a9a249188340de15e54b150b3541611b69bf0a031f3385050c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e5143aca0714a9a249188340de15e54b150b3541611b69bf0a031f3385050c4->enter($__internal_1e5143aca0714a9a249188340de15e54b150b3541611b69bf0a031f3385050c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 162
        if ((array_key_exists("compound", $context) && (isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 162, $this->getSourceContext()); })()))) {
            // line 163
            $context["element"] = "fieldset";
        }
        // line 165
        echo "<";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 165, $this->getSourceContext()); })()), "div")) : ("div")), "html", null, true);
        echo " class=\"form-group\">";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 166, $this->getSourceContext()); })()), 'label');
        // line 167
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 167, $this->getSourceContext()); })()), 'widget');
        // line 168
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 168, $this->getSourceContext()); })()), 'errors');
        // line 169
        echo "</";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 169, $this->getSourceContext()); })()), "div")) : ("div")), "html", null, true);
        echo ">";
        
        $__internal_1e5143aca0714a9a249188340de15e54b150b3541611b69bf0a031f3385050c4->leave($__internal_1e5143aca0714a9a249188340de15e54b150b3541611b69bf0a031f3385050c4_prof);

        
        $__internal_55bd692b63f214bcfb22c61318a8ec4468564b2223ec93dfed60f6f0887d78b6->leave($__internal_55bd692b63f214bcfb22c61318a8ec4468564b2223ec93dfed60f6f0887d78b6_prof);

    }

    // line 174
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_691a2e853bba3269e0fdcad0dd2d49310f1c743139e53841bec48e3f248b7812 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_691a2e853bba3269e0fdcad0dd2d49310f1c743139e53841bec48e3f248b7812->enter($__internal_691a2e853bba3269e0fdcad0dd2d49310f1c743139e53841bec48e3f248b7812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_063330424f8b11b377f23f50d4ecb382ac1c453e1f367424aa45c8dcc636bbc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_063330424f8b11b377f23f50d4ecb382ac1c453e1f367424aa45c8dcc636bbc4->enter($__internal_063330424f8b11b377f23f50d4ecb382ac1c453e1f367424aa45c8dcc636bbc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 175
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 175, $this->getSourceContext()); })())) > 0)) {
            // line 176
            echo "<div class=\"";
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 176, $this->getSourceContext()); })()))) {
                echo "invalid-feedback";
            } else {
                echo "alert alert-danger";
            }
            echo "\">
        <ul class=\"list-unstyled mb-0\">";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 178, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 179
                echo "<li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 181
            echo "</ul>
    </div>";
        }
        
        $__internal_063330424f8b11b377f23f50d4ecb382ac1c453e1f367424aa45c8dcc636bbc4->leave($__internal_063330424f8b11b377f23f50d4ecb382ac1c453e1f367424aa45c8dcc636bbc4_prof);

        
        $__internal_691a2e853bba3269e0fdcad0dd2d49310f1c743139e53841bec48e3f248b7812->leave($__internal_691a2e853bba3269e0fdcad0dd2d49310f1c743139e53841bec48e3f248b7812_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  672 => 181,  664 => 179,  660 => 178,  651 => 176,  649 => 175,  640 => 174,  628 => 169,  626 => 168,  624 => 167,  622 => 166,  618 => 165,  615 => 163,  613 => 162,  604 => 161,  593 => 155,  589 => 154,  574 => 153,  570 => 150,  567 => 147,  566 => 146,  565 => 145,  563 => 144,  561 => 143,  558 => 141,  556 => 140,  553 => 138,  551 => 137,  549 => 136,  547 => 135,  538 => 133,  528 => 130,  525 => 128,  522 => 126,  520 => 125,  518 => 124,  509 => 123,  498 => 117,  492 => 113,  491 => 112,  490 => 111,  486 => 110,  482 => 109,  479 => 107,  477 => 106,  470 => 102,  469 => 101,  468 => 100,  467 => 99,  463 => 98,  461 => 97,  452 => 96,  441 => 92,  439 => 91,  435 => 90,  432 => 88,  430 => 87,  428 => 86,  426 => 85,  417 => 84,  406 => 80,  404 => 79,  400 => 78,  397 => 76,  395 => 75,  393 => 74,  391 => 73,  382 => 72,  372 => 69,  370 => 68,  361 => 67,  351 => 64,  348 => 63,  345 => 62,  343 => 61,  334 => 60,  324 => 57,  321 => 55,  319 => 54,  310 => 53,  299 => 49,  297 => 48,  295 => 47,  290 => 46,  281 => 45,  271 => 42,  268 => 40,  266 => 39,  264 => 38,  255 => 37,  245 => 34,  242 => 32,  240 => 31,  238 => 30,  229 => 29,  219 => 26,  216 => 24,  214 => 23,  212 => 22,  203 => 21,  193 => 18,  190 => 16,  188 => 15,  186 => 14,  177 => 13,  167 => 10,  164 => 9,  161 => 8,  158 => 7,  156 => 6,  147 => 5,  137 => 174,  134 => 173,  131 => 171,  129 => 161,  126 => 160,  123 => 158,  121 => 133,  118 => 132,  116 => 123,  113 => 122,  110 => 120,  108 => 96,  105 => 95,  103 => 84,  100 => 83,  98 => 72,  95 => 71,  93 => 67,  91 => 60,  89 => 53,  86 => 52,  84 => 45,  81 => 44,  79 => 37,  76 => 36,  74 => 29,  71 => 28,  69 => 21,  66 => 20,  64 => 13,  61 => 12,  59 => 5,  56 => 4,  53 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_base_layout.html.twig\" %}

{# Widgets #}

{% block money_widget -%}
    {% if not valid %}
        {% set group_class = ' form-control is-invalid' %}
        {% set valid = true %}
    {% endif %}
    {{- parent() -}}
{%- endblock money_widget %}

{% block datetime_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock date_widget %}

{% block time_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock time_widget %}

{% block dateinterval_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock dateinterval_widget %}

{% block percent_widget -%}
    <div class=\"input-group{{ not valid ? ' form-control is-invalid' }}\">
        {% set valid = true %}
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block form_widget_simple -%}
    {% if type is not defined or type != 'hidden' %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control' ~ (type|default('') == 'file' ? '-file' : ''))|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{%- block widget_attributes -%}
    {%- if not valid %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) %}
    {% endif -%}
    {{ parent() }}
{%- endblock widget_attributes -%}

{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-secondary') ~ ' btn')|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-check-input')|trim}) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"form-check{{ not valid ? ' form-control is-invalid' }}\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-check-input')|trim}) -%}
    {%- if 'radio-inline' in parent_label_class -%}
        {{- form_label(form, null, { widget: parent() }) -}}
    {%- else -%}
        <div class=\"form-check{{ not valid ? ' form-control is-invalid' }}\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
                valid: valid,
            }) -}}
        {% endfor -%}
    {%- else -%}
        {%- if not valid -%}
            {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) %}
        {%- endif -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                    valid: true,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{# Labels #}

{% block form_label -%}
    {%- if compound is defined and compound -%}
        {%- set element = 'legend' -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-legend')|trim}) -%}
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' form-control-label')|trim}) -%}
    {%- endif -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block checkbox_radio_label -%}
    {#- Do not display the label if widget is not defined in order to prevent double label rendering -#}
    {%- if widget is defined -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' form-check-label')|trim}) -%}
        {%- if required -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) -%}
        {%- endif -%}
        {%- if parent_label_class is defined -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) -%}
        {%- endif -%}
        {%- if label is not same as(false) and label is empty -%}
            {%- if label_format is not empty -%}
                {%- set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) -%}
            {%- else -%}
                {%- set label = name|humanize -%}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    {%- if compound is defined and compound -%}
        {%- set element = 'fieldset' -%}
    {%- endif -%}
    <{{ element|default('div') }} class=\"form-group\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </{{ element|default('div') }}>
{%- endblock form_row %}

{# Errors #}

{% block form_errors -%}
    {%- if errors|length > 0 -%}
    <div class=\"{% if form is not rootform %}invalid-feedback{% else %}alert alert-danger{% endif %}\">
        <ul class=\"list-unstyled mb-0\">
            {%- for error in errors -%}
                <li>{{ error.message }}</li>
            {%- endfor -%}
        </ul>
    </div>
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_4_layout.html.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\bootstrap_4_layout.html.twig");
    }
}
