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
        $__internal_6420020f705e9d004710cd39d4584d884eb3f4a02acbe9f8887cdec7f78cd69a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6420020f705e9d004710cd39d4584d884eb3f4a02acbe9f8887cdec7f78cd69a->enter($__internal_6420020f705e9d004710cd39d4584d884eb3f4a02acbe9f8887cdec7f78cd69a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_11d69b1e19807851155ca54ad20668fd2578d8fc9c476acecad523a6a69738e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11d69b1e19807851155ca54ad20668fd2578d8fc9c476acecad523a6a69738e9->enter($__internal_11d69b1e19807851155ca54ad20668fd2578d8fc9c476acecad523a6a69738e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_6420020f705e9d004710cd39d4584d884eb3f4a02acbe9f8887cdec7f78cd69a->leave($__internal_6420020f705e9d004710cd39d4584d884eb3f4a02acbe9f8887cdec7f78cd69a_prof);

        
        $__internal_11d69b1e19807851155ca54ad20668fd2578d8fc9c476acecad523a6a69738e9->leave($__internal_11d69b1e19807851155ca54ad20668fd2578d8fc9c476acecad523a6a69738e9_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_57a97c6d013e98e3d4c9bdfe2fd8fe1aee0b29735029c6ac7e5dbae0d3e91a1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57a97c6d013e98e3d4c9bdfe2fd8fe1aee0b29735029c6ac7e5dbae0d3e91a1a->enter($__internal_57a97c6d013e98e3d4c9bdfe2fd8fe1aee0b29735029c6ac7e5dbae0d3e91a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_aaa5269bf91b174f037bfdccb1305e73ea061529bad423f99fb87012b68b7963 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaa5269bf91b174f037bfdccb1305e73ea061529bad423f99fb87012b68b7963->enter($__internal_aaa5269bf91b174f037bfdccb1305e73ea061529bad423f99fb87012b68b7963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_aaa5269bf91b174f037bfdccb1305e73ea061529bad423f99fb87012b68b7963->leave($__internal_aaa5269bf91b174f037bfdccb1305e73ea061529bad423f99fb87012b68b7963_prof);

        
        $__internal_57a97c6d013e98e3d4c9bdfe2fd8fe1aee0b29735029c6ac7e5dbae0d3e91a1a->leave($__internal_57a97c6d013e98e3d4c9bdfe2fd8fe1aee0b29735029c6ac7e5dbae0d3e91a1a_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_281ff433258f1cb39a4be1f733255fb7339a81aed9d248a659449a5b558f0106 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_281ff433258f1cb39a4be1f733255fb7339a81aed9d248a659449a5b558f0106->enter($__internal_281ff433258f1cb39a4be1f733255fb7339a81aed9d248a659449a5b558f0106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_5bd26fd5959a0666a22f2fa3e24d8b5c6b33d6bb5c638c6cc8644a488765eadd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bd26fd5959a0666a22f2fa3e24d8b5c6b33d6bb5c638c6cc8644a488765eadd->enter($__internal_5bd26fd5959a0666a22f2fa3e24d8b5c6b33d6bb5c638c6cc8644a488765eadd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_5bd26fd5959a0666a22f2fa3e24d8b5c6b33d6bb5c638c6cc8644a488765eadd->leave($__internal_5bd26fd5959a0666a22f2fa3e24d8b5c6b33d6bb5c638c6cc8644a488765eadd_prof);

        
        $__internal_281ff433258f1cb39a4be1f733255fb7339a81aed9d248a659449a5b558f0106->leave($__internal_281ff433258f1cb39a4be1f733255fb7339a81aed9d248a659449a5b558f0106_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_53aaa4255bcb4e00756ad92053bd1cd100c0a364c842979f26a951dd78beb9e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53aaa4255bcb4e00756ad92053bd1cd100c0a364c842979f26a951dd78beb9e7->enter($__internal_53aaa4255bcb4e00756ad92053bd1cd100c0a364c842979f26a951dd78beb9e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_1546803e1f980ceaaabc054d9a2c770ed8aa8366fb40de357d50c4eacd53e7cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1546803e1f980ceaaabc054d9a2c770ed8aa8366fb40de357d50c4eacd53e7cf->enter($__internal_1546803e1f980ceaaabc054d9a2c770ed8aa8366fb40de357d50c4eacd53e7cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_1546803e1f980ceaaabc054d9a2c770ed8aa8366fb40de357d50c4eacd53e7cf->leave($__internal_1546803e1f980ceaaabc054d9a2c770ed8aa8366fb40de357d50c4eacd53e7cf_prof);

        
        $__internal_53aaa4255bcb4e00756ad92053bd1cd100c0a364c842979f26a951dd78beb9e7->leave($__internal_53aaa4255bcb4e00756ad92053bd1cd100c0a364c842979f26a951dd78beb9e7_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_1bc9e481ad629cf5aa4e152fb66778d9f20a4b4ba3dc7c2067496007035810d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bc9e481ad629cf5aa4e152fb66778d9f20a4b4ba3dc7c2067496007035810d0->enter($__internal_1bc9e481ad629cf5aa4e152fb66778d9f20a4b4ba3dc7c2067496007035810d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_0de74af50d1c9ebc34d936830d22c4a6c68644821ec11d27b53142840c70eaa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0de74af50d1c9ebc34d936830d22c4a6c68644821ec11d27b53142840c70eaa9->enter($__internal_0de74af50d1c9ebc34d936830d22c4a6c68644821ec11d27b53142840c70eaa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_0de74af50d1c9ebc34d936830d22c4a6c68644821ec11d27b53142840c70eaa9->leave($__internal_0de74af50d1c9ebc34d936830d22c4a6c68644821ec11d27b53142840c70eaa9_prof);

        
        $__internal_1bc9e481ad629cf5aa4e152fb66778d9f20a4b4ba3dc7c2067496007035810d0->leave($__internal_1bc9e481ad629cf5aa4e152fb66778d9f20a4b4ba3dc7c2067496007035810d0_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_93e15b3204b1ce68238fbf30343b321cdc0c48faaee6abf24f30ee2d66e75056 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93e15b3204b1ce68238fbf30343b321cdc0c48faaee6abf24f30ee2d66e75056->enter($__internal_93e15b3204b1ce68238fbf30343b321cdc0c48faaee6abf24f30ee2d66e75056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_6c8eaa1d0a25c0b948b44de9d3b9025da5c33a204f51ea1ed3c2d8b4ff6f099e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c8eaa1d0a25c0b948b44de9d3b9025da5c33a204f51ea1ed3c2d8b4ff6f099e->enter($__internal_6c8eaa1d0a25c0b948b44de9d3b9025da5c33a204f51ea1ed3c2d8b4ff6f099e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_6c8eaa1d0a25c0b948b44de9d3b9025da5c33a204f51ea1ed3c2d8b4ff6f099e->leave($__internal_6c8eaa1d0a25c0b948b44de9d3b9025da5c33a204f51ea1ed3c2d8b4ff6f099e_prof);

        
        $__internal_93e15b3204b1ce68238fbf30343b321cdc0c48faaee6abf24f30ee2d66e75056->leave($__internal_93e15b3204b1ce68238fbf30343b321cdc0c48faaee6abf24f30ee2d66e75056_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_caadb702bdb2d6a84696251b643972ed541aa65168390d7528fb778d0c27d819 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caadb702bdb2d6a84696251b643972ed541aa65168390d7528fb778d0c27d819->enter($__internal_caadb702bdb2d6a84696251b643972ed541aa65168390d7528fb778d0c27d819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_eb7777c7a06c2f58fea12144cd54ca3b91e83fec9b0b974bfc0d0fa24ac51229 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb7777c7a06c2f58fea12144cd54ca3b91e83fec9b0b974bfc0d0fa24ac51229->enter($__internal_eb7777c7a06c2f58fea12144cd54ca3b91e83fec9b0b974bfc0d0fa24ac51229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_eb7777c7a06c2f58fea12144cd54ca3b91e83fec9b0b974bfc0d0fa24ac51229->leave($__internal_eb7777c7a06c2f58fea12144cd54ca3b91e83fec9b0b974bfc0d0fa24ac51229_prof);

        
        $__internal_caadb702bdb2d6a84696251b643972ed541aa65168390d7528fb778d0c27d819->leave($__internal_caadb702bdb2d6a84696251b643972ed541aa65168390d7528fb778d0c27d819_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_588feea841f237a517eaccf739d2b35b27a6dd24011f91f3907c3f75c5236504 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_588feea841f237a517eaccf739d2b35b27a6dd24011f91f3907c3f75c5236504->enter($__internal_588feea841f237a517eaccf739d2b35b27a6dd24011f91f3907c3f75c5236504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_65402ec094c862d6a8a7dc0cc60bb36d4cc3c42a467c081ae6d822e31d68bba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65402ec094c862d6a8a7dc0cc60bb36d4cc3c42a467c081ae6d822e31d68bba1->enter($__internal_65402ec094c862d6a8a7dc0cc60bb36d4cc3c42a467c081ae6d822e31d68bba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_65402ec094c862d6a8a7dc0cc60bb36d4cc3c42a467c081ae6d822e31d68bba1->leave($__internal_65402ec094c862d6a8a7dc0cc60bb36d4cc3c42a467c081ae6d822e31d68bba1_prof);

        
        $__internal_588feea841f237a517eaccf739d2b35b27a6dd24011f91f3907c3f75c5236504->leave($__internal_588feea841f237a517eaccf739d2b35b27a6dd24011f91f3907c3f75c5236504_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_7e11272b1fba287333279a3377fe0acf40a5d08ea3b4f2646cc6b60c133179b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e11272b1fba287333279a3377fe0acf40a5d08ea3b4f2646cc6b60c133179b9->enter($__internal_7e11272b1fba287333279a3377fe0acf40a5d08ea3b4f2646cc6b60c133179b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_2adc037a7a98f63f66e7a8f91fd3461bb9d782fe450449cd262e05045e3f65a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2adc037a7a98f63f66e7a8f91fd3461bb9d782fe450449cd262e05045e3f65a0->enter($__internal_2adc037a7a98f63f66e7a8f91fd3461bb9d782fe450449cd262e05045e3f65a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_2adc037a7a98f63f66e7a8f91fd3461bb9d782fe450449cd262e05045e3f65a0->leave($__internal_2adc037a7a98f63f66e7a8f91fd3461bb9d782fe450449cd262e05045e3f65a0_prof);

        
        $__internal_7e11272b1fba287333279a3377fe0acf40a5d08ea3b4f2646cc6b60c133179b9->leave($__internal_7e11272b1fba287333279a3377fe0acf40a5d08ea3b4f2646cc6b60c133179b9_prof);

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
