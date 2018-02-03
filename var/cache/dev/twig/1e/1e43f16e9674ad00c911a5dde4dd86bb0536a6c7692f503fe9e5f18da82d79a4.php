<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_c4bc26f7203e5f39eb05147e24068f05ee0caf85932ce27b317313b834fe3186 extends Twig_Template
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
        $__internal_7f539148e4e513bbbf5ae98f35a16d3b41bd15b03dfd94be703aa9083e7cd940 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f539148e4e513bbbf5ae98f35a16d3b41bd15b03dfd94be703aa9083e7cd940->enter($__internal_7f539148e4e513bbbf5ae98f35a16d3b41bd15b03dfd94be703aa9083e7cd940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_29d8420dab948bed2e60732d95bc5fe800a180b39018f6a6fdd8e8d18cefd73e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29d8420dab948bed2e60732d95bc5fe800a180b39018f6a6fdd8e8d18cefd73e->enter($__internal_29d8420dab948bed2e60732d95bc5fe800a180b39018f6a6fdd8e8d18cefd73e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_7f539148e4e513bbbf5ae98f35a16d3b41bd15b03dfd94be703aa9083e7cd940->leave($__internal_7f539148e4e513bbbf5ae98f35a16d3b41bd15b03dfd94be703aa9083e7cd940_prof);

        
        $__internal_29d8420dab948bed2e60732d95bc5fe800a180b39018f6a6fdd8e8d18cefd73e->leave($__internal_29d8420dab948bed2e60732d95bc5fe800a180b39018f6a6fdd8e8d18cefd73e_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_b00f3edabd981f6a360b7c9a4ee55c3555da60194c7c9fe7ad68ce862d7c4945 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b00f3edabd981f6a360b7c9a4ee55c3555da60194c7c9fe7ad68ce862d7c4945->enter($__internal_b00f3edabd981f6a360b7c9a4ee55c3555da60194c7c9fe7ad68ce862d7c4945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_623d297a3c8a10d411ea1cc3d05b15164f8212eb6d3180462907bdb5a6af264b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_623d297a3c8a10d411ea1cc3d05b15164f8212eb6d3180462907bdb5a6af264b->enter($__internal_623d297a3c8a10d411ea1cc3d05b15164f8212eb6d3180462907bdb5a6af264b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_623d297a3c8a10d411ea1cc3d05b15164f8212eb6d3180462907bdb5a6af264b->leave($__internal_623d297a3c8a10d411ea1cc3d05b15164f8212eb6d3180462907bdb5a6af264b_prof);

        
        $__internal_b00f3edabd981f6a360b7c9a4ee55c3555da60194c7c9fe7ad68ce862d7c4945->leave($__internal_b00f3edabd981f6a360b7c9a4ee55c3555da60194c7c9fe7ad68ce862d7c4945_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_b69969c15e7c79ca0e9c17436ed556de714f275ec7e3546a5910bb5b95232f4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b69969c15e7c79ca0e9c17436ed556de714f275ec7e3546a5910bb5b95232f4a->enter($__internal_b69969c15e7c79ca0e9c17436ed556de714f275ec7e3546a5910bb5b95232f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_6135fc29a195beff380a4d4587965e107aa4ac5291624ffed3932b3b1a76d662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6135fc29a195beff380a4d4587965e107aa4ac5291624ffed3932b3b1a76d662->enter($__internal_6135fc29a195beff380a4d4587965e107aa4ac5291624ffed3932b3b1a76d662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_6135fc29a195beff380a4d4587965e107aa4ac5291624ffed3932b3b1a76d662->leave($__internal_6135fc29a195beff380a4d4587965e107aa4ac5291624ffed3932b3b1a76d662_prof);

        
        $__internal_b69969c15e7c79ca0e9c17436ed556de714f275ec7e3546a5910bb5b95232f4a->leave($__internal_b69969c15e7c79ca0e9c17436ed556de714f275ec7e3546a5910bb5b95232f4a_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_81f67ea214405c22c2e2784a8770bd27d2ce884461fedf6d765f743c29213123 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81f67ea214405c22c2e2784a8770bd27d2ce884461fedf6d765f743c29213123->enter($__internal_81f67ea214405c22c2e2784a8770bd27d2ce884461fedf6d765f743c29213123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_7becd6177e24e42f6bdf61c9d14659b750ede4b82e9d76d5acc743ab1b6adab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7becd6177e24e42f6bdf61c9d14659b750ede4b82e9d76d5acc743ab1b6adab5->enter($__internal_7becd6177e24e42f6bdf61c9d14659b750ede4b82e9d76d5acc743ab1b6adab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_7becd6177e24e42f6bdf61c9d14659b750ede4b82e9d76d5acc743ab1b6adab5->leave($__internal_7becd6177e24e42f6bdf61c9d14659b750ede4b82e9d76d5acc743ab1b6adab5_prof);

        
        $__internal_81f67ea214405c22c2e2784a8770bd27d2ce884461fedf6d765f743c29213123->leave($__internal_81f67ea214405c22c2e2784a8770bd27d2ce884461fedf6d765f743c29213123_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_74a6b13f5f4d31de5ee0a391ba0edf7563582b4bce247524472a5b0b13e04287 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74a6b13f5f4d31de5ee0a391ba0edf7563582b4bce247524472a5b0b13e04287->enter($__internal_74a6b13f5f4d31de5ee0a391ba0edf7563582b4bce247524472a5b0b13e04287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_2cc4c069a41ae87e74941f64c216f7efecdf16a3a6f05bb6dc7b180897a20c53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cc4c069a41ae87e74941f64c216f7efecdf16a3a6f05bb6dc7b180897a20c53->enter($__internal_2cc4c069a41ae87e74941f64c216f7efecdf16a3a6f05bb6dc7b180897a20c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_2cc4c069a41ae87e74941f64c216f7efecdf16a3a6f05bb6dc7b180897a20c53->leave($__internal_2cc4c069a41ae87e74941f64c216f7efecdf16a3a6f05bb6dc7b180897a20c53_prof);

        
        $__internal_74a6b13f5f4d31de5ee0a391ba0edf7563582b4bce247524472a5b0b13e04287->leave($__internal_74a6b13f5f4d31de5ee0a391ba0edf7563582b4bce247524472a5b0b13e04287_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_cff158c7ba505b9b8d87cdb7d031ebf6fa231913602ed843dc6ffb46af9485e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cff158c7ba505b9b8d87cdb7d031ebf6fa231913602ed843dc6ffb46af9485e0->enter($__internal_cff158c7ba505b9b8d87cdb7d031ebf6fa231913602ed843dc6ffb46af9485e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_a12fba2cac73ea6ad213516f8d7d628f4869f26a828a2f4dc94dd96e9327aba0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a12fba2cac73ea6ad213516f8d7d628f4869f26a828a2f4dc94dd96e9327aba0->enter($__internal_a12fba2cac73ea6ad213516f8d7d628f4869f26a828a2f4dc94dd96e9327aba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_a12fba2cac73ea6ad213516f8d7d628f4869f26a828a2f4dc94dd96e9327aba0->leave($__internal_a12fba2cac73ea6ad213516f8d7d628f4869f26a828a2f4dc94dd96e9327aba0_prof);

        
        $__internal_cff158c7ba505b9b8d87cdb7d031ebf6fa231913602ed843dc6ffb46af9485e0->leave($__internal_cff158c7ba505b9b8d87cdb7d031ebf6fa231913602ed843dc6ffb46af9485e0_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_17b4ed31cb0057aaef404d54f19a475c56ca147aad9e076fd14c9c4fb2c6b440 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17b4ed31cb0057aaef404d54f19a475c56ca147aad9e076fd14c9c4fb2c6b440->enter($__internal_17b4ed31cb0057aaef404d54f19a475c56ca147aad9e076fd14c9c4fb2c6b440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_56f0c675c8a2573981e5e04f5111a7702b780da56fc866bcceb037684552d2f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56f0c675c8a2573981e5e04f5111a7702b780da56fc866bcceb037684552d2f2->enter($__internal_56f0c675c8a2573981e5e04f5111a7702b780da56fc866bcceb037684552d2f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_56f0c675c8a2573981e5e04f5111a7702b780da56fc866bcceb037684552d2f2->leave($__internal_56f0c675c8a2573981e5e04f5111a7702b780da56fc866bcceb037684552d2f2_prof);

        
        $__internal_17b4ed31cb0057aaef404d54f19a475c56ca147aad9e076fd14c9c4fb2c6b440->leave($__internal_17b4ed31cb0057aaef404d54f19a475c56ca147aad9e076fd14c9c4fb2c6b440_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_ba0980b39ec983a1bd054a0d1eb5c6db72aba84c87f1482febbd9baf197cb169 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba0980b39ec983a1bd054a0d1eb5c6db72aba84c87f1482febbd9baf197cb169->enter($__internal_ba0980b39ec983a1bd054a0d1eb5c6db72aba84c87f1482febbd9baf197cb169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_881ff38c1e35db2a6fa1b38de10b633a55af36011d485cfeaba7c1fb6bc76c33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_881ff38c1e35db2a6fa1b38de10b633a55af36011d485cfeaba7c1fb6bc76c33->enter($__internal_881ff38c1e35db2a6fa1b38de10b633a55af36011d485cfeaba7c1fb6bc76c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_881ff38c1e35db2a6fa1b38de10b633a55af36011d485cfeaba7c1fb6bc76c33->leave($__internal_881ff38c1e35db2a6fa1b38de10b633a55af36011d485cfeaba7c1fb6bc76c33_prof);

        
        $__internal_ba0980b39ec983a1bd054a0d1eb5c6db72aba84c87f1482febbd9baf197cb169->leave($__internal_ba0980b39ec983a1bd054a0d1eb5c6db72aba84c87f1482febbd9baf197cb169_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_05629d828ec6fea78b73abc02a9b8f4fb1e4b1020b1475ff6b2a90b6ffeec53c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05629d828ec6fea78b73abc02a9b8f4fb1e4b1020b1475ff6b2a90b6ffeec53c->enter($__internal_05629d828ec6fea78b73abc02a9b8f4fb1e4b1020b1475ff6b2a90b6ffeec53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_a7d5eb4d3ba9c126b5a4fa19a7b2b1ea53a9b1c59dc172c06360e3135415be51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7d5eb4d3ba9c126b5a4fa19a7b2b1ea53a9b1c59dc172c06360e3135415be51->enter($__internal_a7d5eb4d3ba9c126b5a4fa19a7b2b1ea53a9b1c59dc172c06360e3135415be51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_a7d5eb4d3ba9c126b5a4fa19a7b2b1ea53a9b1c59dc172c06360e3135415be51->leave($__internal_a7d5eb4d3ba9c126b5a4fa19a7b2b1ea53a9b1c59dc172c06360e3135415be51_prof);

        
        $__internal_05629d828ec6fea78b73abc02a9b8f4fb1e4b1020b1475ff6b2a90b6ffeec53c->leave($__internal_05629d828ec6fea78b73abc02a9b8f4fb1e4b1020b1475ff6b2a90b6ffeec53c_prof);

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
