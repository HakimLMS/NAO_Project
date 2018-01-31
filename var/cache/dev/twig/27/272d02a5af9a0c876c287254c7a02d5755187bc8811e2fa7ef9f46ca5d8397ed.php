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
        $__internal_4513f1b2f878835beac9631948419d3a04d54070724f9019f7fa848396c4b08b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4513f1b2f878835beac9631948419d3a04d54070724f9019f7fa848396c4b08b->enter($__internal_4513f1b2f878835beac9631948419d3a04d54070724f9019f7fa848396c4b08b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_ce27a12db2acb10f84e8027a0877a3d84464627449b91555f07c14dd4cd39d53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce27a12db2acb10f84e8027a0877a3d84464627449b91555f07c14dd4cd39d53->enter($__internal_ce27a12db2acb10f84e8027a0877a3d84464627449b91555f07c14dd4cd39d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

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
        
        $__internal_4513f1b2f878835beac9631948419d3a04d54070724f9019f7fa848396c4b08b->leave($__internal_4513f1b2f878835beac9631948419d3a04d54070724f9019f7fa848396c4b08b_prof);

        
        $__internal_ce27a12db2acb10f84e8027a0877a3d84464627449b91555f07c14dd4cd39d53->leave($__internal_ce27a12db2acb10f84e8027a0877a3d84464627449b91555f07c14dd4cd39d53_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_71fe957869624fa6260bcd79c00bce5856521812118ff6654e7e0094a0afa6fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71fe957869624fa6260bcd79c00bce5856521812118ff6654e7e0094a0afa6fd->enter($__internal_71fe957869624fa6260bcd79c00bce5856521812118ff6654e7e0094a0afa6fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_42e1210a43c757fad40205176c57ce0498e6999e2e013df183ff81d4f7dc7591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42e1210a43c757fad40205176c57ce0498e6999e2e013df183ff81d4f7dc7591->enter($__internal_42e1210a43c757fad40205176c57ce0498e6999e2e013df183ff81d4f7dc7591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_42e1210a43c757fad40205176c57ce0498e6999e2e013df183ff81d4f7dc7591->leave($__internal_42e1210a43c757fad40205176c57ce0498e6999e2e013df183ff81d4f7dc7591_prof);

        
        $__internal_71fe957869624fa6260bcd79c00bce5856521812118ff6654e7e0094a0afa6fd->leave($__internal_71fe957869624fa6260bcd79c00bce5856521812118ff6654e7e0094a0afa6fd_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_b574cfab62e716b787fb2e4aa65a23f3c4224dd198f1322f4261f09a9228769a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b574cfab62e716b787fb2e4aa65a23f3c4224dd198f1322f4261f09a9228769a->enter($__internal_b574cfab62e716b787fb2e4aa65a23f3c4224dd198f1322f4261f09a9228769a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_2b7fa74f9eeabe3b29405d9143d2c56338ead3afe0d255283af7108de844161f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b7fa74f9eeabe3b29405d9143d2c56338ead3afe0d255283af7108de844161f->enter($__internal_2b7fa74f9eeabe3b29405d9143d2c56338ead3afe0d255283af7108de844161f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_2b7fa74f9eeabe3b29405d9143d2c56338ead3afe0d255283af7108de844161f->leave($__internal_2b7fa74f9eeabe3b29405d9143d2c56338ead3afe0d255283af7108de844161f_prof);

        
        $__internal_b574cfab62e716b787fb2e4aa65a23f3c4224dd198f1322f4261f09a9228769a->leave($__internal_b574cfab62e716b787fb2e4aa65a23f3c4224dd198f1322f4261f09a9228769a_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_2313958efa6b5a1ce81acaec0c1e33018d55ad84a55e89e23a5bdf3c3ab10e2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2313958efa6b5a1ce81acaec0c1e33018d55ad84a55e89e23a5bdf3c3ab10e2d->enter($__internal_2313958efa6b5a1ce81acaec0c1e33018d55ad84a55e89e23a5bdf3c3ab10e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_2d1c5727b47545b8a28098f21285c05d10edcdf9a1abbaf9f023b74140e83065 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d1c5727b47545b8a28098f21285c05d10edcdf9a1abbaf9f023b74140e83065->enter($__internal_2d1c5727b47545b8a28098f21285c05d10edcdf9a1abbaf9f023b74140e83065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_2d1c5727b47545b8a28098f21285c05d10edcdf9a1abbaf9f023b74140e83065->leave($__internal_2d1c5727b47545b8a28098f21285c05d10edcdf9a1abbaf9f023b74140e83065_prof);

        
        $__internal_2313958efa6b5a1ce81acaec0c1e33018d55ad84a55e89e23a5bdf3c3ab10e2d->leave($__internal_2313958efa6b5a1ce81acaec0c1e33018d55ad84a55e89e23a5bdf3c3ab10e2d_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_7bf21652ab8d50d7e1b25a99915328f7f089040b9ac0d19c397247ac7765a870 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bf21652ab8d50d7e1b25a99915328f7f089040b9ac0d19c397247ac7765a870->enter($__internal_7bf21652ab8d50d7e1b25a99915328f7f089040b9ac0d19c397247ac7765a870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_f7d374dedd6694492231e139b0cc660eb9ba35ff1bb4d7dda136cef124cfda29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7d374dedd6694492231e139b0cc660eb9ba35ff1bb4d7dda136cef124cfda29->enter($__internal_f7d374dedd6694492231e139b0cc660eb9ba35ff1bb4d7dda136cef124cfda29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

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
        
        $__internal_f7d374dedd6694492231e139b0cc660eb9ba35ff1bb4d7dda136cef124cfda29->leave($__internal_f7d374dedd6694492231e139b0cc660eb9ba35ff1bb4d7dda136cef124cfda29_prof);

        
        $__internal_7bf21652ab8d50d7e1b25a99915328f7f089040b9ac0d19c397247ac7765a870->leave($__internal_7bf21652ab8d50d7e1b25a99915328f7f089040b9ac0d19c397247ac7765a870_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_921f31f9e518b173c5d6246120c1a35295505b2be5a315251c014db9fd427494 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_921f31f9e518b173c5d6246120c1a35295505b2be5a315251c014db9fd427494->enter($__internal_921f31f9e518b173c5d6246120c1a35295505b2be5a315251c014db9fd427494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_ad01263ef8e1250656ef996adbd8a31b2ec929a49f1a5e0beb17ac3bd06d4650 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad01263ef8e1250656ef996adbd8a31b2ec929a49f1a5e0beb17ac3bd06d4650->enter($__internal_ad01263ef8e1250656ef996adbd8a31b2ec929a49f1a5e0beb17ac3bd06d4650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_ad01263ef8e1250656ef996adbd8a31b2ec929a49f1a5e0beb17ac3bd06d4650->leave($__internal_ad01263ef8e1250656ef996adbd8a31b2ec929a49f1a5e0beb17ac3bd06d4650_prof);

        
        $__internal_921f31f9e518b173c5d6246120c1a35295505b2be5a315251c014db9fd427494->leave($__internal_921f31f9e518b173c5d6246120c1a35295505b2be5a315251c014db9fd427494_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_f523616332d413ebc074fa6f24cbd83b0575ebdca92a608d3f8a659ba467a2bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f523616332d413ebc074fa6f24cbd83b0575ebdca92a608d3f8a659ba467a2bd->enter($__internal_f523616332d413ebc074fa6f24cbd83b0575ebdca92a608d3f8a659ba467a2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_2ba3e9275d5351f449e948f92d3a9d1e0d0f2ce1cbb29f821f5afde861fe96ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ba3e9275d5351f449e948f92d3a9d1e0d0f2ce1cbb29f821f5afde861fe96ad->enter($__internal_2ba3e9275d5351f449e948f92d3a9d1e0d0f2ce1cbb29f821f5afde861fe96ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_2ba3e9275d5351f449e948f92d3a9d1e0d0f2ce1cbb29f821f5afde861fe96ad->leave($__internal_2ba3e9275d5351f449e948f92d3a9d1e0d0f2ce1cbb29f821f5afde861fe96ad_prof);

        
        $__internal_f523616332d413ebc074fa6f24cbd83b0575ebdca92a608d3f8a659ba467a2bd->leave($__internal_f523616332d413ebc074fa6f24cbd83b0575ebdca92a608d3f8a659ba467a2bd_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_79e1eac07a8c1c671e56a0b0fbd24e46dd8b67569f6f3142e71e5525527cc49a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79e1eac07a8c1c671e56a0b0fbd24e46dd8b67569f6f3142e71e5525527cc49a->enter($__internal_79e1eac07a8c1c671e56a0b0fbd24e46dd8b67569f6f3142e71e5525527cc49a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_def1ce178d24a1c79692d1f56a4fd3ca11496a1fd777de8d215b6103ca082826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_def1ce178d24a1c79692d1f56a4fd3ca11496a1fd777de8d215b6103ca082826->enter($__internal_def1ce178d24a1c79692d1f56a4fd3ca11496a1fd777de8d215b6103ca082826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_def1ce178d24a1c79692d1f56a4fd3ca11496a1fd777de8d215b6103ca082826->leave($__internal_def1ce178d24a1c79692d1f56a4fd3ca11496a1fd777de8d215b6103ca082826_prof);

        
        $__internal_79e1eac07a8c1c671e56a0b0fbd24e46dd8b67569f6f3142e71e5525527cc49a->leave($__internal_79e1eac07a8c1c671e56a0b0fbd24e46dd8b67569f6f3142e71e5525527cc49a_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_1ed76b31abb14837ae87df98e34db55e821ee42b4850263e6b78c72a1cc4a7ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ed76b31abb14837ae87df98e34db55e821ee42b4850263e6b78c72a1cc4a7ab->enter($__internal_1ed76b31abb14837ae87df98e34db55e821ee42b4850263e6b78c72a1cc4a7ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_7d576e18143b0e987eb93c67f8811e5328463f8c1c439b6dfcdc04134cf59937 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d576e18143b0e987eb93c67f8811e5328463f8c1c439b6dfcdc04134cf59937->enter($__internal_7d576e18143b0e987eb93c67f8811e5328463f8c1c439b6dfcdc04134cf59937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_7d576e18143b0e987eb93c67f8811e5328463f8c1c439b6dfcdc04134cf59937->leave($__internal_7d576e18143b0e987eb93c67f8811e5328463f8c1c439b6dfcdc04134cf59937_prof);

        
        $__internal_1ed76b31abb14837ae87df98e34db55e821ee42b4850263e6b78c72a1cc4a7ab->leave($__internal_1ed76b31abb14837ae87df98e34db55e821ee42b4850263e6b78c72a1cc4a7ab_prof);

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
