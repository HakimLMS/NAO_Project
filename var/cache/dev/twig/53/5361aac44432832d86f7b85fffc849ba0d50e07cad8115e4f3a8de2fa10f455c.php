<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_5fe575c078ad6ca6e6a2dce20c9a2cd9f6f6c73b158921effcdff4351e6c7935 extends Twig_Template
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
        $__internal_b88e168df750a4b0c214a591bc3e83223b773bcb23b3258bfdab7dce7f64b1c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b88e168df750a4b0c214a591bc3e83223b773bcb23b3258bfdab7dce7f64b1c4->enter($__internal_b88e168df750a4b0c214a591bc3e83223b773bcb23b3258bfdab7dce7f64b1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_e7c64375609ac0f5c610db7e80861f022f1b7b160bede5823a5cf875ec90d5ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7c64375609ac0f5c610db7e80861f022f1b7b160bede5823a5cf875ec90d5ea->enter($__internal_e7c64375609ac0f5c610db7e80861f022f1b7b160bede5823a5cf875ec90d5ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_b88e168df750a4b0c214a591bc3e83223b773bcb23b3258bfdab7dce7f64b1c4->leave($__internal_b88e168df750a4b0c214a591bc3e83223b773bcb23b3258bfdab7dce7f64b1c4_prof);

        
        $__internal_e7c64375609ac0f5c610db7e80861f022f1b7b160bede5823a5cf875ec90d5ea->leave($__internal_e7c64375609ac0f5c610db7e80861f022f1b7b160bede5823a5cf875ec90d5ea_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_f8c7ab3ea36ddeb4d9d287be099443cf28ecc5b3c0f518144fe52bb3a5bdf1a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8c7ab3ea36ddeb4d9d287be099443cf28ecc5b3c0f518144fe52bb3a5bdf1a8->enter($__internal_f8c7ab3ea36ddeb4d9d287be099443cf28ecc5b3c0f518144fe52bb3a5bdf1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_8f884c142043423e5afcf2ad947394954038326bde7f405f886dde75c04763c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f884c142043423e5afcf2ad947394954038326bde7f405f886dde75c04763c4->enter($__internal_8f884c142043423e5afcf2ad947394954038326bde7f405f886dde75c04763c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_8f884c142043423e5afcf2ad947394954038326bde7f405f886dde75c04763c4->leave($__internal_8f884c142043423e5afcf2ad947394954038326bde7f405f886dde75c04763c4_prof);

        
        $__internal_f8c7ab3ea36ddeb4d9d287be099443cf28ecc5b3c0f518144fe52bb3a5bdf1a8->leave($__internal_f8c7ab3ea36ddeb4d9d287be099443cf28ecc5b3c0f518144fe52bb3a5bdf1a8_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_9d3e08bb88a22be186d033d937ce34dc08fbe8181d5b1e31435e70cccd2c6c26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d3e08bb88a22be186d033d937ce34dc08fbe8181d5b1e31435e70cccd2c6c26->enter($__internal_9d3e08bb88a22be186d033d937ce34dc08fbe8181d5b1e31435e70cccd2c6c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_81bffc60824b24407a38c9d6a5aa45c33b849ad3ef0d57d33376b63cb7eccdf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81bffc60824b24407a38c9d6a5aa45c33b849ad3ef0d57d33376b63cb7eccdf2->enter($__internal_81bffc60824b24407a38c9d6a5aa45c33b849ad3ef0d57d33376b63cb7eccdf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_81bffc60824b24407a38c9d6a5aa45c33b849ad3ef0d57d33376b63cb7eccdf2->leave($__internal_81bffc60824b24407a38c9d6a5aa45c33b849ad3ef0d57d33376b63cb7eccdf2_prof);

        
        $__internal_9d3e08bb88a22be186d033d937ce34dc08fbe8181d5b1e31435e70cccd2c6c26->leave($__internal_9d3e08bb88a22be186d033d937ce34dc08fbe8181d5b1e31435e70cccd2c6c26_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_833829f526861ccf1cd681781eb38edf8c3462ec34f9d61ad33221cfa6d8ee62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_833829f526861ccf1cd681781eb38edf8c3462ec34f9d61ad33221cfa6d8ee62->enter($__internal_833829f526861ccf1cd681781eb38edf8c3462ec34f9d61ad33221cfa6d8ee62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_d99a8e8127b5533424311957b2e65c1a42867dd70823414a795af2f0eeae1c12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d99a8e8127b5533424311957b2e65c1a42867dd70823414a795af2f0eeae1c12->enter($__internal_d99a8e8127b5533424311957b2e65c1a42867dd70823414a795af2f0eeae1c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_d99a8e8127b5533424311957b2e65c1a42867dd70823414a795af2f0eeae1c12->leave($__internal_d99a8e8127b5533424311957b2e65c1a42867dd70823414a795af2f0eeae1c12_prof);

        
        $__internal_833829f526861ccf1cd681781eb38edf8c3462ec34f9d61ad33221cfa6d8ee62->leave($__internal_833829f526861ccf1cd681781eb38edf8c3462ec34f9d61ad33221cfa6d8ee62_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_b22efd19df0a707ae35604a5c72be29272f81cb0d2cefade4862b29368401fb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b22efd19df0a707ae35604a5c72be29272f81cb0d2cefade4862b29368401fb1->enter($__internal_b22efd19df0a707ae35604a5c72be29272f81cb0d2cefade4862b29368401fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_a876caf31d5c6086fa4144e01a979f4135e2b929ddbcee2c615c6c9191826fb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a876caf31d5c6086fa4144e01a979f4135e2b929ddbcee2c615c6c9191826fb3->enter($__internal_a876caf31d5c6086fa4144e01a979f4135e2b929ddbcee2c615c6c9191826fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_a876caf31d5c6086fa4144e01a979f4135e2b929ddbcee2c615c6c9191826fb3->leave($__internal_a876caf31d5c6086fa4144e01a979f4135e2b929ddbcee2c615c6c9191826fb3_prof);

        
        $__internal_b22efd19df0a707ae35604a5c72be29272f81cb0d2cefade4862b29368401fb1->leave($__internal_b22efd19df0a707ae35604a5c72be29272f81cb0d2cefade4862b29368401fb1_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_0607755fbf60738d43e618c4136dff1115a84566f58f32507f4d643defabdc3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0607755fbf60738d43e618c4136dff1115a84566f58f32507f4d643defabdc3f->enter($__internal_0607755fbf60738d43e618c4136dff1115a84566f58f32507f4d643defabdc3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_7bbf92846818cbb6190e8580bd013476e3099654d8f75ba81df9326939ac70e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bbf92846818cbb6190e8580bd013476e3099654d8f75ba81df9326939ac70e0->enter($__internal_7bbf92846818cbb6190e8580bd013476e3099654d8f75ba81df9326939ac70e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_7bbf92846818cbb6190e8580bd013476e3099654d8f75ba81df9326939ac70e0->leave($__internal_7bbf92846818cbb6190e8580bd013476e3099654d8f75ba81df9326939ac70e0_prof);

        
        $__internal_0607755fbf60738d43e618c4136dff1115a84566f58f32507f4d643defabdc3f->leave($__internal_0607755fbf60738d43e618c4136dff1115a84566f58f32507f4d643defabdc3f_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_0b43e73007b7d7a0f471c3bd4e0319233cb790048a962fc8aee309576f263788 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b43e73007b7d7a0f471c3bd4e0319233cb790048a962fc8aee309576f263788->enter($__internal_0b43e73007b7d7a0f471c3bd4e0319233cb790048a962fc8aee309576f263788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_a930cbc0741a276f6180df0f1ad36070e6a37c7e2611004df3f11cd8cd1391e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a930cbc0741a276f6180df0f1ad36070e6a37c7e2611004df3f11cd8cd1391e8->enter($__internal_a930cbc0741a276f6180df0f1ad36070e6a37c7e2611004df3f11cd8cd1391e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_a930cbc0741a276f6180df0f1ad36070e6a37c7e2611004df3f11cd8cd1391e8->leave($__internal_a930cbc0741a276f6180df0f1ad36070e6a37c7e2611004df3f11cd8cd1391e8_prof);

        
        $__internal_0b43e73007b7d7a0f471c3bd4e0319233cb790048a962fc8aee309576f263788->leave($__internal_0b43e73007b7d7a0f471c3bd4e0319233cb790048a962fc8aee309576f263788_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_20e849cf89d7515e12b161e50ca9c94d134afdfe519df013730bc8a968ac2920 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20e849cf89d7515e12b161e50ca9c94d134afdfe519df013730bc8a968ac2920->enter($__internal_20e849cf89d7515e12b161e50ca9c94d134afdfe519df013730bc8a968ac2920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_de3c4f442e73e652edf492d64c68bbbd55f9653b4b218b1bfbea6fe2ca02d99d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de3c4f442e73e652edf492d64c68bbbd55f9653b4b218b1bfbea6fe2ca02d99d->enter($__internal_de3c4f442e73e652edf492d64c68bbbd55f9653b4b218b1bfbea6fe2ca02d99d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_de3c4f442e73e652edf492d64c68bbbd55f9653b4b218b1bfbea6fe2ca02d99d->leave($__internal_de3c4f442e73e652edf492d64c68bbbd55f9653b4b218b1bfbea6fe2ca02d99d_prof);

        
        $__internal_20e849cf89d7515e12b161e50ca9c94d134afdfe519df013730bc8a968ac2920->leave($__internal_20e849cf89d7515e12b161e50ca9c94d134afdfe519df013730bc8a968ac2920_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_12b7a8c8a03861c4e098b231ae0bbff0be1a83cb0cfd0665b83143c5be8c6e58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12b7a8c8a03861c4e098b231ae0bbff0be1a83cb0cfd0665b83143c5be8c6e58->enter($__internal_12b7a8c8a03861c4e098b231ae0bbff0be1a83cb0cfd0665b83143c5be8c6e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_72b73dd45e73d41f078dcac37d5fe9517ac961d5731dff44a60dbaae2d98e853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72b73dd45e73d41f078dcac37d5fe9517ac961d5731dff44a60dbaae2d98e853->enter($__internal_72b73dd45e73d41f078dcac37d5fe9517ac961d5731dff44a60dbaae2d98e853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_72b73dd45e73d41f078dcac37d5fe9517ac961d5731dff44a60dbaae2d98e853->leave($__internal_72b73dd45e73d41f078dcac37d5fe9517ac961d5731dff44a60dbaae2d98e853_prof);

        
        $__internal_12b7a8c8a03861c4e098b231ae0bbff0be1a83cb0cfd0665b83143c5be8c6e58->leave($__internal_12b7a8c8a03861c4e098b231ae0bbff0be1a83cb0cfd0665b83143c5be8c6e58_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_b70ce99cf6d4b659a9a98eb5bd94e5632497e60838062fbca7b5ba39a3783779 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b70ce99cf6d4b659a9a98eb5bd94e5632497e60838062fbca7b5ba39a3783779->enter($__internal_b70ce99cf6d4b659a9a98eb5bd94e5632497e60838062fbca7b5ba39a3783779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_70a94331621876a6989a8e5be3827e8ce6278cb7571f4adff4ca59273425c5d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70a94331621876a6989a8e5be3827e8ce6278cb7571f4adff4ca59273425c5d8->enter($__internal_70a94331621876a6989a8e5be3827e8ce6278cb7571f4adff4ca59273425c5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_70a94331621876a6989a8e5be3827e8ce6278cb7571f4adff4ca59273425c5d8->leave($__internal_70a94331621876a6989a8e5be3827e8ce6278cb7571f4adff4ca59273425c5d8_prof);

        
        $__internal_b70ce99cf6d4b659a9a98eb5bd94e5632497e60838062fbca7b5ba39a3783779->leave($__internal_b70ce99cf6d4b659a9a98eb5bd94e5632497e60838062fbca7b5ba39a3783779_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_ca108e3913e238e869ed5f8aba6347bac24dad780837ee8742386836c043dc16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca108e3913e238e869ed5f8aba6347bac24dad780837ee8742386836c043dc16->enter($__internal_ca108e3913e238e869ed5f8aba6347bac24dad780837ee8742386836c043dc16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_592c12d1375b66fa83613e26741b40968db91f84c908b4ce4bcd1577444fb960 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_592c12d1375b66fa83613e26741b40968db91f84c908b4ce4bcd1577444fb960->enter($__internal_592c12d1375b66fa83613e26741b40968db91f84c908b4ce4bcd1577444fb960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_592c12d1375b66fa83613e26741b40968db91f84c908b4ce4bcd1577444fb960->leave($__internal_592c12d1375b66fa83613e26741b40968db91f84c908b4ce4bcd1577444fb960_prof);

        
        $__internal_ca108e3913e238e869ed5f8aba6347bac24dad780837ee8742386836c043dc16->leave($__internal_ca108e3913e238e869ed5f8aba6347bac24dad780837ee8742386836c043dc16_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_d37169903ec7cdd5ec37b51d446c2b5d7f87678e8a5d34b3ec240406d7a6b708 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d37169903ec7cdd5ec37b51d446c2b5d7f87678e8a5d34b3ec240406d7a6b708->enter($__internal_d37169903ec7cdd5ec37b51d446c2b5d7f87678e8a5d34b3ec240406d7a6b708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_cf506e7b24a0c15afac2407435d4bbc3f7e6cc0135abf5f36d1973fc06552bad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf506e7b24a0c15afac2407435d4bbc3f7e6cc0135abf5f36d1973fc06552bad->enter($__internal_cf506e7b24a0c15afac2407435d4bbc3f7e6cc0135abf5f36d1973fc06552bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_cf506e7b24a0c15afac2407435d4bbc3f7e6cc0135abf5f36d1973fc06552bad->leave($__internal_cf506e7b24a0c15afac2407435d4bbc3f7e6cc0135abf5f36d1973fc06552bad_prof);

        
        $__internal_d37169903ec7cdd5ec37b51d446c2b5d7f87678e8a5d34b3ec240406d7a6b708->leave($__internal_d37169903ec7cdd5ec37b51d446c2b5d7f87678e8a5d34b3ec240406d7a6b708_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_ac9c10d5c69e06c8c3daa8a17f29c898fe1005623aa2d2b45dbce4002e7347c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac9c10d5c69e06c8c3daa8a17f29c898fe1005623aa2d2b45dbce4002e7347c7->enter($__internal_ac9c10d5c69e06c8c3daa8a17f29c898fe1005623aa2d2b45dbce4002e7347c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_9b611709b725df436c657809cd33a20e1d2190d609a12fc1355291d03fbec30e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b611709b725df436c657809cd33a20e1d2190d609a12fc1355291d03fbec30e->enter($__internal_9b611709b725df436c657809cd33a20e1d2190d609a12fc1355291d03fbec30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_9b611709b725df436c657809cd33a20e1d2190d609a12fc1355291d03fbec30e->leave($__internal_9b611709b725df436c657809cd33a20e1d2190d609a12fc1355291d03fbec30e_prof);

        
        $__internal_ac9c10d5c69e06c8c3daa8a17f29c898fe1005623aa2d2b45dbce4002e7347c7->leave($__internal_ac9c10d5c69e06c8c3daa8a17f29c898fe1005623aa2d2b45dbce4002e7347c7_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_92acd8e5e39e08abbcfddb3b6657e1cf4214a1198effc28a35b4ea85750729d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92acd8e5e39e08abbcfddb3b6657e1cf4214a1198effc28a35b4ea85750729d3->enter($__internal_92acd8e5e39e08abbcfddb3b6657e1cf4214a1198effc28a35b4ea85750729d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_93d2dc980c7bb8fecb06cfb938e98d58f090ad89bbfc1b9c59ec89a369a48eb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93d2dc980c7bb8fecb06cfb938e98d58f090ad89bbfc1b9c59ec89a369a48eb0->enter($__internal_93d2dc980c7bb8fecb06cfb938e98d58f090ad89bbfc1b9c59ec89a369a48eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_93d2dc980c7bb8fecb06cfb938e98d58f090ad89bbfc1b9c59ec89a369a48eb0->leave($__internal_93d2dc980c7bb8fecb06cfb938e98d58f090ad89bbfc1b9c59ec89a369a48eb0_prof);

        
        $__internal_92acd8e5e39e08abbcfddb3b6657e1cf4214a1198effc28a35b4ea85750729d3->leave($__internal_92acd8e5e39e08abbcfddb3b6657e1cf4214a1198effc28a35b4ea85750729d3_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_e9c4887ed67ba751be0104546b2325efb75d5c064ea932aae4d34be29decace6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9c4887ed67ba751be0104546b2325efb75d5c064ea932aae4d34be29decace6->enter($__internal_e9c4887ed67ba751be0104546b2325efb75d5c064ea932aae4d34be29decace6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_786206d20bace0f2bf347f55e3f7c318ab4cc0b67743238a1cc3e1356374a1b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_786206d20bace0f2bf347f55e3f7c318ab4cc0b67743238a1cc3e1356374a1b6->enter($__internal_786206d20bace0f2bf347f55e3f7c318ab4cc0b67743238a1cc3e1356374a1b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_786206d20bace0f2bf347f55e3f7c318ab4cc0b67743238a1cc3e1356374a1b6->leave($__internal_786206d20bace0f2bf347f55e3f7c318ab4cc0b67743238a1cc3e1356374a1b6_prof);

        
        $__internal_e9c4887ed67ba751be0104546b2325efb75d5c064ea932aae4d34be29decace6->leave($__internal_e9c4887ed67ba751be0104546b2325efb75d5c064ea932aae4d34be29decace6_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_11f702f592e042ea249beeebb0a7ab386ab4dce9932406b51011e90466f9d070 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11f702f592e042ea249beeebb0a7ab386ab4dce9932406b51011e90466f9d070->enter($__internal_11f702f592e042ea249beeebb0a7ab386ab4dce9932406b51011e90466f9d070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_a640a2bc8422fcf47989fb48fbd22f581f5b714a6429ff9066839f27f93517f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a640a2bc8422fcf47989fb48fbd22f581f5b714a6429ff9066839f27f93517f0->enter($__internal_a640a2bc8422fcf47989fb48fbd22f581f5b714a6429ff9066839f27f93517f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a640a2bc8422fcf47989fb48fbd22f581f5b714a6429ff9066839f27f93517f0->leave($__internal_a640a2bc8422fcf47989fb48fbd22f581f5b714a6429ff9066839f27f93517f0_prof);

        
        $__internal_11f702f592e042ea249beeebb0a7ab386ab4dce9932406b51011e90466f9d070->leave($__internal_11f702f592e042ea249beeebb0a7ab386ab4dce9932406b51011e90466f9d070_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_8eebce37b3c8c6ac07c75d0586e5812dc2b1cd047e06cea3f05c7fa8e78d1bd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eebce37b3c8c6ac07c75d0586e5812dc2b1cd047e06cea3f05c7fa8e78d1bd0->enter($__internal_8eebce37b3c8c6ac07c75d0586e5812dc2b1cd047e06cea3f05c7fa8e78d1bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_4d7b0c1b110eda69422d58e57b7d19e99bacffd58343de35ff50d895d05b8de0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d7b0c1b110eda69422d58e57b7d19e99bacffd58343de35ff50d895d05b8de0->enter($__internal_4d7b0c1b110eda69422d58e57b7d19e99bacffd58343de35ff50d895d05b8de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_4d7b0c1b110eda69422d58e57b7d19e99bacffd58343de35ff50d895d05b8de0->leave($__internal_4d7b0c1b110eda69422d58e57b7d19e99bacffd58343de35ff50d895d05b8de0_prof);

        
        $__internal_8eebce37b3c8c6ac07c75d0586e5812dc2b1cd047e06cea3f05c7fa8e78d1bd0->leave($__internal_8eebce37b3c8c6ac07c75d0586e5812dc2b1cd047e06cea3f05c7fa8e78d1bd0_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_3373c1cbf94a0103dae6d6da008e712d44537bd87d2dd72f2e984a3e6cf7148d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3373c1cbf94a0103dae6d6da008e712d44537bd87d2dd72f2e984a3e6cf7148d->enter($__internal_3373c1cbf94a0103dae6d6da008e712d44537bd87d2dd72f2e984a3e6cf7148d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_b65edc0d0bbe58acb34f5ad03dfefe766293779e3b77ba0949d112e9d682c870 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b65edc0d0bbe58acb34f5ad03dfefe766293779e3b77ba0949d112e9d682c870->enter($__internal_b65edc0d0bbe58acb34f5ad03dfefe766293779e3b77ba0949d112e9d682c870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_b65edc0d0bbe58acb34f5ad03dfefe766293779e3b77ba0949d112e9d682c870->leave($__internal_b65edc0d0bbe58acb34f5ad03dfefe766293779e3b77ba0949d112e9d682c870_prof);

        
        $__internal_3373c1cbf94a0103dae6d6da008e712d44537bd87d2dd72f2e984a3e6cf7148d->leave($__internal_3373c1cbf94a0103dae6d6da008e712d44537bd87d2dd72f2e984a3e6cf7148d_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_1eddf32082cee216958d5bd3100a80327401bd54ab1ff2501097f4cf210865f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eddf32082cee216958d5bd3100a80327401bd54ab1ff2501097f4cf210865f4->enter($__internal_1eddf32082cee216958d5bd3100a80327401bd54ab1ff2501097f4cf210865f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_4b7573c4eddefb53abe379a2ce5e8164946270f31521e86e668b945d0345b74e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b7573c4eddefb53abe379a2ce5e8164946270f31521e86e668b945d0345b74e->enter($__internal_4b7573c4eddefb53abe379a2ce5e8164946270f31521e86e668b945d0345b74e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_4b7573c4eddefb53abe379a2ce5e8164946270f31521e86e668b945d0345b74e->leave($__internal_4b7573c4eddefb53abe379a2ce5e8164946270f31521e86e668b945d0345b74e_prof);

        
        $__internal_1eddf32082cee216958d5bd3100a80327401bd54ab1ff2501097f4cf210865f4->leave($__internal_1eddf32082cee216958d5bd3100a80327401bd54ab1ff2501097f4cf210865f4_prof);

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
