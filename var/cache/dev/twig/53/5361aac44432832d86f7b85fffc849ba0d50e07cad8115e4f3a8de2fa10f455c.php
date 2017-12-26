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
        $__internal_dfc093944d592fb75238575942a020ea42db8a54210ac02393afff1a2867fea2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfc093944d592fb75238575942a020ea42db8a54210ac02393afff1a2867fea2->enter($__internal_dfc093944d592fb75238575942a020ea42db8a54210ac02393afff1a2867fea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_c77cceaea44c7398eb2449f2a3c8ea938ceb662e7c1605d4ae62f00d72640bd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c77cceaea44c7398eb2449f2a3c8ea938ceb662e7c1605d4ae62f00d72640bd5->enter($__internal_c77cceaea44c7398eb2449f2a3c8ea938ceb662e7c1605d4ae62f00d72640bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_dfc093944d592fb75238575942a020ea42db8a54210ac02393afff1a2867fea2->leave($__internal_dfc093944d592fb75238575942a020ea42db8a54210ac02393afff1a2867fea2_prof);

        
        $__internal_c77cceaea44c7398eb2449f2a3c8ea938ceb662e7c1605d4ae62f00d72640bd5->leave($__internal_c77cceaea44c7398eb2449f2a3c8ea938ceb662e7c1605d4ae62f00d72640bd5_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_a940a4e104e3ed63eea8c5baa0e88972c972854555cd43326ea7fd70d4f180ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a940a4e104e3ed63eea8c5baa0e88972c972854555cd43326ea7fd70d4f180ef->enter($__internal_a940a4e104e3ed63eea8c5baa0e88972c972854555cd43326ea7fd70d4f180ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_a772f779114cb391bbadb15be73024207d7e6a1c858a0ba8e0a131b449407a53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a772f779114cb391bbadb15be73024207d7e6a1c858a0ba8e0a131b449407a53->enter($__internal_a772f779114cb391bbadb15be73024207d7e6a1c858a0ba8e0a131b449407a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_a772f779114cb391bbadb15be73024207d7e6a1c858a0ba8e0a131b449407a53->leave($__internal_a772f779114cb391bbadb15be73024207d7e6a1c858a0ba8e0a131b449407a53_prof);

        
        $__internal_a940a4e104e3ed63eea8c5baa0e88972c972854555cd43326ea7fd70d4f180ef->leave($__internal_a940a4e104e3ed63eea8c5baa0e88972c972854555cd43326ea7fd70d4f180ef_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_544792cef920932518f879365ddd508b3ce038ac053872ed8e9b130d19a1e6fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_544792cef920932518f879365ddd508b3ce038ac053872ed8e9b130d19a1e6fb->enter($__internal_544792cef920932518f879365ddd508b3ce038ac053872ed8e9b130d19a1e6fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_04f3b4dbbef8239a5201be143cebe9df0098b881d030b632f6f95d0c5d0a1920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04f3b4dbbef8239a5201be143cebe9df0098b881d030b632f6f95d0c5d0a1920->enter($__internal_04f3b4dbbef8239a5201be143cebe9df0098b881d030b632f6f95d0c5d0a1920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_04f3b4dbbef8239a5201be143cebe9df0098b881d030b632f6f95d0c5d0a1920->leave($__internal_04f3b4dbbef8239a5201be143cebe9df0098b881d030b632f6f95d0c5d0a1920_prof);

        
        $__internal_544792cef920932518f879365ddd508b3ce038ac053872ed8e9b130d19a1e6fb->leave($__internal_544792cef920932518f879365ddd508b3ce038ac053872ed8e9b130d19a1e6fb_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_879ae6a32f609b33887dfae19ee4c0952c9c07f60f75fa6d6dc86d7c321e4052 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_879ae6a32f609b33887dfae19ee4c0952c9c07f60f75fa6d6dc86d7c321e4052->enter($__internal_879ae6a32f609b33887dfae19ee4c0952c9c07f60f75fa6d6dc86d7c321e4052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_93adf8e6ab80d581123ebdb1746297484902c846733d720709fbdc177472fec8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93adf8e6ab80d581123ebdb1746297484902c846733d720709fbdc177472fec8->enter($__internal_93adf8e6ab80d581123ebdb1746297484902c846733d720709fbdc177472fec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_93adf8e6ab80d581123ebdb1746297484902c846733d720709fbdc177472fec8->leave($__internal_93adf8e6ab80d581123ebdb1746297484902c846733d720709fbdc177472fec8_prof);

        
        $__internal_879ae6a32f609b33887dfae19ee4c0952c9c07f60f75fa6d6dc86d7c321e4052->leave($__internal_879ae6a32f609b33887dfae19ee4c0952c9c07f60f75fa6d6dc86d7c321e4052_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_4dc503d3d9eb73ddbdcab239859d424ea5d72a9ecfa180b60db4a94df0a1384a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dc503d3d9eb73ddbdcab239859d424ea5d72a9ecfa180b60db4a94df0a1384a->enter($__internal_4dc503d3d9eb73ddbdcab239859d424ea5d72a9ecfa180b60db4a94df0a1384a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_70358f03c92cf22f6061d62238825cb1c91dc1756203d347e01d40612b5cf2a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70358f03c92cf22f6061d62238825cb1c91dc1756203d347e01d40612b5cf2a0->enter($__internal_70358f03c92cf22f6061d62238825cb1c91dc1756203d347e01d40612b5cf2a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_70358f03c92cf22f6061d62238825cb1c91dc1756203d347e01d40612b5cf2a0->leave($__internal_70358f03c92cf22f6061d62238825cb1c91dc1756203d347e01d40612b5cf2a0_prof);

        
        $__internal_4dc503d3d9eb73ddbdcab239859d424ea5d72a9ecfa180b60db4a94df0a1384a->leave($__internal_4dc503d3d9eb73ddbdcab239859d424ea5d72a9ecfa180b60db4a94df0a1384a_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_240adda9f2e5d8a7ae45c766e7978f89b12cfc7842f9184bf236d01a4306428d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_240adda9f2e5d8a7ae45c766e7978f89b12cfc7842f9184bf236d01a4306428d->enter($__internal_240adda9f2e5d8a7ae45c766e7978f89b12cfc7842f9184bf236d01a4306428d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_22531ec7775580893676b3d57f3747952afd3b2d4227ef499dd7fd889763c6c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22531ec7775580893676b3d57f3747952afd3b2d4227ef499dd7fd889763c6c2->enter($__internal_22531ec7775580893676b3d57f3747952afd3b2d4227ef499dd7fd889763c6c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_22531ec7775580893676b3d57f3747952afd3b2d4227ef499dd7fd889763c6c2->leave($__internal_22531ec7775580893676b3d57f3747952afd3b2d4227ef499dd7fd889763c6c2_prof);

        
        $__internal_240adda9f2e5d8a7ae45c766e7978f89b12cfc7842f9184bf236d01a4306428d->leave($__internal_240adda9f2e5d8a7ae45c766e7978f89b12cfc7842f9184bf236d01a4306428d_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_a4cb49037c6445c9f65e58cca1367f35b7b720b632ac4e0143ac1a83f9483660 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4cb49037c6445c9f65e58cca1367f35b7b720b632ac4e0143ac1a83f9483660->enter($__internal_a4cb49037c6445c9f65e58cca1367f35b7b720b632ac4e0143ac1a83f9483660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_12c153842298fb6b7af43ba6be8333672314a993138f0bad3a6fa9457b51ca8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12c153842298fb6b7af43ba6be8333672314a993138f0bad3a6fa9457b51ca8b->enter($__internal_12c153842298fb6b7af43ba6be8333672314a993138f0bad3a6fa9457b51ca8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_12c153842298fb6b7af43ba6be8333672314a993138f0bad3a6fa9457b51ca8b->leave($__internal_12c153842298fb6b7af43ba6be8333672314a993138f0bad3a6fa9457b51ca8b_prof);

        
        $__internal_a4cb49037c6445c9f65e58cca1367f35b7b720b632ac4e0143ac1a83f9483660->leave($__internal_a4cb49037c6445c9f65e58cca1367f35b7b720b632ac4e0143ac1a83f9483660_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_52aab9570e88fbab042402ccb32c09185566ab7f1008ff41ac085b20f73d99b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52aab9570e88fbab042402ccb32c09185566ab7f1008ff41ac085b20f73d99b3->enter($__internal_52aab9570e88fbab042402ccb32c09185566ab7f1008ff41ac085b20f73d99b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_43577d22d26965c71a1837d5161dd587c156daeea4f19e0907df4d1167618f24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43577d22d26965c71a1837d5161dd587c156daeea4f19e0907df4d1167618f24->enter($__internal_43577d22d26965c71a1837d5161dd587c156daeea4f19e0907df4d1167618f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_43577d22d26965c71a1837d5161dd587c156daeea4f19e0907df4d1167618f24->leave($__internal_43577d22d26965c71a1837d5161dd587c156daeea4f19e0907df4d1167618f24_prof);

        
        $__internal_52aab9570e88fbab042402ccb32c09185566ab7f1008ff41ac085b20f73d99b3->leave($__internal_52aab9570e88fbab042402ccb32c09185566ab7f1008ff41ac085b20f73d99b3_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_ed1ea19d35d1201f58b267246ce3994300358bbe0eace4ffb5c51599f9d97c79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed1ea19d35d1201f58b267246ce3994300358bbe0eace4ffb5c51599f9d97c79->enter($__internal_ed1ea19d35d1201f58b267246ce3994300358bbe0eace4ffb5c51599f9d97c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_c1a192a437de856337e670096b1e3507284a6b11b261275b84f340d450413483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1a192a437de856337e670096b1e3507284a6b11b261275b84f340d450413483->enter($__internal_c1a192a437de856337e670096b1e3507284a6b11b261275b84f340d450413483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_c1a192a437de856337e670096b1e3507284a6b11b261275b84f340d450413483->leave($__internal_c1a192a437de856337e670096b1e3507284a6b11b261275b84f340d450413483_prof);

        
        $__internal_ed1ea19d35d1201f58b267246ce3994300358bbe0eace4ffb5c51599f9d97c79->leave($__internal_ed1ea19d35d1201f58b267246ce3994300358bbe0eace4ffb5c51599f9d97c79_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_517ec505e5ba160a97f9680c48493dec4efa03a8c5d5d8a96bda9ffacddfb134 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_517ec505e5ba160a97f9680c48493dec4efa03a8c5d5d8a96bda9ffacddfb134->enter($__internal_517ec505e5ba160a97f9680c48493dec4efa03a8c5d5d8a96bda9ffacddfb134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_7b5d317f079263f540a24603cab6ff09e1cb05fab69ffaa8f431e261dd3d2c6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b5d317f079263f540a24603cab6ff09e1cb05fab69ffaa8f431e261dd3d2c6e->enter($__internal_7b5d317f079263f540a24603cab6ff09e1cb05fab69ffaa8f431e261dd3d2c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_7b5d317f079263f540a24603cab6ff09e1cb05fab69ffaa8f431e261dd3d2c6e->leave($__internal_7b5d317f079263f540a24603cab6ff09e1cb05fab69ffaa8f431e261dd3d2c6e_prof);

        
        $__internal_517ec505e5ba160a97f9680c48493dec4efa03a8c5d5d8a96bda9ffacddfb134->leave($__internal_517ec505e5ba160a97f9680c48493dec4efa03a8c5d5d8a96bda9ffacddfb134_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_e18e5517afa081139f4ee4459492dd4bab5260ef1d2e598bf795ab4562d531f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e18e5517afa081139f4ee4459492dd4bab5260ef1d2e598bf795ab4562d531f9->enter($__internal_e18e5517afa081139f4ee4459492dd4bab5260ef1d2e598bf795ab4562d531f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_dae004ec62b8814f82bc9d9362c9aa5f03bea6167783366ab9ea33bffdb98479 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dae004ec62b8814f82bc9d9362c9aa5f03bea6167783366ab9ea33bffdb98479->enter($__internal_dae004ec62b8814f82bc9d9362c9aa5f03bea6167783366ab9ea33bffdb98479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_dae004ec62b8814f82bc9d9362c9aa5f03bea6167783366ab9ea33bffdb98479->leave($__internal_dae004ec62b8814f82bc9d9362c9aa5f03bea6167783366ab9ea33bffdb98479_prof);

        
        $__internal_e18e5517afa081139f4ee4459492dd4bab5260ef1d2e598bf795ab4562d531f9->leave($__internal_e18e5517afa081139f4ee4459492dd4bab5260ef1d2e598bf795ab4562d531f9_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_19166e7daba1cec8a905a80563c918db612f459083ea171022505452b2c41bf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19166e7daba1cec8a905a80563c918db612f459083ea171022505452b2c41bf1->enter($__internal_19166e7daba1cec8a905a80563c918db612f459083ea171022505452b2c41bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_d178c3ee0640f4d23aa41100077ee80a6e8381b9cbf134ff2b7b4fa645cfc725 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d178c3ee0640f4d23aa41100077ee80a6e8381b9cbf134ff2b7b4fa645cfc725->enter($__internal_d178c3ee0640f4d23aa41100077ee80a6e8381b9cbf134ff2b7b4fa645cfc725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_d178c3ee0640f4d23aa41100077ee80a6e8381b9cbf134ff2b7b4fa645cfc725->leave($__internal_d178c3ee0640f4d23aa41100077ee80a6e8381b9cbf134ff2b7b4fa645cfc725_prof);

        
        $__internal_19166e7daba1cec8a905a80563c918db612f459083ea171022505452b2c41bf1->leave($__internal_19166e7daba1cec8a905a80563c918db612f459083ea171022505452b2c41bf1_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_1f0d07f5caeee27759b2ec3b243143124be9a33870c1dc8f3d210f26e3cb799d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f0d07f5caeee27759b2ec3b243143124be9a33870c1dc8f3d210f26e3cb799d->enter($__internal_1f0d07f5caeee27759b2ec3b243143124be9a33870c1dc8f3d210f26e3cb799d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_4ad56466ffe15ff4c0d53d55e5a3341da89c14ae2e8940fe2a4309ded1045776 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ad56466ffe15ff4c0d53d55e5a3341da89c14ae2e8940fe2a4309ded1045776->enter($__internal_4ad56466ffe15ff4c0d53d55e5a3341da89c14ae2e8940fe2a4309ded1045776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_4ad56466ffe15ff4c0d53d55e5a3341da89c14ae2e8940fe2a4309ded1045776->leave($__internal_4ad56466ffe15ff4c0d53d55e5a3341da89c14ae2e8940fe2a4309ded1045776_prof);

        
        $__internal_1f0d07f5caeee27759b2ec3b243143124be9a33870c1dc8f3d210f26e3cb799d->leave($__internal_1f0d07f5caeee27759b2ec3b243143124be9a33870c1dc8f3d210f26e3cb799d_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_d6fe93be8fe575a5a64a5b5efb027a535f999d6ce19d392036ec466afced6a71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6fe93be8fe575a5a64a5b5efb027a535f999d6ce19d392036ec466afced6a71->enter($__internal_d6fe93be8fe575a5a64a5b5efb027a535f999d6ce19d392036ec466afced6a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_027994484eabcf5f5d7e4890c54f2817f94598efae570cbdd5e081401ebe738b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_027994484eabcf5f5d7e4890c54f2817f94598efae570cbdd5e081401ebe738b->enter($__internal_027994484eabcf5f5d7e4890c54f2817f94598efae570cbdd5e081401ebe738b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_027994484eabcf5f5d7e4890c54f2817f94598efae570cbdd5e081401ebe738b->leave($__internal_027994484eabcf5f5d7e4890c54f2817f94598efae570cbdd5e081401ebe738b_prof);

        
        $__internal_d6fe93be8fe575a5a64a5b5efb027a535f999d6ce19d392036ec466afced6a71->leave($__internal_d6fe93be8fe575a5a64a5b5efb027a535f999d6ce19d392036ec466afced6a71_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_3e9a1d8cb9e766cbe5b6e5a70a8615da9b942f16031f0c195ef6afad8f369ef3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e9a1d8cb9e766cbe5b6e5a70a8615da9b942f16031f0c195ef6afad8f369ef3->enter($__internal_3e9a1d8cb9e766cbe5b6e5a70a8615da9b942f16031f0c195ef6afad8f369ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_5c294e17490096dffa211b13aa73d72c8f97efa64bb8898de6f7f80da48761cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c294e17490096dffa211b13aa73d72c8f97efa64bb8898de6f7f80da48761cd->enter($__internal_5c294e17490096dffa211b13aa73d72c8f97efa64bb8898de6f7f80da48761cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_5c294e17490096dffa211b13aa73d72c8f97efa64bb8898de6f7f80da48761cd->leave($__internal_5c294e17490096dffa211b13aa73d72c8f97efa64bb8898de6f7f80da48761cd_prof);

        
        $__internal_3e9a1d8cb9e766cbe5b6e5a70a8615da9b942f16031f0c195ef6afad8f369ef3->leave($__internal_3e9a1d8cb9e766cbe5b6e5a70a8615da9b942f16031f0c195ef6afad8f369ef3_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_9068902bc3bf56f8931744f7c056bc7f3496ce5dc5e25a2fc101509a8c28cab2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9068902bc3bf56f8931744f7c056bc7f3496ce5dc5e25a2fc101509a8c28cab2->enter($__internal_9068902bc3bf56f8931744f7c056bc7f3496ce5dc5e25a2fc101509a8c28cab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_13fff8f1c695db6b2e1dcda292385e92e998e9208db29d71df2d7ec3d4c111cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13fff8f1c695db6b2e1dcda292385e92e998e9208db29d71df2d7ec3d4c111cf->enter($__internal_13fff8f1c695db6b2e1dcda292385e92e998e9208db29d71df2d7ec3d4c111cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_13fff8f1c695db6b2e1dcda292385e92e998e9208db29d71df2d7ec3d4c111cf->leave($__internal_13fff8f1c695db6b2e1dcda292385e92e998e9208db29d71df2d7ec3d4c111cf_prof);

        
        $__internal_9068902bc3bf56f8931744f7c056bc7f3496ce5dc5e25a2fc101509a8c28cab2->leave($__internal_9068902bc3bf56f8931744f7c056bc7f3496ce5dc5e25a2fc101509a8c28cab2_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_9fc4769336b917805ff1ad0b78a44beed70eed1e0e23b836e8754b37e199732f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fc4769336b917805ff1ad0b78a44beed70eed1e0e23b836e8754b37e199732f->enter($__internal_9fc4769336b917805ff1ad0b78a44beed70eed1e0e23b836e8754b37e199732f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_d8a7672a9b9efa68c95e7d991d21e0b359e317c3fab28ba541b2a3b5f075022c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8a7672a9b9efa68c95e7d991d21e0b359e317c3fab28ba541b2a3b5f075022c->enter($__internal_d8a7672a9b9efa68c95e7d991d21e0b359e317c3fab28ba541b2a3b5f075022c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_d8a7672a9b9efa68c95e7d991d21e0b359e317c3fab28ba541b2a3b5f075022c->leave($__internal_d8a7672a9b9efa68c95e7d991d21e0b359e317c3fab28ba541b2a3b5f075022c_prof);

        
        $__internal_9fc4769336b917805ff1ad0b78a44beed70eed1e0e23b836e8754b37e199732f->leave($__internal_9fc4769336b917805ff1ad0b78a44beed70eed1e0e23b836e8754b37e199732f_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_672bd8cffec79f70758a404df8d954068ef5648d14cb756561ee948af454b0a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_672bd8cffec79f70758a404df8d954068ef5648d14cb756561ee948af454b0a0->enter($__internal_672bd8cffec79f70758a404df8d954068ef5648d14cb756561ee948af454b0a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_f3c0c136d98a6a95960450d231b59d0e9815093c1c3bbca05bbca70bb661487b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3c0c136d98a6a95960450d231b59d0e9815093c1c3bbca05bbca70bb661487b->enter($__internal_f3c0c136d98a6a95960450d231b59d0e9815093c1c3bbca05bbca70bb661487b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_f3c0c136d98a6a95960450d231b59d0e9815093c1c3bbca05bbca70bb661487b->leave($__internal_f3c0c136d98a6a95960450d231b59d0e9815093c1c3bbca05bbca70bb661487b_prof);

        
        $__internal_672bd8cffec79f70758a404df8d954068ef5648d14cb756561ee948af454b0a0->leave($__internal_672bd8cffec79f70758a404df8d954068ef5648d14cb756561ee948af454b0a0_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_e55b6603a17ba238a31f3e21f4821a12b73e4029bc021f47514ba40031159cf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e55b6603a17ba238a31f3e21f4821a12b73e4029bc021f47514ba40031159cf4->enter($__internal_e55b6603a17ba238a31f3e21f4821a12b73e4029bc021f47514ba40031159cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_c91f3a7b39c43d286310619a3c6672228b81e237f8004c01f7d51c7043343ec5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c91f3a7b39c43d286310619a3c6672228b81e237f8004c01f7d51c7043343ec5->enter($__internal_c91f3a7b39c43d286310619a3c6672228b81e237f8004c01f7d51c7043343ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_c91f3a7b39c43d286310619a3c6672228b81e237f8004c01f7d51c7043343ec5->leave($__internal_c91f3a7b39c43d286310619a3c6672228b81e237f8004c01f7d51c7043343ec5_prof);

        
        $__internal_e55b6603a17ba238a31f3e21f4821a12b73e4029bc021f47514ba40031159cf4->leave($__internal_e55b6603a17ba238a31f3e21f4821a12b73e4029bc021f47514ba40031159cf4_prof);

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
