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
        $__internal_d5c04421176b5bc62e02363aaa1633a26b9c0be4649f9d187f33eddd2d993bc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5c04421176b5bc62e02363aaa1633a26b9c0be4649f9d187f33eddd2d993bc4->enter($__internal_d5c04421176b5bc62e02363aaa1633a26b9c0be4649f9d187f33eddd2d993bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_0925406ac9d493593f12de5647c6a87a38bafaa82366cc7bb8c243db10313325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0925406ac9d493593f12de5647c6a87a38bafaa82366cc7bb8c243db10313325->enter($__internal_0925406ac9d493593f12de5647c6a87a38bafaa82366cc7bb8c243db10313325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_d5c04421176b5bc62e02363aaa1633a26b9c0be4649f9d187f33eddd2d993bc4->leave($__internal_d5c04421176b5bc62e02363aaa1633a26b9c0be4649f9d187f33eddd2d993bc4_prof);

        
        $__internal_0925406ac9d493593f12de5647c6a87a38bafaa82366cc7bb8c243db10313325->leave($__internal_0925406ac9d493593f12de5647c6a87a38bafaa82366cc7bb8c243db10313325_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_46412d1cdfb0be6fd0734bc80f59ce0ce89eec358af874e94999d76e4d4dbd84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46412d1cdfb0be6fd0734bc80f59ce0ce89eec358af874e94999d76e4d4dbd84->enter($__internal_46412d1cdfb0be6fd0734bc80f59ce0ce89eec358af874e94999d76e4d4dbd84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_fc57f322bd5e4fe94826fe6afe165165085b11e81756166afff8e5d4739facd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc57f322bd5e4fe94826fe6afe165165085b11e81756166afff8e5d4739facd9->enter($__internal_fc57f322bd5e4fe94826fe6afe165165085b11e81756166afff8e5d4739facd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_fc57f322bd5e4fe94826fe6afe165165085b11e81756166afff8e5d4739facd9->leave($__internal_fc57f322bd5e4fe94826fe6afe165165085b11e81756166afff8e5d4739facd9_prof);

        
        $__internal_46412d1cdfb0be6fd0734bc80f59ce0ce89eec358af874e94999d76e4d4dbd84->leave($__internal_46412d1cdfb0be6fd0734bc80f59ce0ce89eec358af874e94999d76e4d4dbd84_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_814ff1513fac3a6bdfc53dcbac999b361b398d1e5990530ab2784efbef3d8c7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_814ff1513fac3a6bdfc53dcbac999b361b398d1e5990530ab2784efbef3d8c7f->enter($__internal_814ff1513fac3a6bdfc53dcbac999b361b398d1e5990530ab2784efbef3d8c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_3e021f59811d0e42d915cf32b80d820a7605e9ba744171f6b89d9eb6888ce407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e021f59811d0e42d915cf32b80d820a7605e9ba744171f6b89d9eb6888ce407->enter($__internal_3e021f59811d0e42d915cf32b80d820a7605e9ba744171f6b89d9eb6888ce407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_3e021f59811d0e42d915cf32b80d820a7605e9ba744171f6b89d9eb6888ce407->leave($__internal_3e021f59811d0e42d915cf32b80d820a7605e9ba744171f6b89d9eb6888ce407_prof);

        
        $__internal_814ff1513fac3a6bdfc53dcbac999b361b398d1e5990530ab2784efbef3d8c7f->leave($__internal_814ff1513fac3a6bdfc53dcbac999b361b398d1e5990530ab2784efbef3d8c7f_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_26d283c27e6206b0f119297334036d6c3e7bb2d5427f61277b49565916ebfde5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26d283c27e6206b0f119297334036d6c3e7bb2d5427f61277b49565916ebfde5->enter($__internal_26d283c27e6206b0f119297334036d6c3e7bb2d5427f61277b49565916ebfde5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_b48f06e4e36071d44fbd245047b00dfdf899d293efedb6fe8e0cb6eba00c6333 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b48f06e4e36071d44fbd245047b00dfdf899d293efedb6fe8e0cb6eba00c6333->enter($__internal_b48f06e4e36071d44fbd245047b00dfdf899d293efedb6fe8e0cb6eba00c6333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_b48f06e4e36071d44fbd245047b00dfdf899d293efedb6fe8e0cb6eba00c6333->leave($__internal_b48f06e4e36071d44fbd245047b00dfdf899d293efedb6fe8e0cb6eba00c6333_prof);

        
        $__internal_26d283c27e6206b0f119297334036d6c3e7bb2d5427f61277b49565916ebfde5->leave($__internal_26d283c27e6206b0f119297334036d6c3e7bb2d5427f61277b49565916ebfde5_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_0f36eebaf05ce7bf339a347dbad824818c2dcc44da3393f4e5bbe5e17e38fa4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f36eebaf05ce7bf339a347dbad824818c2dcc44da3393f4e5bbe5e17e38fa4c->enter($__internal_0f36eebaf05ce7bf339a347dbad824818c2dcc44da3393f4e5bbe5e17e38fa4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_f854501e502318516e38fdc9ed2abb5e8391f2e325b843fe9ca9d17175c70c47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f854501e502318516e38fdc9ed2abb5e8391f2e325b843fe9ca9d17175c70c47->enter($__internal_f854501e502318516e38fdc9ed2abb5e8391f2e325b843fe9ca9d17175c70c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_f854501e502318516e38fdc9ed2abb5e8391f2e325b843fe9ca9d17175c70c47->leave($__internal_f854501e502318516e38fdc9ed2abb5e8391f2e325b843fe9ca9d17175c70c47_prof);

        
        $__internal_0f36eebaf05ce7bf339a347dbad824818c2dcc44da3393f4e5bbe5e17e38fa4c->leave($__internal_0f36eebaf05ce7bf339a347dbad824818c2dcc44da3393f4e5bbe5e17e38fa4c_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_99ea48df9972e983f5acafbb0dbfe0ce8f97f3b36fca22720ef03521c6481c49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99ea48df9972e983f5acafbb0dbfe0ce8f97f3b36fca22720ef03521c6481c49->enter($__internal_99ea48df9972e983f5acafbb0dbfe0ce8f97f3b36fca22720ef03521c6481c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_2e09a7a27287a181a886ef70073c864af19a9ddf5ebb702d006448144e93d50f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e09a7a27287a181a886ef70073c864af19a9ddf5ebb702d006448144e93d50f->enter($__internal_2e09a7a27287a181a886ef70073c864af19a9ddf5ebb702d006448144e93d50f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_2e09a7a27287a181a886ef70073c864af19a9ddf5ebb702d006448144e93d50f->leave($__internal_2e09a7a27287a181a886ef70073c864af19a9ddf5ebb702d006448144e93d50f_prof);

        
        $__internal_99ea48df9972e983f5acafbb0dbfe0ce8f97f3b36fca22720ef03521c6481c49->leave($__internal_99ea48df9972e983f5acafbb0dbfe0ce8f97f3b36fca22720ef03521c6481c49_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_a6810b21b5529b0da6960cecc24637879fbad7194434c4f30215030ebe272bf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6810b21b5529b0da6960cecc24637879fbad7194434c4f30215030ebe272bf5->enter($__internal_a6810b21b5529b0da6960cecc24637879fbad7194434c4f30215030ebe272bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_b99f637bdbae7319af9a1356e72412057dab3733315969fe00c1efae28015005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b99f637bdbae7319af9a1356e72412057dab3733315969fe00c1efae28015005->enter($__internal_b99f637bdbae7319af9a1356e72412057dab3733315969fe00c1efae28015005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_b99f637bdbae7319af9a1356e72412057dab3733315969fe00c1efae28015005->leave($__internal_b99f637bdbae7319af9a1356e72412057dab3733315969fe00c1efae28015005_prof);

        
        $__internal_a6810b21b5529b0da6960cecc24637879fbad7194434c4f30215030ebe272bf5->leave($__internal_a6810b21b5529b0da6960cecc24637879fbad7194434c4f30215030ebe272bf5_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_ae338838b2cd359161adc2a889c45723e19bdbabc545bdb1579ce910b68ddea1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae338838b2cd359161adc2a889c45723e19bdbabc545bdb1579ce910b68ddea1->enter($__internal_ae338838b2cd359161adc2a889c45723e19bdbabc545bdb1579ce910b68ddea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_b693998cbbc19020b288da5d34d04ee0a909aca035bd465cf4460c4e52819100 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b693998cbbc19020b288da5d34d04ee0a909aca035bd465cf4460c4e52819100->enter($__internal_b693998cbbc19020b288da5d34d04ee0a909aca035bd465cf4460c4e52819100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_b693998cbbc19020b288da5d34d04ee0a909aca035bd465cf4460c4e52819100->leave($__internal_b693998cbbc19020b288da5d34d04ee0a909aca035bd465cf4460c4e52819100_prof);

        
        $__internal_ae338838b2cd359161adc2a889c45723e19bdbabc545bdb1579ce910b68ddea1->leave($__internal_ae338838b2cd359161adc2a889c45723e19bdbabc545bdb1579ce910b68ddea1_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_39535d09660f0347e4f3fa3f52add797198803555239dc191b0ed0eb7eeb773a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39535d09660f0347e4f3fa3f52add797198803555239dc191b0ed0eb7eeb773a->enter($__internal_39535d09660f0347e4f3fa3f52add797198803555239dc191b0ed0eb7eeb773a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_348aab4e99a448e6c342c5c8aebe284fbd7a41df2f40a7b213fe8d4edf9e8afe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_348aab4e99a448e6c342c5c8aebe284fbd7a41df2f40a7b213fe8d4edf9e8afe->enter($__internal_348aab4e99a448e6c342c5c8aebe284fbd7a41df2f40a7b213fe8d4edf9e8afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_348aab4e99a448e6c342c5c8aebe284fbd7a41df2f40a7b213fe8d4edf9e8afe->leave($__internal_348aab4e99a448e6c342c5c8aebe284fbd7a41df2f40a7b213fe8d4edf9e8afe_prof);

        
        $__internal_39535d09660f0347e4f3fa3f52add797198803555239dc191b0ed0eb7eeb773a->leave($__internal_39535d09660f0347e4f3fa3f52add797198803555239dc191b0ed0eb7eeb773a_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_959fb93515fd382cc466af95cd28653dd6ad0160391c2b5c0ffc9b549bd85356 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_959fb93515fd382cc466af95cd28653dd6ad0160391c2b5c0ffc9b549bd85356->enter($__internal_959fb93515fd382cc466af95cd28653dd6ad0160391c2b5c0ffc9b549bd85356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_d380a573d4c5e52762fe3690350f0cbe5b16a244e1d0f5be48665d4ec03d4107 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d380a573d4c5e52762fe3690350f0cbe5b16a244e1d0f5be48665d4ec03d4107->enter($__internal_d380a573d4c5e52762fe3690350f0cbe5b16a244e1d0f5be48665d4ec03d4107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_d380a573d4c5e52762fe3690350f0cbe5b16a244e1d0f5be48665d4ec03d4107->leave($__internal_d380a573d4c5e52762fe3690350f0cbe5b16a244e1d0f5be48665d4ec03d4107_prof);

        
        $__internal_959fb93515fd382cc466af95cd28653dd6ad0160391c2b5c0ffc9b549bd85356->leave($__internal_959fb93515fd382cc466af95cd28653dd6ad0160391c2b5c0ffc9b549bd85356_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_6978abc35bb1cfc87fe817fc6ee8a84655f651ff4625f58bdcc1adad73140d7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6978abc35bb1cfc87fe817fc6ee8a84655f651ff4625f58bdcc1adad73140d7d->enter($__internal_6978abc35bb1cfc87fe817fc6ee8a84655f651ff4625f58bdcc1adad73140d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_a0e9a715b808ad2bcedfc5b5d7a025fa2c973d460f8e3d115a9348c61ae2cb94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0e9a715b808ad2bcedfc5b5d7a025fa2c973d460f8e3d115a9348c61ae2cb94->enter($__internal_a0e9a715b808ad2bcedfc5b5d7a025fa2c973d460f8e3d115a9348c61ae2cb94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_a0e9a715b808ad2bcedfc5b5d7a025fa2c973d460f8e3d115a9348c61ae2cb94->leave($__internal_a0e9a715b808ad2bcedfc5b5d7a025fa2c973d460f8e3d115a9348c61ae2cb94_prof);

        
        $__internal_6978abc35bb1cfc87fe817fc6ee8a84655f651ff4625f58bdcc1adad73140d7d->leave($__internal_6978abc35bb1cfc87fe817fc6ee8a84655f651ff4625f58bdcc1adad73140d7d_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_c3c95070dd2300ab39c4e4b153a1927495b803eb4ee45014b10c412d344d6227 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3c95070dd2300ab39c4e4b153a1927495b803eb4ee45014b10c412d344d6227->enter($__internal_c3c95070dd2300ab39c4e4b153a1927495b803eb4ee45014b10c412d344d6227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_5a8161c01e5ab220fb705a2ba1453908501955ac1c43c45cc74bbcf9bce69f88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a8161c01e5ab220fb705a2ba1453908501955ac1c43c45cc74bbcf9bce69f88->enter($__internal_5a8161c01e5ab220fb705a2ba1453908501955ac1c43c45cc74bbcf9bce69f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_5a8161c01e5ab220fb705a2ba1453908501955ac1c43c45cc74bbcf9bce69f88->leave($__internal_5a8161c01e5ab220fb705a2ba1453908501955ac1c43c45cc74bbcf9bce69f88_prof);

        
        $__internal_c3c95070dd2300ab39c4e4b153a1927495b803eb4ee45014b10c412d344d6227->leave($__internal_c3c95070dd2300ab39c4e4b153a1927495b803eb4ee45014b10c412d344d6227_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_c815be84f0198c4f30e78fb5978f5a0425692041cc1fbba339fec884a418d1ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c815be84f0198c4f30e78fb5978f5a0425692041cc1fbba339fec884a418d1ef->enter($__internal_c815be84f0198c4f30e78fb5978f5a0425692041cc1fbba339fec884a418d1ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_2bb56c23d1c81704182ecfad4664276810211c9b7014cb1b23290ea3ea11ba1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bb56c23d1c81704182ecfad4664276810211c9b7014cb1b23290ea3ea11ba1e->enter($__internal_2bb56c23d1c81704182ecfad4664276810211c9b7014cb1b23290ea3ea11ba1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_2bb56c23d1c81704182ecfad4664276810211c9b7014cb1b23290ea3ea11ba1e->leave($__internal_2bb56c23d1c81704182ecfad4664276810211c9b7014cb1b23290ea3ea11ba1e_prof);

        
        $__internal_c815be84f0198c4f30e78fb5978f5a0425692041cc1fbba339fec884a418d1ef->leave($__internal_c815be84f0198c4f30e78fb5978f5a0425692041cc1fbba339fec884a418d1ef_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_3e6857f4e70fdfeca42e3fdb0741fdd3c7f2e32dc4b434949a2631a03070d00f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e6857f4e70fdfeca42e3fdb0741fdd3c7f2e32dc4b434949a2631a03070d00f->enter($__internal_3e6857f4e70fdfeca42e3fdb0741fdd3c7f2e32dc4b434949a2631a03070d00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_00997bb564e55f307bb985c2cd1ab4c702d4c973db9c4188e639413360ba455d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00997bb564e55f307bb985c2cd1ab4c702d4c973db9c4188e639413360ba455d->enter($__internal_00997bb564e55f307bb985c2cd1ab4c702d4c973db9c4188e639413360ba455d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_00997bb564e55f307bb985c2cd1ab4c702d4c973db9c4188e639413360ba455d->leave($__internal_00997bb564e55f307bb985c2cd1ab4c702d4c973db9c4188e639413360ba455d_prof);

        
        $__internal_3e6857f4e70fdfeca42e3fdb0741fdd3c7f2e32dc4b434949a2631a03070d00f->leave($__internal_3e6857f4e70fdfeca42e3fdb0741fdd3c7f2e32dc4b434949a2631a03070d00f_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_d2b1d124b2fc8ba24576a2d5fc3bc5c8e42ea6d04c9d95dcd2b93211514c19be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2b1d124b2fc8ba24576a2d5fc3bc5c8e42ea6d04c9d95dcd2b93211514c19be->enter($__internal_d2b1d124b2fc8ba24576a2d5fc3bc5c8e42ea6d04c9d95dcd2b93211514c19be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_a1016b33ef487151bd3d94cd2eb7900641c8de6a7c6bfbed5319281058cc3f42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1016b33ef487151bd3d94cd2eb7900641c8de6a7c6bfbed5319281058cc3f42->enter($__internal_a1016b33ef487151bd3d94cd2eb7900641c8de6a7c6bfbed5319281058cc3f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a1016b33ef487151bd3d94cd2eb7900641c8de6a7c6bfbed5319281058cc3f42->leave($__internal_a1016b33ef487151bd3d94cd2eb7900641c8de6a7c6bfbed5319281058cc3f42_prof);

        
        $__internal_d2b1d124b2fc8ba24576a2d5fc3bc5c8e42ea6d04c9d95dcd2b93211514c19be->leave($__internal_d2b1d124b2fc8ba24576a2d5fc3bc5c8e42ea6d04c9d95dcd2b93211514c19be_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_79ebadd57cfb4777ad55db67984c8a5af78cf1696ac36a23ba0eb384d7187025 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79ebadd57cfb4777ad55db67984c8a5af78cf1696ac36a23ba0eb384d7187025->enter($__internal_79ebadd57cfb4777ad55db67984c8a5af78cf1696ac36a23ba0eb384d7187025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_105e87faeb9b8621585e9a1233ae07b195d7a2d2cc3db882d3b196a1b3bf0cfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_105e87faeb9b8621585e9a1233ae07b195d7a2d2cc3db882d3b196a1b3bf0cfe->enter($__internal_105e87faeb9b8621585e9a1233ae07b195d7a2d2cc3db882d3b196a1b3bf0cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_105e87faeb9b8621585e9a1233ae07b195d7a2d2cc3db882d3b196a1b3bf0cfe->leave($__internal_105e87faeb9b8621585e9a1233ae07b195d7a2d2cc3db882d3b196a1b3bf0cfe_prof);

        
        $__internal_79ebadd57cfb4777ad55db67984c8a5af78cf1696ac36a23ba0eb384d7187025->leave($__internal_79ebadd57cfb4777ad55db67984c8a5af78cf1696ac36a23ba0eb384d7187025_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_20e0db9d59dbd46b5b545eeac405251c986aba5ba1fc5a462c560cd291632e38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20e0db9d59dbd46b5b545eeac405251c986aba5ba1fc5a462c560cd291632e38->enter($__internal_20e0db9d59dbd46b5b545eeac405251c986aba5ba1fc5a462c560cd291632e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_04b5f24f17fc7882c0c5b5708a5b1acc4c8fc5e1ff439efaf248680a9a7f2bf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04b5f24f17fc7882c0c5b5708a5b1acc4c8fc5e1ff439efaf248680a9a7f2bf1->enter($__internal_04b5f24f17fc7882c0c5b5708a5b1acc4c8fc5e1ff439efaf248680a9a7f2bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_04b5f24f17fc7882c0c5b5708a5b1acc4c8fc5e1ff439efaf248680a9a7f2bf1->leave($__internal_04b5f24f17fc7882c0c5b5708a5b1acc4c8fc5e1ff439efaf248680a9a7f2bf1_prof);

        
        $__internal_20e0db9d59dbd46b5b545eeac405251c986aba5ba1fc5a462c560cd291632e38->leave($__internal_20e0db9d59dbd46b5b545eeac405251c986aba5ba1fc5a462c560cd291632e38_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_f1036a3b2b99967e808267f47a7f78060e98adb784c69059a8f1d7cfc78a1c31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1036a3b2b99967e808267f47a7f78060e98adb784c69059a8f1d7cfc78a1c31->enter($__internal_f1036a3b2b99967e808267f47a7f78060e98adb784c69059a8f1d7cfc78a1c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_e7fba83e725a881afd1883b6d31788bc568fbb3942b30c27a9335551085a6ae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7fba83e725a881afd1883b6d31788bc568fbb3942b30c27a9335551085a6ae2->enter($__internal_e7fba83e725a881afd1883b6d31788bc568fbb3942b30c27a9335551085a6ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_e7fba83e725a881afd1883b6d31788bc568fbb3942b30c27a9335551085a6ae2->leave($__internal_e7fba83e725a881afd1883b6d31788bc568fbb3942b30c27a9335551085a6ae2_prof);

        
        $__internal_f1036a3b2b99967e808267f47a7f78060e98adb784c69059a8f1d7cfc78a1c31->leave($__internal_f1036a3b2b99967e808267f47a7f78060e98adb784c69059a8f1d7cfc78a1c31_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_ee1e3abef00d16caabf2f1cf81a7703770a2831a14de5a4a835e914b02e17fc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee1e3abef00d16caabf2f1cf81a7703770a2831a14de5a4a835e914b02e17fc8->enter($__internal_ee1e3abef00d16caabf2f1cf81a7703770a2831a14de5a4a835e914b02e17fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_e3b859b59a3494ae68513022dc006848ad3b0aa3594cd99aab0bbf2c1a6591ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3b859b59a3494ae68513022dc006848ad3b0aa3594cd99aab0bbf2c1a6591ef->enter($__internal_e3b859b59a3494ae68513022dc006848ad3b0aa3594cd99aab0bbf2c1a6591ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_e3b859b59a3494ae68513022dc006848ad3b0aa3594cd99aab0bbf2c1a6591ef->leave($__internal_e3b859b59a3494ae68513022dc006848ad3b0aa3594cd99aab0bbf2c1a6591ef_prof);

        
        $__internal_ee1e3abef00d16caabf2f1cf81a7703770a2831a14de5a4a835e914b02e17fc8->leave($__internal_ee1e3abef00d16caabf2f1cf81a7703770a2831a14de5a4a835e914b02e17fc8_prof);

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
", "bootstrap_3_layout.html.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
