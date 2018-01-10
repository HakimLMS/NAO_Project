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
        $__internal_79040846e9e278ed0f8a94cbe52a3712ee59316a3db1b33593e901471bc2c642 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79040846e9e278ed0f8a94cbe52a3712ee59316a3db1b33593e901471bc2c642->enter($__internal_79040846e9e278ed0f8a94cbe52a3712ee59316a3db1b33593e901471bc2c642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_c6ee69dadfa53114bced96c87fe011cc3aaf8bc867d513d134306cda463afb15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6ee69dadfa53114bced96c87fe011cc3aaf8bc867d513d134306cda463afb15->enter($__internal_c6ee69dadfa53114bced96c87fe011cc3aaf8bc867d513d134306cda463afb15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_79040846e9e278ed0f8a94cbe52a3712ee59316a3db1b33593e901471bc2c642->leave($__internal_79040846e9e278ed0f8a94cbe52a3712ee59316a3db1b33593e901471bc2c642_prof);

        
        $__internal_c6ee69dadfa53114bced96c87fe011cc3aaf8bc867d513d134306cda463afb15->leave($__internal_c6ee69dadfa53114bced96c87fe011cc3aaf8bc867d513d134306cda463afb15_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_c51e8d3e7352758485d8264fa4714d9a1b1f3429db249b5083a229ef7b9891b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c51e8d3e7352758485d8264fa4714d9a1b1f3429db249b5083a229ef7b9891b0->enter($__internal_c51e8d3e7352758485d8264fa4714d9a1b1f3429db249b5083a229ef7b9891b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_120a958301f601e7ebe81161ef8cfbf52edd16225a3458c163b822e99792c7de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_120a958301f601e7ebe81161ef8cfbf52edd16225a3458c163b822e99792c7de->enter($__internal_120a958301f601e7ebe81161ef8cfbf52edd16225a3458c163b822e99792c7de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_120a958301f601e7ebe81161ef8cfbf52edd16225a3458c163b822e99792c7de->leave($__internal_120a958301f601e7ebe81161ef8cfbf52edd16225a3458c163b822e99792c7de_prof);

        
        $__internal_c51e8d3e7352758485d8264fa4714d9a1b1f3429db249b5083a229ef7b9891b0->leave($__internal_c51e8d3e7352758485d8264fa4714d9a1b1f3429db249b5083a229ef7b9891b0_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_6de97905384167b0bd013afb91be1fd454cd22d7f249fb1e00e37847b9f92549 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6de97905384167b0bd013afb91be1fd454cd22d7f249fb1e00e37847b9f92549->enter($__internal_6de97905384167b0bd013afb91be1fd454cd22d7f249fb1e00e37847b9f92549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_7b33da4914ae5a71a1aff472284023c3027ccd2a91a0e79115a8aedc1d71e6b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b33da4914ae5a71a1aff472284023c3027ccd2a91a0e79115a8aedc1d71e6b2->enter($__internal_7b33da4914ae5a71a1aff472284023c3027ccd2a91a0e79115a8aedc1d71e6b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_7b33da4914ae5a71a1aff472284023c3027ccd2a91a0e79115a8aedc1d71e6b2->leave($__internal_7b33da4914ae5a71a1aff472284023c3027ccd2a91a0e79115a8aedc1d71e6b2_prof);

        
        $__internal_6de97905384167b0bd013afb91be1fd454cd22d7f249fb1e00e37847b9f92549->leave($__internal_6de97905384167b0bd013afb91be1fd454cd22d7f249fb1e00e37847b9f92549_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_4d5cf070b1a7192cf6ee80cfd0d09dacabcd265c10711b725db1f3aaf13fb705 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d5cf070b1a7192cf6ee80cfd0d09dacabcd265c10711b725db1f3aaf13fb705->enter($__internal_4d5cf070b1a7192cf6ee80cfd0d09dacabcd265c10711b725db1f3aaf13fb705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_c050ca783b3a8a8fd17f20b94cfecabd87f714024c0a2d0e12897f22381e9ab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c050ca783b3a8a8fd17f20b94cfecabd87f714024c0a2d0e12897f22381e9ab5->enter($__internal_c050ca783b3a8a8fd17f20b94cfecabd87f714024c0a2d0e12897f22381e9ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_c050ca783b3a8a8fd17f20b94cfecabd87f714024c0a2d0e12897f22381e9ab5->leave($__internal_c050ca783b3a8a8fd17f20b94cfecabd87f714024c0a2d0e12897f22381e9ab5_prof);

        
        $__internal_4d5cf070b1a7192cf6ee80cfd0d09dacabcd265c10711b725db1f3aaf13fb705->leave($__internal_4d5cf070b1a7192cf6ee80cfd0d09dacabcd265c10711b725db1f3aaf13fb705_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_33f8fa48efaf248772b204bbf9fb76944d3fa743b1b8f94f501b197ebcca7bed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33f8fa48efaf248772b204bbf9fb76944d3fa743b1b8f94f501b197ebcca7bed->enter($__internal_33f8fa48efaf248772b204bbf9fb76944d3fa743b1b8f94f501b197ebcca7bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_dba67c2ce90ea24ae13349194ed7e85846e742efb963cac88073e940e7a5c540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dba67c2ce90ea24ae13349194ed7e85846e742efb963cac88073e940e7a5c540->enter($__internal_dba67c2ce90ea24ae13349194ed7e85846e742efb963cac88073e940e7a5c540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_dba67c2ce90ea24ae13349194ed7e85846e742efb963cac88073e940e7a5c540->leave($__internal_dba67c2ce90ea24ae13349194ed7e85846e742efb963cac88073e940e7a5c540_prof);

        
        $__internal_33f8fa48efaf248772b204bbf9fb76944d3fa743b1b8f94f501b197ebcca7bed->leave($__internal_33f8fa48efaf248772b204bbf9fb76944d3fa743b1b8f94f501b197ebcca7bed_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_524e4e339f189afbab158185cf078dcc093e058b37bb75cc4a39a67e9224223d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_524e4e339f189afbab158185cf078dcc093e058b37bb75cc4a39a67e9224223d->enter($__internal_524e4e339f189afbab158185cf078dcc093e058b37bb75cc4a39a67e9224223d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_7012d3a280987c3cc23ba2e9aaf711d840ca4380607cbc419e3866592154a12f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7012d3a280987c3cc23ba2e9aaf711d840ca4380607cbc419e3866592154a12f->enter($__internal_7012d3a280987c3cc23ba2e9aaf711d840ca4380607cbc419e3866592154a12f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_7012d3a280987c3cc23ba2e9aaf711d840ca4380607cbc419e3866592154a12f->leave($__internal_7012d3a280987c3cc23ba2e9aaf711d840ca4380607cbc419e3866592154a12f_prof);

        
        $__internal_524e4e339f189afbab158185cf078dcc093e058b37bb75cc4a39a67e9224223d->leave($__internal_524e4e339f189afbab158185cf078dcc093e058b37bb75cc4a39a67e9224223d_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_310b7a8b044f510a67d457cad3aeaefdefb9dbf618ef2ab19f36b2d3b180acd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_310b7a8b044f510a67d457cad3aeaefdefb9dbf618ef2ab19f36b2d3b180acd3->enter($__internal_310b7a8b044f510a67d457cad3aeaefdefb9dbf618ef2ab19f36b2d3b180acd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_e4720708f29c3ab2f56bace067719ad9387867de586d998d752337d547b67d5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4720708f29c3ab2f56bace067719ad9387867de586d998d752337d547b67d5c->enter($__internal_e4720708f29c3ab2f56bace067719ad9387867de586d998d752337d547b67d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_e4720708f29c3ab2f56bace067719ad9387867de586d998d752337d547b67d5c->leave($__internal_e4720708f29c3ab2f56bace067719ad9387867de586d998d752337d547b67d5c_prof);

        
        $__internal_310b7a8b044f510a67d457cad3aeaefdefb9dbf618ef2ab19f36b2d3b180acd3->leave($__internal_310b7a8b044f510a67d457cad3aeaefdefb9dbf618ef2ab19f36b2d3b180acd3_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_750459831f10c0af8ce32783aea08265bea0e5bfd16196879b184c3d05ef1b50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_750459831f10c0af8ce32783aea08265bea0e5bfd16196879b184c3d05ef1b50->enter($__internal_750459831f10c0af8ce32783aea08265bea0e5bfd16196879b184c3d05ef1b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_0ab2b008b46e66a06e4ec75470f089212d6a85d3fed3586b8908fe7ca5fbe1c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ab2b008b46e66a06e4ec75470f089212d6a85d3fed3586b8908fe7ca5fbe1c1->enter($__internal_0ab2b008b46e66a06e4ec75470f089212d6a85d3fed3586b8908fe7ca5fbe1c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_0ab2b008b46e66a06e4ec75470f089212d6a85d3fed3586b8908fe7ca5fbe1c1->leave($__internal_0ab2b008b46e66a06e4ec75470f089212d6a85d3fed3586b8908fe7ca5fbe1c1_prof);

        
        $__internal_750459831f10c0af8ce32783aea08265bea0e5bfd16196879b184c3d05ef1b50->leave($__internal_750459831f10c0af8ce32783aea08265bea0e5bfd16196879b184c3d05ef1b50_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_94ae6279e6ba139a63ca0f6a7ba073133f57b48b78efeff461644f73c6d68bfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94ae6279e6ba139a63ca0f6a7ba073133f57b48b78efeff461644f73c6d68bfa->enter($__internal_94ae6279e6ba139a63ca0f6a7ba073133f57b48b78efeff461644f73c6d68bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_f3b9de56cb5a0b6fc14d1adc1b7d1965142091a145545fe98bcb1d6e219a7cb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3b9de56cb5a0b6fc14d1adc1b7d1965142091a145545fe98bcb1d6e219a7cb0->enter($__internal_f3b9de56cb5a0b6fc14d1adc1b7d1965142091a145545fe98bcb1d6e219a7cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_f3b9de56cb5a0b6fc14d1adc1b7d1965142091a145545fe98bcb1d6e219a7cb0->leave($__internal_f3b9de56cb5a0b6fc14d1adc1b7d1965142091a145545fe98bcb1d6e219a7cb0_prof);

        
        $__internal_94ae6279e6ba139a63ca0f6a7ba073133f57b48b78efeff461644f73c6d68bfa->leave($__internal_94ae6279e6ba139a63ca0f6a7ba073133f57b48b78efeff461644f73c6d68bfa_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_e126a8e68aed5b571a58435a563b0e67bb8781a0a3a8c98b2ac42a0adc92d607 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e126a8e68aed5b571a58435a563b0e67bb8781a0a3a8c98b2ac42a0adc92d607->enter($__internal_e126a8e68aed5b571a58435a563b0e67bb8781a0a3a8c98b2ac42a0adc92d607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_f53f585ae8a024bc784fcbfc5201a7ddc438bebb4accc79f1a98fbf1741214b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f53f585ae8a024bc784fcbfc5201a7ddc438bebb4accc79f1a98fbf1741214b5->enter($__internal_f53f585ae8a024bc784fcbfc5201a7ddc438bebb4accc79f1a98fbf1741214b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_f53f585ae8a024bc784fcbfc5201a7ddc438bebb4accc79f1a98fbf1741214b5->leave($__internal_f53f585ae8a024bc784fcbfc5201a7ddc438bebb4accc79f1a98fbf1741214b5_prof);

        
        $__internal_e126a8e68aed5b571a58435a563b0e67bb8781a0a3a8c98b2ac42a0adc92d607->leave($__internal_e126a8e68aed5b571a58435a563b0e67bb8781a0a3a8c98b2ac42a0adc92d607_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_b2b7e96580aaa8f7ca45d5aea8efb066e2105c7aff90786b179f09fb34c81b42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2b7e96580aaa8f7ca45d5aea8efb066e2105c7aff90786b179f09fb34c81b42->enter($__internal_b2b7e96580aaa8f7ca45d5aea8efb066e2105c7aff90786b179f09fb34c81b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_2efce2c78f207e03639ad00379ca52763250320f9283b702b0812681c71b5064 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2efce2c78f207e03639ad00379ca52763250320f9283b702b0812681c71b5064->enter($__internal_2efce2c78f207e03639ad00379ca52763250320f9283b702b0812681c71b5064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_2efce2c78f207e03639ad00379ca52763250320f9283b702b0812681c71b5064->leave($__internal_2efce2c78f207e03639ad00379ca52763250320f9283b702b0812681c71b5064_prof);

        
        $__internal_b2b7e96580aaa8f7ca45d5aea8efb066e2105c7aff90786b179f09fb34c81b42->leave($__internal_b2b7e96580aaa8f7ca45d5aea8efb066e2105c7aff90786b179f09fb34c81b42_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_5f1f1e92cb3cbc966a3fb947a1d2c58b51c518de7cc0d9937b3547449dd67732 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f1f1e92cb3cbc966a3fb947a1d2c58b51c518de7cc0d9937b3547449dd67732->enter($__internal_5f1f1e92cb3cbc966a3fb947a1d2c58b51c518de7cc0d9937b3547449dd67732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_88c7ad712bfe88e21e8d966b04083d5cb061fd4819977bdc8b318c1745393f8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88c7ad712bfe88e21e8d966b04083d5cb061fd4819977bdc8b318c1745393f8a->enter($__internal_88c7ad712bfe88e21e8d966b04083d5cb061fd4819977bdc8b318c1745393f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_88c7ad712bfe88e21e8d966b04083d5cb061fd4819977bdc8b318c1745393f8a->leave($__internal_88c7ad712bfe88e21e8d966b04083d5cb061fd4819977bdc8b318c1745393f8a_prof);

        
        $__internal_5f1f1e92cb3cbc966a3fb947a1d2c58b51c518de7cc0d9937b3547449dd67732->leave($__internal_5f1f1e92cb3cbc966a3fb947a1d2c58b51c518de7cc0d9937b3547449dd67732_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_2be98ab0a6b47cbb23f77dfe304bc16de846b3e7e1000b839efcdffec13d9d90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2be98ab0a6b47cbb23f77dfe304bc16de846b3e7e1000b839efcdffec13d9d90->enter($__internal_2be98ab0a6b47cbb23f77dfe304bc16de846b3e7e1000b839efcdffec13d9d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_4990f8a1879973b2ed39ae4c93a31d2efea191157985e1c5196c62a214603c42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4990f8a1879973b2ed39ae4c93a31d2efea191157985e1c5196c62a214603c42->enter($__internal_4990f8a1879973b2ed39ae4c93a31d2efea191157985e1c5196c62a214603c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_4990f8a1879973b2ed39ae4c93a31d2efea191157985e1c5196c62a214603c42->leave($__internal_4990f8a1879973b2ed39ae4c93a31d2efea191157985e1c5196c62a214603c42_prof);

        
        $__internal_2be98ab0a6b47cbb23f77dfe304bc16de846b3e7e1000b839efcdffec13d9d90->leave($__internal_2be98ab0a6b47cbb23f77dfe304bc16de846b3e7e1000b839efcdffec13d9d90_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_3b5687799c9b81a27e569db95c39d9bf43cb15f0b6a7336ef05b7550793b3a33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b5687799c9b81a27e569db95c39d9bf43cb15f0b6a7336ef05b7550793b3a33->enter($__internal_3b5687799c9b81a27e569db95c39d9bf43cb15f0b6a7336ef05b7550793b3a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_ba0b47dc4cadc5a563a6c5a69e4aa5b45069a97ac2c6cfa067ec17e47b2b8230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba0b47dc4cadc5a563a6c5a69e4aa5b45069a97ac2c6cfa067ec17e47b2b8230->enter($__internal_ba0b47dc4cadc5a563a6c5a69e4aa5b45069a97ac2c6cfa067ec17e47b2b8230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ba0b47dc4cadc5a563a6c5a69e4aa5b45069a97ac2c6cfa067ec17e47b2b8230->leave($__internal_ba0b47dc4cadc5a563a6c5a69e4aa5b45069a97ac2c6cfa067ec17e47b2b8230_prof);

        
        $__internal_3b5687799c9b81a27e569db95c39d9bf43cb15f0b6a7336ef05b7550793b3a33->leave($__internal_3b5687799c9b81a27e569db95c39d9bf43cb15f0b6a7336ef05b7550793b3a33_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_c8e655d4373d3e8d561ba488be1e77c049435b063587aacdcfebdc8dd0cf385b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8e655d4373d3e8d561ba488be1e77c049435b063587aacdcfebdc8dd0cf385b->enter($__internal_c8e655d4373d3e8d561ba488be1e77c049435b063587aacdcfebdc8dd0cf385b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_5086fcb8a1ba1e1bbb4ef5f358c65c997c7da9b2550d2b8832152fb1407000c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5086fcb8a1ba1e1bbb4ef5f358c65c997c7da9b2550d2b8832152fb1407000c5->enter($__internal_5086fcb8a1ba1e1bbb4ef5f358c65c997c7da9b2550d2b8832152fb1407000c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_5086fcb8a1ba1e1bbb4ef5f358c65c997c7da9b2550d2b8832152fb1407000c5->leave($__internal_5086fcb8a1ba1e1bbb4ef5f358c65c997c7da9b2550d2b8832152fb1407000c5_prof);

        
        $__internal_c8e655d4373d3e8d561ba488be1e77c049435b063587aacdcfebdc8dd0cf385b->leave($__internal_c8e655d4373d3e8d561ba488be1e77c049435b063587aacdcfebdc8dd0cf385b_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_4b64bcd9fa57084f44f5773df5960744926ce15a660e4e31ce5ff771ceaa8b04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b64bcd9fa57084f44f5773df5960744926ce15a660e4e31ce5ff771ceaa8b04->enter($__internal_4b64bcd9fa57084f44f5773df5960744926ce15a660e4e31ce5ff771ceaa8b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_4ce3d6ab95c7c1309767604695f43903fbcabeb55b1b4b60f570110f2b02f88f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ce3d6ab95c7c1309767604695f43903fbcabeb55b1b4b60f570110f2b02f88f->enter($__internal_4ce3d6ab95c7c1309767604695f43903fbcabeb55b1b4b60f570110f2b02f88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_4ce3d6ab95c7c1309767604695f43903fbcabeb55b1b4b60f570110f2b02f88f->leave($__internal_4ce3d6ab95c7c1309767604695f43903fbcabeb55b1b4b60f570110f2b02f88f_prof);

        
        $__internal_4b64bcd9fa57084f44f5773df5960744926ce15a660e4e31ce5ff771ceaa8b04->leave($__internal_4b64bcd9fa57084f44f5773df5960744926ce15a660e4e31ce5ff771ceaa8b04_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_4ec212329bb41a584a78ba1d223cd76f0bc97303f612350fbfe49b122825c2df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ec212329bb41a584a78ba1d223cd76f0bc97303f612350fbfe49b122825c2df->enter($__internal_4ec212329bb41a584a78ba1d223cd76f0bc97303f612350fbfe49b122825c2df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_509d14f3c702f2e8e04f6e2cf09eb02439f73aea09a8b03aceb416c7c8886e81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_509d14f3c702f2e8e04f6e2cf09eb02439f73aea09a8b03aceb416c7c8886e81->enter($__internal_509d14f3c702f2e8e04f6e2cf09eb02439f73aea09a8b03aceb416c7c8886e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_509d14f3c702f2e8e04f6e2cf09eb02439f73aea09a8b03aceb416c7c8886e81->leave($__internal_509d14f3c702f2e8e04f6e2cf09eb02439f73aea09a8b03aceb416c7c8886e81_prof);

        
        $__internal_4ec212329bb41a584a78ba1d223cd76f0bc97303f612350fbfe49b122825c2df->leave($__internal_4ec212329bb41a584a78ba1d223cd76f0bc97303f612350fbfe49b122825c2df_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_7a2df9273f5955e6d971c1627ce6d67a610648f5e54e02baa86edf524e8021fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a2df9273f5955e6d971c1627ce6d67a610648f5e54e02baa86edf524e8021fd->enter($__internal_7a2df9273f5955e6d971c1627ce6d67a610648f5e54e02baa86edf524e8021fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_b340d35e9d5c5a90f74da10d5aa227859c4985ca9e1aa25cf60c5009d170df25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b340d35e9d5c5a90f74da10d5aa227859c4985ca9e1aa25cf60c5009d170df25->enter($__internal_b340d35e9d5c5a90f74da10d5aa227859c4985ca9e1aa25cf60c5009d170df25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_b340d35e9d5c5a90f74da10d5aa227859c4985ca9e1aa25cf60c5009d170df25->leave($__internal_b340d35e9d5c5a90f74da10d5aa227859c4985ca9e1aa25cf60c5009d170df25_prof);

        
        $__internal_7a2df9273f5955e6d971c1627ce6d67a610648f5e54e02baa86edf524e8021fd->leave($__internal_7a2df9273f5955e6d971c1627ce6d67a610648f5e54e02baa86edf524e8021fd_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_6f505b0c64f10c7db7f9ee2ebdb968880d1cccdffc6847480bcbb53c6ca90fc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f505b0c64f10c7db7f9ee2ebdb968880d1cccdffc6847480bcbb53c6ca90fc9->enter($__internal_6f505b0c64f10c7db7f9ee2ebdb968880d1cccdffc6847480bcbb53c6ca90fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_1a91321b01dca500061518ee44b94b1e0a9db37ee47e133c5818d11787d63331 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a91321b01dca500061518ee44b94b1e0a9db37ee47e133c5818d11787d63331->enter($__internal_1a91321b01dca500061518ee44b94b1e0a9db37ee47e133c5818d11787d63331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_1a91321b01dca500061518ee44b94b1e0a9db37ee47e133c5818d11787d63331->leave($__internal_1a91321b01dca500061518ee44b94b1e0a9db37ee47e133c5818d11787d63331_prof);

        
        $__internal_6f505b0c64f10c7db7f9ee2ebdb968880d1cccdffc6847480bcbb53c6ca90fc9->leave($__internal_6f505b0c64f10c7db7f9ee2ebdb968880d1cccdffc6847480bcbb53c6ca90fc9_prof);

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
", "bootstrap_3_layout.html.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
