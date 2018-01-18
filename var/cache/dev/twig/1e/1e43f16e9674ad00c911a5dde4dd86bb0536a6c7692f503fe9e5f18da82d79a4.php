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
        $__internal_598d4b7be564a5e68965fc490e2f42f3c034076805dc5dc6a699fbb0a4d413a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_598d4b7be564a5e68965fc490e2f42f3c034076805dc5dc6a699fbb0a4d413a2->enter($__internal_598d4b7be564a5e68965fc490e2f42f3c034076805dc5dc6a699fbb0a4d413a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_e258e9f9c803c34f1d7c2de80f676b92bad49f33dc790e587055b62abce24a66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e258e9f9c803c34f1d7c2de80f676b92bad49f33dc790e587055b62abce24a66->enter($__internal_e258e9f9c803c34f1d7c2de80f676b92bad49f33dc790e587055b62abce24a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_598d4b7be564a5e68965fc490e2f42f3c034076805dc5dc6a699fbb0a4d413a2->leave($__internal_598d4b7be564a5e68965fc490e2f42f3c034076805dc5dc6a699fbb0a4d413a2_prof);

        
        $__internal_e258e9f9c803c34f1d7c2de80f676b92bad49f33dc790e587055b62abce24a66->leave($__internal_e258e9f9c803c34f1d7c2de80f676b92bad49f33dc790e587055b62abce24a66_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_ec292aa622bc93b54f8b5968634f1ba821a8043a90fe812ee61b8ff8291df66f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec292aa622bc93b54f8b5968634f1ba821a8043a90fe812ee61b8ff8291df66f->enter($__internal_ec292aa622bc93b54f8b5968634f1ba821a8043a90fe812ee61b8ff8291df66f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_6f8eb91e820c6045e75649d61eee6fa57daaa6a53fec637ab560475f3efac96d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f8eb91e820c6045e75649d61eee6fa57daaa6a53fec637ab560475f3efac96d->enter($__internal_6f8eb91e820c6045e75649d61eee6fa57daaa6a53fec637ab560475f3efac96d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_6f8eb91e820c6045e75649d61eee6fa57daaa6a53fec637ab560475f3efac96d->leave($__internal_6f8eb91e820c6045e75649d61eee6fa57daaa6a53fec637ab560475f3efac96d_prof);

        
        $__internal_ec292aa622bc93b54f8b5968634f1ba821a8043a90fe812ee61b8ff8291df66f->leave($__internal_ec292aa622bc93b54f8b5968634f1ba821a8043a90fe812ee61b8ff8291df66f_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_263189af67c209e2198e7dd5f95a8962bfa6ab8c2a52ee8dd49e77f43b46e8fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_263189af67c209e2198e7dd5f95a8962bfa6ab8c2a52ee8dd49e77f43b46e8fd->enter($__internal_263189af67c209e2198e7dd5f95a8962bfa6ab8c2a52ee8dd49e77f43b46e8fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_d86712743eabcf7af1c22e3f4fcf14ccec4d7064f4b5a7af6e044bf1b690b81d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d86712743eabcf7af1c22e3f4fcf14ccec4d7064f4b5a7af6e044bf1b690b81d->enter($__internal_d86712743eabcf7af1c22e3f4fcf14ccec4d7064f4b5a7af6e044bf1b690b81d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_d86712743eabcf7af1c22e3f4fcf14ccec4d7064f4b5a7af6e044bf1b690b81d->leave($__internal_d86712743eabcf7af1c22e3f4fcf14ccec4d7064f4b5a7af6e044bf1b690b81d_prof);

        
        $__internal_263189af67c209e2198e7dd5f95a8962bfa6ab8c2a52ee8dd49e77f43b46e8fd->leave($__internal_263189af67c209e2198e7dd5f95a8962bfa6ab8c2a52ee8dd49e77f43b46e8fd_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_a2700917b507808c52eb6724ff56b0a86e2aebb7e76096553d58c54931fd0e58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2700917b507808c52eb6724ff56b0a86e2aebb7e76096553d58c54931fd0e58->enter($__internal_a2700917b507808c52eb6724ff56b0a86e2aebb7e76096553d58c54931fd0e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_a60dbc2916962c2cece3e2a7f939621a1bb1de8df9d43350e51eebc567bd0033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a60dbc2916962c2cece3e2a7f939621a1bb1de8df9d43350e51eebc567bd0033->enter($__internal_a60dbc2916962c2cece3e2a7f939621a1bb1de8df9d43350e51eebc567bd0033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_a60dbc2916962c2cece3e2a7f939621a1bb1de8df9d43350e51eebc567bd0033->leave($__internal_a60dbc2916962c2cece3e2a7f939621a1bb1de8df9d43350e51eebc567bd0033_prof);

        
        $__internal_a2700917b507808c52eb6724ff56b0a86e2aebb7e76096553d58c54931fd0e58->leave($__internal_a2700917b507808c52eb6724ff56b0a86e2aebb7e76096553d58c54931fd0e58_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_345632703204b0d896e418bf5611a5e7daff2f9ad2e6677b67c0a14d01b47bcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_345632703204b0d896e418bf5611a5e7daff2f9ad2e6677b67c0a14d01b47bcf->enter($__internal_345632703204b0d896e418bf5611a5e7daff2f9ad2e6677b67c0a14d01b47bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_0e746304e31493a528311cbbdf3a45c3d8b99b7857b2de9b98ca0ce297b1c1ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e746304e31493a528311cbbdf3a45c3d8b99b7857b2de9b98ca0ce297b1c1ab->enter($__internal_0e746304e31493a528311cbbdf3a45c3d8b99b7857b2de9b98ca0ce297b1c1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_0e746304e31493a528311cbbdf3a45c3d8b99b7857b2de9b98ca0ce297b1c1ab->leave($__internal_0e746304e31493a528311cbbdf3a45c3d8b99b7857b2de9b98ca0ce297b1c1ab_prof);

        
        $__internal_345632703204b0d896e418bf5611a5e7daff2f9ad2e6677b67c0a14d01b47bcf->leave($__internal_345632703204b0d896e418bf5611a5e7daff2f9ad2e6677b67c0a14d01b47bcf_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_c57969a4eee6436d86da78e1565a32f43db886e53355dd3e0664258295c08368 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c57969a4eee6436d86da78e1565a32f43db886e53355dd3e0664258295c08368->enter($__internal_c57969a4eee6436d86da78e1565a32f43db886e53355dd3e0664258295c08368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_ba21e6d429f3ea25f874f30886cf98ae44fcedd949b021feb75168148af10365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba21e6d429f3ea25f874f30886cf98ae44fcedd949b021feb75168148af10365->enter($__internal_ba21e6d429f3ea25f874f30886cf98ae44fcedd949b021feb75168148af10365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_ba21e6d429f3ea25f874f30886cf98ae44fcedd949b021feb75168148af10365->leave($__internal_ba21e6d429f3ea25f874f30886cf98ae44fcedd949b021feb75168148af10365_prof);

        
        $__internal_c57969a4eee6436d86da78e1565a32f43db886e53355dd3e0664258295c08368->leave($__internal_c57969a4eee6436d86da78e1565a32f43db886e53355dd3e0664258295c08368_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_de7c49ca2a02997c40723b354e1c7ddc2f4699c442df6bc4d821b165994b6bb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de7c49ca2a02997c40723b354e1c7ddc2f4699c442df6bc4d821b165994b6bb9->enter($__internal_de7c49ca2a02997c40723b354e1c7ddc2f4699c442df6bc4d821b165994b6bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_9cfd3d2fe62895f082ffc865b3bfc45b0cd79c1fce73a2eb8bd9c17cad76dea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cfd3d2fe62895f082ffc865b3bfc45b0cd79c1fce73a2eb8bd9c17cad76dea6->enter($__internal_9cfd3d2fe62895f082ffc865b3bfc45b0cd79c1fce73a2eb8bd9c17cad76dea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_9cfd3d2fe62895f082ffc865b3bfc45b0cd79c1fce73a2eb8bd9c17cad76dea6->leave($__internal_9cfd3d2fe62895f082ffc865b3bfc45b0cd79c1fce73a2eb8bd9c17cad76dea6_prof);

        
        $__internal_de7c49ca2a02997c40723b354e1c7ddc2f4699c442df6bc4d821b165994b6bb9->leave($__internal_de7c49ca2a02997c40723b354e1c7ddc2f4699c442df6bc4d821b165994b6bb9_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_86665b9ce607d8cf681c5fead627c150c7df41798895dbd63060f00011e719af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86665b9ce607d8cf681c5fead627c150c7df41798895dbd63060f00011e719af->enter($__internal_86665b9ce607d8cf681c5fead627c150c7df41798895dbd63060f00011e719af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_96154bfa30cb7ac30d8ddeec25270df4c104a6ac58783ba23852f5daf868a3e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96154bfa30cb7ac30d8ddeec25270df4c104a6ac58783ba23852f5daf868a3e7->enter($__internal_96154bfa30cb7ac30d8ddeec25270df4c104a6ac58783ba23852f5daf868a3e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_96154bfa30cb7ac30d8ddeec25270df4c104a6ac58783ba23852f5daf868a3e7->leave($__internal_96154bfa30cb7ac30d8ddeec25270df4c104a6ac58783ba23852f5daf868a3e7_prof);

        
        $__internal_86665b9ce607d8cf681c5fead627c150c7df41798895dbd63060f00011e719af->leave($__internal_86665b9ce607d8cf681c5fead627c150c7df41798895dbd63060f00011e719af_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_08b717856de8b8c758f6cb0fb3175e6d26ad92a7bb0dbed206da99890c672ac4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08b717856de8b8c758f6cb0fb3175e6d26ad92a7bb0dbed206da99890c672ac4->enter($__internal_08b717856de8b8c758f6cb0fb3175e6d26ad92a7bb0dbed206da99890c672ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_cfd2ee7fd7b9532ccba1340984b2a65809c156b0b6264ed5b35608c50983728a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfd2ee7fd7b9532ccba1340984b2a65809c156b0b6264ed5b35608c50983728a->enter($__internal_cfd2ee7fd7b9532ccba1340984b2a65809c156b0b6264ed5b35608c50983728a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_cfd2ee7fd7b9532ccba1340984b2a65809c156b0b6264ed5b35608c50983728a->leave($__internal_cfd2ee7fd7b9532ccba1340984b2a65809c156b0b6264ed5b35608c50983728a_prof);

        
        $__internal_08b717856de8b8c758f6cb0fb3175e6d26ad92a7bb0dbed206da99890c672ac4->leave($__internal_08b717856de8b8c758f6cb0fb3175e6d26ad92a7bb0dbed206da99890c672ac4_prof);

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
