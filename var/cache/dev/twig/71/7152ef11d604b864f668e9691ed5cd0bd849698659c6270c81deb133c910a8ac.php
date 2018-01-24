<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_3c0269eadd0650535aaed83a26dc9e2aa2e6e00b4939476107405516ec04d8a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'button_widget' => array($this, 'block_button_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3027f481ccd1e27b64f0535e3dc4f09fdb60d879b6a1f3869b4b86a79a7777d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3027f481ccd1e27b64f0535e3dc4f09fdb60d879b6a1f3869b4b86a79a7777d->enter($__internal_f3027f481ccd1e27b64f0535e3dc4f09fdb60d879b6a1f3869b4b86a79a7777d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_542735583a713d90b2032957a9f21f4bd953937155ec2dfc510ef101841859e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_542735583a713d90b2032957a9f21f4bd953937155ec2dfc510ef101841859e2->enter($__internal_542735583a713d90b2032957a9f21f4bd953937155ec2dfc510ef101841859e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('button_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 38
        echo "
";
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('form_label', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('choice_label', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('radio_label', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 88
        echo "
";
        // line 90
        echo "
";
        // line 91
        $this->displayBlock('form_row', $context, $blocks);
        // line 98
        echo "
";
        // line 99
        $this->displayBlock('button_row', $context, $blocks);
        // line 104
        echo "
";
        // line 105
        $this->displayBlock('choice_row', $context, $blocks);
        // line 109
        echo "
";
        // line 110
        $this->displayBlock('date_row', $context, $blocks);
        // line 114
        echo "
";
        // line 115
        $this->displayBlock('time_row', $context, $blocks);
        // line 119
        echo "
";
        // line 120
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 124
        echo "
";
        // line 125
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 131
        echo "
";
        // line 132
        $this->displayBlock('radio_row', $context, $blocks);
        // line 138
        echo "
";
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_f3027f481ccd1e27b64f0535e3dc4f09fdb60d879b6a1f3869b4b86a79a7777d->leave($__internal_f3027f481ccd1e27b64f0535e3dc4f09fdb60d879b6a1f3869b4b86a79a7777d_prof);

        
        $__internal_542735583a713d90b2032957a9f21f4bd953937155ec2dfc510ef101841859e2->leave($__internal_542735583a713d90b2032957a9f21f4bd953937155ec2dfc510ef101841859e2_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_bb70db25ba73060de6ce9b3dea25ec582252cf507fe7041130c3f1e79c327c83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb70db25ba73060de6ce9b3dea25ec582252cf507fe7041130c3f1e79c327c83->enter($__internal_bb70db25ba73060de6ce9b3dea25ec582252cf507fe7041130c3f1e79c327c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_30b98bc135d9b45bd1acb6896c276a7d1e7cb53b3fd9538ae2d225c5d690b65f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30b98bc135d9b45bd1acb6896c276a7d1e7cb53b3fd9538ae2d225c5d690b65f->enter($__internal_30b98bc135d9b45bd1acb6896c276a7d1e7cb53b3fd9538ae2d225c5d690b65f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_30b98bc135d9b45bd1acb6896c276a7d1e7cb53b3fd9538ae2d225c5d690b65f->leave($__internal_30b98bc135d9b45bd1acb6896c276a7d1e7cb53b3fd9538ae2d225c5d690b65f_prof);

        
        $__internal_bb70db25ba73060de6ce9b3dea25ec582252cf507fe7041130c3f1e79c327c83->leave($__internal_bb70db25ba73060de6ce9b3dea25ec582252cf507fe7041130c3f1e79c327c83_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_e29c9ba99e431fd78e4cc8ae88068ef99a955f7244ccf7a80c8d7c546a71ee4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e29c9ba99e431fd78e4cc8ae88068ef99a955f7244ccf7a80c8d7c546a71ee4c->enter($__internal_e29c9ba99e431fd78e4cc8ae88068ef99a955f7244ccf7a80c8d7c546a71ee4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_e545bbe78f9129be84674e26cdbb4ef46d328dacfebc58748ea086453c369452 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e545bbe78f9129be84674e26cdbb4ef46d328dacfebc58748ea086453c369452->enter($__internal_e545bbe78f9129be84674e26cdbb4ef46d328dacfebc58748ea086453c369452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_e545bbe78f9129be84674e26cdbb4ef46d328dacfebc58748ea086453c369452->leave($__internal_e545bbe78f9129be84674e26cdbb4ef46d328dacfebc58748ea086453c369452_prof);

        
        $__internal_e29c9ba99e431fd78e4cc8ae88068ef99a955f7244ccf7a80c8d7c546a71ee4c->leave($__internal_e29c9ba99e431fd78e4cc8ae88068ef99a955f7244ccf7a80c8d7c546a71ee4c_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_bed0309615361801b1ad7c29da59c17a25261cbd950fa24c203614570cd4a722 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bed0309615361801b1ad7c29da59c17a25261cbd950fa24c203614570cd4a722->enter($__internal_bed0309615361801b1ad7c29da59c17a25261cbd950fa24c203614570cd4a722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_e0333634f4c7e4ff70fb1c2a0df18e62ec2c06cbb96e4dd77a1457fd3855b8dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0333634f4c7e4ff70fb1c2a0df18e62ec2c06cbb96e4dd77a1457fd3855b8dd->enter($__internal_e0333634f4c7e4ff70fb1c2a0df18e62ec2c06cbb96e4dd77a1457fd3855b8dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 18
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 18, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 19
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 19, $this->getSourceContext()); })()))) {
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 22
            echo "<div class=\"checkbox\">";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 24
            echo "</div>";
        }
        
        $__internal_e0333634f4c7e4ff70fb1c2a0df18e62ec2c06cbb96e4dd77a1457fd3855b8dd->leave($__internal_e0333634f4c7e4ff70fb1c2a0df18e62ec2c06cbb96e4dd77a1457fd3855b8dd_prof);

        
        $__internal_bed0309615361801b1ad7c29da59c17a25261cbd950fa24c203614570cd4a722->leave($__internal_bed0309615361801b1ad7c29da59c17a25261cbd950fa24c203614570cd4a722_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_c05e797405e2e184069d468e74a396495c62caf57f35821fe648066df377506c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c05e797405e2e184069d468e74a396495c62caf57f35821fe648066df377506c->enter($__internal_c05e797405e2e184069d468e74a396495c62caf57f35821fe648066df377506c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_1e3133c22395924dfdfaef893902de6522072db4ec735528628a79cb154cd8e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e3133c22395924dfdfaef893902de6522072db4ec735528628a79cb154cd8e4->enter($__internal_1e3133c22395924dfdfaef893902de6522072db4ec735528628a79cb154cd8e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 29
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 29, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 30
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 30, $this->getSourceContext()); })()))) {
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 33
            echo "<div class=\"radio\">";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 35
            echo "</div>";
        }
        
        $__internal_1e3133c22395924dfdfaef893902de6522072db4ec735528628a79cb154cd8e4->leave($__internal_1e3133c22395924dfdfaef893902de6522072db4ec735528628a79cb154cd8e4_prof);

        
        $__internal_c05e797405e2e184069d468e74a396495c62caf57f35821fe648066df377506c->leave($__internal_c05e797405e2e184069d468e74a396495c62caf57f35821fe648066df377506c_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_f790bf604a328213f10c9d8159cce230455bd6ff349f9ae8758f74c5e1ede3d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f790bf604a328213f10c9d8159cce230455bd6ff349f9ae8758f74c5e1ede3d4->enter($__internal_f790bf604a328213f10c9d8159cce230455bd6ff349f9ae8758f74c5e1ede3d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_14ebd420853e94f30a0fe0a0098dd0de4831c7d81005db877fda0bac051c67f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14ebd420853e94f30a0fe0a0098dd0de4831c7d81005db877fda0bac051c67f9->enter($__internal_14ebd420853e94f30a0fe0a0098dd0de4831c7d81005db877fda0bac051c67f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_14ebd420853e94f30a0fe0a0098dd0de4831c7d81005db877fda0bac051c67f9->leave($__internal_14ebd420853e94f30a0fe0a0098dd0de4831c7d81005db877fda0bac051c67f9_prof);

        
        $__internal_f790bf604a328213f10c9d8159cce230455bd6ff349f9ae8758f74c5e1ede3d4->leave($__internal_f790bf604a328213f10c9d8159cce230455bd6ff349f9ae8758f74c5e1ede3d4_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_a3c015565a8416e9213074142034eb1cc3f0a6459a28aa70742414862d4d0ea1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3c015565a8416e9213074142034eb1cc3f0a6459a28aa70742414862d4d0ea1->enter($__internal_a3c015565a8416e9213074142034eb1cc3f0a6459a28aa70742414862d4d0ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_d4200e0a36f00b703a2bb6d80aa64803cb6cb882b83459e834771df32bfb3cd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4200e0a36f00b703a2bb6d80aa64803cb6cb882b83459e834771df32bfb3cd4->enter($__internal_d4200e0a36f00b703a2bb6d80aa64803cb6cb882b83459e834771df32bfb3cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_d4200e0a36f00b703a2bb6d80aa64803cb6cb882b83459e834771df32bfb3cd4->leave($__internal_d4200e0a36f00b703a2bb6d80aa64803cb6cb882b83459e834771df32bfb3cd4_prof);

        
        $__internal_a3c015565a8416e9213074142034eb1cc3f0a6459a28aa70742414862d4d0ea1->leave($__internal_a3c015565a8416e9213074142034eb1cc3f0a6459a28aa70742414862d4d0ea1_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_92f6f73f146667511bfb47a6d221dcf839ebed7a9036d72e6a00e7f22f57f469 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92f6f73f146667511bfb47a6d221dcf839ebed7a9036d72e6a00e7f22f57f469->enter($__internal_92f6f73f146667511bfb47a6d221dcf839ebed7a9036d72e6a00e7f22f57f469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_13a5d0f1ac6060b27f74b8a59fe5a6c4a7c6ef645150aee4872fa4a682c561cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13a5d0f1ac6060b27f74b8a59fe5a6c4a7c6ef645150aee4872fa4a682c561cd->enter($__internal_13a5d0f1ac6060b27f74b8a59fe5a6c4a7c6ef645150aee4872fa4a682c561cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_13a5d0f1ac6060b27f74b8a59fe5a6c4a7c6ef645150aee4872fa4a682c561cd->leave($__internal_13a5d0f1ac6060b27f74b8a59fe5a6c4a7c6ef645150aee4872fa4a682c561cd_prof);

        
        $__internal_92f6f73f146667511bfb47a6d221dcf839ebed7a9036d72e6a00e7f22f57f469->leave($__internal_92f6f73f146667511bfb47a6d221dcf839ebed7a9036d72e6a00e7f22f57f469_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_b15cb061a34d1aab2eae3ccca7a8953252a0993c35a9a9931be85a6b337bf5b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b15cb061a34d1aab2eae3ccca7a8953252a0993c35a9a9931be85a6b337bf5b3->enter($__internal_b15cb061a34d1aab2eae3ccca7a8953252a0993c35a9a9931be85a6b337bf5b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_c38f891c7d376509cae21b7e211bcd451bd8cc8aaca23a6115c16f72ce2dc1ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c38f891c7d376509cae21b7e211bcd451bd8cc8aaca23a6115c16f72ce2dc1ba->enter($__internal_c38f891c7d376509cae21b7e211bcd451bd8cc8aaca23a6115c16f72ce2dc1ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_c38f891c7d376509cae21b7e211bcd451bd8cc8aaca23a6115c16f72ce2dc1ba->leave($__internal_c38f891c7d376509cae21b7e211bcd451bd8cc8aaca23a6115c16f72ce2dc1ba_prof);

        
        $__internal_b15cb061a34d1aab2eae3ccca7a8953252a0993c35a9a9931be85a6b337bf5b3->leave($__internal_b15cb061a34d1aab2eae3ccca7a8953252a0993c35a9a9931be85a6b337bf5b3_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_6b4903490f3355021150da425e7b8aead3799169cd08699fbe0aa03312c49b6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b4903490f3355021150da425e7b8aead3799169cd08699fbe0aa03312c49b6b->enter($__internal_6b4903490f3355021150da425e7b8aead3799169cd08699fbe0aa03312c49b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_c3fa64eb793c29deef94c8c6edb44c311583c993e467008ef07302be37d526c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3fa64eb793c29deef94c8c6edb44c311583c993e467008ef07302be37d526c2->enter($__internal_c3fa64eb793c29deef94c8c6edb44c311583c993e467008ef07302be37d526c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 66
        if (array_key_exists("widget", $context)) {
            // line 67
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 67, $this->getSourceContext()); })())) {
                // line 68
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 68, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 70
            if (array_key_exists("parent_label_class", $context)) {
                // line 71
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 71, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 71, $this->getSourceContext()); })())))));
            }
            // line 73
            if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 73, $this->getSourceContext()); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 73, $this->getSourceContext()); })())))) {
                // line 74
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 74, $this->getSourceContext()); })()))) {
                    // line 75
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 75, $this->getSourceContext()); })()), array("%name%" =>                     // line 76
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 76, $this->getSourceContext()); })()), "%id%" =>                     // line 77
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 77, $this->getSourceContext()); })())));
                } else {
                    // line 80
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 80, $this->getSourceContext()); })()));
                }
            }
            // line 83
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 83, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 84
            echo (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 84, $this->getSourceContext()); })());
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })()) === false)) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 84, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 84, $this->getSourceContext()); })()))))) : ("")), "html", null, true);
            // line 85
            echo "</label>";
        }
        
        $__internal_c3fa64eb793c29deef94c8c6edb44c311583c993e467008ef07302be37d526c2->leave($__internal_c3fa64eb793c29deef94c8c6edb44c311583c993e467008ef07302be37d526c2_prof);

        
        $__internal_6b4903490f3355021150da425e7b8aead3799169cd08699fbe0aa03312c49b6b->leave($__internal_6b4903490f3355021150da425e7b8aead3799169cd08699fbe0aa03312c49b6b_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_70728856c48b6d3e9513a6b269f3fd23a016a1990bc2e0a93fed7accc1e3d95b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70728856c48b6d3e9513a6b269f3fd23a016a1990bc2e0a93fed7accc1e3d95b->enter($__internal_70728856c48b6d3e9513a6b269f3fd23a016a1990bc2e0a93fed7accc1e3d95b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_96aeeed7edb141958b13fcd6321ff09504d9dcd046c455833c3d7b9808436112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96aeeed7edb141958b13fcd6321ff09504d9dcd046c455833c3d7b9808436112->enter($__internal_96aeeed7edb141958b13fcd6321ff09504d9dcd046c455833c3d7b9808436112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 92
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 92, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 92, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 92, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 93, $this->getSourceContext()); })()), 'label');
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 94, $this->getSourceContext()); })()), 'widget');
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 95, $this->getSourceContext()); })()), 'errors');
        // line 96
        echo "</div>";
        
        $__internal_96aeeed7edb141958b13fcd6321ff09504d9dcd046c455833c3d7b9808436112->leave($__internal_96aeeed7edb141958b13fcd6321ff09504d9dcd046c455833c3d7b9808436112_prof);

        
        $__internal_70728856c48b6d3e9513a6b269f3fd23a016a1990bc2e0a93fed7accc1e3d95b->leave($__internal_70728856c48b6d3e9513a6b269f3fd23a016a1990bc2e0a93fed7accc1e3d95b_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_5a47028a981e8c598eab77bb19683ca3a90cda85901a801a1b0480b6456003aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a47028a981e8c598eab77bb19683ca3a90cda85901a801a1b0480b6456003aa->enter($__internal_5a47028a981e8c598eab77bb19683ca3a90cda85901a801a1b0480b6456003aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_dc0ef022a864ed811fb0e201c918f2c911d32fefe55f75fae3fdc8dcbeeaf6cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc0ef022a864ed811fb0e201c918f2c911d32fefe55f75fae3fdc8dcbeeaf6cc->enter($__internal_dc0ef022a864ed811fb0e201c918f2c911d32fefe55f75fae3fdc8dcbeeaf6cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_dc0ef022a864ed811fb0e201c918f2c911d32fefe55f75fae3fdc8dcbeeaf6cc->leave($__internal_dc0ef022a864ed811fb0e201c918f2c911d32fefe55f75fae3fdc8dcbeeaf6cc_prof);

        
        $__internal_5a47028a981e8c598eab77bb19683ca3a90cda85901a801a1b0480b6456003aa->leave($__internal_5a47028a981e8c598eab77bb19683ca3a90cda85901a801a1b0480b6456003aa_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_c3f39b7f9b1a9a38176d156d8d333434e217583373435a37d97bcb77b5ba2ca4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3f39b7f9b1a9a38176d156d8d333434e217583373435a37d97bcb77b5ba2ca4->enter($__internal_c3f39b7f9b1a9a38176d156d8d333434e217583373435a37d97bcb77b5ba2ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_4b5a2566e8f5e0e75e55fc8739bc562976abcd61db2836787d3ba10d8ebc67b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b5a2566e8f5e0e75e55fc8739bc562976abcd61db2836787d3ba10d8ebc67b6->enter($__internal_4b5a2566e8f5e0e75e55fc8739bc562976abcd61db2836787d3ba10d8ebc67b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_4b5a2566e8f5e0e75e55fc8739bc562976abcd61db2836787d3ba10d8ebc67b6->leave($__internal_4b5a2566e8f5e0e75e55fc8739bc562976abcd61db2836787d3ba10d8ebc67b6_prof);

        
        $__internal_c3f39b7f9b1a9a38176d156d8d333434e217583373435a37d97bcb77b5ba2ca4->leave($__internal_c3f39b7f9b1a9a38176d156d8d333434e217583373435a37d97bcb77b5ba2ca4_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_d0097a66f239973847b63a9bc0792e32824daf7845a4c63bfe1c13e8ccdca187 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0097a66f239973847b63a9bc0792e32824daf7845a4c63bfe1c13e8ccdca187->enter($__internal_d0097a66f239973847b63a9bc0792e32824daf7845a4c63bfe1c13e8ccdca187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_30a5798cbee662e0d63578af0dac29ff1b55c4cd76d8369ff5c7ca9fe641763a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30a5798cbee662e0d63578af0dac29ff1b55c4cd76d8369ff5c7ca9fe641763a->enter($__internal_30a5798cbee662e0d63578af0dac29ff1b55c4cd76d8369ff5c7ca9fe641763a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_30a5798cbee662e0d63578af0dac29ff1b55c4cd76d8369ff5c7ca9fe641763a->leave($__internal_30a5798cbee662e0d63578af0dac29ff1b55c4cd76d8369ff5c7ca9fe641763a_prof);

        
        $__internal_d0097a66f239973847b63a9bc0792e32824daf7845a4c63bfe1c13e8ccdca187->leave($__internal_d0097a66f239973847b63a9bc0792e32824daf7845a4c63bfe1c13e8ccdca187_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_c7f1cbe06037210eb09ed266989551714842d5cf8d083478182404e14b0a3802 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7f1cbe06037210eb09ed266989551714842d5cf8d083478182404e14b0a3802->enter($__internal_c7f1cbe06037210eb09ed266989551714842d5cf8d083478182404e14b0a3802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_10fd8ed5ab6dd119562212b00bc9616e0fe85e9f11eab7711ece149473fd058c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10fd8ed5ab6dd119562212b00bc9616e0fe85e9f11eab7711ece149473fd058c->enter($__internal_10fd8ed5ab6dd119562212b00bc9616e0fe85e9f11eab7711ece149473fd058c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_10fd8ed5ab6dd119562212b00bc9616e0fe85e9f11eab7711ece149473fd058c->leave($__internal_10fd8ed5ab6dd119562212b00bc9616e0fe85e9f11eab7711ece149473fd058c_prof);

        
        $__internal_c7f1cbe06037210eb09ed266989551714842d5cf8d083478182404e14b0a3802->leave($__internal_c7f1cbe06037210eb09ed266989551714842d5cf8d083478182404e14b0a3802_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_43c4ebd7a070d4396978941529132f4d95ac8f80bc92f84f79c757822cf8031a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43c4ebd7a070d4396978941529132f4d95ac8f80bc92f84f79c757822cf8031a->enter($__internal_43c4ebd7a070d4396978941529132f4d95ac8f80bc92f84f79c757822cf8031a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_e339ca46ae19e90ede89fcde19488314612866cdcf7fbc678a60fb56b29f7390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e339ca46ae19e90ede89fcde19488314612866cdcf7fbc678a60fb56b29f7390->enter($__internal_e339ca46ae19e90ede89fcde19488314612866cdcf7fbc678a60fb56b29f7390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e339ca46ae19e90ede89fcde19488314612866cdcf7fbc678a60fb56b29f7390->leave($__internal_e339ca46ae19e90ede89fcde19488314612866cdcf7fbc678a60fb56b29f7390_prof);

        
        $__internal_43c4ebd7a070d4396978941529132f4d95ac8f80bc92f84f79c757822cf8031a->leave($__internal_43c4ebd7a070d4396978941529132f4d95ac8f80bc92f84f79c757822cf8031a_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_ebb4ff77207e5777ab74e12459fd8fa15ac4b4144ba879d268c9f69c03d01181 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebb4ff77207e5777ab74e12459fd8fa15ac4b4144ba879d268c9f69c03d01181->enter($__internal_ebb4ff77207e5777ab74e12459fd8fa15ac4b4144ba879d268c9f69c03d01181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_7cf71560a5493c67661ad5535d7bad9fdf43d1c9c41417587bbe28dd48569bcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cf71560a5493c67661ad5535d7bad9fdf43d1c9c41417587bbe28dd48569bcd->enter($__internal_7cf71560a5493c67661ad5535d7bad9fdf43d1c9c41417587bbe28dd48569bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 126
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 126, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 127, $this->getSourceContext()); })()), 'widget');
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), 'errors');
        // line 129
        echo "</div>";
        
        $__internal_7cf71560a5493c67661ad5535d7bad9fdf43d1c9c41417587bbe28dd48569bcd->leave($__internal_7cf71560a5493c67661ad5535d7bad9fdf43d1c9c41417587bbe28dd48569bcd_prof);

        
        $__internal_ebb4ff77207e5777ab74e12459fd8fa15ac4b4144ba879d268c9f69c03d01181->leave($__internal_ebb4ff77207e5777ab74e12459fd8fa15ac4b4144ba879d268c9f69c03d01181_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_0099dcad478240c2b0c3ecbc0841c96095be70965c5d4bf463c80f3728627666 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0099dcad478240c2b0c3ecbc0841c96095be70965c5d4bf463c80f3728627666->enter($__internal_0099dcad478240c2b0c3ecbc0841c96095be70965c5d4bf463c80f3728627666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_0e95efafefa6fdd3f999a9776c84e951de5c791b7f4130b3670cd9fa34e70e37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e95efafefa6fdd3f999a9776c84e951de5c791b7f4130b3670cd9fa34e70e37->enter($__internal_0e95efafefa6fdd3f999a9776c84e951de5c791b7f4130b3670cd9fa34e70e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 133
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 133, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 134, $this->getSourceContext()); })()), 'widget');
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 135, $this->getSourceContext()); })()), 'errors');
        // line 136
        echo "</div>";
        
        $__internal_0e95efafefa6fdd3f999a9776c84e951de5c791b7f4130b3670cd9fa34e70e37->leave($__internal_0e95efafefa6fdd3f999a9776c84e951de5c791b7f4130b3670cd9fa34e70e37_prof);

        
        $__internal_0099dcad478240c2b0c3ecbc0841c96095be70965c5d4bf463c80f3728627666->leave($__internal_0099dcad478240c2b0c3ecbc0841c96095be70965c5d4bf463c80f3728627666_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_bef6622d860b4721a05030ce7a16ae0d465420c5d8ba6ec962c0e28ea233dbbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bef6622d860b4721a05030ce7a16ae0d465420c5d8ba6ec962c0e28ea233dbbf->enter($__internal_bef6622d860b4721a05030ce7a16ae0d465420c5d8ba6ec962c0e28ea233dbbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_718f628d5eb18316edd102f008d132d675a7c3076814fdb5d0ba442874fec29b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_718f628d5eb18316edd102f008d132d675a7c3076814fdb5d0ba442874fec29b->enter($__internal_718f628d5eb18316edd102f008d132d675a7c3076814fdb5d0ba442874fec29b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 142
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 142, $this->getSourceContext()); })())) > 0)) {
            // line 143
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 143, $this->getSourceContext()); })()))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 144
            echo "    <ul class=\"list-unstyled\">";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 145, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 146
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "</ul>
    ";
            // line 149
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 149, $this->getSourceContext()); })()))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_718f628d5eb18316edd102f008d132d675a7c3076814fdb5d0ba442874fec29b->leave($__internal_718f628d5eb18316edd102f008d132d675a7c3076814fdb5d0ba442874fec29b_prof);

        
        $__internal_bef6622d860b4721a05030ce7a16ae0d465420c5d8ba6ec962c0e28ea233dbbf->leave($__internal_bef6622d860b4721a05030ce7a16ae0d465420c5d8ba6ec962c0e28ea233dbbf_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  650 => 149,  647 => 148,  639 => 146,  635 => 145,  633 => 144,  627 => 143,  625 => 142,  616 => 141,  606 => 136,  604 => 135,  602 => 134,  596 => 133,  587 => 132,  577 => 129,  575 => 128,  573 => 127,  567 => 126,  558 => 125,  548 => 122,  546 => 121,  537 => 120,  527 => 117,  525 => 116,  516 => 115,  506 => 112,  504 => 111,  495 => 110,  485 => 107,  483 => 106,  474 => 105,  464 => 102,  462 => 101,  460 => 100,  451 => 99,  441 => 96,  439 => 95,  437 => 94,  435 => 93,  429 => 92,  420 => 91,  409 => 85,  405 => 84,  390 => 83,  386 => 80,  383 => 77,  382 => 76,  381 => 75,  379 => 74,  377 => 73,  374 => 71,  372 => 70,  369 => 68,  367 => 67,  365 => 66,  356 => 64,  346 => 61,  344 => 59,  335 => 58,  325 => 55,  323 => 53,  314 => 52,  304 => 49,  302 => 48,  293 => 46,  283 => 43,  281 => 42,  272 => 41,  261 => 35,  259 => 34,  257 => 33,  254 => 31,  252 => 30,  250 => 29,  241 => 28,  230 => 24,  228 => 23,  226 => 22,  223 => 20,  221 => 19,  219 => 18,  210 => 17,  200 => 14,  198 => 13,  189 => 12,  179 => 9,  176 => 7,  174 => 6,  165 => 5,  155 => 141,  152 => 140,  149 => 138,  147 => 132,  144 => 131,  142 => 125,  139 => 124,  137 => 120,  134 => 119,  132 => 115,  129 => 114,  127 => 110,  124 => 109,  122 => 105,  119 => 104,  117 => 99,  114 => 98,  112 => 91,  109 => 90,  106 => 88,  104 => 64,  101 => 63,  99 => 58,  96 => 57,  94 => 52,  91 => 51,  89 => 46,  86 => 45,  84 => 41,  81 => 40,  78 => 38,  76 => 28,  73 => 27,  71 => 17,  68 => 16,  66 => 12,  63 => 11,  61 => 5,  58 => 4,  55 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_base_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- if 'radio-inline' in parent_label_class -%}
        {{- form_label(form, null, { widget: parent() }) -}}
    {%- else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {%- if widget is defined -%}
        {%- if required -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) -%}
        {%- endif -%}
        {%- if parent_label_class is defined -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) -%}
        {%- endif -%}
        {%- if label is not same as(false) and label is empty -%}
            {%- if label_format is not empty -%}
                {%- set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) -%}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
