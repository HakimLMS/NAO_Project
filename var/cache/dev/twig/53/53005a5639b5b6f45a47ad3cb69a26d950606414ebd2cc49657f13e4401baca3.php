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
<<<<<<< HEAD
        $__internal_a969d53150412dce2f3ff32b9ff869ff94f0910017d027105e2905dc664ceb9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a969d53150412dce2f3ff32b9ff869ff94f0910017d027105e2905dc664ceb9a->enter($__internal_a969d53150412dce2f3ff32b9ff869ff94f0910017d027105e2905dc664ceb9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        $__internal_9947edfc860bef09857f43c5398f335d2b45d598b582c10c95d2f6e10180654d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9947edfc860bef09857f43c5398f335d2b45d598b582c10c95d2f6e10180654d->enter($__internal_9947edfc860bef09857f43c5398f335d2b45d598b582c10c95d2f6e10180654d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));
=======
        $__internal_13022ac02bd5dacd95198b4bb62ba4ff34d8d6e1ab7bb7f6121ed990a7deec69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13022ac02bd5dacd95198b4bb62ba4ff34d8d6e1ab7bb7f6121ed990a7deec69->enter($__internal_13022ac02bd5dacd95198b4bb62ba4ff34d8d6e1ab7bb7f6121ed990a7deec69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        $__internal_32a14730d2d2bfd9bbed8dfe2e7c379ce107e08f5e6d11ff4e99067d356c13d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32a14730d2d2bfd9bbed8dfe2e7c379ce107e08f5e6d11ff4e99067d356c13d5->enter($__internal_32a14730d2d2bfd9bbed8dfe2e7c379ce107e08f5e6d11ff4e99067d356c13d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));
>>>>>>> donmanager

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
        
<<<<<<< HEAD
        $__internal_a969d53150412dce2f3ff32b9ff869ff94f0910017d027105e2905dc664ceb9a->leave($__internal_a969d53150412dce2f3ff32b9ff869ff94f0910017d027105e2905dc664ceb9a_prof);

        
        $__internal_9947edfc860bef09857f43c5398f335d2b45d598b582c10c95d2f6e10180654d->leave($__internal_9947edfc860bef09857f43c5398f335d2b45d598b582c10c95d2f6e10180654d_prof);
=======
        $__internal_13022ac02bd5dacd95198b4bb62ba4ff34d8d6e1ab7bb7f6121ed990a7deec69->leave($__internal_13022ac02bd5dacd95198b4bb62ba4ff34d8d6e1ab7bb7f6121ed990a7deec69_prof);

        
        $__internal_32a14730d2d2bfd9bbed8dfe2e7c379ce107e08f5e6d11ff4e99067d356c13d5->leave($__internal_32a14730d2d2bfd9bbed8dfe2e7c379ce107e08f5e6d11ff4e99067d356c13d5_prof);
>>>>>>> donmanager

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_5de638a1729edb637800dd17518423cdbfea125d761fdd7a5a0a48f69dde24cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5de638a1729edb637800dd17518423cdbfea125d761fdd7a5a0a48f69dde24cd->enter($__internal_5de638a1729edb637800dd17518423cdbfea125d761fdd7a5a0a48f69dde24cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_de74e2dcd603bbd826f50cddda154e2d68095b4363e4698cf9c214f0369bba44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de74e2dcd603bbd826f50cddda154e2d68095b4363e4698cf9c214f0369bba44->enter($__internal_de74e2dcd603bbd826f50cddda154e2d68095b4363e4698cf9c214f0369bba44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));
=======
        $__internal_c2762b97d7c710d212be0ae4ea915b1661d3ff7f60a419548f94a223567123b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2762b97d7c710d212be0ae4ea915b1661d3ff7f60a419548f94a223567123b7->enter($__internal_c2762b97d7c710d212be0ae4ea915b1661d3ff7f60a419548f94a223567123b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_ba45fe6061a558ac92cee87370485c02e6f2786863b3df1d5e66c372c03cf416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba45fe6061a558ac92cee87370485c02e6f2786863b3df1d5e66c372c03cf416->enter($__internal_ba45fe6061a558ac92cee87370485c02e6f2786863b3df1d5e66c372c03cf416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));
>>>>>>> donmanager

        // line 4
        if ((isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 4, $this->getSourceContext()); })())) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
<<<<<<< HEAD
        $__internal_de74e2dcd603bbd826f50cddda154e2d68095b4363e4698cf9c214f0369bba44->leave($__internal_de74e2dcd603bbd826f50cddda154e2d68095b4363e4698cf9c214f0369bba44_prof);

        
        $__internal_5de638a1729edb637800dd17518423cdbfea125d761fdd7a5a0a48f69dde24cd->leave($__internal_5de638a1729edb637800dd17518423cdbfea125d761fdd7a5a0a48f69dde24cd_prof);
=======
        $__internal_ba45fe6061a558ac92cee87370485c02e6f2786863b3df1d5e66c372c03cf416->leave($__internal_ba45fe6061a558ac92cee87370485c02e6f2786863b3df1d5e66c372c03cf416_prof);

        
        $__internal_c2762b97d7c710d212be0ae4ea915b1661d3ff7f60a419548f94a223567123b7->leave($__internal_c2762b97d7c710d212be0ae4ea915b1661d3ff7f60a419548f94a223567123b7_prof);
>>>>>>> donmanager

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_ca715ef02e34835c0af76a81e4eff3dd5996f5a94fe14b69d70515f7104becc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca715ef02e34835c0af76a81e4eff3dd5996f5a94fe14b69d70515f7104becc7->enter($__internal_ca715ef02e34835c0af76a81e4eff3dd5996f5a94fe14b69d70515f7104becc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_ead16e1377753bf31c6767a6df2cc43b8ab15d702d96d87fa37140368b612f25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ead16e1377753bf31c6767a6df2cc43b8ab15d702d96d87fa37140368b612f25->enter($__internal_ead16e1377753bf31c6767a6df2cc43b8ab15d702d96d87fa37140368b612f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));
=======
        $__internal_83d8c81874ac1f27c7a1fdffcaabf254a49f010cceba4cfa6aad0d93013f856e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83d8c81874ac1f27c7a1fdffcaabf254a49f010cceba4cfa6aad0d93013f856e->enter($__internal_83d8c81874ac1f27c7a1fdffcaabf254a49f010cceba4cfa6aad0d93013f856e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_481e54393fc6b42d248fee5411672fef9babbc349bfcc6f388e593818f817791 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_481e54393fc6b42d248fee5411672fef9babbc349bfcc6f388e593818f817791->enter($__internal_481e54393fc6b42d248fee5411672fef9babbc349bfcc6f388e593818f817791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));
>>>>>>> donmanager

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
        
<<<<<<< HEAD
        $__internal_ead16e1377753bf31c6767a6df2cc43b8ab15d702d96d87fa37140368b612f25->leave($__internal_ead16e1377753bf31c6767a6df2cc43b8ab15d702d96d87fa37140368b612f25_prof);

        
        $__internal_ca715ef02e34835c0af76a81e4eff3dd5996f5a94fe14b69d70515f7104becc7->leave($__internal_ca715ef02e34835c0af76a81e4eff3dd5996f5a94fe14b69d70515f7104becc7_prof);
=======
        $__internal_481e54393fc6b42d248fee5411672fef9babbc349bfcc6f388e593818f817791->leave($__internal_481e54393fc6b42d248fee5411672fef9babbc349bfcc6f388e593818f817791_prof);

        
        $__internal_83d8c81874ac1f27c7a1fdffcaabf254a49f010cceba4cfa6aad0d93013f856e->leave($__internal_83d8c81874ac1f27c7a1fdffcaabf254a49f010cceba4cfa6aad0d93013f856e_prof);
>>>>>>> donmanager

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_b0924c917e0b3c0539c7afa51f3e908d5f5755abf01e86fe8ba0f01ab38533d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0924c917e0b3c0539c7afa51f3e908d5f5755abf01e86fe8ba0f01ab38533d6->enter($__internal_b0924c917e0b3c0539c7afa51f3e908d5f5755abf01e86fe8ba0f01ab38533d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_45f58b5cf77a6ca1aa0fae250ee5633e4c1f2f75398d13167c73f2c25b121c53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45f58b5cf77a6ca1aa0fae250ee5633e4c1f2f75398d13167c73f2c25b121c53->enter($__internal_45f58b5cf77a6ca1aa0fae250ee5633e4c1f2f75398d13167c73f2c25b121c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));
=======
        $__internal_55fe2161868570d73d657708223f0370e5027036fabb56f3b78c6732e7048b9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55fe2161868570d73d657708223f0370e5027036fabb56f3b78c6732e7048b9a->enter($__internal_55fe2161868570d73d657708223f0370e5027036fabb56f3b78c6732e7048b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_986fe323304ea29c921935f4c748527c6d944be77ff973dbaa2ac1ffdabbf9b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_986fe323304ea29c921935f4c748527c6d944be77ff973dbaa2ac1ffdabbf9b1->enter($__internal_986fe323304ea29c921935f4c748527c6d944be77ff973dbaa2ac1ffdabbf9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));
>>>>>>> donmanager

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
        
<<<<<<< HEAD
        $__internal_45f58b5cf77a6ca1aa0fae250ee5633e4c1f2f75398d13167c73f2c25b121c53->leave($__internal_45f58b5cf77a6ca1aa0fae250ee5633e4c1f2f75398d13167c73f2c25b121c53_prof);

        
        $__internal_b0924c917e0b3c0539c7afa51f3e908d5f5755abf01e86fe8ba0f01ab38533d6->leave($__internal_b0924c917e0b3c0539c7afa51f3e908d5f5755abf01e86fe8ba0f01ab38533d6_prof);
=======
        $__internal_986fe323304ea29c921935f4c748527c6d944be77ff973dbaa2ac1ffdabbf9b1->leave($__internal_986fe323304ea29c921935f4c748527c6d944be77ff973dbaa2ac1ffdabbf9b1_prof);

        
        $__internal_55fe2161868570d73d657708223f0370e5027036fabb56f3b78c6732e7048b9a->leave($__internal_55fe2161868570d73d657708223f0370e5027036fabb56f3b78c6732e7048b9a_prof);
>>>>>>> donmanager

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_65070fb1d8b1106f6b7d7cad63aebeb02e6218787f1013dd1af7cc87e65c2e29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65070fb1d8b1106f6b7d7cad63aebeb02e6218787f1013dd1af7cc87e65c2e29->enter($__internal_65070fb1d8b1106f6b7d7cad63aebeb02e6218787f1013dd1af7cc87e65c2e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_8bced63fee928b806ee58a7be4281754e6ae7f1696548c46bf4cf71eae3ac46f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bced63fee928b806ee58a7be4281754e6ae7f1696548c46bf4cf71eae3ac46f->enter($__internal_8bced63fee928b806ee58a7be4281754e6ae7f1696548c46bf4cf71eae3ac46f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));
=======
        $__internal_2e79a0ecb7650d9d99302ca68b81a94ea8d607cf1c4d7de1b95df074b707cf84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e79a0ecb7650d9d99302ca68b81a94ea8d607cf1c4d7de1b95df074b707cf84->enter($__internal_2e79a0ecb7650d9d99302ca68b81a94ea8d607cf1c4d7de1b95df074b707cf84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_60f45aac8ef345681d8289a3280af719af2f4323cf95d88913e377d321d6eb42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60f45aac8ef345681d8289a3280af719af2f4323cf95d88913e377d321d6eb42->enter($__internal_60f45aac8ef345681d8289a3280af719af2f4323cf95d88913e377d321d6eb42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));
>>>>>>> donmanager

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 28, $this->getSourceContext()); })()), array("data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new Twig_Error_Runtime('Variable "prototype" does not exist.', 28, $this->getSourceContext()); })()), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
<<<<<<< HEAD
        $__internal_8bced63fee928b806ee58a7be4281754e6ae7f1696548c46bf4cf71eae3ac46f->leave($__internal_8bced63fee928b806ee58a7be4281754e6ae7f1696548c46bf4cf71eae3ac46f_prof);

        
        $__internal_65070fb1d8b1106f6b7d7cad63aebeb02e6218787f1013dd1af7cc87e65c2e29->leave($__internal_65070fb1d8b1106f6b7d7cad63aebeb02e6218787f1013dd1af7cc87e65c2e29_prof);
=======
        $__internal_60f45aac8ef345681d8289a3280af719af2f4323cf95d88913e377d321d6eb42->leave($__internal_60f45aac8ef345681d8289a3280af719af2f4323cf95d88913e377d321d6eb42_prof);

        
        $__internal_2e79a0ecb7650d9d99302ca68b81a94ea8d607cf1c4d7de1b95df074b707cf84->leave($__internal_2e79a0ecb7650d9d99302ca68b81a94ea8d607cf1c4d7de1b95df074b707cf84_prof);
>>>>>>> donmanager

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_3c18e6d45bcea333e75fc7717015f5cca94a22f10e7f15ce2599bb9ef070497e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c18e6d45bcea333e75fc7717015f5cca94a22f10e7f15ce2599bb9ef070497e->enter($__internal_3c18e6d45bcea333e75fc7717015f5cca94a22f10e7f15ce2599bb9ef070497e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_299736072e6460f311d9d3aab5b52fd20d3894916a859e470d04fafd5eea25c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_299736072e6460f311d9d3aab5b52fd20d3894916a859e470d04fafd5eea25c8->enter($__internal_299736072e6460f311d9d3aab5b52fd20d3894916a859e470d04fafd5eea25c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));
=======
        $__internal_5845d0ae5e8f2bde388c2b30ec0a8dc405048d5243565bb379c48e61da00f9a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5845d0ae5e8f2bde388c2b30ec0a8dc405048d5243565bb379c48e61da00f9a3->enter($__internal_5845d0ae5e8f2bde388c2b30ec0a8dc405048d5243565bb379c48e61da00f9a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_10d34d33d1988cf3550df4f5df42b6277d063fed235283bb75378dacdb0e9e70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10d34d33d1988cf3550df4f5df42b6277d063fed235283bb75378dacdb0e9e70->enter($__internal_10d34d33d1988cf3550df4f5df42b6277d063fed235283bb75378dacdb0e9e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));
>>>>>>> donmanager

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 34, $this->getSourceContext()); })()), "html", null, true);
        echo "</textarea>";
        
<<<<<<< HEAD
        $__internal_299736072e6460f311d9d3aab5b52fd20d3894916a859e470d04fafd5eea25c8->leave($__internal_299736072e6460f311d9d3aab5b52fd20d3894916a859e470d04fafd5eea25c8_prof);

        
        $__internal_3c18e6d45bcea333e75fc7717015f5cca94a22f10e7f15ce2599bb9ef070497e->leave($__internal_3c18e6d45bcea333e75fc7717015f5cca94a22f10e7f15ce2599bb9ef070497e_prof);
=======
        $__internal_10d34d33d1988cf3550df4f5df42b6277d063fed235283bb75378dacdb0e9e70->leave($__internal_10d34d33d1988cf3550df4f5df42b6277d063fed235283bb75378dacdb0e9e70_prof);

        
        $__internal_5845d0ae5e8f2bde388c2b30ec0a8dc405048d5243565bb379c48e61da00f9a3->leave($__internal_5845d0ae5e8f2bde388c2b30ec0a8dc405048d5243565bb379c48e61da00f9a3_prof);
>>>>>>> donmanager

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_20577cd4bc035f58bf63b90675ac38c8cb41fe88e6e3ea09cca7fe1afda298c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20577cd4bc035f58bf63b90675ac38c8cb41fe88e6e3ea09cca7fe1afda298c3->enter($__internal_20577cd4bc035f58bf63b90675ac38c8cb41fe88e6e3ea09cca7fe1afda298c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        $__internal_3f408b13f58539aa34a7e3851e1ed2b909725bce91467309c4f0ad146b40973f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f408b13f58539aa34a7e3851e1ed2b909725bce91467309c4f0ad146b40973f->enter($__internal_3f408b13f58539aa34a7e3851e1ed2b909725bce91467309c4f0ad146b40973f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));
=======
        $__internal_e19c070230eebcf70a7b1eeb81aaccb907b92c64e64f546137e25c516013f8b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e19c070230eebcf70a7b1eeb81aaccb907b92c64e64f546137e25c516013f8b2->enter($__internal_e19c070230eebcf70a7b1eeb81aaccb907b92c64e64f546137e25c516013f8b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        $__internal_4fa0f43d696a575d65b6ef940ea9613f1af8dae003f9f8cadd0a27c25729e9dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fa0f43d696a575d65b6ef940ea9613f1af8dae003f9f8cadd0a27c25729e9dc->enter($__internal_4fa0f43d696a575d65b6ef940ea9613f1af8dae003f9f8cadd0a27c25729e9dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));
>>>>>>> donmanager

        // line 38
        if ((isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 38, $this->getSourceContext()); })())) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
<<<<<<< HEAD
        $__internal_3f408b13f58539aa34a7e3851e1ed2b909725bce91467309c4f0ad146b40973f->leave($__internal_3f408b13f58539aa34a7e3851e1ed2b909725bce91467309c4f0ad146b40973f_prof);

        
        $__internal_20577cd4bc035f58bf63b90675ac38c8cb41fe88e6e3ea09cca7fe1afda298c3->leave($__internal_20577cd4bc035f58bf63b90675ac38c8cb41fe88e6e3ea09cca7fe1afda298c3_prof);
=======
        $__internal_4fa0f43d696a575d65b6ef940ea9613f1af8dae003f9f8cadd0a27c25729e9dc->leave($__internal_4fa0f43d696a575d65b6ef940ea9613f1af8dae003f9f8cadd0a27c25729e9dc_prof);

        
        $__internal_e19c070230eebcf70a7b1eeb81aaccb907b92c64e64f546137e25c516013f8b2->leave($__internal_e19c070230eebcf70a7b1eeb81aaccb907b92c64e64f546137e25c516013f8b2_prof);
>>>>>>> donmanager

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_f1defce8a48afc9c23b58d397724ef165534948c0129fd31509721f5e685746b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1defce8a48afc9c23b58d397724ef165534948c0129fd31509721f5e685746b->enter($__internal_f1defce8a48afc9c23b58d397724ef165534948c0129fd31509721f5e685746b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_a3bb94c2732b984cc2dbfd172ad6056ec3091d74247640d494c3007e33e0f53a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3bb94c2732b984cc2dbfd172ad6056ec3091d74247640d494c3007e33e0f53a->enter($__internal_a3bb94c2732b984cc2dbfd172ad6056ec3091d74247640d494c3007e33e0f53a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));
=======
        $__internal_a46db5a6cd545322ea424eff945490d35d84703dc2f333199a5ba2b3a71617fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a46db5a6cd545322ea424eff945490d35d84703dc2f333199a5ba2b3a71617fc->enter($__internal_a46db5a6cd545322ea424eff945490d35d84703dc2f333199a5ba2b3a71617fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_f30133c6ce0b57b2abc27d1e827256db9c19a0d1ad8a54cf6260c96ed7436298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f30133c6ce0b57b2abc27d1e827256db9c19a0d1ad8a54cf6260c96ed7436298->enter($__internal_f30133c6ce0b57b2abc27d1e827256db9c19a0d1ad8a54cf6260c96ed7436298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));
>>>>>>> donmanager

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
        
<<<<<<< HEAD
        $__internal_a3bb94c2732b984cc2dbfd172ad6056ec3091d74247640d494c3007e33e0f53a->leave($__internal_a3bb94c2732b984cc2dbfd172ad6056ec3091d74247640d494c3007e33e0f53a_prof);

        
        $__internal_f1defce8a48afc9c23b58d397724ef165534948c0129fd31509721f5e685746b->leave($__internal_f1defce8a48afc9c23b58d397724ef165534948c0129fd31509721f5e685746b_prof);
=======
        $__internal_f30133c6ce0b57b2abc27d1e827256db9c19a0d1ad8a54cf6260c96ed7436298->leave($__internal_f30133c6ce0b57b2abc27d1e827256db9c19a0d1ad8a54cf6260c96ed7436298_prof);

        
        $__internal_a46db5a6cd545322ea424eff945490d35d84703dc2f333199a5ba2b3a71617fc->leave($__internal_a46db5a6cd545322ea424eff945490d35d84703dc2f333199a5ba2b3a71617fc_prof);
>>>>>>> donmanager

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_dfe7b14f37d4d3b5122fb4ea3ed01c25bb9d4f467fba0eb3bc449e99e0a04076 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfe7b14f37d4d3b5122fb4ea3ed01c25bb9d4f467fba0eb3bc449e99e0a04076->enter($__internal_dfe7b14f37d4d3b5122fb4ea3ed01c25bb9d4f467fba0eb3bc449e99e0a04076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_8c8139e9b4c902fc6bccd8e79fac221b73a49c1265065554b97fed19b8031337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c8139e9b4c902fc6bccd8e79fac221b73a49c1265065554b97fed19b8031337->enter($__internal_8c8139e9b4c902fc6bccd8e79fac221b73a49c1265065554b97fed19b8031337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));
=======
        $__internal_917e149e59e65cbf3eb7cb20350b6a8f06e12ee4218be357518dd2ffd99a4c93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_917e149e59e65cbf3eb7cb20350b6a8f06e12ee4218be357518dd2ffd99a4c93->enter($__internal_917e149e59e65cbf3eb7cb20350b6a8f06e12ee4218be357518dd2ffd99a4c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_25b3750536ae70c2490b8d0b83d78a979f1b46771e19d9c840f16beefcd955b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25b3750536ae70c2490b8d0b83d78a979f1b46771e19d9c840f16beefcd955b4->enter($__internal_25b3750536ae70c2490b8d0b83d78a979f1b46771e19d9c840f16beefcd955b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));
>>>>>>> donmanager

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
        
<<<<<<< HEAD
        $__internal_8c8139e9b4c902fc6bccd8e79fac221b73a49c1265065554b97fed19b8031337->leave($__internal_8c8139e9b4c902fc6bccd8e79fac221b73a49c1265065554b97fed19b8031337_prof);

        
        $__internal_dfe7b14f37d4d3b5122fb4ea3ed01c25bb9d4f467fba0eb3bc449e99e0a04076->leave($__internal_dfe7b14f37d4d3b5122fb4ea3ed01c25bb9d4f467fba0eb3bc449e99e0a04076_prof);
=======
        $__internal_25b3750536ae70c2490b8d0b83d78a979f1b46771e19d9c840f16beefcd955b4->leave($__internal_25b3750536ae70c2490b8d0b83d78a979f1b46771e19d9c840f16beefcd955b4_prof);

        
        $__internal_917e149e59e65cbf3eb7cb20350b6a8f06e12ee4218be357518dd2ffd99a4c93->leave($__internal_917e149e59e65cbf3eb7cb20350b6a8f06e12ee4218be357518dd2ffd99a4c93_prof);
>>>>>>> donmanager

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_0af3b385308a9630940d9bd6d1443119da23ccef5d77d914f9ef1936244559d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0af3b385308a9630940d9bd6d1443119da23ccef5d77d914f9ef1936244559d7->enter($__internal_0af3b385308a9630940d9bd6d1443119da23ccef5d77d914f9ef1936244559d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        $__internal_7602e34a2d761ef71442ab2afb207e4a05c04b0a4722d5c0e0a737fb16b3eda9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7602e34a2d761ef71442ab2afb207e4a05c04b0a4722d5c0e0a737fb16b3eda9->enter($__internal_7602e34a2d761ef71442ab2afb207e4a05c04b0a4722d5c0e0a737fb16b3eda9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));
=======
        $__internal_5645af1bb15012048879a2737ec107fabda7c3111f7b791d2bcd0077001f1dbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5645af1bb15012048879a2737ec107fabda7c3111f7b791d2bcd0077001f1dbd->enter($__internal_5645af1bb15012048879a2737ec107fabda7c3111f7b791d2bcd0077001f1dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        $__internal_7715d14af9c7006b2e1b8445a51df7197bebccbdf277fbcb8068f2d505894633 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7715d14af9c7006b2e1b8445a51df7197bebccbdf277fbcb8068f2d505894633->enter($__internal_7715d14af9c7006b2e1b8445a51df7197bebccbdf277fbcb8068f2d505894633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));
>>>>>>> donmanager

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
<<<<<<< HEAD
                    $__internal_30334e1ef2fa529f87a12c30553779a3d265789109fe60cca6e1233d2c5330ef = array("attr" => twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "attr", array()));
                    if (!is_array($__internal_30334e1ef2fa529f87a12c30553779a3d265789109fe60cca6e1233d2c5330ef)) {
                        throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                    }
                    $context['_parent'] = $context;
                    $context = array_merge($context, $__internal_30334e1ef2fa529f87a12c30553779a3d265789109fe60cca6e1233d2c5330ef);
=======
                    $__internal_190adc3b7c4f728aad1b06f8f1c4d4894070ee638433af3dbba216eb8292fa84 = array("attr" => twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "attr", array()));
                    if (!is_array($__internal_190adc3b7c4f728aad1b06f8f1c4d4894070ee638433af3dbba216eb8292fa84)) {
                        throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                    }
                    $context['_parent'] = $context;
                    $context = array_merge($context, $__internal_190adc3b7c4f728aad1b06f8f1c4d4894070ee638433af3dbba216eb8292fa84);
>>>>>>> donmanager
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
        
<<<<<<< HEAD
        $__internal_7602e34a2d761ef71442ab2afb207e4a05c04b0a4722d5c0e0a737fb16b3eda9->leave($__internal_7602e34a2d761ef71442ab2afb207e4a05c04b0a4722d5c0e0a737fb16b3eda9_prof);

        
        $__internal_0af3b385308a9630940d9bd6d1443119da23ccef5d77d914f9ef1936244559d7->leave($__internal_0af3b385308a9630940d9bd6d1443119da23ccef5d77d914f9ef1936244559d7_prof);
=======
        $__internal_7715d14af9c7006b2e1b8445a51df7197bebccbdf277fbcb8068f2d505894633->leave($__internal_7715d14af9c7006b2e1b8445a51df7197bebccbdf277fbcb8068f2d505894633_prof);

        
        $__internal_5645af1bb15012048879a2737ec107fabda7c3111f7b791d2bcd0077001f1dbd->leave($__internal_5645af1bb15012048879a2737ec107fabda7c3111f7b791d2bcd0077001f1dbd_prof);
>>>>>>> donmanager

    }

    // line 87
    public function block_checkbox_widget($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_2be6192cd0af6aefd2a64f118e9ddfb5e631d6bf3beab739b34269aad3faf1aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2be6192cd0af6aefd2a64f118e9ddfb5e631d6bf3beab739b34269aad3faf1aa->enter($__internal_2be6192cd0af6aefd2a64f118e9ddfb5e631d6bf3beab739b34269aad3faf1aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_95a7c009b3b18005c57534f6f96ad88583a952c407cb4247d27e94b2ae73f0f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95a7c009b3b18005c57534f6f96ad88583a952c407cb4247d27e94b2ae73f0f0->enter($__internal_95a7c009b3b18005c57534f6f96ad88583a952c407cb4247d27e94b2ae73f0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));
=======
        $__internal_e9d4054e35477b78ff52f289bba329f5886b5c54dec1b87b8c57b6acab308f68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9d4054e35477b78ff52f289bba329f5886b5c54dec1b87b8c57b6acab308f68->enter($__internal_e9d4054e35477b78ff52f289bba329f5886b5c54dec1b87b8c57b6acab308f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_4327642be0100633a9ce348a203e9ac3d49dadd22f1921837ce575b6da081920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4327642be0100633a9ce348a203e9ac3d49dadd22f1921837ce575b6da081920->enter($__internal_4327642be0100633a9ce348a203e9ac3d49dadd22f1921837ce575b6da081920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));
>>>>>>> donmanager

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
        
<<<<<<< HEAD
        $__internal_95a7c009b3b18005c57534f6f96ad88583a952c407cb4247d27e94b2ae73f0f0->leave($__internal_95a7c009b3b18005c57534f6f96ad88583a952c407cb4247d27e94b2ae73f0f0_prof);

        
        $__internal_2be6192cd0af6aefd2a64f118e9ddfb5e631d6bf3beab739b34269aad3faf1aa->leave($__internal_2be6192cd0af6aefd2a64f118e9ddfb5e631d6bf3beab739b34269aad3faf1aa_prof);
=======
        $__internal_4327642be0100633a9ce348a203e9ac3d49dadd22f1921837ce575b6da081920->leave($__internal_4327642be0100633a9ce348a203e9ac3d49dadd22f1921837ce575b6da081920_prof);

        
        $__internal_e9d4054e35477b78ff52f289bba329f5886b5c54dec1b87b8c57b6acab308f68->leave($__internal_e9d4054e35477b78ff52f289bba329f5886b5c54dec1b87b8c57b6acab308f68_prof);
>>>>>>> donmanager

    }

    // line 91
    public function block_radio_widget($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_55a9d8bb89b024354be3dd91801cd6fc271835df54974a5bee1eda0364dec5bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55a9d8bb89b024354be3dd91801cd6fc271835df54974a5bee1eda0364dec5bc->enter($__internal_55a9d8bb89b024354be3dd91801cd6fc271835df54974a5bee1eda0364dec5bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_6ab7ff8a816988e1a7e4c960e5c73fc682fbda4a7ac7c551425f79b82c21cdba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ab7ff8a816988e1a7e4c960e5c73fc682fbda4a7ac7c551425f79b82c21cdba->enter($__internal_6ab7ff8a816988e1a7e4c960e5c73fc682fbda4a7ac7c551425f79b82c21cdba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));
=======
        $__internal_ed57117bd7fe25b894d01674aab5a765ea48993a50f90923eac142465394d830 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed57117bd7fe25b894d01674aab5a765ea48993a50f90923eac142465394d830->enter($__internal_ed57117bd7fe25b894d01674aab5a765ea48993a50f90923eac142465394d830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_931668109fd72426c2e01212ab22154c7c2084be4a9366678b8795f7764426dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_931668109fd72426c2e01212ab22154c7c2084be4a9366678b8795f7764426dc->enter($__internal_931668109fd72426c2e01212ab22154c7c2084be4a9366678b8795f7764426dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));
>>>>>>> donmanager

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
        
<<<<<<< HEAD
        $__internal_6ab7ff8a816988e1a7e4c960e5c73fc682fbda4a7ac7c551425f79b82c21cdba->leave($__internal_6ab7ff8a816988e1a7e4c960e5c73fc682fbda4a7ac7c551425f79b82c21cdba_prof);

        
        $__internal_55a9d8bb89b024354be3dd91801cd6fc271835df54974a5bee1eda0364dec5bc->leave($__internal_55a9d8bb89b024354be3dd91801cd6fc271835df54974a5bee1eda0364dec5bc_prof);
=======
        $__internal_931668109fd72426c2e01212ab22154c7c2084be4a9366678b8795f7764426dc->leave($__internal_931668109fd72426c2e01212ab22154c7c2084be4a9366678b8795f7764426dc_prof);

        
        $__internal_ed57117bd7fe25b894d01674aab5a765ea48993a50f90923eac142465394d830->leave($__internal_ed57117bd7fe25b894d01674aab5a765ea48993a50f90923eac142465394d830_prof);
>>>>>>> donmanager

    }

    // line 95
    public function block_datetime_widget($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_3c0a7d545c10ef316f7301e98d0e1180397f3ce228309558f2cf5556b6aca515 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c0a7d545c10ef316f7301e98d0e1180397f3ce228309558f2cf5556b6aca515->enter($__internal_3c0a7d545c10ef316f7301e98d0e1180397f3ce228309558f2cf5556b6aca515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_a00da3d1f33204dbcf0aaaa2f4d92f5821f99156bdca369ef56ec34f3e4ca8bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a00da3d1f33204dbcf0aaaa2f4d92f5821f99156bdca369ef56ec34f3e4ca8bd->enter($__internal_a00da3d1f33204dbcf0aaaa2f4d92f5821f99156bdca369ef56ec34f3e4ca8bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));
=======
        $__internal_5f5b42d62bfad1c5c10735b702550095f2ee50bb3ee3b9c1ecb590a75e2220fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f5b42d62bfad1c5c10735b702550095f2ee50bb3ee3b9c1ecb590a75e2220fd->enter($__internal_5f5b42d62bfad1c5c10735b702550095f2ee50bb3ee3b9c1ecb590a75e2220fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_bfc850ffc670fe64b861604a8292498f1e417ff0567b693989244d553a813115 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfc850ffc670fe64b861604a8292498f1e417ff0567b693989244d553a813115->enter($__internal_bfc850ffc670fe64b861604a8292498f1e417ff0567b693989244d553a813115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));
>>>>>>> donmanager

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
        
<<<<<<< HEAD
        $__internal_a00da3d1f33204dbcf0aaaa2f4d92f5821f99156bdca369ef56ec34f3e4ca8bd->leave($__internal_a00da3d1f33204dbcf0aaaa2f4d92f5821f99156bdca369ef56ec34f3e4ca8bd_prof);

        
        $__internal_3c0a7d545c10ef316f7301e98d0e1180397f3ce228309558f2cf5556b6aca515->leave($__internal_3c0a7d545c10ef316f7301e98d0e1180397f3ce228309558f2cf5556b6aca515_prof);
=======
        $__internal_bfc850ffc670fe64b861604a8292498f1e417ff0567b693989244d553a813115->leave($__internal_bfc850ffc670fe64b861604a8292498f1e417ff0567b693989244d553a813115_prof);

        
        $__internal_5f5b42d62bfad1c5c10735b702550095f2ee50bb3ee3b9c1ecb590a75e2220fd->leave($__internal_5f5b42d62bfad1c5c10735b702550095f2ee50bb3ee3b9c1ecb590a75e2220fd_prof);
>>>>>>> donmanager

    }

    // line 108
    public function block_date_widget($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_2c1c44989afb35f3adb1ea041da1a05de76bfd87a17083d8d4aa4d230b47522e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c1c44989afb35f3adb1ea041da1a05de76bfd87a17083d8d4aa4d230b47522e->enter($__internal_2c1c44989afb35f3adb1ea041da1a05de76bfd87a17083d8d4aa4d230b47522e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_800ed4eb958795295fe6e5f573b063c7b9af0b26ff94eb2f6b7281b65e92296e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_800ed4eb958795295fe6e5f573b063c7b9af0b26ff94eb2f6b7281b65e92296e->enter($__internal_800ed4eb958795295fe6e5f573b063c7b9af0b26ff94eb2f6b7281b65e92296e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));
=======
        $__internal_6c2dfa3cbddd45fd1dea9044bba2df2f5ae624c17f083049bafed7da2d518c0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c2dfa3cbddd45fd1dea9044bba2df2f5ae624c17f083049bafed7da2d518c0b->enter($__internal_6c2dfa3cbddd45fd1dea9044bba2df2f5ae624c17f083049bafed7da2d518c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_ab38ca79f171ecf88d72c93cb5e2d974770efa91f5b903fb5a8b84e14e616c77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab38ca79f171ecf88d72c93cb5e2d974770efa91f5b903fb5a8b84e14e616c77->enter($__internal_ab38ca79f171ecf88d72c93cb5e2d974770efa91f5b903fb5a8b84e14e616c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));
>>>>>>> donmanager

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
        
<<<<<<< HEAD
        $__internal_800ed4eb958795295fe6e5f573b063c7b9af0b26ff94eb2f6b7281b65e92296e->leave($__internal_800ed4eb958795295fe6e5f573b063c7b9af0b26ff94eb2f6b7281b65e92296e_prof);

        
        $__internal_2c1c44989afb35f3adb1ea041da1a05de76bfd87a17083d8d4aa4d230b47522e->leave($__internal_2c1c44989afb35f3adb1ea041da1a05de76bfd87a17083d8d4aa4d230b47522e_prof);
=======
        $__internal_ab38ca79f171ecf88d72c93cb5e2d974770efa91f5b903fb5a8b84e14e616c77->leave($__internal_ab38ca79f171ecf88d72c93cb5e2d974770efa91f5b903fb5a8b84e14e616c77_prof);

        
        $__internal_6c2dfa3cbddd45fd1dea9044bba2df2f5ae624c17f083049bafed7da2d518c0b->leave($__internal_6c2dfa3cbddd45fd1dea9044bba2df2f5ae624c17f083049bafed7da2d518c0b_prof);
>>>>>>> donmanager

    }

    // line 122
    public function block_time_widget($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_a249cb70f6903bb36b091f7e9041c6a7781ad77cba0427178bda6bc28f5861f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a249cb70f6903bb36b091f7e9041c6a7781ad77cba0427178bda6bc28f5861f1->enter($__internal_a249cb70f6903bb36b091f7e9041c6a7781ad77cba0427178bda6bc28f5861f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_8e8e218e7455da160a506fdad8142c5d91d98ef53d4676c3efe73e09bdc10fa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e8e218e7455da160a506fdad8142c5d91d98ef53d4676c3efe73e09bdc10fa3->enter($__internal_8e8e218e7455da160a506fdad8142c5d91d98ef53d4676c3efe73e09bdc10fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));
=======
        $__internal_61a3659e6782b20d859b5437e23b9e95f4a320310a88ac526392b79b0243e43e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61a3659e6782b20d859b5437e23b9e95f4a320310a88ac526392b79b0243e43e->enter($__internal_61a3659e6782b20d859b5437e23b9e95f4a320310a88ac526392b79b0243e43e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_6b4c08c305be70a5d730c2f16ea1914b56939f13fc9c7660b4647d3eb0341d1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b4c08c305be70a5d730c2f16ea1914b56939f13fc9c7660b4647d3eb0341d1e->enter($__internal_6b4c08c305be70a5d730c2f16ea1914b56939f13fc9c7660b4647d3eb0341d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));
>>>>>>> donmanager

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
        
<<<<<<< HEAD
        $__internal_8e8e218e7455da160a506fdad8142c5d91d98ef53d4676c3efe73e09bdc10fa3->leave($__internal_8e8e218e7455da160a506fdad8142c5d91d98ef53d4676c3efe73e09bdc10fa3_prof);

        
        $__internal_a249cb70f6903bb36b091f7e9041c6a7781ad77cba0427178bda6bc28f5861f1->leave($__internal_a249cb70f6903bb36b091f7e9041c6a7781ad77cba0427178bda6bc28f5861f1_prof);
=======
        $__internal_6b4c08c305be70a5d730c2f16ea1914b56939f13fc9c7660b4647d3eb0341d1e->leave($__internal_6b4c08c305be70a5d730c2f16ea1914b56939f13fc9c7660b4647d3eb0341d1e_prof);

        
        $__internal_61a3659e6782b20d859b5437e23b9e95f4a320310a88ac526392b79b0243e43e->leave($__internal_61a3659e6782b20d859b5437e23b9e95f4a320310a88ac526392b79b0243e43e_prof);
>>>>>>> donmanager

    }

    // line 133
    public function block_dateinterval_widget($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_f976cffffc3d65ce30860d230e859ce8bf36e5ca39f951616170e40f994c15aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f976cffffc3d65ce30860d230e859ce8bf36e5ca39f951616170e40f994c15aa->enter($__internal_f976cffffc3d65ce30860d230e859ce8bf36e5ca39f951616170e40f994c15aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_32c203d56cf41f4ae35cdf442f32b432b9160dc64399b1ceb1a386f925510d06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32c203d56cf41f4ae35cdf442f32b432b9160dc64399b1ceb1a386f925510d06->enter($__internal_32c203d56cf41f4ae35cdf442f32b432b9160dc64399b1ceb1a386f925510d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));
=======
        $__internal_55a5dc947202548c5b48cd70a9ecfd648881a1e480f78d8b28c555b5e200b067 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55a5dc947202548c5b48cd70a9ecfd648881a1e480f78d8b28c555b5e200b067->enter($__internal_55a5dc947202548c5b48cd70a9ecfd648881a1e480f78d8b28c555b5e200b067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_368f0dccb82aad1240ae0a0b9da0bf24a6f289eee216e6d64b1f49ee7633de80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_368f0dccb82aad1240ae0a0b9da0bf24a6f289eee216e6d64b1f49ee7633de80->enter($__internal_368f0dccb82aad1240ae0a0b9da0bf24a6f289eee216e6d64b1f49ee7633de80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));
>>>>>>> donmanager

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
        
<<<<<<< HEAD
        $__internal_32c203d56cf41f4ae35cdf442f32b432b9160dc64399b1ceb1a386f925510d06->leave($__internal_32c203d56cf41f4ae35cdf442f32b432b9160dc64399b1ceb1a386f925510d06_prof);

        
        $__internal_f976cffffc3d65ce30860d230e859ce8bf36e5ca39f951616170e40f994c15aa->leave($__internal_f976cffffc3d65ce30860d230e859ce8bf36e5ca39f951616170e40f994c15aa_prof);
=======
        $__internal_368f0dccb82aad1240ae0a0b9da0bf24a6f289eee216e6d64b1f49ee7633de80->leave($__internal_368f0dccb82aad1240ae0a0b9da0bf24a6f289eee216e6d64b1f49ee7633de80_prof);

        
        $__internal_55a5dc947202548c5b48cd70a9ecfd648881a1e480f78d8b28c555b5e200b067->leave($__internal_55a5dc947202548c5b48cd70a9ecfd648881a1e480f78d8b28c555b5e200b067_prof);
>>>>>>> donmanager

    }

    // line 168
    public function block_number_widget($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_42e366596231ab916f60d9c182bbfc6f24995b700700f2d331bbb7129f3163ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42e366596231ab916f60d9c182bbfc6f24995b700700f2d331bbb7129f3163ef->enter($__internal_42e366596231ab916f60d9c182bbfc6f24995b700700f2d331bbb7129f3163ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        $__internal_c8ea29966df4bbf0dd513e18a2203d06904119704bf25b2202c80ba2e95999ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8ea29966df4bbf0dd513e18a2203d06904119704bf25b2202c80ba2e95999ac->enter($__internal_c8ea29966df4bbf0dd513e18a2203d06904119704bf25b2202c80ba2e95999ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));
=======
        $__internal_e6550cd91415eb9be9a5b84d2bf60c76da64eb6f516641dd04967b6544f233ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6550cd91415eb9be9a5b84d2bf60c76da64eb6f516641dd04967b6544f233ac->enter($__internal_e6550cd91415eb9be9a5b84d2bf60c76da64eb6f516641dd04967b6544f233ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        $__internal_97d249f3f905a1a4ccc3f68052bbee291f08e03d3102d41418042e926b81fdcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97d249f3f905a1a4ccc3f68052bbee291f08e03d3102d41418042e926b81fdcd->enter($__internal_97d249f3f905a1a4ccc3f68052bbee291f08e03d3102d41418042e926b81fdcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));
>>>>>>> donmanager

        // line 170
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 170, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 171
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
<<<<<<< HEAD
        $__internal_c8ea29966df4bbf0dd513e18a2203d06904119704bf25b2202c80ba2e95999ac->leave($__internal_c8ea29966df4bbf0dd513e18a2203d06904119704bf25b2202c80ba2e95999ac_prof);

        
        $__internal_42e366596231ab916f60d9c182bbfc6f24995b700700f2d331bbb7129f3163ef->leave($__internal_42e366596231ab916f60d9c182bbfc6f24995b700700f2d331bbb7129f3163ef_prof);
=======
        $__internal_97d249f3f905a1a4ccc3f68052bbee291f08e03d3102d41418042e926b81fdcd->leave($__internal_97d249f3f905a1a4ccc3f68052bbee291f08e03d3102d41418042e926b81fdcd_prof);

        
        $__internal_e6550cd91415eb9be9a5b84d2bf60c76da64eb6f516641dd04967b6544f233ac->leave($__internal_e6550cd91415eb9be9a5b84d2bf60c76da64eb6f516641dd04967b6544f233ac_prof);
>>>>>>> donmanager

    }

    // line 174
    public function block_integer_widget($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_33a8d303e11f670ded36f03f51ffbac33c32139df70bff001383ad7777439ea0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33a8d303e11f670ded36f03f51ffbac33c32139df70bff001383ad7777439ea0->enter($__internal_33a8d303e11f670ded36f03f51ffbac33c32139df70bff001383ad7777439ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        $__internal_d18e6cc30981e21fa14ad95bc98c171579dd584d78f92a83be8c1b669096232a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d18e6cc30981e21fa14ad95bc98c171579dd584d78f92a83be8c1b669096232a->enter($__internal_d18e6cc30981e21fa14ad95bc98c171579dd584d78f92a83be8c1b669096232a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));
=======
        $__internal_88bdb6ce805c22d77d01f1711b1f8a0d6c31e2bde05dc7464a16c4791b9c0bcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88bdb6ce805c22d77d01f1711b1f8a0d6c31e2bde05dc7464a16c4791b9c0bcc->enter($__internal_88bdb6ce805c22d77d01f1711b1f8a0d6c31e2bde05dc7464a16c4791b9c0bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        $__internal_d429327b88dbee1fc62a03556508654ce160bad5365eb9a99341e42c2037d507 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d429327b88dbee1fc62a03556508654ce160bad5365eb9a99341e42c2037d507->enter($__internal_d429327b88dbee1fc62a03556508654ce160bad5365eb9a99341e42c2037d507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));
>>>>>>> donmanager

        // line 175
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 175, $this->getSourceContext()); })()), "number")) : ("number"));
        // line 176
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
<<<<<<< HEAD
        $__internal_d18e6cc30981e21fa14ad95bc98c171579dd584d78f92a83be8c1b669096232a->leave($__internal_d18e6cc30981e21fa14ad95bc98c171579dd584d78f92a83be8c1b669096232a_prof);

        
        $__internal_33a8d303e11f670ded36f03f51ffbac33c32139df70bff001383ad7777439ea0->leave($__internal_33a8d303e11f670ded36f03f51ffbac33c32139df70bff001383ad7777439ea0_prof);
=======
        $__internal_d429327b88dbee1fc62a03556508654ce160bad5365eb9a99341e42c2037d507->leave($__internal_d429327b88dbee1fc62a03556508654ce160bad5365eb9a99341e42c2037d507_prof);

        
        $__internal_88bdb6ce805c22d77d01f1711b1f8a0d6c31e2bde05dc7464a16c4791b9c0bcc->leave($__internal_88bdb6ce805c22d77d01f1711b1f8a0d6c31e2bde05dc7464a16c4791b9c0bcc_prof);
>>>>>>> donmanager

    }

    // line 179
    public function block_money_widget($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_5ffa82e1e39e22ff46423f12eaf50253abd909db5702961051f2a95cb22c3f39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ffa82e1e39e22ff46423f12eaf50253abd909db5702961051f2a95cb22c3f39->enter($__internal_5ffa82e1e39e22ff46423f12eaf50253abd909db5702961051f2a95cb22c3f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_40faf90803f2a15c0b4b1855407ceac36ab65f79ea632330192da3137f0d8385 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40faf90803f2a15c0b4b1855407ceac36ab65f79ea632330192da3137f0d8385->enter($__internal_40faf90803f2a15c0b4b1855407ceac36ab65f79ea632330192da3137f0d8385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));
=======
        $__internal_0d348f4373ee02e87c268987cf2bcdc4409b83d9092632d64dad3293f0c680d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d348f4373ee02e87c268987cf2bcdc4409b83d9092632d64dad3293f0c680d7->enter($__internal_0d348f4373ee02e87c268987cf2bcdc4409b83d9092632d64dad3293f0c680d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_7df407c8b39d1891ad3d08ad60c0d74de4a1f0ad520855e2638db42e35381652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7df407c8b39d1891ad3d08ad60c0d74de4a1f0ad520855e2638db42e35381652->enter($__internal_7df407c8b39d1891ad3d08ad60c0d74de4a1f0ad520855e2638db42e35381652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));
>>>>>>> donmanager

        // line 180
        echo twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 180, $this->getSourceContext()); })()), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
<<<<<<< HEAD
        $__internal_40faf90803f2a15c0b4b1855407ceac36ab65f79ea632330192da3137f0d8385->leave($__internal_40faf90803f2a15c0b4b1855407ceac36ab65f79ea632330192da3137f0d8385_prof);

        
        $__internal_5ffa82e1e39e22ff46423f12eaf50253abd909db5702961051f2a95cb22c3f39->leave($__internal_5ffa82e1e39e22ff46423f12eaf50253abd909db5702961051f2a95cb22c3f39_prof);
=======
        $__internal_7df407c8b39d1891ad3d08ad60c0d74de4a1f0ad520855e2638db42e35381652->leave($__internal_7df407c8b39d1891ad3d08ad60c0d74de4a1f0ad520855e2638db42e35381652_prof);

        
        $__internal_0d348f4373ee02e87c268987cf2bcdc4409b83d9092632d64dad3293f0c680d7->leave($__internal_0d348f4373ee02e87c268987cf2bcdc4409b83d9092632d64dad3293f0c680d7_prof);
>>>>>>> donmanager

    }

    // line 183
    public function block_url_widget($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_4e589adb72092b585a91f58d9209007452b4f14cfc28058942ad6d1424517457 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e589adb72092b585a91f58d9209007452b4f14cfc28058942ad6d1424517457->enter($__internal_4e589adb72092b585a91f58d9209007452b4f14cfc28058942ad6d1424517457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        $__internal_a05dcae50badd5b99271b7141a912addb047dd26a374d3d487b58d6812b8414f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a05dcae50badd5b99271b7141a912addb047dd26a374d3d487b58d6812b8414f->enter($__internal_a05dcae50badd5b99271b7141a912addb047dd26a374d3d487b58d6812b8414f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));
=======
        $__internal_4a837a7180b3fe0c1093bd11c0221ee0eee826f4969c4e10b1ad5aaf4f29a59e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a837a7180b3fe0c1093bd11c0221ee0eee826f4969c4e10b1ad5aaf4f29a59e->enter($__internal_4a837a7180b3fe0c1093bd11c0221ee0eee826f4969c4e10b1ad5aaf4f29a59e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        $__internal_f1ab4681ee136e3c4bc93d75b14e3c2cbda4b62a2e4656c6807be3d407bfe4be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1ab4681ee136e3c4bc93d75b14e3c2cbda4b62a2e4656c6807be3d407bfe4be->enter($__internal_f1ab4681ee136e3c4bc93d75b14e3c2cbda4b62a2e4656c6807be3d407bfe4be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));
>>>>>>> donmanager

        // line 184
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 184, $this->getSourceContext()); })()), "url")) : ("url"));
        // line 185
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
<<<<<<< HEAD
        $__internal_a05dcae50badd5b99271b7141a912addb047dd26a374d3d487b58d6812b8414f->leave($__internal_a05dcae50badd5b99271b7141a912addb047dd26a374d3d487b58d6812b8414f_prof);

        
        $__internal_4e589adb72092b585a91f58d9209007452b4f14cfc28058942ad6d1424517457->leave($__internal_4e589adb72092b585a91f58d9209007452b4f14cfc28058942ad6d1424517457_prof);
=======
        $__internal_f1ab4681ee136e3c4bc93d75b14e3c2cbda4b62a2e4656c6807be3d407bfe4be->leave($__internal_f1ab4681ee136e3c4bc93d75b14e3c2cbda4b62a2e4656c6807be3d407bfe4be_prof);

        
        $__internal_4a837a7180b3fe0c1093bd11c0221ee0eee826f4969c4e10b1ad5aaf4f29a59e->leave($__internal_4a837a7180b3fe0c1093bd11c0221ee0eee826f4969c4e10b1ad5aaf4f29a59e_prof);
>>>>>>> donmanager

    }

    // line 188
    public function block_search_widget($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_44013d81bc3b7a1d38151db0cc54cd41c2f04ed4111f48c515fd7d11d7f94471 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44013d81bc3b7a1d38151db0cc54cd41c2f04ed4111f48c515fd7d11d7f94471->enter($__internal_44013d81bc3b7a1d38151db0cc54cd41c2f04ed4111f48c515fd7d11d7f94471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        $__internal_7821210020a1130dbb67707a2e82cb6e1cd335c50ec73386aaefa7eb844b2a63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7821210020a1130dbb67707a2e82cb6e1cd335c50ec73386aaefa7eb844b2a63->enter($__internal_7821210020a1130dbb67707a2e82cb6e1cd335c50ec73386aaefa7eb844b2a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));
=======
        $__internal_6f6ba81181f44f916705072fc4c58f789990ed42fb0f78ed3f15792951bc2fdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f6ba81181f44f916705072fc4c58f789990ed42fb0f78ed3f15792951bc2fdf->enter($__internal_6f6ba81181f44f916705072fc4c58f789990ed42fb0f78ed3f15792951bc2fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        $__internal_360126120b816712bc66fe443c003bdfb6a147db25b1a84c8dee904be7d0ce97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_360126120b816712bc66fe443c003bdfb6a147db25b1a84c8dee904be7d0ce97->enter($__internal_360126120b816712bc66fe443c003bdfb6a147db25b1a84c8dee904be7d0ce97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));
>>>>>>> donmanager

        // line 189
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 189, $this->getSourceContext()); })()), "search")) : ("search"));
        // line 190
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
<<<<<<< HEAD
        $__internal_7821210020a1130dbb67707a2e82cb6e1cd335c50ec73386aaefa7eb844b2a63->leave($__internal_7821210020a1130dbb67707a2e82cb6e1cd335c50ec73386aaefa7eb844b2a63_prof);

        
        $__internal_44013d81bc3b7a1d38151db0cc54cd41c2f04ed4111f48c515fd7d11d7f94471->leave($__internal_44013d81bc3b7a1d38151db0cc54cd41c2f04ed4111f48c515fd7d11d7f94471_prof);
=======
        $__internal_360126120b816712bc66fe443c003bdfb6a147db25b1a84c8dee904be7d0ce97->leave($__internal_360126120b816712bc66fe443c003bdfb6a147db25b1a84c8dee904be7d0ce97_prof);

        
        $__internal_6f6ba81181f44f916705072fc4c58f789990ed42fb0f78ed3f15792951bc2fdf->leave($__internal_6f6ba81181f44f916705072fc4c58f789990ed42fb0f78ed3f15792951bc2fdf_prof);
>>>>>>> donmanager

    }

    // line 193
    public function block_percent_widget($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_6c577d7bdb578383ff5f5fb22377968905e3237ead5cc2e36beea8eb59fb4d18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c577d7bdb578383ff5f5fb22377968905e3237ead5cc2e36beea8eb59fb4d18->enter($__internal_6c577d7bdb578383ff5f5fb22377968905e3237ead5cc2e36beea8eb59fb4d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_e0b77c533a4e04727bf01f80752d5fb6ed36f4fab1eb366477a16e57140f01c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0b77c533a4e04727bf01f80752d5fb6ed36f4fab1eb366477a16e57140f01c1->enter($__internal_e0b77c533a4e04727bf01f80752d5fb6ed36f4fab1eb366477a16e57140f01c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));
=======
        $__internal_9e876c7bc6009b87ef55a5e9047b655dbeb0f17d05237ceeb4a151afd80f2df6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e876c7bc6009b87ef55a5e9047b655dbeb0f17d05237ceeb4a151afd80f2df6->enter($__internal_9e876c7bc6009b87ef55a5e9047b655dbeb0f17d05237ceeb4a151afd80f2df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_6e38755fac366e1b98eddac9030da7a46d690fdfd57f6ec83022d50b9d9b9efa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e38755fac366e1b98eddac9030da7a46d690fdfd57f6ec83022d50b9d9b9efa->enter($__internal_6e38755fac366e1b98eddac9030da7a46d690fdfd57f6ec83022d50b9d9b9efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));
>>>>>>> donmanager

        // line 194
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 194, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 195
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
<<<<<<< HEAD
        $__internal_e0b77c533a4e04727bf01f80752d5fb6ed36f4fab1eb366477a16e57140f01c1->leave($__internal_e0b77c533a4e04727bf01f80752d5fb6ed36f4fab1eb366477a16e57140f01c1_prof);

        
        $__internal_6c577d7bdb578383ff5f5fb22377968905e3237ead5cc2e36beea8eb59fb4d18->leave($__internal_6c577d7bdb578383ff5f5fb22377968905e3237ead5cc2e36beea8eb59fb4d18_prof);
=======
        $__internal_6e38755fac366e1b98eddac9030da7a46d690fdfd57f6ec83022d50b9d9b9efa->leave($__internal_6e38755fac366e1b98eddac9030da7a46d690fdfd57f6ec83022d50b9d9b9efa_prof);

        
        $__internal_9e876c7bc6009b87ef55a5e9047b655dbeb0f17d05237ceeb4a151afd80f2df6->leave($__internal_9e876c7bc6009b87ef55a5e9047b655dbeb0f17d05237ceeb4a151afd80f2df6_prof);
>>>>>>> donmanager

    }

    // line 198
    public function block_password_widget($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_f38b962edace91729b7a97d47136077921319afc5981465b8cae1f0d2e03d490 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f38b962edace91729b7a97d47136077921319afc5981465b8cae1f0d2e03d490->enter($__internal_f38b962edace91729b7a97d47136077921319afc5981465b8cae1f0d2e03d490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        $__internal_d3d7577301447ec0f7e45484417aafe6948d7637f2ba9016e011892d485f7993 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3d7577301447ec0f7e45484417aafe6948d7637f2ba9016e011892d485f7993->enter($__internal_d3d7577301447ec0f7e45484417aafe6948d7637f2ba9016e011892d485f7993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));
=======
        $__internal_0acf3f3dd33d86fc29449076def3974c2b5290fe87283fe07f7f61a559a22e69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0acf3f3dd33d86fc29449076def3974c2b5290fe87283fe07f7f61a559a22e69->enter($__internal_0acf3f3dd33d86fc29449076def3974c2b5290fe87283fe07f7f61a559a22e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        $__internal_8b7abb7f7742a6f8ff12486613aebeceb36f3639d7d0db4c96d4f42e15ab3de5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b7abb7f7742a6f8ff12486613aebeceb36f3639d7d0db4c96d4f42e15ab3de5->enter($__internal_8b7abb7f7742a6f8ff12486613aebeceb36f3639d7d0db4c96d4f42e15ab3de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));
>>>>>>> donmanager

        // line 199
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 199, $this->getSourceContext()); })()), "password")) : ("password"));
        // line 200
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
<<<<<<< HEAD
        $__internal_d3d7577301447ec0f7e45484417aafe6948d7637f2ba9016e011892d485f7993->leave($__internal_d3d7577301447ec0f7e45484417aafe6948d7637f2ba9016e011892d485f7993_prof);

        
        $__internal_f38b962edace91729b7a97d47136077921319afc5981465b8cae1f0d2e03d490->leave($__internal_f38b962edace91729b7a97d47136077921319afc5981465b8cae1f0d2e03d490_prof);
=======
        $__internal_8b7abb7f7742a6f8ff12486613aebeceb36f3639d7d0db4c96d4f42e15ab3de5->leave($__internal_8b7abb7f7742a6f8ff12486613aebeceb36f3639d7d0db4c96d4f42e15ab3de5_prof);

        
        $__internal_0acf3f3dd33d86fc29449076def3974c2b5290fe87283fe07f7f61a559a22e69->leave($__internal_0acf3f3dd33d86fc29449076def3974c2b5290fe87283fe07f7f61a559a22e69_prof);
>>>>>>> donmanager

    }

    // line 203
    public function block_hidden_widget($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_fc6bc25d4434a49afee99c10a73c78cebb93367893abd521da750b64cd8e4a37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc6bc25d4434a49afee99c10a73c78cebb93367893abd521da750b64cd8e4a37->enter($__internal_fc6bc25d4434a49afee99c10a73c78cebb93367893abd521da750b64cd8e4a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        $__internal_6fb9eac8535897325454ea10025fe4088b1a957d14dac64ee141a577ac29eda4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fb9eac8535897325454ea10025fe4088b1a957d14dac64ee141a577ac29eda4->enter($__internal_6fb9eac8535897325454ea10025fe4088b1a957d14dac64ee141a577ac29eda4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));
=======
        $__internal_63f0dcf336aaab75aac4da729763b7eb2c9becfe9cad6786527bade73c71139b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63f0dcf336aaab75aac4da729763b7eb2c9becfe9cad6786527bade73c71139b->enter($__internal_63f0dcf336aaab75aac4da729763b7eb2c9becfe9cad6786527bade73c71139b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        $__internal_4b54f2fc3bf2a138ddb0e6283616cba6b420fb8444177d1e97e07544e8d746d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b54f2fc3bf2a138ddb0e6283616cba6b420fb8444177d1e97e07544e8d746d4->enter($__internal_4b54f2fc3bf2a138ddb0e6283616cba6b420fb8444177d1e97e07544e8d746d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));
>>>>>>> donmanager

        // line 204
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 204, $this->getSourceContext()); })()), "hidden")) : ("hidden"));
        // line 205
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
<<<<<<< HEAD
        $__internal_6fb9eac8535897325454ea10025fe4088b1a957d14dac64ee141a577ac29eda4->leave($__internal_6fb9eac8535897325454ea10025fe4088b1a957d14dac64ee141a577ac29eda4_prof);

        
        $__internal_fc6bc25d4434a49afee99c10a73c78cebb93367893abd521da750b64cd8e4a37->leave($__internal_fc6bc25d4434a49afee99c10a73c78cebb93367893abd521da750b64cd8e4a37_prof);
=======
        $__internal_4b54f2fc3bf2a138ddb0e6283616cba6b420fb8444177d1e97e07544e8d746d4->leave($__internal_4b54f2fc3bf2a138ddb0e6283616cba6b420fb8444177d1e97e07544e8d746d4_prof);

        
        $__internal_63f0dcf336aaab75aac4da729763b7eb2c9becfe9cad6786527bade73c71139b->leave($__internal_63f0dcf336aaab75aac4da729763b7eb2c9becfe9cad6786527bade73c71139b_prof);
>>>>>>> donmanager

    }

    // line 208
    public function block_email_widget($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_f2c7d2fdcd86ddf8c46865dd096b3fc26fcec1b0e419a83936f4ee7af26a7a0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2c7d2fdcd86ddf8c46865dd096b3fc26fcec1b0e419a83936f4ee7af26a7a0b->enter($__internal_f2c7d2fdcd86ddf8c46865dd096b3fc26fcec1b0e419a83936f4ee7af26a7a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        $__internal_8c080d0326f01f7b1b45c81c401c1028ecf476f1483f5830ef26b23e384da9d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c080d0326f01f7b1b45c81c401c1028ecf476f1483f5830ef26b23e384da9d3->enter($__internal_8c080d0326f01f7b1b45c81c401c1028ecf476f1483f5830ef26b23e384da9d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));
=======
        $__internal_9a3e685e4be9c0306d50e32337b45d9c9e3eebf4d0f1b7e6d1d72aa4729fe41a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a3e685e4be9c0306d50e32337b45d9c9e3eebf4d0f1b7e6d1d72aa4729fe41a->enter($__internal_9a3e685e4be9c0306d50e32337b45d9c9e3eebf4d0f1b7e6d1d72aa4729fe41a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        $__internal_832338dd838458b268b7e3b3e417f9861c7e48386be574fb9148bc033c63350b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_832338dd838458b268b7e3b3e417f9861c7e48386be574fb9148bc033c63350b->enter($__internal_832338dd838458b268b7e3b3e417f9861c7e48386be574fb9148bc033c63350b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));
>>>>>>> donmanager

        // line 209
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 209, $this->getSourceContext()); })()), "email")) : ("email"));
        // line 210
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
<<<<<<< HEAD
        $__internal_8c080d0326f01f7b1b45c81c401c1028ecf476f1483f5830ef26b23e384da9d3->leave($__internal_8c080d0326f01f7b1b45c81c401c1028ecf476f1483f5830ef26b23e384da9d3_prof);

        
        $__internal_f2c7d2fdcd86ddf8c46865dd096b3fc26fcec1b0e419a83936f4ee7af26a7a0b->leave($__internal_f2c7d2fdcd86ddf8c46865dd096b3fc26fcec1b0e419a83936f4ee7af26a7a0b_prof);
=======
        $__internal_832338dd838458b268b7e3b3e417f9861c7e48386be574fb9148bc033c63350b->leave($__internal_832338dd838458b268b7e3b3e417f9861c7e48386be574fb9148bc033c63350b_prof);

        
        $__internal_9a3e685e4be9c0306d50e32337b45d9c9e3eebf4d0f1b7e6d1d72aa4729fe41a->leave($__internal_9a3e685e4be9c0306d50e32337b45d9c9e3eebf4d0f1b7e6d1d72aa4729fe41a_prof);
>>>>>>> donmanager

    }

    // line 213
    public function block_range_widget($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_f93b2ff912721b857b35742b7f1dc31487c658a00ec1ca6ad6dd149404559c89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f93b2ff912721b857b35742b7f1dc31487c658a00ec1ca6ad6dd149404559c89->enter($__internal_f93b2ff912721b857b35742b7f1dc31487c658a00ec1ca6ad6dd149404559c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        $__internal_964906fd61225ac1b32f4b991ff26ea4449282a7bd197f4ece31d6b610faf0dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_964906fd61225ac1b32f4b991ff26ea4449282a7bd197f4ece31d6b610faf0dd->enter($__internal_964906fd61225ac1b32f4b991ff26ea4449282a7bd197f4ece31d6b610faf0dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));
=======
        $__internal_7441b735c831f33ecb9e1ce989cdaebef6ff60123b6a12ec9aab1bedcc77701a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7441b735c831f33ecb9e1ce989cdaebef6ff60123b6a12ec9aab1bedcc77701a->enter($__internal_7441b735c831f33ecb9e1ce989cdaebef6ff60123b6a12ec9aab1bedcc77701a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        $__internal_4b03a5092b1bf5a1e5954a9c443dcf9d481d2de54a879b16d68e453de727aa4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b03a5092b1bf5a1e5954a9c443dcf9d481d2de54a879b16d68e453de727aa4a->enter($__internal_4b03a5092b1bf5a1e5954a9c443dcf9d481d2de54a879b16d68e453de727aa4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));
>>>>>>> donmanager

        // line 214
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 214, $this->getSourceContext()); })()), "range")) : ("range"));
        // line 215
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
<<<<<<< HEAD
        $__internal_964906fd61225ac1b32f4b991ff26ea4449282a7bd197f4ece31d6b610faf0dd->leave($__internal_964906fd61225ac1b32f4b991ff26ea4449282a7bd197f4ece31d6b610faf0dd_prof);

        
        $__internal_f93b2ff912721b857b35742b7f1dc31487c658a00ec1ca6ad6dd149404559c89->leave($__internal_f93b2ff912721b857b35742b7f1dc31487c658a00ec1ca6ad6dd149404559c89_prof);
=======
        $__internal_4b03a5092b1bf5a1e5954a9c443dcf9d481d2de54a879b16d68e453de727aa4a->leave($__internal_4b03a5092b1bf5a1e5954a9c443dcf9d481d2de54a879b16d68e453de727aa4a_prof);

        
        $__internal_7441b735c831f33ecb9e1ce989cdaebef6ff60123b6a12ec9aab1bedcc77701a->leave($__internal_7441b735c831f33ecb9e1ce989cdaebef6ff60123b6a12ec9aab1bedcc77701a_prof);
>>>>>>> donmanager

    }

    // line 218
    public function block_button_widget($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_be1c1034cd3e8b076e2363f81d1506674bcdeacbbc2579dfc2972a87f3b619d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be1c1034cd3e8b076e2363f81d1506674bcdeacbbc2579dfc2972a87f3b619d1->enter($__internal_be1c1034cd3e8b076e2363f81d1506674bcdeacbbc2579dfc2972a87f3b619d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_065d8b36e329a86520e51962fbdd2648def40d4cd1e8a78c45c056778d85fafc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_065d8b36e329a86520e51962fbdd2648def40d4cd1e8a78c45c056778d85fafc->enter($__internal_065d8b36e329a86520e51962fbdd2648def40d4cd1e8a78c45c056778d85fafc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));
=======
        $__internal_f87a21951924247b42f8b1b2d82b84ae9eee583640710b318168c2f3ba93a4ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f87a21951924247b42f8b1b2d82b84ae9eee583640710b318168c2f3ba93a4ac->enter($__internal_f87a21951924247b42f8b1b2d82b84ae9eee583640710b318168c2f3ba93a4ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_fcb09bf0d3007ab3781cecea83ad003212956f0207ab81670b920fec3575189c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcb09bf0d3007ab3781cecea83ad003212956f0207ab81670b920fec3575189c->enter($__internal_fcb09bf0d3007ab3781cecea83ad003212956f0207ab81670b920fec3575189c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));
>>>>>>> donmanager

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
        
<<<<<<< HEAD
        $__internal_065d8b36e329a86520e51962fbdd2648def40d4cd1e8a78c45c056778d85fafc->leave($__internal_065d8b36e329a86520e51962fbdd2648def40d4cd1e8a78c45c056778d85fafc_prof);

        
        $__internal_be1c1034cd3e8b076e2363f81d1506674bcdeacbbc2579dfc2972a87f3b619d1->leave($__internal_be1c1034cd3e8b076e2363f81d1506674bcdeacbbc2579dfc2972a87f3b619d1_prof);
=======
        $__internal_fcb09bf0d3007ab3781cecea83ad003212956f0207ab81670b920fec3575189c->leave($__internal_fcb09bf0d3007ab3781cecea83ad003212956f0207ab81670b920fec3575189c_prof);

        
        $__internal_f87a21951924247b42f8b1b2d82b84ae9eee583640710b318168c2f3ba93a4ac->leave($__internal_f87a21951924247b42f8b1b2d82b84ae9eee583640710b318168c2f3ba93a4ac_prof);
>>>>>>> donmanager

    }

    // line 232
    public function block_submit_widget($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_acfc1fc7aee83718abc4f1d4545e6b09e84d67dda74ff50588531bb6e93a29c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acfc1fc7aee83718abc4f1d4545e6b09e84d67dda74ff50588531bb6e93a29c9->enter($__internal_acfc1fc7aee83718abc4f1d4545e6b09e84d67dda74ff50588531bb6e93a29c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        $__internal_db0fcb701e5a2817b421e17d7d728d84ec29e5ec4d4d28a5f2b2511ea041bd6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db0fcb701e5a2817b421e17d7d728d84ec29e5ec4d4d28a5f2b2511ea041bd6b->enter($__internal_db0fcb701e5a2817b421e17d7d728d84ec29e5ec4d4d28a5f2b2511ea041bd6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));
=======
        $__internal_53be7106240c6df15f54228446474b75414aacb3ea0edf4a7414c5e72b84fbe7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53be7106240c6df15f54228446474b75414aacb3ea0edf4a7414c5e72b84fbe7->enter($__internal_53be7106240c6df15f54228446474b75414aacb3ea0edf4a7414c5e72b84fbe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        $__internal_6fc76d8e8c015b55708dbb020d12dcc7a43ca6d3001d9ebf09bf7cef698c549c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fc76d8e8c015b55708dbb020d12dcc7a43ca6d3001d9ebf09bf7cef698c549c->enter($__internal_6fc76d8e8c015b55708dbb020d12dcc7a43ca6d3001d9ebf09bf7cef698c549c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));
>>>>>>> donmanager

        // line 233
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 233, $this->getSourceContext()); })()), "submit")) : ("submit"));
        // line 234
        $this->displayBlock("button_widget", $context, $blocks);
        
<<<<<<< HEAD
        $__internal_db0fcb701e5a2817b421e17d7d728d84ec29e5ec4d4d28a5f2b2511ea041bd6b->leave($__internal_db0fcb701e5a2817b421e17d7d728d84ec29e5ec4d4d28a5f2b2511ea041bd6b_prof);

        
        $__internal_acfc1fc7aee83718abc4f1d4545e6b09e84d67dda74ff50588531bb6e93a29c9->leave($__internal_acfc1fc7aee83718abc4f1d4545e6b09e84d67dda74ff50588531bb6e93a29c9_prof);
=======
        $__internal_6fc76d8e8c015b55708dbb020d12dcc7a43ca6d3001d9ebf09bf7cef698c549c->leave($__internal_6fc76d8e8c015b55708dbb020d12dcc7a43ca6d3001d9ebf09bf7cef698c549c_prof);

        
        $__internal_53be7106240c6df15f54228446474b75414aacb3ea0edf4a7414c5e72b84fbe7->leave($__internal_53be7106240c6df15f54228446474b75414aacb3ea0edf4a7414c5e72b84fbe7_prof);
>>>>>>> donmanager

    }

    // line 237
    public function block_reset_widget($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_9459b1fa7fbdd32fe4f5e3d338113f8fc9d6d5b55e982781f1e1767e65d11533 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9459b1fa7fbdd32fe4f5e3d338113f8fc9d6d5b55e982781f1e1767e65d11533->enter($__internal_9459b1fa7fbdd32fe4f5e3d338113f8fc9d6d5b55e982781f1e1767e65d11533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        $__internal_408d927f037deedefc0e5869b00c15ad53417a0dd0d3190aa1d8a786f3ba8fac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_408d927f037deedefc0e5869b00c15ad53417a0dd0d3190aa1d8a786f3ba8fac->enter($__internal_408d927f037deedefc0e5869b00c15ad53417a0dd0d3190aa1d8a786f3ba8fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));
=======
        $__internal_f48a8d7675dd26933613278ce127b563d03d58750750c3a1097cb867fb88d411 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f48a8d7675dd26933613278ce127b563d03d58750750c3a1097cb867fb88d411->enter($__internal_f48a8d7675dd26933613278ce127b563d03d58750750c3a1097cb867fb88d411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        $__internal_bc3f6270331ba5a840aa1927c08980b5442e6e9e35e5573a991d65994c86b6d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc3f6270331ba5a840aa1927c08980b5442e6e9e35e5573a991d65994c86b6d6->enter($__internal_bc3f6270331ba5a840aa1927c08980b5442e6e9e35e5573a991d65994c86b6d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));
>>>>>>> donmanager

        // line 238
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 238, $this->getSourceContext()); })()), "reset")) : ("reset"));
        // line 239
        $this->displayBlock("button_widget", $context, $blocks);
        
<<<<<<< HEAD
        $__internal_408d927f037deedefc0e5869b00c15ad53417a0dd0d3190aa1d8a786f3ba8fac->leave($__internal_408d927f037deedefc0e5869b00c15ad53417a0dd0d3190aa1d8a786f3ba8fac_prof);

        
        $__internal_9459b1fa7fbdd32fe4f5e3d338113f8fc9d6d5b55e982781f1e1767e65d11533->leave($__internal_9459b1fa7fbdd32fe4f5e3d338113f8fc9d6d5b55e982781f1e1767e65d11533_prof);
=======
        $__internal_bc3f6270331ba5a840aa1927c08980b5442e6e9e35e5573a991d65994c86b6d6->leave($__internal_bc3f6270331ba5a840aa1927c08980b5442e6e9e35e5573a991d65994c86b6d6_prof);

        
        $__internal_f48a8d7675dd26933613278ce127b563d03d58750750c3a1097cb867fb88d411->leave($__internal_f48a8d7675dd26933613278ce127b563d03d58750750c3a1097cb867fb88d411_prof);
>>>>>>> donmanager

    }

    // line 242
    public function block_tel_widget($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_6f8c59bedec2faebbdcfe1dc76685265af4d3ebad3d7d3efdf2ed5c8c3b978b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f8c59bedec2faebbdcfe1dc76685265af4d3ebad3d7d3efdf2ed5c8c3b978b8->enter($__internal_6f8c59bedec2faebbdcfe1dc76685265af4d3ebad3d7d3efdf2ed5c8c3b978b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        $__internal_6e241a007e0d76207f123625f577380b882801b2b5aa777c28f2d26af3dff5e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e241a007e0d76207f123625f577380b882801b2b5aa777c28f2d26af3dff5e5->enter($__internal_6e241a007e0d76207f123625f577380b882801b2b5aa777c28f2d26af3dff5e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));
=======
        $__internal_c30c793f827cdcc3ea52acb9c41376dbf856394e5a77bb61150a9f1f9d920f44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c30c793f827cdcc3ea52acb9c41376dbf856394e5a77bb61150a9f1f9d920f44->enter($__internal_c30c793f827cdcc3ea52acb9c41376dbf856394e5a77bb61150a9f1f9d920f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        $__internal_92cbbd38f89bf4754857e7d96013f01f05df1f7ba35c5240f9006292aa1fe04f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92cbbd38f89bf4754857e7d96013f01f05df1f7ba35c5240f9006292aa1fe04f->enter($__internal_92cbbd38f89bf4754857e7d96013f01f05df1f7ba35c5240f9006292aa1fe04f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));
>>>>>>> donmanager

        // line 243
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 243, $this->getSourceContext()); })()), "tel")) : ("tel"));
        // line 244
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
<<<<<<< HEAD
        $__internal_6e241a007e0d76207f123625f577380b882801b2b5aa777c28f2d26af3dff5e5->leave($__internal_6e241a007e0d76207f123625f577380b882801b2b5aa777c28f2d26af3dff5e5_prof);

        
        $__internal_6f8c59bedec2faebbdcfe1dc76685265af4d3ebad3d7d3efdf2ed5c8c3b978b8->leave($__internal_6f8c59bedec2faebbdcfe1dc76685265af4d3ebad3d7d3efdf2ed5c8c3b978b8_prof);
=======
        $__internal_92cbbd38f89bf4754857e7d96013f01f05df1f7ba35c5240f9006292aa1fe04f->leave($__internal_92cbbd38f89bf4754857e7d96013f01f05df1f7ba35c5240f9006292aa1fe04f_prof);

        
        $__internal_c30c793f827cdcc3ea52acb9c41376dbf856394e5a77bb61150a9f1f9d920f44->leave($__internal_c30c793f827cdcc3ea52acb9c41376dbf856394e5a77bb61150a9f1f9d920f44_prof);
>>>>>>> donmanager

    }

    // line 247
    public function block_color_widget($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_e59135a7aea18ad414cec59fb88d5d695009defb477b0ed86661465674a67590 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e59135a7aea18ad414cec59fb88d5d695009defb477b0ed86661465674a67590->enter($__internal_e59135a7aea18ad414cec59fb88d5d695009defb477b0ed86661465674a67590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        $__internal_772dc70e8f7f4edea0e8f94d1f9a2f355d83a3e078e285aa02576ec507796cc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_772dc70e8f7f4edea0e8f94d1f9a2f355d83a3e078e285aa02576ec507796cc2->enter($__internal_772dc70e8f7f4edea0e8f94d1f9a2f355d83a3e078e285aa02576ec507796cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));
=======
        $__internal_b00d899b8191e9c1c81d5f5b79e85e56f4f65faf8ecd6924cb07f85588fd00c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b00d899b8191e9c1c81d5f5b79e85e56f4f65faf8ecd6924cb07f85588fd00c7->enter($__internal_b00d899b8191e9c1c81d5f5b79e85e56f4f65faf8ecd6924cb07f85588fd00c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        $__internal_c3371bee5e50b3b0b9f28adb9a1537b9762b129957040034e2367b2e41e94f79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3371bee5e50b3b0b9f28adb9a1537b9762b129957040034e2367b2e41e94f79->enter($__internal_c3371bee5e50b3b0b9f28adb9a1537b9762b129957040034e2367b2e41e94f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));
>>>>>>> donmanager

        // line 248
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 248, $this->getSourceContext()); })()), "color")) : ("color"));
        // line 249
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
<<<<<<< HEAD
        $__internal_772dc70e8f7f4edea0e8f94d1f9a2f355d83a3e078e285aa02576ec507796cc2->leave($__internal_772dc70e8f7f4edea0e8f94d1f9a2f355d83a3e078e285aa02576ec507796cc2_prof);

        
        $__internal_e59135a7aea18ad414cec59fb88d5d695009defb477b0ed86661465674a67590->leave($__internal_e59135a7aea18ad414cec59fb88d5d695009defb477b0ed86661465674a67590_prof);
=======
        $__internal_c3371bee5e50b3b0b9f28adb9a1537b9762b129957040034e2367b2e41e94f79->leave($__internal_c3371bee5e50b3b0b9f28adb9a1537b9762b129957040034e2367b2e41e94f79_prof);

        
        $__internal_b00d899b8191e9c1c81d5f5b79e85e56f4f65faf8ecd6924cb07f85588fd00c7->leave($__internal_b00d899b8191e9c1c81d5f5b79e85e56f4f65faf8ecd6924cb07f85588fd00c7_prof);
>>>>>>> donmanager

    }

    // line 254
    public function block_form_label($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_80229233496a0c06933b7a0f28c3f4c75c54ea133b807a763d4c1c1df50642a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80229233496a0c06933b7a0f28c3f4c75c54ea133b807a763d4c1c1df50642a0->enter($__internal_80229233496a0c06933b7a0f28c3f4c75c54ea133b807a763d4c1c1df50642a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_179692ffcab4a46047be0105971c378cb9715476ae2862a9792b9f9bb5925f54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_179692ffcab4a46047be0105971c378cb9715476ae2862a9792b9f9bb5925f54->enter($__internal_179692ffcab4a46047be0105971c378cb9715476ae2862a9792b9f9bb5925f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));
=======
        $__internal_5f3cadd274962979d10912ae9f2bde2904b3b61cb3382985cb307f1f17f28ddf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f3cadd274962979d10912ae9f2bde2904b3b61cb3382985cb307f1f17f28ddf->enter($__internal_5f3cadd274962979d10912ae9f2bde2904b3b61cb3382985cb307f1f17f28ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_cf6d57092e3ff14a3229c0feccb7dcce7073da78aecebc22e037f67cef4f997b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf6d57092e3ff14a3229c0feccb7dcce7073da78aecebc22e037f67cef4f997b->enter($__internal_cf6d57092e3ff14a3229c0feccb7dcce7073da78aecebc22e037f67cef4f997b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));
>>>>>>> donmanager

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
<<<<<<< HEAD
                $__internal_c0caf71579db51d6dd36149781587eaa399b3e9c9ca4d4b56e7de3a1305fa162 = array("attr" => (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 272, $this->getSourceContext()); })()));
                if (!is_array($__internal_c0caf71579db51d6dd36149781587eaa399b3e9c9ca4d4b56e7de3a1305fa162)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_c0caf71579db51d6dd36149781587eaa399b3e9c9ca4d4b56e7de3a1305fa162);
=======
                $__internal_6a080a7f8e0989b4a5fc0d0fe60cbf2551d9fc002cca99eeee15b53ba7b131d9 = array("attr" => (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 272, $this->getSourceContext()); })()));
                if (!is_array($__internal_6a080a7f8e0989b4a5fc0d0fe60cbf2551d9fc002cca99eeee15b53ba7b131d9)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_6a080a7f8e0989b4a5fc0d0fe60cbf2551d9fc002cca99eeee15b53ba7b131d9);
>>>>>>> donmanager
                $this->displayBlock("attributes", $context, $blocks);
                $context = $context['_parent'];
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 272, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 272, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 272, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 272, $this->getSourceContext()); })())))), "html", null, true);
            echo "</";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 272, $this->getSourceContext()); })()), "label")) : ("label")), "html", null, true);
            echo ">";
        }
        
<<<<<<< HEAD
        $__internal_179692ffcab4a46047be0105971c378cb9715476ae2862a9792b9f9bb5925f54->leave($__internal_179692ffcab4a46047be0105971c378cb9715476ae2862a9792b9f9bb5925f54_prof);

        
        $__internal_80229233496a0c06933b7a0f28c3f4c75c54ea133b807a763d4c1c1df50642a0->leave($__internal_80229233496a0c06933b7a0f28c3f4c75c54ea133b807a763d4c1c1df50642a0_prof);
=======
        $__internal_cf6d57092e3ff14a3229c0feccb7dcce7073da78aecebc22e037f67cef4f997b->leave($__internal_cf6d57092e3ff14a3229c0feccb7dcce7073da78aecebc22e037f67cef4f997b_prof);

        
        $__internal_5f3cadd274962979d10912ae9f2bde2904b3b61cb3382985cb307f1f17f28ddf->leave($__internal_5f3cadd274962979d10912ae9f2bde2904b3b61cb3382985cb307f1f17f28ddf_prof);
>>>>>>> donmanager

    }

    // line 276
    public function block_button_label($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_632a2e7ce80dd340d6e3e213de59283f73e4a42e4dcb7a5b37ad2ae26ab92947 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_632a2e7ce80dd340d6e3e213de59283f73e4a42e4dcb7a5b37ad2ae26ab92947->enter($__internal_632a2e7ce80dd340d6e3e213de59283f73e4a42e4dcb7a5b37ad2ae26ab92947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        $__internal_6e2cde1f3172589135a93bccec86072bf3d53c0e0574a93fe6f0a47def6786a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e2cde1f3172589135a93bccec86072bf3d53c0e0574a93fe6f0a47def6786a2->enter($__internal_6e2cde1f3172589135a93bccec86072bf3d53c0e0574a93fe6f0a47def6786a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_6e2cde1f3172589135a93bccec86072bf3d53c0e0574a93fe6f0a47def6786a2->leave($__internal_6e2cde1f3172589135a93bccec86072bf3d53c0e0574a93fe6f0a47def6786a2_prof);

        
        $__internal_632a2e7ce80dd340d6e3e213de59283f73e4a42e4dcb7a5b37ad2ae26ab92947->leave($__internal_632a2e7ce80dd340d6e3e213de59283f73e4a42e4dcb7a5b37ad2ae26ab92947_prof);
=======
        $__internal_d6027d77c33f807052e2945ff263696717bfbc522d4b4482fa2ad18201d6f106 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6027d77c33f807052e2945ff263696717bfbc522d4b4482fa2ad18201d6f106->enter($__internal_d6027d77c33f807052e2945ff263696717bfbc522d4b4482fa2ad18201d6f106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        $__internal_a9bffc0f5200fd8aa6bd4d3926108f494f7a70b3bf542231eb0e592102d26f42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9bffc0f5200fd8aa6bd4d3926108f494f7a70b3bf542231eb0e592102d26f42->enter($__internal_a9bffc0f5200fd8aa6bd4d3926108f494f7a70b3bf542231eb0e592102d26f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_a9bffc0f5200fd8aa6bd4d3926108f494f7a70b3bf542231eb0e592102d26f42->leave($__internal_a9bffc0f5200fd8aa6bd4d3926108f494f7a70b3bf542231eb0e592102d26f42_prof);

        
        $__internal_d6027d77c33f807052e2945ff263696717bfbc522d4b4482fa2ad18201d6f106->leave($__internal_d6027d77c33f807052e2945ff263696717bfbc522d4b4482fa2ad18201d6f106_prof);
>>>>>>> donmanager

    }

    // line 280
    public function block_repeated_row($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_3598eacacb0f2daaf599861e979e4923714df6ebce795a353c1abce3731b77b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3598eacacb0f2daaf599861e979e4923714df6ebce795a353c1abce3731b77b2->enter($__internal_3598eacacb0f2daaf599861e979e4923714df6ebce795a353c1abce3731b77b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        $__internal_b5b6dda2f5ee9b87fd2d12284337c251f08cefbf6b4c986c3e0c008fffcfd39f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5b6dda2f5ee9b87fd2d12284337c251f08cefbf6b4c986c3e0c008fffcfd39f->enter($__internal_b5b6dda2f5ee9b87fd2d12284337c251f08cefbf6b4c986c3e0c008fffcfd39f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));
=======
        $__internal_699dfcfe6bc38769be5cd136e45f9553652f889bada65152d6382ec7204f69fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_699dfcfe6bc38769be5cd136e45f9553652f889bada65152d6382ec7204f69fd->enter($__internal_699dfcfe6bc38769be5cd136e45f9553652f889bada65152d6382ec7204f69fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        $__internal_46537446540cddf8e2b594ad85ce89dfd5176472ddb4740db06767c3c4b28432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46537446540cddf8e2b594ad85ce89dfd5176472ddb4740db06767c3c4b28432->enter($__internal_46537446540cddf8e2b594ad85ce89dfd5176472ddb4740db06767c3c4b28432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));
>>>>>>> donmanager

        // line 285
        $this->displayBlock("form_rows", $context, $blocks);
        
<<<<<<< HEAD
        $__internal_b5b6dda2f5ee9b87fd2d12284337c251f08cefbf6b4c986c3e0c008fffcfd39f->leave($__internal_b5b6dda2f5ee9b87fd2d12284337c251f08cefbf6b4c986c3e0c008fffcfd39f_prof);

        
        $__internal_3598eacacb0f2daaf599861e979e4923714df6ebce795a353c1abce3731b77b2->leave($__internal_3598eacacb0f2daaf599861e979e4923714df6ebce795a353c1abce3731b77b2_prof);
=======
        $__internal_46537446540cddf8e2b594ad85ce89dfd5176472ddb4740db06767c3c4b28432->leave($__internal_46537446540cddf8e2b594ad85ce89dfd5176472ddb4740db06767c3c4b28432_prof);

        
        $__internal_699dfcfe6bc38769be5cd136e45f9553652f889bada65152d6382ec7204f69fd->leave($__internal_699dfcfe6bc38769be5cd136e45f9553652f889bada65152d6382ec7204f69fd_prof);
>>>>>>> donmanager

    }

    // line 288
    public function block_form_row($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_0437854c937299516ed26d3d2eaa1e2c24fcdd2860b2dc75d17696cab15863d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0437854c937299516ed26d3d2eaa1e2c24fcdd2860b2dc75d17696cab15863d6->enter($__internal_0437854c937299516ed26d3d2eaa1e2c24fcdd2860b2dc75d17696cab15863d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_ed0aec21b57068ab645b6895398ab9fbf9a8a350bdca6306e63665503d3b80b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed0aec21b57068ab645b6895398ab9fbf9a8a350bdca6306e63665503d3b80b8->enter($__internal_ed0aec21b57068ab645b6895398ab9fbf9a8a350bdca6306e63665503d3b80b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));
=======
        $__internal_0bef7a9c1b99922ce0380c5eda0bfd1b62f9ea17cabc8544c39b49caa9b6bca7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bef7a9c1b99922ce0380c5eda0bfd1b62f9ea17cabc8544c39b49caa9b6bca7->enter($__internal_0bef7a9c1b99922ce0380c5eda0bfd1b62f9ea17cabc8544c39b49caa9b6bca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_cfe3a2a9f11677ee506eab4d4d467175584a5830ee78eb11bbe1a38c0a9c7b6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfe3a2a9f11677ee506eab4d4d467175584a5830ee78eb11bbe1a38c0a9c7b6b->enter($__internal_cfe3a2a9f11677ee506eab4d4d467175584a5830ee78eb11bbe1a38c0a9c7b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));
>>>>>>> donmanager

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
        
<<<<<<< HEAD
        $__internal_ed0aec21b57068ab645b6895398ab9fbf9a8a350bdca6306e63665503d3b80b8->leave($__internal_ed0aec21b57068ab645b6895398ab9fbf9a8a350bdca6306e63665503d3b80b8_prof);

        
        $__internal_0437854c937299516ed26d3d2eaa1e2c24fcdd2860b2dc75d17696cab15863d6->leave($__internal_0437854c937299516ed26d3d2eaa1e2c24fcdd2860b2dc75d17696cab15863d6_prof);
=======
        $__internal_cfe3a2a9f11677ee506eab4d4d467175584a5830ee78eb11bbe1a38c0a9c7b6b->leave($__internal_cfe3a2a9f11677ee506eab4d4d467175584a5830ee78eb11bbe1a38c0a9c7b6b_prof);

        
        $__internal_0bef7a9c1b99922ce0380c5eda0bfd1b62f9ea17cabc8544c39b49caa9b6bca7->leave($__internal_0bef7a9c1b99922ce0380c5eda0bfd1b62f9ea17cabc8544c39b49caa9b6bca7_prof);
>>>>>>> donmanager

    }

    // line 296
    public function block_button_row($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_13af8cdca4a2acb36ed32b12ca41d4df2915cb76bc0836309d9ffef0aeb45cfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13af8cdca4a2acb36ed32b12ca41d4df2915cb76bc0836309d9ffef0aeb45cfc->enter($__internal_13af8cdca4a2acb36ed32b12ca41d4df2915cb76bc0836309d9ffef0aeb45cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_bf79e955db0a3bf159b73471a498171dd5fbca61aa99b2ae97cbadad2a393fd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf79e955db0a3bf159b73471a498171dd5fbca61aa99b2ae97cbadad2a393fd5->enter($__internal_bf79e955db0a3bf159b73471a498171dd5fbca61aa99b2ae97cbadad2a393fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));
=======
        $__internal_3b01f55bbe26a724f49a4e4782a28885ad45d0dbf80e4abf185677099ec1a32a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b01f55bbe26a724f49a4e4782a28885ad45d0dbf80e4abf185677099ec1a32a->enter($__internal_3b01f55bbe26a724f49a4e4782a28885ad45d0dbf80e4abf185677099ec1a32a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_45ae6c201310091a87ed03f05d24fbf270594a9ca19322238edae2df75b2bf59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45ae6c201310091a87ed03f05d24fbf270594a9ca19322238edae2df75b2bf59->enter($__internal_45ae6c201310091a87ed03f05d24fbf270594a9ca19322238edae2df75b2bf59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));
>>>>>>> donmanager

        // line 297
        echo "<div>";
        // line 298
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 298, $this->getSourceContext()); })()), 'widget');
        // line 299
        echo "</div>";
        
<<<<<<< HEAD
        $__internal_bf79e955db0a3bf159b73471a498171dd5fbca61aa99b2ae97cbadad2a393fd5->leave($__internal_bf79e955db0a3bf159b73471a498171dd5fbca61aa99b2ae97cbadad2a393fd5_prof);

        
        $__internal_13af8cdca4a2acb36ed32b12ca41d4df2915cb76bc0836309d9ffef0aeb45cfc->leave($__internal_13af8cdca4a2acb36ed32b12ca41d4df2915cb76bc0836309d9ffef0aeb45cfc_prof);
=======
        $__internal_45ae6c201310091a87ed03f05d24fbf270594a9ca19322238edae2df75b2bf59->leave($__internal_45ae6c201310091a87ed03f05d24fbf270594a9ca19322238edae2df75b2bf59_prof);

        
        $__internal_3b01f55bbe26a724f49a4e4782a28885ad45d0dbf80e4abf185677099ec1a32a->leave($__internal_3b01f55bbe26a724f49a4e4782a28885ad45d0dbf80e4abf185677099ec1a32a_prof);
>>>>>>> donmanager

    }

    // line 302
    public function block_hidden_row($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_38e537e77bd0df3a44f83d8941cc1707941b0b1d4f0a98e3fad608f0849fd8b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38e537e77bd0df3a44f83d8941cc1707941b0b1d4f0a98e3fad608f0849fd8b6->enter($__internal_38e537e77bd0df3a44f83d8941cc1707941b0b1d4f0a98e3fad608f0849fd8b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_4393e38b40bc4dc061a1e917d931d59e9d62a889c6ded51bcbd93ee582cc35b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4393e38b40bc4dc061a1e917d931d59e9d62a889c6ded51bcbd93ee582cc35b2->enter($__internal_4393e38b40bc4dc061a1e917d931d59e9d62a889c6ded51bcbd93ee582cc35b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));
=======
        $__internal_237c84c2de00c08c3acf0f5f43aa638086e08b475161e7998b72754463a9f633 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_237c84c2de00c08c3acf0f5f43aa638086e08b475161e7998b72754463a9f633->enter($__internal_237c84c2de00c08c3acf0f5f43aa638086e08b475161e7998b72754463a9f633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_6bdd9d326ce6e1d9fbcc4678c42717601388d3d8ae30140a3621d80046ee766b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bdd9d326ce6e1d9fbcc4678c42717601388d3d8ae30140a3621d80046ee766b->enter($__internal_6bdd9d326ce6e1d9fbcc4678c42717601388d3d8ae30140a3621d80046ee766b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));
>>>>>>> donmanager

        // line 303
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 303, $this->getSourceContext()); })()), 'widget');
        
<<<<<<< HEAD
        $__internal_4393e38b40bc4dc061a1e917d931d59e9d62a889c6ded51bcbd93ee582cc35b2->leave($__internal_4393e38b40bc4dc061a1e917d931d59e9d62a889c6ded51bcbd93ee582cc35b2_prof);

        
        $__internal_38e537e77bd0df3a44f83d8941cc1707941b0b1d4f0a98e3fad608f0849fd8b6->leave($__internal_38e537e77bd0df3a44f83d8941cc1707941b0b1d4f0a98e3fad608f0849fd8b6_prof);
=======
        $__internal_6bdd9d326ce6e1d9fbcc4678c42717601388d3d8ae30140a3621d80046ee766b->leave($__internal_6bdd9d326ce6e1d9fbcc4678c42717601388d3d8ae30140a3621d80046ee766b_prof);

        
        $__internal_237c84c2de00c08c3acf0f5f43aa638086e08b475161e7998b72754463a9f633->leave($__internal_237c84c2de00c08c3acf0f5f43aa638086e08b475161e7998b72754463a9f633_prof);
>>>>>>> donmanager

    }

    // line 308
    public function block_form($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_52ca70d27dee9dffd204552fdb9b46197a0f3fe5223eec8e04d9f23301cbd688 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52ca70d27dee9dffd204552fdb9b46197a0f3fe5223eec8e04d9f23301cbd688->enter($__internal_52ca70d27dee9dffd204552fdb9b46197a0f3fe5223eec8e04d9f23301cbd688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_1eb77bb0b943e89beb6f3f94ad4ef164edd8d79546d39a02bfdc2a0339c757a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eb77bb0b943e89beb6f3f94ad4ef164edd8d79546d39a02bfdc2a0339c757a3->enter($__internal_1eb77bb0b943e89beb6f3f94ad4ef164edd8d79546d39a02bfdc2a0339c757a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));
=======
        $__internal_1b40695f1cdbbdb6680e60ec5609a93d358b9befc328d11a6b3176ba5a4f8a72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b40695f1cdbbdb6680e60ec5609a93d358b9befc328d11a6b3176ba5a4f8a72->enter($__internal_1b40695f1cdbbdb6680e60ec5609a93d358b9befc328d11a6b3176ba5a4f8a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_afc8f7b8716b3768a58209e759d2e4dd64774138b6402b1a145be4b552d516ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afc8f7b8716b3768a58209e759d2e4dd64774138b6402b1a145be4b552d516ea->enter($__internal_afc8f7b8716b3768a58209e759d2e4dd64774138b6402b1a145be4b552d516ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));
>>>>>>> donmanager

        // line 309
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 309, $this->getSourceContext()); })()), 'form_start');
        // line 310
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 310, $this->getSourceContext()); })()), 'widget');
        // line 311
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 311, $this->getSourceContext()); })()), 'form_end');
        
<<<<<<< HEAD
        $__internal_1eb77bb0b943e89beb6f3f94ad4ef164edd8d79546d39a02bfdc2a0339c757a3->leave($__internal_1eb77bb0b943e89beb6f3f94ad4ef164edd8d79546d39a02bfdc2a0339c757a3_prof);

        
        $__internal_52ca70d27dee9dffd204552fdb9b46197a0f3fe5223eec8e04d9f23301cbd688->leave($__internal_52ca70d27dee9dffd204552fdb9b46197a0f3fe5223eec8e04d9f23301cbd688_prof);
=======
        $__internal_afc8f7b8716b3768a58209e759d2e4dd64774138b6402b1a145be4b552d516ea->leave($__internal_afc8f7b8716b3768a58209e759d2e4dd64774138b6402b1a145be4b552d516ea_prof);

        
        $__internal_1b40695f1cdbbdb6680e60ec5609a93d358b9befc328d11a6b3176ba5a4f8a72->leave($__internal_1b40695f1cdbbdb6680e60ec5609a93d358b9befc328d11a6b3176ba5a4f8a72_prof);
>>>>>>> donmanager

    }

    // line 314
    public function block_form_start($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_0a4ed7ee28400c324307aea14162f11890e2038a53a05850ddc217587dc56d08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a4ed7ee28400c324307aea14162f11890e2038a53a05850ddc217587dc56d08->enter($__internal_0a4ed7ee28400c324307aea14162f11890e2038a53a05850ddc217587dc56d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_cab7004e3b7bb832e571b335f72f3a37bc8f0e6c2034ef7fb35f778acaf05e13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cab7004e3b7bb832e571b335f72f3a37bc8f0e6c2034ef7fb35f778acaf05e13->enter($__internal_cab7004e3b7bb832e571b335f72f3a37bc8f0e6c2034ef7fb35f778acaf05e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));
=======
        $__internal_a3f629e880bf00a14042444c38f70e931ae241c9159bc2f1b9767b9003a00b10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3f629e880bf00a14042444c38f70e931ae241c9159bc2f1b9767b9003a00b10->enter($__internal_a3f629e880bf00a14042444c38f70e931ae241c9159bc2f1b9767b9003a00b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_dd1bc90f9a2bee65d32d8cd63c688708ef9ddbdd2d64e1ee8482af565b15b684 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd1bc90f9a2bee65d32d8cd63c688708ef9ddbdd2d64e1ee8482af565b15b684->enter($__internal_dd1bc90f9a2bee65d32d8cd63c688708ef9ddbdd2d64e1ee8482af565b15b684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));
>>>>>>> donmanager

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
        
<<<<<<< HEAD
        $__internal_cab7004e3b7bb832e571b335f72f3a37bc8f0e6c2034ef7fb35f778acaf05e13->leave($__internal_cab7004e3b7bb832e571b335f72f3a37bc8f0e6c2034ef7fb35f778acaf05e13_prof);

        
        $__internal_0a4ed7ee28400c324307aea14162f11890e2038a53a05850ddc217587dc56d08->leave($__internal_0a4ed7ee28400c324307aea14162f11890e2038a53a05850ddc217587dc56d08_prof);
=======
        $__internal_dd1bc90f9a2bee65d32d8cd63c688708ef9ddbdd2d64e1ee8482af565b15b684->leave($__internal_dd1bc90f9a2bee65d32d8cd63c688708ef9ddbdd2d64e1ee8482af565b15b684_prof);

        
        $__internal_a3f629e880bf00a14042444c38f70e931ae241c9159bc2f1b9767b9003a00b10->leave($__internal_a3f629e880bf00a14042444c38f70e931ae241c9159bc2f1b9767b9003a00b10_prof);
>>>>>>> donmanager

    }

    // line 328
    public function block_form_end($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_f2972517090f5baf6ca2af5b7d26cd3456150e18bea23db876bd0762605c74e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2972517090f5baf6ca2af5b7d26cd3456150e18bea23db876bd0762605c74e5->enter($__internal_f2972517090f5baf6ca2af5b7d26cd3456150e18bea23db876bd0762605c74e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        $__internal_309b3d1b4d8971793417af2c66f369871059f0457c151faacbdc49cb5d0b1ef5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_309b3d1b4d8971793417af2c66f369871059f0457c151faacbdc49cb5d0b1ef5->enter($__internal_309b3d1b4d8971793417af2c66f369871059f0457c151faacbdc49cb5d0b1ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));
=======
        $__internal_cf5668f88e8fee3ca9446311ee1ec5ad188a1bb8ec308a476ed211b96e0339ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf5668f88e8fee3ca9446311ee1ec5ad188a1bb8ec308a476ed211b96e0339ad->enter($__internal_cf5668f88e8fee3ca9446311ee1ec5ad188a1bb8ec308a476ed211b96e0339ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        $__internal_9ceca99f63784124f393a2ceaa9c9e25d37a34b5db98f27454fd04b823ce7ddb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ceca99f63784124f393a2ceaa9c9e25d37a34b5db98f27454fd04b823ce7ddb->enter($__internal_9ceca99f63784124f393a2ceaa9c9e25d37a34b5db98f27454fd04b823ce7ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));
>>>>>>> donmanager

        // line 329
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) || array_key_exists("render_rest", $context) ? $context["render_rest"] : (function () { throw new Twig_Error_Runtime('Variable "render_rest" does not exist.', 329, $this->getSourceContext()); })()))) {
            // line 330
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 330, $this->getSourceContext()); })()), 'rest');
        }
        // line 332
        echo "</form>";
        
<<<<<<< HEAD
        $__internal_309b3d1b4d8971793417af2c66f369871059f0457c151faacbdc49cb5d0b1ef5->leave($__internal_309b3d1b4d8971793417af2c66f369871059f0457c151faacbdc49cb5d0b1ef5_prof);

        
        $__internal_f2972517090f5baf6ca2af5b7d26cd3456150e18bea23db876bd0762605c74e5->leave($__internal_f2972517090f5baf6ca2af5b7d26cd3456150e18bea23db876bd0762605c74e5_prof);
=======
        $__internal_9ceca99f63784124f393a2ceaa9c9e25d37a34b5db98f27454fd04b823ce7ddb->leave($__internal_9ceca99f63784124f393a2ceaa9c9e25d37a34b5db98f27454fd04b823ce7ddb_prof);

        
        $__internal_cf5668f88e8fee3ca9446311ee1ec5ad188a1bb8ec308a476ed211b96e0339ad->leave($__internal_cf5668f88e8fee3ca9446311ee1ec5ad188a1bb8ec308a476ed211b96e0339ad_prof);
>>>>>>> donmanager

    }

    // line 335
    public function block_form_errors($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_baea3aa11989827c93da6dccadcfe9ab6362a77cfa5bea5d71929d211c6538ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baea3aa11989827c93da6dccadcfe9ab6362a77cfa5bea5d71929d211c6538ad->enter($__internal_baea3aa11989827c93da6dccadcfe9ab6362a77cfa5bea5d71929d211c6538ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_3d6a21d5d634f163ffc9c776e3eb2c21da3e832013a82bd02b77a6d668a712ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d6a21d5d634f163ffc9c776e3eb2c21da3e832013a82bd02b77a6d668a712ed->enter($__internal_3d6a21d5d634f163ffc9c776e3eb2c21da3e832013a82bd02b77a6d668a712ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));
=======
        $__internal_b43b7aa9b3082fff9fbcf5563f79b27315331198d00e2d07961e77a49d8d3852 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b43b7aa9b3082fff9fbcf5563f79b27315331198d00e2d07961e77a49d8d3852->enter($__internal_b43b7aa9b3082fff9fbcf5563f79b27315331198d00e2d07961e77a49d8d3852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_7569fd55dde1b0a74ee1e426d7ce2b98f53dc0ccdbacdc1519521068ff05a6ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7569fd55dde1b0a74ee1e426d7ce2b98f53dc0ccdbacdc1519521068ff05a6ae->enter($__internal_7569fd55dde1b0a74ee1e426d7ce2b98f53dc0ccdbacdc1519521068ff05a6ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));
>>>>>>> donmanager

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
        
<<<<<<< HEAD
        $__internal_3d6a21d5d634f163ffc9c776e3eb2c21da3e832013a82bd02b77a6d668a712ed->leave($__internal_3d6a21d5d634f163ffc9c776e3eb2c21da3e832013a82bd02b77a6d668a712ed_prof);

        
        $__internal_baea3aa11989827c93da6dccadcfe9ab6362a77cfa5bea5d71929d211c6538ad->leave($__internal_baea3aa11989827c93da6dccadcfe9ab6362a77cfa5bea5d71929d211c6538ad_prof);
=======
        $__internal_7569fd55dde1b0a74ee1e426d7ce2b98f53dc0ccdbacdc1519521068ff05a6ae->leave($__internal_7569fd55dde1b0a74ee1e426d7ce2b98f53dc0ccdbacdc1519521068ff05a6ae_prof);

        
        $__internal_b43b7aa9b3082fff9fbcf5563f79b27315331198d00e2d07961e77a49d8d3852->leave($__internal_b43b7aa9b3082fff9fbcf5563f79b27315331198d00e2d07961e77a49d8d3852_prof);
>>>>>>> donmanager

    }

    // line 345
    public function block_form_rest($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_b956274cb88c62b87d700570fa3f4cb14b6ccde76926cc2e911bb3258000879b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b956274cb88c62b87d700570fa3f4cb14b6ccde76926cc2e911bb3258000879b->enter($__internal_b956274cb88c62b87d700570fa3f4cb14b6ccde76926cc2e911bb3258000879b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        $__internal_dd08a5ed3109844735ab2413a617c576f2ece3467a2c0db097a5a9a635a817bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd08a5ed3109844735ab2413a617c576f2ece3467a2c0db097a5a9a635a817bb->enter($__internal_dd08a5ed3109844735ab2413a617c576f2ece3467a2c0db097a5a9a635a817bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));
=======
        $__internal_c1c1145d0aa7bb2916c85d5977809db91c60ce92a18aacb0a37ac4d8cf0656e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1c1145d0aa7bb2916c85d5977809db91c60ce92a18aacb0a37ac4d8cf0656e5->enter($__internal_c1c1145d0aa7bb2916c85d5977809db91c60ce92a18aacb0a37ac4d8cf0656e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        $__internal_23c6711c2b7cdf93f2a3a9d1b30d2181cbcc2e9ec2c0e6eb9ca33e01d6a0b14a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23c6711c2b7cdf93f2a3a9d1b30d2181cbcc2e9ec2c0e6eb9ca33e01d6a0b14a->enter($__internal_23c6711c2b7cdf93f2a3a9d1b30d2181cbcc2e9ec2c0e6eb9ca33e01d6a0b14a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));
>>>>>>> donmanager

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
        
<<<<<<< HEAD
        $__internal_dd08a5ed3109844735ab2413a617c576f2ece3467a2c0db097a5a9a635a817bb->leave($__internal_dd08a5ed3109844735ab2413a617c576f2ece3467a2c0db097a5a9a635a817bb_prof);

        
        $__internal_b956274cb88c62b87d700570fa3f4cb14b6ccde76926cc2e911bb3258000879b->leave($__internal_b956274cb88c62b87d700570fa3f4cb14b6ccde76926cc2e911bb3258000879b_prof);
=======
        $__internal_23c6711c2b7cdf93f2a3a9d1b30d2181cbcc2e9ec2c0e6eb9ca33e01d6a0b14a->leave($__internal_23c6711c2b7cdf93f2a3a9d1b30d2181cbcc2e9ec2c0e6eb9ca33e01d6a0b14a_prof);

        
        $__internal_c1c1145d0aa7bb2916c85d5977809db91c60ce92a18aacb0a37ac4d8cf0656e5->leave($__internal_c1c1145d0aa7bb2916c85d5977809db91c60ce92a18aacb0a37ac4d8cf0656e5_prof);
>>>>>>> donmanager

    }

    // line 369
    public function block_form_rows($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_6869c8ae6093a4aa1a277866f52e62feaca542b86ff9b7b1c7b74945983caedf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6869c8ae6093a4aa1a277866f52e62feaca542b86ff9b7b1c7b74945983caedf->enter($__internal_6869c8ae6093a4aa1a277866f52e62feaca542b86ff9b7b1c7b74945983caedf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        $__internal_f922eb8a79964612e5f454afcdcaa54ce4479bbe344794435860b07fc87f2dc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f922eb8a79964612e5f454afcdcaa54ce4479bbe344794435860b07fc87f2dc5->enter($__internal_f922eb8a79964612e5f454afcdcaa54ce4479bbe344794435860b07fc87f2dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));
=======
        $__internal_5f3a36171721940e9527b28789a192b5317da8deec5c2b65df3e709b47ff5b9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f3a36171721940e9527b28789a192b5317da8deec5c2b65df3e709b47ff5b9e->enter($__internal_5f3a36171721940e9527b28789a192b5317da8deec5c2b65df3e709b47ff5b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        $__internal_5200a37d5cf57beeb912f29ba87ea429f12b066aabdce22a02b865e0a50deee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5200a37d5cf57beeb912f29ba87ea429f12b066aabdce22a02b865e0a50deee1->enter($__internal_5200a37d5cf57beeb912f29ba87ea429f12b066aabdce22a02b865e0a50deee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));
>>>>>>> donmanager

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
        
<<<<<<< HEAD
        $__internal_f922eb8a79964612e5f454afcdcaa54ce4479bbe344794435860b07fc87f2dc5->leave($__internal_f922eb8a79964612e5f454afcdcaa54ce4479bbe344794435860b07fc87f2dc5_prof);

        
        $__internal_6869c8ae6093a4aa1a277866f52e62feaca542b86ff9b7b1c7b74945983caedf->leave($__internal_6869c8ae6093a4aa1a277866f52e62feaca542b86ff9b7b1c7b74945983caedf_prof);
=======
        $__internal_5200a37d5cf57beeb912f29ba87ea429f12b066aabdce22a02b865e0a50deee1->leave($__internal_5200a37d5cf57beeb912f29ba87ea429f12b066aabdce22a02b865e0a50deee1_prof);

        
        $__internal_5f3a36171721940e9527b28789a192b5317da8deec5c2b65df3e709b47ff5b9e->leave($__internal_5f3a36171721940e9527b28789a192b5317da8deec5c2b65df3e709b47ff5b9e_prof);
>>>>>>> donmanager

    }

    // line 375
    public function block_widget_attributes($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_b5cb8906c4dbc33aae0ebc8e9d45396b09702c57632578717afb153e8261e96f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5cb8906c4dbc33aae0ebc8e9d45396b09702c57632578717afb153e8261e96f->enter($__internal_b5cb8906c4dbc33aae0ebc8e9d45396b09702c57632578717afb153e8261e96f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_c440cf36c61b1d93b0c2e51df9e7a73fac5a220a891a51c87c17c8c612e6670e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c440cf36c61b1d93b0c2e51df9e7a73fac5a220a891a51c87c17c8c612e6670e->enter($__internal_c440cf36c61b1d93b0c2e51df9e7a73fac5a220a891a51c87c17c8c612e6670e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));
=======
        $__internal_076eae56977271d1a0a484f1ffa1c2fd53af46b1b10fc23774b70a4d0f4882cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_076eae56977271d1a0a484f1ffa1c2fd53af46b1b10fc23774b70a4d0f4882cc->enter($__internal_076eae56977271d1a0a484f1ffa1c2fd53af46b1b10fc23774b70a4d0f4882cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_52aa71c0b2ed16d62518aee158490406e13534a025c1dc2e5f6f9d690b9e9863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52aa71c0b2ed16d62518aee158490406e13534a025c1dc2e5f6f9d690b9e9863->enter($__internal_52aa71c0b2ed16d62518aee158490406e13534a025c1dc2e5f6f9d690b9e9863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));
>>>>>>> donmanager

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
        
<<<<<<< HEAD
        $__internal_c440cf36c61b1d93b0c2e51df9e7a73fac5a220a891a51c87c17c8c612e6670e->leave($__internal_c440cf36c61b1d93b0c2e51df9e7a73fac5a220a891a51c87c17c8c612e6670e_prof);

        
        $__internal_b5cb8906c4dbc33aae0ebc8e9d45396b09702c57632578717afb153e8261e96f->leave($__internal_b5cb8906c4dbc33aae0ebc8e9d45396b09702c57632578717afb153e8261e96f_prof);
=======
        $__internal_52aa71c0b2ed16d62518aee158490406e13534a025c1dc2e5f6f9d690b9e9863->leave($__internal_52aa71c0b2ed16d62518aee158490406e13534a025c1dc2e5f6f9d690b9e9863_prof);

        
        $__internal_076eae56977271d1a0a484f1ffa1c2fd53af46b1b10fc23774b70a4d0f4882cc->leave($__internal_076eae56977271d1a0a484f1ffa1c2fd53af46b1b10fc23774b70a4d0f4882cc_prof);
>>>>>>> donmanager

    }

    // line 382
    public function block_widget_container_attributes($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_9d9034b4ca81e4ee057f7053ed0dbc7b058c8c878022bbd10c270b08bd3f9699 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d9034b4ca81e4ee057f7053ed0dbc7b058c8c878022bbd10c270b08bd3f9699->enter($__internal_9d9034b4ca81e4ee057f7053ed0dbc7b058c8c878022bbd10c270b08bd3f9699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        $__internal_c9439bb0e68c06a77cabd08ba2149bf4b9d4c10e8f657c56d1ded65877f7316e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9439bb0e68c06a77cabd08ba2149bf4b9d4c10e8f657c56d1ded65877f7316e->enter($__internal_c9439bb0e68c06a77cabd08ba2149bf4b9d4c10e8f657c56d1ded65877f7316e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));
=======
        $__internal_708c86cc903747d16ad9a2aa1085310c03dbd4967b431487b8bf64aa9d5df3d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_708c86cc903747d16ad9a2aa1085310c03dbd4967b431487b8bf64aa9d5df3d0->enter($__internal_708c86cc903747d16ad9a2aa1085310c03dbd4967b431487b8bf64aa9d5df3d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        $__internal_5a483607cf8bdf92d3e2bc2fc1d9bf8bf49bb4da931bd04eb8f7b6b7c00e943a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a483607cf8bdf92d3e2bc2fc1d9bf8bf49bb4da931bd04eb8f7b6b7c00e943a->enter($__internal_5a483607cf8bdf92d3e2bc2fc1d9bf8bf49bb4da931bd04eb8f7b6b7c00e943a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));
>>>>>>> donmanager

        // line 383
        if ( !twig_test_empty((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 383, $this->getSourceContext()); })()))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 383, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        // line 384
        $this->displayBlock("attributes", $context, $blocks);
        
<<<<<<< HEAD
        $__internal_c9439bb0e68c06a77cabd08ba2149bf4b9d4c10e8f657c56d1ded65877f7316e->leave($__internal_c9439bb0e68c06a77cabd08ba2149bf4b9d4c10e8f657c56d1ded65877f7316e_prof);

        
        $__internal_9d9034b4ca81e4ee057f7053ed0dbc7b058c8c878022bbd10c270b08bd3f9699->leave($__internal_9d9034b4ca81e4ee057f7053ed0dbc7b058c8c878022bbd10c270b08bd3f9699_prof);
=======
        $__internal_5a483607cf8bdf92d3e2bc2fc1d9bf8bf49bb4da931bd04eb8f7b6b7c00e943a->leave($__internal_5a483607cf8bdf92d3e2bc2fc1d9bf8bf49bb4da931bd04eb8f7b6b7c00e943a_prof);

        
        $__internal_708c86cc903747d16ad9a2aa1085310c03dbd4967b431487b8bf64aa9d5df3d0->leave($__internal_708c86cc903747d16ad9a2aa1085310c03dbd4967b431487b8bf64aa9d5df3d0_prof);
>>>>>>> donmanager

    }

    // line 387
    public function block_button_attributes($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_c388bc8a330b7cdc7572c0cf0ecdc1d5e9f391f6eff2793c564487d2cb6344c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c388bc8a330b7cdc7572c0cf0ecdc1d5e9f391f6eff2793c564487d2cb6344c6->enter($__internal_c388bc8a330b7cdc7572c0cf0ecdc1d5e9f391f6eff2793c564487d2cb6344c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        $__internal_309c6bebd8a0ae5c904c976cb0ed737f1af2d79eea5b8f610506cd623c95a630 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_309c6bebd8a0ae5c904c976cb0ed737f1af2d79eea5b8f610506cd623c95a630->enter($__internal_309c6bebd8a0ae5c904c976cb0ed737f1af2d79eea5b8f610506cd623c95a630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));
=======
        $__internal_f4f47ea75826f3a74b4a674c26be3e1703f29c526d4fb39f8997bcfa3b3d74cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4f47ea75826f3a74b4a674c26be3e1703f29c526d4fb39f8997bcfa3b3d74cf->enter($__internal_f4f47ea75826f3a74b4a674c26be3e1703f29c526d4fb39f8997bcfa3b3d74cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        $__internal_14a9ced60b9347256c9b63410544beda7700a913fb564f6d8d1bb07146f66642 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14a9ced60b9347256c9b63410544beda7700a913fb564f6d8d1bb07146f66642->enter($__internal_14a9ced60b9347256c9b63410544beda7700a913fb564f6d8d1bb07146f66642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));
>>>>>>> donmanager

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
        
<<<<<<< HEAD
        $__internal_309c6bebd8a0ae5c904c976cb0ed737f1af2d79eea5b8f610506cd623c95a630->leave($__internal_309c6bebd8a0ae5c904c976cb0ed737f1af2d79eea5b8f610506cd623c95a630_prof);

        
        $__internal_c388bc8a330b7cdc7572c0cf0ecdc1d5e9f391f6eff2793c564487d2cb6344c6->leave($__internal_c388bc8a330b7cdc7572c0cf0ecdc1d5e9f391f6eff2793c564487d2cb6344c6_prof);
=======
        $__internal_14a9ced60b9347256c9b63410544beda7700a913fb564f6d8d1bb07146f66642->leave($__internal_14a9ced60b9347256c9b63410544beda7700a913fb564f6d8d1bb07146f66642_prof);

        
        $__internal_f4f47ea75826f3a74b4a674c26be3e1703f29c526d4fb39f8997bcfa3b3d74cf->leave($__internal_f4f47ea75826f3a74b4a674c26be3e1703f29c526d4fb39f8997bcfa3b3d74cf_prof);
>>>>>>> donmanager

    }

    // line 392
    public function block_attributes($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_ccde2c586cc2f0efa39d2f8631f4c2daa029cd013cef8e5a6c4352e53fdc2d66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccde2c586cc2f0efa39d2f8631f4c2daa029cd013cef8e5a6c4352e53fdc2d66->enter($__internal_ccde2c586cc2f0efa39d2f8631f4c2daa029cd013cef8e5a6c4352e53fdc2d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        $__internal_69dfea498f7c236c8bbad585e836b0b92d920c986b14b20f855509faede0dd82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69dfea498f7c236c8bbad585e836b0b92d920c986b14b20f855509faede0dd82->enter($__internal_69dfea498f7c236c8bbad585e836b0b92d920c986b14b20f855509faede0dd82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));
=======
        $__internal_f29d0da547fdbe38c8ad4a2065df10ea33fbaeb2377193c31f48a08a5a7d0591 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f29d0da547fdbe38c8ad4a2065df10ea33fbaeb2377193c31f48a08a5a7d0591->enter($__internal_f29d0da547fdbe38c8ad4a2065df10ea33fbaeb2377193c31f48a08a5a7d0591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        $__internal_cf5399df1309a2cb5d7e44719113c7e1dbc158ead19237846057dc68708472a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf5399df1309a2cb5d7e44719113c7e1dbc158ead19237846057dc68708472a2->enter($__internal_cf5399df1309a2cb5d7e44719113c7e1dbc158ead19237846057dc68708472a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));
>>>>>>> donmanager

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
        
<<<<<<< HEAD
        $__internal_69dfea498f7c236c8bbad585e836b0b92d920c986b14b20f855509faede0dd82->leave($__internal_69dfea498f7c236c8bbad585e836b0b92d920c986b14b20f855509faede0dd82_prof);

        
        $__internal_ccde2c586cc2f0efa39d2f8631f4c2daa029cd013cef8e5a6c4352e53fdc2d66->leave($__internal_ccde2c586cc2f0efa39d2f8631f4c2daa029cd013cef8e5a6c4352e53fdc2d66_prof);
=======
        $__internal_cf5399df1309a2cb5d7e44719113c7e1dbc158ead19237846057dc68708472a2->leave($__internal_cf5399df1309a2cb5d7e44719113c7e1dbc158ead19237846057dc68708472a2_prof);

        
        $__internal_f29d0da547fdbe38c8ad4a2065df10ea33fbaeb2377193c31f48a08a5a7d0591->leave($__internal_f29d0da547fdbe38c8ad4a2065df10ea33fbaeb2377193c31f48a08a5a7d0591_prof);
>>>>>>> donmanager

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
<<<<<<< HEAD
", "form_div_layout.html.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\form_div_layout.html.twig");
=======
", "form_div_layout.html.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\form_div_layout.html.twig");
>>>>>>> donmanager
    }
}
