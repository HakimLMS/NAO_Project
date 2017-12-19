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
        $__internal_510ab4329baee5023c173f8a67906e3436c9edf50c49e333ef17f160f5df122f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_510ab4329baee5023c173f8a67906e3436c9edf50c49e333ef17f160f5df122f->enter($__internal_510ab4329baee5023c173f8a67906e3436c9edf50c49e333ef17f160f5df122f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_623892d4bf80e5e4cb3dfad3292a82506bd5820ca8448e0907e2717dd3d3ddf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_623892d4bf80e5e4cb3dfad3292a82506bd5820ca8448e0907e2717dd3d3ddf5->enter($__internal_623892d4bf80e5e4cb3dfad3292a82506bd5820ca8448e0907e2717dd3d3ddf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

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
        
        $__internal_510ab4329baee5023c173f8a67906e3436c9edf50c49e333ef17f160f5df122f->leave($__internal_510ab4329baee5023c173f8a67906e3436c9edf50c49e333ef17f160f5df122f_prof);

        
        $__internal_623892d4bf80e5e4cb3dfad3292a82506bd5820ca8448e0907e2717dd3d3ddf5->leave($__internal_623892d4bf80e5e4cb3dfad3292a82506bd5820ca8448e0907e2717dd3d3ddf5_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_0e2231fa65bdad9235149272b400901f013abb4bd588cd8c89709a4f40d1e8d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e2231fa65bdad9235149272b400901f013abb4bd588cd8c89709a4f40d1e8d5->enter($__internal_0e2231fa65bdad9235149272b400901f013abb4bd588cd8c89709a4f40d1e8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_997f5581f589ab09bf0a07a81a86d1df53e8427f14e498e238121e7a2043c852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_997f5581f589ab09bf0a07a81a86d1df53e8427f14e498e238121e7a2043c852->enter($__internal_997f5581f589ab09bf0a07a81a86d1df53e8427f14e498e238121e7a2043c852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_997f5581f589ab09bf0a07a81a86d1df53e8427f14e498e238121e7a2043c852->leave($__internal_997f5581f589ab09bf0a07a81a86d1df53e8427f14e498e238121e7a2043c852_prof);

        
        $__internal_0e2231fa65bdad9235149272b400901f013abb4bd588cd8c89709a4f40d1e8d5->leave($__internal_0e2231fa65bdad9235149272b400901f013abb4bd588cd8c89709a4f40d1e8d5_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_5a793913063f0861729fa1c10d058989d4fa4ec440777b3cdf56f655e22df0fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a793913063f0861729fa1c10d058989d4fa4ec440777b3cdf56f655e22df0fa->enter($__internal_5a793913063f0861729fa1c10d058989d4fa4ec440777b3cdf56f655e22df0fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_d9a944d05c62f31824f9d72415fe5d70efc8245df73579ef2d37a4d0adb2663b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9a944d05c62f31824f9d72415fe5d70efc8245df73579ef2d37a4d0adb2663b->enter($__internal_d9a944d05c62f31824f9d72415fe5d70efc8245df73579ef2d37a4d0adb2663b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_d9a944d05c62f31824f9d72415fe5d70efc8245df73579ef2d37a4d0adb2663b->leave($__internal_d9a944d05c62f31824f9d72415fe5d70efc8245df73579ef2d37a4d0adb2663b_prof);

        
        $__internal_5a793913063f0861729fa1c10d058989d4fa4ec440777b3cdf56f655e22df0fa->leave($__internal_5a793913063f0861729fa1c10d058989d4fa4ec440777b3cdf56f655e22df0fa_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_9d1095fab691626019154525ddfd89f7f8a69c5a5d436d6a1401cdc25400a2fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d1095fab691626019154525ddfd89f7f8a69c5a5d436d6a1401cdc25400a2fb->enter($__internal_9d1095fab691626019154525ddfd89f7f8a69c5a5d436d6a1401cdc25400a2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_aa0f10b35bf123b71d8a0a813a0c821e5d4e2d26a831c42d5778c9bafc07a6b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa0f10b35bf123b71d8a0a813a0c821e5d4e2d26a831c42d5778c9bafc07a6b0->enter($__internal_aa0f10b35bf123b71d8a0a813a0c821e5d4e2d26a831c42d5778c9bafc07a6b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_aa0f10b35bf123b71d8a0a813a0c821e5d4e2d26a831c42d5778c9bafc07a6b0->leave($__internal_aa0f10b35bf123b71d8a0a813a0c821e5d4e2d26a831c42d5778c9bafc07a6b0_prof);

        
        $__internal_9d1095fab691626019154525ddfd89f7f8a69c5a5d436d6a1401cdc25400a2fb->leave($__internal_9d1095fab691626019154525ddfd89f7f8a69c5a5d436d6a1401cdc25400a2fb_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_f1f544f2d875c8ed332d710adc409343617388310677fcbab271d902b837a41e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1f544f2d875c8ed332d710adc409343617388310677fcbab271d902b837a41e->enter($__internal_f1f544f2d875c8ed332d710adc409343617388310677fcbab271d902b837a41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_5a74209433226c0735e64eba78683f0529d56afa7e37775000a53e979bf5b024 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a74209433226c0735e64eba78683f0529d56afa7e37775000a53e979bf5b024->enter($__internal_5a74209433226c0735e64eba78683f0529d56afa7e37775000a53e979bf5b024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

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
        
        $__internal_5a74209433226c0735e64eba78683f0529d56afa7e37775000a53e979bf5b024->leave($__internal_5a74209433226c0735e64eba78683f0529d56afa7e37775000a53e979bf5b024_prof);

        
        $__internal_f1f544f2d875c8ed332d710adc409343617388310677fcbab271d902b837a41e->leave($__internal_f1f544f2d875c8ed332d710adc409343617388310677fcbab271d902b837a41e_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_7f35c028735a4640eb4f48031d2055087705c43302949bcae49d4a8250a1f6b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f35c028735a4640eb4f48031d2055087705c43302949bcae49d4a8250a1f6b7->enter($__internal_7f35c028735a4640eb4f48031d2055087705c43302949bcae49d4a8250a1f6b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_f7e8645321c3a5bdaa01de69e8a38ccce1d1efa94d3aa247c37b47b6ffa6ad56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7e8645321c3a5bdaa01de69e8a38ccce1d1efa94d3aa247c37b47b6ffa6ad56->enter($__internal_f7e8645321c3a5bdaa01de69e8a38ccce1d1efa94d3aa247c37b47b6ffa6ad56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_f7e8645321c3a5bdaa01de69e8a38ccce1d1efa94d3aa247c37b47b6ffa6ad56->leave($__internal_f7e8645321c3a5bdaa01de69e8a38ccce1d1efa94d3aa247c37b47b6ffa6ad56_prof);

        
        $__internal_7f35c028735a4640eb4f48031d2055087705c43302949bcae49d4a8250a1f6b7->leave($__internal_7f35c028735a4640eb4f48031d2055087705c43302949bcae49d4a8250a1f6b7_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_7ce370894a86787212115593fbb9bf1532e6e6d6b60ba468a0ce09b71c9c9309 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ce370894a86787212115593fbb9bf1532e6e6d6b60ba468a0ce09b71c9c9309->enter($__internal_7ce370894a86787212115593fbb9bf1532e6e6d6b60ba468a0ce09b71c9c9309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_c4dfb56de7660d1fda498cc089784a4f703b4f0dc417c93be80bdf2b59da39c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4dfb56de7660d1fda498cc089784a4f703b4f0dc417c93be80bdf2b59da39c0->enter($__internal_c4dfb56de7660d1fda498cc089784a4f703b4f0dc417c93be80bdf2b59da39c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_c4dfb56de7660d1fda498cc089784a4f703b4f0dc417c93be80bdf2b59da39c0->leave($__internal_c4dfb56de7660d1fda498cc089784a4f703b4f0dc417c93be80bdf2b59da39c0_prof);

        
        $__internal_7ce370894a86787212115593fbb9bf1532e6e6d6b60ba468a0ce09b71c9c9309->leave($__internal_7ce370894a86787212115593fbb9bf1532e6e6d6b60ba468a0ce09b71c9c9309_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_67cfc567798e09a3374d30aea9bbf14919ff91430a9bc3123ad3421543ad8ef1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67cfc567798e09a3374d30aea9bbf14919ff91430a9bc3123ad3421543ad8ef1->enter($__internal_67cfc567798e09a3374d30aea9bbf14919ff91430a9bc3123ad3421543ad8ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_4b2726c0495ea0b6bccea07da1a5a5c64b9c5e90c55a7742bf9e549c77058366 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b2726c0495ea0b6bccea07da1a5a5c64b9c5e90c55a7742bf9e549c77058366->enter($__internal_4b2726c0495ea0b6bccea07da1a5a5c64b9c5e90c55a7742bf9e549c77058366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_4b2726c0495ea0b6bccea07da1a5a5c64b9c5e90c55a7742bf9e549c77058366->leave($__internal_4b2726c0495ea0b6bccea07da1a5a5c64b9c5e90c55a7742bf9e549c77058366_prof);

        
        $__internal_67cfc567798e09a3374d30aea9bbf14919ff91430a9bc3123ad3421543ad8ef1->leave($__internal_67cfc567798e09a3374d30aea9bbf14919ff91430a9bc3123ad3421543ad8ef1_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_9f29dbfc1825d287cdf099dbb38afa307640b5e7bb4d1b067c5fffa7cd564db8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f29dbfc1825d287cdf099dbb38afa307640b5e7bb4d1b067c5fffa7cd564db8->enter($__internal_9f29dbfc1825d287cdf099dbb38afa307640b5e7bb4d1b067c5fffa7cd564db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_223242fd73b47f3b4887eb01b1cc12e1525a8d54763e25e0a03f85d2aedd4983 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_223242fd73b47f3b4887eb01b1cc12e1525a8d54763e25e0a03f85d2aedd4983->enter($__internal_223242fd73b47f3b4887eb01b1cc12e1525a8d54763e25e0a03f85d2aedd4983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_223242fd73b47f3b4887eb01b1cc12e1525a8d54763e25e0a03f85d2aedd4983->leave($__internal_223242fd73b47f3b4887eb01b1cc12e1525a8d54763e25e0a03f85d2aedd4983_prof);

        
        $__internal_9f29dbfc1825d287cdf099dbb38afa307640b5e7bb4d1b067c5fffa7cd564db8->leave($__internal_9f29dbfc1825d287cdf099dbb38afa307640b5e7bb4d1b067c5fffa7cd564db8_prof);

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
