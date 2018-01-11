<?php

/* bootstrap_base_layout.html.twig */
class __TwigTemplate_3b40da7d66caff383ebb45d366277b3339c56a2338c86615e842e0a9ca46ad37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_base_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86088ecc2d692826608d90a713b4dacef386dff80223ae041935030b96d51933 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86088ecc2d692826608d90a713b4dacef386dff80223ae041935030b96d51933->enter($__internal_86088ecc2d692826608d90a713b4dacef386dff80223ae041935030b96d51933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_base_layout.html.twig"));

        $__internal_5569a8249bfdd697426cd21802e0632560e142e4bbe783d75b21f5e59270cb73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5569a8249bfdd697426cd21802e0632560e142e4bbe783d75b21f5e59270cb73->enter($__internal_5569a8249bfdd697426cd21802e0632560e142e4bbe783d75b21f5e59270cb73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_base_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('money_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('date_widget', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('time_widget', $context, $blocks);
        // line 83
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 121
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 125
        echo "
";
        // line 126
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 145
        echo "
";
        // line 147
        echo "
";
        // line 148
        $this->displayBlock('choice_label', $context, $blocks);
        // line 153
        echo "
";
        // line 154
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('radio_label', $context, $blocks);
        // line 161
        echo "
";
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('button_row', $context, $blocks);
        // line 169
        echo "
";
        // line 170
        $this->displayBlock('choice_row', $context, $blocks);
        // line 174
        echo "
";
        // line 175
        $this->displayBlock('date_row', $context, $blocks);
        // line 179
        echo "
";
        // line 180
        $this->displayBlock('time_row', $context, $blocks);
        // line 184
        echo "
";
        // line 185
        $this->displayBlock('datetime_row', $context, $blocks);
        
        $__internal_86088ecc2d692826608d90a713b4dacef386dff80223ae041935030b96d51933->leave($__internal_86088ecc2d692826608d90a713b4dacef386dff80223ae041935030b96d51933_prof);

        
        $__internal_5569a8249bfdd697426cd21802e0632560e142e4bbe783d75b21f5e59270cb73->leave($__internal_5569a8249bfdd697426cd21802e0632560e142e4bbe783d75b21f5e59270cb73_prof);

    }

    // line 5
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_c7bc05ca106bceb40161bd093257899dd2c420ee32495fcc4cbeb18b5d167c42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7bc05ca106bceb40161bd093257899dd2c420ee32495fcc4cbeb18b5d167c42->enter($__internal_c7bc05ca106bceb40161bd093257899dd2c420ee32495fcc4cbeb18b5d167c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_d8966c12dd42c36ea9ee1d09eac6716b5f1af7455c022295207eb24c83fe157d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8966c12dd42c36ea9ee1d09eac6716b5f1af7455c022295207eb24c83fe157d->enter($__internal_d8966c12dd42c36ea9ee1d09eac6716b5f1af7455c022295207eb24c83fe157d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 6
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 6, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 7
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_d8966c12dd42c36ea9ee1d09eac6716b5f1af7455c022295207eb24c83fe157d->leave($__internal_d8966c12dd42c36ea9ee1d09eac6716b5f1af7455c022295207eb24c83fe157d_prof);

        
        $__internal_c7bc05ca106bceb40161bd093257899dd2c420ee32495fcc4cbeb18b5d167c42->leave($__internal_c7bc05ca106bceb40161bd093257899dd2c420ee32495fcc4cbeb18b5d167c42_prof);

    }

    // line 10
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_c11c4142820404881eb8cbc705a3798ecb48ec1c8e6eab33f7b836ae23280391 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c11c4142820404881eb8cbc705a3798ecb48ec1c8e6eab33f7b836ae23280391->enter($__internal_c11c4142820404881eb8cbc705a3798ecb48ec1c8e6eab33f7b836ae23280391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_183ddced12285f63de93696bbe8d3cdc5fa84f81e5509209727606211476436d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_183ddced12285f63de93696bbe8d3cdc5fa84f81e5509209727606211476436d->enter($__internal_183ddced12285f63de93696bbe8d3cdc5fa84f81e5509209727606211476436d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 11
        $context["prepend"] =  !(is_string($__internal_cc6c9d8960d0662c0498c92b0472ee7fb9c7eb162d6061a5d754660c1d86e327 = (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 11, $this->getSourceContext()); })())) && is_string($__internal_8320282c9479b375b5660835a3de8902322f918156fb034cc8a6f29c1a86b160 = "{{") && ('' === $__internal_8320282c9479b375b5660835a3de8902322f918156fb034cc8a6f29c1a86b160 || 0 === strpos($__internal_cc6c9d8960d0662c0498c92b0472ee7fb9c7eb162d6061a5d754660c1d86e327, $__internal_8320282c9479b375b5660835a3de8902322f918156fb034cc8a6f29c1a86b160)));
        // line 12
        echo "    ";
        $context["append"] =  !(is_string($__internal_330fc30ddf15bf8f69c9d367332d92311f6d2845b2fd862633520e65e02242a6 = (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 12, $this->getSourceContext()); })())) && is_string($__internal_e85c6862da6362a9f386e0fc14b2d677d8286d4b29e49b2aba62365f7a10730b = "}}") && ('' === $__internal_e85c6862da6362a9f386e0fc14b2d677d8286d4b29e49b2aba62365f7a10730b || $__internal_e85c6862da6362a9f386e0fc14b2d677d8286d4b29e49b2aba62365f7a10730b === substr($__internal_330fc30ddf15bf8f69c9d367332d92311f6d2845b2fd862633520e65e02242a6, -strlen($__internal_e85c6862da6362a9f386e0fc14b2d677d8286d4b29e49b2aba62365f7a10730b))));
        // line 13
        echo "    ";
        if (((isset($context["prepend"]) || array_key_exists("prepend", $context) ? $context["prepend"] : (function () { throw new Twig_Error_Runtime('Variable "prepend" does not exist.', 13, $this->getSourceContext()); })()) || (isset($context["append"]) || array_key_exists("append", $context) ? $context["append"] : (function () { throw new Twig_Error_Runtime('Variable "append" does not exist.', 13, $this->getSourceContext()); })()))) {
            // line 14
            echo "        <div class=\"input-group";
            echo twig_escape_filter($this->env, ((array_key_exists("group_class", $context)) ? (_twig_default_filter((isset($context["group_class"]) || array_key_exists("group_class", $context) ? $context["group_class"] : (function () { throw new Twig_Error_Runtime('Variable "group_class" does not exist.', 14, $this->getSourceContext()); })()), "")) : ("")), "html", null, true);
            echo "\">
            ";
            // line 15
            if ((isset($context["prepend"]) || array_key_exists("prepend", $context) ? $context["prepend"] : (function () { throw new Twig_Error_Runtime('Variable "prepend" does not exist.', 15, $this->getSourceContext()); })())) {
                // line 16
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 16, $this->getSourceContext()); })()), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 18
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 19
            if ((isset($context["append"]) || array_key_exists("append", $context) ? $context["append"] : (function () { throw new Twig_Error_Runtime('Variable "append" does not exist.', 19, $this->getSourceContext()); })())) {
                // line 20
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 20, $this->getSourceContext()); })()), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 22
            echo "        </div>
    ";
        } else {
            // line 24
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_183ddced12285f63de93696bbe8d3cdc5fa84f81e5509209727606211476436d->leave($__internal_183ddced12285f63de93696bbe8d3cdc5fa84f81e5509209727606211476436d_prof);

        
        $__internal_c11c4142820404881eb8cbc705a3798ecb48ec1c8e6eab33f7b836ae23280391->leave($__internal_c11c4142820404881eb8cbc705a3798ecb48ec1c8e6eab33f7b836ae23280391_prof);

    }

    // line 28
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_742801668c67908d6e86026934213b48609607904c980fbef2cabfbf63f21c4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_742801668c67908d6e86026934213b48609607904c980fbef2cabfbf63f21c4b->enter($__internal_742801668c67908d6e86026934213b48609607904c980fbef2cabfbf63f21c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_b92b2e4a01941c25d416cd745f223f6865cc691ceba33824d1782b371ea17c04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b92b2e4a01941c25d416cd745f223f6865cc691ceba33824d1782b371ea17c04->enter($__internal_b92b2e4a01941c25d416cd745f223f6865cc691ceba33824d1782b371ea17c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 29
        echo "<div class=\"input-group\">";
        // line 30
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 31
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_b92b2e4a01941c25d416cd745f223f6865cc691ceba33824d1782b371ea17c04->leave($__internal_b92b2e4a01941c25d416cd745f223f6865cc691ceba33824d1782b371ea17c04_prof);

        
        $__internal_742801668c67908d6e86026934213b48609607904c980fbef2cabfbf63f21c4b->leave($__internal_742801668c67908d6e86026934213b48609607904c980fbef2cabfbf63f21c4b_prof);

    }

    // line 35
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_9618f9139f92937a03ca84b781afb449d1e4625aa1b19aaee0a58cda8000a99c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9618f9139f92937a03ca84b781afb449d1e4625aa1b19aaee0a58cda8000a99c->enter($__internal_9618f9139f92937a03ca84b781afb449d1e4625aa1b19aaee0a58cda8000a99c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_1316ec6b1a3069b4479ebd60f33fff941c6c4b9a6624496a0fa2f00b5a2d8cae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1316ec6b1a3069b4479ebd60f33fff941c6c4b9a6624496a0fa2f00b5a2d8cae->enter($__internal_1316ec6b1a3069b4479ebd60f33fff941c6c4b9a6624496a0fa2f00b5a2d8cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 36
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 36, $this->getSourceContext()); })()) == "single_text")) {
            // line 37
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 39
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 39, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 40
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->getSourceContext()); })()), "date", array()), 'errors');
            // line 42
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), "time", array()), 'errors');
            // line 43
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->getSourceContext()); })()), "date", array()), 'widget', array("datetime" => true));
            // line 44
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->getSourceContext()); })()), "time", array()), 'widget', array("datetime" => true));
            // line 45
            echo "</div>";
        }
        
        $__internal_1316ec6b1a3069b4479ebd60f33fff941c6c4b9a6624496a0fa2f00b5a2d8cae->leave($__internal_1316ec6b1a3069b4479ebd60f33fff941c6c4b9a6624496a0fa2f00b5a2d8cae_prof);

        
        $__internal_9618f9139f92937a03ca84b781afb449d1e4625aa1b19aaee0a58cda8000a99c->leave($__internal_9618f9139f92937a03ca84b781afb449d1e4625aa1b19aaee0a58cda8000a99c_prof);

    }

    // line 49
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_48eb7264797d417cd1008b57aa57fe8778775fc800da9b87e0307601818c50fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48eb7264797d417cd1008b57aa57fe8778775fc800da9b87e0307601818c50fd->enter($__internal_48eb7264797d417cd1008b57aa57fe8778775fc800da9b87e0307601818c50fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_0704597a4f40455e1293de94e0cbd757517cfea773c3e3009b2d4767d6f5205a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0704597a4f40455e1293de94e0cbd757517cfea773c3e3009b2d4767d6f5205a->enter($__internal_0704597a4f40455e1293de94e0cbd757517cfea773c3e3009b2d4767d6f5205a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 50
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 50, $this->getSourceContext()); })()) == "single_text")) {
            // line 51
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 53
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 53, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 54
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 54, $this->getSourceContext()); })()))) {
                // line 55
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 57
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "date_pattern" does not exist.', 57, $this->getSourceContext()); })()), array("{{ year }}" =>             // line 58
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->getSourceContext()); })()), "year", array()), 'widget'), "{{ month }}" =>             // line 59
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 59, $this->getSourceContext()); })()), "month", array()), 'widget'), "{{ day }}" =>             // line 60
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 60, $this->getSourceContext()); })()), "day", array()), 'widget')));
            // line 62
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 62, $this->getSourceContext()); })()))) {
                // line 63
                echo "</div>";
            }
        }
        
        $__internal_0704597a4f40455e1293de94e0cbd757517cfea773c3e3009b2d4767d6f5205a->leave($__internal_0704597a4f40455e1293de94e0cbd757517cfea773c3e3009b2d4767d6f5205a_prof);

        
        $__internal_48eb7264797d417cd1008b57aa57fe8778775fc800da9b87e0307601818c50fd->leave($__internal_48eb7264797d417cd1008b57aa57fe8778775fc800da9b87e0307601818c50fd_prof);

    }

    // line 68
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_b82e4204f6285d37ff868afb34d97a6763e89cc11213402c88bf08de2009bfa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b82e4204f6285d37ff868afb34d97a6763e89cc11213402c88bf08de2009bfa3->enter($__internal_b82e4204f6285d37ff868afb34d97a6763e89cc11213402c88bf08de2009bfa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_0c0119f3519580f8902211adba45bf05caed47a207f62a0a242ca5fae3d31c64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c0119f3519580f8902211adba45bf05caed47a207f62a0a242ca5fae3d31c64->enter($__internal_0c0119f3519580f8902211adba45bf05caed47a207f62a0a242ca5fae3d31c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 69
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 69, $this->getSourceContext()); })()) == "single_text")) {
            // line 70
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 72
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 72, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 73
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 73, $this->getSourceContext()); })())))) {
                // line 74
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->getSourceContext()); })()), "hour", array()), 'widget');
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 76, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->getSourceContext()); })()), "minute", array()), 'widget');
            }
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 76, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->getSourceContext()); })()), "second", array()), 'widget');
            }
            // line 77
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 77, $this->getSourceContext()); })())))) {
                // line 78
                echo "</div>";
            }
        }
        
        $__internal_0c0119f3519580f8902211adba45bf05caed47a207f62a0a242ca5fae3d31c64->leave($__internal_0c0119f3519580f8902211adba45bf05caed47a207f62a0a242ca5fae3d31c64_prof);

        
        $__internal_b82e4204f6285d37ff868afb34d97a6763e89cc11213402c88bf08de2009bfa3->leave($__internal_b82e4204f6285d37ff868afb34d97a6763e89cc11213402c88bf08de2009bfa3_prof);

    }

    // line 83
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_a8a16cb76efb8587f971cd393670d4aad4abd17e6dc5b35d13722e4aa60df6d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8a16cb76efb8587f971cd393670d4aad4abd17e6dc5b35d13722e4aa60df6d9->enter($__internal_a8a16cb76efb8587f971cd393670d4aad4abd17e6dc5b35d13722e4aa60df6d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_6b7ef5752964b34945d462758e4cadd1a6784b923af40c554eceb969dff28fc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b7ef5752964b34945d462758e4cadd1a6784b923af40c554eceb969dff28fc5->enter($__internal_6b7ef5752964b34945d462758e4cadd1a6784b923af40c554eceb969dff28fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 84
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 84, $this->getSourceContext()); })()) == "single_text")) {
            // line 85
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 87
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 87, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 88
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 89
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 89, $this->getSourceContext()); })()), 'errors');
            // line 90
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 91
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter((isset($context["table_class"]) || array_key_exists("table_class", $context) ? $context["table_class"] : (function () { throw new Twig_Error_Runtime('Variable "table_class" does not exist.', 91, $this->getSourceContext()); })()), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 94
            if ((isset($context["with_years"]) || array_key_exists("with_years", $context) ? $context["with_years"] : (function () { throw new Twig_Error_Runtime('Variable "with_years" does not exist.', 94, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 94, $this->getSourceContext()); })()), "years", array()), 'label');
                echo "</th>";
            }
            // line 95
            if ((isset($context["with_months"]) || array_key_exists("with_months", $context) ? $context["with_months"] : (function () { throw new Twig_Error_Runtime('Variable "with_months" does not exist.', 95, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 95, $this->getSourceContext()); })()), "months", array()), 'label');
                echo "</th>";
            }
            // line 96
            if ((isset($context["with_weeks"]) || array_key_exists("with_weeks", $context) ? $context["with_weeks"] : (function () { throw new Twig_Error_Runtime('Variable "with_weeks" does not exist.', 96, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 96, $this->getSourceContext()); })()), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 97
            if ((isset($context["with_days"]) || array_key_exists("with_days", $context) ? $context["with_days"] : (function () { throw new Twig_Error_Runtime('Variable "with_days" does not exist.', 97, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 97, $this->getSourceContext()); })()), "days", array()), 'label');
                echo "</th>";
            }
            // line 98
            if ((isset($context["with_hours"]) || array_key_exists("with_hours", $context) ? $context["with_hours"] : (function () { throw new Twig_Error_Runtime('Variable "with_hours" does not exist.', 98, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 98, $this->getSourceContext()); })()), "hours", array()), 'label');
                echo "</th>";
            }
            // line 99
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 99, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 99, $this->getSourceContext()); })()), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 100
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 100, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 100, $this->getSourceContext()); })()), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 101
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 105
            if ((isset($context["with_years"]) || array_key_exists("with_years", $context) ? $context["with_years"] : (function () { throw new Twig_Error_Runtime('Variable "with_years" does not exist.', 105, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 105, $this->getSourceContext()); })()), "years", array()), 'widget');
                echo "</td>";
            }
            // line 106
            if ((isset($context["with_months"]) || array_key_exists("with_months", $context) ? $context["with_months"] : (function () { throw new Twig_Error_Runtime('Variable "with_months" does not exist.', 106, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 106, $this->getSourceContext()); })()), "months", array()), 'widget');
                echo "</td>";
            }
            // line 107
            if ((isset($context["with_weeks"]) || array_key_exists("with_weeks", $context) ? $context["with_weeks"] : (function () { throw new Twig_Error_Runtime('Variable "with_weeks" does not exist.', 107, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 107, $this->getSourceContext()); })()), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 108
            if ((isset($context["with_days"]) || array_key_exists("with_days", $context) ? $context["with_days"] : (function () { throw new Twig_Error_Runtime('Variable "with_days" does not exist.', 108, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 108, $this->getSourceContext()); })()), "days", array()), 'widget');
                echo "</td>";
            }
            // line 109
            if ((isset($context["with_hours"]) || array_key_exists("with_hours", $context) ? $context["with_hours"] : (function () { throw new Twig_Error_Runtime('Variable "with_hours" does not exist.', 109, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 109, $this->getSourceContext()); })()), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 110
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 110, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 110, $this->getSourceContext()); })()), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 111
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 111, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 111, $this->getSourceContext()); })()), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 112
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 116
            if ((isset($context["with_invert"]) || array_key_exists("with_invert", $context) ? $context["with_invert"] : (function () { throw new Twig_Error_Runtime('Variable "with_invert" does not exist.', 116, $this->getSourceContext()); })())) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 116, $this->getSourceContext()); })()), "invert", array()), 'widget');
            }
            // line 117
            echo "</div>";
        }
        
        $__internal_6b7ef5752964b34945d462758e4cadd1a6784b923af40c554eceb969dff28fc5->leave($__internal_6b7ef5752964b34945d462758e4cadd1a6784b923af40c554eceb969dff28fc5_prof);

        
        $__internal_a8a16cb76efb8587f971cd393670d4aad4abd17e6dc5b35d13722e4aa60df6d9->leave($__internal_a8a16cb76efb8587f971cd393670d4aad4abd17e6dc5b35d13722e4aa60df6d9_prof);

    }

    // line 121
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_f973634a0514ede9b98a23a52174c090ea2d5b0795707188a77ea5b573b1072c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f973634a0514ede9b98a23a52174c090ea2d5b0795707188a77ea5b573b1072c->enter($__internal_f973634a0514ede9b98a23a52174c090ea2d5b0795707188a77ea5b573b1072c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_1d2af3984821525b8ee36b756a06c95c231e3181c3eb8d760fd90a2350c3c524 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d2af3984821525b8ee36b756a06c95c231e3181c3eb8d760fd90a2350c3c524->enter($__internal_1d2af3984821525b8ee36b756a06c95c231e3181c3eb8d760fd90a2350c3c524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 122
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 122, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 123
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_1d2af3984821525b8ee36b756a06c95c231e3181c3eb8d760fd90a2350c3c524->leave($__internal_1d2af3984821525b8ee36b756a06c95c231e3181c3eb8d760fd90a2350c3c524_prof);

        
        $__internal_f973634a0514ede9b98a23a52174c090ea2d5b0795707188a77ea5b573b1072c->leave($__internal_f973634a0514ede9b98a23a52174c090ea2d5b0795707188a77ea5b573b1072c_prof);

    }

    // line 126
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_83379d3f613a79d89b8b647130cf7191dcd83fe496a0804c839738f0e74987f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83379d3f613a79d89b8b647130cf7191dcd83fe496a0804c839738f0e74987f6->enter($__internal_83379d3f613a79d89b8b647130cf7191dcd83fe496a0804c839738f0e74987f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_ba1cf3bc3fe121d74d8aad38d24f8c7accaf35256f068eeb630879dc7981896b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba1cf3bc3fe121d74d8aad38d24f8c7accaf35256f068eeb630879dc7981896b->enter($__internal_ba1cf3bc3fe121d74d8aad38d24f8c7accaf35256f068eeb630879dc7981896b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 127
        if (twig_in_filter("-inline", ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 128
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 129
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 130
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 131
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 131, $this->getSourceContext()); })())));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 135
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 136
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 136, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 137
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 138
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 139
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 139, $this->getSourceContext()); })())));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "</div>";
        }
        
        $__internal_ba1cf3bc3fe121d74d8aad38d24f8c7accaf35256f068eeb630879dc7981896b->leave($__internal_ba1cf3bc3fe121d74d8aad38d24f8c7accaf35256f068eeb630879dc7981896b_prof);

        
        $__internal_83379d3f613a79d89b8b647130cf7191dcd83fe496a0804c839738f0e74987f6->leave($__internal_83379d3f613a79d89b8b647130cf7191dcd83fe496a0804c839738f0e74987f6_prof);

    }

    // line 148
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_7c1f59396989189ac022918802a117d5c0ec76760a8576a5970828e8e5981032 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c1f59396989189ac022918802a117d5c0ec76760a8576a5970828e8e5981032->enter($__internal_7c1f59396989189ac022918802a117d5c0ec76760a8576a5970828e8e5981032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_0ed6eae39e92371f9c66397036949e508cde2dfa31c495d5599825e94cfd3d6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ed6eae39e92371f9c66397036949e508cde2dfa31c495d5599825e94cfd3d6c->enter($__internal_0ed6eae39e92371f9c66397036949e508cde2dfa31c495d5599825e94cfd3d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 150
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 150, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 151
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_0ed6eae39e92371f9c66397036949e508cde2dfa31c495d5599825e94cfd3d6c->leave($__internal_0ed6eae39e92371f9c66397036949e508cde2dfa31c495d5599825e94cfd3d6c_prof);

        
        $__internal_7c1f59396989189ac022918802a117d5c0ec76760a8576a5970828e8e5981032->leave($__internal_7c1f59396989189ac022918802a117d5c0ec76760a8576a5970828e8e5981032_prof);

    }

    // line 154
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_0b9ec565e917c7cc16b339473de1c9eb7c965e74ac7967dc3228d9ffa3cc0bf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b9ec565e917c7cc16b339473de1c9eb7c965e74ac7967dc3228d9ffa3cc0bf2->enter($__internal_0b9ec565e917c7cc16b339473de1c9eb7c965e74ac7967dc3228d9ffa3cc0bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_4110eed3cc6d381c25fc6b6565e891df057c9960d5a3829ca633ebb54152fd27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4110eed3cc6d381c25fc6b6565e891df057c9960d5a3829ca633ebb54152fd27->enter($__internal_4110eed3cc6d381c25fc6b6565e891df057c9960d5a3829ca633ebb54152fd27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 155
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_4110eed3cc6d381c25fc6b6565e891df057c9960d5a3829ca633ebb54152fd27->leave($__internal_4110eed3cc6d381c25fc6b6565e891df057c9960d5a3829ca633ebb54152fd27_prof);

        
        $__internal_0b9ec565e917c7cc16b339473de1c9eb7c965e74ac7967dc3228d9ffa3cc0bf2->leave($__internal_0b9ec565e917c7cc16b339473de1c9eb7c965e74ac7967dc3228d9ffa3cc0bf2_prof);

    }

    // line 158
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_9da0fbf47b3272fc0a7265f4c51360b657f8d6224878ff4d16579ea2fb27bb4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9da0fbf47b3272fc0a7265f4c51360b657f8d6224878ff4d16579ea2fb27bb4a->enter($__internal_9da0fbf47b3272fc0a7265f4c51360b657f8d6224878ff4d16579ea2fb27bb4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_8fcd8fcebdd3f8d318e8c4a346fd2c6c63216c8bc07923f6d79862e36a896358 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fcd8fcebdd3f8d318e8c4a346fd2c6c63216c8bc07923f6d79862e36a896358->enter($__internal_8fcd8fcebdd3f8d318e8c4a346fd2c6c63216c8bc07923f6d79862e36a896358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 159
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_8fcd8fcebdd3f8d318e8c4a346fd2c6c63216c8bc07923f6d79862e36a896358->leave($__internal_8fcd8fcebdd3f8d318e8c4a346fd2c6c63216c8bc07923f6d79862e36a896358_prof);

        
        $__internal_9da0fbf47b3272fc0a7265f4c51360b657f8d6224878ff4d16579ea2fb27bb4a->leave($__internal_9da0fbf47b3272fc0a7265f4c51360b657f8d6224878ff4d16579ea2fb27bb4a_prof);

    }

    // line 164
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_ebd4f38e09b2a7cdd60f6817a58b6bb41885ed6fc1c3a62647bdc8a618d7bbf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebd4f38e09b2a7cdd60f6817a58b6bb41885ed6fc1c3a62647bdc8a618d7bbf4->enter($__internal_ebd4f38e09b2a7cdd60f6817a58b6bb41885ed6fc1c3a62647bdc8a618d7bbf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_b30b6c63f9559c00e6ff1d502a70e884f0fc465ee4fdbb7dbe28888589088520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b30b6c63f9559c00e6ff1d502a70e884f0fc465ee4fdbb7dbe28888589088520->enter($__internal_b30b6c63f9559c00e6ff1d502a70e884f0fc465ee4fdbb7dbe28888589088520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 165
        echo "<div class=\"form-group\">";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 166, $this->getSourceContext()); })()), 'widget');
        // line 167
        echo "</div>";
        
        $__internal_b30b6c63f9559c00e6ff1d502a70e884f0fc465ee4fdbb7dbe28888589088520->leave($__internal_b30b6c63f9559c00e6ff1d502a70e884f0fc465ee4fdbb7dbe28888589088520_prof);

        
        $__internal_ebd4f38e09b2a7cdd60f6817a58b6bb41885ed6fc1c3a62647bdc8a618d7bbf4->leave($__internal_ebd4f38e09b2a7cdd60f6817a58b6bb41885ed6fc1c3a62647bdc8a618d7bbf4_prof);

    }

    // line 170
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_eb91630c50a6b4806a6f974f629c6fef27939f6f856ee63585b049a0fe1d4b93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb91630c50a6b4806a6f974f629c6fef27939f6f856ee63585b049a0fe1d4b93->enter($__internal_eb91630c50a6b4806a6f974f629c6fef27939f6f856ee63585b049a0fe1d4b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_f2b33861cf256c869b3e4a155701dd75482c08f397ed33467565f58aa837d356 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2b33861cf256c869b3e4a155701dd75482c08f397ed33467565f58aa837d356->enter($__internal_f2b33861cf256c869b3e4a155701dd75482c08f397ed33467565f58aa837d356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 171
        $context["force_error"] = true;
        // line 172
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_f2b33861cf256c869b3e4a155701dd75482c08f397ed33467565f58aa837d356->leave($__internal_f2b33861cf256c869b3e4a155701dd75482c08f397ed33467565f58aa837d356_prof);

        
        $__internal_eb91630c50a6b4806a6f974f629c6fef27939f6f856ee63585b049a0fe1d4b93->leave($__internal_eb91630c50a6b4806a6f974f629c6fef27939f6f856ee63585b049a0fe1d4b93_prof);

    }

    // line 175
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_79e2e0f62b90f0c3a1d13926c5a76b5c4e6f5f1b39b0576f2b70bfa96644894f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79e2e0f62b90f0c3a1d13926c5a76b5c4e6f5f1b39b0576f2b70bfa96644894f->enter($__internal_79e2e0f62b90f0c3a1d13926c5a76b5c4e6f5f1b39b0576f2b70bfa96644894f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_6e5b4a36202fe219fafd8d3d7d20a3d753f4bdea65911cdeb582a29ccaa9bfbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e5b4a36202fe219fafd8d3d7d20a3d753f4bdea65911cdeb582a29ccaa9bfbc->enter($__internal_6e5b4a36202fe219fafd8d3d7d20a3d753f4bdea65911cdeb582a29ccaa9bfbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 176
        $context["force_error"] = true;
        // line 177
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6e5b4a36202fe219fafd8d3d7d20a3d753f4bdea65911cdeb582a29ccaa9bfbc->leave($__internal_6e5b4a36202fe219fafd8d3d7d20a3d753f4bdea65911cdeb582a29ccaa9bfbc_prof);

        
        $__internal_79e2e0f62b90f0c3a1d13926c5a76b5c4e6f5f1b39b0576f2b70bfa96644894f->leave($__internal_79e2e0f62b90f0c3a1d13926c5a76b5c4e6f5f1b39b0576f2b70bfa96644894f_prof);

    }

    // line 180
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_0d86b3a92295f7ca2e460f88dd9c5ecde235b9095cdfa85646f6cab85db2b576 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d86b3a92295f7ca2e460f88dd9c5ecde235b9095cdfa85646f6cab85db2b576->enter($__internal_0d86b3a92295f7ca2e460f88dd9c5ecde235b9095cdfa85646f6cab85db2b576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_10668e1067facdbd65fa000ede1ab7887c2a19132e40cb5ae14f1764ed657407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10668e1067facdbd65fa000ede1ab7887c2a19132e40cb5ae14f1764ed657407->enter($__internal_10668e1067facdbd65fa000ede1ab7887c2a19132e40cb5ae14f1764ed657407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 181
        $context["force_error"] = true;
        // line 182
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_10668e1067facdbd65fa000ede1ab7887c2a19132e40cb5ae14f1764ed657407->leave($__internal_10668e1067facdbd65fa000ede1ab7887c2a19132e40cb5ae14f1764ed657407_prof);

        
        $__internal_0d86b3a92295f7ca2e460f88dd9c5ecde235b9095cdfa85646f6cab85db2b576->leave($__internal_0d86b3a92295f7ca2e460f88dd9c5ecde235b9095cdfa85646f6cab85db2b576_prof);

    }

    // line 185
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_c4d530448712a4a0349d628edb273f70b38703d7fd5eceab2791dd85c59ccfba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4d530448712a4a0349d628edb273f70b38703d7fd5eceab2791dd85c59ccfba->enter($__internal_c4d530448712a4a0349d628edb273f70b38703d7fd5eceab2791dd85c59ccfba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_0ecf7f523fa627b33c70602812ce96586951dcdd3cc5378d7c52a44a78ae1f7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ecf7f523fa627b33c70602812ce96586951dcdd3cc5378d7c52a44a78ae1f7c->enter($__internal_0ecf7f523fa627b33c70602812ce96586951dcdd3cc5378d7c52a44a78ae1f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 186
        $context["force_error"] = true;
        // line 187
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_0ecf7f523fa627b33c70602812ce96586951dcdd3cc5378d7c52a44a78ae1f7c->leave($__internal_0ecf7f523fa627b33c70602812ce96586951dcdd3cc5378d7c52a44a78ae1f7c_prof);

        
        $__internal_c4d530448712a4a0349d628edb273f70b38703d7fd5eceab2791dd85c59ccfba->leave($__internal_c4d530448712a4a0349d628edb273f70b38703d7fd5eceab2791dd85c59ccfba_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_base_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  745 => 187,  743 => 186,  734 => 185,  724 => 182,  722 => 181,  713 => 180,  703 => 177,  701 => 176,  692 => 175,  682 => 172,  680 => 171,  671 => 170,  661 => 167,  659 => 166,  657 => 165,  648 => 164,  638 => 159,  629 => 158,  619 => 155,  610 => 154,  600 => 151,  598 => 150,  589 => 148,  578 => 142,  572 => 139,  571 => 138,  570 => 137,  566 => 136,  562 => 135,  555 => 131,  554 => 130,  553 => 129,  549 => 128,  547 => 127,  538 => 126,  528 => 123,  526 => 122,  517 => 121,  506 => 117,  502 => 116,  497 => 112,  491 => 111,  485 => 110,  479 => 109,  473 => 108,  467 => 107,  461 => 106,  455 => 105,  450 => 101,  444 => 100,  438 => 99,  432 => 98,  426 => 97,  420 => 96,  414 => 95,  408 => 94,  403 => 91,  400 => 90,  398 => 89,  394 => 88,  392 => 87,  389 => 85,  387 => 84,  378 => 83,  366 => 78,  364 => 77,  354 => 76,  349 => 74,  347 => 73,  345 => 72,  342 => 70,  340 => 69,  331 => 68,  319 => 63,  317 => 62,  315 => 60,  314 => 59,  313 => 58,  312 => 57,  307 => 55,  305 => 54,  303 => 53,  300 => 51,  298 => 50,  289 => 49,  278 => 45,  276 => 44,  274 => 43,  272 => 42,  270 => 41,  266 => 40,  264 => 39,  261 => 37,  259 => 36,  250 => 35,  239 => 31,  237 => 30,  235 => 29,  226 => 28,  215 => 24,  211 => 22,  205 => 20,  203 => 19,  201 => 18,  195 => 16,  193 => 15,  188 => 14,  185 => 13,  182 => 12,  180 => 11,  171 => 10,  161 => 7,  159 => 6,  150 => 5,  140 => 185,  137 => 184,  135 => 180,  132 => 179,  130 => 175,  127 => 174,  125 => 170,  122 => 169,  120 => 164,  117 => 163,  114 => 161,  112 => 158,  109 => 157,  107 => 154,  104 => 153,  102 => 148,  99 => 147,  96 => 145,  94 => 126,  91 => 125,  89 => 121,  87 => 83,  85 => 68,  82 => 67,  80 => 49,  77 => 48,  75 => 35,  72 => 34,  70 => 28,  67 => 27,  65 => 10,  62 => 9,  60 => 5,  57 => 4,  54 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block money_widget -%}
    {% set prepend = not (money_pattern starts with '{{') %}
    {% set append = not (money_pattern ends with '}}') %}
    {% if prepend or append %}
        <div class=\"input-group{{ group_class|default('') }}\">
            {% if prepend %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
            {{- block('form_widget_simple') -}}
            {% if append %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
        </div>
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {%- if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {%- if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {%- endif -%}
{%- endblock date_widget %}

{% block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {%- if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {%- if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {%- endif -%}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {{- parent() -}}
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {%- if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {%- endfor -%}
        </div>
    {%- endif -%}
{%- endblock choice_widget_expanded %}

{# Labels #}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock choice_label %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{# Rows #}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {%- set force_error = true -%}
    {{- block('form_row') -}}
{%- endblock choice_row %}

{% block date_row -%}
    {%- set force_error = true -%}
    {{- block('form_row') -}}
{%- endblock date_row %}

{% block time_row -%}
    {%- set force_error = true -%}
    {{- block('form_row') -}}
{%- endblock time_row %}

{% block datetime_row -%}
    {%- set force_error = true -%}
    {{- block('form_row') -}}
{%- endblock datetime_row %}
", "bootstrap_base_layout.html.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\bootstrap_base_layout.html.twig");
    }
}
