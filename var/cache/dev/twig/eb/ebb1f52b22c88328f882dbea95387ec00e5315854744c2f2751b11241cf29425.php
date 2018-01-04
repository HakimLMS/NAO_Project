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
        $__internal_3f7402870fbf9f981e5723debc0a1c044a24d8660360853b58fe7d3456439f99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f7402870fbf9f981e5723debc0a1c044a24d8660360853b58fe7d3456439f99->enter($__internal_3f7402870fbf9f981e5723debc0a1c044a24d8660360853b58fe7d3456439f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_base_layout.html.twig"));

        $__internal_2a03501963139527be5d8ae716e811db5c96ec86060cc052ee48573d1d19eb36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a03501963139527be5d8ae716e811db5c96ec86060cc052ee48573d1d19eb36->enter($__internal_2a03501963139527be5d8ae716e811db5c96ec86060cc052ee48573d1d19eb36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_base_layout.html.twig"));

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
        
        $__internal_3f7402870fbf9f981e5723debc0a1c044a24d8660360853b58fe7d3456439f99->leave($__internal_3f7402870fbf9f981e5723debc0a1c044a24d8660360853b58fe7d3456439f99_prof);

        
        $__internal_2a03501963139527be5d8ae716e811db5c96ec86060cc052ee48573d1d19eb36->leave($__internal_2a03501963139527be5d8ae716e811db5c96ec86060cc052ee48573d1d19eb36_prof);

    }

    // line 5
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_475bf6cba6be6b2f33a0c2febfab831e540da7139910cce192da04bf98a522c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_475bf6cba6be6b2f33a0c2febfab831e540da7139910cce192da04bf98a522c7->enter($__internal_475bf6cba6be6b2f33a0c2febfab831e540da7139910cce192da04bf98a522c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_49b19c1e84b89686469b31428103afc771e9a86208c516302e0c11cbc6026981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49b19c1e84b89686469b31428103afc771e9a86208c516302e0c11cbc6026981->enter($__internal_49b19c1e84b89686469b31428103afc771e9a86208c516302e0c11cbc6026981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 6
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 6, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 7
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_49b19c1e84b89686469b31428103afc771e9a86208c516302e0c11cbc6026981->leave($__internal_49b19c1e84b89686469b31428103afc771e9a86208c516302e0c11cbc6026981_prof);

        
        $__internal_475bf6cba6be6b2f33a0c2febfab831e540da7139910cce192da04bf98a522c7->leave($__internal_475bf6cba6be6b2f33a0c2febfab831e540da7139910cce192da04bf98a522c7_prof);

    }

    // line 10
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_dbae47b4a0794db327649dc125f6c1e400c65dc7cd9387e51eb03733778d3ad4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbae47b4a0794db327649dc125f6c1e400c65dc7cd9387e51eb03733778d3ad4->enter($__internal_dbae47b4a0794db327649dc125f6c1e400c65dc7cd9387e51eb03733778d3ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_fffe086316b8fd22ff16f7c6370afa27a26d37256489cd90b5ef13a102ed22ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fffe086316b8fd22ff16f7c6370afa27a26d37256489cd90b5ef13a102ed22ff->enter($__internal_fffe086316b8fd22ff16f7c6370afa27a26d37256489cd90b5ef13a102ed22ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 11
        $context["prepend"] =  !(is_string($__internal_7d8e78ffdff56943bcdcc2d3d824dc16bcaff4b2703106bd987996b9e4c2c13d = (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 11, $this->getSourceContext()); })())) && is_string($__internal_06744416f0eb7fdec61078a2307b044a8993adace0295820b91a671e3a9b089c = "{{") && ('' === $__internal_06744416f0eb7fdec61078a2307b044a8993adace0295820b91a671e3a9b089c || 0 === strpos($__internal_7d8e78ffdff56943bcdcc2d3d824dc16bcaff4b2703106bd987996b9e4c2c13d, $__internal_06744416f0eb7fdec61078a2307b044a8993adace0295820b91a671e3a9b089c)));
        // line 12
        echo "    ";
        $context["append"] =  !(is_string($__internal_85d6cb169f58e738071975a2b66357dea25043ac9d7b1a0e937fb3da25cc6d84 = (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 12, $this->getSourceContext()); })())) && is_string($__internal_1315d007418140101de9dde16ba0881f2f9d77549fd2dac4ed99108fb75864a2 = "}}") && ('' === $__internal_1315d007418140101de9dde16ba0881f2f9d77549fd2dac4ed99108fb75864a2 || $__internal_1315d007418140101de9dde16ba0881f2f9d77549fd2dac4ed99108fb75864a2 === substr($__internal_85d6cb169f58e738071975a2b66357dea25043ac9d7b1a0e937fb3da25cc6d84, -strlen($__internal_1315d007418140101de9dde16ba0881f2f9d77549fd2dac4ed99108fb75864a2))));
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
        
        $__internal_fffe086316b8fd22ff16f7c6370afa27a26d37256489cd90b5ef13a102ed22ff->leave($__internal_fffe086316b8fd22ff16f7c6370afa27a26d37256489cd90b5ef13a102ed22ff_prof);

        
        $__internal_dbae47b4a0794db327649dc125f6c1e400c65dc7cd9387e51eb03733778d3ad4->leave($__internal_dbae47b4a0794db327649dc125f6c1e400c65dc7cd9387e51eb03733778d3ad4_prof);

    }

    // line 28
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_bd57484c1bf824742792269e97f8bc106492c66fd9b4d5c069428bb1cf79519a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd57484c1bf824742792269e97f8bc106492c66fd9b4d5c069428bb1cf79519a->enter($__internal_bd57484c1bf824742792269e97f8bc106492c66fd9b4d5c069428bb1cf79519a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_185fcb39a853f5716e83f007e989c1088ab89cc03443aa221a6419a3d562d607 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_185fcb39a853f5716e83f007e989c1088ab89cc03443aa221a6419a3d562d607->enter($__internal_185fcb39a853f5716e83f007e989c1088ab89cc03443aa221a6419a3d562d607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 29
        echo "<div class=\"input-group\">";
        // line 30
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 31
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_185fcb39a853f5716e83f007e989c1088ab89cc03443aa221a6419a3d562d607->leave($__internal_185fcb39a853f5716e83f007e989c1088ab89cc03443aa221a6419a3d562d607_prof);

        
        $__internal_bd57484c1bf824742792269e97f8bc106492c66fd9b4d5c069428bb1cf79519a->leave($__internal_bd57484c1bf824742792269e97f8bc106492c66fd9b4d5c069428bb1cf79519a_prof);

    }

    // line 35
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_79ec58b3333f88123c9f2cd859ad87d6788b47557c2e58365e84a83529a698ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79ec58b3333f88123c9f2cd859ad87d6788b47557c2e58365e84a83529a698ed->enter($__internal_79ec58b3333f88123c9f2cd859ad87d6788b47557c2e58365e84a83529a698ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_ce960e8aae4835fb95557bb5f5c74405500be7c27781d6b9f76b085fa51537ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce960e8aae4835fb95557bb5f5c74405500be7c27781d6b9f76b085fa51537ca->enter($__internal_ce960e8aae4835fb95557bb5f5c74405500be7c27781d6b9f76b085fa51537ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_ce960e8aae4835fb95557bb5f5c74405500be7c27781d6b9f76b085fa51537ca->leave($__internal_ce960e8aae4835fb95557bb5f5c74405500be7c27781d6b9f76b085fa51537ca_prof);

        
        $__internal_79ec58b3333f88123c9f2cd859ad87d6788b47557c2e58365e84a83529a698ed->leave($__internal_79ec58b3333f88123c9f2cd859ad87d6788b47557c2e58365e84a83529a698ed_prof);

    }

    // line 49
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_8df9a53f74b34897b9363a908d849e6ef6c721019b04c40fd162635e669b5d4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8df9a53f74b34897b9363a908d849e6ef6c721019b04c40fd162635e669b5d4e->enter($__internal_8df9a53f74b34897b9363a908d849e6ef6c721019b04c40fd162635e669b5d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_8ff8803aba132231fabf6451a2059e3274af73633c01cd1242162fd09dafb491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ff8803aba132231fabf6451a2059e3274af73633c01cd1242162fd09dafb491->enter($__internal_8ff8803aba132231fabf6451a2059e3274af73633c01cd1242162fd09dafb491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_8ff8803aba132231fabf6451a2059e3274af73633c01cd1242162fd09dafb491->leave($__internal_8ff8803aba132231fabf6451a2059e3274af73633c01cd1242162fd09dafb491_prof);

        
        $__internal_8df9a53f74b34897b9363a908d849e6ef6c721019b04c40fd162635e669b5d4e->leave($__internal_8df9a53f74b34897b9363a908d849e6ef6c721019b04c40fd162635e669b5d4e_prof);

    }

    // line 68
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_62a6491681e5570b6844bd0738634c629f38f269e5fdb6a9291b8f0172b699fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62a6491681e5570b6844bd0738634c629f38f269e5fdb6a9291b8f0172b699fa->enter($__internal_62a6491681e5570b6844bd0738634c629f38f269e5fdb6a9291b8f0172b699fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_674b5386b7bb9ffa9c12a717527160fd5a05a75647dc9904f3de6fe6803a2868 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_674b5386b7bb9ffa9c12a717527160fd5a05a75647dc9904f3de6fe6803a2868->enter($__internal_674b5386b7bb9ffa9c12a717527160fd5a05a75647dc9904f3de6fe6803a2868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_674b5386b7bb9ffa9c12a717527160fd5a05a75647dc9904f3de6fe6803a2868->leave($__internal_674b5386b7bb9ffa9c12a717527160fd5a05a75647dc9904f3de6fe6803a2868_prof);

        
        $__internal_62a6491681e5570b6844bd0738634c629f38f269e5fdb6a9291b8f0172b699fa->leave($__internal_62a6491681e5570b6844bd0738634c629f38f269e5fdb6a9291b8f0172b699fa_prof);

    }

    // line 83
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_0e9c15f5baebe48d10e9d3fd7c1e1fc90480e372aa4b8dde0b37884cc841011b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e9c15f5baebe48d10e9d3fd7c1e1fc90480e372aa4b8dde0b37884cc841011b->enter($__internal_0e9c15f5baebe48d10e9d3fd7c1e1fc90480e372aa4b8dde0b37884cc841011b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_20e5ce6f0696e1ef9de136ba38a041eba9d064ae8c42cead2d5080b0a0b65999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20e5ce6f0696e1ef9de136ba38a041eba9d064ae8c42cead2d5080b0a0b65999->enter($__internal_20e5ce6f0696e1ef9de136ba38a041eba9d064ae8c42cead2d5080b0a0b65999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_20e5ce6f0696e1ef9de136ba38a041eba9d064ae8c42cead2d5080b0a0b65999->leave($__internal_20e5ce6f0696e1ef9de136ba38a041eba9d064ae8c42cead2d5080b0a0b65999_prof);

        
        $__internal_0e9c15f5baebe48d10e9d3fd7c1e1fc90480e372aa4b8dde0b37884cc841011b->leave($__internal_0e9c15f5baebe48d10e9d3fd7c1e1fc90480e372aa4b8dde0b37884cc841011b_prof);

    }

    // line 121
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_c5cd8720f6146bea6be96dd97837b8dbf2e82abd5e1b3fc04f53ff13b1420c98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5cd8720f6146bea6be96dd97837b8dbf2e82abd5e1b3fc04f53ff13b1420c98->enter($__internal_c5cd8720f6146bea6be96dd97837b8dbf2e82abd5e1b3fc04f53ff13b1420c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_d0f2a9db944359d759f49155138c852527d4ac27f4a646bbda54c5c5806278b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0f2a9db944359d759f49155138c852527d4ac27f4a646bbda54c5c5806278b4->enter($__internal_d0f2a9db944359d759f49155138c852527d4ac27f4a646bbda54c5c5806278b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 122
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 122, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 123
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_d0f2a9db944359d759f49155138c852527d4ac27f4a646bbda54c5c5806278b4->leave($__internal_d0f2a9db944359d759f49155138c852527d4ac27f4a646bbda54c5c5806278b4_prof);

        
        $__internal_c5cd8720f6146bea6be96dd97837b8dbf2e82abd5e1b3fc04f53ff13b1420c98->leave($__internal_c5cd8720f6146bea6be96dd97837b8dbf2e82abd5e1b3fc04f53ff13b1420c98_prof);

    }

    // line 126
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_e4fadee68a544c97943f4da3e5c39897a3d03254d2df053ca4cc9b02f87f3ace = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4fadee68a544c97943f4da3e5c39897a3d03254d2df053ca4cc9b02f87f3ace->enter($__internal_e4fadee68a544c97943f4da3e5c39897a3d03254d2df053ca4cc9b02f87f3ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_cf62f87592ba950ce0ea60caa2449555841441c33d2b0abd7d1906f71a89ad2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf62f87592ba950ce0ea60caa2449555841441c33d2b0abd7d1906f71a89ad2f->enter($__internal_cf62f87592ba950ce0ea60caa2449555841441c33d2b0abd7d1906f71a89ad2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_cf62f87592ba950ce0ea60caa2449555841441c33d2b0abd7d1906f71a89ad2f->leave($__internal_cf62f87592ba950ce0ea60caa2449555841441c33d2b0abd7d1906f71a89ad2f_prof);

        
        $__internal_e4fadee68a544c97943f4da3e5c39897a3d03254d2df053ca4cc9b02f87f3ace->leave($__internal_e4fadee68a544c97943f4da3e5c39897a3d03254d2df053ca4cc9b02f87f3ace_prof);

    }

    // line 148
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_3b40a05d953b0881e31dcd11765a885868f4775540c6d8d1bba3966922b6cefc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b40a05d953b0881e31dcd11765a885868f4775540c6d8d1bba3966922b6cefc->enter($__internal_3b40a05d953b0881e31dcd11765a885868f4775540c6d8d1bba3966922b6cefc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_9ddd3b16be5d5ef66e96754da319e2fc1cbc0e9b629835a3807939e0c5a33e3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ddd3b16be5d5ef66e96754da319e2fc1cbc0e9b629835a3807939e0c5a33e3b->enter($__internal_9ddd3b16be5d5ef66e96754da319e2fc1cbc0e9b629835a3807939e0c5a33e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 150
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 150, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 151
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_9ddd3b16be5d5ef66e96754da319e2fc1cbc0e9b629835a3807939e0c5a33e3b->leave($__internal_9ddd3b16be5d5ef66e96754da319e2fc1cbc0e9b629835a3807939e0c5a33e3b_prof);

        
        $__internal_3b40a05d953b0881e31dcd11765a885868f4775540c6d8d1bba3966922b6cefc->leave($__internal_3b40a05d953b0881e31dcd11765a885868f4775540c6d8d1bba3966922b6cefc_prof);

    }

    // line 154
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_b2809277ba096384ec8fc29e561a83b9901cd39d1d679cbdcc14713702147962 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2809277ba096384ec8fc29e561a83b9901cd39d1d679cbdcc14713702147962->enter($__internal_b2809277ba096384ec8fc29e561a83b9901cd39d1d679cbdcc14713702147962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_cf5d7e0fad5dc075568a15c7c173ca5984ec318177d11ebacc4470194adf1be7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf5d7e0fad5dc075568a15c7c173ca5984ec318177d11ebacc4470194adf1be7->enter($__internal_cf5d7e0fad5dc075568a15c7c173ca5984ec318177d11ebacc4470194adf1be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 155
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_cf5d7e0fad5dc075568a15c7c173ca5984ec318177d11ebacc4470194adf1be7->leave($__internal_cf5d7e0fad5dc075568a15c7c173ca5984ec318177d11ebacc4470194adf1be7_prof);

        
        $__internal_b2809277ba096384ec8fc29e561a83b9901cd39d1d679cbdcc14713702147962->leave($__internal_b2809277ba096384ec8fc29e561a83b9901cd39d1d679cbdcc14713702147962_prof);

    }

    // line 158
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_472bf4c4e6a863e1acf4d8bf11d72ff6a9d3fff38b6f7099c2d0fd3ee278c7ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_472bf4c4e6a863e1acf4d8bf11d72ff6a9d3fff38b6f7099c2d0fd3ee278c7ff->enter($__internal_472bf4c4e6a863e1acf4d8bf11d72ff6a9d3fff38b6f7099c2d0fd3ee278c7ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_59def5fe96f1b84d2b17956ad1e66946a0c96bba81249bb13b9984bd111d97e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59def5fe96f1b84d2b17956ad1e66946a0c96bba81249bb13b9984bd111d97e4->enter($__internal_59def5fe96f1b84d2b17956ad1e66946a0c96bba81249bb13b9984bd111d97e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 159
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_59def5fe96f1b84d2b17956ad1e66946a0c96bba81249bb13b9984bd111d97e4->leave($__internal_59def5fe96f1b84d2b17956ad1e66946a0c96bba81249bb13b9984bd111d97e4_prof);

        
        $__internal_472bf4c4e6a863e1acf4d8bf11d72ff6a9d3fff38b6f7099c2d0fd3ee278c7ff->leave($__internal_472bf4c4e6a863e1acf4d8bf11d72ff6a9d3fff38b6f7099c2d0fd3ee278c7ff_prof);

    }

    // line 164
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_931b5520fedee99a3cf73021a8c53ae4484318defed56cc408042749751c7c8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_931b5520fedee99a3cf73021a8c53ae4484318defed56cc408042749751c7c8d->enter($__internal_931b5520fedee99a3cf73021a8c53ae4484318defed56cc408042749751c7c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_79bef4d2eab4167ce77bfe389ffa9b61f026f8912a90b6fe021c3b2ba71a92ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79bef4d2eab4167ce77bfe389ffa9b61f026f8912a90b6fe021c3b2ba71a92ef->enter($__internal_79bef4d2eab4167ce77bfe389ffa9b61f026f8912a90b6fe021c3b2ba71a92ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 165
        echo "<div class=\"form-group\">";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 166, $this->getSourceContext()); })()), 'widget');
        // line 167
        echo "</div>";
        
        $__internal_79bef4d2eab4167ce77bfe389ffa9b61f026f8912a90b6fe021c3b2ba71a92ef->leave($__internal_79bef4d2eab4167ce77bfe389ffa9b61f026f8912a90b6fe021c3b2ba71a92ef_prof);

        
        $__internal_931b5520fedee99a3cf73021a8c53ae4484318defed56cc408042749751c7c8d->leave($__internal_931b5520fedee99a3cf73021a8c53ae4484318defed56cc408042749751c7c8d_prof);

    }

    // line 170
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_b0f5a2a6dc6df723e88a17c78d24bcdf18cdea06e45b9faa884dee4188b3777f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0f5a2a6dc6df723e88a17c78d24bcdf18cdea06e45b9faa884dee4188b3777f->enter($__internal_b0f5a2a6dc6df723e88a17c78d24bcdf18cdea06e45b9faa884dee4188b3777f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_860cfca9f1649f325582879f0d4b64d641e0818b0d3563e5e02aa521028bc3dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_860cfca9f1649f325582879f0d4b64d641e0818b0d3563e5e02aa521028bc3dc->enter($__internal_860cfca9f1649f325582879f0d4b64d641e0818b0d3563e5e02aa521028bc3dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 171
        $context["force_error"] = true;
        // line 172
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_860cfca9f1649f325582879f0d4b64d641e0818b0d3563e5e02aa521028bc3dc->leave($__internal_860cfca9f1649f325582879f0d4b64d641e0818b0d3563e5e02aa521028bc3dc_prof);

        
        $__internal_b0f5a2a6dc6df723e88a17c78d24bcdf18cdea06e45b9faa884dee4188b3777f->leave($__internal_b0f5a2a6dc6df723e88a17c78d24bcdf18cdea06e45b9faa884dee4188b3777f_prof);

    }

    // line 175
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_ffe06e83bf4252dfef7cae2f1304d21761c623c230128b9284e893cbb74db55a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffe06e83bf4252dfef7cae2f1304d21761c623c230128b9284e893cbb74db55a->enter($__internal_ffe06e83bf4252dfef7cae2f1304d21761c623c230128b9284e893cbb74db55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_33b1c4c0b9b4bc70b75467b86e91ef414eb37d38c034ca351f15785ec2cc5475 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33b1c4c0b9b4bc70b75467b86e91ef414eb37d38c034ca351f15785ec2cc5475->enter($__internal_33b1c4c0b9b4bc70b75467b86e91ef414eb37d38c034ca351f15785ec2cc5475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 176
        $context["force_error"] = true;
        // line 177
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_33b1c4c0b9b4bc70b75467b86e91ef414eb37d38c034ca351f15785ec2cc5475->leave($__internal_33b1c4c0b9b4bc70b75467b86e91ef414eb37d38c034ca351f15785ec2cc5475_prof);

        
        $__internal_ffe06e83bf4252dfef7cae2f1304d21761c623c230128b9284e893cbb74db55a->leave($__internal_ffe06e83bf4252dfef7cae2f1304d21761c623c230128b9284e893cbb74db55a_prof);

    }

    // line 180
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_0734df9a9c54cda62f1f424649f24aa27238eea07eebadfb88e99bae238e43b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0734df9a9c54cda62f1f424649f24aa27238eea07eebadfb88e99bae238e43b4->enter($__internal_0734df9a9c54cda62f1f424649f24aa27238eea07eebadfb88e99bae238e43b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_3536d53ec44a271b989be4ae0fbac9cced402e28ac293d720e3928e51a2db95f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3536d53ec44a271b989be4ae0fbac9cced402e28ac293d720e3928e51a2db95f->enter($__internal_3536d53ec44a271b989be4ae0fbac9cced402e28ac293d720e3928e51a2db95f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 181
        $context["force_error"] = true;
        // line 182
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_3536d53ec44a271b989be4ae0fbac9cced402e28ac293d720e3928e51a2db95f->leave($__internal_3536d53ec44a271b989be4ae0fbac9cced402e28ac293d720e3928e51a2db95f_prof);

        
        $__internal_0734df9a9c54cda62f1f424649f24aa27238eea07eebadfb88e99bae238e43b4->leave($__internal_0734df9a9c54cda62f1f424649f24aa27238eea07eebadfb88e99bae238e43b4_prof);

    }

    // line 185
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_57c4bcea8e5c5290bbbd751d1545e6184dd74a693de788f542b3139ad80632cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57c4bcea8e5c5290bbbd751d1545e6184dd74a693de788f542b3139ad80632cf->enter($__internal_57c4bcea8e5c5290bbbd751d1545e6184dd74a693de788f542b3139ad80632cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_325fca3eefc561108ae67d6b5c0a6c2ccec67b88107c8d349796f540dad8f644 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_325fca3eefc561108ae67d6b5c0a6c2ccec67b88107c8d349796f540dad8f644->enter($__internal_325fca3eefc561108ae67d6b5c0a6c2ccec67b88107c8d349796f540dad8f644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 186
        $context["force_error"] = true;
        // line 187
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_325fca3eefc561108ae67d6b5c0a6c2ccec67b88107c8d349796f540dad8f644->leave($__internal_325fca3eefc561108ae67d6b5c0a6c2ccec67b88107c8d349796f540dad8f644_prof);

        
        $__internal_57c4bcea8e5c5290bbbd751d1545e6184dd74a693de788f542b3139ad80632cf->leave($__internal_57c4bcea8e5c5290bbbd751d1545e6184dd74a693de788f542b3139ad80632cf_prof);

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
