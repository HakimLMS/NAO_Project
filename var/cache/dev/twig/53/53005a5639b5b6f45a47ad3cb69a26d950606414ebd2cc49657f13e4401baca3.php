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
        $__internal_81c332f57570418f11ab8cd5080450f86578726aa63d51ef927801befe7edf90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81c332f57570418f11ab8cd5080450f86578726aa63d51ef927801befe7edf90->enter($__internal_81c332f57570418f11ab8cd5080450f86578726aa63d51ef927801befe7edf90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        $__internal_a68906071d9df11079e01e28c3e02457ca02a9912f1a2e4fd13a9e1f203423b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a68906071d9df11079e01e28c3e02457ca02a9912f1a2e4fd13a9e1f203423b2->enter($__internal_a68906071d9df11079e01e28c3e02457ca02a9912f1a2e4fd13a9e1f203423b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

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
        
        $__internal_81c332f57570418f11ab8cd5080450f86578726aa63d51ef927801befe7edf90->leave($__internal_81c332f57570418f11ab8cd5080450f86578726aa63d51ef927801befe7edf90_prof);

        
        $__internal_a68906071d9df11079e01e28c3e02457ca02a9912f1a2e4fd13a9e1f203423b2->leave($__internal_a68906071d9df11079e01e28c3e02457ca02a9912f1a2e4fd13a9e1f203423b2_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_1a2e053894fc7d78f4d77258bf0051b04b4171a3372a2c80f454e23f73b001a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a2e053894fc7d78f4d77258bf0051b04b4171a3372a2c80f454e23f73b001a4->enter($__internal_1a2e053894fc7d78f4d77258bf0051b04b4171a3372a2c80f454e23f73b001a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_ac7f5901be50cea1c907de46e23b6d0b4dc68d878699ca7745fb50dfd97bb26d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac7f5901be50cea1c907de46e23b6d0b4dc68d878699ca7745fb50dfd97bb26d->enter($__internal_ac7f5901be50cea1c907de46e23b6d0b4dc68d878699ca7745fb50dfd97bb26d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if ((isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 4, $this->getSourceContext()); })())) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_ac7f5901be50cea1c907de46e23b6d0b4dc68d878699ca7745fb50dfd97bb26d->leave($__internal_ac7f5901be50cea1c907de46e23b6d0b4dc68d878699ca7745fb50dfd97bb26d_prof);

        
        $__internal_1a2e053894fc7d78f4d77258bf0051b04b4171a3372a2c80f454e23f73b001a4->leave($__internal_1a2e053894fc7d78f4d77258bf0051b04b4171a3372a2c80f454e23f73b001a4_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_20887d26d464315f2e375c376a59735fdcece0e5ac5a79f5fc036ddff42c5a76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20887d26d464315f2e375c376a59735fdcece0e5ac5a79f5fc036ddff42c5a76->enter($__internal_20887d26d464315f2e375c376a59735fdcece0e5ac5a79f5fc036ddff42c5a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_75bd3bc5899d2e5b40afe0267b3a15c1e992d014816e48819853c6ff431ff3cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75bd3bc5899d2e5b40afe0267b3a15c1e992d014816e48819853c6ff431ff3cd->enter($__internal_75bd3bc5899d2e5b40afe0267b3a15c1e992d014816e48819853c6ff431ff3cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

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
        
        $__internal_75bd3bc5899d2e5b40afe0267b3a15c1e992d014816e48819853c6ff431ff3cd->leave($__internal_75bd3bc5899d2e5b40afe0267b3a15c1e992d014816e48819853c6ff431ff3cd_prof);

        
        $__internal_20887d26d464315f2e375c376a59735fdcece0e5ac5a79f5fc036ddff42c5a76->leave($__internal_20887d26d464315f2e375c376a59735fdcece0e5ac5a79f5fc036ddff42c5a76_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_29bba4812db07ef758852aa8700cb1df0b6e7faac517a13e83dfbd8db36b255a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29bba4812db07ef758852aa8700cb1df0b6e7faac517a13e83dfbd8db36b255a->enter($__internal_29bba4812db07ef758852aa8700cb1df0b6e7faac517a13e83dfbd8db36b255a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_a409584b0a32e0205bd5229e024673112a731a10eb82a2fcf330484153f7a0d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a409584b0a32e0205bd5229e024673112a731a10eb82a2fcf330484153f7a0d6->enter($__internal_a409584b0a32e0205bd5229e024673112a731a10eb82a2fcf330484153f7a0d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_a409584b0a32e0205bd5229e024673112a731a10eb82a2fcf330484153f7a0d6->leave($__internal_a409584b0a32e0205bd5229e024673112a731a10eb82a2fcf330484153f7a0d6_prof);

        
        $__internal_29bba4812db07ef758852aa8700cb1df0b6e7faac517a13e83dfbd8db36b255a->leave($__internal_29bba4812db07ef758852aa8700cb1df0b6e7faac517a13e83dfbd8db36b255a_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_e2adc9bbe6fb128efe319cbd2778c6d5ad240beec65e117879f12e17b4cebe48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2adc9bbe6fb128efe319cbd2778c6d5ad240beec65e117879f12e17b4cebe48->enter($__internal_e2adc9bbe6fb128efe319cbd2778c6d5ad240beec65e117879f12e17b4cebe48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_36130c654ed92518922fd086a3dc6927cfbf73411ef23fed343176cc13e7758d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36130c654ed92518922fd086a3dc6927cfbf73411ef23fed343176cc13e7758d->enter($__internal_36130c654ed92518922fd086a3dc6927cfbf73411ef23fed343176cc13e7758d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 28, $this->getSourceContext()); })()), array("data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new Twig_Error_Runtime('Variable "prototype" does not exist.', 28, $this->getSourceContext()); })()), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_36130c654ed92518922fd086a3dc6927cfbf73411ef23fed343176cc13e7758d->leave($__internal_36130c654ed92518922fd086a3dc6927cfbf73411ef23fed343176cc13e7758d_prof);

        
        $__internal_e2adc9bbe6fb128efe319cbd2778c6d5ad240beec65e117879f12e17b4cebe48->leave($__internal_e2adc9bbe6fb128efe319cbd2778c6d5ad240beec65e117879f12e17b4cebe48_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_3594d7f17ec3aef52118f61d6f61f88a538c2bea3bcf17bc5c8ef0ce5753d385 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3594d7f17ec3aef52118f61d6f61f88a538c2bea3bcf17bc5c8ef0ce5753d385->enter($__internal_3594d7f17ec3aef52118f61d6f61f88a538c2bea3bcf17bc5c8ef0ce5753d385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_dffe89f4174c9eac138dda69ef4571d4f3b63c6ce5b5c8ad37e46a5b12d54253 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dffe89f4174c9eac138dda69ef4571d4f3b63c6ce5b5c8ad37e46a5b12d54253->enter($__internal_dffe89f4174c9eac138dda69ef4571d4f3b63c6ce5b5c8ad37e46a5b12d54253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 34, $this->getSourceContext()); })()), "html", null, true);
        echo "</textarea>";
        
        $__internal_dffe89f4174c9eac138dda69ef4571d4f3b63c6ce5b5c8ad37e46a5b12d54253->leave($__internal_dffe89f4174c9eac138dda69ef4571d4f3b63c6ce5b5c8ad37e46a5b12d54253_prof);

        
        $__internal_3594d7f17ec3aef52118f61d6f61f88a538c2bea3bcf17bc5c8ef0ce5753d385->leave($__internal_3594d7f17ec3aef52118f61d6f61f88a538c2bea3bcf17bc5c8ef0ce5753d385_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_97dc61685c19122a49ee2b51f7aae10800a6e19fb7b8a6f298b4d76d2ad34f39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97dc61685c19122a49ee2b51f7aae10800a6e19fb7b8a6f298b4d76d2ad34f39->enter($__internal_97dc61685c19122a49ee2b51f7aae10800a6e19fb7b8a6f298b4d76d2ad34f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        $__internal_efe455b4c7fc34664a38c039812c858e66213732c2375d80227cc5555deea803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efe455b4c7fc34664a38c039812c858e66213732c2375d80227cc5555deea803->enter($__internal_efe455b4c7fc34664a38c039812c858e66213732c2375d80227cc5555deea803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if ((isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 38, $this->getSourceContext()); })())) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_efe455b4c7fc34664a38c039812c858e66213732c2375d80227cc5555deea803->leave($__internal_efe455b4c7fc34664a38c039812c858e66213732c2375d80227cc5555deea803_prof);

        
        $__internal_97dc61685c19122a49ee2b51f7aae10800a6e19fb7b8a6f298b4d76d2ad34f39->leave($__internal_97dc61685c19122a49ee2b51f7aae10800a6e19fb7b8a6f298b4d76d2ad34f39_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_b7776a447e490a7c0ac2d74c38882c839e58d74ae61fa43a69a65b2ff486188b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7776a447e490a7c0ac2d74c38882c839e58d74ae61fa43a69a65b2ff486188b->enter($__internal_b7776a447e490a7c0ac2d74c38882c839e58d74ae61fa43a69a65b2ff486188b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_f8183bf8ed0be97460de09de91947ca9096b12409c4ce8d64d09b63fc4465821 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8183bf8ed0be97460de09de91947ca9096b12409c4ce8d64d09b63fc4465821->enter($__internal_f8183bf8ed0be97460de09de91947ca9096b12409c4ce8d64d09b63fc4465821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_f8183bf8ed0be97460de09de91947ca9096b12409c4ce8d64d09b63fc4465821->leave($__internal_f8183bf8ed0be97460de09de91947ca9096b12409c4ce8d64d09b63fc4465821_prof);

        
        $__internal_b7776a447e490a7c0ac2d74c38882c839e58d74ae61fa43a69a65b2ff486188b->leave($__internal_b7776a447e490a7c0ac2d74c38882c839e58d74ae61fa43a69a65b2ff486188b_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_99702f7cd76e5115c194769606f0dc874f7b3005f4dddd305f4b41696f1b16ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99702f7cd76e5115c194769606f0dc874f7b3005f4dddd305f4b41696f1b16ba->enter($__internal_99702f7cd76e5115c194769606f0dc874f7b3005f4dddd305f4b41696f1b16ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_c42fb61f05bf7850c7282651a91b0f65605d5ed3dcb81b09b82a0db82f87bf7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c42fb61f05bf7850c7282651a91b0f65605d5ed3dcb81b09b82a0db82f87bf7d->enter($__internal_c42fb61f05bf7850c7282651a91b0f65605d5ed3dcb81b09b82a0db82f87bf7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_c42fb61f05bf7850c7282651a91b0f65605d5ed3dcb81b09b82a0db82f87bf7d->leave($__internal_c42fb61f05bf7850c7282651a91b0f65605d5ed3dcb81b09b82a0db82f87bf7d_prof);

        
        $__internal_99702f7cd76e5115c194769606f0dc874f7b3005f4dddd305f4b41696f1b16ba->leave($__internal_99702f7cd76e5115c194769606f0dc874f7b3005f4dddd305f4b41696f1b16ba_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_00819eabbf3f2ae706ca0b722edd886a3b247fd7a19eccab0ae3a0a7b4e3108e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00819eabbf3f2ae706ca0b722edd886a3b247fd7a19eccab0ae3a0a7b4e3108e->enter($__internal_00819eabbf3f2ae706ca0b722edd886a3b247fd7a19eccab0ae3a0a7b4e3108e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        $__internal_401981e299227749de5475d8e5da89aea25b26848f056b02c1022ead03008a0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_401981e299227749de5475d8e5da89aea25b26848f056b02c1022ead03008a0e->enter($__internal_401981e299227749de5475d8e5da89aea25b26848f056b02c1022ead03008a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

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
                    $__internal_0da06a70d0eb12846697bea7e7cb0ec3f63afded86bb485940c6616b4e0a12b6 = array("attr" => twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "attr", array()));
                    if (!is_array($__internal_0da06a70d0eb12846697bea7e7cb0ec3f63afded86bb485940c6616b4e0a12b6)) {
                        throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                    }
                    $context['_parent'] = $context;
                    $context = array_merge($context, $__internal_0da06a70d0eb12846697bea7e7cb0ec3f63afded86bb485940c6616b4e0a12b6);
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
        
        $__internal_401981e299227749de5475d8e5da89aea25b26848f056b02c1022ead03008a0e->leave($__internal_401981e299227749de5475d8e5da89aea25b26848f056b02c1022ead03008a0e_prof);

        
        $__internal_00819eabbf3f2ae706ca0b722edd886a3b247fd7a19eccab0ae3a0a7b4e3108e->leave($__internal_00819eabbf3f2ae706ca0b722edd886a3b247fd7a19eccab0ae3a0a7b4e3108e_prof);

    }

    // line 87
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_5e37d2515e141aa87fb6355a4ea64b3db621f8a57830aecfe1de405929349ac2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e37d2515e141aa87fb6355a4ea64b3db621f8a57830aecfe1de405929349ac2->enter($__internal_5e37d2515e141aa87fb6355a4ea64b3db621f8a57830aecfe1de405929349ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_ae2149424240c41dc94bed2af5e0bb1a0a971ab6c1052601797d06591597754f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae2149424240c41dc94bed2af5e0bb1a0a971ab6c1052601797d06591597754f->enter($__internal_ae2149424240c41dc94bed2af5e0bb1a0a971ab6c1052601797d06591597754f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_ae2149424240c41dc94bed2af5e0bb1a0a971ab6c1052601797d06591597754f->leave($__internal_ae2149424240c41dc94bed2af5e0bb1a0a971ab6c1052601797d06591597754f_prof);

        
        $__internal_5e37d2515e141aa87fb6355a4ea64b3db621f8a57830aecfe1de405929349ac2->leave($__internal_5e37d2515e141aa87fb6355a4ea64b3db621f8a57830aecfe1de405929349ac2_prof);

    }

    // line 91
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_fc169cb952b01070ba994c8fc012b9350d0a08d3be1fbeac620c0cb981ce4e37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc169cb952b01070ba994c8fc012b9350d0a08d3be1fbeac620c0cb981ce4e37->enter($__internal_fc169cb952b01070ba994c8fc012b9350d0a08d3be1fbeac620c0cb981ce4e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_de325f7125c8511e247c5f1e4e19216fc7df9671600dd4e5dfa81dd1e2ec6307 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de325f7125c8511e247c5f1e4e19216fc7df9671600dd4e5dfa81dd1e2ec6307->enter($__internal_de325f7125c8511e247c5f1e4e19216fc7df9671600dd4e5dfa81dd1e2ec6307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_de325f7125c8511e247c5f1e4e19216fc7df9671600dd4e5dfa81dd1e2ec6307->leave($__internal_de325f7125c8511e247c5f1e4e19216fc7df9671600dd4e5dfa81dd1e2ec6307_prof);

        
        $__internal_fc169cb952b01070ba994c8fc012b9350d0a08d3be1fbeac620c0cb981ce4e37->leave($__internal_fc169cb952b01070ba994c8fc012b9350d0a08d3be1fbeac620c0cb981ce4e37_prof);

    }

    // line 95
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_d95a14ef2eb3e95c2e8884df3585635d4ba213d98913e422012897a45e218cd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d95a14ef2eb3e95c2e8884df3585635d4ba213d98913e422012897a45e218cd5->enter($__internal_d95a14ef2eb3e95c2e8884df3585635d4ba213d98913e422012897a45e218cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_f6d0c565e757919c27ecaa3307cc4b7adc3bfcff2fc882f8e5599b6bc1532090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6d0c565e757919c27ecaa3307cc4b7adc3bfcff2fc882f8e5599b6bc1532090->enter($__internal_f6d0c565e757919c27ecaa3307cc4b7adc3bfcff2fc882f8e5599b6bc1532090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_f6d0c565e757919c27ecaa3307cc4b7adc3bfcff2fc882f8e5599b6bc1532090->leave($__internal_f6d0c565e757919c27ecaa3307cc4b7adc3bfcff2fc882f8e5599b6bc1532090_prof);

        
        $__internal_d95a14ef2eb3e95c2e8884df3585635d4ba213d98913e422012897a45e218cd5->leave($__internal_d95a14ef2eb3e95c2e8884df3585635d4ba213d98913e422012897a45e218cd5_prof);

    }

    // line 108
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_30f9e752cf3ece2422127cf2a0ae3754d54bf9bde78013386efc193826002cf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30f9e752cf3ece2422127cf2a0ae3754d54bf9bde78013386efc193826002cf8->enter($__internal_30f9e752cf3ece2422127cf2a0ae3754d54bf9bde78013386efc193826002cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_be314a60515c435122402b3f2861375ce0f3e0416512537752ff7c17e5cef5ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be314a60515c435122402b3f2861375ce0f3e0416512537752ff7c17e5cef5ba->enter($__internal_be314a60515c435122402b3f2861375ce0f3e0416512537752ff7c17e5cef5ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_be314a60515c435122402b3f2861375ce0f3e0416512537752ff7c17e5cef5ba->leave($__internal_be314a60515c435122402b3f2861375ce0f3e0416512537752ff7c17e5cef5ba_prof);

        
        $__internal_30f9e752cf3ece2422127cf2a0ae3754d54bf9bde78013386efc193826002cf8->leave($__internal_30f9e752cf3ece2422127cf2a0ae3754d54bf9bde78013386efc193826002cf8_prof);

    }

    // line 122
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_928abc4f15db1333aad5e379807180549a98e94333b430f0e499de95cee339bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_928abc4f15db1333aad5e379807180549a98e94333b430f0e499de95cee339bd->enter($__internal_928abc4f15db1333aad5e379807180549a98e94333b430f0e499de95cee339bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_df6af01a1b73b026c3872ecc701e6d50db174ebd55cdfbe2704c8a41d2e49654 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df6af01a1b73b026c3872ecc701e6d50db174ebd55cdfbe2704c8a41d2e49654->enter($__internal_df6af01a1b73b026c3872ecc701e6d50db174ebd55cdfbe2704c8a41d2e49654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_df6af01a1b73b026c3872ecc701e6d50db174ebd55cdfbe2704c8a41d2e49654->leave($__internal_df6af01a1b73b026c3872ecc701e6d50db174ebd55cdfbe2704c8a41d2e49654_prof);

        
        $__internal_928abc4f15db1333aad5e379807180549a98e94333b430f0e499de95cee339bd->leave($__internal_928abc4f15db1333aad5e379807180549a98e94333b430f0e499de95cee339bd_prof);

    }

    // line 133
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_1f420fbc1ceed370d9715cf64552fd741331eded0e1b09e049e64228784f8eb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f420fbc1ceed370d9715cf64552fd741331eded0e1b09e049e64228784f8eb0->enter($__internal_1f420fbc1ceed370d9715cf64552fd741331eded0e1b09e049e64228784f8eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_9c1feebc13c06a8dd573ffebe3402fb912f6693449c739cd31449f39dc553ec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c1feebc13c06a8dd573ffebe3402fb912f6693449c739cd31449f39dc553ec7->enter($__internal_9c1feebc13c06a8dd573ffebe3402fb912f6693449c739cd31449f39dc553ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_9c1feebc13c06a8dd573ffebe3402fb912f6693449c739cd31449f39dc553ec7->leave($__internal_9c1feebc13c06a8dd573ffebe3402fb912f6693449c739cd31449f39dc553ec7_prof);

        
        $__internal_1f420fbc1ceed370d9715cf64552fd741331eded0e1b09e049e64228784f8eb0->leave($__internal_1f420fbc1ceed370d9715cf64552fd741331eded0e1b09e049e64228784f8eb0_prof);

    }

    // line 168
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_b7e77c8a16452a3c96181e9d8100635595e94aedc57f6f4fccc020f15178428e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7e77c8a16452a3c96181e9d8100635595e94aedc57f6f4fccc020f15178428e->enter($__internal_b7e77c8a16452a3c96181e9d8100635595e94aedc57f6f4fccc020f15178428e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        $__internal_92ef74f5b52db20d165cfeee13987358c21f13c9c24995c2f3fdd081ce1f9959 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92ef74f5b52db20d165cfeee13987358c21f13c9c24995c2f3fdd081ce1f9959->enter($__internal_92ef74f5b52db20d165cfeee13987358c21f13c9c24995c2f3fdd081ce1f9959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 170
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 170, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 171
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_92ef74f5b52db20d165cfeee13987358c21f13c9c24995c2f3fdd081ce1f9959->leave($__internal_92ef74f5b52db20d165cfeee13987358c21f13c9c24995c2f3fdd081ce1f9959_prof);

        
        $__internal_b7e77c8a16452a3c96181e9d8100635595e94aedc57f6f4fccc020f15178428e->leave($__internal_b7e77c8a16452a3c96181e9d8100635595e94aedc57f6f4fccc020f15178428e_prof);

    }

    // line 174
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_41883c3bf70bcb87a520e7b7b2bec694e477d7f5fcdd27f9cbe3e6a6310a438b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41883c3bf70bcb87a520e7b7b2bec694e477d7f5fcdd27f9cbe3e6a6310a438b->enter($__internal_41883c3bf70bcb87a520e7b7b2bec694e477d7f5fcdd27f9cbe3e6a6310a438b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        $__internal_c204c06dd7d74de617f7f4d86760b256a303b485608146db66534e1fb9f83794 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c204c06dd7d74de617f7f4d86760b256a303b485608146db66534e1fb9f83794->enter($__internal_c204c06dd7d74de617f7f4d86760b256a303b485608146db66534e1fb9f83794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 175
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 175, $this->getSourceContext()); })()), "number")) : ("number"));
        // line 176
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_c204c06dd7d74de617f7f4d86760b256a303b485608146db66534e1fb9f83794->leave($__internal_c204c06dd7d74de617f7f4d86760b256a303b485608146db66534e1fb9f83794_prof);

        
        $__internal_41883c3bf70bcb87a520e7b7b2bec694e477d7f5fcdd27f9cbe3e6a6310a438b->leave($__internal_41883c3bf70bcb87a520e7b7b2bec694e477d7f5fcdd27f9cbe3e6a6310a438b_prof);

    }

    // line 179
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_82de85b821159ca1fc788010b959aff1992a66cf90ea45c679353a4cc387440b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82de85b821159ca1fc788010b959aff1992a66cf90ea45c679353a4cc387440b->enter($__internal_82de85b821159ca1fc788010b959aff1992a66cf90ea45c679353a4cc387440b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_4e7bed20743691079d2176af04d7a0be451c3eb5527825ba1fc2a27052fc6402 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e7bed20743691079d2176af04d7a0be451c3eb5527825ba1fc2a27052fc6402->enter($__internal_4e7bed20743691079d2176af04d7a0be451c3eb5527825ba1fc2a27052fc6402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 180
        echo twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 180, $this->getSourceContext()); })()), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_4e7bed20743691079d2176af04d7a0be451c3eb5527825ba1fc2a27052fc6402->leave($__internal_4e7bed20743691079d2176af04d7a0be451c3eb5527825ba1fc2a27052fc6402_prof);

        
        $__internal_82de85b821159ca1fc788010b959aff1992a66cf90ea45c679353a4cc387440b->leave($__internal_82de85b821159ca1fc788010b959aff1992a66cf90ea45c679353a4cc387440b_prof);

    }

    // line 183
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_0ba299170cfd03018afcaec8a1ad43e1330d25360152b989cabb472322952b07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ba299170cfd03018afcaec8a1ad43e1330d25360152b989cabb472322952b07->enter($__internal_0ba299170cfd03018afcaec8a1ad43e1330d25360152b989cabb472322952b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        $__internal_2fd5ebcdf07f6fbede11527c90617571629dc0a13080c1e7688f282b582cc1cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fd5ebcdf07f6fbede11527c90617571629dc0a13080c1e7688f282b582cc1cf->enter($__internal_2fd5ebcdf07f6fbede11527c90617571629dc0a13080c1e7688f282b582cc1cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 184
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 184, $this->getSourceContext()); })()), "url")) : ("url"));
        // line 185
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_2fd5ebcdf07f6fbede11527c90617571629dc0a13080c1e7688f282b582cc1cf->leave($__internal_2fd5ebcdf07f6fbede11527c90617571629dc0a13080c1e7688f282b582cc1cf_prof);

        
        $__internal_0ba299170cfd03018afcaec8a1ad43e1330d25360152b989cabb472322952b07->leave($__internal_0ba299170cfd03018afcaec8a1ad43e1330d25360152b989cabb472322952b07_prof);

    }

    // line 188
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_83e34306e14738fec4d24acadfe87bb90dd29c23b7aff0e0911f7b61324080df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83e34306e14738fec4d24acadfe87bb90dd29c23b7aff0e0911f7b61324080df->enter($__internal_83e34306e14738fec4d24acadfe87bb90dd29c23b7aff0e0911f7b61324080df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        $__internal_e20ba824910c99604799fbd87e92813734d9b7b3a6c7f85854d29ac0d946f5c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e20ba824910c99604799fbd87e92813734d9b7b3a6c7f85854d29ac0d946f5c1->enter($__internal_e20ba824910c99604799fbd87e92813734d9b7b3a6c7f85854d29ac0d946f5c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 189
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 189, $this->getSourceContext()); })()), "search")) : ("search"));
        // line 190
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_e20ba824910c99604799fbd87e92813734d9b7b3a6c7f85854d29ac0d946f5c1->leave($__internal_e20ba824910c99604799fbd87e92813734d9b7b3a6c7f85854d29ac0d946f5c1_prof);

        
        $__internal_83e34306e14738fec4d24acadfe87bb90dd29c23b7aff0e0911f7b61324080df->leave($__internal_83e34306e14738fec4d24acadfe87bb90dd29c23b7aff0e0911f7b61324080df_prof);

    }

    // line 193
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_b8390ba5e31461e3b012d49163a0f4cfa36ba34a3b0fc5005747230e9cb87022 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8390ba5e31461e3b012d49163a0f4cfa36ba34a3b0fc5005747230e9cb87022->enter($__internal_b8390ba5e31461e3b012d49163a0f4cfa36ba34a3b0fc5005747230e9cb87022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_50fafb32cd2e56a5267e78ffbf6f923c4deded61c6fc7771efb7ea31c5fbb535 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50fafb32cd2e56a5267e78ffbf6f923c4deded61c6fc7771efb7ea31c5fbb535->enter($__internal_50fafb32cd2e56a5267e78ffbf6f923c4deded61c6fc7771efb7ea31c5fbb535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 194
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 194, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 195
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_50fafb32cd2e56a5267e78ffbf6f923c4deded61c6fc7771efb7ea31c5fbb535->leave($__internal_50fafb32cd2e56a5267e78ffbf6f923c4deded61c6fc7771efb7ea31c5fbb535_prof);

        
        $__internal_b8390ba5e31461e3b012d49163a0f4cfa36ba34a3b0fc5005747230e9cb87022->leave($__internal_b8390ba5e31461e3b012d49163a0f4cfa36ba34a3b0fc5005747230e9cb87022_prof);

    }

    // line 198
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_1b20817d4b7a20dd246f93e02a63d6b58c58f2bf0640bff19e12013d7b4bc1d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b20817d4b7a20dd246f93e02a63d6b58c58f2bf0640bff19e12013d7b4bc1d5->enter($__internal_1b20817d4b7a20dd246f93e02a63d6b58c58f2bf0640bff19e12013d7b4bc1d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        $__internal_7ed06a0f8ac6d872a992a6003be97ab93afee019f4a96576a1748090abfcacea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ed06a0f8ac6d872a992a6003be97ab93afee019f4a96576a1748090abfcacea->enter($__internal_7ed06a0f8ac6d872a992a6003be97ab93afee019f4a96576a1748090abfcacea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 199
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 199, $this->getSourceContext()); })()), "password")) : ("password"));
        // line 200
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_7ed06a0f8ac6d872a992a6003be97ab93afee019f4a96576a1748090abfcacea->leave($__internal_7ed06a0f8ac6d872a992a6003be97ab93afee019f4a96576a1748090abfcacea_prof);

        
        $__internal_1b20817d4b7a20dd246f93e02a63d6b58c58f2bf0640bff19e12013d7b4bc1d5->leave($__internal_1b20817d4b7a20dd246f93e02a63d6b58c58f2bf0640bff19e12013d7b4bc1d5_prof);

    }

    // line 203
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_aba008767781987668c468e2b243fd5621591e8bcebb1f83e493a10aae531d99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aba008767781987668c468e2b243fd5621591e8bcebb1f83e493a10aae531d99->enter($__internal_aba008767781987668c468e2b243fd5621591e8bcebb1f83e493a10aae531d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        $__internal_cec4ce5765c89c8853d01b6aab5bd73e2779b147a1876d27227261463b4c679a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cec4ce5765c89c8853d01b6aab5bd73e2779b147a1876d27227261463b4c679a->enter($__internal_cec4ce5765c89c8853d01b6aab5bd73e2779b147a1876d27227261463b4c679a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 204
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 204, $this->getSourceContext()); })()), "hidden")) : ("hidden"));
        // line 205
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_cec4ce5765c89c8853d01b6aab5bd73e2779b147a1876d27227261463b4c679a->leave($__internal_cec4ce5765c89c8853d01b6aab5bd73e2779b147a1876d27227261463b4c679a_prof);

        
        $__internal_aba008767781987668c468e2b243fd5621591e8bcebb1f83e493a10aae531d99->leave($__internal_aba008767781987668c468e2b243fd5621591e8bcebb1f83e493a10aae531d99_prof);

    }

    // line 208
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_873b2e7e1edaa97bf4e225d58f195c36ca1ffe7f3482c554818239212715f9d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_873b2e7e1edaa97bf4e225d58f195c36ca1ffe7f3482c554818239212715f9d3->enter($__internal_873b2e7e1edaa97bf4e225d58f195c36ca1ffe7f3482c554818239212715f9d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        $__internal_cdbe156b6700e3b1f48cf6d2f55e099dbdf65d6bfd319e3695267dea21f3e86c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdbe156b6700e3b1f48cf6d2f55e099dbdf65d6bfd319e3695267dea21f3e86c->enter($__internal_cdbe156b6700e3b1f48cf6d2f55e099dbdf65d6bfd319e3695267dea21f3e86c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 209
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 209, $this->getSourceContext()); })()), "email")) : ("email"));
        // line 210
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_cdbe156b6700e3b1f48cf6d2f55e099dbdf65d6bfd319e3695267dea21f3e86c->leave($__internal_cdbe156b6700e3b1f48cf6d2f55e099dbdf65d6bfd319e3695267dea21f3e86c_prof);

        
        $__internal_873b2e7e1edaa97bf4e225d58f195c36ca1ffe7f3482c554818239212715f9d3->leave($__internal_873b2e7e1edaa97bf4e225d58f195c36ca1ffe7f3482c554818239212715f9d3_prof);

    }

    // line 213
    public function block_range_widget($context, array $blocks = array())
    {
        $__internal_48476d3ab364970d7040e28751a07d67dd3d32128b840957dd3b9c222b6f8765 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48476d3ab364970d7040e28751a07d67dd3d32128b840957dd3b9c222b6f8765->enter($__internal_48476d3ab364970d7040e28751a07d67dd3d32128b840957dd3b9c222b6f8765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        $__internal_ebdbe4a524b8e3a9ccc34a9b4305f26f623e2815ed20ac8688d9efd8cd21ecb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebdbe4a524b8e3a9ccc34a9b4305f26f623e2815ed20ac8688d9efd8cd21ecb8->enter($__internal_ebdbe4a524b8e3a9ccc34a9b4305f26f623e2815ed20ac8688d9efd8cd21ecb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        // line 214
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 214, $this->getSourceContext()); })()), "range")) : ("range"));
        // line 215
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_ebdbe4a524b8e3a9ccc34a9b4305f26f623e2815ed20ac8688d9efd8cd21ecb8->leave($__internal_ebdbe4a524b8e3a9ccc34a9b4305f26f623e2815ed20ac8688d9efd8cd21ecb8_prof);

        
        $__internal_48476d3ab364970d7040e28751a07d67dd3d32128b840957dd3b9c222b6f8765->leave($__internal_48476d3ab364970d7040e28751a07d67dd3d32128b840957dd3b9c222b6f8765_prof);

    }

    // line 218
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_06a224d292661df790c4e5d1c7b2bf03f6c4fae919eb494676dba6e329e10ad3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06a224d292661df790c4e5d1c7b2bf03f6c4fae919eb494676dba6e329e10ad3->enter($__internal_06a224d292661df790c4e5d1c7b2bf03f6c4fae919eb494676dba6e329e10ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_5e8711bba3ed8ac3882f4e2ee290f4991e2943ddcc020f4f1e736f6cba48eef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e8711bba3ed8ac3882f4e2ee290f4991e2943ddcc020f4f1e736f6cba48eef4->enter($__internal_5e8711bba3ed8ac3882f4e2ee290f4991e2943ddcc020f4f1e736f6cba48eef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

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
        
        $__internal_5e8711bba3ed8ac3882f4e2ee290f4991e2943ddcc020f4f1e736f6cba48eef4->leave($__internal_5e8711bba3ed8ac3882f4e2ee290f4991e2943ddcc020f4f1e736f6cba48eef4_prof);

        
        $__internal_06a224d292661df790c4e5d1c7b2bf03f6c4fae919eb494676dba6e329e10ad3->leave($__internal_06a224d292661df790c4e5d1c7b2bf03f6c4fae919eb494676dba6e329e10ad3_prof);

    }

    // line 232
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_2b233b72ae705fcd9ca1757d0ca9f1b1936f4ade145e38fedaa7d1a9a9adac38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b233b72ae705fcd9ca1757d0ca9f1b1936f4ade145e38fedaa7d1a9a9adac38->enter($__internal_2b233b72ae705fcd9ca1757d0ca9f1b1936f4ade145e38fedaa7d1a9a9adac38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        $__internal_c02623c0a9409775cc62d9d0e96a5774630b9477fd8585417a256effba8dba6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c02623c0a9409775cc62d9d0e96a5774630b9477fd8585417a256effba8dba6e->enter($__internal_c02623c0a9409775cc62d9d0e96a5774630b9477fd8585417a256effba8dba6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 233
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 233, $this->getSourceContext()); })()), "submit")) : ("submit"));
        // line 234
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_c02623c0a9409775cc62d9d0e96a5774630b9477fd8585417a256effba8dba6e->leave($__internal_c02623c0a9409775cc62d9d0e96a5774630b9477fd8585417a256effba8dba6e_prof);

        
        $__internal_2b233b72ae705fcd9ca1757d0ca9f1b1936f4ade145e38fedaa7d1a9a9adac38->leave($__internal_2b233b72ae705fcd9ca1757d0ca9f1b1936f4ade145e38fedaa7d1a9a9adac38_prof);

    }

    // line 237
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_4cafd1dea944f14a09c5535b62ab4d496fcbfcae61fba90addadc00455a80456 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cafd1dea944f14a09c5535b62ab4d496fcbfcae61fba90addadc00455a80456->enter($__internal_4cafd1dea944f14a09c5535b62ab4d496fcbfcae61fba90addadc00455a80456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        $__internal_44f367818f7f776c0af709d6f2d20b834636b8aa925aede7d434618ffb7ed8f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44f367818f7f776c0af709d6f2d20b834636b8aa925aede7d434618ffb7ed8f5->enter($__internal_44f367818f7f776c0af709d6f2d20b834636b8aa925aede7d434618ffb7ed8f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 238
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 238, $this->getSourceContext()); })()), "reset")) : ("reset"));
        // line 239
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_44f367818f7f776c0af709d6f2d20b834636b8aa925aede7d434618ffb7ed8f5->leave($__internal_44f367818f7f776c0af709d6f2d20b834636b8aa925aede7d434618ffb7ed8f5_prof);

        
        $__internal_4cafd1dea944f14a09c5535b62ab4d496fcbfcae61fba90addadc00455a80456->leave($__internal_4cafd1dea944f14a09c5535b62ab4d496fcbfcae61fba90addadc00455a80456_prof);

    }

    // line 242
    public function block_tel_widget($context, array $blocks = array())
    {
        $__internal_8ebafe0ea9e244efe5a96b5d58274ad680dfc0fc937577a8c15d727419903a61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ebafe0ea9e244efe5a96b5d58274ad680dfc0fc937577a8c15d727419903a61->enter($__internal_8ebafe0ea9e244efe5a96b5d58274ad680dfc0fc937577a8c15d727419903a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        $__internal_bbc7d04d56b3ed4453f4ad8707f025dae14c6ea5eab802cc04f0349b856a05d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbc7d04d56b3ed4453f4ad8707f025dae14c6ea5eab802cc04f0349b856a05d7->enter($__internal_bbc7d04d56b3ed4453f4ad8707f025dae14c6ea5eab802cc04f0349b856a05d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        // line 243
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 243, $this->getSourceContext()); })()), "tel")) : ("tel"));
        // line 244
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_bbc7d04d56b3ed4453f4ad8707f025dae14c6ea5eab802cc04f0349b856a05d7->leave($__internal_bbc7d04d56b3ed4453f4ad8707f025dae14c6ea5eab802cc04f0349b856a05d7_prof);

        
        $__internal_8ebafe0ea9e244efe5a96b5d58274ad680dfc0fc937577a8c15d727419903a61->leave($__internal_8ebafe0ea9e244efe5a96b5d58274ad680dfc0fc937577a8c15d727419903a61_prof);

    }

    // line 247
    public function block_color_widget($context, array $blocks = array())
    {
        $__internal_70af79d1e0c791f07ccf02e9e83dc76d16398def001d8b8ea3e294e8a311f8ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70af79d1e0c791f07ccf02e9e83dc76d16398def001d8b8ea3e294e8a311f8ee->enter($__internal_70af79d1e0c791f07ccf02e9e83dc76d16398def001d8b8ea3e294e8a311f8ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        $__internal_3b4a698b4b7c52aee3b188c16d617389bcae17651172bf61c978c5b465b2390c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b4a698b4b7c52aee3b188c16d617389bcae17651172bf61c978c5b465b2390c->enter($__internal_3b4a698b4b7c52aee3b188c16d617389bcae17651172bf61c978c5b465b2390c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        // line 248
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 248, $this->getSourceContext()); })()), "color")) : ("color"));
        // line 249
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_3b4a698b4b7c52aee3b188c16d617389bcae17651172bf61c978c5b465b2390c->leave($__internal_3b4a698b4b7c52aee3b188c16d617389bcae17651172bf61c978c5b465b2390c_prof);

        
        $__internal_70af79d1e0c791f07ccf02e9e83dc76d16398def001d8b8ea3e294e8a311f8ee->leave($__internal_70af79d1e0c791f07ccf02e9e83dc76d16398def001d8b8ea3e294e8a311f8ee_prof);

    }

    // line 254
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_608964cc6715af27a1cfecec22688873fa4dacb96e7af0f2b44885a4164d79fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_608964cc6715af27a1cfecec22688873fa4dacb96e7af0f2b44885a4164d79fc->enter($__internal_608964cc6715af27a1cfecec22688873fa4dacb96e7af0f2b44885a4164d79fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_05bdee42ef30236d20afc604fb1ac3b9a9420ad7001fef9c2b37b9c4a2363370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05bdee42ef30236d20afc604fb1ac3b9a9420ad7001fef9c2b37b9c4a2363370->enter($__internal_05bdee42ef30236d20afc604fb1ac3b9a9420ad7001fef9c2b37b9c4a2363370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
                $__internal_75909ef01ffcdbafd04494094da85946fef43d8da8a13013f5267e7a71925be4 = array("attr" => (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 272, $this->getSourceContext()); })()));
                if (!is_array($__internal_75909ef01ffcdbafd04494094da85946fef43d8da8a13013f5267e7a71925be4)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_75909ef01ffcdbafd04494094da85946fef43d8da8a13013f5267e7a71925be4);
                $this->displayBlock("attributes", $context, $blocks);
                $context = $context['_parent'];
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 272, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 272, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 272, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 272, $this->getSourceContext()); })())))), "html", null, true);
            echo "</";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 272, $this->getSourceContext()); })()), "label")) : ("label")), "html", null, true);
            echo ">";
        }
        
        $__internal_05bdee42ef30236d20afc604fb1ac3b9a9420ad7001fef9c2b37b9c4a2363370->leave($__internal_05bdee42ef30236d20afc604fb1ac3b9a9420ad7001fef9c2b37b9c4a2363370_prof);

        
        $__internal_608964cc6715af27a1cfecec22688873fa4dacb96e7af0f2b44885a4164d79fc->leave($__internal_608964cc6715af27a1cfecec22688873fa4dacb96e7af0f2b44885a4164d79fc_prof);

    }

    // line 276
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_74831159ed8903ef034f8c7c9b6c7dfaf4cd2c3340311e24759c63d537e3bd48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74831159ed8903ef034f8c7c9b6c7dfaf4cd2c3340311e24759c63d537e3bd48->enter($__internal_74831159ed8903ef034f8c7c9b6c7dfaf4cd2c3340311e24759c63d537e3bd48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        $__internal_0f6a0f192de6507a2f10e2fc090f4ecbb2dfc69eaaf54584d8b9567e0423a6dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f6a0f192de6507a2f10e2fc090f4ecbb2dfc69eaaf54584d8b9567e0423a6dc->enter($__internal_0f6a0f192de6507a2f10e2fc090f4ecbb2dfc69eaaf54584d8b9567e0423a6dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_0f6a0f192de6507a2f10e2fc090f4ecbb2dfc69eaaf54584d8b9567e0423a6dc->leave($__internal_0f6a0f192de6507a2f10e2fc090f4ecbb2dfc69eaaf54584d8b9567e0423a6dc_prof);

        
        $__internal_74831159ed8903ef034f8c7c9b6c7dfaf4cd2c3340311e24759c63d537e3bd48->leave($__internal_74831159ed8903ef034f8c7c9b6c7dfaf4cd2c3340311e24759c63d537e3bd48_prof);

    }

    // line 280
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_274f8c9055e82f5c74f2c3076865fda9a65e853a1b345572d5888d2bf0c1f21d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_274f8c9055e82f5c74f2c3076865fda9a65e853a1b345572d5888d2bf0c1f21d->enter($__internal_274f8c9055e82f5c74f2c3076865fda9a65e853a1b345572d5888d2bf0c1f21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        $__internal_a1b607f6e940a9a92eb4fcb5681adcc988b79d4231ae66571e60a9cb520c47ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1b607f6e940a9a92eb4fcb5681adcc988b79d4231ae66571e60a9cb520c47ca->enter($__internal_a1b607f6e940a9a92eb4fcb5681adcc988b79d4231ae66571e60a9cb520c47ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 285
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_a1b607f6e940a9a92eb4fcb5681adcc988b79d4231ae66571e60a9cb520c47ca->leave($__internal_a1b607f6e940a9a92eb4fcb5681adcc988b79d4231ae66571e60a9cb520c47ca_prof);

        
        $__internal_274f8c9055e82f5c74f2c3076865fda9a65e853a1b345572d5888d2bf0c1f21d->leave($__internal_274f8c9055e82f5c74f2c3076865fda9a65e853a1b345572d5888d2bf0c1f21d_prof);

    }

    // line 288
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_5dc36152113e545959e6fb2c7abf4207b07ebfff118214c8c7d5cc3bea1849a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dc36152113e545959e6fb2c7abf4207b07ebfff118214c8c7d5cc3bea1849a6->enter($__internal_5dc36152113e545959e6fb2c7abf4207b07ebfff118214c8c7d5cc3bea1849a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_96c8cd307865a5c06e5f0ebc4ed332f209fecd03027ab9d7b0d7afbe5e20c8fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96c8cd307865a5c06e5f0ebc4ed332f209fecd03027ab9d7b0d7afbe5e20c8fc->enter($__internal_96c8cd307865a5c06e5f0ebc4ed332f209fecd03027ab9d7b0d7afbe5e20c8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_96c8cd307865a5c06e5f0ebc4ed332f209fecd03027ab9d7b0d7afbe5e20c8fc->leave($__internal_96c8cd307865a5c06e5f0ebc4ed332f209fecd03027ab9d7b0d7afbe5e20c8fc_prof);

        
        $__internal_5dc36152113e545959e6fb2c7abf4207b07ebfff118214c8c7d5cc3bea1849a6->leave($__internal_5dc36152113e545959e6fb2c7abf4207b07ebfff118214c8c7d5cc3bea1849a6_prof);

    }

    // line 296
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_e9678ff0c8914d5d9ecd5150e0f0094bbf6a7f35fd44eea9f530078f8ea586a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9678ff0c8914d5d9ecd5150e0f0094bbf6a7f35fd44eea9f530078f8ea586a2->enter($__internal_e9678ff0c8914d5d9ecd5150e0f0094bbf6a7f35fd44eea9f530078f8ea586a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_6b6eee9acce8a7f933d258628f1a05e09281d9cd67b222e28d7be08cbea8f604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b6eee9acce8a7f933d258628f1a05e09281d9cd67b222e28d7be08cbea8f604->enter($__internal_6b6eee9acce8a7f933d258628f1a05e09281d9cd67b222e28d7be08cbea8f604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 297
        echo "<div>";
        // line 298
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 298, $this->getSourceContext()); })()), 'widget');
        // line 299
        echo "</div>";
        
        $__internal_6b6eee9acce8a7f933d258628f1a05e09281d9cd67b222e28d7be08cbea8f604->leave($__internal_6b6eee9acce8a7f933d258628f1a05e09281d9cd67b222e28d7be08cbea8f604_prof);

        
        $__internal_e9678ff0c8914d5d9ecd5150e0f0094bbf6a7f35fd44eea9f530078f8ea586a2->leave($__internal_e9678ff0c8914d5d9ecd5150e0f0094bbf6a7f35fd44eea9f530078f8ea586a2_prof);

    }

    // line 302
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_c6c302b7ed6fc593c4a84e26b85017b034425872a38c7fd3ba897c5441b86e70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6c302b7ed6fc593c4a84e26b85017b034425872a38c7fd3ba897c5441b86e70->enter($__internal_c6c302b7ed6fc593c4a84e26b85017b034425872a38c7fd3ba897c5441b86e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_ee78771ec9d9dfe82413f2c04da9d24fa262ae27a6bc6aadd445692c54655137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee78771ec9d9dfe82413f2c04da9d24fa262ae27a6bc6aadd445692c54655137->enter($__internal_ee78771ec9d9dfe82413f2c04da9d24fa262ae27a6bc6aadd445692c54655137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 303
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 303, $this->getSourceContext()); })()), 'widget');
        
        $__internal_ee78771ec9d9dfe82413f2c04da9d24fa262ae27a6bc6aadd445692c54655137->leave($__internal_ee78771ec9d9dfe82413f2c04da9d24fa262ae27a6bc6aadd445692c54655137_prof);

        
        $__internal_c6c302b7ed6fc593c4a84e26b85017b034425872a38c7fd3ba897c5441b86e70->leave($__internal_c6c302b7ed6fc593c4a84e26b85017b034425872a38c7fd3ba897c5441b86e70_prof);

    }

    // line 308
    public function block_form($context, array $blocks = array())
    {
        $__internal_99a6e069c96559f6fcd84229bfa0d0a3eeead2c38d1534629e3cf620cb3e83aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99a6e069c96559f6fcd84229bfa0d0a3eeead2c38d1534629e3cf620cb3e83aa->enter($__internal_99a6e069c96559f6fcd84229bfa0d0a3eeead2c38d1534629e3cf620cb3e83aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_bb118dc3655c0ca49c5536516ec76115b253c5be6814edf275eb73190ef958ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb118dc3655c0ca49c5536516ec76115b253c5be6814edf275eb73190ef958ab->enter($__internal_bb118dc3655c0ca49c5536516ec76115b253c5be6814edf275eb73190ef958ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 309
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 309, $this->getSourceContext()); })()), 'form_start');
        // line 310
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 310, $this->getSourceContext()); })()), 'widget');
        // line 311
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 311, $this->getSourceContext()); })()), 'form_end');
        
        $__internal_bb118dc3655c0ca49c5536516ec76115b253c5be6814edf275eb73190ef958ab->leave($__internal_bb118dc3655c0ca49c5536516ec76115b253c5be6814edf275eb73190ef958ab_prof);

        
        $__internal_99a6e069c96559f6fcd84229bfa0d0a3eeead2c38d1534629e3cf620cb3e83aa->leave($__internal_99a6e069c96559f6fcd84229bfa0d0a3eeead2c38d1534629e3cf620cb3e83aa_prof);

    }

    // line 314
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_428f4507c1c2da18eb538547cc92a5a0084e4d430b45d7c9c7d070d5b51f42ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_428f4507c1c2da18eb538547cc92a5a0084e4d430b45d7c9c7d070d5b51f42ba->enter($__internal_428f4507c1c2da18eb538547cc92a5a0084e4d430b45d7c9c7d070d5b51f42ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_5bcf29a965db9dfe943807afef2bf9bc6a38fcb24085e43299049da63886428a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bcf29a965db9dfe943807afef2bf9bc6a38fcb24085e43299049da63886428a->enter($__internal_5bcf29a965db9dfe943807afef2bf9bc6a38fcb24085e43299049da63886428a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

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
        
        $__internal_5bcf29a965db9dfe943807afef2bf9bc6a38fcb24085e43299049da63886428a->leave($__internal_5bcf29a965db9dfe943807afef2bf9bc6a38fcb24085e43299049da63886428a_prof);

        
        $__internal_428f4507c1c2da18eb538547cc92a5a0084e4d430b45d7c9c7d070d5b51f42ba->leave($__internal_428f4507c1c2da18eb538547cc92a5a0084e4d430b45d7c9c7d070d5b51f42ba_prof);

    }

    // line 328
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_fdde90816c1d7258e46941bde21d284c35833e8c37cccb48babcde5a5d0804a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdde90816c1d7258e46941bde21d284c35833e8c37cccb48babcde5a5d0804a4->enter($__internal_fdde90816c1d7258e46941bde21d284c35833e8c37cccb48babcde5a5d0804a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        $__internal_1033e9b19d457be4aab99f5ec5afbe447a5ebbc7847372cc7b51f0be7693eb9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1033e9b19d457be4aab99f5ec5afbe447a5ebbc7847372cc7b51f0be7693eb9e->enter($__internal_1033e9b19d457be4aab99f5ec5afbe447a5ebbc7847372cc7b51f0be7693eb9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 329
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) || array_key_exists("render_rest", $context) ? $context["render_rest"] : (function () { throw new Twig_Error_Runtime('Variable "render_rest" does not exist.', 329, $this->getSourceContext()); })()))) {
            // line 330
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 330, $this->getSourceContext()); })()), 'rest');
        }
        // line 332
        echo "</form>";
        
        $__internal_1033e9b19d457be4aab99f5ec5afbe447a5ebbc7847372cc7b51f0be7693eb9e->leave($__internal_1033e9b19d457be4aab99f5ec5afbe447a5ebbc7847372cc7b51f0be7693eb9e_prof);

        
        $__internal_fdde90816c1d7258e46941bde21d284c35833e8c37cccb48babcde5a5d0804a4->leave($__internal_fdde90816c1d7258e46941bde21d284c35833e8c37cccb48babcde5a5d0804a4_prof);

    }

    // line 335
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_703eb4b9459a54f716796ec068e7aff4c8efdc2825ad638f049ace6f74e1cb69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_703eb4b9459a54f716796ec068e7aff4c8efdc2825ad638f049ace6f74e1cb69->enter($__internal_703eb4b9459a54f716796ec068e7aff4c8efdc2825ad638f049ace6f74e1cb69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_5554e141698e0bec9cfefb9a2f8dc2bc5558ad9ca15be02b96f43ae38bad0a1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5554e141698e0bec9cfefb9a2f8dc2bc5558ad9ca15be02b96f43ae38bad0a1a->enter($__internal_5554e141698e0bec9cfefb9a2f8dc2bc5558ad9ca15be02b96f43ae38bad0a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_5554e141698e0bec9cfefb9a2f8dc2bc5558ad9ca15be02b96f43ae38bad0a1a->leave($__internal_5554e141698e0bec9cfefb9a2f8dc2bc5558ad9ca15be02b96f43ae38bad0a1a_prof);

        
        $__internal_703eb4b9459a54f716796ec068e7aff4c8efdc2825ad638f049ace6f74e1cb69->leave($__internal_703eb4b9459a54f716796ec068e7aff4c8efdc2825ad638f049ace6f74e1cb69_prof);

    }

    // line 345
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_98f28397372a12e422b3db23968921e2acb09dd29c2272a457efbd2e8f079f4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98f28397372a12e422b3db23968921e2acb09dd29c2272a457efbd2e8f079f4e->enter($__internal_98f28397372a12e422b3db23968921e2acb09dd29c2272a457efbd2e8f079f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        $__internal_94e2b437797e48474cad53144386de20e0e0065acd93e293fbca089f40833c3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94e2b437797e48474cad53144386de20e0e0065acd93e293fbca089f40833c3b->enter($__internal_94e2b437797e48474cad53144386de20e0e0065acd93e293fbca089f40833c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

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
        
        $__internal_94e2b437797e48474cad53144386de20e0e0065acd93e293fbca089f40833c3b->leave($__internal_94e2b437797e48474cad53144386de20e0e0065acd93e293fbca089f40833c3b_prof);

        
        $__internal_98f28397372a12e422b3db23968921e2acb09dd29c2272a457efbd2e8f079f4e->leave($__internal_98f28397372a12e422b3db23968921e2acb09dd29c2272a457efbd2e8f079f4e_prof);

    }

    // line 369
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_3fc0e1bf18b2f4e09986e199024e5b146304ba0f35bb6125e6908b10e77366c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fc0e1bf18b2f4e09986e199024e5b146304ba0f35bb6125e6908b10e77366c1->enter($__internal_3fc0e1bf18b2f4e09986e199024e5b146304ba0f35bb6125e6908b10e77366c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        $__internal_6c7552b611b9e73d2af4cdda939cf0367876cfa70431b6e15ee4c7984f0fce07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c7552b611b9e73d2af4cdda939cf0367876cfa70431b6e15ee4c7984f0fce07->enter($__internal_6c7552b611b9e73d2af4cdda939cf0367876cfa70431b6e15ee4c7984f0fce07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

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
        
        $__internal_6c7552b611b9e73d2af4cdda939cf0367876cfa70431b6e15ee4c7984f0fce07->leave($__internal_6c7552b611b9e73d2af4cdda939cf0367876cfa70431b6e15ee4c7984f0fce07_prof);

        
        $__internal_3fc0e1bf18b2f4e09986e199024e5b146304ba0f35bb6125e6908b10e77366c1->leave($__internal_3fc0e1bf18b2f4e09986e199024e5b146304ba0f35bb6125e6908b10e77366c1_prof);

    }

    // line 375
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_2cc6c31114647fd87d053886871fdbc73435a79ca24af1ff9b18c3447666cf64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cc6c31114647fd87d053886871fdbc73435a79ca24af1ff9b18c3447666cf64->enter($__internal_2cc6c31114647fd87d053886871fdbc73435a79ca24af1ff9b18c3447666cf64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_63b235987b45b333c4c07946029f7bde990db019c1ef818fea95a73800f21237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63b235987b45b333c4c07946029f7bde990db019c1ef818fea95a73800f21237->enter($__internal_63b235987b45b333c4c07946029f7bde990db019c1ef818fea95a73800f21237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

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
        
        $__internal_63b235987b45b333c4c07946029f7bde990db019c1ef818fea95a73800f21237->leave($__internal_63b235987b45b333c4c07946029f7bde990db019c1ef818fea95a73800f21237_prof);

        
        $__internal_2cc6c31114647fd87d053886871fdbc73435a79ca24af1ff9b18c3447666cf64->leave($__internal_2cc6c31114647fd87d053886871fdbc73435a79ca24af1ff9b18c3447666cf64_prof);

    }

    // line 382
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_e28eb0e97557fa226e0711cd5fe77415a33791de764f32e9266d509aee00e26f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e28eb0e97557fa226e0711cd5fe77415a33791de764f32e9266d509aee00e26f->enter($__internal_e28eb0e97557fa226e0711cd5fe77415a33791de764f32e9266d509aee00e26f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        $__internal_5675cb3aed02f8c01e7f10cd8e0bea3c3515cfad7d2bb348b431eea8e43538c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5675cb3aed02f8c01e7f10cd8e0bea3c3515cfad7d2bb348b431eea8e43538c0->enter($__internal_5675cb3aed02f8c01e7f10cd8e0bea3c3515cfad7d2bb348b431eea8e43538c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 383
        if ( !twig_test_empty((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 383, $this->getSourceContext()); })()))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 383, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        // line 384
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_5675cb3aed02f8c01e7f10cd8e0bea3c3515cfad7d2bb348b431eea8e43538c0->leave($__internal_5675cb3aed02f8c01e7f10cd8e0bea3c3515cfad7d2bb348b431eea8e43538c0_prof);

        
        $__internal_e28eb0e97557fa226e0711cd5fe77415a33791de764f32e9266d509aee00e26f->leave($__internal_e28eb0e97557fa226e0711cd5fe77415a33791de764f32e9266d509aee00e26f_prof);

    }

    // line 387
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_2121a9d4226951f803546017c99d19d8763454cdc69079972616035b3e9a7dc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2121a9d4226951f803546017c99d19d8763454cdc69079972616035b3e9a7dc8->enter($__internal_2121a9d4226951f803546017c99d19d8763454cdc69079972616035b3e9a7dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        $__internal_6645b5d96d9ef456889a78f11c95a10e1422feb0b19b585fb065a89393c3757f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6645b5d96d9ef456889a78f11c95a10e1422feb0b19b585fb065a89393c3757f->enter($__internal_6645b5d96d9ef456889a78f11c95a10e1422feb0b19b585fb065a89393c3757f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

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
        
        $__internal_6645b5d96d9ef456889a78f11c95a10e1422feb0b19b585fb065a89393c3757f->leave($__internal_6645b5d96d9ef456889a78f11c95a10e1422feb0b19b585fb065a89393c3757f_prof);

        
        $__internal_2121a9d4226951f803546017c99d19d8763454cdc69079972616035b3e9a7dc8->leave($__internal_2121a9d4226951f803546017c99d19d8763454cdc69079972616035b3e9a7dc8_prof);

    }

    // line 392
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_32c6e8c855136275077d93d07dc75189230749990144d070a61ec1813d398d42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32c6e8c855136275077d93d07dc75189230749990144d070a61ec1813d398d42->enter($__internal_32c6e8c855136275077d93d07dc75189230749990144d070a61ec1813d398d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        $__internal_31423698a391390269da716c6bac57b9fdefeec7d192b47973a7a7845e0bf24b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31423698a391390269da716c6bac57b9fdefeec7d192b47973a7a7845e0bf24b->enter($__internal_31423698a391390269da716c6bac57b9fdefeec7d192b47973a7a7845e0bf24b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

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
        
        $__internal_31423698a391390269da716c6bac57b9fdefeec7d192b47973a7a7845e0bf24b->leave($__internal_31423698a391390269da716c6bac57b9fdefeec7d192b47973a7a7845e0bf24b_prof);

        
        $__internal_32c6e8c855136275077d93d07dc75189230749990144d070a61ec1813d398d42->leave($__internal_32c6e8c855136275077d93d07dc75189230749990144d070a61ec1813d398d42_prof);

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
", "form_div_layout.html.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\form_div_layout.html.twig");
    }
}
