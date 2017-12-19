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
        $__internal_f706f6f4fe63d14f74250495ff71e30edebb714c38f74709e99d5b05a84759cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f706f6f4fe63d14f74250495ff71e30edebb714c38f74709e99d5b05a84759cd->enter($__internal_f706f6f4fe63d14f74250495ff71e30edebb714c38f74709e99d5b05a84759cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_94d5d58736c1d3799c41995174c6293725377cf877d6b3ba082ded4a1320790c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94d5d58736c1d3799c41995174c6293725377cf877d6b3ba082ded4a1320790c->enter($__internal_94d5d58736c1d3799c41995174c6293725377cf877d6b3ba082ded4a1320790c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

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
        
        $__internal_f706f6f4fe63d14f74250495ff71e30edebb714c38f74709e99d5b05a84759cd->leave($__internal_f706f6f4fe63d14f74250495ff71e30edebb714c38f74709e99d5b05a84759cd_prof);

        
        $__internal_94d5d58736c1d3799c41995174c6293725377cf877d6b3ba082ded4a1320790c->leave($__internal_94d5d58736c1d3799c41995174c6293725377cf877d6b3ba082ded4a1320790c_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_257e4e9491b469a6ab1961c59d31dda54dd10be7b2abf8c42df67f7d0da3dd2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_257e4e9491b469a6ab1961c59d31dda54dd10be7b2abf8c42df67f7d0da3dd2c->enter($__internal_257e4e9491b469a6ab1961c59d31dda54dd10be7b2abf8c42df67f7d0da3dd2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_c8c918b0a23299a1e7d2a1e2116ce1708aeecfac2065df91254c81e9fb4f22a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8c918b0a23299a1e7d2a1e2116ce1708aeecfac2065df91254c81e9fb4f22a2->enter($__internal_c8c918b0a23299a1e7d2a1e2116ce1708aeecfac2065df91254c81e9fb4f22a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_c8c918b0a23299a1e7d2a1e2116ce1708aeecfac2065df91254c81e9fb4f22a2->leave($__internal_c8c918b0a23299a1e7d2a1e2116ce1708aeecfac2065df91254c81e9fb4f22a2_prof);

        
        $__internal_257e4e9491b469a6ab1961c59d31dda54dd10be7b2abf8c42df67f7d0da3dd2c->leave($__internal_257e4e9491b469a6ab1961c59d31dda54dd10be7b2abf8c42df67f7d0da3dd2c_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_c85e6adc453036bcbe446e5687725e4a7a02cfd8bccb646bc9cf3ad2d42d217f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c85e6adc453036bcbe446e5687725e4a7a02cfd8bccb646bc9cf3ad2d42d217f->enter($__internal_c85e6adc453036bcbe446e5687725e4a7a02cfd8bccb646bc9cf3ad2d42d217f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_6ea958d3b8438a80ef08958f86593462b09ba995764212cb0abf53d97fea3324 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ea958d3b8438a80ef08958f86593462b09ba995764212cb0abf53d97fea3324->enter($__internal_6ea958d3b8438a80ef08958f86593462b09ba995764212cb0abf53d97fea3324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_6ea958d3b8438a80ef08958f86593462b09ba995764212cb0abf53d97fea3324->leave($__internal_6ea958d3b8438a80ef08958f86593462b09ba995764212cb0abf53d97fea3324_prof);

        
        $__internal_c85e6adc453036bcbe446e5687725e4a7a02cfd8bccb646bc9cf3ad2d42d217f->leave($__internal_c85e6adc453036bcbe446e5687725e4a7a02cfd8bccb646bc9cf3ad2d42d217f_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_e93ff614de40a177c38ce8c48af7ab4109cf0a4b8670c1e224a3054e40dc2b26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e93ff614de40a177c38ce8c48af7ab4109cf0a4b8670c1e224a3054e40dc2b26->enter($__internal_e93ff614de40a177c38ce8c48af7ab4109cf0a4b8670c1e224a3054e40dc2b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_a6e00d2c4dc9619cc768f9d8916802f3ec503f2748d8dfe81343567a53dad09b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6e00d2c4dc9619cc768f9d8916802f3ec503f2748d8dfe81343567a53dad09b->enter($__internal_a6e00d2c4dc9619cc768f9d8916802f3ec503f2748d8dfe81343567a53dad09b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_a6e00d2c4dc9619cc768f9d8916802f3ec503f2748d8dfe81343567a53dad09b->leave($__internal_a6e00d2c4dc9619cc768f9d8916802f3ec503f2748d8dfe81343567a53dad09b_prof);

        
        $__internal_e93ff614de40a177c38ce8c48af7ab4109cf0a4b8670c1e224a3054e40dc2b26->leave($__internal_e93ff614de40a177c38ce8c48af7ab4109cf0a4b8670c1e224a3054e40dc2b26_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_31a473e3eb12b81e285652ed50ec14d8270420958534d986f2b686696d354a1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31a473e3eb12b81e285652ed50ec14d8270420958534d986f2b686696d354a1e->enter($__internal_31a473e3eb12b81e285652ed50ec14d8270420958534d986f2b686696d354a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_c7efc03b91fcb045f5c9aa91331d80b71e93b51ebf090ef36dc662c77b4311f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7efc03b91fcb045f5c9aa91331d80b71e93b51ebf090ef36dc662c77b4311f2->enter($__internal_c7efc03b91fcb045f5c9aa91331d80b71e93b51ebf090ef36dc662c77b4311f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

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
        
        $__internal_c7efc03b91fcb045f5c9aa91331d80b71e93b51ebf090ef36dc662c77b4311f2->leave($__internal_c7efc03b91fcb045f5c9aa91331d80b71e93b51ebf090ef36dc662c77b4311f2_prof);

        
        $__internal_31a473e3eb12b81e285652ed50ec14d8270420958534d986f2b686696d354a1e->leave($__internal_31a473e3eb12b81e285652ed50ec14d8270420958534d986f2b686696d354a1e_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_d03614099732a82dcace65e310d13046b8a50009c7cd931b948cd56abc5154f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d03614099732a82dcace65e310d13046b8a50009c7cd931b948cd56abc5154f1->enter($__internal_d03614099732a82dcace65e310d13046b8a50009c7cd931b948cd56abc5154f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_06c9e467c2c2fe7ba6a0d8c3adf50990d1753a3f8f86ef05d67af8356d0210ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06c9e467c2c2fe7ba6a0d8c3adf50990d1753a3f8f86ef05d67af8356d0210ad->enter($__internal_06c9e467c2c2fe7ba6a0d8c3adf50990d1753a3f8f86ef05d67af8356d0210ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_06c9e467c2c2fe7ba6a0d8c3adf50990d1753a3f8f86ef05d67af8356d0210ad->leave($__internal_06c9e467c2c2fe7ba6a0d8c3adf50990d1753a3f8f86ef05d67af8356d0210ad_prof);

        
        $__internal_d03614099732a82dcace65e310d13046b8a50009c7cd931b948cd56abc5154f1->leave($__internal_d03614099732a82dcace65e310d13046b8a50009c7cd931b948cd56abc5154f1_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_555dd6cd28f23922e3f63090c136abb9a47e2f896c982281e910ff9584bb4190 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_555dd6cd28f23922e3f63090c136abb9a47e2f896c982281e910ff9584bb4190->enter($__internal_555dd6cd28f23922e3f63090c136abb9a47e2f896c982281e910ff9584bb4190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_7f9054dcba519d5c49d602de8531449bc59f50de5b7a02c1d95a67d22631d564 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f9054dcba519d5c49d602de8531449bc59f50de5b7a02c1d95a67d22631d564->enter($__internal_7f9054dcba519d5c49d602de8531449bc59f50de5b7a02c1d95a67d22631d564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_7f9054dcba519d5c49d602de8531449bc59f50de5b7a02c1d95a67d22631d564->leave($__internal_7f9054dcba519d5c49d602de8531449bc59f50de5b7a02c1d95a67d22631d564_prof);

        
        $__internal_555dd6cd28f23922e3f63090c136abb9a47e2f896c982281e910ff9584bb4190->leave($__internal_555dd6cd28f23922e3f63090c136abb9a47e2f896c982281e910ff9584bb4190_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_2cffb3ec84a616171eb5df92eaa716a3f81998179262d072c78b4147305e69a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cffb3ec84a616171eb5df92eaa716a3f81998179262d072c78b4147305e69a9->enter($__internal_2cffb3ec84a616171eb5df92eaa716a3f81998179262d072c78b4147305e69a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_87a1142008a6041b31accb407f8488eb3da200eef3ffca7a7ad88ed8b4a6fa9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87a1142008a6041b31accb407f8488eb3da200eef3ffca7a7ad88ed8b4a6fa9b->enter($__internal_87a1142008a6041b31accb407f8488eb3da200eef3ffca7a7ad88ed8b4a6fa9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_87a1142008a6041b31accb407f8488eb3da200eef3ffca7a7ad88ed8b4a6fa9b->leave($__internal_87a1142008a6041b31accb407f8488eb3da200eef3ffca7a7ad88ed8b4a6fa9b_prof);

        
        $__internal_2cffb3ec84a616171eb5df92eaa716a3f81998179262d072c78b4147305e69a9->leave($__internal_2cffb3ec84a616171eb5df92eaa716a3f81998179262d072c78b4147305e69a9_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_3811d5f844c1a0d2b0e1ed3f20fa3453e7465456d2ef48ff1b6e15969dc18362 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3811d5f844c1a0d2b0e1ed3f20fa3453e7465456d2ef48ff1b6e15969dc18362->enter($__internal_3811d5f844c1a0d2b0e1ed3f20fa3453e7465456d2ef48ff1b6e15969dc18362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_9e11d24c4ee417908c54ef5f8a142a072b7bef5974d1f7c49ca29ee72d6243dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e11d24c4ee417908c54ef5f8a142a072b7bef5974d1f7c49ca29ee72d6243dc->enter($__internal_9e11d24c4ee417908c54ef5f8a142a072b7bef5974d1f7c49ca29ee72d6243dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_9e11d24c4ee417908c54ef5f8a142a072b7bef5974d1f7c49ca29ee72d6243dc->leave($__internal_9e11d24c4ee417908c54ef5f8a142a072b7bef5974d1f7c49ca29ee72d6243dc_prof);

        
        $__internal_3811d5f844c1a0d2b0e1ed3f20fa3453e7465456d2ef48ff1b6e15969dc18362->leave($__internal_3811d5f844c1a0d2b0e1ed3f20fa3453e7465456d2ef48ff1b6e15969dc18362_prof);

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
", "bootstrap_4_horizontal_layout.html.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\bootstrap_4_horizontal_layout.html.twig");
    }
}
