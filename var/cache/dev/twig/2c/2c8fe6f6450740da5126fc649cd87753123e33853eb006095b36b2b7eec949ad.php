<?php

/* bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_83657210829d16a97141356e831671d02788501e00bec4e518986f0bf916f6ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "bootstrap_4_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'fieldset_form_row' => array($this, 'block_fieldset_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_836d1f189be49fc918c1ca566481820326820e9936cb1390cbb62a30e25a8be6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_836d1f189be49fc918c1ca566481820326820e9936cb1390cbb62a30e25a8be6->enter($__internal_836d1f189be49fc918c1ca566481820326820e9936cb1390cbb62a30e25a8be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_1cdd1b9a7d5237bfd55dcdc1e1d4255cdb9a1c64c5a077998342189c0d047a0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cdd1b9a7d5237bfd55dcdc1e1d4255cdb9a1c64c5a077998342189c0d047a0f->enter($__internal_1cdd1b9a7d5237bfd55dcdc1e1d4255cdb9a1c64c5a077998342189c0d047a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_label', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 20
        echo "
";
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('fieldset_form_row', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('submit_row', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('reset_row', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_836d1f189be49fc918c1ca566481820326820e9936cb1390cbb62a30e25a8be6->leave($__internal_836d1f189be49fc918c1ca566481820326820e9936cb1390cbb62a30e25a8be6_prof);

        
        $__internal_1cdd1b9a7d5237bfd55dcdc1e1d4255cdb9a1c64c5a077998342189c0d047a0f->leave($__internal_1cdd1b9a7d5237bfd55dcdc1e1d4255cdb9a1c64c5a077998342189c0d047a0f_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_498ebf3b4e406765b70d443f1988c71f9ddd24b8fb187047da8bbb790618fe80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_498ebf3b4e406765b70d443f1988c71f9ddd24b8fb187047da8bbb790618fe80->enter($__internal_498ebf3b4e406765b70d443f1988c71f9ddd24b8fb187047da8bbb790618fe80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_fb8facee65d49f3c512ca00e52710a9b9ff1ca65a68bcdadc12234da0919c827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb8facee65d49f3c512ca00e52710a9b9ff1ca65a68bcdadc12234da0919c827->enter($__internal_fb8facee65d49f3c512ca00e52710a9b9ff1ca65a68bcdadc12234da0919c827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 6
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 6, $this->getSourceContext()); })()) === false)) {
            // line 7
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 9
            if (( !array_key_exists("expanded", $context) ||  !(isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 9, $this->getSourceContext()); })()))) {
                // line 10
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 10, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-label"))));
            }
            // line 12
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 12, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 13
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_fb8facee65d49f3c512ca00e52710a9b9ff1ca65a68bcdadc12234da0919c827->leave($__internal_fb8facee65d49f3c512ca00e52710a9b9ff1ca65a68bcdadc12234da0919c827_prof);

        
        $__internal_498ebf3b4e406765b70d443f1988c71f9ddd24b8fb187047da8bbb790618fe80->leave($__internal_498ebf3b4e406765b70d443f1988c71f9ddd24b8fb187047da8bbb790618fe80_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_1a3154e5aff510fc51bfce2907b2001f97c0fddc0277d3a198116ed6dc2a49fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a3154e5aff510fc51bfce2907b2001f97c0fddc0277d3a198116ed6dc2a49fa->enter($__internal_1a3154e5aff510fc51bfce2907b2001f97c0fddc0277d3a198116ed6dc2a49fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_89b9349001606246d3b0e8f518a5bcb6a684d9d62ca29920bbe0ffb953f013f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89b9349001606246d3b0e8f518a5bcb6a684d9d62ca29920bbe0ffb953f013f5->enter($__internal_89b9349001606246d3b0e8f518a5bcb6a684d9d62ca29920bbe0ffb953f013f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_89b9349001606246d3b0e8f518a5bcb6a684d9d62ca29920bbe0ffb953f013f5->leave($__internal_89b9349001606246d3b0e8f518a5bcb6a684d9d62ca29920bbe0ffb953f013f5_prof);

        
        $__internal_1a3154e5aff510fc51bfce2907b2001f97c0fddc0277d3a198116ed6dc2a49fa->leave($__internal_1a3154e5aff510fc51bfce2907b2001f97c0fddc0277d3a198116ed6dc2a49fa_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_5f952c0f3f19464538dc08903f2f854b3be5891494bcb8ad93ec7efbbdad8e24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f952c0f3f19464538dc08903f2f854b3be5891494bcb8ad93ec7efbbdad8e24->enter($__internal_5f952c0f3f19464538dc08903f2f854b3be5891494bcb8ad93ec7efbbdad8e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_2a47276edb2b4fe967601b409e2080568b896ff86effee472e9f6d4b94a28b72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a47276edb2b4fe967601b409e2080568b896ff86effee472e9f6d4b94a28b72->enter($__internal_2a47276edb2b4fe967601b409e2080568b896ff86effee472e9f6d4b94a28b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 24
        if ((array_key_exists("expanded", $context) && (isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 24, $this->getSourceContext()); })()))) {
            // line 25
            $this->displayBlock("fieldset_form_row", $context, $blocks);
        } else {
            // line 27
            echo "<div class=\"form-group row";
            if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 27, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 27, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 27, $this->getSourceContext()); })()))) {
                echo " is-invalid";
            }
            echo "\">";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->getSourceContext()); })()), 'label');
            // line 29
            echo "<div class=\"";
            $this->displayBlock("form_group_class", $context, $blocks);
            echo "\">";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'widget');
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'errors');
            // line 32
            echo "</div>
    ";
            // line 33
            echo "</div>";
        }
        
        $__internal_2a47276edb2b4fe967601b409e2080568b896ff86effee472e9f6d4b94a28b72->leave($__internal_2a47276edb2b4fe967601b409e2080568b896ff86effee472e9f6d4b94a28b72_prof);

        
        $__internal_5f952c0f3f19464538dc08903f2f854b3be5891494bcb8ad93ec7efbbdad8e24->leave($__internal_5f952c0f3f19464538dc08903f2f854b3be5891494bcb8ad93ec7efbbdad8e24_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_b5a9b53633b75edbed915b5f1afe364bb5963fa58f257b0965e4bdf6c0f3bca1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5a9b53633b75edbed915b5f1afe364bb5963fa58f257b0965e4bdf6c0f3bca1->enter($__internal_b5a9b53633b75edbed915b5f1afe364bb5963fa58f257b0965e4bdf6c0f3bca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_a6caf9b8fece013a7426aac2c18b4b6f6b0cdf932ccdaca996d8784677ad0cba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6caf9b8fece013a7426aac2c18b4b6f6b0cdf932ccdaca996d8784677ad0cba->enter($__internal_a6caf9b8fece013a7426aac2c18b4b6f6b0cdf932ccdaca996d8784677ad0cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        // line 38
        echo "<fieldset class=\"form-group\">
        <div class=\"row";
        // line 39
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 39, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 39, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 39, $this->getSourceContext()); })()))) {
            echo " is-invalid";
        }
        echo "\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), 'label');
        // line 41
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'widget');
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->getSourceContext()); })()), 'errors');
        // line 44
        echo "</div>
        </div>
";
        // line 46
        echo "</fieldset>";
        
        $__internal_a6caf9b8fece013a7426aac2c18b4b6f6b0cdf932ccdaca996d8784677ad0cba->leave($__internal_a6caf9b8fece013a7426aac2c18b4b6f6b0cdf932ccdaca996d8784677ad0cba_prof);

        
        $__internal_b5a9b53633b75edbed915b5f1afe364bb5963fa58f257b0965e4bdf6c0f3bca1->leave($__internal_b5a9b53633b75edbed915b5f1afe364bb5963fa58f257b0965e4bdf6c0f3bca1_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_b222c0bcc612a03e1be0f01863af65256b6725e81406bc3a03068e0a697477a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b222c0bcc612a03e1be0f01863af65256b6725e81406bc3a03068e0a697477a1->enter($__internal_b222c0bcc612a03e1be0f01863af65256b6725e81406bc3a03068e0a697477a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_c7d82d4e730b92a0bff9f21425480d735ec0f1a2ef967042fe6ed0e7b18c3ed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7d82d4e730b92a0bff9f21425480d735ec0f1a2ef967042fe6ed0e7b18c3ed7->enter($__internal_c7d82d4e730b92a0bff9f21425480d735ec0f1a2ef967042fe6ed0e7b18c3ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 50
        echo "<div class=\"form-group row\">";
        // line 51
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 52
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->getSourceContext()); })()), 'widget');
        // line 54
        echo "</div>";
        // line 55
        echo "</div>";
        
        $__internal_c7d82d4e730b92a0bff9f21425480d735ec0f1a2ef967042fe6ed0e7b18c3ed7->leave($__internal_c7d82d4e730b92a0bff9f21425480d735ec0f1a2ef967042fe6ed0e7b18c3ed7_prof);

        
        $__internal_b222c0bcc612a03e1be0f01863af65256b6725e81406bc3a03068e0a697477a1->leave($__internal_b222c0bcc612a03e1be0f01863af65256b6725e81406bc3a03068e0a697477a1_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_9d3dfa9faf66c6a25b27b259b4e0101edd6dad7b131b5d16e14ca96744723826 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d3dfa9faf66c6a25b27b259b4e0101edd6dad7b131b5d16e14ca96744723826->enter($__internal_9d3dfa9faf66c6a25b27b259b4e0101edd6dad7b131b5d16e14ca96744723826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_3a198fd6422f462ddfe9e646c917f6af5439baca96cf99dd8a2c70542d9317f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a198fd6422f462ddfe9e646c917f6af5439baca96cf99dd8a2c70542d9317f7->enter($__internal_3a198fd6422f462ddfe9e646c917f6af5439baca96cf99dd8a2c70542d9317f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 59
        echo "<div class=\"form-group row\">";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 61
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'widget');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_3a198fd6422f462ddfe9e646c917f6af5439baca96cf99dd8a2c70542d9317f7->leave($__internal_3a198fd6422f462ddfe9e646c917f6af5439baca96cf99dd8a2c70542d9317f7_prof);

        
        $__internal_9d3dfa9faf66c6a25b27b259b4e0101edd6dad7b131b5d16e14ca96744723826->leave($__internal_9d3dfa9faf66c6a25b27b259b4e0101edd6dad7b131b5d16e14ca96744723826_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_1ab340bd009fbdf8e8c618a8763668330ab1dad9ce2b5452afae4b6e73a9d433 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ab340bd009fbdf8e8c618a8763668330ab1dad9ce2b5452afae4b6e73a9d433->enter($__internal_1ab340bd009fbdf8e8c618a8763668330ab1dad9ce2b5452afae4b6e73a9d433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_4e39715f0078dcb03b0357e3e2b84849e9bf59a4aacc694e9394a652b1e2558d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e39715f0078dcb03b0357e3e2b84849e9bf59a4aacc694e9394a652b1e2558d->enter($__internal_4e39715f0078dcb03b0357e3e2b84849e9bf59a4aacc694e9394a652b1e2558d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_4e39715f0078dcb03b0357e3e2b84849e9bf59a4aacc694e9394a652b1e2558d->leave($__internal_4e39715f0078dcb03b0357e3e2b84849e9bf59a4aacc694e9394a652b1e2558d_prof);

        
        $__internal_1ab340bd009fbdf8e8c618a8763668330ab1dad9ce2b5452afae4b6e73a9d433->leave($__internal_1ab340bd009fbdf8e8c618a8763668330ab1dad9ce2b5452afae4b6e73a9d433_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_4c0f661c44d4868930878c59c1cdccee160c2dbe030a082d17ce18214e35a0e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c0f661c44d4868930878c59c1cdccee160c2dbe030a082d17ce18214e35a0e2->enter($__internal_4c0f661c44d4868930878c59c1cdccee160c2dbe030a082d17ce18214e35a0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_ed1e77efb1b3426ccab102feca690ff09548647677ffb05aec539e9198f8f147 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed1e77efb1b3426ccab102feca690ff09548647677ffb05aec539e9198f8f147->enter($__internal_ed1e77efb1b3426ccab102feca690ff09548647677ffb05aec539e9198f8f147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 72
        echo "<div class=\"form-group row\">";
        // line 73
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 74
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 75, $this->getSourceContext()); })()), 'widget');
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->getSourceContext()); })()), 'errors');
        // line 77
        echo "</div>";
        // line 78
        echo "</div>";
        
        $__internal_ed1e77efb1b3426ccab102feca690ff09548647677ffb05aec539e9198f8f147->leave($__internal_ed1e77efb1b3426ccab102feca690ff09548647677ffb05aec539e9198f8f147_prof);

        
        $__internal_4c0f661c44d4868930878c59c1cdccee160c2dbe030a082d17ce18214e35a0e2->leave($__internal_4c0f661c44d4868930878c59c1cdccee160c2dbe030a082d17ce18214e35a0e2_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  347 => 78,  345 => 77,  343 => 76,  341 => 75,  337 => 74,  333 => 73,  331 => 72,  322 => 71,  312 => 68,  303 => 67,  293 => 64,  291 => 63,  289 => 62,  285 => 61,  281 => 60,  279 => 59,  270 => 58,  260 => 55,  258 => 54,  256 => 53,  252 => 52,  248 => 51,  246 => 50,  237 => 49,  227 => 46,  223 => 44,  221 => 43,  219 => 42,  215 => 41,  213 => 40,  208 => 39,  205 => 38,  196 => 37,  185 => 33,  182 => 32,  180 => 31,  178 => 30,  174 => 29,  172 => 28,  166 => 27,  163 => 25,  161 => 24,  152 => 23,  142 => 18,  133 => 17,  122 => 13,  120 => 12,  117 => 10,  115 => 9,  110 => 7,  108 => 6,  99 => 5,  89 => 71,  86 => 70,  84 => 67,  81 => 66,  79 => 58,  76 => 57,  74 => 49,  71 => 48,  69 => 37,  66 => 36,  64 => 23,  61 => 22,  58 => 20,  56 => 17,  53 => 16,  51 => 5,  48 => 4,  45 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_4_layout.html.twig\" %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- if expanded is not defined or not expanded -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-label')|trim}) -%}
        {%- endif -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    {%- if expanded is defined and expanded -%}
        {{ block('fieldset_form_row') }}
    {%- else -%}
        <div class=\"form-group row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
    {##}</div>
    {%- endif -%}
{%- endblock form_row %}

{% block fieldset_form_row -%}
    <fieldset class=\"form-group\">
        <div class=\"row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
        </div>
{##}</fieldset>
{%- endblock fieldset_form_row %}

{% block submit_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group row\">{#--#}
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
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}
", "bootstrap_4_horizontal_layout.html.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\bootstrap_4_horizontal_layout.html.twig");
    }
}
