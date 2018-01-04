<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_3c0269eadd0650535aaed83a26dc9e2aa2e6e00b4939476107405516ec04d8a7 extends Twig_Template
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
        $__internal_e37166d545e0b8b499adaa78efab93947af2b93fc7b428112b0ef13c9c42882a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e37166d545e0b8b499adaa78efab93947af2b93fc7b428112b0ef13c9c42882a->enter($__internal_e37166d545e0b8b499adaa78efab93947af2b93fc7b428112b0ef13c9c42882a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_678b769bc919a474a70959e5fe46d4def523da906523d74e9585e55e6f9f6d7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_678b769bc919a474a70959e5fe46d4def523da906523d74e9585e55e6f9f6d7c->enter($__internal_678b769bc919a474a70959e5fe46d4def523da906523d74e9585e55e6f9f6d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_e37166d545e0b8b499adaa78efab93947af2b93fc7b428112b0ef13c9c42882a->leave($__internal_e37166d545e0b8b499adaa78efab93947af2b93fc7b428112b0ef13c9c42882a_prof);

        
        $__internal_678b769bc919a474a70959e5fe46d4def523da906523d74e9585e55e6f9f6d7c->leave($__internal_678b769bc919a474a70959e5fe46d4def523da906523d74e9585e55e6f9f6d7c_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_9c9dacf874c4fb6c00bc2bc2a5b875f694e3e23e3e12b808d66085343dc24b6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c9dacf874c4fb6c00bc2bc2a5b875f694e3e23e3e12b808d66085343dc24b6c->enter($__internal_9c9dacf874c4fb6c00bc2bc2a5b875f694e3e23e3e12b808d66085343dc24b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_b7254a9d36e090d21d86a8053117e70e9598dac1ee3263bc172c2cf3e7e92b0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7254a9d36e090d21d86a8053117e70e9598dac1ee3263bc172c2cf3e7e92b0e->enter($__internal_b7254a9d36e090d21d86a8053117e70e9598dac1ee3263bc172c2cf3e7e92b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_b7254a9d36e090d21d86a8053117e70e9598dac1ee3263bc172c2cf3e7e92b0e->leave($__internal_b7254a9d36e090d21d86a8053117e70e9598dac1ee3263bc172c2cf3e7e92b0e_prof);

        
        $__internal_9c9dacf874c4fb6c00bc2bc2a5b875f694e3e23e3e12b808d66085343dc24b6c->leave($__internal_9c9dacf874c4fb6c00bc2bc2a5b875f694e3e23e3e12b808d66085343dc24b6c_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_0b5ea120a0113240cc4b915215458fe3c9f3ef68b890a4fc8551957af9ae91b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b5ea120a0113240cc4b915215458fe3c9f3ef68b890a4fc8551957af9ae91b7->enter($__internal_0b5ea120a0113240cc4b915215458fe3c9f3ef68b890a4fc8551957af9ae91b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_76e69681dc99b8d167cbd63f4ef3857ef39c8823de58a61c397cbf0cbe2f0994 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76e69681dc99b8d167cbd63f4ef3857ef39c8823de58a61c397cbf0cbe2f0994->enter($__internal_76e69681dc99b8d167cbd63f4ef3857ef39c8823de58a61c397cbf0cbe2f0994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_76e69681dc99b8d167cbd63f4ef3857ef39c8823de58a61c397cbf0cbe2f0994->leave($__internal_76e69681dc99b8d167cbd63f4ef3857ef39c8823de58a61c397cbf0cbe2f0994_prof);

        
        $__internal_0b5ea120a0113240cc4b915215458fe3c9f3ef68b890a4fc8551957af9ae91b7->leave($__internal_0b5ea120a0113240cc4b915215458fe3c9f3ef68b890a4fc8551957af9ae91b7_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_2019dbacf4b29168a422871b97c9351ea179508731067aeb83ce2727fa73bff2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2019dbacf4b29168a422871b97c9351ea179508731067aeb83ce2727fa73bff2->enter($__internal_2019dbacf4b29168a422871b97c9351ea179508731067aeb83ce2727fa73bff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_a30b9c1589e42ebc94f9c4a94189ce6863952059cc404a86b7c877633e899202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a30b9c1589e42ebc94f9c4a94189ce6863952059cc404a86b7c877633e899202->enter($__internal_a30b9c1589e42ebc94f9c4a94189ce6863952059cc404a86b7c877633e899202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_a30b9c1589e42ebc94f9c4a94189ce6863952059cc404a86b7c877633e899202->leave($__internal_a30b9c1589e42ebc94f9c4a94189ce6863952059cc404a86b7c877633e899202_prof);

        
        $__internal_2019dbacf4b29168a422871b97c9351ea179508731067aeb83ce2727fa73bff2->leave($__internal_2019dbacf4b29168a422871b97c9351ea179508731067aeb83ce2727fa73bff2_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_b86ec810a22bc3aa765ad8a9ecb1da566e7cda225a0ab606f49cfa6f1c50ebf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b86ec810a22bc3aa765ad8a9ecb1da566e7cda225a0ab606f49cfa6f1c50ebf1->enter($__internal_b86ec810a22bc3aa765ad8a9ecb1da566e7cda225a0ab606f49cfa6f1c50ebf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_8c9bba3ada3b3cc88223aee338a96fb4b0fb35c5302904011b6f7e3c80182004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c9bba3ada3b3cc88223aee338a96fb4b0fb35c5302904011b6f7e3c80182004->enter($__internal_8c9bba3ada3b3cc88223aee338a96fb4b0fb35c5302904011b6f7e3c80182004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_8c9bba3ada3b3cc88223aee338a96fb4b0fb35c5302904011b6f7e3c80182004->leave($__internal_8c9bba3ada3b3cc88223aee338a96fb4b0fb35c5302904011b6f7e3c80182004_prof);

        
        $__internal_b86ec810a22bc3aa765ad8a9ecb1da566e7cda225a0ab606f49cfa6f1c50ebf1->leave($__internal_b86ec810a22bc3aa765ad8a9ecb1da566e7cda225a0ab606f49cfa6f1c50ebf1_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_493700f42177059f5e7d9ec687e88eed0056964c00eade6c5756b63fa2ff2dd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_493700f42177059f5e7d9ec687e88eed0056964c00eade6c5756b63fa2ff2dd8->enter($__internal_493700f42177059f5e7d9ec687e88eed0056964c00eade6c5756b63fa2ff2dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_9f39f96096a890917637a4298a187eaf393dc120e20813e8b39e606f202bbcff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f39f96096a890917637a4298a187eaf393dc120e20813e8b39e606f202bbcff->enter($__internal_9f39f96096a890917637a4298a187eaf393dc120e20813e8b39e606f202bbcff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_9f39f96096a890917637a4298a187eaf393dc120e20813e8b39e606f202bbcff->leave($__internal_9f39f96096a890917637a4298a187eaf393dc120e20813e8b39e606f202bbcff_prof);

        
        $__internal_493700f42177059f5e7d9ec687e88eed0056964c00eade6c5756b63fa2ff2dd8->leave($__internal_493700f42177059f5e7d9ec687e88eed0056964c00eade6c5756b63fa2ff2dd8_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_85e41961f6ec9c572157d9d83d182d433e396078799e917963463881e617ddc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85e41961f6ec9c572157d9d83d182d433e396078799e917963463881e617ddc9->enter($__internal_85e41961f6ec9c572157d9d83d182d433e396078799e917963463881e617ddc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_e905f348640cdb8a753298ca3d67c7b9fba496686ca3e5680c8db32267b5fc5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e905f348640cdb8a753298ca3d67c7b9fba496686ca3e5680c8db32267b5fc5c->enter($__internal_e905f348640cdb8a753298ca3d67c7b9fba496686ca3e5680c8db32267b5fc5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_e905f348640cdb8a753298ca3d67c7b9fba496686ca3e5680c8db32267b5fc5c->leave($__internal_e905f348640cdb8a753298ca3d67c7b9fba496686ca3e5680c8db32267b5fc5c_prof);

        
        $__internal_85e41961f6ec9c572157d9d83d182d433e396078799e917963463881e617ddc9->leave($__internal_85e41961f6ec9c572157d9d83d182d433e396078799e917963463881e617ddc9_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_58ebb2754d89d2d9e19cd7dcc8ed5b3071e7386d62f4c432b79b7b43b6bfbfd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58ebb2754d89d2d9e19cd7dcc8ed5b3071e7386d62f4c432b79b7b43b6bfbfd5->enter($__internal_58ebb2754d89d2d9e19cd7dcc8ed5b3071e7386d62f4c432b79b7b43b6bfbfd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_7fe0f857e621b58e242c1e2baa3c20f1b6609cd3d41a72e7a2c4ce8faa2f7f0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fe0f857e621b58e242c1e2baa3c20f1b6609cd3d41a72e7a2c4ce8faa2f7f0b->enter($__internal_7fe0f857e621b58e242c1e2baa3c20f1b6609cd3d41a72e7a2c4ce8faa2f7f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_7fe0f857e621b58e242c1e2baa3c20f1b6609cd3d41a72e7a2c4ce8faa2f7f0b->leave($__internal_7fe0f857e621b58e242c1e2baa3c20f1b6609cd3d41a72e7a2c4ce8faa2f7f0b_prof);

        
        $__internal_58ebb2754d89d2d9e19cd7dcc8ed5b3071e7386d62f4c432b79b7b43b6bfbfd5->leave($__internal_58ebb2754d89d2d9e19cd7dcc8ed5b3071e7386d62f4c432b79b7b43b6bfbfd5_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_6aae2aabd2471dd011b7cf7f9acf47d16a9b0defa63a284c727ab37b189c67d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6aae2aabd2471dd011b7cf7f9acf47d16a9b0defa63a284c727ab37b189c67d6->enter($__internal_6aae2aabd2471dd011b7cf7f9acf47d16a9b0defa63a284c727ab37b189c67d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_3b73dc9a428fda56bd035f85806e6ab7bd33b931355d8e26f213c81891e80c16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b73dc9a428fda56bd035f85806e6ab7bd33b931355d8e26f213c81891e80c16->enter($__internal_3b73dc9a428fda56bd035f85806e6ab7bd33b931355d8e26f213c81891e80c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_3b73dc9a428fda56bd035f85806e6ab7bd33b931355d8e26f213c81891e80c16->leave($__internal_3b73dc9a428fda56bd035f85806e6ab7bd33b931355d8e26f213c81891e80c16_prof);

        
        $__internal_6aae2aabd2471dd011b7cf7f9acf47d16a9b0defa63a284c727ab37b189c67d6->leave($__internal_6aae2aabd2471dd011b7cf7f9acf47d16a9b0defa63a284c727ab37b189c67d6_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_bef805bb9928309ff54692686d8ab3cfbc32815590c8459e1bb88c63cdb10276 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bef805bb9928309ff54692686d8ab3cfbc32815590c8459e1bb88c63cdb10276->enter($__internal_bef805bb9928309ff54692686d8ab3cfbc32815590c8459e1bb88c63cdb10276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_322db50a1812e582801c11a9e67d020ed8c22def1fbad9c5efa1427cc4bcdfdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_322db50a1812e582801c11a9e67d020ed8c22def1fbad9c5efa1427cc4bcdfdf->enter($__internal_322db50a1812e582801c11a9e67d020ed8c22def1fbad9c5efa1427cc4bcdfdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_322db50a1812e582801c11a9e67d020ed8c22def1fbad9c5efa1427cc4bcdfdf->leave($__internal_322db50a1812e582801c11a9e67d020ed8c22def1fbad9c5efa1427cc4bcdfdf_prof);

        
        $__internal_bef805bb9928309ff54692686d8ab3cfbc32815590c8459e1bb88c63cdb10276->leave($__internal_bef805bb9928309ff54692686d8ab3cfbc32815590c8459e1bb88c63cdb10276_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_603d93bb19255c641257e8af9f2e59c5dc5f4ff6b7a2406eb5c6367d9ff51357 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_603d93bb19255c641257e8af9f2e59c5dc5f4ff6b7a2406eb5c6367d9ff51357->enter($__internal_603d93bb19255c641257e8af9f2e59c5dc5f4ff6b7a2406eb5c6367d9ff51357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_5a4b5b696e17276727d5b2d171ab308779da4a1c0d2f1c7b22106fb487154e2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a4b5b696e17276727d5b2d171ab308779da4a1c0d2f1c7b22106fb487154e2d->enter($__internal_5a4b5b696e17276727d5b2d171ab308779da4a1c0d2f1c7b22106fb487154e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_5a4b5b696e17276727d5b2d171ab308779da4a1c0d2f1c7b22106fb487154e2d->leave($__internal_5a4b5b696e17276727d5b2d171ab308779da4a1c0d2f1c7b22106fb487154e2d_prof);

        
        $__internal_603d93bb19255c641257e8af9f2e59c5dc5f4ff6b7a2406eb5c6367d9ff51357->leave($__internal_603d93bb19255c641257e8af9f2e59c5dc5f4ff6b7a2406eb5c6367d9ff51357_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_0c1e181f879a08a6a20a4b95d0c56aa259b68462314a14213f1c68241ccaacd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c1e181f879a08a6a20a4b95d0c56aa259b68462314a14213f1c68241ccaacd8->enter($__internal_0c1e181f879a08a6a20a4b95d0c56aa259b68462314a14213f1c68241ccaacd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_9bbc100841f865610d00c5c69803e3362caa9d21866129b8bff22fcd48294273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bbc100841f865610d00c5c69803e3362caa9d21866129b8bff22fcd48294273->enter($__internal_9bbc100841f865610d00c5c69803e3362caa9d21866129b8bff22fcd48294273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_9bbc100841f865610d00c5c69803e3362caa9d21866129b8bff22fcd48294273->leave($__internal_9bbc100841f865610d00c5c69803e3362caa9d21866129b8bff22fcd48294273_prof);

        
        $__internal_0c1e181f879a08a6a20a4b95d0c56aa259b68462314a14213f1c68241ccaacd8->leave($__internal_0c1e181f879a08a6a20a4b95d0c56aa259b68462314a14213f1c68241ccaacd8_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_4698a91994383aa3edaf6614acdae4f92ad26183bc64715424ccdccff5ec6d4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4698a91994383aa3edaf6614acdae4f92ad26183bc64715424ccdccff5ec6d4d->enter($__internal_4698a91994383aa3edaf6614acdae4f92ad26183bc64715424ccdccff5ec6d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_ef51448678a307a9551cb38085d119b9f48ac575b98902ae59c9c29dd144e014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef51448678a307a9551cb38085d119b9f48ac575b98902ae59c9c29dd144e014->enter($__internal_ef51448678a307a9551cb38085d119b9f48ac575b98902ae59c9c29dd144e014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ef51448678a307a9551cb38085d119b9f48ac575b98902ae59c9c29dd144e014->leave($__internal_ef51448678a307a9551cb38085d119b9f48ac575b98902ae59c9c29dd144e014_prof);

        
        $__internal_4698a91994383aa3edaf6614acdae4f92ad26183bc64715424ccdccff5ec6d4d->leave($__internal_4698a91994383aa3edaf6614acdae4f92ad26183bc64715424ccdccff5ec6d4d_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_5a694a53c922d1b1b013d07e04ef530e9037236e8718fb95b092db971aa391d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a694a53c922d1b1b013d07e04ef530e9037236e8718fb95b092db971aa391d7->enter($__internal_5a694a53c922d1b1b013d07e04ef530e9037236e8718fb95b092db971aa391d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_9655ff9e404b4ceebd62346c88c5d9ad48b8cca9bb47878eb859853c1e1bfb47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9655ff9e404b4ceebd62346c88c5d9ad48b8cca9bb47878eb859853c1e1bfb47->enter($__internal_9655ff9e404b4ceebd62346c88c5d9ad48b8cca9bb47878eb859853c1e1bfb47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_9655ff9e404b4ceebd62346c88c5d9ad48b8cca9bb47878eb859853c1e1bfb47->leave($__internal_9655ff9e404b4ceebd62346c88c5d9ad48b8cca9bb47878eb859853c1e1bfb47_prof);

        
        $__internal_5a694a53c922d1b1b013d07e04ef530e9037236e8718fb95b092db971aa391d7->leave($__internal_5a694a53c922d1b1b013d07e04ef530e9037236e8718fb95b092db971aa391d7_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_0b9cad4034fbd7f352d0ced5c2a345b6bc2be8ab61d77d6fa640e15543eba445 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b9cad4034fbd7f352d0ced5c2a345b6bc2be8ab61d77d6fa640e15543eba445->enter($__internal_0b9cad4034fbd7f352d0ced5c2a345b6bc2be8ab61d77d6fa640e15543eba445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_eb79bc75f5d4e6585ea3e38bc66d640cea83933a53e592875528cec90b5500a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb79bc75f5d4e6585ea3e38bc66d640cea83933a53e592875528cec90b5500a2->enter($__internal_eb79bc75f5d4e6585ea3e38bc66d640cea83933a53e592875528cec90b5500a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_eb79bc75f5d4e6585ea3e38bc66d640cea83933a53e592875528cec90b5500a2->leave($__internal_eb79bc75f5d4e6585ea3e38bc66d640cea83933a53e592875528cec90b5500a2_prof);

        
        $__internal_0b9cad4034fbd7f352d0ced5c2a345b6bc2be8ab61d77d6fa640e15543eba445->leave($__internal_0b9cad4034fbd7f352d0ced5c2a345b6bc2be8ab61d77d6fa640e15543eba445_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_c95080ebc10f3a7495f81e94771bf841feaad5212a71b19d7d06f8d8abb91500 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c95080ebc10f3a7495f81e94771bf841feaad5212a71b19d7d06f8d8abb91500->enter($__internal_c95080ebc10f3a7495f81e94771bf841feaad5212a71b19d7d06f8d8abb91500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_16cf61d52d5ff62ff952d6451ffc63ced184185acccfbf7e4ec4004091d150bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16cf61d52d5ff62ff952d6451ffc63ced184185acccfbf7e4ec4004091d150bd->enter($__internal_16cf61d52d5ff62ff952d6451ffc63ced184185acccfbf7e4ec4004091d150bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_16cf61d52d5ff62ff952d6451ffc63ced184185acccfbf7e4ec4004091d150bd->leave($__internal_16cf61d52d5ff62ff952d6451ffc63ced184185acccfbf7e4ec4004091d150bd_prof);

        
        $__internal_c95080ebc10f3a7495f81e94771bf841feaad5212a71b19d7d06f8d8abb91500->leave($__internal_c95080ebc10f3a7495f81e94771bf841feaad5212a71b19d7d06f8d8abb91500_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_35b244a83a4dfa6edb239049c1ae75382f3b71368ea0651e7770d74d2b2fc992 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35b244a83a4dfa6edb239049c1ae75382f3b71368ea0651e7770d74d2b2fc992->enter($__internal_35b244a83a4dfa6edb239049c1ae75382f3b71368ea0651e7770d74d2b2fc992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_a8e2901d9df1e0989ae4c63b1dc764c75d958944c602d8ee86a6ae85dd5d06eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8e2901d9df1e0989ae4c63b1dc764c75d958944c602d8ee86a6ae85dd5d06eb->enter($__internal_a8e2901d9df1e0989ae4c63b1dc764c75d958944c602d8ee86a6ae85dd5d06eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_a8e2901d9df1e0989ae4c63b1dc764c75d958944c602d8ee86a6ae85dd5d06eb->leave($__internal_a8e2901d9df1e0989ae4c63b1dc764c75d958944c602d8ee86a6ae85dd5d06eb_prof);

        
        $__internal_35b244a83a4dfa6edb239049c1ae75382f3b71368ea0651e7770d74d2b2fc992->leave($__internal_35b244a83a4dfa6edb239049c1ae75382f3b71368ea0651e7770d74d2b2fc992_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_c193e78b236f2c17d4c0cbb9543726e01b2261e1b3f67d7179b519d3f7cdc94f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c193e78b236f2c17d4c0cbb9543726e01b2261e1b3f67d7179b519d3f7cdc94f->enter($__internal_c193e78b236f2c17d4c0cbb9543726e01b2261e1b3f67d7179b519d3f7cdc94f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_291164571775e2bf090d39ec5eaf5b1b6f15e917bc3ebca4eefe90d1a123555b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_291164571775e2bf090d39ec5eaf5b1b6f15e917bc3ebca4eefe90d1a123555b->enter($__internal_291164571775e2bf090d39ec5eaf5b1b6f15e917bc3ebca4eefe90d1a123555b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_291164571775e2bf090d39ec5eaf5b1b6f15e917bc3ebca4eefe90d1a123555b->leave($__internal_291164571775e2bf090d39ec5eaf5b1b6f15e917bc3ebca4eefe90d1a123555b_prof);

        
        $__internal_c193e78b236f2c17d4c0cbb9543726e01b2261e1b3f67d7179b519d3f7cdc94f->leave($__internal_c193e78b236f2c17d4c0cbb9543726e01b2261e1b3f67d7179b519d3f7cdc94f_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_01284f3e6e46d99f47517167c689a4abcc5e3c86254d052ef542d2fd211f5489 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01284f3e6e46d99f47517167c689a4abcc5e3c86254d052ef542d2fd211f5489->enter($__internal_01284f3e6e46d99f47517167c689a4abcc5e3c86254d052ef542d2fd211f5489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_680ac6fdc4035090e6946c36d111133999466be868b5b3f03c9452e134e8e73e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_680ac6fdc4035090e6946c36d111133999466be868b5b3f03c9452e134e8e73e->enter($__internal_680ac6fdc4035090e6946c36d111133999466be868b5b3f03c9452e134e8e73e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_680ac6fdc4035090e6946c36d111133999466be868b5b3f03c9452e134e8e73e->leave($__internal_680ac6fdc4035090e6946c36d111133999466be868b5b3f03c9452e134e8e73e_prof);

        
        $__internal_01284f3e6e46d99f47517167c689a4abcc5e3c86254d052ef542d2fd211f5489->leave($__internal_01284f3e6e46d99f47517167c689a4abcc5e3c86254d052ef542d2fd211f5489_prof);

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
