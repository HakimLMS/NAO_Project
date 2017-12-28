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
        $__internal_53d65d327e425b255afab5ee3ebaf737a0f9092e1fcc3f5c9783a0d2c2ef3809 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53d65d327e425b255afab5ee3ebaf737a0f9092e1fcc3f5c9783a0d2c2ef3809->enter($__internal_53d65d327e425b255afab5ee3ebaf737a0f9092e1fcc3f5c9783a0d2c2ef3809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_563eca67612e88ae294251d0951aafa9eef89f5221a5160e858bd2e876a50b9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_563eca67612e88ae294251d0951aafa9eef89f5221a5160e858bd2e876a50b9f->enter($__internal_563eca67612e88ae294251d0951aafa9eef89f5221a5160e858bd2e876a50b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_53d65d327e425b255afab5ee3ebaf737a0f9092e1fcc3f5c9783a0d2c2ef3809->leave($__internal_53d65d327e425b255afab5ee3ebaf737a0f9092e1fcc3f5c9783a0d2c2ef3809_prof);

        
        $__internal_563eca67612e88ae294251d0951aafa9eef89f5221a5160e858bd2e876a50b9f->leave($__internal_563eca67612e88ae294251d0951aafa9eef89f5221a5160e858bd2e876a50b9f_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_956cc1cb88c1bb621d79fc91734c06857e79aa4c5f29cf74d89ac5aedfb7e2de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_956cc1cb88c1bb621d79fc91734c06857e79aa4c5f29cf74d89ac5aedfb7e2de->enter($__internal_956cc1cb88c1bb621d79fc91734c06857e79aa4c5f29cf74d89ac5aedfb7e2de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_e12261ec9bcaef9fd19392edb222cf015b21e00f524ca8481fd253d300076839 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e12261ec9bcaef9fd19392edb222cf015b21e00f524ca8481fd253d300076839->enter($__internal_e12261ec9bcaef9fd19392edb222cf015b21e00f524ca8481fd253d300076839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_e12261ec9bcaef9fd19392edb222cf015b21e00f524ca8481fd253d300076839->leave($__internal_e12261ec9bcaef9fd19392edb222cf015b21e00f524ca8481fd253d300076839_prof);

        
        $__internal_956cc1cb88c1bb621d79fc91734c06857e79aa4c5f29cf74d89ac5aedfb7e2de->leave($__internal_956cc1cb88c1bb621d79fc91734c06857e79aa4c5f29cf74d89ac5aedfb7e2de_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_4a0e79a7783eb6e88c2f225b4ab0132c8c6462d25f19ecd0346a8c6af791efd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a0e79a7783eb6e88c2f225b4ab0132c8c6462d25f19ecd0346a8c6af791efd3->enter($__internal_4a0e79a7783eb6e88c2f225b4ab0132c8c6462d25f19ecd0346a8c6af791efd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_3fe796bd17115c9da4110515cd07f39be0ab9aea53918a8081b20d8ea8567546 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fe796bd17115c9da4110515cd07f39be0ab9aea53918a8081b20d8ea8567546->enter($__internal_3fe796bd17115c9da4110515cd07f39be0ab9aea53918a8081b20d8ea8567546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_3fe796bd17115c9da4110515cd07f39be0ab9aea53918a8081b20d8ea8567546->leave($__internal_3fe796bd17115c9da4110515cd07f39be0ab9aea53918a8081b20d8ea8567546_prof);

        
        $__internal_4a0e79a7783eb6e88c2f225b4ab0132c8c6462d25f19ecd0346a8c6af791efd3->leave($__internal_4a0e79a7783eb6e88c2f225b4ab0132c8c6462d25f19ecd0346a8c6af791efd3_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_5b13321606e50d83816f85b91a0f4296796163ded48f4354c92af8da579948fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b13321606e50d83816f85b91a0f4296796163ded48f4354c92af8da579948fb->enter($__internal_5b13321606e50d83816f85b91a0f4296796163ded48f4354c92af8da579948fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_f66e982a986e6b9103161bea0eb92b79070ca02e7e854d26df95d877acb8523e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f66e982a986e6b9103161bea0eb92b79070ca02e7e854d26df95d877acb8523e->enter($__internal_f66e982a986e6b9103161bea0eb92b79070ca02e7e854d26df95d877acb8523e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_f66e982a986e6b9103161bea0eb92b79070ca02e7e854d26df95d877acb8523e->leave($__internal_f66e982a986e6b9103161bea0eb92b79070ca02e7e854d26df95d877acb8523e_prof);

        
        $__internal_5b13321606e50d83816f85b91a0f4296796163ded48f4354c92af8da579948fb->leave($__internal_5b13321606e50d83816f85b91a0f4296796163ded48f4354c92af8da579948fb_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_03b59121d4cb8297f6e8a5b9ef7c55d6fe6d209afa00dfdabf46e046c893afab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03b59121d4cb8297f6e8a5b9ef7c55d6fe6d209afa00dfdabf46e046c893afab->enter($__internal_03b59121d4cb8297f6e8a5b9ef7c55d6fe6d209afa00dfdabf46e046c893afab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_fb20b365a7efeb3fd5f1b2f048617d852bc1f61a46e06ff2041f7bc3773b8215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb20b365a7efeb3fd5f1b2f048617d852bc1f61a46e06ff2041f7bc3773b8215->enter($__internal_fb20b365a7efeb3fd5f1b2f048617d852bc1f61a46e06ff2041f7bc3773b8215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_fb20b365a7efeb3fd5f1b2f048617d852bc1f61a46e06ff2041f7bc3773b8215->leave($__internal_fb20b365a7efeb3fd5f1b2f048617d852bc1f61a46e06ff2041f7bc3773b8215_prof);

        
        $__internal_03b59121d4cb8297f6e8a5b9ef7c55d6fe6d209afa00dfdabf46e046c893afab->leave($__internal_03b59121d4cb8297f6e8a5b9ef7c55d6fe6d209afa00dfdabf46e046c893afab_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_468f68ae3ec6f3d0ff8acf0a68197c9b8edd3b6b61d76a50489b608025dc4d0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_468f68ae3ec6f3d0ff8acf0a68197c9b8edd3b6b61d76a50489b608025dc4d0a->enter($__internal_468f68ae3ec6f3d0ff8acf0a68197c9b8edd3b6b61d76a50489b608025dc4d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_97a764d1c42ee01a94f7e77df6720e1563da553f84b17008f20824f5aedbd172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97a764d1c42ee01a94f7e77df6720e1563da553f84b17008f20824f5aedbd172->enter($__internal_97a764d1c42ee01a94f7e77df6720e1563da553f84b17008f20824f5aedbd172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_97a764d1c42ee01a94f7e77df6720e1563da553f84b17008f20824f5aedbd172->leave($__internal_97a764d1c42ee01a94f7e77df6720e1563da553f84b17008f20824f5aedbd172_prof);

        
        $__internal_468f68ae3ec6f3d0ff8acf0a68197c9b8edd3b6b61d76a50489b608025dc4d0a->leave($__internal_468f68ae3ec6f3d0ff8acf0a68197c9b8edd3b6b61d76a50489b608025dc4d0a_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_1d0f1617ebe972ae4d79d2f8755bf0722c09eebb8f5b7c997868acf89852e9cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d0f1617ebe972ae4d79d2f8755bf0722c09eebb8f5b7c997868acf89852e9cd->enter($__internal_1d0f1617ebe972ae4d79d2f8755bf0722c09eebb8f5b7c997868acf89852e9cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_7d1e546466300f2218d7c6e338a32e6d08a41a2cb8b36a2b6eb9da5da96177da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d1e546466300f2218d7c6e338a32e6d08a41a2cb8b36a2b6eb9da5da96177da->enter($__internal_7d1e546466300f2218d7c6e338a32e6d08a41a2cb8b36a2b6eb9da5da96177da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_7d1e546466300f2218d7c6e338a32e6d08a41a2cb8b36a2b6eb9da5da96177da->leave($__internal_7d1e546466300f2218d7c6e338a32e6d08a41a2cb8b36a2b6eb9da5da96177da_prof);

        
        $__internal_1d0f1617ebe972ae4d79d2f8755bf0722c09eebb8f5b7c997868acf89852e9cd->leave($__internal_1d0f1617ebe972ae4d79d2f8755bf0722c09eebb8f5b7c997868acf89852e9cd_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_fc152ea766f4cbb2a4793d7321ab0e278fdc6cb388317d39a4ce0ed63c31910b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc152ea766f4cbb2a4793d7321ab0e278fdc6cb388317d39a4ce0ed63c31910b->enter($__internal_fc152ea766f4cbb2a4793d7321ab0e278fdc6cb388317d39a4ce0ed63c31910b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_33e2de9af4a85891debc1f55e5499225720038c7d62a31d1edd7bbd0d1c958d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33e2de9af4a85891debc1f55e5499225720038c7d62a31d1edd7bbd0d1c958d5->enter($__internal_33e2de9af4a85891debc1f55e5499225720038c7d62a31d1edd7bbd0d1c958d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_33e2de9af4a85891debc1f55e5499225720038c7d62a31d1edd7bbd0d1c958d5->leave($__internal_33e2de9af4a85891debc1f55e5499225720038c7d62a31d1edd7bbd0d1c958d5_prof);

        
        $__internal_fc152ea766f4cbb2a4793d7321ab0e278fdc6cb388317d39a4ce0ed63c31910b->leave($__internal_fc152ea766f4cbb2a4793d7321ab0e278fdc6cb388317d39a4ce0ed63c31910b_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_a7d50d94ff6904f76556338981c31edfe37ea11efdeb35eaae025c91ea498a70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7d50d94ff6904f76556338981c31edfe37ea11efdeb35eaae025c91ea498a70->enter($__internal_a7d50d94ff6904f76556338981c31edfe37ea11efdeb35eaae025c91ea498a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_8e630dd8efccdb725455156463dc1795b453508cdc1e13c15d2bd3905b54a993 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e630dd8efccdb725455156463dc1795b453508cdc1e13c15d2bd3905b54a993->enter($__internal_8e630dd8efccdb725455156463dc1795b453508cdc1e13c15d2bd3905b54a993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_8e630dd8efccdb725455156463dc1795b453508cdc1e13c15d2bd3905b54a993->leave($__internal_8e630dd8efccdb725455156463dc1795b453508cdc1e13c15d2bd3905b54a993_prof);

        
        $__internal_a7d50d94ff6904f76556338981c31edfe37ea11efdeb35eaae025c91ea498a70->leave($__internal_a7d50d94ff6904f76556338981c31edfe37ea11efdeb35eaae025c91ea498a70_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_a02864a609ff5b04bdd6140c80634ff6ef0ad7bee351c9d42a9336977001e0cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a02864a609ff5b04bdd6140c80634ff6ef0ad7bee351c9d42a9336977001e0cd->enter($__internal_a02864a609ff5b04bdd6140c80634ff6ef0ad7bee351c9d42a9336977001e0cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_4ad32a26e9993ad78c835d3e1bc95ac0036bf62ddaa1f5b6523e6394007a5f74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ad32a26e9993ad78c835d3e1bc95ac0036bf62ddaa1f5b6523e6394007a5f74->enter($__internal_4ad32a26e9993ad78c835d3e1bc95ac0036bf62ddaa1f5b6523e6394007a5f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_4ad32a26e9993ad78c835d3e1bc95ac0036bf62ddaa1f5b6523e6394007a5f74->leave($__internal_4ad32a26e9993ad78c835d3e1bc95ac0036bf62ddaa1f5b6523e6394007a5f74_prof);

        
        $__internal_a02864a609ff5b04bdd6140c80634ff6ef0ad7bee351c9d42a9336977001e0cd->leave($__internal_a02864a609ff5b04bdd6140c80634ff6ef0ad7bee351c9d42a9336977001e0cd_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_64303c4c34d026de3c6ab7e92bdb953e0e70b16476706e4d7f9f50796116e9d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64303c4c34d026de3c6ab7e92bdb953e0e70b16476706e4d7f9f50796116e9d6->enter($__internal_64303c4c34d026de3c6ab7e92bdb953e0e70b16476706e4d7f9f50796116e9d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_3bcd73e62f9457187027c5fe2de44e4fe6020034bcda7069ab4f298d21d5f717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bcd73e62f9457187027c5fe2de44e4fe6020034bcda7069ab4f298d21d5f717->enter($__internal_3bcd73e62f9457187027c5fe2de44e4fe6020034bcda7069ab4f298d21d5f717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_3bcd73e62f9457187027c5fe2de44e4fe6020034bcda7069ab4f298d21d5f717->leave($__internal_3bcd73e62f9457187027c5fe2de44e4fe6020034bcda7069ab4f298d21d5f717_prof);

        
        $__internal_64303c4c34d026de3c6ab7e92bdb953e0e70b16476706e4d7f9f50796116e9d6->leave($__internal_64303c4c34d026de3c6ab7e92bdb953e0e70b16476706e4d7f9f50796116e9d6_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_171b9c4e23815b3c671e00b85ec162cc53344de4d4a27f461406b1407eb62b20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_171b9c4e23815b3c671e00b85ec162cc53344de4d4a27f461406b1407eb62b20->enter($__internal_171b9c4e23815b3c671e00b85ec162cc53344de4d4a27f461406b1407eb62b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_9caed83e56aaa7cc89c6ff6b1fb773b47ce6dff8edcb3bd22dddb7bc69e45c4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9caed83e56aaa7cc89c6ff6b1fb773b47ce6dff8edcb3bd22dddb7bc69e45c4f->enter($__internal_9caed83e56aaa7cc89c6ff6b1fb773b47ce6dff8edcb3bd22dddb7bc69e45c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_9caed83e56aaa7cc89c6ff6b1fb773b47ce6dff8edcb3bd22dddb7bc69e45c4f->leave($__internal_9caed83e56aaa7cc89c6ff6b1fb773b47ce6dff8edcb3bd22dddb7bc69e45c4f_prof);

        
        $__internal_171b9c4e23815b3c671e00b85ec162cc53344de4d4a27f461406b1407eb62b20->leave($__internal_171b9c4e23815b3c671e00b85ec162cc53344de4d4a27f461406b1407eb62b20_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_277666cbb8b1d7e79fa85a6512ecb45178d4d94210e62b7d85d333ca0ea99c0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_277666cbb8b1d7e79fa85a6512ecb45178d4d94210e62b7d85d333ca0ea99c0d->enter($__internal_277666cbb8b1d7e79fa85a6512ecb45178d4d94210e62b7d85d333ca0ea99c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_1b364b2c95c7bd112102ed86d30f82c8e8ac14747352a8cde55a7c6f90d9b2e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b364b2c95c7bd112102ed86d30f82c8e8ac14747352a8cde55a7c6f90d9b2e8->enter($__internal_1b364b2c95c7bd112102ed86d30f82c8e8ac14747352a8cde55a7c6f90d9b2e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_1b364b2c95c7bd112102ed86d30f82c8e8ac14747352a8cde55a7c6f90d9b2e8->leave($__internal_1b364b2c95c7bd112102ed86d30f82c8e8ac14747352a8cde55a7c6f90d9b2e8_prof);

        
        $__internal_277666cbb8b1d7e79fa85a6512ecb45178d4d94210e62b7d85d333ca0ea99c0d->leave($__internal_277666cbb8b1d7e79fa85a6512ecb45178d4d94210e62b7d85d333ca0ea99c0d_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_95262a76c13b3f1cb059ddaf3715ba492ed34f4a3fd3520978ca600aec9ef380 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95262a76c13b3f1cb059ddaf3715ba492ed34f4a3fd3520978ca600aec9ef380->enter($__internal_95262a76c13b3f1cb059ddaf3715ba492ed34f4a3fd3520978ca600aec9ef380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_7d932ebba2b9f5522bec9ce355cafcf249497fd433f80d4aea83d8e2ab71640a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d932ebba2b9f5522bec9ce355cafcf249497fd433f80d4aea83d8e2ab71640a->enter($__internal_7d932ebba2b9f5522bec9ce355cafcf249497fd433f80d4aea83d8e2ab71640a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_7d932ebba2b9f5522bec9ce355cafcf249497fd433f80d4aea83d8e2ab71640a->leave($__internal_7d932ebba2b9f5522bec9ce355cafcf249497fd433f80d4aea83d8e2ab71640a_prof);

        
        $__internal_95262a76c13b3f1cb059ddaf3715ba492ed34f4a3fd3520978ca600aec9ef380->leave($__internal_95262a76c13b3f1cb059ddaf3715ba492ed34f4a3fd3520978ca600aec9ef380_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_97996bdf7d17f0f72049c6992245e5f1c06dbe6629e6115a5cac4abcb6375054 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97996bdf7d17f0f72049c6992245e5f1c06dbe6629e6115a5cac4abcb6375054->enter($__internal_97996bdf7d17f0f72049c6992245e5f1c06dbe6629e6115a5cac4abcb6375054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_d005b487a0e040234d3acf88545f1a0972c1e7d3d063bfc4de5c24ace8b502f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d005b487a0e040234d3acf88545f1a0972c1e7d3d063bfc4de5c24ace8b502f9->enter($__internal_d005b487a0e040234d3acf88545f1a0972c1e7d3d063bfc4de5c24ace8b502f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d005b487a0e040234d3acf88545f1a0972c1e7d3d063bfc4de5c24ace8b502f9->leave($__internal_d005b487a0e040234d3acf88545f1a0972c1e7d3d063bfc4de5c24ace8b502f9_prof);

        
        $__internal_97996bdf7d17f0f72049c6992245e5f1c06dbe6629e6115a5cac4abcb6375054->leave($__internal_97996bdf7d17f0f72049c6992245e5f1c06dbe6629e6115a5cac4abcb6375054_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_e5a510235870f35e57050637b4efcbdba3e244279222cf3976c9b584992856ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5a510235870f35e57050637b4efcbdba3e244279222cf3976c9b584992856ff->enter($__internal_e5a510235870f35e57050637b4efcbdba3e244279222cf3976c9b584992856ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_2116264c46265ab833db7022dbb7ba3fbf46bf373eb7facede7f9d76498a978d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2116264c46265ab833db7022dbb7ba3fbf46bf373eb7facede7f9d76498a978d->enter($__internal_2116264c46265ab833db7022dbb7ba3fbf46bf373eb7facede7f9d76498a978d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_2116264c46265ab833db7022dbb7ba3fbf46bf373eb7facede7f9d76498a978d->leave($__internal_2116264c46265ab833db7022dbb7ba3fbf46bf373eb7facede7f9d76498a978d_prof);

        
        $__internal_e5a510235870f35e57050637b4efcbdba3e244279222cf3976c9b584992856ff->leave($__internal_e5a510235870f35e57050637b4efcbdba3e244279222cf3976c9b584992856ff_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_aa9393098d6ffa6b387f30f2daa80710b9411c9119dfdbcc5428c7ffe890fae6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa9393098d6ffa6b387f30f2daa80710b9411c9119dfdbcc5428c7ffe890fae6->enter($__internal_aa9393098d6ffa6b387f30f2daa80710b9411c9119dfdbcc5428c7ffe890fae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_6dd8cf647af65381682d010c0aa51fce40853e6f973cee0917305c0cddcfa086 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dd8cf647af65381682d010c0aa51fce40853e6f973cee0917305c0cddcfa086->enter($__internal_6dd8cf647af65381682d010c0aa51fce40853e6f973cee0917305c0cddcfa086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_6dd8cf647af65381682d010c0aa51fce40853e6f973cee0917305c0cddcfa086->leave($__internal_6dd8cf647af65381682d010c0aa51fce40853e6f973cee0917305c0cddcfa086_prof);

        
        $__internal_aa9393098d6ffa6b387f30f2daa80710b9411c9119dfdbcc5428c7ffe890fae6->leave($__internal_aa9393098d6ffa6b387f30f2daa80710b9411c9119dfdbcc5428c7ffe890fae6_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_c5b7b7ec0e551e50c5c828e6621406cd5334fdf6c519301dc10d8f0731f3915b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5b7b7ec0e551e50c5c828e6621406cd5334fdf6c519301dc10d8f0731f3915b->enter($__internal_c5b7b7ec0e551e50c5c828e6621406cd5334fdf6c519301dc10d8f0731f3915b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_ed2bd3a65b36723fff9a7ce99f30b778cd642361e227f65f660ae87c433dbcc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed2bd3a65b36723fff9a7ce99f30b778cd642361e227f65f660ae87c433dbcc0->enter($__internal_ed2bd3a65b36723fff9a7ce99f30b778cd642361e227f65f660ae87c433dbcc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_ed2bd3a65b36723fff9a7ce99f30b778cd642361e227f65f660ae87c433dbcc0->leave($__internal_ed2bd3a65b36723fff9a7ce99f30b778cd642361e227f65f660ae87c433dbcc0_prof);

        
        $__internal_c5b7b7ec0e551e50c5c828e6621406cd5334fdf6c519301dc10d8f0731f3915b->leave($__internal_c5b7b7ec0e551e50c5c828e6621406cd5334fdf6c519301dc10d8f0731f3915b_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_b2a1cca1796fd47bdd0dd0493ce5ec4a44fc78969d347ba7c2e911906b8d93f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2a1cca1796fd47bdd0dd0493ce5ec4a44fc78969d347ba7c2e911906b8d93f5->enter($__internal_b2a1cca1796fd47bdd0dd0493ce5ec4a44fc78969d347ba7c2e911906b8d93f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_f92a8b685ebc882ef9c378dee16a67b5af0da2790845c41c8a57da74da7597e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f92a8b685ebc882ef9c378dee16a67b5af0da2790845c41c8a57da74da7597e4->enter($__internal_f92a8b685ebc882ef9c378dee16a67b5af0da2790845c41c8a57da74da7597e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_f92a8b685ebc882ef9c378dee16a67b5af0da2790845c41c8a57da74da7597e4->leave($__internal_f92a8b685ebc882ef9c378dee16a67b5af0da2790845c41c8a57da74da7597e4_prof);

        
        $__internal_b2a1cca1796fd47bdd0dd0493ce5ec4a44fc78969d347ba7c2e911906b8d93f5->leave($__internal_b2a1cca1796fd47bdd0dd0493ce5ec4a44fc78969d347ba7c2e911906b8d93f5_prof);

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
