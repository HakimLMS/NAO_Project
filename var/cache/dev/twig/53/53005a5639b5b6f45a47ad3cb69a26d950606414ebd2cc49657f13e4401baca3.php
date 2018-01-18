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
        $__internal_1f05f20f55b79e9ede17b71bf4ae5b4608a7f2b7d5899af48e1ae5303106b520 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f05f20f55b79e9ede17b71bf4ae5b4608a7f2b7d5899af48e1ae5303106b520->enter($__internal_1f05f20f55b79e9ede17b71bf4ae5b4608a7f2b7d5899af48e1ae5303106b520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        $__internal_199a44e538ccd910439181ebd99f9c305f51a3dfbbcef0914542cff5603fb4f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_199a44e538ccd910439181ebd99f9c305f51a3dfbbcef0914542cff5603fb4f3->enter($__internal_199a44e538ccd910439181ebd99f9c305f51a3dfbbcef0914542cff5603fb4f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

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
        
        $__internal_1f05f20f55b79e9ede17b71bf4ae5b4608a7f2b7d5899af48e1ae5303106b520->leave($__internal_1f05f20f55b79e9ede17b71bf4ae5b4608a7f2b7d5899af48e1ae5303106b520_prof);

        
        $__internal_199a44e538ccd910439181ebd99f9c305f51a3dfbbcef0914542cff5603fb4f3->leave($__internal_199a44e538ccd910439181ebd99f9c305f51a3dfbbcef0914542cff5603fb4f3_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_e66cb7f2ec7123b6bcbf8b23c1dd39d06597aa69cc9b2c237dc33bec836aa951 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e66cb7f2ec7123b6bcbf8b23c1dd39d06597aa69cc9b2c237dc33bec836aa951->enter($__internal_e66cb7f2ec7123b6bcbf8b23c1dd39d06597aa69cc9b2c237dc33bec836aa951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_8cc34d4de07df17d00413cd1a016093a48dcc4e14500405cbedf2349bda46781 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cc34d4de07df17d00413cd1a016093a48dcc4e14500405cbedf2349bda46781->enter($__internal_8cc34d4de07df17d00413cd1a016093a48dcc4e14500405cbedf2349bda46781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if ((isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 4, $this->getSourceContext()); })())) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_8cc34d4de07df17d00413cd1a016093a48dcc4e14500405cbedf2349bda46781->leave($__internal_8cc34d4de07df17d00413cd1a016093a48dcc4e14500405cbedf2349bda46781_prof);

        
        $__internal_e66cb7f2ec7123b6bcbf8b23c1dd39d06597aa69cc9b2c237dc33bec836aa951->leave($__internal_e66cb7f2ec7123b6bcbf8b23c1dd39d06597aa69cc9b2c237dc33bec836aa951_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_641fe236454f6f6b089453bfde95c32ae3ca6965fd7fde961713384cffdb07a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_641fe236454f6f6b089453bfde95c32ae3ca6965fd7fde961713384cffdb07a7->enter($__internal_641fe236454f6f6b089453bfde95c32ae3ca6965fd7fde961713384cffdb07a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_0fd9fc333f190f79e844cec50c5814070b4589e03cebd3e807f8f33e9d9e91f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fd9fc333f190f79e844cec50c5814070b4589e03cebd3e807f8f33e9d9e91f0->enter($__internal_0fd9fc333f190f79e844cec50c5814070b4589e03cebd3e807f8f33e9d9e91f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

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
        
        $__internal_0fd9fc333f190f79e844cec50c5814070b4589e03cebd3e807f8f33e9d9e91f0->leave($__internal_0fd9fc333f190f79e844cec50c5814070b4589e03cebd3e807f8f33e9d9e91f0_prof);

        
        $__internal_641fe236454f6f6b089453bfde95c32ae3ca6965fd7fde961713384cffdb07a7->leave($__internal_641fe236454f6f6b089453bfde95c32ae3ca6965fd7fde961713384cffdb07a7_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_73f7307bfa21ba027d9fe969961765597a7ace687c7e236f18bb2428704dd910 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73f7307bfa21ba027d9fe969961765597a7ace687c7e236f18bb2428704dd910->enter($__internal_73f7307bfa21ba027d9fe969961765597a7ace687c7e236f18bb2428704dd910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_d569c9f18f9af8259e067c8b6c0b0179e0e239115dfac62c3b25848c2c4e8950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d569c9f18f9af8259e067c8b6c0b0179e0e239115dfac62c3b25848c2c4e8950->enter($__internal_d569c9f18f9af8259e067c8b6c0b0179e0e239115dfac62c3b25848c2c4e8950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_d569c9f18f9af8259e067c8b6c0b0179e0e239115dfac62c3b25848c2c4e8950->leave($__internal_d569c9f18f9af8259e067c8b6c0b0179e0e239115dfac62c3b25848c2c4e8950_prof);

        
        $__internal_73f7307bfa21ba027d9fe969961765597a7ace687c7e236f18bb2428704dd910->leave($__internal_73f7307bfa21ba027d9fe969961765597a7ace687c7e236f18bb2428704dd910_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_c1906931611e2e923de98117f503025e7498ce234fcf5dfb0991729fc6b82428 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1906931611e2e923de98117f503025e7498ce234fcf5dfb0991729fc6b82428->enter($__internal_c1906931611e2e923de98117f503025e7498ce234fcf5dfb0991729fc6b82428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_d2b423e9c56873958fb9402f90981a6cab16bbf0940937634847f3e89d818966 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2b423e9c56873958fb9402f90981a6cab16bbf0940937634847f3e89d818966->enter($__internal_d2b423e9c56873958fb9402f90981a6cab16bbf0940937634847f3e89d818966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 28, $this->getSourceContext()); })()), array("data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new Twig_Error_Runtime('Variable "prototype" does not exist.', 28, $this->getSourceContext()); })()), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_d2b423e9c56873958fb9402f90981a6cab16bbf0940937634847f3e89d818966->leave($__internal_d2b423e9c56873958fb9402f90981a6cab16bbf0940937634847f3e89d818966_prof);

        
        $__internal_c1906931611e2e923de98117f503025e7498ce234fcf5dfb0991729fc6b82428->leave($__internal_c1906931611e2e923de98117f503025e7498ce234fcf5dfb0991729fc6b82428_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_2c4af6b9b9c8a0f0fa8690729e051dc786382b709213444f0b11f2e86282f6d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c4af6b9b9c8a0f0fa8690729e051dc786382b709213444f0b11f2e86282f6d4->enter($__internal_2c4af6b9b9c8a0f0fa8690729e051dc786382b709213444f0b11f2e86282f6d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_24f92bf0c642824e3642bbe28d2c3001a79d466afbac93a8c74f5c0c08a196df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24f92bf0c642824e3642bbe28d2c3001a79d466afbac93a8c74f5c0c08a196df->enter($__internal_24f92bf0c642824e3642bbe28d2c3001a79d466afbac93a8c74f5c0c08a196df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 34, $this->getSourceContext()); })()), "html", null, true);
        echo "</textarea>";
        
        $__internal_24f92bf0c642824e3642bbe28d2c3001a79d466afbac93a8c74f5c0c08a196df->leave($__internal_24f92bf0c642824e3642bbe28d2c3001a79d466afbac93a8c74f5c0c08a196df_prof);

        
        $__internal_2c4af6b9b9c8a0f0fa8690729e051dc786382b709213444f0b11f2e86282f6d4->leave($__internal_2c4af6b9b9c8a0f0fa8690729e051dc786382b709213444f0b11f2e86282f6d4_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_3c0f4658beb0d5170388c06d11e18d252c8aebc8bb821f657c8e3a3478c576ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c0f4658beb0d5170388c06d11e18d252c8aebc8bb821f657c8e3a3478c576ad->enter($__internal_3c0f4658beb0d5170388c06d11e18d252c8aebc8bb821f657c8e3a3478c576ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        $__internal_c3e380c6dcf7ffeefc24dc7502c687db74501d5368a863a589db3daa239431ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3e380c6dcf7ffeefc24dc7502c687db74501d5368a863a589db3daa239431ea->enter($__internal_c3e380c6dcf7ffeefc24dc7502c687db74501d5368a863a589db3daa239431ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if ((isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 38, $this->getSourceContext()); })())) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_c3e380c6dcf7ffeefc24dc7502c687db74501d5368a863a589db3daa239431ea->leave($__internal_c3e380c6dcf7ffeefc24dc7502c687db74501d5368a863a589db3daa239431ea_prof);

        
        $__internal_3c0f4658beb0d5170388c06d11e18d252c8aebc8bb821f657c8e3a3478c576ad->leave($__internal_3c0f4658beb0d5170388c06d11e18d252c8aebc8bb821f657c8e3a3478c576ad_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_70842ac55ee47aa52be731b426de9ea8c636608586867ecce871a30d1d684dc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70842ac55ee47aa52be731b426de9ea8c636608586867ecce871a30d1d684dc5->enter($__internal_70842ac55ee47aa52be731b426de9ea8c636608586867ecce871a30d1d684dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_f3f5423f2995341a5cc25ea92beaaf508555fa8f1ea31baea9437c3e98432e24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3f5423f2995341a5cc25ea92beaaf508555fa8f1ea31baea9437c3e98432e24->enter($__internal_f3f5423f2995341a5cc25ea92beaaf508555fa8f1ea31baea9437c3e98432e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_f3f5423f2995341a5cc25ea92beaaf508555fa8f1ea31baea9437c3e98432e24->leave($__internal_f3f5423f2995341a5cc25ea92beaaf508555fa8f1ea31baea9437c3e98432e24_prof);

        
        $__internal_70842ac55ee47aa52be731b426de9ea8c636608586867ecce871a30d1d684dc5->leave($__internal_70842ac55ee47aa52be731b426de9ea8c636608586867ecce871a30d1d684dc5_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_f6293b473ba5bb2d6e423f8dde61e6a6d4fedf75204bebf8cbe6f923f5f35bf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6293b473ba5bb2d6e423f8dde61e6a6d4fedf75204bebf8cbe6f923f5f35bf2->enter($__internal_f6293b473ba5bb2d6e423f8dde61e6a6d4fedf75204bebf8cbe6f923f5f35bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_0ad66b6d9d833e74404acb8fc206986f9408fa38434bc8885af41b58626822a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ad66b6d9d833e74404acb8fc206986f9408fa38434bc8885af41b58626822a3->enter($__internal_0ad66b6d9d833e74404acb8fc206986f9408fa38434bc8885af41b58626822a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_0ad66b6d9d833e74404acb8fc206986f9408fa38434bc8885af41b58626822a3->leave($__internal_0ad66b6d9d833e74404acb8fc206986f9408fa38434bc8885af41b58626822a3_prof);

        
        $__internal_f6293b473ba5bb2d6e423f8dde61e6a6d4fedf75204bebf8cbe6f923f5f35bf2->leave($__internal_f6293b473ba5bb2d6e423f8dde61e6a6d4fedf75204bebf8cbe6f923f5f35bf2_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_33f23e6384daa9da0838a79ef31261752e9a00f7fb9b3e2f05d02e36425e8ea1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33f23e6384daa9da0838a79ef31261752e9a00f7fb9b3e2f05d02e36425e8ea1->enter($__internal_33f23e6384daa9da0838a79ef31261752e9a00f7fb9b3e2f05d02e36425e8ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        $__internal_631f7f55b5044c9437b47b16bb0f42e6f9b0268c57bdb61f9fd03c0b18c396ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_631f7f55b5044c9437b47b16bb0f42e6f9b0268c57bdb61f9fd03c0b18c396ce->enter($__internal_631f7f55b5044c9437b47b16bb0f42e6f9b0268c57bdb61f9fd03c0b18c396ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

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
                    $__internal_1211dc968d7c5137f2b891e13414fdbfc31c5e42c8605ebbef170eab312bf2c7 = array("attr" => twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "attr", array()));
                    if (!is_array($__internal_1211dc968d7c5137f2b891e13414fdbfc31c5e42c8605ebbef170eab312bf2c7)) {
                        throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                    }
                    $context['_parent'] = $context;
                    $context = array_merge($context, $__internal_1211dc968d7c5137f2b891e13414fdbfc31c5e42c8605ebbef170eab312bf2c7);
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
        
        $__internal_631f7f55b5044c9437b47b16bb0f42e6f9b0268c57bdb61f9fd03c0b18c396ce->leave($__internal_631f7f55b5044c9437b47b16bb0f42e6f9b0268c57bdb61f9fd03c0b18c396ce_prof);

        
        $__internal_33f23e6384daa9da0838a79ef31261752e9a00f7fb9b3e2f05d02e36425e8ea1->leave($__internal_33f23e6384daa9da0838a79ef31261752e9a00f7fb9b3e2f05d02e36425e8ea1_prof);

    }

    // line 87
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_5f40fdaaf4153bd81dbd9b41e27883bfa8588d10248d4d182d05cd222b757e95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f40fdaaf4153bd81dbd9b41e27883bfa8588d10248d4d182d05cd222b757e95->enter($__internal_5f40fdaaf4153bd81dbd9b41e27883bfa8588d10248d4d182d05cd222b757e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_9015d05daf508c4608900bb2012d3497995f5f6651f11ac0f4ca78a596b36432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9015d05daf508c4608900bb2012d3497995f5f6651f11ac0f4ca78a596b36432->enter($__internal_9015d05daf508c4608900bb2012d3497995f5f6651f11ac0f4ca78a596b36432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_9015d05daf508c4608900bb2012d3497995f5f6651f11ac0f4ca78a596b36432->leave($__internal_9015d05daf508c4608900bb2012d3497995f5f6651f11ac0f4ca78a596b36432_prof);

        
        $__internal_5f40fdaaf4153bd81dbd9b41e27883bfa8588d10248d4d182d05cd222b757e95->leave($__internal_5f40fdaaf4153bd81dbd9b41e27883bfa8588d10248d4d182d05cd222b757e95_prof);

    }

    // line 91
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_b7bba2015d833882787fff85d91ab0a8d0d06c8f01b992a3294223d8fe6d1ac7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7bba2015d833882787fff85d91ab0a8d0d06c8f01b992a3294223d8fe6d1ac7->enter($__internal_b7bba2015d833882787fff85d91ab0a8d0d06c8f01b992a3294223d8fe6d1ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_e837e7a975c6fa83437779d59a42036d23b695d8599a4bd67af07fcc8682d3e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e837e7a975c6fa83437779d59a42036d23b695d8599a4bd67af07fcc8682d3e7->enter($__internal_e837e7a975c6fa83437779d59a42036d23b695d8599a4bd67af07fcc8682d3e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_e837e7a975c6fa83437779d59a42036d23b695d8599a4bd67af07fcc8682d3e7->leave($__internal_e837e7a975c6fa83437779d59a42036d23b695d8599a4bd67af07fcc8682d3e7_prof);

        
        $__internal_b7bba2015d833882787fff85d91ab0a8d0d06c8f01b992a3294223d8fe6d1ac7->leave($__internal_b7bba2015d833882787fff85d91ab0a8d0d06c8f01b992a3294223d8fe6d1ac7_prof);

    }

    // line 95
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_40a69dbbca378ff2e9b302d0a8fb20c6cc3c5ff2e541b7cd832ec8ffac937d78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40a69dbbca378ff2e9b302d0a8fb20c6cc3c5ff2e541b7cd832ec8ffac937d78->enter($__internal_40a69dbbca378ff2e9b302d0a8fb20c6cc3c5ff2e541b7cd832ec8ffac937d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_078700036a3f1843a14eea53bb9fb694d70427b5d72e61cef29b4d416ad9e7e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_078700036a3f1843a14eea53bb9fb694d70427b5d72e61cef29b4d416ad9e7e6->enter($__internal_078700036a3f1843a14eea53bb9fb694d70427b5d72e61cef29b4d416ad9e7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_078700036a3f1843a14eea53bb9fb694d70427b5d72e61cef29b4d416ad9e7e6->leave($__internal_078700036a3f1843a14eea53bb9fb694d70427b5d72e61cef29b4d416ad9e7e6_prof);

        
        $__internal_40a69dbbca378ff2e9b302d0a8fb20c6cc3c5ff2e541b7cd832ec8ffac937d78->leave($__internal_40a69dbbca378ff2e9b302d0a8fb20c6cc3c5ff2e541b7cd832ec8ffac937d78_prof);

    }

    // line 108
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_3f306151b88806c820b405970c4ff4b247243144f7311ae5cf06391642eb9edf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f306151b88806c820b405970c4ff4b247243144f7311ae5cf06391642eb9edf->enter($__internal_3f306151b88806c820b405970c4ff4b247243144f7311ae5cf06391642eb9edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_d84eb6ed88331912b3b2823346a26da669e322d3afc112b786a47912c66026ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d84eb6ed88331912b3b2823346a26da669e322d3afc112b786a47912c66026ca->enter($__internal_d84eb6ed88331912b3b2823346a26da669e322d3afc112b786a47912c66026ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_d84eb6ed88331912b3b2823346a26da669e322d3afc112b786a47912c66026ca->leave($__internal_d84eb6ed88331912b3b2823346a26da669e322d3afc112b786a47912c66026ca_prof);

        
        $__internal_3f306151b88806c820b405970c4ff4b247243144f7311ae5cf06391642eb9edf->leave($__internal_3f306151b88806c820b405970c4ff4b247243144f7311ae5cf06391642eb9edf_prof);

    }

    // line 122
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_0771f5db676c11983f6c423a5dd57a536efb8e5b9010b1ace7a00bdd73332a21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0771f5db676c11983f6c423a5dd57a536efb8e5b9010b1ace7a00bdd73332a21->enter($__internal_0771f5db676c11983f6c423a5dd57a536efb8e5b9010b1ace7a00bdd73332a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_838b4b8c876e0eff94ab9f9c8a6a6b410ebdeba213af7136d88e55d014841cd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_838b4b8c876e0eff94ab9f9c8a6a6b410ebdeba213af7136d88e55d014841cd7->enter($__internal_838b4b8c876e0eff94ab9f9c8a6a6b410ebdeba213af7136d88e55d014841cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_838b4b8c876e0eff94ab9f9c8a6a6b410ebdeba213af7136d88e55d014841cd7->leave($__internal_838b4b8c876e0eff94ab9f9c8a6a6b410ebdeba213af7136d88e55d014841cd7_prof);

        
        $__internal_0771f5db676c11983f6c423a5dd57a536efb8e5b9010b1ace7a00bdd73332a21->leave($__internal_0771f5db676c11983f6c423a5dd57a536efb8e5b9010b1ace7a00bdd73332a21_prof);

    }

    // line 133
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_a2894ae2f3862e5a305ff2ce23c2b3b0d605f5fd61cd33a989828d5cbd7b20d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2894ae2f3862e5a305ff2ce23c2b3b0d605f5fd61cd33a989828d5cbd7b20d9->enter($__internal_a2894ae2f3862e5a305ff2ce23c2b3b0d605f5fd61cd33a989828d5cbd7b20d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_1a9b4d5be715fc7efc57355da8ab9abcb7044ad3560bada78328b203f3be536d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a9b4d5be715fc7efc57355da8ab9abcb7044ad3560bada78328b203f3be536d->enter($__internal_1a9b4d5be715fc7efc57355da8ab9abcb7044ad3560bada78328b203f3be536d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_1a9b4d5be715fc7efc57355da8ab9abcb7044ad3560bada78328b203f3be536d->leave($__internal_1a9b4d5be715fc7efc57355da8ab9abcb7044ad3560bada78328b203f3be536d_prof);

        
        $__internal_a2894ae2f3862e5a305ff2ce23c2b3b0d605f5fd61cd33a989828d5cbd7b20d9->leave($__internal_a2894ae2f3862e5a305ff2ce23c2b3b0d605f5fd61cd33a989828d5cbd7b20d9_prof);

    }

    // line 168
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_e01408866f1eba13d89d8e3fc81fdc71d4623c3c536ba182976b65a7d3ee8bf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e01408866f1eba13d89d8e3fc81fdc71d4623c3c536ba182976b65a7d3ee8bf0->enter($__internal_e01408866f1eba13d89d8e3fc81fdc71d4623c3c536ba182976b65a7d3ee8bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        $__internal_f5f6f8b911a2f4f57d2f575158fa400d52c119e65f402664051f539879569c71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5f6f8b911a2f4f57d2f575158fa400d52c119e65f402664051f539879569c71->enter($__internal_f5f6f8b911a2f4f57d2f575158fa400d52c119e65f402664051f539879569c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 170
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 170, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 171
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_f5f6f8b911a2f4f57d2f575158fa400d52c119e65f402664051f539879569c71->leave($__internal_f5f6f8b911a2f4f57d2f575158fa400d52c119e65f402664051f539879569c71_prof);

        
        $__internal_e01408866f1eba13d89d8e3fc81fdc71d4623c3c536ba182976b65a7d3ee8bf0->leave($__internal_e01408866f1eba13d89d8e3fc81fdc71d4623c3c536ba182976b65a7d3ee8bf0_prof);

    }

    // line 174
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_06540e4bb4d0beeb15ac1cab66d99c86a8b83354289e515a2983597754043cdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06540e4bb4d0beeb15ac1cab66d99c86a8b83354289e515a2983597754043cdf->enter($__internal_06540e4bb4d0beeb15ac1cab66d99c86a8b83354289e515a2983597754043cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        $__internal_50a18475b3e8c5d635298f0db6f67b3f04a657245bfd28cb43f3a6ea24faa8fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50a18475b3e8c5d635298f0db6f67b3f04a657245bfd28cb43f3a6ea24faa8fc->enter($__internal_50a18475b3e8c5d635298f0db6f67b3f04a657245bfd28cb43f3a6ea24faa8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 175
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 175, $this->getSourceContext()); })()), "number")) : ("number"));
        // line 176
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_50a18475b3e8c5d635298f0db6f67b3f04a657245bfd28cb43f3a6ea24faa8fc->leave($__internal_50a18475b3e8c5d635298f0db6f67b3f04a657245bfd28cb43f3a6ea24faa8fc_prof);

        
        $__internal_06540e4bb4d0beeb15ac1cab66d99c86a8b83354289e515a2983597754043cdf->leave($__internal_06540e4bb4d0beeb15ac1cab66d99c86a8b83354289e515a2983597754043cdf_prof);

    }

    // line 179
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_71c60c47ef7d2ed0af16a3dcbd630ce3e434fbad610a89365a585f14aff5c6c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71c60c47ef7d2ed0af16a3dcbd630ce3e434fbad610a89365a585f14aff5c6c1->enter($__internal_71c60c47ef7d2ed0af16a3dcbd630ce3e434fbad610a89365a585f14aff5c6c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_64732604b5aec36b7a5e676dfbbe5e611a6aa7763d261e707daf587ae668a519 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64732604b5aec36b7a5e676dfbbe5e611a6aa7763d261e707daf587ae668a519->enter($__internal_64732604b5aec36b7a5e676dfbbe5e611a6aa7763d261e707daf587ae668a519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 180
        echo twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 180, $this->getSourceContext()); })()), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_64732604b5aec36b7a5e676dfbbe5e611a6aa7763d261e707daf587ae668a519->leave($__internal_64732604b5aec36b7a5e676dfbbe5e611a6aa7763d261e707daf587ae668a519_prof);

        
        $__internal_71c60c47ef7d2ed0af16a3dcbd630ce3e434fbad610a89365a585f14aff5c6c1->leave($__internal_71c60c47ef7d2ed0af16a3dcbd630ce3e434fbad610a89365a585f14aff5c6c1_prof);

    }

    // line 183
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_483531c458f36bfe99a65311fec58f3803617eb97f9f73988e7ae89cdeb026e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_483531c458f36bfe99a65311fec58f3803617eb97f9f73988e7ae89cdeb026e3->enter($__internal_483531c458f36bfe99a65311fec58f3803617eb97f9f73988e7ae89cdeb026e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        $__internal_82e89369c664493d486453884493d835e92250d7eb871fbc157948feb3140bc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82e89369c664493d486453884493d835e92250d7eb871fbc157948feb3140bc8->enter($__internal_82e89369c664493d486453884493d835e92250d7eb871fbc157948feb3140bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 184
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 184, $this->getSourceContext()); })()), "url")) : ("url"));
        // line 185
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_82e89369c664493d486453884493d835e92250d7eb871fbc157948feb3140bc8->leave($__internal_82e89369c664493d486453884493d835e92250d7eb871fbc157948feb3140bc8_prof);

        
        $__internal_483531c458f36bfe99a65311fec58f3803617eb97f9f73988e7ae89cdeb026e3->leave($__internal_483531c458f36bfe99a65311fec58f3803617eb97f9f73988e7ae89cdeb026e3_prof);

    }

    // line 188
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_15f6f6b2bd0b36d4bd0b8c6eed29cbacc95cdabcc63207c71582364bcc4b8fa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15f6f6b2bd0b36d4bd0b8c6eed29cbacc95cdabcc63207c71582364bcc4b8fa0->enter($__internal_15f6f6b2bd0b36d4bd0b8c6eed29cbacc95cdabcc63207c71582364bcc4b8fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        $__internal_9d71a1961014dfd19f24ecccb3879202d3a3fe913893fc235d4dbd8ba64e7a72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d71a1961014dfd19f24ecccb3879202d3a3fe913893fc235d4dbd8ba64e7a72->enter($__internal_9d71a1961014dfd19f24ecccb3879202d3a3fe913893fc235d4dbd8ba64e7a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 189
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 189, $this->getSourceContext()); })()), "search")) : ("search"));
        // line 190
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_9d71a1961014dfd19f24ecccb3879202d3a3fe913893fc235d4dbd8ba64e7a72->leave($__internal_9d71a1961014dfd19f24ecccb3879202d3a3fe913893fc235d4dbd8ba64e7a72_prof);

        
        $__internal_15f6f6b2bd0b36d4bd0b8c6eed29cbacc95cdabcc63207c71582364bcc4b8fa0->leave($__internal_15f6f6b2bd0b36d4bd0b8c6eed29cbacc95cdabcc63207c71582364bcc4b8fa0_prof);

    }

    // line 193
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_83981fc1460bf0fa4c892b933c075c3572572b56a17d637ccaf703465c6adbd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83981fc1460bf0fa4c892b933c075c3572572b56a17d637ccaf703465c6adbd3->enter($__internal_83981fc1460bf0fa4c892b933c075c3572572b56a17d637ccaf703465c6adbd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_add84a144499068e31f5449e6c742dcc29be8cc122f3685d163ea964b46a5a4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_add84a144499068e31f5449e6c742dcc29be8cc122f3685d163ea964b46a5a4d->enter($__internal_add84a144499068e31f5449e6c742dcc29be8cc122f3685d163ea964b46a5a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 194
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 194, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 195
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_add84a144499068e31f5449e6c742dcc29be8cc122f3685d163ea964b46a5a4d->leave($__internal_add84a144499068e31f5449e6c742dcc29be8cc122f3685d163ea964b46a5a4d_prof);

        
        $__internal_83981fc1460bf0fa4c892b933c075c3572572b56a17d637ccaf703465c6adbd3->leave($__internal_83981fc1460bf0fa4c892b933c075c3572572b56a17d637ccaf703465c6adbd3_prof);

    }

    // line 198
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_b630ba428dd6bdecfa8b2456149ccb0842b75344de9bd8720a4390a4e10cc43a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b630ba428dd6bdecfa8b2456149ccb0842b75344de9bd8720a4390a4e10cc43a->enter($__internal_b630ba428dd6bdecfa8b2456149ccb0842b75344de9bd8720a4390a4e10cc43a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        $__internal_6aa976e9ce9d12a2e467874828ab28c8ca6a0669fdc77dc3a2487249fbc89d7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aa976e9ce9d12a2e467874828ab28c8ca6a0669fdc77dc3a2487249fbc89d7d->enter($__internal_6aa976e9ce9d12a2e467874828ab28c8ca6a0669fdc77dc3a2487249fbc89d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 199
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 199, $this->getSourceContext()); })()), "password")) : ("password"));
        // line 200
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_6aa976e9ce9d12a2e467874828ab28c8ca6a0669fdc77dc3a2487249fbc89d7d->leave($__internal_6aa976e9ce9d12a2e467874828ab28c8ca6a0669fdc77dc3a2487249fbc89d7d_prof);

        
        $__internal_b630ba428dd6bdecfa8b2456149ccb0842b75344de9bd8720a4390a4e10cc43a->leave($__internal_b630ba428dd6bdecfa8b2456149ccb0842b75344de9bd8720a4390a4e10cc43a_prof);

    }

    // line 203
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_44ffa20fbc4fd23b369efba269de5aa8105ed36ce4eaef7086be63f7f605d17b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44ffa20fbc4fd23b369efba269de5aa8105ed36ce4eaef7086be63f7f605d17b->enter($__internal_44ffa20fbc4fd23b369efba269de5aa8105ed36ce4eaef7086be63f7f605d17b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        $__internal_baabb96687e558b4fc4489d7c5681eb13b9b9505c6158a1b9ff0742d5662f6ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baabb96687e558b4fc4489d7c5681eb13b9b9505c6158a1b9ff0742d5662f6ce->enter($__internal_baabb96687e558b4fc4489d7c5681eb13b9b9505c6158a1b9ff0742d5662f6ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 204
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 204, $this->getSourceContext()); })()), "hidden")) : ("hidden"));
        // line 205
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_baabb96687e558b4fc4489d7c5681eb13b9b9505c6158a1b9ff0742d5662f6ce->leave($__internal_baabb96687e558b4fc4489d7c5681eb13b9b9505c6158a1b9ff0742d5662f6ce_prof);

        
        $__internal_44ffa20fbc4fd23b369efba269de5aa8105ed36ce4eaef7086be63f7f605d17b->leave($__internal_44ffa20fbc4fd23b369efba269de5aa8105ed36ce4eaef7086be63f7f605d17b_prof);

    }

    // line 208
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_f53168a4a096ab5e5692a5215976e1821a29f5ca767dbcd9f087bb04d4289e06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f53168a4a096ab5e5692a5215976e1821a29f5ca767dbcd9f087bb04d4289e06->enter($__internal_f53168a4a096ab5e5692a5215976e1821a29f5ca767dbcd9f087bb04d4289e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        $__internal_a815e1807ab51e83cbd1588d0b3069cc37db9026329a4d56f0981552c34c8bc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a815e1807ab51e83cbd1588d0b3069cc37db9026329a4d56f0981552c34c8bc1->enter($__internal_a815e1807ab51e83cbd1588d0b3069cc37db9026329a4d56f0981552c34c8bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 209
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 209, $this->getSourceContext()); })()), "email")) : ("email"));
        // line 210
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_a815e1807ab51e83cbd1588d0b3069cc37db9026329a4d56f0981552c34c8bc1->leave($__internal_a815e1807ab51e83cbd1588d0b3069cc37db9026329a4d56f0981552c34c8bc1_prof);

        
        $__internal_f53168a4a096ab5e5692a5215976e1821a29f5ca767dbcd9f087bb04d4289e06->leave($__internal_f53168a4a096ab5e5692a5215976e1821a29f5ca767dbcd9f087bb04d4289e06_prof);

    }

    // line 213
    public function block_range_widget($context, array $blocks = array())
    {
        $__internal_a08b095d8c107b6006d85dc27040023a0f6791f35dce93f2861e337a7aada744 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a08b095d8c107b6006d85dc27040023a0f6791f35dce93f2861e337a7aada744->enter($__internal_a08b095d8c107b6006d85dc27040023a0f6791f35dce93f2861e337a7aada744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        $__internal_50caf14bcf6fcf8140958325602e60cfd7da1c4f289cdc44e666f5857320da6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50caf14bcf6fcf8140958325602e60cfd7da1c4f289cdc44e666f5857320da6e->enter($__internal_50caf14bcf6fcf8140958325602e60cfd7da1c4f289cdc44e666f5857320da6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        // line 214
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 214, $this->getSourceContext()); })()), "range")) : ("range"));
        // line 215
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_50caf14bcf6fcf8140958325602e60cfd7da1c4f289cdc44e666f5857320da6e->leave($__internal_50caf14bcf6fcf8140958325602e60cfd7da1c4f289cdc44e666f5857320da6e_prof);

        
        $__internal_a08b095d8c107b6006d85dc27040023a0f6791f35dce93f2861e337a7aada744->leave($__internal_a08b095d8c107b6006d85dc27040023a0f6791f35dce93f2861e337a7aada744_prof);

    }

    // line 218
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_1ed449809621828053fb003e86a6bbdc2733280c8eefa5bd5e17eb3ec458a9fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ed449809621828053fb003e86a6bbdc2733280c8eefa5bd5e17eb3ec458a9fd->enter($__internal_1ed449809621828053fb003e86a6bbdc2733280c8eefa5bd5e17eb3ec458a9fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_9ccd4876b5b452dffbf7fbd7f462c7825ed10fbd88110aca80d84eba134057d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ccd4876b5b452dffbf7fbd7f462c7825ed10fbd88110aca80d84eba134057d6->enter($__internal_9ccd4876b5b452dffbf7fbd7f462c7825ed10fbd88110aca80d84eba134057d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

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
        
        $__internal_9ccd4876b5b452dffbf7fbd7f462c7825ed10fbd88110aca80d84eba134057d6->leave($__internal_9ccd4876b5b452dffbf7fbd7f462c7825ed10fbd88110aca80d84eba134057d6_prof);

        
        $__internal_1ed449809621828053fb003e86a6bbdc2733280c8eefa5bd5e17eb3ec458a9fd->leave($__internal_1ed449809621828053fb003e86a6bbdc2733280c8eefa5bd5e17eb3ec458a9fd_prof);

    }

    // line 232
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_9f6d06cde638e92832136a343cb25cc2de9f35d8b446ecd138b015e0ad0ee406 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f6d06cde638e92832136a343cb25cc2de9f35d8b446ecd138b015e0ad0ee406->enter($__internal_9f6d06cde638e92832136a343cb25cc2de9f35d8b446ecd138b015e0ad0ee406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        $__internal_3706f573a1e8a6f20b0a4ec147c76134b025d84aab325206b83c8bbfcc67bc00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3706f573a1e8a6f20b0a4ec147c76134b025d84aab325206b83c8bbfcc67bc00->enter($__internal_3706f573a1e8a6f20b0a4ec147c76134b025d84aab325206b83c8bbfcc67bc00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 233
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 233, $this->getSourceContext()); })()), "submit")) : ("submit"));
        // line 234
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_3706f573a1e8a6f20b0a4ec147c76134b025d84aab325206b83c8bbfcc67bc00->leave($__internal_3706f573a1e8a6f20b0a4ec147c76134b025d84aab325206b83c8bbfcc67bc00_prof);

        
        $__internal_9f6d06cde638e92832136a343cb25cc2de9f35d8b446ecd138b015e0ad0ee406->leave($__internal_9f6d06cde638e92832136a343cb25cc2de9f35d8b446ecd138b015e0ad0ee406_prof);

    }

    // line 237
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_ad8f87417482c7b513582ed284e2da7d4fa49239d051e0f0d7f49b184a2b64fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad8f87417482c7b513582ed284e2da7d4fa49239d051e0f0d7f49b184a2b64fe->enter($__internal_ad8f87417482c7b513582ed284e2da7d4fa49239d051e0f0d7f49b184a2b64fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        $__internal_e3cc6a68283a7b40b9f6ae8d973c3f9d1fec8f6331ac45b5b87e924418c18899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3cc6a68283a7b40b9f6ae8d973c3f9d1fec8f6331ac45b5b87e924418c18899->enter($__internal_e3cc6a68283a7b40b9f6ae8d973c3f9d1fec8f6331ac45b5b87e924418c18899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 238
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 238, $this->getSourceContext()); })()), "reset")) : ("reset"));
        // line 239
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_e3cc6a68283a7b40b9f6ae8d973c3f9d1fec8f6331ac45b5b87e924418c18899->leave($__internal_e3cc6a68283a7b40b9f6ae8d973c3f9d1fec8f6331ac45b5b87e924418c18899_prof);

        
        $__internal_ad8f87417482c7b513582ed284e2da7d4fa49239d051e0f0d7f49b184a2b64fe->leave($__internal_ad8f87417482c7b513582ed284e2da7d4fa49239d051e0f0d7f49b184a2b64fe_prof);

    }

    // line 242
    public function block_tel_widget($context, array $blocks = array())
    {
        $__internal_51606665579ab86e48ec8f8274e130cd9e441fb5bd15fbead202899357114f53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51606665579ab86e48ec8f8274e130cd9e441fb5bd15fbead202899357114f53->enter($__internal_51606665579ab86e48ec8f8274e130cd9e441fb5bd15fbead202899357114f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        $__internal_5ee55be38ddf5ec1665ff54bbb8aee21cffa2fa7e6ec1b7c97b37842ef214610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ee55be38ddf5ec1665ff54bbb8aee21cffa2fa7e6ec1b7c97b37842ef214610->enter($__internal_5ee55be38ddf5ec1665ff54bbb8aee21cffa2fa7e6ec1b7c97b37842ef214610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        // line 243
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 243, $this->getSourceContext()); })()), "tel")) : ("tel"));
        // line 244
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_5ee55be38ddf5ec1665ff54bbb8aee21cffa2fa7e6ec1b7c97b37842ef214610->leave($__internal_5ee55be38ddf5ec1665ff54bbb8aee21cffa2fa7e6ec1b7c97b37842ef214610_prof);

        
        $__internal_51606665579ab86e48ec8f8274e130cd9e441fb5bd15fbead202899357114f53->leave($__internal_51606665579ab86e48ec8f8274e130cd9e441fb5bd15fbead202899357114f53_prof);

    }

    // line 247
    public function block_color_widget($context, array $blocks = array())
    {
        $__internal_bb9ea279b667aa86453443c36840241cbdec5a33c83a295d6eee15fa6b2e53ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb9ea279b667aa86453443c36840241cbdec5a33c83a295d6eee15fa6b2e53ae->enter($__internal_bb9ea279b667aa86453443c36840241cbdec5a33c83a295d6eee15fa6b2e53ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        $__internal_e51fe4718297f2c8d19398f93e55d5d6b07b97a765df0459a22b17fe8fbee706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e51fe4718297f2c8d19398f93e55d5d6b07b97a765df0459a22b17fe8fbee706->enter($__internal_e51fe4718297f2c8d19398f93e55d5d6b07b97a765df0459a22b17fe8fbee706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        // line 248
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 248, $this->getSourceContext()); })()), "color")) : ("color"));
        // line 249
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_e51fe4718297f2c8d19398f93e55d5d6b07b97a765df0459a22b17fe8fbee706->leave($__internal_e51fe4718297f2c8d19398f93e55d5d6b07b97a765df0459a22b17fe8fbee706_prof);

        
        $__internal_bb9ea279b667aa86453443c36840241cbdec5a33c83a295d6eee15fa6b2e53ae->leave($__internal_bb9ea279b667aa86453443c36840241cbdec5a33c83a295d6eee15fa6b2e53ae_prof);

    }

    // line 254
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_52309db155ea120ac995ad3071fe7569977cc4a1225245b0e072fbf91e6a8fbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52309db155ea120ac995ad3071fe7569977cc4a1225245b0e072fbf91e6a8fbf->enter($__internal_52309db155ea120ac995ad3071fe7569977cc4a1225245b0e072fbf91e6a8fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_e954b8bbd4907911be715b95437d55d7cb54436b3c44c7f3dc627eededf13eda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e954b8bbd4907911be715b95437d55d7cb54436b3c44c7f3dc627eededf13eda->enter($__internal_e954b8bbd4907911be715b95437d55d7cb54436b3c44c7f3dc627eededf13eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
                $__internal_ed830114b0dd99576b288f5b8e9d4b4b78544a80c5fc14f4f0af8209d7e4581e = array("attr" => (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 272, $this->getSourceContext()); })()));
                if (!is_array($__internal_ed830114b0dd99576b288f5b8e9d4b4b78544a80c5fc14f4f0af8209d7e4581e)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_ed830114b0dd99576b288f5b8e9d4b4b78544a80c5fc14f4f0af8209d7e4581e);
                $this->displayBlock("attributes", $context, $blocks);
                $context = $context['_parent'];
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 272, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 272, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 272, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 272, $this->getSourceContext()); })())))), "html", null, true);
            echo "</";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 272, $this->getSourceContext()); })()), "label")) : ("label")), "html", null, true);
            echo ">";
        }
        
        $__internal_e954b8bbd4907911be715b95437d55d7cb54436b3c44c7f3dc627eededf13eda->leave($__internal_e954b8bbd4907911be715b95437d55d7cb54436b3c44c7f3dc627eededf13eda_prof);

        
        $__internal_52309db155ea120ac995ad3071fe7569977cc4a1225245b0e072fbf91e6a8fbf->leave($__internal_52309db155ea120ac995ad3071fe7569977cc4a1225245b0e072fbf91e6a8fbf_prof);

    }

    // line 276
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_b486fef75ef90d7c966f6233a1d3b42d0d297a3ed159eae0fcdc29e7266488fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b486fef75ef90d7c966f6233a1d3b42d0d297a3ed159eae0fcdc29e7266488fb->enter($__internal_b486fef75ef90d7c966f6233a1d3b42d0d297a3ed159eae0fcdc29e7266488fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        $__internal_705adf637bec61356ca22feaf578d8968125f6e95196b4cee13013c925d33486 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_705adf637bec61356ca22feaf578d8968125f6e95196b4cee13013c925d33486->enter($__internal_705adf637bec61356ca22feaf578d8968125f6e95196b4cee13013c925d33486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_705adf637bec61356ca22feaf578d8968125f6e95196b4cee13013c925d33486->leave($__internal_705adf637bec61356ca22feaf578d8968125f6e95196b4cee13013c925d33486_prof);

        
        $__internal_b486fef75ef90d7c966f6233a1d3b42d0d297a3ed159eae0fcdc29e7266488fb->leave($__internal_b486fef75ef90d7c966f6233a1d3b42d0d297a3ed159eae0fcdc29e7266488fb_prof);

    }

    // line 280
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_3ef70e2651570626d41beca94e1c1f050fc7f0585a285fd1db7b77e255f93580 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ef70e2651570626d41beca94e1c1f050fc7f0585a285fd1db7b77e255f93580->enter($__internal_3ef70e2651570626d41beca94e1c1f050fc7f0585a285fd1db7b77e255f93580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        $__internal_bcc11f213263b1bd26989d404ba778c86fc2c9d4489931e268de52533fe17baa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcc11f213263b1bd26989d404ba778c86fc2c9d4489931e268de52533fe17baa->enter($__internal_bcc11f213263b1bd26989d404ba778c86fc2c9d4489931e268de52533fe17baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 285
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_bcc11f213263b1bd26989d404ba778c86fc2c9d4489931e268de52533fe17baa->leave($__internal_bcc11f213263b1bd26989d404ba778c86fc2c9d4489931e268de52533fe17baa_prof);

        
        $__internal_3ef70e2651570626d41beca94e1c1f050fc7f0585a285fd1db7b77e255f93580->leave($__internal_3ef70e2651570626d41beca94e1c1f050fc7f0585a285fd1db7b77e255f93580_prof);

    }

    // line 288
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_bafe4b6a93871d8abe1ee10adfd6f03b3629e7b2a45fd77a5076592f5a01d603 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bafe4b6a93871d8abe1ee10adfd6f03b3629e7b2a45fd77a5076592f5a01d603->enter($__internal_bafe4b6a93871d8abe1ee10adfd6f03b3629e7b2a45fd77a5076592f5a01d603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_aa7ab1ab6dc2806a5f57767c7155a536dc1b3c039b9e2a5b95c02617d28d6a62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa7ab1ab6dc2806a5f57767c7155a536dc1b3c039b9e2a5b95c02617d28d6a62->enter($__internal_aa7ab1ab6dc2806a5f57767c7155a536dc1b3c039b9e2a5b95c02617d28d6a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_aa7ab1ab6dc2806a5f57767c7155a536dc1b3c039b9e2a5b95c02617d28d6a62->leave($__internal_aa7ab1ab6dc2806a5f57767c7155a536dc1b3c039b9e2a5b95c02617d28d6a62_prof);

        
        $__internal_bafe4b6a93871d8abe1ee10adfd6f03b3629e7b2a45fd77a5076592f5a01d603->leave($__internal_bafe4b6a93871d8abe1ee10adfd6f03b3629e7b2a45fd77a5076592f5a01d603_prof);

    }

    // line 296
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_26d7429446ddeb7a0bd55f2f1e9547fb5320d4a28de3cd33a816e5c73e214e52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26d7429446ddeb7a0bd55f2f1e9547fb5320d4a28de3cd33a816e5c73e214e52->enter($__internal_26d7429446ddeb7a0bd55f2f1e9547fb5320d4a28de3cd33a816e5c73e214e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_339a6747fb631764b72d09ad37d443af9e26b423e1afbb18c97d9f8f891071ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_339a6747fb631764b72d09ad37d443af9e26b423e1afbb18c97d9f8f891071ff->enter($__internal_339a6747fb631764b72d09ad37d443af9e26b423e1afbb18c97d9f8f891071ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 297
        echo "<div>";
        // line 298
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 298, $this->getSourceContext()); })()), 'widget');
        // line 299
        echo "</div>";
        
        $__internal_339a6747fb631764b72d09ad37d443af9e26b423e1afbb18c97d9f8f891071ff->leave($__internal_339a6747fb631764b72d09ad37d443af9e26b423e1afbb18c97d9f8f891071ff_prof);

        
        $__internal_26d7429446ddeb7a0bd55f2f1e9547fb5320d4a28de3cd33a816e5c73e214e52->leave($__internal_26d7429446ddeb7a0bd55f2f1e9547fb5320d4a28de3cd33a816e5c73e214e52_prof);

    }

    // line 302
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_ea915161e32934ae28efa8110a493fe6e5bed22342f7e96c5f70ab574db20ef7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea915161e32934ae28efa8110a493fe6e5bed22342f7e96c5f70ab574db20ef7->enter($__internal_ea915161e32934ae28efa8110a493fe6e5bed22342f7e96c5f70ab574db20ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_bf824f59f3045f900d406269802f36eb67bdb2d7dd9b5759d80707816c84fe1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf824f59f3045f900d406269802f36eb67bdb2d7dd9b5759d80707816c84fe1b->enter($__internal_bf824f59f3045f900d406269802f36eb67bdb2d7dd9b5759d80707816c84fe1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 303
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 303, $this->getSourceContext()); })()), 'widget');
        
        $__internal_bf824f59f3045f900d406269802f36eb67bdb2d7dd9b5759d80707816c84fe1b->leave($__internal_bf824f59f3045f900d406269802f36eb67bdb2d7dd9b5759d80707816c84fe1b_prof);

        
        $__internal_ea915161e32934ae28efa8110a493fe6e5bed22342f7e96c5f70ab574db20ef7->leave($__internal_ea915161e32934ae28efa8110a493fe6e5bed22342f7e96c5f70ab574db20ef7_prof);

    }

    // line 308
    public function block_form($context, array $blocks = array())
    {
        $__internal_7ac0089002bd2d1607eca7061aa433faf754e1b55c487f75b00e28e4d7243c8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ac0089002bd2d1607eca7061aa433faf754e1b55c487f75b00e28e4d7243c8e->enter($__internal_7ac0089002bd2d1607eca7061aa433faf754e1b55c487f75b00e28e4d7243c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_d6692a6bb28907942d5d929264df61ae8360f092eb10053ce11c75c11b72e650 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6692a6bb28907942d5d929264df61ae8360f092eb10053ce11c75c11b72e650->enter($__internal_d6692a6bb28907942d5d929264df61ae8360f092eb10053ce11c75c11b72e650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 309
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 309, $this->getSourceContext()); })()), 'form_start');
        // line 310
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 310, $this->getSourceContext()); })()), 'widget');
        // line 311
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 311, $this->getSourceContext()); })()), 'form_end');
        
        $__internal_d6692a6bb28907942d5d929264df61ae8360f092eb10053ce11c75c11b72e650->leave($__internal_d6692a6bb28907942d5d929264df61ae8360f092eb10053ce11c75c11b72e650_prof);

        
        $__internal_7ac0089002bd2d1607eca7061aa433faf754e1b55c487f75b00e28e4d7243c8e->leave($__internal_7ac0089002bd2d1607eca7061aa433faf754e1b55c487f75b00e28e4d7243c8e_prof);

    }

    // line 314
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_7e2a185368b5e1e2c79e739ff41f24b52126874282e7daf02f3cc4cf130b92c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e2a185368b5e1e2c79e739ff41f24b52126874282e7daf02f3cc4cf130b92c5->enter($__internal_7e2a185368b5e1e2c79e739ff41f24b52126874282e7daf02f3cc4cf130b92c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_68505e0f52d9638fb86df0e3862f40ae0e0d651a17a7a13d44513ccc573d523e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68505e0f52d9638fb86df0e3862f40ae0e0d651a17a7a13d44513ccc573d523e->enter($__internal_68505e0f52d9638fb86df0e3862f40ae0e0d651a17a7a13d44513ccc573d523e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

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
        
        $__internal_68505e0f52d9638fb86df0e3862f40ae0e0d651a17a7a13d44513ccc573d523e->leave($__internal_68505e0f52d9638fb86df0e3862f40ae0e0d651a17a7a13d44513ccc573d523e_prof);

        
        $__internal_7e2a185368b5e1e2c79e739ff41f24b52126874282e7daf02f3cc4cf130b92c5->leave($__internal_7e2a185368b5e1e2c79e739ff41f24b52126874282e7daf02f3cc4cf130b92c5_prof);

    }

    // line 328
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_f4eedd664b39f3086f7624de229fe627cd9da45535f3000bdc8fcd35a7084eaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4eedd664b39f3086f7624de229fe627cd9da45535f3000bdc8fcd35a7084eaa->enter($__internal_f4eedd664b39f3086f7624de229fe627cd9da45535f3000bdc8fcd35a7084eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        $__internal_df12e6fb113580d9562d7407f6f4cc77127c778b0c72a2606221b85438a25f9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df12e6fb113580d9562d7407f6f4cc77127c778b0c72a2606221b85438a25f9e->enter($__internal_df12e6fb113580d9562d7407f6f4cc77127c778b0c72a2606221b85438a25f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 329
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) || array_key_exists("render_rest", $context) ? $context["render_rest"] : (function () { throw new Twig_Error_Runtime('Variable "render_rest" does not exist.', 329, $this->getSourceContext()); })()))) {
            // line 330
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 330, $this->getSourceContext()); })()), 'rest');
        }
        // line 332
        echo "</form>";
        
        $__internal_df12e6fb113580d9562d7407f6f4cc77127c778b0c72a2606221b85438a25f9e->leave($__internal_df12e6fb113580d9562d7407f6f4cc77127c778b0c72a2606221b85438a25f9e_prof);

        
        $__internal_f4eedd664b39f3086f7624de229fe627cd9da45535f3000bdc8fcd35a7084eaa->leave($__internal_f4eedd664b39f3086f7624de229fe627cd9da45535f3000bdc8fcd35a7084eaa_prof);

    }

    // line 335
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_a6edc23e1e0aa073a657158a1e6ce635083d51df81e4e685ba2292e28ea866cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6edc23e1e0aa073a657158a1e6ce635083d51df81e4e685ba2292e28ea866cc->enter($__internal_a6edc23e1e0aa073a657158a1e6ce635083d51df81e4e685ba2292e28ea866cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_63e0733ff6636ec8aad524a846b09bc5481721c61b8f589c2747d102013a196b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63e0733ff6636ec8aad524a846b09bc5481721c61b8f589c2747d102013a196b->enter($__internal_63e0733ff6636ec8aad524a846b09bc5481721c61b8f589c2747d102013a196b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_63e0733ff6636ec8aad524a846b09bc5481721c61b8f589c2747d102013a196b->leave($__internal_63e0733ff6636ec8aad524a846b09bc5481721c61b8f589c2747d102013a196b_prof);

        
        $__internal_a6edc23e1e0aa073a657158a1e6ce635083d51df81e4e685ba2292e28ea866cc->leave($__internal_a6edc23e1e0aa073a657158a1e6ce635083d51df81e4e685ba2292e28ea866cc_prof);

    }

    // line 345
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_c86efef50aa917a126e8b685d78da679eddc2767383e3b8e791c83128fe8d57e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c86efef50aa917a126e8b685d78da679eddc2767383e3b8e791c83128fe8d57e->enter($__internal_c86efef50aa917a126e8b685d78da679eddc2767383e3b8e791c83128fe8d57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        $__internal_857d3a17dc3a15699121065638831594020594141257aa9af011d8ff0bb062ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_857d3a17dc3a15699121065638831594020594141257aa9af011d8ff0bb062ad->enter($__internal_857d3a17dc3a15699121065638831594020594141257aa9af011d8ff0bb062ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

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
        
        $__internal_857d3a17dc3a15699121065638831594020594141257aa9af011d8ff0bb062ad->leave($__internal_857d3a17dc3a15699121065638831594020594141257aa9af011d8ff0bb062ad_prof);

        
        $__internal_c86efef50aa917a126e8b685d78da679eddc2767383e3b8e791c83128fe8d57e->leave($__internal_c86efef50aa917a126e8b685d78da679eddc2767383e3b8e791c83128fe8d57e_prof);

    }

    // line 369
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_87629aa385807e0cc6f6c3256e89d111d04e902dbd61ea81571ce5aac668c8a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87629aa385807e0cc6f6c3256e89d111d04e902dbd61ea81571ce5aac668c8a2->enter($__internal_87629aa385807e0cc6f6c3256e89d111d04e902dbd61ea81571ce5aac668c8a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        $__internal_332e775d75ef6396958c3500eeea79dbdccd3f705344feef880984d93dbd83df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_332e775d75ef6396958c3500eeea79dbdccd3f705344feef880984d93dbd83df->enter($__internal_332e775d75ef6396958c3500eeea79dbdccd3f705344feef880984d93dbd83df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

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
        
        $__internal_332e775d75ef6396958c3500eeea79dbdccd3f705344feef880984d93dbd83df->leave($__internal_332e775d75ef6396958c3500eeea79dbdccd3f705344feef880984d93dbd83df_prof);

        
        $__internal_87629aa385807e0cc6f6c3256e89d111d04e902dbd61ea81571ce5aac668c8a2->leave($__internal_87629aa385807e0cc6f6c3256e89d111d04e902dbd61ea81571ce5aac668c8a2_prof);

    }

    // line 375
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_1339089a02953e04ffe852a7eefdc88f81bfebd1c6ae52c9950d061d20b041ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1339089a02953e04ffe852a7eefdc88f81bfebd1c6ae52c9950d061d20b041ab->enter($__internal_1339089a02953e04ffe852a7eefdc88f81bfebd1c6ae52c9950d061d20b041ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_2624d770ef4cf36a22305e35917fc965795397a7bf2ff25e94bc5024cf5930c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2624d770ef4cf36a22305e35917fc965795397a7bf2ff25e94bc5024cf5930c7->enter($__internal_2624d770ef4cf36a22305e35917fc965795397a7bf2ff25e94bc5024cf5930c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

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
        
        $__internal_2624d770ef4cf36a22305e35917fc965795397a7bf2ff25e94bc5024cf5930c7->leave($__internal_2624d770ef4cf36a22305e35917fc965795397a7bf2ff25e94bc5024cf5930c7_prof);

        
        $__internal_1339089a02953e04ffe852a7eefdc88f81bfebd1c6ae52c9950d061d20b041ab->leave($__internal_1339089a02953e04ffe852a7eefdc88f81bfebd1c6ae52c9950d061d20b041ab_prof);

    }

    // line 382
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_cdf2373ad2cbb6e087e433070acf67bf425c4213135cbb165670b0481fc19076 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdf2373ad2cbb6e087e433070acf67bf425c4213135cbb165670b0481fc19076->enter($__internal_cdf2373ad2cbb6e087e433070acf67bf425c4213135cbb165670b0481fc19076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        $__internal_f9cb00b2184d372662f137259eb55ae5dd42b18f203e6f86892fd87fbd49b986 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9cb00b2184d372662f137259eb55ae5dd42b18f203e6f86892fd87fbd49b986->enter($__internal_f9cb00b2184d372662f137259eb55ae5dd42b18f203e6f86892fd87fbd49b986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 383
        if ( !twig_test_empty((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 383, $this->getSourceContext()); })()))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 383, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        // line 384
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_f9cb00b2184d372662f137259eb55ae5dd42b18f203e6f86892fd87fbd49b986->leave($__internal_f9cb00b2184d372662f137259eb55ae5dd42b18f203e6f86892fd87fbd49b986_prof);

        
        $__internal_cdf2373ad2cbb6e087e433070acf67bf425c4213135cbb165670b0481fc19076->leave($__internal_cdf2373ad2cbb6e087e433070acf67bf425c4213135cbb165670b0481fc19076_prof);

    }

    // line 387
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_87eb94fe6b8299fb913710f4ccb21c35494eff784099cafcd8511337af418f10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87eb94fe6b8299fb913710f4ccb21c35494eff784099cafcd8511337af418f10->enter($__internal_87eb94fe6b8299fb913710f4ccb21c35494eff784099cafcd8511337af418f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        $__internal_2043467113cbc37ef3bd9ce49ce5a30fa2d75c1353d056b44c880ed597db83fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2043467113cbc37ef3bd9ce49ce5a30fa2d75c1353d056b44c880ed597db83fa->enter($__internal_2043467113cbc37ef3bd9ce49ce5a30fa2d75c1353d056b44c880ed597db83fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

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
        
        $__internal_2043467113cbc37ef3bd9ce49ce5a30fa2d75c1353d056b44c880ed597db83fa->leave($__internal_2043467113cbc37ef3bd9ce49ce5a30fa2d75c1353d056b44c880ed597db83fa_prof);

        
        $__internal_87eb94fe6b8299fb913710f4ccb21c35494eff784099cafcd8511337af418f10->leave($__internal_87eb94fe6b8299fb913710f4ccb21c35494eff784099cafcd8511337af418f10_prof);

    }

    // line 392
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_eb4d67389ba43b876412775f4a0813324a39c9f6d31ce1357244b59f28134f87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb4d67389ba43b876412775f4a0813324a39c9f6d31ce1357244b59f28134f87->enter($__internal_eb4d67389ba43b876412775f4a0813324a39c9f6d31ce1357244b59f28134f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        $__internal_44b790b16edcfac578b8a275fff79434680c756db7aae9e74fb710b8d2c8d910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44b790b16edcfac578b8a275fff79434680c756db7aae9e74fb710b8d2c8d910->enter($__internal_44b790b16edcfac578b8a275fff79434680c756db7aae9e74fb710b8d2c8d910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

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
        
        $__internal_44b790b16edcfac578b8a275fff79434680c756db7aae9e74fb710b8d2c8d910->leave($__internal_44b790b16edcfac578b8a275fff79434680c756db7aae9e74fb710b8d2c8d910_prof);

        
        $__internal_eb4d67389ba43b876412775f4a0813324a39c9f6d31ce1357244b59f28134f87->leave($__internal_eb4d67389ba43b876412775f4a0813324a39c9f6d31ce1357244b59f28134f87_prof);

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
