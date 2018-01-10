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
        $__internal_c6c8c35c48ecf589eb31dc3acff6106e6b523023f9e58e8e313c0ca018f27cd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6c8c35c48ecf589eb31dc3acff6106e6b523023f9e58e8e313c0ca018f27cd6->enter($__internal_c6c8c35c48ecf589eb31dc3acff6106e6b523023f9e58e8e313c0ca018f27cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_949d40c59430067dbf13e8f8b91ace8b2160682b12066c9c33362bd32799f5a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_949d40c59430067dbf13e8f8b91ace8b2160682b12066c9c33362bd32799f5a8->enter($__internal_949d40c59430067dbf13e8f8b91ace8b2160682b12066c9c33362bd32799f5a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_c6c8c35c48ecf589eb31dc3acff6106e6b523023f9e58e8e313c0ca018f27cd6->leave($__internal_c6c8c35c48ecf589eb31dc3acff6106e6b523023f9e58e8e313c0ca018f27cd6_prof);

        
        $__internal_949d40c59430067dbf13e8f8b91ace8b2160682b12066c9c33362bd32799f5a8->leave($__internal_949d40c59430067dbf13e8f8b91ace8b2160682b12066c9c33362bd32799f5a8_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_f74f7a8d01aadecb62c3a44bf2379d1dfe35c36e8f896a8eb8131bc4c4899747 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f74f7a8d01aadecb62c3a44bf2379d1dfe35c36e8f896a8eb8131bc4c4899747->enter($__internal_f74f7a8d01aadecb62c3a44bf2379d1dfe35c36e8f896a8eb8131bc4c4899747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_234aa6529e48651f1ab5f6f7b462adafda1d31b7d3af0aebc8424d0df439a894 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_234aa6529e48651f1ab5f6f7b462adafda1d31b7d3af0aebc8424d0df439a894->enter($__internal_234aa6529e48651f1ab5f6f7b462adafda1d31b7d3af0aebc8424d0df439a894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_234aa6529e48651f1ab5f6f7b462adafda1d31b7d3af0aebc8424d0df439a894->leave($__internal_234aa6529e48651f1ab5f6f7b462adafda1d31b7d3af0aebc8424d0df439a894_prof);

        
        $__internal_f74f7a8d01aadecb62c3a44bf2379d1dfe35c36e8f896a8eb8131bc4c4899747->leave($__internal_f74f7a8d01aadecb62c3a44bf2379d1dfe35c36e8f896a8eb8131bc4c4899747_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_5260857303770cd70f5210a9a523144c4e373deea1aad0cd30741992d8bfdf03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5260857303770cd70f5210a9a523144c4e373deea1aad0cd30741992d8bfdf03->enter($__internal_5260857303770cd70f5210a9a523144c4e373deea1aad0cd30741992d8bfdf03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_b9c0d0eecdff339d4cc9298f84ad77fa45feb21ec0070522b425b0ab8a98bfee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9c0d0eecdff339d4cc9298f84ad77fa45feb21ec0070522b425b0ab8a98bfee->enter($__internal_b9c0d0eecdff339d4cc9298f84ad77fa45feb21ec0070522b425b0ab8a98bfee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_b9c0d0eecdff339d4cc9298f84ad77fa45feb21ec0070522b425b0ab8a98bfee->leave($__internal_b9c0d0eecdff339d4cc9298f84ad77fa45feb21ec0070522b425b0ab8a98bfee_prof);

        
        $__internal_5260857303770cd70f5210a9a523144c4e373deea1aad0cd30741992d8bfdf03->leave($__internal_5260857303770cd70f5210a9a523144c4e373deea1aad0cd30741992d8bfdf03_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_058b88c1397ba3c2959bedd496760494d88f64597056bf8843fa3264a1a82b2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_058b88c1397ba3c2959bedd496760494d88f64597056bf8843fa3264a1a82b2f->enter($__internal_058b88c1397ba3c2959bedd496760494d88f64597056bf8843fa3264a1a82b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_306ed834bc34c5e56feb9ef95c6bd5514513f8f56040437250fd75bebc145a67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_306ed834bc34c5e56feb9ef95c6bd5514513f8f56040437250fd75bebc145a67->enter($__internal_306ed834bc34c5e56feb9ef95c6bd5514513f8f56040437250fd75bebc145a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_306ed834bc34c5e56feb9ef95c6bd5514513f8f56040437250fd75bebc145a67->leave($__internal_306ed834bc34c5e56feb9ef95c6bd5514513f8f56040437250fd75bebc145a67_prof);

        
        $__internal_058b88c1397ba3c2959bedd496760494d88f64597056bf8843fa3264a1a82b2f->leave($__internal_058b88c1397ba3c2959bedd496760494d88f64597056bf8843fa3264a1a82b2f_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_7e44e0d052a22c79cec05fc5263f0263b0854a4bba70343ec4dba4ba3f27eca9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e44e0d052a22c79cec05fc5263f0263b0854a4bba70343ec4dba4ba3f27eca9->enter($__internal_7e44e0d052a22c79cec05fc5263f0263b0854a4bba70343ec4dba4ba3f27eca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_9208b5f2278822ddb7b765a8966c54abbe6a7b56768b8b92dc9b99b9caa890c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9208b5f2278822ddb7b765a8966c54abbe6a7b56768b8b92dc9b99b9caa890c5->enter($__internal_9208b5f2278822ddb7b765a8966c54abbe6a7b56768b8b92dc9b99b9caa890c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_9208b5f2278822ddb7b765a8966c54abbe6a7b56768b8b92dc9b99b9caa890c5->leave($__internal_9208b5f2278822ddb7b765a8966c54abbe6a7b56768b8b92dc9b99b9caa890c5_prof);

        
        $__internal_7e44e0d052a22c79cec05fc5263f0263b0854a4bba70343ec4dba4ba3f27eca9->leave($__internal_7e44e0d052a22c79cec05fc5263f0263b0854a4bba70343ec4dba4ba3f27eca9_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_6d81cad9534efc2456220b054be8359737f88bbbb6762f7d84628a90ffd057b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d81cad9534efc2456220b054be8359737f88bbbb6762f7d84628a90ffd057b5->enter($__internal_6d81cad9534efc2456220b054be8359737f88bbbb6762f7d84628a90ffd057b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_c287ff42dffe291901ec382005634defcd8618c31cb2e1388910ffa315ed3b93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c287ff42dffe291901ec382005634defcd8618c31cb2e1388910ffa315ed3b93->enter($__internal_c287ff42dffe291901ec382005634defcd8618c31cb2e1388910ffa315ed3b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_c287ff42dffe291901ec382005634defcd8618c31cb2e1388910ffa315ed3b93->leave($__internal_c287ff42dffe291901ec382005634defcd8618c31cb2e1388910ffa315ed3b93_prof);

        
        $__internal_6d81cad9534efc2456220b054be8359737f88bbbb6762f7d84628a90ffd057b5->leave($__internal_6d81cad9534efc2456220b054be8359737f88bbbb6762f7d84628a90ffd057b5_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_4ab9029941ab166b6bd0554f8280f3c660391a1b3f0d6086c11c0296790c91ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ab9029941ab166b6bd0554f8280f3c660391a1b3f0d6086c11c0296790c91ef->enter($__internal_4ab9029941ab166b6bd0554f8280f3c660391a1b3f0d6086c11c0296790c91ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_9ea731ae85f3301f2dad02247819053ec5bf6d40d8e8f54ede5a46c8f94b5551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ea731ae85f3301f2dad02247819053ec5bf6d40d8e8f54ede5a46c8f94b5551->enter($__internal_9ea731ae85f3301f2dad02247819053ec5bf6d40d8e8f54ede5a46c8f94b5551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_9ea731ae85f3301f2dad02247819053ec5bf6d40d8e8f54ede5a46c8f94b5551->leave($__internal_9ea731ae85f3301f2dad02247819053ec5bf6d40d8e8f54ede5a46c8f94b5551_prof);

        
        $__internal_4ab9029941ab166b6bd0554f8280f3c660391a1b3f0d6086c11c0296790c91ef->leave($__internal_4ab9029941ab166b6bd0554f8280f3c660391a1b3f0d6086c11c0296790c91ef_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_c92a83798efd2f60622f82d4cceb73aa2bf7e5b81e7067cb10a3d6c3e7819590 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c92a83798efd2f60622f82d4cceb73aa2bf7e5b81e7067cb10a3d6c3e7819590->enter($__internal_c92a83798efd2f60622f82d4cceb73aa2bf7e5b81e7067cb10a3d6c3e7819590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_9869b52d168e782ec680081540a2129ebe26962ffe46e54afacf6544a50cad9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9869b52d168e782ec680081540a2129ebe26962ffe46e54afacf6544a50cad9b->enter($__internal_9869b52d168e782ec680081540a2129ebe26962ffe46e54afacf6544a50cad9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_9869b52d168e782ec680081540a2129ebe26962ffe46e54afacf6544a50cad9b->leave($__internal_9869b52d168e782ec680081540a2129ebe26962ffe46e54afacf6544a50cad9b_prof);

        
        $__internal_c92a83798efd2f60622f82d4cceb73aa2bf7e5b81e7067cb10a3d6c3e7819590->leave($__internal_c92a83798efd2f60622f82d4cceb73aa2bf7e5b81e7067cb10a3d6c3e7819590_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_1c711075092adbe90e5cfa73cceff9b68e2fa1ff1dc7cd49a71a7ac1b37ca330 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c711075092adbe90e5cfa73cceff9b68e2fa1ff1dc7cd49a71a7ac1b37ca330->enter($__internal_1c711075092adbe90e5cfa73cceff9b68e2fa1ff1dc7cd49a71a7ac1b37ca330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_16c8fcf9bafffeaeaa3593404006dd63294fd1b2863b5376510ac21f86a2487d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16c8fcf9bafffeaeaa3593404006dd63294fd1b2863b5376510ac21f86a2487d->enter($__internal_16c8fcf9bafffeaeaa3593404006dd63294fd1b2863b5376510ac21f86a2487d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_16c8fcf9bafffeaeaa3593404006dd63294fd1b2863b5376510ac21f86a2487d->leave($__internal_16c8fcf9bafffeaeaa3593404006dd63294fd1b2863b5376510ac21f86a2487d_prof);

        
        $__internal_1c711075092adbe90e5cfa73cceff9b68e2fa1ff1dc7cd49a71a7ac1b37ca330->leave($__internal_1c711075092adbe90e5cfa73cceff9b68e2fa1ff1dc7cd49a71a7ac1b37ca330_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_19ded4a8e7161c54b9dc522240308608e6d767a9619946e3a6542a995c136f69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19ded4a8e7161c54b9dc522240308608e6d767a9619946e3a6542a995c136f69->enter($__internal_19ded4a8e7161c54b9dc522240308608e6d767a9619946e3a6542a995c136f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_0acd22792e3523abfb2318a621d4cba0bd5d7d62db2fdadb4ecefc65dbe36a2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0acd22792e3523abfb2318a621d4cba0bd5d7d62db2fdadb4ecefc65dbe36a2e->enter($__internal_0acd22792e3523abfb2318a621d4cba0bd5d7d62db2fdadb4ecefc65dbe36a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_0acd22792e3523abfb2318a621d4cba0bd5d7d62db2fdadb4ecefc65dbe36a2e->leave($__internal_0acd22792e3523abfb2318a621d4cba0bd5d7d62db2fdadb4ecefc65dbe36a2e_prof);

        
        $__internal_19ded4a8e7161c54b9dc522240308608e6d767a9619946e3a6542a995c136f69->leave($__internal_19ded4a8e7161c54b9dc522240308608e6d767a9619946e3a6542a995c136f69_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_c9379fdc4c94dd7baacfaa5b83e1d855b80207891b06f97100737afa737cea88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9379fdc4c94dd7baacfaa5b83e1d855b80207891b06f97100737afa737cea88->enter($__internal_c9379fdc4c94dd7baacfaa5b83e1d855b80207891b06f97100737afa737cea88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_80c8377fc2d9e55b9a62a203074652ce5dcebdd9309cde825177c96929bcada0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80c8377fc2d9e55b9a62a203074652ce5dcebdd9309cde825177c96929bcada0->enter($__internal_80c8377fc2d9e55b9a62a203074652ce5dcebdd9309cde825177c96929bcada0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_80c8377fc2d9e55b9a62a203074652ce5dcebdd9309cde825177c96929bcada0->leave($__internal_80c8377fc2d9e55b9a62a203074652ce5dcebdd9309cde825177c96929bcada0_prof);

        
        $__internal_c9379fdc4c94dd7baacfaa5b83e1d855b80207891b06f97100737afa737cea88->leave($__internal_c9379fdc4c94dd7baacfaa5b83e1d855b80207891b06f97100737afa737cea88_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_c5626d3e3358dcf43af3942f99e429f5e130a8867e304b15387324fdf65caaae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5626d3e3358dcf43af3942f99e429f5e130a8867e304b15387324fdf65caaae->enter($__internal_c5626d3e3358dcf43af3942f99e429f5e130a8867e304b15387324fdf65caaae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_3026ed5716f199aa6a5b2395b31a96aa54e6e5d435e1fb8356742f47eab9c550 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3026ed5716f199aa6a5b2395b31a96aa54e6e5d435e1fb8356742f47eab9c550->enter($__internal_3026ed5716f199aa6a5b2395b31a96aa54e6e5d435e1fb8356742f47eab9c550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_3026ed5716f199aa6a5b2395b31a96aa54e6e5d435e1fb8356742f47eab9c550->leave($__internal_3026ed5716f199aa6a5b2395b31a96aa54e6e5d435e1fb8356742f47eab9c550_prof);

        
        $__internal_c5626d3e3358dcf43af3942f99e429f5e130a8867e304b15387324fdf65caaae->leave($__internal_c5626d3e3358dcf43af3942f99e429f5e130a8867e304b15387324fdf65caaae_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_793e1e2123f8e215cb2132e55b6332e76e62446547f49dd4680f4a73701b819c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_793e1e2123f8e215cb2132e55b6332e76e62446547f49dd4680f4a73701b819c->enter($__internal_793e1e2123f8e215cb2132e55b6332e76e62446547f49dd4680f4a73701b819c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_25871303699afe1bbc14454339e2d95d2f754cb852686f08293ad5ce61b4a932 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25871303699afe1bbc14454339e2d95d2f754cb852686f08293ad5ce61b4a932->enter($__internal_25871303699afe1bbc14454339e2d95d2f754cb852686f08293ad5ce61b4a932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_25871303699afe1bbc14454339e2d95d2f754cb852686f08293ad5ce61b4a932->leave($__internal_25871303699afe1bbc14454339e2d95d2f754cb852686f08293ad5ce61b4a932_prof);

        
        $__internal_793e1e2123f8e215cb2132e55b6332e76e62446547f49dd4680f4a73701b819c->leave($__internal_793e1e2123f8e215cb2132e55b6332e76e62446547f49dd4680f4a73701b819c_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_17f7fa29ad9ad8bdc170fed15fe488b52b5f385ada065eadcfbbce8ae73290d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17f7fa29ad9ad8bdc170fed15fe488b52b5f385ada065eadcfbbce8ae73290d8->enter($__internal_17f7fa29ad9ad8bdc170fed15fe488b52b5f385ada065eadcfbbce8ae73290d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_a7f82661f520771332b4cb9e6d2d3e730d46cc5636be58651358ef68e3d74704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7f82661f520771332b4cb9e6d2d3e730d46cc5636be58651358ef68e3d74704->enter($__internal_a7f82661f520771332b4cb9e6d2d3e730d46cc5636be58651358ef68e3d74704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a7f82661f520771332b4cb9e6d2d3e730d46cc5636be58651358ef68e3d74704->leave($__internal_a7f82661f520771332b4cb9e6d2d3e730d46cc5636be58651358ef68e3d74704_prof);

        
        $__internal_17f7fa29ad9ad8bdc170fed15fe488b52b5f385ada065eadcfbbce8ae73290d8->leave($__internal_17f7fa29ad9ad8bdc170fed15fe488b52b5f385ada065eadcfbbce8ae73290d8_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_c559f0f7ec8767592f547d1a81efaee4583ff14d4dcd76ec85a37438029da794 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c559f0f7ec8767592f547d1a81efaee4583ff14d4dcd76ec85a37438029da794->enter($__internal_c559f0f7ec8767592f547d1a81efaee4583ff14d4dcd76ec85a37438029da794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_f487ddd085522c62a66d50898959d022a92e7b9251f3174b668480b58aea3161 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f487ddd085522c62a66d50898959d022a92e7b9251f3174b668480b58aea3161->enter($__internal_f487ddd085522c62a66d50898959d022a92e7b9251f3174b668480b58aea3161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_f487ddd085522c62a66d50898959d022a92e7b9251f3174b668480b58aea3161->leave($__internal_f487ddd085522c62a66d50898959d022a92e7b9251f3174b668480b58aea3161_prof);

        
        $__internal_c559f0f7ec8767592f547d1a81efaee4583ff14d4dcd76ec85a37438029da794->leave($__internal_c559f0f7ec8767592f547d1a81efaee4583ff14d4dcd76ec85a37438029da794_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_c100b306538d528a211f39f76d13d7982f378f9b4ed32ad1c7fef68321254b7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c100b306538d528a211f39f76d13d7982f378f9b4ed32ad1c7fef68321254b7b->enter($__internal_c100b306538d528a211f39f76d13d7982f378f9b4ed32ad1c7fef68321254b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_677281aef1362cec55f515fb87faff6ab5e82381afedb367566e5c9fe383f415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_677281aef1362cec55f515fb87faff6ab5e82381afedb367566e5c9fe383f415->enter($__internal_677281aef1362cec55f515fb87faff6ab5e82381afedb367566e5c9fe383f415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_677281aef1362cec55f515fb87faff6ab5e82381afedb367566e5c9fe383f415->leave($__internal_677281aef1362cec55f515fb87faff6ab5e82381afedb367566e5c9fe383f415_prof);

        
        $__internal_c100b306538d528a211f39f76d13d7982f378f9b4ed32ad1c7fef68321254b7b->leave($__internal_c100b306538d528a211f39f76d13d7982f378f9b4ed32ad1c7fef68321254b7b_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_38cafd1f0c040789c57bbb0df918578ebbbd8b5e95206b9e4a0bf20b951c8fb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38cafd1f0c040789c57bbb0df918578ebbbd8b5e95206b9e4a0bf20b951c8fb5->enter($__internal_38cafd1f0c040789c57bbb0df918578ebbbd8b5e95206b9e4a0bf20b951c8fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_bc783f446f754897e4403480486a01ff0d17ae1122ffd147f5087d6960fa5b96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc783f446f754897e4403480486a01ff0d17ae1122ffd147f5087d6960fa5b96->enter($__internal_bc783f446f754897e4403480486a01ff0d17ae1122ffd147f5087d6960fa5b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_bc783f446f754897e4403480486a01ff0d17ae1122ffd147f5087d6960fa5b96->leave($__internal_bc783f446f754897e4403480486a01ff0d17ae1122ffd147f5087d6960fa5b96_prof);

        
        $__internal_38cafd1f0c040789c57bbb0df918578ebbbd8b5e95206b9e4a0bf20b951c8fb5->leave($__internal_38cafd1f0c040789c57bbb0df918578ebbbd8b5e95206b9e4a0bf20b951c8fb5_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_e1c4f3bc46e2d85c3ac22bde7cc2e50db684dd77c43dacdf2fbf42f5fc6147a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1c4f3bc46e2d85c3ac22bde7cc2e50db684dd77c43dacdf2fbf42f5fc6147a2->enter($__internal_e1c4f3bc46e2d85c3ac22bde7cc2e50db684dd77c43dacdf2fbf42f5fc6147a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_a8772a1d819991169024059847cfc1d99cfefe3b7612d96e3b3d7205c8765a23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8772a1d819991169024059847cfc1d99cfefe3b7612d96e3b3d7205c8765a23->enter($__internal_a8772a1d819991169024059847cfc1d99cfefe3b7612d96e3b3d7205c8765a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_a8772a1d819991169024059847cfc1d99cfefe3b7612d96e3b3d7205c8765a23->leave($__internal_a8772a1d819991169024059847cfc1d99cfefe3b7612d96e3b3d7205c8765a23_prof);

        
        $__internal_e1c4f3bc46e2d85c3ac22bde7cc2e50db684dd77c43dacdf2fbf42f5fc6147a2->leave($__internal_e1c4f3bc46e2d85c3ac22bde7cc2e50db684dd77c43dacdf2fbf42f5fc6147a2_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_5bd61af7891ae0865de8b2d85b7d7a5a2c2d78ebef16ce9967b456604fadd96f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bd61af7891ae0865de8b2d85b7d7a5a2c2d78ebef16ce9967b456604fadd96f->enter($__internal_5bd61af7891ae0865de8b2d85b7d7a5a2c2d78ebef16ce9967b456604fadd96f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_3cab21800d92c68246a06f504f632853d83b2247ebd6fe8417e9a3584c7ee422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cab21800d92c68246a06f504f632853d83b2247ebd6fe8417e9a3584c7ee422->enter($__internal_3cab21800d92c68246a06f504f632853d83b2247ebd6fe8417e9a3584c7ee422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_3cab21800d92c68246a06f504f632853d83b2247ebd6fe8417e9a3584c7ee422->leave($__internal_3cab21800d92c68246a06f504f632853d83b2247ebd6fe8417e9a3584c7ee422_prof);

        
        $__internal_5bd61af7891ae0865de8b2d85b7d7a5a2c2d78ebef16ce9967b456604fadd96f->leave($__internal_5bd61af7891ae0865de8b2d85b7d7a5a2c2d78ebef16ce9967b456604fadd96f_prof);

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
