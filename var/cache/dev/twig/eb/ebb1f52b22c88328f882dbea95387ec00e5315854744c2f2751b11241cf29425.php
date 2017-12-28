<?php

/* bootstrap_base_layout.html.twig */
class __TwigTemplate_39cbe23e5060cdfcc6bd22d137a97dc7d41a2da665043bb9da872092be1a8718 extends Twig_Template
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
        $__internal_8ac61ef72552c16a7d86a21f9c45673f53122b0747f5c18cf0a7c6b9848190c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ac61ef72552c16a7d86a21f9c45673f53122b0747f5c18cf0a7c6b9848190c5->enter($__internal_8ac61ef72552c16a7d86a21f9c45673f53122b0747f5c18cf0a7c6b9848190c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_base_layout.html.twig"));

        $__internal_01db01ba90c45afa5ee154f4f06ec95583cebd675876e552117b118483070cf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01db01ba90c45afa5ee154f4f06ec95583cebd675876e552117b118483070cf2->enter($__internal_01db01ba90c45afa5ee154f4f06ec95583cebd675876e552117b118483070cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_base_layout.html.twig"));

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
        
        $__internal_8ac61ef72552c16a7d86a21f9c45673f53122b0747f5c18cf0a7c6b9848190c5->leave($__internal_8ac61ef72552c16a7d86a21f9c45673f53122b0747f5c18cf0a7c6b9848190c5_prof);

        
        $__internal_01db01ba90c45afa5ee154f4f06ec95583cebd675876e552117b118483070cf2->leave($__internal_01db01ba90c45afa5ee154f4f06ec95583cebd675876e552117b118483070cf2_prof);

    }

    // line 5
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_ff15de0b9532ce6ac1289560056773315e98df7aa02de9cf2fd98c2bc93df156 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff15de0b9532ce6ac1289560056773315e98df7aa02de9cf2fd98c2bc93df156->enter($__internal_ff15de0b9532ce6ac1289560056773315e98df7aa02de9cf2fd98c2bc93df156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_b7a30ef35be4233d4999a5e5e88bb29d3aab9bed03dc8b4d7473fe97cec56a4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7a30ef35be4233d4999a5e5e88bb29d3aab9bed03dc8b4d7473fe97cec56a4e->enter($__internal_b7a30ef35be4233d4999a5e5e88bb29d3aab9bed03dc8b4d7473fe97cec56a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 6
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 6, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 7
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_b7a30ef35be4233d4999a5e5e88bb29d3aab9bed03dc8b4d7473fe97cec56a4e->leave($__internal_b7a30ef35be4233d4999a5e5e88bb29d3aab9bed03dc8b4d7473fe97cec56a4e_prof);

        
        $__internal_ff15de0b9532ce6ac1289560056773315e98df7aa02de9cf2fd98c2bc93df156->leave($__internal_ff15de0b9532ce6ac1289560056773315e98df7aa02de9cf2fd98c2bc93df156_prof);

    }

    // line 10
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_a5aff9c314d30424deeb3770b2bca6732475cd533ce37516282a5a244fcf8d6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5aff9c314d30424deeb3770b2bca6732475cd533ce37516282a5a244fcf8d6c->enter($__internal_a5aff9c314d30424deeb3770b2bca6732475cd533ce37516282a5a244fcf8d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_ac431d168ad24b6fb5191be2f7d70d4a90a469fe68c7665dc7f7eae228bc949c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac431d168ad24b6fb5191be2f7d70d4a90a469fe68c7665dc7f7eae228bc949c->enter($__internal_ac431d168ad24b6fb5191be2f7d70d4a90a469fe68c7665dc7f7eae228bc949c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 11
        $context["prepend"] =  !(is_string($__internal_56cd260e3b323d51af580367a998469e0e21c292be14475b9b7fb5089bea9344 = (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 11, $this->getSourceContext()); })())) && is_string($__internal_ac2fd9510e557475e9adc3c260b9191668cd7be5f0a31d7e686caed0566e0e47 = "{{") && ('' === $__internal_ac2fd9510e557475e9adc3c260b9191668cd7be5f0a31d7e686caed0566e0e47 || 0 === strpos($__internal_56cd260e3b323d51af580367a998469e0e21c292be14475b9b7fb5089bea9344, $__internal_ac2fd9510e557475e9adc3c260b9191668cd7be5f0a31d7e686caed0566e0e47)));
        // line 12
        echo "    ";
        $context["append"] =  !(is_string($__internal_eba530c3180749f872f5245aff331d1de3520d35fe0f7bb22c98330a2e2e9cfa = (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 12, $this->getSourceContext()); })())) && is_string($__internal_22cb84162100e5a3b3c09a0a55e847606590e234ad495342cbb0fe844ba0f01e = "}}") && ('' === $__internal_22cb84162100e5a3b3c09a0a55e847606590e234ad495342cbb0fe844ba0f01e || $__internal_22cb84162100e5a3b3c09a0a55e847606590e234ad495342cbb0fe844ba0f01e === substr($__internal_eba530c3180749f872f5245aff331d1de3520d35fe0f7bb22c98330a2e2e9cfa, -strlen($__internal_22cb84162100e5a3b3c09a0a55e847606590e234ad495342cbb0fe844ba0f01e))));
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
        
        $__internal_ac431d168ad24b6fb5191be2f7d70d4a90a469fe68c7665dc7f7eae228bc949c->leave($__internal_ac431d168ad24b6fb5191be2f7d70d4a90a469fe68c7665dc7f7eae228bc949c_prof);

        
        $__internal_a5aff9c314d30424deeb3770b2bca6732475cd533ce37516282a5a244fcf8d6c->leave($__internal_a5aff9c314d30424deeb3770b2bca6732475cd533ce37516282a5a244fcf8d6c_prof);

    }

    // line 28
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_2249b343a82553016cfc6f93fe5902e8c7e776812ac6fa76971c864edcff8c0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2249b343a82553016cfc6f93fe5902e8c7e776812ac6fa76971c864edcff8c0c->enter($__internal_2249b343a82553016cfc6f93fe5902e8c7e776812ac6fa76971c864edcff8c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_54875863ff17ccd8f269c1f48425c6a7ca6ef50369f7fbafcca943e9f576cf58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54875863ff17ccd8f269c1f48425c6a7ca6ef50369f7fbafcca943e9f576cf58->enter($__internal_54875863ff17ccd8f269c1f48425c6a7ca6ef50369f7fbafcca943e9f576cf58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 29
        echo "<div class=\"input-group\">";
        // line 30
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 31
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_54875863ff17ccd8f269c1f48425c6a7ca6ef50369f7fbafcca943e9f576cf58->leave($__internal_54875863ff17ccd8f269c1f48425c6a7ca6ef50369f7fbafcca943e9f576cf58_prof);

        
        $__internal_2249b343a82553016cfc6f93fe5902e8c7e776812ac6fa76971c864edcff8c0c->leave($__internal_2249b343a82553016cfc6f93fe5902e8c7e776812ac6fa76971c864edcff8c0c_prof);

    }

    // line 35
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_adac88b7daa53858bca5d3bb22b3cda847d564e9aaf97e280dee34a88df98716 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adac88b7daa53858bca5d3bb22b3cda847d564e9aaf97e280dee34a88df98716->enter($__internal_adac88b7daa53858bca5d3bb22b3cda847d564e9aaf97e280dee34a88df98716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_a637ed402a5f4a4c0f940bcd3a757c60270beedb1ddd4eb72775f2b18717e7bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a637ed402a5f4a4c0f940bcd3a757c60270beedb1ddd4eb72775f2b18717e7bf->enter($__internal_a637ed402a5f4a4c0f940bcd3a757c60270beedb1ddd4eb72775f2b18717e7bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_a637ed402a5f4a4c0f940bcd3a757c60270beedb1ddd4eb72775f2b18717e7bf->leave($__internal_a637ed402a5f4a4c0f940bcd3a757c60270beedb1ddd4eb72775f2b18717e7bf_prof);

        
        $__internal_adac88b7daa53858bca5d3bb22b3cda847d564e9aaf97e280dee34a88df98716->leave($__internal_adac88b7daa53858bca5d3bb22b3cda847d564e9aaf97e280dee34a88df98716_prof);

    }

    // line 49
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_fa86ea100bf27a3dbea2a5d0d0187486b954a84ca0b9ef569f5c28d0d902e59c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa86ea100bf27a3dbea2a5d0d0187486b954a84ca0b9ef569f5c28d0d902e59c->enter($__internal_fa86ea100bf27a3dbea2a5d0d0187486b954a84ca0b9ef569f5c28d0d902e59c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_d9617965b3e21ac0860f18227dd152087049100c7b997767033bf7af95805965 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9617965b3e21ac0860f18227dd152087049100c7b997767033bf7af95805965->enter($__internal_d9617965b3e21ac0860f18227dd152087049100c7b997767033bf7af95805965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_d9617965b3e21ac0860f18227dd152087049100c7b997767033bf7af95805965->leave($__internal_d9617965b3e21ac0860f18227dd152087049100c7b997767033bf7af95805965_prof);

        
        $__internal_fa86ea100bf27a3dbea2a5d0d0187486b954a84ca0b9ef569f5c28d0d902e59c->leave($__internal_fa86ea100bf27a3dbea2a5d0d0187486b954a84ca0b9ef569f5c28d0d902e59c_prof);

    }

    // line 68
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_2c88a3d850b9b4b8a4915e71776ce4d5b3f6f4f35bbac75252fd1d665eacd0f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c88a3d850b9b4b8a4915e71776ce4d5b3f6f4f35bbac75252fd1d665eacd0f1->enter($__internal_2c88a3d850b9b4b8a4915e71776ce4d5b3f6f4f35bbac75252fd1d665eacd0f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_724190dd496b5fbdd7530e3f164505d940c3adb0f36a80d95a1c241b71843809 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_724190dd496b5fbdd7530e3f164505d940c3adb0f36a80d95a1c241b71843809->enter($__internal_724190dd496b5fbdd7530e3f164505d940c3adb0f36a80d95a1c241b71843809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_724190dd496b5fbdd7530e3f164505d940c3adb0f36a80d95a1c241b71843809->leave($__internal_724190dd496b5fbdd7530e3f164505d940c3adb0f36a80d95a1c241b71843809_prof);

        
        $__internal_2c88a3d850b9b4b8a4915e71776ce4d5b3f6f4f35bbac75252fd1d665eacd0f1->leave($__internal_2c88a3d850b9b4b8a4915e71776ce4d5b3f6f4f35bbac75252fd1d665eacd0f1_prof);

    }

    // line 83
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_5f55fbc8dca537743baeb2f5bb304e122d12920c125ccb71145b1c081c0703a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f55fbc8dca537743baeb2f5bb304e122d12920c125ccb71145b1c081c0703a5->enter($__internal_5f55fbc8dca537743baeb2f5bb304e122d12920c125ccb71145b1c081c0703a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_f5046db37634b74e8c559949b35c34e825267f4e9279f9029192286374861276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5046db37634b74e8c559949b35c34e825267f4e9279f9029192286374861276->enter($__internal_f5046db37634b74e8c559949b35c34e825267f4e9279f9029192286374861276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_f5046db37634b74e8c559949b35c34e825267f4e9279f9029192286374861276->leave($__internal_f5046db37634b74e8c559949b35c34e825267f4e9279f9029192286374861276_prof);

        
        $__internal_5f55fbc8dca537743baeb2f5bb304e122d12920c125ccb71145b1c081c0703a5->leave($__internal_5f55fbc8dca537743baeb2f5bb304e122d12920c125ccb71145b1c081c0703a5_prof);

    }

    // line 121
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_1206c0f141776b6073af7b3db88475b9b1e3505d4a7ef51a3017d60d0d436f41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1206c0f141776b6073af7b3db88475b9b1e3505d4a7ef51a3017d60d0d436f41->enter($__internal_1206c0f141776b6073af7b3db88475b9b1e3505d4a7ef51a3017d60d0d436f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_df2dd4331e01d5bcb9c894fd6bf8d0287385c86d9842339ab07183ab403f7ca0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df2dd4331e01d5bcb9c894fd6bf8d0287385c86d9842339ab07183ab403f7ca0->enter($__internal_df2dd4331e01d5bcb9c894fd6bf8d0287385c86d9842339ab07183ab403f7ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 122
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 122, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 123
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_df2dd4331e01d5bcb9c894fd6bf8d0287385c86d9842339ab07183ab403f7ca0->leave($__internal_df2dd4331e01d5bcb9c894fd6bf8d0287385c86d9842339ab07183ab403f7ca0_prof);

        
        $__internal_1206c0f141776b6073af7b3db88475b9b1e3505d4a7ef51a3017d60d0d436f41->leave($__internal_1206c0f141776b6073af7b3db88475b9b1e3505d4a7ef51a3017d60d0d436f41_prof);

    }

    // line 126
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_90a7450b31845f393ef45213bd6d10f13f9b1c962b4592079d6fc67a718a9d8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90a7450b31845f393ef45213bd6d10f13f9b1c962b4592079d6fc67a718a9d8d->enter($__internal_90a7450b31845f393ef45213bd6d10f13f9b1c962b4592079d6fc67a718a9d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_1e9b89226cbade28df146ed49f27dbba7363fc8a7cac4958c9cbc788ea92f573 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e9b89226cbade28df146ed49f27dbba7363fc8a7cac4958c9cbc788ea92f573->enter($__internal_1e9b89226cbade28df146ed49f27dbba7363fc8a7cac4958c9cbc788ea92f573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_1e9b89226cbade28df146ed49f27dbba7363fc8a7cac4958c9cbc788ea92f573->leave($__internal_1e9b89226cbade28df146ed49f27dbba7363fc8a7cac4958c9cbc788ea92f573_prof);

        
        $__internal_90a7450b31845f393ef45213bd6d10f13f9b1c962b4592079d6fc67a718a9d8d->leave($__internal_90a7450b31845f393ef45213bd6d10f13f9b1c962b4592079d6fc67a718a9d8d_prof);

    }

    // line 148
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_0c3b1ec2ea55d8bb1bc7c518bf3290f7fe44b148a3b924d651a034b9c608838b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c3b1ec2ea55d8bb1bc7c518bf3290f7fe44b148a3b924d651a034b9c608838b->enter($__internal_0c3b1ec2ea55d8bb1bc7c518bf3290f7fe44b148a3b924d651a034b9c608838b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_1b0a608c212a7ad948b71d3e6b02b2f9fc34bba58c4fd7918426f6c77cab19ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b0a608c212a7ad948b71d3e6b02b2f9fc34bba58c4fd7918426f6c77cab19ff->enter($__internal_1b0a608c212a7ad948b71d3e6b02b2f9fc34bba58c4fd7918426f6c77cab19ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 150
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 150, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 151
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_1b0a608c212a7ad948b71d3e6b02b2f9fc34bba58c4fd7918426f6c77cab19ff->leave($__internal_1b0a608c212a7ad948b71d3e6b02b2f9fc34bba58c4fd7918426f6c77cab19ff_prof);

        
        $__internal_0c3b1ec2ea55d8bb1bc7c518bf3290f7fe44b148a3b924d651a034b9c608838b->leave($__internal_0c3b1ec2ea55d8bb1bc7c518bf3290f7fe44b148a3b924d651a034b9c608838b_prof);

    }

    // line 154
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_e50f8f98efac44eb8c80bd10c67ba6d26fe2f8298162ff88c7c0a5fcc2f7612a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e50f8f98efac44eb8c80bd10c67ba6d26fe2f8298162ff88c7c0a5fcc2f7612a->enter($__internal_e50f8f98efac44eb8c80bd10c67ba6d26fe2f8298162ff88c7c0a5fcc2f7612a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_a881ff2d9a1d5b448bca083d94b819249811cb1d290012e0b3118f06259e671a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a881ff2d9a1d5b448bca083d94b819249811cb1d290012e0b3118f06259e671a->enter($__internal_a881ff2d9a1d5b448bca083d94b819249811cb1d290012e0b3118f06259e671a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 155
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_a881ff2d9a1d5b448bca083d94b819249811cb1d290012e0b3118f06259e671a->leave($__internal_a881ff2d9a1d5b448bca083d94b819249811cb1d290012e0b3118f06259e671a_prof);

        
        $__internal_e50f8f98efac44eb8c80bd10c67ba6d26fe2f8298162ff88c7c0a5fcc2f7612a->leave($__internal_e50f8f98efac44eb8c80bd10c67ba6d26fe2f8298162ff88c7c0a5fcc2f7612a_prof);

    }

    // line 158
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_fcd5dbe4deefbd58ac9ea58f41f14f6f23df02749363fc3d2804c581f8b5a6d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcd5dbe4deefbd58ac9ea58f41f14f6f23df02749363fc3d2804c581f8b5a6d4->enter($__internal_fcd5dbe4deefbd58ac9ea58f41f14f6f23df02749363fc3d2804c581f8b5a6d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_d6c2c2bbc03d76ae9d03d79d1ea194c60c874176e633a5dc09cfbf1e697ae657 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6c2c2bbc03d76ae9d03d79d1ea194c60c874176e633a5dc09cfbf1e697ae657->enter($__internal_d6c2c2bbc03d76ae9d03d79d1ea194c60c874176e633a5dc09cfbf1e697ae657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 159
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_d6c2c2bbc03d76ae9d03d79d1ea194c60c874176e633a5dc09cfbf1e697ae657->leave($__internal_d6c2c2bbc03d76ae9d03d79d1ea194c60c874176e633a5dc09cfbf1e697ae657_prof);

        
        $__internal_fcd5dbe4deefbd58ac9ea58f41f14f6f23df02749363fc3d2804c581f8b5a6d4->leave($__internal_fcd5dbe4deefbd58ac9ea58f41f14f6f23df02749363fc3d2804c581f8b5a6d4_prof);

    }

    // line 164
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_397749f14168e029c39a5bbdf2b03e4b070846b5f12ac3c61b7098113b747ca3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_397749f14168e029c39a5bbdf2b03e4b070846b5f12ac3c61b7098113b747ca3->enter($__internal_397749f14168e029c39a5bbdf2b03e4b070846b5f12ac3c61b7098113b747ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_d45350044973d97414535608f09adfc9ca66dfe9ba866179f06df3edb452087f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d45350044973d97414535608f09adfc9ca66dfe9ba866179f06df3edb452087f->enter($__internal_d45350044973d97414535608f09adfc9ca66dfe9ba866179f06df3edb452087f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 165
        echo "<div class=\"form-group\">";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 166, $this->getSourceContext()); })()), 'widget');
        // line 167
        echo "</div>";
        
        $__internal_d45350044973d97414535608f09adfc9ca66dfe9ba866179f06df3edb452087f->leave($__internal_d45350044973d97414535608f09adfc9ca66dfe9ba866179f06df3edb452087f_prof);

        
        $__internal_397749f14168e029c39a5bbdf2b03e4b070846b5f12ac3c61b7098113b747ca3->leave($__internal_397749f14168e029c39a5bbdf2b03e4b070846b5f12ac3c61b7098113b747ca3_prof);

    }

    // line 170
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_3d41e64d52978866d15792bf2919ffc36862250526cb016034aba9cbe9c2648b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d41e64d52978866d15792bf2919ffc36862250526cb016034aba9cbe9c2648b->enter($__internal_3d41e64d52978866d15792bf2919ffc36862250526cb016034aba9cbe9c2648b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_47695d32e08b1c0cf537b97228025afa0ad205e26bac06110b5b8300f62b791b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47695d32e08b1c0cf537b97228025afa0ad205e26bac06110b5b8300f62b791b->enter($__internal_47695d32e08b1c0cf537b97228025afa0ad205e26bac06110b5b8300f62b791b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 171
        $context["force_error"] = true;
        // line 172
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_47695d32e08b1c0cf537b97228025afa0ad205e26bac06110b5b8300f62b791b->leave($__internal_47695d32e08b1c0cf537b97228025afa0ad205e26bac06110b5b8300f62b791b_prof);

        
        $__internal_3d41e64d52978866d15792bf2919ffc36862250526cb016034aba9cbe9c2648b->leave($__internal_3d41e64d52978866d15792bf2919ffc36862250526cb016034aba9cbe9c2648b_prof);

    }

    // line 175
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_8a492975646a277c6ca909569f9297ec0697fd31a47209edff9b56dddc6ec791 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a492975646a277c6ca909569f9297ec0697fd31a47209edff9b56dddc6ec791->enter($__internal_8a492975646a277c6ca909569f9297ec0697fd31a47209edff9b56dddc6ec791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_44e7b9f8cffb69a3bcd68dd12c4acf50bbd769410f206e3e8e0d4f3e68e7c4df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44e7b9f8cffb69a3bcd68dd12c4acf50bbd769410f206e3e8e0d4f3e68e7c4df->enter($__internal_44e7b9f8cffb69a3bcd68dd12c4acf50bbd769410f206e3e8e0d4f3e68e7c4df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 176
        $context["force_error"] = true;
        // line 177
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_44e7b9f8cffb69a3bcd68dd12c4acf50bbd769410f206e3e8e0d4f3e68e7c4df->leave($__internal_44e7b9f8cffb69a3bcd68dd12c4acf50bbd769410f206e3e8e0d4f3e68e7c4df_prof);

        
        $__internal_8a492975646a277c6ca909569f9297ec0697fd31a47209edff9b56dddc6ec791->leave($__internal_8a492975646a277c6ca909569f9297ec0697fd31a47209edff9b56dddc6ec791_prof);

    }

    // line 180
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_b571109ec8f2f2e75fc17581860881ad7b61b022a31993d2e35461b53a5fa02d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b571109ec8f2f2e75fc17581860881ad7b61b022a31993d2e35461b53a5fa02d->enter($__internal_b571109ec8f2f2e75fc17581860881ad7b61b022a31993d2e35461b53a5fa02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_ba77fd1bed6786a37182c97c9774c976027d1977d30bb37ecaa4d4fa79c700f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba77fd1bed6786a37182c97c9774c976027d1977d30bb37ecaa4d4fa79c700f9->enter($__internal_ba77fd1bed6786a37182c97c9774c976027d1977d30bb37ecaa4d4fa79c700f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 181
        $context["force_error"] = true;
        // line 182
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ba77fd1bed6786a37182c97c9774c976027d1977d30bb37ecaa4d4fa79c700f9->leave($__internal_ba77fd1bed6786a37182c97c9774c976027d1977d30bb37ecaa4d4fa79c700f9_prof);

        
        $__internal_b571109ec8f2f2e75fc17581860881ad7b61b022a31993d2e35461b53a5fa02d->leave($__internal_b571109ec8f2f2e75fc17581860881ad7b61b022a31993d2e35461b53a5fa02d_prof);

    }

    // line 185
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_65ae644de38d8328a8d92280357f9121efbd2ffa373119bcb1f04555ce7f0bc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65ae644de38d8328a8d92280357f9121efbd2ffa373119bcb1f04555ce7f0bc2->enter($__internal_65ae644de38d8328a8d92280357f9121efbd2ffa373119bcb1f04555ce7f0bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_0ac0fbc7bf20eaac47bb802c30e5f5152cec1d370ec99b307946a622053442d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ac0fbc7bf20eaac47bb802c30e5f5152cec1d370ec99b307946a622053442d6->enter($__internal_0ac0fbc7bf20eaac47bb802c30e5f5152cec1d370ec99b307946a622053442d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 186
        $context["force_error"] = true;
        // line 187
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_0ac0fbc7bf20eaac47bb802c30e5f5152cec1d370ec99b307946a622053442d6->leave($__internal_0ac0fbc7bf20eaac47bb802c30e5f5152cec1d370ec99b307946a622053442d6_prof);

        
        $__internal_65ae644de38d8328a8d92280357f9121efbd2ffa373119bcb1f04555ce7f0bc2->leave($__internal_65ae644de38d8328a8d92280357f9121efbd2ffa373119bcb1f04555ce7f0bc2_prof);

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
