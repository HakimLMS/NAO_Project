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
        $__internal_732a828832190414ff70b026946bf851b7d7cf6ee73cd6d53ffd827ed37f00f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_732a828832190414ff70b026946bf851b7d7cf6ee73cd6d53ffd827ed37f00f5->enter($__internal_732a828832190414ff70b026946bf851b7d7cf6ee73cd6d53ffd827ed37f00f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_6888f788bf22258fe263b745923f797d46ccf4bff633edabfcf8fa80b3237b0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6888f788bf22258fe263b745923f797d46ccf4bff633edabfcf8fa80b3237b0e->enter($__internal_6888f788bf22258fe263b745923f797d46ccf4bff633edabfcf8fa80b3237b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_732a828832190414ff70b026946bf851b7d7cf6ee73cd6d53ffd827ed37f00f5->leave($__internal_732a828832190414ff70b026946bf851b7d7cf6ee73cd6d53ffd827ed37f00f5_prof);

        
        $__internal_6888f788bf22258fe263b745923f797d46ccf4bff633edabfcf8fa80b3237b0e->leave($__internal_6888f788bf22258fe263b745923f797d46ccf4bff633edabfcf8fa80b3237b0e_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_911bcc1c733ba22ce165d36aa02c97809042eae23563ba9e048f42f73e7f5397 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_911bcc1c733ba22ce165d36aa02c97809042eae23563ba9e048f42f73e7f5397->enter($__internal_911bcc1c733ba22ce165d36aa02c97809042eae23563ba9e048f42f73e7f5397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_db697641ffeb711d94b92bf918a6251994f14386dbb581c1727ce6a25ba54f55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db697641ffeb711d94b92bf918a6251994f14386dbb581c1727ce6a25ba54f55->enter($__internal_db697641ffeb711d94b92bf918a6251994f14386dbb581c1727ce6a25ba54f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_db697641ffeb711d94b92bf918a6251994f14386dbb581c1727ce6a25ba54f55->leave($__internal_db697641ffeb711d94b92bf918a6251994f14386dbb581c1727ce6a25ba54f55_prof);

        
        $__internal_911bcc1c733ba22ce165d36aa02c97809042eae23563ba9e048f42f73e7f5397->leave($__internal_911bcc1c733ba22ce165d36aa02c97809042eae23563ba9e048f42f73e7f5397_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_8ed375f4ea45d1feae220b304c45241f67aea12779445ac042968d7b104b05b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ed375f4ea45d1feae220b304c45241f67aea12779445ac042968d7b104b05b1->enter($__internal_8ed375f4ea45d1feae220b304c45241f67aea12779445ac042968d7b104b05b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_c8114b42ca56856968332e4ade51592801cd8297f89db3272841b09def411029 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8114b42ca56856968332e4ade51592801cd8297f89db3272841b09def411029->enter($__internal_c8114b42ca56856968332e4ade51592801cd8297f89db3272841b09def411029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_c8114b42ca56856968332e4ade51592801cd8297f89db3272841b09def411029->leave($__internal_c8114b42ca56856968332e4ade51592801cd8297f89db3272841b09def411029_prof);

        
        $__internal_8ed375f4ea45d1feae220b304c45241f67aea12779445ac042968d7b104b05b1->leave($__internal_8ed375f4ea45d1feae220b304c45241f67aea12779445ac042968d7b104b05b1_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_b734de63a3331503ac1e09b7b4b6a0f9ba3aaf2a53054d2ab971022117b2e840 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b734de63a3331503ac1e09b7b4b6a0f9ba3aaf2a53054d2ab971022117b2e840->enter($__internal_b734de63a3331503ac1e09b7b4b6a0f9ba3aaf2a53054d2ab971022117b2e840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_34bf3b83bb0716a296276a725dd6d2658240e0083974ce61cefe8ad21fffcc1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34bf3b83bb0716a296276a725dd6d2658240e0083974ce61cefe8ad21fffcc1d->enter($__internal_34bf3b83bb0716a296276a725dd6d2658240e0083974ce61cefe8ad21fffcc1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_34bf3b83bb0716a296276a725dd6d2658240e0083974ce61cefe8ad21fffcc1d->leave($__internal_34bf3b83bb0716a296276a725dd6d2658240e0083974ce61cefe8ad21fffcc1d_prof);

        
        $__internal_b734de63a3331503ac1e09b7b4b6a0f9ba3aaf2a53054d2ab971022117b2e840->leave($__internal_b734de63a3331503ac1e09b7b4b6a0f9ba3aaf2a53054d2ab971022117b2e840_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_f0db1d809df417d4abd0852809a47b3fba640e80664a0c22e4f7f8c153b79c79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0db1d809df417d4abd0852809a47b3fba640e80664a0c22e4f7f8c153b79c79->enter($__internal_f0db1d809df417d4abd0852809a47b3fba640e80664a0c22e4f7f8c153b79c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_68e358c3a9faf6d8b97e794b83a30d298125be5a396d6934924972452fffafb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68e358c3a9faf6d8b97e794b83a30d298125be5a396d6934924972452fffafb3->enter($__internal_68e358c3a9faf6d8b97e794b83a30d298125be5a396d6934924972452fffafb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_68e358c3a9faf6d8b97e794b83a30d298125be5a396d6934924972452fffafb3->leave($__internal_68e358c3a9faf6d8b97e794b83a30d298125be5a396d6934924972452fffafb3_prof);

        
        $__internal_f0db1d809df417d4abd0852809a47b3fba640e80664a0c22e4f7f8c153b79c79->leave($__internal_f0db1d809df417d4abd0852809a47b3fba640e80664a0c22e4f7f8c153b79c79_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_533f23a8f77d4eeb7b274511b9357c217da11afc2d896c7492902682e0eeedb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_533f23a8f77d4eeb7b274511b9357c217da11afc2d896c7492902682e0eeedb5->enter($__internal_533f23a8f77d4eeb7b274511b9357c217da11afc2d896c7492902682e0eeedb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_a855e8b5526a6a4392de41e73d129818a9acd3f8b2d7cbe3843452dd00098e37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a855e8b5526a6a4392de41e73d129818a9acd3f8b2d7cbe3843452dd00098e37->enter($__internal_a855e8b5526a6a4392de41e73d129818a9acd3f8b2d7cbe3843452dd00098e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_a855e8b5526a6a4392de41e73d129818a9acd3f8b2d7cbe3843452dd00098e37->leave($__internal_a855e8b5526a6a4392de41e73d129818a9acd3f8b2d7cbe3843452dd00098e37_prof);

        
        $__internal_533f23a8f77d4eeb7b274511b9357c217da11afc2d896c7492902682e0eeedb5->leave($__internal_533f23a8f77d4eeb7b274511b9357c217da11afc2d896c7492902682e0eeedb5_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_5cfbb66b51d9e4b8d6eb6a32b477aaf26d017e3183ad014743e6958b593e8d33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cfbb66b51d9e4b8d6eb6a32b477aaf26d017e3183ad014743e6958b593e8d33->enter($__internal_5cfbb66b51d9e4b8d6eb6a32b477aaf26d017e3183ad014743e6958b593e8d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_b1ec3fd449dfeaba97bd689c8bf28dc51246b280b77e37b83eaf4dc13c81455e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1ec3fd449dfeaba97bd689c8bf28dc51246b280b77e37b83eaf4dc13c81455e->enter($__internal_b1ec3fd449dfeaba97bd689c8bf28dc51246b280b77e37b83eaf4dc13c81455e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_b1ec3fd449dfeaba97bd689c8bf28dc51246b280b77e37b83eaf4dc13c81455e->leave($__internal_b1ec3fd449dfeaba97bd689c8bf28dc51246b280b77e37b83eaf4dc13c81455e_prof);

        
        $__internal_5cfbb66b51d9e4b8d6eb6a32b477aaf26d017e3183ad014743e6958b593e8d33->leave($__internal_5cfbb66b51d9e4b8d6eb6a32b477aaf26d017e3183ad014743e6958b593e8d33_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_18f0e52f6107bf86f05863ab840e42a4212c1c7fe30a0d092fd79e7c7e91d20e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18f0e52f6107bf86f05863ab840e42a4212c1c7fe30a0d092fd79e7c7e91d20e->enter($__internal_18f0e52f6107bf86f05863ab840e42a4212c1c7fe30a0d092fd79e7c7e91d20e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_68578c0b527a401112efb0b70cadf1180662e666c9516f71ef615982732c9f5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68578c0b527a401112efb0b70cadf1180662e666c9516f71ef615982732c9f5d->enter($__internal_68578c0b527a401112efb0b70cadf1180662e666c9516f71ef615982732c9f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_68578c0b527a401112efb0b70cadf1180662e666c9516f71ef615982732c9f5d->leave($__internal_68578c0b527a401112efb0b70cadf1180662e666c9516f71ef615982732c9f5d_prof);

        
        $__internal_18f0e52f6107bf86f05863ab840e42a4212c1c7fe30a0d092fd79e7c7e91d20e->leave($__internal_18f0e52f6107bf86f05863ab840e42a4212c1c7fe30a0d092fd79e7c7e91d20e_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_8fa3d30656e14169df6b9b249701481fea168d2e27d331eece3fb30cefc5214a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fa3d30656e14169df6b9b249701481fea168d2e27d331eece3fb30cefc5214a->enter($__internal_8fa3d30656e14169df6b9b249701481fea168d2e27d331eece3fb30cefc5214a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_e10f5e246131c4a1dfb25c7b163831957dec6fc74568dbcdea08327dc41ab30e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e10f5e246131c4a1dfb25c7b163831957dec6fc74568dbcdea08327dc41ab30e->enter($__internal_e10f5e246131c4a1dfb25c7b163831957dec6fc74568dbcdea08327dc41ab30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_e10f5e246131c4a1dfb25c7b163831957dec6fc74568dbcdea08327dc41ab30e->leave($__internal_e10f5e246131c4a1dfb25c7b163831957dec6fc74568dbcdea08327dc41ab30e_prof);

        
        $__internal_8fa3d30656e14169df6b9b249701481fea168d2e27d331eece3fb30cefc5214a->leave($__internal_8fa3d30656e14169df6b9b249701481fea168d2e27d331eece3fb30cefc5214a_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_8f4b1381054d66bbdd2074b80925bcf7408eba6de8a32bb349ad1c051e69d419 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f4b1381054d66bbdd2074b80925bcf7408eba6de8a32bb349ad1c051e69d419->enter($__internal_8f4b1381054d66bbdd2074b80925bcf7408eba6de8a32bb349ad1c051e69d419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_58acdfd5903fcdf91249184560c96e3aa9d1daf02fd689e475d9bfc89b5a2ec4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58acdfd5903fcdf91249184560c96e3aa9d1daf02fd689e475d9bfc89b5a2ec4->enter($__internal_58acdfd5903fcdf91249184560c96e3aa9d1daf02fd689e475d9bfc89b5a2ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_58acdfd5903fcdf91249184560c96e3aa9d1daf02fd689e475d9bfc89b5a2ec4->leave($__internal_58acdfd5903fcdf91249184560c96e3aa9d1daf02fd689e475d9bfc89b5a2ec4_prof);

        
        $__internal_8f4b1381054d66bbdd2074b80925bcf7408eba6de8a32bb349ad1c051e69d419->leave($__internal_8f4b1381054d66bbdd2074b80925bcf7408eba6de8a32bb349ad1c051e69d419_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_e98947f1efa0c16a1a54585592cc0b12931b09e71237200c6476c3ee29eb3e67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e98947f1efa0c16a1a54585592cc0b12931b09e71237200c6476c3ee29eb3e67->enter($__internal_e98947f1efa0c16a1a54585592cc0b12931b09e71237200c6476c3ee29eb3e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_975a4bf99abd3e5d42cd125a944edb206bffd066348b17b2eac6e2fae0a921bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_975a4bf99abd3e5d42cd125a944edb206bffd066348b17b2eac6e2fae0a921bf->enter($__internal_975a4bf99abd3e5d42cd125a944edb206bffd066348b17b2eac6e2fae0a921bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_975a4bf99abd3e5d42cd125a944edb206bffd066348b17b2eac6e2fae0a921bf->leave($__internal_975a4bf99abd3e5d42cd125a944edb206bffd066348b17b2eac6e2fae0a921bf_prof);

        
        $__internal_e98947f1efa0c16a1a54585592cc0b12931b09e71237200c6476c3ee29eb3e67->leave($__internal_e98947f1efa0c16a1a54585592cc0b12931b09e71237200c6476c3ee29eb3e67_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_e5bec96c3aed5603d1149f2a6abd0a85f8bdf6d1c6f1685b6a4af6a0ec18fc62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5bec96c3aed5603d1149f2a6abd0a85f8bdf6d1c6f1685b6a4af6a0ec18fc62->enter($__internal_e5bec96c3aed5603d1149f2a6abd0a85f8bdf6d1c6f1685b6a4af6a0ec18fc62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_ba3352750581628e7b81251bbfb5b40655966f4b93e9f2748d1604dd316e2cad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba3352750581628e7b81251bbfb5b40655966f4b93e9f2748d1604dd316e2cad->enter($__internal_ba3352750581628e7b81251bbfb5b40655966f4b93e9f2748d1604dd316e2cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_ba3352750581628e7b81251bbfb5b40655966f4b93e9f2748d1604dd316e2cad->leave($__internal_ba3352750581628e7b81251bbfb5b40655966f4b93e9f2748d1604dd316e2cad_prof);

        
        $__internal_e5bec96c3aed5603d1149f2a6abd0a85f8bdf6d1c6f1685b6a4af6a0ec18fc62->leave($__internal_e5bec96c3aed5603d1149f2a6abd0a85f8bdf6d1c6f1685b6a4af6a0ec18fc62_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_5c898780e0d31a7e89e8c30b4f5645035592fb6d775fd166ccff0fdc4be3449f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c898780e0d31a7e89e8c30b4f5645035592fb6d775fd166ccff0fdc4be3449f->enter($__internal_5c898780e0d31a7e89e8c30b4f5645035592fb6d775fd166ccff0fdc4be3449f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_261db6af558b3ded302bb920c078913b9e4aaf19d89a6ee09414536cefa076cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_261db6af558b3ded302bb920c078913b9e4aaf19d89a6ee09414536cefa076cb->enter($__internal_261db6af558b3ded302bb920c078913b9e4aaf19d89a6ee09414536cefa076cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_261db6af558b3ded302bb920c078913b9e4aaf19d89a6ee09414536cefa076cb->leave($__internal_261db6af558b3ded302bb920c078913b9e4aaf19d89a6ee09414536cefa076cb_prof);

        
        $__internal_5c898780e0d31a7e89e8c30b4f5645035592fb6d775fd166ccff0fdc4be3449f->leave($__internal_5c898780e0d31a7e89e8c30b4f5645035592fb6d775fd166ccff0fdc4be3449f_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_8b660166e13bd670732ca2c6ec7fe01504312b0f12ac9e0f54670d9b2a54f61c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b660166e13bd670732ca2c6ec7fe01504312b0f12ac9e0f54670d9b2a54f61c->enter($__internal_8b660166e13bd670732ca2c6ec7fe01504312b0f12ac9e0f54670d9b2a54f61c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_98ae27148375b39bae5b9cf800073d00737f15da819c7b47fef709681a9e761c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98ae27148375b39bae5b9cf800073d00737f15da819c7b47fef709681a9e761c->enter($__internal_98ae27148375b39bae5b9cf800073d00737f15da819c7b47fef709681a9e761c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_98ae27148375b39bae5b9cf800073d00737f15da819c7b47fef709681a9e761c->leave($__internal_98ae27148375b39bae5b9cf800073d00737f15da819c7b47fef709681a9e761c_prof);

        
        $__internal_8b660166e13bd670732ca2c6ec7fe01504312b0f12ac9e0f54670d9b2a54f61c->leave($__internal_8b660166e13bd670732ca2c6ec7fe01504312b0f12ac9e0f54670d9b2a54f61c_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_5e304f75192b044121a03f4e7e33241f1b6665c327d9730850c13e7b38ce0320 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e304f75192b044121a03f4e7e33241f1b6665c327d9730850c13e7b38ce0320->enter($__internal_5e304f75192b044121a03f4e7e33241f1b6665c327d9730850c13e7b38ce0320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_ca4ecd9bcbac733f62783ecaa192851c9353544a9dddce5cc7aba9dc95c54a98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca4ecd9bcbac733f62783ecaa192851c9353544a9dddce5cc7aba9dc95c54a98->enter($__internal_ca4ecd9bcbac733f62783ecaa192851c9353544a9dddce5cc7aba9dc95c54a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ca4ecd9bcbac733f62783ecaa192851c9353544a9dddce5cc7aba9dc95c54a98->leave($__internal_ca4ecd9bcbac733f62783ecaa192851c9353544a9dddce5cc7aba9dc95c54a98_prof);

        
        $__internal_5e304f75192b044121a03f4e7e33241f1b6665c327d9730850c13e7b38ce0320->leave($__internal_5e304f75192b044121a03f4e7e33241f1b6665c327d9730850c13e7b38ce0320_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_e23fb6d5d485c73af2b0388a4c8a99267fd0d5e2864292b94d5d308673874e77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e23fb6d5d485c73af2b0388a4c8a99267fd0d5e2864292b94d5d308673874e77->enter($__internal_e23fb6d5d485c73af2b0388a4c8a99267fd0d5e2864292b94d5d308673874e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_7a37c9353ab147a9ae81c35a5d633c58439b9ee25fadf24d1199d769c1b64052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a37c9353ab147a9ae81c35a5d633c58439b9ee25fadf24d1199d769c1b64052->enter($__internal_7a37c9353ab147a9ae81c35a5d633c58439b9ee25fadf24d1199d769c1b64052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_7a37c9353ab147a9ae81c35a5d633c58439b9ee25fadf24d1199d769c1b64052->leave($__internal_7a37c9353ab147a9ae81c35a5d633c58439b9ee25fadf24d1199d769c1b64052_prof);

        
        $__internal_e23fb6d5d485c73af2b0388a4c8a99267fd0d5e2864292b94d5d308673874e77->leave($__internal_e23fb6d5d485c73af2b0388a4c8a99267fd0d5e2864292b94d5d308673874e77_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_caf969fd92fa6890646f3706aafb872375f398bffa5cee0ed7ecfea8047ffd31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caf969fd92fa6890646f3706aafb872375f398bffa5cee0ed7ecfea8047ffd31->enter($__internal_caf969fd92fa6890646f3706aafb872375f398bffa5cee0ed7ecfea8047ffd31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_d7e5594cfafd856510c572140038301be81a14c2b2a96dbe6aaa1bbf026dcf8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7e5594cfafd856510c572140038301be81a14c2b2a96dbe6aaa1bbf026dcf8e->enter($__internal_d7e5594cfafd856510c572140038301be81a14c2b2a96dbe6aaa1bbf026dcf8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_d7e5594cfafd856510c572140038301be81a14c2b2a96dbe6aaa1bbf026dcf8e->leave($__internal_d7e5594cfafd856510c572140038301be81a14c2b2a96dbe6aaa1bbf026dcf8e_prof);

        
        $__internal_caf969fd92fa6890646f3706aafb872375f398bffa5cee0ed7ecfea8047ffd31->leave($__internal_caf969fd92fa6890646f3706aafb872375f398bffa5cee0ed7ecfea8047ffd31_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_7e3441d6f2a8c5f712b9062f130d1308ff6104979488d372e8e5102bc67da7ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e3441d6f2a8c5f712b9062f130d1308ff6104979488d372e8e5102bc67da7ee->enter($__internal_7e3441d6f2a8c5f712b9062f130d1308ff6104979488d372e8e5102bc67da7ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_166febbf8de46e2b1d347fa73149aa719426f0c6807abc8cc30804367217b688 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_166febbf8de46e2b1d347fa73149aa719426f0c6807abc8cc30804367217b688->enter($__internal_166febbf8de46e2b1d347fa73149aa719426f0c6807abc8cc30804367217b688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_166febbf8de46e2b1d347fa73149aa719426f0c6807abc8cc30804367217b688->leave($__internal_166febbf8de46e2b1d347fa73149aa719426f0c6807abc8cc30804367217b688_prof);

        
        $__internal_7e3441d6f2a8c5f712b9062f130d1308ff6104979488d372e8e5102bc67da7ee->leave($__internal_7e3441d6f2a8c5f712b9062f130d1308ff6104979488d372e8e5102bc67da7ee_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_fe4f32c98aa363054a01f6dc5ca86aa65afb111baa8887b921d8aaa6516e16a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe4f32c98aa363054a01f6dc5ca86aa65afb111baa8887b921d8aaa6516e16a8->enter($__internal_fe4f32c98aa363054a01f6dc5ca86aa65afb111baa8887b921d8aaa6516e16a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_135f0a81f179f7b303c3afd5bc99b64a7e0c09c5c936e6250b2ff3e7f9dd4faa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_135f0a81f179f7b303c3afd5bc99b64a7e0c09c5c936e6250b2ff3e7f9dd4faa->enter($__internal_135f0a81f179f7b303c3afd5bc99b64a7e0c09c5c936e6250b2ff3e7f9dd4faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_135f0a81f179f7b303c3afd5bc99b64a7e0c09c5c936e6250b2ff3e7f9dd4faa->leave($__internal_135f0a81f179f7b303c3afd5bc99b64a7e0c09c5c936e6250b2ff3e7f9dd4faa_prof);

        
        $__internal_fe4f32c98aa363054a01f6dc5ca86aa65afb111baa8887b921d8aaa6516e16a8->leave($__internal_fe4f32c98aa363054a01f6dc5ca86aa65afb111baa8887b921d8aaa6516e16a8_prof);

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
