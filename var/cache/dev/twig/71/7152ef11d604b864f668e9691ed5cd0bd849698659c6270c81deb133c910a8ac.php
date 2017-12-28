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
        $__internal_4ac18d05694f72a3a4ea0f8b7c851961dc750078e2483e024b7328565201cc7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ac18d05694f72a3a4ea0f8b7c851961dc750078e2483e024b7328565201cc7d->enter($__internal_4ac18d05694f72a3a4ea0f8b7c851961dc750078e2483e024b7328565201cc7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_93c2a95eb1795b93e0e870fd10cd1f028262f7cd2b8d6d54d6e903ca375bf592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93c2a95eb1795b93e0e870fd10cd1f028262f7cd2b8d6d54d6e903ca375bf592->enter($__internal_93c2a95eb1795b93e0e870fd10cd1f028262f7cd2b8d6d54d6e903ca375bf592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_4ac18d05694f72a3a4ea0f8b7c851961dc750078e2483e024b7328565201cc7d->leave($__internal_4ac18d05694f72a3a4ea0f8b7c851961dc750078e2483e024b7328565201cc7d_prof);

        
        $__internal_93c2a95eb1795b93e0e870fd10cd1f028262f7cd2b8d6d54d6e903ca375bf592->leave($__internal_93c2a95eb1795b93e0e870fd10cd1f028262f7cd2b8d6d54d6e903ca375bf592_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_11b714f8e5e1a5d0c1c7672681b006f7ffecb217e847d209ee9f916ba3ec4e5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11b714f8e5e1a5d0c1c7672681b006f7ffecb217e847d209ee9f916ba3ec4e5e->enter($__internal_11b714f8e5e1a5d0c1c7672681b006f7ffecb217e847d209ee9f916ba3ec4e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_5eef3053d0f5fabb0b94a40cc5029c80463429cacec1ac211ffa9e328c2dc155 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eef3053d0f5fabb0b94a40cc5029c80463429cacec1ac211ffa9e328c2dc155->enter($__internal_5eef3053d0f5fabb0b94a40cc5029c80463429cacec1ac211ffa9e328c2dc155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_5eef3053d0f5fabb0b94a40cc5029c80463429cacec1ac211ffa9e328c2dc155->leave($__internal_5eef3053d0f5fabb0b94a40cc5029c80463429cacec1ac211ffa9e328c2dc155_prof);

        
        $__internal_11b714f8e5e1a5d0c1c7672681b006f7ffecb217e847d209ee9f916ba3ec4e5e->leave($__internal_11b714f8e5e1a5d0c1c7672681b006f7ffecb217e847d209ee9f916ba3ec4e5e_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_74aaa8a5ae4169fa07b93533b00b6711bbe1dfb1569065fb0c09ab0a55f32673 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74aaa8a5ae4169fa07b93533b00b6711bbe1dfb1569065fb0c09ab0a55f32673->enter($__internal_74aaa8a5ae4169fa07b93533b00b6711bbe1dfb1569065fb0c09ab0a55f32673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_ae2504c6468f36ccdd5f44a1d64c89eface0f8d8887d483d9173fa5164f6b471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae2504c6468f36ccdd5f44a1d64c89eface0f8d8887d483d9173fa5164f6b471->enter($__internal_ae2504c6468f36ccdd5f44a1d64c89eface0f8d8887d483d9173fa5164f6b471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_ae2504c6468f36ccdd5f44a1d64c89eface0f8d8887d483d9173fa5164f6b471->leave($__internal_ae2504c6468f36ccdd5f44a1d64c89eface0f8d8887d483d9173fa5164f6b471_prof);

        
        $__internal_74aaa8a5ae4169fa07b93533b00b6711bbe1dfb1569065fb0c09ab0a55f32673->leave($__internal_74aaa8a5ae4169fa07b93533b00b6711bbe1dfb1569065fb0c09ab0a55f32673_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_1ec4ebd2d83e64222223bb427c3ed7775d4cf93693d1cec01a9bddebfe9539ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ec4ebd2d83e64222223bb427c3ed7775d4cf93693d1cec01a9bddebfe9539ca->enter($__internal_1ec4ebd2d83e64222223bb427c3ed7775d4cf93693d1cec01a9bddebfe9539ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_33f23a07f658e6fcdcfcb353a62cada061f1bac0740782624acddb51e78b9acb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33f23a07f658e6fcdcfcb353a62cada061f1bac0740782624acddb51e78b9acb->enter($__internal_33f23a07f658e6fcdcfcb353a62cada061f1bac0740782624acddb51e78b9acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_33f23a07f658e6fcdcfcb353a62cada061f1bac0740782624acddb51e78b9acb->leave($__internal_33f23a07f658e6fcdcfcb353a62cada061f1bac0740782624acddb51e78b9acb_prof);

        
        $__internal_1ec4ebd2d83e64222223bb427c3ed7775d4cf93693d1cec01a9bddebfe9539ca->leave($__internal_1ec4ebd2d83e64222223bb427c3ed7775d4cf93693d1cec01a9bddebfe9539ca_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_0900ce84e8518731ec0b8bae163fe83cf83df441d432188898dee7ee151755f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0900ce84e8518731ec0b8bae163fe83cf83df441d432188898dee7ee151755f4->enter($__internal_0900ce84e8518731ec0b8bae163fe83cf83df441d432188898dee7ee151755f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_24009f1cabea44a106a99a665b0dc9df7e12dcfda3d05298a76ce2f8daccdf34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24009f1cabea44a106a99a665b0dc9df7e12dcfda3d05298a76ce2f8daccdf34->enter($__internal_24009f1cabea44a106a99a665b0dc9df7e12dcfda3d05298a76ce2f8daccdf34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_24009f1cabea44a106a99a665b0dc9df7e12dcfda3d05298a76ce2f8daccdf34->leave($__internal_24009f1cabea44a106a99a665b0dc9df7e12dcfda3d05298a76ce2f8daccdf34_prof);

        
        $__internal_0900ce84e8518731ec0b8bae163fe83cf83df441d432188898dee7ee151755f4->leave($__internal_0900ce84e8518731ec0b8bae163fe83cf83df441d432188898dee7ee151755f4_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_cf7ae87bcea752944ad41bf42ee21319d9f84af3f421507a7c7b8f9c31ea3b58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf7ae87bcea752944ad41bf42ee21319d9f84af3f421507a7c7b8f9c31ea3b58->enter($__internal_cf7ae87bcea752944ad41bf42ee21319d9f84af3f421507a7c7b8f9c31ea3b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_0785f94faf411abeab8a931476fbf0d46c59bff4a818faad73c6b7e9dedf76f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0785f94faf411abeab8a931476fbf0d46c59bff4a818faad73c6b7e9dedf76f3->enter($__internal_0785f94faf411abeab8a931476fbf0d46c59bff4a818faad73c6b7e9dedf76f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_0785f94faf411abeab8a931476fbf0d46c59bff4a818faad73c6b7e9dedf76f3->leave($__internal_0785f94faf411abeab8a931476fbf0d46c59bff4a818faad73c6b7e9dedf76f3_prof);

        
        $__internal_cf7ae87bcea752944ad41bf42ee21319d9f84af3f421507a7c7b8f9c31ea3b58->leave($__internal_cf7ae87bcea752944ad41bf42ee21319d9f84af3f421507a7c7b8f9c31ea3b58_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_1b0fe0c0eba3a2e4e2911dfaab498fd7a56812abd2aaeda245226f0d54016cea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b0fe0c0eba3a2e4e2911dfaab498fd7a56812abd2aaeda245226f0d54016cea->enter($__internal_1b0fe0c0eba3a2e4e2911dfaab498fd7a56812abd2aaeda245226f0d54016cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_6d078463d79810222eb728fb8893c95b54a1141c8b5616f14f0f2a3e523a5c1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d078463d79810222eb728fb8893c95b54a1141c8b5616f14f0f2a3e523a5c1d->enter($__internal_6d078463d79810222eb728fb8893c95b54a1141c8b5616f14f0f2a3e523a5c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_6d078463d79810222eb728fb8893c95b54a1141c8b5616f14f0f2a3e523a5c1d->leave($__internal_6d078463d79810222eb728fb8893c95b54a1141c8b5616f14f0f2a3e523a5c1d_prof);

        
        $__internal_1b0fe0c0eba3a2e4e2911dfaab498fd7a56812abd2aaeda245226f0d54016cea->leave($__internal_1b0fe0c0eba3a2e4e2911dfaab498fd7a56812abd2aaeda245226f0d54016cea_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_0b770f1f8ce6ad98868d8b50ffe92291ae2734505e719f3cfc23727903b181b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b770f1f8ce6ad98868d8b50ffe92291ae2734505e719f3cfc23727903b181b0->enter($__internal_0b770f1f8ce6ad98868d8b50ffe92291ae2734505e719f3cfc23727903b181b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_ca78725a59ba69f8d801839046b9698d5d8e4b80b872cbefecf2beb8b2aedacc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca78725a59ba69f8d801839046b9698d5d8e4b80b872cbefecf2beb8b2aedacc->enter($__internal_ca78725a59ba69f8d801839046b9698d5d8e4b80b872cbefecf2beb8b2aedacc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_ca78725a59ba69f8d801839046b9698d5d8e4b80b872cbefecf2beb8b2aedacc->leave($__internal_ca78725a59ba69f8d801839046b9698d5d8e4b80b872cbefecf2beb8b2aedacc_prof);

        
        $__internal_0b770f1f8ce6ad98868d8b50ffe92291ae2734505e719f3cfc23727903b181b0->leave($__internal_0b770f1f8ce6ad98868d8b50ffe92291ae2734505e719f3cfc23727903b181b0_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_dd31cf61c2c7bb05efe4c3076b841792f0a17db77e95c18653c9fcaa0b69995b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd31cf61c2c7bb05efe4c3076b841792f0a17db77e95c18653c9fcaa0b69995b->enter($__internal_dd31cf61c2c7bb05efe4c3076b841792f0a17db77e95c18653c9fcaa0b69995b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_8581f7fec4286207ec07a7f656b13e799e486c48a23ccdfa963eaf7cd3936446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8581f7fec4286207ec07a7f656b13e799e486c48a23ccdfa963eaf7cd3936446->enter($__internal_8581f7fec4286207ec07a7f656b13e799e486c48a23ccdfa963eaf7cd3936446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_8581f7fec4286207ec07a7f656b13e799e486c48a23ccdfa963eaf7cd3936446->leave($__internal_8581f7fec4286207ec07a7f656b13e799e486c48a23ccdfa963eaf7cd3936446_prof);

        
        $__internal_dd31cf61c2c7bb05efe4c3076b841792f0a17db77e95c18653c9fcaa0b69995b->leave($__internal_dd31cf61c2c7bb05efe4c3076b841792f0a17db77e95c18653c9fcaa0b69995b_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_5ae00513a36ae3c168e00379a867349010a9b5831029c3ec49b9867a5a073808 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ae00513a36ae3c168e00379a867349010a9b5831029c3ec49b9867a5a073808->enter($__internal_5ae00513a36ae3c168e00379a867349010a9b5831029c3ec49b9867a5a073808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_f84bf2f2238c6a27010e1ec34d7887aa405f168892d699aa673bebde58f0f59a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f84bf2f2238c6a27010e1ec34d7887aa405f168892d699aa673bebde58f0f59a->enter($__internal_f84bf2f2238c6a27010e1ec34d7887aa405f168892d699aa673bebde58f0f59a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_f84bf2f2238c6a27010e1ec34d7887aa405f168892d699aa673bebde58f0f59a->leave($__internal_f84bf2f2238c6a27010e1ec34d7887aa405f168892d699aa673bebde58f0f59a_prof);

        
        $__internal_5ae00513a36ae3c168e00379a867349010a9b5831029c3ec49b9867a5a073808->leave($__internal_5ae00513a36ae3c168e00379a867349010a9b5831029c3ec49b9867a5a073808_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_c6e07d14ee5c9d5e95e5ad9c679365c9e453df1b25e5e9493df110a7d4da596d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6e07d14ee5c9d5e95e5ad9c679365c9e453df1b25e5e9493df110a7d4da596d->enter($__internal_c6e07d14ee5c9d5e95e5ad9c679365c9e453df1b25e5e9493df110a7d4da596d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_a6ae68de92c5f81a6f5465206d2f61ea6ff78b46d13201d7f127d88a6e56ec11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6ae68de92c5f81a6f5465206d2f61ea6ff78b46d13201d7f127d88a6e56ec11->enter($__internal_a6ae68de92c5f81a6f5465206d2f61ea6ff78b46d13201d7f127d88a6e56ec11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_a6ae68de92c5f81a6f5465206d2f61ea6ff78b46d13201d7f127d88a6e56ec11->leave($__internal_a6ae68de92c5f81a6f5465206d2f61ea6ff78b46d13201d7f127d88a6e56ec11_prof);

        
        $__internal_c6e07d14ee5c9d5e95e5ad9c679365c9e453df1b25e5e9493df110a7d4da596d->leave($__internal_c6e07d14ee5c9d5e95e5ad9c679365c9e453df1b25e5e9493df110a7d4da596d_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_3c24d92073028e7e24a6f8819e55059c058b6becc447f3c0c13a1de5af61e25a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c24d92073028e7e24a6f8819e55059c058b6becc447f3c0c13a1de5af61e25a->enter($__internal_3c24d92073028e7e24a6f8819e55059c058b6becc447f3c0c13a1de5af61e25a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_0eb19c90037e8e35a9af474233c225cf78e5d3a2f5288be10403b05483b4df96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eb19c90037e8e35a9af474233c225cf78e5d3a2f5288be10403b05483b4df96->enter($__internal_0eb19c90037e8e35a9af474233c225cf78e5d3a2f5288be10403b05483b4df96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_0eb19c90037e8e35a9af474233c225cf78e5d3a2f5288be10403b05483b4df96->leave($__internal_0eb19c90037e8e35a9af474233c225cf78e5d3a2f5288be10403b05483b4df96_prof);

        
        $__internal_3c24d92073028e7e24a6f8819e55059c058b6becc447f3c0c13a1de5af61e25a->leave($__internal_3c24d92073028e7e24a6f8819e55059c058b6becc447f3c0c13a1de5af61e25a_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_9234eef35b7c36045cec6d1993821aae5b1db340a40f02f65b92840f8dd78cbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9234eef35b7c36045cec6d1993821aae5b1db340a40f02f65b92840f8dd78cbb->enter($__internal_9234eef35b7c36045cec6d1993821aae5b1db340a40f02f65b92840f8dd78cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_cdadc491a32ca4ff1b8d04c97c2f6944a144bbd5ca750ebed7a10b0e4269ca1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdadc491a32ca4ff1b8d04c97c2f6944a144bbd5ca750ebed7a10b0e4269ca1d->enter($__internal_cdadc491a32ca4ff1b8d04c97c2f6944a144bbd5ca750ebed7a10b0e4269ca1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_cdadc491a32ca4ff1b8d04c97c2f6944a144bbd5ca750ebed7a10b0e4269ca1d->leave($__internal_cdadc491a32ca4ff1b8d04c97c2f6944a144bbd5ca750ebed7a10b0e4269ca1d_prof);

        
        $__internal_9234eef35b7c36045cec6d1993821aae5b1db340a40f02f65b92840f8dd78cbb->leave($__internal_9234eef35b7c36045cec6d1993821aae5b1db340a40f02f65b92840f8dd78cbb_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_bfc8a0a11be4f7f97cfd879317f94ce47ed5b315507d1b269889f0736482ba98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfc8a0a11be4f7f97cfd879317f94ce47ed5b315507d1b269889f0736482ba98->enter($__internal_bfc8a0a11be4f7f97cfd879317f94ce47ed5b315507d1b269889f0736482ba98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_4950942b2bcda34f8c771c97dd8c2edf0cb2d40b55d234840e7f04d3f76a309b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4950942b2bcda34f8c771c97dd8c2edf0cb2d40b55d234840e7f04d3f76a309b->enter($__internal_4950942b2bcda34f8c771c97dd8c2edf0cb2d40b55d234840e7f04d3f76a309b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_4950942b2bcda34f8c771c97dd8c2edf0cb2d40b55d234840e7f04d3f76a309b->leave($__internal_4950942b2bcda34f8c771c97dd8c2edf0cb2d40b55d234840e7f04d3f76a309b_prof);

        
        $__internal_bfc8a0a11be4f7f97cfd879317f94ce47ed5b315507d1b269889f0736482ba98->leave($__internal_bfc8a0a11be4f7f97cfd879317f94ce47ed5b315507d1b269889f0736482ba98_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_56394de806c383c889c5e67efdc52ecd901476ef3c764d1536375e435753973f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56394de806c383c889c5e67efdc52ecd901476ef3c764d1536375e435753973f->enter($__internal_56394de806c383c889c5e67efdc52ecd901476ef3c764d1536375e435753973f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_70c8d2943997983d9e890599c293fb5f4b9383763179abbdfd1d679f454f0a4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70c8d2943997983d9e890599c293fb5f4b9383763179abbdfd1d679f454f0a4f->enter($__internal_70c8d2943997983d9e890599c293fb5f4b9383763179abbdfd1d679f454f0a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_70c8d2943997983d9e890599c293fb5f4b9383763179abbdfd1d679f454f0a4f->leave($__internal_70c8d2943997983d9e890599c293fb5f4b9383763179abbdfd1d679f454f0a4f_prof);

        
        $__internal_56394de806c383c889c5e67efdc52ecd901476ef3c764d1536375e435753973f->leave($__internal_56394de806c383c889c5e67efdc52ecd901476ef3c764d1536375e435753973f_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_62f010ece539385f913c6eff76772412046558215ab13c136fc1bf98ca2b5d5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62f010ece539385f913c6eff76772412046558215ab13c136fc1bf98ca2b5d5c->enter($__internal_62f010ece539385f913c6eff76772412046558215ab13c136fc1bf98ca2b5d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_4a154994df1740d7960b6607c236a62558cdf5b9bd474c1e0b649976c4e85fa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a154994df1740d7960b6607c236a62558cdf5b9bd474c1e0b649976c4e85fa5->enter($__internal_4a154994df1740d7960b6607c236a62558cdf5b9bd474c1e0b649976c4e85fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_4a154994df1740d7960b6607c236a62558cdf5b9bd474c1e0b649976c4e85fa5->leave($__internal_4a154994df1740d7960b6607c236a62558cdf5b9bd474c1e0b649976c4e85fa5_prof);

        
        $__internal_62f010ece539385f913c6eff76772412046558215ab13c136fc1bf98ca2b5d5c->leave($__internal_62f010ece539385f913c6eff76772412046558215ab13c136fc1bf98ca2b5d5c_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_e01c6bb39ce487873ac6d154e0f9fcc2df13092f386dea42b9fd5f8bd6e76663 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e01c6bb39ce487873ac6d154e0f9fcc2df13092f386dea42b9fd5f8bd6e76663->enter($__internal_e01c6bb39ce487873ac6d154e0f9fcc2df13092f386dea42b9fd5f8bd6e76663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_af1f4774db009a01f41591aa5e8ef2e2f739a5d837865d333afee078ef204ff9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af1f4774db009a01f41591aa5e8ef2e2f739a5d837865d333afee078ef204ff9->enter($__internal_af1f4774db009a01f41591aa5e8ef2e2f739a5d837865d333afee078ef204ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_af1f4774db009a01f41591aa5e8ef2e2f739a5d837865d333afee078ef204ff9->leave($__internal_af1f4774db009a01f41591aa5e8ef2e2f739a5d837865d333afee078ef204ff9_prof);

        
        $__internal_e01c6bb39ce487873ac6d154e0f9fcc2df13092f386dea42b9fd5f8bd6e76663->leave($__internal_e01c6bb39ce487873ac6d154e0f9fcc2df13092f386dea42b9fd5f8bd6e76663_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_7da9cfdac9b260fb3c7a2e4e150f7c3712050c10e91639f237d510a81a9b932b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7da9cfdac9b260fb3c7a2e4e150f7c3712050c10e91639f237d510a81a9b932b->enter($__internal_7da9cfdac9b260fb3c7a2e4e150f7c3712050c10e91639f237d510a81a9b932b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_8289553de9b42d64a2ba918402cd374839700ba2e2ff7f889aa21d6e4c2b90a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8289553de9b42d64a2ba918402cd374839700ba2e2ff7f889aa21d6e4c2b90a4->enter($__internal_8289553de9b42d64a2ba918402cd374839700ba2e2ff7f889aa21d6e4c2b90a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_8289553de9b42d64a2ba918402cd374839700ba2e2ff7f889aa21d6e4c2b90a4->leave($__internal_8289553de9b42d64a2ba918402cd374839700ba2e2ff7f889aa21d6e4c2b90a4_prof);

        
        $__internal_7da9cfdac9b260fb3c7a2e4e150f7c3712050c10e91639f237d510a81a9b932b->leave($__internal_7da9cfdac9b260fb3c7a2e4e150f7c3712050c10e91639f237d510a81a9b932b_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_8653b25164e3f0d20b9fd11599795d85df33db98f818b3502f06385e6488fef0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8653b25164e3f0d20b9fd11599795d85df33db98f818b3502f06385e6488fef0->enter($__internal_8653b25164e3f0d20b9fd11599795d85df33db98f818b3502f06385e6488fef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_de2eb605ab6f140fad01d39b7a8430dc641fa6a797e51b98c8dd318b2543da0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de2eb605ab6f140fad01d39b7a8430dc641fa6a797e51b98c8dd318b2543da0d->enter($__internal_de2eb605ab6f140fad01d39b7a8430dc641fa6a797e51b98c8dd318b2543da0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_de2eb605ab6f140fad01d39b7a8430dc641fa6a797e51b98c8dd318b2543da0d->leave($__internal_de2eb605ab6f140fad01d39b7a8430dc641fa6a797e51b98c8dd318b2543da0d_prof);

        
        $__internal_8653b25164e3f0d20b9fd11599795d85df33db98f818b3502f06385e6488fef0->leave($__internal_8653b25164e3f0d20b9fd11599795d85df33db98f818b3502f06385e6488fef0_prof);

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
