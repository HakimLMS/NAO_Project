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
        $__internal_f88102c63df419f8d14521ac91bfbbd26112124e9047658cec10156dc3757f17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f88102c63df419f8d14521ac91bfbbd26112124e9047658cec10156dc3757f17->enter($__internal_f88102c63df419f8d14521ac91bfbbd26112124e9047658cec10156dc3757f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_56710270421b173c3e0f8331cbcca216dd3f72b5aafd56b61b755b9caf117863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56710270421b173c3e0f8331cbcca216dd3f72b5aafd56b61b755b9caf117863->enter($__internal_56710270421b173c3e0f8331cbcca216dd3f72b5aafd56b61b755b9caf117863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_f88102c63df419f8d14521ac91bfbbd26112124e9047658cec10156dc3757f17->leave($__internal_f88102c63df419f8d14521ac91bfbbd26112124e9047658cec10156dc3757f17_prof);

        
        $__internal_56710270421b173c3e0f8331cbcca216dd3f72b5aafd56b61b755b9caf117863->leave($__internal_56710270421b173c3e0f8331cbcca216dd3f72b5aafd56b61b755b9caf117863_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_cea63caa770b56a6ac601557ec92a632e8661bffe4e89f4766fe7726752b2675 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cea63caa770b56a6ac601557ec92a632e8661bffe4e89f4766fe7726752b2675->enter($__internal_cea63caa770b56a6ac601557ec92a632e8661bffe4e89f4766fe7726752b2675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_ab3b45e84a77c7a74de90eaf832d2ac46a45dd8bb73c1704af1aaf0a4606cdc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab3b45e84a77c7a74de90eaf832d2ac46a45dd8bb73c1704af1aaf0a4606cdc7->enter($__internal_ab3b45e84a77c7a74de90eaf832d2ac46a45dd8bb73c1704af1aaf0a4606cdc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_ab3b45e84a77c7a74de90eaf832d2ac46a45dd8bb73c1704af1aaf0a4606cdc7->leave($__internal_ab3b45e84a77c7a74de90eaf832d2ac46a45dd8bb73c1704af1aaf0a4606cdc7_prof);

        
        $__internal_cea63caa770b56a6ac601557ec92a632e8661bffe4e89f4766fe7726752b2675->leave($__internal_cea63caa770b56a6ac601557ec92a632e8661bffe4e89f4766fe7726752b2675_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_e1f5f5b2c309610309fdbd9e5349b66ce78c4b1d3517c51b3920124b66422a44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1f5f5b2c309610309fdbd9e5349b66ce78c4b1d3517c51b3920124b66422a44->enter($__internal_e1f5f5b2c309610309fdbd9e5349b66ce78c4b1d3517c51b3920124b66422a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_0e1a9ec0e47362c772533fa0a20d595f2e24ec5a389dc94d8d689fee2400cf7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e1a9ec0e47362c772533fa0a20d595f2e24ec5a389dc94d8d689fee2400cf7d->enter($__internal_0e1a9ec0e47362c772533fa0a20d595f2e24ec5a389dc94d8d689fee2400cf7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_0e1a9ec0e47362c772533fa0a20d595f2e24ec5a389dc94d8d689fee2400cf7d->leave($__internal_0e1a9ec0e47362c772533fa0a20d595f2e24ec5a389dc94d8d689fee2400cf7d_prof);

        
        $__internal_e1f5f5b2c309610309fdbd9e5349b66ce78c4b1d3517c51b3920124b66422a44->leave($__internal_e1f5f5b2c309610309fdbd9e5349b66ce78c4b1d3517c51b3920124b66422a44_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_ada9be35f06c2371e9e58df44490d4e3c5ddb5d5cb8e7c88785fefc0f66da891 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ada9be35f06c2371e9e58df44490d4e3c5ddb5d5cb8e7c88785fefc0f66da891->enter($__internal_ada9be35f06c2371e9e58df44490d4e3c5ddb5d5cb8e7c88785fefc0f66da891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_15626d9b8cc26429b3d144808260c26d51c94e286e4094d08a1cf000c290a512 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15626d9b8cc26429b3d144808260c26d51c94e286e4094d08a1cf000c290a512->enter($__internal_15626d9b8cc26429b3d144808260c26d51c94e286e4094d08a1cf000c290a512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_15626d9b8cc26429b3d144808260c26d51c94e286e4094d08a1cf000c290a512->leave($__internal_15626d9b8cc26429b3d144808260c26d51c94e286e4094d08a1cf000c290a512_prof);

        
        $__internal_ada9be35f06c2371e9e58df44490d4e3c5ddb5d5cb8e7c88785fefc0f66da891->leave($__internal_ada9be35f06c2371e9e58df44490d4e3c5ddb5d5cb8e7c88785fefc0f66da891_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_f7163c9020fe31d7764d6a0ef9a1013c11217e0916d4753664ba2ac0e7f67bce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7163c9020fe31d7764d6a0ef9a1013c11217e0916d4753664ba2ac0e7f67bce->enter($__internal_f7163c9020fe31d7764d6a0ef9a1013c11217e0916d4753664ba2ac0e7f67bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_b78eb5e0054152befdee3bd366b04e0a7c4016074324d15b434bb1e874ef66df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b78eb5e0054152befdee3bd366b04e0a7c4016074324d15b434bb1e874ef66df->enter($__internal_b78eb5e0054152befdee3bd366b04e0a7c4016074324d15b434bb1e874ef66df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_b78eb5e0054152befdee3bd366b04e0a7c4016074324d15b434bb1e874ef66df->leave($__internal_b78eb5e0054152befdee3bd366b04e0a7c4016074324d15b434bb1e874ef66df_prof);

        
        $__internal_f7163c9020fe31d7764d6a0ef9a1013c11217e0916d4753664ba2ac0e7f67bce->leave($__internal_f7163c9020fe31d7764d6a0ef9a1013c11217e0916d4753664ba2ac0e7f67bce_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_37beb85a5810fac578ccb4201d88670bf2fc7f821851ba0232d416307e90bec0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37beb85a5810fac578ccb4201d88670bf2fc7f821851ba0232d416307e90bec0->enter($__internal_37beb85a5810fac578ccb4201d88670bf2fc7f821851ba0232d416307e90bec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_ecd20db2aa79549134a7f20642e96478179d9b53fe08966818b7481ce8c0bd16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecd20db2aa79549134a7f20642e96478179d9b53fe08966818b7481ce8c0bd16->enter($__internal_ecd20db2aa79549134a7f20642e96478179d9b53fe08966818b7481ce8c0bd16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_ecd20db2aa79549134a7f20642e96478179d9b53fe08966818b7481ce8c0bd16->leave($__internal_ecd20db2aa79549134a7f20642e96478179d9b53fe08966818b7481ce8c0bd16_prof);

        
        $__internal_37beb85a5810fac578ccb4201d88670bf2fc7f821851ba0232d416307e90bec0->leave($__internal_37beb85a5810fac578ccb4201d88670bf2fc7f821851ba0232d416307e90bec0_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_af792769407c7235207505158023284134a8e59e738b2ecd4ec0bcee2a6cc2f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af792769407c7235207505158023284134a8e59e738b2ecd4ec0bcee2a6cc2f2->enter($__internal_af792769407c7235207505158023284134a8e59e738b2ecd4ec0bcee2a6cc2f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_b614edeb4e6bc35f35fda84b3787aad7f73d8937dc258327213ba0866a66f6f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b614edeb4e6bc35f35fda84b3787aad7f73d8937dc258327213ba0866a66f6f5->enter($__internal_b614edeb4e6bc35f35fda84b3787aad7f73d8937dc258327213ba0866a66f6f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_b614edeb4e6bc35f35fda84b3787aad7f73d8937dc258327213ba0866a66f6f5->leave($__internal_b614edeb4e6bc35f35fda84b3787aad7f73d8937dc258327213ba0866a66f6f5_prof);

        
        $__internal_af792769407c7235207505158023284134a8e59e738b2ecd4ec0bcee2a6cc2f2->leave($__internal_af792769407c7235207505158023284134a8e59e738b2ecd4ec0bcee2a6cc2f2_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_22d56c4cadb0d061a6095d53ad1b33038612fae060df556923bd1c23ace3be26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22d56c4cadb0d061a6095d53ad1b33038612fae060df556923bd1c23ace3be26->enter($__internal_22d56c4cadb0d061a6095d53ad1b33038612fae060df556923bd1c23ace3be26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_8ead714942c490f85985460127c847adf29c3629d4b2161f107bfd1bf2347519 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ead714942c490f85985460127c847adf29c3629d4b2161f107bfd1bf2347519->enter($__internal_8ead714942c490f85985460127c847adf29c3629d4b2161f107bfd1bf2347519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_8ead714942c490f85985460127c847adf29c3629d4b2161f107bfd1bf2347519->leave($__internal_8ead714942c490f85985460127c847adf29c3629d4b2161f107bfd1bf2347519_prof);

        
        $__internal_22d56c4cadb0d061a6095d53ad1b33038612fae060df556923bd1c23ace3be26->leave($__internal_22d56c4cadb0d061a6095d53ad1b33038612fae060df556923bd1c23ace3be26_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_8769e32cb005b21a6d83243cd6c291e7f7419e74d09fe7cd81b727f433714c4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8769e32cb005b21a6d83243cd6c291e7f7419e74d09fe7cd81b727f433714c4c->enter($__internal_8769e32cb005b21a6d83243cd6c291e7f7419e74d09fe7cd81b727f433714c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_342a7520541f549c9bf7fa3e0a673782b94424d32ed1417cd290f96cd905daf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_342a7520541f549c9bf7fa3e0a673782b94424d32ed1417cd290f96cd905daf1->enter($__internal_342a7520541f549c9bf7fa3e0a673782b94424d32ed1417cd290f96cd905daf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_342a7520541f549c9bf7fa3e0a673782b94424d32ed1417cd290f96cd905daf1->leave($__internal_342a7520541f549c9bf7fa3e0a673782b94424d32ed1417cd290f96cd905daf1_prof);

        
        $__internal_8769e32cb005b21a6d83243cd6c291e7f7419e74d09fe7cd81b727f433714c4c->leave($__internal_8769e32cb005b21a6d83243cd6c291e7f7419e74d09fe7cd81b727f433714c4c_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_22a3e181bd7f6172e0971a93014e64d2970af058f8a660f1f472dac4893c2a03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22a3e181bd7f6172e0971a93014e64d2970af058f8a660f1f472dac4893c2a03->enter($__internal_22a3e181bd7f6172e0971a93014e64d2970af058f8a660f1f472dac4893c2a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_97a1a6db005795a6800c40716346d096a2fe69be30aae4b2b6fa1ce741a3b76c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97a1a6db005795a6800c40716346d096a2fe69be30aae4b2b6fa1ce741a3b76c->enter($__internal_97a1a6db005795a6800c40716346d096a2fe69be30aae4b2b6fa1ce741a3b76c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_97a1a6db005795a6800c40716346d096a2fe69be30aae4b2b6fa1ce741a3b76c->leave($__internal_97a1a6db005795a6800c40716346d096a2fe69be30aae4b2b6fa1ce741a3b76c_prof);

        
        $__internal_22a3e181bd7f6172e0971a93014e64d2970af058f8a660f1f472dac4893c2a03->leave($__internal_22a3e181bd7f6172e0971a93014e64d2970af058f8a660f1f472dac4893c2a03_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_4ebda1cdeeb7b5e25aacb1807b6ca26443562616f20574f01f24f7becc3d5469 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ebda1cdeeb7b5e25aacb1807b6ca26443562616f20574f01f24f7becc3d5469->enter($__internal_4ebda1cdeeb7b5e25aacb1807b6ca26443562616f20574f01f24f7becc3d5469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_c73f636bd5fee13b26d9aa4f6ea819146f70778e876e084796f9195c7572c8e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c73f636bd5fee13b26d9aa4f6ea819146f70778e876e084796f9195c7572c8e8->enter($__internal_c73f636bd5fee13b26d9aa4f6ea819146f70778e876e084796f9195c7572c8e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_c73f636bd5fee13b26d9aa4f6ea819146f70778e876e084796f9195c7572c8e8->leave($__internal_c73f636bd5fee13b26d9aa4f6ea819146f70778e876e084796f9195c7572c8e8_prof);

        
        $__internal_4ebda1cdeeb7b5e25aacb1807b6ca26443562616f20574f01f24f7becc3d5469->leave($__internal_4ebda1cdeeb7b5e25aacb1807b6ca26443562616f20574f01f24f7becc3d5469_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_668a6c5eb7c683077437d05e83601d932835f6a7008a9d92fa9cb10364da28c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_668a6c5eb7c683077437d05e83601d932835f6a7008a9d92fa9cb10364da28c6->enter($__internal_668a6c5eb7c683077437d05e83601d932835f6a7008a9d92fa9cb10364da28c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_243612723a8f73b90a36feb53f06983c9d4cf6041ffed128e786e983194fded4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_243612723a8f73b90a36feb53f06983c9d4cf6041ffed128e786e983194fded4->enter($__internal_243612723a8f73b90a36feb53f06983c9d4cf6041ffed128e786e983194fded4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_243612723a8f73b90a36feb53f06983c9d4cf6041ffed128e786e983194fded4->leave($__internal_243612723a8f73b90a36feb53f06983c9d4cf6041ffed128e786e983194fded4_prof);

        
        $__internal_668a6c5eb7c683077437d05e83601d932835f6a7008a9d92fa9cb10364da28c6->leave($__internal_668a6c5eb7c683077437d05e83601d932835f6a7008a9d92fa9cb10364da28c6_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_75767bbebe45fdc5318c4cff24ee29a33957485b6862fefdb32c539b34dd80f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75767bbebe45fdc5318c4cff24ee29a33957485b6862fefdb32c539b34dd80f0->enter($__internal_75767bbebe45fdc5318c4cff24ee29a33957485b6862fefdb32c539b34dd80f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_74a681bd8a62a0d662870b57b9fd72f91431d5251222c65f02c358fa6ca9562a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74a681bd8a62a0d662870b57b9fd72f91431d5251222c65f02c358fa6ca9562a->enter($__internal_74a681bd8a62a0d662870b57b9fd72f91431d5251222c65f02c358fa6ca9562a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_74a681bd8a62a0d662870b57b9fd72f91431d5251222c65f02c358fa6ca9562a->leave($__internal_74a681bd8a62a0d662870b57b9fd72f91431d5251222c65f02c358fa6ca9562a_prof);

        
        $__internal_75767bbebe45fdc5318c4cff24ee29a33957485b6862fefdb32c539b34dd80f0->leave($__internal_75767bbebe45fdc5318c4cff24ee29a33957485b6862fefdb32c539b34dd80f0_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_44f438d56e8c24562ee420eb39c003ce35f082607fbbe9118d4e85e53e7ef377 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44f438d56e8c24562ee420eb39c003ce35f082607fbbe9118d4e85e53e7ef377->enter($__internal_44f438d56e8c24562ee420eb39c003ce35f082607fbbe9118d4e85e53e7ef377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_9e8544921a6d6d531c3e8a63c3a271642a3f0147d496697f2a70e98da65bdfd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e8544921a6d6d531c3e8a63c3a271642a3f0147d496697f2a70e98da65bdfd6->enter($__internal_9e8544921a6d6d531c3e8a63c3a271642a3f0147d496697f2a70e98da65bdfd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_9e8544921a6d6d531c3e8a63c3a271642a3f0147d496697f2a70e98da65bdfd6->leave($__internal_9e8544921a6d6d531c3e8a63c3a271642a3f0147d496697f2a70e98da65bdfd6_prof);

        
        $__internal_44f438d56e8c24562ee420eb39c003ce35f082607fbbe9118d4e85e53e7ef377->leave($__internal_44f438d56e8c24562ee420eb39c003ce35f082607fbbe9118d4e85e53e7ef377_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_da3dc31f6a3dace8a90fd9164d05d20b639447775d54c2175ce9e5e8076aecfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da3dc31f6a3dace8a90fd9164d05d20b639447775d54c2175ce9e5e8076aecfd->enter($__internal_da3dc31f6a3dace8a90fd9164d05d20b639447775d54c2175ce9e5e8076aecfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_0f456094b36c99f9238ce6a5f7a490a9693c8ecce1104178dd4b287eb15bb995 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f456094b36c99f9238ce6a5f7a490a9693c8ecce1104178dd4b287eb15bb995->enter($__internal_0f456094b36c99f9238ce6a5f7a490a9693c8ecce1104178dd4b287eb15bb995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_0f456094b36c99f9238ce6a5f7a490a9693c8ecce1104178dd4b287eb15bb995->leave($__internal_0f456094b36c99f9238ce6a5f7a490a9693c8ecce1104178dd4b287eb15bb995_prof);

        
        $__internal_da3dc31f6a3dace8a90fd9164d05d20b639447775d54c2175ce9e5e8076aecfd->leave($__internal_da3dc31f6a3dace8a90fd9164d05d20b639447775d54c2175ce9e5e8076aecfd_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_72d208a49f84dc183032ed7d8e0d564385a03c031a9e5bf495cf1b021c476d09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72d208a49f84dc183032ed7d8e0d564385a03c031a9e5bf495cf1b021c476d09->enter($__internal_72d208a49f84dc183032ed7d8e0d564385a03c031a9e5bf495cf1b021c476d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_3cfe073736a3e010581ceae0ad6b2e0ac58fc6daa6f669292a66a0867cc70f5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cfe073736a3e010581ceae0ad6b2e0ac58fc6daa6f669292a66a0867cc70f5c->enter($__internal_3cfe073736a3e010581ceae0ad6b2e0ac58fc6daa6f669292a66a0867cc70f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_3cfe073736a3e010581ceae0ad6b2e0ac58fc6daa6f669292a66a0867cc70f5c->leave($__internal_3cfe073736a3e010581ceae0ad6b2e0ac58fc6daa6f669292a66a0867cc70f5c_prof);

        
        $__internal_72d208a49f84dc183032ed7d8e0d564385a03c031a9e5bf495cf1b021c476d09->leave($__internal_72d208a49f84dc183032ed7d8e0d564385a03c031a9e5bf495cf1b021c476d09_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_6ea13ebc4d8210a7889d6b39abd3ae0a4d897dc043b7e019ccf14fe21a57cf06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ea13ebc4d8210a7889d6b39abd3ae0a4d897dc043b7e019ccf14fe21a57cf06->enter($__internal_6ea13ebc4d8210a7889d6b39abd3ae0a4d897dc043b7e019ccf14fe21a57cf06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_834be386245c54fc02e9d16c04986b1b1dcfe1569f2bfd3c865d82bfa35ce668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_834be386245c54fc02e9d16c04986b1b1dcfe1569f2bfd3c865d82bfa35ce668->enter($__internal_834be386245c54fc02e9d16c04986b1b1dcfe1569f2bfd3c865d82bfa35ce668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_834be386245c54fc02e9d16c04986b1b1dcfe1569f2bfd3c865d82bfa35ce668->leave($__internal_834be386245c54fc02e9d16c04986b1b1dcfe1569f2bfd3c865d82bfa35ce668_prof);

        
        $__internal_6ea13ebc4d8210a7889d6b39abd3ae0a4d897dc043b7e019ccf14fe21a57cf06->leave($__internal_6ea13ebc4d8210a7889d6b39abd3ae0a4d897dc043b7e019ccf14fe21a57cf06_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_c2445eb812dfa8159441a031eeb8de5ec341bbd013f70f2e1aab3855f9d9e528 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2445eb812dfa8159441a031eeb8de5ec341bbd013f70f2e1aab3855f9d9e528->enter($__internal_c2445eb812dfa8159441a031eeb8de5ec341bbd013f70f2e1aab3855f9d9e528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_d74f7204236837837f7f85e360706121872ebf67a3f16430cb8c20e861fb4f2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d74f7204236837837f7f85e360706121872ebf67a3f16430cb8c20e861fb4f2c->enter($__internal_d74f7204236837837f7f85e360706121872ebf67a3f16430cb8c20e861fb4f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_d74f7204236837837f7f85e360706121872ebf67a3f16430cb8c20e861fb4f2c->leave($__internal_d74f7204236837837f7f85e360706121872ebf67a3f16430cb8c20e861fb4f2c_prof);

        
        $__internal_c2445eb812dfa8159441a031eeb8de5ec341bbd013f70f2e1aab3855f9d9e528->leave($__internal_c2445eb812dfa8159441a031eeb8de5ec341bbd013f70f2e1aab3855f9d9e528_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_3814b4de14e8792935d57c187fd5e523aa377da61d2090817be85a1254d725c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3814b4de14e8792935d57c187fd5e523aa377da61d2090817be85a1254d725c3->enter($__internal_3814b4de14e8792935d57c187fd5e523aa377da61d2090817be85a1254d725c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_55570ab3b924c9f16a5cf54466e3b532137ab3ffaae5adf1ecccd9b467a5a38d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55570ab3b924c9f16a5cf54466e3b532137ab3ffaae5adf1ecccd9b467a5a38d->enter($__internal_55570ab3b924c9f16a5cf54466e3b532137ab3ffaae5adf1ecccd9b467a5a38d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_55570ab3b924c9f16a5cf54466e3b532137ab3ffaae5adf1ecccd9b467a5a38d->leave($__internal_55570ab3b924c9f16a5cf54466e3b532137ab3ffaae5adf1ecccd9b467a5a38d_prof);

        
        $__internal_3814b4de14e8792935d57c187fd5e523aa377da61d2090817be85a1254d725c3->leave($__internal_3814b4de14e8792935d57c187fd5e523aa377da61d2090817be85a1254d725c3_prof);

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
