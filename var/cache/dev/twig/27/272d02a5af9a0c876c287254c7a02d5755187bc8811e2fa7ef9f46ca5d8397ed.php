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
        $__internal_27cd8426d5dfb1ff8120c50a1ecd8272d977e9306b0b6691eae42877e251efac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27cd8426d5dfb1ff8120c50a1ecd8272d977e9306b0b6691eae42877e251efac->enter($__internal_27cd8426d5dfb1ff8120c50a1ecd8272d977e9306b0b6691eae42877e251efac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_712abc1f67b7d5084359a2574aafec9e997f0c84012f59b79ce8ef09ad149666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_712abc1f67b7d5084359a2574aafec9e997f0c84012f59b79ce8ef09ad149666->enter($__internal_712abc1f67b7d5084359a2574aafec9e997f0c84012f59b79ce8ef09ad149666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

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
        
        $__internal_27cd8426d5dfb1ff8120c50a1ecd8272d977e9306b0b6691eae42877e251efac->leave($__internal_27cd8426d5dfb1ff8120c50a1ecd8272d977e9306b0b6691eae42877e251efac_prof);

        
        $__internal_712abc1f67b7d5084359a2574aafec9e997f0c84012f59b79ce8ef09ad149666->leave($__internal_712abc1f67b7d5084359a2574aafec9e997f0c84012f59b79ce8ef09ad149666_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_5797943f4b44cf5eebd8716609a956c4ae2c9488fa55f39545b266290c3bd7d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5797943f4b44cf5eebd8716609a956c4ae2c9488fa55f39545b266290c3bd7d9->enter($__internal_5797943f4b44cf5eebd8716609a956c4ae2c9488fa55f39545b266290c3bd7d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_27e4fd1814a9171796c11b5565e8a7c4d0a21e26fe36b33cc86936a2caa7c546 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27e4fd1814a9171796c11b5565e8a7c4d0a21e26fe36b33cc86936a2caa7c546->enter($__internal_27e4fd1814a9171796c11b5565e8a7c4d0a21e26fe36b33cc86936a2caa7c546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_27e4fd1814a9171796c11b5565e8a7c4d0a21e26fe36b33cc86936a2caa7c546->leave($__internal_27e4fd1814a9171796c11b5565e8a7c4d0a21e26fe36b33cc86936a2caa7c546_prof);

        
        $__internal_5797943f4b44cf5eebd8716609a956c4ae2c9488fa55f39545b266290c3bd7d9->leave($__internal_5797943f4b44cf5eebd8716609a956c4ae2c9488fa55f39545b266290c3bd7d9_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_2e7d60f960bb9b1930ad19e1a10a45b316cd7659e3725e34db9c883809a02660 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e7d60f960bb9b1930ad19e1a10a45b316cd7659e3725e34db9c883809a02660->enter($__internal_2e7d60f960bb9b1930ad19e1a10a45b316cd7659e3725e34db9c883809a02660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_a2b256700675108987780f521271fb35b077828cb1e8010e9dd36888cebbf77a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2b256700675108987780f521271fb35b077828cb1e8010e9dd36888cebbf77a->enter($__internal_a2b256700675108987780f521271fb35b077828cb1e8010e9dd36888cebbf77a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_a2b256700675108987780f521271fb35b077828cb1e8010e9dd36888cebbf77a->leave($__internal_a2b256700675108987780f521271fb35b077828cb1e8010e9dd36888cebbf77a_prof);

        
        $__internal_2e7d60f960bb9b1930ad19e1a10a45b316cd7659e3725e34db9c883809a02660->leave($__internal_2e7d60f960bb9b1930ad19e1a10a45b316cd7659e3725e34db9c883809a02660_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_518b1a76f60c60a026338a2b81282fed19b3dca30d9f6b1ef287a4630558c739 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_518b1a76f60c60a026338a2b81282fed19b3dca30d9f6b1ef287a4630558c739->enter($__internal_518b1a76f60c60a026338a2b81282fed19b3dca30d9f6b1ef287a4630558c739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_1b98c8003a2936268697a83f7b38af54b5e13551dfe0c9492d82bd932c8b32d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b98c8003a2936268697a83f7b38af54b5e13551dfe0c9492d82bd932c8b32d1->enter($__internal_1b98c8003a2936268697a83f7b38af54b5e13551dfe0c9492d82bd932c8b32d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_1b98c8003a2936268697a83f7b38af54b5e13551dfe0c9492d82bd932c8b32d1->leave($__internal_1b98c8003a2936268697a83f7b38af54b5e13551dfe0c9492d82bd932c8b32d1_prof);

        
        $__internal_518b1a76f60c60a026338a2b81282fed19b3dca30d9f6b1ef287a4630558c739->leave($__internal_518b1a76f60c60a026338a2b81282fed19b3dca30d9f6b1ef287a4630558c739_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_f6b5389b7a5a105a5c32cb4eceab8507ebfc7c0e1ffe87947bd9812035df818e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6b5389b7a5a105a5c32cb4eceab8507ebfc7c0e1ffe87947bd9812035df818e->enter($__internal_f6b5389b7a5a105a5c32cb4eceab8507ebfc7c0e1ffe87947bd9812035df818e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_3c5916ebdd8aaefc46b8cd78b7ff8e5d54143e6faea562d32dd41561c5ebe51d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c5916ebdd8aaefc46b8cd78b7ff8e5d54143e6faea562d32dd41561c5ebe51d->enter($__internal_3c5916ebdd8aaefc46b8cd78b7ff8e5d54143e6faea562d32dd41561c5ebe51d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

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
        
        $__internal_3c5916ebdd8aaefc46b8cd78b7ff8e5d54143e6faea562d32dd41561c5ebe51d->leave($__internal_3c5916ebdd8aaefc46b8cd78b7ff8e5d54143e6faea562d32dd41561c5ebe51d_prof);

        
        $__internal_f6b5389b7a5a105a5c32cb4eceab8507ebfc7c0e1ffe87947bd9812035df818e->leave($__internal_f6b5389b7a5a105a5c32cb4eceab8507ebfc7c0e1ffe87947bd9812035df818e_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_97395486d5721378d98a66800696d3824a5d207da4bd1ae2519aa55c1443471e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97395486d5721378d98a66800696d3824a5d207da4bd1ae2519aa55c1443471e->enter($__internal_97395486d5721378d98a66800696d3824a5d207da4bd1ae2519aa55c1443471e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_0b7f3baf6dab318f605fe09792a72ad585b613f6f192d7c22c74ba987a58a320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b7f3baf6dab318f605fe09792a72ad585b613f6f192d7c22c74ba987a58a320->enter($__internal_0b7f3baf6dab318f605fe09792a72ad585b613f6f192d7c22c74ba987a58a320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_0b7f3baf6dab318f605fe09792a72ad585b613f6f192d7c22c74ba987a58a320->leave($__internal_0b7f3baf6dab318f605fe09792a72ad585b613f6f192d7c22c74ba987a58a320_prof);

        
        $__internal_97395486d5721378d98a66800696d3824a5d207da4bd1ae2519aa55c1443471e->leave($__internal_97395486d5721378d98a66800696d3824a5d207da4bd1ae2519aa55c1443471e_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_a04174af30856b5f56478bcf366c7beddfc0f940c0702459428c91954a81ed02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a04174af30856b5f56478bcf366c7beddfc0f940c0702459428c91954a81ed02->enter($__internal_a04174af30856b5f56478bcf366c7beddfc0f940c0702459428c91954a81ed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_f65436f9a0f2c6ef1a012602930ad01ff87296530aa8b60a3db3449ec6ab4054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f65436f9a0f2c6ef1a012602930ad01ff87296530aa8b60a3db3449ec6ab4054->enter($__internal_f65436f9a0f2c6ef1a012602930ad01ff87296530aa8b60a3db3449ec6ab4054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_f65436f9a0f2c6ef1a012602930ad01ff87296530aa8b60a3db3449ec6ab4054->leave($__internal_f65436f9a0f2c6ef1a012602930ad01ff87296530aa8b60a3db3449ec6ab4054_prof);

        
        $__internal_a04174af30856b5f56478bcf366c7beddfc0f940c0702459428c91954a81ed02->leave($__internal_a04174af30856b5f56478bcf366c7beddfc0f940c0702459428c91954a81ed02_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_fad94c292c7645ceb2477451d60bca645e3ab6301df224cf323606a5cef0e545 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fad94c292c7645ceb2477451d60bca645e3ab6301df224cf323606a5cef0e545->enter($__internal_fad94c292c7645ceb2477451d60bca645e3ab6301df224cf323606a5cef0e545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_94d114546818072586045ddea9a2c6bf7500447eeb1b7ecf099868dd70a660b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94d114546818072586045ddea9a2c6bf7500447eeb1b7ecf099868dd70a660b9->enter($__internal_94d114546818072586045ddea9a2c6bf7500447eeb1b7ecf099868dd70a660b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_94d114546818072586045ddea9a2c6bf7500447eeb1b7ecf099868dd70a660b9->leave($__internal_94d114546818072586045ddea9a2c6bf7500447eeb1b7ecf099868dd70a660b9_prof);

        
        $__internal_fad94c292c7645ceb2477451d60bca645e3ab6301df224cf323606a5cef0e545->leave($__internal_fad94c292c7645ceb2477451d60bca645e3ab6301df224cf323606a5cef0e545_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_29d476255806faa740b098ef8f61566cb303ab1559997473bd2b87534fa49591 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29d476255806faa740b098ef8f61566cb303ab1559997473bd2b87534fa49591->enter($__internal_29d476255806faa740b098ef8f61566cb303ab1559997473bd2b87534fa49591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_430756047e53a5025459d476102ea61aa5e73a752888d678aac5d14ce2e52be3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_430756047e53a5025459d476102ea61aa5e73a752888d678aac5d14ce2e52be3->enter($__internal_430756047e53a5025459d476102ea61aa5e73a752888d678aac5d14ce2e52be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_430756047e53a5025459d476102ea61aa5e73a752888d678aac5d14ce2e52be3->leave($__internal_430756047e53a5025459d476102ea61aa5e73a752888d678aac5d14ce2e52be3_prof);

        
        $__internal_29d476255806faa740b098ef8f61566cb303ab1559997473bd2b87534fa49591->leave($__internal_29d476255806faa740b098ef8f61566cb303ab1559997473bd2b87534fa49591_prof);

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
