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
        $__internal_ba24e4f3c1c70f5c686f06b58cf8dba2a747bae8fabd7a115f35a279094f3096 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba24e4f3c1c70f5c686f06b58cf8dba2a747bae8fabd7a115f35a279094f3096->enter($__internal_ba24e4f3c1c70f5c686f06b58cf8dba2a747bae8fabd7a115f35a279094f3096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_020244812a00e47ab0f808ee55175d68fff96755d52d92dc11677fcc62492d75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_020244812a00e47ab0f808ee55175d68fff96755d52d92dc11677fcc62492d75->enter($__internal_020244812a00e47ab0f808ee55175d68fff96755d52d92dc11677fcc62492d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_ba24e4f3c1c70f5c686f06b58cf8dba2a747bae8fabd7a115f35a279094f3096->leave($__internal_ba24e4f3c1c70f5c686f06b58cf8dba2a747bae8fabd7a115f35a279094f3096_prof);

        
        $__internal_020244812a00e47ab0f808ee55175d68fff96755d52d92dc11677fcc62492d75->leave($__internal_020244812a00e47ab0f808ee55175d68fff96755d52d92dc11677fcc62492d75_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_159a83967bfe8aa1eb12394c422d6089720aafd765cde521fef624777e2451a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_159a83967bfe8aa1eb12394c422d6089720aafd765cde521fef624777e2451a2->enter($__internal_159a83967bfe8aa1eb12394c422d6089720aafd765cde521fef624777e2451a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_33a7e3c6af89e852c9bae1a06bbb1fea9852012f9b462ddf01c35b8ae9bdac10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33a7e3c6af89e852c9bae1a06bbb1fea9852012f9b462ddf01c35b8ae9bdac10->enter($__internal_33a7e3c6af89e852c9bae1a06bbb1fea9852012f9b462ddf01c35b8ae9bdac10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_33a7e3c6af89e852c9bae1a06bbb1fea9852012f9b462ddf01c35b8ae9bdac10->leave($__internal_33a7e3c6af89e852c9bae1a06bbb1fea9852012f9b462ddf01c35b8ae9bdac10_prof);

        
        $__internal_159a83967bfe8aa1eb12394c422d6089720aafd765cde521fef624777e2451a2->leave($__internal_159a83967bfe8aa1eb12394c422d6089720aafd765cde521fef624777e2451a2_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_1a3567ea9e44be04024f48294e503feb8de88415184db31234178b2e5e39de8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a3567ea9e44be04024f48294e503feb8de88415184db31234178b2e5e39de8b->enter($__internal_1a3567ea9e44be04024f48294e503feb8de88415184db31234178b2e5e39de8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_ca18b5c2645229ba77d822d3abb8b045503f11dc5388e5a77eb4328e0f0b99ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca18b5c2645229ba77d822d3abb8b045503f11dc5388e5a77eb4328e0f0b99ac->enter($__internal_ca18b5c2645229ba77d822d3abb8b045503f11dc5388e5a77eb4328e0f0b99ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_ca18b5c2645229ba77d822d3abb8b045503f11dc5388e5a77eb4328e0f0b99ac->leave($__internal_ca18b5c2645229ba77d822d3abb8b045503f11dc5388e5a77eb4328e0f0b99ac_prof);

        
        $__internal_1a3567ea9e44be04024f48294e503feb8de88415184db31234178b2e5e39de8b->leave($__internal_1a3567ea9e44be04024f48294e503feb8de88415184db31234178b2e5e39de8b_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_f275b71584183c259bc6e9a1905575bbb5c53e32201a9f5c7cbae901987d3add = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f275b71584183c259bc6e9a1905575bbb5c53e32201a9f5c7cbae901987d3add->enter($__internal_f275b71584183c259bc6e9a1905575bbb5c53e32201a9f5c7cbae901987d3add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_6441a2d4a23f41ea85c7f178365f503780622703c9742e894b06b9e466c637f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6441a2d4a23f41ea85c7f178365f503780622703c9742e894b06b9e466c637f1->enter($__internal_6441a2d4a23f41ea85c7f178365f503780622703c9742e894b06b9e466c637f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_6441a2d4a23f41ea85c7f178365f503780622703c9742e894b06b9e466c637f1->leave($__internal_6441a2d4a23f41ea85c7f178365f503780622703c9742e894b06b9e466c637f1_prof);

        
        $__internal_f275b71584183c259bc6e9a1905575bbb5c53e32201a9f5c7cbae901987d3add->leave($__internal_f275b71584183c259bc6e9a1905575bbb5c53e32201a9f5c7cbae901987d3add_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_2db67c9fd16783b8e05ba430d77eb6ee4170092e52ad7e7cd9770a217cf65a9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2db67c9fd16783b8e05ba430d77eb6ee4170092e52ad7e7cd9770a217cf65a9c->enter($__internal_2db67c9fd16783b8e05ba430d77eb6ee4170092e52ad7e7cd9770a217cf65a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_8a389386591aa72ee4f18516cfdc901e650cb36a2f2c8a2ae3e17e3de1a67a1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a389386591aa72ee4f18516cfdc901e650cb36a2f2c8a2ae3e17e3de1a67a1a->enter($__internal_8a389386591aa72ee4f18516cfdc901e650cb36a2f2c8a2ae3e17e3de1a67a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_8a389386591aa72ee4f18516cfdc901e650cb36a2f2c8a2ae3e17e3de1a67a1a->leave($__internal_8a389386591aa72ee4f18516cfdc901e650cb36a2f2c8a2ae3e17e3de1a67a1a_prof);

        
        $__internal_2db67c9fd16783b8e05ba430d77eb6ee4170092e52ad7e7cd9770a217cf65a9c->leave($__internal_2db67c9fd16783b8e05ba430d77eb6ee4170092e52ad7e7cd9770a217cf65a9c_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_638255ce066fc249ca6ad09495cd7eacf8d23a1f3d469ae5b6d57f6c4d1b5297 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_638255ce066fc249ca6ad09495cd7eacf8d23a1f3d469ae5b6d57f6c4d1b5297->enter($__internal_638255ce066fc249ca6ad09495cd7eacf8d23a1f3d469ae5b6d57f6c4d1b5297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_55494de007863a7fadc316ed8d04e1a470f3fd7d0245167ca91aaff841d95389 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55494de007863a7fadc316ed8d04e1a470f3fd7d0245167ca91aaff841d95389->enter($__internal_55494de007863a7fadc316ed8d04e1a470f3fd7d0245167ca91aaff841d95389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_55494de007863a7fadc316ed8d04e1a470f3fd7d0245167ca91aaff841d95389->leave($__internal_55494de007863a7fadc316ed8d04e1a470f3fd7d0245167ca91aaff841d95389_prof);

        
        $__internal_638255ce066fc249ca6ad09495cd7eacf8d23a1f3d469ae5b6d57f6c4d1b5297->leave($__internal_638255ce066fc249ca6ad09495cd7eacf8d23a1f3d469ae5b6d57f6c4d1b5297_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_766f70fe05f501b4fe17386bf85640d8b227cfa7f0c57aae53ad18fc1a786c26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_766f70fe05f501b4fe17386bf85640d8b227cfa7f0c57aae53ad18fc1a786c26->enter($__internal_766f70fe05f501b4fe17386bf85640d8b227cfa7f0c57aae53ad18fc1a786c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_0c33e5e0eb545df7847aa618716b32eafff4afc401d0ff0dd55e584f328b9687 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c33e5e0eb545df7847aa618716b32eafff4afc401d0ff0dd55e584f328b9687->enter($__internal_0c33e5e0eb545df7847aa618716b32eafff4afc401d0ff0dd55e584f328b9687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_0c33e5e0eb545df7847aa618716b32eafff4afc401d0ff0dd55e584f328b9687->leave($__internal_0c33e5e0eb545df7847aa618716b32eafff4afc401d0ff0dd55e584f328b9687_prof);

        
        $__internal_766f70fe05f501b4fe17386bf85640d8b227cfa7f0c57aae53ad18fc1a786c26->leave($__internal_766f70fe05f501b4fe17386bf85640d8b227cfa7f0c57aae53ad18fc1a786c26_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_171827fce4b973223e8098b0ade1c48093d1a9a6d98a2b392251155766e7d911 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_171827fce4b973223e8098b0ade1c48093d1a9a6d98a2b392251155766e7d911->enter($__internal_171827fce4b973223e8098b0ade1c48093d1a9a6d98a2b392251155766e7d911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_ee816b2701e90fa6efae156cee2945e53ea9c705339bc35100200556700111a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee816b2701e90fa6efae156cee2945e53ea9c705339bc35100200556700111a1->enter($__internal_ee816b2701e90fa6efae156cee2945e53ea9c705339bc35100200556700111a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_ee816b2701e90fa6efae156cee2945e53ea9c705339bc35100200556700111a1->leave($__internal_ee816b2701e90fa6efae156cee2945e53ea9c705339bc35100200556700111a1_prof);

        
        $__internal_171827fce4b973223e8098b0ade1c48093d1a9a6d98a2b392251155766e7d911->leave($__internal_171827fce4b973223e8098b0ade1c48093d1a9a6d98a2b392251155766e7d911_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_29c127584b1114a543d342423977490f0762fbfb073611b435dd6d50fa49b448 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29c127584b1114a543d342423977490f0762fbfb073611b435dd6d50fa49b448->enter($__internal_29c127584b1114a543d342423977490f0762fbfb073611b435dd6d50fa49b448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_48679f6d52f20d17747634610fc5c8d95ed1c1e4db9e42a12fb2f7497249f388 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48679f6d52f20d17747634610fc5c8d95ed1c1e4db9e42a12fb2f7497249f388->enter($__internal_48679f6d52f20d17747634610fc5c8d95ed1c1e4db9e42a12fb2f7497249f388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_48679f6d52f20d17747634610fc5c8d95ed1c1e4db9e42a12fb2f7497249f388->leave($__internal_48679f6d52f20d17747634610fc5c8d95ed1c1e4db9e42a12fb2f7497249f388_prof);

        
        $__internal_29c127584b1114a543d342423977490f0762fbfb073611b435dd6d50fa49b448->leave($__internal_29c127584b1114a543d342423977490f0762fbfb073611b435dd6d50fa49b448_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_4f9e2bc2c6cfe873de6dc19c5c2af60e7dab6e79c9fa164afedf155b0de60308 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f9e2bc2c6cfe873de6dc19c5c2af60e7dab6e79c9fa164afedf155b0de60308->enter($__internal_4f9e2bc2c6cfe873de6dc19c5c2af60e7dab6e79c9fa164afedf155b0de60308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_e2e7909cd6868bd813a3a2af21842911d14e529220ac368d28b04ad16a93e1ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2e7909cd6868bd813a3a2af21842911d14e529220ac368d28b04ad16a93e1ae->enter($__internal_e2e7909cd6868bd813a3a2af21842911d14e529220ac368d28b04ad16a93e1ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_e2e7909cd6868bd813a3a2af21842911d14e529220ac368d28b04ad16a93e1ae->leave($__internal_e2e7909cd6868bd813a3a2af21842911d14e529220ac368d28b04ad16a93e1ae_prof);

        
        $__internal_4f9e2bc2c6cfe873de6dc19c5c2af60e7dab6e79c9fa164afedf155b0de60308->leave($__internal_4f9e2bc2c6cfe873de6dc19c5c2af60e7dab6e79c9fa164afedf155b0de60308_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_65ec5e82e7aada41156fa7c7820aaa659c00ade3bebf89c6d8dfd138cf12e95c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65ec5e82e7aada41156fa7c7820aaa659c00ade3bebf89c6d8dfd138cf12e95c->enter($__internal_65ec5e82e7aada41156fa7c7820aaa659c00ade3bebf89c6d8dfd138cf12e95c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_74dcc50dd7bd1dd73ae847ed89b5257b61a3d1b75b9bb325ee00c7f8c18a0e48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74dcc50dd7bd1dd73ae847ed89b5257b61a3d1b75b9bb325ee00c7f8c18a0e48->enter($__internal_74dcc50dd7bd1dd73ae847ed89b5257b61a3d1b75b9bb325ee00c7f8c18a0e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_74dcc50dd7bd1dd73ae847ed89b5257b61a3d1b75b9bb325ee00c7f8c18a0e48->leave($__internal_74dcc50dd7bd1dd73ae847ed89b5257b61a3d1b75b9bb325ee00c7f8c18a0e48_prof);

        
        $__internal_65ec5e82e7aada41156fa7c7820aaa659c00ade3bebf89c6d8dfd138cf12e95c->leave($__internal_65ec5e82e7aada41156fa7c7820aaa659c00ade3bebf89c6d8dfd138cf12e95c_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_cd10617b02f1eb152ee449017123acac5d81f69cd56a894a016308212a2d286b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd10617b02f1eb152ee449017123acac5d81f69cd56a894a016308212a2d286b->enter($__internal_cd10617b02f1eb152ee449017123acac5d81f69cd56a894a016308212a2d286b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_405c093836423edf9ab327d308bdda25bd327f4e5d90399da0c2e9694f4127a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_405c093836423edf9ab327d308bdda25bd327f4e5d90399da0c2e9694f4127a3->enter($__internal_405c093836423edf9ab327d308bdda25bd327f4e5d90399da0c2e9694f4127a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_405c093836423edf9ab327d308bdda25bd327f4e5d90399da0c2e9694f4127a3->leave($__internal_405c093836423edf9ab327d308bdda25bd327f4e5d90399da0c2e9694f4127a3_prof);

        
        $__internal_cd10617b02f1eb152ee449017123acac5d81f69cd56a894a016308212a2d286b->leave($__internal_cd10617b02f1eb152ee449017123acac5d81f69cd56a894a016308212a2d286b_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_27eadef91a3fc5561adb216ecd272ba1ae840a9296f9c661e96e552dd167e1c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27eadef91a3fc5561adb216ecd272ba1ae840a9296f9c661e96e552dd167e1c7->enter($__internal_27eadef91a3fc5561adb216ecd272ba1ae840a9296f9c661e96e552dd167e1c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_c9754416cc67e2b39372bd3db40eabaed0357dc2aeb6b30736341fce7bc8a301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9754416cc67e2b39372bd3db40eabaed0357dc2aeb6b30736341fce7bc8a301->enter($__internal_c9754416cc67e2b39372bd3db40eabaed0357dc2aeb6b30736341fce7bc8a301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_c9754416cc67e2b39372bd3db40eabaed0357dc2aeb6b30736341fce7bc8a301->leave($__internal_c9754416cc67e2b39372bd3db40eabaed0357dc2aeb6b30736341fce7bc8a301_prof);

        
        $__internal_27eadef91a3fc5561adb216ecd272ba1ae840a9296f9c661e96e552dd167e1c7->leave($__internal_27eadef91a3fc5561adb216ecd272ba1ae840a9296f9c661e96e552dd167e1c7_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_34ba59d3d74af24bd82991db3856c2b8b26e654cc1bb19c8a99934dee9cc687c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34ba59d3d74af24bd82991db3856c2b8b26e654cc1bb19c8a99934dee9cc687c->enter($__internal_34ba59d3d74af24bd82991db3856c2b8b26e654cc1bb19c8a99934dee9cc687c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_740a240c4c68d50fe1852e8be615589c8c85887086061b53f1a6caa42ec357a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_740a240c4c68d50fe1852e8be615589c8c85887086061b53f1a6caa42ec357a9->enter($__internal_740a240c4c68d50fe1852e8be615589c8c85887086061b53f1a6caa42ec357a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_740a240c4c68d50fe1852e8be615589c8c85887086061b53f1a6caa42ec357a9->leave($__internal_740a240c4c68d50fe1852e8be615589c8c85887086061b53f1a6caa42ec357a9_prof);

        
        $__internal_34ba59d3d74af24bd82991db3856c2b8b26e654cc1bb19c8a99934dee9cc687c->leave($__internal_34ba59d3d74af24bd82991db3856c2b8b26e654cc1bb19c8a99934dee9cc687c_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_de4f026de0ddeab2509a675039228b2ac00ee5e3cfaf2e3d782b77e56ee1650c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de4f026de0ddeab2509a675039228b2ac00ee5e3cfaf2e3d782b77e56ee1650c->enter($__internal_de4f026de0ddeab2509a675039228b2ac00ee5e3cfaf2e3d782b77e56ee1650c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_dd22e5442f36f1fd517feed9364bf1b00c0ac3443be07afc1702dd23b2f66478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd22e5442f36f1fd517feed9364bf1b00c0ac3443be07afc1702dd23b2f66478->enter($__internal_dd22e5442f36f1fd517feed9364bf1b00c0ac3443be07afc1702dd23b2f66478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_dd22e5442f36f1fd517feed9364bf1b00c0ac3443be07afc1702dd23b2f66478->leave($__internal_dd22e5442f36f1fd517feed9364bf1b00c0ac3443be07afc1702dd23b2f66478_prof);

        
        $__internal_de4f026de0ddeab2509a675039228b2ac00ee5e3cfaf2e3d782b77e56ee1650c->leave($__internal_de4f026de0ddeab2509a675039228b2ac00ee5e3cfaf2e3d782b77e56ee1650c_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_b476eebafa25ea828a5f7d2b8a81ad20ec4ae966c376e78181bce4e727b6cae1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b476eebafa25ea828a5f7d2b8a81ad20ec4ae966c376e78181bce4e727b6cae1->enter($__internal_b476eebafa25ea828a5f7d2b8a81ad20ec4ae966c376e78181bce4e727b6cae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_845545b5ed528bbc5dd2aca1b67a26d726d0f1ec9e622df1e46a37fedf4a3d2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_845545b5ed528bbc5dd2aca1b67a26d726d0f1ec9e622df1e46a37fedf4a3d2f->enter($__internal_845545b5ed528bbc5dd2aca1b67a26d726d0f1ec9e622df1e46a37fedf4a3d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_845545b5ed528bbc5dd2aca1b67a26d726d0f1ec9e622df1e46a37fedf4a3d2f->leave($__internal_845545b5ed528bbc5dd2aca1b67a26d726d0f1ec9e622df1e46a37fedf4a3d2f_prof);

        
        $__internal_b476eebafa25ea828a5f7d2b8a81ad20ec4ae966c376e78181bce4e727b6cae1->leave($__internal_b476eebafa25ea828a5f7d2b8a81ad20ec4ae966c376e78181bce4e727b6cae1_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_4727c87ff1e4570e692ec8f8a75e1e3b4909741f5f22d5033792631f6c0c8b96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4727c87ff1e4570e692ec8f8a75e1e3b4909741f5f22d5033792631f6c0c8b96->enter($__internal_4727c87ff1e4570e692ec8f8a75e1e3b4909741f5f22d5033792631f6c0c8b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_483a57a8a626ce27180cd214406f620fcf3e403b21afb345ccdcad092052cc5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_483a57a8a626ce27180cd214406f620fcf3e403b21afb345ccdcad092052cc5a->enter($__internal_483a57a8a626ce27180cd214406f620fcf3e403b21afb345ccdcad092052cc5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_483a57a8a626ce27180cd214406f620fcf3e403b21afb345ccdcad092052cc5a->leave($__internal_483a57a8a626ce27180cd214406f620fcf3e403b21afb345ccdcad092052cc5a_prof);

        
        $__internal_4727c87ff1e4570e692ec8f8a75e1e3b4909741f5f22d5033792631f6c0c8b96->leave($__internal_4727c87ff1e4570e692ec8f8a75e1e3b4909741f5f22d5033792631f6c0c8b96_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_9539191072fe8f613b9570d78b5de8c525c2baba2fddf8f3ee19fb2b6c6c23c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9539191072fe8f613b9570d78b5de8c525c2baba2fddf8f3ee19fb2b6c6c23c6->enter($__internal_9539191072fe8f613b9570d78b5de8c525c2baba2fddf8f3ee19fb2b6c6c23c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_45c42d9151991f7d3bff28bdbe1db4ea3fabcda91df99cd504ba1b731135bf69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45c42d9151991f7d3bff28bdbe1db4ea3fabcda91df99cd504ba1b731135bf69->enter($__internal_45c42d9151991f7d3bff28bdbe1db4ea3fabcda91df99cd504ba1b731135bf69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_45c42d9151991f7d3bff28bdbe1db4ea3fabcda91df99cd504ba1b731135bf69->leave($__internal_45c42d9151991f7d3bff28bdbe1db4ea3fabcda91df99cd504ba1b731135bf69_prof);

        
        $__internal_9539191072fe8f613b9570d78b5de8c525c2baba2fddf8f3ee19fb2b6c6c23c6->leave($__internal_9539191072fe8f613b9570d78b5de8c525c2baba2fddf8f3ee19fb2b6c6c23c6_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_778f3c37fe808fcb756d1d681803ad67e72f7c50009c2ec7d041d41e406b7add = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_778f3c37fe808fcb756d1d681803ad67e72f7c50009c2ec7d041d41e406b7add->enter($__internal_778f3c37fe808fcb756d1d681803ad67e72f7c50009c2ec7d041d41e406b7add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_9e22f79de63371c5478995f4af4c661a26961bd8e1b53e773f2f3710558c543e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e22f79de63371c5478995f4af4c661a26961bd8e1b53e773f2f3710558c543e->enter($__internal_9e22f79de63371c5478995f4af4c661a26961bd8e1b53e773f2f3710558c543e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_9e22f79de63371c5478995f4af4c661a26961bd8e1b53e773f2f3710558c543e->leave($__internal_9e22f79de63371c5478995f4af4c661a26961bd8e1b53e773f2f3710558c543e_prof);

        
        $__internal_778f3c37fe808fcb756d1d681803ad67e72f7c50009c2ec7d041d41e406b7add->leave($__internal_778f3c37fe808fcb756d1d681803ad67e72f7c50009c2ec7d041d41e406b7add_prof);

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
