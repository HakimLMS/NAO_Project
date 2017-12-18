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
        $__internal_93f3938a9ac6938375c21fcb3895d618ea1ca561ff180165d6d0e764c1281cc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93f3938a9ac6938375c21fcb3895d618ea1ca561ff180165d6d0e764c1281cc8->enter($__internal_93f3938a9ac6938375c21fcb3895d618ea1ca561ff180165d6d0e764c1281cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_d506e6fe6841591a4d1a67f9d339d869ee259d17295706ab9c69dec9c2e140ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d506e6fe6841591a4d1a67f9d339d869ee259d17295706ab9c69dec9c2e140ee->enter($__internal_d506e6fe6841591a4d1a67f9d339d869ee259d17295706ab9c69dec9c2e140ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_93f3938a9ac6938375c21fcb3895d618ea1ca561ff180165d6d0e764c1281cc8->leave($__internal_93f3938a9ac6938375c21fcb3895d618ea1ca561ff180165d6d0e764c1281cc8_prof);

        
        $__internal_d506e6fe6841591a4d1a67f9d339d869ee259d17295706ab9c69dec9c2e140ee->leave($__internal_d506e6fe6841591a4d1a67f9d339d869ee259d17295706ab9c69dec9c2e140ee_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_1939e22cf60eb6a1b8897d366ed430056f4452cbeb3e83d01bca2ed95aea2779 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1939e22cf60eb6a1b8897d366ed430056f4452cbeb3e83d01bca2ed95aea2779->enter($__internal_1939e22cf60eb6a1b8897d366ed430056f4452cbeb3e83d01bca2ed95aea2779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_2f841009e354c5efceef79489b7bd602499a0cd24d0db8ff23bb8d5773fa600d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f841009e354c5efceef79489b7bd602499a0cd24d0db8ff23bb8d5773fa600d->enter($__internal_2f841009e354c5efceef79489b7bd602499a0cd24d0db8ff23bb8d5773fa600d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_2f841009e354c5efceef79489b7bd602499a0cd24d0db8ff23bb8d5773fa600d->leave($__internal_2f841009e354c5efceef79489b7bd602499a0cd24d0db8ff23bb8d5773fa600d_prof);

        
        $__internal_1939e22cf60eb6a1b8897d366ed430056f4452cbeb3e83d01bca2ed95aea2779->leave($__internal_1939e22cf60eb6a1b8897d366ed430056f4452cbeb3e83d01bca2ed95aea2779_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_0fa3bbe6d6acfd991a7c4700a9ebb7bbe6adc63c426de0960b4e83aa20073f94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fa3bbe6d6acfd991a7c4700a9ebb7bbe6adc63c426de0960b4e83aa20073f94->enter($__internal_0fa3bbe6d6acfd991a7c4700a9ebb7bbe6adc63c426de0960b4e83aa20073f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_e385ee56722d8be35d59efbb0e74dc78f7693bb46f17ad03b5f05fb33ebea1eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e385ee56722d8be35d59efbb0e74dc78f7693bb46f17ad03b5f05fb33ebea1eb->enter($__internal_e385ee56722d8be35d59efbb0e74dc78f7693bb46f17ad03b5f05fb33ebea1eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_e385ee56722d8be35d59efbb0e74dc78f7693bb46f17ad03b5f05fb33ebea1eb->leave($__internal_e385ee56722d8be35d59efbb0e74dc78f7693bb46f17ad03b5f05fb33ebea1eb_prof);

        
        $__internal_0fa3bbe6d6acfd991a7c4700a9ebb7bbe6adc63c426de0960b4e83aa20073f94->leave($__internal_0fa3bbe6d6acfd991a7c4700a9ebb7bbe6adc63c426de0960b4e83aa20073f94_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_1e20025a0625426e54b7deafc9bc99499ced81b7f14f652a5e7fac0d09b87da8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e20025a0625426e54b7deafc9bc99499ced81b7f14f652a5e7fac0d09b87da8->enter($__internal_1e20025a0625426e54b7deafc9bc99499ced81b7f14f652a5e7fac0d09b87da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_9a88dccee6b11ba60f952e86b1a7fc1eca2743ac14dd75d4ff5d51fb97a6d746 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a88dccee6b11ba60f952e86b1a7fc1eca2743ac14dd75d4ff5d51fb97a6d746->enter($__internal_9a88dccee6b11ba60f952e86b1a7fc1eca2743ac14dd75d4ff5d51fb97a6d746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_9a88dccee6b11ba60f952e86b1a7fc1eca2743ac14dd75d4ff5d51fb97a6d746->leave($__internal_9a88dccee6b11ba60f952e86b1a7fc1eca2743ac14dd75d4ff5d51fb97a6d746_prof);

        
        $__internal_1e20025a0625426e54b7deafc9bc99499ced81b7f14f652a5e7fac0d09b87da8->leave($__internal_1e20025a0625426e54b7deafc9bc99499ced81b7f14f652a5e7fac0d09b87da8_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_b7c07e700595842fa6ff910555cb346bf66edb4f9866511610bc942e547f3ade = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7c07e700595842fa6ff910555cb346bf66edb4f9866511610bc942e547f3ade->enter($__internal_b7c07e700595842fa6ff910555cb346bf66edb4f9866511610bc942e547f3ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_22919fc0a8ce3daa3a70e095cfffbe388dbf8ad3822bdd4c495da0f351a05cad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22919fc0a8ce3daa3a70e095cfffbe388dbf8ad3822bdd4c495da0f351a05cad->enter($__internal_22919fc0a8ce3daa3a70e095cfffbe388dbf8ad3822bdd4c495da0f351a05cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_22919fc0a8ce3daa3a70e095cfffbe388dbf8ad3822bdd4c495da0f351a05cad->leave($__internal_22919fc0a8ce3daa3a70e095cfffbe388dbf8ad3822bdd4c495da0f351a05cad_prof);

        
        $__internal_b7c07e700595842fa6ff910555cb346bf66edb4f9866511610bc942e547f3ade->leave($__internal_b7c07e700595842fa6ff910555cb346bf66edb4f9866511610bc942e547f3ade_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_3faebdb5f95d7f98af06afd8802c6bec7751a56c74a569503b71a5881339ec15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3faebdb5f95d7f98af06afd8802c6bec7751a56c74a569503b71a5881339ec15->enter($__internal_3faebdb5f95d7f98af06afd8802c6bec7751a56c74a569503b71a5881339ec15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_a5d6eb4eef109b14f0ff6a0d9d0cd390d832233a3b900456640b768379a35275 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5d6eb4eef109b14f0ff6a0d9d0cd390d832233a3b900456640b768379a35275->enter($__internal_a5d6eb4eef109b14f0ff6a0d9d0cd390d832233a3b900456640b768379a35275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_a5d6eb4eef109b14f0ff6a0d9d0cd390d832233a3b900456640b768379a35275->leave($__internal_a5d6eb4eef109b14f0ff6a0d9d0cd390d832233a3b900456640b768379a35275_prof);

        
        $__internal_3faebdb5f95d7f98af06afd8802c6bec7751a56c74a569503b71a5881339ec15->leave($__internal_3faebdb5f95d7f98af06afd8802c6bec7751a56c74a569503b71a5881339ec15_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_73381797f6fe7f3c74008af949d575a58c53d69e56e99fb62e1dcb9475b6a15c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73381797f6fe7f3c74008af949d575a58c53d69e56e99fb62e1dcb9475b6a15c->enter($__internal_73381797f6fe7f3c74008af949d575a58c53d69e56e99fb62e1dcb9475b6a15c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_b75854880868aa9724fe4c04f503b37ca92554b1d0ae51f4c34b16878bc433f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b75854880868aa9724fe4c04f503b37ca92554b1d0ae51f4c34b16878bc433f3->enter($__internal_b75854880868aa9724fe4c04f503b37ca92554b1d0ae51f4c34b16878bc433f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_b75854880868aa9724fe4c04f503b37ca92554b1d0ae51f4c34b16878bc433f3->leave($__internal_b75854880868aa9724fe4c04f503b37ca92554b1d0ae51f4c34b16878bc433f3_prof);

        
        $__internal_73381797f6fe7f3c74008af949d575a58c53d69e56e99fb62e1dcb9475b6a15c->leave($__internal_73381797f6fe7f3c74008af949d575a58c53d69e56e99fb62e1dcb9475b6a15c_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_1bf13fb7aaad8a9eb45cb0bee03f64ef8a862fcc983be9f233ba405199c5c511 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bf13fb7aaad8a9eb45cb0bee03f64ef8a862fcc983be9f233ba405199c5c511->enter($__internal_1bf13fb7aaad8a9eb45cb0bee03f64ef8a862fcc983be9f233ba405199c5c511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_39ecc984ff7a4af04ed8a6b30bde466fa0c48569de8423f955f8f942fcf639bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39ecc984ff7a4af04ed8a6b30bde466fa0c48569de8423f955f8f942fcf639bd->enter($__internal_39ecc984ff7a4af04ed8a6b30bde466fa0c48569de8423f955f8f942fcf639bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_39ecc984ff7a4af04ed8a6b30bde466fa0c48569de8423f955f8f942fcf639bd->leave($__internal_39ecc984ff7a4af04ed8a6b30bde466fa0c48569de8423f955f8f942fcf639bd_prof);

        
        $__internal_1bf13fb7aaad8a9eb45cb0bee03f64ef8a862fcc983be9f233ba405199c5c511->leave($__internal_1bf13fb7aaad8a9eb45cb0bee03f64ef8a862fcc983be9f233ba405199c5c511_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_4010070cae38839e1b5dadd1e3fbcb4a5e6c84e3a8ad0a003b4d496453612f26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4010070cae38839e1b5dadd1e3fbcb4a5e6c84e3a8ad0a003b4d496453612f26->enter($__internal_4010070cae38839e1b5dadd1e3fbcb4a5e6c84e3a8ad0a003b4d496453612f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_62bf3201a69fba66f42fecaede414fc910463734fb370b287769f1a3b0067d61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62bf3201a69fba66f42fecaede414fc910463734fb370b287769f1a3b0067d61->enter($__internal_62bf3201a69fba66f42fecaede414fc910463734fb370b287769f1a3b0067d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_62bf3201a69fba66f42fecaede414fc910463734fb370b287769f1a3b0067d61->leave($__internal_62bf3201a69fba66f42fecaede414fc910463734fb370b287769f1a3b0067d61_prof);

        
        $__internal_4010070cae38839e1b5dadd1e3fbcb4a5e6c84e3a8ad0a003b4d496453612f26->leave($__internal_4010070cae38839e1b5dadd1e3fbcb4a5e6c84e3a8ad0a003b4d496453612f26_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_50cdc7f0795aedbb378ca18cd538779c891170b4e42a559dd7f397afda61bd0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50cdc7f0795aedbb378ca18cd538779c891170b4e42a559dd7f397afda61bd0c->enter($__internal_50cdc7f0795aedbb378ca18cd538779c891170b4e42a559dd7f397afda61bd0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_c83475719ca86a5ba359d2e741edcda34b74e29132cc585ee7dd7be7681bc02e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c83475719ca86a5ba359d2e741edcda34b74e29132cc585ee7dd7be7681bc02e->enter($__internal_c83475719ca86a5ba359d2e741edcda34b74e29132cc585ee7dd7be7681bc02e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_c83475719ca86a5ba359d2e741edcda34b74e29132cc585ee7dd7be7681bc02e->leave($__internal_c83475719ca86a5ba359d2e741edcda34b74e29132cc585ee7dd7be7681bc02e_prof);

        
        $__internal_50cdc7f0795aedbb378ca18cd538779c891170b4e42a559dd7f397afda61bd0c->leave($__internal_50cdc7f0795aedbb378ca18cd538779c891170b4e42a559dd7f397afda61bd0c_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_5a180944fa4cd3d7573ed462dc95796b1dd1199345ff2de64bf15559e9335b5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a180944fa4cd3d7573ed462dc95796b1dd1199345ff2de64bf15559e9335b5f->enter($__internal_5a180944fa4cd3d7573ed462dc95796b1dd1199345ff2de64bf15559e9335b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_ae1c92216fd9157b40fc6cce3c8bc4dcee4ed7ed644ddefe71da7a8592351b03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae1c92216fd9157b40fc6cce3c8bc4dcee4ed7ed644ddefe71da7a8592351b03->enter($__internal_ae1c92216fd9157b40fc6cce3c8bc4dcee4ed7ed644ddefe71da7a8592351b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_ae1c92216fd9157b40fc6cce3c8bc4dcee4ed7ed644ddefe71da7a8592351b03->leave($__internal_ae1c92216fd9157b40fc6cce3c8bc4dcee4ed7ed644ddefe71da7a8592351b03_prof);

        
        $__internal_5a180944fa4cd3d7573ed462dc95796b1dd1199345ff2de64bf15559e9335b5f->leave($__internal_5a180944fa4cd3d7573ed462dc95796b1dd1199345ff2de64bf15559e9335b5f_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_b3717112ca52f58c2ead0e52f6f865e7c90a540b7eb31d27d438e350035180fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3717112ca52f58c2ead0e52f6f865e7c90a540b7eb31d27d438e350035180fc->enter($__internal_b3717112ca52f58c2ead0e52f6f865e7c90a540b7eb31d27d438e350035180fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_8eb30af3ec9ad04144b8c2436be9c9a557b4b76b4e7c47a1a8c91e12081d7ee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eb30af3ec9ad04144b8c2436be9c9a557b4b76b4e7c47a1a8c91e12081d7ee2->enter($__internal_8eb30af3ec9ad04144b8c2436be9c9a557b4b76b4e7c47a1a8c91e12081d7ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_8eb30af3ec9ad04144b8c2436be9c9a557b4b76b4e7c47a1a8c91e12081d7ee2->leave($__internal_8eb30af3ec9ad04144b8c2436be9c9a557b4b76b4e7c47a1a8c91e12081d7ee2_prof);

        
        $__internal_b3717112ca52f58c2ead0e52f6f865e7c90a540b7eb31d27d438e350035180fc->leave($__internal_b3717112ca52f58c2ead0e52f6f865e7c90a540b7eb31d27d438e350035180fc_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_8eea8ddc7629a1f82b210177df08cb2b26cb7cc6038f397662f60e5461ea2762 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eea8ddc7629a1f82b210177df08cb2b26cb7cc6038f397662f60e5461ea2762->enter($__internal_8eea8ddc7629a1f82b210177df08cb2b26cb7cc6038f397662f60e5461ea2762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_2fec84d6979ed82df5446a323a80c62092902afc84828489627859c93f902c4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fec84d6979ed82df5446a323a80c62092902afc84828489627859c93f902c4e->enter($__internal_2fec84d6979ed82df5446a323a80c62092902afc84828489627859c93f902c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_2fec84d6979ed82df5446a323a80c62092902afc84828489627859c93f902c4e->leave($__internal_2fec84d6979ed82df5446a323a80c62092902afc84828489627859c93f902c4e_prof);

        
        $__internal_8eea8ddc7629a1f82b210177df08cb2b26cb7cc6038f397662f60e5461ea2762->leave($__internal_8eea8ddc7629a1f82b210177df08cb2b26cb7cc6038f397662f60e5461ea2762_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_a761be4f26951f0288253957af7c2bad8b1ada4f06072f39dacce06d5d2547ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a761be4f26951f0288253957af7c2bad8b1ada4f06072f39dacce06d5d2547ae->enter($__internal_a761be4f26951f0288253957af7c2bad8b1ada4f06072f39dacce06d5d2547ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_fb16040ff4ba3d0ffcd09f0ad6b655f84c8cb12d5930613bb57bf36c5bd4e74f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb16040ff4ba3d0ffcd09f0ad6b655f84c8cb12d5930613bb57bf36c5bd4e74f->enter($__internal_fb16040ff4ba3d0ffcd09f0ad6b655f84c8cb12d5930613bb57bf36c5bd4e74f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_fb16040ff4ba3d0ffcd09f0ad6b655f84c8cb12d5930613bb57bf36c5bd4e74f->leave($__internal_fb16040ff4ba3d0ffcd09f0ad6b655f84c8cb12d5930613bb57bf36c5bd4e74f_prof);

        
        $__internal_a761be4f26951f0288253957af7c2bad8b1ada4f06072f39dacce06d5d2547ae->leave($__internal_a761be4f26951f0288253957af7c2bad8b1ada4f06072f39dacce06d5d2547ae_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_454e368e77a4aa6f502c41ea7b59263ba5da866e9a275efab76de431c6c29b50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_454e368e77a4aa6f502c41ea7b59263ba5da866e9a275efab76de431c6c29b50->enter($__internal_454e368e77a4aa6f502c41ea7b59263ba5da866e9a275efab76de431c6c29b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_47738cdd98b7127520cee48afd1b13ae5157495b7a2be0533ae4627e0b548e87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47738cdd98b7127520cee48afd1b13ae5157495b7a2be0533ae4627e0b548e87->enter($__internal_47738cdd98b7127520cee48afd1b13ae5157495b7a2be0533ae4627e0b548e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_47738cdd98b7127520cee48afd1b13ae5157495b7a2be0533ae4627e0b548e87->leave($__internal_47738cdd98b7127520cee48afd1b13ae5157495b7a2be0533ae4627e0b548e87_prof);

        
        $__internal_454e368e77a4aa6f502c41ea7b59263ba5da866e9a275efab76de431c6c29b50->leave($__internal_454e368e77a4aa6f502c41ea7b59263ba5da866e9a275efab76de431c6c29b50_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_80e2703fdcdea25b1baa864c886a01deab98f52853a169d6539f84345af4f424 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80e2703fdcdea25b1baa864c886a01deab98f52853a169d6539f84345af4f424->enter($__internal_80e2703fdcdea25b1baa864c886a01deab98f52853a169d6539f84345af4f424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_268edad699390d36fcaa6172101e46435c2551ef48ba0244a7e6aaca2faed5ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_268edad699390d36fcaa6172101e46435c2551ef48ba0244a7e6aaca2faed5ea->enter($__internal_268edad699390d36fcaa6172101e46435c2551ef48ba0244a7e6aaca2faed5ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_268edad699390d36fcaa6172101e46435c2551ef48ba0244a7e6aaca2faed5ea->leave($__internal_268edad699390d36fcaa6172101e46435c2551ef48ba0244a7e6aaca2faed5ea_prof);

        
        $__internal_80e2703fdcdea25b1baa864c886a01deab98f52853a169d6539f84345af4f424->leave($__internal_80e2703fdcdea25b1baa864c886a01deab98f52853a169d6539f84345af4f424_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_7c1c6b5a95ce7b6d09e5312de9160664ab0d9f244a80ac2d4d06734b22541641 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c1c6b5a95ce7b6d09e5312de9160664ab0d9f244a80ac2d4d06734b22541641->enter($__internal_7c1c6b5a95ce7b6d09e5312de9160664ab0d9f244a80ac2d4d06734b22541641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_0b36ad04b21765131ffa1ae47224398720e5aef7387cd4547c274d06d1df0f2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b36ad04b21765131ffa1ae47224398720e5aef7387cd4547c274d06d1df0f2c->enter($__internal_0b36ad04b21765131ffa1ae47224398720e5aef7387cd4547c274d06d1df0f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_0b36ad04b21765131ffa1ae47224398720e5aef7387cd4547c274d06d1df0f2c->leave($__internal_0b36ad04b21765131ffa1ae47224398720e5aef7387cd4547c274d06d1df0f2c_prof);

        
        $__internal_7c1c6b5a95ce7b6d09e5312de9160664ab0d9f244a80ac2d4d06734b22541641->leave($__internal_7c1c6b5a95ce7b6d09e5312de9160664ab0d9f244a80ac2d4d06734b22541641_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_a4fafdde58071030736ce7f3bff54cd0fc3a992c185978687f2ae3ee73f6900c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4fafdde58071030736ce7f3bff54cd0fc3a992c185978687f2ae3ee73f6900c->enter($__internal_a4fafdde58071030736ce7f3bff54cd0fc3a992c185978687f2ae3ee73f6900c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_76b88a737152f04de3c4e91d83f109951b22aa2bff31c8691dbdae287668b853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76b88a737152f04de3c4e91d83f109951b22aa2bff31c8691dbdae287668b853->enter($__internal_76b88a737152f04de3c4e91d83f109951b22aa2bff31c8691dbdae287668b853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_76b88a737152f04de3c4e91d83f109951b22aa2bff31c8691dbdae287668b853->leave($__internal_76b88a737152f04de3c4e91d83f109951b22aa2bff31c8691dbdae287668b853_prof);

        
        $__internal_a4fafdde58071030736ce7f3bff54cd0fc3a992c185978687f2ae3ee73f6900c->leave($__internal_a4fafdde58071030736ce7f3bff54cd0fc3a992c185978687f2ae3ee73f6900c_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_012a92e68d2d0f63b8569f4ba5c105f2b422488f4ac03c748cd06bba3757fb3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_012a92e68d2d0f63b8569f4ba5c105f2b422488f4ac03c748cd06bba3757fb3a->enter($__internal_012a92e68d2d0f63b8569f4ba5c105f2b422488f4ac03c748cd06bba3757fb3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_54591e8402c7dc6dae63fb872112380216185fbe8fb722b68aace9e8dbc9ea5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54591e8402c7dc6dae63fb872112380216185fbe8fb722b68aace9e8dbc9ea5d->enter($__internal_54591e8402c7dc6dae63fb872112380216185fbe8fb722b68aace9e8dbc9ea5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_54591e8402c7dc6dae63fb872112380216185fbe8fb722b68aace9e8dbc9ea5d->leave($__internal_54591e8402c7dc6dae63fb872112380216185fbe8fb722b68aace9e8dbc9ea5d_prof);

        
        $__internal_012a92e68d2d0f63b8569f4ba5c105f2b422488f4ac03c748cd06bba3757fb3a->leave($__internal_012a92e68d2d0f63b8569f4ba5c105f2b422488f4ac03c748cd06bba3757fb3a_prof);

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
