<?php

/* foundation_5_layout.html.twig */
class __TwigTemplate_0fcb9f4aedc68b3686addf51a84b4398270083f3412d8ff7cc6c519392b117c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "foundation_5_layout.html.twig", 1);
        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'form_label' => array($this, 'block_form_label'),
            'choice_label' => array($this, 'block_choice_label'),
            'checkbox_label' => array($this, 'block_checkbox_label'),
            'radio_label' => array($this, 'block_radio_label'),
            'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
            'form_row' => array($this, 'block_form_row'),
            'choice_row' => array($this, 'block_choice_row'),
            'date_row' => array($this, 'block_date_row'),
            'time_row' => array($this, 'block_time_row'),
            'datetime_row' => array($this, 'block_datetime_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_461ca7c610e1aff98651e8be999e1ebb62b35b4ffbe5dfea3110a9133c67797e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_461ca7c610e1aff98651e8be999e1ebb62b35b4ffbe5dfea3110a9133c67797e->enter($__internal_461ca7c610e1aff98651e8be999e1ebb62b35b4ffbe5dfea3110a9133c67797e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_6f103321d537bc10c7c5f15092355ffe38613adf26945237d3cbd66a91cac1e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f103321d537bc10c7c5f15092355ffe38613adf26945237d3cbd66a91cac1e0->enter($__internal_6f103321d537bc10c7c5f15092355ffe38613adf26945237d3cbd66a91cac1e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_461ca7c610e1aff98651e8be999e1ebb62b35b4ffbe5dfea3110a9133c67797e->leave($__internal_461ca7c610e1aff98651e8be999e1ebb62b35b4ffbe5dfea3110a9133c67797e_prof);

        
        $__internal_6f103321d537bc10c7c5f15092355ffe38613adf26945237d3cbd66a91cac1e0->leave($__internal_6f103321d537bc10c7c5f15092355ffe38613adf26945237d3cbd66a91cac1e0_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_5c89ac37789931bd7b6e1c3f9fb2a398fb044f866ba59273204ad9e81a8f9a3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c89ac37789931bd7b6e1c3f9fb2a398fb044f866ba59273204ad9e81a8f9a3b->enter($__internal_5c89ac37789931bd7b6e1c3f9fb2a398fb044f866ba59273204ad9e81a8f9a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_2d8f52b88b44e27ff5b23362b2a8899f7c393cdbed4361df7de8a6de37130550 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d8f52b88b44e27ff5b23362b2a8899f7c393cdbed4361df7de8a6de37130550->enter($__internal_2d8f52b88b44e27ff5b23362b2a8899f7c393cdbed4361df7de8a6de37130550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 7, $this->getSourceContext()); })())) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 8, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_2d8f52b88b44e27ff5b23362b2a8899f7c393cdbed4361df7de8a6de37130550->leave($__internal_2d8f52b88b44e27ff5b23362b2a8899f7c393cdbed4361df7de8a6de37130550_prof);

        
        $__internal_5c89ac37789931bd7b6e1c3f9fb2a398fb044f866ba59273204ad9e81a8f9a3b->leave($__internal_5c89ac37789931bd7b6e1c3f9fb2a398fb044f866ba59273204ad9e81a8f9a3b_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_13a41eb3cc46fa84bcd01c3c1eecb24c94a29ba585700093f09570381e0d29f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13a41eb3cc46fa84bcd01c3c1eecb24c94a29ba585700093f09570381e0d29f9->enter($__internal_13a41eb3cc46fa84bcd01c3c1eecb24c94a29ba585700093f09570381e0d29f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_00f66607cd6297cd8c4370bb5db89600aeedcb64567cf5dec6aedaf6190d953b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00f66607cd6297cd8c4370bb5db89600aeedcb64567cf5dec6aedaf6190d953b->enter($__internal_00f66607cd6297cd8c4370bb5db89600aeedcb64567cf5dec6aedaf6190d953b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 14, $this->getSourceContext()); })())) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 15, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_00f66607cd6297cd8c4370bb5db89600aeedcb64567cf5dec6aedaf6190d953b->leave($__internal_00f66607cd6297cd8c4370bb5db89600aeedcb64567cf5dec6aedaf6190d953b_prof);

        
        $__internal_13a41eb3cc46fa84bcd01c3c1eecb24c94a29ba585700093f09570381e0d29f9->leave($__internal_13a41eb3cc46fa84bcd01c3c1eecb24c94a29ba585700093f09570381e0d29f9_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_01b44985f2523b7f61dfc02e63468f6693aec3d8f2a8367a6c8c7df9920c2e75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01b44985f2523b7f61dfc02e63468f6693aec3d8f2a8367a6c8c7df9920c2e75->enter($__internal_01b44985f2523b7f61dfc02e63468f6693aec3d8f2a8367a6c8c7df9920c2e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_c8e30fe6e04e3b0796b29b092ccb79ad41b8f16ddae6dc363de2f198b21627ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8e30fe6e04e3b0796b29b092ccb79ad41b8f16ddae6dc363de2f198b21627ea->enter($__internal_c8e30fe6e04e3b0796b29b092ccb79ad41b8f16ddae6dc363de2f198b21627ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 21, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_c8e30fe6e04e3b0796b29b092ccb79ad41b8f16ddae6dc363de2f198b21627ea->leave($__internal_c8e30fe6e04e3b0796b29b092ccb79ad41b8f16ddae6dc363de2f198b21627ea_prof);

        
        $__internal_01b44985f2523b7f61dfc02e63468f6693aec3d8f2a8367a6c8c7df9920c2e75->leave($__internal_01b44985f2523b7f61dfc02e63468f6693aec3d8f2a8367a6c8c7df9920c2e75_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_33fe955e0c987947008e9d35057ca532f562bdff1a2590163fac438c701c4989 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33fe955e0c987947008e9d35057ca532f562bdff1a2590163fac438c701c4989->enter($__internal_33fe955e0c987947008e9d35057ca532f562bdff1a2590163fac438c701c4989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_bc950d591223a7548ee5e99c5fff4104b2597f3f5a0de1869c1e08b87e629320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc950d591223a7548ee5e99c5fff4104b2597f3f5a0de1869c1e08b87e629320->enter($__internal_bc950d591223a7548ee5e99c5fff4104b2597f3f5a0de1869c1e08b87e629320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 26
        echo "<div class=\"row collapse\">
        ";
        // line 27
        $context["prepend"] = ("{{" == twig_slice($this->env, (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 27, $this->getSourceContext()); })()), 0, 2));
        // line 28
        echo "        ";
        if ( !(isset($context["prepend"]) || array_key_exists("prepend", $context) ? $context["prepend"] : (function () { throw new Twig_Error_Runtime('Variable "prepend" does not exist.', 28, $this->getSourceContext()); })())) {
            // line 29
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">";
            // line 30
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 30, $this->getSourceContext()); })()), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 33
        echo "        <div class=\"small-9 large-10 columns\">";
        // line 34
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 35
        echo "</div>
        ";
        // line 36
        if ((isset($context["prepend"]) || array_key_exists("prepend", $context) ? $context["prepend"] : (function () { throw new Twig_Error_Runtime('Variable "prepend" does not exist.', 36, $this->getSourceContext()); })())) {
            // line 37
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">";
            // line 38
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 38, $this->getSourceContext()); })()), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 41
        echo "    </div>";
        
        $__internal_bc950d591223a7548ee5e99c5fff4104b2597f3f5a0de1869c1e08b87e629320->leave($__internal_bc950d591223a7548ee5e99c5fff4104b2597f3f5a0de1869c1e08b87e629320_prof);

        
        $__internal_33fe955e0c987947008e9d35057ca532f562bdff1a2590163fac438c701c4989->leave($__internal_33fe955e0c987947008e9d35057ca532f562bdff1a2590163fac438c701c4989_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_17566b3ffb69c63a6246b929d907eb95e0c9cdfe3106aa163dbe1f4976e3e3da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17566b3ffb69c63a6246b929d907eb95e0c9cdfe3106aa163dbe1f4976e3e3da->enter($__internal_17566b3ffb69c63a6246b929d907eb95e0c9cdfe3106aa163dbe1f4976e3e3da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_b5455a7da7a62400202c22c60eb9a61cb1d01273fe624cb2af8523360f72fb2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5455a7da7a62400202c22c60eb9a61cb1d01273fe624cb2af8523360f72fb2b->enter($__internal_b5455a7da7a62400202c22c60eb9a61cb1d01273fe624cb2af8523360f72fb2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 45
        echo "<div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">";
        // line 47
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 48
        echo "</div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>";
        
        $__internal_b5455a7da7a62400202c22c60eb9a61cb1d01273fe624cb2af8523360f72fb2b->leave($__internal_b5455a7da7a62400202c22c60eb9a61cb1d01273fe624cb2af8523360f72fb2b_prof);

        
        $__internal_17566b3ffb69c63a6246b929d907eb95e0c9cdfe3106aa163dbe1f4976e3e3da->leave($__internal_17566b3ffb69c63a6246b929d907eb95e0c9cdfe3106aa163dbe1f4976e3e3da_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_c8c68fed8e83ddd7ee3bbf5d4c3bbd0fcfc672a49ad564b2620294fb59ab42d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8c68fed8e83ddd7ee3bbf5d4c3bbd0fcfc672a49ad564b2620294fb59ab42d6->enter($__internal_c8c68fed8e83ddd7ee3bbf5d4c3bbd0fcfc672a49ad564b2620294fb59ab42d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_bc9f5e38f0f55366442ab1682e7e6d73b33ebd8dd42425b1a73ba0cbd23c4660 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc9f5e38f0f55366442ab1682e7e6d73b33ebd8dd42425b1a73ba0cbd23c4660->enter($__internal_bc9f5e38f0f55366442ab1682e7e6d73b33ebd8dd42425b1a73ba0cbd23c4660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 56
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 56, $this->getSourceContext()); })()) == "single_text")) {
            // line 57
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 59, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 60
            echo "        <div class=\"row\">
            <div class=\"large-7 columns\">";
            // line 61
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->getSourceContext()); })()), "date", array()), 'errors');
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 62
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), "time", array()), 'errors');
            echo "</div>
        </div>
        <div ";
            // line 64
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"large-7 columns\">";
            // line 65
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 65, $this->getSourceContext()); })()), "date", array()), 'widget', array("datetime" => true));
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 66
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 66, $this->getSourceContext()); })()), "time", array()), 'widget', array("datetime" => true));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_bc9f5e38f0f55366442ab1682e7e6d73b33ebd8dd42425b1a73ba0cbd23c4660->leave($__internal_bc9f5e38f0f55366442ab1682e7e6d73b33ebd8dd42425b1a73ba0cbd23c4660_prof);

        
        $__internal_c8c68fed8e83ddd7ee3bbf5d4c3bbd0fcfc672a49ad564b2620294fb59ab42d6->leave($__internal_c8c68fed8e83ddd7ee3bbf5d4c3bbd0fcfc672a49ad564b2620294fb59ab42d6_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_0267047185c64923c9d4fa8aa25ceb87a87910d32ccb2b0030c591f7214a0b3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0267047185c64923c9d4fa8aa25ceb87a87910d32ccb2b0030c591f7214a0b3d->enter($__internal_0267047185c64923c9d4fa8aa25ceb87a87910d32ccb2b0030c591f7214a0b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_cab20e38a0a1f7a45ea94a450f3f553ca485eb2f8bbeadc442e3789519aa6eae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cab20e38a0a1f7a45ea94a450f3f553ca485eb2f8bbeadc442e3789519aa6eae->enter($__internal_cab20e38a0a1f7a45ea94a450f3f553ca485eb2f8bbeadc442e3789519aa6eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 72
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 72, $this->getSourceContext()); })()) == "single_text")) {
            // line 73
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 75
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 75, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 76
            echo "        ";
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 76, $this->getSourceContext()); })()))) {
                // line 77
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 79
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "date_pattern" does not exist.', 79, $this->getSourceContext()); })()), array("{{ year }}" => (("<div class=\"large-4 columns\">" .             // line 80
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 80, $this->getSourceContext()); })()), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (("<div class=\"large-4 columns\">" .             // line 81
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 81, $this->getSourceContext()); })()), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (("<div class=\"large-4 columns\">" .             // line 82
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 82, $this->getSourceContext()); })()), "day", array()), 'widget')) . "</div>")));
            // line 84
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 84, $this->getSourceContext()); })()))) {
                // line 85
                echo "            </div>
        ";
            }
            // line 87
            echo "    ";
        }
        
        $__internal_cab20e38a0a1f7a45ea94a450f3f553ca485eb2f8bbeadc442e3789519aa6eae->leave($__internal_cab20e38a0a1f7a45ea94a450f3f553ca485eb2f8bbeadc442e3789519aa6eae_prof);

        
        $__internal_0267047185c64923c9d4fa8aa25ceb87a87910d32ccb2b0030c591f7214a0b3d->leave($__internal_0267047185c64923c9d4fa8aa25ceb87a87910d32ccb2b0030c591f7214a0b3d_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_c43b9a6ad0397baac7f007a2cd5948b31dec39cfc3698ddd0cb1748b42762cb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c43b9a6ad0397baac7f007a2cd5948b31dec39cfc3698ddd0cb1748b42762cb6->enter($__internal_c43b9a6ad0397baac7f007a2cd5948b31dec39cfc3698ddd0cb1748b42762cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_6efed58b48936679fd496e209bc6c4e70b684619dfe601adcd22d8b1bcc1ef64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6efed58b48936679fd496e209bc6c4e70b684619dfe601adcd22d8b1bcc1ef64->enter($__internal_6efed58b48936679fd496e209bc6c4e70b684619dfe601adcd22d8b1bcc1ef64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 91
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 91, $this->getSourceContext()); })()) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 94, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 95
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 95, $this->getSourceContext()); })())))) {
                // line 96
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 98
            echo "        ";
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 98, $this->getSourceContext()); })())) {
                // line 99
                echo "            <div class=\"large-4 columns\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 99, $this->getSourceContext()); })()), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 106
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 106, $this->getSourceContext()); })()), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 116
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 116, $this->getSourceContext()); })()), "second", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 121
                echo "            <div class=\"large-6 columns\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 121, $this->getSourceContext()); })()), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 128
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            }
            // line 133
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 133, $this->getSourceContext()); })())))) {
                // line 134
                echo "            </div>
        ";
            }
            // line 136
            echo "    ";
        }
        
        $__internal_6efed58b48936679fd496e209bc6c4e70b684619dfe601adcd22d8b1bcc1ef64->leave($__internal_6efed58b48936679fd496e209bc6c4e70b684619dfe601adcd22d8b1bcc1ef64_prof);

        
        $__internal_c43b9a6ad0397baac7f007a2cd5948b31dec39cfc3698ddd0cb1748b42762cb6->leave($__internal_c43b9a6ad0397baac7f007a2cd5948b31dec39cfc3698ddd0cb1748b42762cb6_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_1ce2b9651623d9fa09ae7944ca7ddeb66d18507866b3f4bf8ad49831cc2af290 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ce2b9651623d9fa09ae7944ca7ddeb66d18507866b3f4bf8ad49831cc2af290->enter($__internal_1ce2b9651623d9fa09ae7944ca7ddeb66d18507866b3f4bf8ad49831cc2af290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_15d3c7d21a70715d9590a5e0313d780d163b4d1cf8fbe20f8c936785e281f1d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15d3c7d21a70715d9590a5e0313d780d163b4d1cf8fbe20f8c936785e281f1d6->enter($__internal_15d3c7d21a70715d9590a5e0313d780d163b4d1cf8fbe20f8c936785e281f1d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 140
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 140, $this->getSourceContext()); })())) > 0)) {
            // line 141
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 141, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 142
            echo "    ";
        }
        // line 143
        echo "
    ";
        // line 144
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 144, $this->getSourceContext()); })())) {
            // line 145
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 145, $this->getSourceContext()); })()), array("style" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "style", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "style", array()), "")) : ("")) . " height: auto; background-image: none;"))));
            // line 146
            echo "    ";
        }
        // line 147
        echo "
    ";
        // line 148
        if (((((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 148, $this->getSourceContext()); })()) && (null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 148, $this->getSourceContext()); })()))) &&  !(isset($context["placeholder_in_choices"]) || array_key_exists("placeholder_in_choices", $context) ? $context["placeholder_in_choices"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder_in_choices" does not exist.', 148, $this->getSourceContext()); })())) &&  !(isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 148, $this->getSourceContext()); })()))) {
            // line 149
            $context["required"] = false;
        }
        // line 151
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 151, $this->getSourceContext()); })())) {
            echo " multiple=\"multiple\" data-customforms=\"disabled\"";
        }
        echo ">
        ";
        // line 152
        if ( !(null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 152, $this->getSourceContext()); })()))) {
            // line 153
            echo "<option value=\"\"";
            if (((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 153, $this->getSourceContext()); })()) && twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 153, $this->getSourceContext()); })())))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 153, $this->getSourceContext()); })()) === false)) ? ((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 153, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 153, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 153, $this->getSourceContext()); })())))), "html", null, true);
            echo "</option>";
        }
        // line 155
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 155, $this->getSourceContext()); })())) > 0)) {
            // line 156
            $context["options"] = (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 156, $this->getSourceContext()); })());
            // line 157
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 158
            if (((twig_length_filter($this->env, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 158, $this->getSourceContext()); })())) > 0) &&  !(null === (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 158, $this->getSourceContext()); })())))) {
                // line 159
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 159, $this->getSourceContext()); })()), "html", null, true);
                echo "</option>";
            }
        }
        // line 162
        $context["options"] = (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 162, $this->getSourceContext()); })());
        // line 163
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 164
        echo "</select>";
        
        $__internal_15d3c7d21a70715d9590a5e0313d780d163b4d1cf8fbe20f8c936785e281f1d6->leave($__internal_15d3c7d21a70715d9590a5e0313d780d163b4d1cf8fbe20f8c936785e281f1d6_prof);

        
        $__internal_1ce2b9651623d9fa09ae7944ca7ddeb66d18507866b3f4bf8ad49831cc2af290->leave($__internal_1ce2b9651623d9fa09ae7944ca7ddeb66d18507866b3f4bf8ad49831cc2af290_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_40231a046761a144ed68fe0af6f54174bad43d026ac1855001c74558291cb48b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40231a046761a144ed68fe0af6f54174bad43d026ac1855001c74558291cb48b->enter($__internal_40231a046761a144ed68fe0af6f54174bad43d026ac1855001c74558291cb48b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_3b69e1dd09346b11e34674695c2638ec95b03ee6ebe9ce3b096badb7eb1d242e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b69e1dd09346b11e34674695c2638ec95b03ee6ebe9ce3b096badb7eb1d242e->enter($__internal_3b69e1dd09346b11e34674695c2638ec95b03ee6ebe9ce3b096badb7eb1d242e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 168
        if (twig_in_filter("-inline", ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 169
            echo "        <ul class=\"inline-list\">
            ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 170, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 171
                echo "                <li>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 172
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 173
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "        </ul>
    ";
        } else {
            // line 177
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 178, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 179
                echo "                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 180
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 181
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "        </div>
    ";
        }
        
        $__internal_3b69e1dd09346b11e34674695c2638ec95b03ee6ebe9ce3b096badb7eb1d242e->leave($__internal_3b69e1dd09346b11e34674695c2638ec95b03ee6ebe9ce3b096badb7eb1d242e_prof);

        
        $__internal_40231a046761a144ed68fe0af6f54174bad43d026ac1855001c74558291cb48b->leave($__internal_40231a046761a144ed68fe0af6f54174bad43d026ac1855001c74558291cb48b_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_22909ff6ba47ec46de7ff68d2e7b268424eb6361d24011faf4af1482e76dd74f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22909ff6ba47ec46de7ff68d2e7b268424eb6361d24011faf4af1482e76dd74f->enter($__internal_22909ff6ba47ec46de7ff68d2e7b268424eb6361d24011faf4af1482e76dd74f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_98f78f71c19275fa7ccb85b1cca175ee7347d9a625b412deb501b9067a092aea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98f78f71c19275fa7ccb85b1cca175ee7347d9a625b412deb501b9067a092aea->enter($__internal_98f78f71c19275fa7ccb85b1cca175ee7347d9a625b412deb501b9067a092aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 188
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 188, $this->getSourceContext()); })()), "")) : (""));
        // line 189
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 189, $this->getSourceContext()); })())) > 0)) {
            // line 190
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 190, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 191
            echo "    ";
        }
        // line 192
        echo "    ";
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 192, $this->getSourceContext()); })()))) {
            // line 193
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 193, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 195
            echo "        <div class=\"checkbox\">
            ";
            // line 196
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 196, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_98f78f71c19275fa7ccb85b1cca175ee7347d9a625b412deb501b9067a092aea->leave($__internal_98f78f71c19275fa7ccb85b1cca175ee7347d9a625b412deb501b9067a092aea_prof);

        
        $__internal_22909ff6ba47ec46de7ff68d2e7b268424eb6361d24011faf4af1482e76dd74f->leave($__internal_22909ff6ba47ec46de7ff68d2e7b268424eb6361d24011faf4af1482e76dd74f_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_37b4ecd4e3c600a3af5e4142c43ac25f842c46e2252a2c9a7234b7439d3170fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37b4ecd4e3c600a3af5e4142c43ac25f842c46e2252a2c9a7234b7439d3170fd->enter($__internal_37b4ecd4e3c600a3af5e4142c43ac25f842c46e2252a2c9a7234b7439d3170fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_0b601ba7373568dfee79054560111ab3b2ecb8b2e4582ad1f3eb2d681f99b2b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b601ba7373568dfee79054560111ab3b2ecb8b2e4582ad1f3eb2d681f99b2b3->enter($__internal_0b601ba7373568dfee79054560111ab3b2ecb8b2e4582ad1f3eb2d681f99b2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 202
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 202, $this->getSourceContext()); })()), "")) : (""));
        // line 203
        echo "    ";
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 203, $this->getSourceContext()); })()))) {
            // line 204
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 204, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 206
            echo "        ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 206, $this->getSourceContext()); })())) > 0)) {
                // line 207
                $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 207, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        <div class=\"radio\">
            ";
            // line 210
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 210, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_0b601ba7373568dfee79054560111ab3b2ecb8b2e4582ad1f3eb2d681f99b2b3->leave($__internal_0b601ba7373568dfee79054560111ab3b2ecb8b2e4582ad1f3eb2d681f99b2b3_prof);

        
        $__internal_37b4ecd4e3c600a3af5e4142c43ac25f842c46e2252a2c9a7234b7439d3170fd->leave($__internal_37b4ecd4e3c600a3af5e4142c43ac25f842c46e2252a2c9a7234b7439d3170fd_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_745938c4178c2adb62f3a95e8dd8e7d6921d20ce786b2b4b9241dec76d8ff4d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_745938c4178c2adb62f3a95e8dd8e7d6921d20ce786b2b4b9241dec76d8ff4d4->enter($__internal_745938c4178c2adb62f3a95e8dd8e7d6921d20ce786b2b4b9241dec76d8ff4d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_0bd9b383340a3f262836adafe44df3d4126feafdf6547e762c6b851af42d0bc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bd9b383340a3f262836adafe44df3d4126feafdf6547e762c6b851af42d0bc2->enter($__internal_0bd9b383340a3f262836adafe44df3d4126feafdf6547e762c6b851af42d0bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 218, $this->getSourceContext()); })())) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 219, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_0bd9b383340a3f262836adafe44df3d4126feafdf6547e762c6b851af42d0bc2->leave($__internal_0bd9b383340a3f262836adafe44df3d4126feafdf6547e762c6b851af42d0bc2_prof);

        
        $__internal_745938c4178c2adb62f3a95e8dd8e7d6921d20ce786b2b4b9241dec76d8ff4d4->leave($__internal_745938c4178c2adb62f3a95e8dd8e7d6921d20ce786b2b4b9241dec76d8ff4d4_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_f5109bbde6b40519400ddda3b8cf08ced202cdf1b683940d30a0b5479c75419b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5109bbde6b40519400ddda3b8cf08ced202cdf1b683940d30a0b5479c75419b->enter($__internal_f5109bbde6b40519400ddda3b8cf08ced202cdf1b683940d30a0b5479c75419b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_1bdcddea243a6cff9c58b842b4c32d99acd98a3d4cbb2c1007026635d5deeef1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bdcddea243a6cff9c58b842b4c32d99acd98a3d4cbb2c1007026635d5deeef1->enter($__internal_1bdcddea243a6cff9c58b842b4c32d99acd98a3d4cbb2c1007026635d5deeef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 225
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 225, $this->getSourceContext()); })())) > 0)) {
            // line 226
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 226, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 227
            echo "    ";
        }
        // line 228
        echo "    ";
        // line 229
        echo "    ";
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 229, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 230
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_1bdcddea243a6cff9c58b842b4c32d99acd98a3d4cbb2c1007026635d5deeef1->leave($__internal_1bdcddea243a6cff9c58b842b4c32d99acd98a3d4cbb2c1007026635d5deeef1_prof);

        
        $__internal_f5109bbde6b40519400ddda3b8cf08ced202cdf1b683940d30a0b5479c75419b->leave($__internal_f5109bbde6b40519400ddda3b8cf08ced202cdf1b683940d30a0b5479c75419b_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_de11d339ec0504ba59bf2182eb51fc109ca910384700fb3400b72f175ccc2094 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de11d339ec0504ba59bf2182eb51fc109ca910384700fb3400b72f175ccc2094->enter($__internal_de11d339ec0504ba59bf2182eb51fc109ca910384700fb3400b72f175ccc2094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_ef055b872ffe931002e91ffadde451999da432fb8954cdc7ff96e0a8db04da03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef055b872ffe931002e91ffadde451999da432fb8954cdc7ff96e0a8db04da03->enter($__internal_ef055b872ffe931002e91ffadde451999da432fb8954cdc7ff96e0a8db04da03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_ef055b872ffe931002e91ffadde451999da432fb8954cdc7ff96e0a8db04da03->leave($__internal_ef055b872ffe931002e91ffadde451999da432fb8954cdc7ff96e0a8db04da03_prof);

        
        $__internal_de11d339ec0504ba59bf2182eb51fc109ca910384700fb3400b72f175ccc2094->leave($__internal_de11d339ec0504ba59bf2182eb51fc109ca910384700fb3400b72f175ccc2094_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_a02137d82a7341788eaccdd48686757b2af72fd1e46420030c69fa4fb37198f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a02137d82a7341788eaccdd48686757b2af72fd1e46420030c69fa4fb37198f6->enter($__internal_a02137d82a7341788eaccdd48686757b2af72fd1e46420030c69fa4fb37198f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_ac16a176a1a5332d1acf7b6f9ab8cae0ced75b12c5121eec2f19f81c065c1f55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac16a176a1a5332d1acf7b6f9ab8cae0ced75b12c5121eec2f19f81c065c1f55->enter($__internal_ac16a176a1a5332d1acf7b6f9ab8cae0ced75b12c5121eec2f19f81c065c1f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_ac16a176a1a5332d1acf7b6f9ab8cae0ced75b12c5121eec2f19f81c065c1f55->leave($__internal_ac16a176a1a5332d1acf7b6f9ab8cae0ced75b12c5121eec2f19f81c065c1f55_prof);

        
        $__internal_a02137d82a7341788eaccdd48686757b2af72fd1e46420030c69fa4fb37198f6->leave($__internal_a02137d82a7341788eaccdd48686757b2af72fd1e46420030c69fa4fb37198f6_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_017b3550e7ea28596fde18d4a5e99afa1680a928ba70137a2d56f2d85fadbdfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_017b3550e7ea28596fde18d4a5e99afa1680a928ba70137a2d56f2d85fadbdfb->enter($__internal_017b3550e7ea28596fde18d4a5e99afa1680a928ba70137a2d56f2d85fadbdfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_356643deaa46749c4cbf12c4ac28aa8132c5816c50554d7433be14b75f0688fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_356643deaa46749c4cbf12c4ac28aa8132c5816c50554d7433be14b75f0688fa->enter($__internal_356643deaa46749c4cbf12c4ac28aa8132c5816c50554d7433be14b75f0688fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 242
        if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 242, $this->getSourceContext()); })())) {
            // line 243
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 243, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            // line 244
            echo "    ";
        }
        // line 245
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 245, $this->getSourceContext()); })())) > 0)) {
            // line 246
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 246, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 247
            echo "    ";
        }
        // line 248
        echo "    ";
        if (array_key_exists("parent_label_class", $context)) {
            // line 249
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 249, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 249, $this->getSourceContext()); })())))));
            // line 250
            echo "    ";
        }
        // line 251
        echo "    ";
        if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 251, $this->getSourceContext()); })()))) {
            // line 252
            if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 252, $this->getSourceContext()); })()))) {
                // line 253
                $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 253, $this->getSourceContext()); })()), array("%name%" =>                 // line 254
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 254, $this->getSourceContext()); })()), "%id%" =>                 // line 255
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 255, $this->getSourceContext()); })())));
            } else {
                // line 258
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 258, $this->getSourceContext()); })()));
            }
        }
        // line 261
        echo "    <label";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 261, $this->getSourceContext()); })()));
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
        echo ">
        ";
        // line 262
        echo (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 262, $this->getSourceContext()); })());
        echo "
        ";
        // line 263
        echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 263, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 263, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 263, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 263, $this->getSourceContext()); })())))), "html", null, true);
        echo "
    </label>";
        
        $__internal_356643deaa46749c4cbf12c4ac28aa8132c5816c50554d7433be14b75f0688fa->leave($__internal_356643deaa46749c4cbf12c4ac28aa8132c5816c50554d7433be14b75f0688fa_prof);

        
        $__internal_017b3550e7ea28596fde18d4a5e99afa1680a928ba70137a2d56f2d85fadbdfb->leave($__internal_017b3550e7ea28596fde18d4a5e99afa1680a928ba70137a2d56f2d85fadbdfb_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_834052ec72152434e5d19868edd5736d00130d7d194a9d64070881e60e98aa97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_834052ec72152434e5d19868edd5736d00130d7d194a9d64070881e60e98aa97->enter($__internal_834052ec72152434e5d19868edd5736d00130d7d194a9d64070881e60e98aa97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_d0ed6861f24665ed243f95737828d8af3018ac55baf6e188694a35efb2fcc669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0ed6861f24665ed243f95737828d8af3018ac55baf6e188694a35efb2fcc669->enter($__internal_d0ed6861f24665ed243f95737828d8af3018ac55baf6e188694a35efb2fcc669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 270
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 271
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 271, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 271, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 271, $this->getSourceContext()); })()))) {
            echo " error";
        }
        echo "\">
            ";
        // line 272
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 272, $this->getSourceContext()); })()), 'label');
        echo "
            ";
        // line 273
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 273, $this->getSourceContext()); })()), 'widget');
        echo "
            ";
        // line 274
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 274, $this->getSourceContext()); })()), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_d0ed6861f24665ed243f95737828d8af3018ac55baf6e188694a35efb2fcc669->leave($__internal_d0ed6861f24665ed243f95737828d8af3018ac55baf6e188694a35efb2fcc669_prof);

        
        $__internal_834052ec72152434e5d19868edd5736d00130d7d194a9d64070881e60e98aa97->leave($__internal_834052ec72152434e5d19868edd5736d00130d7d194a9d64070881e60e98aa97_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_b0b9b2bd28f1b7cd83d3112c6af726b71f1958e767f60c71425e65a959b3b597 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0b9b2bd28f1b7cd83d3112c6af726b71f1958e767f60c71425e65a959b3b597->enter($__internal_b0b9b2bd28f1b7cd83d3112c6af726b71f1958e767f60c71425e65a959b3b597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_4a9a57bd87affedb2e16255539467a47eb041c825e5abe53209320660c140944 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a9a57bd87affedb2e16255539467a47eb041c825e5abe53209320660c140944->enter($__internal_4a9a57bd87affedb2e16255539467a47eb041c825e5abe53209320660c140944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_4a9a57bd87affedb2e16255539467a47eb041c825e5abe53209320660c140944->leave($__internal_4a9a57bd87affedb2e16255539467a47eb041c825e5abe53209320660c140944_prof);

        
        $__internal_b0b9b2bd28f1b7cd83d3112c6af726b71f1958e767f60c71425e65a959b3b597->leave($__internal_b0b9b2bd28f1b7cd83d3112c6af726b71f1958e767f60c71425e65a959b3b597_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_a81ea0b7e6f257f4f4fef9fa8c564b8dc94a2e812319c18d78dffeab414ea36e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a81ea0b7e6f257f4f4fef9fa8c564b8dc94a2e812319c18d78dffeab414ea36e->enter($__internal_a81ea0b7e6f257f4f4fef9fa8c564b8dc94a2e812319c18d78dffeab414ea36e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_b18ed141d26e3e7e25a60999f814684cbfbef1047655bfa49c8cdc7e40ecc3a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b18ed141d26e3e7e25a60999f814684cbfbef1047655bfa49c8cdc7e40ecc3a3->enter($__internal_b18ed141d26e3e7e25a60999f814684cbfbef1047655bfa49c8cdc7e40ecc3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b18ed141d26e3e7e25a60999f814684cbfbef1047655bfa49c8cdc7e40ecc3a3->leave($__internal_b18ed141d26e3e7e25a60999f814684cbfbef1047655bfa49c8cdc7e40ecc3a3_prof);

        
        $__internal_a81ea0b7e6f257f4f4fef9fa8c564b8dc94a2e812319c18d78dffeab414ea36e->leave($__internal_a81ea0b7e6f257f4f4fef9fa8c564b8dc94a2e812319c18d78dffeab414ea36e_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_4ea45d251feb61801634e627c910aa41238ddd876ed42043f363fab916b94a34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ea45d251feb61801634e627c910aa41238ddd876ed42043f363fab916b94a34->enter($__internal_4ea45d251feb61801634e627c910aa41238ddd876ed42043f363fab916b94a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_d1191da95aa8e252cb903db325f0abf0772e7a1f992615a29389127a7eb863dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1191da95aa8e252cb903db325f0abf0772e7a1f992615a29389127a7eb863dd->enter($__internal_d1191da95aa8e252cb903db325f0abf0772e7a1f992615a29389127a7eb863dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d1191da95aa8e252cb903db325f0abf0772e7a1f992615a29389127a7eb863dd->leave($__internal_d1191da95aa8e252cb903db325f0abf0772e7a1f992615a29389127a7eb863dd_prof);

        
        $__internal_4ea45d251feb61801634e627c910aa41238ddd876ed42043f363fab916b94a34->leave($__internal_4ea45d251feb61801634e627c910aa41238ddd876ed42043f363fab916b94a34_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_0bede753df39c1669ad1038f40da5c08f131c1330f25c89be8dbb1c9d591036c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bede753df39c1669ad1038f40da5c08f131c1330f25c89be8dbb1c9d591036c->enter($__internal_0bede753df39c1669ad1038f40da5c08f131c1330f25c89be8dbb1c9d591036c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_5af79e9cbd4aa7891b529f2b87e5be28f8fbb2c1452802a85e19c430030130c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5af79e9cbd4aa7891b529f2b87e5be28f8fbb2c1452802a85e19c430030130c9->enter($__internal_5af79e9cbd4aa7891b529f2b87e5be28f8fbb2c1452802a85e19c430030130c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_5af79e9cbd4aa7891b529f2b87e5be28f8fbb2c1452802a85e19c430030130c9->leave($__internal_5af79e9cbd4aa7891b529f2b87e5be28f8fbb2c1452802a85e19c430030130c9_prof);

        
        $__internal_0bede753df39c1669ad1038f40da5c08f131c1330f25c89be8dbb1c9d591036c->leave($__internal_0bede753df39c1669ad1038f40da5c08f131c1330f25c89be8dbb1c9d591036c_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_6e44a8748f4e987a5cc63049060d5bb089deab514a664fb270f27504598e2ff4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e44a8748f4e987a5cc63049060d5bb089deab514a664fb270f27504598e2ff4->enter($__internal_6e44a8748f4e987a5cc63049060d5bb089deab514a664fb270f27504598e2ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_547514c322a78b99f123f5afbdb1823950e9fea33a5b16775ab695f476dace43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_547514c322a78b99f123f5afbdb1823950e9fea33a5b16775ab695f476dace43->enter($__internal_547514c322a78b99f123f5afbdb1823950e9fea33a5b16775ab695f476dace43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 300
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 301
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 301, $this->getSourceContext()); })())) {
            echo " error";
        }
        echo "\">
            ";
        // line 302
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 302, $this->getSourceContext()); })()), 'widget');
        echo "
            ";
        // line 303
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 303, $this->getSourceContext()); })()), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_547514c322a78b99f123f5afbdb1823950e9fea33a5b16775ab695f476dace43->leave($__internal_547514c322a78b99f123f5afbdb1823950e9fea33a5b16775ab695f476dace43_prof);

        
        $__internal_6e44a8748f4e987a5cc63049060d5bb089deab514a664fb270f27504598e2ff4->leave($__internal_6e44a8748f4e987a5cc63049060d5bb089deab514a664fb270f27504598e2ff4_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_79c6ac1fbe774841775c5613e74846865251318b5568d9808a4845e8d5c54e38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79c6ac1fbe774841775c5613e74846865251318b5568d9808a4845e8d5c54e38->enter($__internal_79c6ac1fbe774841775c5613e74846865251318b5568d9808a4845e8d5c54e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_88fc4969bdd987c36b298c8958efed55bda49ae28c2b965b8147eb0bee0d21e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88fc4969bdd987c36b298c8958efed55bda49ae28c2b965b8147eb0bee0d21e4->enter($__internal_88fc4969bdd987c36b298c8958efed55bda49ae28c2b965b8147eb0bee0d21e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 309
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 310
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 310, $this->getSourceContext()); })())) {
            echo " error";
        }
        echo "\">
            ";
        // line 311
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 311, $this->getSourceContext()); })()), 'widget');
        echo "
            ";
        // line 312
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 312, $this->getSourceContext()); })()), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_88fc4969bdd987c36b298c8958efed55bda49ae28c2b965b8147eb0bee0d21e4->leave($__internal_88fc4969bdd987c36b298c8958efed55bda49ae28c2b965b8147eb0bee0d21e4_prof);

        
        $__internal_79c6ac1fbe774841775c5613e74846865251318b5568d9808a4845e8d5c54e38->leave($__internal_79c6ac1fbe774841775c5613e74846865251318b5568d9808a4845e8d5c54e38_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_231cd9025f9e45e4fe6333b8ddde3b9948eba28b04a1d712350c65350ef3f139 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_231cd9025f9e45e4fe6333b8ddde3b9948eba28b04a1d712350c65350ef3f139->enter($__internal_231cd9025f9e45e4fe6333b8ddde3b9948eba28b04a1d712350c65350ef3f139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_0825dae050fb7a08f731e8cf0523889ab2b0939cd0c4382226292539e64a8d2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0825dae050fb7a08f731e8cf0523889ab2b0939cd0c4382226292539e64a8d2d->enter($__internal_0825dae050fb7a08f731e8cf0523889ab2b0939cd0c4382226292539e64a8d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 320
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 320, $this->getSourceContext()); })())) > 0)) {
            // line 321
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 321, $this->getSourceContext()); })()))) {
                echo "<small class=\"error\">";
            } else {
                echo "<div data-alert class=\"alert-box alert\">";
            }
            // line 322
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 322, $this->getSourceContext()); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 323
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "
            ";
                // line 324
                if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                    echo ", ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 326, $this->getSourceContext()); })()))) {
                echo "</small>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_0825dae050fb7a08f731e8cf0523889ab2b0939cd0c4382226292539e64a8d2d->leave($__internal_0825dae050fb7a08f731e8cf0523889ab2b0939cd0c4382226292539e64a8d2d_prof);

        
        $__internal_231cd9025f9e45e4fe6333b8ddde3b9948eba28b04a1d712350c65350ef3f139->leave($__internal_231cd9025f9e45e4fe6333b8ddde3b9948eba28b04a1d712350c65350ef3f139_prof);

    }

    public function getTemplateName()
    {
        return "foundation_5_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1078 => 326,  1062 => 324,  1058 => 323,  1041 => 322,  1035 => 321,  1033 => 320,  1024 => 319,  1011 => 312,  1007 => 311,  1001 => 310,  998 => 309,  989 => 308,  976 => 303,  972 => 302,  966 => 301,  963 => 300,  954 => 299,  943 => 296,  941 => 295,  932 => 294,  921 => 291,  919 => 290,  910 => 289,  899 => 286,  897 => 285,  888 => 284,  877 => 281,  875 => 280,  866 => 279,  853 => 274,  849 => 273,  845 => 272,  839 => 271,  836 => 270,  827 => 269,  815 => 263,  811 => 262,  795 => 261,  791 => 258,  788 => 255,  787 => 254,  786 => 253,  784 => 252,  781 => 251,  778 => 250,  775 => 249,  772 => 248,  769 => 247,  767 => 246,  764 => 245,  761 => 244,  758 => 243,  756 => 242,  747 => 241,  737 => 238,  728 => 237,  718 => 234,  709 => 233,  699 => 230,  696 => 229,  694 => 228,  691 => 227,  689 => 226,  687 => 225,  678 => 224,  668 => 221,  665 => 220,  663 => 219,  661 => 218,  652 => 217,  638 => 210,  635 => 209,  632 => 208,  630 => 207,  627 => 206,  621 => 204,  618 => 203,  616 => 202,  607 => 201,  593 => 196,  590 => 195,  584 => 193,  581 => 192,  578 => 191,  576 => 190,  573 => 189,  571 => 188,  562 => 187,  550 => 183,  543 => 181,  541 => 180,  539 => 179,  535 => 178,  530 => 177,  526 => 175,  519 => 173,  517 => 172,  515 => 171,  511 => 170,  508 => 169,  506 => 168,  497 => 167,  487 => 164,  485 => 163,  483 => 162,  477 => 159,  475 => 158,  473 => 157,  471 => 156,  469 => 155,  460 => 153,  458 => 152,  450 => 151,  447 => 149,  445 => 148,  442 => 147,  439 => 146,  437 => 145,  435 => 144,  432 => 143,  429 => 142,  427 => 141,  425 => 140,  416 => 139,  405 => 136,  401 => 134,  398 => 133,  390 => 128,  379 => 121,  371 => 116,  358 => 106,  347 => 99,  344 => 98,  338 => 96,  335 => 95,  332 => 94,  329 => 92,  327 => 91,  318 => 90,  307 => 87,  303 => 85,  301 => 84,  299 => 82,  298 => 81,  297 => 80,  296 => 79,  290 => 77,  287 => 76,  284 => 75,  281 => 73,  279 => 72,  270 => 71,  256 => 66,  252 => 65,  248 => 64,  243 => 62,  239 => 61,  236 => 60,  233 => 59,  230 => 57,  228 => 56,  219 => 55,  205 => 48,  203 => 47,  200 => 45,  191 => 44,  181 => 41,  175 => 38,  172 => 37,  170 => 36,  167 => 35,  165 => 34,  163 => 33,  157 => 30,  154 => 29,  151 => 28,  149 => 27,  146 => 26,  137 => 25,  127 => 22,  125 => 21,  116 => 20,  106 => 17,  103 => 16,  101 => 15,  99 => 14,  90 => 13,  80 => 10,  77 => 9,  75 => 8,  73 => 7,  64 => 6,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"form_div_layout.html.twig\" %}

{# Based on Foundation 5 Doc #}
{# Widgets #}

{% block form_widget_simple -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' button')|trim}) %}
    {{- parent() -}}
{%- endblock button_widget %}

{% block money_widget -%}
    <div class=\"row collapse\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        {% if prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        <div class=\"row\">
            <div class=\"large-7 columns\">{{ form_errors(form.date) }}</div>
            <div class=\"large-5 columns\">{{ form_errors(form.time) }}</div>
        </div>
        <div {{ block('widget_container_attributes') }}>
            <div class=\"large-7 columns\">{{ form_widget(form.date, { datetime: true } ) }}</div>
            <div class=\"large-5 columns\">{{ form_widget(form.time, { datetime: true } ) }}</div>
        </div>
    {% endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or not datetime %}
            <div {{ block('widget_container_attributes') }}>
        {% endif %}
        {{- date_pattern|replace({
            '{{ year }}': '<div class=\"large-4 columns\">' ~ form_widget(form.year) ~ '</div>',
            '{{ month }}': '<div class=\"large-4 columns\">' ~ form_widget(form.month) ~ '</div>',
            '{{ day }}': '<div class=\"large-4 columns\">' ~ form_widget(form.day) ~ '</div>',
        })|raw -}}
        {% if datetime is not defined or not datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or false == datetime %}
            <div {{ block('widget_container_attributes') -}}>
        {% endif %}
        {% if with_seconds %}
            <div class=\"large-4 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.second) }}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"large-6 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
        {% endif %}
        {% if datetime is not defined or false == datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}

    {% if multiple -%}
        {% set attr = attr|merge({style: (attr.style|default('') ~ ' height: auto; background-image: none;')|trim}) %}
    {% endif %}

    {% if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\" data-customforms=\"disabled\"{% endif %}>
        {% if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain) }}</option>
        {%- endif %}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {% if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif %}
        {%- endif -%}
        {% set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') %}
        <ul class=\"inline-list\">
            {% for child in form %}
                <li>{{ form_widget(child, {
                        parent_label_class: label_attr.class|default(''),
                    }) }}</li>
            {% endfor %}
        </ul>
    {% else %}
        <div {{ block('widget_container_attributes') }}>
            {% for child in form %}
                {{ form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) }}
            {% endfor %}
        </div>
    {% endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if 'checkbox-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        <div class=\"checkbox\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if 'radio-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        {% if errors|length > 0 -%}
            {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
        {% endif %}
        <div class=\"radio\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {% set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) %}
    {{- block('form_label') -}}
{%- endblock choice_label %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {% if required %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
    {% endif %}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if parent_label_class is defined %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ parent_label_class)|trim}) %}
    {% endif %}
    {% if label is empty %}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {% endif %}
    <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
        {{ widget|raw }}
        {{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}
    </label>
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
            {{ form_label(form) }}
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock form_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
        {% if form is not rootform %}<small class=\"error\">{% else %}<div data-alert class=\"alert-box alert\">{% endif %}
        {%- for error in errors -%}
            {{ error.message }}
            {% if not loop.last %}, {% endif %}
        {%- endfor -%}
        {% if form is not rootform %}</small>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "foundation_5_layout.html.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\foundation_5_layout.html.twig");
    }
}
