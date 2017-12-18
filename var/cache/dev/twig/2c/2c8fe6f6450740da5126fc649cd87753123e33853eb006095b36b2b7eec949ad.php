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
        $__internal_69366763db4dbc6512f4a8717830a7427ee819a9ee9d3e1fc0a6e49b36652353 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69366763db4dbc6512f4a8717830a7427ee819a9ee9d3e1fc0a6e49b36652353->enter($__internal_69366763db4dbc6512f4a8717830a7427ee819a9ee9d3e1fc0a6e49b36652353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_4b900220b935af76213423ab3725d09dc3f4f714c43c62a0d2c8a25f8edc5691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b900220b935af76213423ab3725d09dc3f4f714c43c62a0d2c8a25f8edc5691->enter($__internal_4b900220b935af76213423ab3725d09dc3f4f714c43c62a0d2c8a25f8edc5691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

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
        
        $__internal_69366763db4dbc6512f4a8717830a7427ee819a9ee9d3e1fc0a6e49b36652353->leave($__internal_69366763db4dbc6512f4a8717830a7427ee819a9ee9d3e1fc0a6e49b36652353_prof);

        
        $__internal_4b900220b935af76213423ab3725d09dc3f4f714c43c62a0d2c8a25f8edc5691->leave($__internal_4b900220b935af76213423ab3725d09dc3f4f714c43c62a0d2c8a25f8edc5691_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_5683cb40559fd095a60713567f374baecd564bc0efe6f88d479fe71785702a3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5683cb40559fd095a60713567f374baecd564bc0efe6f88d479fe71785702a3f->enter($__internal_5683cb40559fd095a60713567f374baecd564bc0efe6f88d479fe71785702a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_586150aad9587437113b73a669d7d70481580f7733cd895ecb292b5a01f53b8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_586150aad9587437113b73a669d7d70481580f7733cd895ecb292b5a01f53b8d->enter($__internal_586150aad9587437113b73a669d7d70481580f7733cd895ecb292b5a01f53b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_586150aad9587437113b73a669d7d70481580f7733cd895ecb292b5a01f53b8d->leave($__internal_586150aad9587437113b73a669d7d70481580f7733cd895ecb292b5a01f53b8d_prof);

        
        $__internal_5683cb40559fd095a60713567f374baecd564bc0efe6f88d479fe71785702a3f->leave($__internal_5683cb40559fd095a60713567f374baecd564bc0efe6f88d479fe71785702a3f_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_05cfbd6fb19037cef4c075abf43dff86af5f8b07a2ae18fb4429ca5156748dcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05cfbd6fb19037cef4c075abf43dff86af5f8b07a2ae18fb4429ca5156748dcc->enter($__internal_05cfbd6fb19037cef4c075abf43dff86af5f8b07a2ae18fb4429ca5156748dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_f0d48558d9da7881b2777e06c1a950d667ae641951ec0375147586414961bfea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0d48558d9da7881b2777e06c1a950d667ae641951ec0375147586414961bfea->enter($__internal_f0d48558d9da7881b2777e06c1a950d667ae641951ec0375147586414961bfea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_f0d48558d9da7881b2777e06c1a950d667ae641951ec0375147586414961bfea->leave($__internal_f0d48558d9da7881b2777e06c1a950d667ae641951ec0375147586414961bfea_prof);

        
        $__internal_05cfbd6fb19037cef4c075abf43dff86af5f8b07a2ae18fb4429ca5156748dcc->leave($__internal_05cfbd6fb19037cef4c075abf43dff86af5f8b07a2ae18fb4429ca5156748dcc_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_7d8e88ebbf7fae12bff5543b37f802349ba3c75fe566e4999a9521d5e6275851 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d8e88ebbf7fae12bff5543b37f802349ba3c75fe566e4999a9521d5e6275851->enter($__internal_7d8e88ebbf7fae12bff5543b37f802349ba3c75fe566e4999a9521d5e6275851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_8819a6b35a3052907328db53a08b7a69835f93bcf8f34d67a432683ada61a2f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8819a6b35a3052907328db53a08b7a69835f93bcf8f34d67a432683ada61a2f8->enter($__internal_8819a6b35a3052907328db53a08b7a69835f93bcf8f34d67a432683ada61a2f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_8819a6b35a3052907328db53a08b7a69835f93bcf8f34d67a432683ada61a2f8->leave($__internal_8819a6b35a3052907328db53a08b7a69835f93bcf8f34d67a432683ada61a2f8_prof);

        
        $__internal_7d8e88ebbf7fae12bff5543b37f802349ba3c75fe566e4999a9521d5e6275851->leave($__internal_7d8e88ebbf7fae12bff5543b37f802349ba3c75fe566e4999a9521d5e6275851_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_6cee02b1ac7002f7ca9df170b313eaa62ca94181c7e36de12685cebd6b70f7ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cee02b1ac7002f7ca9df170b313eaa62ca94181c7e36de12685cebd6b70f7ad->enter($__internal_6cee02b1ac7002f7ca9df170b313eaa62ca94181c7e36de12685cebd6b70f7ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_6fc5c8219bd3f2f0f2c03fd05c4e2ce7d8c3a59aa64dd1ada5562144cad141d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fc5c8219bd3f2f0f2c03fd05c4e2ce7d8c3a59aa64dd1ada5562144cad141d8->enter($__internal_6fc5c8219bd3f2f0f2c03fd05c4e2ce7d8c3a59aa64dd1ada5562144cad141d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

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
        
        $__internal_6fc5c8219bd3f2f0f2c03fd05c4e2ce7d8c3a59aa64dd1ada5562144cad141d8->leave($__internal_6fc5c8219bd3f2f0f2c03fd05c4e2ce7d8c3a59aa64dd1ada5562144cad141d8_prof);

        
        $__internal_6cee02b1ac7002f7ca9df170b313eaa62ca94181c7e36de12685cebd6b70f7ad->leave($__internal_6cee02b1ac7002f7ca9df170b313eaa62ca94181c7e36de12685cebd6b70f7ad_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_b9883cf8f74956890660d530b85d647696ee4a94c18e6514ed2f33c891be1497 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9883cf8f74956890660d530b85d647696ee4a94c18e6514ed2f33c891be1497->enter($__internal_b9883cf8f74956890660d530b85d647696ee4a94c18e6514ed2f33c891be1497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_a6f31cd5e235cf3800368e60469a7d4d9f5a571b1f7c4f40b8dbb8b463499608 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6f31cd5e235cf3800368e60469a7d4d9f5a571b1f7c4f40b8dbb8b463499608->enter($__internal_a6f31cd5e235cf3800368e60469a7d4d9f5a571b1f7c4f40b8dbb8b463499608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_a6f31cd5e235cf3800368e60469a7d4d9f5a571b1f7c4f40b8dbb8b463499608->leave($__internal_a6f31cd5e235cf3800368e60469a7d4d9f5a571b1f7c4f40b8dbb8b463499608_prof);

        
        $__internal_b9883cf8f74956890660d530b85d647696ee4a94c18e6514ed2f33c891be1497->leave($__internal_b9883cf8f74956890660d530b85d647696ee4a94c18e6514ed2f33c891be1497_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_b4dd33d03eb8f59587b8a3511958af71d8f9be10c187389fcfdcf9b4b3a5ab66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4dd33d03eb8f59587b8a3511958af71d8f9be10c187389fcfdcf9b4b3a5ab66->enter($__internal_b4dd33d03eb8f59587b8a3511958af71d8f9be10c187389fcfdcf9b4b3a5ab66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_2700c503c4d5282e8bb25ace7f275d857871bf10a2cba6e23d7b83258747c3ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2700c503c4d5282e8bb25ace7f275d857871bf10a2cba6e23d7b83258747c3ff->enter($__internal_2700c503c4d5282e8bb25ace7f275d857871bf10a2cba6e23d7b83258747c3ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_2700c503c4d5282e8bb25ace7f275d857871bf10a2cba6e23d7b83258747c3ff->leave($__internal_2700c503c4d5282e8bb25ace7f275d857871bf10a2cba6e23d7b83258747c3ff_prof);

        
        $__internal_b4dd33d03eb8f59587b8a3511958af71d8f9be10c187389fcfdcf9b4b3a5ab66->leave($__internal_b4dd33d03eb8f59587b8a3511958af71d8f9be10c187389fcfdcf9b4b3a5ab66_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_c36cdc016dde66954a4fd8edfd9a7fd5cc8a6a7a02fd8f91a75a2998fafebe09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c36cdc016dde66954a4fd8edfd9a7fd5cc8a6a7a02fd8f91a75a2998fafebe09->enter($__internal_c36cdc016dde66954a4fd8edfd9a7fd5cc8a6a7a02fd8f91a75a2998fafebe09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_cb3660ccf6b880225ada0a421485c439fe8e51f99a29d48e5892a8417d70934c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb3660ccf6b880225ada0a421485c439fe8e51f99a29d48e5892a8417d70934c->enter($__internal_cb3660ccf6b880225ada0a421485c439fe8e51f99a29d48e5892a8417d70934c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_cb3660ccf6b880225ada0a421485c439fe8e51f99a29d48e5892a8417d70934c->leave($__internal_cb3660ccf6b880225ada0a421485c439fe8e51f99a29d48e5892a8417d70934c_prof);

        
        $__internal_c36cdc016dde66954a4fd8edfd9a7fd5cc8a6a7a02fd8f91a75a2998fafebe09->leave($__internal_c36cdc016dde66954a4fd8edfd9a7fd5cc8a6a7a02fd8f91a75a2998fafebe09_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_2bd1c2c33e381ab1f2297e27e6867ae6881077a3812922250374f0e1b42ca357 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bd1c2c33e381ab1f2297e27e6867ae6881077a3812922250374f0e1b42ca357->enter($__internal_2bd1c2c33e381ab1f2297e27e6867ae6881077a3812922250374f0e1b42ca357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_cbfc8c21371b548934464746bc97f5c017d725a0fcf0800d1f7dc44f4a5aa453 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbfc8c21371b548934464746bc97f5c017d725a0fcf0800d1f7dc44f4a5aa453->enter($__internal_cbfc8c21371b548934464746bc97f5c017d725a0fcf0800d1f7dc44f4a5aa453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_cbfc8c21371b548934464746bc97f5c017d725a0fcf0800d1f7dc44f4a5aa453->leave($__internal_cbfc8c21371b548934464746bc97f5c017d725a0fcf0800d1f7dc44f4a5aa453_prof);

        
        $__internal_2bd1c2c33e381ab1f2297e27e6867ae6881077a3812922250374f0e1b42ca357->leave($__internal_2bd1c2c33e381ab1f2297e27e6867ae6881077a3812922250374f0e1b42ca357_prof);

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
