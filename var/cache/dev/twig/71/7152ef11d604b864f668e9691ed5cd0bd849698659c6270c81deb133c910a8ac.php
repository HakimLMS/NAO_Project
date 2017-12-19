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
        $__internal_ae74bb1eb0d5148503e12e6c7e9c22c67c99915eaa5e29007f62ef3e7691d6f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae74bb1eb0d5148503e12e6c7e9c22c67c99915eaa5e29007f62ef3e7691d6f1->enter($__internal_ae74bb1eb0d5148503e12e6c7e9c22c67c99915eaa5e29007f62ef3e7691d6f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_a4aa451048fb9f8339a9188fa61d60e36198fa31055b21821f748b3282b6e6aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4aa451048fb9f8339a9188fa61d60e36198fa31055b21821f748b3282b6e6aa->enter($__internal_a4aa451048fb9f8339a9188fa61d60e36198fa31055b21821f748b3282b6e6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_ae74bb1eb0d5148503e12e6c7e9c22c67c99915eaa5e29007f62ef3e7691d6f1->leave($__internal_ae74bb1eb0d5148503e12e6c7e9c22c67c99915eaa5e29007f62ef3e7691d6f1_prof);

        
        $__internal_a4aa451048fb9f8339a9188fa61d60e36198fa31055b21821f748b3282b6e6aa->leave($__internal_a4aa451048fb9f8339a9188fa61d60e36198fa31055b21821f748b3282b6e6aa_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_e68be38013c0c715f077efcec0c5ad1852be2ff7bd020857bdc7298e22dec55d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e68be38013c0c715f077efcec0c5ad1852be2ff7bd020857bdc7298e22dec55d->enter($__internal_e68be38013c0c715f077efcec0c5ad1852be2ff7bd020857bdc7298e22dec55d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_51417a9d51147347d9cd2dd388f2062172d64253a8f539a03d37886956594e7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51417a9d51147347d9cd2dd388f2062172d64253a8f539a03d37886956594e7b->enter($__internal_51417a9d51147347d9cd2dd388f2062172d64253a8f539a03d37886956594e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_51417a9d51147347d9cd2dd388f2062172d64253a8f539a03d37886956594e7b->leave($__internal_51417a9d51147347d9cd2dd388f2062172d64253a8f539a03d37886956594e7b_prof);

        
        $__internal_e68be38013c0c715f077efcec0c5ad1852be2ff7bd020857bdc7298e22dec55d->leave($__internal_e68be38013c0c715f077efcec0c5ad1852be2ff7bd020857bdc7298e22dec55d_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_fef16468001af9c5287b14d34536fd59be3760f1236af300437b57ae14aff47f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fef16468001af9c5287b14d34536fd59be3760f1236af300437b57ae14aff47f->enter($__internal_fef16468001af9c5287b14d34536fd59be3760f1236af300437b57ae14aff47f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_9050579739995062aee198822c4e1bafdba93c7e35e9b13922b1e37203128104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9050579739995062aee198822c4e1bafdba93c7e35e9b13922b1e37203128104->enter($__internal_9050579739995062aee198822c4e1bafdba93c7e35e9b13922b1e37203128104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_9050579739995062aee198822c4e1bafdba93c7e35e9b13922b1e37203128104->leave($__internal_9050579739995062aee198822c4e1bafdba93c7e35e9b13922b1e37203128104_prof);

        
        $__internal_fef16468001af9c5287b14d34536fd59be3760f1236af300437b57ae14aff47f->leave($__internal_fef16468001af9c5287b14d34536fd59be3760f1236af300437b57ae14aff47f_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_da65e30ba24cfab26ce4f850f5456b78704ddcdf5cbe885aaa70642659bd4cdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da65e30ba24cfab26ce4f850f5456b78704ddcdf5cbe885aaa70642659bd4cdb->enter($__internal_da65e30ba24cfab26ce4f850f5456b78704ddcdf5cbe885aaa70642659bd4cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_b9b99a0890e4e8dbc3713dd3b5b0c4b158c6ac43e53a6cd1688bcd84574d42e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9b99a0890e4e8dbc3713dd3b5b0c4b158c6ac43e53a6cd1688bcd84574d42e9->enter($__internal_b9b99a0890e4e8dbc3713dd3b5b0c4b158c6ac43e53a6cd1688bcd84574d42e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_b9b99a0890e4e8dbc3713dd3b5b0c4b158c6ac43e53a6cd1688bcd84574d42e9->leave($__internal_b9b99a0890e4e8dbc3713dd3b5b0c4b158c6ac43e53a6cd1688bcd84574d42e9_prof);

        
        $__internal_da65e30ba24cfab26ce4f850f5456b78704ddcdf5cbe885aaa70642659bd4cdb->leave($__internal_da65e30ba24cfab26ce4f850f5456b78704ddcdf5cbe885aaa70642659bd4cdb_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_042421af87cc68a107f9c38c77432522a838fb7d15c4efdcd34b81f1be7f4583 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_042421af87cc68a107f9c38c77432522a838fb7d15c4efdcd34b81f1be7f4583->enter($__internal_042421af87cc68a107f9c38c77432522a838fb7d15c4efdcd34b81f1be7f4583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_16082bf410275d852afeeda4afe2612c4e66622db04b763a7b5f35e00bd15138 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16082bf410275d852afeeda4afe2612c4e66622db04b763a7b5f35e00bd15138->enter($__internal_16082bf410275d852afeeda4afe2612c4e66622db04b763a7b5f35e00bd15138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_16082bf410275d852afeeda4afe2612c4e66622db04b763a7b5f35e00bd15138->leave($__internal_16082bf410275d852afeeda4afe2612c4e66622db04b763a7b5f35e00bd15138_prof);

        
        $__internal_042421af87cc68a107f9c38c77432522a838fb7d15c4efdcd34b81f1be7f4583->leave($__internal_042421af87cc68a107f9c38c77432522a838fb7d15c4efdcd34b81f1be7f4583_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_9c401dd7862774b038f109012b3608b6de7d26b630f5bf1743866a7b59f308a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c401dd7862774b038f109012b3608b6de7d26b630f5bf1743866a7b59f308a9->enter($__internal_9c401dd7862774b038f109012b3608b6de7d26b630f5bf1743866a7b59f308a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_8298c50fc76ae701f9088af3924fe668016ef02550f1e89039f9e00d90f533db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8298c50fc76ae701f9088af3924fe668016ef02550f1e89039f9e00d90f533db->enter($__internal_8298c50fc76ae701f9088af3924fe668016ef02550f1e89039f9e00d90f533db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_8298c50fc76ae701f9088af3924fe668016ef02550f1e89039f9e00d90f533db->leave($__internal_8298c50fc76ae701f9088af3924fe668016ef02550f1e89039f9e00d90f533db_prof);

        
        $__internal_9c401dd7862774b038f109012b3608b6de7d26b630f5bf1743866a7b59f308a9->leave($__internal_9c401dd7862774b038f109012b3608b6de7d26b630f5bf1743866a7b59f308a9_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_91dbbb26a2967826c4516d2e7656a0d0155758b04981e6c6a172836ea9b7cd65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91dbbb26a2967826c4516d2e7656a0d0155758b04981e6c6a172836ea9b7cd65->enter($__internal_91dbbb26a2967826c4516d2e7656a0d0155758b04981e6c6a172836ea9b7cd65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_f6b751fa99414a188bb456b8b4855421b3dec9bc5003ff667f20a6331d24ead1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6b751fa99414a188bb456b8b4855421b3dec9bc5003ff667f20a6331d24ead1->enter($__internal_f6b751fa99414a188bb456b8b4855421b3dec9bc5003ff667f20a6331d24ead1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_f6b751fa99414a188bb456b8b4855421b3dec9bc5003ff667f20a6331d24ead1->leave($__internal_f6b751fa99414a188bb456b8b4855421b3dec9bc5003ff667f20a6331d24ead1_prof);

        
        $__internal_91dbbb26a2967826c4516d2e7656a0d0155758b04981e6c6a172836ea9b7cd65->leave($__internal_91dbbb26a2967826c4516d2e7656a0d0155758b04981e6c6a172836ea9b7cd65_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_fadeed769f60edc98bc3094bc5b755834b38fdf39353c571fa5588765b5f247d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fadeed769f60edc98bc3094bc5b755834b38fdf39353c571fa5588765b5f247d->enter($__internal_fadeed769f60edc98bc3094bc5b755834b38fdf39353c571fa5588765b5f247d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_93fa0c2401e5c701a755e9a9413d796ed387e0039710c691147e5c12e6cee0a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93fa0c2401e5c701a755e9a9413d796ed387e0039710c691147e5c12e6cee0a4->enter($__internal_93fa0c2401e5c701a755e9a9413d796ed387e0039710c691147e5c12e6cee0a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_93fa0c2401e5c701a755e9a9413d796ed387e0039710c691147e5c12e6cee0a4->leave($__internal_93fa0c2401e5c701a755e9a9413d796ed387e0039710c691147e5c12e6cee0a4_prof);

        
        $__internal_fadeed769f60edc98bc3094bc5b755834b38fdf39353c571fa5588765b5f247d->leave($__internal_fadeed769f60edc98bc3094bc5b755834b38fdf39353c571fa5588765b5f247d_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_cf8bceca56cd19b3abe3eb1e51ace5f3c9ff32652bab4be9542524fc0b3ac9d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf8bceca56cd19b3abe3eb1e51ace5f3c9ff32652bab4be9542524fc0b3ac9d9->enter($__internal_cf8bceca56cd19b3abe3eb1e51ace5f3c9ff32652bab4be9542524fc0b3ac9d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_58ddcb60595c02107abcd3de2cba4baf60f263147aa43b47798d375812b2eeae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58ddcb60595c02107abcd3de2cba4baf60f263147aa43b47798d375812b2eeae->enter($__internal_58ddcb60595c02107abcd3de2cba4baf60f263147aa43b47798d375812b2eeae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_58ddcb60595c02107abcd3de2cba4baf60f263147aa43b47798d375812b2eeae->leave($__internal_58ddcb60595c02107abcd3de2cba4baf60f263147aa43b47798d375812b2eeae_prof);

        
        $__internal_cf8bceca56cd19b3abe3eb1e51ace5f3c9ff32652bab4be9542524fc0b3ac9d9->leave($__internal_cf8bceca56cd19b3abe3eb1e51ace5f3c9ff32652bab4be9542524fc0b3ac9d9_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_3298609a86945bdfa30a5534e3cf3db1ace2f33f941c03e63a980f7c370e90a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3298609a86945bdfa30a5534e3cf3db1ace2f33f941c03e63a980f7c370e90a4->enter($__internal_3298609a86945bdfa30a5534e3cf3db1ace2f33f941c03e63a980f7c370e90a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_f947f981938405be085440c63db1ad339b5516f45a89872b225729d8cab80716 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f947f981938405be085440c63db1ad339b5516f45a89872b225729d8cab80716->enter($__internal_f947f981938405be085440c63db1ad339b5516f45a89872b225729d8cab80716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_f947f981938405be085440c63db1ad339b5516f45a89872b225729d8cab80716->leave($__internal_f947f981938405be085440c63db1ad339b5516f45a89872b225729d8cab80716_prof);

        
        $__internal_3298609a86945bdfa30a5534e3cf3db1ace2f33f941c03e63a980f7c370e90a4->leave($__internal_3298609a86945bdfa30a5534e3cf3db1ace2f33f941c03e63a980f7c370e90a4_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_751578554c8aaff11e4eced566d0de62ce536e66eb0e6d9ee84da5716b044cee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_751578554c8aaff11e4eced566d0de62ce536e66eb0e6d9ee84da5716b044cee->enter($__internal_751578554c8aaff11e4eced566d0de62ce536e66eb0e6d9ee84da5716b044cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_b62a666948be8f6f63bf488d0d5a78d0055a6d1a8ecede27c4803d67407325fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b62a666948be8f6f63bf488d0d5a78d0055a6d1a8ecede27c4803d67407325fd->enter($__internal_b62a666948be8f6f63bf488d0d5a78d0055a6d1a8ecede27c4803d67407325fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_b62a666948be8f6f63bf488d0d5a78d0055a6d1a8ecede27c4803d67407325fd->leave($__internal_b62a666948be8f6f63bf488d0d5a78d0055a6d1a8ecede27c4803d67407325fd_prof);

        
        $__internal_751578554c8aaff11e4eced566d0de62ce536e66eb0e6d9ee84da5716b044cee->leave($__internal_751578554c8aaff11e4eced566d0de62ce536e66eb0e6d9ee84da5716b044cee_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_7e928e9c8d48cf3bb4bfa9857b92532054b1f71d5344d3db5fc2cb636e4e6c2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e928e9c8d48cf3bb4bfa9857b92532054b1f71d5344d3db5fc2cb636e4e6c2e->enter($__internal_7e928e9c8d48cf3bb4bfa9857b92532054b1f71d5344d3db5fc2cb636e4e6c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_3f2649ab34e7ef19140e6565d10461c9d144f6c1d388fc3b67228a703a37dcc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f2649ab34e7ef19140e6565d10461c9d144f6c1d388fc3b67228a703a37dcc0->enter($__internal_3f2649ab34e7ef19140e6565d10461c9d144f6c1d388fc3b67228a703a37dcc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_3f2649ab34e7ef19140e6565d10461c9d144f6c1d388fc3b67228a703a37dcc0->leave($__internal_3f2649ab34e7ef19140e6565d10461c9d144f6c1d388fc3b67228a703a37dcc0_prof);

        
        $__internal_7e928e9c8d48cf3bb4bfa9857b92532054b1f71d5344d3db5fc2cb636e4e6c2e->leave($__internal_7e928e9c8d48cf3bb4bfa9857b92532054b1f71d5344d3db5fc2cb636e4e6c2e_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_422c465855549a2ef04ee197541244c28cf68dfeba0a78ef14652bc50ca88c43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_422c465855549a2ef04ee197541244c28cf68dfeba0a78ef14652bc50ca88c43->enter($__internal_422c465855549a2ef04ee197541244c28cf68dfeba0a78ef14652bc50ca88c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_a94c09d8a498b5237b6c1def3c4f78c647d3ef0d15506d5fedbaed35ad72d798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a94c09d8a498b5237b6c1def3c4f78c647d3ef0d15506d5fedbaed35ad72d798->enter($__internal_a94c09d8a498b5237b6c1def3c4f78c647d3ef0d15506d5fedbaed35ad72d798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a94c09d8a498b5237b6c1def3c4f78c647d3ef0d15506d5fedbaed35ad72d798->leave($__internal_a94c09d8a498b5237b6c1def3c4f78c647d3ef0d15506d5fedbaed35ad72d798_prof);

        
        $__internal_422c465855549a2ef04ee197541244c28cf68dfeba0a78ef14652bc50ca88c43->leave($__internal_422c465855549a2ef04ee197541244c28cf68dfeba0a78ef14652bc50ca88c43_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_3e3b13d868cd1272fe97a0b56790875ae2b1cb9eba10a7978a43fad4c7e1861f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e3b13d868cd1272fe97a0b56790875ae2b1cb9eba10a7978a43fad4c7e1861f->enter($__internal_3e3b13d868cd1272fe97a0b56790875ae2b1cb9eba10a7978a43fad4c7e1861f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_7e3d08a3537197fa3ca67162435f466ff3d1d05aa6ec3f16588e3cd55b88b5f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e3d08a3537197fa3ca67162435f466ff3d1d05aa6ec3f16588e3cd55b88b5f4->enter($__internal_7e3d08a3537197fa3ca67162435f466ff3d1d05aa6ec3f16588e3cd55b88b5f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_7e3d08a3537197fa3ca67162435f466ff3d1d05aa6ec3f16588e3cd55b88b5f4->leave($__internal_7e3d08a3537197fa3ca67162435f466ff3d1d05aa6ec3f16588e3cd55b88b5f4_prof);

        
        $__internal_3e3b13d868cd1272fe97a0b56790875ae2b1cb9eba10a7978a43fad4c7e1861f->leave($__internal_3e3b13d868cd1272fe97a0b56790875ae2b1cb9eba10a7978a43fad4c7e1861f_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_2b30462d0126a71e016d9544a95c7f48ec5609f46d3a7833ed0bfcecadc38125 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b30462d0126a71e016d9544a95c7f48ec5609f46d3a7833ed0bfcecadc38125->enter($__internal_2b30462d0126a71e016d9544a95c7f48ec5609f46d3a7833ed0bfcecadc38125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_989aaf29a6329a03d104c61cdd76fa0d45969b1147f84a7ef411928b19254677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_989aaf29a6329a03d104c61cdd76fa0d45969b1147f84a7ef411928b19254677->enter($__internal_989aaf29a6329a03d104c61cdd76fa0d45969b1147f84a7ef411928b19254677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_989aaf29a6329a03d104c61cdd76fa0d45969b1147f84a7ef411928b19254677->leave($__internal_989aaf29a6329a03d104c61cdd76fa0d45969b1147f84a7ef411928b19254677_prof);

        
        $__internal_2b30462d0126a71e016d9544a95c7f48ec5609f46d3a7833ed0bfcecadc38125->leave($__internal_2b30462d0126a71e016d9544a95c7f48ec5609f46d3a7833ed0bfcecadc38125_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_6c0706bea76e5e4cb4d5f35fe57ca8835d68fec6872dafc8299f3ad43a803c79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c0706bea76e5e4cb4d5f35fe57ca8835d68fec6872dafc8299f3ad43a803c79->enter($__internal_6c0706bea76e5e4cb4d5f35fe57ca8835d68fec6872dafc8299f3ad43a803c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_6e01e096390b692fbdab1fae7c756d48f733a8b9e54e4fc7ace7d8b300e4147b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e01e096390b692fbdab1fae7c756d48f733a8b9e54e4fc7ace7d8b300e4147b->enter($__internal_6e01e096390b692fbdab1fae7c756d48f733a8b9e54e4fc7ace7d8b300e4147b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6e01e096390b692fbdab1fae7c756d48f733a8b9e54e4fc7ace7d8b300e4147b->leave($__internal_6e01e096390b692fbdab1fae7c756d48f733a8b9e54e4fc7ace7d8b300e4147b_prof);

        
        $__internal_6c0706bea76e5e4cb4d5f35fe57ca8835d68fec6872dafc8299f3ad43a803c79->leave($__internal_6c0706bea76e5e4cb4d5f35fe57ca8835d68fec6872dafc8299f3ad43a803c79_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_1dd865d8c52ae7963b8657134750173f0d64f54b14462aea4e3250c9209d193b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dd865d8c52ae7963b8657134750173f0d64f54b14462aea4e3250c9209d193b->enter($__internal_1dd865d8c52ae7963b8657134750173f0d64f54b14462aea4e3250c9209d193b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_9f96aff49e0fb3f18b49775222e0f095662a8a8a463489d5b4ad315f2fed9246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f96aff49e0fb3f18b49775222e0f095662a8a8a463489d5b4ad315f2fed9246->enter($__internal_9f96aff49e0fb3f18b49775222e0f095662a8a8a463489d5b4ad315f2fed9246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_9f96aff49e0fb3f18b49775222e0f095662a8a8a463489d5b4ad315f2fed9246->leave($__internal_9f96aff49e0fb3f18b49775222e0f095662a8a8a463489d5b4ad315f2fed9246_prof);

        
        $__internal_1dd865d8c52ae7963b8657134750173f0d64f54b14462aea4e3250c9209d193b->leave($__internal_1dd865d8c52ae7963b8657134750173f0d64f54b14462aea4e3250c9209d193b_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_f1ab757852768d842e156e859a5cc6f291f66e5d1989fac7f1ea4af968b36ab8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1ab757852768d842e156e859a5cc6f291f66e5d1989fac7f1ea4af968b36ab8->enter($__internal_f1ab757852768d842e156e859a5cc6f291f66e5d1989fac7f1ea4af968b36ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_5becf2ecf3a0d9bc951cc977ff9646a5c6fb1717553715c9fc9697e5efb3bd30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5becf2ecf3a0d9bc951cc977ff9646a5c6fb1717553715c9fc9697e5efb3bd30->enter($__internal_5becf2ecf3a0d9bc951cc977ff9646a5c6fb1717553715c9fc9697e5efb3bd30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_5becf2ecf3a0d9bc951cc977ff9646a5c6fb1717553715c9fc9697e5efb3bd30->leave($__internal_5becf2ecf3a0d9bc951cc977ff9646a5c6fb1717553715c9fc9697e5efb3bd30_prof);

        
        $__internal_f1ab757852768d842e156e859a5cc6f291f66e5d1989fac7f1ea4af968b36ab8->leave($__internal_f1ab757852768d842e156e859a5cc6f291f66e5d1989fac7f1ea4af968b36ab8_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_ff64b8277759dabb49369826ae6eaf25b0354d77c612daacd0a929a27acf1fe8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff64b8277759dabb49369826ae6eaf25b0354d77c612daacd0a929a27acf1fe8->enter($__internal_ff64b8277759dabb49369826ae6eaf25b0354d77c612daacd0a929a27acf1fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_f2d7f4c934b4c25d623aabc63b971800bfae1c50444dffa5b378e4a91f703b83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2d7f4c934b4c25d623aabc63b971800bfae1c50444dffa5b378e4a91f703b83->enter($__internal_f2d7f4c934b4c25d623aabc63b971800bfae1c50444dffa5b378e4a91f703b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_f2d7f4c934b4c25d623aabc63b971800bfae1c50444dffa5b378e4a91f703b83->leave($__internal_f2d7f4c934b4c25d623aabc63b971800bfae1c50444dffa5b378e4a91f703b83_prof);

        
        $__internal_ff64b8277759dabb49369826ae6eaf25b0354d77c612daacd0a929a27acf1fe8->leave($__internal_ff64b8277759dabb49369826ae6eaf25b0354d77c612daacd0a929a27acf1fe8_prof);

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
", "bootstrap_3_layout.html.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
