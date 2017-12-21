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
        $__internal_19742c9b491013f9f7b45f46bcd98337df110be3a6d94e4f1745c2722a09068f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19742c9b491013f9f7b45f46bcd98337df110be3a6d94e4f1745c2722a09068f->enter($__internal_19742c9b491013f9f7b45f46bcd98337df110be3a6d94e4f1745c2722a09068f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_0b8b550c1ec1858bb3a3082cec6efa9a577d95ead1838d9147c749076c1723b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b8b550c1ec1858bb3a3082cec6efa9a577d95ead1838d9147c749076c1723b7->enter($__internal_0b8b550c1ec1858bb3a3082cec6efa9a577d95ead1838d9147c749076c1723b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_19742c9b491013f9f7b45f46bcd98337df110be3a6d94e4f1745c2722a09068f->leave($__internal_19742c9b491013f9f7b45f46bcd98337df110be3a6d94e4f1745c2722a09068f_prof);

        
        $__internal_0b8b550c1ec1858bb3a3082cec6efa9a577d95ead1838d9147c749076c1723b7->leave($__internal_0b8b550c1ec1858bb3a3082cec6efa9a577d95ead1838d9147c749076c1723b7_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_bdc41e5d392a6fccc17068de09a02c0479c81fe83b4587de8ff31af69acda40d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdc41e5d392a6fccc17068de09a02c0479c81fe83b4587de8ff31af69acda40d->enter($__internal_bdc41e5d392a6fccc17068de09a02c0479c81fe83b4587de8ff31af69acda40d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_1b1296661308ea74540b354e39430cfc4e7b7312a1d133c21f5390bc4ffaa822 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b1296661308ea74540b354e39430cfc4e7b7312a1d133c21f5390bc4ffaa822->enter($__internal_1b1296661308ea74540b354e39430cfc4e7b7312a1d133c21f5390bc4ffaa822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_1b1296661308ea74540b354e39430cfc4e7b7312a1d133c21f5390bc4ffaa822->leave($__internal_1b1296661308ea74540b354e39430cfc4e7b7312a1d133c21f5390bc4ffaa822_prof);

        
        $__internal_bdc41e5d392a6fccc17068de09a02c0479c81fe83b4587de8ff31af69acda40d->leave($__internal_bdc41e5d392a6fccc17068de09a02c0479c81fe83b4587de8ff31af69acda40d_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_0f3e7a7fee496a94127fe508be3751a90667a894f8264d9e4bf1e0cb259480c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f3e7a7fee496a94127fe508be3751a90667a894f8264d9e4bf1e0cb259480c8->enter($__internal_0f3e7a7fee496a94127fe508be3751a90667a894f8264d9e4bf1e0cb259480c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_2c1923a98b2211682d5edb258c4c64445ac913da6f1bf1f899d30647c4ce7947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c1923a98b2211682d5edb258c4c64445ac913da6f1bf1f899d30647c4ce7947->enter($__internal_2c1923a98b2211682d5edb258c4c64445ac913da6f1bf1f899d30647c4ce7947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_2c1923a98b2211682d5edb258c4c64445ac913da6f1bf1f899d30647c4ce7947->leave($__internal_2c1923a98b2211682d5edb258c4c64445ac913da6f1bf1f899d30647c4ce7947_prof);

        
        $__internal_0f3e7a7fee496a94127fe508be3751a90667a894f8264d9e4bf1e0cb259480c8->leave($__internal_0f3e7a7fee496a94127fe508be3751a90667a894f8264d9e4bf1e0cb259480c8_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_a733cbaba0bd0fdf988f2d7770705e2d296f21a626720e4997e272cc90d57fd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a733cbaba0bd0fdf988f2d7770705e2d296f21a626720e4997e272cc90d57fd1->enter($__internal_a733cbaba0bd0fdf988f2d7770705e2d296f21a626720e4997e272cc90d57fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_7015aa0fd94eaa68e4655d7b6d2c9a9ca2c6adbad11531879ff565d6915e339a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7015aa0fd94eaa68e4655d7b6d2c9a9ca2c6adbad11531879ff565d6915e339a->enter($__internal_7015aa0fd94eaa68e4655d7b6d2c9a9ca2c6adbad11531879ff565d6915e339a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_7015aa0fd94eaa68e4655d7b6d2c9a9ca2c6adbad11531879ff565d6915e339a->leave($__internal_7015aa0fd94eaa68e4655d7b6d2c9a9ca2c6adbad11531879ff565d6915e339a_prof);

        
        $__internal_a733cbaba0bd0fdf988f2d7770705e2d296f21a626720e4997e272cc90d57fd1->leave($__internal_a733cbaba0bd0fdf988f2d7770705e2d296f21a626720e4997e272cc90d57fd1_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_724bc613eb056356c661fc20b8d417972d2950cbe38923319e0d15cc9e1979a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_724bc613eb056356c661fc20b8d417972d2950cbe38923319e0d15cc9e1979a5->enter($__internal_724bc613eb056356c661fc20b8d417972d2950cbe38923319e0d15cc9e1979a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_c9cbae6d4ae51fb1ced326a2c201387abb1520d716e822795e976b741405008a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9cbae6d4ae51fb1ced326a2c201387abb1520d716e822795e976b741405008a->enter($__internal_c9cbae6d4ae51fb1ced326a2c201387abb1520d716e822795e976b741405008a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_c9cbae6d4ae51fb1ced326a2c201387abb1520d716e822795e976b741405008a->leave($__internal_c9cbae6d4ae51fb1ced326a2c201387abb1520d716e822795e976b741405008a_prof);

        
        $__internal_724bc613eb056356c661fc20b8d417972d2950cbe38923319e0d15cc9e1979a5->leave($__internal_724bc613eb056356c661fc20b8d417972d2950cbe38923319e0d15cc9e1979a5_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_31b2d0531dd94fdb0ba3de026bceb6d84bc28eaca7804a6497372b27f01cc808 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31b2d0531dd94fdb0ba3de026bceb6d84bc28eaca7804a6497372b27f01cc808->enter($__internal_31b2d0531dd94fdb0ba3de026bceb6d84bc28eaca7804a6497372b27f01cc808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_a126956248cb59dddb3a8530f7a1eb2ddba59033c67bf4ce245b3c33543f0b12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a126956248cb59dddb3a8530f7a1eb2ddba59033c67bf4ce245b3c33543f0b12->enter($__internal_a126956248cb59dddb3a8530f7a1eb2ddba59033c67bf4ce245b3c33543f0b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_a126956248cb59dddb3a8530f7a1eb2ddba59033c67bf4ce245b3c33543f0b12->leave($__internal_a126956248cb59dddb3a8530f7a1eb2ddba59033c67bf4ce245b3c33543f0b12_prof);

        
        $__internal_31b2d0531dd94fdb0ba3de026bceb6d84bc28eaca7804a6497372b27f01cc808->leave($__internal_31b2d0531dd94fdb0ba3de026bceb6d84bc28eaca7804a6497372b27f01cc808_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_09bb35174125c1bfd50a94bdf09502280d85f0fbfe9506dfeb6cb85133e1a724 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09bb35174125c1bfd50a94bdf09502280d85f0fbfe9506dfeb6cb85133e1a724->enter($__internal_09bb35174125c1bfd50a94bdf09502280d85f0fbfe9506dfeb6cb85133e1a724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_32923c81299ab61588a36be230dbd109483ebc492b4624f57336e54cf2b32031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32923c81299ab61588a36be230dbd109483ebc492b4624f57336e54cf2b32031->enter($__internal_32923c81299ab61588a36be230dbd109483ebc492b4624f57336e54cf2b32031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_32923c81299ab61588a36be230dbd109483ebc492b4624f57336e54cf2b32031->leave($__internal_32923c81299ab61588a36be230dbd109483ebc492b4624f57336e54cf2b32031_prof);

        
        $__internal_09bb35174125c1bfd50a94bdf09502280d85f0fbfe9506dfeb6cb85133e1a724->leave($__internal_09bb35174125c1bfd50a94bdf09502280d85f0fbfe9506dfeb6cb85133e1a724_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_2625ccf3aa323b19652abf3d0a087cc15076eead82fe62fe98b91b2b468c3059 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2625ccf3aa323b19652abf3d0a087cc15076eead82fe62fe98b91b2b468c3059->enter($__internal_2625ccf3aa323b19652abf3d0a087cc15076eead82fe62fe98b91b2b468c3059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_42a8abe08a1549f0cb3bc334f74b27fe806d6a28343867ae7f174647086d2b07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42a8abe08a1549f0cb3bc334f74b27fe806d6a28343867ae7f174647086d2b07->enter($__internal_42a8abe08a1549f0cb3bc334f74b27fe806d6a28343867ae7f174647086d2b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_42a8abe08a1549f0cb3bc334f74b27fe806d6a28343867ae7f174647086d2b07->leave($__internal_42a8abe08a1549f0cb3bc334f74b27fe806d6a28343867ae7f174647086d2b07_prof);

        
        $__internal_2625ccf3aa323b19652abf3d0a087cc15076eead82fe62fe98b91b2b468c3059->leave($__internal_2625ccf3aa323b19652abf3d0a087cc15076eead82fe62fe98b91b2b468c3059_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_01d6c45229bcb22b247c9d45d6ba798e91c597bb61b0dfb1ef0aa056d6ba320b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01d6c45229bcb22b247c9d45d6ba798e91c597bb61b0dfb1ef0aa056d6ba320b->enter($__internal_01d6c45229bcb22b247c9d45d6ba798e91c597bb61b0dfb1ef0aa056d6ba320b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_c3061f6de6ee467fdd2e5bdf5310126909c9dd9d671044d79b8db84e8bd44c5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3061f6de6ee467fdd2e5bdf5310126909c9dd9d671044d79b8db84e8bd44c5d->enter($__internal_c3061f6de6ee467fdd2e5bdf5310126909c9dd9d671044d79b8db84e8bd44c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_c3061f6de6ee467fdd2e5bdf5310126909c9dd9d671044d79b8db84e8bd44c5d->leave($__internal_c3061f6de6ee467fdd2e5bdf5310126909c9dd9d671044d79b8db84e8bd44c5d_prof);

        
        $__internal_01d6c45229bcb22b247c9d45d6ba798e91c597bb61b0dfb1ef0aa056d6ba320b->leave($__internal_01d6c45229bcb22b247c9d45d6ba798e91c597bb61b0dfb1ef0aa056d6ba320b_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_93ea48649f8b2d41061fa6c29a7fb3194b494615b87258c253bf41589d526da9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93ea48649f8b2d41061fa6c29a7fb3194b494615b87258c253bf41589d526da9->enter($__internal_93ea48649f8b2d41061fa6c29a7fb3194b494615b87258c253bf41589d526da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_fd7060ceaaecba732a7632716f53a7b889993a62b2bd4968043211e8e3b8fda2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd7060ceaaecba732a7632716f53a7b889993a62b2bd4968043211e8e3b8fda2->enter($__internal_fd7060ceaaecba732a7632716f53a7b889993a62b2bd4968043211e8e3b8fda2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_fd7060ceaaecba732a7632716f53a7b889993a62b2bd4968043211e8e3b8fda2->leave($__internal_fd7060ceaaecba732a7632716f53a7b889993a62b2bd4968043211e8e3b8fda2_prof);

        
        $__internal_93ea48649f8b2d41061fa6c29a7fb3194b494615b87258c253bf41589d526da9->leave($__internal_93ea48649f8b2d41061fa6c29a7fb3194b494615b87258c253bf41589d526da9_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_ed4151b712d3300c19107df9a2ac1ca63dc54ec74e371adc56ff987c0955927f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed4151b712d3300c19107df9a2ac1ca63dc54ec74e371adc56ff987c0955927f->enter($__internal_ed4151b712d3300c19107df9a2ac1ca63dc54ec74e371adc56ff987c0955927f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_e61d1d366f65fa5d0db0e4798341c258d9a0c0e0458c951d4d3d58b2583ca14a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e61d1d366f65fa5d0db0e4798341c258d9a0c0e0458c951d4d3d58b2583ca14a->enter($__internal_e61d1d366f65fa5d0db0e4798341c258d9a0c0e0458c951d4d3d58b2583ca14a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_e61d1d366f65fa5d0db0e4798341c258d9a0c0e0458c951d4d3d58b2583ca14a->leave($__internal_e61d1d366f65fa5d0db0e4798341c258d9a0c0e0458c951d4d3d58b2583ca14a_prof);

        
        $__internal_ed4151b712d3300c19107df9a2ac1ca63dc54ec74e371adc56ff987c0955927f->leave($__internal_ed4151b712d3300c19107df9a2ac1ca63dc54ec74e371adc56ff987c0955927f_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_fe822fca55bf79040b378fc189cc06b18fb7ffdec7d054ad4f3d7b7e0adf6336 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe822fca55bf79040b378fc189cc06b18fb7ffdec7d054ad4f3d7b7e0adf6336->enter($__internal_fe822fca55bf79040b378fc189cc06b18fb7ffdec7d054ad4f3d7b7e0adf6336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_b38daccfc6e87becbe3ac9fc1c5ba1c0ef37caab9c0c6a3f5706506dc0a0d998 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b38daccfc6e87becbe3ac9fc1c5ba1c0ef37caab9c0c6a3f5706506dc0a0d998->enter($__internal_b38daccfc6e87becbe3ac9fc1c5ba1c0ef37caab9c0c6a3f5706506dc0a0d998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_b38daccfc6e87becbe3ac9fc1c5ba1c0ef37caab9c0c6a3f5706506dc0a0d998->leave($__internal_b38daccfc6e87becbe3ac9fc1c5ba1c0ef37caab9c0c6a3f5706506dc0a0d998_prof);

        
        $__internal_fe822fca55bf79040b378fc189cc06b18fb7ffdec7d054ad4f3d7b7e0adf6336->leave($__internal_fe822fca55bf79040b378fc189cc06b18fb7ffdec7d054ad4f3d7b7e0adf6336_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_dacc19c48bf2e4ab008d8d52ab1517e6286d5f51e05c97ea3ed78ae8324e28b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dacc19c48bf2e4ab008d8d52ab1517e6286d5f51e05c97ea3ed78ae8324e28b3->enter($__internal_dacc19c48bf2e4ab008d8d52ab1517e6286d5f51e05c97ea3ed78ae8324e28b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_662bd0a7427fe53edafa9cd0bf787d9df98624b99182582537aad1fce81461ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_662bd0a7427fe53edafa9cd0bf787d9df98624b99182582537aad1fce81461ff->enter($__internal_662bd0a7427fe53edafa9cd0bf787d9df98624b99182582537aad1fce81461ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_662bd0a7427fe53edafa9cd0bf787d9df98624b99182582537aad1fce81461ff->leave($__internal_662bd0a7427fe53edafa9cd0bf787d9df98624b99182582537aad1fce81461ff_prof);

        
        $__internal_dacc19c48bf2e4ab008d8d52ab1517e6286d5f51e05c97ea3ed78ae8324e28b3->leave($__internal_dacc19c48bf2e4ab008d8d52ab1517e6286d5f51e05c97ea3ed78ae8324e28b3_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_60ea98c89f168a9de5b8d013c76dc3b6560bf75f06dddf19b04d7a49b4d5dd5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60ea98c89f168a9de5b8d013c76dc3b6560bf75f06dddf19b04d7a49b4d5dd5f->enter($__internal_60ea98c89f168a9de5b8d013c76dc3b6560bf75f06dddf19b04d7a49b4d5dd5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_aa089b406d4ac4cadb3f9905d4b641ff7aa9841f8ba0dc3d988e54623e3b3828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa089b406d4ac4cadb3f9905d4b641ff7aa9841f8ba0dc3d988e54623e3b3828->enter($__internal_aa089b406d4ac4cadb3f9905d4b641ff7aa9841f8ba0dc3d988e54623e3b3828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_aa089b406d4ac4cadb3f9905d4b641ff7aa9841f8ba0dc3d988e54623e3b3828->leave($__internal_aa089b406d4ac4cadb3f9905d4b641ff7aa9841f8ba0dc3d988e54623e3b3828_prof);

        
        $__internal_60ea98c89f168a9de5b8d013c76dc3b6560bf75f06dddf19b04d7a49b4d5dd5f->leave($__internal_60ea98c89f168a9de5b8d013c76dc3b6560bf75f06dddf19b04d7a49b4d5dd5f_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_c37fa3913a9fa5289d4c0629f5971179f2344aba852a189fe80d2af47a02ac67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c37fa3913a9fa5289d4c0629f5971179f2344aba852a189fe80d2af47a02ac67->enter($__internal_c37fa3913a9fa5289d4c0629f5971179f2344aba852a189fe80d2af47a02ac67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_6d92d205719f791d26d4cdc4a1c9f36c81fb93e5d5784b8dadf63959bb568c5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d92d205719f791d26d4cdc4a1c9f36c81fb93e5d5784b8dadf63959bb568c5e->enter($__internal_6d92d205719f791d26d4cdc4a1c9f36c81fb93e5d5784b8dadf63959bb568c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6d92d205719f791d26d4cdc4a1c9f36c81fb93e5d5784b8dadf63959bb568c5e->leave($__internal_6d92d205719f791d26d4cdc4a1c9f36c81fb93e5d5784b8dadf63959bb568c5e_prof);

        
        $__internal_c37fa3913a9fa5289d4c0629f5971179f2344aba852a189fe80d2af47a02ac67->leave($__internal_c37fa3913a9fa5289d4c0629f5971179f2344aba852a189fe80d2af47a02ac67_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_801b4a1fcf2df7b194c723762f52f1a594f7ba07c6facae65143c87512332463 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_801b4a1fcf2df7b194c723762f52f1a594f7ba07c6facae65143c87512332463->enter($__internal_801b4a1fcf2df7b194c723762f52f1a594f7ba07c6facae65143c87512332463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_f5f5b000f0f7678e06bd104a88f1d9827ebad1e19a95848de43d80b86cd2dfe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5f5b000f0f7678e06bd104a88f1d9827ebad1e19a95848de43d80b86cd2dfe0->enter($__internal_f5f5b000f0f7678e06bd104a88f1d9827ebad1e19a95848de43d80b86cd2dfe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_f5f5b000f0f7678e06bd104a88f1d9827ebad1e19a95848de43d80b86cd2dfe0->leave($__internal_f5f5b000f0f7678e06bd104a88f1d9827ebad1e19a95848de43d80b86cd2dfe0_prof);

        
        $__internal_801b4a1fcf2df7b194c723762f52f1a594f7ba07c6facae65143c87512332463->leave($__internal_801b4a1fcf2df7b194c723762f52f1a594f7ba07c6facae65143c87512332463_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_92885423532b2b031f13aa29e8102cd5a8236ff2780cb89dbdf3df123759287f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92885423532b2b031f13aa29e8102cd5a8236ff2780cb89dbdf3df123759287f->enter($__internal_92885423532b2b031f13aa29e8102cd5a8236ff2780cb89dbdf3df123759287f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_7390be508056f4238e10e0434293d705a42a22a42a3411456e2ed2512d364d04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7390be508056f4238e10e0434293d705a42a22a42a3411456e2ed2512d364d04->enter($__internal_7390be508056f4238e10e0434293d705a42a22a42a3411456e2ed2512d364d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_7390be508056f4238e10e0434293d705a42a22a42a3411456e2ed2512d364d04->leave($__internal_7390be508056f4238e10e0434293d705a42a22a42a3411456e2ed2512d364d04_prof);

        
        $__internal_92885423532b2b031f13aa29e8102cd5a8236ff2780cb89dbdf3df123759287f->leave($__internal_92885423532b2b031f13aa29e8102cd5a8236ff2780cb89dbdf3df123759287f_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_a7aa7ddef2be9fb5c4f6411c3fa0b4c908868f65a83952fa97581f481608ffd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7aa7ddef2be9fb5c4f6411c3fa0b4c908868f65a83952fa97581f481608ffd7->enter($__internal_a7aa7ddef2be9fb5c4f6411c3fa0b4c908868f65a83952fa97581f481608ffd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_790ddf149fb23375c16747e8388632504aa9434844794e00e48981f05709c0fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_790ddf149fb23375c16747e8388632504aa9434844794e00e48981f05709c0fa->enter($__internal_790ddf149fb23375c16747e8388632504aa9434844794e00e48981f05709c0fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_790ddf149fb23375c16747e8388632504aa9434844794e00e48981f05709c0fa->leave($__internal_790ddf149fb23375c16747e8388632504aa9434844794e00e48981f05709c0fa_prof);

        
        $__internal_a7aa7ddef2be9fb5c4f6411c3fa0b4c908868f65a83952fa97581f481608ffd7->leave($__internal_a7aa7ddef2be9fb5c4f6411c3fa0b4c908868f65a83952fa97581f481608ffd7_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_4f4833d983e5ad2c94da1ba8bf78836ddf92a39885d4aef91d338709d0d86342 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f4833d983e5ad2c94da1ba8bf78836ddf92a39885d4aef91d338709d0d86342->enter($__internal_4f4833d983e5ad2c94da1ba8bf78836ddf92a39885d4aef91d338709d0d86342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_4d93bb309477533c81fb32dbcf9d8530a2ffeb885e742755de88f7fd58948ece = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d93bb309477533c81fb32dbcf9d8530a2ffeb885e742755de88f7fd58948ece->enter($__internal_4d93bb309477533c81fb32dbcf9d8530a2ffeb885e742755de88f7fd58948ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_4d93bb309477533c81fb32dbcf9d8530a2ffeb885e742755de88f7fd58948ece->leave($__internal_4d93bb309477533c81fb32dbcf9d8530a2ffeb885e742755de88f7fd58948ece_prof);

        
        $__internal_4f4833d983e5ad2c94da1ba8bf78836ddf92a39885d4aef91d338709d0d86342->leave($__internal_4f4833d983e5ad2c94da1ba8bf78836ddf92a39885d4aef91d338709d0d86342_prof);

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
