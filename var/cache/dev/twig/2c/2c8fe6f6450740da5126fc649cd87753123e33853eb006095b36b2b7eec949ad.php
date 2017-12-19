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
        $__internal_3143e073da9bd556dfb804e6447851254a82fc3eb484a675139f247be5716a47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3143e073da9bd556dfb804e6447851254a82fc3eb484a675139f247be5716a47->enter($__internal_3143e073da9bd556dfb804e6447851254a82fc3eb484a675139f247be5716a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_35afcf979fd816489bb3d83f90ee8ac78a6f1052024938ad4b6014eb222fa829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35afcf979fd816489bb3d83f90ee8ac78a6f1052024938ad4b6014eb222fa829->enter($__internal_35afcf979fd816489bb3d83f90ee8ac78a6f1052024938ad4b6014eb222fa829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

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
        
        $__internal_3143e073da9bd556dfb804e6447851254a82fc3eb484a675139f247be5716a47->leave($__internal_3143e073da9bd556dfb804e6447851254a82fc3eb484a675139f247be5716a47_prof);

        
        $__internal_35afcf979fd816489bb3d83f90ee8ac78a6f1052024938ad4b6014eb222fa829->leave($__internal_35afcf979fd816489bb3d83f90ee8ac78a6f1052024938ad4b6014eb222fa829_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_ebb9abb014dcf5107843d28e77db149c8dd554da2345713d3aad0a4de91ffed4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebb9abb014dcf5107843d28e77db149c8dd554da2345713d3aad0a4de91ffed4->enter($__internal_ebb9abb014dcf5107843d28e77db149c8dd554da2345713d3aad0a4de91ffed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_ff7fe61dc90c2c61c513f44a1512870d77d1a439f0ff1f40619c505e24159fd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff7fe61dc90c2c61c513f44a1512870d77d1a439f0ff1f40619c505e24159fd1->enter($__internal_ff7fe61dc90c2c61c513f44a1512870d77d1a439f0ff1f40619c505e24159fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_ff7fe61dc90c2c61c513f44a1512870d77d1a439f0ff1f40619c505e24159fd1->leave($__internal_ff7fe61dc90c2c61c513f44a1512870d77d1a439f0ff1f40619c505e24159fd1_prof);

        
        $__internal_ebb9abb014dcf5107843d28e77db149c8dd554da2345713d3aad0a4de91ffed4->leave($__internal_ebb9abb014dcf5107843d28e77db149c8dd554da2345713d3aad0a4de91ffed4_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_37d1084c96b7f6895d7526fef5540d8f400445fbd74aa3256413272a2dca4abf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37d1084c96b7f6895d7526fef5540d8f400445fbd74aa3256413272a2dca4abf->enter($__internal_37d1084c96b7f6895d7526fef5540d8f400445fbd74aa3256413272a2dca4abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_c0760dafd0a9bfd455111f06e20331067fb7151a8848d3888323fbd6869284d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0760dafd0a9bfd455111f06e20331067fb7151a8848d3888323fbd6869284d3->enter($__internal_c0760dafd0a9bfd455111f06e20331067fb7151a8848d3888323fbd6869284d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_c0760dafd0a9bfd455111f06e20331067fb7151a8848d3888323fbd6869284d3->leave($__internal_c0760dafd0a9bfd455111f06e20331067fb7151a8848d3888323fbd6869284d3_prof);

        
        $__internal_37d1084c96b7f6895d7526fef5540d8f400445fbd74aa3256413272a2dca4abf->leave($__internal_37d1084c96b7f6895d7526fef5540d8f400445fbd74aa3256413272a2dca4abf_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_f410468116635cb42dff1c0f6882bc7899d1915f0c59bde39e44a78b8537605a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f410468116635cb42dff1c0f6882bc7899d1915f0c59bde39e44a78b8537605a->enter($__internal_f410468116635cb42dff1c0f6882bc7899d1915f0c59bde39e44a78b8537605a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_a1e393b5d38a9d0cf4a513adbcb788cf9c2aacacb5e5e2b141e292cb4fc17410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1e393b5d38a9d0cf4a513adbcb788cf9c2aacacb5e5e2b141e292cb4fc17410->enter($__internal_a1e393b5d38a9d0cf4a513adbcb788cf9c2aacacb5e5e2b141e292cb4fc17410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_a1e393b5d38a9d0cf4a513adbcb788cf9c2aacacb5e5e2b141e292cb4fc17410->leave($__internal_a1e393b5d38a9d0cf4a513adbcb788cf9c2aacacb5e5e2b141e292cb4fc17410_prof);

        
        $__internal_f410468116635cb42dff1c0f6882bc7899d1915f0c59bde39e44a78b8537605a->leave($__internal_f410468116635cb42dff1c0f6882bc7899d1915f0c59bde39e44a78b8537605a_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_1acd396f593d9a9389a2fb632c982a37aeed1bf468dfaa8a7632401dc76f3e38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1acd396f593d9a9389a2fb632c982a37aeed1bf468dfaa8a7632401dc76f3e38->enter($__internal_1acd396f593d9a9389a2fb632c982a37aeed1bf468dfaa8a7632401dc76f3e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_12e1875a64a29901bd41d2fa5a75d742b96a856895b51908c7b5a527d09cc3ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12e1875a64a29901bd41d2fa5a75d742b96a856895b51908c7b5a527d09cc3ba->enter($__internal_12e1875a64a29901bd41d2fa5a75d742b96a856895b51908c7b5a527d09cc3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

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
        
        $__internal_12e1875a64a29901bd41d2fa5a75d742b96a856895b51908c7b5a527d09cc3ba->leave($__internal_12e1875a64a29901bd41d2fa5a75d742b96a856895b51908c7b5a527d09cc3ba_prof);

        
        $__internal_1acd396f593d9a9389a2fb632c982a37aeed1bf468dfaa8a7632401dc76f3e38->leave($__internal_1acd396f593d9a9389a2fb632c982a37aeed1bf468dfaa8a7632401dc76f3e38_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_7458776c4a50d9c0870b4806998b64a310ee87b7ddc38c56434a3db3d0f318ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7458776c4a50d9c0870b4806998b64a310ee87b7ddc38c56434a3db3d0f318ad->enter($__internal_7458776c4a50d9c0870b4806998b64a310ee87b7ddc38c56434a3db3d0f318ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_380cf9c232e2440f4d180f79a931e1766d8115c151a05bca5502df5b8e190fdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_380cf9c232e2440f4d180f79a931e1766d8115c151a05bca5502df5b8e190fdd->enter($__internal_380cf9c232e2440f4d180f79a931e1766d8115c151a05bca5502df5b8e190fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_380cf9c232e2440f4d180f79a931e1766d8115c151a05bca5502df5b8e190fdd->leave($__internal_380cf9c232e2440f4d180f79a931e1766d8115c151a05bca5502df5b8e190fdd_prof);

        
        $__internal_7458776c4a50d9c0870b4806998b64a310ee87b7ddc38c56434a3db3d0f318ad->leave($__internal_7458776c4a50d9c0870b4806998b64a310ee87b7ddc38c56434a3db3d0f318ad_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_17c5c207c0fb6844b8e8278c82bd15a6f73724be64447cb1367c2cddbb9c8535 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17c5c207c0fb6844b8e8278c82bd15a6f73724be64447cb1367c2cddbb9c8535->enter($__internal_17c5c207c0fb6844b8e8278c82bd15a6f73724be64447cb1367c2cddbb9c8535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_fe9696180a6617168deb4cd4e1d7a41b169adde0bc5a3b3f3eb32f41cf9fd5d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe9696180a6617168deb4cd4e1d7a41b169adde0bc5a3b3f3eb32f41cf9fd5d1->enter($__internal_fe9696180a6617168deb4cd4e1d7a41b169adde0bc5a3b3f3eb32f41cf9fd5d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_fe9696180a6617168deb4cd4e1d7a41b169adde0bc5a3b3f3eb32f41cf9fd5d1->leave($__internal_fe9696180a6617168deb4cd4e1d7a41b169adde0bc5a3b3f3eb32f41cf9fd5d1_prof);

        
        $__internal_17c5c207c0fb6844b8e8278c82bd15a6f73724be64447cb1367c2cddbb9c8535->leave($__internal_17c5c207c0fb6844b8e8278c82bd15a6f73724be64447cb1367c2cddbb9c8535_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_b215bf945889f2be861515bc8b81f5813cd401333d2ddae7ff1d3fa1ddaa94a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b215bf945889f2be861515bc8b81f5813cd401333d2ddae7ff1d3fa1ddaa94a5->enter($__internal_b215bf945889f2be861515bc8b81f5813cd401333d2ddae7ff1d3fa1ddaa94a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_0b9de5c899395bc488bbcb2fbe721db23285683942c9059ef38cf746d2a49e93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b9de5c899395bc488bbcb2fbe721db23285683942c9059ef38cf746d2a49e93->enter($__internal_0b9de5c899395bc488bbcb2fbe721db23285683942c9059ef38cf746d2a49e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_0b9de5c899395bc488bbcb2fbe721db23285683942c9059ef38cf746d2a49e93->leave($__internal_0b9de5c899395bc488bbcb2fbe721db23285683942c9059ef38cf746d2a49e93_prof);

        
        $__internal_b215bf945889f2be861515bc8b81f5813cd401333d2ddae7ff1d3fa1ddaa94a5->leave($__internal_b215bf945889f2be861515bc8b81f5813cd401333d2ddae7ff1d3fa1ddaa94a5_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_cc09057bfd000048e87f561317cfb03342cc452c063cc7cd4c53ba5917cb9132 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc09057bfd000048e87f561317cfb03342cc452c063cc7cd4c53ba5917cb9132->enter($__internal_cc09057bfd000048e87f561317cfb03342cc452c063cc7cd4c53ba5917cb9132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_3b5167367228449ca20cea58576c7db4955d7c3286026a9759602cc264c1aba8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b5167367228449ca20cea58576c7db4955d7c3286026a9759602cc264c1aba8->enter($__internal_3b5167367228449ca20cea58576c7db4955d7c3286026a9759602cc264c1aba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_3b5167367228449ca20cea58576c7db4955d7c3286026a9759602cc264c1aba8->leave($__internal_3b5167367228449ca20cea58576c7db4955d7c3286026a9759602cc264c1aba8_prof);

        
        $__internal_cc09057bfd000048e87f561317cfb03342cc452c063cc7cd4c53ba5917cb9132->leave($__internal_cc09057bfd000048e87f561317cfb03342cc452c063cc7cd4c53ba5917cb9132_prof);

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
", "bootstrap_4_horizontal_layout.html.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\bootstrap_4_horizontal_layout.html.twig");
    }
}
