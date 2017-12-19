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
        $__internal_f20a4f00658dd0fc3097563a4e5df98bb3a4cab4bbcae5864e1157ede07c9183 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f20a4f00658dd0fc3097563a4e5df98bb3a4cab4bbcae5864e1157ede07c9183->enter($__internal_f20a4f00658dd0fc3097563a4e5df98bb3a4cab4bbcae5864e1157ede07c9183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_6fff72842123621282d7ea8a796b7682a8148103e7f372f90dbab7fc2f079398 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fff72842123621282d7ea8a796b7682a8148103e7f372f90dbab7fc2f079398->enter($__internal_6fff72842123621282d7ea8a796b7682a8148103e7f372f90dbab7fc2f079398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_f20a4f00658dd0fc3097563a4e5df98bb3a4cab4bbcae5864e1157ede07c9183->leave($__internal_f20a4f00658dd0fc3097563a4e5df98bb3a4cab4bbcae5864e1157ede07c9183_prof);

        
        $__internal_6fff72842123621282d7ea8a796b7682a8148103e7f372f90dbab7fc2f079398->leave($__internal_6fff72842123621282d7ea8a796b7682a8148103e7f372f90dbab7fc2f079398_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_10661385907f50810abe53a5d64e314310ae7c01cd5a7bd30a490427728e0cc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10661385907f50810abe53a5d64e314310ae7c01cd5a7bd30a490427728e0cc5->enter($__internal_10661385907f50810abe53a5d64e314310ae7c01cd5a7bd30a490427728e0cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_77dc07b2d779316dbe882d2c024771d522720ecc991cacd26ab284f98b5d2d4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77dc07b2d779316dbe882d2c024771d522720ecc991cacd26ab284f98b5d2d4c->enter($__internal_77dc07b2d779316dbe882d2c024771d522720ecc991cacd26ab284f98b5d2d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_77dc07b2d779316dbe882d2c024771d522720ecc991cacd26ab284f98b5d2d4c->leave($__internal_77dc07b2d779316dbe882d2c024771d522720ecc991cacd26ab284f98b5d2d4c_prof);

        
        $__internal_10661385907f50810abe53a5d64e314310ae7c01cd5a7bd30a490427728e0cc5->leave($__internal_10661385907f50810abe53a5d64e314310ae7c01cd5a7bd30a490427728e0cc5_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_51a5be7dc9e800a09f5502bc43e4429fdfbfb7f47a53784cabb43ae2313faeb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51a5be7dc9e800a09f5502bc43e4429fdfbfb7f47a53784cabb43ae2313faeb8->enter($__internal_51a5be7dc9e800a09f5502bc43e4429fdfbfb7f47a53784cabb43ae2313faeb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_10f31eb9ac3b8bb23f7e63bd6bcda7d4799888effc843953c864ba9cc97bb290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10f31eb9ac3b8bb23f7e63bd6bcda7d4799888effc843953c864ba9cc97bb290->enter($__internal_10f31eb9ac3b8bb23f7e63bd6bcda7d4799888effc843953c864ba9cc97bb290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_10f31eb9ac3b8bb23f7e63bd6bcda7d4799888effc843953c864ba9cc97bb290->leave($__internal_10f31eb9ac3b8bb23f7e63bd6bcda7d4799888effc843953c864ba9cc97bb290_prof);

        
        $__internal_51a5be7dc9e800a09f5502bc43e4429fdfbfb7f47a53784cabb43ae2313faeb8->leave($__internal_51a5be7dc9e800a09f5502bc43e4429fdfbfb7f47a53784cabb43ae2313faeb8_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_564533160c3bdc8011c5872082c67f467707e0a2a2842a63d09078b1c0782dbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_564533160c3bdc8011c5872082c67f467707e0a2a2842a63d09078b1c0782dbd->enter($__internal_564533160c3bdc8011c5872082c67f467707e0a2a2842a63d09078b1c0782dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_b22216e77904963dbf315cd5a988eb0d918d64b750079160a9c3c0cdaf69a9e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b22216e77904963dbf315cd5a988eb0d918d64b750079160a9c3c0cdaf69a9e4->enter($__internal_b22216e77904963dbf315cd5a988eb0d918d64b750079160a9c3c0cdaf69a9e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_b22216e77904963dbf315cd5a988eb0d918d64b750079160a9c3c0cdaf69a9e4->leave($__internal_b22216e77904963dbf315cd5a988eb0d918d64b750079160a9c3c0cdaf69a9e4_prof);

        
        $__internal_564533160c3bdc8011c5872082c67f467707e0a2a2842a63d09078b1c0782dbd->leave($__internal_564533160c3bdc8011c5872082c67f467707e0a2a2842a63d09078b1c0782dbd_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_91ff0807f49cf8d69273ead051f178a205421fe697afaa913be05c120615b116 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91ff0807f49cf8d69273ead051f178a205421fe697afaa913be05c120615b116->enter($__internal_91ff0807f49cf8d69273ead051f178a205421fe697afaa913be05c120615b116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_edc366b580c5691627e55ec1035d356e93d133e97649563332bb5490ba3f18d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edc366b580c5691627e55ec1035d356e93d133e97649563332bb5490ba3f18d2->enter($__internal_edc366b580c5691627e55ec1035d356e93d133e97649563332bb5490ba3f18d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_edc366b580c5691627e55ec1035d356e93d133e97649563332bb5490ba3f18d2->leave($__internal_edc366b580c5691627e55ec1035d356e93d133e97649563332bb5490ba3f18d2_prof);

        
        $__internal_91ff0807f49cf8d69273ead051f178a205421fe697afaa913be05c120615b116->leave($__internal_91ff0807f49cf8d69273ead051f178a205421fe697afaa913be05c120615b116_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_7f445af3e8fad93da081eb7ce9839c885fc2ef6f91ba3ac32bf37d7c7cb2af16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f445af3e8fad93da081eb7ce9839c885fc2ef6f91ba3ac32bf37d7c7cb2af16->enter($__internal_7f445af3e8fad93da081eb7ce9839c885fc2ef6f91ba3ac32bf37d7c7cb2af16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_3a97030461d7661f62892fe066de9c137fdf7c41bd59f4bf4ff3b150484d8393 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a97030461d7661f62892fe066de9c137fdf7c41bd59f4bf4ff3b150484d8393->enter($__internal_3a97030461d7661f62892fe066de9c137fdf7c41bd59f4bf4ff3b150484d8393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_3a97030461d7661f62892fe066de9c137fdf7c41bd59f4bf4ff3b150484d8393->leave($__internal_3a97030461d7661f62892fe066de9c137fdf7c41bd59f4bf4ff3b150484d8393_prof);

        
        $__internal_7f445af3e8fad93da081eb7ce9839c885fc2ef6f91ba3ac32bf37d7c7cb2af16->leave($__internal_7f445af3e8fad93da081eb7ce9839c885fc2ef6f91ba3ac32bf37d7c7cb2af16_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_83c47875d46d5fdacf11365760f6ca6b6469cbcdc0fd3843b197d0e4e2529a7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83c47875d46d5fdacf11365760f6ca6b6469cbcdc0fd3843b197d0e4e2529a7e->enter($__internal_83c47875d46d5fdacf11365760f6ca6b6469cbcdc0fd3843b197d0e4e2529a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_6d13c207067a90af07d949e655b62facbed9ef0663f98d8a97f6ed50b4631004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d13c207067a90af07d949e655b62facbed9ef0663f98d8a97f6ed50b4631004->enter($__internal_6d13c207067a90af07d949e655b62facbed9ef0663f98d8a97f6ed50b4631004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_6d13c207067a90af07d949e655b62facbed9ef0663f98d8a97f6ed50b4631004->leave($__internal_6d13c207067a90af07d949e655b62facbed9ef0663f98d8a97f6ed50b4631004_prof);

        
        $__internal_83c47875d46d5fdacf11365760f6ca6b6469cbcdc0fd3843b197d0e4e2529a7e->leave($__internal_83c47875d46d5fdacf11365760f6ca6b6469cbcdc0fd3843b197d0e4e2529a7e_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_5ab804ebd6043391304162fbb31e88961477651f7128bb7e060284b54f0cdc45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ab804ebd6043391304162fbb31e88961477651f7128bb7e060284b54f0cdc45->enter($__internal_5ab804ebd6043391304162fbb31e88961477651f7128bb7e060284b54f0cdc45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_8d219d87ec843cf0712b339cc89545a4c538e6a229a7ce6467cbed6d692efc1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d219d87ec843cf0712b339cc89545a4c538e6a229a7ce6467cbed6d692efc1d->enter($__internal_8d219d87ec843cf0712b339cc89545a4c538e6a229a7ce6467cbed6d692efc1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_8d219d87ec843cf0712b339cc89545a4c538e6a229a7ce6467cbed6d692efc1d->leave($__internal_8d219d87ec843cf0712b339cc89545a4c538e6a229a7ce6467cbed6d692efc1d_prof);

        
        $__internal_5ab804ebd6043391304162fbb31e88961477651f7128bb7e060284b54f0cdc45->leave($__internal_5ab804ebd6043391304162fbb31e88961477651f7128bb7e060284b54f0cdc45_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_d59bd01501b1e3c2d151a0201f9c6ad6f8e56fa6af829e4052c2a2ecefbe5683 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d59bd01501b1e3c2d151a0201f9c6ad6f8e56fa6af829e4052c2a2ecefbe5683->enter($__internal_d59bd01501b1e3c2d151a0201f9c6ad6f8e56fa6af829e4052c2a2ecefbe5683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_39300cfe72fbeb5a08cdfe2aea97a5d7b03d6e35da065cc40ffee0b4c2bdb3a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39300cfe72fbeb5a08cdfe2aea97a5d7b03d6e35da065cc40ffee0b4c2bdb3a9->enter($__internal_39300cfe72fbeb5a08cdfe2aea97a5d7b03d6e35da065cc40ffee0b4c2bdb3a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_39300cfe72fbeb5a08cdfe2aea97a5d7b03d6e35da065cc40ffee0b4c2bdb3a9->leave($__internal_39300cfe72fbeb5a08cdfe2aea97a5d7b03d6e35da065cc40ffee0b4c2bdb3a9_prof);

        
        $__internal_d59bd01501b1e3c2d151a0201f9c6ad6f8e56fa6af829e4052c2a2ecefbe5683->leave($__internal_d59bd01501b1e3c2d151a0201f9c6ad6f8e56fa6af829e4052c2a2ecefbe5683_prof);

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
