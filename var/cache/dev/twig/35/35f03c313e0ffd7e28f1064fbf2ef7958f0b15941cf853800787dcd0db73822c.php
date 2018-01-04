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
        $__internal_cb1dedf221e97582ad61970e817a4b804f19cd83e3b2fa843e91b71b37d6ef05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb1dedf221e97582ad61970e817a4b804f19cd83e3b2fa843e91b71b37d6ef05->enter($__internal_cb1dedf221e97582ad61970e817a4b804f19cd83e3b2fa843e91b71b37d6ef05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_942d2f7326da532cdfd7147f9c993fab554dd074da6c8d9d7fdc99c3e0dd3d04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_942d2f7326da532cdfd7147f9c993fab554dd074da6c8d9d7fdc99c3e0dd3d04->enter($__internal_942d2f7326da532cdfd7147f9c993fab554dd074da6c8d9d7fdc99c3e0dd3d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_cb1dedf221e97582ad61970e817a4b804f19cd83e3b2fa843e91b71b37d6ef05->leave($__internal_cb1dedf221e97582ad61970e817a4b804f19cd83e3b2fa843e91b71b37d6ef05_prof);

        
        $__internal_942d2f7326da532cdfd7147f9c993fab554dd074da6c8d9d7fdc99c3e0dd3d04->leave($__internal_942d2f7326da532cdfd7147f9c993fab554dd074da6c8d9d7fdc99c3e0dd3d04_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_07e83a8167b972002d584e9e1c373c08378f79e1d56fc3994417c2d61c2ab17f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07e83a8167b972002d584e9e1c373c08378f79e1d56fc3994417c2d61c2ab17f->enter($__internal_07e83a8167b972002d584e9e1c373c08378f79e1d56fc3994417c2d61c2ab17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_bb6cc7c3095162029ec9fba302071d7a3217686449942e1fd997327be8410843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb6cc7c3095162029ec9fba302071d7a3217686449942e1fd997327be8410843->enter($__internal_bb6cc7c3095162029ec9fba302071d7a3217686449942e1fd997327be8410843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_bb6cc7c3095162029ec9fba302071d7a3217686449942e1fd997327be8410843->leave($__internal_bb6cc7c3095162029ec9fba302071d7a3217686449942e1fd997327be8410843_prof);

        
        $__internal_07e83a8167b972002d584e9e1c373c08378f79e1d56fc3994417c2d61c2ab17f->leave($__internal_07e83a8167b972002d584e9e1c373c08378f79e1d56fc3994417c2d61c2ab17f_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_c1dc828dd8dc3a52a86d484ce6a74b5e2e41c0354cb2da6285d89a57432d3451 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1dc828dd8dc3a52a86d484ce6a74b5e2e41c0354cb2da6285d89a57432d3451->enter($__internal_c1dc828dd8dc3a52a86d484ce6a74b5e2e41c0354cb2da6285d89a57432d3451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_25dea970215e1d7ff00a43d9e879903b14dddb867ced73dc0ac9caefcf1ee2bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25dea970215e1d7ff00a43d9e879903b14dddb867ced73dc0ac9caefcf1ee2bd->enter($__internal_25dea970215e1d7ff00a43d9e879903b14dddb867ced73dc0ac9caefcf1ee2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_25dea970215e1d7ff00a43d9e879903b14dddb867ced73dc0ac9caefcf1ee2bd->leave($__internal_25dea970215e1d7ff00a43d9e879903b14dddb867ced73dc0ac9caefcf1ee2bd_prof);

        
        $__internal_c1dc828dd8dc3a52a86d484ce6a74b5e2e41c0354cb2da6285d89a57432d3451->leave($__internal_c1dc828dd8dc3a52a86d484ce6a74b5e2e41c0354cb2da6285d89a57432d3451_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_650c96166e8942c9ee6e92a1ac2856f091e7a8ff7b35ef106d1fcf90cec0d621 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_650c96166e8942c9ee6e92a1ac2856f091e7a8ff7b35ef106d1fcf90cec0d621->enter($__internal_650c96166e8942c9ee6e92a1ac2856f091e7a8ff7b35ef106d1fcf90cec0d621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_68bb416877d852fa7d6354452e362e863753d1bef84df0ad6629eb8837ceddbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68bb416877d852fa7d6354452e362e863753d1bef84df0ad6629eb8837ceddbf->enter($__internal_68bb416877d852fa7d6354452e362e863753d1bef84df0ad6629eb8837ceddbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_68bb416877d852fa7d6354452e362e863753d1bef84df0ad6629eb8837ceddbf->leave($__internal_68bb416877d852fa7d6354452e362e863753d1bef84df0ad6629eb8837ceddbf_prof);

        
        $__internal_650c96166e8942c9ee6e92a1ac2856f091e7a8ff7b35ef106d1fcf90cec0d621->leave($__internal_650c96166e8942c9ee6e92a1ac2856f091e7a8ff7b35ef106d1fcf90cec0d621_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_5b1efbc7e1fea582c610e30de5f958e5dc3930bfb8c39a292c8739ec204d16fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b1efbc7e1fea582c610e30de5f958e5dc3930bfb8c39a292c8739ec204d16fc->enter($__internal_5b1efbc7e1fea582c610e30de5f958e5dc3930bfb8c39a292c8739ec204d16fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_c567471d835ee506ff835b141c54e657db236c1580b4385fca54d28e1c3711c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c567471d835ee506ff835b141c54e657db236c1580b4385fca54d28e1c3711c0->enter($__internal_c567471d835ee506ff835b141c54e657db236c1580b4385fca54d28e1c3711c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_c567471d835ee506ff835b141c54e657db236c1580b4385fca54d28e1c3711c0->leave($__internal_c567471d835ee506ff835b141c54e657db236c1580b4385fca54d28e1c3711c0_prof);

        
        $__internal_5b1efbc7e1fea582c610e30de5f958e5dc3930bfb8c39a292c8739ec204d16fc->leave($__internal_5b1efbc7e1fea582c610e30de5f958e5dc3930bfb8c39a292c8739ec204d16fc_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_a148e0cbc14e8b416164da97809c8ce758e452b6b23166382c353d1567a33b0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a148e0cbc14e8b416164da97809c8ce758e452b6b23166382c353d1567a33b0a->enter($__internal_a148e0cbc14e8b416164da97809c8ce758e452b6b23166382c353d1567a33b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_2696f24214718c3b5f81cae178a2ed9049e1abcc01b3bf2d42cbde673bc60dcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2696f24214718c3b5f81cae178a2ed9049e1abcc01b3bf2d42cbde673bc60dcb->enter($__internal_2696f24214718c3b5f81cae178a2ed9049e1abcc01b3bf2d42cbde673bc60dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_2696f24214718c3b5f81cae178a2ed9049e1abcc01b3bf2d42cbde673bc60dcb->leave($__internal_2696f24214718c3b5f81cae178a2ed9049e1abcc01b3bf2d42cbde673bc60dcb_prof);

        
        $__internal_a148e0cbc14e8b416164da97809c8ce758e452b6b23166382c353d1567a33b0a->leave($__internal_a148e0cbc14e8b416164da97809c8ce758e452b6b23166382c353d1567a33b0a_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_651e16e0eff40fa9f59f3cbbf35dbdbb3aa8c51ba2799b84172cae223cd191a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_651e16e0eff40fa9f59f3cbbf35dbdbb3aa8c51ba2799b84172cae223cd191a8->enter($__internal_651e16e0eff40fa9f59f3cbbf35dbdbb3aa8c51ba2799b84172cae223cd191a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_959a90693f9cb4abb863120d31e11a396c292ab11bb9fbe5e69468f1c7d2b55d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_959a90693f9cb4abb863120d31e11a396c292ab11bb9fbe5e69468f1c7d2b55d->enter($__internal_959a90693f9cb4abb863120d31e11a396c292ab11bb9fbe5e69468f1c7d2b55d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_959a90693f9cb4abb863120d31e11a396c292ab11bb9fbe5e69468f1c7d2b55d->leave($__internal_959a90693f9cb4abb863120d31e11a396c292ab11bb9fbe5e69468f1c7d2b55d_prof);

        
        $__internal_651e16e0eff40fa9f59f3cbbf35dbdbb3aa8c51ba2799b84172cae223cd191a8->leave($__internal_651e16e0eff40fa9f59f3cbbf35dbdbb3aa8c51ba2799b84172cae223cd191a8_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_37e6c9e58361de83d3c5f7ba225179f0391ecee4237947d67a14405d65eebd3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37e6c9e58361de83d3c5f7ba225179f0391ecee4237947d67a14405d65eebd3e->enter($__internal_37e6c9e58361de83d3c5f7ba225179f0391ecee4237947d67a14405d65eebd3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_72c6ead557bbf4da5ed9454240b5ceec2eb86e077fc38d57ed278b5324ec4aa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72c6ead557bbf4da5ed9454240b5ceec2eb86e077fc38d57ed278b5324ec4aa9->enter($__internal_72c6ead557bbf4da5ed9454240b5ceec2eb86e077fc38d57ed278b5324ec4aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_72c6ead557bbf4da5ed9454240b5ceec2eb86e077fc38d57ed278b5324ec4aa9->leave($__internal_72c6ead557bbf4da5ed9454240b5ceec2eb86e077fc38d57ed278b5324ec4aa9_prof);

        
        $__internal_37e6c9e58361de83d3c5f7ba225179f0391ecee4237947d67a14405d65eebd3e->leave($__internal_37e6c9e58361de83d3c5f7ba225179f0391ecee4237947d67a14405d65eebd3e_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_4749b3544d7ba5f422eab2b3581419c444852f524295874b17e121d87a24123c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4749b3544d7ba5f422eab2b3581419c444852f524295874b17e121d87a24123c->enter($__internal_4749b3544d7ba5f422eab2b3581419c444852f524295874b17e121d87a24123c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_7179d15ffc73004e689486407fa7009acfc9da8a5572d9d66f2c0b4e4a52ab15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7179d15ffc73004e689486407fa7009acfc9da8a5572d9d66f2c0b4e4a52ab15->enter($__internal_7179d15ffc73004e689486407fa7009acfc9da8a5572d9d66f2c0b4e4a52ab15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_7179d15ffc73004e689486407fa7009acfc9da8a5572d9d66f2c0b4e4a52ab15->leave($__internal_7179d15ffc73004e689486407fa7009acfc9da8a5572d9d66f2c0b4e4a52ab15_prof);

        
        $__internal_4749b3544d7ba5f422eab2b3581419c444852f524295874b17e121d87a24123c->leave($__internal_4749b3544d7ba5f422eab2b3581419c444852f524295874b17e121d87a24123c_prof);

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
