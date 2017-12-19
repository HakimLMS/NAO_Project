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
        $__internal_51f81cc6478c004115b11b9eb8c6e894380421f4c385479237bdffcd158d3b60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51f81cc6478c004115b11b9eb8c6e894380421f4c385479237bdffcd158d3b60->enter($__internal_51f81cc6478c004115b11b9eb8c6e894380421f4c385479237bdffcd158d3b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_32a52dc3ca63d3111a228b87ea1d07b394931a8ccc944f32b28a68221092442f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32a52dc3ca63d3111a228b87ea1d07b394931a8ccc944f32b28a68221092442f->enter($__internal_32a52dc3ca63d3111a228b87ea1d07b394931a8ccc944f32b28a68221092442f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_51f81cc6478c004115b11b9eb8c6e894380421f4c385479237bdffcd158d3b60->leave($__internal_51f81cc6478c004115b11b9eb8c6e894380421f4c385479237bdffcd158d3b60_prof);

        
        $__internal_32a52dc3ca63d3111a228b87ea1d07b394931a8ccc944f32b28a68221092442f->leave($__internal_32a52dc3ca63d3111a228b87ea1d07b394931a8ccc944f32b28a68221092442f_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_742ef9a979d7b3e4a8d32ec3948f9806eb083290887e110895a34dbbeab53d5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_742ef9a979d7b3e4a8d32ec3948f9806eb083290887e110895a34dbbeab53d5e->enter($__internal_742ef9a979d7b3e4a8d32ec3948f9806eb083290887e110895a34dbbeab53d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_96a74acd2210aff2bb3445c62456674d2d22b9d34bc10d458e99396a443a1a55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96a74acd2210aff2bb3445c62456674d2d22b9d34bc10d458e99396a443a1a55->enter($__internal_96a74acd2210aff2bb3445c62456674d2d22b9d34bc10d458e99396a443a1a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_96a74acd2210aff2bb3445c62456674d2d22b9d34bc10d458e99396a443a1a55->leave($__internal_96a74acd2210aff2bb3445c62456674d2d22b9d34bc10d458e99396a443a1a55_prof);

        
        $__internal_742ef9a979d7b3e4a8d32ec3948f9806eb083290887e110895a34dbbeab53d5e->leave($__internal_742ef9a979d7b3e4a8d32ec3948f9806eb083290887e110895a34dbbeab53d5e_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_0030ac5d9b8e0bcd7a699751e56edb8d47fc6ca96574ff269ae263a77720d63d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0030ac5d9b8e0bcd7a699751e56edb8d47fc6ca96574ff269ae263a77720d63d->enter($__internal_0030ac5d9b8e0bcd7a699751e56edb8d47fc6ca96574ff269ae263a77720d63d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_49f4b0882366df2bd27ee674e25336fb936e31753a4908ee59ce6a809801a369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49f4b0882366df2bd27ee674e25336fb936e31753a4908ee59ce6a809801a369->enter($__internal_49f4b0882366df2bd27ee674e25336fb936e31753a4908ee59ce6a809801a369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_49f4b0882366df2bd27ee674e25336fb936e31753a4908ee59ce6a809801a369->leave($__internal_49f4b0882366df2bd27ee674e25336fb936e31753a4908ee59ce6a809801a369_prof);

        
        $__internal_0030ac5d9b8e0bcd7a699751e56edb8d47fc6ca96574ff269ae263a77720d63d->leave($__internal_0030ac5d9b8e0bcd7a699751e56edb8d47fc6ca96574ff269ae263a77720d63d_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_e5824ca7df9a71d38920b1cdd37f86b90e86a27c091cf4e86049b21c23a1a316 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5824ca7df9a71d38920b1cdd37f86b90e86a27c091cf4e86049b21c23a1a316->enter($__internal_e5824ca7df9a71d38920b1cdd37f86b90e86a27c091cf4e86049b21c23a1a316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_146499813e06de45f73ad5ac3c17b22363ca96cd4032178638334c34e4945c53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_146499813e06de45f73ad5ac3c17b22363ca96cd4032178638334c34e4945c53->enter($__internal_146499813e06de45f73ad5ac3c17b22363ca96cd4032178638334c34e4945c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_146499813e06de45f73ad5ac3c17b22363ca96cd4032178638334c34e4945c53->leave($__internal_146499813e06de45f73ad5ac3c17b22363ca96cd4032178638334c34e4945c53_prof);

        
        $__internal_e5824ca7df9a71d38920b1cdd37f86b90e86a27c091cf4e86049b21c23a1a316->leave($__internal_e5824ca7df9a71d38920b1cdd37f86b90e86a27c091cf4e86049b21c23a1a316_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_8f5a3810638e4ac0e865ff027b628ea54e9ee100d278612fe09575c39925b650 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f5a3810638e4ac0e865ff027b628ea54e9ee100d278612fe09575c39925b650->enter($__internal_8f5a3810638e4ac0e865ff027b628ea54e9ee100d278612fe09575c39925b650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_259d28ec0d5a65c8e55d85ba76ba9c03523f04c2e7ec8bf9390506e4d1dfbbc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_259d28ec0d5a65c8e55d85ba76ba9c03523f04c2e7ec8bf9390506e4d1dfbbc1->enter($__internal_259d28ec0d5a65c8e55d85ba76ba9c03523f04c2e7ec8bf9390506e4d1dfbbc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_259d28ec0d5a65c8e55d85ba76ba9c03523f04c2e7ec8bf9390506e4d1dfbbc1->leave($__internal_259d28ec0d5a65c8e55d85ba76ba9c03523f04c2e7ec8bf9390506e4d1dfbbc1_prof);

        
        $__internal_8f5a3810638e4ac0e865ff027b628ea54e9ee100d278612fe09575c39925b650->leave($__internal_8f5a3810638e4ac0e865ff027b628ea54e9ee100d278612fe09575c39925b650_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_b6e2a3b92e7311caceec16bdd1c6afbdd4865b059276fef1756d5d26490567e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6e2a3b92e7311caceec16bdd1c6afbdd4865b059276fef1756d5d26490567e0->enter($__internal_b6e2a3b92e7311caceec16bdd1c6afbdd4865b059276fef1756d5d26490567e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_301f612348215c8e34d0afdd7dc09fcf122ea635babcdae1b9331b94842caef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_301f612348215c8e34d0afdd7dc09fcf122ea635babcdae1b9331b94842caef3->enter($__internal_301f612348215c8e34d0afdd7dc09fcf122ea635babcdae1b9331b94842caef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_301f612348215c8e34d0afdd7dc09fcf122ea635babcdae1b9331b94842caef3->leave($__internal_301f612348215c8e34d0afdd7dc09fcf122ea635babcdae1b9331b94842caef3_prof);

        
        $__internal_b6e2a3b92e7311caceec16bdd1c6afbdd4865b059276fef1756d5d26490567e0->leave($__internal_b6e2a3b92e7311caceec16bdd1c6afbdd4865b059276fef1756d5d26490567e0_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_5a4a61701b438884db292f06bf1db47e95e3e752e941fcf1277a410db47cb618 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a4a61701b438884db292f06bf1db47e95e3e752e941fcf1277a410db47cb618->enter($__internal_5a4a61701b438884db292f06bf1db47e95e3e752e941fcf1277a410db47cb618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_677f916fead6d308c148aaecec796d4efc8ef4410a0f86e22d5a71749b5f4101 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_677f916fead6d308c148aaecec796d4efc8ef4410a0f86e22d5a71749b5f4101->enter($__internal_677f916fead6d308c148aaecec796d4efc8ef4410a0f86e22d5a71749b5f4101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_677f916fead6d308c148aaecec796d4efc8ef4410a0f86e22d5a71749b5f4101->leave($__internal_677f916fead6d308c148aaecec796d4efc8ef4410a0f86e22d5a71749b5f4101_prof);

        
        $__internal_5a4a61701b438884db292f06bf1db47e95e3e752e941fcf1277a410db47cb618->leave($__internal_5a4a61701b438884db292f06bf1db47e95e3e752e941fcf1277a410db47cb618_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_df8bcba5dcd7db771ff1c22d0c24e9758d516b01d673564927102e48adbaeb25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df8bcba5dcd7db771ff1c22d0c24e9758d516b01d673564927102e48adbaeb25->enter($__internal_df8bcba5dcd7db771ff1c22d0c24e9758d516b01d673564927102e48adbaeb25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_e3efc10bb76e89ce404886da3e97d2f48f1f8cab0705d12e3d9b753da45c4583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3efc10bb76e89ce404886da3e97d2f48f1f8cab0705d12e3d9b753da45c4583->enter($__internal_e3efc10bb76e89ce404886da3e97d2f48f1f8cab0705d12e3d9b753da45c4583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_e3efc10bb76e89ce404886da3e97d2f48f1f8cab0705d12e3d9b753da45c4583->leave($__internal_e3efc10bb76e89ce404886da3e97d2f48f1f8cab0705d12e3d9b753da45c4583_prof);

        
        $__internal_df8bcba5dcd7db771ff1c22d0c24e9758d516b01d673564927102e48adbaeb25->leave($__internal_df8bcba5dcd7db771ff1c22d0c24e9758d516b01d673564927102e48adbaeb25_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_245d19f134a0280ab20bc38caf95c992bf47398e9198cd29c5a80082e5c3bf1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_245d19f134a0280ab20bc38caf95c992bf47398e9198cd29c5a80082e5c3bf1b->enter($__internal_245d19f134a0280ab20bc38caf95c992bf47398e9198cd29c5a80082e5c3bf1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_a7a1b2cdeb43786fa6876cd5dba823dc8ddb16760c0c5915e4e2dcaa5bd7da1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7a1b2cdeb43786fa6876cd5dba823dc8ddb16760c0c5915e4e2dcaa5bd7da1e->enter($__internal_a7a1b2cdeb43786fa6876cd5dba823dc8ddb16760c0c5915e4e2dcaa5bd7da1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_a7a1b2cdeb43786fa6876cd5dba823dc8ddb16760c0c5915e4e2dcaa5bd7da1e->leave($__internal_a7a1b2cdeb43786fa6876cd5dba823dc8ddb16760c0c5915e4e2dcaa5bd7da1e_prof);

        
        $__internal_245d19f134a0280ab20bc38caf95c992bf47398e9198cd29c5a80082e5c3bf1b->leave($__internal_245d19f134a0280ab20bc38caf95c992bf47398e9198cd29c5a80082e5c3bf1b_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_f5c9e2bce0a022eb0f0bf84f4b9769d3d7c677f5aac53c176ed3e3ccbc566984 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5c9e2bce0a022eb0f0bf84f4b9769d3d7c677f5aac53c176ed3e3ccbc566984->enter($__internal_f5c9e2bce0a022eb0f0bf84f4b9769d3d7c677f5aac53c176ed3e3ccbc566984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_3a8a0853c1af16fde0b33a676a77ff7391f78c7a632e27d389db3acdc87daa22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a8a0853c1af16fde0b33a676a77ff7391f78c7a632e27d389db3acdc87daa22->enter($__internal_3a8a0853c1af16fde0b33a676a77ff7391f78c7a632e27d389db3acdc87daa22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_3a8a0853c1af16fde0b33a676a77ff7391f78c7a632e27d389db3acdc87daa22->leave($__internal_3a8a0853c1af16fde0b33a676a77ff7391f78c7a632e27d389db3acdc87daa22_prof);

        
        $__internal_f5c9e2bce0a022eb0f0bf84f4b9769d3d7c677f5aac53c176ed3e3ccbc566984->leave($__internal_f5c9e2bce0a022eb0f0bf84f4b9769d3d7c677f5aac53c176ed3e3ccbc566984_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_17a2692b9fca07d8eb8db4eedebb5e6337940a2903bf71135bb0197e9c960234 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17a2692b9fca07d8eb8db4eedebb5e6337940a2903bf71135bb0197e9c960234->enter($__internal_17a2692b9fca07d8eb8db4eedebb5e6337940a2903bf71135bb0197e9c960234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_ba09fa8ade7366dd44d84f63fa1693fa7d1cb59104232f49de25e83c04373b30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba09fa8ade7366dd44d84f63fa1693fa7d1cb59104232f49de25e83c04373b30->enter($__internal_ba09fa8ade7366dd44d84f63fa1693fa7d1cb59104232f49de25e83c04373b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_ba09fa8ade7366dd44d84f63fa1693fa7d1cb59104232f49de25e83c04373b30->leave($__internal_ba09fa8ade7366dd44d84f63fa1693fa7d1cb59104232f49de25e83c04373b30_prof);

        
        $__internal_17a2692b9fca07d8eb8db4eedebb5e6337940a2903bf71135bb0197e9c960234->leave($__internal_17a2692b9fca07d8eb8db4eedebb5e6337940a2903bf71135bb0197e9c960234_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_73219f5a69cccdabe182f3a479ef0c62b05e822f64f3ccaef7804a2e338ea8e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73219f5a69cccdabe182f3a479ef0c62b05e822f64f3ccaef7804a2e338ea8e5->enter($__internal_73219f5a69cccdabe182f3a479ef0c62b05e822f64f3ccaef7804a2e338ea8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_d1a6f2a9b526ca4a4bb6450041ab9575f84fbe3df042a7b41e7a2d75b52e5b81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1a6f2a9b526ca4a4bb6450041ab9575f84fbe3df042a7b41e7a2d75b52e5b81->enter($__internal_d1a6f2a9b526ca4a4bb6450041ab9575f84fbe3df042a7b41e7a2d75b52e5b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_d1a6f2a9b526ca4a4bb6450041ab9575f84fbe3df042a7b41e7a2d75b52e5b81->leave($__internal_d1a6f2a9b526ca4a4bb6450041ab9575f84fbe3df042a7b41e7a2d75b52e5b81_prof);

        
        $__internal_73219f5a69cccdabe182f3a479ef0c62b05e822f64f3ccaef7804a2e338ea8e5->leave($__internal_73219f5a69cccdabe182f3a479ef0c62b05e822f64f3ccaef7804a2e338ea8e5_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_c560dd723e5fa90bd1d0c93ccc1f069f58c841eb8cf410f4963aaf6955538a5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c560dd723e5fa90bd1d0c93ccc1f069f58c841eb8cf410f4963aaf6955538a5a->enter($__internal_c560dd723e5fa90bd1d0c93ccc1f069f58c841eb8cf410f4963aaf6955538a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_9e2092abe1d4c93bb664197f27ceae3982dcba916d0af31f0c46f84e3e4e6bdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e2092abe1d4c93bb664197f27ceae3982dcba916d0af31f0c46f84e3e4e6bdf->enter($__internal_9e2092abe1d4c93bb664197f27ceae3982dcba916d0af31f0c46f84e3e4e6bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_9e2092abe1d4c93bb664197f27ceae3982dcba916d0af31f0c46f84e3e4e6bdf->leave($__internal_9e2092abe1d4c93bb664197f27ceae3982dcba916d0af31f0c46f84e3e4e6bdf_prof);

        
        $__internal_c560dd723e5fa90bd1d0c93ccc1f069f58c841eb8cf410f4963aaf6955538a5a->leave($__internal_c560dd723e5fa90bd1d0c93ccc1f069f58c841eb8cf410f4963aaf6955538a5a_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_d4c7cde92f1fd766752de8907b8d9a2d47135879c607740ca34ff4f2e5780013 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4c7cde92f1fd766752de8907b8d9a2d47135879c607740ca34ff4f2e5780013->enter($__internal_d4c7cde92f1fd766752de8907b8d9a2d47135879c607740ca34ff4f2e5780013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_ae56a0aeae455fde2c05abed63555df9a43328b544b9154effa62484bf9fe581 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae56a0aeae455fde2c05abed63555df9a43328b544b9154effa62484bf9fe581->enter($__internal_ae56a0aeae455fde2c05abed63555df9a43328b544b9154effa62484bf9fe581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ae56a0aeae455fde2c05abed63555df9a43328b544b9154effa62484bf9fe581->leave($__internal_ae56a0aeae455fde2c05abed63555df9a43328b544b9154effa62484bf9fe581_prof);

        
        $__internal_d4c7cde92f1fd766752de8907b8d9a2d47135879c607740ca34ff4f2e5780013->leave($__internal_d4c7cde92f1fd766752de8907b8d9a2d47135879c607740ca34ff4f2e5780013_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_05bc3f75c734242153169f752b29cfb215aea56db41d76a7ef788b4454fe3590 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05bc3f75c734242153169f752b29cfb215aea56db41d76a7ef788b4454fe3590->enter($__internal_05bc3f75c734242153169f752b29cfb215aea56db41d76a7ef788b4454fe3590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_e3fc86722cdc17a0b07ffe6de5814d8f0c1dcfc91899d71e5e82e22b032df629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3fc86722cdc17a0b07ffe6de5814d8f0c1dcfc91899d71e5e82e22b032df629->enter($__internal_e3fc86722cdc17a0b07ffe6de5814d8f0c1dcfc91899d71e5e82e22b032df629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e3fc86722cdc17a0b07ffe6de5814d8f0c1dcfc91899d71e5e82e22b032df629->leave($__internal_e3fc86722cdc17a0b07ffe6de5814d8f0c1dcfc91899d71e5e82e22b032df629_prof);

        
        $__internal_05bc3f75c734242153169f752b29cfb215aea56db41d76a7ef788b4454fe3590->leave($__internal_05bc3f75c734242153169f752b29cfb215aea56db41d76a7ef788b4454fe3590_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_9992c647203641058c5c2d996ab6b5b4255c8993a60754dd3c95f59c5cbf177a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9992c647203641058c5c2d996ab6b5b4255c8993a60754dd3c95f59c5cbf177a->enter($__internal_9992c647203641058c5c2d996ab6b5b4255c8993a60754dd3c95f59c5cbf177a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_be210b2e865391ff2dc6d0f9bd27b17647d6f53ae4e430dd369ffb2f7d5c86ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be210b2e865391ff2dc6d0f9bd27b17647d6f53ae4e430dd369ffb2f7d5c86ed->enter($__internal_be210b2e865391ff2dc6d0f9bd27b17647d6f53ae4e430dd369ffb2f7d5c86ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_be210b2e865391ff2dc6d0f9bd27b17647d6f53ae4e430dd369ffb2f7d5c86ed->leave($__internal_be210b2e865391ff2dc6d0f9bd27b17647d6f53ae4e430dd369ffb2f7d5c86ed_prof);

        
        $__internal_9992c647203641058c5c2d996ab6b5b4255c8993a60754dd3c95f59c5cbf177a->leave($__internal_9992c647203641058c5c2d996ab6b5b4255c8993a60754dd3c95f59c5cbf177a_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_6a862246528dcefd462a5db8bbd13c9475f6cc8c3d2c9f1e875ee6e0dd195558 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a862246528dcefd462a5db8bbd13c9475f6cc8c3d2c9f1e875ee6e0dd195558->enter($__internal_6a862246528dcefd462a5db8bbd13c9475f6cc8c3d2c9f1e875ee6e0dd195558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_99a28ae058f930b2486edc8e6c8192ab75db308727f796e2acea0a978f5b0d3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99a28ae058f930b2486edc8e6c8192ab75db308727f796e2acea0a978f5b0d3c->enter($__internal_99a28ae058f930b2486edc8e6c8192ab75db308727f796e2acea0a978f5b0d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_99a28ae058f930b2486edc8e6c8192ab75db308727f796e2acea0a978f5b0d3c->leave($__internal_99a28ae058f930b2486edc8e6c8192ab75db308727f796e2acea0a978f5b0d3c_prof);

        
        $__internal_6a862246528dcefd462a5db8bbd13c9475f6cc8c3d2c9f1e875ee6e0dd195558->leave($__internal_6a862246528dcefd462a5db8bbd13c9475f6cc8c3d2c9f1e875ee6e0dd195558_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_0c8e96397cc6032d7a1cfb574d51f2b0ffb8708d066f18795d8ea6135c43a9b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c8e96397cc6032d7a1cfb574d51f2b0ffb8708d066f18795d8ea6135c43a9b9->enter($__internal_0c8e96397cc6032d7a1cfb574d51f2b0ffb8708d066f18795d8ea6135c43a9b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_f2cb5bc1f82f2187c79696d82efb233e21fbd2ac7cb7cf6ecf3b37d7d2c8c27c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2cb5bc1f82f2187c79696d82efb233e21fbd2ac7cb7cf6ecf3b37d7d2c8c27c->enter($__internal_f2cb5bc1f82f2187c79696d82efb233e21fbd2ac7cb7cf6ecf3b37d7d2c8c27c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_f2cb5bc1f82f2187c79696d82efb233e21fbd2ac7cb7cf6ecf3b37d7d2c8c27c->leave($__internal_f2cb5bc1f82f2187c79696d82efb233e21fbd2ac7cb7cf6ecf3b37d7d2c8c27c_prof);

        
        $__internal_0c8e96397cc6032d7a1cfb574d51f2b0ffb8708d066f18795d8ea6135c43a9b9->leave($__internal_0c8e96397cc6032d7a1cfb574d51f2b0ffb8708d066f18795d8ea6135c43a9b9_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_20ed49c75bfade62312a9d80c68c44955e11e35669cfd3bbd7dfc765906c9c4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20ed49c75bfade62312a9d80c68c44955e11e35669cfd3bbd7dfc765906c9c4f->enter($__internal_20ed49c75bfade62312a9d80c68c44955e11e35669cfd3bbd7dfc765906c9c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_6fe0c461d0cf6c90c2867af384cff790355e7f45865af962ab03f23560f06f66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fe0c461d0cf6c90c2867af384cff790355e7f45865af962ab03f23560f06f66->enter($__internal_6fe0c461d0cf6c90c2867af384cff790355e7f45865af962ab03f23560f06f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_6fe0c461d0cf6c90c2867af384cff790355e7f45865af962ab03f23560f06f66->leave($__internal_6fe0c461d0cf6c90c2867af384cff790355e7f45865af962ab03f23560f06f66_prof);

        
        $__internal_20ed49c75bfade62312a9d80c68c44955e11e35669cfd3bbd7dfc765906c9c4f->leave($__internal_20ed49c75bfade62312a9d80c68c44955e11e35669cfd3bbd7dfc765906c9c4f_prof);

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
