<?php

/* bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_5db87d4d5d8514bbe3dad148daa4f348b2532089d7e9f602725fdc7822d6eee6 extends Twig_Template
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
        $__internal_03a27680f7ec786ff4e79165a68a7873d0a6110272afeef8193bfb03186dbebf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03a27680f7ec786ff4e79165a68a7873d0a6110272afeef8193bfb03186dbebf->enter($__internal_03a27680f7ec786ff4e79165a68a7873d0a6110272afeef8193bfb03186dbebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_f3b72442e1f2434ccf81bb0a958b86765c7000b50326bcd33d0642aa8d1a92c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3b72442e1f2434ccf81bb0a958b86765c7000b50326bcd33d0642aa8d1a92c3->enter($__internal_f3b72442e1f2434ccf81bb0a958b86765c7000b50326bcd33d0642aa8d1a92c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

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
        
        $__internal_03a27680f7ec786ff4e79165a68a7873d0a6110272afeef8193bfb03186dbebf->leave($__internal_03a27680f7ec786ff4e79165a68a7873d0a6110272afeef8193bfb03186dbebf_prof);

        
        $__internal_f3b72442e1f2434ccf81bb0a958b86765c7000b50326bcd33d0642aa8d1a92c3->leave($__internal_f3b72442e1f2434ccf81bb0a958b86765c7000b50326bcd33d0642aa8d1a92c3_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_7b427f9264b80a8afee09d50452c5db7c36b8ccedfff20beb528cad97cea3987 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b427f9264b80a8afee09d50452c5db7c36b8ccedfff20beb528cad97cea3987->enter($__internal_7b427f9264b80a8afee09d50452c5db7c36b8ccedfff20beb528cad97cea3987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_9311a7c2ab304924cc061f0c02fecf5b78d2735c8c7e37ddfcac3a9d086133b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9311a7c2ab304924cc061f0c02fecf5b78d2735c8c7e37ddfcac3a9d086133b4->enter($__internal_9311a7c2ab304924cc061f0c02fecf5b78d2735c8c7e37ddfcac3a9d086133b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_9311a7c2ab304924cc061f0c02fecf5b78d2735c8c7e37ddfcac3a9d086133b4->leave($__internal_9311a7c2ab304924cc061f0c02fecf5b78d2735c8c7e37ddfcac3a9d086133b4_prof);

        
        $__internal_7b427f9264b80a8afee09d50452c5db7c36b8ccedfff20beb528cad97cea3987->leave($__internal_7b427f9264b80a8afee09d50452c5db7c36b8ccedfff20beb528cad97cea3987_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_0bf7c9211a116e6b4f2224171553da2e4b9ce4341b7fe2a1a00f33678e360acb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bf7c9211a116e6b4f2224171553da2e4b9ce4341b7fe2a1a00f33678e360acb->enter($__internal_0bf7c9211a116e6b4f2224171553da2e4b9ce4341b7fe2a1a00f33678e360acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_7d42aabd2925662ac90cf89fd511263342860387ca7fd05358138dd39dfbe848 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d42aabd2925662ac90cf89fd511263342860387ca7fd05358138dd39dfbe848->enter($__internal_7d42aabd2925662ac90cf89fd511263342860387ca7fd05358138dd39dfbe848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_7d42aabd2925662ac90cf89fd511263342860387ca7fd05358138dd39dfbe848->leave($__internal_7d42aabd2925662ac90cf89fd511263342860387ca7fd05358138dd39dfbe848_prof);

        
        $__internal_0bf7c9211a116e6b4f2224171553da2e4b9ce4341b7fe2a1a00f33678e360acb->leave($__internal_0bf7c9211a116e6b4f2224171553da2e4b9ce4341b7fe2a1a00f33678e360acb_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_899df2d2f19f99bd17145c84537a04c882dff94383cdde5f32e6b2a15aa83db6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_899df2d2f19f99bd17145c84537a04c882dff94383cdde5f32e6b2a15aa83db6->enter($__internal_899df2d2f19f99bd17145c84537a04c882dff94383cdde5f32e6b2a15aa83db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_e22a8b9320d7679039bc447af544af53048b7f08a72e238935d1a90350ff97f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e22a8b9320d7679039bc447af544af53048b7f08a72e238935d1a90350ff97f9->enter($__internal_e22a8b9320d7679039bc447af544af53048b7f08a72e238935d1a90350ff97f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_e22a8b9320d7679039bc447af544af53048b7f08a72e238935d1a90350ff97f9->leave($__internal_e22a8b9320d7679039bc447af544af53048b7f08a72e238935d1a90350ff97f9_prof);

        
        $__internal_899df2d2f19f99bd17145c84537a04c882dff94383cdde5f32e6b2a15aa83db6->leave($__internal_899df2d2f19f99bd17145c84537a04c882dff94383cdde5f32e6b2a15aa83db6_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_7fbf8b8d86517cf3992596b511e14026e1882c80167f83ec3a3bc70bc62d8b0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fbf8b8d86517cf3992596b511e14026e1882c80167f83ec3a3bc70bc62d8b0e->enter($__internal_7fbf8b8d86517cf3992596b511e14026e1882c80167f83ec3a3bc70bc62d8b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_d4fcde9410b3a5dd44495bd0c51367339ee97562c6ae27dc7b59cb0c724dda36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4fcde9410b3a5dd44495bd0c51367339ee97562c6ae27dc7b59cb0c724dda36->enter($__internal_d4fcde9410b3a5dd44495bd0c51367339ee97562c6ae27dc7b59cb0c724dda36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

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
        
        $__internal_d4fcde9410b3a5dd44495bd0c51367339ee97562c6ae27dc7b59cb0c724dda36->leave($__internal_d4fcde9410b3a5dd44495bd0c51367339ee97562c6ae27dc7b59cb0c724dda36_prof);

        
        $__internal_7fbf8b8d86517cf3992596b511e14026e1882c80167f83ec3a3bc70bc62d8b0e->leave($__internal_7fbf8b8d86517cf3992596b511e14026e1882c80167f83ec3a3bc70bc62d8b0e_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_bfc2ca0287c88d0a90aa088ea6d0b03552209675e3e8a0c5b6dcc50bffd1fc65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfc2ca0287c88d0a90aa088ea6d0b03552209675e3e8a0c5b6dcc50bffd1fc65->enter($__internal_bfc2ca0287c88d0a90aa088ea6d0b03552209675e3e8a0c5b6dcc50bffd1fc65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_f81554c657549efc0aed0b91d7a6c212064307e341064072cdc9303adafc42c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f81554c657549efc0aed0b91d7a6c212064307e341064072cdc9303adafc42c8->enter($__internal_f81554c657549efc0aed0b91d7a6c212064307e341064072cdc9303adafc42c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_f81554c657549efc0aed0b91d7a6c212064307e341064072cdc9303adafc42c8->leave($__internal_f81554c657549efc0aed0b91d7a6c212064307e341064072cdc9303adafc42c8_prof);

        
        $__internal_bfc2ca0287c88d0a90aa088ea6d0b03552209675e3e8a0c5b6dcc50bffd1fc65->leave($__internal_bfc2ca0287c88d0a90aa088ea6d0b03552209675e3e8a0c5b6dcc50bffd1fc65_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_65e2ef53f8b8f4d7d3651034c0170025b2c8fe7e2e557dde67db9a67f591bcdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65e2ef53f8b8f4d7d3651034c0170025b2c8fe7e2e557dde67db9a67f591bcdd->enter($__internal_65e2ef53f8b8f4d7d3651034c0170025b2c8fe7e2e557dde67db9a67f591bcdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_a62bf47dd2eef790ecea3370a96a8afad77deab1b7fd7962c6225207895de7f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a62bf47dd2eef790ecea3370a96a8afad77deab1b7fd7962c6225207895de7f9->enter($__internal_a62bf47dd2eef790ecea3370a96a8afad77deab1b7fd7962c6225207895de7f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_a62bf47dd2eef790ecea3370a96a8afad77deab1b7fd7962c6225207895de7f9->leave($__internal_a62bf47dd2eef790ecea3370a96a8afad77deab1b7fd7962c6225207895de7f9_prof);

        
        $__internal_65e2ef53f8b8f4d7d3651034c0170025b2c8fe7e2e557dde67db9a67f591bcdd->leave($__internal_65e2ef53f8b8f4d7d3651034c0170025b2c8fe7e2e557dde67db9a67f591bcdd_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_22013fc0d27248d84788d7fd676cb0aade09ce825c65d97ce65662cc9b9edc14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22013fc0d27248d84788d7fd676cb0aade09ce825c65d97ce65662cc9b9edc14->enter($__internal_22013fc0d27248d84788d7fd676cb0aade09ce825c65d97ce65662cc9b9edc14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_6ab858740f5cb6d5f692928de14963c5277122c16b19ec5d708e560bf30fde49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ab858740f5cb6d5f692928de14963c5277122c16b19ec5d708e560bf30fde49->enter($__internal_6ab858740f5cb6d5f692928de14963c5277122c16b19ec5d708e560bf30fde49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_6ab858740f5cb6d5f692928de14963c5277122c16b19ec5d708e560bf30fde49->leave($__internal_6ab858740f5cb6d5f692928de14963c5277122c16b19ec5d708e560bf30fde49_prof);

        
        $__internal_22013fc0d27248d84788d7fd676cb0aade09ce825c65d97ce65662cc9b9edc14->leave($__internal_22013fc0d27248d84788d7fd676cb0aade09ce825c65d97ce65662cc9b9edc14_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_51fce83621e347a49ca81afe3981e4d98f9a66eefb206edaa6e0d3c254570523 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51fce83621e347a49ca81afe3981e4d98f9a66eefb206edaa6e0d3c254570523->enter($__internal_51fce83621e347a49ca81afe3981e4d98f9a66eefb206edaa6e0d3c254570523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_b46166d1a70f1bca8f06a9a28058e271fb8f8b4877e977cf6d0a18ed4a55a564 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b46166d1a70f1bca8f06a9a28058e271fb8f8b4877e977cf6d0a18ed4a55a564->enter($__internal_b46166d1a70f1bca8f06a9a28058e271fb8f8b4877e977cf6d0a18ed4a55a564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_b46166d1a70f1bca8f06a9a28058e271fb8f8b4877e977cf6d0a18ed4a55a564->leave($__internal_b46166d1a70f1bca8f06a9a28058e271fb8f8b4877e977cf6d0a18ed4a55a564_prof);

        
        $__internal_51fce83621e347a49ca81afe3981e4d98f9a66eefb206edaa6e0d3c254570523->leave($__internal_51fce83621e347a49ca81afe3981e4d98f9a66eefb206edaa6e0d3c254570523_prof);

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
