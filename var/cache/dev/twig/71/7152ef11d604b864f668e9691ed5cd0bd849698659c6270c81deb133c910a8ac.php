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
        $__internal_64fc52e59ac027e01904958184bbccf658102a8af9c41262745107b2e18e05f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64fc52e59ac027e01904958184bbccf658102a8af9c41262745107b2e18e05f2->enter($__internal_64fc52e59ac027e01904958184bbccf658102a8af9c41262745107b2e18e05f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_b1668a221788d4e4c6e63d56242b5920a3f922651aaf7cac163c925429445eb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1668a221788d4e4c6e63d56242b5920a3f922651aaf7cac163c925429445eb1->enter($__internal_b1668a221788d4e4c6e63d56242b5920a3f922651aaf7cac163c925429445eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_64fc52e59ac027e01904958184bbccf658102a8af9c41262745107b2e18e05f2->leave($__internal_64fc52e59ac027e01904958184bbccf658102a8af9c41262745107b2e18e05f2_prof);

        
        $__internal_b1668a221788d4e4c6e63d56242b5920a3f922651aaf7cac163c925429445eb1->leave($__internal_b1668a221788d4e4c6e63d56242b5920a3f922651aaf7cac163c925429445eb1_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_12a43ae0beff251221c9c3b65e04302be786ca6aa2641802cba800be2800ee28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12a43ae0beff251221c9c3b65e04302be786ca6aa2641802cba800be2800ee28->enter($__internal_12a43ae0beff251221c9c3b65e04302be786ca6aa2641802cba800be2800ee28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_35eea71279f75b3108073d0d8ac860472a70de347c50ddb2b5738b2549b1a14d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35eea71279f75b3108073d0d8ac860472a70de347c50ddb2b5738b2549b1a14d->enter($__internal_35eea71279f75b3108073d0d8ac860472a70de347c50ddb2b5738b2549b1a14d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_35eea71279f75b3108073d0d8ac860472a70de347c50ddb2b5738b2549b1a14d->leave($__internal_35eea71279f75b3108073d0d8ac860472a70de347c50ddb2b5738b2549b1a14d_prof);

        
        $__internal_12a43ae0beff251221c9c3b65e04302be786ca6aa2641802cba800be2800ee28->leave($__internal_12a43ae0beff251221c9c3b65e04302be786ca6aa2641802cba800be2800ee28_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_94bb50901f14fa9d2efb3509cbfef0de3306ece00719929dc33033f3d5f6b5c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94bb50901f14fa9d2efb3509cbfef0de3306ece00719929dc33033f3d5f6b5c7->enter($__internal_94bb50901f14fa9d2efb3509cbfef0de3306ece00719929dc33033f3d5f6b5c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_d9ff300cdcafe6af51128b6d42e1f918b90e4d03767e98e26ec0f2e4c0ab0ed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9ff300cdcafe6af51128b6d42e1f918b90e4d03767e98e26ec0f2e4c0ab0ed7->enter($__internal_d9ff300cdcafe6af51128b6d42e1f918b90e4d03767e98e26ec0f2e4c0ab0ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_d9ff300cdcafe6af51128b6d42e1f918b90e4d03767e98e26ec0f2e4c0ab0ed7->leave($__internal_d9ff300cdcafe6af51128b6d42e1f918b90e4d03767e98e26ec0f2e4c0ab0ed7_prof);

        
        $__internal_94bb50901f14fa9d2efb3509cbfef0de3306ece00719929dc33033f3d5f6b5c7->leave($__internal_94bb50901f14fa9d2efb3509cbfef0de3306ece00719929dc33033f3d5f6b5c7_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_296a645d52ebff116f9e73f140fa368c539ec4e0bfe6736adec3da046b2cd59b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_296a645d52ebff116f9e73f140fa368c539ec4e0bfe6736adec3da046b2cd59b->enter($__internal_296a645d52ebff116f9e73f140fa368c539ec4e0bfe6736adec3da046b2cd59b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_0bfe7dd698a5b5e03d4ec65931b24b0e64a8b29b74b02cf8224754cc8ffb9467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bfe7dd698a5b5e03d4ec65931b24b0e64a8b29b74b02cf8224754cc8ffb9467->enter($__internal_0bfe7dd698a5b5e03d4ec65931b24b0e64a8b29b74b02cf8224754cc8ffb9467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_0bfe7dd698a5b5e03d4ec65931b24b0e64a8b29b74b02cf8224754cc8ffb9467->leave($__internal_0bfe7dd698a5b5e03d4ec65931b24b0e64a8b29b74b02cf8224754cc8ffb9467_prof);

        
        $__internal_296a645d52ebff116f9e73f140fa368c539ec4e0bfe6736adec3da046b2cd59b->leave($__internal_296a645d52ebff116f9e73f140fa368c539ec4e0bfe6736adec3da046b2cd59b_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_9b7eaa8d2bc6f975125bff41c723495b40cd5e5ac9f3dcf6e172702ed471e95b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b7eaa8d2bc6f975125bff41c723495b40cd5e5ac9f3dcf6e172702ed471e95b->enter($__internal_9b7eaa8d2bc6f975125bff41c723495b40cd5e5ac9f3dcf6e172702ed471e95b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_d6dcaac111174c70bb7167d2ae29bb4e4155f800366c152f45ef788db1427db7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6dcaac111174c70bb7167d2ae29bb4e4155f800366c152f45ef788db1427db7->enter($__internal_d6dcaac111174c70bb7167d2ae29bb4e4155f800366c152f45ef788db1427db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_d6dcaac111174c70bb7167d2ae29bb4e4155f800366c152f45ef788db1427db7->leave($__internal_d6dcaac111174c70bb7167d2ae29bb4e4155f800366c152f45ef788db1427db7_prof);

        
        $__internal_9b7eaa8d2bc6f975125bff41c723495b40cd5e5ac9f3dcf6e172702ed471e95b->leave($__internal_9b7eaa8d2bc6f975125bff41c723495b40cd5e5ac9f3dcf6e172702ed471e95b_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_ec13ab77d321eadd96a03e5043ecc3b41719b756020586e7b3f114332f77a354 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec13ab77d321eadd96a03e5043ecc3b41719b756020586e7b3f114332f77a354->enter($__internal_ec13ab77d321eadd96a03e5043ecc3b41719b756020586e7b3f114332f77a354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_87cdf0b2bf828d03ff80405231fa997a14a41eb449e523dbfb18d984a79b286b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87cdf0b2bf828d03ff80405231fa997a14a41eb449e523dbfb18d984a79b286b->enter($__internal_87cdf0b2bf828d03ff80405231fa997a14a41eb449e523dbfb18d984a79b286b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_87cdf0b2bf828d03ff80405231fa997a14a41eb449e523dbfb18d984a79b286b->leave($__internal_87cdf0b2bf828d03ff80405231fa997a14a41eb449e523dbfb18d984a79b286b_prof);

        
        $__internal_ec13ab77d321eadd96a03e5043ecc3b41719b756020586e7b3f114332f77a354->leave($__internal_ec13ab77d321eadd96a03e5043ecc3b41719b756020586e7b3f114332f77a354_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_8148f91fe3be5ca62404f28c5871bd81aa690d539c540f78fa742a25d557b799 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8148f91fe3be5ca62404f28c5871bd81aa690d539c540f78fa742a25d557b799->enter($__internal_8148f91fe3be5ca62404f28c5871bd81aa690d539c540f78fa742a25d557b799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_00555325b66db80cfc44b7b75de98626b62111439ed4cf7f788b2d59c64728e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00555325b66db80cfc44b7b75de98626b62111439ed4cf7f788b2d59c64728e6->enter($__internal_00555325b66db80cfc44b7b75de98626b62111439ed4cf7f788b2d59c64728e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_00555325b66db80cfc44b7b75de98626b62111439ed4cf7f788b2d59c64728e6->leave($__internal_00555325b66db80cfc44b7b75de98626b62111439ed4cf7f788b2d59c64728e6_prof);

        
        $__internal_8148f91fe3be5ca62404f28c5871bd81aa690d539c540f78fa742a25d557b799->leave($__internal_8148f91fe3be5ca62404f28c5871bd81aa690d539c540f78fa742a25d557b799_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_e3df16585810e1455d8aef32e7bf37f882ec854652ccf1152f426e046527791e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3df16585810e1455d8aef32e7bf37f882ec854652ccf1152f426e046527791e->enter($__internal_e3df16585810e1455d8aef32e7bf37f882ec854652ccf1152f426e046527791e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_3e9978a657cb7bad80cc218ddd823d6128e8be9e11d7b76030b160ba4d4428a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e9978a657cb7bad80cc218ddd823d6128e8be9e11d7b76030b160ba4d4428a8->enter($__internal_3e9978a657cb7bad80cc218ddd823d6128e8be9e11d7b76030b160ba4d4428a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_3e9978a657cb7bad80cc218ddd823d6128e8be9e11d7b76030b160ba4d4428a8->leave($__internal_3e9978a657cb7bad80cc218ddd823d6128e8be9e11d7b76030b160ba4d4428a8_prof);

        
        $__internal_e3df16585810e1455d8aef32e7bf37f882ec854652ccf1152f426e046527791e->leave($__internal_e3df16585810e1455d8aef32e7bf37f882ec854652ccf1152f426e046527791e_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_239a65031eff6a6ec38869ae21d619a164c4f986f0d2db8ee417bc5fddd08d2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_239a65031eff6a6ec38869ae21d619a164c4f986f0d2db8ee417bc5fddd08d2b->enter($__internal_239a65031eff6a6ec38869ae21d619a164c4f986f0d2db8ee417bc5fddd08d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_fa9e41e7f218bcd38be7273b2d14917bb94475718a7fab260797a5ec4127935a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa9e41e7f218bcd38be7273b2d14917bb94475718a7fab260797a5ec4127935a->enter($__internal_fa9e41e7f218bcd38be7273b2d14917bb94475718a7fab260797a5ec4127935a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_fa9e41e7f218bcd38be7273b2d14917bb94475718a7fab260797a5ec4127935a->leave($__internal_fa9e41e7f218bcd38be7273b2d14917bb94475718a7fab260797a5ec4127935a_prof);

        
        $__internal_239a65031eff6a6ec38869ae21d619a164c4f986f0d2db8ee417bc5fddd08d2b->leave($__internal_239a65031eff6a6ec38869ae21d619a164c4f986f0d2db8ee417bc5fddd08d2b_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_ce99c9ea36ed3c3ad7184e17dd306e635e0359e4aee3e5a260ca86872ed1aec6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce99c9ea36ed3c3ad7184e17dd306e635e0359e4aee3e5a260ca86872ed1aec6->enter($__internal_ce99c9ea36ed3c3ad7184e17dd306e635e0359e4aee3e5a260ca86872ed1aec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_31a184828bc801607100ed55ea94f01c26453fbdfd9291742d80ae6d361a7fb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31a184828bc801607100ed55ea94f01c26453fbdfd9291742d80ae6d361a7fb8->enter($__internal_31a184828bc801607100ed55ea94f01c26453fbdfd9291742d80ae6d361a7fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_31a184828bc801607100ed55ea94f01c26453fbdfd9291742d80ae6d361a7fb8->leave($__internal_31a184828bc801607100ed55ea94f01c26453fbdfd9291742d80ae6d361a7fb8_prof);

        
        $__internal_ce99c9ea36ed3c3ad7184e17dd306e635e0359e4aee3e5a260ca86872ed1aec6->leave($__internal_ce99c9ea36ed3c3ad7184e17dd306e635e0359e4aee3e5a260ca86872ed1aec6_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_7e55d3eddc2d8ee03045f3faea6e85d626c606fe4db2e2201a2c6ff3ec214b7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e55d3eddc2d8ee03045f3faea6e85d626c606fe4db2e2201a2c6ff3ec214b7f->enter($__internal_7e55d3eddc2d8ee03045f3faea6e85d626c606fe4db2e2201a2c6ff3ec214b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_395aab6182dbef72d58b3af27bf5b04fdb97066ad85fa770be99045486eb1894 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_395aab6182dbef72d58b3af27bf5b04fdb97066ad85fa770be99045486eb1894->enter($__internal_395aab6182dbef72d58b3af27bf5b04fdb97066ad85fa770be99045486eb1894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_395aab6182dbef72d58b3af27bf5b04fdb97066ad85fa770be99045486eb1894->leave($__internal_395aab6182dbef72d58b3af27bf5b04fdb97066ad85fa770be99045486eb1894_prof);

        
        $__internal_7e55d3eddc2d8ee03045f3faea6e85d626c606fe4db2e2201a2c6ff3ec214b7f->leave($__internal_7e55d3eddc2d8ee03045f3faea6e85d626c606fe4db2e2201a2c6ff3ec214b7f_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_e4d7f64619dabca4f63e0d1fe152b7f58e56af4da8141bf160b94e4573a6c9e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4d7f64619dabca4f63e0d1fe152b7f58e56af4da8141bf160b94e4573a6c9e4->enter($__internal_e4d7f64619dabca4f63e0d1fe152b7f58e56af4da8141bf160b94e4573a6c9e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_30db7331e7a55133c503ff3b91855c9bd83edfe8c9bed26ab0517e682321d3ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30db7331e7a55133c503ff3b91855c9bd83edfe8c9bed26ab0517e682321d3ae->enter($__internal_30db7331e7a55133c503ff3b91855c9bd83edfe8c9bed26ab0517e682321d3ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_30db7331e7a55133c503ff3b91855c9bd83edfe8c9bed26ab0517e682321d3ae->leave($__internal_30db7331e7a55133c503ff3b91855c9bd83edfe8c9bed26ab0517e682321d3ae_prof);

        
        $__internal_e4d7f64619dabca4f63e0d1fe152b7f58e56af4da8141bf160b94e4573a6c9e4->leave($__internal_e4d7f64619dabca4f63e0d1fe152b7f58e56af4da8141bf160b94e4573a6c9e4_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_d47ad7a4fb4d311964dd6ec0b9206a7bf2a28fa1879308bb0ae35494977d6cd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d47ad7a4fb4d311964dd6ec0b9206a7bf2a28fa1879308bb0ae35494977d6cd3->enter($__internal_d47ad7a4fb4d311964dd6ec0b9206a7bf2a28fa1879308bb0ae35494977d6cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_e81b90e53d6e0f4656a4a9f80bd5af4bcc4a4f6e566707a855db66ca44bace24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e81b90e53d6e0f4656a4a9f80bd5af4bcc4a4f6e566707a855db66ca44bace24->enter($__internal_e81b90e53d6e0f4656a4a9f80bd5af4bcc4a4f6e566707a855db66ca44bace24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e81b90e53d6e0f4656a4a9f80bd5af4bcc4a4f6e566707a855db66ca44bace24->leave($__internal_e81b90e53d6e0f4656a4a9f80bd5af4bcc4a4f6e566707a855db66ca44bace24_prof);

        
        $__internal_d47ad7a4fb4d311964dd6ec0b9206a7bf2a28fa1879308bb0ae35494977d6cd3->leave($__internal_d47ad7a4fb4d311964dd6ec0b9206a7bf2a28fa1879308bb0ae35494977d6cd3_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_e94b3786df1a550c6740c57d9a807e230cebb084da1fcd75ec8d0bc8b89c491a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e94b3786df1a550c6740c57d9a807e230cebb084da1fcd75ec8d0bc8b89c491a->enter($__internal_e94b3786df1a550c6740c57d9a807e230cebb084da1fcd75ec8d0bc8b89c491a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_5f1750363d5ccd741065702df9261fb066ee07171ab4d84ed081c22a905e7db4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f1750363d5ccd741065702df9261fb066ee07171ab4d84ed081c22a905e7db4->enter($__internal_5f1750363d5ccd741065702df9261fb066ee07171ab4d84ed081c22a905e7db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_5f1750363d5ccd741065702df9261fb066ee07171ab4d84ed081c22a905e7db4->leave($__internal_5f1750363d5ccd741065702df9261fb066ee07171ab4d84ed081c22a905e7db4_prof);

        
        $__internal_e94b3786df1a550c6740c57d9a807e230cebb084da1fcd75ec8d0bc8b89c491a->leave($__internal_e94b3786df1a550c6740c57d9a807e230cebb084da1fcd75ec8d0bc8b89c491a_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_7b75a70ac7cdd08e01d9b9c7ff4f5a24277bd032bf7fa8d9022a812478ad1355 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b75a70ac7cdd08e01d9b9c7ff4f5a24277bd032bf7fa8d9022a812478ad1355->enter($__internal_7b75a70ac7cdd08e01d9b9c7ff4f5a24277bd032bf7fa8d9022a812478ad1355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_b0e636d36933e13aee7b74abafec7c60b5036509a906b83e30c93f247d7c8af3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0e636d36933e13aee7b74abafec7c60b5036509a906b83e30c93f247d7c8af3->enter($__internal_b0e636d36933e13aee7b74abafec7c60b5036509a906b83e30c93f247d7c8af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b0e636d36933e13aee7b74abafec7c60b5036509a906b83e30c93f247d7c8af3->leave($__internal_b0e636d36933e13aee7b74abafec7c60b5036509a906b83e30c93f247d7c8af3_prof);

        
        $__internal_7b75a70ac7cdd08e01d9b9c7ff4f5a24277bd032bf7fa8d9022a812478ad1355->leave($__internal_7b75a70ac7cdd08e01d9b9c7ff4f5a24277bd032bf7fa8d9022a812478ad1355_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_2e77d6dffc9f1c449a53f7775072fdb6dbce05a5f9349f4ca8ac5f114994db11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e77d6dffc9f1c449a53f7775072fdb6dbce05a5f9349f4ca8ac5f114994db11->enter($__internal_2e77d6dffc9f1c449a53f7775072fdb6dbce05a5f9349f4ca8ac5f114994db11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_56f913d737f809faf01b7328666e81a0c84a6025876db78b53d31925ec953954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56f913d737f809faf01b7328666e81a0c84a6025876db78b53d31925ec953954->enter($__internal_56f913d737f809faf01b7328666e81a0c84a6025876db78b53d31925ec953954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_56f913d737f809faf01b7328666e81a0c84a6025876db78b53d31925ec953954->leave($__internal_56f913d737f809faf01b7328666e81a0c84a6025876db78b53d31925ec953954_prof);

        
        $__internal_2e77d6dffc9f1c449a53f7775072fdb6dbce05a5f9349f4ca8ac5f114994db11->leave($__internal_2e77d6dffc9f1c449a53f7775072fdb6dbce05a5f9349f4ca8ac5f114994db11_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_4cd41e12b2e71a62bf822ec7fcda66ecea8c5f42c9779119adb77c6177b91ce1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cd41e12b2e71a62bf822ec7fcda66ecea8c5f42c9779119adb77c6177b91ce1->enter($__internal_4cd41e12b2e71a62bf822ec7fcda66ecea8c5f42c9779119adb77c6177b91ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_fc207e1dd53b0b4c4686171786f0fad69ef0de77526ca0939fd470e362195193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc207e1dd53b0b4c4686171786f0fad69ef0de77526ca0939fd470e362195193->enter($__internal_fc207e1dd53b0b4c4686171786f0fad69ef0de77526ca0939fd470e362195193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_fc207e1dd53b0b4c4686171786f0fad69ef0de77526ca0939fd470e362195193->leave($__internal_fc207e1dd53b0b4c4686171786f0fad69ef0de77526ca0939fd470e362195193_prof);

        
        $__internal_4cd41e12b2e71a62bf822ec7fcda66ecea8c5f42c9779119adb77c6177b91ce1->leave($__internal_4cd41e12b2e71a62bf822ec7fcda66ecea8c5f42c9779119adb77c6177b91ce1_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_b8d1995b4ec5fc2e3f84a0b942c4e2b1d04b3c21c21ac0d1ce3eeda3970779a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8d1995b4ec5fc2e3f84a0b942c4e2b1d04b3c21c21ac0d1ce3eeda3970779a6->enter($__internal_b8d1995b4ec5fc2e3f84a0b942c4e2b1d04b3c21c21ac0d1ce3eeda3970779a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_3b950db4ecd14aa44e19ec135e14aaf5189cd283966183b0a910cd6b795e869b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b950db4ecd14aa44e19ec135e14aaf5189cd283966183b0a910cd6b795e869b->enter($__internal_3b950db4ecd14aa44e19ec135e14aaf5189cd283966183b0a910cd6b795e869b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_3b950db4ecd14aa44e19ec135e14aaf5189cd283966183b0a910cd6b795e869b->leave($__internal_3b950db4ecd14aa44e19ec135e14aaf5189cd283966183b0a910cd6b795e869b_prof);

        
        $__internal_b8d1995b4ec5fc2e3f84a0b942c4e2b1d04b3c21c21ac0d1ce3eeda3970779a6->leave($__internal_b8d1995b4ec5fc2e3f84a0b942c4e2b1d04b3c21c21ac0d1ce3eeda3970779a6_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_79c4a037c91739c85f98c3c154586e7ef192e6273e4f236b0024e531c79b067b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79c4a037c91739c85f98c3c154586e7ef192e6273e4f236b0024e531c79b067b->enter($__internal_79c4a037c91739c85f98c3c154586e7ef192e6273e4f236b0024e531c79b067b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_3bce432c489f8cc877fc78b4d3a95dba4aff3d403e726b91a5e1bbbf307b8cb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bce432c489f8cc877fc78b4d3a95dba4aff3d403e726b91a5e1bbbf307b8cb9->enter($__internal_3bce432c489f8cc877fc78b4d3a95dba4aff3d403e726b91a5e1bbbf307b8cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_3bce432c489f8cc877fc78b4d3a95dba4aff3d403e726b91a5e1bbbf307b8cb9->leave($__internal_3bce432c489f8cc877fc78b4d3a95dba4aff3d403e726b91a5e1bbbf307b8cb9_prof);

        
        $__internal_79c4a037c91739c85f98c3c154586e7ef192e6273e4f236b0024e531c79b067b->leave($__internal_79c4a037c91739c85f98c3c154586e7ef192e6273e4f236b0024e531c79b067b_prof);

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
