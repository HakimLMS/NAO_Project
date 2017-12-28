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
        $__internal_d4d86562689a5ec77792a9305ba62ae1fac8a3246de02cdb3b7fe41914d66ef8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4d86562689a5ec77792a9305ba62ae1fac8a3246de02cdb3b7fe41914d66ef8->enter($__internal_d4d86562689a5ec77792a9305ba62ae1fac8a3246de02cdb3b7fe41914d66ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_base_layout.html.twig"));

        $__internal_c351b8098b5577229265fd32e6e8b23072bf8f1a09e26428e01d5ef8d1406a2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c351b8098b5577229265fd32e6e8b23072bf8f1a09e26428e01d5ef8d1406a2d->enter($__internal_c351b8098b5577229265fd32e6e8b23072bf8f1a09e26428e01d5ef8d1406a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_base_layout.html.twig"));

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
        
        $__internal_d4d86562689a5ec77792a9305ba62ae1fac8a3246de02cdb3b7fe41914d66ef8->leave($__internal_d4d86562689a5ec77792a9305ba62ae1fac8a3246de02cdb3b7fe41914d66ef8_prof);

        
        $__internal_c351b8098b5577229265fd32e6e8b23072bf8f1a09e26428e01d5ef8d1406a2d->leave($__internal_c351b8098b5577229265fd32e6e8b23072bf8f1a09e26428e01d5ef8d1406a2d_prof);

    }

    // line 5
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_c20f962cae4ef9aba51bc5b1776098ddfc2bd541e7f80dfba8c99ba3f7c3b4fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c20f962cae4ef9aba51bc5b1776098ddfc2bd541e7f80dfba8c99ba3f7c3b4fd->enter($__internal_c20f962cae4ef9aba51bc5b1776098ddfc2bd541e7f80dfba8c99ba3f7c3b4fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_5257d5ed6d13d4d17fa2c756ef1d4c4e18f8cdfa628485583fac8b64f3e74102 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5257d5ed6d13d4d17fa2c756ef1d4c4e18f8cdfa628485583fac8b64f3e74102->enter($__internal_5257d5ed6d13d4d17fa2c756ef1d4c4e18f8cdfa628485583fac8b64f3e74102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 6
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 6, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 7
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_5257d5ed6d13d4d17fa2c756ef1d4c4e18f8cdfa628485583fac8b64f3e74102->leave($__internal_5257d5ed6d13d4d17fa2c756ef1d4c4e18f8cdfa628485583fac8b64f3e74102_prof);

        
        $__internal_c20f962cae4ef9aba51bc5b1776098ddfc2bd541e7f80dfba8c99ba3f7c3b4fd->leave($__internal_c20f962cae4ef9aba51bc5b1776098ddfc2bd541e7f80dfba8c99ba3f7c3b4fd_prof);

    }

    // line 10
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_f2816b14e1015428de4bee42d8612aff4e565516b3639d75a0973444ff0a2083 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2816b14e1015428de4bee42d8612aff4e565516b3639d75a0973444ff0a2083->enter($__internal_f2816b14e1015428de4bee42d8612aff4e565516b3639d75a0973444ff0a2083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_2a5d557f17d2aa07d94813d0b8c73bcbfdfe6fb770d77998b7409571d48f82e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a5d557f17d2aa07d94813d0b8c73bcbfdfe6fb770d77998b7409571d48f82e7->enter($__internal_2a5d557f17d2aa07d94813d0b8c73bcbfdfe6fb770d77998b7409571d48f82e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 11
        $context["prepend"] =  !(is_string($__internal_5b4842f0084387628565f6fae17c2f7fdec7e4e680909ded90ca36ad24cf4d3e = (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 11, $this->getSourceContext()); })())) && is_string($__internal_9901405b9edcffdf826c62a4c0666afe6b4b512c0da1804e09ac77f40a615217 = "{{") && ('' === $__internal_9901405b9edcffdf826c62a4c0666afe6b4b512c0da1804e09ac77f40a615217 || 0 === strpos($__internal_5b4842f0084387628565f6fae17c2f7fdec7e4e680909ded90ca36ad24cf4d3e, $__internal_9901405b9edcffdf826c62a4c0666afe6b4b512c0da1804e09ac77f40a615217)));
        // line 12
        echo "    ";
        $context["append"] =  !(is_string($__internal_027068d9b6477701cd84e99e7e2a00e29cd9a768786d91ef430fab73559e41ab = (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 12, $this->getSourceContext()); })())) && is_string($__internal_59f4b320f4d0bbe918ee740be52dbc3457414d3869cd2dc5c55a888b5a5ba7d7 = "}}") && ('' === $__internal_59f4b320f4d0bbe918ee740be52dbc3457414d3869cd2dc5c55a888b5a5ba7d7 || $__internal_59f4b320f4d0bbe918ee740be52dbc3457414d3869cd2dc5c55a888b5a5ba7d7 === substr($__internal_027068d9b6477701cd84e99e7e2a00e29cd9a768786d91ef430fab73559e41ab, -strlen($__internal_59f4b320f4d0bbe918ee740be52dbc3457414d3869cd2dc5c55a888b5a5ba7d7))));
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
        
        $__internal_2a5d557f17d2aa07d94813d0b8c73bcbfdfe6fb770d77998b7409571d48f82e7->leave($__internal_2a5d557f17d2aa07d94813d0b8c73bcbfdfe6fb770d77998b7409571d48f82e7_prof);

        
        $__internal_f2816b14e1015428de4bee42d8612aff4e565516b3639d75a0973444ff0a2083->leave($__internal_f2816b14e1015428de4bee42d8612aff4e565516b3639d75a0973444ff0a2083_prof);

    }

    // line 28
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_914d6665f1a7f93d78f7ea963455075c7533275d3d1d86be4ec97b12d0a2d18b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_914d6665f1a7f93d78f7ea963455075c7533275d3d1d86be4ec97b12d0a2d18b->enter($__internal_914d6665f1a7f93d78f7ea963455075c7533275d3d1d86be4ec97b12d0a2d18b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_995e02ae9b63a198b891235d804df5483bfc17ac9e684ecdc97dffec4efc3a6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_995e02ae9b63a198b891235d804df5483bfc17ac9e684ecdc97dffec4efc3a6f->enter($__internal_995e02ae9b63a198b891235d804df5483bfc17ac9e684ecdc97dffec4efc3a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 29
        echo "<div class=\"input-group\">";
        // line 30
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 31
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_995e02ae9b63a198b891235d804df5483bfc17ac9e684ecdc97dffec4efc3a6f->leave($__internal_995e02ae9b63a198b891235d804df5483bfc17ac9e684ecdc97dffec4efc3a6f_prof);

        
        $__internal_914d6665f1a7f93d78f7ea963455075c7533275d3d1d86be4ec97b12d0a2d18b->leave($__internal_914d6665f1a7f93d78f7ea963455075c7533275d3d1d86be4ec97b12d0a2d18b_prof);

    }

    // line 35
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_d732b5296bc38f58da5aa18c8c85b3a49103b6366560ca18f27d974c4059a20c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d732b5296bc38f58da5aa18c8c85b3a49103b6366560ca18f27d974c4059a20c->enter($__internal_d732b5296bc38f58da5aa18c8c85b3a49103b6366560ca18f27d974c4059a20c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_bfb5313056f7f5af21c22b7e19179cc3136b6c8dcfd6eb1e22354213a64523f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfb5313056f7f5af21c22b7e19179cc3136b6c8dcfd6eb1e22354213a64523f3->enter($__internal_bfb5313056f7f5af21c22b7e19179cc3136b6c8dcfd6eb1e22354213a64523f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_bfb5313056f7f5af21c22b7e19179cc3136b6c8dcfd6eb1e22354213a64523f3->leave($__internal_bfb5313056f7f5af21c22b7e19179cc3136b6c8dcfd6eb1e22354213a64523f3_prof);

        
        $__internal_d732b5296bc38f58da5aa18c8c85b3a49103b6366560ca18f27d974c4059a20c->leave($__internal_d732b5296bc38f58da5aa18c8c85b3a49103b6366560ca18f27d974c4059a20c_prof);

    }

    // line 49
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_b7a00ee1654dcc66905160f5777d56255fa258cc0ad8c916413a4f4a81c59b50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7a00ee1654dcc66905160f5777d56255fa258cc0ad8c916413a4f4a81c59b50->enter($__internal_b7a00ee1654dcc66905160f5777d56255fa258cc0ad8c916413a4f4a81c59b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_fa0e93f90f7ac9c47976004eeb39bf5e1f1ddf510c27f967f2613cf42c6a4d8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa0e93f90f7ac9c47976004eeb39bf5e1f1ddf510c27f967f2613cf42c6a4d8d->enter($__internal_fa0e93f90f7ac9c47976004eeb39bf5e1f1ddf510c27f967f2613cf42c6a4d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_fa0e93f90f7ac9c47976004eeb39bf5e1f1ddf510c27f967f2613cf42c6a4d8d->leave($__internal_fa0e93f90f7ac9c47976004eeb39bf5e1f1ddf510c27f967f2613cf42c6a4d8d_prof);

        
        $__internal_b7a00ee1654dcc66905160f5777d56255fa258cc0ad8c916413a4f4a81c59b50->leave($__internal_b7a00ee1654dcc66905160f5777d56255fa258cc0ad8c916413a4f4a81c59b50_prof);

    }

    // line 68
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_8e2032bd348524853abf31e721ea7e7bfde85e807b9ad9a64d9ad036b4675c0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e2032bd348524853abf31e721ea7e7bfde85e807b9ad9a64d9ad036b4675c0d->enter($__internal_8e2032bd348524853abf31e721ea7e7bfde85e807b9ad9a64d9ad036b4675c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_f039ee54bb9ef343da331fb9d013662377f2f04971b691ffcbd5585024b0a23a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f039ee54bb9ef343da331fb9d013662377f2f04971b691ffcbd5585024b0a23a->enter($__internal_f039ee54bb9ef343da331fb9d013662377f2f04971b691ffcbd5585024b0a23a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_f039ee54bb9ef343da331fb9d013662377f2f04971b691ffcbd5585024b0a23a->leave($__internal_f039ee54bb9ef343da331fb9d013662377f2f04971b691ffcbd5585024b0a23a_prof);

        
        $__internal_8e2032bd348524853abf31e721ea7e7bfde85e807b9ad9a64d9ad036b4675c0d->leave($__internal_8e2032bd348524853abf31e721ea7e7bfde85e807b9ad9a64d9ad036b4675c0d_prof);

    }

    // line 83
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_379af84e91798ee763e3b403f1fe4649c94af68d11f0e05a439af64d18ccacae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_379af84e91798ee763e3b403f1fe4649c94af68d11f0e05a439af64d18ccacae->enter($__internal_379af84e91798ee763e3b403f1fe4649c94af68d11f0e05a439af64d18ccacae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_65cfb3a7210e335bd43e7aa8f0dc5e0f27e296ee8db39c2feaa0244bd1752fb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65cfb3a7210e335bd43e7aa8f0dc5e0f27e296ee8db39c2feaa0244bd1752fb7->enter($__internal_65cfb3a7210e335bd43e7aa8f0dc5e0f27e296ee8db39c2feaa0244bd1752fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_65cfb3a7210e335bd43e7aa8f0dc5e0f27e296ee8db39c2feaa0244bd1752fb7->leave($__internal_65cfb3a7210e335bd43e7aa8f0dc5e0f27e296ee8db39c2feaa0244bd1752fb7_prof);

        
        $__internal_379af84e91798ee763e3b403f1fe4649c94af68d11f0e05a439af64d18ccacae->leave($__internal_379af84e91798ee763e3b403f1fe4649c94af68d11f0e05a439af64d18ccacae_prof);

    }

    // line 121
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_309eef95c24cfad8b16f7edd66e266a56f5476e23e3224444de9e1d168aefcc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_309eef95c24cfad8b16f7edd66e266a56f5476e23e3224444de9e1d168aefcc1->enter($__internal_309eef95c24cfad8b16f7edd66e266a56f5476e23e3224444de9e1d168aefcc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_8a85bf2c4d70302498d9143c42053e8b219d7f3c10fb2fc4d5432665d7eecd58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a85bf2c4d70302498d9143c42053e8b219d7f3c10fb2fc4d5432665d7eecd58->enter($__internal_8a85bf2c4d70302498d9143c42053e8b219d7f3c10fb2fc4d5432665d7eecd58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 122
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 122, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 123
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_8a85bf2c4d70302498d9143c42053e8b219d7f3c10fb2fc4d5432665d7eecd58->leave($__internal_8a85bf2c4d70302498d9143c42053e8b219d7f3c10fb2fc4d5432665d7eecd58_prof);

        
        $__internal_309eef95c24cfad8b16f7edd66e266a56f5476e23e3224444de9e1d168aefcc1->leave($__internal_309eef95c24cfad8b16f7edd66e266a56f5476e23e3224444de9e1d168aefcc1_prof);

    }

    // line 126
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_27b6243dffc8448fc0bf93e582d6038cd07cb7e73f5756a5385c754fd7830137 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27b6243dffc8448fc0bf93e582d6038cd07cb7e73f5756a5385c754fd7830137->enter($__internal_27b6243dffc8448fc0bf93e582d6038cd07cb7e73f5756a5385c754fd7830137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_a3c41443c65bd187f68cbfd23408046f98e12ff909c9c721da4720e11ab63153 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3c41443c65bd187f68cbfd23408046f98e12ff909c9c721da4720e11ab63153->enter($__internal_a3c41443c65bd187f68cbfd23408046f98e12ff909c9c721da4720e11ab63153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_a3c41443c65bd187f68cbfd23408046f98e12ff909c9c721da4720e11ab63153->leave($__internal_a3c41443c65bd187f68cbfd23408046f98e12ff909c9c721da4720e11ab63153_prof);

        
        $__internal_27b6243dffc8448fc0bf93e582d6038cd07cb7e73f5756a5385c754fd7830137->leave($__internal_27b6243dffc8448fc0bf93e582d6038cd07cb7e73f5756a5385c754fd7830137_prof);

    }

    // line 148
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_edb6db2d26bf0e4d2970c56b2ceef219a802c8b703ba495eac92f8f50e99a283 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edb6db2d26bf0e4d2970c56b2ceef219a802c8b703ba495eac92f8f50e99a283->enter($__internal_edb6db2d26bf0e4d2970c56b2ceef219a802c8b703ba495eac92f8f50e99a283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_fd841f40977441667e0012638d0e427d6e273a76d28e121c63ba667ee6e06b20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd841f40977441667e0012638d0e427d6e273a76d28e121c63ba667ee6e06b20->enter($__internal_fd841f40977441667e0012638d0e427d6e273a76d28e121c63ba667ee6e06b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 150
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 150, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 151
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_fd841f40977441667e0012638d0e427d6e273a76d28e121c63ba667ee6e06b20->leave($__internal_fd841f40977441667e0012638d0e427d6e273a76d28e121c63ba667ee6e06b20_prof);

        
        $__internal_edb6db2d26bf0e4d2970c56b2ceef219a802c8b703ba495eac92f8f50e99a283->leave($__internal_edb6db2d26bf0e4d2970c56b2ceef219a802c8b703ba495eac92f8f50e99a283_prof);

    }

    // line 154
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_3479e7771ba8bfae5c8eea5c0ebea8dd5a01712f5f467d5cc2fe5cf6bebde4cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3479e7771ba8bfae5c8eea5c0ebea8dd5a01712f5f467d5cc2fe5cf6bebde4cf->enter($__internal_3479e7771ba8bfae5c8eea5c0ebea8dd5a01712f5f467d5cc2fe5cf6bebde4cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_3345209b963fe7ee047f8109c7c1c70a8fb80eb3bb72faeb942c79c53a96e758 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3345209b963fe7ee047f8109c7c1c70a8fb80eb3bb72faeb942c79c53a96e758->enter($__internal_3345209b963fe7ee047f8109c7c1c70a8fb80eb3bb72faeb942c79c53a96e758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 155
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_3345209b963fe7ee047f8109c7c1c70a8fb80eb3bb72faeb942c79c53a96e758->leave($__internal_3345209b963fe7ee047f8109c7c1c70a8fb80eb3bb72faeb942c79c53a96e758_prof);

        
        $__internal_3479e7771ba8bfae5c8eea5c0ebea8dd5a01712f5f467d5cc2fe5cf6bebde4cf->leave($__internal_3479e7771ba8bfae5c8eea5c0ebea8dd5a01712f5f467d5cc2fe5cf6bebde4cf_prof);

    }

    // line 158
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_720f80e73cb3a8e32302582285805f9c7dfe3e95c986e822973da6f18bb93ca7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_720f80e73cb3a8e32302582285805f9c7dfe3e95c986e822973da6f18bb93ca7->enter($__internal_720f80e73cb3a8e32302582285805f9c7dfe3e95c986e822973da6f18bb93ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_5a08706ef95cc4852e7aebc594f18fbd61502352a29ae9f64e747bdba06193b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a08706ef95cc4852e7aebc594f18fbd61502352a29ae9f64e747bdba06193b8->enter($__internal_5a08706ef95cc4852e7aebc594f18fbd61502352a29ae9f64e747bdba06193b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 159
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_5a08706ef95cc4852e7aebc594f18fbd61502352a29ae9f64e747bdba06193b8->leave($__internal_5a08706ef95cc4852e7aebc594f18fbd61502352a29ae9f64e747bdba06193b8_prof);

        
        $__internal_720f80e73cb3a8e32302582285805f9c7dfe3e95c986e822973da6f18bb93ca7->leave($__internal_720f80e73cb3a8e32302582285805f9c7dfe3e95c986e822973da6f18bb93ca7_prof);

    }

    // line 164
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_9c6af42cf939437431f80cf2ee223ccef6485790c43d6138a75a8acb0c6c3ac2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c6af42cf939437431f80cf2ee223ccef6485790c43d6138a75a8acb0c6c3ac2->enter($__internal_9c6af42cf939437431f80cf2ee223ccef6485790c43d6138a75a8acb0c6c3ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_426f823a39f7f0c1c60790f781af4d643d962b50fa8795024d452c5a60aac7c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_426f823a39f7f0c1c60790f781af4d643d962b50fa8795024d452c5a60aac7c1->enter($__internal_426f823a39f7f0c1c60790f781af4d643d962b50fa8795024d452c5a60aac7c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 165
        echo "<div class=\"form-group\">";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 166, $this->getSourceContext()); })()), 'widget');
        // line 167
        echo "</div>";
        
        $__internal_426f823a39f7f0c1c60790f781af4d643d962b50fa8795024d452c5a60aac7c1->leave($__internal_426f823a39f7f0c1c60790f781af4d643d962b50fa8795024d452c5a60aac7c1_prof);

        
        $__internal_9c6af42cf939437431f80cf2ee223ccef6485790c43d6138a75a8acb0c6c3ac2->leave($__internal_9c6af42cf939437431f80cf2ee223ccef6485790c43d6138a75a8acb0c6c3ac2_prof);

    }

    // line 170
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_c0beb4338cdab75b5ace052fee1fd133f88e18017cb0c745913557722d64a51a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0beb4338cdab75b5ace052fee1fd133f88e18017cb0c745913557722d64a51a->enter($__internal_c0beb4338cdab75b5ace052fee1fd133f88e18017cb0c745913557722d64a51a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_6e9e30ddd2c338f787e83399e4f19ced73d60d38bf5a1feb727d495f8ae9011b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e9e30ddd2c338f787e83399e4f19ced73d60d38bf5a1feb727d495f8ae9011b->enter($__internal_6e9e30ddd2c338f787e83399e4f19ced73d60d38bf5a1feb727d495f8ae9011b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 171
        $context["force_error"] = true;
        // line 172
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6e9e30ddd2c338f787e83399e4f19ced73d60d38bf5a1feb727d495f8ae9011b->leave($__internal_6e9e30ddd2c338f787e83399e4f19ced73d60d38bf5a1feb727d495f8ae9011b_prof);

        
        $__internal_c0beb4338cdab75b5ace052fee1fd133f88e18017cb0c745913557722d64a51a->leave($__internal_c0beb4338cdab75b5ace052fee1fd133f88e18017cb0c745913557722d64a51a_prof);

    }

    // line 175
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_e7065a47f2d0b11b4a2f8e3997bbf80acadf8b2d124847cb3adda7ee8df78138 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7065a47f2d0b11b4a2f8e3997bbf80acadf8b2d124847cb3adda7ee8df78138->enter($__internal_e7065a47f2d0b11b4a2f8e3997bbf80acadf8b2d124847cb3adda7ee8df78138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_88c46424841a430d5aa8847b9d7fef5dfe6ecc38f596482a542f0863fda96aa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88c46424841a430d5aa8847b9d7fef5dfe6ecc38f596482a542f0863fda96aa9->enter($__internal_88c46424841a430d5aa8847b9d7fef5dfe6ecc38f596482a542f0863fda96aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 176
        $context["force_error"] = true;
        // line 177
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_88c46424841a430d5aa8847b9d7fef5dfe6ecc38f596482a542f0863fda96aa9->leave($__internal_88c46424841a430d5aa8847b9d7fef5dfe6ecc38f596482a542f0863fda96aa9_prof);

        
        $__internal_e7065a47f2d0b11b4a2f8e3997bbf80acadf8b2d124847cb3adda7ee8df78138->leave($__internal_e7065a47f2d0b11b4a2f8e3997bbf80acadf8b2d124847cb3adda7ee8df78138_prof);

    }

    // line 180
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_a75528c2080c2c92d811735929d3a399babd9c2316609a6d9db9a25effc2adac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a75528c2080c2c92d811735929d3a399babd9c2316609a6d9db9a25effc2adac->enter($__internal_a75528c2080c2c92d811735929d3a399babd9c2316609a6d9db9a25effc2adac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_efaaadb5b773a112fea8968e49a41040d0b4c94bfba9b01c907714c03ec4d92e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efaaadb5b773a112fea8968e49a41040d0b4c94bfba9b01c907714c03ec4d92e->enter($__internal_efaaadb5b773a112fea8968e49a41040d0b4c94bfba9b01c907714c03ec4d92e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 181
        $context["force_error"] = true;
        // line 182
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_efaaadb5b773a112fea8968e49a41040d0b4c94bfba9b01c907714c03ec4d92e->leave($__internal_efaaadb5b773a112fea8968e49a41040d0b4c94bfba9b01c907714c03ec4d92e_prof);

        
        $__internal_a75528c2080c2c92d811735929d3a399babd9c2316609a6d9db9a25effc2adac->leave($__internal_a75528c2080c2c92d811735929d3a399babd9c2316609a6d9db9a25effc2adac_prof);

    }

    // line 185
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_1f22a56ec2749ba3336a954778417aff16b651077daf6b2563f36bad1d3031a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f22a56ec2749ba3336a954778417aff16b651077daf6b2563f36bad1d3031a5->enter($__internal_1f22a56ec2749ba3336a954778417aff16b651077daf6b2563f36bad1d3031a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_1852d81b525e71724becf8bfb8fafd8eba44771e58b3b6724bd773d7770f12a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1852d81b525e71724becf8bfb8fafd8eba44771e58b3b6724bd773d7770f12a5->enter($__internal_1852d81b525e71724becf8bfb8fafd8eba44771e58b3b6724bd773d7770f12a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 186
        $context["force_error"] = true;
        // line 187
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_1852d81b525e71724becf8bfb8fafd8eba44771e58b3b6724bd773d7770f12a5->leave($__internal_1852d81b525e71724becf8bfb8fafd8eba44771e58b3b6724bd773d7770f12a5_prof);

        
        $__internal_1f22a56ec2749ba3336a954778417aff16b651077daf6b2563f36bad1d3031a5->leave($__internal_1f22a56ec2749ba3336a954778417aff16b651077daf6b2563f36bad1d3031a5_prof);

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
