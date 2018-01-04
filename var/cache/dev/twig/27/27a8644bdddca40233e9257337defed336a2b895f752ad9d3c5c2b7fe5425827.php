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
        $__internal_38ec97102a7860c1f7fb8e0f115ef769603505106b65bbc3bbe75efdad385f67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38ec97102a7860c1f7fb8e0f115ef769603505106b65bbc3bbe75efdad385f67->enter($__internal_38ec97102a7860c1f7fb8e0f115ef769603505106b65bbc3bbe75efdad385f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_a9b26addb2b65db141dc058b14977eb3cc3f9bd82d8d968dacf932806fa4c4eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9b26addb2b65db141dc058b14977eb3cc3f9bd82d8d968dacf932806fa4c4eb->enter($__internal_a9b26addb2b65db141dc058b14977eb3cc3f9bd82d8d968dacf932806fa4c4eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38ec97102a7860c1f7fb8e0f115ef769603505106b65bbc3bbe75efdad385f67->leave($__internal_38ec97102a7860c1f7fb8e0f115ef769603505106b65bbc3bbe75efdad385f67_prof);

        
        $__internal_a9b26addb2b65db141dc058b14977eb3cc3f9bd82d8d968dacf932806fa4c4eb->leave($__internal_a9b26addb2b65db141dc058b14977eb3cc3f9bd82d8d968dacf932806fa4c4eb_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_f0f28255e2cec87d06fd4d9d666653f44699aec6d3e7b2e29d1e7a15f3dfdd08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0f28255e2cec87d06fd4d9d666653f44699aec6d3e7b2e29d1e7a15f3dfdd08->enter($__internal_f0f28255e2cec87d06fd4d9d666653f44699aec6d3e7b2e29d1e7a15f3dfdd08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_fa8043c17aba030bf3df818a45c29f851cef846406576c0fc04be6b5ee6f5bf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa8043c17aba030bf3df818a45c29f851cef846406576c0fc04be6b5ee6f5bf7->enter($__internal_fa8043c17aba030bf3df818a45c29f851cef846406576c0fc04be6b5ee6f5bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 7, $this->getSourceContext()); })())) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 8, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_fa8043c17aba030bf3df818a45c29f851cef846406576c0fc04be6b5ee6f5bf7->leave($__internal_fa8043c17aba030bf3df818a45c29f851cef846406576c0fc04be6b5ee6f5bf7_prof);

        
        $__internal_f0f28255e2cec87d06fd4d9d666653f44699aec6d3e7b2e29d1e7a15f3dfdd08->leave($__internal_f0f28255e2cec87d06fd4d9d666653f44699aec6d3e7b2e29d1e7a15f3dfdd08_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_564ca05f126ee6f83f0851525e6cab9e52b46ce5ec07eb643e127d70bfc595c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_564ca05f126ee6f83f0851525e6cab9e52b46ce5ec07eb643e127d70bfc595c8->enter($__internal_564ca05f126ee6f83f0851525e6cab9e52b46ce5ec07eb643e127d70bfc595c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_43a8d15955a3f05be10db988d0aa311c132d68d08749b59594382d476b4fd244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43a8d15955a3f05be10db988d0aa311c132d68d08749b59594382d476b4fd244->enter($__internal_43a8d15955a3f05be10db988d0aa311c132d68d08749b59594382d476b4fd244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 14, $this->getSourceContext()); })())) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 15, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_43a8d15955a3f05be10db988d0aa311c132d68d08749b59594382d476b4fd244->leave($__internal_43a8d15955a3f05be10db988d0aa311c132d68d08749b59594382d476b4fd244_prof);

        
        $__internal_564ca05f126ee6f83f0851525e6cab9e52b46ce5ec07eb643e127d70bfc595c8->leave($__internal_564ca05f126ee6f83f0851525e6cab9e52b46ce5ec07eb643e127d70bfc595c8_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_fdae5c2a9c8675f2a82fc5f0902f007ba2c1e1e62157c24d997119219ed8c920 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdae5c2a9c8675f2a82fc5f0902f007ba2c1e1e62157c24d997119219ed8c920->enter($__internal_fdae5c2a9c8675f2a82fc5f0902f007ba2c1e1e62157c24d997119219ed8c920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_cb4f31157f23a98879b1b755c69a0f210bcd0a523cbe65e285fa353b220fc457 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb4f31157f23a98879b1b755c69a0f210bcd0a523cbe65e285fa353b220fc457->enter($__internal_cb4f31157f23a98879b1b755c69a0f210bcd0a523cbe65e285fa353b220fc457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 21, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_cb4f31157f23a98879b1b755c69a0f210bcd0a523cbe65e285fa353b220fc457->leave($__internal_cb4f31157f23a98879b1b755c69a0f210bcd0a523cbe65e285fa353b220fc457_prof);

        
        $__internal_fdae5c2a9c8675f2a82fc5f0902f007ba2c1e1e62157c24d997119219ed8c920->leave($__internal_fdae5c2a9c8675f2a82fc5f0902f007ba2c1e1e62157c24d997119219ed8c920_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_c0d818d45d53af4df08f7c27aa4472b091fa520e8c4785b63552ac00ddea9515 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0d818d45d53af4df08f7c27aa4472b091fa520e8c4785b63552ac00ddea9515->enter($__internal_c0d818d45d53af4df08f7c27aa4472b091fa520e8c4785b63552ac00ddea9515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_42198d3d54ab1d9ec1bdbccd3bffa77bfa81bb28d30de3764bb242bde4f6b018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42198d3d54ab1d9ec1bdbccd3bffa77bfa81bb28d30de3764bb242bde4f6b018->enter($__internal_42198d3d54ab1d9ec1bdbccd3bffa77bfa81bb28d30de3764bb242bde4f6b018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

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
        
        $__internal_42198d3d54ab1d9ec1bdbccd3bffa77bfa81bb28d30de3764bb242bde4f6b018->leave($__internal_42198d3d54ab1d9ec1bdbccd3bffa77bfa81bb28d30de3764bb242bde4f6b018_prof);

        
        $__internal_c0d818d45d53af4df08f7c27aa4472b091fa520e8c4785b63552ac00ddea9515->leave($__internal_c0d818d45d53af4df08f7c27aa4472b091fa520e8c4785b63552ac00ddea9515_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_0208a88c743b226cf1cd18563211ff5f907df21357e133f0cc541ab2c6ef91dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0208a88c743b226cf1cd18563211ff5f907df21357e133f0cc541ab2c6ef91dd->enter($__internal_0208a88c743b226cf1cd18563211ff5f907df21357e133f0cc541ab2c6ef91dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_830e030eb7a3a03de74c3c3b6518a6dd564c49649cfc6e4f0b374ae45c183b3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_830e030eb7a3a03de74c3c3b6518a6dd564c49649cfc6e4f0b374ae45c183b3a->enter($__internal_830e030eb7a3a03de74c3c3b6518a6dd564c49649cfc6e4f0b374ae45c183b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

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
        
        $__internal_830e030eb7a3a03de74c3c3b6518a6dd564c49649cfc6e4f0b374ae45c183b3a->leave($__internal_830e030eb7a3a03de74c3c3b6518a6dd564c49649cfc6e4f0b374ae45c183b3a_prof);

        
        $__internal_0208a88c743b226cf1cd18563211ff5f907df21357e133f0cc541ab2c6ef91dd->leave($__internal_0208a88c743b226cf1cd18563211ff5f907df21357e133f0cc541ab2c6ef91dd_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_a1a177002c718dc04f03a90654e39d7d0fffc52a007bd73a804fc74eabe6be85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1a177002c718dc04f03a90654e39d7d0fffc52a007bd73a804fc74eabe6be85->enter($__internal_a1a177002c718dc04f03a90654e39d7d0fffc52a007bd73a804fc74eabe6be85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_5ec32d2dcb3810c63651bb58aa7e39322ea7e88592c7f9ad49a31a8561e044ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ec32d2dcb3810c63651bb58aa7e39322ea7e88592c7f9ad49a31a8561e044ec->enter($__internal_5ec32d2dcb3810c63651bb58aa7e39322ea7e88592c7f9ad49a31a8561e044ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_5ec32d2dcb3810c63651bb58aa7e39322ea7e88592c7f9ad49a31a8561e044ec->leave($__internal_5ec32d2dcb3810c63651bb58aa7e39322ea7e88592c7f9ad49a31a8561e044ec_prof);

        
        $__internal_a1a177002c718dc04f03a90654e39d7d0fffc52a007bd73a804fc74eabe6be85->leave($__internal_a1a177002c718dc04f03a90654e39d7d0fffc52a007bd73a804fc74eabe6be85_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_740cbb9ea75e33987c82ce7e9bd7a7e682430eff2bba961ea4e56ad318a35ff3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_740cbb9ea75e33987c82ce7e9bd7a7e682430eff2bba961ea4e56ad318a35ff3->enter($__internal_740cbb9ea75e33987c82ce7e9bd7a7e682430eff2bba961ea4e56ad318a35ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_894a19453d6017dca04928e2f0cd1c317f541d1b0909511f8ffd0efebae6240c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_894a19453d6017dca04928e2f0cd1c317f541d1b0909511f8ffd0efebae6240c->enter($__internal_894a19453d6017dca04928e2f0cd1c317f541d1b0909511f8ffd0efebae6240c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_894a19453d6017dca04928e2f0cd1c317f541d1b0909511f8ffd0efebae6240c->leave($__internal_894a19453d6017dca04928e2f0cd1c317f541d1b0909511f8ffd0efebae6240c_prof);

        
        $__internal_740cbb9ea75e33987c82ce7e9bd7a7e682430eff2bba961ea4e56ad318a35ff3->leave($__internal_740cbb9ea75e33987c82ce7e9bd7a7e682430eff2bba961ea4e56ad318a35ff3_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_1f401f0b67c28045634c129149de0c075ba12c17cfe30731a32301830f1ffac8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f401f0b67c28045634c129149de0c075ba12c17cfe30731a32301830f1ffac8->enter($__internal_1f401f0b67c28045634c129149de0c075ba12c17cfe30731a32301830f1ffac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_304853b6fe58c657a3501acb2bb3aff07d44cf66d20c5ece7c45abfc899dc705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_304853b6fe58c657a3501acb2bb3aff07d44cf66d20c5ece7c45abfc899dc705->enter($__internal_304853b6fe58c657a3501acb2bb3aff07d44cf66d20c5ece7c45abfc899dc705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_304853b6fe58c657a3501acb2bb3aff07d44cf66d20c5ece7c45abfc899dc705->leave($__internal_304853b6fe58c657a3501acb2bb3aff07d44cf66d20c5ece7c45abfc899dc705_prof);

        
        $__internal_1f401f0b67c28045634c129149de0c075ba12c17cfe30731a32301830f1ffac8->leave($__internal_1f401f0b67c28045634c129149de0c075ba12c17cfe30731a32301830f1ffac8_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_e0f8705623a0c775e51ab9823938c548851eb30040342c86847a28bd2e1d2dba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0f8705623a0c775e51ab9823938c548851eb30040342c86847a28bd2e1d2dba->enter($__internal_e0f8705623a0c775e51ab9823938c548851eb30040342c86847a28bd2e1d2dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_6851590354023fe3f467d8cb2eaa993f534c127aef935f83c4f70ffc3952c184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6851590354023fe3f467d8cb2eaa993f534c127aef935f83c4f70ffc3952c184->enter($__internal_6851590354023fe3f467d8cb2eaa993f534c127aef935f83c4f70ffc3952c184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_6851590354023fe3f467d8cb2eaa993f534c127aef935f83c4f70ffc3952c184->leave($__internal_6851590354023fe3f467d8cb2eaa993f534c127aef935f83c4f70ffc3952c184_prof);

        
        $__internal_e0f8705623a0c775e51ab9823938c548851eb30040342c86847a28bd2e1d2dba->leave($__internal_e0f8705623a0c775e51ab9823938c548851eb30040342c86847a28bd2e1d2dba_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_eb65a2c8fa020e3906ca5fd0740c1dbe3afe45832ff9f3af4e684c361dc5dda3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb65a2c8fa020e3906ca5fd0740c1dbe3afe45832ff9f3af4e684c361dc5dda3->enter($__internal_eb65a2c8fa020e3906ca5fd0740c1dbe3afe45832ff9f3af4e684c361dc5dda3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_d6bb0d314964a6e4a6ee3da05576a4c4a0ebcb9c37855f4bc9da60907138b183 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6bb0d314964a6e4a6ee3da05576a4c4a0ebcb9c37855f4bc9da60907138b183->enter($__internal_d6bb0d314964a6e4a6ee3da05576a4c4a0ebcb9c37855f4bc9da60907138b183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_d6bb0d314964a6e4a6ee3da05576a4c4a0ebcb9c37855f4bc9da60907138b183->leave($__internal_d6bb0d314964a6e4a6ee3da05576a4c4a0ebcb9c37855f4bc9da60907138b183_prof);

        
        $__internal_eb65a2c8fa020e3906ca5fd0740c1dbe3afe45832ff9f3af4e684c361dc5dda3->leave($__internal_eb65a2c8fa020e3906ca5fd0740c1dbe3afe45832ff9f3af4e684c361dc5dda3_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_f7747b6d13ed11d1ecd0889e5dfe66f282a961a363b0e32f23d5aaebf9cb20c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7747b6d13ed11d1ecd0889e5dfe66f282a961a363b0e32f23d5aaebf9cb20c3->enter($__internal_f7747b6d13ed11d1ecd0889e5dfe66f282a961a363b0e32f23d5aaebf9cb20c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_c4a111319d608f045320678cb71a8cc69184af2b6a25748a1e0ad9cfe212f678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4a111319d608f045320678cb71a8cc69184af2b6a25748a1e0ad9cfe212f678->enter($__internal_c4a111319d608f045320678cb71a8cc69184af2b6a25748a1e0ad9cfe212f678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_c4a111319d608f045320678cb71a8cc69184af2b6a25748a1e0ad9cfe212f678->leave($__internal_c4a111319d608f045320678cb71a8cc69184af2b6a25748a1e0ad9cfe212f678_prof);

        
        $__internal_f7747b6d13ed11d1ecd0889e5dfe66f282a961a363b0e32f23d5aaebf9cb20c3->leave($__internal_f7747b6d13ed11d1ecd0889e5dfe66f282a961a363b0e32f23d5aaebf9cb20c3_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_a2ffd771727c494ff59335b1cd6186d2d93179ac5a49f9caf3f7a956eda328f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2ffd771727c494ff59335b1cd6186d2d93179ac5a49f9caf3f7a956eda328f0->enter($__internal_a2ffd771727c494ff59335b1cd6186d2d93179ac5a49f9caf3f7a956eda328f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_94f14e35f06335fa343fc1951786ecd8277a2998c0c06970091a799951cec230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94f14e35f06335fa343fc1951786ecd8277a2998c0c06970091a799951cec230->enter($__internal_94f14e35f06335fa343fc1951786ecd8277a2998c0c06970091a799951cec230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_94f14e35f06335fa343fc1951786ecd8277a2998c0c06970091a799951cec230->leave($__internal_94f14e35f06335fa343fc1951786ecd8277a2998c0c06970091a799951cec230_prof);

        
        $__internal_a2ffd771727c494ff59335b1cd6186d2d93179ac5a49f9caf3f7a956eda328f0->leave($__internal_a2ffd771727c494ff59335b1cd6186d2d93179ac5a49f9caf3f7a956eda328f0_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_f7cdd39409affc0e439085a8840b1004e746b06fcda0737b25ccaa7c6e5c753c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7cdd39409affc0e439085a8840b1004e746b06fcda0737b25ccaa7c6e5c753c->enter($__internal_f7cdd39409affc0e439085a8840b1004e746b06fcda0737b25ccaa7c6e5c753c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_d8f9266c68a1d2d310d42bc0c9a37f12997cf56c3790bd670ec61be8707d25e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8f9266c68a1d2d310d42bc0c9a37f12997cf56c3790bd670ec61be8707d25e3->enter($__internal_d8f9266c68a1d2d310d42bc0c9a37f12997cf56c3790bd670ec61be8707d25e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 218, $this->getSourceContext()); })())) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 219, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_d8f9266c68a1d2d310d42bc0c9a37f12997cf56c3790bd670ec61be8707d25e3->leave($__internal_d8f9266c68a1d2d310d42bc0c9a37f12997cf56c3790bd670ec61be8707d25e3_prof);

        
        $__internal_f7cdd39409affc0e439085a8840b1004e746b06fcda0737b25ccaa7c6e5c753c->leave($__internal_f7cdd39409affc0e439085a8840b1004e746b06fcda0737b25ccaa7c6e5c753c_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_cbe5049b1ec794d58eca33d105f797c4c86e08b593cb0d635d6ce14c2421e39b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbe5049b1ec794d58eca33d105f797c4c86e08b593cb0d635d6ce14c2421e39b->enter($__internal_cbe5049b1ec794d58eca33d105f797c4c86e08b593cb0d635d6ce14c2421e39b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_5e79be83f6e4e3085a0afbb0862fc35b5d8980ee04cc1e3e629a6e67e19334fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e79be83f6e4e3085a0afbb0862fc35b5d8980ee04cc1e3e629a6e67e19334fe->enter($__internal_5e79be83f6e4e3085a0afbb0862fc35b5d8980ee04cc1e3e629a6e67e19334fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

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
        
        $__internal_5e79be83f6e4e3085a0afbb0862fc35b5d8980ee04cc1e3e629a6e67e19334fe->leave($__internal_5e79be83f6e4e3085a0afbb0862fc35b5d8980ee04cc1e3e629a6e67e19334fe_prof);

        
        $__internal_cbe5049b1ec794d58eca33d105f797c4c86e08b593cb0d635d6ce14c2421e39b->leave($__internal_cbe5049b1ec794d58eca33d105f797c4c86e08b593cb0d635d6ce14c2421e39b_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_647d1432489a5da529190d201e6d9c9e958ce9728b5f0c9740c0d1ef2a6845b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_647d1432489a5da529190d201e6d9c9e958ce9728b5f0c9740c0d1ef2a6845b7->enter($__internal_647d1432489a5da529190d201e6d9c9e958ce9728b5f0c9740c0d1ef2a6845b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_c0913b153c453f34280f3b15f08ded00c2cc4a5b0952b664388ff1b0911f7d26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0913b153c453f34280f3b15f08ded00c2cc4a5b0952b664388ff1b0911f7d26->enter($__internal_c0913b153c453f34280f3b15f08ded00c2cc4a5b0952b664388ff1b0911f7d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_c0913b153c453f34280f3b15f08ded00c2cc4a5b0952b664388ff1b0911f7d26->leave($__internal_c0913b153c453f34280f3b15f08ded00c2cc4a5b0952b664388ff1b0911f7d26_prof);

        
        $__internal_647d1432489a5da529190d201e6d9c9e958ce9728b5f0c9740c0d1ef2a6845b7->leave($__internal_647d1432489a5da529190d201e6d9c9e958ce9728b5f0c9740c0d1ef2a6845b7_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_5a3cb1cf842750c1f2f6f8328f384f5b3ae1dbc797abd601459013d24b95515b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a3cb1cf842750c1f2f6f8328f384f5b3ae1dbc797abd601459013d24b95515b->enter($__internal_5a3cb1cf842750c1f2f6f8328f384f5b3ae1dbc797abd601459013d24b95515b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_7c890c2da01eebba1762fa8545a29deb331b73dd72ea3a75c739201403ed93e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c890c2da01eebba1762fa8545a29deb331b73dd72ea3a75c739201403ed93e5->enter($__internal_7c890c2da01eebba1762fa8545a29deb331b73dd72ea3a75c739201403ed93e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_7c890c2da01eebba1762fa8545a29deb331b73dd72ea3a75c739201403ed93e5->leave($__internal_7c890c2da01eebba1762fa8545a29deb331b73dd72ea3a75c739201403ed93e5_prof);

        
        $__internal_5a3cb1cf842750c1f2f6f8328f384f5b3ae1dbc797abd601459013d24b95515b->leave($__internal_5a3cb1cf842750c1f2f6f8328f384f5b3ae1dbc797abd601459013d24b95515b_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_5c3533026c528884914be8178288e23588dec92e99f349c09aa29e027f5f1d85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c3533026c528884914be8178288e23588dec92e99f349c09aa29e027f5f1d85->enter($__internal_5c3533026c528884914be8178288e23588dec92e99f349c09aa29e027f5f1d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_0347ef07d321b54451fb4f70c0da788883d7bb77a18367bd7d361ab4d43edfd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0347ef07d321b54451fb4f70c0da788883d7bb77a18367bd7d361ab4d43edfd5->enter($__internal_0347ef07d321b54451fb4f70c0da788883d7bb77a18367bd7d361ab4d43edfd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_0347ef07d321b54451fb4f70c0da788883d7bb77a18367bd7d361ab4d43edfd5->leave($__internal_0347ef07d321b54451fb4f70c0da788883d7bb77a18367bd7d361ab4d43edfd5_prof);

        
        $__internal_5c3533026c528884914be8178288e23588dec92e99f349c09aa29e027f5f1d85->leave($__internal_5c3533026c528884914be8178288e23588dec92e99f349c09aa29e027f5f1d85_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_95a32ac436259f4213ad9aa20cdb32ab9de7d729ab075a32cf8412adb4d763a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95a32ac436259f4213ad9aa20cdb32ab9de7d729ab075a32cf8412adb4d763a3->enter($__internal_95a32ac436259f4213ad9aa20cdb32ab9de7d729ab075a32cf8412adb4d763a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_eb7792bad66a85853c231f3948e5a3ab44f9064522f8408e69c758922a9da34a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb7792bad66a85853c231f3948e5a3ab44f9064522f8408e69c758922a9da34a->enter($__internal_eb7792bad66a85853c231f3948e5a3ab44f9064522f8408e69c758922a9da34a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_eb7792bad66a85853c231f3948e5a3ab44f9064522f8408e69c758922a9da34a->leave($__internal_eb7792bad66a85853c231f3948e5a3ab44f9064522f8408e69c758922a9da34a_prof);

        
        $__internal_95a32ac436259f4213ad9aa20cdb32ab9de7d729ab075a32cf8412adb4d763a3->leave($__internal_95a32ac436259f4213ad9aa20cdb32ab9de7d729ab075a32cf8412adb4d763a3_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_408691531f903763c980b021ac0863aced96cf113aac8422f1c468e1ff9606a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_408691531f903763c980b021ac0863aced96cf113aac8422f1c468e1ff9606a6->enter($__internal_408691531f903763c980b021ac0863aced96cf113aac8422f1c468e1ff9606a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_4b8338adb407e83ce4e706ca76778a401b8297034efab20c2c132ac2b75eaded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b8338adb407e83ce4e706ca76778a401b8297034efab20c2c132ac2b75eaded->enter($__internal_4b8338adb407e83ce4e706ca76778a401b8297034efab20c2c132ac2b75eaded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_4b8338adb407e83ce4e706ca76778a401b8297034efab20c2c132ac2b75eaded->leave($__internal_4b8338adb407e83ce4e706ca76778a401b8297034efab20c2c132ac2b75eaded_prof);

        
        $__internal_408691531f903763c980b021ac0863aced96cf113aac8422f1c468e1ff9606a6->leave($__internal_408691531f903763c980b021ac0863aced96cf113aac8422f1c468e1ff9606a6_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_ffc4532cc66bd1d2fb264498ded12bd165133382184ede55017fb9887f77725f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffc4532cc66bd1d2fb264498ded12bd165133382184ede55017fb9887f77725f->enter($__internal_ffc4532cc66bd1d2fb264498ded12bd165133382184ede55017fb9887f77725f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_bf11d9f6bd1dc1c3871fdd6fceb065a919f6ca5e863c45073b706ab9f714535b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf11d9f6bd1dc1c3871fdd6fceb065a919f6ca5e863c45073b706ab9f714535b->enter($__internal_bf11d9f6bd1dc1c3871fdd6fceb065a919f6ca5e863c45073b706ab9f714535b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_bf11d9f6bd1dc1c3871fdd6fceb065a919f6ca5e863c45073b706ab9f714535b->leave($__internal_bf11d9f6bd1dc1c3871fdd6fceb065a919f6ca5e863c45073b706ab9f714535b_prof);

        
        $__internal_ffc4532cc66bd1d2fb264498ded12bd165133382184ede55017fb9887f77725f->leave($__internal_ffc4532cc66bd1d2fb264498ded12bd165133382184ede55017fb9887f77725f_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_9eb3db35fab73074c9b24b76031213917fca6738abd471766cb7d62a720f3299 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9eb3db35fab73074c9b24b76031213917fca6738abd471766cb7d62a720f3299->enter($__internal_9eb3db35fab73074c9b24b76031213917fca6738abd471766cb7d62a720f3299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_234269c00d08631ff7479c8004314d0cd1be2cafd308e7b418266a17511b0c56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_234269c00d08631ff7479c8004314d0cd1be2cafd308e7b418266a17511b0c56->enter($__internal_234269c00d08631ff7479c8004314d0cd1be2cafd308e7b418266a17511b0c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_234269c00d08631ff7479c8004314d0cd1be2cafd308e7b418266a17511b0c56->leave($__internal_234269c00d08631ff7479c8004314d0cd1be2cafd308e7b418266a17511b0c56_prof);

        
        $__internal_9eb3db35fab73074c9b24b76031213917fca6738abd471766cb7d62a720f3299->leave($__internal_9eb3db35fab73074c9b24b76031213917fca6738abd471766cb7d62a720f3299_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_9664b7ba3480bb1643dfbde46a6bdfebb507672e9959a1c1741677bdc84116e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9664b7ba3480bb1643dfbde46a6bdfebb507672e9959a1c1741677bdc84116e2->enter($__internal_9664b7ba3480bb1643dfbde46a6bdfebb507672e9959a1c1741677bdc84116e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_67ab52d18a388a9c18955796889adcb363b6a6218637611bb637b79ade224914 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67ab52d18a388a9c18955796889adcb363b6a6218637611bb637b79ade224914->enter($__internal_67ab52d18a388a9c18955796889adcb363b6a6218637611bb637b79ade224914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_67ab52d18a388a9c18955796889adcb363b6a6218637611bb637b79ade224914->leave($__internal_67ab52d18a388a9c18955796889adcb363b6a6218637611bb637b79ade224914_prof);

        
        $__internal_9664b7ba3480bb1643dfbde46a6bdfebb507672e9959a1c1741677bdc84116e2->leave($__internal_9664b7ba3480bb1643dfbde46a6bdfebb507672e9959a1c1741677bdc84116e2_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_e1b28f3d1dd289f8170eaa4475245bb0e38a5b008d63c74a1839d60028dbab1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1b28f3d1dd289f8170eaa4475245bb0e38a5b008d63c74a1839d60028dbab1c->enter($__internal_e1b28f3d1dd289f8170eaa4475245bb0e38a5b008d63c74a1839d60028dbab1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_8fe0ad471e000c5ce722858e2ce8c6d56e484faf566b4db8bcf00e28ffe9fe54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fe0ad471e000c5ce722858e2ce8c6d56e484faf566b4db8bcf00e28ffe9fe54->enter($__internal_8fe0ad471e000c5ce722858e2ce8c6d56e484faf566b4db8bcf00e28ffe9fe54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_8fe0ad471e000c5ce722858e2ce8c6d56e484faf566b4db8bcf00e28ffe9fe54->leave($__internal_8fe0ad471e000c5ce722858e2ce8c6d56e484faf566b4db8bcf00e28ffe9fe54_prof);

        
        $__internal_e1b28f3d1dd289f8170eaa4475245bb0e38a5b008d63c74a1839d60028dbab1c->leave($__internal_e1b28f3d1dd289f8170eaa4475245bb0e38a5b008d63c74a1839d60028dbab1c_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_fd7ff4c0351724088a20af2c341307efa3625a252088add1e2a700ffe6191c98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd7ff4c0351724088a20af2c341307efa3625a252088add1e2a700ffe6191c98->enter($__internal_fd7ff4c0351724088a20af2c341307efa3625a252088add1e2a700ffe6191c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_268dbe56f3ab9f22a35a7c5d279132b3fbac51108c578886b7233106de892c21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_268dbe56f3ab9f22a35a7c5d279132b3fbac51108c578886b7233106de892c21->enter($__internal_268dbe56f3ab9f22a35a7c5d279132b3fbac51108c578886b7233106de892c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_268dbe56f3ab9f22a35a7c5d279132b3fbac51108c578886b7233106de892c21->leave($__internal_268dbe56f3ab9f22a35a7c5d279132b3fbac51108c578886b7233106de892c21_prof);

        
        $__internal_fd7ff4c0351724088a20af2c341307efa3625a252088add1e2a700ffe6191c98->leave($__internal_fd7ff4c0351724088a20af2c341307efa3625a252088add1e2a700ffe6191c98_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_352ffb0ef7f2c160f854d477e8e177ed552abf98022b8a95a45292c967964ec3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_352ffb0ef7f2c160f854d477e8e177ed552abf98022b8a95a45292c967964ec3->enter($__internal_352ffb0ef7f2c160f854d477e8e177ed552abf98022b8a95a45292c967964ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_8064b91cc847ae57e640e9b9c3a6a786907c65a882eb150a1ceb13b1dd4df881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8064b91cc847ae57e640e9b9c3a6a786907c65a882eb150a1ceb13b1dd4df881->enter($__internal_8064b91cc847ae57e640e9b9c3a6a786907c65a882eb150a1ceb13b1dd4df881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_8064b91cc847ae57e640e9b9c3a6a786907c65a882eb150a1ceb13b1dd4df881->leave($__internal_8064b91cc847ae57e640e9b9c3a6a786907c65a882eb150a1ceb13b1dd4df881_prof);

        
        $__internal_352ffb0ef7f2c160f854d477e8e177ed552abf98022b8a95a45292c967964ec3->leave($__internal_352ffb0ef7f2c160f854d477e8e177ed552abf98022b8a95a45292c967964ec3_prof);

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
