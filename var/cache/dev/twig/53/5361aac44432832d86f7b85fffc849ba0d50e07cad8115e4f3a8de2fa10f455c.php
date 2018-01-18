<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_5fe575c078ad6ca6e6a2dce20c9a2cd9f6f6c73b158921effcdff4351e6c7935 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'button_widget' => array($this, 'block_button_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4edf7fe9fc1e125ccff81ddf8795f3f5a2851599a247be8fdcdaf0fee1c913c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4edf7fe9fc1e125ccff81ddf8795f3f5a2851599a247be8fdcdaf0fee1c913c->enter($__internal_e4edf7fe9fc1e125ccff81ddf8795f3f5a2851599a247be8fdcdaf0fee1c913c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_978c404e2e42b4b435dc48850743ae3ba16b01dd4cd089bf1c4ca29ab072517e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_978c404e2e42b4b435dc48850743ae3ba16b01dd4cd089bf1c4ca29ab072517e->enter($__internal_978c404e2e42b4b435dc48850743ae3ba16b01dd4cd089bf1c4ca29ab072517e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('button_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 38
        echo "
";
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('form_label', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('choice_label', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('radio_label', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 88
        echo "
";
        // line 90
        echo "
";
        // line 91
        $this->displayBlock('form_row', $context, $blocks);
        // line 98
        echo "
";
        // line 99
        $this->displayBlock('button_row', $context, $blocks);
        // line 104
        echo "
";
        // line 105
        $this->displayBlock('choice_row', $context, $blocks);
        // line 109
        echo "
";
        // line 110
        $this->displayBlock('date_row', $context, $blocks);
        // line 114
        echo "
";
        // line 115
        $this->displayBlock('time_row', $context, $blocks);
        // line 119
        echo "
";
        // line 120
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 124
        echo "
";
        // line 125
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 131
        echo "
";
        // line 132
        $this->displayBlock('radio_row', $context, $blocks);
        // line 138
        echo "
";
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_e4edf7fe9fc1e125ccff81ddf8795f3f5a2851599a247be8fdcdaf0fee1c913c->leave($__internal_e4edf7fe9fc1e125ccff81ddf8795f3f5a2851599a247be8fdcdaf0fee1c913c_prof);

        
        $__internal_978c404e2e42b4b435dc48850743ae3ba16b01dd4cd089bf1c4ca29ab072517e->leave($__internal_978c404e2e42b4b435dc48850743ae3ba16b01dd4cd089bf1c4ca29ab072517e_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_bc6714c2cb7780143e23940d26e81eb87bc82ed9fb2a7e53e2fe391bbf8bc112 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc6714c2cb7780143e23940d26e81eb87bc82ed9fb2a7e53e2fe391bbf8bc112->enter($__internal_bc6714c2cb7780143e23940d26e81eb87bc82ed9fb2a7e53e2fe391bbf8bc112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_d1596b1e490180b8e209e99fe9f793b84b3adba4c1bb744a8e0d622092d52087 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1596b1e490180b8e209e99fe9f793b84b3adba4c1bb744a8e0d622092d52087->enter($__internal_d1596b1e490180b8e209e99fe9f793b84b3adba4c1bb744a8e0d622092d52087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_d1596b1e490180b8e209e99fe9f793b84b3adba4c1bb744a8e0d622092d52087->leave($__internal_d1596b1e490180b8e209e99fe9f793b84b3adba4c1bb744a8e0d622092d52087_prof);

        
        $__internal_bc6714c2cb7780143e23940d26e81eb87bc82ed9fb2a7e53e2fe391bbf8bc112->leave($__internal_bc6714c2cb7780143e23940d26e81eb87bc82ed9fb2a7e53e2fe391bbf8bc112_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_d7b9304bde99da4f03e7ceb06b6678b2394dffc1cc12b05b86399fc4f3d9566a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7b9304bde99da4f03e7ceb06b6678b2394dffc1cc12b05b86399fc4f3d9566a->enter($__internal_d7b9304bde99da4f03e7ceb06b6678b2394dffc1cc12b05b86399fc4f3d9566a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_d0b67c4acadf73fafa0df80ce39c1aa1ebbcc34c0394bab08aab901eb692a8f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0b67c4acadf73fafa0df80ce39c1aa1ebbcc34c0394bab08aab901eb692a8f6->enter($__internal_d0b67c4acadf73fafa0df80ce39c1aa1ebbcc34c0394bab08aab901eb692a8f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_d0b67c4acadf73fafa0df80ce39c1aa1ebbcc34c0394bab08aab901eb692a8f6->leave($__internal_d0b67c4acadf73fafa0df80ce39c1aa1ebbcc34c0394bab08aab901eb692a8f6_prof);

        
        $__internal_d7b9304bde99da4f03e7ceb06b6678b2394dffc1cc12b05b86399fc4f3d9566a->leave($__internal_d7b9304bde99da4f03e7ceb06b6678b2394dffc1cc12b05b86399fc4f3d9566a_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_a60b8a7bb4e9f6145c6bd25fd0a98500c913ed2c69888d53b2eeb46bfe769788 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a60b8a7bb4e9f6145c6bd25fd0a98500c913ed2c69888d53b2eeb46bfe769788->enter($__internal_a60b8a7bb4e9f6145c6bd25fd0a98500c913ed2c69888d53b2eeb46bfe769788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_2914214e13ebc460644b21caecdd680a15a851eaaa61420a5b3cc0c41e5f56cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2914214e13ebc460644b21caecdd680a15a851eaaa61420a5b3cc0c41e5f56cc->enter($__internal_2914214e13ebc460644b21caecdd680a15a851eaaa61420a5b3cc0c41e5f56cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 18
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 18, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 19
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 19, $this->getSourceContext()); })()))) {
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 22
            echo "<div class=\"checkbox\">";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 24
            echo "</div>";
        }
        
        $__internal_2914214e13ebc460644b21caecdd680a15a851eaaa61420a5b3cc0c41e5f56cc->leave($__internal_2914214e13ebc460644b21caecdd680a15a851eaaa61420a5b3cc0c41e5f56cc_prof);

        
        $__internal_a60b8a7bb4e9f6145c6bd25fd0a98500c913ed2c69888d53b2eeb46bfe769788->leave($__internal_a60b8a7bb4e9f6145c6bd25fd0a98500c913ed2c69888d53b2eeb46bfe769788_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_caf5ab2d8e893b8d3315b6127f00f223ff510c6f144d862d8003192fa194476e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caf5ab2d8e893b8d3315b6127f00f223ff510c6f144d862d8003192fa194476e->enter($__internal_caf5ab2d8e893b8d3315b6127f00f223ff510c6f144d862d8003192fa194476e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_3ad4e4e830902409e3531208d153fefc1bcf3e1cba41853b3be629e43aaa343e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ad4e4e830902409e3531208d153fefc1bcf3e1cba41853b3be629e43aaa343e->enter($__internal_3ad4e4e830902409e3531208d153fefc1bcf3e1cba41853b3be629e43aaa343e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 29
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 29, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 30
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 30, $this->getSourceContext()); })()))) {
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 33
            echo "<div class=\"radio\">";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 35
            echo "</div>";
        }
        
        $__internal_3ad4e4e830902409e3531208d153fefc1bcf3e1cba41853b3be629e43aaa343e->leave($__internal_3ad4e4e830902409e3531208d153fefc1bcf3e1cba41853b3be629e43aaa343e_prof);

        
        $__internal_caf5ab2d8e893b8d3315b6127f00f223ff510c6f144d862d8003192fa194476e->leave($__internal_caf5ab2d8e893b8d3315b6127f00f223ff510c6f144d862d8003192fa194476e_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_1721df3af79ff97b223cf38fde7506e7015150ca5da5a9ea9480b03adda56e4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1721df3af79ff97b223cf38fde7506e7015150ca5da5a9ea9480b03adda56e4c->enter($__internal_1721df3af79ff97b223cf38fde7506e7015150ca5da5a9ea9480b03adda56e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_63519fc2870d250b6255504fd5de35f2fc0db7eeeb2510b5a511c1028a8b0181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63519fc2870d250b6255504fd5de35f2fc0db7eeeb2510b5a511c1028a8b0181->enter($__internal_63519fc2870d250b6255504fd5de35f2fc0db7eeeb2510b5a511c1028a8b0181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_63519fc2870d250b6255504fd5de35f2fc0db7eeeb2510b5a511c1028a8b0181->leave($__internal_63519fc2870d250b6255504fd5de35f2fc0db7eeeb2510b5a511c1028a8b0181_prof);

        
        $__internal_1721df3af79ff97b223cf38fde7506e7015150ca5da5a9ea9480b03adda56e4c->leave($__internal_1721df3af79ff97b223cf38fde7506e7015150ca5da5a9ea9480b03adda56e4c_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_7946c1c33b92236bb3ba4078b92f3e68fd27302782dc9e56538c7fc8d4092e56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7946c1c33b92236bb3ba4078b92f3e68fd27302782dc9e56538c7fc8d4092e56->enter($__internal_7946c1c33b92236bb3ba4078b92f3e68fd27302782dc9e56538c7fc8d4092e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_e888eb6dcdca1416646ece661ee930b796269e6e397699fdcdbccf20fb240616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e888eb6dcdca1416646ece661ee930b796269e6e397699fdcdbccf20fb240616->enter($__internal_e888eb6dcdca1416646ece661ee930b796269e6e397699fdcdbccf20fb240616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_e888eb6dcdca1416646ece661ee930b796269e6e397699fdcdbccf20fb240616->leave($__internal_e888eb6dcdca1416646ece661ee930b796269e6e397699fdcdbccf20fb240616_prof);

        
        $__internal_7946c1c33b92236bb3ba4078b92f3e68fd27302782dc9e56538c7fc8d4092e56->leave($__internal_7946c1c33b92236bb3ba4078b92f3e68fd27302782dc9e56538c7fc8d4092e56_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_bd032b3353a7fad4198578c3b8eedfaadc34fdd9372daa1ee09a22d90bebfb3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd032b3353a7fad4198578c3b8eedfaadc34fdd9372daa1ee09a22d90bebfb3a->enter($__internal_bd032b3353a7fad4198578c3b8eedfaadc34fdd9372daa1ee09a22d90bebfb3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_574cc4f302549831aef0730de79ce1f781f65b14b4abf2ae33c88a37f2fc51cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_574cc4f302549831aef0730de79ce1f781f65b14b4abf2ae33c88a37f2fc51cb->enter($__internal_574cc4f302549831aef0730de79ce1f781f65b14b4abf2ae33c88a37f2fc51cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_574cc4f302549831aef0730de79ce1f781f65b14b4abf2ae33c88a37f2fc51cb->leave($__internal_574cc4f302549831aef0730de79ce1f781f65b14b4abf2ae33c88a37f2fc51cb_prof);

        
        $__internal_bd032b3353a7fad4198578c3b8eedfaadc34fdd9372daa1ee09a22d90bebfb3a->leave($__internal_bd032b3353a7fad4198578c3b8eedfaadc34fdd9372daa1ee09a22d90bebfb3a_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_3fecc166fecdacd241b9ab891c6c804d10d3a95d72ae6e63ad78551e8ec36268 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fecc166fecdacd241b9ab891c6c804d10d3a95d72ae6e63ad78551e8ec36268->enter($__internal_3fecc166fecdacd241b9ab891c6c804d10d3a95d72ae6e63ad78551e8ec36268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_665d90332b0c3f66e9b24f722c57f132caf71e21cd828b46726b24c4b5848555 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_665d90332b0c3f66e9b24f722c57f132caf71e21cd828b46726b24c4b5848555->enter($__internal_665d90332b0c3f66e9b24f722c57f132caf71e21cd828b46726b24c4b5848555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_665d90332b0c3f66e9b24f722c57f132caf71e21cd828b46726b24c4b5848555->leave($__internal_665d90332b0c3f66e9b24f722c57f132caf71e21cd828b46726b24c4b5848555_prof);

        
        $__internal_3fecc166fecdacd241b9ab891c6c804d10d3a95d72ae6e63ad78551e8ec36268->leave($__internal_3fecc166fecdacd241b9ab891c6c804d10d3a95d72ae6e63ad78551e8ec36268_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_e0c28e3ccb6a8d486857f363df45ab86d2b9aa1ff43a4fa88f3ff00215919b78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0c28e3ccb6a8d486857f363df45ab86d2b9aa1ff43a4fa88f3ff00215919b78->enter($__internal_e0c28e3ccb6a8d486857f363df45ab86d2b9aa1ff43a4fa88f3ff00215919b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_aee02c53f8c817cf9ba8716d81f89e4c2545196bec0b2be21f973d8e2d893877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aee02c53f8c817cf9ba8716d81f89e4c2545196bec0b2be21f973d8e2d893877->enter($__internal_aee02c53f8c817cf9ba8716d81f89e4c2545196bec0b2be21f973d8e2d893877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 66
        if (array_key_exists("widget", $context)) {
            // line 67
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 67, $this->getSourceContext()); })())) {
                // line 68
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 68, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 70
            if (array_key_exists("parent_label_class", $context)) {
                // line 71
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 71, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 71, $this->getSourceContext()); })())))));
            }
            // line 73
            if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 73, $this->getSourceContext()); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 73, $this->getSourceContext()); })())))) {
                // line 74
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 74, $this->getSourceContext()); })()))) {
                    // line 75
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 75, $this->getSourceContext()); })()), array("%name%" =>                     // line 76
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 76, $this->getSourceContext()); })()), "%id%" =>                     // line 77
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 77, $this->getSourceContext()); })())));
                } else {
                    // line 80
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 80, $this->getSourceContext()); })()));
                }
            }
            // line 83
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 83, $this->getSourceContext()); })()));
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
            // line 84
            echo (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 84, $this->getSourceContext()); })());
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })()) === false)) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 84, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 84, $this->getSourceContext()); })()))))) : ("")), "html", null, true);
            // line 85
            echo "</label>";
        }
        
        $__internal_aee02c53f8c817cf9ba8716d81f89e4c2545196bec0b2be21f973d8e2d893877->leave($__internal_aee02c53f8c817cf9ba8716d81f89e4c2545196bec0b2be21f973d8e2d893877_prof);

        
        $__internal_e0c28e3ccb6a8d486857f363df45ab86d2b9aa1ff43a4fa88f3ff00215919b78->leave($__internal_e0c28e3ccb6a8d486857f363df45ab86d2b9aa1ff43a4fa88f3ff00215919b78_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_874642e3c678c59781c7feaa72cbe70470d62c2dd51648ae688585e26832dd3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_874642e3c678c59781c7feaa72cbe70470d62c2dd51648ae688585e26832dd3f->enter($__internal_874642e3c678c59781c7feaa72cbe70470d62c2dd51648ae688585e26832dd3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_4362c9a4355b6589c2aabc0452c9a53c2f5adb1a5fc5d22a91268c3e5d6a9170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4362c9a4355b6589c2aabc0452c9a53c2f5adb1a5fc5d22a91268c3e5d6a9170->enter($__internal_4362c9a4355b6589c2aabc0452c9a53c2f5adb1a5fc5d22a91268c3e5d6a9170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 92
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 92, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 92, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 92, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 93, $this->getSourceContext()); })()), 'label');
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 94, $this->getSourceContext()); })()), 'widget');
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 95, $this->getSourceContext()); })()), 'errors');
        // line 96
        echo "</div>";
        
        $__internal_4362c9a4355b6589c2aabc0452c9a53c2f5adb1a5fc5d22a91268c3e5d6a9170->leave($__internal_4362c9a4355b6589c2aabc0452c9a53c2f5adb1a5fc5d22a91268c3e5d6a9170_prof);

        
        $__internal_874642e3c678c59781c7feaa72cbe70470d62c2dd51648ae688585e26832dd3f->leave($__internal_874642e3c678c59781c7feaa72cbe70470d62c2dd51648ae688585e26832dd3f_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_e5e76314a7e2e366cc505058f101f284483f4ed081ea397b7dd9a7233497f4c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5e76314a7e2e366cc505058f101f284483f4ed081ea397b7dd9a7233497f4c3->enter($__internal_e5e76314a7e2e366cc505058f101f284483f4ed081ea397b7dd9a7233497f4c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_402f2c0958ce1048d8f58064b2e27fe38d35c0a150ab9d787fafa47c1938150e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_402f2c0958ce1048d8f58064b2e27fe38d35c0a150ab9d787fafa47c1938150e->enter($__internal_402f2c0958ce1048d8f58064b2e27fe38d35c0a150ab9d787fafa47c1938150e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_402f2c0958ce1048d8f58064b2e27fe38d35c0a150ab9d787fafa47c1938150e->leave($__internal_402f2c0958ce1048d8f58064b2e27fe38d35c0a150ab9d787fafa47c1938150e_prof);

        
        $__internal_e5e76314a7e2e366cc505058f101f284483f4ed081ea397b7dd9a7233497f4c3->leave($__internal_e5e76314a7e2e366cc505058f101f284483f4ed081ea397b7dd9a7233497f4c3_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_170f86aacb276a7c68bf52f12e4ef7d0dadc84c3096237f20ef7d71bf70f9f40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_170f86aacb276a7c68bf52f12e4ef7d0dadc84c3096237f20ef7d71bf70f9f40->enter($__internal_170f86aacb276a7c68bf52f12e4ef7d0dadc84c3096237f20ef7d71bf70f9f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_8b103d1f6c0355464a9e90621dc7cf11c8b363f60bafb0b7d0eedc91624ecef2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b103d1f6c0355464a9e90621dc7cf11c8b363f60bafb0b7d0eedc91624ecef2->enter($__internal_8b103d1f6c0355464a9e90621dc7cf11c8b363f60bafb0b7d0eedc91624ecef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8b103d1f6c0355464a9e90621dc7cf11c8b363f60bafb0b7d0eedc91624ecef2->leave($__internal_8b103d1f6c0355464a9e90621dc7cf11c8b363f60bafb0b7d0eedc91624ecef2_prof);

        
        $__internal_170f86aacb276a7c68bf52f12e4ef7d0dadc84c3096237f20ef7d71bf70f9f40->leave($__internal_170f86aacb276a7c68bf52f12e4ef7d0dadc84c3096237f20ef7d71bf70f9f40_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_19abb4b8e5520c5360a2138f21393db9ab0c5a36cdca95d53f605b7424e2e2bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19abb4b8e5520c5360a2138f21393db9ab0c5a36cdca95d53f605b7424e2e2bc->enter($__internal_19abb4b8e5520c5360a2138f21393db9ab0c5a36cdca95d53f605b7424e2e2bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_31fcee389817ea918a2b22d692edce19d5ea11ea7552a03d62d5e3737565ff84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31fcee389817ea918a2b22d692edce19d5ea11ea7552a03d62d5e3737565ff84->enter($__internal_31fcee389817ea918a2b22d692edce19d5ea11ea7552a03d62d5e3737565ff84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_31fcee389817ea918a2b22d692edce19d5ea11ea7552a03d62d5e3737565ff84->leave($__internal_31fcee389817ea918a2b22d692edce19d5ea11ea7552a03d62d5e3737565ff84_prof);

        
        $__internal_19abb4b8e5520c5360a2138f21393db9ab0c5a36cdca95d53f605b7424e2e2bc->leave($__internal_19abb4b8e5520c5360a2138f21393db9ab0c5a36cdca95d53f605b7424e2e2bc_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_43a80963d60e080ebd60467624b70ffb96d84d34d7bd7e18b7a24e3e623bec62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43a80963d60e080ebd60467624b70ffb96d84d34d7bd7e18b7a24e3e623bec62->enter($__internal_43a80963d60e080ebd60467624b70ffb96d84d34d7bd7e18b7a24e3e623bec62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_e0798a264f42a4fad46cd58d985a184cdfe1179ca9b6b90243c6a020744208b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0798a264f42a4fad46cd58d985a184cdfe1179ca9b6b90243c6a020744208b8->enter($__internal_e0798a264f42a4fad46cd58d985a184cdfe1179ca9b6b90243c6a020744208b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e0798a264f42a4fad46cd58d985a184cdfe1179ca9b6b90243c6a020744208b8->leave($__internal_e0798a264f42a4fad46cd58d985a184cdfe1179ca9b6b90243c6a020744208b8_prof);

        
        $__internal_43a80963d60e080ebd60467624b70ffb96d84d34d7bd7e18b7a24e3e623bec62->leave($__internal_43a80963d60e080ebd60467624b70ffb96d84d34d7bd7e18b7a24e3e623bec62_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_59fa75cff0cd1ea18944b4421beaf0d6ae51836875dcd0226917972dcf7b0ba7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59fa75cff0cd1ea18944b4421beaf0d6ae51836875dcd0226917972dcf7b0ba7->enter($__internal_59fa75cff0cd1ea18944b4421beaf0d6ae51836875dcd0226917972dcf7b0ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_5b15160b6fb62dd2a0166423a3db09d4e053adea8b48298854ae2426edb62e70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b15160b6fb62dd2a0166423a3db09d4e053adea8b48298854ae2426edb62e70->enter($__internal_5b15160b6fb62dd2a0166423a3db09d4e053adea8b48298854ae2426edb62e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_5b15160b6fb62dd2a0166423a3db09d4e053adea8b48298854ae2426edb62e70->leave($__internal_5b15160b6fb62dd2a0166423a3db09d4e053adea8b48298854ae2426edb62e70_prof);

        
        $__internal_59fa75cff0cd1ea18944b4421beaf0d6ae51836875dcd0226917972dcf7b0ba7->leave($__internal_59fa75cff0cd1ea18944b4421beaf0d6ae51836875dcd0226917972dcf7b0ba7_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_0b7706ccffd236910cac6428b01a18ab85ec4b64078b915b5ff617fc094167d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b7706ccffd236910cac6428b01a18ab85ec4b64078b915b5ff617fc094167d1->enter($__internal_0b7706ccffd236910cac6428b01a18ab85ec4b64078b915b5ff617fc094167d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_1d9eb7985c4e5d4040d2fd2af3740219ec615d9ae5fed6bac5e30f5b15e95c98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d9eb7985c4e5d4040d2fd2af3740219ec615d9ae5fed6bac5e30f5b15e95c98->enter($__internal_1d9eb7985c4e5d4040d2fd2af3740219ec615d9ae5fed6bac5e30f5b15e95c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 126
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 126, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 127, $this->getSourceContext()); })()), 'widget');
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), 'errors');
        // line 129
        echo "</div>";
        
        $__internal_1d9eb7985c4e5d4040d2fd2af3740219ec615d9ae5fed6bac5e30f5b15e95c98->leave($__internal_1d9eb7985c4e5d4040d2fd2af3740219ec615d9ae5fed6bac5e30f5b15e95c98_prof);

        
        $__internal_0b7706ccffd236910cac6428b01a18ab85ec4b64078b915b5ff617fc094167d1->leave($__internal_0b7706ccffd236910cac6428b01a18ab85ec4b64078b915b5ff617fc094167d1_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_00f5a1a05ba9d23c91f60594f9ff262c522d29d478592e52420828a06969f4ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00f5a1a05ba9d23c91f60594f9ff262c522d29d478592e52420828a06969f4ec->enter($__internal_00f5a1a05ba9d23c91f60594f9ff262c522d29d478592e52420828a06969f4ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_a7eee2529a0a183dcd1d661bb43845a25def3117864bc89dd7107e789761eeb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7eee2529a0a183dcd1d661bb43845a25def3117864bc89dd7107e789761eeb6->enter($__internal_a7eee2529a0a183dcd1d661bb43845a25def3117864bc89dd7107e789761eeb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 133
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 133, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 134, $this->getSourceContext()); })()), 'widget');
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 135, $this->getSourceContext()); })()), 'errors');
        // line 136
        echo "</div>";
        
        $__internal_a7eee2529a0a183dcd1d661bb43845a25def3117864bc89dd7107e789761eeb6->leave($__internal_a7eee2529a0a183dcd1d661bb43845a25def3117864bc89dd7107e789761eeb6_prof);

        
        $__internal_00f5a1a05ba9d23c91f60594f9ff262c522d29d478592e52420828a06969f4ec->leave($__internal_00f5a1a05ba9d23c91f60594f9ff262c522d29d478592e52420828a06969f4ec_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_af4921f4fbb679bb303191b30ba8ecc269199d1a608281e6b9b1ef123cca9492 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af4921f4fbb679bb303191b30ba8ecc269199d1a608281e6b9b1ef123cca9492->enter($__internal_af4921f4fbb679bb303191b30ba8ecc269199d1a608281e6b9b1ef123cca9492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_c20d8b0fab5f5c0fdcbea9df5e1892d426373c888bdd72105c3d708168b942c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c20d8b0fab5f5c0fdcbea9df5e1892d426373c888bdd72105c3d708168b942c0->enter($__internal_c20d8b0fab5f5c0fdcbea9df5e1892d426373c888bdd72105c3d708168b942c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 142
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 142, $this->getSourceContext()); })())) > 0)) {
            // line 143
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 143, $this->getSourceContext()); })()))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 144
            echo "    <ul class=\"list-unstyled\">";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 145, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 146
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "</ul>
    ";
            // line 149
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 149, $this->getSourceContext()); })()))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_c20d8b0fab5f5c0fdcbea9df5e1892d426373c888bdd72105c3d708168b942c0->leave($__internal_c20d8b0fab5f5c0fdcbea9df5e1892d426373c888bdd72105c3d708168b942c0_prof);

        
        $__internal_af4921f4fbb679bb303191b30ba8ecc269199d1a608281e6b9b1ef123cca9492->leave($__internal_af4921f4fbb679bb303191b30ba8ecc269199d1a608281e6b9b1ef123cca9492_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  650 => 149,  647 => 148,  639 => 146,  635 => 145,  633 => 144,  627 => 143,  625 => 142,  616 => 141,  606 => 136,  604 => 135,  602 => 134,  596 => 133,  587 => 132,  577 => 129,  575 => 128,  573 => 127,  567 => 126,  558 => 125,  548 => 122,  546 => 121,  537 => 120,  527 => 117,  525 => 116,  516 => 115,  506 => 112,  504 => 111,  495 => 110,  485 => 107,  483 => 106,  474 => 105,  464 => 102,  462 => 101,  460 => 100,  451 => 99,  441 => 96,  439 => 95,  437 => 94,  435 => 93,  429 => 92,  420 => 91,  409 => 85,  405 => 84,  390 => 83,  386 => 80,  383 => 77,  382 => 76,  381 => 75,  379 => 74,  377 => 73,  374 => 71,  372 => 70,  369 => 68,  367 => 67,  365 => 66,  356 => 64,  346 => 61,  344 => 59,  335 => 58,  325 => 55,  323 => 53,  314 => 52,  304 => 49,  302 => 48,  293 => 46,  283 => 43,  281 => 42,  272 => 41,  261 => 35,  259 => 34,  257 => 33,  254 => 31,  252 => 30,  250 => 29,  241 => 28,  230 => 24,  228 => 23,  226 => 22,  223 => 20,  221 => 19,  219 => 18,  210 => 17,  200 => 14,  198 => 13,  189 => 12,  179 => 9,  176 => 7,  174 => 6,  165 => 5,  155 => 141,  152 => 140,  149 => 138,  147 => 132,  144 => 131,  142 => 125,  139 => 124,  137 => 120,  134 => 119,  132 => 115,  129 => 114,  127 => 110,  124 => 109,  122 => 105,  119 => 104,  117 => 99,  114 => 98,  112 => 91,  109 => 90,  106 => 88,  104 => 64,  101 => 63,  99 => 58,  96 => 57,  94 => 52,  91 => 51,  89 => 46,  86 => 45,  84 => 41,  81 => 40,  78 => 38,  76 => 28,  73 => 27,  71 => 17,  68 => 16,  66 => 12,  63 => 11,  61 => 5,  58 => 4,  55 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_base_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- if 'radio-inline' in parent_label_class -%}
        {{- form_label(form, null, { widget: parent() }) -}}
    {%- else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {%- if widget is defined -%}
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
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
