<?php

/* foundation_5_layout.html.twig */
class __TwigTemplate_0fcb9f4aedc68b3686addf51a84b4398270083f3412d8ff7cc6c519392b117c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "foundation_5_layout.html.twig", 1);
        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'form_label' => array($this, 'block_form_label'),
            'choice_label' => array($this, 'block_choice_label'),
            'checkbox_label' => array($this, 'block_checkbox_label'),
            'radio_label' => array($this, 'block_radio_label'),
            'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
            'form_row' => array($this, 'block_form_row'),
            'choice_row' => array($this, 'block_choice_row'),
            'date_row' => array($this, 'block_date_row'),
            'time_row' => array($this, 'block_time_row'),
            'datetime_row' => array($this, 'block_datetime_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d76a13410dedbed1c483a7e58f1b85d58667261f595d1548550b92c93499cc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d76a13410dedbed1c483a7e58f1b85d58667261f595d1548550b92c93499cc9->enter($__internal_0d76a13410dedbed1c483a7e58f1b85d58667261f595d1548550b92c93499cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_8fd65d1e098aef8eeffc16586a007cd9e2d9b9132e0f80fc76811d0dbb8f2908 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fd65d1e098aef8eeffc16586a007cd9e2d9b9132e0f80fc76811d0dbb8f2908->enter($__internal_8fd65d1e098aef8eeffc16586a007cd9e2d9b9132e0f80fc76811d0dbb8f2908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d76a13410dedbed1c483a7e58f1b85d58667261f595d1548550b92c93499cc9->leave($__internal_0d76a13410dedbed1c483a7e58f1b85d58667261f595d1548550b92c93499cc9_prof);

        
        $__internal_8fd65d1e098aef8eeffc16586a007cd9e2d9b9132e0f80fc76811d0dbb8f2908->leave($__internal_8fd65d1e098aef8eeffc16586a007cd9e2d9b9132e0f80fc76811d0dbb8f2908_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_c9d78dcafc2b879fbde7cdb262129cd58aa501d87590da0b91ab8506a20f92fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9d78dcafc2b879fbde7cdb262129cd58aa501d87590da0b91ab8506a20f92fe->enter($__internal_c9d78dcafc2b879fbde7cdb262129cd58aa501d87590da0b91ab8506a20f92fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_4d3f2a97912ca3c659fae395b54a40730c9854fa8eebc45ce0fe94fa317ebe10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d3f2a97912ca3c659fae395b54a40730c9854fa8eebc45ce0fe94fa317ebe10->enter($__internal_4d3f2a97912ca3c659fae395b54a40730c9854fa8eebc45ce0fe94fa317ebe10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 7, $this->getSourceContext()); })())) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 8, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_4d3f2a97912ca3c659fae395b54a40730c9854fa8eebc45ce0fe94fa317ebe10->leave($__internal_4d3f2a97912ca3c659fae395b54a40730c9854fa8eebc45ce0fe94fa317ebe10_prof);

        
        $__internal_c9d78dcafc2b879fbde7cdb262129cd58aa501d87590da0b91ab8506a20f92fe->leave($__internal_c9d78dcafc2b879fbde7cdb262129cd58aa501d87590da0b91ab8506a20f92fe_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_269c2905712c349af62ee90aadf841c062345bcd9d5e96a417f425b53990209c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_269c2905712c349af62ee90aadf841c062345bcd9d5e96a417f425b53990209c->enter($__internal_269c2905712c349af62ee90aadf841c062345bcd9d5e96a417f425b53990209c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_614f97883a21f1f79d8d333353dcb4e1f93611ac75d2e34fcd7b847676cc9604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_614f97883a21f1f79d8d333353dcb4e1f93611ac75d2e34fcd7b847676cc9604->enter($__internal_614f97883a21f1f79d8d333353dcb4e1f93611ac75d2e34fcd7b847676cc9604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 14, $this->getSourceContext()); })())) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 15, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_614f97883a21f1f79d8d333353dcb4e1f93611ac75d2e34fcd7b847676cc9604->leave($__internal_614f97883a21f1f79d8d333353dcb4e1f93611ac75d2e34fcd7b847676cc9604_prof);

        
        $__internal_269c2905712c349af62ee90aadf841c062345bcd9d5e96a417f425b53990209c->leave($__internal_269c2905712c349af62ee90aadf841c062345bcd9d5e96a417f425b53990209c_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_169642cf1f529ad78a0c777e7eaf36b69cbd5af06ffbd25bd3985d30428ff6e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_169642cf1f529ad78a0c777e7eaf36b69cbd5af06ffbd25bd3985d30428ff6e6->enter($__internal_169642cf1f529ad78a0c777e7eaf36b69cbd5af06ffbd25bd3985d30428ff6e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_e7c27df12b73f6fba0f42f1650eaa6a4a1c193a4b66cbce0d47205d455a01ac5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7c27df12b73f6fba0f42f1650eaa6a4a1c193a4b66cbce0d47205d455a01ac5->enter($__internal_e7c27df12b73f6fba0f42f1650eaa6a4a1c193a4b66cbce0d47205d455a01ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 21, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_e7c27df12b73f6fba0f42f1650eaa6a4a1c193a4b66cbce0d47205d455a01ac5->leave($__internal_e7c27df12b73f6fba0f42f1650eaa6a4a1c193a4b66cbce0d47205d455a01ac5_prof);

        
        $__internal_169642cf1f529ad78a0c777e7eaf36b69cbd5af06ffbd25bd3985d30428ff6e6->leave($__internal_169642cf1f529ad78a0c777e7eaf36b69cbd5af06ffbd25bd3985d30428ff6e6_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_289efd37fe5627c9bd9a9c43ed49c29e30d7cc5b374524c314d34ab2f741cbf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_289efd37fe5627c9bd9a9c43ed49c29e30d7cc5b374524c314d34ab2f741cbf5->enter($__internal_289efd37fe5627c9bd9a9c43ed49c29e30d7cc5b374524c314d34ab2f741cbf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_8aae7c764c64415457fd9808eb3c55a37d3c4683119c27424988277f56a4d68d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aae7c764c64415457fd9808eb3c55a37d3c4683119c27424988277f56a4d68d->enter($__internal_8aae7c764c64415457fd9808eb3c55a37d3c4683119c27424988277f56a4d68d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 26
        echo "<div class=\"row collapse\">
        ";
        // line 27
        $context["prepend"] = ("{{" == twig_slice($this->env, (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 27, $this->getSourceContext()); })()), 0, 2));
        // line 28
        echo "        ";
        if ( !(isset($context["prepend"]) || array_key_exists("prepend", $context) ? $context["prepend"] : (function () { throw new Twig_Error_Runtime('Variable "prepend" does not exist.', 28, $this->getSourceContext()); })())) {
            // line 29
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">";
            // line 30
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 30, $this->getSourceContext()); })()), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 33
        echo "        <div class=\"small-9 large-10 columns\">";
        // line 34
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 35
        echo "</div>
        ";
        // line 36
        if ((isset($context["prepend"]) || array_key_exists("prepend", $context) ? $context["prepend"] : (function () { throw new Twig_Error_Runtime('Variable "prepend" does not exist.', 36, $this->getSourceContext()); })())) {
            // line 37
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">";
            // line 38
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 38, $this->getSourceContext()); })()), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 41
        echo "    </div>";
        
        $__internal_8aae7c764c64415457fd9808eb3c55a37d3c4683119c27424988277f56a4d68d->leave($__internal_8aae7c764c64415457fd9808eb3c55a37d3c4683119c27424988277f56a4d68d_prof);

        
        $__internal_289efd37fe5627c9bd9a9c43ed49c29e30d7cc5b374524c314d34ab2f741cbf5->leave($__internal_289efd37fe5627c9bd9a9c43ed49c29e30d7cc5b374524c314d34ab2f741cbf5_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_d55247feb5d355bc3c5b48389cb27e8a9918e372cfc95543aa86109b7021e6fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d55247feb5d355bc3c5b48389cb27e8a9918e372cfc95543aa86109b7021e6fb->enter($__internal_d55247feb5d355bc3c5b48389cb27e8a9918e372cfc95543aa86109b7021e6fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_409acc971a1c4ee21c4d726f0261dea5c4299d07871de9fbfefef037d0edff4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_409acc971a1c4ee21c4d726f0261dea5c4299d07871de9fbfefef037d0edff4e->enter($__internal_409acc971a1c4ee21c4d726f0261dea5c4299d07871de9fbfefef037d0edff4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 45
        echo "<div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">";
        // line 47
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 48
        echo "</div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>";
        
        $__internal_409acc971a1c4ee21c4d726f0261dea5c4299d07871de9fbfefef037d0edff4e->leave($__internal_409acc971a1c4ee21c4d726f0261dea5c4299d07871de9fbfefef037d0edff4e_prof);

        
        $__internal_d55247feb5d355bc3c5b48389cb27e8a9918e372cfc95543aa86109b7021e6fb->leave($__internal_d55247feb5d355bc3c5b48389cb27e8a9918e372cfc95543aa86109b7021e6fb_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_24e3461e749199e32f1a0caef7fdbe8515d71bf454a30729c22a89fbfde19bd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24e3461e749199e32f1a0caef7fdbe8515d71bf454a30729c22a89fbfde19bd5->enter($__internal_24e3461e749199e32f1a0caef7fdbe8515d71bf454a30729c22a89fbfde19bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_8fc5a38ee129bb4b1d01af5a8dea57d6907a4172d1dd2d608d7042e50b2af6f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fc5a38ee129bb4b1d01af5a8dea57d6907a4172d1dd2d608d7042e50b2af6f4->enter($__internal_8fc5a38ee129bb4b1d01af5a8dea57d6907a4172d1dd2d608d7042e50b2af6f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 56
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 56, $this->getSourceContext()); })()) == "single_text")) {
            // line 57
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 59, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 60
            echo "        <div class=\"row\">
            <div class=\"large-7 columns\">";
            // line 61
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->getSourceContext()); })()), "date", array()), 'errors');
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 62
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), "time", array()), 'errors');
            echo "</div>
        </div>
        <div ";
            // line 64
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"large-7 columns\">";
            // line 65
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 65, $this->getSourceContext()); })()), "date", array()), 'widget', array("datetime" => true));
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 66
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 66, $this->getSourceContext()); })()), "time", array()), 'widget', array("datetime" => true));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_8fc5a38ee129bb4b1d01af5a8dea57d6907a4172d1dd2d608d7042e50b2af6f4->leave($__internal_8fc5a38ee129bb4b1d01af5a8dea57d6907a4172d1dd2d608d7042e50b2af6f4_prof);

        
        $__internal_24e3461e749199e32f1a0caef7fdbe8515d71bf454a30729c22a89fbfde19bd5->leave($__internal_24e3461e749199e32f1a0caef7fdbe8515d71bf454a30729c22a89fbfde19bd5_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_fec801baf4117e397392c62a23c02fc4ec5c9e1859f0123c9c4aabfffa75021c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fec801baf4117e397392c62a23c02fc4ec5c9e1859f0123c9c4aabfffa75021c->enter($__internal_fec801baf4117e397392c62a23c02fc4ec5c9e1859f0123c9c4aabfffa75021c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_6fde20eafa0a682307ccebe51a1e21134a28304e536691452daab5c91558b772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fde20eafa0a682307ccebe51a1e21134a28304e536691452daab5c91558b772->enter($__internal_6fde20eafa0a682307ccebe51a1e21134a28304e536691452daab5c91558b772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 72
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 72, $this->getSourceContext()); })()) == "single_text")) {
            // line 73
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 75
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 75, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 76
            echo "        ";
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 76, $this->getSourceContext()); })()))) {
                // line 77
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 79
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "date_pattern" does not exist.', 79, $this->getSourceContext()); })()), array("{{ year }}" => (("<div class=\"large-4 columns\">" .             // line 80
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 80, $this->getSourceContext()); })()), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (("<div class=\"large-4 columns\">" .             // line 81
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 81, $this->getSourceContext()); })()), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (("<div class=\"large-4 columns\">" .             // line 82
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 82, $this->getSourceContext()); })()), "day", array()), 'widget')) . "</div>")));
            // line 84
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 84, $this->getSourceContext()); })()))) {
                // line 85
                echo "            </div>
        ";
            }
            // line 87
            echo "    ";
        }
        
        $__internal_6fde20eafa0a682307ccebe51a1e21134a28304e536691452daab5c91558b772->leave($__internal_6fde20eafa0a682307ccebe51a1e21134a28304e536691452daab5c91558b772_prof);

        
        $__internal_fec801baf4117e397392c62a23c02fc4ec5c9e1859f0123c9c4aabfffa75021c->leave($__internal_fec801baf4117e397392c62a23c02fc4ec5c9e1859f0123c9c4aabfffa75021c_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_b967e6f45d21724b70e7d1c7eb312b3ce96d3361aa2cd1ce7ef4f81393c0a202 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b967e6f45d21724b70e7d1c7eb312b3ce96d3361aa2cd1ce7ef4f81393c0a202->enter($__internal_b967e6f45d21724b70e7d1c7eb312b3ce96d3361aa2cd1ce7ef4f81393c0a202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_bc19aeb09c45fa0e20d61c770ce2d27405b8ec5edb1ceab55a7246dcf6d3b4c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc19aeb09c45fa0e20d61c770ce2d27405b8ec5edb1ceab55a7246dcf6d3b4c1->enter($__internal_bc19aeb09c45fa0e20d61c770ce2d27405b8ec5edb1ceab55a7246dcf6d3b4c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 91
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 91, $this->getSourceContext()); })()) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 94, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 95
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 95, $this->getSourceContext()); })())))) {
                // line 96
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 98
            echo "        ";
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 98, $this->getSourceContext()); })())) {
                // line 99
                echo "            <div class=\"large-4 columns\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 99, $this->getSourceContext()); })()), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 106
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 106, $this->getSourceContext()); })()), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 116
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 116, $this->getSourceContext()); })()), "second", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 121
                echo "            <div class=\"large-6 columns\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 121, $this->getSourceContext()); })()), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 128
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            }
            // line 133
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 133, $this->getSourceContext()); })())))) {
                // line 134
                echo "            </div>
        ";
            }
            // line 136
            echo "    ";
        }
        
        $__internal_bc19aeb09c45fa0e20d61c770ce2d27405b8ec5edb1ceab55a7246dcf6d3b4c1->leave($__internal_bc19aeb09c45fa0e20d61c770ce2d27405b8ec5edb1ceab55a7246dcf6d3b4c1_prof);

        
        $__internal_b967e6f45d21724b70e7d1c7eb312b3ce96d3361aa2cd1ce7ef4f81393c0a202->leave($__internal_b967e6f45d21724b70e7d1c7eb312b3ce96d3361aa2cd1ce7ef4f81393c0a202_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_c15f3b12d3f8f969901af1b270d687301584847855bff24822ae7e6b00c9e7bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c15f3b12d3f8f969901af1b270d687301584847855bff24822ae7e6b00c9e7bc->enter($__internal_c15f3b12d3f8f969901af1b270d687301584847855bff24822ae7e6b00c9e7bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_c9d3cdaf26ec88e299e04f8fc831dd43c62f9aea7ef77687310f9f53c837a0a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9d3cdaf26ec88e299e04f8fc831dd43c62f9aea7ef77687310f9f53c837a0a2->enter($__internal_c9d3cdaf26ec88e299e04f8fc831dd43c62f9aea7ef77687310f9f53c837a0a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 140
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 140, $this->getSourceContext()); })())) > 0)) {
            // line 141
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 141, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 142
            echo "    ";
        }
        // line 143
        echo "
    ";
        // line 144
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 144, $this->getSourceContext()); })())) {
            // line 145
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 145, $this->getSourceContext()); })()), array("style" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "style", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "style", array()), "")) : ("")) . " height: auto; background-image: none;"))));
            // line 146
            echo "    ";
        }
        // line 147
        echo "
    ";
        // line 148
        if (((((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 148, $this->getSourceContext()); })()) && (null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 148, $this->getSourceContext()); })()))) &&  !(isset($context["placeholder_in_choices"]) || array_key_exists("placeholder_in_choices", $context) ? $context["placeholder_in_choices"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder_in_choices" does not exist.', 148, $this->getSourceContext()); })())) &&  !(isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 148, $this->getSourceContext()); })()))) {
            // line 149
            $context["required"] = false;
        }
        // line 151
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 151, $this->getSourceContext()); })())) {
            echo " multiple=\"multiple\" data-customforms=\"disabled\"";
        }
        echo ">
        ";
        // line 152
        if ( !(null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 152, $this->getSourceContext()); })()))) {
            // line 153
            echo "<option value=\"\"";
            if (((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 153, $this->getSourceContext()); })()) && twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 153, $this->getSourceContext()); })())))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 153, $this->getSourceContext()); })()) === false)) ? ((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 153, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 153, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 153, $this->getSourceContext()); })())))), "html", null, true);
            echo "</option>";
        }
        // line 155
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 155, $this->getSourceContext()); })())) > 0)) {
            // line 156
            $context["options"] = (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 156, $this->getSourceContext()); })());
            // line 157
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 158
            if (((twig_length_filter($this->env, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 158, $this->getSourceContext()); })())) > 0) &&  !(null === (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 158, $this->getSourceContext()); })())))) {
                // line 159
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 159, $this->getSourceContext()); })()), "html", null, true);
                echo "</option>";
            }
        }
        // line 162
        $context["options"] = (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 162, $this->getSourceContext()); })());
        // line 163
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 164
        echo "</select>";
        
        $__internal_c9d3cdaf26ec88e299e04f8fc831dd43c62f9aea7ef77687310f9f53c837a0a2->leave($__internal_c9d3cdaf26ec88e299e04f8fc831dd43c62f9aea7ef77687310f9f53c837a0a2_prof);

        
        $__internal_c15f3b12d3f8f969901af1b270d687301584847855bff24822ae7e6b00c9e7bc->leave($__internal_c15f3b12d3f8f969901af1b270d687301584847855bff24822ae7e6b00c9e7bc_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_3548e7b84c26550bccc822e27eecdd3030152e2b27317cd0120b5ba33ffc518c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3548e7b84c26550bccc822e27eecdd3030152e2b27317cd0120b5ba33ffc518c->enter($__internal_3548e7b84c26550bccc822e27eecdd3030152e2b27317cd0120b5ba33ffc518c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_1ecf1b6fe62022c6747f437b9954ae51a04689895d0991fc5d8d2197a7ea92cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ecf1b6fe62022c6747f437b9954ae51a04689895d0991fc5d8d2197a7ea92cc->enter($__internal_1ecf1b6fe62022c6747f437b9954ae51a04689895d0991fc5d8d2197a7ea92cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 168
        if (twig_in_filter("-inline", ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 169
            echo "        <ul class=\"inline-list\">
            ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 170, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 171
                echo "                <li>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 172
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 173
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "        </ul>
    ";
        } else {
            // line 177
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 178, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 179
                echo "                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 180
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 181
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "        </div>
    ";
        }
        
        $__internal_1ecf1b6fe62022c6747f437b9954ae51a04689895d0991fc5d8d2197a7ea92cc->leave($__internal_1ecf1b6fe62022c6747f437b9954ae51a04689895d0991fc5d8d2197a7ea92cc_prof);

        
        $__internal_3548e7b84c26550bccc822e27eecdd3030152e2b27317cd0120b5ba33ffc518c->leave($__internal_3548e7b84c26550bccc822e27eecdd3030152e2b27317cd0120b5ba33ffc518c_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_956f1fd7b4e4d3bb5ac4590eadbb266438d948195e396534ca553301d27b9c9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_956f1fd7b4e4d3bb5ac4590eadbb266438d948195e396534ca553301d27b9c9f->enter($__internal_956f1fd7b4e4d3bb5ac4590eadbb266438d948195e396534ca553301d27b9c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_ebe53c6eae4cb8900ead1aad2fc4c5566237a595010c48b29078f81b5da93ced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebe53c6eae4cb8900ead1aad2fc4c5566237a595010c48b29078f81b5da93ced->enter($__internal_ebe53c6eae4cb8900ead1aad2fc4c5566237a595010c48b29078f81b5da93ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 188
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 188, $this->getSourceContext()); })()), "")) : (""));
        // line 189
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 189, $this->getSourceContext()); })())) > 0)) {
            // line 190
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 190, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 191
            echo "    ";
        }
        // line 192
        echo "    ";
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 192, $this->getSourceContext()); })()))) {
            // line 193
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 193, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 195
            echo "        <div class=\"checkbox\">
            ";
            // line 196
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 196, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_ebe53c6eae4cb8900ead1aad2fc4c5566237a595010c48b29078f81b5da93ced->leave($__internal_ebe53c6eae4cb8900ead1aad2fc4c5566237a595010c48b29078f81b5da93ced_prof);

        
        $__internal_956f1fd7b4e4d3bb5ac4590eadbb266438d948195e396534ca553301d27b9c9f->leave($__internal_956f1fd7b4e4d3bb5ac4590eadbb266438d948195e396534ca553301d27b9c9f_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_82a39836666785d8ad8935489d16ac93af1757c8007490a3cb0fd4a78e6cfc82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82a39836666785d8ad8935489d16ac93af1757c8007490a3cb0fd4a78e6cfc82->enter($__internal_82a39836666785d8ad8935489d16ac93af1757c8007490a3cb0fd4a78e6cfc82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_979049d8ade90d47c24d4fa496e5faf77bd53d1abd0cadcde4806bc2c782bbba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_979049d8ade90d47c24d4fa496e5faf77bd53d1abd0cadcde4806bc2c782bbba->enter($__internal_979049d8ade90d47c24d4fa496e5faf77bd53d1abd0cadcde4806bc2c782bbba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 202
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 202, $this->getSourceContext()); })()), "")) : (""));
        // line 203
        echo "    ";
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 203, $this->getSourceContext()); })()))) {
            // line 204
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 204, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 206
            echo "        ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 206, $this->getSourceContext()); })())) > 0)) {
                // line 207
                $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 207, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        <div class=\"radio\">
            ";
            // line 210
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 210, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_979049d8ade90d47c24d4fa496e5faf77bd53d1abd0cadcde4806bc2c782bbba->leave($__internal_979049d8ade90d47c24d4fa496e5faf77bd53d1abd0cadcde4806bc2c782bbba_prof);

        
        $__internal_82a39836666785d8ad8935489d16ac93af1757c8007490a3cb0fd4a78e6cfc82->leave($__internal_82a39836666785d8ad8935489d16ac93af1757c8007490a3cb0fd4a78e6cfc82_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_65ec7ecf35f2ca2b4cb42b6f33f79bfe91cf295b31ef467d4d0ab41558b24cc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65ec7ecf35f2ca2b4cb42b6f33f79bfe91cf295b31ef467d4d0ab41558b24cc0->enter($__internal_65ec7ecf35f2ca2b4cb42b6f33f79bfe91cf295b31ef467d4d0ab41558b24cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_a3ba24ea04406ce88157b18bc504d3ce98cd33d697f9be9b69186938ee449792 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3ba24ea04406ce88157b18bc504d3ce98cd33d697f9be9b69186938ee449792->enter($__internal_a3ba24ea04406ce88157b18bc504d3ce98cd33d697f9be9b69186938ee449792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 218, $this->getSourceContext()); })())) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 219, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_a3ba24ea04406ce88157b18bc504d3ce98cd33d697f9be9b69186938ee449792->leave($__internal_a3ba24ea04406ce88157b18bc504d3ce98cd33d697f9be9b69186938ee449792_prof);

        
        $__internal_65ec7ecf35f2ca2b4cb42b6f33f79bfe91cf295b31ef467d4d0ab41558b24cc0->leave($__internal_65ec7ecf35f2ca2b4cb42b6f33f79bfe91cf295b31ef467d4d0ab41558b24cc0_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_6ce782da339a9ed2cfdb5b04a0cc53b071f5732e17388df9ee023d9a271cecb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ce782da339a9ed2cfdb5b04a0cc53b071f5732e17388df9ee023d9a271cecb1->enter($__internal_6ce782da339a9ed2cfdb5b04a0cc53b071f5732e17388df9ee023d9a271cecb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_e3a76dc2f794f486335d791ce1b6479a73deeb8fa2b82c94f828626a233408be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3a76dc2f794f486335d791ce1b6479a73deeb8fa2b82c94f828626a233408be->enter($__internal_e3a76dc2f794f486335d791ce1b6479a73deeb8fa2b82c94f828626a233408be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 225
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 225, $this->getSourceContext()); })())) > 0)) {
            // line 226
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 226, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 227
            echo "    ";
        }
        // line 228
        echo "    ";
        // line 229
        echo "    ";
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 229, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 230
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_e3a76dc2f794f486335d791ce1b6479a73deeb8fa2b82c94f828626a233408be->leave($__internal_e3a76dc2f794f486335d791ce1b6479a73deeb8fa2b82c94f828626a233408be_prof);

        
        $__internal_6ce782da339a9ed2cfdb5b04a0cc53b071f5732e17388df9ee023d9a271cecb1->leave($__internal_6ce782da339a9ed2cfdb5b04a0cc53b071f5732e17388df9ee023d9a271cecb1_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_2f1e56f77ce891de4463105b915148c108823dbb051abd7ddd3b3d6c16bf8fbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f1e56f77ce891de4463105b915148c108823dbb051abd7ddd3b3d6c16bf8fbb->enter($__internal_2f1e56f77ce891de4463105b915148c108823dbb051abd7ddd3b3d6c16bf8fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_70a31032008cf636c6206819d5d0e72a6da8040aac1b3f28969c9c522395a3f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70a31032008cf636c6206819d5d0e72a6da8040aac1b3f28969c9c522395a3f6->enter($__internal_70a31032008cf636c6206819d5d0e72a6da8040aac1b3f28969c9c522395a3f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_70a31032008cf636c6206819d5d0e72a6da8040aac1b3f28969c9c522395a3f6->leave($__internal_70a31032008cf636c6206819d5d0e72a6da8040aac1b3f28969c9c522395a3f6_prof);

        
        $__internal_2f1e56f77ce891de4463105b915148c108823dbb051abd7ddd3b3d6c16bf8fbb->leave($__internal_2f1e56f77ce891de4463105b915148c108823dbb051abd7ddd3b3d6c16bf8fbb_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_6d1e49bdb3c669accc5ccd5bfd3b6300c63787ef7f76a4a8360b24478b9071cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d1e49bdb3c669accc5ccd5bfd3b6300c63787ef7f76a4a8360b24478b9071cf->enter($__internal_6d1e49bdb3c669accc5ccd5bfd3b6300c63787ef7f76a4a8360b24478b9071cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_4550c9a9572e0e1aafe85df4101d45a82b8b29fd0d67f63085d6848bce37e606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4550c9a9572e0e1aafe85df4101d45a82b8b29fd0d67f63085d6848bce37e606->enter($__internal_4550c9a9572e0e1aafe85df4101d45a82b8b29fd0d67f63085d6848bce37e606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_4550c9a9572e0e1aafe85df4101d45a82b8b29fd0d67f63085d6848bce37e606->leave($__internal_4550c9a9572e0e1aafe85df4101d45a82b8b29fd0d67f63085d6848bce37e606_prof);

        
        $__internal_6d1e49bdb3c669accc5ccd5bfd3b6300c63787ef7f76a4a8360b24478b9071cf->leave($__internal_6d1e49bdb3c669accc5ccd5bfd3b6300c63787ef7f76a4a8360b24478b9071cf_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_0c2d89e673a181730f6658ea8210aa745bd9779fa1632e0e89404c5d5fbbf26b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c2d89e673a181730f6658ea8210aa745bd9779fa1632e0e89404c5d5fbbf26b->enter($__internal_0c2d89e673a181730f6658ea8210aa745bd9779fa1632e0e89404c5d5fbbf26b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_ff175499b9616a4e779ee3c039ce4c5a7036661fb29c16410dadc58ed063b426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff175499b9616a4e779ee3c039ce4c5a7036661fb29c16410dadc58ed063b426->enter($__internal_ff175499b9616a4e779ee3c039ce4c5a7036661fb29c16410dadc58ed063b426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 242
        if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 242, $this->getSourceContext()); })())) {
            // line 243
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 243, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            // line 244
            echo "    ";
        }
        // line 245
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 245, $this->getSourceContext()); })())) > 0)) {
            // line 246
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 246, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 247
            echo "    ";
        }
        // line 248
        echo "    ";
        if (array_key_exists("parent_label_class", $context)) {
            // line 249
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 249, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 249, $this->getSourceContext()); })())))));
            // line 250
            echo "    ";
        }
        // line 251
        echo "    ";
        if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 251, $this->getSourceContext()); })()))) {
            // line 252
            if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 252, $this->getSourceContext()); })()))) {
                // line 253
                $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 253, $this->getSourceContext()); })()), array("%name%" =>                 // line 254
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 254, $this->getSourceContext()); })()), "%id%" =>                 // line 255
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 255, $this->getSourceContext()); })())));
            } else {
                // line 258
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 258, $this->getSourceContext()); })()));
            }
        }
        // line 261
        echo "    <label";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 261, $this->getSourceContext()); })()));
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
        echo ">
        ";
        // line 262
        echo (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 262, $this->getSourceContext()); })());
        echo "
        ";
        // line 263
        echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 263, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 263, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 263, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 263, $this->getSourceContext()); })())))), "html", null, true);
        echo "
    </label>";
        
        $__internal_ff175499b9616a4e779ee3c039ce4c5a7036661fb29c16410dadc58ed063b426->leave($__internal_ff175499b9616a4e779ee3c039ce4c5a7036661fb29c16410dadc58ed063b426_prof);

        
        $__internal_0c2d89e673a181730f6658ea8210aa745bd9779fa1632e0e89404c5d5fbbf26b->leave($__internal_0c2d89e673a181730f6658ea8210aa745bd9779fa1632e0e89404c5d5fbbf26b_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_a874b52f25ffa07b1f1ff30e2774ccdfec4f60d7a360fa2b9153240303304ac7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a874b52f25ffa07b1f1ff30e2774ccdfec4f60d7a360fa2b9153240303304ac7->enter($__internal_a874b52f25ffa07b1f1ff30e2774ccdfec4f60d7a360fa2b9153240303304ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_910cda1e300bf9c020c615f0e15b80d7685fe99e47347912b5f641fd10c28b6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_910cda1e300bf9c020c615f0e15b80d7685fe99e47347912b5f641fd10c28b6f->enter($__internal_910cda1e300bf9c020c615f0e15b80d7685fe99e47347912b5f641fd10c28b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 270
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 271
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 271, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 271, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 271, $this->getSourceContext()); })()))) {
            echo " error";
        }
        echo "\">
            ";
        // line 272
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 272, $this->getSourceContext()); })()), 'label');
        echo "
            ";
        // line 273
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 273, $this->getSourceContext()); })()), 'widget');
        echo "
            ";
        // line 274
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 274, $this->getSourceContext()); })()), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_910cda1e300bf9c020c615f0e15b80d7685fe99e47347912b5f641fd10c28b6f->leave($__internal_910cda1e300bf9c020c615f0e15b80d7685fe99e47347912b5f641fd10c28b6f_prof);

        
        $__internal_a874b52f25ffa07b1f1ff30e2774ccdfec4f60d7a360fa2b9153240303304ac7->leave($__internal_a874b52f25ffa07b1f1ff30e2774ccdfec4f60d7a360fa2b9153240303304ac7_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_d8271db2fbe87f4119a8c134acf10ae098697cd48c0db7c8d287a406501b1c76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8271db2fbe87f4119a8c134acf10ae098697cd48c0db7c8d287a406501b1c76->enter($__internal_d8271db2fbe87f4119a8c134acf10ae098697cd48c0db7c8d287a406501b1c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_fed2ba6901371d84b16251397fee659a08e0ad6024a4242ade7b07d6b194f937 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fed2ba6901371d84b16251397fee659a08e0ad6024a4242ade7b07d6b194f937->enter($__internal_fed2ba6901371d84b16251397fee659a08e0ad6024a4242ade7b07d6b194f937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_fed2ba6901371d84b16251397fee659a08e0ad6024a4242ade7b07d6b194f937->leave($__internal_fed2ba6901371d84b16251397fee659a08e0ad6024a4242ade7b07d6b194f937_prof);

        
        $__internal_d8271db2fbe87f4119a8c134acf10ae098697cd48c0db7c8d287a406501b1c76->leave($__internal_d8271db2fbe87f4119a8c134acf10ae098697cd48c0db7c8d287a406501b1c76_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_1606b0cca838b95a03e3a7b2e10deec33d6ff85c7787bb22ef4862e668f646cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1606b0cca838b95a03e3a7b2e10deec33d6ff85c7787bb22ef4862e668f646cb->enter($__internal_1606b0cca838b95a03e3a7b2e10deec33d6ff85c7787bb22ef4862e668f646cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_22e29b49f4c4d21324883cecc90bbded677eb22a49bc675ce025496d00280dfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22e29b49f4c4d21324883cecc90bbded677eb22a49bc675ce025496d00280dfe->enter($__internal_22e29b49f4c4d21324883cecc90bbded677eb22a49bc675ce025496d00280dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_22e29b49f4c4d21324883cecc90bbded677eb22a49bc675ce025496d00280dfe->leave($__internal_22e29b49f4c4d21324883cecc90bbded677eb22a49bc675ce025496d00280dfe_prof);

        
        $__internal_1606b0cca838b95a03e3a7b2e10deec33d6ff85c7787bb22ef4862e668f646cb->leave($__internal_1606b0cca838b95a03e3a7b2e10deec33d6ff85c7787bb22ef4862e668f646cb_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_171f74bd997265029125bacd6b0b88d61ae14d3eff609e22d456993c992b9847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_171f74bd997265029125bacd6b0b88d61ae14d3eff609e22d456993c992b9847->enter($__internal_171f74bd997265029125bacd6b0b88d61ae14d3eff609e22d456993c992b9847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_dd67487aac007de9f6ffe42bbd114ab724ea05ea4f4c3c4a937786f8082d393e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd67487aac007de9f6ffe42bbd114ab724ea05ea4f4c3c4a937786f8082d393e->enter($__internal_dd67487aac007de9f6ffe42bbd114ab724ea05ea4f4c3c4a937786f8082d393e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_dd67487aac007de9f6ffe42bbd114ab724ea05ea4f4c3c4a937786f8082d393e->leave($__internal_dd67487aac007de9f6ffe42bbd114ab724ea05ea4f4c3c4a937786f8082d393e_prof);

        
        $__internal_171f74bd997265029125bacd6b0b88d61ae14d3eff609e22d456993c992b9847->leave($__internal_171f74bd997265029125bacd6b0b88d61ae14d3eff609e22d456993c992b9847_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_61fe82db58e67c5493a6b3db7ce78695b2366e43bdfd1c40bfe3a41cf1c2cc83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61fe82db58e67c5493a6b3db7ce78695b2366e43bdfd1c40bfe3a41cf1c2cc83->enter($__internal_61fe82db58e67c5493a6b3db7ce78695b2366e43bdfd1c40bfe3a41cf1c2cc83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_e91f1285bc693502921cb1b38adf3155e9986a9d53aa8fc162e0ab13e3af525b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e91f1285bc693502921cb1b38adf3155e9986a9d53aa8fc162e0ab13e3af525b->enter($__internal_e91f1285bc693502921cb1b38adf3155e9986a9d53aa8fc162e0ab13e3af525b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e91f1285bc693502921cb1b38adf3155e9986a9d53aa8fc162e0ab13e3af525b->leave($__internal_e91f1285bc693502921cb1b38adf3155e9986a9d53aa8fc162e0ab13e3af525b_prof);

        
        $__internal_61fe82db58e67c5493a6b3db7ce78695b2366e43bdfd1c40bfe3a41cf1c2cc83->leave($__internal_61fe82db58e67c5493a6b3db7ce78695b2366e43bdfd1c40bfe3a41cf1c2cc83_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_d802655bb1332464cb7a4557fa93007ff717c3970256cbc749a13b362b7df801 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d802655bb1332464cb7a4557fa93007ff717c3970256cbc749a13b362b7df801->enter($__internal_d802655bb1332464cb7a4557fa93007ff717c3970256cbc749a13b362b7df801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_23887e8237f27dd4d29e540b7a3fe6d1ef67d53fdce09762e1ef8c3e617792d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23887e8237f27dd4d29e540b7a3fe6d1ef67d53fdce09762e1ef8c3e617792d1->enter($__internal_23887e8237f27dd4d29e540b7a3fe6d1ef67d53fdce09762e1ef8c3e617792d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 300
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 301
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 301, $this->getSourceContext()); })())) {
            echo " error";
        }
        echo "\">
            ";
        // line 302
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 302, $this->getSourceContext()); })()), 'widget');
        echo "
            ";
        // line 303
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 303, $this->getSourceContext()); })()), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_23887e8237f27dd4d29e540b7a3fe6d1ef67d53fdce09762e1ef8c3e617792d1->leave($__internal_23887e8237f27dd4d29e540b7a3fe6d1ef67d53fdce09762e1ef8c3e617792d1_prof);

        
        $__internal_d802655bb1332464cb7a4557fa93007ff717c3970256cbc749a13b362b7df801->leave($__internal_d802655bb1332464cb7a4557fa93007ff717c3970256cbc749a13b362b7df801_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_8c92321f20512e94acf5ef3d0c47e39dcea7759373c6a97733232c897c5a7491 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c92321f20512e94acf5ef3d0c47e39dcea7759373c6a97733232c897c5a7491->enter($__internal_8c92321f20512e94acf5ef3d0c47e39dcea7759373c6a97733232c897c5a7491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_68dc26a60e34b379dbb4d08f0ad8444741c20818d02ebecea98836bb0391cb7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68dc26a60e34b379dbb4d08f0ad8444741c20818d02ebecea98836bb0391cb7f->enter($__internal_68dc26a60e34b379dbb4d08f0ad8444741c20818d02ebecea98836bb0391cb7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 309
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 310
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 310, $this->getSourceContext()); })())) {
            echo " error";
        }
        echo "\">
            ";
        // line 311
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 311, $this->getSourceContext()); })()), 'widget');
        echo "
            ";
        // line 312
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 312, $this->getSourceContext()); })()), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_68dc26a60e34b379dbb4d08f0ad8444741c20818d02ebecea98836bb0391cb7f->leave($__internal_68dc26a60e34b379dbb4d08f0ad8444741c20818d02ebecea98836bb0391cb7f_prof);

        
        $__internal_8c92321f20512e94acf5ef3d0c47e39dcea7759373c6a97733232c897c5a7491->leave($__internal_8c92321f20512e94acf5ef3d0c47e39dcea7759373c6a97733232c897c5a7491_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_241d559a93feb3425118ff5dfb4e50cd9d05befa523e4d0075c28683cbb1d703 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_241d559a93feb3425118ff5dfb4e50cd9d05befa523e4d0075c28683cbb1d703->enter($__internal_241d559a93feb3425118ff5dfb4e50cd9d05befa523e4d0075c28683cbb1d703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_478f4fda82b9a6d4b53c0f34dac17b27e832b17645662a8a0a5864fb914fe316 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_478f4fda82b9a6d4b53c0f34dac17b27e832b17645662a8a0a5864fb914fe316->enter($__internal_478f4fda82b9a6d4b53c0f34dac17b27e832b17645662a8a0a5864fb914fe316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 320
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 320, $this->getSourceContext()); })())) > 0)) {
            // line 321
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 321, $this->getSourceContext()); })()))) {
                echo "<small class=\"error\">";
            } else {
                echo "<div data-alert class=\"alert-box alert\">";
            }
            // line 322
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 322, $this->getSourceContext()); })()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 323
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "
            ";
                // line 324
                if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                    echo ", ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 326, $this->getSourceContext()); })()))) {
                echo "</small>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_478f4fda82b9a6d4b53c0f34dac17b27e832b17645662a8a0a5864fb914fe316->leave($__internal_478f4fda82b9a6d4b53c0f34dac17b27e832b17645662a8a0a5864fb914fe316_prof);

        
        $__internal_241d559a93feb3425118ff5dfb4e50cd9d05befa523e4d0075c28683cbb1d703->leave($__internal_241d559a93feb3425118ff5dfb4e50cd9d05befa523e4d0075c28683cbb1d703_prof);

    }

    public function getTemplateName()
    {
        return "foundation_5_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1078 => 326,  1062 => 324,  1058 => 323,  1041 => 322,  1035 => 321,  1033 => 320,  1024 => 319,  1011 => 312,  1007 => 311,  1001 => 310,  998 => 309,  989 => 308,  976 => 303,  972 => 302,  966 => 301,  963 => 300,  954 => 299,  943 => 296,  941 => 295,  932 => 294,  921 => 291,  919 => 290,  910 => 289,  899 => 286,  897 => 285,  888 => 284,  877 => 281,  875 => 280,  866 => 279,  853 => 274,  849 => 273,  845 => 272,  839 => 271,  836 => 270,  827 => 269,  815 => 263,  811 => 262,  795 => 261,  791 => 258,  788 => 255,  787 => 254,  786 => 253,  784 => 252,  781 => 251,  778 => 250,  775 => 249,  772 => 248,  769 => 247,  767 => 246,  764 => 245,  761 => 244,  758 => 243,  756 => 242,  747 => 241,  737 => 238,  728 => 237,  718 => 234,  709 => 233,  699 => 230,  696 => 229,  694 => 228,  691 => 227,  689 => 226,  687 => 225,  678 => 224,  668 => 221,  665 => 220,  663 => 219,  661 => 218,  652 => 217,  638 => 210,  635 => 209,  632 => 208,  630 => 207,  627 => 206,  621 => 204,  618 => 203,  616 => 202,  607 => 201,  593 => 196,  590 => 195,  584 => 193,  581 => 192,  578 => 191,  576 => 190,  573 => 189,  571 => 188,  562 => 187,  550 => 183,  543 => 181,  541 => 180,  539 => 179,  535 => 178,  530 => 177,  526 => 175,  519 => 173,  517 => 172,  515 => 171,  511 => 170,  508 => 169,  506 => 168,  497 => 167,  487 => 164,  485 => 163,  483 => 162,  477 => 159,  475 => 158,  473 => 157,  471 => 156,  469 => 155,  460 => 153,  458 => 152,  450 => 151,  447 => 149,  445 => 148,  442 => 147,  439 => 146,  437 => 145,  435 => 144,  432 => 143,  429 => 142,  427 => 141,  425 => 140,  416 => 139,  405 => 136,  401 => 134,  398 => 133,  390 => 128,  379 => 121,  371 => 116,  358 => 106,  347 => 99,  344 => 98,  338 => 96,  335 => 95,  332 => 94,  329 => 92,  327 => 91,  318 => 90,  307 => 87,  303 => 85,  301 => 84,  299 => 82,  298 => 81,  297 => 80,  296 => 79,  290 => 77,  287 => 76,  284 => 75,  281 => 73,  279 => 72,  270 => 71,  256 => 66,  252 => 65,  248 => 64,  243 => 62,  239 => 61,  236 => 60,  233 => 59,  230 => 57,  228 => 56,  219 => 55,  205 => 48,  203 => 47,  200 => 45,  191 => 44,  181 => 41,  175 => 38,  172 => 37,  170 => 36,  167 => 35,  165 => 34,  163 => 33,  157 => 30,  154 => 29,  151 => 28,  149 => 27,  146 => 26,  137 => 25,  127 => 22,  125 => 21,  116 => 20,  106 => 17,  103 => 16,  101 => 15,  99 => 14,  90 => 13,  80 => 10,  77 => 9,  75 => 8,  73 => 7,  64 => 6,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"form_div_layout.html.twig\" %}

{# Based on Foundation 5 Doc #}
{# Widgets #}

{% block form_widget_simple -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' button')|trim}) %}
    {{- parent() -}}
{%- endblock button_widget %}

{% block money_widget -%}
    <div class=\"row collapse\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        {% if prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        <div class=\"row\">
            <div class=\"large-7 columns\">{{ form_errors(form.date) }}</div>
            <div class=\"large-5 columns\">{{ form_errors(form.time) }}</div>
        </div>
        <div {{ block('widget_container_attributes') }}>
            <div class=\"large-7 columns\">{{ form_widget(form.date, { datetime: true } ) }}</div>
            <div class=\"large-5 columns\">{{ form_widget(form.time, { datetime: true } ) }}</div>
        </div>
    {% endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or not datetime %}
            <div {{ block('widget_container_attributes') }}>
        {% endif %}
        {{- date_pattern|replace({
            '{{ year }}': '<div class=\"large-4 columns\">' ~ form_widget(form.year) ~ '</div>',
            '{{ month }}': '<div class=\"large-4 columns\">' ~ form_widget(form.month) ~ '</div>',
            '{{ day }}': '<div class=\"large-4 columns\">' ~ form_widget(form.day) ~ '</div>',
        })|raw -}}
        {% if datetime is not defined or not datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or false == datetime %}
            <div {{ block('widget_container_attributes') -}}>
        {% endif %}
        {% if with_seconds %}
            <div class=\"large-4 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.second) }}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"large-6 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
        {% endif %}
        {% if datetime is not defined or false == datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}

    {% if multiple -%}
        {% set attr = attr|merge({style: (attr.style|default('') ~ ' height: auto; background-image: none;')|trim}) %}
    {% endif %}

    {% if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\" data-customforms=\"disabled\"{% endif %}>
        {% if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain) }}</option>
        {%- endif %}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {% if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif %}
        {%- endif -%}
        {% set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') %}
        <ul class=\"inline-list\">
            {% for child in form %}
                <li>{{ form_widget(child, {
                        parent_label_class: label_attr.class|default(''),
                    }) }}</li>
            {% endfor %}
        </ul>
    {% else %}
        <div {{ block('widget_container_attributes') }}>
            {% for child in form %}
                {{ form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) }}
            {% endfor %}
        </div>
    {% endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if 'checkbox-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        <div class=\"checkbox\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if 'radio-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        {% if errors|length > 0 -%}
            {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
        {% endif %}
        <div class=\"radio\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {% set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) %}
    {{- block('form_label') -}}
{%- endblock choice_label %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {% if required %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
    {% endif %}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if parent_label_class is defined %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ parent_label_class)|trim}) %}
    {% endif %}
    {% if label is empty %}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {% endif %}
    <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
        {{ widget|raw }}
        {{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}
    </label>
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
            {{ form_label(form) }}
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock form_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
        {% if form is not rootform %}<small class=\"error\">{% else %}<div data-alert class=\"alert-box alert\">{% endif %}
        {%- for error in errors -%}
            {{ error.message }}
            {% if not loop.last %}, {% endif %}
        {%- endfor -%}
        {% if form is not rootform %}</small>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "foundation_5_layout.html.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\foundation_5_layout.html.twig");
    }
}
