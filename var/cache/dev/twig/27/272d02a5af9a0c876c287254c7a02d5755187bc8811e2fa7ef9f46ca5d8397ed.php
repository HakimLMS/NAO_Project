<?php

/* bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_5db87d4d5d8514bbe3dad148daa4f348b2532089d7e9f602725fdc7822d6eee6 extends Twig_Template
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
        $__internal_dd192620b7a140690eb8d5f28fb52525f4d2e6ed217cb5f80c94e4445fc8f00f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd192620b7a140690eb8d5f28fb52525f4d2e6ed217cb5f80c94e4445fc8f00f->enter($__internal_dd192620b7a140690eb8d5f28fb52525f4d2e6ed217cb5f80c94e4445fc8f00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_9db35d5a773a026f7f2ab7fb747775a7210ab005ff25de1e26bfefaa4d3c7c65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9db35d5a773a026f7f2ab7fb747775a7210ab005ff25de1e26bfefaa4d3c7c65->enter($__internal_9db35d5a773a026f7f2ab7fb747775a7210ab005ff25de1e26bfefaa4d3c7c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

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
        
        $__internal_dd192620b7a140690eb8d5f28fb52525f4d2e6ed217cb5f80c94e4445fc8f00f->leave($__internal_dd192620b7a140690eb8d5f28fb52525f4d2e6ed217cb5f80c94e4445fc8f00f_prof);

        
        $__internal_9db35d5a773a026f7f2ab7fb747775a7210ab005ff25de1e26bfefaa4d3c7c65->leave($__internal_9db35d5a773a026f7f2ab7fb747775a7210ab005ff25de1e26bfefaa4d3c7c65_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_82deec147edc039f49e301ee8404c5f04cc12e1f748bf81b140beef3347bb0fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82deec147edc039f49e301ee8404c5f04cc12e1f748bf81b140beef3347bb0fb->enter($__internal_82deec147edc039f49e301ee8404c5f04cc12e1f748bf81b140beef3347bb0fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_77ef2eebf8ea0473e580910cd03045295f1a1bc2fec7cfade5f1422e975df22b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77ef2eebf8ea0473e580910cd03045295f1a1bc2fec7cfade5f1422e975df22b->enter($__internal_77ef2eebf8ea0473e580910cd03045295f1a1bc2fec7cfade5f1422e975df22b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_77ef2eebf8ea0473e580910cd03045295f1a1bc2fec7cfade5f1422e975df22b->leave($__internal_77ef2eebf8ea0473e580910cd03045295f1a1bc2fec7cfade5f1422e975df22b_prof);

        
        $__internal_82deec147edc039f49e301ee8404c5f04cc12e1f748bf81b140beef3347bb0fb->leave($__internal_82deec147edc039f49e301ee8404c5f04cc12e1f748bf81b140beef3347bb0fb_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_0cf06b7672eace2f5be3ac05faf219d5f34acaa854bcc70241d5e3ba4a5b4917 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cf06b7672eace2f5be3ac05faf219d5f34acaa854bcc70241d5e3ba4a5b4917->enter($__internal_0cf06b7672eace2f5be3ac05faf219d5f34acaa854bcc70241d5e3ba4a5b4917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_85c34b820cae0686e2001986f6c8c4a61c657247f6d28d501f13d408b3d84dc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85c34b820cae0686e2001986f6c8c4a61c657247f6d28d501f13d408b3d84dc8->enter($__internal_85c34b820cae0686e2001986f6c8c4a61c657247f6d28d501f13d408b3d84dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_85c34b820cae0686e2001986f6c8c4a61c657247f6d28d501f13d408b3d84dc8->leave($__internal_85c34b820cae0686e2001986f6c8c4a61c657247f6d28d501f13d408b3d84dc8_prof);

        
        $__internal_0cf06b7672eace2f5be3ac05faf219d5f34acaa854bcc70241d5e3ba4a5b4917->leave($__internal_0cf06b7672eace2f5be3ac05faf219d5f34acaa854bcc70241d5e3ba4a5b4917_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_15433507aca92cb84d1766d2b6d57d5747086889badeb560e77754aa3318b421 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15433507aca92cb84d1766d2b6d57d5747086889badeb560e77754aa3318b421->enter($__internal_15433507aca92cb84d1766d2b6d57d5747086889badeb560e77754aa3318b421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_351d620bb9f68f5fe5d3c5c15476b926753f1598b163f19223d124e7d6e70a52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_351d620bb9f68f5fe5d3c5c15476b926753f1598b163f19223d124e7d6e70a52->enter($__internal_351d620bb9f68f5fe5d3c5c15476b926753f1598b163f19223d124e7d6e70a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_351d620bb9f68f5fe5d3c5c15476b926753f1598b163f19223d124e7d6e70a52->leave($__internal_351d620bb9f68f5fe5d3c5c15476b926753f1598b163f19223d124e7d6e70a52_prof);

        
        $__internal_15433507aca92cb84d1766d2b6d57d5747086889badeb560e77754aa3318b421->leave($__internal_15433507aca92cb84d1766d2b6d57d5747086889badeb560e77754aa3318b421_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_0bee3141e7f0576e1f2e3569aa9ccef73724a89d65dd7e01deb5d0dd8831680d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bee3141e7f0576e1f2e3569aa9ccef73724a89d65dd7e01deb5d0dd8831680d->enter($__internal_0bee3141e7f0576e1f2e3569aa9ccef73724a89d65dd7e01deb5d0dd8831680d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_34b74002602f307e02324b0e39bdb9dd0ff0b29367b3a870bae5f105cbbc1a76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34b74002602f307e02324b0e39bdb9dd0ff0b29367b3a870bae5f105cbbc1a76->enter($__internal_34b74002602f307e02324b0e39bdb9dd0ff0b29367b3a870bae5f105cbbc1a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

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
        
        $__internal_34b74002602f307e02324b0e39bdb9dd0ff0b29367b3a870bae5f105cbbc1a76->leave($__internal_34b74002602f307e02324b0e39bdb9dd0ff0b29367b3a870bae5f105cbbc1a76_prof);

        
        $__internal_0bee3141e7f0576e1f2e3569aa9ccef73724a89d65dd7e01deb5d0dd8831680d->leave($__internal_0bee3141e7f0576e1f2e3569aa9ccef73724a89d65dd7e01deb5d0dd8831680d_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_4264730553d66b70cb3b85c4d7ccddfde0d0ff4ef5a0522ad7682d15f0f30e9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4264730553d66b70cb3b85c4d7ccddfde0d0ff4ef5a0522ad7682d15f0f30e9f->enter($__internal_4264730553d66b70cb3b85c4d7ccddfde0d0ff4ef5a0522ad7682d15f0f30e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_03be859b4d7355c56fe3eb1616d0d79e0cc9e4bc351140fd4d7b7b89d7d3d939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03be859b4d7355c56fe3eb1616d0d79e0cc9e4bc351140fd4d7b7b89d7d3d939->enter($__internal_03be859b4d7355c56fe3eb1616d0d79e0cc9e4bc351140fd4d7b7b89d7d3d939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_03be859b4d7355c56fe3eb1616d0d79e0cc9e4bc351140fd4d7b7b89d7d3d939->leave($__internal_03be859b4d7355c56fe3eb1616d0d79e0cc9e4bc351140fd4d7b7b89d7d3d939_prof);

        
        $__internal_4264730553d66b70cb3b85c4d7ccddfde0d0ff4ef5a0522ad7682d15f0f30e9f->leave($__internal_4264730553d66b70cb3b85c4d7ccddfde0d0ff4ef5a0522ad7682d15f0f30e9f_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_3595017fef23b426e7a6ed4f494f9bb5a92d3f0d25f9b50ec44b4ca50454eb2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3595017fef23b426e7a6ed4f494f9bb5a92d3f0d25f9b50ec44b4ca50454eb2b->enter($__internal_3595017fef23b426e7a6ed4f494f9bb5a92d3f0d25f9b50ec44b4ca50454eb2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_ff8be25e47ba6b47a0010fdae60ab04ba448a371d46d8466b7a28a5ac3ce98f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff8be25e47ba6b47a0010fdae60ab04ba448a371d46d8466b7a28a5ac3ce98f8->enter($__internal_ff8be25e47ba6b47a0010fdae60ab04ba448a371d46d8466b7a28a5ac3ce98f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_ff8be25e47ba6b47a0010fdae60ab04ba448a371d46d8466b7a28a5ac3ce98f8->leave($__internal_ff8be25e47ba6b47a0010fdae60ab04ba448a371d46d8466b7a28a5ac3ce98f8_prof);

        
        $__internal_3595017fef23b426e7a6ed4f494f9bb5a92d3f0d25f9b50ec44b4ca50454eb2b->leave($__internal_3595017fef23b426e7a6ed4f494f9bb5a92d3f0d25f9b50ec44b4ca50454eb2b_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_3ac95342655a05dcfef473e514cfbb4e18f261818c67ff30b9eabf4987d68842 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ac95342655a05dcfef473e514cfbb4e18f261818c67ff30b9eabf4987d68842->enter($__internal_3ac95342655a05dcfef473e514cfbb4e18f261818c67ff30b9eabf4987d68842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_a8a40a2263f5a132d72a5d0e19f751c05911b4f0b870fd9b709b5c8ca43265eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8a40a2263f5a132d72a5d0e19f751c05911b4f0b870fd9b709b5c8ca43265eb->enter($__internal_a8a40a2263f5a132d72a5d0e19f751c05911b4f0b870fd9b709b5c8ca43265eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_a8a40a2263f5a132d72a5d0e19f751c05911b4f0b870fd9b709b5c8ca43265eb->leave($__internal_a8a40a2263f5a132d72a5d0e19f751c05911b4f0b870fd9b709b5c8ca43265eb_prof);

        
        $__internal_3ac95342655a05dcfef473e514cfbb4e18f261818c67ff30b9eabf4987d68842->leave($__internal_3ac95342655a05dcfef473e514cfbb4e18f261818c67ff30b9eabf4987d68842_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_87a69879713b34bc11fb9e82ba4dfb27920e3729771a6aaabe66208f79735892 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87a69879713b34bc11fb9e82ba4dfb27920e3729771a6aaabe66208f79735892->enter($__internal_87a69879713b34bc11fb9e82ba4dfb27920e3729771a6aaabe66208f79735892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_5bbc306f73968da8fb913d8707d6f067e02418ec4f8f82860343b7af17f04177 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bbc306f73968da8fb913d8707d6f067e02418ec4f8f82860343b7af17f04177->enter($__internal_5bbc306f73968da8fb913d8707d6f067e02418ec4f8f82860343b7af17f04177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_5bbc306f73968da8fb913d8707d6f067e02418ec4f8f82860343b7af17f04177->leave($__internal_5bbc306f73968da8fb913d8707d6f067e02418ec4f8f82860343b7af17f04177_prof);

        
        $__internal_87a69879713b34bc11fb9e82ba4dfb27920e3729771a6aaabe66208f79735892->leave($__internal_87a69879713b34bc11fb9e82ba4dfb27920e3729771a6aaabe66208f79735892_prof);

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
", "bootstrap_4_horizontal_layout.html.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\bootstrap_4_horizontal_layout.html.twig");
    }
}
