<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_e95f75826dc9efff97ed9f00f92a8f716916a9755ed81f906136c46530d09923 extends Twig_Template
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
        $__internal_f162956ccb14e0074ca664312556aee0351b147f4834c2bfcb7c96eeac7b900a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f162956ccb14e0074ca664312556aee0351b147f4834c2bfcb7c96eeac7b900a->enter($__internal_f162956ccb14e0074ca664312556aee0351b147f4834c2bfcb7c96eeac7b900a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_c3378e1c9cb2f81019ff0d23dc24d28165e3a2a688450819060cf565a1431c2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3378e1c9cb2f81019ff0d23dc24d28165e3a2a688450819060cf565a1431c2b->enter($__internal_c3378e1c9cb2f81019ff0d23dc24d28165e3a2a688450819060cf565a1431c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_f162956ccb14e0074ca664312556aee0351b147f4834c2bfcb7c96eeac7b900a->leave($__internal_f162956ccb14e0074ca664312556aee0351b147f4834c2bfcb7c96eeac7b900a_prof);

        
        $__internal_c3378e1c9cb2f81019ff0d23dc24d28165e3a2a688450819060cf565a1431c2b->leave($__internal_c3378e1c9cb2f81019ff0d23dc24d28165e3a2a688450819060cf565a1431c2b_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_46758c05e211183bbf85aaf6b25832843fec87e38651e3262ad56206df324863 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46758c05e211183bbf85aaf6b25832843fec87e38651e3262ad56206df324863->enter($__internal_46758c05e211183bbf85aaf6b25832843fec87e38651e3262ad56206df324863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_d5268c87c229943672f4b4b64ca7c541f4efc7df9a23e230fefd9deb05e77ffa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5268c87c229943672f4b4b64ca7c541f4efc7df9a23e230fefd9deb05e77ffa->enter($__internal_d5268c87c229943672f4b4b64ca7c541f4efc7df9a23e230fefd9deb05e77ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_d5268c87c229943672f4b4b64ca7c541f4efc7df9a23e230fefd9deb05e77ffa->leave($__internal_d5268c87c229943672f4b4b64ca7c541f4efc7df9a23e230fefd9deb05e77ffa_prof);

        
        $__internal_46758c05e211183bbf85aaf6b25832843fec87e38651e3262ad56206df324863->leave($__internal_46758c05e211183bbf85aaf6b25832843fec87e38651e3262ad56206df324863_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_ca2711d35facb003267649b88b1560850f56b047fabfb421d02ff41e408c9d88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca2711d35facb003267649b88b1560850f56b047fabfb421d02ff41e408c9d88->enter($__internal_ca2711d35facb003267649b88b1560850f56b047fabfb421d02ff41e408c9d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_75d353fca6827e205b1af7a937ad153b0a53f38278325c23dd433ab5e3891c9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75d353fca6827e205b1af7a937ad153b0a53f38278325c23dd433ab5e3891c9c->enter($__internal_75d353fca6827e205b1af7a937ad153b0a53f38278325c23dd433ab5e3891c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_75d353fca6827e205b1af7a937ad153b0a53f38278325c23dd433ab5e3891c9c->leave($__internal_75d353fca6827e205b1af7a937ad153b0a53f38278325c23dd433ab5e3891c9c_prof);

        
        $__internal_ca2711d35facb003267649b88b1560850f56b047fabfb421d02ff41e408c9d88->leave($__internal_ca2711d35facb003267649b88b1560850f56b047fabfb421d02ff41e408c9d88_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_628d8441b244cb3d9ae351216845c90225a114aa1f517ee4785fa0b6cf77db2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_628d8441b244cb3d9ae351216845c90225a114aa1f517ee4785fa0b6cf77db2d->enter($__internal_628d8441b244cb3d9ae351216845c90225a114aa1f517ee4785fa0b6cf77db2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_8f74c4f968f534bb6a1b5fe89abe7c390bb4f18d89c76d590ee8fd169b45ac68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f74c4f968f534bb6a1b5fe89abe7c390bb4f18d89c76d590ee8fd169b45ac68->enter($__internal_8f74c4f968f534bb6a1b5fe89abe7c390bb4f18d89c76d590ee8fd169b45ac68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_8f74c4f968f534bb6a1b5fe89abe7c390bb4f18d89c76d590ee8fd169b45ac68->leave($__internal_8f74c4f968f534bb6a1b5fe89abe7c390bb4f18d89c76d590ee8fd169b45ac68_prof);

        
        $__internal_628d8441b244cb3d9ae351216845c90225a114aa1f517ee4785fa0b6cf77db2d->leave($__internal_628d8441b244cb3d9ae351216845c90225a114aa1f517ee4785fa0b6cf77db2d_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_d3c1a538be6307c63d482cc39a44fdc83e4d33ac9afdb7338db7b74f2cb23266 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3c1a538be6307c63d482cc39a44fdc83e4d33ac9afdb7338db7b74f2cb23266->enter($__internal_d3c1a538be6307c63d482cc39a44fdc83e4d33ac9afdb7338db7b74f2cb23266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_c1eb84e2b9d645cbbaa63fb840e334ba95c6e8e9314193b2654a363138607d66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1eb84e2b9d645cbbaa63fb840e334ba95c6e8e9314193b2654a363138607d66->enter($__internal_c1eb84e2b9d645cbbaa63fb840e334ba95c6e8e9314193b2654a363138607d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_c1eb84e2b9d645cbbaa63fb840e334ba95c6e8e9314193b2654a363138607d66->leave($__internal_c1eb84e2b9d645cbbaa63fb840e334ba95c6e8e9314193b2654a363138607d66_prof);

        
        $__internal_d3c1a538be6307c63d482cc39a44fdc83e4d33ac9afdb7338db7b74f2cb23266->leave($__internal_d3c1a538be6307c63d482cc39a44fdc83e4d33ac9afdb7338db7b74f2cb23266_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_4efbd78027822c595c2f09b64ffc723fc0158377990215ba2e0a1616c7e7365e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4efbd78027822c595c2f09b64ffc723fc0158377990215ba2e0a1616c7e7365e->enter($__internal_4efbd78027822c595c2f09b64ffc723fc0158377990215ba2e0a1616c7e7365e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_6c0d7e20666cf0b7da09e8842f90e9313a65a18acd43b0b127598151e9a80348 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c0d7e20666cf0b7da09e8842f90e9313a65a18acd43b0b127598151e9a80348->enter($__internal_6c0d7e20666cf0b7da09e8842f90e9313a65a18acd43b0b127598151e9a80348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_6c0d7e20666cf0b7da09e8842f90e9313a65a18acd43b0b127598151e9a80348->leave($__internal_6c0d7e20666cf0b7da09e8842f90e9313a65a18acd43b0b127598151e9a80348_prof);

        
        $__internal_4efbd78027822c595c2f09b64ffc723fc0158377990215ba2e0a1616c7e7365e->leave($__internal_4efbd78027822c595c2f09b64ffc723fc0158377990215ba2e0a1616c7e7365e_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_9578e2d884b78113a3ba7ce2c6fb8cfba437902fdc68a452636e871b1f79b53c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9578e2d884b78113a3ba7ce2c6fb8cfba437902fdc68a452636e871b1f79b53c->enter($__internal_9578e2d884b78113a3ba7ce2c6fb8cfba437902fdc68a452636e871b1f79b53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_42bc8ae8b5377b6846850ef935489f879128ae4b1ba0864966a2e10d1ebf1b04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42bc8ae8b5377b6846850ef935489f879128ae4b1ba0864966a2e10d1ebf1b04->enter($__internal_42bc8ae8b5377b6846850ef935489f879128ae4b1ba0864966a2e10d1ebf1b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_42bc8ae8b5377b6846850ef935489f879128ae4b1ba0864966a2e10d1ebf1b04->leave($__internal_42bc8ae8b5377b6846850ef935489f879128ae4b1ba0864966a2e10d1ebf1b04_prof);

        
        $__internal_9578e2d884b78113a3ba7ce2c6fb8cfba437902fdc68a452636e871b1f79b53c->leave($__internal_9578e2d884b78113a3ba7ce2c6fb8cfba437902fdc68a452636e871b1f79b53c_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_1be64d898d2e9b68ba3f37461be073c7d9c83f11171c2954748aa15469f615fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1be64d898d2e9b68ba3f37461be073c7d9c83f11171c2954748aa15469f615fa->enter($__internal_1be64d898d2e9b68ba3f37461be073c7d9c83f11171c2954748aa15469f615fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_2aa22bd1efddafae6c0391325bceae6313d48a34a106e816076b145e9484c8b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aa22bd1efddafae6c0391325bceae6313d48a34a106e816076b145e9484c8b4->enter($__internal_2aa22bd1efddafae6c0391325bceae6313d48a34a106e816076b145e9484c8b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_2aa22bd1efddafae6c0391325bceae6313d48a34a106e816076b145e9484c8b4->leave($__internal_2aa22bd1efddafae6c0391325bceae6313d48a34a106e816076b145e9484c8b4_prof);

        
        $__internal_1be64d898d2e9b68ba3f37461be073c7d9c83f11171c2954748aa15469f615fa->leave($__internal_1be64d898d2e9b68ba3f37461be073c7d9c83f11171c2954748aa15469f615fa_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_cbc54de0dd8a8e2bd9e49a98e7726942ea38f4d3d80248797a3798f32a9b2d30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbc54de0dd8a8e2bd9e49a98e7726942ea38f4d3d80248797a3798f32a9b2d30->enter($__internal_cbc54de0dd8a8e2bd9e49a98e7726942ea38f4d3d80248797a3798f32a9b2d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_00f2814e83f0100082235d46afdd121441be24108c4435d950f31deb5899054a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00f2814e83f0100082235d46afdd121441be24108c4435d950f31deb5899054a->enter($__internal_00f2814e83f0100082235d46afdd121441be24108c4435d950f31deb5899054a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_00f2814e83f0100082235d46afdd121441be24108c4435d950f31deb5899054a->leave($__internal_00f2814e83f0100082235d46afdd121441be24108c4435d950f31deb5899054a_prof);

        
        $__internal_cbc54de0dd8a8e2bd9e49a98e7726942ea38f4d3d80248797a3798f32a9b2d30->leave($__internal_cbc54de0dd8a8e2bd9e49a98e7726942ea38f4d3d80248797a3798f32a9b2d30_prof);

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
