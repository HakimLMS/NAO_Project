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
        $__internal_10b4ce86c6a1a1a0623fe2405105960e5ad919756354ec230753faecfdead655 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10b4ce86c6a1a1a0623fe2405105960e5ad919756354ec230753faecfdead655->enter($__internal_10b4ce86c6a1a1a0623fe2405105960e5ad919756354ec230753faecfdead655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_5904a5e6e710ed23be7c72d1336f74bb828d4b21d2b7f89ed12e3eae604eb05e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5904a5e6e710ed23be7c72d1336f74bb828d4b21d2b7f89ed12e3eae604eb05e->enter($__internal_5904a5e6e710ed23be7c72d1336f74bb828d4b21d2b7f89ed12e3eae604eb05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_10b4ce86c6a1a1a0623fe2405105960e5ad919756354ec230753faecfdead655->leave($__internal_10b4ce86c6a1a1a0623fe2405105960e5ad919756354ec230753faecfdead655_prof);

        
        $__internal_5904a5e6e710ed23be7c72d1336f74bb828d4b21d2b7f89ed12e3eae604eb05e->leave($__internal_5904a5e6e710ed23be7c72d1336f74bb828d4b21d2b7f89ed12e3eae604eb05e_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_e146747ef319fa1c04631594d3f3ae660f755fa00e39264df0ec723ccc5ec72a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e146747ef319fa1c04631594d3f3ae660f755fa00e39264df0ec723ccc5ec72a->enter($__internal_e146747ef319fa1c04631594d3f3ae660f755fa00e39264df0ec723ccc5ec72a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_42e4ff97b186e4ef2318bfc95c4b2fd72bfae4dbba915a4f34040a99b6956f1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42e4ff97b186e4ef2318bfc95c4b2fd72bfae4dbba915a4f34040a99b6956f1f->enter($__internal_42e4ff97b186e4ef2318bfc95c4b2fd72bfae4dbba915a4f34040a99b6956f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_42e4ff97b186e4ef2318bfc95c4b2fd72bfae4dbba915a4f34040a99b6956f1f->leave($__internal_42e4ff97b186e4ef2318bfc95c4b2fd72bfae4dbba915a4f34040a99b6956f1f_prof);

        
        $__internal_e146747ef319fa1c04631594d3f3ae660f755fa00e39264df0ec723ccc5ec72a->leave($__internal_e146747ef319fa1c04631594d3f3ae660f755fa00e39264df0ec723ccc5ec72a_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_a2c333b44dac0b98ad61380ab1aacbfdd856d01aa8a1e0d691d0f0f0619e9212 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2c333b44dac0b98ad61380ab1aacbfdd856d01aa8a1e0d691d0f0f0619e9212->enter($__internal_a2c333b44dac0b98ad61380ab1aacbfdd856d01aa8a1e0d691d0f0f0619e9212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_745928d8d2c828b5739edc88de1ba8b4baea22b7ba3b8aefaa37c6995eefe0ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_745928d8d2c828b5739edc88de1ba8b4baea22b7ba3b8aefaa37c6995eefe0ab->enter($__internal_745928d8d2c828b5739edc88de1ba8b4baea22b7ba3b8aefaa37c6995eefe0ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_745928d8d2c828b5739edc88de1ba8b4baea22b7ba3b8aefaa37c6995eefe0ab->leave($__internal_745928d8d2c828b5739edc88de1ba8b4baea22b7ba3b8aefaa37c6995eefe0ab_prof);

        
        $__internal_a2c333b44dac0b98ad61380ab1aacbfdd856d01aa8a1e0d691d0f0f0619e9212->leave($__internal_a2c333b44dac0b98ad61380ab1aacbfdd856d01aa8a1e0d691d0f0f0619e9212_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_7ede7120afa833051c2027df957e29a2fec09a805564bd5cbbfc73bd9878ad0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ede7120afa833051c2027df957e29a2fec09a805564bd5cbbfc73bd9878ad0a->enter($__internal_7ede7120afa833051c2027df957e29a2fec09a805564bd5cbbfc73bd9878ad0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_743cd045e65d82e4757ff25193c72c77c26b9a7760c944de8a25068dd2c02f31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_743cd045e65d82e4757ff25193c72c77c26b9a7760c944de8a25068dd2c02f31->enter($__internal_743cd045e65d82e4757ff25193c72c77c26b9a7760c944de8a25068dd2c02f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_743cd045e65d82e4757ff25193c72c77c26b9a7760c944de8a25068dd2c02f31->leave($__internal_743cd045e65d82e4757ff25193c72c77c26b9a7760c944de8a25068dd2c02f31_prof);

        
        $__internal_7ede7120afa833051c2027df957e29a2fec09a805564bd5cbbfc73bd9878ad0a->leave($__internal_7ede7120afa833051c2027df957e29a2fec09a805564bd5cbbfc73bd9878ad0a_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_81e7c93d59db48abb22d7ec131358b1c9e9092ce2891cfabec5216589854f47a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81e7c93d59db48abb22d7ec131358b1c9e9092ce2891cfabec5216589854f47a->enter($__internal_81e7c93d59db48abb22d7ec131358b1c9e9092ce2891cfabec5216589854f47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_acdb228c56bdaaf81a422a4e3cd9dd31c40e69412b9d8469d3748533d4d7b58f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acdb228c56bdaaf81a422a4e3cd9dd31c40e69412b9d8469d3748533d4d7b58f->enter($__internal_acdb228c56bdaaf81a422a4e3cd9dd31c40e69412b9d8469d3748533d4d7b58f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_acdb228c56bdaaf81a422a4e3cd9dd31c40e69412b9d8469d3748533d4d7b58f->leave($__internal_acdb228c56bdaaf81a422a4e3cd9dd31c40e69412b9d8469d3748533d4d7b58f_prof);

        
        $__internal_81e7c93d59db48abb22d7ec131358b1c9e9092ce2891cfabec5216589854f47a->leave($__internal_81e7c93d59db48abb22d7ec131358b1c9e9092ce2891cfabec5216589854f47a_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_1f54360da6158484422fa2b58fa1c1c99969bf8f2cd01bc2ec15b51fd7d4c7fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f54360da6158484422fa2b58fa1c1c99969bf8f2cd01bc2ec15b51fd7d4c7fd->enter($__internal_1f54360da6158484422fa2b58fa1c1c99969bf8f2cd01bc2ec15b51fd7d4c7fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_ccce9c06dd01c53ff089cc66e2593032b3f8701ce0607035e7366c2a973ccfd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccce9c06dd01c53ff089cc66e2593032b3f8701ce0607035e7366c2a973ccfd9->enter($__internal_ccce9c06dd01c53ff089cc66e2593032b3f8701ce0607035e7366c2a973ccfd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_ccce9c06dd01c53ff089cc66e2593032b3f8701ce0607035e7366c2a973ccfd9->leave($__internal_ccce9c06dd01c53ff089cc66e2593032b3f8701ce0607035e7366c2a973ccfd9_prof);

        
        $__internal_1f54360da6158484422fa2b58fa1c1c99969bf8f2cd01bc2ec15b51fd7d4c7fd->leave($__internal_1f54360da6158484422fa2b58fa1c1c99969bf8f2cd01bc2ec15b51fd7d4c7fd_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_d9452abfa6b2e19cdc5678da3b4eb7c2a10021d12170fd53a060239e9550ff85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9452abfa6b2e19cdc5678da3b4eb7c2a10021d12170fd53a060239e9550ff85->enter($__internal_d9452abfa6b2e19cdc5678da3b4eb7c2a10021d12170fd53a060239e9550ff85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_c3c4207f6b1b4dd98b1ea90cd99b0810dea932ea48be9a62f84c8d5b2d65ca3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3c4207f6b1b4dd98b1ea90cd99b0810dea932ea48be9a62f84c8d5b2d65ca3b->enter($__internal_c3c4207f6b1b4dd98b1ea90cd99b0810dea932ea48be9a62f84c8d5b2d65ca3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_c3c4207f6b1b4dd98b1ea90cd99b0810dea932ea48be9a62f84c8d5b2d65ca3b->leave($__internal_c3c4207f6b1b4dd98b1ea90cd99b0810dea932ea48be9a62f84c8d5b2d65ca3b_prof);

        
        $__internal_d9452abfa6b2e19cdc5678da3b4eb7c2a10021d12170fd53a060239e9550ff85->leave($__internal_d9452abfa6b2e19cdc5678da3b4eb7c2a10021d12170fd53a060239e9550ff85_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_892d315d187904d61cc43e56fe5f1a5611fcf96bbe0bde1fedb3d31ac5271a04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_892d315d187904d61cc43e56fe5f1a5611fcf96bbe0bde1fedb3d31ac5271a04->enter($__internal_892d315d187904d61cc43e56fe5f1a5611fcf96bbe0bde1fedb3d31ac5271a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_d28a4e650392a1d241830d899a038ec444373067fd1eb113109025085f261cdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d28a4e650392a1d241830d899a038ec444373067fd1eb113109025085f261cdd->enter($__internal_d28a4e650392a1d241830d899a038ec444373067fd1eb113109025085f261cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_d28a4e650392a1d241830d899a038ec444373067fd1eb113109025085f261cdd->leave($__internal_d28a4e650392a1d241830d899a038ec444373067fd1eb113109025085f261cdd_prof);

        
        $__internal_892d315d187904d61cc43e56fe5f1a5611fcf96bbe0bde1fedb3d31ac5271a04->leave($__internal_892d315d187904d61cc43e56fe5f1a5611fcf96bbe0bde1fedb3d31ac5271a04_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_ee467573c46e3d8ca8f041e9171c5501dd96be1c132d0daabfdd8b6355cbb5fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee467573c46e3d8ca8f041e9171c5501dd96be1c132d0daabfdd8b6355cbb5fe->enter($__internal_ee467573c46e3d8ca8f041e9171c5501dd96be1c132d0daabfdd8b6355cbb5fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_7d89abb38e00dd160339fa438fd3a6c472b3e0cd0af4b1da61d0fa2d2815708e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d89abb38e00dd160339fa438fd3a6c472b3e0cd0af4b1da61d0fa2d2815708e->enter($__internal_7d89abb38e00dd160339fa438fd3a6c472b3e0cd0af4b1da61d0fa2d2815708e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_7d89abb38e00dd160339fa438fd3a6c472b3e0cd0af4b1da61d0fa2d2815708e->leave($__internal_7d89abb38e00dd160339fa438fd3a6c472b3e0cd0af4b1da61d0fa2d2815708e_prof);

        
        $__internal_ee467573c46e3d8ca8f041e9171c5501dd96be1c132d0daabfdd8b6355cbb5fe->leave($__internal_ee467573c46e3d8ca8f041e9171c5501dd96be1c132d0daabfdd8b6355cbb5fe_prof);

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
{%- endblock checkbox_row %}", "bootstrap_3_horizontal_layout.html.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\bootstrap_3_horizontal_layout.html.twig");
    }
}
