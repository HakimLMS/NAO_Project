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
        $__internal_d0370e8389dfc3c319a50f66c572d751597eb1c7f9e7609cda13ebda4a30ef5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0370e8389dfc3c319a50f66c572d751597eb1c7f9e7609cda13ebda4a30ef5f->enter($__internal_d0370e8389dfc3c319a50f66c572d751597eb1c7f9e7609cda13ebda4a30ef5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_715075dfb195466f2375dddf24b428bb6b9ac9be00d2f9eb5f9eb3c3d11adf73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_715075dfb195466f2375dddf24b428bb6b9ac9be00d2f9eb5f9eb3c3d11adf73->enter($__internal_715075dfb195466f2375dddf24b428bb6b9ac9be00d2f9eb5f9eb3c3d11adf73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

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
        
        $__internal_d0370e8389dfc3c319a50f66c572d751597eb1c7f9e7609cda13ebda4a30ef5f->leave($__internal_d0370e8389dfc3c319a50f66c572d751597eb1c7f9e7609cda13ebda4a30ef5f_prof);

        
        $__internal_715075dfb195466f2375dddf24b428bb6b9ac9be00d2f9eb5f9eb3c3d11adf73->leave($__internal_715075dfb195466f2375dddf24b428bb6b9ac9be00d2f9eb5f9eb3c3d11adf73_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_d07bb491946ff192d3428476b06237188076990e3d8085b3426634b604a41330 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d07bb491946ff192d3428476b06237188076990e3d8085b3426634b604a41330->enter($__internal_d07bb491946ff192d3428476b06237188076990e3d8085b3426634b604a41330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_ce382cca0e5114ee41445dab52ab4c0c9c9bcf3c6f0969c77a8925689e19be40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce382cca0e5114ee41445dab52ab4c0c9c9bcf3c6f0969c77a8925689e19be40->enter($__internal_ce382cca0e5114ee41445dab52ab4c0c9c9bcf3c6f0969c77a8925689e19be40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_ce382cca0e5114ee41445dab52ab4c0c9c9bcf3c6f0969c77a8925689e19be40->leave($__internal_ce382cca0e5114ee41445dab52ab4c0c9c9bcf3c6f0969c77a8925689e19be40_prof);

        
        $__internal_d07bb491946ff192d3428476b06237188076990e3d8085b3426634b604a41330->leave($__internal_d07bb491946ff192d3428476b06237188076990e3d8085b3426634b604a41330_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_068c66d8373a9879337eab9b82563a1dc3180d18cc39c11f042453d188ff200f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_068c66d8373a9879337eab9b82563a1dc3180d18cc39c11f042453d188ff200f->enter($__internal_068c66d8373a9879337eab9b82563a1dc3180d18cc39c11f042453d188ff200f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_cb89203033088f00042aefbd29b70a351aabb8c834d6211348195873ff683a70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb89203033088f00042aefbd29b70a351aabb8c834d6211348195873ff683a70->enter($__internal_cb89203033088f00042aefbd29b70a351aabb8c834d6211348195873ff683a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_cb89203033088f00042aefbd29b70a351aabb8c834d6211348195873ff683a70->leave($__internal_cb89203033088f00042aefbd29b70a351aabb8c834d6211348195873ff683a70_prof);

        
        $__internal_068c66d8373a9879337eab9b82563a1dc3180d18cc39c11f042453d188ff200f->leave($__internal_068c66d8373a9879337eab9b82563a1dc3180d18cc39c11f042453d188ff200f_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_efed10ee4fd0479e751dbc3b0e42fe11026182f2d1bb85802b9998cfae03ed6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efed10ee4fd0479e751dbc3b0e42fe11026182f2d1bb85802b9998cfae03ed6b->enter($__internal_efed10ee4fd0479e751dbc3b0e42fe11026182f2d1bb85802b9998cfae03ed6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_f1d7e74edf1a38ceb591f213788d31a76f34f6bf3c7304834ed933fd5b175a21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1d7e74edf1a38ceb591f213788d31a76f34f6bf3c7304834ed933fd5b175a21->enter($__internal_f1d7e74edf1a38ceb591f213788d31a76f34f6bf3c7304834ed933fd5b175a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_f1d7e74edf1a38ceb591f213788d31a76f34f6bf3c7304834ed933fd5b175a21->leave($__internal_f1d7e74edf1a38ceb591f213788d31a76f34f6bf3c7304834ed933fd5b175a21_prof);

        
        $__internal_efed10ee4fd0479e751dbc3b0e42fe11026182f2d1bb85802b9998cfae03ed6b->leave($__internal_efed10ee4fd0479e751dbc3b0e42fe11026182f2d1bb85802b9998cfae03ed6b_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_1c8271ba0280163f3044126e0ef370a4307d4b186d2bd4a072476abf98659875 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c8271ba0280163f3044126e0ef370a4307d4b186d2bd4a072476abf98659875->enter($__internal_1c8271ba0280163f3044126e0ef370a4307d4b186d2bd4a072476abf98659875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_b9efe839f042befdb1e8c9c7517f58ec70eeb2bc7257a397798ad93cb03d4042 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9efe839f042befdb1e8c9c7517f58ec70eeb2bc7257a397798ad93cb03d4042->enter($__internal_b9efe839f042befdb1e8c9c7517f58ec70eeb2bc7257a397798ad93cb03d4042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

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
        
        $__internal_b9efe839f042befdb1e8c9c7517f58ec70eeb2bc7257a397798ad93cb03d4042->leave($__internal_b9efe839f042befdb1e8c9c7517f58ec70eeb2bc7257a397798ad93cb03d4042_prof);

        
        $__internal_1c8271ba0280163f3044126e0ef370a4307d4b186d2bd4a072476abf98659875->leave($__internal_1c8271ba0280163f3044126e0ef370a4307d4b186d2bd4a072476abf98659875_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_444fba8f06ecdaf63da2f3ca79e9404dc925e95f757da9ff0e94c5ee26b825a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_444fba8f06ecdaf63da2f3ca79e9404dc925e95f757da9ff0e94c5ee26b825a2->enter($__internal_444fba8f06ecdaf63da2f3ca79e9404dc925e95f757da9ff0e94c5ee26b825a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_83c6771e52687b1a057ce110adf3068cfdbe026ff373f47b5287ffd2bd617ff6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83c6771e52687b1a057ce110adf3068cfdbe026ff373f47b5287ffd2bd617ff6->enter($__internal_83c6771e52687b1a057ce110adf3068cfdbe026ff373f47b5287ffd2bd617ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_83c6771e52687b1a057ce110adf3068cfdbe026ff373f47b5287ffd2bd617ff6->leave($__internal_83c6771e52687b1a057ce110adf3068cfdbe026ff373f47b5287ffd2bd617ff6_prof);

        
        $__internal_444fba8f06ecdaf63da2f3ca79e9404dc925e95f757da9ff0e94c5ee26b825a2->leave($__internal_444fba8f06ecdaf63da2f3ca79e9404dc925e95f757da9ff0e94c5ee26b825a2_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_066ee4a78e6fc952cfa38edcf8548fce0e6fceca2d463bccf378c5331d49d183 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_066ee4a78e6fc952cfa38edcf8548fce0e6fceca2d463bccf378c5331d49d183->enter($__internal_066ee4a78e6fc952cfa38edcf8548fce0e6fceca2d463bccf378c5331d49d183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_7a9a2d2de98fe0048eaec6f75dfd857bc70feabf3e813ffc2d872b1ec5274c2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a9a2d2de98fe0048eaec6f75dfd857bc70feabf3e813ffc2d872b1ec5274c2b->enter($__internal_7a9a2d2de98fe0048eaec6f75dfd857bc70feabf3e813ffc2d872b1ec5274c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_7a9a2d2de98fe0048eaec6f75dfd857bc70feabf3e813ffc2d872b1ec5274c2b->leave($__internal_7a9a2d2de98fe0048eaec6f75dfd857bc70feabf3e813ffc2d872b1ec5274c2b_prof);

        
        $__internal_066ee4a78e6fc952cfa38edcf8548fce0e6fceca2d463bccf378c5331d49d183->leave($__internal_066ee4a78e6fc952cfa38edcf8548fce0e6fceca2d463bccf378c5331d49d183_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_2f9bf5f24c77bfb536ffbdc1586c1fc7c5916a58bbb017757299a7cc6c008c30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f9bf5f24c77bfb536ffbdc1586c1fc7c5916a58bbb017757299a7cc6c008c30->enter($__internal_2f9bf5f24c77bfb536ffbdc1586c1fc7c5916a58bbb017757299a7cc6c008c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_276075f3ff8c67ca22b5e6adb1871c3af4b4bc5f7d2c6ac1777cfca1039f2cc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_276075f3ff8c67ca22b5e6adb1871c3af4b4bc5f7d2c6ac1777cfca1039f2cc0->enter($__internal_276075f3ff8c67ca22b5e6adb1871c3af4b4bc5f7d2c6ac1777cfca1039f2cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_276075f3ff8c67ca22b5e6adb1871c3af4b4bc5f7d2c6ac1777cfca1039f2cc0->leave($__internal_276075f3ff8c67ca22b5e6adb1871c3af4b4bc5f7d2c6ac1777cfca1039f2cc0_prof);

        
        $__internal_2f9bf5f24c77bfb536ffbdc1586c1fc7c5916a58bbb017757299a7cc6c008c30->leave($__internal_2f9bf5f24c77bfb536ffbdc1586c1fc7c5916a58bbb017757299a7cc6c008c30_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_0ebac1f46e2fe316483163cf7465338c3aeaed28fad2fb28110aacf0b819e780 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ebac1f46e2fe316483163cf7465338c3aeaed28fad2fb28110aacf0b819e780->enter($__internal_0ebac1f46e2fe316483163cf7465338c3aeaed28fad2fb28110aacf0b819e780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_9f2ecc582d016f8d36ef2b50ebf1b8940b64762752259bfdcbef0db78edfe984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f2ecc582d016f8d36ef2b50ebf1b8940b64762752259bfdcbef0db78edfe984->enter($__internal_9f2ecc582d016f8d36ef2b50ebf1b8940b64762752259bfdcbef0db78edfe984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_9f2ecc582d016f8d36ef2b50ebf1b8940b64762752259bfdcbef0db78edfe984->leave($__internal_9f2ecc582d016f8d36ef2b50ebf1b8940b64762752259bfdcbef0db78edfe984_prof);

        
        $__internal_0ebac1f46e2fe316483163cf7465338c3aeaed28fad2fb28110aacf0b819e780->leave($__internal_0ebac1f46e2fe316483163cf7465338c3aeaed28fad2fb28110aacf0b819e780_prof);

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
