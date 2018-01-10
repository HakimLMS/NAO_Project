<?php

/* bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_5db87d4d5d8514bbe3dad148daa4f348b2532089d7e9f602725fdc7822d6eee6 extends Twig_Template
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
        $__internal_85ae148fd292b7765ae93ce51ac644e66752bb9fd79d6288f1419d4d44ba5d02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85ae148fd292b7765ae93ce51ac644e66752bb9fd79d6288f1419d4d44ba5d02->enter($__internal_85ae148fd292b7765ae93ce51ac644e66752bb9fd79d6288f1419d4d44ba5d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_cbc4a7332e8b7b9a81f1a0d94d9d66c214ebfa86be901fc0b3bdfe723baa5202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbc4a7332e8b7b9a81f1a0d94d9d66c214ebfa86be901fc0b3bdfe723baa5202->enter($__internal_cbc4a7332e8b7b9a81f1a0d94d9d66c214ebfa86be901fc0b3bdfe723baa5202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

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
        
        $__internal_85ae148fd292b7765ae93ce51ac644e66752bb9fd79d6288f1419d4d44ba5d02->leave($__internal_85ae148fd292b7765ae93ce51ac644e66752bb9fd79d6288f1419d4d44ba5d02_prof);

        
        $__internal_cbc4a7332e8b7b9a81f1a0d94d9d66c214ebfa86be901fc0b3bdfe723baa5202->leave($__internal_cbc4a7332e8b7b9a81f1a0d94d9d66c214ebfa86be901fc0b3bdfe723baa5202_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_ebd46f210dd67d585220e2a749e382c3f7463dce6e3e70d5446726f697a3a76b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebd46f210dd67d585220e2a749e382c3f7463dce6e3e70d5446726f697a3a76b->enter($__internal_ebd46f210dd67d585220e2a749e382c3f7463dce6e3e70d5446726f697a3a76b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_dd7db40c9a1f27d984fd8c625ac7352676cfa8a080c40745eae65ce76f5b9f59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd7db40c9a1f27d984fd8c625ac7352676cfa8a080c40745eae65ce76f5b9f59->enter($__internal_dd7db40c9a1f27d984fd8c625ac7352676cfa8a080c40745eae65ce76f5b9f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_dd7db40c9a1f27d984fd8c625ac7352676cfa8a080c40745eae65ce76f5b9f59->leave($__internal_dd7db40c9a1f27d984fd8c625ac7352676cfa8a080c40745eae65ce76f5b9f59_prof);

        
        $__internal_ebd46f210dd67d585220e2a749e382c3f7463dce6e3e70d5446726f697a3a76b->leave($__internal_ebd46f210dd67d585220e2a749e382c3f7463dce6e3e70d5446726f697a3a76b_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_376207b70656191e59298c6783c8c681e271c8211e7a60114cafdc5fec5adef5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_376207b70656191e59298c6783c8c681e271c8211e7a60114cafdc5fec5adef5->enter($__internal_376207b70656191e59298c6783c8c681e271c8211e7a60114cafdc5fec5adef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_4d36e91b118de74a83f3b80ac7a8d39141265e860efb3eea5898d4368e2e5e52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d36e91b118de74a83f3b80ac7a8d39141265e860efb3eea5898d4368e2e5e52->enter($__internal_4d36e91b118de74a83f3b80ac7a8d39141265e860efb3eea5898d4368e2e5e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_4d36e91b118de74a83f3b80ac7a8d39141265e860efb3eea5898d4368e2e5e52->leave($__internal_4d36e91b118de74a83f3b80ac7a8d39141265e860efb3eea5898d4368e2e5e52_prof);

        
        $__internal_376207b70656191e59298c6783c8c681e271c8211e7a60114cafdc5fec5adef5->leave($__internal_376207b70656191e59298c6783c8c681e271c8211e7a60114cafdc5fec5adef5_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_2cf39716e7b0091a82f7e53e5ccf7e2dbf4c672db86bbf672887f55e2215c308 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cf39716e7b0091a82f7e53e5ccf7e2dbf4c672db86bbf672887f55e2215c308->enter($__internal_2cf39716e7b0091a82f7e53e5ccf7e2dbf4c672db86bbf672887f55e2215c308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_eaaf60dc0c6ac0c467f8f62a1ec94d6838af46878b3b1d33187dd6344dcbd06a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaaf60dc0c6ac0c467f8f62a1ec94d6838af46878b3b1d33187dd6344dcbd06a->enter($__internal_eaaf60dc0c6ac0c467f8f62a1ec94d6838af46878b3b1d33187dd6344dcbd06a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_eaaf60dc0c6ac0c467f8f62a1ec94d6838af46878b3b1d33187dd6344dcbd06a->leave($__internal_eaaf60dc0c6ac0c467f8f62a1ec94d6838af46878b3b1d33187dd6344dcbd06a_prof);

        
        $__internal_2cf39716e7b0091a82f7e53e5ccf7e2dbf4c672db86bbf672887f55e2215c308->leave($__internal_2cf39716e7b0091a82f7e53e5ccf7e2dbf4c672db86bbf672887f55e2215c308_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_efdd9e42a4bdfb3c603624eca4905a37d48e7f9ec434807c2692dcaf267e2887 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efdd9e42a4bdfb3c603624eca4905a37d48e7f9ec434807c2692dcaf267e2887->enter($__internal_efdd9e42a4bdfb3c603624eca4905a37d48e7f9ec434807c2692dcaf267e2887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_d00c991cb3fcfb0ae7e7424524f29fb4bb4ddbe37d6d1f65d6831176675df257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d00c991cb3fcfb0ae7e7424524f29fb4bb4ddbe37d6d1f65d6831176675df257->enter($__internal_d00c991cb3fcfb0ae7e7424524f29fb4bb4ddbe37d6d1f65d6831176675df257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

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
        
        $__internal_d00c991cb3fcfb0ae7e7424524f29fb4bb4ddbe37d6d1f65d6831176675df257->leave($__internal_d00c991cb3fcfb0ae7e7424524f29fb4bb4ddbe37d6d1f65d6831176675df257_prof);

        
        $__internal_efdd9e42a4bdfb3c603624eca4905a37d48e7f9ec434807c2692dcaf267e2887->leave($__internal_efdd9e42a4bdfb3c603624eca4905a37d48e7f9ec434807c2692dcaf267e2887_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_9656821cc69f26109268d03e1b63468bdace9be70267c0c53aa90d4407d7d334 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9656821cc69f26109268d03e1b63468bdace9be70267c0c53aa90d4407d7d334->enter($__internal_9656821cc69f26109268d03e1b63468bdace9be70267c0c53aa90d4407d7d334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_bff0bd7fca706d991be6daace0e0b895b466ad80e55eba6058ac6602107365ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bff0bd7fca706d991be6daace0e0b895b466ad80e55eba6058ac6602107365ac->enter($__internal_bff0bd7fca706d991be6daace0e0b895b466ad80e55eba6058ac6602107365ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_bff0bd7fca706d991be6daace0e0b895b466ad80e55eba6058ac6602107365ac->leave($__internal_bff0bd7fca706d991be6daace0e0b895b466ad80e55eba6058ac6602107365ac_prof);

        
        $__internal_9656821cc69f26109268d03e1b63468bdace9be70267c0c53aa90d4407d7d334->leave($__internal_9656821cc69f26109268d03e1b63468bdace9be70267c0c53aa90d4407d7d334_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_72fc4ccda50397b08acb14131cc60a5fd5f45aec6cf49307ecabf0f61daf1ac3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72fc4ccda50397b08acb14131cc60a5fd5f45aec6cf49307ecabf0f61daf1ac3->enter($__internal_72fc4ccda50397b08acb14131cc60a5fd5f45aec6cf49307ecabf0f61daf1ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_13f3f21ab7a1de8a54c1cdec89d18c932f3c57a65cb483f9b02317504b28cba2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13f3f21ab7a1de8a54c1cdec89d18c932f3c57a65cb483f9b02317504b28cba2->enter($__internal_13f3f21ab7a1de8a54c1cdec89d18c932f3c57a65cb483f9b02317504b28cba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_13f3f21ab7a1de8a54c1cdec89d18c932f3c57a65cb483f9b02317504b28cba2->leave($__internal_13f3f21ab7a1de8a54c1cdec89d18c932f3c57a65cb483f9b02317504b28cba2_prof);

        
        $__internal_72fc4ccda50397b08acb14131cc60a5fd5f45aec6cf49307ecabf0f61daf1ac3->leave($__internal_72fc4ccda50397b08acb14131cc60a5fd5f45aec6cf49307ecabf0f61daf1ac3_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_a13db4f4c03d53f2ca19f3b8b98902c2cea4ae42489de1a88ca25c160f0987ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a13db4f4c03d53f2ca19f3b8b98902c2cea4ae42489de1a88ca25c160f0987ab->enter($__internal_a13db4f4c03d53f2ca19f3b8b98902c2cea4ae42489de1a88ca25c160f0987ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_a269f5b4fbccddfa2743313243311f7196eb878bc606e0b66ac89070960fe674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a269f5b4fbccddfa2743313243311f7196eb878bc606e0b66ac89070960fe674->enter($__internal_a269f5b4fbccddfa2743313243311f7196eb878bc606e0b66ac89070960fe674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_a269f5b4fbccddfa2743313243311f7196eb878bc606e0b66ac89070960fe674->leave($__internal_a269f5b4fbccddfa2743313243311f7196eb878bc606e0b66ac89070960fe674_prof);

        
        $__internal_a13db4f4c03d53f2ca19f3b8b98902c2cea4ae42489de1a88ca25c160f0987ab->leave($__internal_a13db4f4c03d53f2ca19f3b8b98902c2cea4ae42489de1a88ca25c160f0987ab_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_a541f8ec216d51a8547ff93cd67cb7c2c9b8777f7e4fa914d3c2bc417be9d350 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a541f8ec216d51a8547ff93cd67cb7c2c9b8777f7e4fa914d3c2bc417be9d350->enter($__internal_a541f8ec216d51a8547ff93cd67cb7c2c9b8777f7e4fa914d3c2bc417be9d350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_726494111204a045e129f6b3b2fde1f02fdd93df360c57a7c65c154dc55ca219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_726494111204a045e129f6b3b2fde1f02fdd93df360c57a7c65c154dc55ca219->enter($__internal_726494111204a045e129f6b3b2fde1f02fdd93df360c57a7c65c154dc55ca219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_726494111204a045e129f6b3b2fde1f02fdd93df360c57a7c65c154dc55ca219->leave($__internal_726494111204a045e129f6b3b2fde1f02fdd93df360c57a7c65c154dc55ca219_prof);

        
        $__internal_a541f8ec216d51a8547ff93cd67cb7c2c9b8777f7e4fa914d3c2bc417be9d350->leave($__internal_a541f8ec216d51a8547ff93cd67cb7c2c9b8777f7e4fa914d3c2bc417be9d350_prof);

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
