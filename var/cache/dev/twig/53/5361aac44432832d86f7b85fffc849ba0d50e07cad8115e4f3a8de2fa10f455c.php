<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_5fe575c078ad6ca6e6a2dce20c9a2cd9f6f6c73b158921effcdff4351e6c7935 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'button_widget' => array($this, 'block_button_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d3189abfe1af447d77c0d3fdde77ab4052e83a8db273822e877c3115e57a068 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d3189abfe1af447d77c0d3fdde77ab4052e83a8db273822e877c3115e57a068->enter($__internal_3d3189abfe1af447d77c0d3fdde77ab4052e83a8db273822e877c3115e57a068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_e5afc73141fd59ef2b9af27f74b0c319da37d441abd2d4cdbcfb9a913a623041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5afc73141fd59ef2b9af27f74b0c319da37d441abd2d4cdbcfb9a913a623041->enter($__internal_e5afc73141fd59ef2b9af27f74b0c319da37d441abd2d4cdbcfb9a913a623041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('button_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 38
        echo "
";
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('form_label', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('choice_label', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('radio_label', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 88
        echo "
";
        // line 90
        echo "
";
        // line 91
        $this->displayBlock('form_row', $context, $blocks);
        // line 98
        echo "
";
        // line 99
        $this->displayBlock('button_row', $context, $blocks);
        // line 104
        echo "
";
        // line 105
        $this->displayBlock('choice_row', $context, $blocks);
        // line 109
        echo "
";
        // line 110
        $this->displayBlock('date_row', $context, $blocks);
        // line 114
        echo "
";
        // line 115
        $this->displayBlock('time_row', $context, $blocks);
        // line 119
        echo "
";
        // line 120
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 124
        echo "
";
        // line 125
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 131
        echo "
";
        // line 132
        $this->displayBlock('radio_row', $context, $blocks);
        // line 138
        echo "
";
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_3d3189abfe1af447d77c0d3fdde77ab4052e83a8db273822e877c3115e57a068->leave($__internal_3d3189abfe1af447d77c0d3fdde77ab4052e83a8db273822e877c3115e57a068_prof);

        
        $__internal_e5afc73141fd59ef2b9af27f74b0c319da37d441abd2d4cdbcfb9a913a623041->leave($__internal_e5afc73141fd59ef2b9af27f74b0c319da37d441abd2d4cdbcfb9a913a623041_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_edcbda1c754b1a589c96c9fb8e5f5c9bbc4e2d965d0f7903bab8788466c439f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edcbda1c754b1a589c96c9fb8e5f5c9bbc4e2d965d0f7903bab8788466c439f3->enter($__internal_edcbda1c754b1a589c96c9fb8e5f5c9bbc4e2d965d0f7903bab8788466c439f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_19573ef8402da4907d4b7d437572306ac6a72dfde5ceeb9ac5229552e33b685f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19573ef8402da4907d4b7d437572306ac6a72dfde5ceeb9ac5229552e33b685f->enter($__internal_19573ef8402da4907d4b7d437572306ac6a72dfde5ceeb9ac5229552e33b685f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_19573ef8402da4907d4b7d437572306ac6a72dfde5ceeb9ac5229552e33b685f->leave($__internal_19573ef8402da4907d4b7d437572306ac6a72dfde5ceeb9ac5229552e33b685f_prof);

        
        $__internal_edcbda1c754b1a589c96c9fb8e5f5c9bbc4e2d965d0f7903bab8788466c439f3->leave($__internal_edcbda1c754b1a589c96c9fb8e5f5c9bbc4e2d965d0f7903bab8788466c439f3_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_77a32da33658b118d5eb5c2d5f9e1ff69700bc937f34f272fbbeb99e0573cf71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77a32da33658b118d5eb5c2d5f9e1ff69700bc937f34f272fbbeb99e0573cf71->enter($__internal_77a32da33658b118d5eb5c2d5f9e1ff69700bc937f34f272fbbeb99e0573cf71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_8ff6c94e9096a133cb343340b8e09fdb287eaa548865f4314a2ea1898c29642a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ff6c94e9096a133cb343340b8e09fdb287eaa548865f4314a2ea1898c29642a->enter($__internal_8ff6c94e9096a133cb343340b8e09fdb287eaa548865f4314a2ea1898c29642a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_8ff6c94e9096a133cb343340b8e09fdb287eaa548865f4314a2ea1898c29642a->leave($__internal_8ff6c94e9096a133cb343340b8e09fdb287eaa548865f4314a2ea1898c29642a_prof);

        
        $__internal_77a32da33658b118d5eb5c2d5f9e1ff69700bc937f34f272fbbeb99e0573cf71->leave($__internal_77a32da33658b118d5eb5c2d5f9e1ff69700bc937f34f272fbbeb99e0573cf71_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_8ab438653000c790baf6ee7293f67afb3bf2c90abae414d503e081cc120ad535 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ab438653000c790baf6ee7293f67afb3bf2c90abae414d503e081cc120ad535->enter($__internal_8ab438653000c790baf6ee7293f67afb3bf2c90abae414d503e081cc120ad535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_ee35d378c022fe37822443bad6555e287b0fd2f2149f35837b4d221b783a806e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee35d378c022fe37822443bad6555e287b0fd2f2149f35837b4d221b783a806e->enter($__internal_ee35d378c022fe37822443bad6555e287b0fd2f2149f35837b4d221b783a806e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 18
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 18, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 19
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 19, $this->getSourceContext()); })()))) {
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 22
            echo "<div class=\"checkbox\">";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 24
            echo "</div>";
        }
        
        $__internal_ee35d378c022fe37822443bad6555e287b0fd2f2149f35837b4d221b783a806e->leave($__internal_ee35d378c022fe37822443bad6555e287b0fd2f2149f35837b4d221b783a806e_prof);

        
        $__internal_8ab438653000c790baf6ee7293f67afb3bf2c90abae414d503e081cc120ad535->leave($__internal_8ab438653000c790baf6ee7293f67afb3bf2c90abae414d503e081cc120ad535_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_552793578adaee0dc54118ea9a383a5d4f7e3f8a890a597ab6de5dfaabf29b61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_552793578adaee0dc54118ea9a383a5d4f7e3f8a890a597ab6de5dfaabf29b61->enter($__internal_552793578adaee0dc54118ea9a383a5d4f7e3f8a890a597ab6de5dfaabf29b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_b1ab0b06abc69add73813f2e657fa001c53d8f54303b795c7fc1b3e2e40a511e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1ab0b06abc69add73813f2e657fa001c53d8f54303b795c7fc1b3e2e40a511e->enter($__internal_b1ab0b06abc69add73813f2e657fa001c53d8f54303b795c7fc1b3e2e40a511e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 29
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 29, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 30
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 30, $this->getSourceContext()); })()))) {
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 33
            echo "<div class=\"radio\">";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 35
            echo "</div>";
        }
        
        $__internal_b1ab0b06abc69add73813f2e657fa001c53d8f54303b795c7fc1b3e2e40a511e->leave($__internal_b1ab0b06abc69add73813f2e657fa001c53d8f54303b795c7fc1b3e2e40a511e_prof);

        
        $__internal_552793578adaee0dc54118ea9a383a5d4f7e3f8a890a597ab6de5dfaabf29b61->leave($__internal_552793578adaee0dc54118ea9a383a5d4f7e3f8a890a597ab6de5dfaabf29b61_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_ee40a1babdd54b6f13c8bb96f097fc128accd2803ec980514aad52c70c14fc5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee40a1babdd54b6f13c8bb96f097fc128accd2803ec980514aad52c70c14fc5b->enter($__internal_ee40a1babdd54b6f13c8bb96f097fc128accd2803ec980514aad52c70c14fc5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_9a112d28e8a65a8ef0b17ed7d151189a40350c5b51dbe4720e93baa06c997da1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a112d28e8a65a8ef0b17ed7d151189a40350c5b51dbe4720e93baa06c997da1->enter($__internal_9a112d28e8a65a8ef0b17ed7d151189a40350c5b51dbe4720e93baa06c997da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_9a112d28e8a65a8ef0b17ed7d151189a40350c5b51dbe4720e93baa06c997da1->leave($__internal_9a112d28e8a65a8ef0b17ed7d151189a40350c5b51dbe4720e93baa06c997da1_prof);

        
        $__internal_ee40a1babdd54b6f13c8bb96f097fc128accd2803ec980514aad52c70c14fc5b->leave($__internal_ee40a1babdd54b6f13c8bb96f097fc128accd2803ec980514aad52c70c14fc5b_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_40f8a8243aba4a785a3676992be06176b5536bea83ebd5a3a5507c9a92495dad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40f8a8243aba4a785a3676992be06176b5536bea83ebd5a3a5507c9a92495dad->enter($__internal_40f8a8243aba4a785a3676992be06176b5536bea83ebd5a3a5507c9a92495dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_32c2bfde43277453ee7d6c04b85c7d61ec3bfad1ffde87a15c5a25e6cc534026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32c2bfde43277453ee7d6c04b85c7d61ec3bfad1ffde87a15c5a25e6cc534026->enter($__internal_32c2bfde43277453ee7d6c04b85c7d61ec3bfad1ffde87a15c5a25e6cc534026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_32c2bfde43277453ee7d6c04b85c7d61ec3bfad1ffde87a15c5a25e6cc534026->leave($__internal_32c2bfde43277453ee7d6c04b85c7d61ec3bfad1ffde87a15c5a25e6cc534026_prof);

        
        $__internal_40f8a8243aba4a785a3676992be06176b5536bea83ebd5a3a5507c9a92495dad->leave($__internal_40f8a8243aba4a785a3676992be06176b5536bea83ebd5a3a5507c9a92495dad_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_673e4035b87f211dc8bc61c6ed1fbb24091bfff6f39124c8e28f3f85298cb47f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_673e4035b87f211dc8bc61c6ed1fbb24091bfff6f39124c8e28f3f85298cb47f->enter($__internal_673e4035b87f211dc8bc61c6ed1fbb24091bfff6f39124c8e28f3f85298cb47f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_62aae78602babbd4ee22a50cd665850aa190e6882759f9088f651912181d5594 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62aae78602babbd4ee22a50cd665850aa190e6882759f9088f651912181d5594->enter($__internal_62aae78602babbd4ee22a50cd665850aa190e6882759f9088f651912181d5594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_62aae78602babbd4ee22a50cd665850aa190e6882759f9088f651912181d5594->leave($__internal_62aae78602babbd4ee22a50cd665850aa190e6882759f9088f651912181d5594_prof);

        
        $__internal_673e4035b87f211dc8bc61c6ed1fbb24091bfff6f39124c8e28f3f85298cb47f->leave($__internal_673e4035b87f211dc8bc61c6ed1fbb24091bfff6f39124c8e28f3f85298cb47f_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_08d30e497659b08ed54e638e716b03561a171c8a0b67586c54fac4663b8da67f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08d30e497659b08ed54e638e716b03561a171c8a0b67586c54fac4663b8da67f->enter($__internal_08d30e497659b08ed54e638e716b03561a171c8a0b67586c54fac4663b8da67f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_ac321065cb5e8011a18f020c6d5e9e9db0057424af3fe29b0eea4c56996770b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac321065cb5e8011a18f020c6d5e9e9db0057424af3fe29b0eea4c56996770b8->enter($__internal_ac321065cb5e8011a18f020c6d5e9e9db0057424af3fe29b0eea4c56996770b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_ac321065cb5e8011a18f020c6d5e9e9db0057424af3fe29b0eea4c56996770b8->leave($__internal_ac321065cb5e8011a18f020c6d5e9e9db0057424af3fe29b0eea4c56996770b8_prof);

        
        $__internal_08d30e497659b08ed54e638e716b03561a171c8a0b67586c54fac4663b8da67f->leave($__internal_08d30e497659b08ed54e638e716b03561a171c8a0b67586c54fac4663b8da67f_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_73335304d050cb6a38a26eb1ad42483f9e06565a26d3b421d240e586c5a78ff1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73335304d050cb6a38a26eb1ad42483f9e06565a26d3b421d240e586c5a78ff1->enter($__internal_73335304d050cb6a38a26eb1ad42483f9e06565a26d3b421d240e586c5a78ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_c067208040011b067cf66563884478aa9080f5ce8ccfe7577f7b44070284032d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c067208040011b067cf66563884478aa9080f5ce8ccfe7577f7b44070284032d->enter($__internal_c067208040011b067cf66563884478aa9080f5ce8ccfe7577f7b44070284032d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 66
        if (array_key_exists("widget", $context)) {
            // line 67
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 67, $this->getSourceContext()); })())) {
                // line 68
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 68, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 70
            if (array_key_exists("parent_label_class", $context)) {
                // line 71
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 71, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 71, $this->getSourceContext()); })())))));
            }
            // line 73
            if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 73, $this->getSourceContext()); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 73, $this->getSourceContext()); })())))) {
                // line 74
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 74, $this->getSourceContext()); })()))) {
                    // line 75
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 75, $this->getSourceContext()); })()), array("%name%" =>                     // line 76
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 76, $this->getSourceContext()); })()), "%id%" =>                     // line 77
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 77, $this->getSourceContext()); })())));
                } else {
                    // line 80
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 80, $this->getSourceContext()); })()));
                }
            }
            // line 83
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 83, $this->getSourceContext()); })()));
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
            echo ">";
            // line 84
            echo (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 84, $this->getSourceContext()); })());
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })()) === false)) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 84, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 84, $this->getSourceContext()); })()))))) : ("")), "html", null, true);
            // line 85
            echo "</label>";
        }
        
        $__internal_c067208040011b067cf66563884478aa9080f5ce8ccfe7577f7b44070284032d->leave($__internal_c067208040011b067cf66563884478aa9080f5ce8ccfe7577f7b44070284032d_prof);

        
        $__internal_73335304d050cb6a38a26eb1ad42483f9e06565a26d3b421d240e586c5a78ff1->leave($__internal_73335304d050cb6a38a26eb1ad42483f9e06565a26d3b421d240e586c5a78ff1_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_ee112ea8f44c3404b503cf8d90125b1671592b0ab5b1971d4972a3096b01736d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee112ea8f44c3404b503cf8d90125b1671592b0ab5b1971d4972a3096b01736d->enter($__internal_ee112ea8f44c3404b503cf8d90125b1671592b0ab5b1971d4972a3096b01736d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_7cca1ae83924a48574dddf10f4e3669c6040f01cd8a0c1ecb88b30cb6dbce2e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cca1ae83924a48574dddf10f4e3669c6040f01cd8a0c1ecb88b30cb6dbce2e2->enter($__internal_7cca1ae83924a48574dddf10f4e3669c6040f01cd8a0c1ecb88b30cb6dbce2e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 92
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 92, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 92, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 92, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 93, $this->getSourceContext()); })()), 'label');
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 94, $this->getSourceContext()); })()), 'widget');
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 95, $this->getSourceContext()); })()), 'errors');
        // line 96
        echo "</div>";
        
        $__internal_7cca1ae83924a48574dddf10f4e3669c6040f01cd8a0c1ecb88b30cb6dbce2e2->leave($__internal_7cca1ae83924a48574dddf10f4e3669c6040f01cd8a0c1ecb88b30cb6dbce2e2_prof);

        
        $__internal_ee112ea8f44c3404b503cf8d90125b1671592b0ab5b1971d4972a3096b01736d->leave($__internal_ee112ea8f44c3404b503cf8d90125b1671592b0ab5b1971d4972a3096b01736d_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_008f436d52e4236442c20cf4652a595937fa4061c8fb07b5e891ed877e352752 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_008f436d52e4236442c20cf4652a595937fa4061c8fb07b5e891ed877e352752->enter($__internal_008f436d52e4236442c20cf4652a595937fa4061c8fb07b5e891ed877e352752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_f65af9a794960b5d5114c699b8ce3ec4457bbe8d99a1288af3530122b85eead8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f65af9a794960b5d5114c699b8ce3ec4457bbe8d99a1288af3530122b85eead8->enter($__internal_f65af9a794960b5d5114c699b8ce3ec4457bbe8d99a1288af3530122b85eead8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_f65af9a794960b5d5114c699b8ce3ec4457bbe8d99a1288af3530122b85eead8->leave($__internal_f65af9a794960b5d5114c699b8ce3ec4457bbe8d99a1288af3530122b85eead8_prof);

        
        $__internal_008f436d52e4236442c20cf4652a595937fa4061c8fb07b5e891ed877e352752->leave($__internal_008f436d52e4236442c20cf4652a595937fa4061c8fb07b5e891ed877e352752_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_8bd179dbc1ea947cdf34668e7faa7742e6c074c425b93923b08b4a9e224f1a1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bd179dbc1ea947cdf34668e7faa7742e6c074c425b93923b08b4a9e224f1a1a->enter($__internal_8bd179dbc1ea947cdf34668e7faa7742e6c074c425b93923b08b4a9e224f1a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_7638528d7ea79c2a766b0b97568d36279e0f8e30a5860efbd41713cf207a1311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7638528d7ea79c2a766b0b97568d36279e0f8e30a5860efbd41713cf207a1311->enter($__internal_7638528d7ea79c2a766b0b97568d36279e0f8e30a5860efbd41713cf207a1311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_7638528d7ea79c2a766b0b97568d36279e0f8e30a5860efbd41713cf207a1311->leave($__internal_7638528d7ea79c2a766b0b97568d36279e0f8e30a5860efbd41713cf207a1311_prof);

        
        $__internal_8bd179dbc1ea947cdf34668e7faa7742e6c074c425b93923b08b4a9e224f1a1a->leave($__internal_8bd179dbc1ea947cdf34668e7faa7742e6c074c425b93923b08b4a9e224f1a1a_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_ff0d759ef9b27a24abe1ac840f4cb5d23dca7a96a096ad1a41be928710409dbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff0d759ef9b27a24abe1ac840f4cb5d23dca7a96a096ad1a41be928710409dbc->enter($__internal_ff0d759ef9b27a24abe1ac840f4cb5d23dca7a96a096ad1a41be928710409dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_23ec3683e5b19124572617f22a55daeca131f513c7a01196259579d33b6b5934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23ec3683e5b19124572617f22a55daeca131f513c7a01196259579d33b6b5934->enter($__internal_23ec3683e5b19124572617f22a55daeca131f513c7a01196259579d33b6b5934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_23ec3683e5b19124572617f22a55daeca131f513c7a01196259579d33b6b5934->leave($__internal_23ec3683e5b19124572617f22a55daeca131f513c7a01196259579d33b6b5934_prof);

        
        $__internal_ff0d759ef9b27a24abe1ac840f4cb5d23dca7a96a096ad1a41be928710409dbc->leave($__internal_ff0d759ef9b27a24abe1ac840f4cb5d23dca7a96a096ad1a41be928710409dbc_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_6c9db0cbd43cbc9b51fc085c0608e32e0486e88379e4ef3e832318f11ccda08f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c9db0cbd43cbc9b51fc085c0608e32e0486e88379e4ef3e832318f11ccda08f->enter($__internal_6c9db0cbd43cbc9b51fc085c0608e32e0486e88379e4ef3e832318f11ccda08f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_54bb7ad15defdf1b3bac6485c876d00e97a7f64377dca0dbbf917c253948dd7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54bb7ad15defdf1b3bac6485c876d00e97a7f64377dca0dbbf917c253948dd7b->enter($__internal_54bb7ad15defdf1b3bac6485c876d00e97a7f64377dca0dbbf917c253948dd7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_54bb7ad15defdf1b3bac6485c876d00e97a7f64377dca0dbbf917c253948dd7b->leave($__internal_54bb7ad15defdf1b3bac6485c876d00e97a7f64377dca0dbbf917c253948dd7b_prof);

        
        $__internal_6c9db0cbd43cbc9b51fc085c0608e32e0486e88379e4ef3e832318f11ccda08f->leave($__internal_6c9db0cbd43cbc9b51fc085c0608e32e0486e88379e4ef3e832318f11ccda08f_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_635c30347d1998d4b8440c55a83b11a66ee240ebe477b46800620946953b56cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_635c30347d1998d4b8440c55a83b11a66ee240ebe477b46800620946953b56cf->enter($__internal_635c30347d1998d4b8440c55a83b11a66ee240ebe477b46800620946953b56cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_1eb720363652e9a57f2c52058984b8dce52cec4f122280c544903919756d31ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eb720363652e9a57f2c52058984b8dce52cec4f122280c544903919756d31ae->enter($__internal_1eb720363652e9a57f2c52058984b8dce52cec4f122280c544903919756d31ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_1eb720363652e9a57f2c52058984b8dce52cec4f122280c544903919756d31ae->leave($__internal_1eb720363652e9a57f2c52058984b8dce52cec4f122280c544903919756d31ae_prof);

        
        $__internal_635c30347d1998d4b8440c55a83b11a66ee240ebe477b46800620946953b56cf->leave($__internal_635c30347d1998d4b8440c55a83b11a66ee240ebe477b46800620946953b56cf_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_0ec5c840c70b976ab3741516339203ab04a8ac177e4d89307fd16f52186accc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ec5c840c70b976ab3741516339203ab04a8ac177e4d89307fd16f52186accc3->enter($__internal_0ec5c840c70b976ab3741516339203ab04a8ac177e4d89307fd16f52186accc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_330ba90278b87907e7e07a34084215658282aa64ae67ea3b33e7d0cedb6681ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_330ba90278b87907e7e07a34084215658282aa64ae67ea3b33e7d0cedb6681ff->enter($__internal_330ba90278b87907e7e07a34084215658282aa64ae67ea3b33e7d0cedb6681ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 126
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 126, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 127, $this->getSourceContext()); })()), 'widget');
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), 'errors');
        // line 129
        echo "</div>";
        
        $__internal_330ba90278b87907e7e07a34084215658282aa64ae67ea3b33e7d0cedb6681ff->leave($__internal_330ba90278b87907e7e07a34084215658282aa64ae67ea3b33e7d0cedb6681ff_prof);

        
        $__internal_0ec5c840c70b976ab3741516339203ab04a8ac177e4d89307fd16f52186accc3->leave($__internal_0ec5c840c70b976ab3741516339203ab04a8ac177e4d89307fd16f52186accc3_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_4196a18edcf357806990309d2eb5902889675031ab5f677e7429d5b68424fa6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4196a18edcf357806990309d2eb5902889675031ab5f677e7429d5b68424fa6f->enter($__internal_4196a18edcf357806990309d2eb5902889675031ab5f677e7429d5b68424fa6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_67bec0ccfafdc6880b25bc1e2da17b73081046da9845ae3c2d54faa63dcf8fe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67bec0ccfafdc6880b25bc1e2da17b73081046da9845ae3c2d54faa63dcf8fe1->enter($__internal_67bec0ccfafdc6880b25bc1e2da17b73081046da9845ae3c2d54faa63dcf8fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 133
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 133, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 134, $this->getSourceContext()); })()), 'widget');
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 135, $this->getSourceContext()); })()), 'errors');
        // line 136
        echo "</div>";
        
        $__internal_67bec0ccfafdc6880b25bc1e2da17b73081046da9845ae3c2d54faa63dcf8fe1->leave($__internal_67bec0ccfafdc6880b25bc1e2da17b73081046da9845ae3c2d54faa63dcf8fe1_prof);

        
        $__internal_4196a18edcf357806990309d2eb5902889675031ab5f677e7429d5b68424fa6f->leave($__internal_4196a18edcf357806990309d2eb5902889675031ab5f677e7429d5b68424fa6f_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_bb7db8d7d04fa47ae8d662a9539980895745284ffa08b22a616c998cef9b3097 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb7db8d7d04fa47ae8d662a9539980895745284ffa08b22a616c998cef9b3097->enter($__internal_bb7db8d7d04fa47ae8d662a9539980895745284ffa08b22a616c998cef9b3097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_fb5d5dd0c979cf117f483ea789d212c5b0242cbdb557950f07cfa42aa7795186 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb5d5dd0c979cf117f483ea789d212c5b0242cbdb557950f07cfa42aa7795186->enter($__internal_fb5d5dd0c979cf117f483ea789d212c5b0242cbdb557950f07cfa42aa7795186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 142
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 142, $this->getSourceContext()); })())) > 0)) {
            // line 143
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 143, $this->getSourceContext()); })()))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 144
            echo "    <ul class=\"list-unstyled\">";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 145, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 146
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "</ul>
    ";
            // line 149
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 149, $this->getSourceContext()); })()))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_fb5d5dd0c979cf117f483ea789d212c5b0242cbdb557950f07cfa42aa7795186->leave($__internal_fb5d5dd0c979cf117f483ea789d212c5b0242cbdb557950f07cfa42aa7795186_prof);

        
        $__internal_bb7db8d7d04fa47ae8d662a9539980895745284ffa08b22a616c998cef9b3097->leave($__internal_bb7db8d7d04fa47ae8d662a9539980895745284ffa08b22a616c998cef9b3097_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  650 => 149,  647 => 148,  639 => 146,  635 => 145,  633 => 144,  627 => 143,  625 => 142,  616 => 141,  606 => 136,  604 => 135,  602 => 134,  596 => 133,  587 => 132,  577 => 129,  575 => 128,  573 => 127,  567 => 126,  558 => 125,  548 => 122,  546 => 121,  537 => 120,  527 => 117,  525 => 116,  516 => 115,  506 => 112,  504 => 111,  495 => 110,  485 => 107,  483 => 106,  474 => 105,  464 => 102,  462 => 101,  460 => 100,  451 => 99,  441 => 96,  439 => 95,  437 => 94,  435 => 93,  429 => 92,  420 => 91,  409 => 85,  405 => 84,  390 => 83,  386 => 80,  383 => 77,  382 => 76,  381 => 75,  379 => 74,  377 => 73,  374 => 71,  372 => 70,  369 => 68,  367 => 67,  365 => 66,  356 => 64,  346 => 61,  344 => 59,  335 => 58,  325 => 55,  323 => 53,  314 => 52,  304 => 49,  302 => 48,  293 => 46,  283 => 43,  281 => 42,  272 => 41,  261 => 35,  259 => 34,  257 => 33,  254 => 31,  252 => 30,  250 => 29,  241 => 28,  230 => 24,  228 => 23,  226 => 22,  223 => 20,  221 => 19,  219 => 18,  210 => 17,  200 => 14,  198 => 13,  189 => 12,  179 => 9,  176 => 7,  174 => 6,  165 => 5,  155 => 141,  152 => 140,  149 => 138,  147 => 132,  144 => 131,  142 => 125,  139 => 124,  137 => 120,  134 => 119,  132 => 115,  129 => 114,  127 => 110,  124 => 109,  122 => 105,  119 => 104,  117 => 99,  114 => 98,  112 => 91,  109 => 90,  106 => 88,  104 => 64,  101 => 63,  99 => 58,  96 => 57,  94 => 52,  91 => 51,  89 => 46,  86 => 45,  84 => 41,  81 => 40,  78 => 38,  76 => 28,  73 => 27,  71 => 17,  68 => 16,  66 => 12,  63 => 11,  61 => 5,  58 => 4,  55 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_base_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- if 'radio-inline' in parent_label_class -%}
        {{- form_label(form, null, { widget: parent() }) -}}
    {%- else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {%- if widget is defined -%}
        {%- if required -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) -%}
        {%- endif -%}
        {%- if parent_label_class is defined -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) -%}
        {%- endif -%}
        {%- if label is not same as(false) and label is empty -%}
            {%- if label_format is not empty -%}
                {%- set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) -%}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
