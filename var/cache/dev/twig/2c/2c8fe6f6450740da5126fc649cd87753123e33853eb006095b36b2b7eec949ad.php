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
        $__internal_6e772330c206951dba21748aa4dcb37e94b32802fc409b9a787d523d7033d6a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e772330c206951dba21748aa4dcb37e94b32802fc409b9a787d523d7033d6a0->enter($__internal_6e772330c206951dba21748aa4dcb37e94b32802fc409b9a787d523d7033d6a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_28595ab1e916ad7f30009bd525cb4e6a040b5ee9fd9ea4eb5506610320b92863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28595ab1e916ad7f30009bd525cb4e6a040b5ee9fd9ea4eb5506610320b92863->enter($__internal_28595ab1e916ad7f30009bd525cb4e6a040b5ee9fd9ea4eb5506610320b92863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

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
        
        $__internal_6e772330c206951dba21748aa4dcb37e94b32802fc409b9a787d523d7033d6a0->leave($__internal_6e772330c206951dba21748aa4dcb37e94b32802fc409b9a787d523d7033d6a0_prof);

        
        $__internal_28595ab1e916ad7f30009bd525cb4e6a040b5ee9fd9ea4eb5506610320b92863->leave($__internal_28595ab1e916ad7f30009bd525cb4e6a040b5ee9fd9ea4eb5506610320b92863_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_204023ab38d2c16deb11dfde78cd46134a3e5ff5f9dcd29201acff8c684bb8da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_204023ab38d2c16deb11dfde78cd46134a3e5ff5f9dcd29201acff8c684bb8da->enter($__internal_204023ab38d2c16deb11dfde78cd46134a3e5ff5f9dcd29201acff8c684bb8da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_cddb2c309c987303b294c40cae2c5e2f611514efd7ec80f3642d6096c6188e37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cddb2c309c987303b294c40cae2c5e2f611514efd7ec80f3642d6096c6188e37->enter($__internal_cddb2c309c987303b294c40cae2c5e2f611514efd7ec80f3642d6096c6188e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_cddb2c309c987303b294c40cae2c5e2f611514efd7ec80f3642d6096c6188e37->leave($__internal_cddb2c309c987303b294c40cae2c5e2f611514efd7ec80f3642d6096c6188e37_prof);

        
        $__internal_204023ab38d2c16deb11dfde78cd46134a3e5ff5f9dcd29201acff8c684bb8da->leave($__internal_204023ab38d2c16deb11dfde78cd46134a3e5ff5f9dcd29201acff8c684bb8da_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_83a4ab92fd006b46ed8dea809137393fafa40511a2b6d13f4b33599f4a471f88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83a4ab92fd006b46ed8dea809137393fafa40511a2b6d13f4b33599f4a471f88->enter($__internal_83a4ab92fd006b46ed8dea809137393fafa40511a2b6d13f4b33599f4a471f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_17951fab3ee8b33578d5fa647ed31c7457c665d7ea5669bffeae2ede26506938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17951fab3ee8b33578d5fa647ed31c7457c665d7ea5669bffeae2ede26506938->enter($__internal_17951fab3ee8b33578d5fa647ed31c7457c665d7ea5669bffeae2ede26506938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_17951fab3ee8b33578d5fa647ed31c7457c665d7ea5669bffeae2ede26506938->leave($__internal_17951fab3ee8b33578d5fa647ed31c7457c665d7ea5669bffeae2ede26506938_prof);

        
        $__internal_83a4ab92fd006b46ed8dea809137393fafa40511a2b6d13f4b33599f4a471f88->leave($__internal_83a4ab92fd006b46ed8dea809137393fafa40511a2b6d13f4b33599f4a471f88_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_10e5e43c8ece80344777cc96f129c87284f967cda54a48f7b75e210394ade404 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10e5e43c8ece80344777cc96f129c87284f967cda54a48f7b75e210394ade404->enter($__internal_10e5e43c8ece80344777cc96f129c87284f967cda54a48f7b75e210394ade404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_309c707eac6494e910dee26d982a641832107483c2250972361f073f30a4366f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_309c707eac6494e910dee26d982a641832107483c2250972361f073f30a4366f->enter($__internal_309c707eac6494e910dee26d982a641832107483c2250972361f073f30a4366f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_309c707eac6494e910dee26d982a641832107483c2250972361f073f30a4366f->leave($__internal_309c707eac6494e910dee26d982a641832107483c2250972361f073f30a4366f_prof);

        
        $__internal_10e5e43c8ece80344777cc96f129c87284f967cda54a48f7b75e210394ade404->leave($__internal_10e5e43c8ece80344777cc96f129c87284f967cda54a48f7b75e210394ade404_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_c9ca4a654d04e65403585cf40c94122ce497a5b97fdc7a7c064289bc11cd04a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9ca4a654d04e65403585cf40c94122ce497a5b97fdc7a7c064289bc11cd04a9->enter($__internal_c9ca4a654d04e65403585cf40c94122ce497a5b97fdc7a7c064289bc11cd04a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_6b459f5debfe9c8b669b2defe1c1b3c2e5819fc47e0fedeafa0952c367002039 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b459f5debfe9c8b669b2defe1c1b3c2e5819fc47e0fedeafa0952c367002039->enter($__internal_6b459f5debfe9c8b669b2defe1c1b3c2e5819fc47e0fedeafa0952c367002039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

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
        
        $__internal_6b459f5debfe9c8b669b2defe1c1b3c2e5819fc47e0fedeafa0952c367002039->leave($__internal_6b459f5debfe9c8b669b2defe1c1b3c2e5819fc47e0fedeafa0952c367002039_prof);

        
        $__internal_c9ca4a654d04e65403585cf40c94122ce497a5b97fdc7a7c064289bc11cd04a9->leave($__internal_c9ca4a654d04e65403585cf40c94122ce497a5b97fdc7a7c064289bc11cd04a9_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_6ede37821f265ef870e35a8ca0f59a41ca7f40e65ccb4a38eaeb92d649bad96b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ede37821f265ef870e35a8ca0f59a41ca7f40e65ccb4a38eaeb92d649bad96b->enter($__internal_6ede37821f265ef870e35a8ca0f59a41ca7f40e65ccb4a38eaeb92d649bad96b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_9b534d981aae914ce4ef9d6c944efe50cd51233540ad2e6f3912c6b69b2b278b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b534d981aae914ce4ef9d6c944efe50cd51233540ad2e6f3912c6b69b2b278b->enter($__internal_9b534d981aae914ce4ef9d6c944efe50cd51233540ad2e6f3912c6b69b2b278b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_9b534d981aae914ce4ef9d6c944efe50cd51233540ad2e6f3912c6b69b2b278b->leave($__internal_9b534d981aae914ce4ef9d6c944efe50cd51233540ad2e6f3912c6b69b2b278b_prof);

        
        $__internal_6ede37821f265ef870e35a8ca0f59a41ca7f40e65ccb4a38eaeb92d649bad96b->leave($__internal_6ede37821f265ef870e35a8ca0f59a41ca7f40e65ccb4a38eaeb92d649bad96b_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_8c5fd1340d4794666d02af9e7c37461fec6f974cdc62336779548c94caeb47ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c5fd1340d4794666d02af9e7c37461fec6f974cdc62336779548c94caeb47ce->enter($__internal_8c5fd1340d4794666d02af9e7c37461fec6f974cdc62336779548c94caeb47ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_331d2719d28bf4783733f9d08c26da3da0b216dfaf57cc8aed66961626180b18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_331d2719d28bf4783733f9d08c26da3da0b216dfaf57cc8aed66961626180b18->enter($__internal_331d2719d28bf4783733f9d08c26da3da0b216dfaf57cc8aed66961626180b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_331d2719d28bf4783733f9d08c26da3da0b216dfaf57cc8aed66961626180b18->leave($__internal_331d2719d28bf4783733f9d08c26da3da0b216dfaf57cc8aed66961626180b18_prof);

        
        $__internal_8c5fd1340d4794666d02af9e7c37461fec6f974cdc62336779548c94caeb47ce->leave($__internal_8c5fd1340d4794666d02af9e7c37461fec6f974cdc62336779548c94caeb47ce_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_517543645b5826f1e89cce03314fbeb1690b1063af3fd88d55139362a9e3843b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_517543645b5826f1e89cce03314fbeb1690b1063af3fd88d55139362a9e3843b->enter($__internal_517543645b5826f1e89cce03314fbeb1690b1063af3fd88d55139362a9e3843b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_f0e4b38349d37051b55c55f8b9057c3962f9c8c43107ebb19dee384cc61e44a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0e4b38349d37051b55c55f8b9057c3962f9c8c43107ebb19dee384cc61e44a9->enter($__internal_f0e4b38349d37051b55c55f8b9057c3962f9c8c43107ebb19dee384cc61e44a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_f0e4b38349d37051b55c55f8b9057c3962f9c8c43107ebb19dee384cc61e44a9->leave($__internal_f0e4b38349d37051b55c55f8b9057c3962f9c8c43107ebb19dee384cc61e44a9_prof);

        
        $__internal_517543645b5826f1e89cce03314fbeb1690b1063af3fd88d55139362a9e3843b->leave($__internal_517543645b5826f1e89cce03314fbeb1690b1063af3fd88d55139362a9e3843b_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_77a0063ff199ca3910bc902cf124fd54a2b70e225ca52bf913a6cac56e915eb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77a0063ff199ca3910bc902cf124fd54a2b70e225ca52bf913a6cac56e915eb9->enter($__internal_77a0063ff199ca3910bc902cf124fd54a2b70e225ca52bf913a6cac56e915eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_3cd2f5566aabb8ffefa69a89027a73e3b98f951e4af924cdbc064648f2553bd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cd2f5566aabb8ffefa69a89027a73e3b98f951e4af924cdbc064648f2553bd3->enter($__internal_3cd2f5566aabb8ffefa69a89027a73e3b98f951e4af924cdbc064648f2553bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_3cd2f5566aabb8ffefa69a89027a73e3b98f951e4af924cdbc064648f2553bd3->leave($__internal_3cd2f5566aabb8ffefa69a89027a73e3b98f951e4af924cdbc064648f2553bd3_prof);

        
        $__internal_77a0063ff199ca3910bc902cf124fd54a2b70e225ca52bf913a6cac56e915eb9->leave($__internal_77a0063ff199ca3910bc902cf124fd54a2b70e225ca52bf913a6cac56e915eb9_prof);

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
