<?php

/* form_div_layout.html.twig */
class __TwigTemplate_3be39d81b583738c0debb430f9d951dc932633a8e6dd1e14d33903a4f4fb279c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'range_widget' => array($this, 'block_range_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'tel_widget' => array($this, 'block_tel_widget'),
            'color_widget' => array($this, 'block_color_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c12b34c06007bceb819839a2df2c7c8faac50c9872e64c129b1d8bbafd552a52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c12b34c06007bceb819839a2df2c7c8faac50c9872e64c129b1d8bbafd552a52->enter($__internal_c12b34c06007bceb819839a2df2c7c8faac50c9872e64c129b1d8bbafd552a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        $__internal_bf93c62aafc8803301373f695d9d1c4d13e9f0dae1124629453c70a24cb57b1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf93c62aafc8803301373f695d9d1c4d13e9f0dae1124629453c70a24cb57b1e->enter($__internal_bf93c62aafc8803301373f695d9d1c4d13e9f0dae1124629453c70a24cb57b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 16
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 26
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 33
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 37
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 45
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 54
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 74
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 87
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 91
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 95
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 108
        $this->displayBlock('date_widget', $context, $blocks);
        // line 122
        $this->displayBlock('time_widget', $context, $blocks);
        // line 133
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 168
        $this->displayBlock('number_widget', $context, $blocks);
        // line 174
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 179
        $this->displayBlock('money_widget', $context, $blocks);
        // line 183
        $this->displayBlock('url_widget', $context, $blocks);
        // line 188
        $this->displayBlock('search_widget', $context, $blocks);
        // line 193
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 198
        $this->displayBlock('password_widget', $context, $blocks);
        // line 203
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 208
        $this->displayBlock('email_widget', $context, $blocks);
        // line 213
        $this->displayBlock('range_widget', $context, $blocks);
        // line 218
        $this->displayBlock('button_widget', $context, $blocks);
        // line 232
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 237
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 242
        $this->displayBlock('tel_widget', $context, $blocks);
        // line 247
        $this->displayBlock('color_widget', $context, $blocks);
        // line 254
        $this->displayBlock('form_label', $context, $blocks);
        // line 276
        $this->displayBlock('button_label', $context, $blocks);
        // line 280
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 288
        $this->displayBlock('form_row', $context, $blocks);
        // line 296
        $this->displayBlock('button_row', $context, $blocks);
        // line 302
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 308
        $this->displayBlock('form', $context, $blocks);
        // line 314
        $this->displayBlock('form_start', $context, $blocks);
        // line 328
        $this->displayBlock('form_end', $context, $blocks);
        // line 335
        $this->displayBlock('form_errors', $context, $blocks);
        // line 345
        $this->displayBlock('form_rest', $context, $blocks);
        // line 366
        echo "
";
        // line 369
        $this->displayBlock('form_rows', $context, $blocks);
        // line 375
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 382
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 387
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 392
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_c12b34c06007bceb819839a2df2c7c8faac50c9872e64c129b1d8bbafd552a52->leave($__internal_c12b34c06007bceb819839a2df2c7c8faac50c9872e64c129b1d8bbafd552a52_prof);

        
        $__internal_bf93c62aafc8803301373f695d9d1c4d13e9f0dae1124629453c70a24cb57b1e->leave($__internal_bf93c62aafc8803301373f695d9d1c4d13e9f0dae1124629453c70a24cb57b1e_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_6807f9c40d7abfa92d81f07d6ca80e32cc77618b315801fefa11316de89b1e59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6807f9c40d7abfa92d81f07d6ca80e32cc77618b315801fefa11316de89b1e59->enter($__internal_6807f9c40d7abfa92d81f07d6ca80e32cc77618b315801fefa11316de89b1e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_861faf8ea93dee24e41ec4dcd98dd088ef821c3a7abd74ae98d37bcb923113a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_861faf8ea93dee24e41ec4dcd98dd088ef821c3a7abd74ae98d37bcb923113a7->enter($__internal_861faf8ea93dee24e41ec4dcd98dd088ef821c3a7abd74ae98d37bcb923113a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if ((isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 4, $this->getSourceContext()); })())) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_861faf8ea93dee24e41ec4dcd98dd088ef821c3a7abd74ae98d37bcb923113a7->leave($__internal_861faf8ea93dee24e41ec4dcd98dd088ef821c3a7abd74ae98d37bcb923113a7_prof);

        
        $__internal_6807f9c40d7abfa92d81f07d6ca80e32cc77618b315801fefa11316de89b1e59->leave($__internal_6807f9c40d7abfa92d81f07d6ca80e32cc77618b315801fefa11316de89b1e59_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_9daf6278ed952ee01a23db7639669a12b35981a99f06a826eabf93c8380590ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9daf6278ed952ee01a23db7639669a12b35981a99f06a826eabf93c8380590ab->enter($__internal_9daf6278ed952ee01a23db7639669a12b35981a99f06a826eabf93c8380590ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_31735fd76b518c2387218b55f59dc1d63a7575e790ae73b676af2159e71bf67f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31735fd76b518c2387218b55f59dc1d63a7575e790ae73b676af2159e71bf67f->enter($__internal_31735fd76b518c2387218b55f59dc1d63a7575e790ae73b676af2159e71bf67f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 12, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 13
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_31735fd76b518c2387218b55f59dc1d63a7575e790ae73b676af2159e71bf67f->leave($__internal_31735fd76b518c2387218b55f59dc1d63a7575e790ae73b676af2159e71bf67f_prof);

        
        $__internal_9daf6278ed952ee01a23db7639669a12b35981a99f06a826eabf93c8380590ab->leave($__internal_9daf6278ed952ee01a23db7639669a12b35981a99f06a826eabf93c8380590ab_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_539e7bcc466c3bb293227d39efffa0f04c892126491c12f1924048b8fa1c7b83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_539e7bcc466c3bb293227d39efffa0f04c892126491c12f1924048b8fa1c7b83->enter($__internal_539e7bcc466c3bb293227d39efffa0f04c892126491c12f1924048b8fa1c7b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_f4f795e9e5c0cdd36f541dfe17412df7cd8fa58ed6253b2885e9ccc2525abcb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4f795e9e5c0cdd36f541dfe17412df7cd8fa58ed6253b2885e9ccc2525abcb4->enter($__internal_f4f795e9e5c0cdd36f541dfe17412df7cd8fa58ed6253b2885e9ccc2525abcb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 17
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 18
        if (Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()))) {
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'errors');
        }
        // line 21
        $this->displayBlock("form_rows", $context, $blocks);
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), 'rest');
        // line 23
        echo "</div>";
        
        $__internal_f4f795e9e5c0cdd36f541dfe17412df7cd8fa58ed6253b2885e9ccc2525abcb4->leave($__internal_f4f795e9e5c0cdd36f541dfe17412df7cd8fa58ed6253b2885e9ccc2525abcb4_prof);

        
        $__internal_539e7bcc466c3bb293227d39efffa0f04c892126491c12f1924048b8fa1c7b83->leave($__internal_539e7bcc466c3bb293227d39efffa0f04c892126491c12f1924048b8fa1c7b83_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_e1a06948192348e59bb7b800db59a49d620e7aee412f1a666b295b159f23d8e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1a06948192348e59bb7b800db59a49d620e7aee412f1a666b295b159f23d8e6->enter($__internal_e1a06948192348e59bb7b800db59a49d620e7aee412f1a666b295b159f23d8e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_c899d16fd5830d02ed16d8b93e1885ab3bdb077fa25c6a1b4c79cf86a5086847 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c899d16fd5830d02ed16d8b93e1885ab3bdb077fa25c6a1b4c79cf86a5086847->enter($__internal_c899d16fd5830d02ed16d8b93e1885ab3bdb077fa25c6a1b4c79cf86a5086847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 28, $this->getSourceContext()); })()), array("data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new Twig_Error_Runtime('Variable "prototype" does not exist.', 28, $this->getSourceContext()); })()), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_c899d16fd5830d02ed16d8b93e1885ab3bdb077fa25c6a1b4c79cf86a5086847->leave($__internal_c899d16fd5830d02ed16d8b93e1885ab3bdb077fa25c6a1b4c79cf86a5086847_prof);

        
        $__internal_e1a06948192348e59bb7b800db59a49d620e7aee412f1a666b295b159f23d8e6->leave($__internal_e1a06948192348e59bb7b800db59a49d620e7aee412f1a666b295b159f23d8e6_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_a305ba5bb50f9bcdbe1b43bb6c1f34420062dc7cb0dadeb9d5c9ec567cd463ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a305ba5bb50f9bcdbe1b43bb6c1f34420062dc7cb0dadeb9d5c9ec567cd463ab->enter($__internal_a305ba5bb50f9bcdbe1b43bb6c1f34420062dc7cb0dadeb9d5c9ec567cd463ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_374a1872166176f1749f52175cb4c7be1da5d7433846dda4b12d9d53832721c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_374a1872166176f1749f52175cb4c7be1da5d7433846dda4b12d9d53832721c1->enter($__internal_374a1872166176f1749f52175cb4c7be1da5d7433846dda4b12d9d53832721c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 34, $this->getSourceContext()); })()), "html", null, true);
        echo "</textarea>";
        
        $__internal_374a1872166176f1749f52175cb4c7be1da5d7433846dda4b12d9d53832721c1->leave($__internal_374a1872166176f1749f52175cb4c7be1da5d7433846dda4b12d9d53832721c1_prof);

        
        $__internal_a305ba5bb50f9bcdbe1b43bb6c1f34420062dc7cb0dadeb9d5c9ec567cd463ab->leave($__internal_a305ba5bb50f9bcdbe1b43bb6c1f34420062dc7cb0dadeb9d5c9ec567cd463ab_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_bcb8d2fe82414fd28f483d9dc06b714e257b7bbca8ba867173d235ec43fa1246 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcb8d2fe82414fd28f483d9dc06b714e257b7bbca8ba867173d235ec43fa1246->enter($__internal_bcb8d2fe82414fd28f483d9dc06b714e257b7bbca8ba867173d235ec43fa1246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        $__internal_1cae2c26ca25280e90c2e904cdc1056bdf3b2862dc9473c08afb0663fb0dff05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cae2c26ca25280e90c2e904cdc1056bdf3b2862dc9473c08afb0663fb0dff05->enter($__internal_1cae2c26ca25280e90c2e904cdc1056bdf3b2862dc9473c08afb0663fb0dff05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if ((isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 38, $this->getSourceContext()); })())) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_1cae2c26ca25280e90c2e904cdc1056bdf3b2862dc9473c08afb0663fb0dff05->leave($__internal_1cae2c26ca25280e90c2e904cdc1056bdf3b2862dc9473c08afb0663fb0dff05_prof);

        
        $__internal_bcb8d2fe82414fd28f483d9dc06b714e257b7bbca8ba867173d235ec43fa1246->leave($__internal_bcb8d2fe82414fd28f483d9dc06b714e257b7bbca8ba867173d235ec43fa1246_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_586869402957f924a68fe9f0e913f91a44b77613dd3b4154707d7eb6e6194ce0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_586869402957f924a68fe9f0e913f91a44b77613dd3b4154707d7eb6e6194ce0->enter($__internal_586869402957f924a68fe9f0e913f91a44b77613dd3b4154707d7eb6e6194ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_3a09043e7df3105116f26c4c59ed0eb24d98bd59875ccc445b16d50894b9c21b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a09043e7df3105116f26c4c59ed0eb24d98bd59875ccc445b16d50894b9c21b->enter($__internal_3a09043e7df3105116f26c4c59ed0eb24d98bd59875ccc445b16d50894b9c21b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 46
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 49, $this->getSourceContext()); })())));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>";
        
        $__internal_3a09043e7df3105116f26c4c59ed0eb24d98bd59875ccc445b16d50894b9c21b->leave($__internal_3a09043e7df3105116f26c4c59ed0eb24d98bd59875ccc445b16d50894b9c21b_prof);

        
        $__internal_586869402957f924a68fe9f0e913f91a44b77613dd3b4154707d7eb6e6194ce0->leave($__internal_586869402957f924a68fe9f0e913f91a44b77613dd3b4154707d7eb6e6194ce0_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_d95bdd800b717168eb07ab0d5d3e104eeeabec8be5de166696d132308b6d7e16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d95bdd800b717168eb07ab0d5d3e104eeeabec8be5de166696d132308b6d7e16->enter($__internal_d95bdd800b717168eb07ab0d5d3e104eeeabec8be5de166696d132308b6d7e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_f6dfedb71428bef52093b353abfc58768de8494177b43ea13fe273ee929043d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6dfedb71428bef52093b353abfc58768de8494177b43ea13fe273ee929043d9->enter($__internal_f6dfedb71428bef52093b353abfc58768de8494177b43ea13fe273ee929043d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 55
        if ((((((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 55, $this->getSourceContext()); })()) && (null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 55, $this->getSourceContext()); })()))) &&  !(isset($context["placeholder_in_choices"]) || array_key_exists("placeholder_in_choices", $context) ? $context["placeholder_in_choices"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder_in_choices" does not exist.', 55, $this->getSourceContext()); })())) &&  !(isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 55, $this->getSourceContext()); })())) && ( !twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "size", array(), "any", true, true) || (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 55, $this->getSourceContext()); })()), "size", array()) <= 1)))) {
            // line 56
            $context["required"] = false;
        }
        // line 58
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 58, $this->getSourceContext()); })())) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 59
        if ( !(null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 59, $this->getSourceContext()); })()))) {
            // line 60
            echo "<option value=\"\"";
            if (((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 60, $this->getSourceContext()); })()) && twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 60, $this->getSourceContext()); })())))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })()) != "")) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 60, $this->getSourceContext()); })()) === false)) ? ((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 60, $this->getSourceContext()); })()))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 62
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 62, $this->getSourceContext()); })())) > 0)) {
            // line 63
            $context["options"] = (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 63, $this->getSourceContext()); })());
            // line 64
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 65
            if (((twig_length_filter($this->env, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 65, $this->getSourceContext()); })())) > 0) &&  !(null === (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 65, $this->getSourceContext()); })())))) {
                // line 66
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 66, $this->getSourceContext()); })()), "html", null, true);
                echo "</option>";
            }
        }
        // line 69
        $context["options"] = (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 69, $this->getSourceContext()); })());
        // line 70
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 71
        echo "</select>";
        
        $__internal_f6dfedb71428bef52093b353abfc58768de8494177b43ea13fe273ee929043d9->leave($__internal_f6dfedb71428bef52093b353abfc58768de8494177b43ea13fe273ee929043d9_prof);

        
        $__internal_d95bdd800b717168eb07ab0d5d3e104eeeabec8be5de166696d132308b6d7e16->leave($__internal_d95bdd800b717168eb07ab0d5d3e104eeeabec8be5de166696d132308b6d7e16_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_6c41942e4bd205a0e2e8365feb4aa3bb1a2b8abc08876707e309539efe56b188 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c41942e4bd205a0e2e8365feb4aa3bb1a2b8abc08876707e309539efe56b188->enter($__internal_6c41942e4bd205a0e2e8365feb4aa3bb1a2b8abc08876707e309539efe56b188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        $__internal_539b0f9c26865d7402a34657ab18017004719b1fadca02ed7084dee142de0f99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_539b0f9c26865d7402a34657ab18017004719b1fadca02ed7084dee142de0f99->enter($__internal_539b0f9c26865d7402a34657ab18017004719b1fadca02ed7084dee142de0f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 75, $this->getSourceContext()); })()));
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
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 76
            if (twig_test_iterable($context["choice"])) {
                // line 77
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 77, $this->getSourceContext()); })()) === false)) ? ($context["group_label"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["group_label"], array(), (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 77, $this->getSourceContext()); })())))), "html", null, true);
                echo "\">
                ";
                // line 78
                $context["options"] = $context["choice"];
                // line 79
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 80
                echo "</optgroup>";
            } else {
                // line 82
                echo "<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "attr", array())) {
                    $__internal_38617193cdd7c00bf785720cc0b275f06c6f6a79d03ad771da21d0a63b619660 = array("attr" => twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "attr", array()));
                    if (!is_array($__internal_38617193cdd7c00bf785720cc0b275f06c6f6a79d03ad771da21d0a63b619660)) {
                        throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                    }
                    $context['_parent'] = $context;
                    $context = array_merge($context, $__internal_38617193cdd7c00bf785720cc0b275f06c6f6a79d03ad771da21d0a63b619660);
                    $this->displayBlock("attributes", $context, $blocks);
                    $context = $context['_parent'];
                }
                if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 82, $this->getSourceContext()); })()))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 82, $this->getSourceContext()); })()) === false)) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "label", array()), array(), (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 82, $this->getSourceContext()); })())))), "html", null, true);
                echo "</option>";
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
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_539b0f9c26865d7402a34657ab18017004719b1fadca02ed7084dee142de0f99->leave($__internal_539b0f9c26865d7402a34657ab18017004719b1fadca02ed7084dee142de0f99_prof);

        
        $__internal_6c41942e4bd205a0e2e8365feb4aa3bb1a2b8abc08876707e309539efe56b188->leave($__internal_6c41942e4bd205a0e2e8365feb4aa3bb1a2b8abc08876707e309539efe56b188_prof);

    }

    // line 87
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_2dc65828962d0b129c175c76bb332addd50e9f21ca0439dd0d83c24d39e3de73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dc65828962d0b129c175c76bb332addd50e9f21ca0439dd0d83c24d39e3de73->enter($__internal_2dc65828962d0b129c175c76bb332addd50e9f21ca0439dd0d83c24d39e3de73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_ebe99fe8a5d20a574d48fac9f15856c176684355ff61fc9bb1cd7a165cd0849c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebe99fe8a5d20a574d48fac9f15856c176684355ff61fc9bb1cd7a165cd0849c->enter($__internal_ebe99fe8a5d20a574d48fac9f15856c176684355ff61fc9bb1cd7a165cd0849c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 88
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 88, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 88, $this->getSourceContext()); })())) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_ebe99fe8a5d20a574d48fac9f15856c176684355ff61fc9bb1cd7a165cd0849c->leave($__internal_ebe99fe8a5d20a574d48fac9f15856c176684355ff61fc9bb1cd7a165cd0849c_prof);

        
        $__internal_2dc65828962d0b129c175c76bb332addd50e9f21ca0439dd0d83c24d39e3de73->leave($__internal_2dc65828962d0b129c175c76bb332addd50e9f21ca0439dd0d83c24d39e3de73_prof);

    }

    // line 91
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_dba41d7b23739a54d5852309d0e3a0dce532dac817c9e1ba9071ff69583cfdc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dba41d7b23739a54d5852309d0e3a0dce532dac817c9e1ba9071ff69583cfdc1->enter($__internal_dba41d7b23739a54d5852309d0e3a0dce532dac817c9e1ba9071ff69583cfdc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_d168735e8f558c0ef3765c803589b83765da8006789079241787b0781d87ea06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d168735e8f558c0ef3765c803589b83765da8006789079241787b0781d87ea06->enter($__internal_d168735e8f558c0ef3765c803589b83765da8006789079241787b0781d87ea06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 92
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 92, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 92, $this->getSourceContext()); })())) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_d168735e8f558c0ef3765c803589b83765da8006789079241787b0781d87ea06->leave($__internal_d168735e8f558c0ef3765c803589b83765da8006789079241787b0781d87ea06_prof);

        
        $__internal_dba41d7b23739a54d5852309d0e3a0dce532dac817c9e1ba9071ff69583cfdc1->leave($__internal_dba41d7b23739a54d5852309d0e3a0dce532dac817c9e1ba9071ff69583cfdc1_prof);

    }

    // line 95
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_f846fd6b8b45433f1c6ce96a9170fa253723b3be9ed6bca91af03d1a2f368508 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f846fd6b8b45433f1c6ce96a9170fa253723b3be9ed6bca91af03d1a2f368508->enter($__internal_f846fd6b8b45433f1c6ce96a9170fa253723b3be9ed6bca91af03d1a2f368508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_0a0a6e0b00cfcde7d94fab4af111aa16845adf419ed2f56cbbedc5b7e3faa882 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a0a6e0b00cfcde7d94fab4af111aa16845adf419ed2f56cbbedc5b7e3faa882->enter($__internal_0a0a6e0b00cfcde7d94fab4af111aa16845adf419ed2f56cbbedc5b7e3faa882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 96
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 96, $this->getSourceContext()); })()) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 100
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 100, $this->getSourceContext()); })()), "date", array()), 'errors');
            // line 101
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), "time", array()), 'errors');
            // line 102
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 102, $this->getSourceContext()); })()), "date", array()), 'widget');
            // line 103
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 103, $this->getSourceContext()); })()), "time", array()), 'widget');
            // line 104
            echo "</div>";
        }
        
        $__internal_0a0a6e0b00cfcde7d94fab4af111aa16845adf419ed2f56cbbedc5b7e3faa882->leave($__internal_0a0a6e0b00cfcde7d94fab4af111aa16845adf419ed2f56cbbedc5b7e3faa882_prof);

        
        $__internal_f846fd6b8b45433f1c6ce96a9170fa253723b3be9ed6bca91af03d1a2f368508->leave($__internal_f846fd6b8b45433f1c6ce96a9170fa253723b3be9ed6bca91af03d1a2f368508_prof);

    }

    // line 108
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_40cf69b7734f3e8820bfc9fb3d3a59e70244f518bba0de90954b7fc3bbb9beb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40cf69b7734f3e8820bfc9fb3d3a59e70244f518bba0de90954b7fc3bbb9beb7->enter($__internal_40cf69b7734f3e8820bfc9fb3d3a59e70244f518bba0de90954b7fc3bbb9beb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_a9da2e84043788599d07305fc7601354e215b596d221a51291f150c576553623 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9da2e84043788599d07305fc7601354e215b596d221a51291f150c576553623->enter($__internal_a9da2e84043788599d07305fc7601354e215b596d221a51291f150c576553623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 109
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 109, $this->getSourceContext()); })()) == "single_text")) {
            // line 110
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 112
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 113
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "date_pattern" does not exist.', 113, $this->getSourceContext()); })()), array("{{ year }}" =>             // line 114
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 114, $this->getSourceContext()); })()), "year", array()), 'widget'), "{{ month }}" =>             // line 115
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 115, $this->getSourceContext()); })()), "month", array()), 'widget'), "{{ day }}" =>             // line 116
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 116, $this->getSourceContext()); })()), "day", array()), 'widget')));
            // line 118
            echo "</div>";
        }
        
        $__internal_a9da2e84043788599d07305fc7601354e215b596d221a51291f150c576553623->leave($__internal_a9da2e84043788599d07305fc7601354e215b596d221a51291f150c576553623_prof);

        
        $__internal_40cf69b7734f3e8820bfc9fb3d3a59e70244f518bba0de90954b7fc3bbb9beb7->leave($__internal_40cf69b7734f3e8820bfc9fb3d3a59e70244f518bba0de90954b7fc3bbb9beb7_prof);

    }

    // line 122
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_7083b05685b756c93587c02bbac188dfa564e67fd9abbf1bba2df07fcb9426e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7083b05685b756c93587c02bbac188dfa564e67fd9abbf1bba2df07fcb9426e0->enter($__internal_7083b05685b756c93587c02bbac188dfa564e67fd9abbf1bba2df07fcb9426e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_6605f8cf06288f6fedd80e420415c074929e0bb680d021c37b68b1cf846f2cd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6605f8cf06288f6fedd80e420415c074929e0bb680d021c37b68b1cf846f2cd4->enter($__internal_6605f8cf06288f6fedd80e420415c074929e0bb680d021c37b68b1cf846f2cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 123
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 123, $this->getSourceContext()); })()) == "single_text")) {
            // line 124
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 126
            $context["vars"] = ((((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 126, $this->getSourceContext()); })()) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 127
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 128
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "hour", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 128, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "minute", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            }
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 128, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "second", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            }
            // line 129
            echo "        </div>";
        }
        
        $__internal_6605f8cf06288f6fedd80e420415c074929e0bb680d021c37b68b1cf846f2cd4->leave($__internal_6605f8cf06288f6fedd80e420415c074929e0bb680d021c37b68b1cf846f2cd4_prof);

        
        $__internal_7083b05685b756c93587c02bbac188dfa564e67fd9abbf1bba2df07fcb9426e0->leave($__internal_7083b05685b756c93587c02bbac188dfa564e67fd9abbf1bba2df07fcb9426e0_prof);

    }

    // line 133
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_51dd6160976704862dee4f2ec6309d464ebc767b3cd4022b7d8080d4b5403c20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51dd6160976704862dee4f2ec6309d464ebc767b3cd4022b7d8080d4b5403c20->enter($__internal_51dd6160976704862dee4f2ec6309d464ebc767b3cd4022b7d8080d4b5403c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_d547c9febb0e9074d785a63334f361e3828b19a5488744d9a827feb74d15565e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d547c9febb0e9074d785a63334f361e3828b19a5488744d9a827feb74d15565e->enter($__internal_d547c9febb0e9074d785a63334f361e3828b19a5488744d9a827feb74d15565e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 134
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 134, $this->getSourceContext()); })()) == "single_text")) {
            // line 135
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 137
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 138
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 138, $this->getSourceContext()); })()), 'errors');
            // line 139
            echo "<table class=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter((isset($context["table_class"]) || array_key_exists("table_class", $context) ? $context["table_class"] : (function () { throw new Twig_Error_Runtime('Variable "table_class" does not exist.', 139, $this->getSourceContext()); })()), "")) : ("")), "html", null, true);
            echo "\">
                <thead>
                    <tr>";
            // line 142
            if ((isset($context["with_years"]) || array_key_exists("with_years", $context) ? $context["with_years"] : (function () { throw new Twig_Error_Runtime('Variable "with_years" does not exist.', 142, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 142, $this->getSourceContext()); })()), "years", array()), 'label');
                echo "</th>";
            }
            // line 143
            if ((isset($context["with_months"]) || array_key_exists("with_months", $context) ? $context["with_months"] : (function () { throw new Twig_Error_Runtime('Variable "with_months" does not exist.', 143, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 143, $this->getSourceContext()); })()), "months", array()), 'label');
                echo "</th>";
            }
            // line 144
            if ((isset($context["with_weeks"]) || array_key_exists("with_weeks", $context) ? $context["with_weeks"] : (function () { throw new Twig_Error_Runtime('Variable "with_weeks" does not exist.', 144, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 144, $this->getSourceContext()); })()), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 145
            if ((isset($context["with_days"]) || array_key_exists("with_days", $context) ? $context["with_days"] : (function () { throw new Twig_Error_Runtime('Variable "with_days" does not exist.', 145, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 145, $this->getSourceContext()); })()), "days", array()), 'label');
                echo "</th>";
            }
            // line 146
            if ((isset($context["with_hours"]) || array_key_exists("with_hours", $context) ? $context["with_hours"] : (function () { throw new Twig_Error_Runtime('Variable "with_hours" does not exist.', 146, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 146, $this->getSourceContext()); })()), "hours", array()), 'label');
                echo "</th>";
            }
            // line 147
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 147, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 147, $this->getSourceContext()); })()), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 148
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 148, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 148, $this->getSourceContext()); })()), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 149
            echo "</tr>
                </thead>
                <tbody>
                    <tr>";
            // line 153
            if ((isset($context["with_years"]) || array_key_exists("with_years", $context) ? $context["with_years"] : (function () { throw new Twig_Error_Runtime('Variable "with_years" does not exist.', 153, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 153, $this->getSourceContext()); })()), "years", array()), 'widget');
                echo "</td>";
            }
            // line 154
            if ((isset($context["with_months"]) || array_key_exists("with_months", $context) ? $context["with_months"] : (function () { throw new Twig_Error_Runtime('Variable "with_months" does not exist.', 154, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 154, $this->getSourceContext()); })()), "months", array()), 'widget');
                echo "</td>";
            }
            // line 155
            if ((isset($context["with_weeks"]) || array_key_exists("with_weeks", $context) ? $context["with_weeks"] : (function () { throw new Twig_Error_Runtime('Variable "with_weeks" does not exist.', 155, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 155, $this->getSourceContext()); })()), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 156
            if ((isset($context["with_days"]) || array_key_exists("with_days", $context) ? $context["with_days"] : (function () { throw new Twig_Error_Runtime('Variable "with_days" does not exist.', 156, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 156, $this->getSourceContext()); })()), "days", array()), 'widget');
                echo "</td>";
            }
            // line 157
            if ((isset($context["with_hours"]) || array_key_exists("with_hours", $context) ? $context["with_hours"] : (function () { throw new Twig_Error_Runtime('Variable "with_hours" does not exist.', 157, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 157, $this->getSourceContext()); })()), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 158
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 158, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 158, $this->getSourceContext()); })()), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 159
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 159, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 159, $this->getSourceContext()); })()), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 160
            echo "</tr>
                </tbody>
            </table>";
            // line 163
            if ((isset($context["with_invert"]) || array_key_exists("with_invert", $context) ? $context["with_invert"] : (function () { throw new Twig_Error_Runtime('Variable "with_invert" does not exist.', 163, $this->getSourceContext()); })())) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 163, $this->getSourceContext()); })()), "invert", array()), 'widget');
            }
            // line 164
            echo "</div>";
        }
        
        $__internal_d547c9febb0e9074d785a63334f361e3828b19a5488744d9a827feb74d15565e->leave($__internal_d547c9febb0e9074d785a63334f361e3828b19a5488744d9a827feb74d15565e_prof);

        
        $__internal_51dd6160976704862dee4f2ec6309d464ebc767b3cd4022b7d8080d4b5403c20->leave($__internal_51dd6160976704862dee4f2ec6309d464ebc767b3cd4022b7d8080d4b5403c20_prof);

    }

    // line 168
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_dd64d8c3e147388243ef8371551afc51956505c30b178d0c3b680bd345f41370 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd64d8c3e147388243ef8371551afc51956505c30b178d0c3b680bd345f41370->enter($__internal_dd64d8c3e147388243ef8371551afc51956505c30b178d0c3b680bd345f41370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        $__internal_3da69d412a64391cb2675b734f6c89f6d4d8e3d6883ba6d266f32cb26ac929d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3da69d412a64391cb2675b734f6c89f6d4d8e3d6883ba6d266f32cb26ac929d9->enter($__internal_3da69d412a64391cb2675b734f6c89f6d4d8e3d6883ba6d266f32cb26ac929d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 170
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 170, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 171
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_3da69d412a64391cb2675b734f6c89f6d4d8e3d6883ba6d266f32cb26ac929d9->leave($__internal_3da69d412a64391cb2675b734f6c89f6d4d8e3d6883ba6d266f32cb26ac929d9_prof);

        
        $__internal_dd64d8c3e147388243ef8371551afc51956505c30b178d0c3b680bd345f41370->leave($__internal_dd64d8c3e147388243ef8371551afc51956505c30b178d0c3b680bd345f41370_prof);

    }

    // line 174
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_db250d7d996bc106a4a5c80a28bb6fd63df67583e003d7f7967bc70c36e98b6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db250d7d996bc106a4a5c80a28bb6fd63df67583e003d7f7967bc70c36e98b6b->enter($__internal_db250d7d996bc106a4a5c80a28bb6fd63df67583e003d7f7967bc70c36e98b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        $__internal_aad4f01dc50c52b8a2afa43c727b84a601634d1c5fa4caf6eb8028ed5098a20b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aad4f01dc50c52b8a2afa43c727b84a601634d1c5fa4caf6eb8028ed5098a20b->enter($__internal_aad4f01dc50c52b8a2afa43c727b84a601634d1c5fa4caf6eb8028ed5098a20b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 175
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 175, $this->getSourceContext()); })()), "number")) : ("number"));
        // line 176
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_aad4f01dc50c52b8a2afa43c727b84a601634d1c5fa4caf6eb8028ed5098a20b->leave($__internal_aad4f01dc50c52b8a2afa43c727b84a601634d1c5fa4caf6eb8028ed5098a20b_prof);

        
        $__internal_db250d7d996bc106a4a5c80a28bb6fd63df67583e003d7f7967bc70c36e98b6b->leave($__internal_db250d7d996bc106a4a5c80a28bb6fd63df67583e003d7f7967bc70c36e98b6b_prof);

    }

    // line 179
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_f3f42b14e7156b7477a0e33d7edb4f1b0e96dd1bfae196c6f024c95f8a537237 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3f42b14e7156b7477a0e33d7edb4f1b0e96dd1bfae196c6f024c95f8a537237->enter($__internal_f3f42b14e7156b7477a0e33d7edb4f1b0e96dd1bfae196c6f024c95f8a537237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_0b0c890d16732719cc678587deec98762807b234a1fc6fb93aa8a87622a97345 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b0c890d16732719cc678587deec98762807b234a1fc6fb93aa8a87622a97345->enter($__internal_0b0c890d16732719cc678587deec98762807b234a1fc6fb93aa8a87622a97345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 180
        echo twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 180, $this->getSourceContext()); })()), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_0b0c890d16732719cc678587deec98762807b234a1fc6fb93aa8a87622a97345->leave($__internal_0b0c890d16732719cc678587deec98762807b234a1fc6fb93aa8a87622a97345_prof);

        
        $__internal_f3f42b14e7156b7477a0e33d7edb4f1b0e96dd1bfae196c6f024c95f8a537237->leave($__internal_f3f42b14e7156b7477a0e33d7edb4f1b0e96dd1bfae196c6f024c95f8a537237_prof);

    }

    // line 183
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_4b237b89d3346c00b8e012c8616ba371574c29c3622638ca561eb88b33c19f14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b237b89d3346c00b8e012c8616ba371574c29c3622638ca561eb88b33c19f14->enter($__internal_4b237b89d3346c00b8e012c8616ba371574c29c3622638ca561eb88b33c19f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        $__internal_ff874c25697fda82b3ed23c569d6cdd19b15d24e592fe8127aa3ad1bf0d2a7a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff874c25697fda82b3ed23c569d6cdd19b15d24e592fe8127aa3ad1bf0d2a7a2->enter($__internal_ff874c25697fda82b3ed23c569d6cdd19b15d24e592fe8127aa3ad1bf0d2a7a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 184
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 184, $this->getSourceContext()); })()), "url")) : ("url"));
        // line 185
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_ff874c25697fda82b3ed23c569d6cdd19b15d24e592fe8127aa3ad1bf0d2a7a2->leave($__internal_ff874c25697fda82b3ed23c569d6cdd19b15d24e592fe8127aa3ad1bf0d2a7a2_prof);

        
        $__internal_4b237b89d3346c00b8e012c8616ba371574c29c3622638ca561eb88b33c19f14->leave($__internal_4b237b89d3346c00b8e012c8616ba371574c29c3622638ca561eb88b33c19f14_prof);

    }

    // line 188
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_b336ea6373fbf365f9ce8d95bbded09449f77ef45d6621d0737b0f9def0581e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b336ea6373fbf365f9ce8d95bbded09449f77ef45d6621d0737b0f9def0581e3->enter($__internal_b336ea6373fbf365f9ce8d95bbded09449f77ef45d6621d0737b0f9def0581e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        $__internal_49b29ac6332ebb784032958824a59ad950f1acc2162827de6f2a48f66aba8a72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49b29ac6332ebb784032958824a59ad950f1acc2162827de6f2a48f66aba8a72->enter($__internal_49b29ac6332ebb784032958824a59ad950f1acc2162827de6f2a48f66aba8a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 189
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 189, $this->getSourceContext()); })()), "search")) : ("search"));
        // line 190
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_49b29ac6332ebb784032958824a59ad950f1acc2162827de6f2a48f66aba8a72->leave($__internal_49b29ac6332ebb784032958824a59ad950f1acc2162827de6f2a48f66aba8a72_prof);

        
        $__internal_b336ea6373fbf365f9ce8d95bbded09449f77ef45d6621d0737b0f9def0581e3->leave($__internal_b336ea6373fbf365f9ce8d95bbded09449f77ef45d6621d0737b0f9def0581e3_prof);

    }

    // line 193
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_f275bbe23bbf94efecab8559b2b182f5b30ffc6137e6fb5db91007ed3825f765 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f275bbe23bbf94efecab8559b2b182f5b30ffc6137e6fb5db91007ed3825f765->enter($__internal_f275bbe23bbf94efecab8559b2b182f5b30ffc6137e6fb5db91007ed3825f765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_69e0c907f613474cc22dc5aa29abec4bba50eb7ffef94a05ec9642319bfe5d2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69e0c907f613474cc22dc5aa29abec4bba50eb7ffef94a05ec9642319bfe5d2d->enter($__internal_69e0c907f613474cc22dc5aa29abec4bba50eb7ffef94a05ec9642319bfe5d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 194
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 194, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 195
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_69e0c907f613474cc22dc5aa29abec4bba50eb7ffef94a05ec9642319bfe5d2d->leave($__internal_69e0c907f613474cc22dc5aa29abec4bba50eb7ffef94a05ec9642319bfe5d2d_prof);

        
        $__internal_f275bbe23bbf94efecab8559b2b182f5b30ffc6137e6fb5db91007ed3825f765->leave($__internal_f275bbe23bbf94efecab8559b2b182f5b30ffc6137e6fb5db91007ed3825f765_prof);

    }

    // line 198
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_7b06f1f6c7f7f4777a4c951f919cd83e3aeb483f4b74a75ab761e51deecbfc77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b06f1f6c7f7f4777a4c951f919cd83e3aeb483f4b74a75ab761e51deecbfc77->enter($__internal_7b06f1f6c7f7f4777a4c951f919cd83e3aeb483f4b74a75ab761e51deecbfc77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        $__internal_94d961472a9b3e7b0b445f5a6fb2012f289abe0fd371934346e3b445b1c415eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94d961472a9b3e7b0b445f5a6fb2012f289abe0fd371934346e3b445b1c415eb->enter($__internal_94d961472a9b3e7b0b445f5a6fb2012f289abe0fd371934346e3b445b1c415eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 199
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 199, $this->getSourceContext()); })()), "password")) : ("password"));
        // line 200
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_94d961472a9b3e7b0b445f5a6fb2012f289abe0fd371934346e3b445b1c415eb->leave($__internal_94d961472a9b3e7b0b445f5a6fb2012f289abe0fd371934346e3b445b1c415eb_prof);

        
        $__internal_7b06f1f6c7f7f4777a4c951f919cd83e3aeb483f4b74a75ab761e51deecbfc77->leave($__internal_7b06f1f6c7f7f4777a4c951f919cd83e3aeb483f4b74a75ab761e51deecbfc77_prof);

    }

    // line 203
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_c5ba4c14491771220d14dbdc8e3b1e5b70af3f4cbffcdc6f78df949c017900a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5ba4c14491771220d14dbdc8e3b1e5b70af3f4cbffcdc6f78df949c017900a8->enter($__internal_c5ba4c14491771220d14dbdc8e3b1e5b70af3f4cbffcdc6f78df949c017900a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        $__internal_a2554d14a9ad6cbe8a6c4a49ca09da8c7a1a23fa729c1f2e087ad590623d5c7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2554d14a9ad6cbe8a6c4a49ca09da8c7a1a23fa729c1f2e087ad590623d5c7c->enter($__internal_a2554d14a9ad6cbe8a6c4a49ca09da8c7a1a23fa729c1f2e087ad590623d5c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 204
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 204, $this->getSourceContext()); })()), "hidden")) : ("hidden"));
        // line 205
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_a2554d14a9ad6cbe8a6c4a49ca09da8c7a1a23fa729c1f2e087ad590623d5c7c->leave($__internal_a2554d14a9ad6cbe8a6c4a49ca09da8c7a1a23fa729c1f2e087ad590623d5c7c_prof);

        
        $__internal_c5ba4c14491771220d14dbdc8e3b1e5b70af3f4cbffcdc6f78df949c017900a8->leave($__internal_c5ba4c14491771220d14dbdc8e3b1e5b70af3f4cbffcdc6f78df949c017900a8_prof);

    }

    // line 208
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_d42b65f2ed14fb8f10df0e8240467e43a05cc1c980af579d5459415358171003 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d42b65f2ed14fb8f10df0e8240467e43a05cc1c980af579d5459415358171003->enter($__internal_d42b65f2ed14fb8f10df0e8240467e43a05cc1c980af579d5459415358171003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        $__internal_ae912ba5959983f27665894ea00cbd453fe9dcf6ce028c16e8ad43c849a69d71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae912ba5959983f27665894ea00cbd453fe9dcf6ce028c16e8ad43c849a69d71->enter($__internal_ae912ba5959983f27665894ea00cbd453fe9dcf6ce028c16e8ad43c849a69d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 209
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 209, $this->getSourceContext()); })()), "email")) : ("email"));
        // line 210
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_ae912ba5959983f27665894ea00cbd453fe9dcf6ce028c16e8ad43c849a69d71->leave($__internal_ae912ba5959983f27665894ea00cbd453fe9dcf6ce028c16e8ad43c849a69d71_prof);

        
        $__internal_d42b65f2ed14fb8f10df0e8240467e43a05cc1c980af579d5459415358171003->leave($__internal_d42b65f2ed14fb8f10df0e8240467e43a05cc1c980af579d5459415358171003_prof);

    }

    // line 213
    public function block_range_widget($context, array $blocks = array())
    {
        $__internal_eac10d94966141354e4fc6bdcf051f7be1067cdeef575eeb24555df5accee2aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eac10d94966141354e4fc6bdcf051f7be1067cdeef575eeb24555df5accee2aa->enter($__internal_eac10d94966141354e4fc6bdcf051f7be1067cdeef575eeb24555df5accee2aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        $__internal_957eeb1702c875a39f97e0940f02a324bd292855bc30e6e58206fc06df073900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_957eeb1702c875a39f97e0940f02a324bd292855bc30e6e58206fc06df073900->enter($__internal_957eeb1702c875a39f97e0940f02a324bd292855bc30e6e58206fc06df073900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        // line 214
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 214, $this->getSourceContext()); })()), "range")) : ("range"));
        // line 215
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_957eeb1702c875a39f97e0940f02a324bd292855bc30e6e58206fc06df073900->leave($__internal_957eeb1702c875a39f97e0940f02a324bd292855bc30e6e58206fc06df073900_prof);

        
        $__internal_eac10d94966141354e4fc6bdcf051f7be1067cdeef575eeb24555df5accee2aa->leave($__internal_eac10d94966141354e4fc6bdcf051f7be1067cdeef575eeb24555df5accee2aa_prof);

    }

    // line 218
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_01f82f266cbed127249768313d3fef5516e04c8e02b981968b925752aa861339 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01f82f266cbed127249768313d3fef5516e04c8e02b981968b925752aa861339->enter($__internal_01f82f266cbed127249768313d3fef5516e04c8e02b981968b925752aa861339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_d4bedf43e7bdc9731c87f33463945c0a46a4406245b3dd556bb3cc6691b82629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4bedf43e7bdc9731c87f33463945c0a46a4406245b3dd556bb3cc6691b82629->enter($__internal_d4bedf43e7bdc9731c87f33463945c0a46a4406245b3dd556bb3cc6691b82629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 219
        if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 219, $this->getSourceContext()); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 219, $this->getSourceContext()); })())))) {
            // line 220
            if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 220, $this->getSourceContext()); })()))) {
                // line 221
                $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 221, $this->getSourceContext()); })()), array("%name%" =>                 // line 222
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 222, $this->getSourceContext()); })()), "%id%" =>                 // line 223
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 223, $this->getSourceContext()); })())));
            } else {
                // line 226
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 226, $this->getSourceContext()); })()));
            }
        }
        // line 229
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 229, $this->getSourceContext()); })()), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 229, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 229, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 229, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 229, $this->getSourceContext()); })())))), "html", null, true);
        echo "</button>";
        
        $__internal_d4bedf43e7bdc9731c87f33463945c0a46a4406245b3dd556bb3cc6691b82629->leave($__internal_d4bedf43e7bdc9731c87f33463945c0a46a4406245b3dd556bb3cc6691b82629_prof);

        
        $__internal_01f82f266cbed127249768313d3fef5516e04c8e02b981968b925752aa861339->leave($__internal_01f82f266cbed127249768313d3fef5516e04c8e02b981968b925752aa861339_prof);

    }

    // line 232
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_a6fc37558682bc638d9509f1b4f8158e4daa8b56683175d1c5d442d8ce76ac31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6fc37558682bc638d9509f1b4f8158e4daa8b56683175d1c5d442d8ce76ac31->enter($__internal_a6fc37558682bc638d9509f1b4f8158e4daa8b56683175d1c5d442d8ce76ac31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        $__internal_06096802e11cb175bc1335e0de7e1f55eff67785a7495b939a467b4a11f22bce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06096802e11cb175bc1335e0de7e1f55eff67785a7495b939a467b4a11f22bce->enter($__internal_06096802e11cb175bc1335e0de7e1f55eff67785a7495b939a467b4a11f22bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 233
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 233, $this->getSourceContext()); })()), "submit")) : ("submit"));
        // line 234
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_06096802e11cb175bc1335e0de7e1f55eff67785a7495b939a467b4a11f22bce->leave($__internal_06096802e11cb175bc1335e0de7e1f55eff67785a7495b939a467b4a11f22bce_prof);

        
        $__internal_a6fc37558682bc638d9509f1b4f8158e4daa8b56683175d1c5d442d8ce76ac31->leave($__internal_a6fc37558682bc638d9509f1b4f8158e4daa8b56683175d1c5d442d8ce76ac31_prof);

    }

    // line 237
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_eecd5481ab7d751786cfd125f643a0d67fde58b5ba6559838bdf558afa4d1100 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eecd5481ab7d751786cfd125f643a0d67fde58b5ba6559838bdf558afa4d1100->enter($__internal_eecd5481ab7d751786cfd125f643a0d67fde58b5ba6559838bdf558afa4d1100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        $__internal_5e3fdfbbe15c844e15a9cb5780de3ec40ea0981ff5638ab3f0ee5662e5ce57e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e3fdfbbe15c844e15a9cb5780de3ec40ea0981ff5638ab3f0ee5662e5ce57e8->enter($__internal_5e3fdfbbe15c844e15a9cb5780de3ec40ea0981ff5638ab3f0ee5662e5ce57e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 238
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 238, $this->getSourceContext()); })()), "reset")) : ("reset"));
        // line 239
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_5e3fdfbbe15c844e15a9cb5780de3ec40ea0981ff5638ab3f0ee5662e5ce57e8->leave($__internal_5e3fdfbbe15c844e15a9cb5780de3ec40ea0981ff5638ab3f0ee5662e5ce57e8_prof);

        
        $__internal_eecd5481ab7d751786cfd125f643a0d67fde58b5ba6559838bdf558afa4d1100->leave($__internal_eecd5481ab7d751786cfd125f643a0d67fde58b5ba6559838bdf558afa4d1100_prof);

    }

    // line 242
    public function block_tel_widget($context, array $blocks = array())
    {
        $__internal_a58ad6b946fea6af5c70c9cbd65a5766d88e984786a6d54f75d7e6f62ab93898 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a58ad6b946fea6af5c70c9cbd65a5766d88e984786a6d54f75d7e6f62ab93898->enter($__internal_a58ad6b946fea6af5c70c9cbd65a5766d88e984786a6d54f75d7e6f62ab93898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        $__internal_3e1914659488e7cca433f1227866fd804ed681bf1cbacebb220205c178fa26c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e1914659488e7cca433f1227866fd804ed681bf1cbacebb220205c178fa26c3->enter($__internal_3e1914659488e7cca433f1227866fd804ed681bf1cbacebb220205c178fa26c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        // line 243
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 243, $this->getSourceContext()); })()), "tel")) : ("tel"));
        // line 244
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_3e1914659488e7cca433f1227866fd804ed681bf1cbacebb220205c178fa26c3->leave($__internal_3e1914659488e7cca433f1227866fd804ed681bf1cbacebb220205c178fa26c3_prof);

        
        $__internal_a58ad6b946fea6af5c70c9cbd65a5766d88e984786a6d54f75d7e6f62ab93898->leave($__internal_a58ad6b946fea6af5c70c9cbd65a5766d88e984786a6d54f75d7e6f62ab93898_prof);

    }

    // line 247
    public function block_color_widget($context, array $blocks = array())
    {
        $__internal_2a4da0ac17cf218b948f384b4b43df16f5aa31ea6b59d1b5afaa99ee6b0b98cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a4da0ac17cf218b948f384b4b43df16f5aa31ea6b59d1b5afaa99ee6b0b98cd->enter($__internal_2a4da0ac17cf218b948f384b4b43df16f5aa31ea6b59d1b5afaa99ee6b0b98cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        $__internal_e48c78c5f3fda60d30fe03aee9303d6985abca7a7949c63f281d7c82f050d60b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e48c78c5f3fda60d30fe03aee9303d6985abca7a7949c63f281d7c82f050d60b->enter($__internal_e48c78c5f3fda60d30fe03aee9303d6985abca7a7949c63f281d7c82f050d60b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        // line 248
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 248, $this->getSourceContext()); })()), "color")) : ("color"));
        // line 249
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_e48c78c5f3fda60d30fe03aee9303d6985abca7a7949c63f281d7c82f050d60b->leave($__internal_e48c78c5f3fda60d30fe03aee9303d6985abca7a7949c63f281d7c82f050d60b_prof);

        
        $__internal_2a4da0ac17cf218b948f384b4b43df16f5aa31ea6b59d1b5afaa99ee6b0b98cd->leave($__internal_2a4da0ac17cf218b948f384b4b43df16f5aa31ea6b59d1b5afaa99ee6b0b98cd_prof);

    }

    // line 254
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_b9fb2c6d65ba44e2ff006df3a534c4e44a6dc4f0f035ce4b423def98a44dcaf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9fb2c6d65ba44e2ff006df3a534c4e44a6dc4f0f035ce4b423def98a44dcaf0->enter($__internal_b9fb2c6d65ba44e2ff006df3a534c4e44a6dc4f0f035ce4b423def98a44dcaf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_8aa70e98dcf9877bf9d2856b82acfbed6ecfac5079d9e4d92d6cec6115cae4b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aa70e98dcf9877bf9d2856b82acfbed6ecfac5079d9e4d92d6cec6115cae4b9->enter($__internal_8aa70e98dcf9877bf9d2856b82acfbed6ecfac5079d9e4d92d6cec6115cae4b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 255
        if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 255, $this->getSourceContext()); })()) === false)) {
            // line 256
            if ( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 256, $this->getSourceContext()); })())) {
                // line 257
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 257, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 257, $this->getSourceContext()); })())));
            }
            // line 259
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 259, $this->getSourceContext()); })())) {
                // line 260
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 260, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 262
            if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 262, $this->getSourceContext()); })()))) {
                // line 263
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 263, $this->getSourceContext()); })()))) {
                    // line 264
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 264, $this->getSourceContext()); })()), array("%name%" =>                     // line 265
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 265, $this->getSourceContext()); })()), "%id%" =>                     // line 266
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 266, $this->getSourceContext()); })())));
                } else {
                    // line 269
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 269, $this->getSourceContext()); })()));
                }
            }
            // line 272
            echo "<";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 272, $this->getSourceContext()); })()), "label")) : ("label")), "html", null, true);
            if ((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 272, $this->getSourceContext()); })())) {
                $__internal_9aca70d7764f06d7df13276a99adb5222d92e1c4f7f3d113ced858869d2b3da8 = array("attr" => (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 272, $this->getSourceContext()); })()));
                if (!is_array($__internal_9aca70d7764f06d7df13276a99adb5222d92e1c4f7f3d113ced858869d2b3da8)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_9aca70d7764f06d7df13276a99adb5222d92e1c4f7f3d113ced858869d2b3da8);
                $this->displayBlock("attributes", $context, $blocks);
                $context = $context['_parent'];
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 272, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 272, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 272, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 272, $this->getSourceContext()); })())))), "html", null, true);
            echo "</";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 272, $this->getSourceContext()); })()), "label")) : ("label")), "html", null, true);
            echo ">";
        }
        
        $__internal_8aa70e98dcf9877bf9d2856b82acfbed6ecfac5079d9e4d92d6cec6115cae4b9->leave($__internal_8aa70e98dcf9877bf9d2856b82acfbed6ecfac5079d9e4d92d6cec6115cae4b9_prof);

        
        $__internal_b9fb2c6d65ba44e2ff006df3a534c4e44a6dc4f0f035ce4b423def98a44dcaf0->leave($__internal_b9fb2c6d65ba44e2ff006df3a534c4e44a6dc4f0f035ce4b423def98a44dcaf0_prof);

    }

    // line 276
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_a2d64a782965b8a991aba5d3a5bcf5e55e56fd2efc3c2a15e9b89f6c9f85950a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2d64a782965b8a991aba5d3a5bcf5e55e56fd2efc3c2a15e9b89f6c9f85950a->enter($__internal_a2d64a782965b8a991aba5d3a5bcf5e55e56fd2efc3c2a15e9b89f6c9f85950a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        $__internal_f3b39cc4dc36bafe6e26f3b5cbf4fcd85ad30a65aa16c8de41fd1e4e53f2d8ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3b39cc4dc36bafe6e26f3b5cbf4fcd85ad30a65aa16c8de41fd1e4e53f2d8ea->enter($__internal_f3b39cc4dc36bafe6e26f3b5cbf4fcd85ad30a65aa16c8de41fd1e4e53f2d8ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_f3b39cc4dc36bafe6e26f3b5cbf4fcd85ad30a65aa16c8de41fd1e4e53f2d8ea->leave($__internal_f3b39cc4dc36bafe6e26f3b5cbf4fcd85ad30a65aa16c8de41fd1e4e53f2d8ea_prof);

        
        $__internal_a2d64a782965b8a991aba5d3a5bcf5e55e56fd2efc3c2a15e9b89f6c9f85950a->leave($__internal_a2d64a782965b8a991aba5d3a5bcf5e55e56fd2efc3c2a15e9b89f6c9f85950a_prof);

    }

    // line 280
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_03bab3971a42d6afb7bf882a891927b28e2d1e9314c1883e67248bacce00b674 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03bab3971a42d6afb7bf882a891927b28e2d1e9314c1883e67248bacce00b674->enter($__internal_03bab3971a42d6afb7bf882a891927b28e2d1e9314c1883e67248bacce00b674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        $__internal_c6d4f023edd2ef4b0aceb80079fffe48fa48e915dfe5f457adc935adc40c5c7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6d4f023edd2ef4b0aceb80079fffe48fa48e915dfe5f457adc935adc40c5c7c->enter($__internal_c6d4f023edd2ef4b0aceb80079fffe48fa48e915dfe5f457adc935adc40c5c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 285
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_c6d4f023edd2ef4b0aceb80079fffe48fa48e915dfe5f457adc935adc40c5c7c->leave($__internal_c6d4f023edd2ef4b0aceb80079fffe48fa48e915dfe5f457adc935adc40c5c7c_prof);

        
        $__internal_03bab3971a42d6afb7bf882a891927b28e2d1e9314c1883e67248bacce00b674->leave($__internal_03bab3971a42d6afb7bf882a891927b28e2d1e9314c1883e67248bacce00b674_prof);

    }

    // line 288
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_f32f95fa305e5caae06fc610a6439dd602cd486b7cf32dc76c75746fe7482dac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f32f95fa305e5caae06fc610a6439dd602cd486b7cf32dc76c75746fe7482dac->enter($__internal_f32f95fa305e5caae06fc610a6439dd602cd486b7cf32dc76c75746fe7482dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_482f54e692e11b2dd18bdcfed970eb08179f8ddbc1cded336ac9273d1d51165d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_482f54e692e11b2dd18bdcfed970eb08179f8ddbc1cded336ac9273d1d51165d->enter($__internal_482f54e692e11b2dd18bdcfed970eb08179f8ddbc1cded336ac9273d1d51165d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 289
        echo "<div>";
        // line 290
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 290, $this->getSourceContext()); })()), 'label');
        // line 291
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 291, $this->getSourceContext()); })()), 'errors');
        // line 292
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 292, $this->getSourceContext()); })()), 'widget');
        // line 293
        echo "</div>";
        
        $__internal_482f54e692e11b2dd18bdcfed970eb08179f8ddbc1cded336ac9273d1d51165d->leave($__internal_482f54e692e11b2dd18bdcfed970eb08179f8ddbc1cded336ac9273d1d51165d_prof);

        
        $__internal_f32f95fa305e5caae06fc610a6439dd602cd486b7cf32dc76c75746fe7482dac->leave($__internal_f32f95fa305e5caae06fc610a6439dd602cd486b7cf32dc76c75746fe7482dac_prof);

    }

    // line 296
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_a7e189dcff2e6a91dd5391549e4d835fdea47d31ea608424d7db205571ba1a9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7e189dcff2e6a91dd5391549e4d835fdea47d31ea608424d7db205571ba1a9d->enter($__internal_a7e189dcff2e6a91dd5391549e4d835fdea47d31ea608424d7db205571ba1a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_d35386e674aef792119e2c6637e496e5acdc69edac8bbb783ae743267eaf07f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d35386e674aef792119e2c6637e496e5acdc69edac8bbb783ae743267eaf07f0->enter($__internal_d35386e674aef792119e2c6637e496e5acdc69edac8bbb783ae743267eaf07f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 297
        echo "<div>";
        // line 298
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 298, $this->getSourceContext()); })()), 'widget');
        // line 299
        echo "</div>";
        
        $__internal_d35386e674aef792119e2c6637e496e5acdc69edac8bbb783ae743267eaf07f0->leave($__internal_d35386e674aef792119e2c6637e496e5acdc69edac8bbb783ae743267eaf07f0_prof);

        
        $__internal_a7e189dcff2e6a91dd5391549e4d835fdea47d31ea608424d7db205571ba1a9d->leave($__internal_a7e189dcff2e6a91dd5391549e4d835fdea47d31ea608424d7db205571ba1a9d_prof);

    }

    // line 302
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_5c08f78436f724e08179ae5b409bfb54736422aeb2251f97adb9b942fece0663 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c08f78436f724e08179ae5b409bfb54736422aeb2251f97adb9b942fece0663->enter($__internal_5c08f78436f724e08179ae5b409bfb54736422aeb2251f97adb9b942fece0663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_13e9fe05eba71f5e08cb2e61d48e6734560254127b7ad591d8cd69b2f87cdd8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13e9fe05eba71f5e08cb2e61d48e6734560254127b7ad591d8cd69b2f87cdd8c->enter($__internal_13e9fe05eba71f5e08cb2e61d48e6734560254127b7ad591d8cd69b2f87cdd8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 303
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 303, $this->getSourceContext()); })()), 'widget');
        
        $__internal_13e9fe05eba71f5e08cb2e61d48e6734560254127b7ad591d8cd69b2f87cdd8c->leave($__internal_13e9fe05eba71f5e08cb2e61d48e6734560254127b7ad591d8cd69b2f87cdd8c_prof);

        
        $__internal_5c08f78436f724e08179ae5b409bfb54736422aeb2251f97adb9b942fece0663->leave($__internal_5c08f78436f724e08179ae5b409bfb54736422aeb2251f97adb9b942fece0663_prof);

    }

    // line 308
    public function block_form($context, array $blocks = array())
    {
        $__internal_822eb7389769efff4481d83291c7c7c6f97177fd0240ffabb10328bd82ac05ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_822eb7389769efff4481d83291c7c7c6f97177fd0240ffabb10328bd82ac05ee->enter($__internal_822eb7389769efff4481d83291c7c7c6f97177fd0240ffabb10328bd82ac05ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_18b4aec241221851bdc6b061354d65e780f2d903dacf8dbd692b09c108d2607e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18b4aec241221851bdc6b061354d65e780f2d903dacf8dbd692b09c108d2607e->enter($__internal_18b4aec241221851bdc6b061354d65e780f2d903dacf8dbd692b09c108d2607e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 309
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 309, $this->getSourceContext()); })()), 'form_start');
        // line 310
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 310, $this->getSourceContext()); })()), 'widget');
        // line 311
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 311, $this->getSourceContext()); })()), 'form_end');
        
        $__internal_18b4aec241221851bdc6b061354d65e780f2d903dacf8dbd692b09c108d2607e->leave($__internal_18b4aec241221851bdc6b061354d65e780f2d903dacf8dbd692b09c108d2607e_prof);

        
        $__internal_822eb7389769efff4481d83291c7c7c6f97177fd0240ffabb10328bd82ac05ee->leave($__internal_822eb7389769efff4481d83291c7c7c6f97177fd0240ffabb10328bd82ac05ee_prof);

    }

    // line 314
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_4f8f6efd3d5db5e6efd02980a3a90750bcc6508ae460f195c9b33180164758cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f8f6efd3d5db5e6efd02980a3a90750bcc6508ae460f195c9b33180164758cb->enter($__internal_4f8f6efd3d5db5e6efd02980a3a90750bcc6508ae460f195c9b33180164758cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_e680088089944bbd5d1326399912e8dcf5bebf4c0c6f6828f846350234029f29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e680088089944bbd5d1326399912e8dcf5bebf4c0c6f6828f846350234029f29->enter($__internal_e680088089944bbd5d1326399912e8dcf5bebf4c0c6f6828f846350234029f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 315
        twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 315, $this->getSourceContext()); })()), "setMethodRendered", array(), "method");
        // line 316
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 316, $this->getSourceContext()); })()));
        // line 317
        if (twig_in_filter((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 317, $this->getSourceContext()); })()), array(0 => "GET", 1 => "POST"))) {
            // line 318
            $context["form_method"] = (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 318, $this->getSourceContext()); })());
        } else {
            // line 320
            $context["form_method"] = "POST";
        }
        // line 322
        echo "<form name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 322, $this->getSourceContext()); })()), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 322, $this->getSourceContext()); })())), "html", null, true);
        echo "\"";
        if (((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 322, $this->getSourceContext()); })()) != "")) {
            echo " action=\"";
            echo twig_escape_filter($this->env, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 322, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 322, $this->getSourceContext()); })()));
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
        if ((isset($context["multipart"]) || array_key_exists("multipart", $context) ? $context["multipart"] : (function () { throw new Twig_Error_Runtime('Variable "multipart" does not exist.', 322, $this->getSourceContext()); })())) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 323
        if (((isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 323, $this->getSourceContext()); })()) != (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 323, $this->getSourceContext()); })()))) {
            // line 324
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 324, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />";
        }
        
        $__internal_e680088089944bbd5d1326399912e8dcf5bebf4c0c6f6828f846350234029f29->leave($__internal_e680088089944bbd5d1326399912e8dcf5bebf4c0c6f6828f846350234029f29_prof);

        
        $__internal_4f8f6efd3d5db5e6efd02980a3a90750bcc6508ae460f195c9b33180164758cb->leave($__internal_4f8f6efd3d5db5e6efd02980a3a90750bcc6508ae460f195c9b33180164758cb_prof);

    }

    // line 328
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_0368d95b6de28e540489eb43b37708d81515080a3d1778718d5260ac505fe04c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0368d95b6de28e540489eb43b37708d81515080a3d1778718d5260ac505fe04c->enter($__internal_0368d95b6de28e540489eb43b37708d81515080a3d1778718d5260ac505fe04c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        $__internal_977e5a051f9b2472841f474129968b7de7c394bab34c80542693430edb733996 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_977e5a051f9b2472841f474129968b7de7c394bab34c80542693430edb733996->enter($__internal_977e5a051f9b2472841f474129968b7de7c394bab34c80542693430edb733996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 329
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) || array_key_exists("render_rest", $context) ? $context["render_rest"] : (function () { throw new Twig_Error_Runtime('Variable "render_rest" does not exist.', 329, $this->getSourceContext()); })()))) {
            // line 330
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 330, $this->getSourceContext()); })()), 'rest');
        }
        // line 332
        echo "</form>";
        
        $__internal_977e5a051f9b2472841f474129968b7de7c394bab34c80542693430edb733996->leave($__internal_977e5a051f9b2472841f474129968b7de7c394bab34c80542693430edb733996_prof);

        
        $__internal_0368d95b6de28e540489eb43b37708d81515080a3d1778718d5260ac505fe04c->leave($__internal_0368d95b6de28e540489eb43b37708d81515080a3d1778718d5260ac505fe04c_prof);

    }

    // line 335
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_89aa8bdf5cf6a779f57d7e75aede3d9b6671875f23a64ecee7ca7bab372e965c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89aa8bdf5cf6a779f57d7e75aede3d9b6671875f23a64ecee7ca7bab372e965c->enter($__internal_89aa8bdf5cf6a779f57d7e75aede3d9b6671875f23a64ecee7ca7bab372e965c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_06df5fa29145dff24d232c8bc6c32d2ca87538a94cd153526bbabcf454f24cc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06df5fa29145dff24d232c8bc6c32d2ca87538a94cd153526bbabcf454f24cc2->enter($__internal_06df5fa29145dff24d232c8bc6c32d2ca87538a94cd153526bbabcf454f24cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 336
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 336, $this->getSourceContext()); })())) > 0)) {
            // line 337
            echo "<ul>";
            // line 338
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 338, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 339
                echo "<li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 341
            echo "</ul>";
        }
        
        $__internal_06df5fa29145dff24d232c8bc6c32d2ca87538a94cd153526bbabcf454f24cc2->leave($__internal_06df5fa29145dff24d232c8bc6c32d2ca87538a94cd153526bbabcf454f24cc2_prof);

        
        $__internal_89aa8bdf5cf6a779f57d7e75aede3d9b6671875f23a64ecee7ca7bab372e965c->leave($__internal_89aa8bdf5cf6a779f57d7e75aede3d9b6671875f23a64ecee7ca7bab372e965c_prof);

    }

    // line 345
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_3e65d4494fc68c906b01bc893798fe3d5281bd9cb6afa77506159b1f92d19377 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e65d4494fc68c906b01bc893798fe3d5281bd9cb6afa77506159b1f92d19377->enter($__internal_3e65d4494fc68c906b01bc893798fe3d5281bd9cb6afa77506159b1f92d19377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        $__internal_5d6fec2841665d2e14e64f95f65c1e465b999454ec2bdd78d27169f290784f80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d6fec2841665d2e14e64f95f65c1e465b999454ec2bdd78d27169f290784f80->enter($__internal_5d6fec2841665d2e14e64f95f65c1e465b999454ec2bdd78d27169f290784f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 346
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 346, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 347
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "rendered", array())) {
                // line 348
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 352
        if (( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 352, $this->getSourceContext()); })()), "methodRendered", array()) && Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 352, $this->getSourceContext()); })())))) {
            // line 353
            twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 353, $this->getSourceContext()); })()), "setMethodRendered", array(), "method");
            // line 354
            $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 354, $this->getSourceContext()); })()));
            // line 355
            if (twig_in_filter((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 355, $this->getSourceContext()); })()), array(0 => "GET", 1 => "POST"))) {
                // line 356
                $context["form_method"] = (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 356, $this->getSourceContext()); })());
            } else {
                // line 358
                $context["form_method"] = "POST";
            }
            // line 361
            if (((isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 361, $this->getSourceContext()); })()) != (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 361, $this->getSourceContext()); })()))) {
                // line 362
                echo "<input type=\"hidden\" name=\"_method\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 362, $this->getSourceContext()); })()), "html", null, true);
                echo "\" />";
            }
        }
        
        $__internal_5d6fec2841665d2e14e64f95f65c1e465b999454ec2bdd78d27169f290784f80->leave($__internal_5d6fec2841665d2e14e64f95f65c1e465b999454ec2bdd78d27169f290784f80_prof);

        
        $__internal_3e65d4494fc68c906b01bc893798fe3d5281bd9cb6afa77506159b1f92d19377->leave($__internal_3e65d4494fc68c906b01bc893798fe3d5281bd9cb6afa77506159b1f92d19377_prof);

    }

    // line 369
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_4b6095e5ecd39b4d4e91d67152b5443cca473c34a9619d64bcf557f19d5121f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b6095e5ecd39b4d4e91d67152b5443cca473c34a9619d64bcf557f19d5121f0->enter($__internal_4b6095e5ecd39b4d4e91d67152b5443cca473c34a9619d64bcf557f19d5121f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        $__internal_5c5e2303b639cae1658cf1a816898d7742c9e72c12d3f904c385673dc593bdec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c5e2303b639cae1658cf1a816898d7742c9e72c12d3f904c385673dc593bdec->enter($__internal_5c5e2303b639cae1658cf1a816898d7742c9e72c12d3f904c385673dc593bdec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 370
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 370, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 371
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5c5e2303b639cae1658cf1a816898d7742c9e72c12d3f904c385673dc593bdec->leave($__internal_5c5e2303b639cae1658cf1a816898d7742c9e72c12d3f904c385673dc593bdec_prof);

        
        $__internal_4b6095e5ecd39b4d4e91d67152b5443cca473c34a9619d64bcf557f19d5121f0->leave($__internal_4b6095e5ecd39b4d4e91d67152b5443cca473c34a9619d64bcf557f19d5121f0_prof);

    }

    // line 375
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_e6bf92655062a9cb3d442caa3827a9267d66f9e6038d564c18f0356070cd0086 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6bf92655062a9cb3d442caa3827a9267d66f9e6038d564c18f0356070cd0086->enter($__internal_e6bf92655062a9cb3d442caa3827a9267d66f9e6038d564c18f0356070cd0086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_094f3ab50707b580b77f1698e821b7838b0bd352f2a05a714d010ac9a4d1436c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_094f3ab50707b580b77f1698e821b7838b0bd352f2a05a714d010ac9a4d1436c->enter($__internal_094f3ab50707b580b77f1698e821b7838b0bd352f2a05a714d010ac9a4d1436c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 376
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 376, $this->getSourceContext()); })()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 376, $this->getSourceContext()); })()), "html", null, true);
        echo "\"";
        // line 377
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 377, $this->getSourceContext()); })())) {
            echo " disabled=\"disabled\"";
        }
        // line 378
        if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 378, $this->getSourceContext()); })())) {
            echo " required=\"required\"";
        }
        // line 379
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_094f3ab50707b580b77f1698e821b7838b0bd352f2a05a714d010ac9a4d1436c->leave($__internal_094f3ab50707b580b77f1698e821b7838b0bd352f2a05a714d010ac9a4d1436c_prof);

        
        $__internal_e6bf92655062a9cb3d442caa3827a9267d66f9e6038d564c18f0356070cd0086->leave($__internal_e6bf92655062a9cb3d442caa3827a9267d66f9e6038d564c18f0356070cd0086_prof);

    }

    // line 382
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_9d29cd8a94221be12737e15969603c3250c2af4d250464cf5cd25c04183161d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d29cd8a94221be12737e15969603c3250c2af4d250464cf5cd25c04183161d1->enter($__internal_9d29cd8a94221be12737e15969603c3250c2af4d250464cf5cd25c04183161d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        $__internal_55ecafb819c6e8fa71753c42f2dc2064089924beb376a605e5c0cd56d5057137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55ecafb819c6e8fa71753c42f2dc2064089924beb376a605e5c0cd56d5057137->enter($__internal_55ecafb819c6e8fa71753c42f2dc2064089924beb376a605e5c0cd56d5057137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 383
        if ( !twig_test_empty((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 383, $this->getSourceContext()); })()))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 383, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        // line 384
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_55ecafb819c6e8fa71753c42f2dc2064089924beb376a605e5c0cd56d5057137->leave($__internal_55ecafb819c6e8fa71753c42f2dc2064089924beb376a605e5c0cd56d5057137_prof);

        
        $__internal_9d29cd8a94221be12737e15969603c3250c2af4d250464cf5cd25c04183161d1->leave($__internal_9d29cd8a94221be12737e15969603c3250c2af4d250464cf5cd25c04183161d1_prof);

    }

    // line 387
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_6c2c7e1e667a97a93e43c1dfbddeee4b63777de3382d11dfc990ae4e73c086dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c2c7e1e667a97a93e43c1dfbddeee4b63777de3382d11dfc990ae4e73c086dc->enter($__internal_6c2c7e1e667a97a93e43c1dfbddeee4b63777de3382d11dfc990ae4e73c086dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        $__internal_6e374df5e7aa29999b46f5830dc372b77fa11005e0b8881818a41706bf8e4324 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e374df5e7aa29999b46f5830dc372b77fa11005e0b8881818a41706bf8e4324->enter($__internal_6e374df5e7aa29999b46f5830dc372b77fa11005e0b8881818a41706bf8e4324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 388
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 388, $this->getSourceContext()); })()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 388, $this->getSourceContext()); })()), "html", null, true);
        echo "\"";
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 388, $this->getSourceContext()); })())) {
            echo " disabled=\"disabled\"";
        }
        // line 389
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_6e374df5e7aa29999b46f5830dc372b77fa11005e0b8881818a41706bf8e4324->leave($__internal_6e374df5e7aa29999b46f5830dc372b77fa11005e0b8881818a41706bf8e4324_prof);

        
        $__internal_6c2c7e1e667a97a93e43c1dfbddeee4b63777de3382d11dfc990ae4e73c086dc->leave($__internal_6c2c7e1e667a97a93e43c1dfbddeee4b63777de3382d11dfc990ae4e73c086dc_prof);

    }

    // line 392
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_d9300a6ee59042be1cc14f381deecbe2edce4ab9d199c825080cd71653190e8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9300a6ee59042be1cc14f381deecbe2edce4ab9d199c825080cd71653190e8d->enter($__internal_d9300a6ee59042be1cc14f381deecbe2edce4ab9d199c825080cd71653190e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        $__internal_97a8b88105f218d7b0613196813715a89ced72f7538afbc2383f204acfd7f67c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97a8b88105f218d7b0613196813715a89ced72f7538afbc2383f204acfd7f67c->enter($__internal_97a8b88105f218d7b0613196813715a89ced72f7538afbc2383f204acfd7f67c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 393
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 393, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 394
            echo " ";
            // line 395
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 396
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 396, $this->getSourceContext()); })()) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 396, $this->getSourceContext()); })())))), "html", null, true);
                echo "\"";
            } elseif ((            // line 397
$context["attrvalue"] === true)) {
                // line 398
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 399
$context["attrvalue"] === false)) {
                // line 400
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_97a8b88105f218d7b0613196813715a89ced72f7538afbc2383f204acfd7f67c->leave($__internal_97a8b88105f218d7b0613196813715a89ced72f7538afbc2383f204acfd7f67c_prof);

        
        $__internal_d9300a6ee59042be1cc14f381deecbe2edce4ab9d199c825080cd71653190e8d->leave($__internal_d9300a6ee59042be1cc14f381deecbe2edce4ab9d199c825080cd71653190e8d_prof);

    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1654 => 400,  1652 => 399,  1647 => 398,  1645 => 397,  1640 => 396,  1638 => 395,  1636 => 394,  1632 => 393,  1623 => 392,  1613 => 389,  1604 => 388,  1595 => 387,  1585 => 384,  1579 => 383,  1570 => 382,  1560 => 379,  1556 => 378,  1552 => 377,  1546 => 376,  1537 => 375,  1523 => 371,  1519 => 370,  1510 => 369,  1496 => 362,  1494 => 361,  1491 => 358,  1488 => 356,  1486 => 355,  1484 => 354,  1482 => 353,  1480 => 352,  1473 => 348,  1471 => 347,  1467 => 346,  1458 => 345,  1447 => 341,  1439 => 339,  1435 => 338,  1433 => 337,  1431 => 336,  1422 => 335,  1412 => 332,  1409 => 330,  1407 => 329,  1398 => 328,  1385 => 324,  1383 => 323,  1356 => 322,  1353 => 320,  1350 => 318,  1348 => 317,  1346 => 316,  1344 => 315,  1335 => 314,  1325 => 311,  1323 => 310,  1321 => 309,  1312 => 308,  1302 => 303,  1293 => 302,  1283 => 299,  1281 => 298,  1279 => 297,  1270 => 296,  1260 => 293,  1258 => 292,  1256 => 291,  1254 => 290,  1252 => 289,  1243 => 288,  1233 => 285,  1224 => 280,  1207 => 276,  1180 => 272,  1176 => 269,  1173 => 266,  1172 => 265,  1171 => 264,  1169 => 263,  1167 => 262,  1164 => 260,  1162 => 259,  1159 => 257,  1157 => 256,  1155 => 255,  1146 => 254,  1136 => 249,  1134 => 248,  1125 => 247,  1115 => 244,  1113 => 243,  1104 => 242,  1094 => 239,  1092 => 238,  1083 => 237,  1073 => 234,  1071 => 233,  1062 => 232,  1046 => 229,  1042 => 226,  1039 => 223,  1038 => 222,  1037 => 221,  1035 => 220,  1033 => 219,  1024 => 218,  1014 => 215,  1012 => 214,  1003 => 213,  993 => 210,  991 => 209,  982 => 208,  972 => 205,  970 => 204,  961 => 203,  951 => 200,  949 => 199,  940 => 198,  929 => 195,  927 => 194,  918 => 193,  908 => 190,  906 => 189,  897 => 188,  887 => 185,  885 => 184,  876 => 183,  866 => 180,  857 => 179,  847 => 176,  845 => 175,  836 => 174,  826 => 171,  824 => 170,  815 => 168,  804 => 164,  800 => 163,  796 => 160,  790 => 159,  784 => 158,  778 => 157,  772 => 156,  766 => 155,  760 => 154,  754 => 153,  749 => 149,  743 => 148,  737 => 147,  731 => 146,  725 => 145,  719 => 144,  713 => 143,  707 => 142,  701 => 139,  699 => 138,  695 => 137,  692 => 135,  690 => 134,  681 => 133,  670 => 129,  660 => 128,  655 => 127,  653 => 126,  650 => 124,  648 => 123,  639 => 122,  628 => 118,  626 => 116,  625 => 115,  624 => 114,  623 => 113,  619 => 112,  616 => 110,  614 => 109,  605 => 108,  594 => 104,  592 => 103,  590 => 102,  588 => 101,  586 => 100,  582 => 99,  579 => 97,  577 => 96,  568 => 95,  548 => 92,  539 => 91,  519 => 88,  510 => 87,  469 => 82,  466 => 80,  464 => 79,  462 => 78,  457 => 77,  455 => 76,  438 => 75,  429 => 74,  419 => 71,  417 => 70,  415 => 69,  409 => 66,  407 => 65,  405 => 64,  403 => 63,  401 => 62,  392 => 60,  390 => 59,  383 => 58,  380 => 56,  378 => 55,  369 => 54,  359 => 51,  353 => 49,  351 => 48,  347 => 47,  343 => 46,  334 => 45,  323 => 41,  320 => 39,  318 => 38,  309 => 37,  295 => 34,  286 => 33,  276 => 30,  273 => 28,  271 => 27,  262 => 26,  252 => 23,  250 => 22,  248 => 21,  245 => 19,  243 => 18,  239 => 17,  230 => 16,  210 => 13,  208 => 12,  199 => 11,  188 => 7,  185 => 5,  183 => 4,  174 => 3,  164 => 392,  162 => 387,  160 => 382,  158 => 375,  156 => 369,  153 => 366,  151 => 345,  149 => 335,  147 => 328,  145 => 314,  143 => 308,  141 => 302,  139 => 296,  137 => 288,  135 => 280,  133 => 276,  131 => 254,  129 => 247,  127 => 242,  125 => 237,  123 => 232,  121 => 218,  119 => 213,  117 => 208,  115 => 203,  113 => 198,  111 => 193,  109 => 188,  107 => 183,  105 => 179,  103 => 174,  101 => 168,  99 => 133,  97 => 122,  95 => 108,  93 => 95,  91 => 91,  89 => 87,  87 => 74,  85 => 54,  83 => 45,  81 => 37,  79 => 33,  77 => 26,  75 => 16,  73 => 11,  71 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Widgets #}

{%- block form_widget -%}
    {% if compound %}
        {{- block('form_widget_compound') -}}
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock form_widget -%}

{%- block form_widget_simple -%}
    {%- set type = type|default('text') -%}
    <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
{%- endblock form_widget_simple -%}

{%- block form_widget_compound -%}
    <div {{ block('widget_container_attributes') }}>
        {%- if form is rootform -%}
            {{ form_errors(form) }}
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </div>
{%- endblock form_widget_compound -%}

{%- block collection_widget -%}
    {% if prototype is defined %}
        {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}
    {% endif %}
    {{- block('form_widget') -}}
{%- endblock collection_widget -%}

{%- block textarea_widget -%}
    <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>
{%- endblock textarea_widget -%}

{%- block choice_widget -%}
    {% if expanded %}
        {{- block('choice_widget_expanded') -}}
    {% else %}
        {{- block('choice_widget_collapsed') -}}
    {% endif %}
{%- endblock choice_widget -%}

{%- block choice_widget_expanded -%}
    <div {{ block('widget_container_attributes') }}>
    {%- for child in form %}
        {{- form_widget(child) -}}
        {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}
    {% endfor -%}
    </div>
{%- endblock choice_widget_expanded -%}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
        {%- if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>
        {%- endif -%}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {%- if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif -%}
        {%- endif -%}
        {%- set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed -%}

{%- block choice_widget_options -%}
    {% for group_label, choice in options %}
        {%- if choice is iterable -%}
            <optgroup label=\"{{ choice_translation_domain is same as(false) ? group_label : group_label|trans({}, choice_translation_domain) }}\">
                {% set options = choice %}
                {{- block('choice_widget_options') -}}
            </optgroup>
        {%- else -%}
            <option value=\"{{ choice.value }}\"{% if choice.attr %}{% with { attr: choice.attr } %}{{ block('attributes') }}{% endwith %}{% endif %}{% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, choice_translation_domain) }}</option>
        {%- endif -%}
    {% endfor %}
{%- endblock choice_widget_options -%}

{%- block checkbox_widget -%}
    <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock checkbox_widget -%}

{%- block radio_widget -%}
    <input type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock radio_widget -%}

{%- block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date) -}}
            {{- form_widget(form.time) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget -%}

{%- block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- date_pattern|replace({
                '{{ year }}':  form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}':   form_widget(form.day),
            })|raw -}}
        </div>
    {%- endif -%}
{%- endblock date_widget -%}

{%- block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}
        <div {{ block('widget_container_attributes') }}>
            {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}
        </div>
    {%- endif -%}
{%- endblock time_widget -%}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <table class=\"{{ table_class|default('') }}\">
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
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{%- block number_widget -%}
    {# type=\"number\" doesn't work with floats #}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }}
{%- endblock number_widget -%}

{%- block integer_widget -%}
    {%- set type = type|default('number') -%}
    {{ block('form_widget_simple') }}
{%- endblock integer_widget -%}

{%- block money_widget -%}
    {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}
{%- endblock money_widget -%}

{%- block url_widget -%}
    {%- set type = type|default('url') -%}
    {{ block('form_widget_simple') }}
{%- endblock url_widget -%}

{%- block search_widget -%}
    {%- set type = type|default('search') -%}
    {{ block('form_widget_simple') }}
{%- endblock search_widget -%}

{%- block percent_widget -%}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }} %
{%- endblock percent_widget -%}

{%- block password_widget -%}
    {%- set type = type|default('password') -%}
    {{ block('form_widget_simple') }}
{%- endblock password_widget -%}

{%- block hidden_widget -%}
    {%- set type = type|default('hidden') -%}
    {{ block('form_widget_simple') }}
{%- endblock hidden_widget -%}

{%- block email_widget -%}
    {%- set type = type|default('email') -%}
    {{ block('form_widget_simple') }}
{%- endblock email_widget -%}

{%- block range_widget -%}
    {% set type = type|default('range') %}
    {{- block('form_widget_simple') -}}
{%- endblock range_widget %}

{%- block button_widget -%}
    {%- if label is not same as(false) and label is empty -%}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {%- endif -%}
    <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</button>
{%- endblock button_widget -%}

{%- block submit_widget -%}
    {%- set type = type|default('submit') -%}
    {{ block('button_widget') }}
{%- endblock submit_widget -%}

{%- block reset_widget -%}
    {%- set type = type|default('reset') -%}
    {{ block('button_widget') }}
{%- endblock reset_widget -%}

{%- block tel_widget -%}
    {%- set type = type|default('tel') -%}
    {{ block('form_widget_simple') }}
{%- endblock tel_widget -%}

{%- block color_widget -%}
    {%- set type = type|default('color') -%}
    {{ block('form_widget_simple') }}
{%- endblock color_widget -%}

{# Labels #}

{%- block form_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <{{ element|default('label') }}{% if label_attr %}{% with { attr: label_attr } %}{{ block('attributes') }}{% endwith %}{% endif %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</{{ element|default('label') }}>
    {%- endif -%}
{%- endblock form_label -%}

{%- block button_label -%}{%- endblock -%}

{# Rows #}

{%- block repeated_row -%}
    {#
    No need to render the errors here, as all errors are mapped
    to the first child (see RepeatedTypeValidatorExtension).
    #}
    {{- block('form_rows') -}}
{%- endblock repeated_row -%}

{%- block form_row -%}
    <div>
        {{- form_label(form) -}}
        {{- form_errors(form) -}}
        {{- form_widget(form) -}}
    </div>
{%- endblock form_row -%}

{%- block button_row -%}
    <div>
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row -%}

{%- block hidden_row -%}
    {{ form_widget(form) }}
{%- endblock hidden_row -%}

{# Misc #}

{%- block form -%}
    {{ form_start(form) }}
        {{- form_widget(form) -}}
    {{ form_end(form) }}
{%- endblock form -%}

{%- block form_start -%}
    {%- do form.setMethodRendered() -%}
    {% set method = method|upper %}
    {%- if method in [\"GET\", \"POST\"] -%}
        {% set form_method = method %}
    {%- else -%}
        {% set form_method = \"POST\" %}
    {%- endif -%}
    <form name=\"{{ name }}\" method=\"{{ form_method|lower }}\"{% if action != '' %} action=\"{{ action }}\"{% endif %}{% for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}{% if multipart %} enctype=\"multipart/form-data\"{% endif %}>
    {%- if form_method != method -%}
        <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
    {%- endif -%}
{%- endblock form_start -%}

{%- block form_end -%}
    {%- if not render_rest is defined or render_rest -%}
        {{ form_rest(form) }}
    {%- endif -%}
    </form>
{%- endblock form_end -%}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
    <ul>
        {%- for error in errors -%}
            <li>{{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {%- endif -%}
{%- endblock form_errors -%}

{%- block form_rest -%}
    {% for child in form -%}
        {% if not child.rendered %}
            {{- form_row(child) -}}
        {% endif %}
    {%- endfor -%}

    {% if not form.methodRendered and form is rootform %}
        {%- do form.setMethodRendered() -%}
        {% set method = method|upper %}
        {%- if method in [\"GET\", \"POST\"] -%}
            {% set form_method = method %}
        {%- else -%}
            {% set form_method = \"POST\" %}
        {%- endif -%}

        {%- if form_method != method -%}
            <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
        {%- endif -%}
    {% endif -%}
{% endblock form_rest %}

{# Support #}

{%- block form_rows -%}
    {% for child in form %}
        {{- form_row(child) -}}
    {% endfor %}
{%- endblock form_rows -%}

{%- block widget_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"
    {%- if disabled %} disabled=\"disabled\"{% endif -%}
    {%- if required %} required=\"required\"{% endif -%}
    {{ block('attributes') }}
{%- endblock widget_attributes -%}

{%- block widget_container_attributes -%}
    {%- if id is not empty %}id=\"{{ id }}\"{% endif -%}
    {{ block('attributes') }}
{%- endblock widget_container_attributes -%}

{%- block button_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"{% if disabled %} disabled=\"disabled\"{% endif -%}
    {{ block('attributes') }}
{%- endblock button_attributes -%}

{% block attributes -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock attributes -%}
", "form_div_layout.html.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\form_div_layout.html.twig");
    }
}
