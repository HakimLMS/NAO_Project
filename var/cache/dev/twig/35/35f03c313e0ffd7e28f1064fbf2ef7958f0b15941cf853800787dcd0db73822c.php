<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_e95f75826dc9efff97ed9f00f92a8f716916a9755ed81f906136c46530d09923 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38b5941ff93f89f15a9d559b9e9cb577c9ec5acfc405e228b6cb0eff4a480599 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38b5941ff93f89f15a9d559b9e9cb577c9ec5acfc405e228b6cb0eff4a480599->enter($__internal_38b5941ff93f89f15a9d559b9e9cb577c9ec5acfc405e228b6cb0eff4a480599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_3fbde90bd6683853e586f835e94fcc62e591792c058b4ffc048026c99bd925bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fbde90bd6683853e586f835e94fcc62e591792c058b4ffc048026c99bd925bf->enter($__internal_3fbde90bd6683853e586f835e94fcc62e591792c058b4ffc048026c99bd925bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('submit_row', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('reset_row', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_38b5941ff93f89f15a9d559b9e9cb577c9ec5acfc405e228b6cb0eff4a480599->leave($__internal_38b5941ff93f89f15a9d559b9e9cb577c9ec5acfc405e228b6cb0eff4a480599_prof);

        
        $__internal_3fbde90bd6683853e586f835e94fcc62e591792c058b4ffc048026c99bd925bf->leave($__internal_3fbde90bd6683853e586f835e94fcc62e591792c058b4ffc048026c99bd925bf_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_e37aeec34c640f8460f61211309c73e62e0b242fa7b8acf0490e3b7825de0f90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e37aeec34c640f8460f61211309c73e62e0b242fa7b8acf0490e3b7825de0f90->enter($__internal_e37aeec34c640f8460f61211309c73e62e0b242fa7b8acf0490e3b7825de0f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_8d42f13f38a9cc4afd7cec10536a230bd5132fbb45e6fb9e86a5a8421b2c315a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d42f13f38a9cc4afd7cec10536a230bd5132fbb45e6fb9e86a5a8421b2c315a->enter($__internal_8d42f13f38a9cc4afd7cec10536a230bd5132fbb45e6fb9e86a5a8421b2c315a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_8d42f13f38a9cc4afd7cec10536a230bd5132fbb45e6fb9e86a5a8421b2c315a->leave($__internal_8d42f13f38a9cc4afd7cec10536a230bd5132fbb45e6fb9e86a5a8421b2c315a_prof);

        
        $__internal_e37aeec34c640f8460f61211309c73e62e0b242fa7b8acf0490e3b7825de0f90->leave($__internal_e37aeec34c640f8460f61211309c73e62e0b242fa7b8acf0490e3b7825de0f90_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_23cde5ca847cad4045ceb987e342d722265ab5953b4f172d74962d5abbc17ed7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23cde5ca847cad4045ceb987e342d722265ab5953b4f172d74962d5abbc17ed7->enter($__internal_23cde5ca847cad4045ceb987e342d722265ab5953b4f172d74962d5abbc17ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_da80bb8630de42ea8b4f708316ec3a5d21256cfe4eb7b3e03d5168b84497cfaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da80bb8630de42ea8b4f708316ec3a5d21256cfe4eb7b3e03d5168b84497cfaa->enter($__internal_da80bb8630de42ea8b4f708316ec3a5d21256cfe4eb7b3e03d5168b84497cfaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 11, $this->getSourceContext()); })()) === false)) {
            // line 12
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 14
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 14, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 15
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_da80bb8630de42ea8b4f708316ec3a5d21256cfe4eb7b3e03d5168b84497cfaa->leave($__internal_da80bb8630de42ea8b4f708316ec3a5d21256cfe4eb7b3e03d5168b84497cfaa_prof);

        
        $__internal_23cde5ca847cad4045ceb987e342d722265ab5953b4f172d74962d5abbc17ed7->leave($__internal_23cde5ca847cad4045ceb987e342d722265ab5953b4f172d74962d5abbc17ed7_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_e30a5b2508c38436f24edcdb8be7714d06fc812fc6411dd7505eafeb99def1bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e30a5b2508c38436f24edcdb8be7714d06fc812fc6411dd7505eafeb99def1bb->enter($__internal_e30a5b2508c38436f24edcdb8be7714d06fc812fc6411dd7505eafeb99def1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_ebbdea334af54a89acd9d7d377bd5525f45dd67fcc7295011752a55918a47561 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebbdea334af54a89acd9d7d377bd5525f45dd67fcc7295011752a55918a47561->enter($__internal_ebbdea334af54a89acd9d7d377bd5525f45dd67fcc7295011752a55918a47561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_ebbdea334af54a89acd9d7d377bd5525f45dd67fcc7295011752a55918a47561->leave($__internal_ebbdea334af54a89acd9d7d377bd5525f45dd67fcc7295011752a55918a47561_prof);

        
        $__internal_e30a5b2508c38436f24edcdb8be7714d06fc812fc6411dd7505eafeb99def1bb->leave($__internal_e30a5b2508c38436f24edcdb8be7714d06fc812fc6411dd7505eafeb99def1bb_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_98f965fb3c15024d50f9752f833aacef6a0162d0a226790d9b869a9a7052b7b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98f965fb3c15024d50f9752f833aacef6a0162d0a226790d9b869a9a7052b7b8->enter($__internal_98f965fb3c15024d50f9752f833aacef6a0162d0a226790d9b869a9a7052b7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_58fd231a810b601b7d26b930396aa985eff5598dfd142a8926da4b038015b8ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58fd231a810b601b7d26b930396aa985eff5598dfd142a8926da4b038015b8ef->enter($__internal_58fd231a810b601b7d26b930396aa985eff5598dfd142a8926da4b038015b8ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 26, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 26, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 26, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'label');
        // line 28
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), 'widget');
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'errors');
        // line 31
        echo "</div>
";
        // line 32
        echo "</div>";
        
        $__internal_58fd231a810b601b7d26b930396aa985eff5598dfd142a8926da4b038015b8ef->leave($__internal_58fd231a810b601b7d26b930396aa985eff5598dfd142a8926da4b038015b8ef_prof);

        
        $__internal_98f965fb3c15024d50f9752f833aacef6a0162d0a226790d9b869a9a7052b7b8->leave($__internal_98f965fb3c15024d50f9752f833aacef6a0162d0a226790d9b869a9a7052b7b8_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_aa7dcaa262448ee827a55d22c71a7b894bc0215b33d2bf56883c52b4e96aff56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa7dcaa262448ee827a55d22c71a7b894bc0215b33d2bf56883c52b4e96aff56->enter($__internal_aa7dcaa262448ee827a55d22c71a7b894bc0215b33d2bf56883c52b4e96aff56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_a0331bd0611ff576620f37cce053fa899f6d371ac845799e56bde4a336011295 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0331bd0611ff576620f37cce053fa899f6d371ac845799e56bde4a336011295->enter($__internal_a0331bd0611ff576620f37cce053fa899f6d371ac845799e56bde4a336011295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 36
        echo "<div class=\"form-group\">";
        // line 37
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 38
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), 'widget');
        // line 40
        echo "</div>";
        // line 41
        echo "</div>";
        
        $__internal_a0331bd0611ff576620f37cce053fa899f6d371ac845799e56bde4a336011295->leave($__internal_a0331bd0611ff576620f37cce053fa899f6d371ac845799e56bde4a336011295_prof);

        
        $__internal_aa7dcaa262448ee827a55d22c71a7b894bc0215b33d2bf56883c52b4e96aff56->leave($__internal_aa7dcaa262448ee827a55d22c71a7b894bc0215b33d2bf56883c52b4e96aff56_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_98a01b074b26f6fea3dde0d855e17f781812e1acddfec3bcb6b007d9aa012eec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98a01b074b26f6fea3dde0d855e17f781812e1acddfec3bcb6b007d9aa012eec->enter($__internal_98a01b074b26f6fea3dde0d855e17f781812e1acddfec3bcb6b007d9aa012eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_c174501d1085c330f0296399c51413c3cf3b65140a2c7e319362e8c318e143ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c174501d1085c330f0296399c51413c3cf3b65140a2c7e319362e8c318e143ff->enter($__internal_c174501d1085c330f0296399c51413c3cf3b65140a2c7e319362e8c318e143ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 45
        echo "<div class=\"form-group\">";
        // line 46
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 47
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->getSourceContext()); })()), 'widget');
        // line 49
        echo "</div>";
        // line 50
        echo "</div>";
        
        $__internal_c174501d1085c330f0296399c51413c3cf3b65140a2c7e319362e8c318e143ff->leave($__internal_c174501d1085c330f0296399c51413c3cf3b65140a2c7e319362e8c318e143ff_prof);

        
        $__internal_98a01b074b26f6fea3dde0d855e17f781812e1acddfec3bcb6b007d9aa012eec->leave($__internal_98a01b074b26f6fea3dde0d855e17f781812e1acddfec3bcb6b007d9aa012eec_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_8a39abafea019620458362b1dd5add48b3a46e46c3cf806836709e081500ecb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a39abafea019620458362b1dd5add48b3a46e46c3cf806836709e081500ecb9->enter($__internal_8a39abafea019620458362b1dd5add48b3a46e46c3cf806836709e081500ecb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_9428a2b725dc9ac911d83de843715482363438eb6da51e65c6a63ba477cf6a62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9428a2b725dc9ac911d83de843715482363438eb6da51e65c6a63ba477cf6a62->enter($__internal_9428a2b725dc9ac911d83de843715482363438eb6da51e65c6a63ba477cf6a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_9428a2b725dc9ac911d83de843715482363438eb6da51e65c6a63ba477cf6a62->leave($__internal_9428a2b725dc9ac911d83de843715482363438eb6da51e65c6a63ba477cf6a62_prof);

        
        $__internal_8a39abafea019620458362b1dd5add48b3a46e46c3cf806836709e081500ecb9->leave($__internal_8a39abafea019620458362b1dd5add48b3a46e46c3cf806836709e081500ecb9_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_3d9863539c69cd5ec0a8cfabfb781cbd413db5e4f15b1b800b7e2a7029ee4273 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d9863539c69cd5ec0a8cfabfb781cbd413db5e4f15b1b800b7e2a7029ee4273->enter($__internal_3d9863539c69cd5ec0a8cfabfb781cbd413db5e4f15b1b800b7e2a7029ee4273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_eb94b53bd87a03434b60d22bb38a2487a871434d5f38cf4eaf3effbee1edf236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb94b53bd87a03434b60d22bb38a2487a871434d5f38cf4eaf3effbee1edf236->enter($__internal_eb94b53bd87a03434b60d22bb38a2487a871434d5f38cf4eaf3effbee1edf236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 58
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 58, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 59
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->getSourceContext()); })()), 'widget');
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'errors');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_eb94b53bd87a03434b60d22bb38a2487a871434d5f38cf4eaf3effbee1edf236->leave($__internal_eb94b53bd87a03434b60d22bb38a2487a871434d5f38cf4eaf3effbee1edf236_prof);

        
        $__internal_3d9863539c69cd5ec0a8cfabfb781cbd413db5e4f15b1b800b7e2a7029ee4273->leave($__internal_3d9863539c69cd5ec0a8cfabfb781cbd413db5e4f15b1b800b7e2a7029ee4273_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  320 => 64,  318 => 63,  316 => 62,  314 => 61,  310 => 60,  306 => 59,  300 => 58,  291 => 57,  281 => 54,  272 => 53,  262 => 50,  260 => 49,  258 => 48,  254 => 47,  250 => 46,  248 => 45,  239 => 44,  229 => 41,  227 => 40,  225 => 39,  221 => 38,  217 => 37,  215 => 36,  206 => 35,  196 => 32,  193 => 31,  191 => 30,  189 => 29,  185 => 28,  183 => 27,  177 => 26,  168 => 25,  158 => 20,  149 => 19,  138 => 15,  136 => 14,  131 => 12,  129 => 11,  120 => 10,  110 => 5,  108 => 4,  99 => 3,  89 => 57,  86 => 56,  84 => 53,  81 => 52,  79 => 44,  76 => 43,  74 => 35,  71 => 34,  69 => 25,  66 => 24,  63 => 22,  61 => 19,  58 => 18,  56 => 10,  53 => 9,  50 => 7,  48 => 3,  45 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block submit_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}", "bootstrap_3_horizontal_layout.html.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\bootstrap_3_horizontal_layout.html.twig");
    }
}
