<?php

/* bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_83657210829d16a97141356e831671d02788501e00bec4e518986f0bf916f6ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "bootstrap_4_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'fieldset_form_row' => array($this, 'block_fieldset_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d295f72a251fac5503d3758cb946cef22af96fea172da5f9cfe6c1070275f88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d295f72a251fac5503d3758cb946cef22af96fea172da5f9cfe6c1070275f88->enter($__internal_2d295f72a251fac5503d3758cb946cef22af96fea172da5f9cfe6c1070275f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_8be4a8e6949465e10db9f44cd3adf0af6933aa8728646ffdff834fa86434701f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8be4a8e6949465e10db9f44cd3adf0af6933aa8728646ffdff834fa86434701f->enter($__internal_8be4a8e6949465e10db9f44cd3adf0af6933aa8728646ffdff834fa86434701f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_label', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 20
        echo "
";
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('fieldset_form_row', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('submit_row', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('reset_row', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_2d295f72a251fac5503d3758cb946cef22af96fea172da5f9cfe6c1070275f88->leave($__internal_2d295f72a251fac5503d3758cb946cef22af96fea172da5f9cfe6c1070275f88_prof);

        
        $__internal_8be4a8e6949465e10db9f44cd3adf0af6933aa8728646ffdff834fa86434701f->leave($__internal_8be4a8e6949465e10db9f44cd3adf0af6933aa8728646ffdff834fa86434701f_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_5793c31e65e08d60c928d796b16a20c2c6f6503c3c33cdec6e48057bc8d8f638 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5793c31e65e08d60c928d796b16a20c2c6f6503c3c33cdec6e48057bc8d8f638->enter($__internal_5793c31e65e08d60c928d796b16a20c2c6f6503c3c33cdec6e48057bc8d8f638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_467155940796764ffa15e9bd980e64d2daa7de16affd1da02406ccec3b23d576 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_467155940796764ffa15e9bd980e64d2daa7de16affd1da02406ccec3b23d576->enter($__internal_467155940796764ffa15e9bd980e64d2daa7de16affd1da02406ccec3b23d576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 6
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 6, $this->getSourceContext()); })()) === false)) {
            // line 7
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 9
            if (( !array_key_exists("expanded", $context) ||  !(isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 9, $this->getSourceContext()); })()))) {
                // line 10
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 10, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-label"))));
            }
            // line 12
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 12, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 13
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_467155940796764ffa15e9bd980e64d2daa7de16affd1da02406ccec3b23d576->leave($__internal_467155940796764ffa15e9bd980e64d2daa7de16affd1da02406ccec3b23d576_prof);

        
        $__internal_5793c31e65e08d60c928d796b16a20c2c6f6503c3c33cdec6e48057bc8d8f638->leave($__internal_5793c31e65e08d60c928d796b16a20c2c6f6503c3c33cdec6e48057bc8d8f638_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_21095117025e8c32c1047356f3b07163610dffe4f63a990bdf7846ab5655302d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21095117025e8c32c1047356f3b07163610dffe4f63a990bdf7846ab5655302d->enter($__internal_21095117025e8c32c1047356f3b07163610dffe4f63a990bdf7846ab5655302d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_1caa0eb69a0f50802a5fbae31eea4f47fcd9b4144c140bd452e5c69484b921ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1caa0eb69a0f50802a5fbae31eea4f47fcd9b4144c140bd452e5c69484b921ee->enter($__internal_1caa0eb69a0f50802a5fbae31eea4f47fcd9b4144c140bd452e5c69484b921ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_1caa0eb69a0f50802a5fbae31eea4f47fcd9b4144c140bd452e5c69484b921ee->leave($__internal_1caa0eb69a0f50802a5fbae31eea4f47fcd9b4144c140bd452e5c69484b921ee_prof);

        
        $__internal_21095117025e8c32c1047356f3b07163610dffe4f63a990bdf7846ab5655302d->leave($__internal_21095117025e8c32c1047356f3b07163610dffe4f63a990bdf7846ab5655302d_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_225ecb356d1bbe62de1fa1926085b21807f9c2cdba8a6cf5d12b6b650d335b05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_225ecb356d1bbe62de1fa1926085b21807f9c2cdba8a6cf5d12b6b650d335b05->enter($__internal_225ecb356d1bbe62de1fa1926085b21807f9c2cdba8a6cf5d12b6b650d335b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_e5d60199d9adfa5fdc56aa3fb19c42f771c5afd42ee0a79cced88e7911b441a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5d60199d9adfa5fdc56aa3fb19c42f771c5afd42ee0a79cced88e7911b441a9->enter($__internal_e5d60199d9adfa5fdc56aa3fb19c42f771c5afd42ee0a79cced88e7911b441a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 24
        if ((array_key_exists("expanded", $context) && (isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 24, $this->getSourceContext()); })()))) {
            // line 25
            $this->displayBlock("fieldset_form_row", $context, $blocks);
        } else {
            // line 27
            echo "<div class=\"form-group row";
            if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 27, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 27, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 27, $this->getSourceContext()); })()))) {
                echo " is-invalid";
            }
            echo "\">";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->getSourceContext()); })()), 'label');
            // line 29
            echo "<div class=\"";
            $this->displayBlock("form_group_class", $context, $blocks);
            echo "\">";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'widget');
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'errors');
            // line 32
            echo "</div>
    ";
            // line 33
            echo "</div>";
        }
        
        $__internal_e5d60199d9adfa5fdc56aa3fb19c42f771c5afd42ee0a79cced88e7911b441a9->leave($__internal_e5d60199d9adfa5fdc56aa3fb19c42f771c5afd42ee0a79cced88e7911b441a9_prof);

        
        $__internal_225ecb356d1bbe62de1fa1926085b21807f9c2cdba8a6cf5d12b6b650d335b05->leave($__internal_225ecb356d1bbe62de1fa1926085b21807f9c2cdba8a6cf5d12b6b650d335b05_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_7dc9e978538091b5689d2d367948d14484468e88c3597866140e767769dcb87d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dc9e978538091b5689d2d367948d14484468e88c3597866140e767769dcb87d->enter($__internal_7dc9e978538091b5689d2d367948d14484468e88c3597866140e767769dcb87d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_c497e069497a15e9ba81d161b13c4024455ad2b951d38a11444f511c1a7c00df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c497e069497a15e9ba81d161b13c4024455ad2b951d38a11444f511c1a7c00df->enter($__internal_c497e069497a15e9ba81d161b13c4024455ad2b951d38a11444f511c1a7c00df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        // line 38
        echo "<fieldset class=\"form-group\">
        <div class=\"row";
        // line 39
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 39, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 39, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 39, $this->getSourceContext()); })()))) {
            echo " is-invalid";
        }
        echo "\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), 'label');
        // line 41
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'widget');
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->getSourceContext()); })()), 'errors');
        // line 44
        echo "</div>
        </div>
";
        // line 46
        echo "</fieldset>";
        
        $__internal_c497e069497a15e9ba81d161b13c4024455ad2b951d38a11444f511c1a7c00df->leave($__internal_c497e069497a15e9ba81d161b13c4024455ad2b951d38a11444f511c1a7c00df_prof);

        
        $__internal_7dc9e978538091b5689d2d367948d14484468e88c3597866140e767769dcb87d->leave($__internal_7dc9e978538091b5689d2d367948d14484468e88c3597866140e767769dcb87d_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_293511a61d5a199180b4befc33e5cd2ab282372e850e218c08717403465c4313 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_293511a61d5a199180b4befc33e5cd2ab282372e850e218c08717403465c4313->enter($__internal_293511a61d5a199180b4befc33e5cd2ab282372e850e218c08717403465c4313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_cf05fd6f823a1045d80ff4194a1e6add08a51e5c032f780f227a048b56746cda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf05fd6f823a1045d80ff4194a1e6add08a51e5c032f780f227a048b56746cda->enter($__internal_cf05fd6f823a1045d80ff4194a1e6add08a51e5c032f780f227a048b56746cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 50
        echo "<div class=\"form-group row\">";
        // line 51
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 52
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->getSourceContext()); })()), 'widget');
        // line 54
        echo "</div>";
        // line 55
        echo "</div>";
        
        $__internal_cf05fd6f823a1045d80ff4194a1e6add08a51e5c032f780f227a048b56746cda->leave($__internal_cf05fd6f823a1045d80ff4194a1e6add08a51e5c032f780f227a048b56746cda_prof);

        
        $__internal_293511a61d5a199180b4befc33e5cd2ab282372e850e218c08717403465c4313->leave($__internal_293511a61d5a199180b4befc33e5cd2ab282372e850e218c08717403465c4313_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_b997c926132041aa1b8349e84236510d22f6f86a0c278bdb714468be7e1ba2f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b997c926132041aa1b8349e84236510d22f6f86a0c278bdb714468be7e1ba2f3->enter($__internal_b997c926132041aa1b8349e84236510d22f6f86a0c278bdb714468be7e1ba2f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_2a25fcb01ae34dd6fca675728416aeec5f0e8677b757e0eef866410cfb428227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a25fcb01ae34dd6fca675728416aeec5f0e8677b757e0eef866410cfb428227->enter($__internal_2a25fcb01ae34dd6fca675728416aeec5f0e8677b757e0eef866410cfb428227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 59
        echo "<div class=\"form-group row\">";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 61
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'widget');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_2a25fcb01ae34dd6fca675728416aeec5f0e8677b757e0eef866410cfb428227->leave($__internal_2a25fcb01ae34dd6fca675728416aeec5f0e8677b757e0eef866410cfb428227_prof);

        
        $__internal_b997c926132041aa1b8349e84236510d22f6f86a0c278bdb714468be7e1ba2f3->leave($__internal_b997c926132041aa1b8349e84236510d22f6f86a0c278bdb714468be7e1ba2f3_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_2e3ee1092e50e356f850c4f757a6001c59fddf1239711f83998236b2866bfe4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e3ee1092e50e356f850c4f757a6001c59fddf1239711f83998236b2866bfe4f->enter($__internal_2e3ee1092e50e356f850c4f757a6001c59fddf1239711f83998236b2866bfe4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_db884f3c1dad1e7180fe84c23aacf434475a3433ad8315c0df3e69f9ec2cd521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db884f3c1dad1e7180fe84c23aacf434475a3433ad8315c0df3e69f9ec2cd521->enter($__internal_db884f3c1dad1e7180fe84c23aacf434475a3433ad8315c0df3e69f9ec2cd521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_db884f3c1dad1e7180fe84c23aacf434475a3433ad8315c0df3e69f9ec2cd521->leave($__internal_db884f3c1dad1e7180fe84c23aacf434475a3433ad8315c0df3e69f9ec2cd521_prof);

        
        $__internal_2e3ee1092e50e356f850c4f757a6001c59fddf1239711f83998236b2866bfe4f->leave($__internal_2e3ee1092e50e356f850c4f757a6001c59fddf1239711f83998236b2866bfe4f_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_e0a8dacaabb603812b46c7a5f57a2312d4924312c9a67aa3a222cc32f409e99d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0a8dacaabb603812b46c7a5f57a2312d4924312c9a67aa3a222cc32f409e99d->enter($__internal_e0a8dacaabb603812b46c7a5f57a2312d4924312c9a67aa3a222cc32f409e99d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_004aff9b13acb66169451c066b4d7760f28ac0809e739ae6410d27b9a7304295 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_004aff9b13acb66169451c066b4d7760f28ac0809e739ae6410d27b9a7304295->enter($__internal_004aff9b13acb66169451c066b4d7760f28ac0809e739ae6410d27b9a7304295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 72
        echo "<div class=\"form-group row\">";
        // line 73
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 74
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 75, $this->getSourceContext()); })()), 'widget');
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->getSourceContext()); })()), 'errors');
        // line 77
        echo "</div>";
        // line 78
        echo "</div>";
        
        $__internal_004aff9b13acb66169451c066b4d7760f28ac0809e739ae6410d27b9a7304295->leave($__internal_004aff9b13acb66169451c066b4d7760f28ac0809e739ae6410d27b9a7304295_prof);

        
        $__internal_e0a8dacaabb603812b46c7a5f57a2312d4924312c9a67aa3a222cc32f409e99d->leave($__internal_e0a8dacaabb603812b46c7a5f57a2312d4924312c9a67aa3a222cc32f409e99d_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  347 => 78,  345 => 77,  343 => 76,  341 => 75,  337 => 74,  333 => 73,  331 => 72,  322 => 71,  312 => 68,  303 => 67,  293 => 64,  291 => 63,  289 => 62,  285 => 61,  281 => 60,  279 => 59,  270 => 58,  260 => 55,  258 => 54,  256 => 53,  252 => 52,  248 => 51,  246 => 50,  237 => 49,  227 => 46,  223 => 44,  221 => 43,  219 => 42,  215 => 41,  213 => 40,  208 => 39,  205 => 38,  196 => 37,  185 => 33,  182 => 32,  180 => 31,  178 => 30,  174 => 29,  172 => 28,  166 => 27,  163 => 25,  161 => 24,  152 => 23,  142 => 18,  133 => 17,  122 => 13,  120 => 12,  117 => 10,  115 => 9,  110 => 7,  108 => 6,  99 => 5,  89 => 71,  86 => 70,  84 => 67,  81 => 66,  79 => 58,  76 => 57,  74 => 49,  71 => 48,  69 => 37,  66 => 36,  64 => 23,  61 => 22,  58 => 20,  56 => 17,  53 => 16,  51 => 5,  48 => 4,  45 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_4_layout.html.twig\" %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- if expanded is not defined or not expanded -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-label')|trim}) -%}
        {%- endif -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    {%- if expanded is defined and expanded -%}
        {{ block('fieldset_form_row') }}
    {%- else -%}
        <div class=\"form-group row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
    {##}</div>
    {%- endif -%}
{%- endblock form_row %}

{% block fieldset_form_row -%}
    <fieldset class=\"form-group\">
        <div class=\"row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
        </div>
{##}</fieldset>
{%- endblock fieldset_form_row %}

{% block submit_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}

{% block checkbox_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}
", "bootstrap_4_horizontal_layout.html.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\bootstrap_4_horizontal_layout.html.twig");
    }
}
