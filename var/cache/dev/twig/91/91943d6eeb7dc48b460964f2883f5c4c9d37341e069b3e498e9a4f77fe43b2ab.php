<?php

/* foundation_5_layout.html.twig */
class __TwigTemplate_ecda72233f92dcc18369b068af7ef6924abc198db6abfeb8cdda1f0489b15fd5 extends Twig_Template
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
        $__internal_213522bd9887477cf191920688b7d64a74021767d7d391a46fa34520e3a04b1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_213522bd9887477cf191920688b7d64a74021767d7d391a46fa34520e3a04b1f->enter($__internal_213522bd9887477cf191920688b7d64a74021767d7d391a46fa34520e3a04b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_842d87469c72505484d022717f467d2c5f5ef785d775a165a7de7173496bd490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_842d87469c72505484d022717f467d2c5f5ef785d775a165a7de7173496bd490->enter($__internal_842d87469c72505484d022717f467d2c5f5ef785d775a165a7de7173496bd490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_213522bd9887477cf191920688b7d64a74021767d7d391a46fa34520e3a04b1f->leave($__internal_213522bd9887477cf191920688b7d64a74021767d7d391a46fa34520e3a04b1f_prof);

        
        $__internal_842d87469c72505484d022717f467d2c5f5ef785d775a165a7de7173496bd490->leave($__internal_842d87469c72505484d022717f467d2c5f5ef785d775a165a7de7173496bd490_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_ab646f43f5cb83ed018995b7607cd3f0ec68ae67556eceea0845c357a9233560 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab646f43f5cb83ed018995b7607cd3f0ec68ae67556eceea0845c357a9233560->enter($__internal_ab646f43f5cb83ed018995b7607cd3f0ec68ae67556eceea0845c357a9233560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_2aa2e97e025b9ff2c62382986be45f024e2d90c4e5fedfd9b964476762b3c8df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aa2e97e025b9ff2c62382986be45f024e2d90c4e5fedfd9b964476762b3c8df->enter($__internal_2aa2e97e025b9ff2c62382986be45f024e2d90c4e5fedfd9b964476762b3c8df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 7, $this->getSourceContext()); })())) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 8, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_2aa2e97e025b9ff2c62382986be45f024e2d90c4e5fedfd9b964476762b3c8df->leave($__internal_2aa2e97e025b9ff2c62382986be45f024e2d90c4e5fedfd9b964476762b3c8df_prof);

        
        $__internal_ab646f43f5cb83ed018995b7607cd3f0ec68ae67556eceea0845c357a9233560->leave($__internal_ab646f43f5cb83ed018995b7607cd3f0ec68ae67556eceea0845c357a9233560_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_e098964647ebebb995a4ffa881b1040c33a7c2a14d8316ac50c00b9b0d1b3280 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e098964647ebebb995a4ffa881b1040c33a7c2a14d8316ac50c00b9b0d1b3280->enter($__internal_e098964647ebebb995a4ffa881b1040c33a7c2a14d8316ac50c00b9b0d1b3280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_6b0e6a97eb1dbd3cdae8d2a004ad2d9e1b95d1e1936af8d85fb616f6f1901322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b0e6a97eb1dbd3cdae8d2a004ad2d9e1b95d1e1936af8d85fb616f6f1901322->enter($__internal_6b0e6a97eb1dbd3cdae8d2a004ad2d9e1b95d1e1936af8d85fb616f6f1901322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 14, $this->getSourceContext()); })())) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 15, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_6b0e6a97eb1dbd3cdae8d2a004ad2d9e1b95d1e1936af8d85fb616f6f1901322->leave($__internal_6b0e6a97eb1dbd3cdae8d2a004ad2d9e1b95d1e1936af8d85fb616f6f1901322_prof);

        
        $__internal_e098964647ebebb995a4ffa881b1040c33a7c2a14d8316ac50c00b9b0d1b3280->leave($__internal_e098964647ebebb995a4ffa881b1040c33a7c2a14d8316ac50c00b9b0d1b3280_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_196656a2d5893f606f09752361b7810fd3ef9b0527515ed7c0f1a07cebdad096 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_196656a2d5893f606f09752361b7810fd3ef9b0527515ed7c0f1a07cebdad096->enter($__internal_196656a2d5893f606f09752361b7810fd3ef9b0527515ed7c0f1a07cebdad096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_5cce48440f0286ec5f8c4625b7d3d66e09de9d9fe05f397ccd51bb42d26e1f59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cce48440f0286ec5f8c4625b7d3d66e09de9d9fe05f397ccd51bb42d26e1f59->enter($__internal_5cce48440f0286ec5f8c4625b7d3d66e09de9d9fe05f397ccd51bb42d26e1f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 21, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_5cce48440f0286ec5f8c4625b7d3d66e09de9d9fe05f397ccd51bb42d26e1f59->leave($__internal_5cce48440f0286ec5f8c4625b7d3d66e09de9d9fe05f397ccd51bb42d26e1f59_prof);

        
        $__internal_196656a2d5893f606f09752361b7810fd3ef9b0527515ed7c0f1a07cebdad096->leave($__internal_196656a2d5893f606f09752361b7810fd3ef9b0527515ed7c0f1a07cebdad096_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_44e9d19cdada65f80d3f0f383a0983bb901109166b9df7029cd79d59819a4f84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44e9d19cdada65f80d3f0f383a0983bb901109166b9df7029cd79d59819a4f84->enter($__internal_44e9d19cdada65f80d3f0f383a0983bb901109166b9df7029cd79d59819a4f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_f0b7bfd804cafeb99666dc55db0f6737cc58ffcb344062d722a7312672e0377f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0b7bfd804cafeb99666dc55db0f6737cc58ffcb344062d722a7312672e0377f->enter($__internal_f0b7bfd804cafeb99666dc55db0f6737cc58ffcb344062d722a7312672e0377f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

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
        
        $__internal_f0b7bfd804cafeb99666dc55db0f6737cc58ffcb344062d722a7312672e0377f->leave($__internal_f0b7bfd804cafeb99666dc55db0f6737cc58ffcb344062d722a7312672e0377f_prof);

        
        $__internal_44e9d19cdada65f80d3f0f383a0983bb901109166b9df7029cd79d59819a4f84->leave($__internal_44e9d19cdada65f80d3f0f383a0983bb901109166b9df7029cd79d59819a4f84_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_8603d3f61f15aa512b991674a18d477f3163891fbcdb006e7dd30edb6a5b429f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8603d3f61f15aa512b991674a18d477f3163891fbcdb006e7dd30edb6a5b429f->enter($__internal_8603d3f61f15aa512b991674a18d477f3163891fbcdb006e7dd30edb6a5b429f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_fb62b94bdc4f150cdd0e816b3f0ea15018ee2951dbf6bd2a8f54b49b1ad1e34d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb62b94bdc4f150cdd0e816b3f0ea15018ee2951dbf6bd2a8f54b49b1ad1e34d->enter($__internal_fb62b94bdc4f150cdd0e816b3f0ea15018ee2951dbf6bd2a8f54b49b1ad1e34d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

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
        
        $__internal_fb62b94bdc4f150cdd0e816b3f0ea15018ee2951dbf6bd2a8f54b49b1ad1e34d->leave($__internal_fb62b94bdc4f150cdd0e816b3f0ea15018ee2951dbf6bd2a8f54b49b1ad1e34d_prof);

        
        $__internal_8603d3f61f15aa512b991674a18d477f3163891fbcdb006e7dd30edb6a5b429f->leave($__internal_8603d3f61f15aa512b991674a18d477f3163891fbcdb006e7dd30edb6a5b429f_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_29731cf69016d105efe71a6a52d868517cd8da5a310720a9a60e5bbdfb4a13ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29731cf69016d105efe71a6a52d868517cd8da5a310720a9a60e5bbdfb4a13ae->enter($__internal_29731cf69016d105efe71a6a52d868517cd8da5a310720a9a60e5bbdfb4a13ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_b35cb5e1ed967991dc4cca9df41340f7dbb82a566053d2986fae3c377576e2c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b35cb5e1ed967991dc4cca9df41340f7dbb82a566053d2986fae3c377576e2c8->enter($__internal_b35cb5e1ed967991dc4cca9df41340f7dbb82a566053d2986fae3c377576e2c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_b35cb5e1ed967991dc4cca9df41340f7dbb82a566053d2986fae3c377576e2c8->leave($__internal_b35cb5e1ed967991dc4cca9df41340f7dbb82a566053d2986fae3c377576e2c8_prof);

        
        $__internal_29731cf69016d105efe71a6a52d868517cd8da5a310720a9a60e5bbdfb4a13ae->leave($__internal_29731cf69016d105efe71a6a52d868517cd8da5a310720a9a60e5bbdfb4a13ae_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_457da6ed3e0a5e9ffc5d49ab001718a25166bf229c8385872d251012e2110dde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_457da6ed3e0a5e9ffc5d49ab001718a25166bf229c8385872d251012e2110dde->enter($__internal_457da6ed3e0a5e9ffc5d49ab001718a25166bf229c8385872d251012e2110dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_24b77e91c7d8229c5a05ae9f57ae4fd0190d114d49c4dd298adf45c236f40927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24b77e91c7d8229c5a05ae9f57ae4fd0190d114d49c4dd298adf45c236f40927->enter($__internal_24b77e91c7d8229c5a05ae9f57ae4fd0190d114d49c4dd298adf45c236f40927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_24b77e91c7d8229c5a05ae9f57ae4fd0190d114d49c4dd298adf45c236f40927->leave($__internal_24b77e91c7d8229c5a05ae9f57ae4fd0190d114d49c4dd298adf45c236f40927_prof);

        
        $__internal_457da6ed3e0a5e9ffc5d49ab001718a25166bf229c8385872d251012e2110dde->leave($__internal_457da6ed3e0a5e9ffc5d49ab001718a25166bf229c8385872d251012e2110dde_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_519df16191b7c372770e75252376ba4e057aa147554428adb22529eb8d131b89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_519df16191b7c372770e75252376ba4e057aa147554428adb22529eb8d131b89->enter($__internal_519df16191b7c372770e75252376ba4e057aa147554428adb22529eb8d131b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_01616318909a61760790c5fad1d41addd77e0914f843e739fdb309a1a559cc6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01616318909a61760790c5fad1d41addd77e0914f843e739fdb309a1a559cc6c->enter($__internal_01616318909a61760790c5fad1d41addd77e0914f843e739fdb309a1a559cc6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_01616318909a61760790c5fad1d41addd77e0914f843e739fdb309a1a559cc6c->leave($__internal_01616318909a61760790c5fad1d41addd77e0914f843e739fdb309a1a559cc6c_prof);

        
        $__internal_519df16191b7c372770e75252376ba4e057aa147554428adb22529eb8d131b89->leave($__internal_519df16191b7c372770e75252376ba4e057aa147554428adb22529eb8d131b89_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_32d78cb118410e8dcb90541f80440f4eb906115f66fe4040a58456bd7d6f54bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32d78cb118410e8dcb90541f80440f4eb906115f66fe4040a58456bd7d6f54bb->enter($__internal_32d78cb118410e8dcb90541f80440f4eb906115f66fe4040a58456bd7d6f54bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_36cd9069e9d2e89633a355b5f011a67c07aebf9e4403536d479610bf239c627c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36cd9069e9d2e89633a355b5f011a67c07aebf9e4403536d479610bf239c627c->enter($__internal_36cd9069e9d2e89633a355b5f011a67c07aebf9e4403536d479610bf239c627c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_36cd9069e9d2e89633a355b5f011a67c07aebf9e4403536d479610bf239c627c->leave($__internal_36cd9069e9d2e89633a355b5f011a67c07aebf9e4403536d479610bf239c627c_prof);

        
        $__internal_32d78cb118410e8dcb90541f80440f4eb906115f66fe4040a58456bd7d6f54bb->leave($__internal_32d78cb118410e8dcb90541f80440f4eb906115f66fe4040a58456bd7d6f54bb_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_659d0f3aa80a2b7b98b099ec8238066c0a075959875846624254d39471bd0990 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_659d0f3aa80a2b7b98b099ec8238066c0a075959875846624254d39471bd0990->enter($__internal_659d0f3aa80a2b7b98b099ec8238066c0a075959875846624254d39471bd0990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_88d91773e330c8d793c8f66d23ff4fb0a8c78fcb070511ce39b98814ce70ab1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88d91773e330c8d793c8f66d23ff4fb0a8c78fcb070511ce39b98814ce70ab1c->enter($__internal_88d91773e330c8d793c8f66d23ff4fb0a8c78fcb070511ce39b98814ce70ab1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_88d91773e330c8d793c8f66d23ff4fb0a8c78fcb070511ce39b98814ce70ab1c->leave($__internal_88d91773e330c8d793c8f66d23ff4fb0a8c78fcb070511ce39b98814ce70ab1c_prof);

        
        $__internal_659d0f3aa80a2b7b98b099ec8238066c0a075959875846624254d39471bd0990->leave($__internal_659d0f3aa80a2b7b98b099ec8238066c0a075959875846624254d39471bd0990_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_3e0b492deefef6ee44c433549d7b00d790597280e84f6b6cd3d5c346f3910afc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e0b492deefef6ee44c433549d7b00d790597280e84f6b6cd3d5c346f3910afc->enter($__internal_3e0b492deefef6ee44c433549d7b00d790597280e84f6b6cd3d5c346f3910afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_f9309246b42263a2fd419629cbb257c5a570e43cbb8f0ff4f48d4a059fa64d45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9309246b42263a2fd419629cbb257c5a570e43cbb8f0ff4f48d4a059fa64d45->enter($__internal_f9309246b42263a2fd419629cbb257c5a570e43cbb8f0ff4f48d4a059fa64d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_f9309246b42263a2fd419629cbb257c5a570e43cbb8f0ff4f48d4a059fa64d45->leave($__internal_f9309246b42263a2fd419629cbb257c5a570e43cbb8f0ff4f48d4a059fa64d45_prof);

        
        $__internal_3e0b492deefef6ee44c433549d7b00d790597280e84f6b6cd3d5c346f3910afc->leave($__internal_3e0b492deefef6ee44c433549d7b00d790597280e84f6b6cd3d5c346f3910afc_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_04944947cb5609e990dd528ff14bb8ade08a0a2b23faeb6a6e0c060c41135bfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04944947cb5609e990dd528ff14bb8ade08a0a2b23faeb6a6e0c060c41135bfc->enter($__internal_04944947cb5609e990dd528ff14bb8ade08a0a2b23faeb6a6e0c060c41135bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_c5a0edd1ea8c74d9ebb1919badc525db473dc132a5de735e273b91e052eabc65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5a0edd1ea8c74d9ebb1919badc525db473dc132a5de735e273b91e052eabc65->enter($__internal_c5a0edd1ea8c74d9ebb1919badc525db473dc132a5de735e273b91e052eabc65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_c5a0edd1ea8c74d9ebb1919badc525db473dc132a5de735e273b91e052eabc65->leave($__internal_c5a0edd1ea8c74d9ebb1919badc525db473dc132a5de735e273b91e052eabc65_prof);

        
        $__internal_04944947cb5609e990dd528ff14bb8ade08a0a2b23faeb6a6e0c060c41135bfc->leave($__internal_04944947cb5609e990dd528ff14bb8ade08a0a2b23faeb6a6e0c060c41135bfc_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_d642155c85ce7f5ff022285352083d99f53790098194d0a244c9cbc0af39c7e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d642155c85ce7f5ff022285352083d99f53790098194d0a244c9cbc0af39c7e0->enter($__internal_d642155c85ce7f5ff022285352083d99f53790098194d0a244c9cbc0af39c7e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_8e2f20b49d8d6ccfeb17ed86a06e9667175faedc4c8d3b05bcc4e57d0b9ef6ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e2f20b49d8d6ccfeb17ed86a06e9667175faedc4c8d3b05bcc4e57d0b9ef6ef->enter($__internal_8e2f20b49d8d6ccfeb17ed86a06e9667175faedc4c8d3b05bcc4e57d0b9ef6ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 218, $this->getSourceContext()); })())) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 219, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_8e2f20b49d8d6ccfeb17ed86a06e9667175faedc4c8d3b05bcc4e57d0b9ef6ef->leave($__internal_8e2f20b49d8d6ccfeb17ed86a06e9667175faedc4c8d3b05bcc4e57d0b9ef6ef_prof);

        
        $__internal_d642155c85ce7f5ff022285352083d99f53790098194d0a244c9cbc0af39c7e0->leave($__internal_d642155c85ce7f5ff022285352083d99f53790098194d0a244c9cbc0af39c7e0_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_30a0376975590f1f320ab33c5369a90bf7d94643ad3ce3c17309af7deefe5002 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30a0376975590f1f320ab33c5369a90bf7d94643ad3ce3c17309af7deefe5002->enter($__internal_30a0376975590f1f320ab33c5369a90bf7d94643ad3ce3c17309af7deefe5002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_a3b4dbf2e7bd0ad00f529ce1e7a25e1b48da452d44e196dcd122a2c2bf103717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3b4dbf2e7bd0ad00f529ce1e7a25e1b48da452d44e196dcd122a2c2bf103717->enter($__internal_a3b4dbf2e7bd0ad00f529ce1e7a25e1b48da452d44e196dcd122a2c2bf103717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

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
        
        $__internal_a3b4dbf2e7bd0ad00f529ce1e7a25e1b48da452d44e196dcd122a2c2bf103717->leave($__internal_a3b4dbf2e7bd0ad00f529ce1e7a25e1b48da452d44e196dcd122a2c2bf103717_prof);

        
        $__internal_30a0376975590f1f320ab33c5369a90bf7d94643ad3ce3c17309af7deefe5002->leave($__internal_30a0376975590f1f320ab33c5369a90bf7d94643ad3ce3c17309af7deefe5002_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_ebc004d1305a766b115f978f7e501c1be4a34ad488f16444b24a8a093a9c26e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebc004d1305a766b115f978f7e501c1be4a34ad488f16444b24a8a093a9c26e1->enter($__internal_ebc004d1305a766b115f978f7e501c1be4a34ad488f16444b24a8a093a9c26e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_d91f1649da2b839eb26c7e0efef75257f3cfc7d6f329c46be60b3965e5cc9140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d91f1649da2b839eb26c7e0efef75257f3cfc7d6f329c46be60b3965e5cc9140->enter($__internal_d91f1649da2b839eb26c7e0efef75257f3cfc7d6f329c46be60b3965e5cc9140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_d91f1649da2b839eb26c7e0efef75257f3cfc7d6f329c46be60b3965e5cc9140->leave($__internal_d91f1649da2b839eb26c7e0efef75257f3cfc7d6f329c46be60b3965e5cc9140_prof);

        
        $__internal_ebc004d1305a766b115f978f7e501c1be4a34ad488f16444b24a8a093a9c26e1->leave($__internal_ebc004d1305a766b115f978f7e501c1be4a34ad488f16444b24a8a093a9c26e1_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_b383fcbcc73e4dd26dad86fc5ec4241efa858ae92387a873d067d600e6b7fd71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b383fcbcc73e4dd26dad86fc5ec4241efa858ae92387a873d067d600e6b7fd71->enter($__internal_b383fcbcc73e4dd26dad86fc5ec4241efa858ae92387a873d067d600e6b7fd71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_1600c4d0b842eb96ad8c5f858616c086b20308d31e0b567df9875c6d82eda617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1600c4d0b842eb96ad8c5f858616c086b20308d31e0b567df9875c6d82eda617->enter($__internal_1600c4d0b842eb96ad8c5f858616c086b20308d31e0b567df9875c6d82eda617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_1600c4d0b842eb96ad8c5f858616c086b20308d31e0b567df9875c6d82eda617->leave($__internal_1600c4d0b842eb96ad8c5f858616c086b20308d31e0b567df9875c6d82eda617_prof);

        
        $__internal_b383fcbcc73e4dd26dad86fc5ec4241efa858ae92387a873d067d600e6b7fd71->leave($__internal_b383fcbcc73e4dd26dad86fc5ec4241efa858ae92387a873d067d600e6b7fd71_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_f466c4548edffd9cf990f8563f7f6d633e95f1eedc0e1d500a1c30f2788b1193 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f466c4548edffd9cf990f8563f7f6d633e95f1eedc0e1d500a1c30f2788b1193->enter($__internal_f466c4548edffd9cf990f8563f7f6d633e95f1eedc0e1d500a1c30f2788b1193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_264bfdc5d03a14db9707940908b407fd17da363f72b3070674d74454c66c6c30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_264bfdc5d03a14db9707940908b407fd17da363f72b3070674d74454c66c6c30->enter($__internal_264bfdc5d03a14db9707940908b407fd17da363f72b3070674d74454c66c6c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_264bfdc5d03a14db9707940908b407fd17da363f72b3070674d74454c66c6c30->leave($__internal_264bfdc5d03a14db9707940908b407fd17da363f72b3070674d74454c66c6c30_prof);

        
        $__internal_f466c4548edffd9cf990f8563f7f6d633e95f1eedc0e1d500a1c30f2788b1193->leave($__internal_f466c4548edffd9cf990f8563f7f6d633e95f1eedc0e1d500a1c30f2788b1193_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_a5275d8f6431142ff04fa9436c3f1fdd8ddbf2bc4391e92eb2cc5f1f9bc8d754 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5275d8f6431142ff04fa9436c3f1fdd8ddbf2bc4391e92eb2cc5f1f9bc8d754->enter($__internal_a5275d8f6431142ff04fa9436c3f1fdd8ddbf2bc4391e92eb2cc5f1f9bc8d754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_f9263226f2a6d1b2c0014d757b3c5e46cc1cc85c22ab5377f4c1f8e731c9bb97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9263226f2a6d1b2c0014d757b3c5e46cc1cc85c22ab5377f4c1f8e731c9bb97->enter($__internal_f9263226f2a6d1b2c0014d757b3c5e46cc1cc85c22ab5377f4c1f8e731c9bb97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_f9263226f2a6d1b2c0014d757b3c5e46cc1cc85c22ab5377f4c1f8e731c9bb97->leave($__internal_f9263226f2a6d1b2c0014d757b3c5e46cc1cc85c22ab5377f4c1f8e731c9bb97_prof);

        
        $__internal_a5275d8f6431142ff04fa9436c3f1fdd8ddbf2bc4391e92eb2cc5f1f9bc8d754->leave($__internal_a5275d8f6431142ff04fa9436c3f1fdd8ddbf2bc4391e92eb2cc5f1f9bc8d754_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_83446532e44f705bba13533993efabecc5043f375263c356bce18cee20574863 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83446532e44f705bba13533993efabecc5043f375263c356bce18cee20574863->enter($__internal_83446532e44f705bba13533993efabecc5043f375263c356bce18cee20574863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_e2482f7ccc4831c44f18d086090922ec944ece2ee4b57277213daa024356e793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2482f7ccc4831c44f18d086090922ec944ece2ee4b57277213daa024356e793->enter($__internal_e2482f7ccc4831c44f18d086090922ec944ece2ee4b57277213daa024356e793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e2482f7ccc4831c44f18d086090922ec944ece2ee4b57277213daa024356e793->leave($__internal_e2482f7ccc4831c44f18d086090922ec944ece2ee4b57277213daa024356e793_prof);

        
        $__internal_83446532e44f705bba13533993efabecc5043f375263c356bce18cee20574863->leave($__internal_83446532e44f705bba13533993efabecc5043f375263c356bce18cee20574863_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_59a1c36a0070ec81c581f239be1fed3abbea26dd31ee0082c80acb79a47a1a07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59a1c36a0070ec81c581f239be1fed3abbea26dd31ee0082c80acb79a47a1a07->enter($__internal_59a1c36a0070ec81c581f239be1fed3abbea26dd31ee0082c80acb79a47a1a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_f01d1e21ef30fe1c9508219ef5b0f0f94ef206c870c61a0a0f32e59f7c1dc558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f01d1e21ef30fe1c9508219ef5b0f0f94ef206c870c61a0a0f32e59f7c1dc558->enter($__internal_f01d1e21ef30fe1c9508219ef5b0f0f94ef206c870c61a0a0f32e59f7c1dc558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_f01d1e21ef30fe1c9508219ef5b0f0f94ef206c870c61a0a0f32e59f7c1dc558->leave($__internal_f01d1e21ef30fe1c9508219ef5b0f0f94ef206c870c61a0a0f32e59f7c1dc558_prof);

        
        $__internal_59a1c36a0070ec81c581f239be1fed3abbea26dd31ee0082c80acb79a47a1a07->leave($__internal_59a1c36a0070ec81c581f239be1fed3abbea26dd31ee0082c80acb79a47a1a07_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_8ff8b8444dc1ce2988e437fbad0e67247c2eea2e3fd90242bbc602bf111fd90b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ff8b8444dc1ce2988e437fbad0e67247c2eea2e3fd90242bbc602bf111fd90b->enter($__internal_8ff8b8444dc1ce2988e437fbad0e67247c2eea2e3fd90242bbc602bf111fd90b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_8b0ec3d78db42c62a7687cc2c5e4428e46963acfcf1764670a80c0e93f33c02d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b0ec3d78db42c62a7687cc2c5e4428e46963acfcf1764670a80c0e93f33c02d->enter($__internal_8b0ec3d78db42c62a7687cc2c5e4428e46963acfcf1764670a80c0e93f33c02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8b0ec3d78db42c62a7687cc2c5e4428e46963acfcf1764670a80c0e93f33c02d->leave($__internal_8b0ec3d78db42c62a7687cc2c5e4428e46963acfcf1764670a80c0e93f33c02d_prof);

        
        $__internal_8ff8b8444dc1ce2988e437fbad0e67247c2eea2e3fd90242bbc602bf111fd90b->leave($__internal_8ff8b8444dc1ce2988e437fbad0e67247c2eea2e3fd90242bbc602bf111fd90b_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_168a912666ea89e6bf476378c34df6e283529d76df36813bf4a758687f9dd9fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_168a912666ea89e6bf476378c34df6e283529d76df36813bf4a758687f9dd9fa->enter($__internal_168a912666ea89e6bf476378c34df6e283529d76df36813bf4a758687f9dd9fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_ffc8db18565b5da2c323695c66a7b99e84a9046857e629ecbabda2ac94a75765 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffc8db18565b5da2c323695c66a7b99e84a9046857e629ecbabda2ac94a75765->enter($__internal_ffc8db18565b5da2c323695c66a7b99e84a9046857e629ecbabda2ac94a75765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ffc8db18565b5da2c323695c66a7b99e84a9046857e629ecbabda2ac94a75765->leave($__internal_ffc8db18565b5da2c323695c66a7b99e84a9046857e629ecbabda2ac94a75765_prof);

        
        $__internal_168a912666ea89e6bf476378c34df6e283529d76df36813bf4a758687f9dd9fa->leave($__internal_168a912666ea89e6bf476378c34df6e283529d76df36813bf4a758687f9dd9fa_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_73a8bb9c9e87691f1bf53c1f5f694c4c891d0a8e7c47b0e166699f06d45e3963 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73a8bb9c9e87691f1bf53c1f5f694c4c891d0a8e7c47b0e166699f06d45e3963->enter($__internal_73a8bb9c9e87691f1bf53c1f5f694c4c891d0a8e7c47b0e166699f06d45e3963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_cd7c97b937118e35a56ba976c2b53dc005161e4af8ada39e12b134d1717d72cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd7c97b937118e35a56ba976c2b53dc005161e4af8ada39e12b134d1717d72cc->enter($__internal_cd7c97b937118e35a56ba976c2b53dc005161e4af8ada39e12b134d1717d72cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_cd7c97b937118e35a56ba976c2b53dc005161e4af8ada39e12b134d1717d72cc->leave($__internal_cd7c97b937118e35a56ba976c2b53dc005161e4af8ada39e12b134d1717d72cc_prof);

        
        $__internal_73a8bb9c9e87691f1bf53c1f5f694c4c891d0a8e7c47b0e166699f06d45e3963->leave($__internal_73a8bb9c9e87691f1bf53c1f5f694c4c891d0a8e7c47b0e166699f06d45e3963_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_86869df9ae377d68831db5d14637d29417bb663fe81e11636e4ef5be1e57a6d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86869df9ae377d68831db5d14637d29417bb663fe81e11636e4ef5be1e57a6d6->enter($__internal_86869df9ae377d68831db5d14637d29417bb663fe81e11636e4ef5be1e57a6d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_1322f8df41db5edeb0a73dc4522eaa7fd0d1111fed158331c1761559a657d193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1322f8df41db5edeb0a73dc4522eaa7fd0d1111fed158331c1761559a657d193->enter($__internal_1322f8df41db5edeb0a73dc4522eaa7fd0d1111fed158331c1761559a657d193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_1322f8df41db5edeb0a73dc4522eaa7fd0d1111fed158331c1761559a657d193->leave($__internal_1322f8df41db5edeb0a73dc4522eaa7fd0d1111fed158331c1761559a657d193_prof);

        
        $__internal_86869df9ae377d68831db5d14637d29417bb663fe81e11636e4ef5be1e57a6d6->leave($__internal_86869df9ae377d68831db5d14637d29417bb663fe81e11636e4ef5be1e57a6d6_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_eaabda0b8770375b7e274207b430ae73ff191699548fc061b39b48aa5adcb165 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaabda0b8770375b7e274207b430ae73ff191699548fc061b39b48aa5adcb165->enter($__internal_eaabda0b8770375b7e274207b430ae73ff191699548fc061b39b48aa5adcb165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_bfda1a61c612b82e1a6ee1bc4714cb3dac21c4bd5f0c85dde2c617723cd53c18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfda1a61c612b82e1a6ee1bc4714cb3dac21c4bd5f0c85dde2c617723cd53c18->enter($__internal_bfda1a61c612b82e1a6ee1bc4714cb3dac21c4bd5f0c85dde2c617723cd53c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_bfda1a61c612b82e1a6ee1bc4714cb3dac21c4bd5f0c85dde2c617723cd53c18->leave($__internal_bfda1a61c612b82e1a6ee1bc4714cb3dac21c4bd5f0c85dde2c617723cd53c18_prof);

        
        $__internal_eaabda0b8770375b7e274207b430ae73ff191699548fc061b39b48aa5adcb165->leave($__internal_eaabda0b8770375b7e274207b430ae73ff191699548fc061b39b48aa5adcb165_prof);

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
