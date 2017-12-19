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
        $__internal_f67397bcbd75d190315076908a94ee1c221ecaa2d1c4195668afb0f50672a1dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f67397bcbd75d190315076908a94ee1c221ecaa2d1c4195668afb0f50672a1dd->enter($__internal_f67397bcbd75d190315076908a94ee1c221ecaa2d1c4195668afb0f50672a1dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_34ed0e7f246eb8a384e8000deb7664ac3682ac24afae39cc6254133344335fb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34ed0e7f246eb8a384e8000deb7664ac3682ac24afae39cc6254133344335fb5->enter($__internal_34ed0e7f246eb8a384e8000deb7664ac3682ac24afae39cc6254133344335fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_f67397bcbd75d190315076908a94ee1c221ecaa2d1c4195668afb0f50672a1dd->leave($__internal_f67397bcbd75d190315076908a94ee1c221ecaa2d1c4195668afb0f50672a1dd_prof);

        
        $__internal_34ed0e7f246eb8a384e8000deb7664ac3682ac24afae39cc6254133344335fb5->leave($__internal_34ed0e7f246eb8a384e8000deb7664ac3682ac24afae39cc6254133344335fb5_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_2fafccd256c66b9cec41b24f0689290d69cc7d52a023f4d7e938fb0d6368a04e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fafccd256c66b9cec41b24f0689290d69cc7d52a023f4d7e938fb0d6368a04e->enter($__internal_2fafccd256c66b9cec41b24f0689290d69cc7d52a023f4d7e938fb0d6368a04e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_cb0322360818386d4b87fc162d6c08ee59a71963c787ff8c8bc46aa576052224 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb0322360818386d4b87fc162d6c08ee59a71963c787ff8c8bc46aa576052224->enter($__internal_cb0322360818386d4b87fc162d6c08ee59a71963c787ff8c8bc46aa576052224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_cb0322360818386d4b87fc162d6c08ee59a71963c787ff8c8bc46aa576052224->leave($__internal_cb0322360818386d4b87fc162d6c08ee59a71963c787ff8c8bc46aa576052224_prof);

        
        $__internal_2fafccd256c66b9cec41b24f0689290d69cc7d52a023f4d7e938fb0d6368a04e->leave($__internal_2fafccd256c66b9cec41b24f0689290d69cc7d52a023f4d7e938fb0d6368a04e_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_3808967f8759b27f3c8178b174113fba54b3ace0c3e0bac9f9e69d40b6e45380 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3808967f8759b27f3c8178b174113fba54b3ace0c3e0bac9f9e69d40b6e45380->enter($__internal_3808967f8759b27f3c8178b174113fba54b3ace0c3e0bac9f9e69d40b6e45380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_99ff369f8e8a19d953604f5d2d357363b6dc3d08b722b57e24ed65bdc844b4d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99ff369f8e8a19d953604f5d2d357363b6dc3d08b722b57e24ed65bdc844b4d6->enter($__internal_99ff369f8e8a19d953604f5d2d357363b6dc3d08b722b57e24ed65bdc844b4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_99ff369f8e8a19d953604f5d2d357363b6dc3d08b722b57e24ed65bdc844b4d6->leave($__internal_99ff369f8e8a19d953604f5d2d357363b6dc3d08b722b57e24ed65bdc844b4d6_prof);

        
        $__internal_3808967f8759b27f3c8178b174113fba54b3ace0c3e0bac9f9e69d40b6e45380->leave($__internal_3808967f8759b27f3c8178b174113fba54b3ace0c3e0bac9f9e69d40b6e45380_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_f293c8b3869876f11bd398e7903773a6efab7503e8e4f368ebe46c615cd7a618 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f293c8b3869876f11bd398e7903773a6efab7503e8e4f368ebe46c615cd7a618->enter($__internal_f293c8b3869876f11bd398e7903773a6efab7503e8e4f368ebe46c615cd7a618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_850313e2020d6cf7f0270fcdab01f6bbb5b5c25eb96e34ecfcb7a1d128e8c8ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_850313e2020d6cf7f0270fcdab01f6bbb5b5c25eb96e34ecfcb7a1d128e8c8ab->enter($__internal_850313e2020d6cf7f0270fcdab01f6bbb5b5c25eb96e34ecfcb7a1d128e8c8ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_850313e2020d6cf7f0270fcdab01f6bbb5b5c25eb96e34ecfcb7a1d128e8c8ab->leave($__internal_850313e2020d6cf7f0270fcdab01f6bbb5b5c25eb96e34ecfcb7a1d128e8c8ab_prof);

        
        $__internal_f293c8b3869876f11bd398e7903773a6efab7503e8e4f368ebe46c615cd7a618->leave($__internal_f293c8b3869876f11bd398e7903773a6efab7503e8e4f368ebe46c615cd7a618_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_f80e2d704a4980c667c31685d9fc09c984e092e1ce88e3412f1c4d1e84796c4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f80e2d704a4980c667c31685d9fc09c984e092e1ce88e3412f1c4d1e84796c4f->enter($__internal_f80e2d704a4980c667c31685d9fc09c984e092e1ce88e3412f1c4d1e84796c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_6448f4bac1254de29776379b4c2554b1eb415dd13b529de88a8c4e94c5ff2810 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6448f4bac1254de29776379b4c2554b1eb415dd13b529de88a8c4e94c5ff2810->enter($__internal_6448f4bac1254de29776379b4c2554b1eb415dd13b529de88a8c4e94c5ff2810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_6448f4bac1254de29776379b4c2554b1eb415dd13b529de88a8c4e94c5ff2810->leave($__internal_6448f4bac1254de29776379b4c2554b1eb415dd13b529de88a8c4e94c5ff2810_prof);

        
        $__internal_f80e2d704a4980c667c31685d9fc09c984e092e1ce88e3412f1c4d1e84796c4f->leave($__internal_f80e2d704a4980c667c31685d9fc09c984e092e1ce88e3412f1c4d1e84796c4f_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_a45db8f3682ca8e80a359566b5723e75660cbb40376d8ef2207bac6112adf42b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a45db8f3682ca8e80a359566b5723e75660cbb40376d8ef2207bac6112adf42b->enter($__internal_a45db8f3682ca8e80a359566b5723e75660cbb40376d8ef2207bac6112adf42b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_9ad483d0f15ac2fdb1771ac0a1fa830ab7c1114bbe7a35a5240e01a2b06b70bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ad483d0f15ac2fdb1771ac0a1fa830ab7c1114bbe7a35a5240e01a2b06b70bc->enter($__internal_9ad483d0f15ac2fdb1771ac0a1fa830ab7c1114bbe7a35a5240e01a2b06b70bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_9ad483d0f15ac2fdb1771ac0a1fa830ab7c1114bbe7a35a5240e01a2b06b70bc->leave($__internal_9ad483d0f15ac2fdb1771ac0a1fa830ab7c1114bbe7a35a5240e01a2b06b70bc_prof);

        
        $__internal_a45db8f3682ca8e80a359566b5723e75660cbb40376d8ef2207bac6112adf42b->leave($__internal_a45db8f3682ca8e80a359566b5723e75660cbb40376d8ef2207bac6112adf42b_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_31c4b16f9292fc9023a3147051b31dbbeb13986d79f8abb67866bf2572d25ae4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31c4b16f9292fc9023a3147051b31dbbeb13986d79f8abb67866bf2572d25ae4->enter($__internal_31c4b16f9292fc9023a3147051b31dbbeb13986d79f8abb67866bf2572d25ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_09714898653b1e362b1aa310fa330fefad3737d17c8c6583ed1934a9675b78af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09714898653b1e362b1aa310fa330fefad3737d17c8c6583ed1934a9675b78af->enter($__internal_09714898653b1e362b1aa310fa330fefad3737d17c8c6583ed1934a9675b78af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_09714898653b1e362b1aa310fa330fefad3737d17c8c6583ed1934a9675b78af->leave($__internal_09714898653b1e362b1aa310fa330fefad3737d17c8c6583ed1934a9675b78af_prof);

        
        $__internal_31c4b16f9292fc9023a3147051b31dbbeb13986d79f8abb67866bf2572d25ae4->leave($__internal_31c4b16f9292fc9023a3147051b31dbbeb13986d79f8abb67866bf2572d25ae4_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_978af3cdf4f26a34cb4f55e6ae4961421cf54ffbaf927d9e3764265f807bfbab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_978af3cdf4f26a34cb4f55e6ae4961421cf54ffbaf927d9e3764265f807bfbab->enter($__internal_978af3cdf4f26a34cb4f55e6ae4961421cf54ffbaf927d9e3764265f807bfbab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_7ce6fe80f4defc1aa96963098d90da40144272808a21b1177692da0d7f01100b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ce6fe80f4defc1aa96963098d90da40144272808a21b1177692da0d7f01100b->enter($__internal_7ce6fe80f4defc1aa96963098d90da40144272808a21b1177692da0d7f01100b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_7ce6fe80f4defc1aa96963098d90da40144272808a21b1177692da0d7f01100b->leave($__internal_7ce6fe80f4defc1aa96963098d90da40144272808a21b1177692da0d7f01100b_prof);

        
        $__internal_978af3cdf4f26a34cb4f55e6ae4961421cf54ffbaf927d9e3764265f807bfbab->leave($__internal_978af3cdf4f26a34cb4f55e6ae4961421cf54ffbaf927d9e3764265f807bfbab_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_0c10aa82d2420dd7a7fb2c1ff1fb9a6775af8de4c1b7ed55521ec2d9c53d42ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c10aa82d2420dd7a7fb2c1ff1fb9a6775af8de4c1b7ed55521ec2d9c53d42ca->enter($__internal_0c10aa82d2420dd7a7fb2c1ff1fb9a6775af8de4c1b7ed55521ec2d9c53d42ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_9ab9cde21363463c286c3af78dbfc2596fa37094ba0a23323eedd59f36ba810b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ab9cde21363463c286c3af78dbfc2596fa37094ba0a23323eedd59f36ba810b->enter($__internal_9ab9cde21363463c286c3af78dbfc2596fa37094ba0a23323eedd59f36ba810b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_9ab9cde21363463c286c3af78dbfc2596fa37094ba0a23323eedd59f36ba810b->leave($__internal_9ab9cde21363463c286c3af78dbfc2596fa37094ba0a23323eedd59f36ba810b_prof);

        
        $__internal_0c10aa82d2420dd7a7fb2c1ff1fb9a6775af8de4c1b7ed55521ec2d9c53d42ca->leave($__internal_0c10aa82d2420dd7a7fb2c1ff1fb9a6775af8de4c1b7ed55521ec2d9c53d42ca_prof);

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
{%- endblock checkbox_row %}", "bootstrap_3_horizontal_layout.html.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\bootstrap_3_horizontal_layout.html.twig");
    }
}
