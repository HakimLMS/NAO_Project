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
        $__internal_38a94d0d1cbf804981238fe8f12a001be22154abc3250d2fd5c3afe6c2794e7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38a94d0d1cbf804981238fe8f12a001be22154abc3250d2fd5c3afe6c2794e7e->enter($__internal_38a94d0d1cbf804981238fe8f12a001be22154abc3250d2fd5c3afe6c2794e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_fdc86029d2f6fc9e9354ebc68ff2fbf11c62e385473da43cde941c844caa3241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdc86029d2f6fc9e9354ebc68ff2fbf11c62e385473da43cde941c844caa3241->enter($__internal_fdc86029d2f6fc9e9354ebc68ff2fbf11c62e385473da43cde941c844caa3241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_38a94d0d1cbf804981238fe8f12a001be22154abc3250d2fd5c3afe6c2794e7e->leave($__internal_38a94d0d1cbf804981238fe8f12a001be22154abc3250d2fd5c3afe6c2794e7e_prof);

        
        $__internal_fdc86029d2f6fc9e9354ebc68ff2fbf11c62e385473da43cde941c844caa3241->leave($__internal_fdc86029d2f6fc9e9354ebc68ff2fbf11c62e385473da43cde941c844caa3241_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_cdbb068c25a408f667cbea13adfd2138c410a6de3b97d120053aeea52aaf6c8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdbb068c25a408f667cbea13adfd2138c410a6de3b97d120053aeea52aaf6c8e->enter($__internal_cdbb068c25a408f667cbea13adfd2138c410a6de3b97d120053aeea52aaf6c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_c5bcc13cc5bb6c8e533791c25cd6b0181bc07b28fb540d4ba0f8f228cb2b86fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5bcc13cc5bb6c8e533791c25cd6b0181bc07b28fb540d4ba0f8f228cb2b86fb->enter($__internal_c5bcc13cc5bb6c8e533791c25cd6b0181bc07b28fb540d4ba0f8f228cb2b86fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_c5bcc13cc5bb6c8e533791c25cd6b0181bc07b28fb540d4ba0f8f228cb2b86fb->leave($__internal_c5bcc13cc5bb6c8e533791c25cd6b0181bc07b28fb540d4ba0f8f228cb2b86fb_prof);

        
        $__internal_cdbb068c25a408f667cbea13adfd2138c410a6de3b97d120053aeea52aaf6c8e->leave($__internal_cdbb068c25a408f667cbea13adfd2138c410a6de3b97d120053aeea52aaf6c8e_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_e46b824350acf1952b069842d507ac78c19e0fdc260c27205be5e9164bc2167f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e46b824350acf1952b069842d507ac78c19e0fdc260c27205be5e9164bc2167f->enter($__internal_e46b824350acf1952b069842d507ac78c19e0fdc260c27205be5e9164bc2167f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_55e16338e67e0dcaba9f8a163763d3cf4429ddf9fc3a9854a3ba1de2c94e0b0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55e16338e67e0dcaba9f8a163763d3cf4429ddf9fc3a9854a3ba1de2c94e0b0f->enter($__internal_55e16338e67e0dcaba9f8a163763d3cf4429ddf9fc3a9854a3ba1de2c94e0b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_55e16338e67e0dcaba9f8a163763d3cf4429ddf9fc3a9854a3ba1de2c94e0b0f->leave($__internal_55e16338e67e0dcaba9f8a163763d3cf4429ddf9fc3a9854a3ba1de2c94e0b0f_prof);

        
        $__internal_e46b824350acf1952b069842d507ac78c19e0fdc260c27205be5e9164bc2167f->leave($__internal_e46b824350acf1952b069842d507ac78c19e0fdc260c27205be5e9164bc2167f_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_875260413c31bde8199b94db20d268672560ccc7010b73697794e42b17f80095 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_875260413c31bde8199b94db20d268672560ccc7010b73697794e42b17f80095->enter($__internal_875260413c31bde8199b94db20d268672560ccc7010b73697794e42b17f80095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_2af019d29d100e587ce737800ce8965e74a766325548a8e9f62e786aa9e4396d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2af019d29d100e587ce737800ce8965e74a766325548a8e9f62e786aa9e4396d->enter($__internal_2af019d29d100e587ce737800ce8965e74a766325548a8e9f62e786aa9e4396d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_2af019d29d100e587ce737800ce8965e74a766325548a8e9f62e786aa9e4396d->leave($__internal_2af019d29d100e587ce737800ce8965e74a766325548a8e9f62e786aa9e4396d_prof);

        
        $__internal_875260413c31bde8199b94db20d268672560ccc7010b73697794e42b17f80095->leave($__internal_875260413c31bde8199b94db20d268672560ccc7010b73697794e42b17f80095_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_028a24e160abd7377867f0331e48ead0af823c39fa558b76add70d722702b46c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_028a24e160abd7377867f0331e48ead0af823c39fa558b76add70d722702b46c->enter($__internal_028a24e160abd7377867f0331e48ead0af823c39fa558b76add70d722702b46c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_b07ac89600ced13a36ce631c6536f107400706083fb9623de82a33aed5626c7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b07ac89600ced13a36ce631c6536f107400706083fb9623de82a33aed5626c7f->enter($__internal_b07ac89600ced13a36ce631c6536f107400706083fb9623de82a33aed5626c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_b07ac89600ced13a36ce631c6536f107400706083fb9623de82a33aed5626c7f->leave($__internal_b07ac89600ced13a36ce631c6536f107400706083fb9623de82a33aed5626c7f_prof);

        
        $__internal_028a24e160abd7377867f0331e48ead0af823c39fa558b76add70d722702b46c->leave($__internal_028a24e160abd7377867f0331e48ead0af823c39fa558b76add70d722702b46c_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_b5c04df31d3d4e10fed0e6695ed7aa48ae66a12801c6f2c4e6830df048fa3a07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5c04df31d3d4e10fed0e6695ed7aa48ae66a12801c6f2c4e6830df048fa3a07->enter($__internal_b5c04df31d3d4e10fed0e6695ed7aa48ae66a12801c6f2c4e6830df048fa3a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_807ae2be6fc796de34d2fa7dc56dc6f924b9726b6cce68578f5e773090ebe677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_807ae2be6fc796de34d2fa7dc56dc6f924b9726b6cce68578f5e773090ebe677->enter($__internal_807ae2be6fc796de34d2fa7dc56dc6f924b9726b6cce68578f5e773090ebe677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_807ae2be6fc796de34d2fa7dc56dc6f924b9726b6cce68578f5e773090ebe677->leave($__internal_807ae2be6fc796de34d2fa7dc56dc6f924b9726b6cce68578f5e773090ebe677_prof);

        
        $__internal_b5c04df31d3d4e10fed0e6695ed7aa48ae66a12801c6f2c4e6830df048fa3a07->leave($__internal_b5c04df31d3d4e10fed0e6695ed7aa48ae66a12801c6f2c4e6830df048fa3a07_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_daacc391bcaa3353648e5684ad28a727776011b1716b42498882fbd60386a4fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daacc391bcaa3353648e5684ad28a727776011b1716b42498882fbd60386a4fe->enter($__internal_daacc391bcaa3353648e5684ad28a727776011b1716b42498882fbd60386a4fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_1a59f0bb5321313d93679838c7eaf0c34013bc66e4c236c49f5282d41218ccdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a59f0bb5321313d93679838c7eaf0c34013bc66e4c236c49f5282d41218ccdb->enter($__internal_1a59f0bb5321313d93679838c7eaf0c34013bc66e4c236c49f5282d41218ccdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_1a59f0bb5321313d93679838c7eaf0c34013bc66e4c236c49f5282d41218ccdb->leave($__internal_1a59f0bb5321313d93679838c7eaf0c34013bc66e4c236c49f5282d41218ccdb_prof);

        
        $__internal_daacc391bcaa3353648e5684ad28a727776011b1716b42498882fbd60386a4fe->leave($__internal_daacc391bcaa3353648e5684ad28a727776011b1716b42498882fbd60386a4fe_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_bd35b5dc31931e13a6d0945e6e121186bd162405355c5486ec04fa9d7ab9c2c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd35b5dc31931e13a6d0945e6e121186bd162405355c5486ec04fa9d7ab9c2c5->enter($__internal_bd35b5dc31931e13a6d0945e6e121186bd162405355c5486ec04fa9d7ab9c2c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_fc5217a5e3521865259b468ebabcaa6859765145a22b9f392fc19210cd328cac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc5217a5e3521865259b468ebabcaa6859765145a22b9f392fc19210cd328cac->enter($__internal_fc5217a5e3521865259b468ebabcaa6859765145a22b9f392fc19210cd328cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_fc5217a5e3521865259b468ebabcaa6859765145a22b9f392fc19210cd328cac->leave($__internal_fc5217a5e3521865259b468ebabcaa6859765145a22b9f392fc19210cd328cac_prof);

        
        $__internal_bd35b5dc31931e13a6d0945e6e121186bd162405355c5486ec04fa9d7ab9c2c5->leave($__internal_bd35b5dc31931e13a6d0945e6e121186bd162405355c5486ec04fa9d7ab9c2c5_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_90a7005074b8501df862f8b483a570b5ba34c06dd136f58958c10179c237efe6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90a7005074b8501df862f8b483a570b5ba34c06dd136f58958c10179c237efe6->enter($__internal_90a7005074b8501df862f8b483a570b5ba34c06dd136f58958c10179c237efe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_e00937e40806f49d17bea21c5234033c41ae51947e90f519c29ea276f245332a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e00937e40806f49d17bea21c5234033c41ae51947e90f519c29ea276f245332a->enter($__internal_e00937e40806f49d17bea21c5234033c41ae51947e90f519c29ea276f245332a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_e00937e40806f49d17bea21c5234033c41ae51947e90f519c29ea276f245332a->leave($__internal_e00937e40806f49d17bea21c5234033c41ae51947e90f519c29ea276f245332a_prof);

        
        $__internal_90a7005074b8501df862f8b483a570b5ba34c06dd136f58958c10179c237efe6->leave($__internal_90a7005074b8501df862f8b483a570b5ba34c06dd136f58958c10179c237efe6_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_d2ca4002247d49c2c31ab255bcad56d49f3a224d9f7a57d907f582483b8d28f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2ca4002247d49c2c31ab255bcad56d49f3a224d9f7a57d907f582483b8d28f7->enter($__internal_d2ca4002247d49c2c31ab255bcad56d49f3a224d9f7a57d907f582483b8d28f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_27a2094ee9316d14c343c9ff6d2d9dffde3c44767bf4f50fab074be03c89792f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27a2094ee9316d14c343c9ff6d2d9dffde3c44767bf4f50fab074be03c89792f->enter($__internal_27a2094ee9316d14c343c9ff6d2d9dffde3c44767bf4f50fab074be03c89792f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_27a2094ee9316d14c343c9ff6d2d9dffde3c44767bf4f50fab074be03c89792f->leave($__internal_27a2094ee9316d14c343c9ff6d2d9dffde3c44767bf4f50fab074be03c89792f_prof);

        
        $__internal_d2ca4002247d49c2c31ab255bcad56d49f3a224d9f7a57d907f582483b8d28f7->leave($__internal_d2ca4002247d49c2c31ab255bcad56d49f3a224d9f7a57d907f582483b8d28f7_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_07389cfe7f299c6592581a73bb1f338b051ebe7389aa7e8b2a11337dce1e9ea6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07389cfe7f299c6592581a73bb1f338b051ebe7389aa7e8b2a11337dce1e9ea6->enter($__internal_07389cfe7f299c6592581a73bb1f338b051ebe7389aa7e8b2a11337dce1e9ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_ebdc7b243faec736c0fe413c49141ee25ccd59774b9cf9f1d77deec8ffc0558c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebdc7b243faec736c0fe413c49141ee25ccd59774b9cf9f1d77deec8ffc0558c->enter($__internal_ebdc7b243faec736c0fe413c49141ee25ccd59774b9cf9f1d77deec8ffc0558c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_ebdc7b243faec736c0fe413c49141ee25ccd59774b9cf9f1d77deec8ffc0558c->leave($__internal_ebdc7b243faec736c0fe413c49141ee25ccd59774b9cf9f1d77deec8ffc0558c_prof);

        
        $__internal_07389cfe7f299c6592581a73bb1f338b051ebe7389aa7e8b2a11337dce1e9ea6->leave($__internal_07389cfe7f299c6592581a73bb1f338b051ebe7389aa7e8b2a11337dce1e9ea6_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_2536d5732d918f3b2b850acd73f28494c2fea4119849cee94ba6dff8d4ebbf3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2536d5732d918f3b2b850acd73f28494c2fea4119849cee94ba6dff8d4ebbf3a->enter($__internal_2536d5732d918f3b2b850acd73f28494c2fea4119849cee94ba6dff8d4ebbf3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_188c0da0574db65670c73cae399252effc27f37990b36e62c19562eddf3838cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_188c0da0574db65670c73cae399252effc27f37990b36e62c19562eddf3838cd->enter($__internal_188c0da0574db65670c73cae399252effc27f37990b36e62c19562eddf3838cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_188c0da0574db65670c73cae399252effc27f37990b36e62c19562eddf3838cd->leave($__internal_188c0da0574db65670c73cae399252effc27f37990b36e62c19562eddf3838cd_prof);

        
        $__internal_2536d5732d918f3b2b850acd73f28494c2fea4119849cee94ba6dff8d4ebbf3a->leave($__internal_2536d5732d918f3b2b850acd73f28494c2fea4119849cee94ba6dff8d4ebbf3a_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_714e5eab40c25eb77860b0f5c1493586526848b4e3c24d7b09bfdbd23d1eb658 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_714e5eab40c25eb77860b0f5c1493586526848b4e3c24d7b09bfdbd23d1eb658->enter($__internal_714e5eab40c25eb77860b0f5c1493586526848b4e3c24d7b09bfdbd23d1eb658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_81c2eed72c40645295dc9f6e02801eabe9a04d33dc49dd66fd5f705dc5467c4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81c2eed72c40645295dc9f6e02801eabe9a04d33dc49dd66fd5f705dc5467c4b->enter($__internal_81c2eed72c40645295dc9f6e02801eabe9a04d33dc49dd66fd5f705dc5467c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_81c2eed72c40645295dc9f6e02801eabe9a04d33dc49dd66fd5f705dc5467c4b->leave($__internal_81c2eed72c40645295dc9f6e02801eabe9a04d33dc49dd66fd5f705dc5467c4b_prof);

        
        $__internal_714e5eab40c25eb77860b0f5c1493586526848b4e3c24d7b09bfdbd23d1eb658->leave($__internal_714e5eab40c25eb77860b0f5c1493586526848b4e3c24d7b09bfdbd23d1eb658_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_7fcdefb28033ef7b1e39805d923110d38d6f98e135968ed76b59c03f29129c32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fcdefb28033ef7b1e39805d923110d38d6f98e135968ed76b59c03f29129c32->enter($__internal_7fcdefb28033ef7b1e39805d923110d38d6f98e135968ed76b59c03f29129c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_ae45552741c397fa3f8e745007319ef8ef24163adbb32bc6b46e58918bb64a81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae45552741c397fa3f8e745007319ef8ef24163adbb32bc6b46e58918bb64a81->enter($__internal_ae45552741c397fa3f8e745007319ef8ef24163adbb32bc6b46e58918bb64a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ae45552741c397fa3f8e745007319ef8ef24163adbb32bc6b46e58918bb64a81->leave($__internal_ae45552741c397fa3f8e745007319ef8ef24163adbb32bc6b46e58918bb64a81_prof);

        
        $__internal_7fcdefb28033ef7b1e39805d923110d38d6f98e135968ed76b59c03f29129c32->leave($__internal_7fcdefb28033ef7b1e39805d923110d38d6f98e135968ed76b59c03f29129c32_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_4765c9b286cd644306cee33ef50b7394b28d496d248219352ad0b447c78af040 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4765c9b286cd644306cee33ef50b7394b28d496d248219352ad0b447c78af040->enter($__internal_4765c9b286cd644306cee33ef50b7394b28d496d248219352ad0b447c78af040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_2988f55a17cd9f995842e976714aae282a7345c3af02325b7622fa4251cbfdba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2988f55a17cd9f995842e976714aae282a7345c3af02325b7622fa4251cbfdba->enter($__internal_2988f55a17cd9f995842e976714aae282a7345c3af02325b7622fa4251cbfdba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_2988f55a17cd9f995842e976714aae282a7345c3af02325b7622fa4251cbfdba->leave($__internal_2988f55a17cd9f995842e976714aae282a7345c3af02325b7622fa4251cbfdba_prof);

        
        $__internal_4765c9b286cd644306cee33ef50b7394b28d496d248219352ad0b447c78af040->leave($__internal_4765c9b286cd644306cee33ef50b7394b28d496d248219352ad0b447c78af040_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_a7ffc45d348660ce8c61b5b63428a02107be86ebd6a3e01005459a8a7b7be8cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7ffc45d348660ce8c61b5b63428a02107be86ebd6a3e01005459a8a7b7be8cb->enter($__internal_a7ffc45d348660ce8c61b5b63428a02107be86ebd6a3e01005459a8a7b7be8cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_0276e1d8f2e8e20151dee1cee60b7c8b822c48e2718d77f7487b9229420d1fe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0276e1d8f2e8e20151dee1cee60b7c8b822c48e2718d77f7487b9229420d1fe6->enter($__internal_0276e1d8f2e8e20151dee1cee60b7c8b822c48e2718d77f7487b9229420d1fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_0276e1d8f2e8e20151dee1cee60b7c8b822c48e2718d77f7487b9229420d1fe6->leave($__internal_0276e1d8f2e8e20151dee1cee60b7c8b822c48e2718d77f7487b9229420d1fe6_prof);

        
        $__internal_a7ffc45d348660ce8c61b5b63428a02107be86ebd6a3e01005459a8a7b7be8cb->leave($__internal_a7ffc45d348660ce8c61b5b63428a02107be86ebd6a3e01005459a8a7b7be8cb_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_ed2a463819676c8bbe3e5c9f915e737f23a383982efed6c6cdd4582386eb8e97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed2a463819676c8bbe3e5c9f915e737f23a383982efed6c6cdd4582386eb8e97->enter($__internal_ed2a463819676c8bbe3e5c9f915e737f23a383982efed6c6cdd4582386eb8e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_42e7295daaefe82ec31030450c4181ae44c4d9e7dcfad6ca2bb748481cbe78ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42e7295daaefe82ec31030450c4181ae44c4d9e7dcfad6ca2bb748481cbe78ff->enter($__internal_42e7295daaefe82ec31030450c4181ae44c4d9e7dcfad6ca2bb748481cbe78ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_42e7295daaefe82ec31030450c4181ae44c4d9e7dcfad6ca2bb748481cbe78ff->leave($__internal_42e7295daaefe82ec31030450c4181ae44c4d9e7dcfad6ca2bb748481cbe78ff_prof);

        
        $__internal_ed2a463819676c8bbe3e5c9f915e737f23a383982efed6c6cdd4582386eb8e97->leave($__internal_ed2a463819676c8bbe3e5c9f915e737f23a383982efed6c6cdd4582386eb8e97_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_9bd7d77789ca3ab3fbb8fec2e020ca2e63c6dd6866fd91d2d22f90c7a0e11337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bd7d77789ca3ab3fbb8fec2e020ca2e63c6dd6866fd91d2d22f90c7a0e11337->enter($__internal_9bd7d77789ca3ab3fbb8fec2e020ca2e63c6dd6866fd91d2d22f90c7a0e11337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_8378b7401e880d8978688146b46d049b7cca986e93cb64142ccef726187ff876 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8378b7401e880d8978688146b46d049b7cca986e93cb64142ccef726187ff876->enter($__internal_8378b7401e880d8978688146b46d049b7cca986e93cb64142ccef726187ff876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_8378b7401e880d8978688146b46d049b7cca986e93cb64142ccef726187ff876->leave($__internal_8378b7401e880d8978688146b46d049b7cca986e93cb64142ccef726187ff876_prof);

        
        $__internal_9bd7d77789ca3ab3fbb8fec2e020ca2e63c6dd6866fd91d2d22f90c7a0e11337->leave($__internal_9bd7d77789ca3ab3fbb8fec2e020ca2e63c6dd6866fd91d2d22f90c7a0e11337_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_8bb75c193c8fce3cdd54c888d15b62ce0bb73bf9535bf55944bc83cb1610f6c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bb75c193c8fce3cdd54c888d15b62ce0bb73bf9535bf55944bc83cb1610f6c3->enter($__internal_8bb75c193c8fce3cdd54c888d15b62ce0bb73bf9535bf55944bc83cb1610f6c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_06ca28e860f6436c2c24fd0cf397e7f87a0a44ba0d29b25e2695fa5c69901fdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06ca28e860f6436c2c24fd0cf397e7f87a0a44ba0d29b25e2695fa5c69901fdf->enter($__internal_06ca28e860f6436c2c24fd0cf397e7f87a0a44ba0d29b25e2695fa5c69901fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_06ca28e860f6436c2c24fd0cf397e7f87a0a44ba0d29b25e2695fa5c69901fdf->leave($__internal_06ca28e860f6436c2c24fd0cf397e7f87a0a44ba0d29b25e2695fa5c69901fdf_prof);

        
        $__internal_8bb75c193c8fce3cdd54c888d15b62ce0bb73bf9535bf55944bc83cb1610f6c3->leave($__internal_8bb75c193c8fce3cdd54c888d15b62ce0bb73bf9535bf55944bc83cb1610f6c3_prof);

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
