<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_c4bc26f7203e5f39eb05147e24068f05ee0caf85932ce27b317313b834fe3186 extends Twig_Template
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
        $__internal_a06b0383c0bd3d86475e00979c3c387de7c7f6fb3410ce2ef1cd6b59a300889d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a06b0383c0bd3d86475e00979c3c387de7c7f6fb3410ce2ef1cd6b59a300889d->enter($__internal_a06b0383c0bd3d86475e00979c3c387de7c7f6fb3410ce2ef1cd6b59a300889d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_796cd12855606fa7930bd437ce3e632a33069c2b4dcedfc3aff5e7daa0f294df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_796cd12855606fa7930bd437ce3e632a33069c2b4dcedfc3aff5e7daa0f294df->enter($__internal_796cd12855606fa7930bd437ce3e632a33069c2b4dcedfc3aff5e7daa0f294df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_a06b0383c0bd3d86475e00979c3c387de7c7f6fb3410ce2ef1cd6b59a300889d->leave($__internal_a06b0383c0bd3d86475e00979c3c387de7c7f6fb3410ce2ef1cd6b59a300889d_prof);

        
        $__internal_796cd12855606fa7930bd437ce3e632a33069c2b4dcedfc3aff5e7daa0f294df->leave($__internal_796cd12855606fa7930bd437ce3e632a33069c2b4dcedfc3aff5e7daa0f294df_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_b1cca981fe5d5cef609514e0e0e166bef221d657d0262fc48f4f9ce07b730656 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1cca981fe5d5cef609514e0e0e166bef221d657d0262fc48f4f9ce07b730656->enter($__internal_b1cca981fe5d5cef609514e0e0e166bef221d657d0262fc48f4f9ce07b730656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_45e0e6777ee0da2cfbaf6e4e1d972bf59d62627abe3b624c6203ff1da80cd118 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45e0e6777ee0da2cfbaf6e4e1d972bf59d62627abe3b624c6203ff1da80cd118->enter($__internal_45e0e6777ee0da2cfbaf6e4e1d972bf59d62627abe3b624c6203ff1da80cd118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_45e0e6777ee0da2cfbaf6e4e1d972bf59d62627abe3b624c6203ff1da80cd118->leave($__internal_45e0e6777ee0da2cfbaf6e4e1d972bf59d62627abe3b624c6203ff1da80cd118_prof);

        
        $__internal_b1cca981fe5d5cef609514e0e0e166bef221d657d0262fc48f4f9ce07b730656->leave($__internal_b1cca981fe5d5cef609514e0e0e166bef221d657d0262fc48f4f9ce07b730656_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_540bc4be4ba1e8ac6c1c11bf598fd1b97743d081ec6a0a1935f8a68cf7066831 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_540bc4be4ba1e8ac6c1c11bf598fd1b97743d081ec6a0a1935f8a68cf7066831->enter($__internal_540bc4be4ba1e8ac6c1c11bf598fd1b97743d081ec6a0a1935f8a68cf7066831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_cef8231f2a5ec72b071eb09e1f6713ae4c98db6ade1418f346fa351009d86464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cef8231f2a5ec72b071eb09e1f6713ae4c98db6ade1418f346fa351009d86464->enter($__internal_cef8231f2a5ec72b071eb09e1f6713ae4c98db6ade1418f346fa351009d86464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_cef8231f2a5ec72b071eb09e1f6713ae4c98db6ade1418f346fa351009d86464->leave($__internal_cef8231f2a5ec72b071eb09e1f6713ae4c98db6ade1418f346fa351009d86464_prof);

        
        $__internal_540bc4be4ba1e8ac6c1c11bf598fd1b97743d081ec6a0a1935f8a68cf7066831->leave($__internal_540bc4be4ba1e8ac6c1c11bf598fd1b97743d081ec6a0a1935f8a68cf7066831_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_0bf55096062a3190d5a6ad5dc6648d71c8273519aa005824820e2edfbaf7d61a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bf55096062a3190d5a6ad5dc6648d71c8273519aa005824820e2edfbaf7d61a->enter($__internal_0bf55096062a3190d5a6ad5dc6648d71c8273519aa005824820e2edfbaf7d61a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_e0e611b30cd6fd2e7d96704f3d4f34031efe3102ee88dfeca720c60c2a85815a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0e611b30cd6fd2e7d96704f3d4f34031efe3102ee88dfeca720c60c2a85815a->enter($__internal_e0e611b30cd6fd2e7d96704f3d4f34031efe3102ee88dfeca720c60c2a85815a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_e0e611b30cd6fd2e7d96704f3d4f34031efe3102ee88dfeca720c60c2a85815a->leave($__internal_e0e611b30cd6fd2e7d96704f3d4f34031efe3102ee88dfeca720c60c2a85815a_prof);

        
        $__internal_0bf55096062a3190d5a6ad5dc6648d71c8273519aa005824820e2edfbaf7d61a->leave($__internal_0bf55096062a3190d5a6ad5dc6648d71c8273519aa005824820e2edfbaf7d61a_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_b82c190d2f6dc77fa4169e0639763b0b333494752a5b2b9802438ff5eb3589e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b82c190d2f6dc77fa4169e0639763b0b333494752a5b2b9802438ff5eb3589e0->enter($__internal_b82c190d2f6dc77fa4169e0639763b0b333494752a5b2b9802438ff5eb3589e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_121be5988935d5e67c85d32eff5934c0c8f061d27e135488dd5d3c33ce84e485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_121be5988935d5e67c85d32eff5934c0c8f061d27e135488dd5d3c33ce84e485->enter($__internal_121be5988935d5e67c85d32eff5934c0c8f061d27e135488dd5d3c33ce84e485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_121be5988935d5e67c85d32eff5934c0c8f061d27e135488dd5d3c33ce84e485->leave($__internal_121be5988935d5e67c85d32eff5934c0c8f061d27e135488dd5d3c33ce84e485_prof);

        
        $__internal_b82c190d2f6dc77fa4169e0639763b0b333494752a5b2b9802438ff5eb3589e0->leave($__internal_b82c190d2f6dc77fa4169e0639763b0b333494752a5b2b9802438ff5eb3589e0_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_7c0f753fd8c8cda9264c85a7a1c9e6a914c96db69bd2967f09406154c23a40a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c0f753fd8c8cda9264c85a7a1c9e6a914c96db69bd2967f09406154c23a40a9->enter($__internal_7c0f753fd8c8cda9264c85a7a1c9e6a914c96db69bd2967f09406154c23a40a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_cdd864c309c5adc4c7a81685e63fad35a00fe1e79971fb077141f4b72a50cf62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdd864c309c5adc4c7a81685e63fad35a00fe1e79971fb077141f4b72a50cf62->enter($__internal_cdd864c309c5adc4c7a81685e63fad35a00fe1e79971fb077141f4b72a50cf62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_cdd864c309c5adc4c7a81685e63fad35a00fe1e79971fb077141f4b72a50cf62->leave($__internal_cdd864c309c5adc4c7a81685e63fad35a00fe1e79971fb077141f4b72a50cf62_prof);

        
        $__internal_7c0f753fd8c8cda9264c85a7a1c9e6a914c96db69bd2967f09406154c23a40a9->leave($__internal_7c0f753fd8c8cda9264c85a7a1c9e6a914c96db69bd2967f09406154c23a40a9_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_01075c3d573456291cef759942474e1f804e6cef04cf378620690f5997061475 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01075c3d573456291cef759942474e1f804e6cef04cf378620690f5997061475->enter($__internal_01075c3d573456291cef759942474e1f804e6cef04cf378620690f5997061475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_cfb0bf6cc6c9b8246e980fdcc585e640a4ca27c152c47a3a80088bcaa9b054e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfb0bf6cc6c9b8246e980fdcc585e640a4ca27c152c47a3a80088bcaa9b054e5->enter($__internal_cfb0bf6cc6c9b8246e980fdcc585e640a4ca27c152c47a3a80088bcaa9b054e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_cfb0bf6cc6c9b8246e980fdcc585e640a4ca27c152c47a3a80088bcaa9b054e5->leave($__internal_cfb0bf6cc6c9b8246e980fdcc585e640a4ca27c152c47a3a80088bcaa9b054e5_prof);

        
        $__internal_01075c3d573456291cef759942474e1f804e6cef04cf378620690f5997061475->leave($__internal_01075c3d573456291cef759942474e1f804e6cef04cf378620690f5997061475_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_3aa5c53652c0aa85a98a3691190a9340e3d0e015163b8866fd02820726a98449 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3aa5c53652c0aa85a98a3691190a9340e3d0e015163b8866fd02820726a98449->enter($__internal_3aa5c53652c0aa85a98a3691190a9340e3d0e015163b8866fd02820726a98449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_ed9a87cc02d657bae396879a2a48e973f8f6654dce6f2f0c9c6257e9ba135a14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed9a87cc02d657bae396879a2a48e973f8f6654dce6f2f0c9c6257e9ba135a14->enter($__internal_ed9a87cc02d657bae396879a2a48e973f8f6654dce6f2f0c9c6257e9ba135a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_ed9a87cc02d657bae396879a2a48e973f8f6654dce6f2f0c9c6257e9ba135a14->leave($__internal_ed9a87cc02d657bae396879a2a48e973f8f6654dce6f2f0c9c6257e9ba135a14_prof);

        
        $__internal_3aa5c53652c0aa85a98a3691190a9340e3d0e015163b8866fd02820726a98449->leave($__internal_3aa5c53652c0aa85a98a3691190a9340e3d0e015163b8866fd02820726a98449_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_35b0042ef7b7b8169ef805b453cad3c91087d7b40f70ee91d13edece62afe7ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35b0042ef7b7b8169ef805b453cad3c91087d7b40f70ee91d13edece62afe7ef->enter($__internal_35b0042ef7b7b8169ef805b453cad3c91087d7b40f70ee91d13edece62afe7ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_200b35633935f39ced134a3b3ff2f8cd0f22cf59403290b1800f77e0e7a2258f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_200b35633935f39ced134a3b3ff2f8cd0f22cf59403290b1800f77e0e7a2258f->enter($__internal_200b35633935f39ced134a3b3ff2f8cd0f22cf59403290b1800f77e0e7a2258f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_200b35633935f39ced134a3b3ff2f8cd0f22cf59403290b1800f77e0e7a2258f->leave($__internal_200b35633935f39ced134a3b3ff2f8cd0f22cf59403290b1800f77e0e7a2258f_prof);

        
        $__internal_35b0042ef7b7b8169ef805b453cad3c91087d7b40f70ee91d13edece62afe7ef->leave($__internal_35b0042ef7b7b8169ef805b453cad3c91087d7b40f70ee91d13edece62afe7ef_prof);

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
