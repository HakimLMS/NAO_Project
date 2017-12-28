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
        $__internal_199a85c009f7dff309050b8d24fc5844a7899147e552745fd2d68a2a48b934b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_199a85c009f7dff309050b8d24fc5844a7899147e552745fd2d68a2a48b934b1->enter($__internal_199a85c009f7dff309050b8d24fc5844a7899147e552745fd2d68a2a48b934b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_8fb24b7eb3d1b5cdf766e57abbbe6b5fba66799d0cc6f3c026f8a20bd632df75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fb24b7eb3d1b5cdf766e57abbbe6b5fba66799d0cc6f3c026f8a20bd632df75->enter($__internal_8fb24b7eb3d1b5cdf766e57abbbe6b5fba66799d0cc6f3c026f8a20bd632df75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_199a85c009f7dff309050b8d24fc5844a7899147e552745fd2d68a2a48b934b1->leave($__internal_199a85c009f7dff309050b8d24fc5844a7899147e552745fd2d68a2a48b934b1_prof);

        
        $__internal_8fb24b7eb3d1b5cdf766e57abbbe6b5fba66799d0cc6f3c026f8a20bd632df75->leave($__internal_8fb24b7eb3d1b5cdf766e57abbbe6b5fba66799d0cc6f3c026f8a20bd632df75_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_9f78d7265f04628e896d604708a60bee6aa642c4917b60a7ceef557c8ed26bf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f78d7265f04628e896d604708a60bee6aa642c4917b60a7ceef557c8ed26bf4->enter($__internal_9f78d7265f04628e896d604708a60bee6aa642c4917b60a7ceef557c8ed26bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_b54e5cbd611fb906c618dc2abbcb745400793a7fe0a100f611ebf2211d430010 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b54e5cbd611fb906c618dc2abbcb745400793a7fe0a100f611ebf2211d430010->enter($__internal_b54e5cbd611fb906c618dc2abbcb745400793a7fe0a100f611ebf2211d430010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_b54e5cbd611fb906c618dc2abbcb745400793a7fe0a100f611ebf2211d430010->leave($__internal_b54e5cbd611fb906c618dc2abbcb745400793a7fe0a100f611ebf2211d430010_prof);

        
        $__internal_9f78d7265f04628e896d604708a60bee6aa642c4917b60a7ceef557c8ed26bf4->leave($__internal_9f78d7265f04628e896d604708a60bee6aa642c4917b60a7ceef557c8ed26bf4_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_774b93bd02ac6b9e2164aa481380201f86d54e47dab78e080645243932f9e46d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_774b93bd02ac6b9e2164aa481380201f86d54e47dab78e080645243932f9e46d->enter($__internal_774b93bd02ac6b9e2164aa481380201f86d54e47dab78e080645243932f9e46d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_bfd84ceea62fa02fafbccf11ed04024322c787f3abe66db2a11f87cfc6e8a63b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfd84ceea62fa02fafbccf11ed04024322c787f3abe66db2a11f87cfc6e8a63b->enter($__internal_bfd84ceea62fa02fafbccf11ed04024322c787f3abe66db2a11f87cfc6e8a63b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_bfd84ceea62fa02fafbccf11ed04024322c787f3abe66db2a11f87cfc6e8a63b->leave($__internal_bfd84ceea62fa02fafbccf11ed04024322c787f3abe66db2a11f87cfc6e8a63b_prof);

        
        $__internal_774b93bd02ac6b9e2164aa481380201f86d54e47dab78e080645243932f9e46d->leave($__internal_774b93bd02ac6b9e2164aa481380201f86d54e47dab78e080645243932f9e46d_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_7136c6347e85f833bd39019517a6621d162b7c4a05d0b802664b7bc320e2b97a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7136c6347e85f833bd39019517a6621d162b7c4a05d0b802664b7bc320e2b97a->enter($__internal_7136c6347e85f833bd39019517a6621d162b7c4a05d0b802664b7bc320e2b97a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_cb2c8e966f9caaec3c6ab928ba46f51e6ed00ee89f20bc92b7391ddb4e5efbc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb2c8e966f9caaec3c6ab928ba46f51e6ed00ee89f20bc92b7391ddb4e5efbc7->enter($__internal_cb2c8e966f9caaec3c6ab928ba46f51e6ed00ee89f20bc92b7391ddb4e5efbc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_cb2c8e966f9caaec3c6ab928ba46f51e6ed00ee89f20bc92b7391ddb4e5efbc7->leave($__internal_cb2c8e966f9caaec3c6ab928ba46f51e6ed00ee89f20bc92b7391ddb4e5efbc7_prof);

        
        $__internal_7136c6347e85f833bd39019517a6621d162b7c4a05d0b802664b7bc320e2b97a->leave($__internal_7136c6347e85f833bd39019517a6621d162b7c4a05d0b802664b7bc320e2b97a_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_5567e1a8a54d47f9ac6a3dc4d90e7824ad04dbe85db0794b9dac8fa31775028e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5567e1a8a54d47f9ac6a3dc4d90e7824ad04dbe85db0794b9dac8fa31775028e->enter($__internal_5567e1a8a54d47f9ac6a3dc4d90e7824ad04dbe85db0794b9dac8fa31775028e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_9dbe337e06454cb88247fd6d597108df05eaa4e46f3d15d2b8a7ac9abe22dff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dbe337e06454cb88247fd6d597108df05eaa4e46f3d15d2b8a7ac9abe22dff4->enter($__internal_9dbe337e06454cb88247fd6d597108df05eaa4e46f3d15d2b8a7ac9abe22dff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_9dbe337e06454cb88247fd6d597108df05eaa4e46f3d15d2b8a7ac9abe22dff4->leave($__internal_9dbe337e06454cb88247fd6d597108df05eaa4e46f3d15d2b8a7ac9abe22dff4_prof);

        
        $__internal_5567e1a8a54d47f9ac6a3dc4d90e7824ad04dbe85db0794b9dac8fa31775028e->leave($__internal_5567e1a8a54d47f9ac6a3dc4d90e7824ad04dbe85db0794b9dac8fa31775028e_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_f91ea740fd8aaa3b4bd7a71399c0fe2db5385cf0d373e14ba94c553eb00a440e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f91ea740fd8aaa3b4bd7a71399c0fe2db5385cf0d373e14ba94c553eb00a440e->enter($__internal_f91ea740fd8aaa3b4bd7a71399c0fe2db5385cf0d373e14ba94c553eb00a440e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_78f6265528c35b882acde969e3674ed98795f5db767fb414eacc834d917f3b52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78f6265528c35b882acde969e3674ed98795f5db767fb414eacc834d917f3b52->enter($__internal_78f6265528c35b882acde969e3674ed98795f5db767fb414eacc834d917f3b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_78f6265528c35b882acde969e3674ed98795f5db767fb414eacc834d917f3b52->leave($__internal_78f6265528c35b882acde969e3674ed98795f5db767fb414eacc834d917f3b52_prof);

        
        $__internal_f91ea740fd8aaa3b4bd7a71399c0fe2db5385cf0d373e14ba94c553eb00a440e->leave($__internal_f91ea740fd8aaa3b4bd7a71399c0fe2db5385cf0d373e14ba94c553eb00a440e_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_89b0500085c947048e133de1fefacecbf73f1782eb977090d01f4c0f597ba3ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89b0500085c947048e133de1fefacecbf73f1782eb977090d01f4c0f597ba3ec->enter($__internal_89b0500085c947048e133de1fefacecbf73f1782eb977090d01f4c0f597ba3ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_599e4797345839be90d9d992218708cb3097bef5315c823647e6f6d913c5ea39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_599e4797345839be90d9d992218708cb3097bef5315c823647e6f6d913c5ea39->enter($__internal_599e4797345839be90d9d992218708cb3097bef5315c823647e6f6d913c5ea39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_599e4797345839be90d9d992218708cb3097bef5315c823647e6f6d913c5ea39->leave($__internal_599e4797345839be90d9d992218708cb3097bef5315c823647e6f6d913c5ea39_prof);

        
        $__internal_89b0500085c947048e133de1fefacecbf73f1782eb977090d01f4c0f597ba3ec->leave($__internal_89b0500085c947048e133de1fefacecbf73f1782eb977090d01f4c0f597ba3ec_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_e2f7ed00716e33114eae4978fc73fa58b25b030a8813b9066df6d4fdc0fc1a18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2f7ed00716e33114eae4978fc73fa58b25b030a8813b9066df6d4fdc0fc1a18->enter($__internal_e2f7ed00716e33114eae4978fc73fa58b25b030a8813b9066df6d4fdc0fc1a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_29535e694c0289bb0d105dcf74b5f09af8a49463ace6547748ef5ed7b4016d64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29535e694c0289bb0d105dcf74b5f09af8a49463ace6547748ef5ed7b4016d64->enter($__internal_29535e694c0289bb0d105dcf74b5f09af8a49463ace6547748ef5ed7b4016d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_29535e694c0289bb0d105dcf74b5f09af8a49463ace6547748ef5ed7b4016d64->leave($__internal_29535e694c0289bb0d105dcf74b5f09af8a49463ace6547748ef5ed7b4016d64_prof);

        
        $__internal_e2f7ed00716e33114eae4978fc73fa58b25b030a8813b9066df6d4fdc0fc1a18->leave($__internal_e2f7ed00716e33114eae4978fc73fa58b25b030a8813b9066df6d4fdc0fc1a18_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_e889e0c4f7134308780945503f6566161e82ed12019c18175314eb2f1053bd14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e889e0c4f7134308780945503f6566161e82ed12019c18175314eb2f1053bd14->enter($__internal_e889e0c4f7134308780945503f6566161e82ed12019c18175314eb2f1053bd14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_3c4b9549729c338a86ecdc54b330674f6846f03ddeb6975b4ac125aa1b94e62c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c4b9549729c338a86ecdc54b330674f6846f03ddeb6975b4ac125aa1b94e62c->enter($__internal_3c4b9549729c338a86ecdc54b330674f6846f03ddeb6975b4ac125aa1b94e62c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_3c4b9549729c338a86ecdc54b330674f6846f03ddeb6975b4ac125aa1b94e62c->leave($__internal_3c4b9549729c338a86ecdc54b330674f6846f03ddeb6975b4ac125aa1b94e62c_prof);

        
        $__internal_e889e0c4f7134308780945503f6566161e82ed12019c18175314eb2f1053bd14->leave($__internal_e889e0c4f7134308780945503f6566161e82ed12019c18175314eb2f1053bd14_prof);

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
