<?php

/* bootstrap_4_layout.html.twig */
class __TwigTemplate_c8f091b579b6a572b9f7e75273e22d65636dfad9728c2d684920ff62334fcacd extends Twig_Template
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
        $__internal_c97a3fb90ad8534d9f6038230a500df2c50de630e9e87628fc57373ecc5f4af0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c97a3fb90ad8534d9f6038230a500df2c50de630e9e87628fc57373ecc5f4af0->enter($__internal_c97a3fb90ad8534d9f6038230a500df2c50de630e9e87628fc57373ecc5f4af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

        $__internal_26b80761e4b2e6d2216c22408b2fc847c84685197a350f577ce56d9687f71d68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26b80761e4b2e6d2216c22408b2fc847c84685197a350f577ce56d9687f71d68->enter($__internal_26b80761e4b2e6d2216c22408b2fc847c84685197a350f577ce56d9687f71d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

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
        
        $__internal_c97a3fb90ad8534d9f6038230a500df2c50de630e9e87628fc57373ecc5f4af0->leave($__internal_c97a3fb90ad8534d9f6038230a500df2c50de630e9e87628fc57373ecc5f4af0_prof);

        
        $__internal_26b80761e4b2e6d2216c22408b2fc847c84685197a350f577ce56d9687f71d68->leave($__internal_26b80761e4b2e6d2216c22408b2fc847c84685197a350f577ce56d9687f71d68_prof);

    }

    // line 5
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_d7ef285d050268c48943b529f18d681de597769cb180fec583d1e4e32d778d02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7ef285d050268c48943b529f18d681de597769cb180fec583d1e4e32d778d02->enter($__internal_d7ef285d050268c48943b529f18d681de597769cb180fec583d1e4e32d778d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_3884f86a2e8d177bec7e9cee9e834d0e33913d26aa71969edc2e889fc96699ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3884f86a2e8d177bec7e9cee9e834d0e33913d26aa71969edc2e889fc96699ca->enter($__internal_3884f86a2e8d177bec7e9cee9e834d0e33913d26aa71969edc2e889fc96699ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

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
        
        $__internal_3884f86a2e8d177bec7e9cee9e834d0e33913d26aa71969edc2e889fc96699ca->leave($__internal_3884f86a2e8d177bec7e9cee9e834d0e33913d26aa71969edc2e889fc96699ca_prof);

        
        $__internal_d7ef285d050268c48943b529f18d681de597769cb180fec583d1e4e32d778d02->leave($__internal_d7ef285d050268c48943b529f18d681de597769cb180fec583d1e4e32d778d02_prof);

    }

    // line 13
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_1bd130c6859891ad02c53289bbdf8ac128bf5e7334faacc79d92728f97c89836 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bd130c6859891ad02c53289bbdf8ac128bf5e7334faacc79d92728f97c89836->enter($__internal_1bd130c6859891ad02c53289bbdf8ac128bf5e7334faacc79d92728f97c89836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_7e30a9172980dc7c03196a19d0bc21f5dd574bbc9aad46538644312acf91ba5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e30a9172980dc7c03196a19d0bc21f5dd574bbc9aad46538644312acf91ba5a->enter($__internal_7e30a9172980dc7c03196a19d0bc21f5dd574bbc9aad46538644312acf91ba5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 14
        if ((((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 14, $this->getSourceContext()); })()) != "single_text") &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 14, $this->getSourceContext()); })()))) {
            // line 15
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 15, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 16
            $context["valid"] = true;
        }
        // line 18
        $this->displayParentBlock("datetime_widget", $context, $blocks);
        
        $__internal_7e30a9172980dc7c03196a19d0bc21f5dd574bbc9aad46538644312acf91ba5a->leave($__internal_7e30a9172980dc7c03196a19d0bc21f5dd574bbc9aad46538644312acf91ba5a_prof);

        
        $__internal_1bd130c6859891ad02c53289bbdf8ac128bf5e7334faacc79d92728f97c89836->leave($__internal_1bd130c6859891ad02c53289bbdf8ac128bf5e7334faacc79d92728f97c89836_prof);

    }

    // line 21
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_aacc0e2f3130543e1a14440119b7c91e133b19b4b1acf87451b88eb713551d44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aacc0e2f3130543e1a14440119b7c91e133b19b4b1acf87451b88eb713551d44->enter($__internal_aacc0e2f3130543e1a14440119b7c91e133b19b4b1acf87451b88eb713551d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_ab6cb39645a479b8a9333a8170b62ae575b1e6cd591002d83defa3a3d24912ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab6cb39645a479b8a9333a8170b62ae575b1e6cd591002d83defa3a3d24912ed->enter($__internal_ab6cb39645a479b8a9333a8170b62ae575b1e6cd591002d83defa3a3d24912ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 22
        if ((((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 22, $this->getSourceContext()); })()) != "single_text") &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 22, $this->getSourceContext()); })()))) {
            // line 23
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 23, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 24
            $context["valid"] = true;
        }
        // line 26
        $this->displayParentBlock("date_widget", $context, $blocks);
        
        $__internal_ab6cb39645a479b8a9333a8170b62ae575b1e6cd591002d83defa3a3d24912ed->leave($__internal_ab6cb39645a479b8a9333a8170b62ae575b1e6cd591002d83defa3a3d24912ed_prof);

        
        $__internal_aacc0e2f3130543e1a14440119b7c91e133b19b4b1acf87451b88eb713551d44->leave($__internal_aacc0e2f3130543e1a14440119b7c91e133b19b4b1acf87451b88eb713551d44_prof);

    }

    // line 29
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_de33f61deca22882cec6ca24decbf264989eb13662a0f322aa516eaf37d586ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de33f61deca22882cec6ca24decbf264989eb13662a0f322aa516eaf37d586ee->enter($__internal_de33f61deca22882cec6ca24decbf264989eb13662a0f322aa516eaf37d586ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_2979450c4422b3ad268250eeac6f5af7e30a56b0edb3357443529d3b029364cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2979450c4422b3ad268250eeac6f5af7e30a56b0edb3357443529d3b029364cc->enter($__internal_2979450c4422b3ad268250eeac6f5af7e30a56b0edb3357443529d3b029364cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 30
        if ((((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 30, $this->getSourceContext()); })()) != "single_text") &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 30, $this->getSourceContext()); })()))) {
            // line 31
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 31, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 32
            $context["valid"] = true;
        }
        // line 34
        $this->displayParentBlock("time_widget", $context, $blocks);
        
        $__internal_2979450c4422b3ad268250eeac6f5af7e30a56b0edb3357443529d3b029364cc->leave($__internal_2979450c4422b3ad268250eeac6f5af7e30a56b0edb3357443529d3b029364cc_prof);

        
        $__internal_de33f61deca22882cec6ca24decbf264989eb13662a0f322aa516eaf37d586ee->leave($__internal_de33f61deca22882cec6ca24decbf264989eb13662a0f322aa516eaf37d586ee_prof);

    }

    // line 37
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_f8715bab1413cbb2187f1f9b1b3c89029a58575596d32da66baa98ab16d665e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8715bab1413cbb2187f1f9b1b3c89029a58575596d32da66baa98ab16d665e6->enter($__internal_f8715bab1413cbb2187f1f9b1b3c89029a58575596d32da66baa98ab16d665e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_8e2b40c7b0d68aaa0f26935cc34ff24743316785a0326ac7b87ca2da432e3cb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e2b40c7b0d68aaa0f26935cc34ff24743316785a0326ac7b87ca2da432e3cb3->enter($__internal_8e2b40c7b0d68aaa0f26935cc34ff24743316785a0326ac7b87ca2da432e3cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 38
        if ((((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 38, $this->getSourceContext()); })()) != "single_text") &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 38, $this->getSourceContext()); })()))) {
            // line 39
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 39, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 40
            $context["valid"] = true;
        }
        // line 42
        $this->displayParentBlock("dateinterval_widget", $context, $blocks);
        
        $__internal_8e2b40c7b0d68aaa0f26935cc34ff24743316785a0326ac7b87ca2da432e3cb3->leave($__internal_8e2b40c7b0d68aaa0f26935cc34ff24743316785a0326ac7b87ca2da432e3cb3_prof);

        
        $__internal_f8715bab1413cbb2187f1f9b1b3c89029a58575596d32da66baa98ab16d665e6->leave($__internal_f8715bab1413cbb2187f1f9b1b3c89029a58575596d32da66baa98ab16d665e6_prof);

    }

    // line 45
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_a471da3216422c7c79c85674c62658d418631f4532d2f7a3c6b77e899f0f5d69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a471da3216422c7c79c85674c62658d418631f4532d2f7a3c6b77e899f0f5d69->enter($__internal_a471da3216422c7c79c85674c62658d418631f4532d2f7a3c6b77e899f0f5d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_75f708ed436d82925a1d69fb17639c499abd13ac573e5628b467e8a40cce30e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75f708ed436d82925a1d69fb17639c499abd13ac573e5628b467e8a40cce30e7->enter($__internal_75f708ed436d82925a1d69fb17639c499abd13ac573e5628b467e8a40cce30e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

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
        
        $__internal_75f708ed436d82925a1d69fb17639c499abd13ac573e5628b467e8a40cce30e7->leave($__internal_75f708ed436d82925a1d69fb17639c499abd13ac573e5628b467e8a40cce30e7_prof);

        
        $__internal_a471da3216422c7c79c85674c62658d418631f4532d2f7a3c6b77e899f0f5d69->leave($__internal_a471da3216422c7c79c85674c62658d418631f4532d2f7a3c6b77e899f0f5d69_prof);

    }

    // line 53
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_8a0b1b62e3163046e6f3dfca41c6b34182f1ae88e0fc78cdfdb02679338059ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a0b1b62e3163046e6f3dfca41c6b34182f1ae88e0fc78cdfdb02679338059ec->enter($__internal_8a0b1b62e3163046e6f3dfca41c6b34182f1ae88e0fc78cdfdb02679338059ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_5b8841d1e2d2e3c68a8515f643c5f5c3457f75ac5805b3527f60c26ee1123dbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b8841d1e2d2e3c68a8515f643c5f5c3457f75ac5805b3527f60c26ee1123dbe->enter($__internal_5b8841d1e2d2e3c68a8515f643c5f5c3457f75ac5805b3527f60c26ee1123dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 54
        if (( !array_key_exists("type", $context) || ((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 54, $this->getSourceContext()); })()) != "hidden"))) {
            // line 55
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 55, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control") . (((((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 55, $this->getSourceContext()); })()), "")) : ("")) == "file")) ? ("-file") : (""))))));
        }
        // line 57
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_5b8841d1e2d2e3c68a8515f643c5f5c3457f75ac5805b3527f60c26ee1123dbe->leave($__internal_5b8841d1e2d2e3c68a8515f643c5f5c3457f75ac5805b3527f60c26ee1123dbe_prof);

        
        $__internal_8a0b1b62e3163046e6f3dfca41c6b34182f1ae88e0fc78cdfdb02679338059ec->leave($__internal_8a0b1b62e3163046e6f3dfca41c6b34182f1ae88e0fc78cdfdb02679338059ec_prof);

    }

    // line 60
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_b8312dc7cc02d9cb940e46c2c59e72763e2fc1b9b2a296b3845ac3ed0bc9e733 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8312dc7cc02d9cb940e46c2c59e72763e2fc1b9b2a296b3845ac3ed0bc9e733->enter($__internal_b8312dc7cc02d9cb940e46c2c59e72763e2fc1b9b2a296b3845ac3ed0bc9e733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_950993b37bb4a33aae7d4443f84ad0c9733d24ffd9d7ada277d919ea6de4a87c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_950993b37bb4a33aae7d4443f84ad0c9733d24ffd9d7ada277d919ea6de4a87c->enter($__internal_950993b37bb4a33aae7d4443f84ad0c9733d24ffd9d7ada277d919ea6de4a87c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

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
        
        $__internal_950993b37bb4a33aae7d4443f84ad0c9733d24ffd9d7ada277d919ea6de4a87c->leave($__internal_950993b37bb4a33aae7d4443f84ad0c9733d24ffd9d7ada277d919ea6de4a87c_prof);

        
        $__internal_b8312dc7cc02d9cb940e46c2c59e72763e2fc1b9b2a296b3845ac3ed0bc9e733->leave($__internal_b8312dc7cc02d9cb940e46c2c59e72763e2fc1b9b2a296b3845ac3ed0bc9e733_prof);

    }

    // line 67
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_92a510a8710bd14594b850bbcd4d33df86c57f40baad88259a5d0fc61e08a515 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92a510a8710bd14594b850bbcd4d33df86c57f40baad88259a5d0fc61e08a515->enter($__internal_92a510a8710bd14594b850bbcd4d33df86c57f40baad88259a5d0fc61e08a515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_b575a1ef47a41ecca1602aacd98a287146ebc5f777b511ea6c16c237906165e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b575a1ef47a41ecca1602aacd98a287146ebc5f777b511ea6c16c237906165e0->enter($__internal_b575a1ef47a41ecca1602aacd98a287146ebc5f777b511ea6c16c237906165e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 68
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 68, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-secondary")) : ("btn-secondary")) . " btn"))));
        // line 69
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_b575a1ef47a41ecca1602aacd98a287146ebc5f777b511ea6c16c237906165e0->leave($__internal_b575a1ef47a41ecca1602aacd98a287146ebc5f777b511ea6c16c237906165e0_prof);

        
        $__internal_92a510a8710bd14594b850bbcd4d33df86c57f40baad88259a5d0fc61e08a515->leave($__internal_92a510a8710bd14594b850bbcd4d33df86c57f40baad88259a5d0fc61e08a515_prof);

    }

    // line 72
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_b03206d09bd916e8834f147ceaa208e7f25ad3054fa97b5e2b14f3dfa3600351 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b03206d09bd916e8834f147ceaa208e7f25ad3054fa97b5e2b14f3dfa3600351->enter($__internal_b03206d09bd916e8834f147ceaa208e7f25ad3054fa97b5e2b14f3dfa3600351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_e49f0093d120a997b466febe2d1552dadf5359e09500c8e8e5df686c1516822d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e49f0093d120a997b466febe2d1552dadf5359e09500c8e8e5df686c1516822d->enter($__internal_e49f0093d120a997b466febe2d1552dadf5359e09500c8e8e5df686c1516822d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_e49f0093d120a997b466febe2d1552dadf5359e09500c8e8e5df686c1516822d->leave($__internal_e49f0093d120a997b466febe2d1552dadf5359e09500c8e8e5df686c1516822d_prof);

        
        $__internal_b03206d09bd916e8834f147ceaa208e7f25ad3054fa97b5e2b14f3dfa3600351->leave($__internal_b03206d09bd916e8834f147ceaa208e7f25ad3054fa97b5e2b14f3dfa3600351_prof);

    }

    // line 84
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_371c8410f47042e42f3f2da2c102c31dc66d41785666a1317763ce0c9a81b723 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_371c8410f47042e42f3f2da2c102c31dc66d41785666a1317763ce0c9a81b723->enter($__internal_371c8410f47042e42f3f2da2c102c31dc66d41785666a1317763ce0c9a81b723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_c348718e93f0ef36e76a87dcbfec336f2ab02ddf291d0667e59c5dfdf1784915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c348718e93f0ef36e76a87dcbfec336f2ab02ddf291d0667e59c5dfdf1784915->enter($__internal_c348718e93f0ef36e76a87dcbfec336f2ab02ddf291d0667e59c5dfdf1784915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_c348718e93f0ef36e76a87dcbfec336f2ab02ddf291d0667e59c5dfdf1784915->leave($__internal_c348718e93f0ef36e76a87dcbfec336f2ab02ddf291d0667e59c5dfdf1784915_prof);

        
        $__internal_371c8410f47042e42f3f2da2c102c31dc66d41785666a1317763ce0c9a81b723->leave($__internal_371c8410f47042e42f3f2da2c102c31dc66d41785666a1317763ce0c9a81b723_prof);

    }

    // line 96
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_834407ea9142de2730d90392d0c356189bbe9b88e4e5c601f741fb47fc7e6db8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_834407ea9142de2730d90392d0c356189bbe9b88e4e5c601f741fb47fc7e6db8->enter($__internal_834407ea9142de2730d90392d0c356189bbe9b88e4e5c601f741fb47fc7e6db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_c6326865a508590055487147b0b01b3b06a1a00f46ce82a0ca95ccdb3ddd4fc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6326865a508590055487147b0b01b3b06a1a00f46ce82a0ca95ccdb3ddd4fc0->enter($__internal_c6326865a508590055487147b0b01b3b06a1a00f46ce82a0ca95ccdb3ddd4fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_c6326865a508590055487147b0b01b3b06a1a00f46ce82a0ca95ccdb3ddd4fc0->leave($__internal_c6326865a508590055487147b0b01b3b06a1a00f46ce82a0ca95ccdb3ddd4fc0_prof);

        
        $__internal_834407ea9142de2730d90392d0c356189bbe9b88e4e5c601f741fb47fc7e6db8->leave($__internal_834407ea9142de2730d90392d0c356189bbe9b88e4e5c601f741fb47fc7e6db8_prof);

    }

    // line 123
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_bb2a9dafc00c0e58f4e6ef64520f59e28851efe370281a1f3e5159fd4d06354b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb2a9dafc00c0e58f4e6ef64520f59e28851efe370281a1f3e5159fd4d06354b->enter($__internal_bb2a9dafc00c0e58f4e6ef64520f59e28851efe370281a1f3e5159fd4d06354b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_f7bca9191f3a7e3c34e679a28142413be24c5572fe922c2bdecf8a9aac943edc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7bca9191f3a7e3c34e679a28142413be24c5572fe922c2bdecf8a9aac943edc->enter($__internal_f7bca9191f3a7e3c34e679a28142413be24c5572fe922c2bdecf8a9aac943edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_f7bca9191f3a7e3c34e679a28142413be24c5572fe922c2bdecf8a9aac943edc->leave($__internal_f7bca9191f3a7e3c34e679a28142413be24c5572fe922c2bdecf8a9aac943edc_prof);

        
        $__internal_bb2a9dafc00c0e58f4e6ef64520f59e28851efe370281a1f3e5159fd4d06354b->leave($__internal_bb2a9dafc00c0e58f4e6ef64520f59e28851efe370281a1f3e5159fd4d06354b_prof);

    }

    // line 133
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_010c0332cdb922451c05ab1bfe82d40c08f67e99ed59805a1485d639c888c442 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_010c0332cdb922451c05ab1bfe82d40c08f67e99ed59805a1485d639c888c442->enter($__internal_010c0332cdb922451c05ab1bfe82d40c08f67e99ed59805a1485d639c888c442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_4c1a361850229b9ecb23a08683b22a30042e59dfbdadd21018c4838387a1fa19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c1a361850229b9ecb23a08683b22a30042e59dfbdadd21018c4838387a1fa19->enter($__internal_4c1a361850229b9ecb23a08683b22a30042e59dfbdadd21018c4838387a1fa19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_4c1a361850229b9ecb23a08683b22a30042e59dfbdadd21018c4838387a1fa19->leave($__internal_4c1a361850229b9ecb23a08683b22a30042e59dfbdadd21018c4838387a1fa19_prof);

        
        $__internal_010c0332cdb922451c05ab1bfe82d40c08f67e99ed59805a1485d639c888c442->leave($__internal_010c0332cdb922451c05ab1bfe82d40c08f67e99ed59805a1485d639c888c442_prof);

    }

    // line 161
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_298dec5894a42974bfb1dc1507b77c0e2057fffaf5c61291c054e5ae25c316e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_298dec5894a42974bfb1dc1507b77c0e2057fffaf5c61291c054e5ae25c316e6->enter($__internal_298dec5894a42974bfb1dc1507b77c0e2057fffaf5c61291c054e5ae25c316e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_7b70dd16cada728ad7244d3c52ea2d8659b690882c79ddb4297274d7fdd6641f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b70dd16cada728ad7244d3c52ea2d8659b690882c79ddb4297274d7fdd6641f->enter($__internal_7b70dd16cada728ad7244d3c52ea2d8659b690882c79ddb4297274d7fdd6641f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_7b70dd16cada728ad7244d3c52ea2d8659b690882c79ddb4297274d7fdd6641f->leave($__internal_7b70dd16cada728ad7244d3c52ea2d8659b690882c79ddb4297274d7fdd6641f_prof);

        
        $__internal_298dec5894a42974bfb1dc1507b77c0e2057fffaf5c61291c054e5ae25c316e6->leave($__internal_298dec5894a42974bfb1dc1507b77c0e2057fffaf5c61291c054e5ae25c316e6_prof);

    }

    // line 174
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_4c2b55fddfb2c8b996b7b17639584945332c1fa9f07d46f530b167fba3802df0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c2b55fddfb2c8b996b7b17639584945332c1fa9f07d46f530b167fba3802df0->enter($__internal_4c2b55fddfb2c8b996b7b17639584945332c1fa9f07d46f530b167fba3802df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_19b05ba8a26f10017646318d1e330b39bcdcbf7da20a0bf6248005102f52098b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19b05ba8a26f10017646318d1e330b39bcdcbf7da20a0bf6248005102f52098b->enter($__internal_19b05ba8a26f10017646318d1e330b39bcdcbf7da20a0bf6248005102f52098b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_19b05ba8a26f10017646318d1e330b39bcdcbf7da20a0bf6248005102f52098b->leave($__internal_19b05ba8a26f10017646318d1e330b39bcdcbf7da20a0bf6248005102f52098b_prof);

        
        $__internal_4c2b55fddfb2c8b996b7b17639584945332c1fa9f07d46f530b167fba3802df0->leave($__internal_4c2b55fddfb2c8b996b7b17639584945332c1fa9f07d46f530b167fba3802df0_prof);

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
