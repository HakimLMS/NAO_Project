<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_e95f75826dc9efff97ed9f00f92a8f716916a9755ed81f906136c46530d09923 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3771bb20440284454675865884df80b8a4a6c7ffcbc654a709cbb6c7c8594b21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3771bb20440284454675865884df80b8a4a6c7ffcbc654a709cbb6c7c8594b21->enter($__internal_3771bb20440284454675865884df80b8a4a6c7ffcbc654a709cbb6c7c8594b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_4748bb843fcb5e001dfdb3fa8ddedeb09336385a85de1b967f85103d5a60106c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4748bb843fcb5e001dfdb3fa8ddedeb09336385a85de1b967f85103d5a60106c->enter($__internal_4748bb843fcb5e001dfdb3fa8ddedeb09336385a85de1b967f85103d5a60106c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('submit_row', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('reset_row', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_3771bb20440284454675865884df80b8a4a6c7ffcbc654a709cbb6c7c8594b21->leave($__internal_3771bb20440284454675865884df80b8a4a6c7ffcbc654a709cbb6c7c8594b21_prof);

        
        $__internal_4748bb843fcb5e001dfdb3fa8ddedeb09336385a85de1b967f85103d5a60106c->leave($__internal_4748bb843fcb5e001dfdb3fa8ddedeb09336385a85de1b967f85103d5a60106c_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_40924abccc0d6155c192b969b42fc186f6aa3476d42c8f6c05145645462ab4f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40924abccc0d6155c192b969b42fc186f6aa3476d42c8f6c05145645462ab4f1->enter($__internal_40924abccc0d6155c192b969b42fc186f6aa3476d42c8f6c05145645462ab4f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_46aafc3f03525ea5065f5a4594441873d4e0da283aabc872996751b389ac7bc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46aafc3f03525ea5065f5a4594441873d4e0da283aabc872996751b389ac7bc5->enter($__internal_46aafc3f03525ea5065f5a4594441873d4e0da283aabc872996751b389ac7bc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_46aafc3f03525ea5065f5a4594441873d4e0da283aabc872996751b389ac7bc5->leave($__internal_46aafc3f03525ea5065f5a4594441873d4e0da283aabc872996751b389ac7bc5_prof);

        
        $__internal_40924abccc0d6155c192b969b42fc186f6aa3476d42c8f6c05145645462ab4f1->leave($__internal_40924abccc0d6155c192b969b42fc186f6aa3476d42c8f6c05145645462ab4f1_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_21bf9407d7fd45e21b749a375041a7b9c5a2058ba64a09867fb1a717d065be00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21bf9407d7fd45e21b749a375041a7b9c5a2058ba64a09867fb1a717d065be00->enter($__internal_21bf9407d7fd45e21b749a375041a7b9c5a2058ba64a09867fb1a717d065be00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_7c7e5d733065415cba63e2962fa8e0eb32b90c00eef0426af43a0ae546102813 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c7e5d733065415cba63e2962fa8e0eb32b90c00eef0426af43a0ae546102813->enter($__internal_7c7e5d733065415cba63e2962fa8e0eb32b90c00eef0426af43a0ae546102813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 11, $this->getSourceContext()); })()) === false)) {
            // line 12
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 14
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 14, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 15
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_7c7e5d733065415cba63e2962fa8e0eb32b90c00eef0426af43a0ae546102813->leave($__internal_7c7e5d733065415cba63e2962fa8e0eb32b90c00eef0426af43a0ae546102813_prof);

        
        $__internal_21bf9407d7fd45e21b749a375041a7b9c5a2058ba64a09867fb1a717d065be00->leave($__internal_21bf9407d7fd45e21b749a375041a7b9c5a2058ba64a09867fb1a717d065be00_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_f29783e3caeefe8453c0ce53d45a23a1dab2e1a03e77a4b461f1fb7f4f99b6cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f29783e3caeefe8453c0ce53d45a23a1dab2e1a03e77a4b461f1fb7f4f99b6cf->enter($__internal_f29783e3caeefe8453c0ce53d45a23a1dab2e1a03e77a4b461f1fb7f4f99b6cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_ebd0f6cc77bf4b69f1a97b428d0ca48d229ee49137fc5650c1182caa73ce41c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebd0f6cc77bf4b69f1a97b428d0ca48d229ee49137fc5650c1182caa73ce41c4->enter($__internal_ebd0f6cc77bf4b69f1a97b428d0ca48d229ee49137fc5650c1182caa73ce41c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_ebd0f6cc77bf4b69f1a97b428d0ca48d229ee49137fc5650c1182caa73ce41c4->leave($__internal_ebd0f6cc77bf4b69f1a97b428d0ca48d229ee49137fc5650c1182caa73ce41c4_prof);

        
        $__internal_f29783e3caeefe8453c0ce53d45a23a1dab2e1a03e77a4b461f1fb7f4f99b6cf->leave($__internal_f29783e3caeefe8453c0ce53d45a23a1dab2e1a03e77a4b461f1fb7f4f99b6cf_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_b25472691d2499b1a18a3b23f560c6caf2cf9030d9be1cf4bf29ec655d9f1434 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b25472691d2499b1a18a3b23f560c6caf2cf9030d9be1cf4bf29ec655d9f1434->enter($__internal_b25472691d2499b1a18a3b23f560c6caf2cf9030d9be1cf4bf29ec655d9f1434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_20aaaf508d8476472904d5c115ba8f4041a608553ab9551339d96d6aa5287c19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20aaaf508d8476472904d5c115ba8f4041a608553ab9551339d96d6aa5287c19->enter($__internal_20aaaf508d8476472904d5c115ba8f4041a608553ab9551339d96d6aa5287c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 26, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 26, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 26, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'label');
        // line 28
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), 'widget');
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'errors');
        // line 31
        echo "</div>
";
        // line 32
        echo "</div>";
        
        $__internal_20aaaf508d8476472904d5c115ba8f4041a608553ab9551339d96d6aa5287c19->leave($__internal_20aaaf508d8476472904d5c115ba8f4041a608553ab9551339d96d6aa5287c19_prof);

        
        $__internal_b25472691d2499b1a18a3b23f560c6caf2cf9030d9be1cf4bf29ec655d9f1434->leave($__internal_b25472691d2499b1a18a3b23f560c6caf2cf9030d9be1cf4bf29ec655d9f1434_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_14e8c988070ff048b59bd5300e99f75b210c6d836d6d489629eaf197ed10ac0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14e8c988070ff048b59bd5300e99f75b210c6d836d6d489629eaf197ed10ac0b->enter($__internal_14e8c988070ff048b59bd5300e99f75b210c6d836d6d489629eaf197ed10ac0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_66d2174ca6fe859327de90aabf62f196c7ded5d6f9e6a63dee6230e932ada84e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66d2174ca6fe859327de90aabf62f196c7ded5d6f9e6a63dee6230e932ada84e->enter($__internal_66d2174ca6fe859327de90aabf62f196c7ded5d6f9e6a63dee6230e932ada84e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 36
        echo "<div class=\"form-group\">";
        // line 37
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 38
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), 'widget');
        // line 40
        echo "</div>";
        // line 41
        echo "</div>";
        
        $__internal_66d2174ca6fe859327de90aabf62f196c7ded5d6f9e6a63dee6230e932ada84e->leave($__internal_66d2174ca6fe859327de90aabf62f196c7ded5d6f9e6a63dee6230e932ada84e_prof);

        
        $__internal_14e8c988070ff048b59bd5300e99f75b210c6d836d6d489629eaf197ed10ac0b->leave($__internal_14e8c988070ff048b59bd5300e99f75b210c6d836d6d489629eaf197ed10ac0b_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_dbd25a79767306194fe24eb2531765427cbf8c308512500dc0e7566c405bc9f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbd25a79767306194fe24eb2531765427cbf8c308512500dc0e7566c405bc9f9->enter($__internal_dbd25a79767306194fe24eb2531765427cbf8c308512500dc0e7566c405bc9f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_a0c50df702a86d0b733cce7ebe524e67a217dac5d7265414054c679fbadb62f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0c50df702a86d0b733cce7ebe524e67a217dac5d7265414054c679fbadb62f1->enter($__internal_a0c50df702a86d0b733cce7ebe524e67a217dac5d7265414054c679fbadb62f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 45
        echo "<div class=\"form-group\">";
        // line 46
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 47
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->getSourceContext()); })()), 'widget');
        // line 49
        echo "</div>";
        // line 50
        echo "</div>";
        
        $__internal_a0c50df702a86d0b733cce7ebe524e67a217dac5d7265414054c679fbadb62f1->leave($__internal_a0c50df702a86d0b733cce7ebe524e67a217dac5d7265414054c679fbadb62f1_prof);

        
        $__internal_dbd25a79767306194fe24eb2531765427cbf8c308512500dc0e7566c405bc9f9->leave($__internal_dbd25a79767306194fe24eb2531765427cbf8c308512500dc0e7566c405bc9f9_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_e900d4d3951f1de0a8651140a96325c24a07f2ba7c8123046b6b390d1a0d5147 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e900d4d3951f1de0a8651140a96325c24a07f2ba7c8123046b6b390d1a0d5147->enter($__internal_e900d4d3951f1de0a8651140a96325c24a07f2ba7c8123046b6b390d1a0d5147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_6d2d5f0367e8e20a5e559e5bcea9628ad39f6a790739cec2e543006e3015b91c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d2d5f0367e8e20a5e559e5bcea9628ad39f6a790739cec2e543006e3015b91c->enter($__internal_6d2d5f0367e8e20a5e559e5bcea9628ad39f6a790739cec2e543006e3015b91c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_6d2d5f0367e8e20a5e559e5bcea9628ad39f6a790739cec2e543006e3015b91c->leave($__internal_6d2d5f0367e8e20a5e559e5bcea9628ad39f6a790739cec2e543006e3015b91c_prof);

        
        $__internal_e900d4d3951f1de0a8651140a96325c24a07f2ba7c8123046b6b390d1a0d5147->leave($__internal_e900d4d3951f1de0a8651140a96325c24a07f2ba7c8123046b6b390d1a0d5147_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_fc728bbbb2cb6d4597318199cd2fbf029e135ac408d530350f425cc8a4b1ba9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc728bbbb2cb6d4597318199cd2fbf029e135ac408d530350f425cc8a4b1ba9c->enter($__internal_fc728bbbb2cb6d4597318199cd2fbf029e135ac408d530350f425cc8a4b1ba9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_c5b5ee528a83f335202d4d5892de741600345988238682f41a6dd9793de32903 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5b5ee528a83f335202d4d5892de741600345988238682f41a6dd9793de32903->enter($__internal_c5b5ee528a83f335202d4d5892de741600345988238682f41a6dd9793de32903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 58
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 58, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 59
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->getSourceContext()); })()), 'widget');
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'errors');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_c5b5ee528a83f335202d4d5892de741600345988238682f41a6dd9793de32903->leave($__internal_c5b5ee528a83f335202d4d5892de741600345988238682f41a6dd9793de32903_prof);

        
        $__internal_fc728bbbb2cb6d4597318199cd2fbf029e135ac408d530350f425cc8a4b1ba9c->leave($__internal_fc728bbbb2cb6d4597318199cd2fbf029e135ac408d530350f425cc8a4b1ba9c_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  320 => 64,  318 => 63,  316 => 62,  314 => 61,  310 => 60,  306 => 59,  300 => 58,  291 => 57,  281 => 54,  272 => 53,  262 => 50,  260 => 49,  258 => 48,  254 => 47,  250 => 46,  248 => 45,  239 => 44,  229 => 41,  227 => 40,  225 => 39,  221 => 38,  217 => 37,  215 => 36,  206 => 35,  196 => 32,  193 => 31,  191 => 30,  189 => 29,  185 => 28,  183 => 27,  177 => 26,  168 => 25,  158 => 20,  149 => 19,  138 => 15,  136 => 14,  131 => 12,  129 => 11,  120 => 10,  110 => 5,  108 => 4,  99 => 3,  89 => 57,  86 => 56,  84 => 53,  81 => 52,  79 => 44,  76 => 43,  74 => 35,  71 => 34,  69 => 25,  66 => 24,  63 => 22,  61 => 19,  58 => 18,  56 => 10,  53 => 9,  50 => 7,  48 => 3,  45 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block submit_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group\">{#--#}
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
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}", "bootstrap_3_horizontal_layout.html.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\bootstrap_3_horizontal_layout.html.twig");
    }
}
